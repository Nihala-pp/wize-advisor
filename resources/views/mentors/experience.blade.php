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
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg mb-3 mt-3">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl navbar-blur mt-3"
            id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <!-- <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Mentor</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Experience & Awards</li> -->
                    </ol>
                    <h5 class="font-weight-bolder mb-0">Experience & Awards</h5>
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
                                <img src="{{ asset('public/wp-content/uploads/2023/07/').'/' }}{{ Auth::user()->metaData->pro_pic_1 }}"
                                    class="avatar avatar-sm me-3" alt="xd">
                                <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
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
                                            <div class="mb-auto">
                                                <img src="{{ asset('assets/img/team-2.jpg') }}"
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
                                            <div class="mb-auto">
                                                <img src="{{ asset('assets/img/small-logos/logo-spotify.svg') }}"
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
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  mb-auto">
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
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0"></h6>
                        </div>
                        <div class="col-6 text-end">
                            <!-- <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Add Experience
                            </button> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12"> -->
                <section class="resume-section p-3 p-lg-5 " id="experience">
                    <div class="row mb-auto">
                        <div class="col-12">
                            <h2 class="  text-center">Experience</h2>
                            <div class="mb-5 heading-border"></div>
                        </div>
                        @foreach($experience as $exp)
                        <div class="resume-item col-md-6 col-sm-12">
                            <div class="card mx-0 p-4 mb-5"
                                style="border-color: #17a2b8; box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.21);">
                                <div class="resume-content mr-auto">
                                    <h4 class="mb-3"><i class="fa fa-globe mr-3 text-info"></i> {{ $exp->company_name }}
                                        <!-- <button type="button" class="btn btn-block edit" data-id="{{ $exp->id }}"
                                            style="margin-left:90px;">
                                            <i class="fa fa-edit"></button></i> -->
                                        <!-- <button type="button" class="btn btn-block delete" data-id="{{ $exp->id }}"
                                            style="padding-left:5px;">
                                            <i class="fa fa-trash"></button></i> -->
                                        <!-- <i class="fa fa-edit edit" style="margin-left:90px;"></i>
                                        <i class="fa fa-trash delete" style="padding-left:10px;"></i> -->
                                    </h4>
                                    <p>
                                        @php
                                        $text = str_ireplace("<br />", "\r\n", $exp->description);
                                        echo $text;
                                        @endphp
                                    </p>
                                </div>
                                <div class="resume-date text-md-right">
                                    <span class="text-primary">{{ $exp->start_date }} -
                                        {{ $exp->end_date ? $exp->end_date : 'Present' }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                <!--====================================================
                           AWARDS
    ======================================================-->
                <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
                    <div class="row mb-auto">
                        <div class="col-12">
                            <h2 class="  text-center">Awards</h2>
                            <div class="mb-5 heading-border"></div>
                        </div>
                        @if(!empty($achievements))
                        <div class="main-award" id="award-box">
                            @foreach($achievements as $achievement)
                            <div class="award">
                                <div class="award-icon"></div>
                                <div class="award-content">
                                    <!-- <span class="date">Apr 2017 - Mar 2018</span>
                                    <h5 class="title">Google Analytics Certified Developer</h5> -->
                                    <p class="description">
                                        {{ $achievement->description }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </section>
                <!-- </div> -->
            </div>
        </div>
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header info-color white-text">
                        <h6 class="title"><b>Add Experience</b></h6>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body editAvailability">
                        <div class="card card-plain">
                            <div class="card-body">
                                <form method="POST" action="{{ route('mentor.experience.save') }}"
                                    role="form text-left">
                                    @csrf
                                    <input type="hidden" name="row_id" value="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group input-group-static mb-3">
                                                <label>Company </label>
                                                <input type="text" name="company" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group input-group-static mb-3">
                                                <label>Designation</label>
                                                <input type="text" name="designation" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-group input-group-static mb-3">
                                                <label>Job Description</label>
                                                <textarea class="form-control" name="description" rows="5"
                                                    spellcheck="false"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group input-group-static mb-3">
                                                <label>Start Date</label>
                                                <input type="date" name="start_date" class="form-control datevalue">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group input-group-static mb-3">
                                                <label>End Date</label>
                                                <input type="date" name="end_date" class="form-control datevalue">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-group input-group-static mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" name="current" class="form-check-input"
                                                        id="customCheckDisabled">
                                                    <label class="custom-control-label" for="customCheckDisabled">Are
                                                        you Currently
                                                        working here ? (If yes please check)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal" id="editExperience" tabindex="-1" role="dialog"
                    aria-labelledby="editExperienceModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header info-color white-text">
                                <h6 class="title"><b>Edit Experience</b></h6>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="{{ route('mentor.experience.save') }}" role="form text-left">
                                @csrf
                                <div class="modal-body editExperience">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn bg-gradient-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </main>
    <script type="text/javascript">
    $(document).ready(function() {

        $('body').on('click', '.edit', function() {
            var Id = $(this).data('id');
            $.ajax({
                url: "{{ route('mentor.experience.edit') }}",
                type: "GET",
                data: {
                    'Id': Id
                },
                success: function(response) {
                    $("#editExperience .modal-body").html(response);
                    $("#editExperience").modal('show');
                }
            });
        });

        $('body').on('click', '.delete', function() {
            var Id = $(this).data('id');
            $.ajax({
                url: "{{ route('mentor.experience.delete') }}",
                type: "GET",
                data: {
                    'Id': Id
                },
            });
        });
    });
    </script>
    <script>
    @if(Session::has('message'))
    var type = "{{Session::get('alert-type','info')}}"

    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
    </script>
</body>

</html>