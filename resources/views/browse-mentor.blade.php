<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    @if(!empty($expertise_name))
    <title>Find a Mentor and Get {{ $expertise_name }} Advice Today</title>
    <meta name="description"
        content="Find a mentor and gain invaluable entrepreneur advice at wiseAdvizor's mentorship program. Connect with a growth mentor for {{ $expertise_name }} advice">
    @else
    <title>Find a Mentor and Get Expert Entrepreneur Advice Today</title>
    <meta name="description"
        content="Find a mentor and gain invaluable entrepreneur advice at wiseAdvizor's mentorship program. Connect with a growth mentor for personalized business tips.">
    @endif
    <meta name="keywords"
        content="Find a mentor, entrepreneur advice, mentorship program, growth mentor, business tips">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Book 1:1 call with top startup mentors on wiseAdvizor">
    <meta property="og:description"
        content="wiseAdvizor connects you with experienced startup mentors who understand your startup. Get personalized mentorship to avoid costly mistakes, unlock sustainable growth, and achieve your business goals.">
    <meta property="og:image"
        content="https://wiseadvizor.com/wp-content/uploads/2023/07/Book-11-call-with-world-top-mentors-on-wiseadvizor.com.webp">
    <meta property="og:site_name" content="wiseAdvizor" />
    <meta name="twitter:title" content="Schedule a 1:1 session with top-tier mentors for your startup success">
    <meta name="twitter:description"
        content="Connect directly with entrepreneurs and industry leaders on wiseAdvizor. Seek guidance, discuss challenges, and get expert advice to grow your startup.">
    <meta name="twitter:image"
        url="https://wiseadvizor.com/wp-content/uploads/2023/07/Book-11-call-with-world-top-mentors-on-wiseadvizor.com.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/PNG-Blue.png') }}">
    <link rel="preload" fetchpriority="high" as="image"
        href="https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC-768x115.webp" type="image/webp">
    <link rel="preload" href="https://wiseadvizor.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" as="script"
        crossorigin>
    <script async src="https://wiseadvizor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js">
    </script>
    @php
    $expert_coloumn = $expertise_name ? $expertise_name : NULL;
    @endphp
    @if(!empty($expert_coloumn))
    <link rel="canonical" href="https://wiseadvizor.com/BrowseMentors/{{$expert_coloumn}}">
    <meta property="og:url" content="https://wiseadvizor.com/BrowseMentors/{{$expert_coloumn}}">
    <meta name="twitter:url" content="https://wiseadvizor.com/BrowseMentors/{{$expert_coloumn}}">
    @else
    <link rel="canonical" href="https://wiseadvizor.com/BrowseMentors">
    <meta property="og:url" content="https://wiseadvizor.com/BrowseMentors">
    <meta name="twitter:url" content="https://wiseadvizor.com/BrowseMentors">
    @endif
</head>

