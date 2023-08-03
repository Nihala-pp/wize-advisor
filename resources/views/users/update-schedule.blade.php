<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================
* Coded by Nihala PP
=========================================================
-->
<!DOCTYPE html>
<html lang="en">
@include('partials.header')

<body class="g-sidenav-show  bg-white">
    </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <!-- <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a> -->
        </div>
    </div>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- <div class="col-lg-8">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item active">
                    <a href="" class="nav-link text-muted active" target="_blank">Dashboard </a>
                </li>
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
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <a class="navbar-brand" href="{{ route('user.dashboard') }}">
                    <img src="https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC.png" alt="wiseAdvizor"
                        width="150;" height="75px;" style="object-fit:contain;" class="d-inline-block align-top">
                </a>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex">
                        <div class="input-group input-group-outline">
                            <!-- <label class="form-label">Type here...</label> -->
                            <!-- <input type="text" class="form-control">  -->
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-center">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <!-- <li class="nav-item active">
                                <a href="{{ route('user.dashboard') }}" class="nav-link text-muted active"
                                    target="_blank">Dashboard
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a href="{{ route('aboutUs') }}" class="nav-link text-muted" target="_blank">About
                                    Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contactUs') }}" class="nav-link text-muted" target="_blank">Contact
                                    Us</a>
                            </li>
                            <li class="nav-item dropup">
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
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropup" aria-expanded="false">
                                <img src="{{ asset('public/assets/img/').'/' }}{{ Auth::user()->metaData->profile_pic }}"
                                    class="avatar avatar-sm me-3" alt="profile pic">
                                Welcome, {{ Auth::user()->name }}
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item" href="{{ route('user.profile', [Auth::user()->id]) }}">My
                                        Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('user.review', [Auth::user()->id]) }}">My
                                        Reviews</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Log out</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line">dffrerfe</i>
                                    <i class="sidenav-toggler-line">ederrfref</i>
                                    <i class="sidenav-toggler-line">ferfergfre</i>
                                </div>
                            </a>
                        </li> -->
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
        <div class="container-fluid py-4">
            <div class="row mt-5">
                <div class="col-12 col-lg-10 m-auto">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Update Session</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row" id="row">
                                <form method="POST" action="{{ route('user.schedule.save') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="row_id" value="{{ $scheduled_call->id }}">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Mentor</label>
                                        <input type="text" name="mentor" class="form-control"
                                            value="{{ $scheduled_call->mentor->name ??  '' }}" placeholder="Mentor"
                                            disabled>
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Documents</label>
                                        <input type="file" name="documents" class="form-control"
                                            value="{{ $scheduled_call->documents ??  '' }}" placeholder="Documents"
                                            required>
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" cols="7"
                                            placeholder="Description"
                                            required> {{ $scheduled_call->description ??  '' }} </textarea>
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Date</label>
                                        <input type="date" name="date" class="form-control date" placeholder="Date"
                                            value="{{ $scheduled_call->date ??  '' }}" id="date-pick"
                                            placeholder="Date">
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Time Slot</label>
                                        <select class="form-control" id="educationDate" name="start_time" required>
                                            <option value="">Time</option>
                                            @foreach($times as $time)
                                            <option value="{{ $time->start_time }}"
                                                {{ $scheduled_call->start_time == $time->start_time ? "selected" : "" }}>
                                                {{ $time->start_time }}</option>
                                            @endforeach
                                        </select>
                                        <!-- <label class="form-label">Time</label> -->
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Timezone</label>
                                        <select class="form-control" id="educationDate" name="utc" required>
                                            <option value="">UTC</option>
                                            @foreach($utc as $key => $ut)
                                            <option value="{{ $ut }}"
                                                {{ $key == $scheduled_call->utc ? "selected" : "" }}>{{ $key }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            <button type="submit" name="submitform" id="submitform" class="btn btn-primary"><i
                                    class="fa-solid mx-1 fa-floppy-disk"></i>{{ __('Save') }}</button>
                            </form>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.footer')
        </div>
    </main>
    @include('partials.settings')
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.date').datepicker({
            multidate: true,
            format: 'yyyy-mm-dd'
        });
        // $('.time').timepicker({
        //     format: 'hh:mm A',
        // });
    });
    </script>
    <!--   Core JS Files   -->
</body>

</html>