<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Nihala PP
=========================================================
-->
<!DOCTYPE html>
<html lang="en">
@include('partials.header')

<body class="g-sidenav-show  bg-gray-200">
    @include('mentors.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg mt-3 mb-3">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl navbar-blur mt-3"
            id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <!-- <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Mentor</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Reviews</li> -->
                    </ol>
                    <h5 class="font-weight-bolder mb-0">Reviews</h5>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <!-- <label class="form-label">Type here...</label>
                            <input type="text" class="form-control"> -->
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="{{ route('mentor.dashboard.profile',[Auth::id()]) }}"
                                class="nav-link text-body font-weight-bold px-0">
                                <img src="{{ asset('public/assets/img/').'/' }}{{ Auth::user()->metaData->profile_pic }}"
                                    class="avatar avatar-sm me-3" alt="xd">
                                <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
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
                                                <img src="{{ asset('public/assets/img/team-2.jpg') }}"
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
                                                <img src="{{ asset('public/assets/img/small-logos/logo-spotify.svg') }}"
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
        <div class="container-fluid py-4">
            <div class="row">
                <!-- <div class="col-12"> -->
                <section>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10 col-xl-8 text-center">
                            <h3 class="mb-4">Testimonials</h3>
                            <!-- <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                                Autem, totam debitis suscipit saepe
                                sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                                labore laboriosam.
                            </p> -->
                        </div>
                    </div>
                    <div class="row text-center d-flex align-items-stretch">
                        @foreach($reviews as $review)
                        <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
                            <div class="card testimonial-card">
                                <div class="card-up" style="background-color: #9d789b;"></div>
                                <div class="avatar mx-auto bg-white">
                                    <img src="{{ asset('public/assets/img/').'/' }}{{ $review->user->metaData->profile_pic }}"
                                        class="rounded-circle img-fluid" height="100" width="100">
                                </div>
                                <div class="card-body">
                                    <h4 class="mb-4">{{ $review->user->name }}</h4>
                                    <h6 class="font-weight-bold my-3">{{ $review->user->metaData->designation }} at
                                        {{ $review->user->metaData->company }}</h6>
                                    <ul class="list-unstyled d-flex justify-content-center">
                                        @for($i=0; $i<$review->rating; $i++)
                                            <li>
                                                <i class="fas fa-star fa-sm text-info"></i>
                                            </li>
                                            @endfor
                                    </ul>
                                    <hr />
                                    <p class="dark-grey-text mt-4">
                                        <i class="fas fa-quote-left pe-2"></i>{{ $review->review }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
                            <div class="card testimonial-card">
                                <div class="card-up" style="background-color: #7a81a8;"></div>
                                <div class="avatar mx-auto bg-white">
                                    <img src="{{ asset('public/assets/img/team-3.jpg') }}" class="rounded-circle img-fluid" />
                                </div>
                                <div class="card-body">
                                    <h4 class="mb-4">Lisa Cudrow</h4>
                                    <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
                                    <ul class="list-unstyled d-flex justify-content-center">
                                        <li>
                                            <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                    </ul>
                                    <hr />
                                    <p class="dark-grey-text mt-4">
                                        <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                                        ad velit ab hic tenetur.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-0 d-flex align-items-stretch">
                            <div class="card testimonial-card">
                                <div class="card-up" style="background-color: #6d5b98;"></div>
                                <div class="avatar mx-auto bg-white">
                                    <img src="{{ asset('public/assets/img/team-2.jpg') }}" class="rounded-circle img-fluid" />
                                </div>
                                <div class="card-body">
                                    <h4 class="mb-4">John Smith</h4>
                                    <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
                                    <ul class="list-unstyled d-flex justify-content-center">
                                        <li>
                                            <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star fa-sm text-info"></i>
                                        </li>
                                        <li>
                                            <i class="far fa-star fa-sm text-info"></i>
                                        </li>
                                    </ul>
                                    <hr />
                                    <p class="dark-grey-text mt-4">
                                        <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
                                        aliquam repellat rem unde ducimus.
                                    </p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </section>
                <!-- </div> -->
            </div>
        </div>
    </main>
</body>

</html>