<body
    class="page-template page-template-elementor_canvas page page-id-2772 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-2772">

    @include('partials.header-common')

    <div data-elementor-type="wp-page" data-elementor-id="2772" class="elementor elementor-2772">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-9bcde29 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no para"
            data-id="9bcde29" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55b12a5"
                    data-id="55b12a5" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2ad683c elementor-widget elementor-widget-heading"
                            data-id="2ad683c" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <style>
                                /*! elementor - v3.19.0 - 29-01-2024 */
                                .elementor-heading-title {
                                    padding: 0;
                                    margin: 0;
                                    line-height: 1
                                }

                                .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                    color: inherit;
                                    font-size: inherit;
                                    line-height: inherit
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                    font-size: 15px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                    font-size: 19px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                    font-size: 29px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                    font-size: 39px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                    font-size: 59px
                                }
                                </style>
                                <!--<h1 class="elementor-heading-title elementor-size-default">Find a mentor for your startup on wiseAdvizor</h1>-->
                                <div class="elementor-heading-title elementor-size-default">Find a mentor for your
                                    startup on wiseAdvizor. Discover a world of expertise: Explore mentors offering
                                    invaluable guidance. Find the perfect mentor to elevate your journey and achieve
                                    your goals with confidence.</div>
                            </div>
                        </div>
                        <!-- <div class="elementor-element elementor-element-7fd4600 elementor-widget elementor-widget-heading" data-id="7fd4600" data-element_type="widget" data-widget_type="heading.default"> <div class="elementor-widget-container"> <div class="elementor-heading-title elementor-size-default">Skip the trial and error approach! Browse our mentors and overcome obstacles with personalized guidance. </div> </div> </div> -->
                    </div>
                </div>
                <!-- <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-29a38af" data-id="29a38af" data-element_type="column"> <div class="elementor-widget-wrap elementor-element-populated"> <div class="elementor-element elementor-element-e813b77 elementor-align-center elementor-widget elementor-widget-button" data-id="e813b77" data-element_type="widget" data-widget_type="button.default"> <div class="elementor-widget-container"> <div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm" href="#"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Browse Mentors</span> </span> </a> </div> </div> </div> </div> </div> -->
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-2aff472 elementor-section-boxed elementor-section-height-default elementor-section-height-default section-ano filter-section"
            data-id="2aff472" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <!-- <h1>Achieve your entrepreneurial goals faster with our mentors network through personalized 1:1 guidance and strategic advice. </h1> -->
            <div class="elementor-container elementor-column-gap-default">
                <div class="container">
                    <form class="filterForm">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-3 filters">
                                <!-- <label>Select with Button Class</label> --> <select id="expertise"
                                    class="selectpicker" data-style="btn-info" name="filters[expertise]">
                                    <option value="">Expertise</option>
                                    @foreach($expertise as $expert)
                                    <option value="{{ $expert->name }}"
                                        {{ ($expertise_name == $expert->name) ? 'selected' : '' }}> {{ $expert->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-3 filters datefilter"> <input
                                    type="date" class="form-control selectpicker" id="date" name="filters[date]"> </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 filters name"> <select id="name"
                                    class="selectpicker" data-style="btn-info" name="filters[name]">
                                    <option value="">Search by name</option>
                                    @foreach($price as $pr)
                                    <option value="{{ $pr->name }}">{{ $pr->name }}</option>
                                    @endforeach
                                </select> </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-3 filters"> <select id="sort"
                                    class="selectpicker" data-style="btn-info" name="filters[sort_by]">
                                    <option value="">Sort by Price</option>
                                    <option value="asc">ASC</option>
                                    <option value="desc">DESC </option>
                                </select> </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mt-3 filters"> <button
                                    class="btn btn-info apply_filters search">Apply To Search</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-lqdwygc elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="lqdwygc" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <style>
            /*! elementor - v3.14.0 - 26-06-2023 */
            @charset "UTF-8";

            .elementor-star-rating {
                color: #ccd6df;
                font-family: eicons;
                display: inline-block
            }

            .elementor-star-rating i {
                display: inline-block;
                position: relative;
                font-style: normal;
                cursor: default;
                font-size: 80%;
            }

            .elementor-star-rating i:before {
                content: "\e934";
                display: block;
                font-size: inherit;
                font-family: inherit;
                position: absolute;
                overflow: hidden;
                color: #f0ad4e;
                top: 0;
                left: 0
            }

            .elementor-star-rating .elementor-star-empty:before {
                content: none
            }

            .elementor-star-rating .elementor-star-1:before {
                width: 10%
            }

            .elementor-star-rating .elementor-star-2:before {
                width: 20%
            }

            .elementor-star-rating .elementor-star-3:before {
                width: 30%
            }

            .elementor-star-rating .elementor-star-4:before {
                width: 40%
            }

            .elementor-star-rating .elementor-star-5:before {
                width: 50%
            }

            .elementor-star-rating .elementor-star-6:before {
                width: 60%
            }

            .elementor-star-rating .elementor-star-7:before {
                width: 70%
            }

            .elementor-star-rating .elementor-star-8:before {
                width: 80%
            }

            .elementor-star-rating .elementor-star-9:before {
                width: 90%
            }

            .elementor-star-rating__wrapper {
                display: flex;
                align-items: right
            }

            .elementor-star-rating__title {
                margin-right: 10px
            }

            .elementor-star-rating--align-right .elementor-star-rating__wrapper {
                text-align: right;
                justify-content: flex-end
            }

            .elementor-star-rating--align-left .elementor-star-rating__wrapper {
                text-align: left;
                justify-content: flex-start
            }

            .elementor-star-rating--align-center .elementor-star-rating__wrapper {
                text-align: center;
                justify-content: center
            }

            .elementor-star-rating--align-justify .elementor-star-rating__title {
                margin-right: auto
            }

            @media (max-width:1024px) {
                .elementor-star-rating-tablet--align-right .elementor-star-rating__wrapper {
                    text-align: right;
                    justify-content: flex-end
                }

                .elementor-star-rating-tablet--align-left .elementor-star-rating__wrapper {
                    text-align: left;
                    justify-content: flex-start
                }

                .elementor-star-rating-tablet--align-center .elementor-star-rating__wrapper {
                    text-align: center;
                    justify-content: center
                }

                .elementor-star-rating-tablet--align-justify .elementor-star-rating__title {
                    margin-right: auto
                }
            }

            @media (max-width:767px) {
                .elementor-star-rating-mobile--align-right .elementor-star-rating__wrapper {
                    text-align: right;
                    justify-content: flex-end
                }

                .elementor-star-rating-mobile--align-left .elementor-star-rating__wrapper {
                    text-align: right;
                    justify-content: flex-start
                }

                .elementor-star-rating-mobile--align-center .elementor-star-rating__wrapper {
                    text-align: right;
                    justify-content: right
                }

                .elementor-star-rating-mobile--align-justify .elementor-star-rating__title {
                    margin-right: auto
                }
            }

            .last-star {
                letter-spacing: 0
            }

            .elementor--star-style-star_unicode .elementor-star-rating {
                font-family: Arial, Helvetica, sans-serif
            }

            .elementor--star-style-star_unicode .elementor-star-rating i:not(.elementor-star-empty):before {
                content: "РўЁ"
            }
            </style>
            <div class="elementor-container elementor-column-gap-no">
                <div class="row elementor-hidden-mobile filter_result">
                    @foreach($mentors as $mentor)
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6a69efe"
                        data-id="6a69efe" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b4f3275 wpr-switcher-style-dual wpr-switcher-label-style-outer wpr-switcher-icon-position-right elementor-widget elementor-widget-wpr-content-toggle"
                                data-id="b4f3275" data-element_type="widget"
                                data-widget_type="wpr-content-toggle.default">
                                <div class="elementor-widget-container">
                                    <div class="wpr-content-toggle">
                                        <div class="wpr-switcher-container" data-active-switcher="1"> </div>
                                        <div class="wpr-switcher-content-wrap">
                                            <div class="wpr-switcher-content" data-switcher="1">
                                                <div
                                                    class="wpr-switcher-content-inner wpr-anim-size-large wpr-overlay-none">
                                                    <h5><strong><img loading="lazy" decoding="async"
                                                                class="alignleft wp-image-5531"
                                                                src="{{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }}"
                                                                alt="expert mentorship" width="221" height="221"
                                                                srcset="{{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 150w, {{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 300w, {{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 450w, {{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 700w, {{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 650w, {{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 1300w, {{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 352w"
                                                                sizes="(max-width: 221px) 100vw, 221px" /></strong><span
                                                            class="mentor_name"
                                                            style="color: #000000">{{ $mentor->name }}</span></h5>
                                                    <p><span style="font-size:14px;color: #000000">{{ $mentor->metaData->designation }},
                                                            {{ $mentor->metaData->company }}</span><br /> <span
                                                            style="font-size:14px;color: #000000">
                                                            @php
                                                            $totalReviews =
                                                            \App\Models\Review::where('mentor_id',$mentor->id)->get()->count();
                                                            $totalSessions
                                                            =\App\Models\ScheduledCall::where('mentor_id',$mentor->id)->where('status',
                                                            'Approved')->where('is_paid',1)->get()->count();
                                                            echo $totalReviews;
                                                            if($totalReviews > 1)
                                                            { echo " Reviews / ".$totalSessions. " Sessions"; }
                                                            else
                                                            {
                                                            echo " Review / ".$totalSessions. " Sessions";
                                                            }
                                                            @endphp
                                                        </span> </p>
                                                    <div class="elementor-star-rating" title="5/5"
                                                        itemtype="http://schema.org/Rating" itemscope=""
                                                        itemprop="reviewRating"> <i
                                                            class="elementor-star-full">&#xE934;</i><i
                                                            class="elementor-star-full">&#xE934;</i><i
                                                            class="elementor-star-full">&#xE934;</i><i
                                                            class="elementor-star-full">&#xE934;</i><i
                                                            class="elementor-star-full">&#xE934;</i> <span
                                                            itemprop="ratingValue"
                                                            class="elementor-screen-only">5/5</span> </div>
                                                    <!-- <p><span style="color: #000000">ewfrefregfrtghty</span></p> -->
                                                    <p><span class="exp" style="color: #000000">Expertise:</span> </p>
                                                    <ul>
                                                        @php
                                                        $expertise = \App\Models\Expertise::where('mentor_id',
                                                        $mentor->id)->take(4)->get();
                                                        @endphp
                                                        @foreach($expertise as $expert)
                                                        <li class="expertise"><span
                                                                style="color: #000000">{{ $expert->expertise }}</span>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="elementor-element elementor-element-0e640ef elementor-widget elementor-widget-text-editor"
                                                        data-id="0e640ef" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <!-- <p>&nbsp </p> -->
                                                            <p class="bio" style="float:left;"><span
                                                                    style="color: #000000;">
                                                                    {{ $mentor->metaData ? $mentor->metaData->bio_1 : '' }}</span>
                                                            </p>
                                                            <div class="elementor-element elementor-element-a92b341 elementor-widget elementor-widget-heading elementor-hidden-mobile"
                                                                data-id="a92b341" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container" style=""> <span
                                                                        class="slot"
                                                                        style="font-size:14px;color: #000000"> Next Slot
                                                                        - @php
                                                                        $nextAvailability =
                                                                        \App\Models\AvailableSchedule::where('mentor_id',
                                                                        $mentor->id) ->whereDate('date', '>', now())
                                                                        ->where('is_booked', 0) ->orderBy('date', 'asc')
                                                                        ->first();
                                                                        @endphp
                                                                        @if(!empty($nextAvailability))
                                                                        {{ Carbon\Carbon::parse($nextAvailability->date)->format('jS M, Y') }}
                                                                        @endif
                                                                    </span> <span class="charge"
                                                                        style="font-size:14px;float:right;color: #000000">
                                                                        $
                                                                        {{ $mentor->metaData ? $mentor->metaData->price_per_call : '' }}
                                                                        / 30 Min</span> </div>
                                                                <div> </div>
                                                                <div style=""> <a
                                                                        href="{{ route('profile', [$mentor->id, ucfirst(Str::slug($mentor->name))]) }}"
                                                                        class="btn btn-primary"
                                                                        style="margin-top:5px;background-color:#001E64;">View
                                                                        Profile</a>
                                                                    @if(Auth::id() && auth()->user()->role_id == 3)
                                                                    <a href="{{ route('schedule-call', [$mentor->id, ucfirst(Str::slug($mentor->name))]) }}"
                                                                        class="btn btn-primary"
                                                                        style="margin-top:5px;float: right;background-color:#001E64;">Schedule
                                                                        Call</a>
                                                                    @else
                                                                    <a href="{{ route('login', ['schedule-call', $mentor->id, ucfirst(Str::slug($mentor->name))]) }}"
                                                                        class="btn btn-primary"
                                                                        style="margin-top:5px;float: right;background-color:#001E64;">Schedule
                                                                        Call</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row elementor-hidden-desktop elementor-hidden-tablet filter_result">
                    @foreach($mentors as $mentor)
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6a69efe"
                        data-id="6a69efe" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b4f3275 wpr-switcher-style-dual wpr-switcher-label-style-outer wpr-switcher-icon-position-right elementor-widget elementor-widget-wpr-content-toggle"
                                data-id="b4f3275" data-element_type="widget"
                                data-widget_type="wpr-content-toggle.default">
                                <div class="elementor-widget-container">
                                    <div class="wpr-content-toggle">
                                        <div class="wpr-switcher-container" data-active-switcher="1"> </div>
                                        <div class="wpr-switcher-content-wrap">
                                            <div class="wpr-switcher-content" data-switcher="1">
                                                <div
                                                    class="wpr-switcher-content-inner wpr-anim-size-large wpr-overlay-none">
                                                    <div class="grid-container">
                                                        <div class="grid-child">
                                                            <h5><strong><img loading="lazy" decoding="async"
                                                                        class="alignleft wp-image-5531"
                                                                        src="{{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }}"
                                                                        alt="Business Strategy" width="221" height="221"
                                                                        srcset="{{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 150w, {{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 300w, {{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 450w, {{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 700w, {{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 650w, {{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 1300w, {{ asset('wp-content/uploads/2024/02/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 352w"
                                                                        sizes="(max-width: 221px) 100vw, 221px" /></strong>
                                                            </h5>
                                                        </div>
                                                        <div class="grid-child green">
                                                            <h5><span style="color: #000000">{{ $mentor->name }}</span>
                                                            </h5>
                                                            <p><span style="color:#000000;font-size:12px!important;"><abbr
                                                                        title="{{ $mentor->metaData->designation }}">{{ $mentor->metaData->designation }}</abbr>,
                                                                    {{ $mentor->metaData->company }}</span><br /> <span
                                                                    style="font-size:12px!important;color: #000000">
                                                                    @php
                                                                    $totalReviews =
                                                                    \App\Models\Review::where('mentor_id',
                                                                    $mentor->id)->get()->count(); $totalSessions =
                                                                    \App\Models\ScheduledCall::where('mentor_id',
                                                                    $mentor->id)->where('status',
                                                                    'Approved')->where('is_paid', 1)->get()->count();
                                                                    echo $totalReviews;
                                                                    if($totalReviews > 1) {
                                                                    echo " Reviews / ".$totalSessions. " Sessions";
                                                                    }
                                                                    else {
                                                                    echo " Review / ".$totalSessions. " Sessions";
                                                                    }
                                                                    @endphp
                                                                </span> </p>
                                                            <div class="elementor-star-rating" title="5/5"
                                                                itemtype="http://schema.org/Rating" itemscope=""
                                                                itemprop="reviewRating"> <i
                                                                    class="elementor-star-full">&#xE934;</i><i
                                                                    class="elementor-star-full">&#xE934;</i><i
                                                                    class="elementor-star-full">&#xE934;</i><i
                                                                    class="elementor-star-full">&#xE934;</i><i
                                                                    class="elementor-star-full">&#xE934;</i> <span
                                                                    itemprop="ratingValue"
                                                                    class="elementor-screen-only">5/5</span> </div>
                                                            <!-- <p><span style="color: #000000">ewfrefregfrtghty</span></p> -->
                                                            <p class="exp-heading" style="padding-bottom:5px;"><span
                                                                    style="color: #000000"><strong>Expertise:</strong></span>
                                                            </p>
                                                            <ul class="list-expert">
                                                                @php
                                                                $expertise =
                                                                \App\Models\Expertise::where('mentor_id',$mentor->id)->take(4)->get();
                                                                @endphp
                                                                @foreach($expertise as $expert)
                                                                <li class="expertise">
                                                                    <span
                                                                        style="color: #000000">{{ $expert->expertise }}</span>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-0e640ef elementor-widget elementor-widget-text-editor"
                                                        data-id="0e640ef" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <!-- <p>&nbsp </p> -->
                                                            <p class="bio" style="float:left;"><span
                                                                    style="color: #000000;font-size:13px !important;">
                                                                    {{ $mentor->metaData ? $mentor->metaData->bio_1 : '' }}</span>
                                                            </p>
                                                            <div class="elementor-element elementor-element-a92b341 elementor-widget elementor-widget-heading"
                                                                data-id="a92b341" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container" style=""> <span
                                                                        class="slot"
                                                                        style="font-size:11px;color: #000000"><strong>
                                                                            Next Slot -
                                                                            @php
                                                                            $nextAvailability =
                                                                            \App\Models\AvailableSchedule::where('mentor_id',
                                                                            $mentor->id) ->whereDate('date', '>', now())
                                                                            ->where('is_booked', 0) ->orderBy('date',
                                                                            'asc') ->first();
                                                                            @endphp
                                                                            @if(!empty($nextAvailability))
                                                                            {{ Carbon\Carbon::parse($nextAvailability->date)->format('jS M, Y') }}
                                                                            @endif
                                                                        </strong></span> <span class="charge"
                                                                        style="font-size:11px;float:right;color: #000000"><strong>
                                                                            $
                                                                            {{ $mentor->metaData ? $mentor->metaData->price_per_call : '' }}
                                                                            / 30 Min</strong></span> </div>
                                                                <div> </div>
                                                                <div class="buttons" style=""> <a
                                                                        href="{{ route('profile', [$mentor->id, ucfirst(Str::slug($mentor->name))]) }}"
                                                                        class="btn btn-primary view_profile"
                                                                        style="margin-top:5px;background-color:#001E64;font-size:11px;">View
                                                                        Profile</a>
                                                                    @if(Auth::id() &&
                                                                    auth()->user()->role_id == 3) <a
                                                                        href="{{ route('schedule-call', [$mentor->id, ucfirst(Str::slug($mentor->name))]) }}"
                                                                        class="btn btn-primary"
                                                                        style="margin-top:5px;float: right;background-color:#001E64;">Schedule
                                                                        Call</a>
                                                                    @else
                                                                    <a href="{{ route('login', ['schedule-call', $mentor->id, ucfirst(Str::slug($mentor->name))]) }}"
                                                                        class="btn btn-primary"
                                                                        style="margin-top:5px;float: right;background-color:#001E64;">Schedule
                                                                        Call</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" id="elementor-post-2772-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-2772.css?ver=1699364619" media="all">
    <link rel="stylesheet" id="twenty-twenty-one-style-css"
        href="https://wiseadvizor.com/wp-content/themes/twentytwentyone/style.min.css?ver=2.0" media="all">

    @include('partials.web-style')

    <script src="https://wiseadvizor.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js">
    </script>

    @include('partials.footer-web')

    @include('partials.web-script')

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script defer src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
    </script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
    </script>
    <script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            $('.apply_filters').on('click', function() {
                var form = $('.filterForm').serialize();

                return $.ajax({
                    type: 'GET',
                    url: "{{ Str::slug(route('browseMentor')) }}",
                    data: {
                        form,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {}
                });
            });
        });
    }(jQuery));
    </script>
