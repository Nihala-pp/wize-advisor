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
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl navbar-blur mt-3" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <!-- <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Mentors</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li> -->
                    </ol>
                    <h5 class="font-weight-bolder mb-0">Profile</h5>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-static">
                            <!-- <label class="">Type here...</label>
                            <input type="text" class="form-control"> -->
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
                                <!-- <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i> -->
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
                                            <div class="mb-auto">
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
                                            <div class="mb-auto">
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
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  mb-auto">
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
            <div class="row mt-5">
                <div class="col-12 col-lg-10 m-auto">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">@if(!empty($data)) Edit Mentor @else Add Mentor @endif</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form method="POST" action="{{ route('mentor.save') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="row_id" value="{{ $data->id ? : '' }}">
                                    <div class="input-group input-group-static mb-3">
                                        <label>Full Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $data->name ? : '' }}" required>
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $data->email ? : '' }}" required>
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Phone</label>
                                        <input type="tel" name="phone" class="form-control" value="{{ $data->metaData->mobile ? : '' }}">
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Linked-In Profile</label>
                                        <input type="url" class="form-control" name="linked_in" value="{{ $data->metaData->social_linked_in ? : '' }}" required>
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Youtube Link (if any)</label>
                                        <input type="url" class="form-control" name="youtube_link" value="{{ $data->metaData->youtube_link ? : '' }}">
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Website Link (if any)</label>
                                        <input type="url" class="form-control" name="website_link" value="{{ $data->metaData->website_link ? : '' }}" required>
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">BIO</label>
                                        <textarea name="bio" class="form-control" rows="5">{{ $data->metaData->about_me ? : '' }}</textarea>
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Company</label>
                                        <input type="text" name="company" class="form-control" value="{{ $data->metaData->company ? : '' }}" required>
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Designation</label>
                                        <input type="text" name="designation" class="form-control" value="{{ $data->metaData->designation ? : '' }}" required>
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Price per call</label>
                                        <input type="number" name="price_per_call" class="form-control" value="{{ $data->metaData->price_per_call ? : '' }}" required>
                                    </div>
                                    <!-- <div class="input-group input-group-static mb-3">
                                        <label class="">wiseAdvizor Commission</label>
                                        <input type="number" name="commission" class="form-control" value="{{ $data->metaData->commission ? : '' }}" required>
                                    </div> -->
                                    <div class="input-group input-group-static mb-3">
                                        <!-- <label class="">Expertise</label> -->
                                        <input name="expertise[]" class="form-control" id="expertise-tags" data-color="dark" type="text" value="{{ $data->metaData->expertise ? : '' }}" placeholder="Type Expertise and press enter" required>
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Languages</label>
                                        <input name="languages[]" class="form-control" id="languages-tags" data-color="dark" type="text" value="{{ $data->metaData->language ? : '' }}" placeholder="Type Languages and press enter" required>
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label>Profile Pic</label>
                                        <input type="file" name="profile_pic" class="form-control" required>
                                    </div>
                                    <button type="submit" name="submitform" id="submitform" class="btn btn-primary"><i class="fa-solid mx-1 fa-floppy-disk"></i>{{ __('Save') }}</button>
                                </form>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                @include('partials.footer')
            </div>
    </main>
    </div>
    <script type="text/javascript">
        if (document.getElementById('choices-button')) {
            var element = document.getElementById('choices-button');
            const example = new Choices(element, {});
        }
        var choicesTags = document.getElementById('expertise-tags');
        var color = choicesTags.dataset.color;
        if (choicesTags) {
            const example = new Choices(choicesTags, {
                delimiter: ',',
                editItems: true,
                maxItemCount: 5,
                removeItemButton: true,
                addItems: true,
                classNames: {
                    item: 'badge rounded-pill choices-' + color + ' me-2'
                }
            });
        }
    </script>
    <script type="text/javascript">
        if (document.getElementById('choices-button')) {
            var element = document.getElementById('choices-button');
            const example = new Choices(element, {});
        }
        var choicesTags = document.getElementById('languages-tags');
        var color = choicesTags.dataset.color;
        if (choicesTags) {
            const example = new Choices(choicesTags, {
                delimiter: ',',
                editItems: true,
                maxItemCount: 5,
                removeItemButton: true,
                addItems: true,
                classNames: {
                    item: 'badge rounded-pill choices-' + color + ' me-2'
                }
            });
        }
    </script>
    <script type="text/javascript">
        if (document.getElementById('choices-button')) {
            var element = document.getElementById('choices-button');
            const example = new Choices(element, {});
        }
        var choicesTags = document.getElementById('language-tags');
        var color = choicesTags.dataset.color;
        if (choicesTags) {
            const example = new Choices(choicesTags, {
                delimiter: ',',
                editItems: true,
                maxItemCount: 5,
                removeItemButton: true,
                addItems: true,
                classNames: {
                    item: 'badge rounded-pill choices-' + color + ' me-2'
                }
            });
        }
    </script>
    <!--   Core JS Files   -->
</body>
</html>