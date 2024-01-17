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
                            <!-- <div class="elementor-star-rating__wrapper"> -->
                            <div class="elementor-star-rating" title="5/5" itemtype="http://schema.org/Rating"
                                itemscope="" itemprop="reviewRating">
                                <i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i><i
                                    class="elementor-star-full">&#xE934;</i><i
                                    class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i>
                                <span itemprop="ratingValue" class="elementor-screen-only">5/5</span>
                            </div>
                            <!-- </div> -->
                        </div>
                        <span class="text-center price"><b>{{ $mentor->metaData ? $mentor->metaData->price_per_call : '' }}
                                $ / 30 Min</b></span>
                    </small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<style>
@media screen and (max-device-width: 480px) and (min-width: 410px) {

    div.d-grid.gap-2.col-6.butto {
        padding-left: 75px;
        text-align: center !important;
    }

    .card {
        width: 15rem;
    }

    .elementor-star-rating__wrapper {
        padding-left: 125px;
    }

    /* input#date.form-control.selectpicker {
    padding-left: 20px;
    padding-top: 10px; */


    /* background-color: #54b4d3;
    color: #fff;
    font-weight: 400px;
    line-height: 1;
    height: 100% !important;
    width: 200% !important;
    font-size: 0.75rem !important; */
    /* } */

    .datefilter {
        /* padding-top: 20px; */
        margin-bottom: 10px;
    }

    .filters {
        margin-left: 95px;
        margin-right: 50px;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-ancestor a.hfe-menu-item {
        color: white !important;
    }

    .price {
        padding-left: 110px !important;
    }
}

@media screen and (max-width: 400px) and (min-width: 320px) {

    /* #date {
    background-color: #54b4d3;
    color: #fff;
    font-weight: 400px;
    line-height: 1;
    height: 140% !important;
    width: 75% !important;
    FONT-VARIANT: JIS78;
    /* padding-left: 20px !important; */
    /* } */

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

@media screen and (max-width: 1280px),
screen and (min-width: 720px) {

    div.d-grid.gap-2.col-6.butto {
        text-align: center !important;
    }

    .card {
        width: 22rem !important;
    }
}

@media (min-width:375px) {
    .filters {
        padding-left: 75px;
    }

    .card {
        width: 18.5rem !important;
    }
}

.card-deck .card {
    margin-bottom: 50px;
}

input[type="date"]::before {
    padding-right: 16px !important;
    /* padding-top: 10px !important; */
    padding-left: 16px !important;
    color: #ffff;
    content: attr(placeholder);
}

input[type="date"] {
    padding-right: 16px !important;
    padding-left: 16px !important;
    /* padding-top: 25px !important; */
    color: #54b4d3 !important;
}

input[type="date"]:focus,
input[type="date"]:valid {
    padding-right: 16px !important;
    padding-left: 16px !important;
    /* padding-top: 25px !important;     */
    color: #ffff !important;
}

input[type="date"]:focus::before,
input[type="date"]:valid::before {
    padding-right: 16px !important;
    padding-left: 16px !important;
    /* padding-top: 25px !important; */
    content: "" !important;
}

/* .browseMentor {
    padding-right: 20px;
} */

i.fas.fa-bell.fa-2xl {
    font-size: 32px !important;
}
</style>