</body>
<style>
.elementor-32 .elementor-element.elementor-element-60f0ea5:not(.elementor-motion-effects-element-type-background),
.elementor-32 .elementor-element.elementor-element-60f0ea5>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #000;
    background-image: linear-gradient(90deg, #000 0%, #000 100%);
}

.filter-section h1 {
    font-size: 20px;
    background-color: #F3EEF5;
    color: #262626;
    font-family: "Helvetica", Sans-serif;
    font-size: 18px;
    font-weight: 800;
    line-height: 25px;
    padding: 35px 0 35px 150px;
}

.mentor_name {
    font-size: 14px;
}

.elementor-3007 .elementor-element.elementor-element-359f243 .menu-item.current-menu-item a.hfe-menu-item,
.elementor-3007 .elementor-element.elementor-element-359f243 .menu-item.current-menu-ancestor a.hfe-menu-item:first-letter {
    text-transform: none !important;
    color: #001E64;
}

.elementor-2772 .elementor-element.elementor-element-55b12a5 {
    width: 100%;
}

.elementor-2772 .elementor-element.elementor-element-2ad683c {
    text-align: center;
}

.elementor-2772 .elementor-element.elementor-element-2ad683c .elementor-heading-title {
    color: #FFFFFF;
    font-family: "Helvetica", Sans-serif;
    font-size: 18px;
    font-weight: 700;
    line-height: 25px;
}

