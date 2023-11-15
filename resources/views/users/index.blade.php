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
@php header('Access-Control-Allow-Origin: *'); @endphp


@include('partials.web-header-new')

<style>
<link id="pagestyle"href="{{ asset('public/assets/css/material-dashboard.css?v=3.0.0') }}"rel="stylesheet"/><link rel="stylesheet"href="{{ asset('public/assets/css/material-kit-pro.min.css') }}">
</style>

<body
    class="ppage-template page-template-elementor_canvas page page-id-11 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-11">
    @include('partials.menu')

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
                                                            <img src="{{ asset('public/assets/img/').'/' }}{{ $upcoming_session->mentor->metaData ? $upcoming_session->mentor->metaData->profile_pic : '' }}"
                                                                class="rounded-circle" height="5" width="35">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm mentor_name">
                                                                {{ $upcoming_session->mentor->name }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2">
                                                        {{ $upcoming_session->description }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2">
                                                        {{ $upcoming_session->date }}
                                                        {{ $upcoming_session->start_time }}
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <div class="avatar-group mt-2">
                                                        <a href="{{ $upcoming_session->call_link ?: '' }}" class=""
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Join Session">
                                                            Join Session
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <div class="avatar-group mt-2">
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
            <div class="container-fluid py-4 req">
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
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('public/assets/img/').'/' }}{{ $requested_session->mentor->metaData ? $requested_session->mentor->metaData->profile_pic : '' }}"
                                                                class="rounded-circle" height="5" width="35">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm mentor_name">
                                                                {{ $requested_session->mentor->name }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2">
                                                        {{ $requested_session->description }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2">
                                                        {{ $requested_session->date }}
                                                        {{ $requested_session->start_time }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2">
                                                        {{ $requested_session->status }}
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <div class="avatar-group mt-2">
                                                        <a href="{{ route('schedule-call', [$requested_session->mentor_id, $requested_session->id]) }}"
                                                            class="" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Update Session">
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
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('public/assets/img/').'/' }}{{ $completed_session->mentor->metaData ? $completed_session->mentor->metaData->profile_pic : '' }}"
                                                                class="rounded-circle" height="5" width="35">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm mentor_name">
                                                                {{ $completed_session->mentor->name }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group mt-2">
                                                        {{ $completed_session->date }} -
                                                        {{ $completed_session->start_time }}
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <div class="avatar-group mt-2">
                                                        <a href="{{ route('user.review', [$completed_session->mentor_id]) }}"
                                                            class="" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Write Review" target="_blank">
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

            <!--====================================================
                           Suggested Mentors
    ======================================================-->
            <div class="container-fluid py-4 req">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">Suggested Mentors</h6>
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
                                                    Topic</th>
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
                                            @foreach($suggested_mentors as $suggested_mentor)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('public/assets/img/') }}/{{ $suggested_mentor->metaData ? $suggested_mentor->metaData->profile_pic : '' }}"
                                                                class="rounded-circle" height="5" width="35">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm mentor_name">
                                                                {{ $suggested_mentor->name }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avat2023-07-05 13ar-group mt-2">
                                                        {{ $suggested_mentor->metaData->designation }}
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <div class="avatar-group mt-2">
                                                        <a href="{{ route('profile', [$suggested_mentor->id]) }}"
                                                            class="" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Join Session">
                                                            View Profile
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <div class="avatar-group mt-2">
                                                        <a href="{{ route('schedule-call', [$suggested_mentor->id]) }}"
                                                            class="" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Join Session">
                                                            Schedule Call
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
</body>
<style>
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

.mentor_name {
    margin-right: 20px !important;
    font-size: 12px !important;
}

@media (max-width:480px) {
    .rounded-circle {
        height: 40px;
        width: 40px;
    }
}

@media (min-width:1024px) {
    .rounded-circle {
        height: 40px;
        width: 40px;
    }
}

.rounded-circle
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