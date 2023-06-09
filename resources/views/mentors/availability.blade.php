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
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Mentor</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Availability</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Availability</h6>
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
                        <a href="{{ route('mentor.dashboard.profile',[Auth::id()]) }}" class="nav-link text-body font-weight-bold px-0">
                            <img src="{{ asset('public/assets/img/').'/' }}{{ Auth::user()->metaData->profile_pic }}" class="avatar avatar-sm me-3" alt="xd">
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
        <!--====================================================
                           Upcoming Sessions
    ======================================================-->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-12 col-md-6 mb-lg-0 mb-4">
                    <div class="card mt-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <h6 class="mb-0"></h6>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Add New Availability
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Time</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                            <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    2023-07-05
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    13:30 - 14:00
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <div class="avatar-group mt-2">
                                                    <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Join Session">
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="avatar-group mt-2">
                                                    <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Join Session">
                                                        Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    2023-07-09
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    15:45 - 16:15
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <div class="avatar-group mt-2">
                                                    <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Join Session">
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="avatar-group mt-2">
                                                    <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Join Session">
                                                        Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    2023-07-11
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    12:00 - 12:30
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <div class="avatar-group mt-2">
                                                    <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Join Session">
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="avatar-group mt-2">
                                                    <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Join Session">
                                                        Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Set your weekly hours</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card card-plain">
                            <div class="card-body">
                                <form method="POST" action="{{ route('mentor.schedule.save') }}" role="form text-left">
                                    @csrf
                                      <input type="hidden" name="row_id" value="">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label"></label>
                                        <select class="form-control" name="time_zone" required>
                                             <option value="">Choose your time zones</option>
                                           @foreach($timezones as $timezone => $value)
                                             <option value="{{ $value }}">{{ $timezone }}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                    @for($i=0; $i<7; $i++)
                                      <div class="row">
                                       <div class="col-md-3">
                                          <div class="input-group input-group-static my-3">
                                            <label>Date</label>
                                            <input type="text" name="date[{{$i}}]" class="form-control date" required>
                                         </div>
                                       </div>
                                       <div class="col-md-3">
                                         <div class="input-group input-group-static my-3">
                                          <label>Start Time</label>
                                          <input type="time" name="start_time[{{$i}}]" class="form-control" required>
                                         </div>   
                                       </div> 
                                       <div class="col-md-3">                             
                                          <div class="input-group input-group-static my-3">
                                            <label>End Time</label>
                                            <input type="time" name="end_time[{{$i}}]" class="form-control" required>
                                         </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="input-group input-group-static my-3">
                                            <label></label>
                                            <i class="fa fa-plus" id="rowAdder"> Add</i>
                                          </div>
                                        </div>
                                        <div id="newinput"></div>
                                      </div>
                                    @endfor
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        <!--====================================================
                           Requested Sessions
    ======================================================-->
        <script type="text/javascript">
            $(document).ready(function() {
                $('.date').datepicker({
                    multidate: true,
                    format: 'dd-mm-yyyy'
                });

                // $('.time').timepicker({
                //     format: 'hh:mm A',
                // });

            $("#rowAdder").click(function () {
              newRowAdd =
                '<div class="row">' +
                '<div class="col-md-3">' +
                '<div class="input-group input-group-static my-3">' +
                '<label> </label>' +
                '<input type="hidden" name="id" class="form-control">' +                
                '</div></div>' +
                '<div class="col-md-3">' +
                '<div class="input-group input-group-static my-3">' +
                '<label>Start Time</label>' +
                '<input type="time" name="start_time[]" class="form-control">' +
                '</div></div>' +
                '<div class="col-md-3">' +
                '<div class="input-group input-group-static my-3">' +
                ' <label>End Time</label>' +
                '<input type="time" name="end_time[]" class="form-control">' +
                '</div></div>' +
                // '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                '<i class="bi bi-trash"> Delete</i>  </div>';
                // ' </div> </div>';
               $('#newinput').append(newRowAdd);
            });

             $("#DeleteRow").click(function () {
               $(this).parents("#row").remove();
             });
          });
        </script>