.elementor-2772 .elementor-element.elementor-element-55b12a5>.elementor-element-populated {
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    margin: 0px 130px 0px 100px;
    --e-column-margin-right: 130px;
    --e-column-margin-left: 100px;
    padding: 75px 0px 25px 0px;
}

span.charge {
    font-weight: bold;
}

.exp {
    font-weight: bold;
}

.grid-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
}

.para {
    background-color: #001E64 !important;
}

.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:active,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:focus,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:hover,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:active,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:focus,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:hover,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:active,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:focus,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:hover,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:active,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:focus,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:hover,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:active,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:focus,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:hover,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:active,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:focus,
.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:hover {
    color: rgba(255, 255, 255, .5);
    background-color: #54b4d3 !important;
}

.bio {
    margin-top: -15px;
    font-size: 13.5px;
    padding-top: 5px;
    padding-bottom: 10px;
}

.selectpicker {
    background-color: #54b4d3 !important;
    color: #fff !important;
}

.filter-section {
    background-color: #F3EEF5;
}

a {
    text-transform: capitalize !important;
}

.btn.btn-primary {
    background-color: #001E64 !important;
}

.expertise {
    font-size: 14px;
}

.bio {
    margin-top: -15px;
    font-size: 13.5px;
    padding-top: 5px;
}

