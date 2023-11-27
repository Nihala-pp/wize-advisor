<!DOCTYPE html>
<html lang="en">
@php header('Access-Control-Allow-Origin: *'); @endphp

@include('partials.web-header-new')

<body
    class="page-template page-template-elementor_canvas page page-id-13 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-13">
    @include('partials.menu')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <section>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10 col-xl-8 text-center">
                            <h3 class="mb-4">Testimonials</h3>
                        </div>
                    </div>
                    <div class="row text-center d-flex align-items-stretch">
                        @foreach($reviews as $review)
                        <div class="col-md-4 mb-5 mt-5 mb-md-0 d-flex align-items-stretch">
                            <div class="card testimonial-card">
                                <div class="card-up" style="background-color: #9d789b;"></div>
                                <div class="avatar mx-auto bg-white">
                                    @if (Auth::user()->metaData && Auth::user()->metaData->profile_pic)
                                    <img src="{{ asset('public/wp-content/uploads/2023/07/').'/' }}{{ $review->mentor->metaData->pro_pic_1 }}"
                                        class="rounded-circle img-fluid" />
                                    @else
                                    <img src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                        class="rounded-circle img-fluid" />
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h4 class="mb-4">{{ $review->mentor->name }}</h4>
                                    <h6 class="font-weight-bold my-3">{{ $review->mentor->metaData->designation }} at
                                        {{ $review->mentor->metaData->company }}</h6>
                                    <ul class="list-unstyled d-flex justify-content-center">
                                        @for($i=0; $i<$review->rating; $i++)
                                            <li>
                                                <i class="fas fa-star fa-sm text-info"></i>
                                            </li>
                                            @endfor
                                    </ul>
                                    <hr />
                                    <p class="dark-grey-text mt-4">
                                        <i class="fas fa-quote-left pe-2"></i>{{ $review->review }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </main>
    </div>

    <!-- </div> -->
    <!--   Core JS Files   -->
    <!-- <script type="text/javascript" src="{{ asset('public/assets/js/material-dashboard.min.js?v=3.0.0') }}">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script> -->
</body>
<style>
.testimonial-card .card-up {
    height: 120px;
    overflow: hidden;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}

.testimonial-card .avatar {
    width: 50px;
    /* margin-top: -60px; */
    overflow: hidden;
    border: 3px solid #fff;
    border-radius: 50%;
}
</style>

</html>