</body>
</html>
<style>
    .datepicker {
        padding: 4px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        direction: ltr;
    }

    .datepicker-inline {
        width: 220px;
    }

    .datepicker.datepicker-rtl {
        direction: rtl;
    }

    .datepicker.datepicker-rtl table tr td span {
        float: right;
    }

    .datepicker-dropdown {
        top: 0;
        left: 0;
    }

    .datepicker-dropdown:before {
        content: '';
        display: inline-block;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-bottom: 7px solid #999999;
        border-top: 0;
        border-bottom-color: rgba(0, 0, 0, 0.2);
        position: absolute;
    }

    .datepicker-dropdown:after {
        content: '';
        display: inline-block;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #ffffff;
        border-top: 0;
        position: absolute;
    }

    .datepicker-dropdown.datepicker-orient-left:before {
        left: 6px;
    }

    .datepicker-dropdown.datepicker-orient-left:after {
        left: 7px;
    }

    .datepicker-dropdown.datepicker-orient-right:before {
        right: 6px;
    }

    .datepicker-dropdown.datepicker-orient-right:after {
        right: 7px;
    }

    .datepicker-dropdown.datepicker-orient-bottom:before {
        top: -7px;
    }

    .datepicker-dropdown.datepicker-orient-bottom:after {
        top: -6px;
    }

    .datepicker-dropdown.datepicker-orient-top:before {
        bottom: -7px;
        border-bottom: 0;
        border-top: 7px solid #999999;
    }

    .datepicker-dropdown.datepicker-orient-top:after {
        bottom: -6px;
        border-bottom: 0;
        border-top: 6px solid #ffffff;
    }

    .datepicker>div {
        display: none;
    }

    .datepicker table {
        margin: 0;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .datepicker td,
    .datepicker th {
        text-align: center;
        width: 20px;
        height: 20px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        border: none;
    }

    .table-striped .datepicker table tr td,
    .table-striped .datepicker table tr th {
        background-color: transparent;
    }

    .datepicker table tr td.day:hover,
    .datepicker table tr td.day.focused {
        background: #eeeeee;
        cursor: pointer;
    }

    .datepicker table tr td.old,
    .datepicker table tr td.new {
        color: #999999;
    }

    .datepicker table tr td.disabled,
    .datepicker table tr td.disabled:hover {
        background: none;
        color: #999999;
        cursor: default;
    }

    .datepicker table tr td.highlighted {
        background: #d9edf7;
        border-radius: 0;
    }

    .datepicker table tr td.today,
    .datepicker table tr td.today:hover,
    .datepicker table tr td.today.disabled,
    .datepicker table tr td.today.disabled:hover {
        background-color: #fde19a;
        background-image: -moz-linear-gradient(to bottom, #fdd49a, #fdf59a);
        background-image: -ms-linear-gradient(to bottom, #fdd49a, #fdf59a);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fdd49a), to(#fdf59a));
        background-image: -webkit-linear-gradient(to bottom, #fdd49a, #fdf59a);
        background-image: -o-linear-gradient(to bottom, #fdd49a, #fdf59a);
        background-image: linear-gradient(to bottom, #fdd49a, #fdf59a);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fdd49a', endColorstr='#fdf59a', GradientType=0);
        border-color: #fdf59a #fdf59a #fbed50;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #000;
    }

    .datepicker table tr td.today:hover,
    .datepicker table tr td.today:hover:hover,
    .datepicker table tr td.today.disabled:hover,
    .datepicker table tr td.today.disabled:hover:hover,
    .datepicker table tr td.today:active,
    .datepicker table tr td.today:hover:active,
    .datepicker table tr td.today.disabled:active,
    .datepicker table tr td.today.disabled:hover:active,
    .datepicker table tr td.today.active,
    .datepicker table tr td.today:hover.active,
    .datepicker table tr td.today.disabled.active,
    .datepicker table tr td.today.disabled:hover.active,
    .datepicker table tr td.today.disabled,
    .datepicker table tr td.today:hover.disabled,
    .datepicker table tr td.today.disabled.disabled,
    .datepicker table tr td.today.disabled:hover.disabled,
    .datepicker table tr td.today[disabled],
    .datepicker table tr td.today:hover[disabled],
    .datepicker table tr td.today.disabled[disabled],
    .datepicker table tr td.today.disabled:hover[disabled] {
        background-color: #fdf59a;
    }

    .datepicker table tr td.today:active,
    .datepicker table tr td.today:hover:active,
    .datepicker table tr td.today.disabled:active,
    .datepicker table tr td.today.disabled:hover:active,
    .datepicker table tr td.today.active,
    .datepicker table tr td.today:hover.active,
    .datepicker table tr td.today.disabled.active,
    .datepicker table tr td.today.disabled:hover.active {
        background-color: #fbf069 \9;
    }

    .datepicker table tr td.today:hover:hover {
        color: #000;
    }

    .datepicker table tr td.today.active:hover {
        color: #fff;
    }

    .datepicker table tr td.range,
    .datepicker table tr td.range:hover,
    .datepicker table tr td.range.disabled,
    .datepicker table tr td.range.disabled:hover {
        background: #eeeeee;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
    }

    .datepicker table tr td.range.today,
    .datepicker table tr td.range.today:hover,
    .datepicker table tr td.range.today.disabled,
    .datepicker table tr td.range.today.disabled:hover {
        background-color: #f3d17a;
        background-image: -moz-linear-gradient(to bottom, #f3c17a, #f3e97a);
        background-image: -ms-linear-gradient(to bottom, #f3c17a, #f3e97a);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f3c17a), to(#f3e97a));
        background-image: -webkit-linear-gradient(to bottom, #f3c17a, #f3e97a);
        background-image: -o-linear-gradient(to bottom, #f3c17a, #f3e97a);
        background-image: linear-gradient(to bottom, #f3c17a, #f3e97a);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f3c17a', endColorstr='#f3e97a', GradientType=0);
        border-color: #f3e97a #f3e97a #edde34;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
    }

    .datepicker table tr td.range.today:hover,
    .datepicker table tr td.range.today:hover:hover,
    .datepicker table tr td.range.today.disabled:hover,
    .datepicker table tr td.range.today.disabled:hover:hover,
    .datepicker table tr td.range.today:active,
    .datepicker table tr td.range.today:hover:active,
    .datepicker table tr td.range.today.disabled:active,
    .datepicker table tr td.range.today.disabled:hover:active,
    .datepicker table tr td.range.today.active,
    .datepicker table tr td.range.today:hover.active,
    .datepicker table tr td.range.today.disabled.active,
    .datepicker table tr td.range.today.disabled:hover.active,
    .datepicker table tr td.range.today.disabled,
    .datepicker table tr td.range.today:hover.disabled,
    .datepicker table tr td.range.today.disabled.disabled,
    .datepicker table tr td.range.today.disabled:hover.disabled,
    .datepicker table tr td.range.today[disabled],
    .datepicker table tr td.range.today:hover[disabled],
    .datepicker table tr td.range.today.disabled[disabled],
    .datepicker table tr td.range.today.disabled:hover[disabled] {
        background-color: #f3e97a;
    }

    .datepicker table tr td.range.today:active,
    .datepicker table tr td.range.today:hover:active,
    .datepicker table tr td.range.today.disabled:active,
    .datepicker table tr td.range.today.disabled:hover:active,
    .datepicker table tr td.range.today.active,
    .datepicker table tr td.range.today:hover.active,
    .datepicker table tr td.range.today.disabled.active,
    .datepicker table tr td.range.today.disabled:hover.active {
        background-color: #efe24b \9;
    }

    .datepicker table tr td.selected,
    .datepicker table tr td.selected:hover,
    .datepicker table tr td.selected.disabled,
    .datepicker table tr td.selected.disabled:hover {
        background-color: #9e9e9e;
        background-image: -moz-linear-gradient(to bottom, #b3b3b3, #808080);
        background-image: -ms-linear-gradient(to bottom, #b3b3b3, #808080);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#b3b3b3), to(#808080));
        background-image: -webkit-linear-gradient(to bottom, #b3b3b3, #808080);
        background-image: -o-linear-gradient(to bottom, #b3b3b3, #808080);
        background-image: linear-gradient(to bottom, #b3b3b3, #808080);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#b3b3b3', endColorstr='#808080', GradientType=0);
        border-color: #808080 #808080 #595959;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }

    .datepicker table tr td.selected:hover,
    .datepicker table tr td.selected:hover:hover,
    .datepicker table tr td.selected.disabled:hover,
    .datepicker table tr td.selected.disabled:hover:hover,
    .datepicker table tr td.selected:active,
    .datepicker table tr td.selected:hover:active,
    .datepicker table tr td.selected.disabled:active,
    .datepicker table tr td.selected.disabled:hover:active,
    .datepicker table tr td.selected.active,
    .datepicker table tr td.selected:hover.active,
    .datepicker table tr td.selected.disabled.active,
    .datepicker table tr td.selected.disabled:hover.active,
    .datepicker table tr td.selected.disabled,
    .datepicker table tr td.selected:hover.disabled,
    .datepicker table tr td.selected.disabled.disabled,
    .datepicker table tr td.selected.disabled:hover.disabled,
    .datepicker table tr td.selected[disabled],
    .datepicker table tr td.selected:hover[disabled],
    .datepicker table tr td.selected.disabled[disabled],
    .datepicker table tr td.selected.disabled:hover[disabled] {
        background-color: #808080;
    }

    .datepicker table tr td.selected:active,
    .datepicker table tr td.selected:hover:active,
    .datepicker table tr td.selected.disabled:active,
    .datepicker table tr td.selected.disabled:hover:active,
    .datepicker table tr td.selected.active,
    .datepicker table tr td.selected:hover.active,
    .datepicker table tr td.selected.disabled.active,
    .datepicker table tr td.selected.disabled:hover.active {
        background-color: #666666 \9;
    }

    .datepicker table tr td.active,
    .datepicker table tr td.active:hover,
    .datepicker table tr td.active.disabled,
    .datepicker table tr td.active.disabled:hover {
        background-color: #006dcc;
        background-image: -moz-linear-gradient(to bottom, #0088cc, #0044cc);
        background-image: -ms-linear-gradient(to bottom, #0088cc, #0044cc);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
        background-image: -webkit-linear-gradient(to bottom, #0088cc, #0044cc);
        background-image: -o-linear-gradient(to bottom, #0088cc, #0044cc);
        background-image: linear-gradient(to bottom, #0088cc, #0044cc);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);
        border-color: #0044cc #0044cc #002a80;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }

    .datepicker table tr td.active:hover,
    .datepicker table tr td.active:hover:hover,
    .datepicker table tr td.active.disabled:hover,
    .datepicker table tr td.active.disabled:hover:hover,
    .datepicker table tr td.active:active,
    .datepicker table tr td.active:hover:active,
    .datepicker table tr td.active.disabled:active,
    .datepicker table tr td.active.disabled:hover:active,
    .datepicker table tr td.active.active,
    .datepicker table tr td.active:hover.active,
    .datepicker table tr td.active.disabled.active,
    .datepicker table tr td.active.disabled:hover.active,
    .datepicker table tr td.active.disabled,
    .datepicker table tr td.active:hover.disabled,
    .datepicker table tr td.active.disabled.disabled,
    .datepicker table tr td.active.disabled:hover.disabled,
    .datepicker table tr td.active[disabled],
    .datepicker table tr td.active:hover[disabled],
    .datepicker table tr td.active.disabled[disabled],
    .datepicker table tr td.active.disabled:hover[disabled] {
        background-color: #0044cc;
    }

    .datepicker table tr td.active:active,
    .datepicker table tr td.active:hover:active,
    .datepicker table tr td.active.disabled:active,
    .datepicker table tr td.active.disabled:hover:active,
    .datepicker table tr td.active.active,
    .datepicker table tr td.active:hover.active,
    .datepicker table tr td.active.disabled.active,
    .datepicker table tr td.active.disabled:hover.active {
        background-color: #003399 \9;
    }

    .datepicker table tr td span {
        display: block;
        width: 23%;
        height: 54px;
        line-height: 54px;
        float: left;
        margin: 1%;
        cursor: pointer;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

    .datepicker table tr td span:hover {
        background: #eeeeee;
    }

    .datepicker table tr td span.disabled,
    .datepicker table tr td span.disabled:hover {
        background: none;
        color: #999999;
        cursor: default;
    }

    .datepicker table tr td span.active,
    .datepicker table tr td span.active:hover,
    .datepicker table tr td span.active.disabled,
    .datepicker table tr td span.active.disabled:hover {
        background-color: #006dcc;
        background-image: -moz-linear-gradient(to bottom, #0088cc, #0044cc);
        background-image: -ms-linear-gradient(to bottom, #0088cc, #0044cc);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
        background-image: -webkit-linear-gradient(to bottom, #0088cc, #0044cc);
        background-image: -o-linear-gradient(to bottom, #0088cc, #0044cc);
        background-image: linear-gradient(to bottom, #0088cc, #0044cc);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);
        border-color: #0044cc #0044cc #002a80;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }

    .datepicker table tr td span.active:hover,
    .datepicker table tr td span.active:hover:hover,
    .datepicker table tr td span.active.disabled:hover,
    .datepicker table tr td span.active.disabled:hover:hover,
    .datepicker table tr td span.active:active,
    .datepicker table tr td span.active:hover:active,
    .datepicker table tr td span.active.disabled:active,
    .datepicker table tr td span.active.disabled:hover:active,
    .datepicker table tr td span.active.active,
    .datepicker table tr td span.active:hover.active,
    .datepicker table tr td span.active.disabled.active,
    .datepicker table tr td span.active.disabled:hover.active,
    .datepicker table tr td span.active.disabled,
    .datepicker table tr td span.active:hover.disabled,
    .datepicker table tr td span.active.disabled.disabled,
    .datepicker table tr td span.active.disabled:hover.disabled,
    .datepicker table tr td span.active[disabled],
    .datepicker table tr td span.active:hover[disabled],
    .datepicker table tr td span.active.disabled[disabled],
    .datepicker table tr td span.active.disabled:hover[disabled] {
        background-color: #0044cc;
    }

    .datepicker table tr td span.active:active,
    .datepicker table tr td span.active:hover:active,
    .datepicker table tr td span.active.disabled:active,
    .datepicker table tr td span.active.disabled:hover:active,
    .datepicker table tr td span.active.active,
    .datepicker table tr td span.active:hover.active,
    .datepicker table tr td span.active.disabled.active,
    .datepicker table tr td span.active.disabled:hover.active {
        background-color: #003399 \9;
    }

    .datepicker table tr td span.old,
    .datepicker table tr td span.new {
        color: #999999;
    }

    .datepicker .datepicker-switch {
        width: 145px;
    }

    .datepicker .datepicker-switch,
    .datepicker .prev,
    .datepicker .next,
    .datepicker tfoot tr th {
        cursor: pointer;
    }

    .datepicker .datepicker-switch:hover,
    .datepicker .prev:hover,
    .datepicker .next:hover,
    .datepicker tfoot tr th:hover {
        background: #eeeeee;
    }

    .datepicker .cw {
        font-size: 10px;
        width: 12px;
        padding: 0 2px 0 5px;
        vertical-align: middle;
    }

    .input-append.date .add-on,
    .input-prepend.date .add-on {
        cursor: pointer;
    }

    .input-append.date .add-on i,
    .input-prepend.date .add-on i {
        margin-top: 3px;
    }

    .input-daterange input {
        text-align: center;
    }

    .input-daterange input:first-child {
        -webkit-border-radius: 3px 0 0 3px;
        -moz-border-radius: 3px 0 0 3px;
        border-radius: 3px 0 0 3px;
    }

    .input-daterange input:last-child {
        -webkit-border-radius: 0 3px 3px 0;
        -moz-border-radius: 0 3px 3px 0;
        border-radius: 0 3px 3px 0;
    }

    .input-daterange .add-on {
        display: inline-block;
        width: auto;
        min-width: 16px;
        height: 18px;
        padding: 4px 5px;
        font-weight: normal;
        line-height: 18px;
        text-align: center;
        text-shadow: 0 1px 0 #ffffff;
        vertical-align: middle;
        background-color: #eeeeee;
        border: 1px solid #ccc;
        margin-left: -5px;
        margin-right: -5px;
    }
</style>