span.slot {
    font-weight: bold;
    padding-bottom: 15px !important;
}

< !-- .next_availability {
    padding-right: 95px;
}

.schedule-call {
    margin-left:
        70px;
}

-->.wp-image-5531 {
    border-radius:
        10px !important;
}

i.fas.fa-chevron-down {
    margin-top: -30px;
    padding-left: 10px !important;
    font-size: 9px !important;
    font-family: "Font Awesome 5 Free" !important;
    font-weight: 900 !important;
}

.mobile-display {
    visibility: hidden;
}

html,
body {
    max-width: 100%;
    overflow-x: hidden;
}

@media screen and (max-device-width: 480px) and (min-width: 410px) {

    /* .grid-child p {
        margin-bottom: -5px;
        font-size: 10px;
    } */

    div.d-grid.gap-2.col-6.butto {
        padding-left:
            75px;
        text-align:
            center !important;
    }

    .card {
        width:
            15rem;
    }

    .elementor-star-rating__wrapper {
        padding-left:
            118px;
    }

    .filters {
        margin-right:
            50px;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-ancestor a.hfe-menu-item {
        color:
            white !important;
    }

    .price {
        padding-left:
            100px !important;
    }
}

@media screen and (max-width: 400px) and (min-width: 320px) {
    .grid-child p {
        margin-bottom: -5px;
        font-size: 10px;
    }

    .selectpicker {
        font-size:
            10px;
    }

    .datefilter {
        margin-bottom:
            10px;
    }

    .filters {
        padding-left:
            30px;
    }

    .butto {
        padding-left:
            25px;
    }

    .filters {
        padding-left: 75px;
    }
}

@media screen and (max-width: 1280px),
screen and (min-width: 1024px) {


    .wpr-switcher-content-inner.wpr-anim-size-large.wpr-overlay-none>p {
        margin-bottom: -2px !important;
    }

    a.how-it-works:first-letter {
        text-transform: uppercase !important;
    }

    .elementor-2772 .elementor-element.elementor-element-9bcde29 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        margin-top: -47px;
        margin-bottom: 0px;
        padding: 20px 20px 20px 20px;
    }

    input[type="date"]:not(.has-value):before {
        color:
            lightgray;
        content:
            attr(placeholder);
    }

    ::placeholder {
        /*
margin-top:
15px
 !important;
*/
        color:
            #fff !important;
        opacity:
            1 !important;
    }

    ::-ms-input-placeholder {
        /*
margin-top:
15px
 !important;
*/
        color:
            #fff !important;
        opacity:
            1 !important;
    }

    ::-webkit-calendar-picker-indicator {
        filter:
            invert(1);
    }

    div.d-grid.gap-2.col-6.butto {
        padding-left:
            80px;
    }

    #date {
        width: 220px;
        height: 36px;
        background-color: #54b4d3;
        color: #fff !important;
        font-weight: 200px;
        border-color: #54b4d3 !important;
        border-radius: 5px;
        font-size: 0.75rem !important;
        padding-left: 20px !important;
        padding-bottom: 20px;
        padding-top: 0px;
    }

    .card {
        width:
            22rem !important;
    }

    .elementor-star-rating__wrapper {
        padding-left:
            115px;
        display:
            flex;
        /*
align-items:
right;
*/
    }

    .price {
        padding-left:
            100px;
        display:
            flex;
        align-items:
            center;
    }

    .name {
        margin-top:
            15px;
    }

    input[type="date"]::before {
        padding-right:
            16px !important;
        padding-top:
            0px;
        padding-left:
            16px !important;
        color:
            #fff !important;
        content:
            attr(placeholder);
    }

    input[type="date"] {
        padding-right:
            16px !important;
        padding-left:
            5px !important;
        /*
padding-top:
16px
 !important;
*/
        color:
            #54b4d3 !important;
    }

    input[type="date"]:focus,
    input[type="date"]:valid {
        padding-right:
            16px !important;
        /*
padding-left:
16px
 !important;
*/
        /*
padding-top:
25px
 !important;
*/
        color:
            #fff !important;
    }

    input[type="date"]:focus::before,
    input[type="date"]:valid::before {
        padding-right:
            16px !important;
        padding-left:
            16px !important;
        /*
padding-top:
25px
 !important;
*/
        content:
            ""
             !important;
    }

    .search {
        width:
            130%;
        text-align:
            left;
        background-color:
            #000;
        /*
margin-left:
125px
 !important;
*/
    }
}

