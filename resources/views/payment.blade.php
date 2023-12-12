<!DOCTYPE html>
<html lang="en-US">
@php header('Access-Control-Allow-Origin: *'); @endphp

@include('partials.web-header-new')

<body
    class="page-template page-template-elementor_canvas page page-id-13 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-13 success">
    @include('partials.menu')
    <form id="payment-form">
        <div class="col-md-8 card mt-5 mb-5">
            <div class="py-12">
                @csrf
                <input type="hidden" name="call_id" value="{{ $call_data->id }}" id="call_id">
                <input type="hidden" name="price" value="{{ $call_data->mentor->metaData->price_per_call }}" id="price">
                <button id="google-pay-button">Pay with Google</button>
            </div>
        </div>
    </form>
    <script src="https://pay.google.com/gp/p/js/pay.js" onload="onGooglePayLoaded()"></script>
    <script>
    var price = $('#price').val();

    const paymentDataRequest = {
        apiVersion: 2,
        apiVersionMinor: 0,
        allowedPaymentMethods: [{
            type: 'CARD',
            parameters: {
                allowedAuthMethods: ['PAN_ONLY', 'CRYPTOGRAM_3DS'],
                allowedCardNetworks: ["AMEX", "DISCOVER", "INTERAC", "JCB", "MASTERCARD", "VISA"],

            },
            tokenizationSpecification: {
                type: 'PAYMENT_GATEWAY',
                parameters: {
                    gateway: 'acceptblue',
                    gatewayMerchantId: 'BCR2DN4T3HN7LXCE'
                }
            }
        }],

        billingAddressRequired: true,
        "billingAddressParameters": {
            "format": "FULL",
            "phoneNumberRequired": false
        },
        merchantInfo: {
            merchantId: 'BCR2DN4T3HN7LXCE',
            merchantName: 'wiseAdvizor'
        },
        transactionInfo: {
            totalPriceStatus: 'FINAL',
            totalPriceLabel: 'Total',
            totalPrice: price,
            currencyCode: 'USD',
            countryCode: 'US'
        }
    };

    const paymentsClient = new google.payments.api.PaymentsClient({
        environment: 'TEST' // Change to 'PRODUCTION' for live transactions
    });

    document.getElementById('google-pay-button').addEventListener('click', () => {
        const paymentDataRequestWithParameters = Object.assign({}, paymentDataRequest);
        paymentDataRequestWithParameters.transactionInfo.totalPrice = price; // Update with your actual price

        paymentsClient.loadPaymentData(paymentDataRequestWithParameters)
            .then((paymentData) => {
                // Send the payment data to the server for processing
                fetch('/token', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            paymentToken: paymentData.paymentMethodData.tokenizationData.token
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Handle the server response
                        console.log(data);
                    })
                    .catch(error => {
                        // Handle errors
                        console.error(error);
                    });
            })
            .catch((error) => {
                // Handle errors
                console.error(error);
            });
    });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/65046147b1aaa13b7a770b04/1hacho0lm';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
</body>
<style>
.card {
    border: 0;
    margin-left: 250px;
}

i.fas.fa-bell.fa-2xl {
    font-size: 32px !important;
}

.text-center {
    padding: 50px 50px 50px 50px;
}

.scheduled {
    color: white;
}

@media(max-width:480px) {
    p {
        font-family: "Roboto,Helvetica,Arial,sans-serif";
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-ancestor a.hfe-menu-item {
        color: white !important;
    }
}
</style>

</html>