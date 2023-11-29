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
    @include('partials.sidebar')
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Mentor</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Scheduled Calls</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Scheduled Calls</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                           <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                              <img src="{{ asset('public/assets/img/user-avatar.png') }}" class="avatar avatar-sm me-3" alt="xd">
                              <span class="d-sm-inline d-none">Admin</span>
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
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('assets/img/team-2.jpg') }}" class="avatar avatar-sm  me-3 ">
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
                                                <img src="{{ asset('assets/img/small-logos/logo-spotify.svg') }}" class="avatar avatar-sm bg-gradient-dark  me-3 ">
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
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
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
                <div class="page-wrapper">
                    <div class="content">
                        <div class="row">
                            {{-- <div class="col-sm-4 col-2">
                            <h4 class="page-title"></h4>
                        </div> --}}
                            <div class="col-sm-12 col-12 text-right m-b-30 cont">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle ms-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Add
                                    </button>
                                    <ul class="dropdown-menu border" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#block_time"> <i class="fa-solid fa-mars me-2"></i>Block Time
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-times-circle me-2"></i>New
                                                Appointment
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="col-sm-4 col-2">
                            <button type="button" class="fa fa-calender" onclick="displayCalender()"></button>
                        </div> --}}
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box mb-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="listAppointment"></div>
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="bookingId" id="bookingId">
                    </div>
                </div>
                <div class="modal fade" id="block_time" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalLabel">{{ __('Add Block Time') }}</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="block_time_form" data-href="" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="form-control mb-2 col-md-6">
                                            <label>{{ __('Date') }}*</label>
                                            <input type="date" class="form-control" name="block_date" id="block_date" required>
                                        </div>
                                        <div class="form-control mb-2 col-md-6">
                                            <label>{{ __('Staff') }}*</label>
                                            <select id="staff" name="staff" class="form-control custom-select2" required>
                                                <option value="">- Select One -</option>
                                                <option value="">
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-control mb-2 col-md-6">
                                            <label class="custom-control-label" for="customSwitch1">{{ __('Start Time') }}*</label>
                                            <input type="text" name="start_time" id="start_time" class="form-control filters cm_tfilters daterangepicker-default" required>
                                        </div>
                                        <div class="form-control mb-2 col-md-6">
                                            <label>{{ __('End Time') }}*</label>
                                            <input type="text" name="end_time" id="end_time" class="form-control filters cm_tfilters daterangepicker-default" required>
                                        </div>
                                        <div class="form-control mb-2 col-md-6">
                                            <label>{{ __('Description') }}*</label>
                                            <input type="text" name="description" id="description" class="form-control" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary hvr-shrink" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                <button type="submit" name="submitform" id="submitform" class="btn btn-primary"><i class="fa-solid mx-1 fa-floppy-disk"></i>{{ __('Save') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="bookingDetails" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header calenderBooking">
                                <h6 class="modal-title" id="title"></h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="patientDetails">
                                        <h6 id="name"></h6>
                                        <h6 id="mobile"></h6>
                                        <h6 id="service"></h6>
                                        <h6 id="duration"></h6>
                                        <h6 id="staff"></h6>
                                        <h6 id="price"></h6>
                                        <h6 id="package"></h6>
                                    </div>
                                    {{-- <div class="details">
                                    <div class="details-cal">
                                        <p class="calendar">
                                            15<em>March 12:30</em>
                                        </p>
                                    </div>
                                </div> --}}
                                </div>
                                {{-- <hr>
                            <div class="row">
                                <div class="patientDetails">
                                    <h5 id="medical"></h5>
                                    <h5 id="channel"></h5>
                                    <h5 id="paymentStatus"></h5>
                                    <h5 id="location"></h5>
                                </div>
                            </div>
                            <hr> --}}
                            </div>
                            <div class="modal-footer">
                                <div class="row">
                                    <button type="button" class="btn btn-block edit view" style="display:none;" onclick="viewCompletedAppointment()">View <i class="fa fa-stethoscope"></button></i>
                                    <button type="button" class="btn btn-block edit editBooking" onclick="editBooking()">Edit <i class="fa fa-edit"></button></i><br />
                                    <button type="button" class="btn btn-block edit reschedule" onclick="rescheduleBooking()">Reschedule <i class="fa fa-table"></button></i>
                                    <button type="button" class="btn btn-block edit duplicate" onclick="duplicateBooking()">Duplicate <i class="fa fa-copy"></button></i>
                                    <button type="button" class="btn btn-block edit deleteBooking" onclick="deleteBooking()">Delete <i class="fa fa-trash"></button></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="edit_booking" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="edit_booking">
                            <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalLabel">
                                    {{ __('Edit Appointment') }}
                                </h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <form class="edit_booking_form" data-href="" method="post">
                                @csrf
                                <div class="modal-body">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary hvr-shrink" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                    <button type="submit" name="submit_edit_form" id="submit_edit_form" class="btn btn-primary"><i class="fa-solid mx-1 fa-floppy-disk"></i>{{ __('Save') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="duplicate_booking" class="modal fade duplicate_booking-modal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalLabel">{{ __('Duplicate Appointment') }}</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="duplicate_booking_form" data-href="" method="post">
                                @csrf
                                <div class="modal-body duplicate_booking">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary hvr-shrink" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                    <button type="submit" name="submit_duplicate_form" id="submit_duplicate_form" class="btn btn-primary"><i class="fa-solid mx-1 fa-floppy-disk"></i>{{ __('Save') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
        @include('admin.scripts')
</body>
</html>