.card-deck .card {
    margin-bottom:
        50px;
}

i.fas.fa-bell.fa-2xl {
    font-size:
        32px !important;
}

@media screen and (max-width: 1024px) {

    .mentor_name {
        font-size: 14px;
    }

    p>span {
        font-size: 12px !important;
    }

    .wp-image-5531 {
        border-radius: 10px !important;
        max-width: 50% !important;
        height: 200px !important;
    }

    .expertise {
        font-size: 11px;
    }

    /* header*/

    .elementor-3007 .elementor-element.elementor-element-4bc8cfa>.elementor-widget-container {
        padding: 25px 10px 0px 0px;
        margin-left: -60px;
    }

    .wp-image-624 {
        width: 100%;
        height: 15.02%;
        max-width: 150px !important;
    }

    dl,
    ol,
    ul {
        margin-top: 0;
        margin-bottom: 1rem;
        margin-left: 20px;
    }

    .menu-item .menu-item-type-post_type .menu-item-object-page .menu-item-has-children .parent .hfe-has-submenu .hfe-creative-menu .parent-has-child {
        background-color: #fff !important;
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

    .elementor-3007 .elementor-element.elementor-element-cf19fcc:not(.elementor-motion-effects-element-type-background),
    .elementor-3007 .elementor-element.elementor-element-cf19fcc>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #FFFFFF;
    }

    .elementor-2772 .elementor-element.elementor-element-9bcde29:not(.elementor-motion-effects-element-type-background),
    .elementor-2772 .elementor-element.elementor-element-9bcde29>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #F3EEF5;
        /* padding-left: 275px; */
    }
}

