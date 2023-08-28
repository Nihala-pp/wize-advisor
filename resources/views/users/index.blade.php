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
    <link href="{{ asset('public/assets/vendor/@fontawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-white">
    <!-- </aside> -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <!-- <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"

            navbar-scroll="true"> -->

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2 mt-lg-0" href="{{ route('user.dashboard') }}">
                        <img src="https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC.png" alt="wiseAdvizor"
                            width="150;" height="75px;" style="object-fit:contain;" class="d-inline-block align-top"
                            height="15" alt="MDB Logo" loading="lazy" />
                    </a>
                    <!-- Left links -->
                    <ul class="navbar-nav mb-2 mb-lg-0  menu-list">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutUs') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contactUs') }}">Contact Us</a>
                        </li>
                        <div class="dropdown">
                            <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                                role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                Resource
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">Some news</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another news</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </div>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-mdb-toggle="dropup" aria-expanded="false">
                                Resource
                            </a>
                            <!-- Dropdown menu -->
                            <!-- <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item active" href="#">English</a>
                                <a class="dropdown-item" href="#">Arabic</a>
                                <a class="dropdown-item" href="#">Himyaritic</a>
                            </div> -->

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('community-posts') }}">Community Post</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('libraries') }}">Libraries</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('faq') }}">FAQ</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('blogs') }}">BLOGS</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('browseMentor') }}">Browse Mentor</a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->

                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    <!-- Icon -->
                    <!-- <a class="text-reset me-3" href="#">
                        <i class="fas fa-shopping-cart"></i>
                    </a> -->

                    <!-- Notifications -->
                    <div class="dropdown">
                        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">Some news</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Another news</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Avatar -->
                    <div class="dropdown">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                            id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                            aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle"
                                height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="{{ route('user.profile', [Auth::id()]) }}">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('user.review') }}">Reviews</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
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
                                                                class="avatar avatar-sm me-3" alt="xd">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
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
                                                        <a href="{{ route('user.schedule.update', [$upcoming_session->id]) }}"
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
                                                                class="avatar avatar-sm me-3" alt="xd">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
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
                                                                class="avatar avatar-sm me-3" alt="xd">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
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
                        </div>
                    </div>
                </footer>
            </div>
    </main>
    </div>
    <!-- </main> -->
    <!--   Core JS Files   -->
    <script src="{{ asset('public/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>

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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
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

.navbar-light li a {
    font-family: "Helvetica", Sans-serif !important;
    font-size: 17px !important;
    font-weight: 700 !important;
    color: #001e64 !important;
}

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

.dropdown-menu {
    position: absolute;
    top: 59px;
}


.menu-list {
    align: center;
}
</style>

</html>