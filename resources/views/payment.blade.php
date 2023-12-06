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
                <div id="dropin-container"></div>
                <!-- <input type="hidden" id="nonce" name="payment_method_nonce"> -->
                <input type="hidden" name="call_id" value="{{ $call_data->id }}" id="call_id">
                <div style="display: flex;justify-content: center;align-items: center; color: white">
                    <button type="submit" class="btn btn-sm btn-success mb-5" id="submit-button">Pay Now</button>
                </div>
            </div>
        </div>
    </form>

    <!-- <div id="dropin-container" style="display: flex;justify-content: center;align-items: center;"></div>
    <div style="display: flex;justify-content: center;align-items: center; color: white">
        <a id="submit-button" class="btn btn-sm btn-success mb-5">Pay Now</a>
    </div> -->
    <script src="https://js.braintreegateway.com/web/dropin/1.40.2/js/dropin.min.js"></script>
    <script>
        var button = document.querySelector('#submit-button');
        var client_token = "{{$clientToken}}";

        braintree.dropin.create({
          authorization: client_token,
          selector: '#dropin-container',
        //   paypal: {
        //     flow: 'vault'
        //   }
        }, function (createErr, instance) {
          if (createErr) {
            console.log('Create Error', createErr);
            return;
          }
          button.addEventListener('click', function (event) {
            event.preventDefault();

            instance.requestPaymentMethod(function (err, payload) {
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                return $.ajax("https://wiseadvizor.com/token", {
                    method: 'POST',
                    data: {
                        nonce : payload.nonce,
                        call_id : $('#call_id').val()
                    },
                    success: function (response) {
                        $('.payment-page').html(response);
                    },
                    error: function (response) {
                        $('.payment-page').html(response);
                    }
                });
              });
            });
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