@media screen and (max-width: 768px) {

    .wpr-switcher-content-inner.wpr-anim-size-large.wpr-overlay-none>p {
        margin-bottom: -2px !important;
    }

    p>span {
        margin-top: -15px !important;
        font-size: 7px !important;
    }

    .elementor-2772 .elementor-element.elementor-element-9bcde29 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        margin-top: -47px;
        margin-bottom: 0px;
        padding: 20px 20px 20px 20px;
    }

    .elementor-2772 .elementor-element.elementor-element-9bcde29:not(.elementor-motion-effects-element-type-background),
    .elementor-2772 .elementor-element.elementor-element-9bcde29>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        /* padding-left: 200px; */
        background-color: #F3EEF5;
    }

    .filter-section {
        background-color: #F3EEF5;
        padding-left: 85px;
    }

    .search {
        width: 70% !important;
        text-align: left;
        /* background-color: #000; */
    }
}

@media screen and (max-width: 820px) {

    .search {
        width: 65%;
        text-align: left;
        background-color: #000;
    }

    .wp-image-5531 {
        border-radius: 10px !important;
        max-width: 50% !important;
        height: 170px !important;
    }

    .mentor_name {
        font-size: 10px;
    }

    p>span {
        margin-top: -15px !important;
        font-size: 8px !important;
    }

    .elementor-star-rating {
        margin-bottom: -10px !important;
        margin-top: -20px !important;
        font-size: 10px;
        color: #ccd6df;
        font-family: eicons;
        display: inline-block;
    }

    .expertise {
        margin-top: -5px;
        font-size: 7px;
    }

    span.slot {
        font-weight: bold;
        font-size: 10px !important;
    }

    span.charge {
        font-weight: bold;
        font-size: 10px !important;
    }

    .bio {
        /* margin-top: -15px; */
        font-size: 10px;
        padding-top: 15px;
    }

    .elementor-2772 .elementor-element.elementor-element-9bcde29 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        margin-top: -47px;
        margin-bottom: 0px;
        padding: 20px 20px 20px 20px;
    }

    .elementor-2772 .elementor-element.elementor-element-9bcde29:not(.elementor-motion-effects-element-type-background),
    .elementor-2772 .elementor-element.elementor-element-9bcde29>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #F3EEF5;
        /* padding-left: 200px; */
    }

    .filter-section {
        background-color: #F3EEF5;
        padding-left: 90px;
    }

    .search {
        width: 68%;
        text-align: left;
        /* background-color: #000; */
    }
}

