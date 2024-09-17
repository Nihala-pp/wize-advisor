<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    @if($selectedBlog->keywords)
    <title>{{$selectedBlog->meta_title}}|Mentorship Platform</title>
    <meta name="description" content="{{ $selectedBlog->meta_desc }}">
    <meta name="keywords" content="{{ $selectedBlog->keywords }}">
    @else
    <title>{{ Illuminate\Support\Str::limit(strip_tags($selectedBlog->title), 35)  }}|Mentorship Platform.</title>
    <meta name="description" content="{{ Illuminate\Support\Str::limit(strip_tags($selectedBlog->description), 120) }}">
    <meta name="keywords" content="mentorship, business journey, startup idea, startup strategy">
    @endif
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Book 1:1 call with top startup mentors on wiseAdvizor">
    <meta property="og:description"
        content="wiseAdvizor connects you with experienced startup mentors who understand your startup. Get personalized mentorship to avoid costly mistakes, unlock sustainable growth, and achieve your business goals.">
    <meta property="og:image"
        content="https://wiseadvizor.com/wp-content/uploads/2023/07/Book-11-call-with-world-top-mentors-on-wiseadvizor.com.webp">
    <meta property="og:url"
        content="https://wiseadvizor.com/blogs/{{ $selectedBlog->id }}/{{ Str::slug($selectedBlog->title) }}">
    <meta property="og:site_name" content="wiseAdvizor" />
    <meta name="twitter:title" content="Schedule a 1:1 session with top-tier mentors for your startup success">
    <meta name="twitter:description"
        content="Connect directly with entrepreneurs and industry leaders on wiseAdvizor. Seek guidance, discuss challenges, and get expert advice to grow your startup.">
    <meta name="twitter:url"
        content="https://wiseadvizor.com/blogs/{{ $selectedBlog->id }}/{{ Str::slug($selectedBlog->title) }}">
    <meta name="twitter:image"
        url="https://wiseadvizor.com/wp-content/uploads/2023/07/Book-11-call-with-world-top-mentors-on-wiseadvizor.com.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/PNG-Blue.png') }}">
    <link rel="canonical"
        href="https://wiseadvizor.com/blogs/{{ $selectedBlog->id }}/{{ Str::slug($selectedBlog->title) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <script data-cfasync="false" src="https://wiseadvizor.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script data-cfasync="false" src="https://wiseadvizor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
</head>

