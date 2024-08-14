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
@if(!empty($name))
<title>Connect 1:1 Mentorship - {{$name}}</title>
<meta name="description" content="Get expert mentorship & business guidance for building a startup with wiseAdvizor. Connect with {{$name}} today.">
@elseif(!empty($token))
<title>Connect 1:1 Mentorship - {{$token}} with {{$mentor}}</title>
<meta name="description" content="Get expert mentorship & business guidance from {{ $mentor }} for building a startup with wiseAdvizor. {{$token}} today.">
@else
<title>Your Go-To Business Coach for Building a Successful Startup</title>
<meta name="description"
    content="Get expert mentorship & business guidance for building a startup with wiseAdvizor. Connect with a business coach today.">
@endif
<meta name="keywords" content="business guidance, building a startup, business coach, Startup mentors">
@if($id && $token)
<link rel="canonical" href="https://wiseadvizor.com/login/{{ $token }}/{{ $id }}">
@elseif($token && $name)
<link rel="canonical" href="https://wiseadvizor.com/login/{{ $token }}/{{ $id }}/{{ $mentor }}">
@else
<link rel="canonical" href="https://wiseadvizor.com/login">
@endif
@include('partials.header')

<body class="bg-gray-200">
    <!-- <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div> -->
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('{{ asset('public/assets/img/biometric-technology-background-with-fingerprint-scanning-system-virtual-screen-digital-remix.jpg') }}')">
            <!-- <span class="mask bg-gradient-dark opacity-6"></span> -->
            <div class="container my-auto loginForm">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h1 class="text-white font-weight-bolder text-center mt-2 mb-0">
                                        @if(!empty($name))
                                        {{ __('Grow Your Startup with') }} {{ $name }} - {{ ('Schedule a Call') }}
                                        @else
                                        {{ __('Connect with Startup Mentors : Login to wiseAdvizor') }}
                                        @endif
                                    </h1>
                                    <!-- <div class="row mt-3"> -->
                                    <!-- <div class="col-2 text-center ms-auto"> -->
                                    <!-- <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa fa-facebook text-white text-lg"></i>
                                             </a> -->
                                    <!-- </div> -->
                                    <!-- <div class="col-3 text-center ms-auto linkedin">
                                            <a class="btn btn-link px-2" href="{{ route('auth.linkedin') }}">
                                                <img src="{{ asset('public/assets/img/linkedin.png') }}"
                                                    class="avatar avatar-sm me-3" alt="linkedin"> -->

                                    <!-- <i class="fa fa-linkedin text-dark-blue text-lg"></i> -->
                                    <!-- </a>
                                        </div>
                                        <div class="col-3 text-center me-auto google">
                                            <a class="btn btn-link px-2" href="{{ route('auth.google') }}">
                                                <img src="{{ asset('public/assets/img/google.png') }}"
                                                    class="avatar avatar-sm me-3" alt="google"> -->
                                    <!-- <i class="fa fa-google text-white text-lg"></i> -->
                                    <!-- </a>
                                        </div> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login.post') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token ?: Null }}">
                                    <input type="hidden" name="mentor_id" value="{{ $id ?: Null }}">
                                    <input type="hidden" name="mentor_name" value="{{ $name ?: Null }}">
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">{{ __('Email Address') }}</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">{{ __('Password') }}</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-check form-switch d-flex align-items-center mb-3">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label mb-0 ms-2" for="rememberMe">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-2 text-sm mx-auto">
                                            Don't have an account?
                                            <a href="{{ route('register', [$token, $id]) }}"
                                                class="text-primary text-gradient font-weight-bold">
                                                @if(!empty($name))
                                                  Register Here!<span class="text">and Schedule call with {{ $name }}</span>
                                                @elseif(!empty($token))
                                                  Create Account <span class="text">and Schedule call with {{ $mentor }}</span>
                                                @else
                                                Create New Account
                                                @endif
                                            </a>
                                        </p>
                                    </div>
                                    <p class="mt-4 text-sm text-center">
                                        <!-- Don't have an account? -->
                                        <a class="btn btn-link" href="{{ route('forget.password.get') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute bottom-2 py-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-12 col-md-6 my-auto">
                            <div class="copyright text-center text-sm text-white text-lg-start">
                               Copyright © <script>
                                document.write(new Date().getFullYear())
                                </script> , wiseAdvizor | 
                                Powered by
                                <a href="" class="font-weight-bold text-white" target="_blank">IVY Investment LLC</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
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
</body>

</html>
<style>
.text {
  display:none !important;
}

h1 {
    font-size: 17px !important;
}

@media only screen (max-width: 1280px) {
    .loginForm {
        padding-left: 750px;
    }

    h1 {
        font-size: 17px !important;
    }

    .font-weight-bolder {
        font-weight: 700 !important;
        font-size: 17px !important;
    }
}

@media only screen (max-width: 767px) {
    .loginForm {
        padding-left: 750px;
    }

    h1 {
        font-size: 17px !important;
    }

    .font-weight-bolder {
        font-weight: 700 !important;
        font-size: 17px !important;
    }
}

@media only screen and (min-width: 768px) and (max-width: 1024px) {
    .loginForm {
        padding-left: 0px;
    }

    h1 {
        font-size: 17px !important;
    }

    .font-weight-bolder {
        font-weight: 700 !important;
        font-size: 17px !important;
    }
}
</style>