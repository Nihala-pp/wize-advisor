<!DOCTYPE html>
<html lang="en">
@php header('Access-Control-Allow-Origin: *'); @endphp

@include('partials.web-header-new')
@include('partials.header')
<body
    class="page-template page-template-elementor_canvas page page-id-13 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-13">
    @include('partials.header-common')
    <!-- Navbar -->
    <!-- End Navbar -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row mt-5">
                <div class="col-12 col-lg-10 m-auto">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">@if(!empty($data)) My Profile @else
                                    My Profile @endif</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form method="POST" action="{{ route('user.save') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="row_id" value="{{ $data->id ? : '' }}">
                                    <div class="input-group input-group-static mb-3">
                                        <label>Full Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $data->name ? : '' }}" required>
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ $data->email ? : '' }}" required>
                                    </div>
                                    <!-- <div class="input-group input-group-static mb-3">
                                    <label class="">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                         autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group input-group-static mb-3">
                                    <label class="">Confirm Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password_confirmation" autocomplete="current-password">
                                </div> -->
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Company Name</label>
                                        <input type="text" class="form-control" name="company_name"
                                            value="{{ $data->metaData ? $data->metaData->company : '' }}">
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Designation</label>
                                        <input type="text" class="form-control" name="designation"
                                            value="{{ $data->metaData ? $data->metaData->designation : '' }}">
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Linked-In Url</label>
                                        <input type="url" class="form-control" name="linked_in"
                                            value="{{ $data->metaData ? $data->metaData->social_linked_in : '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Expertise you are looking for?</label><br />
                                        <select class="select form-control" multiple name="expert[]" required>
                                            @php
                                            $expt = $data->metaData ? json_decode($data->metaData->expertise) : '';
                                            @endphp
                                            @foreach($expt as $exp)
                                            @foreach($expertise as $key => $expert)
                                            <option value="{{ $expert }}" {{ $expert == $exp ? 'selected' : '' }}>
                                                {{ $expert }}
                                            </option>
                                            @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="timezone mb-3">
                                        <label class=""></label><br />
                                        <select name="timezone"
                                            class="select form-control @error('timezone') is-invalid @enderror"
                                            required>
                                            <option value="">Choose Your Timezone</option>
                                            @foreach($timezone as $zone => $time)
                                            <option value="{{ $zone }}"
                                                {{ $zone == $data->metaData->timezone  ? 'selected' : '' }}>
                                                {{ $zone }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label style="padding-right:30px;">Profile Pic</label><br />
                                        @if ($data->metaData && $data->metaData->profile_pic)
                                        <img src="{{ asset('public/assets/img') }}/{{ $data->metaData->profile_pic }}"
                                            height="50px;" width="50px;">
                                        @else
                                        <img src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                            height="50px;" width="50px;">
                                        @endif
                                        <input type="file" name="profile_pic" class="form-control"
                                            value="{{ $data->metaData ? $data->metaData->profile_pic : '' }}" @php
                                            if($data->metaData && $data->metaData->profile_pic)
                                        {
                                        $validation = '';
                                        }
                                        else {
                                        $validation = 'required';
                                        }
                                        echo $validation;
                                        @endphp
                                        >
                                    </div>
                                    <button type="submit" name="submitform" id="submitform" class="btn btn-primary"><i
                                            class="fa-solid mx-1 fa-floppy-disk"></i>{{ __('Save') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
    <!-- </div> -->
    <!--   Core JS Files   -->
</body>
</html>