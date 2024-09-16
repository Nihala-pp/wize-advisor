<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Payment Summary</title>
    <link rel="stylesheet" href="{{ asset('public/assets/css/checkout.css') }}">
    <script src="https://js.stripe.com/v3/"></script>
</head>

<body
    class="page-template page-template-elementor_canvas page page-id-13 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-13 success">
    @include('partials.header-common')

    <section>
        <div class="product">
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
        </div>
        <form action="{{ route('checkout') }}" method="POST">
            @csrf
            <input type="hidden" name="call_id" value="{{ $call_data->id }}" id="call_id">
            <input type="hidden" name="mentor_id" value="{{ $call_data->mentor_id }}" id="mentor_id">
            <input type="hidden" name="price" value="{{ $call_data->mentor->metaData->price_per_call }}" id="price">
            <button type="submit" id="checkout-button">Checkout</button>
        </form>
    </section>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.defer = true;
        s1.src = 'https://embed.tawk.to/65046147b1aaa13b7a770b04/1hacho0lm';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <script>
    $('.coupon_code').on('click', function() {
        var coupon = $('#discount_code').val();
        let mentor_id = $("#mentor_id").val();

        $.ajax({
            type: "POST",
            url: '{{ route("coupon.redeem") }}',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                "coupon": coupon,
                'mentor_id': mentor_id
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

.coupon_code {}


.card {
    /* border: 0; */
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

    .elementor-3007 .elementor-element.elementor-element-aea4c40>.elementor-widget-container {
        padding: 15px 0px 0px 0px;
    }

    .text-center {
        padding: 20px !important;
    }
}

@media(max-width:1024px) {

    .card {
        /* border: 0; */
        margin-left: 175px;
    }

    .input-group {
        width: 40%;
        margin-left: 200px;
        transition: all .1s linear;
        box-shadow: none;
    }

    input,
    input::-webkit-input-placeholder {
        font-size: 7px;
    }

    /* header*/

    .elementor-3007 .elementor-element.elementor-element-4bc8cfa>.elementor-widget-container {
        padding: 25px 10px 0px 0px;
        margin-left: -60px;
    }

    .wp-image-624 {
        width: 100%;
        height: 15.02%;
        max-width: 150px !important;
    }

    /* .elementor-5225 .elementor-element.elementor-element-13dfc598 .elementor-heading-title {
        font-size: 40px;
        padding-left: 20px;
    } */

    dl,
    ol,
    ul {
        margin-top: 0;
        margin-bottom: 1rem;
        margin-left: 20px;
    }

    .menu-item .menu-item-type-post_type .menu-item-object-page .menu-item-has-children .parent .hfe-has-submenu .hfe-creative-menu .parent-has-child {
        background-color: #fff !important;
    }

    .elementor-3007 .elementor-element.elementor-element-78270f3 .elementor-button {
        font-family: "Helvetica", Sans-serif;
        font-size: 10px;
        margin-right: 15px;
        font-weight: 400;
        background-color: transparent;
        background-image: linear-gradient(90deg, var(--e-global-color-1e1892c) 0%, var(--e-global-color-1e1892c) 100%);
        border-style: none;
        border-radius: 7px 7px 7px 7px;
    }

    .elementor-3007 .elementor-element.elementor-element-4bc8cfa .elementor-button {
        font-family: "Helvetica", Sans-serif;
        font-size: 10px;
        font-weight: 400;
        background-color: transparent;
        background-image: linear-gradient(90deg, var(--e-global-color-1e1892c) 0%, var(--e-global-color-1e1892c) 100%);
        border-style: none;
        border-radius: 7px 7px 7px 7px;
    }

    .elementor-3007 .elementor-element.elementor-element-cf19fcc:not(.elementor-motion-effects-element-type-background),
    .elementor-3007 .elementor-element.elementor-element-cf19fcc>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #FFFFFF;
    }
}

@media(max-width:820px) {

    .input-group {
        width: 40%;
        margin-left: 135px;
        transition: all .1s linear;
        box-shadow: none;
    }

    .card {
        margin-left: 140px;
    }

    input,
    input::-webkit-input-placeholder {
        font-size: 7px;
    }
}

@media (max-width: 767px) {

    .elementor-32 .elementor-element.elementor-element-540d2d1>.elementor-widget-container {
        padding: 0px 20px 10px 100px;
    }

    .text-center {
        padding: 20px !important;
    }

    .rounded-circle {
        border-radius: 50% !important;
        margin-top: 0px !important;
    }

    .card {
        /* border: 0; */
        margin-left: 0px;
    }

    .input-group {
        margin-right: 150px !important;
        width: 75%;
        margin-left: 50px;
        transition: all .1s linear;
        box-shadow: none;
    }

    input,
    input::-webkit-input-placeholder {
        font-size: 10px;
    }

    .text-center {
        padding: 0px;
    }

    #paypal_button_container {
        padding-left: 5px !important;
    }

    .elementor-3007 .elementor-element.elementor-element-aea4c40>.elementor-widget-container {
        padding: 15px 0px 0px 0px;
    }

    /* .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
        background-color: #fff;
        color: #001E64;
    } */

    .elementor-button.elementor-size-xs {
        font-size: 12px;
        /* padding: 10px 20px; */
        border-radius: 7px;
        margin: 10px;
    }

    .elementor-button {
        display: inline-block;
        line-height: 1;
        background-color: #001E64;
        /* font-size: 15px; */
        /* padding: 12px 24px; */
        /* border-radius: 3px; */
        /* color: #fff; */
        fill: #fff;
        text-align: center;
        transition: all .3s;
    }

    /* .elementor-3007 .elementor-element.elementor-element-f871cda {
        width: 30%;
    }

    .elementor-3007 .elementor-element.elementor-element-094a417 {
        width: 50%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669 {
        width: 20%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669>.elementor-element-populated {
        padding: 0px 0px 0px 30px;
        margin-top: 60px;
    } */

    .card {
        margin-top: -15px !important;
    }

    .elementor-3007 .elementor-element.elementor-element-cf19fcc:not(.elementor-motion-effects-element-type-background),
    .elementor-3007 .elementor-element.elementor-element-cf19fcc>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: transparent !important;
    }

    .elementor-3007 .elementor-element.elementor-element-f871cda {
        width: 30%;
    }

    .elementor-3007 .elementor-element.elementor-element-094a417 {
        width: 50%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669 {
        width: 20%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669>.elementor-element-populated {
        padding: 0px 0px 0px 30px;
        margin-top: 60px;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
        background-color: #fff;
        color: #001E64 !important;
    }

    /* i.fas.fa-bell.fa-2xl {
    font-size: 32px !important;
    padding-left: 10px;
    color: #000;
}

img.rounded-circle {
    margin-bottom: 10px;
} */
}

@media (max-width: 320px) {}

@media (max-width: 280px) {
    /* .elementor-3007 .elementor-element.elementor-element-a2b9669>.elementor-element-populated {
        padding: 0px 0px 0px 20px;
        margin-top: 60px;
    } */
}

@media (max-width: 360px) {}

@media (max-width: 375px) {}

@media (min-width: 540px) {}

@media (min-width: 1280px) {
    .card {
        /* border: 0; */
        margin-left: 210px;
    }

    .input-group {
        width: 40%;
        margin-left: 225px;
        transition: all .1s linear;
        box-shadow: none;
    }
}

@media (min-width: 1281px) {
    .card {
        /* border: 0; */
        margin-left: 250px;
    }

    .input-group {
        width: 40%;
        margin-left: 275px;
        transition: all .1s linear;
        box-shadow: none;
    }
}

#paypal_button_container {
    padding-left: 75px;
}
</style>

</html>