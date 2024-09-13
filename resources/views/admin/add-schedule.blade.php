<!DOCTYPE html>
<html lang="en">
@include('partials.header')

<body class="g-sidenav-show  bg-gray-200">
    @include('partials.sidebar')
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">Mentor</a></li>
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
                                <img src="{{ asset('public/assets/img/user-avatar.png') }}"
                                    class="avatar avatar-sm me-3" alt="xd">
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
                                            <div class="my-auto">
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
<body
    class="page-template page-template-elementor_canvas page page-id-11 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-11 payment-page">

    @include('partials.menu')
    <div class="row">
        <div class="col-sm-4 mb-3 mt-2">
            <div class="card h-100">
                <div class="card-body">
                    <i class="fa-thin fa-circle-arrow-left"></i>
                    <div class="rounded-circle mt-3">
                        <a href="{{ route('profile', [$mentor ? $mentor->id : '']) }}" title="Mentor"> <img
                                class="rounded-circle" decoding="async"
                                src="{{ asset('public/assets/img/').'/'.$mentor->metaData->profile_pic }}" alt="Mentor"
                                width="100" height="100">
                        </a>
                    </div>
                    <div class="card_carousel_title"> {{ $mentor ?  $mentor->name : '' }}</div>
                    <h5 class="card-title">30 Min Meeting</h5>
                    <!-- <i class="fab fa-time"> 30 Min</i> -->
                    <form name="scheduleCallForm" method="POST" enctype="multipart/form-data" class="scheduleCallForm"
                        id="scheduleCallForm">
                        @csrf
                        <input type="hidden" name="call_id" value="{{ $call->id ?? '' }}">
                        <input type="hidden" name="duration" value="30">
                        <input class="day" type="hidden" name="day" value="">
                        <input class="month" type="hidden" name="month" value="">
                        <input class="year" type="hidden" name="year" value="">
                        <input type="hidden" class="mentor" name="mentor" value="{{ $mentor ? $mentor->id : '' }}">
                        <input type="hidden" class="price" name="price"
                            value="{{ $mentor->metaData ? $mentor->metaData->price_per_call : '0' }}">
                        <input type="hidden" class="time" name="time" value="">
                        <label class="form-label desc" style="color:black;">Description (Regarding the topic)</label>
                        <textarea required="required" id="desc" class="form-control" rows="5" cols="5"
                            name="desc">{{ $call->description ?? '' }}</textarea>
                        <!-- <div class="text-danger error" data-error="desc"></div> -->
                        <label class="form-label" style="color:black;">Upload Document (if any)</label>
                        <input type="file" name="doc" class="form-control" id="customFile">
                </div>
            </div>
        </div>
        <div class="col-sm-8 mb-2 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="errorMsgntainer"></div>
                            <div class="col-md-6 text-left mb-0 mt-3">
                                <h2 class="heading-section"><b>Select a Date & Time</b></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content w-100">
                                    <div class="calendar-container mb-3">
                                        <div class="timezone">
                                            <select name="timezone" class="form-control mt-1 timezone select2"
                                                id="timezone" style="width:50%" required>
                                                <option value=""><b>Time zone</b></option>
                                                @foreach($timezone as $zone => $time)
                                                @php
                                                $choosen_zone = $call->utc ?? auth()->user()->metaData->timezone;
                                                @endphp
                                                <option value="{{ $time }}"
                                                    {{ $time == $choosen_zone  ? 'selected' : '' }}>
                                                    {{ $time }}</option>
                                                @endforeach
                                            </select>
                                            <!-- <div class="text-danger error" data-error="timezone"></div> -->
                                        </div>
                                        <div class="calendar">
                                            <div class="year-header">
                                                <span class="left-button fa fa-chevron-left" id="prev"> </span>
                                                <span class="year" id="label"></span>
                                                <span class="right-button fa fa-chevron-right" id="next"> </span>
                                            </div>
                                            <table class="months-table w-100">
                                                <tbody>
                                                    <tr class="months-row">
                                                        <td class="month">Jan</td>
                                                        <td class="month">Feb</td>
                                                        <td class="month">Mar</td>
                                                        <td class="month">Apr</td>
                                                        <td class="month">May</td>
                                                        <td class="month">Jun</td>
                                                        <td class="month">Jul</td>
                                                        <td class="month">Aug</td>
                                                        <td class="month">Sep</td>
                                                        <td class="month">Oct</td>
                                                        <td class="month">Nov</td>
                                                        <td class="month">Dec</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="days-table w-100">
                                                <td class="day">Sun</td>
                                                <td class="day">Mon</td>
                                                <td class="day">Tue</td>
                                                <td class="day">Wed</td>
                                                <td class="day">Thu</td>
                                                <td class="day">Fri</td>
                                                <td class="day">Sat</td>
                                            </table>
                                            <div class="frame">
                                                <table class="dates-table w-100">
                                                    <tbody class="tbody">
                                                    </tbody>
                                                </table>
                                            </div>
                                            <button class="button" id="add-button" style="display:none;">Add
                                                Event</button>
                                        </div>
                                    </div>
                                    @if(!empty($nextAvailability))
                                    <div style="margin-left:20px;">
                                        <h4 style="color:green"><b>Next Availability on
                                                {{ $nextAvailability->date }}</b></h4>
                                    </div>
                                    @endif
                                    <div class="events-container">
                                    </div>
                                    <div class="dialog" id="dialog">
                                        <h2 class="dialog-header"> Add New Event </h2>
                                        <form class="form" id="form">
                                            <div class="form-container" align="center">
                                                <label class="form-label" id="valueFromMyButton" for="name">Event
                                                    name</label>
                                                <input class="input" type="text" id="name" maxlength="36">
                                                <label class="form-label" id="valueFromMyButton" for="count">Number
                                                    of people to
                                                    invite</label>
                                                <input class="input" type="number" id="count" min="0" max="1000000"
                                                    maxlength="7">
                                                <input type="button" value="Cancel" class="button" id="cancel-button">
                                                <input type="button" value="OK" class="button button-white"
                                                    id="ok-button">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="calendar">
                                                <div class="year-header">
                                                    <span class="left-button fa fa-chevron-left" id="prev"> </span>
                                                    <span class="year" id="label"></span>
                                                    <span class="right-button fa fa-chevron-right" id="next"> </span>
                                                </div>
                                                <table class="months-table w-100">
                                                    <tbody>
                                                        <tr class="months-row">
                                                            <td class="month">Jan</td>
                                                            <td class="month">Feb</td>
                                                            <td class="month">Mar</td>
                                                            <td class="month">Apr</td>
                                                            <td class="month">May</td>
                                                            <td class="month">Jun</td>
                                                            <td class="month">Jul</td>
                                                            <td class="month">Aug</td>
                                                            <td class="month">Sep</td>
                                                            <td class="month">Oct</td>
                                                            <td class="month">Nov</td>
                                                            <td class="month">Dec</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="days-table w-100">
                                                    <td class="day">Sun</td>
                                                    <td class="day">Mon</td>
                                                    <td class="day">Tue</td>
                                                    <td class="day">Wed</td>
                                                    <td class="day">Thu</td>
                                                    <td class="day">Fri</td>
                                                    <td class="day">Sat</td>
                                                </table>
                                                <div class="frame">
                                                    <table class="dates-table w-100">
                                                        <tbody class="tbody">
                                                        </tbody>
                                                    </table>
                                                </div>
                                                 <div class="timezone">
                                                    <select name="timezone" class="form-control mt-1 timezone"
                                                        id="timezone" style="width:50%" required>
                                                        <option value=""><b>Time zone</b></option>
                                                        @foreach($timezone as $zone => $time)
                                                        <option value="{{ $time }}">{{ $zone }}</option>
                                                        @endforeach
                                                    </select>
                                                </div> -->
                                    <!-- </form> -->
                                    <!-- <select class="form-control" id="add-button">Add Event

