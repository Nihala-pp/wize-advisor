<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Successfully Scheduled Call with{{ $mentor->name }}</title>
    <meta name="description"
        content="Get professional mentoring from highly accomplished mentor {{ $mentor->name }} at wiseAdvizor. Discover her expertise and see what her mentees have to say.">
    <meta name="keywords" content="professional mentor, my mentor, Find a mentor, Startup mentor">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Book 1:1 call with top startup mentors on wiseAdvizor">
    <meta property="og:description"
        content="wiseAdvizor connects you with experienced startup mentors who understand your startup. Get personalized mentorship to avoid costly mistakes, unlock sustainable growth, and achieve your business goals.">
    <meta property="og:image"
        content="https://wiseadvizor.com/wp-content/uploads/2023/07/Book-11-call-with-world-top-mentors-on-wiseadvizor.com.webp">
    <meta property="og:url" content="https://wiseadvizor.com">
    <meta property="og:site_name" content="wiseAdvizor" />
    <meta name="twitter:title" content="Schedule a 1:1 session with top-tier mentors for your startup success">
    <meta name="twitter:description"
        content="Connect directly with entrepreneurs and industry leaders on wiseAdvizor. Seek guidance, discuss challenges, and get expert advice to grow your startup.">
    <meta name="twitter:url" content="https://wiseadvizor.com">
    <meta name="twitter:image"
        url="https://wiseadvizor.com/wp-content/uploads/2023/07/Book-11-call-with-world-top-mentors-on-wiseadvizor.com.webp">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/PNG-Blue.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" async>
    <meta name="robots" content="max-image-preview:large">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" async>
    <link rel="stylesheet" id="elementor-post-2772-css"
    href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-2772.css?ver=1699364619" media="all">
    <!-- Hotjar Tracking Code for https://wiseadvizor.com -->
    <style type="text/css">
    .current {
        background-color: #007bff !important;
        color: #fff !important;
    }
    </style>
    @include('partials.web-style')
    <script src="https://wiseadvizor.com/wp-includes/js/" id="jquery-core-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.7.1" id="jquery-migrate-js">
    </script>
    <link rel="canonical" href="https://wiseadvizor.com/success/".{{ $call_id }}>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
</head>
<body
    class="page-template page-template-elementor_canvas page page-id-13 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-13">
    
    @include('partials.header-common')
    
    <div class="card text-center mt-5">
        <div class="card-header mt-5 scheduled">
           <h1> Successfully Scheduled </h1>
        </div>
        <div class="card-body">
            <div class="rounded-circle mt-3">
                <a href="{{ route('profile', [$mentor->id]) }}" title="Mentor"> <img class="rounded-circle"
                        decoding="async" src="{{ asset('public/assets/img/').'/'.$mentor->metaData->profile_pic }}"
                        alt="Mentor" width="100" height="100">
                </a>
            </div>
            <h5 class="card-title mt-3">Confirmed</h5>
            <p class="card-text">Your call is scheduled with {{ $mentor->name }}</p>
            <h5 class="card-title">{{ $details['duration'] }} Min Meeting</h5>
            <h6 class="card-title"> {{ $details['start_time'] }} - {{ $details['finish_time'] }} {{ $details['date'] }}
                {{ $details['UTC'] }} </h6>
            <p class="card-text mt-2">An email for the meeting link will be sent to your Email Address Once
                mentor approves the call.</p>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js" async>
    </script>
</body>
<style>
h1 {
    font-size: 17px;
    font-family: "Helvetica", Sans-serif !important;
}

i.fas.fa-chevron-down {
    margin-top: -15px !important;
    padding-left: 10px !important;
    font-size: 9px !important;
    font-family: "Font Awesome 5 Free" !important;
    font-weight: 900 !important;
}

.elementor-32 .elementor-element.elementor-element-b84e421 .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-7b6d864 .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-aaf88ad .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-b23aa07 .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-269f902 .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-32f5614 .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-159e6db .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.elementor-32 .elementor-element.elementor-element-5db6379 .elementor-heading-title a {
    color: #ffff !important;
    text-decoration-thickness: 1px;
    text-underline-offset: 0.25ch;
}

.avail h4 {
    margin-left: 20px;
    font-family: "Helvetica", Sans-serif;
    font-size: 16px !important;
    font-weight: 300;
}

.avail h4 b {
    padding-left: 20px;
}

/* .browseMentor {
        padding-right: 20px;
    } */

i.fas.fa-bell.fa-2xl {
    font-size: 32px !important;
}

.payNow {
    margin-top: -50px !important;
}

/* .timeslot:active{
    background-color:#007BFF;
} */

@media(max-width:480px) {

    h1 {
        font-size: 17px;
        font-family: "Helvetica", Sans-serif !important;
    }

    /* .rounded-circle {
        height: 40px !important;
        width: 40px !important;
        border-radius: 60% !important;
    } */

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-ancestor a.hfe-menu-item {
        color: white !important;
    }

    i.fas.fa-bell.fa-2xl {
        font-size: 29px !important;
    }
}

