<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Copyright 2023 IVY Investment LLC 
* Coded by Nihala PP

=========================================================
-->
<!DOCTYPE html>
<html lang="en">

@include('partials.web-header-new')

<body
    class="page-template page-template-elementor_canvas page page-id-13 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-13">
    @include('partials.header-common')
    <!-- </aside> -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <!-- <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"

            navbar-scroll="true"> -->

        <!-- Navbar -->

        <!-- Navbar -->
        <!-- End Navbar -->
        <!--====================================================
                           Upcoming Sessions
    ======================================================-->
        <div class="row" style="background-image: url('{{ asset('public/assets/img/cover.jpg') }}')">

            <div class="container-fluid py-4 req">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                        <p class="heading center"><b>Welcome, {{ auth()->user()->name }} ! </b></p>
                        <p class="center para">Book your session today and grow faster with the wisdom of mentorship.
                        </p>
                        <p class="center para">Get 25% off on each call with code MENTOR25</p>
                        <div class="elementor-widget-container find_mentor">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm mentor"
                                    href="{{ route('browseMentor') }}">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Find your mentor</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-4 req">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">Upcoming Sessions</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Name</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Description</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Date & Time</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Action</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                </th>
                                                <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($upcoming_sessions as $upcoming_session)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('public/assets/img') }}/{{ $upcoming_session->mentor->metaData ? $upcoming_session->mentor->metaData->profile_pic : '' }}"
                                                                class="rounded-circle" height="5" width="35">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm mentor_name">
                                                                {{ ucfirst($upcoming_session->mentor->name) }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2 desc">
                                                        {{ $upcoming_session->description }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2 date">
                                                        {{ $upcoming_session->date }}
                                                        {{ $upcoming_session->start_time }}
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm action">
                                                    <div class="avatar-group">
                                                        <a href="{{ $upcoming_session->call_link ?: '' }}" class="link"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Join Session">
                                                            Join Session
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <div class="avatar-group">
                                                        <a href="{{ route('schedule-call', [$upcoming_session->mentor_id, $upcoming_session->id]) }}"
                                                            class="" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="update Session">
                                                            Update Session
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================================================
                           Requested Sessions
    ======================================================-->
            <div class="container-fluid req padd">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">Requested Sessions</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Name</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Description</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Date & Time</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Status</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Action</th>
                                                <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($requested_sessions as $requested_session)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1 imag">
                                                        <div>
                                                            <img src="{{ asset('public/assets/img') }}/{{ $requested_session->mentor->metaData ? $requested_session->mentor->metaData->profile_pic : '' }}"
                                                                class="rounded-circle" height="5" width="35">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm mentor_name">
                                                                {{ ucfirst($requested_session->mentor->name) }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2 desc">
                                                        {{ $requested_session->description }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group date mt-2">
                                                        {{ $requested_session->date.' '.$requested_session->start_time }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group status mt-2">
                                                        {{ $requested_session->status }}
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm action">
                                                    <div class="avatar-group">
                                                        <a href="{{ route('schedule-call', [$requested_session->mentor_id, $requested_session->id]) }}"
                                                            class="link" data-bs-toggle="tooltip"
                                                            data-bs-placement="bottom" title="Update Session">
                                                            Update Session
                                                        </a>
                                                    </div>
                                                    <!-- <div class="avatar-group mt-2">
                                                    <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Reject Session">
                                                        Reject
                                                    </a>
                                                </div> -->
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--====================================================
                           Completed Sessions
    ======================================================-->
            <div class="container-fluid py-4 req">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">Completed Sessions</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Name</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Date & Time</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Action</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                </th>
                                                <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($completed_sessions as $completed_session)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1 imag">
                                                        <div>
                                                            <img src="{{ asset('public/assets/img') }}/{{ $completed_session->mentor->metaData ? $completed_session->mentor->metaData->profile_pic : '' }}"
                                                                class="rounded-circle" height="5" width="35">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm mentor_name">
                                                                {{ ucfirst($completed_session->mentor->name) }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2 date">
                                                        {{ $completed_session->date }} -
                                                        {{ $completed_session->start_time }}
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm action">
                                                    <div class="avatar-group">
                                                        <a href="{{ route('user.review', [$completed_session->mentor_id]) }}"
                                                            class="link" data-bs-toggle="tooltip"
                                                            data-bs-placement="bottom" title="Write Review"
                                                            target="_blank">
                                                            Write Review
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <div class="avatar-group mt-2">
                                                        <a href="{{ route('schedule-call', [$completed_session->mentor_id]) }}"
                                                            class="" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Schedule Again">
                                                            Schedule Again
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" tabindex="-1" role="dialog" id="offer_modal" style="display:none">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><b>Hey, Get 1:1 mentorship to remove your business hurdles! </b>
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>25% off on scheduling a call now!</p>
                            <p><b>Promo Code: MENTOR25 </b></p>
                            <p>Remember, A mentor is a cheat sheet for an entrepreneur.
                                Don't miss out this incredible opportunity. </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"
                                style="align:center;background-color:#001E64;color:#fff;"><a href="{{ route('login') }}"
                                    style="color:#fff;">Get
                                    Started</a></button>
                            <!-- <button type="button" class="btn btn-secondary" style="background-color:#001E64;color:#fff;" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.web-footer')
    </main>
    </div>
    <!-- </main> -->
    <!--   Core JS Files   -->
    <!-- <script src="{{ asset('public/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script> -->
    <!-- Github buttons -->
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <!-- <script type="text/javascript" src="{{ asset('public/assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js">
    </script> -->

    <!-- <script type="text/javascript">
    $(document).ready(function() {

        $('#offer_modal').modal('show');

        $('.close').on('click', function() {

            $('#offer_modal').modal('hide');

        });
    });
    </script> -->
</body>
<style>
.avat2023-07-05 {
    margin-top: .5rem !important;
    margin-left: -15px;
    font-size: 12px;
}

i.fas.fa-chevron-down {
    font-size: 9px !important;
    font-family: "Font Awesome 5 Free" !important;
    font-weight: 900 !important;
    padding-left: 10px;
}

.animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
}

.stars {
    margin: 20px 0;
    font-size: 24px;
    color: #d17581;
}

th.text-uppercase.text-secondary.text-xxs.font-weight-bolder.opacity-7 {
    color: #363636 !important;
    font-size: 10px !important;
}

/* .navbar-light li a {
        font-family: "Helvetica", Sans-serif !important;
        font-size: 17px !important;
        font-weight: 700 !important;
        color: #001e64 !important;
    } */

.card-header {
    background-color: #001e64 !important;
}

.card-header:first-child {
    border-radius: 0.75rem 0.75rem 0 0;
}

.req {
    padding-right: 50px;
    margin-left: 20px;
}

.btn-secondary {
    background-color: #fff !important;
}

.padd {
    margin-top: -25px;
}

.mentor_name {
    text-transform: capitalize;
    font
}

.date {
    margin-left: -12px;
    font-size: 12px;
}

.status {
    margin-left: -12px;
    font-size: 12px;
}

.imag {
    margin-left: -12px;
}

.desc {
    font-size: 12px;
}

.action {
    font-size: 12px;
    margin-left: 20px;
}

.link {
    color: #3b71ca !important;
}

/* .mentor_name {
    margin-right: 20px !important;
    font-size: 12px !important;
} */

@media (max-width:480px) {

    /* .rounded-circle {
        height: 40px !important;
        width: 40px !important;
        border-radius: 60%!important;
    } */
    #menu-item-5136 {
        font-size: 8px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
    }

    i.fas.fa-bell.fa-2xl {
        color: black !important;
        font-size: 27px !important;
    }

    .elementor-button {
        display: inline-block;
        line-height: 1;
        background-color: #001E64;
        font-size: 15px;
        padding: 12px 24px;
        border-radius: 7px !important;
        color: #fff;
        fill: #fff;
        text-align: center;
        transition: all .3s;
        margin: 15px;
    }

    .mentor_name {
        text-transform: capitalize;
        margin-left: 20px !important;
        font-size: 10px !important;
    }

    .text-muted {
        --mdb-text-opacity: 1;
        color: #000000 !important;
    }

    .para {
        margin-top: -12px;
        font-size: 12px;
    }

    .rounded-circle {
        height: 35px;
        width: 35px;
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

@media (min-width:1025px) {
    .rounded-circle {
        height: 40px !important;
        width: 40px !important;
    }

    .mentor_name {
        text-transform: capitalize;
        margin-left: 20px !important;
        font-size: 12px !important;
    }

    /*** header new */

    /* .elementor-3007 .elementor-element.elementor-element-4bc8cfa>.elementor-widget-container {
        padding: 25px 10px 0px 0px;
        margin-left: -60px;
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
    } */

    /**********                                     */
}

@media (min-width: 768px) and (max-width: 1024px) {
    .rounded-circle {
        height: 35px !important;
        width: 35px;
        /* margin-right: 20px; */
    }

    /* header*/

    /* .elementor-3007 .elementor-element.elementor-element-4bc8cfa>.elementor-widget-container {
        padding: 25px 10px 0px 0px;
        margin-left: -60px;
    } */

    /* .wp-image-624 {
        width: 100%;
        height: 15.02%;
        max-width: 150px !important;
    } */

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

    /* .elementor-3007 .elementor-element.elementor-element-78270f3 .elementor-button {
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
    } */

    /*** header new */

    .elementor-3007 .elementor-element.elementor-element-4bc8cfa>.elementor-widget-container {
        padding: 25px 10px 0px 0px;
        margin-left: -60px;
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

    /**********                                     */
}

.center {
    text-align: center;
    /* margin-bottom: 5px;  */
}

.heading {
    font-size: 32px;
    margin-bottom: 10px;
}

.para {
    margin-top: -12px;
}

a:hover {
    text-decoration: none;
}

a:link {
    font-size: 12px;
    /* padding-left: 27px; */
    text-decoration: none;
}

.mentor {
    font-family: "Helvetica", Sans-serif;
    font-size: 15px !important;
    font-weight: 400;
    background-color: transparent;
    background-image: linear-gradient(90deg, var(--e-global-color-1e1892c) 0%, var(--e-global-color-1e1892c) 100%);
    border-style: none;
    border-radius: 7px 7px 7px 7px;
}

.find_mentor {
    position: absolute;
    /* top: 50%; */
    left: 50%;
    transform: translate(-50%, -50%);
    margin-top: 15px;
    margin-bottom: 25px;
    border-radius: 7px 7px 7px 7px !important;
}

a.font-weight-bold.text-white {
    font-size: 13px;
    text-decoration: none;
    /* margin-left: -25px; */
}

div.copyright.text-center.text-sm.text-white.text-lg-start {
    font-size: 13px;
}

/* #navbarDropdownMenuLink {
        z-index: 999999 !important;
    } */

/* 
.dropdown-menu {
    position: absolute;
    top: 59px;
} */

/* 
    .menu-list {
        align: center;
    } */

/* .dropdown-menu {
	margin: 8px 0px!important;
} */
</style>

</html>