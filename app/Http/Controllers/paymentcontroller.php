<?php

namespace App\Http\Controllers;

use App\Models\AvailableSchedule;
use App\Models\ScheduledCall;
use App\Models\UserMeta;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use App\Order;
use App\OrderItem;
use App\Http\Controllers\CommonController;
use App\Jobs\StoreOrderPlacedEmailSender;
use App\Jobs\StoreOrderCancelledEmailSender;
use App\Http\Controllers\ShopController;
use Redirect;
use Session;
use URL;
use Log;
use DB;
require_once '../vendor/autoload.php';

class PaymentController extends Controller
{
    private $_token_response;
    private $_paypalApiUrl;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        /** PayPal api context **/
        $paypal_conf = Config::get('paypal');
        // Creating an environment
        $clientId = env('PAYPAL_SANDBOX_CLIENT');
        $clientSecret = env('PAYPAL_SANDBOX_CLIENT_SECRET');
        $this->_paypalApiUrl = "https://api-m.sandbox.paypal.com/";
        $params = ['name' => $clientId, 'surname' => $clientSecret];
        $ch = curl_init($this->_paypalApiUrl . "v1/oauth2/token");
        curl_setopt($ch, CURLOPT_POST, 1);
        $headers = array(
            'Content-Type: application/json',
            'Accept: application/json',
            'Authorization: Basic ' . base64_encode($clientId . ":" . $clientSecret)
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, rawurldecode(http_build_query(array(
            'grant_type' => 'client_credentials'
        ))));
        $this->_token_response = json_decode(curl_exec($ch));
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        Log::info('token generation status: ' . $status . 'response' . gettype($this->_token_response));
    }


    public function payWithpaypal(Request $request)
    {
        $paypal_config = Config::get('paypal');
        $paypalApiUrl = "https://api-m.sandbox.paypal.com/";
        $order_no = $request->order_no;

        if ($request->coupon) {

        }
        $amount = $request->amount;
        $ch = curl_init($this->_paypalApiUrl . "v2/checkout/orders");
        curl_setopt($ch, CURLOPT_POST, 1);
        $headers = array(
            'Content-Type: application/json',
            'Accept: application/json',
            'Authorization: Bearer ' . $this->_token_response->access_token
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{
            "intent": "CAPTURE",
            "purchase_units": [
              {
                "amount": {
                  "currency_code": "' . $paypal_config['currency'] . '",
                  "value": "' . $amount . '"
                }
              }
            ]
          }');
        $_order_response = json_decode(curl_exec($ch), true);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        Log::info('order generation response: ' . $status . 'response' . gettype($_order_response));
        return response()->json($_order_response);
    }

    public function getPaymentStatus(Request $request)
    {
        dd($request->all());
        $data = $request->data;
        $payerId = $data['payerID'];
        $paypalOrderId = $data['orderID'];
        $facilitorAccessToken = $data['facilitatorAccessToken'];
        log::info('facilitorAccessToken is' . $facilitorAccessToken);
        $ch = curl_init($this->_paypalApiUrl . "v2/checkout/orders/" . $paypalOrderId . "/capture");
        curl_setopt($ch, CURLOPT_POST, 1);

        $headers = array(
            'Content-Type: application/json',
            'Accept: application/json',
            'Authorization: Bearer ' . $this->_token_response->access_token,
            'PayPal-Request-Id:' . $facilitorAccessToken
        );
        log::info('order_no' . $paypalOrderId . 'facilitortoken' . $facilitorAccessToken);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $_capture_response = json_decode(curl_exec($ch), true, 512);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        
        Log::info($_capture_response);

        Log::info($paypalOrderId);
        Log::info('order capture data : ' . $status . 'for' . $facilitorAccessToken . 'response' . gettype($_capture_response['purchase_units'][0]['payments']['captures']));

        return response()->json($_capture_response);
    }

    public function orderCancel(Request $request)
    {
        Log::info($request->all());
        return json_encode(array('statusMsg' => "SUCCESS"), JSON_FORCE_OBJECT);
    }

    public function redeem(Request $request)
    {
        $mentor = UserMeta::where('user_id', $request->mentor_id)->first();
        $voucher = Voucher::where('name', $request->coupon)->where('mentor_id', $request->mentor_id)->first();

        if($voucher->discount_type == "fixed") {
            $price =  $mentor->price_per_call - $voucher->discount_value;
        }
        else {
            $price =  $mentor->price_per_call - $mentor->price_per_call * $voucher->discount_value/100;
        }

        return response()->json('$ '.$price);
    }


    public function checkout(Request $request)
    {
        $clientSecret = env('STRIPE_SECRET_KEY');

        \Stripe\Stripe::setApiKey($clientSecret);
           header('Content-Type: application/json');

        $YOUR_DOMAIN = 'https://wiseadvizor.com';

        $checkout_session = \Stripe\Checkout\Session::create([
          'line_items' => [[
             # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
          'price' => $request->price,
          'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => route('success'),
        'cancel_url' => route('cancel'),
        ]);

       header("HTTP/1.1 303 See Other");
       header("Location: " . $checkout_session->url);
    }

    public function cancel()
    {

    }
}