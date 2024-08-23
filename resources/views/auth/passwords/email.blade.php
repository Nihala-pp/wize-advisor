<!DOCTYPE html>
<html lang="en">
<title>Forgot Password| Start Your Own Business Today - wiseAdvizor</title>
<meta name="description"
    content="Unlock a world of business opportunities with our website, offering valuable entrepreneur advice and inspiring ideas to fuel your start-up journey.">
<meta name="keywords" content="entrepreneur advice, ideas of business, start your own business">
<link rel="canonical" href="https://wiseadvizor.com/forgot-password">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Book 1:1 call with top startup mentors on wiseAdvizor">
<meta property="og:description"
    content="wiseAdvizor connects you with experienced startup mentors who understand your startup. Get personalized mentorship to avoid costly mistakes, unlock sustainable growth, and achieve your business goals.">
<meta property="og:image"
    content="https://wiseadvizor.com/wp-content/uploads/2023/07/Book-11-call-with-world-top-mentors-on-wiseadvizor.com.webp">
<meta property="og:url" content="https://wiseadvizor.com">
<meta property="og:site_name" content="wiseAdvizor" />
<meta name="twitter:title" content="Schedule a 1:1 session with top-tier mentors for your startup success">
<meta name="twitter:description"
    content="Connect directly with entrepreneurs and industry leaders on wiseAdvizor. Seek guidance, discuss challenges, and get expert advice to grow your startup.">
<meta name="twitter:url" content="https://wiseadvizor.com/forgot-password">
<meta name="twitter:image"
    url="https://wiseadvizor.com/wp-content/uploads/2023/07/Book-11-call-with-world-top-mentors-on-wiseadvizor.com.webp">
<meta name="twitter:card" content="summary_large_image">
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
            style="background-image: url('{{ asset('public/assets/img/reset-password.jpg') }}')">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h1 class="text-white font-weight-bolder text-center mt-2 mb-0">
                                        {{ __('Recover Your wiseAdvizor Password') }}</h1>
                                    <div class="row mt-3">
                                        <!-- <div class="col-2 text-center ms-auto"> -->
                                        <!-- <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-facebook text-white text-lg"></i>
                      </a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">{{ __('Email Address') }}</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
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
                                © <script>
                                document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                                <a href="" class="font-weight-bold text-white" target="_blank">IVY Investment LLC</a>
                                for a better web.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
</body>
<style>
.font-weight-bolder {
    font-weight: 700 !important;
    font-size: 17px !important;
    ;
}
</style>

</html>