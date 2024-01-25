<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Nihala PP

=========================================================
-->
<!DOCTYPE html>
<html lang="en">
<title>Join wiseAdvizor | Startup mentorship for your success</title>

@include('partials.header')


<body class="">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PK457VCB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                style="background-image: url('https://img.freepik.com/free-photo/portrait-smart-adult-woman-working-laptop_23-2148452706.jpg'); background-size: cover;">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                            <div class="card mt-3 mb-3">
                                <div class="card-header mt-0">
                                    <h4 class="font-weight-bolder">Create Account</h4>
                                    <p class="mb-0">Welcome! Join us and start your journey today.</p>
                                    <!-- <div class="row">
                                        <div class="col-3 text-center ms-auto">
                                            <a class="btn btn-link px-0" href="{{ route('auth.linkedin') }}">
                                                <img src="{{ asset('public/assets/img/linkedin.png') }}"
                                                    class="avatar avatar-sm me-1" alt="linkedin">
                                            </a>
                                        </div>
                                        <div class="col-3 text-center me-auto">
                                            <a class="btn btn-link px-0" href="{{ route('auth.google') }}">
                                                <img src="{{ asset('public/assets/img/google.png') }}"
                                                    class="avatar avatar-sm me-1" alt="google">
                                            </a>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register.post') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token ?: 'Null' }}">
                                        <input type="hidden" name="mentor_id" value="{{ $id ?: 'Null' }}">
                                        <div class="input-group input-group-static mb-3">
                                            <label class="">Name</label>
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group input-group-static mb-3">
                                            <label class="">Email</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group input-group-static mb-3">
                                            <label class="">Password</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">
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
                                                name="password_confirmation" required autocomplete="current-password">
                                        </div>
                                        <div class="input-group input-group-static mb-3">
                                            <label class="">Company Name</label>
                                            <input type="text" class="form-control" name="company_name">
                                        </div>
                                        <div class="input-group input-group-static mb-3">
                                            <label class="">Designation</label>
                                            <input type="text" class="form-control" name="designation">
                                        </div>
                                        <div class="input-group input-group-static mb-3">
                                            <label class="">Linked-In Url</label>
                                            <input type="url" class="form-control" name="linked_in">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Expertise you are looking for?</label></br>
                                            <select class="select form-control @error('expert') is-invalid @enderror"
                                                multiple data-mdb-clear-button="true" name="expert[]" required>
                                                @foreach($expertise as $key => $expert)
                                                <option value="{{ $expert }}">{{ $expert }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="timezone mb-3">
                                            <label class=""></label></br>
                                            <select name="timezone"
                                                class="select2 form-control @error('timezone') is-invalid @enderror"
                                                required>
                                                <option value="">Choose Your Timezone</option>
                                                @foreach($timezone as $zone => $time)
                                                <option value="{{ $time }}">{{ $time }}</option>
                                                @endforeach
                                            </select>
                                            @error('timezone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-check form-check-info text-start ps-0 mt-3">
                                            <input
                                                class="form-check-input @error('terms_condition') is-invalid @enderror"
                                                type="checkbox" name="terms_condition" value="1" id="flexCheckDefault"
                                                required>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree the <a href="{{ route('termsConditions') }}"
                                                    class="text-dark font-weight-bolder">Terms and Conditions</a>
                                            </label>
                                            @error('terms_condition')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"
                                                style="background-color:#001E64;">Sign
                                                Up</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-2 text-sm mx-auto">
                                        Already have an account?
                                        <a href="{{ route('login') }}"
                                            class="text-primary text-gradient font-weight-bold">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 3668045,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <script>
    $('.select2').select2();
    </script>
</body>

</html>
<style>
.linkedin {
    padding-right: 50px;
}

.google {
    padding-right: 50px;
}
</style>