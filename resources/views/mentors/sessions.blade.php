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

<body class="g-sidenav-show  bg-gray-200">
    @include('mentors.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg mb-3 mt-3">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl navbar-blur mt-3 mb-3">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <!-- <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">Mentor</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">My Sessions</li> -->
                    </ol>
                    <h5 class="font-weight-bolder mb-0">My Sessions</h5>
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
                                <span class="d-sm-inline d-none">{{ Auth::user()->name ?: '' }}</span>
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
        <!-- End Navbar -->

        <!--====================================================
                           Upcoming Sessions
    ======================================================-->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                    <div class="card">
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
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                style="color:black;">
                                                Name</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                                style="color:black;">
                                                Date & Time</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                                style="color:black;">
                                                Description</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                                style="color:black;">
                                                Documents</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                style="color:black;">
                                                Action</th>
                                            <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($upcoming_sessions))
                                        @foreach($upcoming_sessions as $upcoming_session)
                                        @php
                                        $mentor_timezone = App\Models\AvailableSchedule::where('mentor_id',
                                        $upcoming_session->mentor_id)->where('date',
                                        $upcoming_session->date)->first();
                                        if(!empty($mentor_timezone->time_zone)) {
                                             {{ $mentor_timezone->time_zone  }};
                                        $user_timezone = new \DateTime($upcoming_session->date . ' ' .
                                        $upcoming_session->start_time, new
                                        \DateTimeZone($upcoming_session->utc));

                                        $user_timezone->setTimezone(new
                                        \DateTimeZone($mentor_timezone->time_zone));

                                        $mentor_finish_time =
                                        Illuminate\Support\Carbon::arse($user_timezone->format('H:i:s'))->addMinutes($upcoming_session->duration);

                                        $current_time = \Carbon\Carbon::now()->timezone($mentor_timezone->time_zone);
                                        }
                                        if(date($upcoming_session->date.' '.$mentor_finish_time->format('H:i:s')) >=
                                        $current_time)
                                        {
                                        @endphp
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('public/assets/img/').'/' }}{{ $upcoming_session->user->metaData ? $upcoming_session->user->metaData->profile_pic : ''}}"
                                                            class="avatar avatar-sm me-3" alt="xd">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                            {{ $upcoming_session->user ? $upcoming_session->user->name : '' }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">

                                                    {{ $upcoming_session ? $upcoming_session->date : '' }}
                                                    @php
                                                    $mentor_timezone = App\Models\AvailableSchedule::where('mentor_id',
                                                    $upcoming_session->mentor_id)->where('date',
                                                    $upcoming_session->date)->first();
                                                    if(!empty($mentor_timezone->time_zone)) {

                                                    $user_timezone = new \DateTime($upcoming_session->date . ' ' .
                                                    $upcoming_session->start_time, new
                                                    \DateTimeZone($upcoming_session->utc));

                                                    $user_timezone->setTimezone(new
                                                    \DateTimeZone($mentor_timezone->time_zone));

                                                    $mentor_finish_time =
                                                    Illuminate\Support\Carbon::parse($user_timezone->format('H:i:s'))->addMinutes($upcoming_session->duration);

                                                    echo $user_timezone->format('h:i A').' -
                                                    '.$mentor_finish_time->format('h:i A');
                                                    }
                                                    @endphp
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    {{ $upcoming_session ? $upcoming_session->description : '' }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    {{ $upcoming_session ? $upcoming_session->documents : '' }}

                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <div class="avatar-group mt-2">
                                                    <a href="{{ $upcoming_session ? $upcoming_session->call_link : '' }}"
                                                        target="_blank" class="" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Join Session">
                                                        Join Session
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @php
                                        }
                                        @endphp
                                        @endforeach
                                        @endif
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
                    <div class="card">
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
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Date & Time</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Description</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Documents</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action</th>
                                            <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($requested_sessions))
                                        @foreach($requested_sessions as $requested_session)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('public/assets/img/').'/' }}{{ $requested_session->user->metaData ? $requested_session->user->metaData->profile_pic : '' }}"
                                                            class="avatar avatar-sm me-3" alt="xd">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                            {{ $requested_session->user ? $requested_session->user->name : '' }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    {{ $requested_session ? $requested_session->date : '' }}
                                                    @php
                                                    if(!empty($requested_session)) {
                                                    $mentor_timezone = App\Models\AvailableSchedule::where('mentor_id',
                                                    $requested_session->mentor_id)->where('date',
                                                    $requested_session->date)->first();

                                                    $user_timezone = new \DateTime($requested_session->date . ' ' .
                                                    $requested_session->start_time, new
                                                    \DateTimeZone($requested_session->utc));

                                                    $user_timezone->setTimezone(new
                                                    \DateTimeZone($mentor_timezone->time_zone));

                                                    $mentor_finish_time =
                                                    Illuminate\Support\Carbon::parse($user_timezone->format('H:i:s'))->addMinutes($requested_session->duration);

                                                    echo $user_timezone->format('h:i A').' -
                                                    '.$mentor_finish_time->format('h:i A');
                                                    }
                                                    @endphp
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    {{ $requested_session ? $requested_session->description : '' }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    {{ $requested_session ? $requested_session->documents : '' }}
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <div class="avatar-group mt-2">
                                                    <a href="{{ route('mentor.update_status',[$requested_session->id]) }}"
                                                        class="" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Approve Session">
                                                        Approve
                                                    </a>
                                                </div>
                                                <div class="avatar-group mt-2">
                                                    <a href="{{ route('mentor.reject_call',[$requested_session->id]) }}"
                                                        class="" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Reject Session">
                                                        Reject
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
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
                                            <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($completed_sessions))
                                        @foreach($completed_sessions as $completed_session)
                                        @php
                                        $mentor_timezone = App\Models\AvailableSchedule::where('mentor_id',
                                        $completed_session->mentor_id)->where('date',
                                        $completed_session->date)->first();

                                        if(!empty($mentor_timezone->time_zone)) {

                                        $user_timezone = new \DateTime($completed_session->date . ' ' .
                                        $completed_session->start_time, new
                                        \DateTimeZone($completed_session->utc));

                                        $user_timezone->setTimezone(new
                                        \DateTimeZone($mentor_timezone->time_zone));

                                        $mentor_finish_time =
                                        Illuminate\Support\Carbon::parse($user_timezone->format('H:i:s'))->addMinutes($completed_session->duration);

                                        $current_time = \Carbon\Carbon::now()->timezone($mentor_timezone->time_zone);
                                        }

                                        if(date($completed_session->date.' '.$mentor_finish_time->format('H:i:s')) <
                                            $current_time) { @endphp <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('public/assets/img/').'/' }}{{ $completed_session->user->metaData ? $completed_session->user->metaData->profile_pic : '' }}"
                                                            class="avatar avatar-sm me-3" alt="xd">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                            {{ $completed_session->user ? $completed_session->user->name : '' }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group mt-2">
                                                    {{ $completed_session ? $completed_session->date : '' }}
                                                    @php
                                                    $mentor_timezone = App\Models\AvailableSchedule::where('mentor_id',
                                                    $completed_session->mentor_id)->where('date',
                                                    $completed_session->date)->first();

                                                    if(!empty($mentor_timezone->time_zone)) {

                                                    $user_timezone = new \DateTime($completed_session->date . ' ' .
                                                    $completed_session->start_time, new
                                                    \DateTimeZone($completed_session->utc));

                                                    $user_timezone->setTimezone(new
                                                    \DateTimeZone($mentor_timezone->time_zone));

                                                    $mentor_finish_time =
                                                    Illuminate\Support\Carbon::parse($user_timezone->format('H:i:s'))->addMinutes($completed_session->duration);

                                                    echo $user_timezone->format('h:i A').' -
                                                    '.$mentor_finish_time->format('h:i A');
                                                    }
                                                    @endphp
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <div class="avatar-group mt-2">
                                                    <a href="{{ route('mentor.dashboard.reviews') }}" class=""
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Join Session">
                                                        Review
                                                    </a>
                                                </div>
                                            </td>
                                            </tr>
                                            @php
                                            }
                                            @endphp
                                            @endforeach
                                            @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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