<body
    class="page-template page-template-elementor_canvas page page-id-4349 page-child parent-pageid-18 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-4349">
    @include('partials.header-common')
    <div data-elementor-type="wp-page" data-elementor-id="4349" class="elementor elementor-4349">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-0f115b9 elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="0f115b9" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0e6c534"
                    data-id="0e6c534" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-ef65d19 elementor-widget elementor-widget-heading"
                            data-id="ef65d19" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <style>
                                /*! elementor - v3.21.0 - 20-05-2024 */
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
                                <h6 class="elementor-heading-title elementor-size-default">
                                    {{ $selectedBlog->category->name }}</h6>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-91bb32d elementor-widget elementor-widget-heading"
                            data-id="91bb32d" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h1 class="elementor-heading-title elementor-size-default">{{ $selectedBlog->title }}
                                </h1>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-1b9d7e5 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="1b9d7e5" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6d74cde"
                                    data-id="6d74cde" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4af5308 elementor-widget__width-initial elementor-widget elementor-widget-image"
                                            data-id="4af5308" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                /*! elementor - v3.21.0 - 20-05-2024 */
                                                .elementor-widget-image {
                                                    text-align: center
                                                }

                                                .elementor-widget-image a {
                                                    display: inline-block
                                                }

                                                .elementor-widget-image a img[src$=".svg"] {
                                                    width: 48px
                                                }

                                                .elementor-widget-image img {
                                                    vertical-align: middle;
                                                    display: inline-block
                                                }
                                                </style> <img decoding="async" width="150" height="150"
                                                    src="{{ asset('wp-content/uploads/2024/05/BluePNG.jpg') }}"
                                                    class="attachment-thumbnail size-thumbnail wp-image-5883"
                                                    alt="startup success"
                                                    srcset="{{ asset('wp-content/uploads/2024/05/BluePNG.jpg') }} 150w, {{ asset('wp-content/uploads/2024/05/BluePNG.jpg') }} 700w, {{ asset('wp-content/uploads/2024/05/BluePNG.jpg') }} 650w, {{ asset('wp-content/uploads/2024/05/BluePNG.jpg') }} 1300w, {{ asset('wp-content/uploads/2024/05/BluePNG.jpg') }} 98w"
                                                    sizes="(max-width: 150px) 100vw, 150px"
                                                    style="width:100%;height:100%;max-width:98px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-62c0ee5"
                                    data-id="62c0ee5" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-0859462 elementor-widget elementor-widget-heading"
                                            data-id="0859462" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="elementor-heading-title elementor-size-default">
                                                    {{ $selectedBlog->author_name }}
                                                    |
                                                    {{ Carbon\Carbon::parse($selectedBlog->created_at)->format('jS F\\, Y') }}
                                                    | {{ $selectedBlog->time_to_read }} min read</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-0394c6e elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="0394c6e" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6328a06"
                                    data-id="6328a06" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-1abaa4f elementor-widget elementor-widget-button"
                                            data-id="1abaa4f" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="https://wiseadvizor.com/registration">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Get Started</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2ec9ece"
                    data-id="2ec9ece" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-476b628 elementor-widget elementor-widget-image"
                            data-id="476b628" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img fetchpriority="high" decoding="async" width="967" height="384"
                                    src="{{ asset('public/wp-content/uploads/2024/06') }}/{{ $selectedBlog->image }}"
                                    class="attachment-full size-full wp-image-6396" alt="{{ $selectedBlog->title }}"
                                    srcset="{{ asset('public/wp-content/uploads/2024/06') }}/{{ $selectedBlog->image }} 967w, {{ asset('public/wp-content/uploads/2024/06') }}/{{ $selectedBlog->image }} 300w, {{ asset('public/wp-content/uploads/2024/06') }}/{{ $selectedBlog->image }} 1300w"
                                    sizes="(max-width: 967px) 100vw, 967px"
                                    style="width:100%;height:50.07%;max-width:967px" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-344d6d6 elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="344d6d6" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c225fe8"
                    data-id="c225fe8" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-cde1c51 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="cde1c51" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_parent&quot;:&quot;yes&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9590725"
                                    data-id="9590725" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-ede275a elementor-widget elementor-widget-text-editor"
                                            data-id="ede275a" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                /*! elementor - v3.21.0 - 20-05-2024 */
                                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                    background-color: #69727d;
                                                    color: #fff
                                                }

                                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                    color: #69727d;
                                                    border: 3px solid;
                                                    background-color: transparent
                                                }

                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                    margin-top: 8px
                                                }

                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                    width: 1em;
                                                    height: 1em
                                                }

                                                .elementor-widget-text-editor .elementor-drop-cap {
                                                    float: left;
                                                    text-align: center;
                                                    line-height: 1;
                                                    font-size: 50px
                                                }

                                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                    display: inline-block
                                                }
                                                </style>
                                                <p></p>
                                                <div>Level up your startup with personalized advice from the
                                                    world&#8217;s top startup mentors. Overcome roadblocks, gain fresh
                                                    perspectives, and propel your business forward with 1:1 coaching
                                                    calls tailored to your specific challenges.<br></div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-617417d elementor-align-justify elementor-widget elementor-widget-button"
                                            data-id="617417d" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="https://wiseadvizor.com/BrowseMentors">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Find a mentor</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ea06128"
                    data-id="ea06128" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-dc0f3cb elementor-widget elementor-widget-text-editor"
                            data-id="dc0f3cb" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <ol>
                                    @php
                                    $text = str_ireplace("<br />", "\r\n", $selectedBlog->description);
                                    echo $text;
                                    @endphp
                                </ol>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-eb20226 elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="eb20226" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d86f4d9"
                    data-id="d86f4d9" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-180860c elementor-widget elementor-widget-heading"
                            data-id="180860c" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h4 class="elementor-heading-title elementor-size-default">Studies show startups with
                                    mentors achieve growth milestones 2.3 times quicker.</h4>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-4c2a6e2 elementor-align-center elementor-widget elementor-widget-button"
                            data-id="4c2a6e2" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                        href="https://wiseadvizor.com/registration">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Get Started</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-ce66eaa elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="ce66eaa" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-abb4fef"
                    data-id="abb4fef" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-ae08175 elementor-widget elementor-widget-heading"
                            data-id="ae08175" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default">Related Posts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-069db09 elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="069db09" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                @foreach ($related_posts as $related_post)
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-99a7c4c"
                    data-id="99a7c4c" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-6047abf elementor-widget elementor-widget-image"
                            data-id="6047abf" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="750" height="375"
                                    src="{{ asset('public/wp-content/uploads/2024/06') }}/{{ $related_post->image }}"
                                    class="attachment-large size-large wp-image-6398" alt="{{ $related_post->title }}"
                                    srcset="{{ asset('public/wp-content/uploads/2024/06') }}/{{ $related_post->image }} 1024w, {{ asset('public/wp-content/uploads/2024/06') }}/{{ $related_post->image }} 300w, {{ asset('public/wp-content/uploads/2024/06') }}/{{ $related_post->image }} 768w, {{ asset('public/wp-content/uploads/2024/06') }}/{{ $related_post->image }} 1536w, {{ asset('public/wp-content/uploads/2024/06') }}/{{ $related_post->image }} 2048w, {{ asset('public/wp-content/uploads/2024/06') }}/{{ $related_post->image }} 1568w, {{ asset('public/wp-content/uploads/2024/06') }}/{{ $related_post->image }} 1300w"
                                    sizes="(max-width: 750px) 100vw, 750px"
                                    style="width:100%;height:50%;max-width:2400px" />
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-7003ef1 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="7003ef1" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8589e92"
                                    data-id="8589e92" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-15c3afc elementor-widget elementor-widget-heading"
                                            data-id="15c3afc" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h6 class="elementor-heading-title elementor-size-default">
                                                    <a
                                                        href="{{ route('blogCategories', [$related_post->category_id, Str::slug($related_post->category->name)]) }}">{{ $related_post->category->name }}</a>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-1419ff0 elementor-widget elementor-widget-heading"
                                            data-id="1419ff0" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">
                                                    <a
                                                        href="{{ route('blogDetail', [$related_post->id, Str::slug($related_post->title)]) }}">
                                                        {{ $related_post->title }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-9f5ff1a elementor-widget elementor-widget-text-editor"
                                            data-id="9f5ff1a" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>{{ Str::of(strip_tags($related_post->description))->words(18, ' ....') }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-396fad8 elementor-widget elementor-widget-heading"
                                            data-id="396fad8" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="elementor-heading-title elementor-size-default">
                                                    {{ $related_post->author_name }}
                                                    | {{ $related_post->time_to_read }} min read</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" async>
    <link rel='stylesheet' id='post-4349-css'
        href='https://wiseadvizor.com/wp-content/uploads/elementor/css/post-4350.css?ver=1717513898' media='all' />
    <link rel='stylesheet' id='elementor-post-7005-css'
        href='https://wiseadvizor.com/wp-content/uploads/elementor/css/post-7005.css?ver=1717773569' media='all' />
    <link rel='stylesheet' id='elementor-post-7009-css'
        href='https://wiseadvizor.com/wp-content/uploads/elementor/css/post-7009.css?ver=1717773569' media='all' />
    <link rel='stylesheet' id='elementor-post-7012-css'
        href='https://wiseadvizor.com/wp-content/uploads/elementor/css/post-7012.css?ver=1717773569' media='all' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    @include('partials.web-style')

    @include('partials.footer-web')

    @include('partials.web-script')

    <script type="text/javascript">
    jQuery(document).ready(function() {

        var scrollEventHandler = function() {
            window.scroll(0, window.pageYOffset)
        }

        window.addEventListener("scroll", scrollEventHandler, false);
    });
    </script>
</body>

</html>
<style>
/* html,
body {
    overflow-x: hidden;
} */

.elementor-32 .elementor-element.elementor-element-60f0ea5:not(.elementor-motion-effects-element-type-background),
.elementor-32 .elementor-element.elementor-element-60f0ea5>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #000;
    background-image: linear-gradient(90deg, #000 0%, #000 100%);
}

.elementor-4349 .elementor-element.elementor-element-15c3afc .elementor-heading-title {
    color: #6161ff;
    font-family: "Helvetica", Sans-serif !important;
    font-size: 16px !important;
    font-weight: 600 !important;
}

.elementor-4349 .elementor-element.elementor-element-1419ff0 .elementor-heading-title:hover {
    color: #6161ff;
}

.elementor-4349 .elementor-element.elementor-element-dc0f3cb {
    margin-top: 35px;
    text-align: left;
    color: #000000;
    font-family: "Helvetica", Sans-serif;
    font-size: 15px;
    font-weight: 400;
}

.elementor-4349 .elementor-element.elementor-element-344d6d6:not(.elementor-motion-effects-element-type-background),
.elementor-4349 .elementor-element.elementor-element-344d6d6>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #FFFFFF;
    margin-bottom: 40px;
}

.elementor-4349 .elementor-element.elementor-element-9590725:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
.elementor-4349 .elementor-element.elementor-element-9590725>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #6161ff;
}

