<!DOCTYPE html>
<html lang="en-US">
@php header('Access-Control-Allow-Origin: *'); @endphp

@include('partials.web-header-new')

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>

<body
    class="page-template page-template-elementor_canvas page page-id-13 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-13 success">
    @include('partials.menu')
    <form id="payment-form">
        <div class="col-md-8 card mt-5 mb-5">
            <div class="py-12">
                <div class="card-body text-center">
                    <h4><b>Payment Summary</b></h4>
                    <div class="rounded-circle mt-5">
                        <a href="{{ route('profile', [ $call_data->mentor ?  $call_data->mentor->id : '']) }}">
                            <img class="rounded-circle" decoding="async"
                                src="{{ asset('public/assets/img/').'/'. $call_data->mentor->metaData->profile_pic }}"
                                alt="Mentor" width="100" height="100">
                        </a>
                    </div>
                    <div class="card_carousel_title"> {{ $call_data->mentor ?  $call_data->mentor->name : '' }}</div>
                    <h5>30 Min Meeting</h5>
                    <h6 class="card-title price">${{ $call_data->mentor->metaData->price_per_call }}</h6>
                    @csrf
                    <div class="input-group"><input type="text" class="form-control coupon" id="discount_code"
                            name="discount_code" placeholder="Enter the Promo Code"> <span class="input-group-append">
                            <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                    <!-- <input type="text" name="discount_code" class="form-control" id="discount_code"
                        placeholder="Enter the Promo Code"> -->
                    <input type="hidden" name="call_id" value="{{ $call_data->id }}" id="call_id">
                    <input type="hidden" name="price" value="{{ $call_data->mentor->metaData->price_per_call }}"
                        id="price">
                    <div id="paypal_button_container" class="mt-5"></div>
                </div>
            </div>
        </div>
    </form>
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

    <?php
                  $d2 = new Datetime("now");
                  $order_no="order".$d2->format('U');
                  $call_id = $call_data->id;
                  // Get the last order id
    ?>

    <script>
    // Render the PayPal button into #paypal_button_container

    paypal.Buttons({

        // Set up the transaction

        createOrder: function(data, actions) {
            let amount = $("#price").val();
            let call_id = $("#call_id").val();
            let coupon = $("#discount_code").val();
            let dataBody = {
                'order_no': '{{ $order_no }}',
                'amount': amount,
                'call_id': call_id,
                'coupon': coupon
            }
            console.log("dataBody is", dataBody);

            return fetch('/payment/paypal/createTransaction', {
                method: 'post',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    'order_no': '{{ $order_no }}',
                    'amount': amount,
                    'call_id': call_id,
                    'coupon': coupon
                })
            }).then(function(res) {
                console.log("response ", res);
                return res.json();
            }).then(function(paypalTxnData) {
                console.log("paypal txn data ", paypalTxnData);
                return paypalTxnData.id;
            }).catch(function(err) {
                console.error("error in create transaction ", err);
            });
        },

        // Finalize the transaction
        onApprove: function(data, actions) {
            let amount = $("#price").val();
            let call_id = $("#call_id").val();
            let coupon = $("#discount_code").val();

            console.log("on approve", data);
            return fetch('/payment/paypal/capture/{{ $order_no }}', {
                method: 'post',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    'data': data,
                    'call_id': call_id,
                    'coupon': coupon
                }),
            }).then(function(res) {
                return res.json();
            }).then(function(orderData) {

                // Three cases to handle:
                //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                //   (2) Other non-recoverable errors -> Show a failure message
                //   (3) Successful transaction -> Show confirmation or thank you

                // This example reads a v2/checkout/orders capture response, propagated from the server
                // You could use a different API or structure for your 'orderData'
                var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

                if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                    return actions.restart(); // Recoverable state, per:
                    // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
                }

                if (errorDetail) {
                    var msg = 'Sorry, your transaction could not be processed.';
                    if (errorDetail.description) msg += '\n\n' + errorDetail.description;
                    if (orderData.debug_id) msg += '(' + orderData.debug_id + ')';
                    $.ajax({
                        type: "POST",
                        url: '{{ route("order.cancel") }}',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {
                            "order_no": {{ $order_no }},
                            "call_id": call_id,
                            'coupon': coupon
                        },
                        success: function(response) {
                            if (response.status == 'SUCCESS') {

                                swal("Cancelled!", "Your Order cancelled!", "success");

                                window.location.href = "";

                            } else {
                                swal("Oops!",
                                    "Your Order cancellation Failed. Please contact Team!",
                                    "error");
                                window.location.href = "";
                            }
                        }
                    });
                    console.log(msg);
                    return; // Show a failure message (try to avoid alerts in production environments)
                }


                // Successful capture! For demo purposes:

                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                window.location.href = "{{ route('success', $call_id) }}";

                // else {
                //     console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                //     var transaction = orderData.purchase_units[0].payments.captures[0];
                //       return $.ajax({
                //         type: "POST",
                //         url: '{{ route("success") }}',
                //         headers: {
                //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
                //         },
                //         data: {
                //             "order_no": {{ $order_no }},
                //             "call_id": call_id,
                //             "transaction": transaction
                //         },
                //         success: function(response) {
                //             $('.payment-page').html(response);
                //         }
                //       });
                // }
            });
        },
        onCancel: function(data) {
            console.log("oncancel data", data);
            fetch('/cancel/{{ $order_no }}', {
                method: 'post',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data),
            }).then(function(res) {
                console.log("cancel response is ", res.json());
                swal("Cancelled!", "Your Order cancelled!", "error");
                window.location.href = "{{URL('/')}}";
            })
        },
        onError: function(err) {
            console.log("on error data", err);
        },
        onInit: function(data, actions) {
            console.log("on init", JSON.stringify(data));
        },
    }).render('#paypal_button_container');
    </script>
       <script>
                $('.coupon').on('click', function() {
                    var coupon = $('#discount_code').val();
                    $.ajax({
                        type: "POST",
                        url: '{{ route("coupon.redeem") }}',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {
                            "coupon": coupon
                        },
                        success: function(response) {
                           $('.price').html(response);
                        }
                    });
               });
      </script>
</body>
<style>
.coupon {
    border-radius: 1px;
}

.form-control,
.form-control:focus {
    width: 25%;
    /* margin-left: 350px; */
    transition: all .1s linear;
    box-shadow: none;
}

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

#paypal_button_container {
    padding-left: 75px;
}
</style>

</html>