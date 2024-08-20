<!DOCTYPE html>
<html lang="en">
@include('partials.web-header-new')
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name='robots' content='max-image-preview:large' />
    <link rel='stylesheet' id='elementor-preview-8222-css'
        href='https://web.wiseadvizor.com/wp-content/uploads/elementor/css/post-8108.css?ver=1723472779' media='all' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
</head>

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
                                            value="{{ $data->metaData->company ? $data->metaData->company : '' }}">
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Designation</label>
                                        <input type="text" class="form-control" name="designation"
                                            value="{{ $data->metaData->designation ? $data->metaData->designation : '' }}">
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
                                            @if(!empty($expt))
                                            @foreach($expt as $exp)
                                            @foreach($expertise as $key => $expert)
                                            <option value="{{ $expert }}" {{ $expert == $exp ? 'selected' : '' }}>
                                                {{ $expert }}
                                            </option>
                                            @endforeach
                                            @endforeach
                                            @else
                                            @foreach($expertise as $key => $expert)
                                            <option value="{{ $expert }}">
                                                {{ $expert }}
                                            </option>
                                            @endforeach
                                            @endif
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
                                        <img src="{{ asset('public/assets/img/blank-profile-picture.webp') }}"
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
    </script>
    <!-- </div> -->
    <!--   Core JS Files   -->
</body>
<style>
i.fas.fa-chevron-down {
    font-size: 9px !important;
    font-family: "Font Awesome 5 Free" !important;
    font-weight: 900 !important;
    padding-left: 10px;
}

@media(max-width:480px) {
    .elementor-3007 .elementor-element.elementor-element-f871cda {
        width: 30%;
    }

    .elementor-3007 .elementor-element.elementor-element-094a417 {
        width: 50%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669 {
        width: 20%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669>.elementor-element-populated {
        padding: 0px 0px 0px 30px;
        margin-top: 60px;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
        background-color: #fff;
        color: #001E64 !important;
    }

    #menu-item-5136 {
        font-size: 8px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
    }

    i.fas.fa-bell.fa-2xl {
        color: black !important;
        font-size: 27px !important;
    }

    .elementor-button {
        display: inline-block;
        line-height: 1;
        background-color: #001E64;
        font-size: 15px;
        padding: 12px 24px;
        border-radius: 7px !important;
        color: #fff;
        fill: #fff;
        text-align: center;
        transition: all .3s;
        margin: 15px;
    }
}

@media (min-width: 768px) and (max-width: 1024px) {
    /*** header new */

    .elementor-3007 .elementor-element.elementor-element-4bc8cfa>.elementor-widget-container {
        padding: 25px 10px 0px 0px;
        margin-left: -60px;
    }

    .elementor-3007 .elementor-element.elementor-element-78270f3 .elementor-button {
        font-family: "Helvetica", Sans-serif;
        font-size: 10px;
        margin-right: 15px;
        font-weight: 400;
        background-color: transparent;
        background-image: linear-gradient(90deg, var(--e-global-color-1e1892c) 0%, var(--e-global-color-1e1892c) 100%);
        border-style: none;
        border-radius: 7px 7px 7px 7px;
    }

    .elementor-3007 .elementor-element.elementor-element-4bc8cfa .elementor-button {
        font-family: "Helvetica", Sans-serif;
        font-size: 10px;
        font-weight: 400;
        background-color: transparent;
        background-image: linear-gradient(90deg, var(--e-global-color-1e1892c) 0%, var(--e-global-color-1e1892c) 100%);
        border-style: none;
        border-radius: 7px 7px 7px 7px;
    }
}
</style>

</html>