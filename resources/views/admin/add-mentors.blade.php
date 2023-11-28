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
    @include('partials.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="{{ route('admin.user_profiles.view_profile') }}">Mentors</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">@if(!empty($data)) Edit
                            Mentor @else Add Mentor @endif</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">@if(!empty($data)) Edit Mentor @else Add Mentor @endif</h6>
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
                            <a href="{{ route('admin.user_profiles.view_profile') }}" class="nav-link text-body p-0"
                                id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="{{ route('admin.user_profiles.view_profile') }}" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="{{ route('admin.user_profiles.view_profile') }}" class="nav-link text-body p-0"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md"
                                        href="{{ route('admin.user_profiles.view_profile') }}">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
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
                                    <a class="dropdown-item border-radius-md"
                                        href="{{ route('admin.user_profiles.view_profile') }}">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/small-logos/logo-spotify.svg"
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
                                    <a class="dropdown-item border-radius-md"
                                        href="{{ route('admin.user_profiles.view_profile') }}">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>crView-card</title>
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
                                <h6 class="text-white text-capitalize ps-3">@if(!empty($data)) Edit Mentor @else Add
                                    Mentor @endif</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row" id="row">
                                <form method="POST" action="{{ route('admin.mentors.save') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="row_id" value="{{ $data->id ??  '' }}">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $data->name ??  '' }}" required>
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ $data->email ??  '' }}" required>
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Phone</label>
                                        <input type="tel" name="phone" class="form-control"
                                            value="{{ $data->metaData->mobile ??  '' }}">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Linked-In Profile</label>
                                        <input type="url" class="form-control" name="linked_in"
                                            value="{{ $data->metaData->social_linked_in ??  '' }}" required>
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Youtube Link (if any)</label>
                                        <input type="url" class="form-control" name="youtube_link"
                                            value="{{ $data->metaData->youtube_link ??  '' }}">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Website Link (if any)</label>
                                        <input type="url" class="form-control" name="website_link"
                                            value="{{ $data->metaData->website_link ??  '' }}">
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">BIO</label>
                                        <textarea name="bio" class="form-control" rows="5"
                                            required>{{ $data->metaData->about_me ??  '' }}</textarea>
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Company</label>
                                        <input type="text" name="company" class="form-control"
                                            value="{{ $data->metaData->company ??  '' }}" required>
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Designation</label>
                                        <input type="text" name="designation" class="form-control"
                                            value="{{ $data->metaData->designation ??  '' }}" required>
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Price per call (USD)</label>
                                        <input type="number" name="price_per_call" class="form-control"
                                            value="{{ $data->metaData->price_per_call ??  '' }}" required>
                                    </div>
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">WiseAdvizor Commission (USD)</label>
                                        <input type="number" name="commission" class="form-control"
                                            value="{{ $data->metaData->commission ??  '' }}" required>
                                    </div>
                                    <div class="row">
                                        <div class="panel-heading"> Expertise</div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-static my-3">
                                                <label>Name</label>
                                                <select class="select form-control" name="expertise[0][name]" required>
                                                    <option value="">Choose any</option>
                                                    @foreach($expertise as $expert)
                                                    <option value="{{ $expert->name }}">{{ $expert->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group input-group-static my-3">
                                                <label>Description</label>
                                                <textarea required="required" class="form-control" cols="2"
                                                    name="expertise[0][desc]"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-1 mt-3">
                                            <div class="input-group input-group-static my-3">
                                                <i class="fa fa-plus rowAdder ml-2" id="rowAdder"> </i>
                                            </div>
                                        </div>
                                        <div id="newinput" class="newinput"></div>
                                    </div>
                                    <div>
                                        <label class="form-label">Languages (Type and Press Enter)</label>
                                        <input name="languages[]" class="form-control" id="languages-tags"
                                            data-color="dark" type="text" value="{{ $data->metaData->language ??  '' }}"
                                            required>
                                    </div>
                                    <div class="row">
                                        <div class="panel-heading"> Experience</div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-static my-3">
                                                <label>Company</label>
                                                <input type="text" name="experience[company_name][]"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group input-group-static my-3">
                                                <label>Designation</label>
                                                <input type="text" name="experience[position][]" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group input-group-static my-3">
                                                <label>Start Date</label>
                                                <input type="text" name="experience[year][]" class="form-control date"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group input-group-static my-3">
                                                <label>End Date</label>
                                                <input type="text" name="experience[end_date][]"
                                                    class="form-control date" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group input-group-static my-3">
                                                <label></label>
                                                <i class="fa fa-plus" id="rowAdder"> Add</i>
                                            </div>
                                        </div>
                                        <div id="newinput"></div>
                                    </div>
                                    <div class="input-group input-group-static my-3">
                                        <label class="form-label">Profile Pic</label>
                                        <input type="file" name="profile_pic" class="form-control" required>
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
            format: 'dd-mm-yyyy'
        });
        // $('.time').timepicker({
        //     format: 'hh:mm A',
        // });

        $("#rowAdder").click(function() {
            newRowAdd =
                '<div class="row">' +
                '<div class="col-md-3">' +
                '<div class="input-group input-group-static my-3">' +
                '<label>Company </label>' +
                '<input type="text" name="experience[company_name][]" class="form-control">' +
                '</div></div>' +
                '<div class="col-md-3">' +
                '<div class="input-group input-group-static my-3">' +
                '<label>Designation</label>' +
                '<input type="text" name="experience[position][]" class="form-control">' +
                '</div></div>' +
                '<div class="col-md-2">' +
                '<div class="input-group input-group-static my-3">' +
                '<label>Start Date</label>' +
                '<input type="text" name="experience[year][]" class="form-control date-pick">' +
                '</div></div>' +
                '<div class="col-md-2">' +
                '<div class="input-group input-group-static my-3">' +
                ' <label>End Date</label>' +
                '<input type="text" name="experience[end_date][]" class="form-control date-pick">' +
                '</div></div>' +
                // '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                '<i class="bi bi-trash" id="DeleteRow"> Delete</i>  </div>';
            // ' </div> </div>';
            $('#newinput').append(newRowAdd);
        });

        $("#DeleteRow").click(function() {
            $(this).parents("#row").remove();
        });

        $('.date-pick').datepicker({
            multidate: true,
            format: 'dd-mm-yyyy'
        });
    });
    </script>
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