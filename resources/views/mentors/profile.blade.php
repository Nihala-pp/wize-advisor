<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="g-sidenav-show bg-gray-200">
    @include('mentors.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg mb-3 mt-3">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl navbar-blur mt-3 mb-3"
            id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <!-- <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">Mentors</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li> -->
                    </ol>
                    <h5 class="font-weight-bolder mb-0">Profile</h5>
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
                                <span class="d-sm-inline d-none">{{ $profile->name ?: '' }}</span>
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
                        </li> -->
                        <!-- <li class="nav-item dropdown pe-2 d-flex align-items-center">
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
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('public/wp-content/uploads/2023/07/').'/' }}{{ $profile->metaData ? $profile->metaData->pro_pic_1 : '' }}"
                                alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{ $profile->name ?: '' }}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                {{ $profile->metaData ? $profile->metaData->designation : '' }}
                            </p>
                            <p class="mb-0 font-weight-normal text-sm">
                                {{ $profile->metaData ? $profile->metaData->company : '' }}
                            </p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="material-icons text-lg position-relative">home</i>
                    <span class="ms-1">App</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="material-icons text-lg position-relative">email</i>
                    <span class="ms-1">Messages</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="material-icons text-lg position-relative">settings</i>
                    <span class="ms-1">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div> -->
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-12 col-xl-4">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <h6 class="mb-0">Platform Settings</h6>
                                </div>
                                <div class="card-body p-3">
                                    <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault" checked>
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault">Email me when call Schedules</label>
                                            </div>
                                        </li>
                                        <!-- <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked>
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                      </div>
                    </li> -->
                                    </ul>
                                    <!-- <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Account
                                        Settings</h6>
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    name="account_status" id="flexSwitchCheckDefault3 inactivate"
                                                    value="1">
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault3">Inactivate Account</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    name="delete_account" id="flexSwitchCheckDefault4 delete" value="1">
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault4">Delete Account</label>
                                            </div>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-0">Profile Information</h6>
                                        </div>
                                        <!-- <div class="col-md-4 text-end">
                                            <a href="{{ route('mentor.add',[$profile->id]) }}">
                                                <i class="fas fa-user-edit text-secondary text-sm"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit Profile"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <p class="text-sm">
                                        {{ $profile->metaData ? $profile->metaData->bio : '' }}
                                    </p>
                                    <hr class="horizontal gray-light my-4">
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                                class="text-dark">Full Name:</strong> &nbsp; {{ $profile->name ?: '' }}
                                        </li>
                                        <!-- <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Mobile:</strong> &nbsp;
                                            {{ $profile->metaData ? $profile->metaData->mobile : '' }}</li> -->
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Email:</strong> &nbsp; {{ $profile->email ?: '' }}
                                        </li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Location:</strong> &nbsp;
                                            {{ $profile->metaData ? $profile->metaData->address : '' }}</li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Expertise:</strong> &nbsp;
                                            @php
                                            $expertise = \App\Models\Expertise::where('mentor_id',
                                            $profile->id)->get();
                                            @endphp
                                            @foreach($expertise as $expert)
                                            {{ $expert->expertise }},
                                            @endforeach
                                        </li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Industry:</strong> &nbsp;
                                            @php
                                            $industry = $profile->metaData ? $profile->metaData->industry : '';
                                            @endphp

                                            @if(!empty($industry))
                                            @foreach(json_decode($industry) as $ind)
                                            {{ $ind }}
                                            @endforeach
                                            @endif
                                        </li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong
                                                class="text-dark">Language:</strong> &nbsp;
                                            @php
                                            $language = $profile->metaData ? $profile->metaData->language : '';
                                            @endphp
                                            {{ $language }}
                                        </li>
                                        <li class="list-group-item border-0 ps-0 pb-0">
                                            <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                            <a class="btn btn-linkedin btn-simple mb-0 ps-1 pe-2 py-0"
                                                href="{{ $profile->metaData ? $profile->metaData->social_linked_in : '' }}">
                                                <i class="fab fa-linkedin fa-lg"></i>
                                            </a>
                                            <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0"
                                                href="{{ $profile->metaData ? $profile->metaData->youtube_link : '' }}">
                                                <i class="fab fa-youtube fa-lg"></i>
                                            </a>
                                            <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0"
                                                href="{{ $profile->metaData ? $profile->metaData->website_link : '' }}">
                                                <i class="fa fa-globe fa-lg"></i>
                                            </a>
                                            <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="">
                                                <i class="fab fa-instagram fa-lg"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <h6 class="mb-0">Scheduled calls</h6>
                                </div>
                                <div class="card-body p-3">
                                    <ul class="list-group">
                                        @foreach($scheduled_calls as $scheduled_call)
                                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                            <div class="avatar me-3">
                                                <img src="{{ asset('public/assets/img/').'/' }}{{ $scheduled_call->user->metaData->profile_pic }}"
                                                    alt="kal" class="border-radius-lg shadow">
                                            </div>
                                            <div class="d-flex align-items-start flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">
                                                    {{ $scheduled_call ? $scheduled_call->user->name : '' }}</h6>
                                                <p class="mb-0 text-xs">
                                                    {{ $scheduled_call ? $scheduled_call->description : '' }}</p>
                                            </div>
                                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                                href="{{ $scheduled_call->call_link }}">Join</a>
                                        </li>
                                        @endforeach
                                        <!-- <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                            <div class="avatar me-3">
                                                <img src="{{ asset('assets/img/marie.jpg') }}" alt="kal" class="border-radius-lg shadow">
                                            </div>
                                            <div class="d-flex align-items-start flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Anne Marie</h6>
                                                <p class="mb-0 text-xs">Awesome work, can you..</p>
                                            </div>
                                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                                        </li>
                                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                            <div class="avatar me-3">
                                                <img src="{{ asset('assets/img/ivana-square.jpg') }}" alt="kal" class="border-radius-lg shadow">
                                            </div>
                                            <div class="d-flex align-items-start flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Ivanna</h6>
                                                <p class="mb-0 text-xs">About files I can..</p>
                                            </div>
                                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                                        </li>
                                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                            <div class="avatar me-3">
                                                <img src="{{ asset('assets/img/team-4.jpg') }}" alt="kal" class="border-radius-lg shadow">
                                            </div>
                                            <div class="d-flex align-items-start flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Peterson</h6>
                                                <p class="mb-0 text-xs">Have a great afternoon..</p>
                                            </div>
                                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                                        </li>
                                        <li class="list-group-item border-0 d-flex align-items-center px-0">
                                            <div class="avatar me-3">
                                                <img src="{{ asset('assets/img/team-3.jpg') }}" alt="kal" class="border-radius-lg shadow">
                                            </div>
                                            <div class="d-flex align-items-start flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Nick Daniel</h6>
                                                <p class="mb-0 text-xs">Hi! I need more information..</p>
                                            </div>
                                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">Project #2</p>
                      <a href="javascript:;">
                        <h5>
                          Modern
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        As Uber works through a huge amount of internal management turmoil.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-1.jpg') }}">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-2.jpg') }}">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-3.jpg') }}">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-4.jpg') }}">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="{{ asset('assets/img/home-decor-2.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">Project #1</p>
                      <a href="javascript:;">
                        <h5>
                          Scandinavian
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Music is something that every person has his or her own specific opinion about.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-3.jpg') }}">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-4.jpg') }}">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-1.jpg') }}">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-2.jpg') }}">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="{{ asset('assets/img/home-decor-3.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">Project #3</p>
                      <a href="javascript:;">
                        <h5>
                          Minimalist
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Different people have different taste, and various types of music.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-4.jpg') }}">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-3.jpg') }}">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-2.jpg') }}">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-1.jpg') }}">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="https://images.unsplash.com/photo-1606744824163-985d376605aa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">Project #4</p>
                      <a href="javascript:;">
                        <h5>
                          Gothic
                        </h5>
                      </a>
                      <p class="mb-4 text-sm">
                        Why would anyone pick blue over pink? Pink is obviously a better color.
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-4.jpg') }}">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-3.jpg') }}">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-2.jpg') }}">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="{{ asset('assets/img/team-1.jpg') }}">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
                        <!-- <div class="col-12 mt-4">
                            <div class="mb-5 ps-3">
                                <h6 class="mb-1">Expertise</h6>
                                <p class="text-sm">Architects design houses</p>
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="{{ asset('assets/img/home-decor-1.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #2</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Modern
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                As Uber works through a huge amount of internal management turmoil.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-1.jpg') }}">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-2.jpg') }}">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-3.jpg') }}">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-4.jpg') }}">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="{{ asset('assets/img/home-decor-2.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #1</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Scandinavian
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                Music is something that every person has his or her own specific opinion about.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-3.jpg') }}">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-4.jpg') }}">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-1.jpg') }}">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-2.jpg') }}">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="{{ asset('assets/img/home-decor-3.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #3</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Minimalist
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                Different people have different taste, and various types of music.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-4.jpg') }}">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-3.jpg') }}">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-2.jpg') }}">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-1.jpg') }}">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="https://images.unsplash.com/photo-1606744824163-985d376605aa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Project #4</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    Gothic
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                Why would anyone pick blue over pink? Pink is obviously a better color.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                                                <div class="avatar-group mt-2">
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-4.jpg') }}">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-3.jpg') }}">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-2.jpg') }}">
                                                    </a>
                                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                                        <img alt="Image placeholder" src="{{ asset('assets/img/team-1.jpg') }}">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
        </div>
    </main>
    <!--   Core JS Files   -->
    <script type="text/javascript">
    $(document).ready(function() {
        $("#inactivate").click(function() {
            var checkBoxes = $("input[name=account_status\\[\\]]");
            checkBoxes.prop("checked", !checkBoxes.prop("checked"));
            var status = document.getElementById("inactivate").value;
            return $.ajax("{{ route('mentor.account_status') }}", {
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "status": status,
                }
            });
        });

        $("#delete").click(function() {
            var checkBoxes = $("input[name=delete_account\\[\\]]");
            checkBoxes.prop("checked", !checkBoxes.prop("checked"));
            var status = document.getElementById("delete").value;
            return $.ajax("{{ route('mentor.delete_account') }}", {
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "status": status,
                }
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