i.fas.fa-bell.fa-2xl {
    font-size: 32px !important;
}

.ehf-header #masthead {
    /* margin-top: -35px; */
    z-index: 99;
    position: relative;
}

i.fas.fa-chevron-down {
    margin-top: -30px;
    padding-left: 10px !important;
    font-size: 9px !important;
    font-family: "Font Awesome 5 Free" !important;
    font-weight: 900 !important;
}

@media (max-width: 767px) {

    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }

    .elementor-4349 .elementor-element.elementor-element-1abaa4f .elementor-button {
        font-size: 10px;
        margin-left: -8px;
    }

    .elementor-button.elementor-size-xs {
        font-size: 12px;
        padding: 10px 20px;
        border-radius: 7px;
        margin: 10px;
        color: #fff !important;
        background-color: #001E64;
    }

    .elementor-4349 .elementor-element.elementor-element-7003ef1 {
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
        margin-top: -20px;
        margin-bottom: 0px;
        padding: 15px 0px 15px 0px;
    }

    .elementor-4349 .elementor-element.elementor-element-4af5308 img {
        width: 40% !important;
        border-radius: 100px 100px 100px 100px;
        margin-left: -25px;
    }

    .elementor-4349 .elementor-element.elementor-element-0859462 .elementor-heading-title {
        color: #181B34;
        font-family: "Poppins", Sans-serif;
        font-size: 10px !important;
        font-weight: 400;
        margin-top: -5px;
    }

    .elementor-4349 .elementor-element.elementor-element-62c0ee5>.elementor-element-populated {
        margin: 0px 0px 15px -35px;
        --e-column-margin-right: 0px;
        --e-column-margin-left: 25px;
    }

    .elementor-4349 .elementor-element.elementor-element-1abaa4f .elementor-button {
        font-size: 10px;
    }

    .elementor-4349 .elementor-element.elementor-element-62c0ee5 {
        width: 75%;
    }

    .elementor-4349 .elementor-element.elementor-element-6d74cde {
        width: 25%;
    }

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

    i.fas.fa-bell.fa-2xl {
        font-size: 27px !important;
        color: #000;
        padding-left: 10px;
    }

    .rounded-circle {
        margin-top: 10px;
        margin-bottom: 10px;
        height: auto;
        max-width: 100%;
        border: none;
        border-radius: 0;
        box-shadow: none;
    }

    #menu-item-5136 {
        font-size: 8px;
        /* padding-left: 15px; */
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu a.hfe-sub-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .elementor-menu-toggle:hover,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown li a.hfe-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown li a.hfe-sub-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible li a.hfe-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible li a.hfe-sub-menu-item:hover {
        color: #001E64;
    }


    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
        background-color: #fff;
        color: #001E64 !important;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1>.elementor-widget-container {
        margin: -35px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
    }

    .ehf-header #masthead {
        /* margin-top: -45px; */
        z-index: 99;
        position: relative;
        /* margin-bottom: -70px; */
    }
}

@media (min-width: 768px) and (max-width: 1024px) {
    .elementor-3007 .elementor-element.elementor-element-4bc8cfa>.elementor-widget-container {
        padding: 25px 10px 0px 0px;
        margin-left: -60px;
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
}

@media (max-width: 280px) {
    .elementor-3007 .elementor-element.elementor-element-a2b9669>.elementor-element-populated {
        padding: 0px 0px 0px 20px;
        margin-top: 60px;
    }
}
</style>