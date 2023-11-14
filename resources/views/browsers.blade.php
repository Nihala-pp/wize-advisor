<div class="row align-self-center">
    <div class="card-deck">
        @foreach($mentors as $mentor)
        <div class="col-md-4 col-sm-8 col-xs-12">
            <div class="card">
                <!-- <div class="card" style="width: 22rem;"> -->
                <img class="card-img-top"
                    src="{{ asset('public/wp-content/uploads/2023/06/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }}"
                    alt="Card image cap" width="277" height="180">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $mentor->name }}</h5>
                    <p class="card-text">
                        {{ $mentor->metaData ? Str::of($mentor->metaData->bio)->limit(91) : '' }}

                        <!-- {{ $mentor->metaData ? Str::words($mentor->metaData->bio, '20') : '' }} -->
                    </p>
                    <div class="d-grid gap-2 col-6 butto">
                        @if(Auth::id())
                        <a href="{{ route('schedule-call', [$mentor->id]) }}" class="btn btn-primary mid-center"
                            style="background-color:#001E64;">Schedule Call</a>
                        @else
                        <a href="{{ route('login', ['schedule-call', $mentor->id]) }}"
                            class="btn btn-primary mid-center" style="background-color:#001E64;">Schedule Call</a>
                        @endif
                        <a href="{{ route('profile', [$mentor->id]) }}" class="card-link viewProfile"
                            style="color:#007bff;">View Profile</a>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        <div class="elementor-star-rating__wrapper">
                            <div class="elementor-star-rating__wrapper">
                                <div class="elementor-star-rating" title="5/5" itemtype="http://schema.org/Rating"
                                    itemscope="" itemprop="reviewRating">
                                    <i class="elementor-star-full">&#xE934;</i><i
                                        class="elementor-star-full">&#xE934;</i><i
                                        class="elementor-star-full">&#xE934;</i><i
                                        class="elementor-star-full">&#xE934;</i><i
                                        class="elementor-star-full">&#xE934;</i> <span itemprop="ratingValue"
                                        class="elementor-screen-only">5/5</span>
                                </div>
                            </div>
                        </div>
                        <span class="text-center"><b>{{ $mentor->metaData ? $mentor->metaData->price_per_call : '' }}
                                    $ / 30 Min</b></span>
                    </small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<style>
@media screen and (max-width:480px) {
    /* img {
        width: 100%;
    }

    .container {
        max-width: 100%;
        width: 100%;
    } */

    /* .col-md-4 {
        width: 100%;
        /* float: left; */
        /* margin: 0; */
    /* } */ 

    .card {
        width: 15rem;
    }

    .elementor-star-rating__wrapper {
        padding-right: 26px;
    }
}

@media screen and (max-width:400px) {

    #date {
        background-color: #54b4d3;
        color: #fff;
        font-weight: 400px;
        line-height: 1;
        height: 140%;
        width: 85%;
        FONT-VARIANT: JIS78;
        padding-left: 20px !important;
    }

    .selectpicker {
        font-size: 10px;
    }

    .datefilter {
        margin-bottom: 10px;
    }

    .filters {
        padding-left: 50px;
    }

    .butto {
        /* /* margin-left:50px; */
        padding-left: 25px;
    }
}
</style>