@media screen and (max-width: 767px) {

    html,
    body {
        max-width: 100% !important;
        overflow-x: hidden !important;
    }

    html.video {
        overflow: hidden !important;
    }

    .grid-child p {
        margin-bottom: -5px;
        font-size: 10px;
    }

    .elementor-32 .elementor-element.elementor-element-540d2d1>.elementor-widget-container {
        padding: 0px 20px 10px 100px;
    }

    .elementor-32 .elementor-element.elementor-element-540d2d1>.elementor-widget-container {
        padding: 0px 20px 10px 100px;
    }

    .search {
        width: 70% !important;
        text-align: left;
        /* background-color: #000; */
        /* margin-left: 125px
 !important; */
    }

    h2 {
        text-align: center !important;
    }

    .elementor-2772 .elementor-element.elementor-element-2ad683c>.elementor-widget-container {
        padding: 0px 0px 0px 0px;
    }

    body {
        color: #fff !important;
        /* max-width: 100%; */
    }

    ul,
    ol {
        font-family: var(--list--font-family);
        margin: 0;
        padding-left: 0px !important;
    }

    .elementor-widget-text-editor .buttons {
        font-size: 11px !important;
    }

    .bio {
        margin-top: 5px;
        font-size: 13px !important;
        padding-top: 0px;
    }

    .desktop-display {
        display: none;
    }

    .grid-child h5 {
        font-size: 11px;
    }

    /* .grid-child p {
        font-size: 10px;
    } */

    .expertise {
        font-size: 10px !important;
    }

    .mobile-display {
        visibility: visible;
    }

    .elementor-star-rating {
        font-size: 9px;
    }

    .wp-image-5531 {
        height: auto;
        max-width: 100% !important;
        border: none;
        border-radius: 0;
        box-shadow: none;
    }

    .elementor-2772 .elementor-element.elementor-element-lqdwygc {
        padding: 35px 5px 75px 5px;
    }

    .elementor-star-rating__wrapper {
        padding-left:
            120px;
        display:
            flex;
    }

    ::placeholder {
        padding-top:
            15px !important;
        color:
            #fff !important;
        opacity:
            1 !important;
    }

    ::-ms-input-placeholder {
        padding-top:
            15px !important;
        color:
            #fff !important;
        opacity:
            1 !important;
    }

    ::-webkit-calendar-picker-indicator {
        filter:
            invert(1);
    }

    input[type="date"] {
        /* padding-right: 16px !important; */
        padding-left: 20px !important;
        padding-top: 5px !important;
        color: #fff !important;
        font-size: 15px !important;
        padding-bottom: 25px;
    }

    input[type="date"]::before {
        padding-right:
            16px !important;
        margin-top:
            10px !important;
        padding-left:
            16px !important;
        color:
            #fff !important;
        content:
            attr(placeholder);
    }

    input[type="date"]:focus,
    input[type="date"]:valid {
        padding-right:
            16px !important;
        color:
            #fff !important;
    }

    input[type="date"]:focus::before,
    input[type="date"]:valid::before {
        padding-right:
            16px !important;
        padding-left:
            16px !important;
        content:
            ""
             !important;
    }

    .elementor-3007 .elementor-element.elementor-element-b97627d {
        width:
            30%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669 {
        width:
            50%;
    }

    .elementor-3007 .elementor-element.elementor-element-094a417 {
        width:
            20%;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
        background-color:
            #fff;
        color:
            #001E64 !important;
    }

    .elementor-3007 .elementor-element.elementor-element-094a417>.elementor-element-populated {
        padding:
            0px 0px 0px 35px;
        margin-top:
            45px;
    }

    .elementor-3007 .elementor-element.elementor-element-f871cda>.elementor-element-populated {
        padding:
            0px 0px 0px 10px;
        margin-top:
            -20px;
    }

    .elementor-button.elementor-size-xs {
        font-size:
            12px;
        padding:
            10px 20px;
        border-radius:
            7px;
        margin:
            10px;
    }

    .elementor-button {
        display:
            inline-block;
        line-height:
            1;
        background-color:
            #001E64;
        fill:
            #fff;
        text-align:
            center;
        transition:
            all .3s;
    }

    .elementor-3007 .elementor-element.elementor-element-f871cda {
        width:
            30%;
    }

    .elementor-3007 .elementor-element.elementor-element-094a417 {
        width:
            50%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669 {
        width:
            20%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669>.elementor-element-populated {
        padding:
            0px 0px 0px 30px;
        margin-top:
            45px;
    }

    #menu-item-5136 {
        font-size:
            8px;
    }

    i.fas.fa-bell.fa-2xl {
        font-size:
            27px !important;
        color:
            #000;
        padding-left:
            10px;
    }

    .elementor-3007 .elementor-element.elementor-element-556f326 img {
        width:
            200%;
        height:
            80px;
        object-fit:
            contain;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1>.elementor-widget-container {
        margin:
            -40px 0px 0px 0px;
        padding:
            20px 0px 0px 0px;
    }

    .elementor-3007 .elementor-element.elementor-element-556f326 img {
        width:
            92%;
        height:
            80px;
        object-fit:
            contain;
    }

    .elementor-3007 .elementor-element.elementor-element-556f326>.elementor-widget-container {
        padding:
            20px 0px 0px 0px;
    }

    .rounded-circle {
        margin-top:
            10px;
        margin-bottom:
            10px;
        height:
            auto;
        max-width:
            100%;
        border:
            none;
        border-radius:
            0;
        box-shadow:
            none;
    }

    .elementor-2772 .elementor-element.elementor-element-b4f3275>.elementor-widget-container>.wpr-content-toggle>.wpr-switcher-content-wrap {
        background-color: #FFFFFF;
        border-style: none;
        border-radius: 20px 20px 20px 20px;
    }

    .elementor-2772 .elementor-element.elementor-element-55b12a5 {
        width: 100%;
    }

    .elementor-2772 .elementor-element.elementor-element-2ad683c {
        text-align: left;
    }

    .elementor-2772 .elementor-element.elementor-element-2ad683c .elementor-heading-title {
        color: #FFFFFF;
        font-family: "Helvetica", Sans-serif;
        font-size: 16px;
        font-weight: 700;
    }

    .elementor-2772 .elementor-element.elementor-element-55b12a5>.elementor-element-populated {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        margin: 0px 0px 0px 0px;
        --e-column-margin-right: 100px;
        --e-column-margin-left: 100px;
        padding: 75px 0px 25px 0px;
    }

    .filter-section h1 {
        text-align: center;
        font-size: 20px;
        background-color: #F3EEF5;
        color: #262626;
        font-family: "Helvetica", Sans-serif;
        font-size: 18px;
        font-weight: 800;
        line-height: 25px;
        padding: 35px 95px 25px 0px;
    }
}

@media (max-width: 320px) {}

@media (max-width: 280px) {

    .grid-child p {
        margin-bottom: -5px;
        font-size: 10px;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669>.elementor-element-populated {
        padding:
            0px 0px 0px 20px;
        margin-top:
            45px;
    }

    .grid-child p {
        margin-bottom: -10px;
        font-size: 8px;
    }

    .grid-child p span {
        font-size: 7px !important;
    }

    .expertise {
        font-size: 5px !important;
        margin-bottom: -16px;
    }

    .elementor-star-rating {
        margin-top: -20px !important;
        font-size: 7px;
        padding-bottom: 5px;
        /* margin-top: -60px !important; */
        padding-top: 5px;
    }

    .grid-child .exp-heading {
        margin-top: -10px;
        padding-bottom: 5px;
    }

    .list-expert {
        margin-top: -10px;
    }

    .bio {
        margin-top: 5px;
        font-size: 7px;
        padding-top: 10px;
    }

    .grid-child h5 {
        font-size: 9px;
    }

    .view_profile {
        font-size: 7px !important;
    }

    .schedule_call {
        font-size: 7px !important;
    }
}

@media (max-width: 360px) {}

@media (max-width: 375px) {

    .grid-child p {
        margin-bottom: -5px;
        font-size: 10px;
    }

    .filters {
        padding-left:
            75px;
    }

    .card {
        width:
            18.5rem !important;
    }

    .name {
        margin-top: 5px;
    }

    .search {
        width: 77% !important;
        text-align: left;
    }
}

@media (min-width: 540px) {}

@media (min-width: 768px) and (max-width: 1024px) {}
</style>

</html>