</select> -->
                                    <!-- </div>
                                        </div>
                                        <div class="events-container">
                                        </div>
                                        <div class="dialog" id="dialog">
                                            <h2 class="dialog-header"> Add New Event </h2>
                                            <form class="form" id="form">
                                                <div class="form-container" align="center">
                                                    <label class="form-label" id="valueFromMyButton" for="name">Event
                                                        name</label>
                                                    <input class="input" type="text" id="name" maxlength="36">
                                                    <label class="form-label" id="valueFromMyButton" for="count">Number
                                                        of people to invite</label>
                                                    <input class="input" type="number" id="count" min="0" max="1000000"
                                                        maxlength="7">
                                                    <input type="button" value="Cancel" class="button"
                                                        id="cancel-button">
                                                    <input type="button" value="OK" class="button button-white"
                                                        id="ok-button">
                                                </div>
                                            </form>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark btn-lg mt-5 payNow" id="payNow"
                            style="align:center;background-color:#001E64;">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
        <div class="footer-width-fixer">
            <div data-elementor-type="wp-post" data-elementor-id="32" class="elementor elementor-32">
                <footer
                    class="elementor-section elementor-top-section elementor-element elementor-element-60f0ea5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="60f0ea5" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a49692e"
                            data-id="a49692e" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-dd4d324 elementor-button-align-stretch elementor-widget elementor-widget-form"
                                    data-id="dd4d324" data-element_type="widget"
                                    data-settings="{&quot;button_width&quot;:&quot;20&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                    data-widget_type="form.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                        /*! elementor-pro - v3.5.0 - 01-11-2021 */
                                        .elementor-button.elementor-hidden,
                                        .elementor-hidden {
                                            display: none
                                        }

                                        .e-form__step {
                                            width: 100%
                                        }

                                        .e-form__step:not(.elementor-hidden) {
                                            display: -webkit-box;
                                            display: -ms-flexbox;
                                            display: flex;
                                            -ms-flex-wrap: wrap;
                                            flex-wrap: wrap
                                        }

                                        .e-form__buttons {
                                            -ms-flex-wrap: wrap;
                                            flex-wrap: wrap
                                        }

                                        .e-form__buttons,
                                        .e-form__buttons__wrapper {
                                            display: -webkit-box;
                                            display: -ms-flexbox;
                                            display: flex
                                        }

                                        .e-form__indicators {
                                            -webkit-box-pack: justify;
                                            -ms-flex-pack: justify;
                                            justify-content: space-between;
                                            -ms-flex-wrap: nowrap;
                                            flex-wrap: nowrap;
                                            font-size: 13px;
                                            margin-bottom: var(--e-form-steps-indicators-spacing)
                                        }

                                        .e-form__indicators,
                                        .e-form__indicators__indicator {
                                            display: -webkit-box;
                                            display: -ms-flexbox;
                                            display: flex;
                                            -webkit-box-align: center;
                                            -ms-flex-align: center;
                                            align-items: center
                                        }

                                        .e-form__indicators__indicator {
                                            -webkit-box-orient: vertical;
                                            -webkit-box-direction: normal;
                                            -ms-flex-direction: column;
                                            flex-direction: column;
                                            -webkit-box-pack: center;
                                            -ms-flex-pack: center;
                                            justify-content: center;
                                            -ms-flex-preferred-size: 0;
                                            flex-basis: 0;
                                            padding: 0 var(--e-form-steps-divider-gap)
                                        }

                                        .e-form__indicators__indicator__progress {
                                            width: 100%;
                                            position: relative;
                                            background-color: var(--e-form-steps-indicator-progress-background-color);
                                            border-radius: var(--e-form-steps-indicator-progress-border-radius);
                                            overflow: hidden
                                        }

                                        .e-form__indicators__indicator__progress__meter {
                                            width: var(--e-form-steps-indicator-progress-meter-width, 0);
                                            height: var(--e-form-steps-indicator-progress-height);
                                            line-height: var(--e-form-steps-indicator-progress-height);
                                            padding-right: 15px;
                                            border-radius: var(--e-form-steps-indicator-progress-border-radius);
                                            background-color: var(--e-form-steps-indicator-progress-color);
                                            color: var(--e-form-steps-indicator-progress-meter-color);
                                            text-align: right;
                                            -webkit-transition: width .1s linear;
                                            -o-transition: width .1s linear;
                                            transition: width .1s linear
                                        }

                                        .e-form__indicators__indicator:first-child {
                                            padding-left: 0
                                        }

                                        .e-form__indicators__indicator:last-child {
                                            padding-right: 0
                                        }

                                        .e-form__indicators__indicator--state-inactive {
                                            color: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2)
                                        }

                                        .e-form__indicators__indicator--state-inactive [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                            background-color: var(--e-form-steps-indicator-inactive-secondary-color, #fff)
                                        }

                                        .e-form__indicators__indicator--state-inactive object,
                                        .e-form__indicators__indicator--state-inactive svg {
                                            fill: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2)
                                        }

                                        .e-form__indicators__indicator--state-active {
                                            color: var(--e-form-steps-indicator-active-primary-color, #39b54a);
                                            border-color: var(--e-form-steps-indicator-active-secondary-color, #fff)
                                        }

                                        .e-form__indicators__indicator--state-active [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                            background-color: var(--e-form-steps-indicator-active-secondary-color, #fff)
                                        }

                                        .e-form__indicators__indicator--state-active object,
                                        .e-form__indicators__indicator--state-active svg {
                                            fill: var(--e-form-steps-indicator-active-primary-color, #39b54a)
                                        }

                                        .e-form__indicators__indicator--state-completed {
                                            color: var(--e-form-steps-indicator-completed-secondary-color, #fff)
                                        }

                                        .e-form__indicators__indicator--state-completed [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                            background-color: var(--e-form-steps-indicator-completed-primary-color, #39b54a)
                                        }

                                        .e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label {
                                            color: var(--e-form-steps-indicator-completed-primary-color, #39b54a)
                                        }

                                        .e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none {
                                            color: var(--e-form-steps-indicator-completed-primary-color, #39b54a);
                                            background-color: initial
                                        }

                                        .e-form__indicators__indicator--state-completed object,
                                        .e-form__indicators__indicator--state-completed svg {
                                            fill: var(--e-form-steps-indicator-completed-secondary-color, #fff)
                                        }

                                        .e-form__indicators__indicator__icon {
                                            width: var(--e-form-steps-indicator-padding, 30px);
                                            height: var(--e-form-steps-indicator-padding, 30px);
                                            font-size: var(--e-form-steps-indicator-icon-size);
                                            border-width: 1px;
                                            border-style: solid;
                                            display: -webkit-box;
                                            display: -ms-flexbox;
                                            display: flex;
                                            -webkit-box-pack: center;
                                            -ms-flex-pack: center;
                                            justify-content: center;
                                            -webkit-box-align: center;
                                            -ms-flex-align: center;
                                            align-items: center;
                                            overflow: hidden;
                                            margin-bottom: 10px
                                        }

                                        .e-form__indicators__indicator__icon img,
                                        .e-form__indicators__indicator__icon object,
                                        .e-form__indicators__indicator__icon svg {
                                            width: var(--e-form-steps-indicator-icon-size);
                                            height: auto
                                        }

                                        .e-form__indicators__indicator__icon .e-font-icon-svg {
                                            height: 1em
                                        }

                                        .e-form__indicators__indicator__number {
                                            width: var(--e-form-steps-indicator-padding, 30px);
                                            height: var(--e-form-steps-indicator-padding, 30px);
                                            border-width: 1px;
                                            border-style: solid;
                                            display: -webkit-box;
                                            display: -ms-flexbox;
                                            display: flex;
                                            -webkit-box-pack: center;
                                            -ms-flex-pack: center;
                                            justify-content: center;
                                            -webkit-box-align: center;
                                            -ms-flex-align: center;
                                            align-items: center;
                                            margin-bottom: 10px
                                        }

                                        .e-form__indicators__indicator--shape-circle {
                                            border-radius: 50%
                                        }

                                        .e-form__indicators__indicator--shape-square {
                                            border-radius: 0
                                        }

                                        .e-form__indicators__indicator--shape-rounded {
                                            border-radius: 5px
                                        }

                                        .e-form__indicators__indicator--shape-none {
                                            border: 0
                                        }

                                        .e-form__indicators__indicator__label {
                                            text-align: center
                                        }

                                        .e-form__indicators__indicator__separator {
                                            width: 100%;
                                            height: var(--e-form-steps-divider-width);
                                            background-color: #c2cbd2
                                        }

                                        .e-form__indicators--type-icon,
                                        .e-form__indicators--type-icon_text,
                                        .e-form__indicators--type-number,
                                        .e-form__indicators--type-number_text {
                                            -webkit-box-align: start;
                                            -ms-flex-align: start;
                                            align-items: flex-start
                                        }

                                        .e-form__indicators--type-icon .e-form__indicators__indicator__separator,
                                        .e-form__indicators--type-icon_text .e-form__indicators__indicator__separator,
                                        .e-form__indicators--type-number .e-form__indicators__indicator__separator,
                                        .e-form__indicators--type-number_text .e-form__indicators__indicator__separator {
                                            margin-top: calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2)
                                        }

                                        .elementor-field-type-hidden {
                                            display: none
                                        }

                                        .elementor-field-type-html {
                                            display: inline-block
                                        }

                                        .elementor-login .elementor-lost-password,
                                        .elementor-login .elementor-remember-me {
                                            font-size: .85em
                                        }

                                        .elementor-field-type-recaptcha_v3 .elementor-field-label {
                                            display: none
                                        }

                                        .elementor-field-type-recaptcha_v3 .grecaptcha-badge {
                                            z-index: 1
                                        }

                                        .elementor-button .elementor-form-spinner {
                                            -webkit-box-ordinal-group: 4;
                                            -ms-flex-order: 3;
                                            order: 3
                                        }

                                        .elementor-form .elementor-button>span {
                                            display: -webkit-box;
                                            display: -ms-flexbox;
                                            display: flex;
                                            -webkit-box-pack: center;
                                            -ms-flex-pack: center;
                                            justify-content: center;
                                            -webkit-box-align: center;
                                            -ms-flex-align: center;
                                            align-items: center
                                        }

                                        .elementor-form .elementor-button .elementor-button-text {
                                            white-space: normal;
                                            -webkit-box-flex: 0;
                                            -ms-flex-positive: 0;
                                            flex-grow: 0
                                        }

                                        .elementor-form .elementor-button svg {
                                            height: auto
                                        }

                                        .elementor-form .elementor-button .e-font-icon-svg {
                                            height: 1em
                                        }
                                        </style>
                                        <form class="elementor-form" method="post" name="Subscribe Form">
                                            <input type="hidden" name="post_id" value="32">
                                            <input type="hidden" name="form_id" value="dd4d324">
                                            <input type="hidden" name="referer_title" value="Browse Mentor">

                                            <input type="hidden" name="queried_id" value="2772">

                                            <div class="elementor-form-fields-wrapper elementor-labels-above">
                                                <div
                                                    class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-20 elementor-field-required elementor-mark-required">
                                                    <label for="form-field-email" class="elementor-field-label">
                                                        Subscribe to news updates </label>
                                                    <input size="1" type="email" name="form_fields[email]"
                                                        id="form-field-email"
                                                        class="elementor-field elementor-size-md  elementor-field-textual"
                                                        placeholder="Your email address" required="required"
                                                        aria-required="true">
                                                </div>
                                                <div
                                                    class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-20 e-form__buttons">
                                                    <button type="submit" class="elementor-button elementor-size-sm">
                                                        <span>
                                                            <span class=" elementor-button-icon">
                                                            </span>
                                                            <span class="elementor-button-text">SUBSCRIBE</span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-13e9ca2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="13e9ca2" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-c9b61e2"
                                            data-id="c9b61e2" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-b84e421 elementor-widget elementor-widget-heading"
                                                    data-id="b84e421" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            How it Works</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-b1ed54d"
                                            data-id="b1ed54d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-7b6d864 elementor-widget elementor-widget-heading"
                                                    data-id="7b6d864" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('privacyPolicy') }}">Privacy
                                                                Policy</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-c000038"
                                            data-id="c000038" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-aaf88ad elementor-widget elementor-widget-heading"
                                                    data-id="aaf88ad" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('termsConditions') }}">Terms &
                                                                Conditions</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-bd39b49"
                                            data-id="bd39b49" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-b23aa07 elementor-widget elementor-widget-heading"
                                                    data-id="b23aa07" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('community-guidelines') }}">Community
                                                                Guidelines</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-2775f92"
                                            data-id="2775f92" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-269f902 elementor-widget elementor-widget-heading"
                                                    data-id="269f902" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('aboutUs') }}">About Us</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-12e052a"
                                            data-id="12e052a" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-32f5614 elementor-widget elementor-widget-heading"
                                                    data-id="32f5614" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('contactUs') }}">Contact Us</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-7c20640"
                                            data-id="7c20640" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-159e6db elementor-widget elementor-widget-heading"
                                                    data-id="159e6db" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('faq') }}">FAQs</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-b37b831"
                                            data-id="b37b831" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-5db6379 elementor-widget elementor-widget-heading"
                                                    data-id="5db6379" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('browseMentor') }}">Browse
                                                                Mentors</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-6bd5898 elementor-widget__width-auto elementor-widget elementor-widget-copyright"
                                    data-id="6bd5898" data-element_type="widget"
                                    data-settings="{&quot;align&quot;:&quot;left&quot;}"
                                    data-widget_type="copyright.default">
                                    <div class="elementor-widget-container">
                                        <div class="hfe-copyright-wrapper">
                                            <a href="https://wiseadvizor.com/">
                                                <span>Copyright © 2023 wiseAdvizor | Powered by IVY Investment
                                                    LLC</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-540d2d1 elementor-shape-circle elementor-grid-6 elementor-widget__width-auto elementor-grid-mobile-6 elementor-widget-mobile__width-initial elementor-widget elementor-widget-social-icons"
                                    data-id="540d2d1" data-element_type="widget"
                                    data-widget_type="social-icons.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                        /*! elementor - v3.14.0 - 26-06-2023 */
                                        .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                                        .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                                        .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                            line-height: 1;
                                            font-size: 0
                                        }

                                        .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                            display: inline-grid
                                        }

                                        .elementor-widget-social-icons .elementor-grid {
                                            grid-column-gap: var(--grid-column-gap, 5px);
                                            grid-row-gap: var(--grid-row-gap, 5px);
                                            grid-template-columns: var(--grid-template-columns);
                                            justify-content: var(--justify-content, center);
                                            justify-items: var(--justify-content, center)
                                        }

                                        .elementor-icon.elementor-social-icon {
                                            font-size: var(--icon-size, 25px);
                                            line-height: var(--icon-size, 25px);
                                            width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                            height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))
                                        }

                                        .elementor-social-icon {
                                            --e-social-icon-icon-color: #fff;
                                            display: inline-flex;
                                            background-color: #69727d;
                                            align-items: center;
                                            justify-content: center;
                                            text-align: center;
                                            cursor: pointer
                                        }

                                        .elementor-social-icon i {
                                            color: var(--e-social-icon-icon-color)
                                        }

                                        .elementor-social-icon svg {
                                            fill: var(--e-social-icon-icon-color)
                                        }

                                        .elementor-social-icon:last-child {
                                            margin: 0
                                        }

                                        .elementor-social-icon:hover {
                                            opacity: .9;
                                            color: #fff
                                        }

                                        .elementor-social-icon-android {
                                            background-color: #a4c639
                                        }

                                        .elementor-social-icon-apple {
                                            background-color: #999
                                        }

                                        .elementor-social-icon-behance {
                                            background-color: #1769ff
                                        }

                                        .elementor-social-icon-bitbucket {
                                            background-color: #205081
                                        }

                                        .elementor-social-icon-codepen {
                                            background-color: #000
                                        }

                                        .elementor-social-icon-delicious {
                                            background-color: #39f
                                        }

                                        .elementor-social-icon-deviantart {
                                            background-color: #05cc47
                                        }

                                        .elementor-social-icon-digg {
                                            background-color: #005be2
                                        }

                                        .elementor-social-icon-dribbble {
                                            background-color: #ea4c89
                                        }

                                        .elementor-social-icon-elementor {
                                            background-color: #d30c5c
                                        }

                                        .elementor-social-icon-envelope {
                                            background-color: #ea4335
                                        }

                                        .elementor-social-icon-facebook,
                                        .elementor-social-icon-facebook-f {
                                            background-color: #3b5998
                                        }

                                        .elementor-social-icon-flickr {
                                            background-color: #0063dc
                                        }

                                        .elementor-social-icon-foursquare {
                                            background-color: #2d5be3
                                        }

                                        .elementor-social-icon-free-code-camp,
                                        .elementor-social-icon-freecodecamp {
                                            background-color: #006400
                                        }

                                        .elementor-social-icon-github {
                                            background-color: #333
                                        }

                                        .elementor-social-icon-gitlab {
                                            background-color: #e24329
                                        }

                                        .elementor-social-icon-globe {
                                            background-color: #69727d
                                        }

                                        .elementor-social-icon-google-plus,
                                        .elementor-social-icon-google-plus-g {
                                            background-color: #dd4b39
                                        }

                                        .elementor-social-icon-houzz {
                                            background-color: #7ac142
                                        }

                                        .elementor-social-icon-instagram {
                                            background-color: #262626
                                        }

                                        .elementor-social-icon-jsfiddle {
                                            background-color: #487aa2
                                        }

                                        .elementor-social-icon-link {
                                            background-color: #818a91
                                        }

                                        .elementor-social-icon-linkedin,
                                        .elementor-social-icon-linkedin-in {
                                            background-color: #0077b5
                                        }

                                        .elementor-social-icon-medium {
                                            background-color: #00ab6b
                                        }

                                        .elementor-social-icon-meetup {
                                            background-color: #ec1c40
                                        }

                                        .elementor-social-icon-mixcloud {
                                            background-color: #273a4b
                                        }

                                        .elementor-social-icon-odnoklassniki {
                                            background-color: #f4731c
                                        }

                                        .elementor-social-icon-pinterest {
                                            background-color: #bd081c
                                        }

                                        .elementor-social-icon-product-hunt {
                                            background-color: #da552f
                                        }

                                        .elementor-social-icon-reddit {
                                            background-color: #ff4500
                                        }

                                        .elementor-social-icon-rss {
                                            background-color: #f26522
                                        }

                                        .elementor-social-icon-shopping-cart {
                                            background-color: #4caf50
                                        }

                                        .elementor-social-icon-skype {
                                            background-color: #00aff0
                                        }

                                        .elementor-social-icon-slideshare {
                                            background-color: #0077b5
                                        }

                                        .elementor-social-icon-snapchat {
                                            background-color: #fffc00
                                        }

                                        .elementor-social-icon-soundcloud {
                                            background-color: #f80
                                        }

                                        .elementor-social-icon-spotify {
                                            background-color: #2ebd59
                                        }

                                        .elementor-social-icon-stack-overflow {
                                            background-color: #fe7a15
                                        }

                                        .elementor-social-icon-steam {
                                            background-color: #00adee
                                        }

                                        .elementor-social-icon-stumbleupon {
                                            background-color: #eb4924
                                        }

                                        .elementor-social-icon-telegram {
                                            background-color: #2ca5e0
                                        }

                                        .elementor-social-icon-thumb-tack {
                                            background-color: #1aa1d8
                                        }

                                        .elementor-social-icon-tripadvisor {
                                            background-color: #589442
                                        }

                                        .elementor-social-icon-tumblr {
                                            background-color: #35465c
                                        }

                                        .elementor-social-icon-twitch {
                                            background-color: #6441a5
                                        }

                                        .elementor-social-icon-twitter {
                                            background-color: #1da1f2
                                        }

                                        .elementor-social-icon-viber {
                                            background-color: #665cac
                                        }

                                        .elementor-social-icon-vimeo {
                                            background-color: #1ab7ea
                                        }

                                        .elementor-social-icon-vk {
                                            background-color: #45668e
                                        }

                                        .elementor-social-icon-weibo {
                                            background-color: #dd2430
                                        }

                                        .elementor-social-icon-weixin {
                                            background-color: #31a918
                                        }

                                        .elementor-social-icon-whatsapp {
                                            background-color: #25d366
                                        }

                                        .elementor-social-icon-wordpress {
                                            background-color: #21759b
                                        }

                                        .elementor-social-icon-xing {
                                            background-color: #026466
                                        }

                                        .elementor-social-icon-yelp {
                                            background-color: #af0606
                                        }

                                        .elementor-social-icon-youtube {
                                            background-color: #cd201f
                                        }

                                        .elementor-social-icon-500px {
                                            background-color: #0099e5
                                        }

                                        .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                            border-radius: 10%
                                        }

                                        .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                            border-radius: 50%
                                        }
                                        </style>
                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-a96e0b3"
                                                    href="https://www.facebook.com/people/WiseAdvizor/100092527332364/"
                                                    target="_blank">
                                                    <span class="elementor-screen-only">Facebook</span>
                                                    <i class="fab fa-facebook"></i> </a>
                                            </span>
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-50885d5"
                                                    href="https://twitter.com/WiseAdvizor" target="_blank">
                                                    <span class="elementor-screen-only">Twitter</span>
                                                    <i class="fab fa-twitter"></i> </a>
                                            </span>
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-39b2a58"
                                                    href="https://www.youtube.com/@wiseAdvizor" target="_blank">
                                                    <span class="elementor-screen-only">Youtube</span>
                                                    <i class="fab fa-youtube"></i> </a>
                                            </span>
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-9d2b1b1"
                                                    href="https://www.linkedin.com/company/wiseadvizor/"
                                                    target="_blank">
                                                    <span class="elementor-screen-only">Linkedin</span>
                                                    <i class="fab fa-linkedin"></i> </a>
                                            </span>
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-29dcd07"
                                                    target="_blank">
                                                    <span class="elementor-screen-only">Instagram</span>
                                                    <i class="fab fa-instagram"></i> </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </footer>

    <style id="skip-link-styles">
    .skip-link.screen-reader-text {
        border: 0;
        clip: rect(1px, 1px, 1px, 1px);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute !important;
        width: 1px;
        word-wrap: normal !important;
    }

    .skip-link.screen-reader-text:focus {
        background-color: #eee;
        clip: auto !important;
        clip-path: none;
        color: #444;
        display: block;
        font-size: 1em;
        height: auto;
        left: 5px;
        line-height: normal;
        padding: 15px 23px 14px;
        text-decoration: none;
        top: 5px;
        width: auto;
        z-index: 100000;
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="{{ asset('public/assets/js/popper.js') }}"></script>
    <!-- <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript">
    (function($) {
        // Setup the calendar with the current date
        $(document).ready(function() {
            var date = new Date();
            var today = date.getDate();
            // Set click handlers for DOM elements
            $(".right-button").click({
                date: date
            }, next_year);
            $(".left-button").click({
                date: date
            }, prev_year);
            $(".month").click({
                date: date
            }, month_click);
            $("#add-button").click({
                date: date
            }, new_event);
            // Set current month as active
            $(".months-row").children().eq(date.getMonth()).addClass("active-month");
            init_calendar(date);
            var events = check_events(today, date.getMonth(), date.getFullYear());
            show_events(events, months[date.getMonth()], today);

            $.ajaxSetup({
                headers: {
                    'Accept': "application/json",
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // function paynow() {
            $("body").on('click', '#payNow', function(e) {
                e.preventDefault();
                // $("form[name='scheduleCallForm']").submit(function(e) {

                // var $form = document.getElementById('scheduleCallForm');

                // var formdata = new FormData(document.getElementById("scheduleCallForm"));
                var desc = $('#desc').val();
                var mentor = $('.mentor').val();
                // e.preventDefault();


                var formdata = $('.scheduleCallForm').serialize();
                // let myForm = document.getElementById('scheduleCallForm');
                // let formdata = new FormData(myForm);

                // var $form = $(this);
                // var formData = new FormData($form[0]); // note [0] here
                // url = $form.prop("action");

                $('.error').html('');

                return $.ajax("https://wiseadvizor.com/addScheduleRequest", {
                    method: 'POST',
                    data: {
                        "data": formdata
                    },
                    success: function(response) {
                        $('.payment-page').html(response);
                    },
                    // error: function(error) {
                    //     let errors = error.responseJSON.errors
                    //     for (let key in errors) {
                    //         let errorDiv = $(`.error[data-error="${key}"]`);
                    //         if (errorDiv.length) {
                    //             errorDiv.text(errors[key][0]);
                    //         }
                    //     }
                    // }
                    error: function(err) {
                        let error = err.responseJSON;
                        $.each(error.errors, function(index, value) {
                            $(document).find('[name=' + index + ']').after(
                                '<span class="text-danger error">' +
                                value + '</span>' + '<br>');

                            // $('.errorMsgntainer').append(
                            //     '<span class="text-danger">' + value +
                            //     '<span>' + '<br>');
                        });
                    }
                });
            });
            // }

            $("body").on('click', '.event-card', function(e) {
                e.preventDefault();

                var fired_button = $(this).val();
                $('body').find('.time').val(fired_button);

                $('.event-card').removeClass("current");
                $(this).addClass("current");
            });
        });

        // Initialize the calendar by appending the HTML dates
        function init_calendar(date) {
            console.log(date);
            $(".tbody").empty();
            $(".events-container").empty();
            var calendar_days = $(".tbody");
            var month = date.getMonth();
            var year = date.getFullYear();
            var day_count = days_in_month(month, year);
            var row = $("<tr class='table-row'></tr>");
            var today = date.getDate();
            // Set date to 1 to find the first day of the month
            date.setDate(1);
            var first_day = date.getDay();
            // 35+firstDay is the number of date elements to be added to the dates table
            // 35 is from (7 days in a week) * (up to 5 rows of dates in a month)
            for (var i = 0; i < 35 + first_day; i++) {
                // Since some of the elements will be blank, 
                // need to calculate actual date from index
                var day = i - first_day + 1;
                // If it is a sunday, make a new row
                if (i % 7 === 0) {
                    calendar_days.append(row);
                    row = $("<tr class='table-row'></tr>");
                }
                // if current index isn't a day in this month, make it blank
                if (i < first_day || day > day_count) {
                    var curr_date = $("<td class='table-date nil'>" + "</td>");
                    row.append(curr_date);
                } else {
                    var curr_date = $("<td class='table-date'>" + day + "</td>");
                    var events = check_events(day, month + 1, year);
                    if (today === day && $(".active-date").length === 0) {
                        curr_date.addClass("active-date");
                        show_events(events, months[month], day);
                    }
                    // If this date has any events, style it with .event-date
                    if (events.length !== 0) {
                        curr_date.addClass("event-date");
                    }
                    // Set onClick handler for clicking a date
                    curr_date.click({
                        events: events,
                        month: months[month],
                        day: day
                    }, date_click);
                    row.append(curr_date);
                }
            }
            // Append the last row and set the current year
            calendar_days.append(row);
            $(".year").text(year);
        }

        // Get the number of days in a given month/year
        function days_in_month(month, year) {
            var monthStart = new Date(year, month, 1);
            var monthEnd = new Date(year, month + 1, 1);
            return (monthEnd - monthStart) / (1000 * 60 * 60 * 24);
        }

        // Event handler for when a date is clicked
        function date_click(event) {
            $(".events-container").show(250);
            $("#dialog").hide(250);
            $(".active-date").removeClass("active-date");
            $(this).addClass("active-date");
            var d = new Date();
            var month_taken = event.data.month;
            var new_month = getMonthFromString(month_taken);
            // var month_name = getMonthName(new_month);
            var mentor = $('.mentor').val();
            var day = event.data.day;

            // console.log(event.data);
            $('body').find('.day').val(day);
            var year = new Date().getFullYear();
            $('body').find('.year').val(year);

            // var new_month = getMonthFromString(month);
            // var month_name = getMonthName(new_month);

            if (months[d.getMonth()] === month_taken) {
                month_name = month_taken;
            } else {
                month_name = getMonthName(new_month);
            }
            $('body').find('.month').val(month_name);

            var timezone = $("#timezone").val();

            return $.ajax("https://wiseadvizor.com/getTimeAvailability", {
                method: 'POST',
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    "mentor": mentor,
                    "day": day,
                    "month": month_name,
                    "year": year,
                    "timezone": timezone,
                },
                success: function(response) {
                    var times = [];
                    for (var key in response) {
                        // console.log(response[key]);
                        times.push({
                            start_time: response[key],
                        });
                    }
                    show_events(times, event.data.month, event.data.day);
                },
            });
            // show_events(event.data.events, event.data.month, event.data.day);
        };

        // Event handler for when a month is clicked
        function month_click(event) {
            $(".events-container").show(250);
            $("#dialog").hide(250);
            var date = event.data.date;
            $(".active-month").removeClass("active-month");
            $(this).addClass("active-month");
            var new_month = $(".month").index(this);
            // date.setMonth(date.getMonth() + 1);
            date.setMonth(new_month);
            init_calendar(date);
        }

        // Event handler for when the year right-button is clicked
        function next_year(event) {
            $("#dialog").hide(250);
            var date = event.data.date;
            var new_year = date.getFullYear() + 1;
            $("year").html(new_year);
            date.setFullYear(new_year);
            init_calendar(date);
        }

        // Event handler for when the year left-button is clicked
        function prev_year(event) {
            $("#dialog").hide(250);
            var date = event.data.date;
            var new_year = date.getFullYear() - 1;
            $("year").html(new_year);
            date.setFullYear(new_year);
            init_calendar(date);
        }

        // Event handler for clicking the new event button
        function new_event(event) {
            // if a date isn't selected then do nothing
            if ($(".active-date").length === 0)
                return;
            // remove red error input on click
            $("input").click(function() {
                $(this).removeClass("error-input");
            })
            // empty inputs and hide events
            $("#dialog input[type=text]").val('');
            $("#dialog input[type=number]").val('');
            $(".events-container").hide(250);
            $("#dialog").show(250);
            // Event handler for cancel button
            $("#cancel-button").click(function() {
                $("#name").removeClass("error-input");
                $("#count").removeClass("error-input");
                $("#dialog").hide(250);
                $(".events-container").show(250);
            });
            // Event handler for ok button
            $("#ok-button").unbind().click({
                date: event.data.date
            }, function() {
                var date = event.data.date;
                var name = $("#name").val().trim();
                var count = parseInt($("#count").val().trim());
                var day = parseInt($(".active-date").html());
                // Basic form validation
                if (name.length === 0) {
                    $("#name").addClass("error-input");
                } else if (isNaN(count)) {
                    $("#count").addClass("error-input");
                } else {
                    $("#dialog").hide(250);
                    console.log("new event");
                    new_event_json(name, count, date, day);
                    date.setDate(day);
                    init_calendar(date);
                }
            });
        }

        // Adds a json event to event_data
        function new_event_json(name, count, date, day) {
            var event = {
                "occasion": name,
                "invited_count": count,
                "year": date.getFullYear(),
                "month": date.getMonth() + 1,
                "day": day
            };
            event_data["events"].push(event);
        }

        // Display all events of the selected date in card views
        function show_events(events, month, day) {
            // console.log(month);
            // Clear the dates container
            var d = new Date();
            var new_month = getMonthFromString(month);
            // var month_name = getMonthName(new_month);
            if (months[d.getMonth()] === month) {
                month_name = month;
            } else {
                month_name = getMonthName(new_month);
            }
            // console.log(month_name);
            $(".events-container").empty();
            $(".events-container").show(250);
            console.log(event_data["events"]);
            // If there are no events for this date, notify the user
            if (events.length === 0) {
                // console.log(getMonth(month));
                var event_card = $("<div class='event-card'></div>");
                var event_name = $("<div class='event-name'>There are no slots available on " +
                    month_name +
                    " " +
                    day +
                    ".</div>");
                $(event_card).css({
                    "border-left": "10px solid #FF1744"
                });
                $(event_card).append(event_name);
                $(".events-container").append(event_card);
            } else {
                // Go through and add each event as a card to the events container
                for (var i = 0; i < events.length; i++) {

                    var event_card = $(
                        "<button type='button' class='btn btn-outline-primary btn-lg btn-block event-card timeslot' value=" +
                        events[i]["start_time"] +
                        " style='background-color:white;border:solid;border-color:#007bff;width:75%' required></button>"
                    );
                    var event_name = $("<div class='event-name'>" + events[i]["start_time"] + "</div>");
                    // var event_count = $("<div class='event-count'>"+events[i]["invited_count"]+" Invited</div>");
                    if (events[i]["cancelled"] === true) {
                        $(event_card).css({
                            "border-left": "10px solid #FF1744"
                        });
                        // event_count = $("<div class='event-cancelled'>Cancelled</div>");
                    }
                    $(event_card).append(event_name);
                    $(".events-container").append(event_card);

                    // var event_card = $("<div class='event-card'></div>");
                    // var event_name = $("<div class='event-name'>" + events[i]["occasion"] + ":</div>");
                    // var event_count = $("<div class='event-count'>" + events[i]["invited_count"] +
                    //     " Invited</div>");
                    // if (events[i]["cancelled"] === true) {
                    //     $(event_card).css({
                    //         "border-left": "10px solid #FF1744"
                    //     });
                    //     event_count = $("<div class='event-cancelled'>Cancelled</div>");
                    // }
                    // $(event_card).append(event_name).append(event_count);
                    // $(".events-container").append(event_card);
                }
            }
        }

        // Checks if a specific date has any events
        function check_events(day, month, year) {
            var events = [];
            for (var i = 0; i < event_data["events"].length; i++) {
                var event = event_data["events"][i];
                if (event["day"] === day &&
                    event["month"] === month &&
                    event["year"] === year) {
                    events.push(event);
                }
            }
            return events;
        }

        // Given data for events in JSON format
        var event_data = {
            "events": [{
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10
                },
                {
                    "occasion": "Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10
                },
                {
                    "occasion": " Test Event",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 11
                }
            ]
        };

        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];

        function getMonthFromString(mon) {
            var d = Date.parse(mon + "1, 2023");
            if (!isNaN(d)) {
                return new Date(d).getMonth();
            }
            return -1;
        }

        function getMonthName(month) {
            const d = new Date();
            d.setMonth(month - 1);
            const monthName = d.toLocaleString("default", {
                month: "long"
            });
            return monthName;
        }
    })(jQuery);
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.defer = true;
        s1.src = 'https://embed.tawk.to/65046147b1aaa13b7a770b04/1hacho0lm';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <script>
    $('.select2').select2();
    </script>
    <!--End of Tawk.to Script-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
        </script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js" async>
    </script>
</body>
<style>
/* .browseMentor {
        padding-right: 20px;
    } */

i.fas.fa-bell.fa-2xl {
    font-size: 32px !important;
}

@media(max-width:480px) {
    .desc {
        font-size: 9.5px !important;
    }

    #desc {
        width: 75%;
    }

    #customFile {
        width: 75%;
    }

    .heading-section {
        color: #000;
        font-size: 16px;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-ancestor a.hfe-menu-item {
        color: white !important;
    }
}
</style>
</html>