@media(max-width:767px) {
    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }

    h1 {
        font-size: 17px;
        font-family: "Helvetica", Sans-serif !important;
    }

    .elementor-32 .elementor-element.elementor-element-540d2d1>.elementor-widget-container {
        padding: 0px 20px 10px 100px;
    }

    /* .avail h4 b {
        padding-left: 25px;
    } */

    /* .avail h4 b {
        padding-left: 10px;
    } */

    .events-container {
        padding-left: 0px !important;
        padding-top: 10px !important;
    }

    .elementor-3007 .elementor-element.elementor-element-aea4c40>.elementor-widget-container {
        padding: 15px 0px 0px 0px;
    }

    /* .elementor-3007 .elementor-element.elementor-element-b97627d {
        width: 30%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669 {
        width: 50%;
    }

    .elementor-3007 .elementor-element.elementor-element-094a417 {
        width: 20%;
    }

    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 .sub-menu a.hfe-sub-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 .elementor-menu-toggle:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 nav.hfe-dropdown li a.hfe-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 nav.hfe-dropdown li a.hfe-sub-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 nav.hfe-dropdown-expandible li a.hfe-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 nav.hfe-dropdown-expandible li a.hfe-sub-menu-item:hover {
        color: #001E64;
    }

    .elementor-3007 .elementor-element.elementor-element-094a417>.elementor-element-populated {
        padding: 0px 0px 0px 35px;
        margin-top: 45px;
    }

    .elementor-3007 .elementor-element.elementor-element-f871cda>.elementor-element-populated {
        padding: 0px 0px 0px 10px;
        margin-top: -20px;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
        background-color: #fff;
        color: #001E64;
    } */

    .elementor-button.elementor-size-xs {
        font-size: 12px;
        padding: 10px 20px;
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
        margin-top: 45px;
    } */

    i.fas.fa-bell.fa-2xl {
        font-size: 29px !important;
    }

    .event-name {
        padding-right: 0;
        text-align: center !important;
        font-weight: bold;
        /* margin-left: -10px; */
    }

    .event-card {
        margin: 0;
        background: #e6e6e6;
        margin-left: 0px;
        /* margin-left: -19px; */
    }

    .events-container {
        overflow-y: scroll;
        height: 100%;
        width: 100%;
        float: right;
        margin: 0px auto;
        display: inline-block;
        padding: 0px;
        border-bottom-right-radius: 3px;
        /* border-top-right-radius: 3px; */
        padding-left: 5px !important;
        padding-right: 0px;
    }

    .event-card {
        /* padding: 0px 0px; */
        max-width: 100%;
        display: block;
        background: #fff;
        border: solid #007bff !important;
        margin-left: 0px;
        margin-right: 0px;
    }

    .avail h4 {
        margin-left: 30px;
        font-family: "Helvetica", Sans-serif;
        font-size: 16px !important;
        font-weight: 300;
    }

    button.btn.btn-outline-primary.btn-lg.btn-block.event-card.timeslot {
        margin-left: 40px !important;
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
}

@media (max-width: 320px) {}

@media (max-width: 280px) {
    /* .elementor-3007 .elementor-element.elementor-element-a2b9669>.elementor-element-populated {
        padding: 0px 0px 0px 20px;
        margin-top: 45px;
    } */
}

@media (max-width: 360px) {

    h1 {
        font-size: 17px;
        font-family: "Helvetica", Sans-serif !important;
    }

    .avail h4 {
        margin-left: 15px;
        /* font-family: "Helvetica", Sans-serif; */
        /* font-size: 16px !important; */
        /* font-weight: 300; */
    }
}

@media (max-width: 375px) {

    h1 {
        font-size: 17px;
        font-family: "Helvetica", Sans-serif !important;
    }

    .avail h4 {
        margin-left: 5px;
        font-family: "Helvetica", Sans-serif;
        font-size: 15px !important;
        font-weight: 300;
    }
}

@media (min-width: 540px) {}

@media screen (min-width: 768px) and (max-width: 1024px) {

    .event-card {
        padding: 0px 0px;
        max-width: 100%;
        display: block;
        background: #fff;
        border: solid #007bff !important;
        /* margin: 20px; */
        margin-left: 75px;
    }

    .event-count,
    .event-name,
    .event-cancelled {
        display: inline;
        padding: 0 0px;
        font-size: 1rem;
    }

    .avail h4 b {
        padding-left: 70px;
    }

    .avail h4 {
        margin-left: 50px !important;
        font-family: "Helvetica", Sans-serif;
        font-size: 13.5px !important;
        font-weight: 300;
    }

    .events-container {
        overflow-y: scroll;
        height: 100%;
        width: 50%;
        float: right;
        margin: 0px auto;
        display: inline-block;
        padding: 0px;
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px;
        padding-right: 20px;
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

    h1 {
        font-size: 17px;
        font-family: "Helvetica", Sans-serif !important;
    }
}

@media screen (min-width: 768px) and (max-width: 820px) {
    h1 {
        font-size: 17px;
        font-family: "Helvetica", Sans-serif !important;
    }

    .avail h4 {
        font-family: "Helvetica", Sans-serif;
        font-size: 11px !important;
        font-weight: 300;
    }

    .avail h4 b {
        padding-left: 0px;
    }

    .events-container {
        overflow-y: scroll;
        height: 100%;
        width: 50%;
        float: right;
        margin: 0px auto;
        display: inline-block;
        padding: 0px;
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px;
        padding-right: 40px;
    }

    .event-card {
        padding: 0px 0px;
        max-width: 100%;
        display: block;
        background: #fff;
        border: solid #007bff !important;
        margin-left: 100px;
    }

    .event-name {
        text-align: left;
        font-weight: bold;
    }

    .heading-section {
        font-size: 20px;
        color: #000;
    }

    .events-container {
        overflow-y: scroll;
        height: 100%;
        width: 50%;
        float: right;
        margin: 0px auto;
        display: inline-block;
        padding: 0px;
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px;
        /* padding-right: 90px; */
    }
}

@media screen and (max-width: 1280) {}
</style>
</html>