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

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/PNG-Blue.png') }}">
    <title>wiseAdvizor </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('public/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('public/assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
</head>

<body class="g-sidenav-show  bg-gray-200">
    <!-- </aside> -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky"
            id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <a class="navbar-brand" href="{{ route('user.dashboard') }}">
                    <img src="https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC.png" alt="wiseAdvizor" width="300px;" height="150px;" >
                </a>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <!-- <label class="form-label">Type here...</label>
                            <input type="text" class="form-control"> -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item active">
                                <a href="{{ route('user.dashboard') }}" class="nav-link text-muted active"
                                    target="_blank">Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutUs') }}" class="nav-link text-muted" target="_blank">About
                                    Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contactUs') }}" class="nav-link text-muted" target="_blank">Contact
                                    Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Resource
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('community-posts') }}">Community
                                            Post</a></li>
                                    <li><a class="dropdown-item" href="{{ route('libraries') }}">Libraries</a></li>
                                    <li><a class="dropdown-item" href="{{ route('faq') }}">FAQ</a></li>
                                    <li><a class="dropdown-item" href="{{ route('blogs') }}">BLOGS</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('browseMentor') }}" class="nav-link text-muted" target="_blank">Browse
                                    Mentor</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="{{ route('user.profile') }}" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Welcome, {{ Auth::user()->name }}</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <!-- <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i> -->
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="./public/assets/img/team-2.jpg"
                                                    class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="./public/assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <!--====================================================
                           Upcoming Sessions
    ======================================================-->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
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
                                                        <img src="{{ asset('public/assets/img/').'/' }}{{ $upcoming_session->user->metaData ? $upcoming_session->user->metaData->profile_pic : '' }}"
                                                            class="avatar avatar-sm me-3" alt="xd">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $upcoming_session->user->name }}
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
                                                    {{ $upcoming_session->date }} {{ $upcoming_session->start_time }}
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
                                                    <a href="" class="" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title="update Session">
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
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
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
                                                        <img src="{{ asset('public/assets/img/').'/' }}{{ $requested_session->user->metaData ? $requested_session->user->metaData->profile_pic : '' }}"
                                                            class="avatar avatar-sm me-3" alt="xd">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $requested_session->user->name }}
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
                                                    {{ $requested_session->date }} {{ $requested_session->start_time }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    {{ $requested_session->status }}
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <div class="avatar-group mt-2">
                                                    <a href="{{ route('user.schedule.update', [$requested_session->id]) }}"
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
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
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
                                                        <img src="{{ asset('public/assets/img/').'/' }}{{ $completed_session->user->metaData ? $completed_session->user->metaData->profile_pic : '' }}"
                                                            class="avatar avatar-sm me-3" alt="xd">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $completed_session->user->name }}
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
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
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
                                                        <img src="{{ asset('public/assets/img/').'/' }}{{ $suggested_mentor->user->metaData ? $suggested_mentor->user->metaData->profile_pic : '' }}"
                                                            class="avatar avatar-sm me-3" alt="xd">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $suggested_mentor->name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avat2023-07-05 13ar-group mt-2">
                                                    {{ $suggested_mentor->metaData->designation }} </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <div class="avatar-group mt-2">
                                                    <a href="{{ route('profile', [$suggested_mentor->id]) }}" class=""
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
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
        <div class="container-fluid py-4">
            <footer class="footer py-4  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-4 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                © <script>
                                document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart"></i> by
                                <a href="" class="font-weight-bold" target="_blank">IVY Investment LLC.</a>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="" class="nav-link text-muted" target="_blank">Distributed By: IVY Investment LLC</a>
                                </li>
                            </ul>
                        </div> -->
                        <!-- <div class="col-lg-8">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="" class="nav-link text-muted" target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link text-muted" target="_blank">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link text-muted" target="_blank">Posts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link pe-0 text-muted" target="_blank">Browse Mentors</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <!-- <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="material-icons py-2">settings</i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                 End Toggle Button -->
    <!-- </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0"> -->
    <!-- Sidebar Backgrounds -->
    <!-- <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                 Sidenav Type -->
    <!-- <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p> -->
    <!-- Navbar Fixed -->
    <!-- <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-3">
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4"> -->
    <!-- <a class="btn btn-outline-dark w-100" href="">View documentation</a> -->
    <!-- <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div> -->
    <!-- </div>
        </div>
    </div> -->
    <!--   Core JS Files   -->
    <script src="{{ asset('public/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/chartjs.min.js') }}"></script>
    <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["M", "T", "W", "T", "F", "S", "S"],
            datasets: [{
                label: "Sales",
                tension: 0.4,
                borderWidth: 0,
                borderRadius: 4,
                borderSkipped: false,
                backgroundColor: "rgba(255, 255, 255, .8)",
                data: [50, 20, 10, 22, 50, 10, 40],
                maxBarThickness: 6
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5],
                        color: 'rgba(255, 255, 255, .2)'
                    },
                    ticks: {
                        suggestedMin: 0,
                        suggestedMax: 500,
                        beginAtZero: true,
                        padding: 10,
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                        color: "#fff"
                    },
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5],
                        color: 'rgba(255, 255, 255, .2)'
                    },
                    ticks: {
                        display: true,
                        color: '#f8f9fa',
                        padding: 10,
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Mobile apps",
                tension: 0,
                borderWidth: 0,
                pointRadius: 5,
                pointBackgroundColor: "rgba(255, 255, 255, .8)",
                pointBorderColor: "transparent",
                borderColor: "rgba(255, 255, 255, .8)",
                borderColor: "rgba(255, 255, 255, .8)",
                borderWidth: 4,
                backgroundColor: "transparent",
                fill: true,
                data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5],
                        color: 'rgba(255, 255, 255, .2)'
                    },
                    ticks: {
                        display: true,
                        color: '#f8f9fa',
                        padding: 10,
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#f8f9fa',
                        padding: 10,
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Mobile apps",
                tension: 0,
                borderWidth: 0,
                pointRadius: 5,
                pointBackgroundColor: "rgba(255, 255, 255, .8)",
                pointBorderColor: "transparent",
                borderColor: "rgba(255, 255, 255, .8)",
                borderWidth: 4,
                backgroundColor: "transparent",
                fill: true,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5],
                        color: 'rgba(255, 255, 255, .2)'
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#f8f9fa',
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#f8f9fa',
                        padding: 10,
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
    </script>
    <script>
    (function(e) {
        var t, o = {
                className: "autosizejs",
                append: "",
                callback: !1,
                resizeDelay: 10
            },
            i =
            '<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',
            n = ["fontFamily", "fontSize", "fontWeight", "fontStyle", "letterSpacing", "textTransform",
                "wordSpacing", "textIndent"
            ],
            s = e(i).data("autosize", !0)[0];
        s.style.lineHeight = "99px", "99px" === e(s).css("lineHeight") && n.push("lineHeight"), s.style.lineHeight =
            "", e.fn.autosize = function(i) {
                return this.length ? (i = e.extend({}, o, i || {}), s.parentNode !== document.body && e(document
                    .body).append(s), this.each(function() {
                    function o() {
                        var t, o;
                        "getComputedStyle" in window ? (t = window.getComputedStyle(u, null), o = u
                                .getBoundingClientRect().width, e.each(["paddingLeft", "paddingRight",
                                    "borderLeftWidth", "borderRightWidth"
                                ], function(e, i) {
                                    o -= parseInt(t[i], 10)
                                }), s.style.width = o + "px") : s.style.width = Math.max(p.width(), 0) +
                            "px"
                    }

                    function a() {
                        var a = {};
                        if (t = u, s.className = i.className, d = parseInt(p.css("maxHeight"), 10), e
                            .each(n, function(e, t) {
                                a[t] = p.css(t)
                            }), e(s).css(a), o(), window.chrome) {
                            var r = u.style.width;
                            u.style.width = "0px", u.offsetWidth, u.style.width = r
                        }
                    }

                    function r() {
                        var e, n;
                        t !== u ? a() : o(), s.value = u.value + i.append, s.style.overflowY = u.style
                            .overflowY, n = parseInt(u.style.height, 10), s.scrollTop = 0, s.scrollTop =
                            9e4, e = s.scrollTop, d && e > d ? (u.style.overflowY = "scroll", e = d) : (
                                u.style.overflowY = "hidden", c > e && (e = c)), e += w, n !== e && (u
                                .style.height = e + "px", f && i.callback.call(u, u))
                    }

                    function l() {
                        clearTimeout(h), h = setTimeout(function() {
                            var e = p.width();
                            e !== g && (g = e, r())
                        }, parseInt(i.resizeDelay, 10))
                    }
                    var d, c, h, u = this,
                        p = e(u),
                        w = 0,
                        f = e.isFunction(i.callback),
                        z = {
                            height: u.style.height,
                            overflow: u.style.overflow,
                            overflowY: u.style.overflowY,
                            wordWrap: u.style.wordWrap,
                            resize: u.style.resize
                        },
                        g = p.width();
                    p.data("autosize") || (p.data("autosize", !0), ("border-box" === p.css(
                            "box-sizing") || "border-box" === p.css("-moz-box-sizing") ||
                        "border-box" === p.css("-webkit-box-sizing")) && (w = p.outerHeight() -
                        p.height()), c = Math.max(parseInt(p.css("minHeight"), 10) - w || 0, p
                        .height()), p.css({
                        overflow: "hidden",
                        overflowY: "hidden",
                        wordWrap: "break-word",
                        resize: "none" === p.css("resize") || "vertical" === p.css(
                            "resize") ? "none" : "horizontal"
                    }), "onpropertychange" in u ? "oninput" in u ? p.on(
                        "input.autosize keyup.autosize", r) : p.on("propertychange.autosize",
                        function() {
                            "value" === event.propertyName && r()
                        }) : p.on("input.autosize", r), i.resizeDelay !== !1 && e(window).on(
                        "resize.autosize", l), p.on("autosize.resize", r), p.on(
                        "autosize.resizeIncludeStyle",
                        function() {
                            t = null, r()
                        }), p.on("autosize.destroy", function() {
                        t = null, clearTimeout(h), e(window).off("resize", l), p.off(
                            "autosize").off(".autosize").css(z).removeData("autosize")
                    }), r())
                })) : this
            }
    })(window.jQuery || window.$);

    var __slice = [].slice;
    (function(e, t) {
        var n;
        n = function() {
            function t(t, n) {
                var r, i, s, o = this;
                this.options = e.extend({}, this.defaults, n);
                this.$el = t;
                s = this.defaults;
                for (r in s) {
                    i = s[r];
                    if (this.$el.data(r) != null) {
                        this.options[r] = this.$el.data(r)
                    }
                }
                this.createStars();
                this.syncRating();
                this.$el.on("mouseover.starrr", "span", function(e) {
                    return o.syncRating(o.$el.find("span").index(e.currentTarget) + 1)
                });
                this.$el.on("mouseout.starrr", function() {
                    return o.syncRating()
                });
                this.$el.on("click.starrr", "span", function(e) {
                    return o.setRating(o.$el.find("span").index(e.currentTarget) + 1)
                });
                this.$el.on("starrr:change", this.options.change)
            }
            t.prototype.defaults = {
                rating: void 0,
                numStars: 5,
                change: function(e, t) {}
            };
            t.prototype.createStars = function() {
                var e, t, n;
                n = [];
                for (e = 1, t = this.options.numStars; 1 <= t ? e <= t : e >= t; 1 <= t ? e++ : e--) {
                    n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))
                }
                return n
            };
            t.prototype.setRating = function(e) {
                if (this.options.rating === e) {
                    e = void 0
                }
                this.options.rating = e;
                this.syncRating();
                return this.$el.trigger("starrr:change", e)
            };
            t.prototype.syncRating = function(e) {
                var t, n, r, i;
                e || (e = this.options.rating);
                if (e) {
                    for (t = n = 0, i = e - 1; 0 <= i ? n <= i : n >= i; t = 0 <= i ? ++n : --n) {
                        this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass(
                            "glyphicon-star")
                    }
                }
                if (e && e < 5) {
                    for (t = r = e; e <= 4 ? r <= 4 : r >= 4; t = e <= 4 ? ++r : --r) {
                        this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass(
                            "glyphicon-star-empty")
                    }
                }
                if (!e) {
                    return this.$el.find("span").removeClass("glyphicon-star").addClass(
                        "glyphicon-star-empty")
                }
            };
            return t
        }();
        return e.fn.extend({
            starrr: function() {
                var t, r;
                r = arguments[0], t = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
                return this.each(function() {
                    var i;
                    i = e(this).data("star-rating");
                    if (!i) {
                        e(this).data("star-rating", i = new n(e(this), r))
                    }
                    if (typeof r === "string") {
                        return i[r].apply(i, t)
                    }
                })
            }
        })
    })(window.jQuery, window);
    $(function() {
        return $(".starrr").starrr()
    })

    $(function() {

        $('#new-review').autosize({
            append: "\n"
        });

        var reviewBox = $('#post-review-box');
        var newReview = $('#new-review');
        var openReviewBtn = $('#open-review-box');
        var closeReviewBtn = $('#close-review-box');
        var ratingsField = $('#ratings-hidden');

        openReviewBtn.click(function(e) {
            reviewBox.slideDown(400, function() {
                $('#new-review').trigger('autosize.resize');
                newReview.focus();
            });
            openReviewBtn.fadeOut(100);
            closeReviewBtn.show();
        });

        closeReviewBtn.click(function(e) {
            e.preventDefault();
            reviewBox.slideUp(300, function() {
                newReview.focus();
                openReviewBtn.fadeIn(200);
            });
            closeReviewBtn.hide();

        });

        $('.starrr').on('starrr:change', function(e, value) {
            ratingsField.val(value);
        });
    });
    </script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('public/assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>
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
</style>

</html>