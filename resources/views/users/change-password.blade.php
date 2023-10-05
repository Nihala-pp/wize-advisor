<!DOCTYPE html>
<html lang="en">
@php header('Access-Control-Allow-Origin: *'); @endphp


@include('partials.web-header')


<body
    class="page-template page-template-elementor_canvas page page-id-13 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-13">
    @include('partials.menu')

    <!-- <body class="g-sidenav-show bg-white">
        <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100"> -->
    <!-- Navbar -->
    <!-- End Navbar -->


    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <div class="container-fluid py-4">
                <div class="row mt-5">
                    <div class="col-4 col-lg-10 m-auto">
                        <div class="card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">@if(!empty($data)) Change Password @else
                                        Change Password @endif</h6>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <form method="POST" action="{{ route('user.password.save') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-group input-group-dynamic mb-4">
                                            <label class="form-label">Password</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group input-group-dynamic mb-4">
                                            <label class="form-label">Confirm Password</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password_confirmation" autocomplete="current-password">
                                        </div>
                                        <button type="submit" name="submitform" id="submitform"
                                            class="btn btn-primary"><i
                                                class="fa-solid mx-1 fa-floppy-disk"></i>{{ __('Save') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- @include('partials.web-footer') -->
    </main>
    </div>
    <!--   Core JS Files   -->
    
</body>
</style>
</html>