<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>wiseAdvizor | Dashboard</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/PNG-Blue.png') }}">
    <meta name="robots" content="max-image-preview:large">
    <script data-cfasync="false" src="https://wiseadvizor.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script data-cfasync="false" src="https://wiseadvizor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <link rel="canonical" href="https://wiseadvizor.com/user/dashboard">
    <meta name="generator"
        content="Elementor 3.21.6; features: e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
</head>

<body
    class="page-template page-template-elementor_canvas page page-id-7754 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.7.1 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-7754">
    @include('partials.header-common')
    <div id="page" class="site">
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div data-elementor-type="wp-page" data-elementor-id="7754" class="elementor elementor-7754">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-e80f3c4 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="e80f3c4" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-344fc4f"
                                    data-id="344fc4f" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-39162d4 elementor-widget elementor-widget-text-editor"
                                            data-id="39162d4" data-element_type="widget"
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
                                                <h6 style="font-size:21px;">Welcome, {{ auth()->user()->name }}</h6>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-67c6c66 elementor-widget elementor-widget-text-editor"
                                            data-id="67c6c66" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <h6 style="margin-top:-25px !important;"><span
                                                        style="font-weight: normal;">You have
                                                        {{ $upcoming_sessions->count() }} upcoming
                                                        session</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e830283"
                                    data-id="e830283" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-80a8f9a elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                            data-id="80a8f9a" data-element_type="section" style="margin-top:10px;">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-49e1889"
                                                    data-id="49e1889" data-element_type="column"
                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-b156db7 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                                            data-id="b156db7" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <h6><span style="font-weight: normal;">Use code MENTOR25
                                                                        to get 25% off on calls. </span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-6689ac4 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="6689ac4" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-90a8635"
                                    data-id="90a8635" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-9663b6d elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="9663b6d" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                /*! elementor - v3.21.0 - 20-05-2024 */
                                                .elementor-widget-divider {
                                                    --divider-border-style: none;
                                                    --divider-border-width: 1px;
                                                    --divider-color: #0c0d0e;
                                                    --divider-icon-size: 20px;
                                                    --divider-element-spacing: 10px;
                                                    --divider-pattern-height: 24px;
                                                    --divider-pattern-size: 20px;
                                                    --divider-pattern-url: none;
                                                    --divider-pattern-repeat: repeat-x
                                                }

                                                .elementor-widget-divider .elementor-divider {
                                                    display: flex
                                                }

                                                .elementor-widget-divider .elementor-divider__text {
                                                    font-size: 15px;
                                                    line-height: 1;
                                                    max-width: 95%
                                                }

                                                .elementor-widget-divider .elementor-divider__element {
                                                    margin: 0 var(--divider-element-spacing);
                                                    flex-shrink: 0
                                                }

                                                .elementor-widget-divider .elementor-icon {
                                                    font-size: var(--divider-icon-size)
                                                }

                                                .elementor-widget-divider .elementor-divider-separator {
                                                    display: flex;
                                                    margin: 0;
                                                    direction: ltr
                                                }

                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                                .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                                    align-items: center
                                                }

                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                                .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                                .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                                    display: block;
                                                    content: "";
                                                    border-block-end: 0;
                                                    flex-grow: 1;
                                                    border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                }

                                                .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                                    flex-grow: 0;
                                                    flex-shrink: 100
                                                }

                                                .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                                    content: none
                                                }

                                                .elementor-widget-divider--element-align-left .elementor-divider__element {
                                                    margin-left: 0
                                                }

                                                .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                                    flex-grow: 0;
                                                    flex-shrink: 100
                                                }

                                                .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                                    content: none
                                                }

                                                .elementor-widget-divider--element-align-right .elementor-divider__element {
                                                    margin-right: 0
                                                }

                                                .elementor-widget-divider--element-align-start .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                                    flex-grow: 0;
                                                    flex-shrink: 100
                                                }

                                                .elementor-widget-divider--element-align-start .elementor-divider-separator:before {
                                                    content: none
                                                }

                                                .elementor-widget-divider--element-align-start .elementor-divider__element {
                                                    margin-inline-start: 0
                                                }

                                                .elementor-widget-divider--element-align-end .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                                    flex-grow: 0;
                                                    flex-shrink: 100
                                                }

                                                .elementor-widget-divider--element-align-end .elementor-divider-separator:after {
                                                    content: none
                                                }

                                                .elementor-widget-divider--element-align-end .elementor-divider__element {
                                                    margin-inline-end: 0
                                                }

                                                .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                                    border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                }

                                                .elementor-widget-divider--separator-type-pattern {
                                                    --divider-border-style: none
                                                }

                                                .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                                .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                                    width: 100%;
                                                    min-height: var(--divider-pattern-height);
                                                    -webkit-mask-size: var(--divider-pattern-size) 100%;
                                                    mask-size: var(--divider-pattern-size) 100%;
                                                    -webkit-mask-repeat: var(--divider-pattern-repeat);
                                                    mask-repeat: var(--divider-pattern-repeat);
                                                    background-color: var(--divider-color);
                                                    -webkit-mask-image: var(--divider-pattern-url);
                                                    mask-image: var(--divider-pattern-url)
                                                }

                                                .elementor-widget-divider--no-spacing {
                                                    --divider-pattern-size: auto
                                                }

                                                .elementor-widget-divider--bg-round {
                                                    --divider-pattern-repeat: round
                                                }

                                                .rtl .elementor-widget-divider .elementor-divider__text {
                                                    direction: rtl
                                                }

                                                .e-con-inner>.elementor-widget-divider,
                                                .e-con>.elementor-widget-divider {
                                                    width: var(--container-widget-width, 100%);
                                                    --flex-grow: var(--container-widget-flex-grow)
                                                }
                                                </style>
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-28edc46 elementor-widget elementor-widget-heading"
                                            data-id="28edc46" data-element_type="widget"
                                            data-widget_type="heading.default">
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
                                                <h6 class="elementor-heading-title elementor-size-default">Tell us on
                                                    which topic you are looking to connect with a mentor</h6>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ce8b0b8 elementor-widget__width-initial wpr-search-form-style-inner wpr-search-form-position-right elementor-widget elementor-widget-wpr-search"
                                            data-id="ce8b0b8" data-element_type="widget"
                                            data-widget_type="wpr-search.default">
                                            <div class="elementor-widget-container">

                                                <form name="searchForm" role="search" method="get"
                                                    class="wpr-search-form"
                                                    action="{{ route('user.searchExpertise') }}">
                                                    <div class="wpr-search-form-input-wrap elementor-clearfix">
                                                        <select name="expertise" class="wpr-search-form-input expertise"
                                                            placeholder="e.g. Idea Validation, Fund Raising"
                                                            aria-label="Search" type="search" title="Search" value=""
                                                            wpr-query-type="all" wpr-taxonomy-type=""
                                                            number-of-results="2" ajax-search="" show-description="yes"
                                                            number-of-words="30" show-ajax-thumbnails=""
                                                            show-view-result-btn="" view-result-text="View Results"
                                                            no-results="No Results Found" exclude-without-thumb=""
                                                            link-target="_self">
                                                            <option>Choose Your Expertise</option>
                                                            @foreach ($expertise_lists as $expertise_list)
                                                            <option value="{{ $expertise_list->name }}">
                                                                {{ $expertise_list->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <button class="wpr-search-form-submit search"
                                                            aria-label="Search" type="submit"
                                                            style="background-color: #4285f4;">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                <div class="wpr-data-fetch">
                                                    <span class="wpr-close-search"></span>
                                                    <ul></ul>
                                                    <p class="wpr-search-admin-notice">More than 2 results are available
                                                        in the PRO version (This notice is only visible to admin users)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-eec6221 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="eec6221" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-af40b3d"
                                    data-id="af40b3d" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-0e0d155 elementor-widget elementor-widget-text-editor"
                                            data-id="0e0d155" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <h6>Your Sessions</h6>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-e1dbd2f elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="e1dbd2f" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3b55da2 elementor-tabs-view-horizontal elementor-widget elementor-widget-tabs"
                                            data-id="3b55da2" data-element_type="widget"
                                            data-widget_type="tabs.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                /*! elementor - v3.21.0 - 20-05-2024 */
                                                .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-wrapper {
                                                    width: 25%;
                                                    flex-shrink: 0
                                                }

                                                .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active {
                                                    border-inline-end-style: none
                                                }

                                                .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:after,
                                                .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:before {
                                                    height: 999em;
                                                    width: 0;
                                                    right: 0;
                                                    border-inline-end-style: solid
                                                }

                                                .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:before {
                                                    top: 0;
                                                    transform: translateY(-100%)
                                                }

                                                .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active:after {
                                                    top: 100%
                                                }

                                                .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title {
                                                    display: table-cell
                                                }

                                                .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active {
                                                    border-bottom-style: none
                                                }

                                                .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:after,
                                                .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:before {
                                                    bottom: 0;
                                                    height: 0;
                                                    width: 999em;
                                                    border-bottom-style: solid
                                                }

                                                .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:before {
                                                    right: 100%
                                                }

                                                .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-desktop-title.elementor-active:after {
                                                    left: 100%
                                                }

                                                .elementor-widget-tabs .elementor-tab-content,
                                                .elementor-widget-tabs .elementor-tab-title,
                                                .elementor-widget-tabs .elementor-tab-title:after,
                                                .elementor-widget-tabs .elementor-tab-title:before,
                                                .elementor-widget-tabs .elementor-tabs-content-wrapper {
                                                    border: 1px #d5d8dc
                                                }

                                                .elementor-widget-tabs .elementor-tabs {
                                                    text-align: start
                                                }

                                                .elementor-widget-tabs .elementor-tabs-wrapper {
                                                    overflow: hidden
                                                }

                                                .elementor-widget-tabs .elementor-tab-title {
                                                    cursor: pointer;
                                                    outline: var(--focus-outline, none)
                                                }

                                                .elementor-widget-tabs .elementor-tab-desktop-title {
                                                    position: relative;
                                                    padding: 20px 25px;
                                                    font-weight: 700;
                                                    line-height: 1;
                                                    border: solid transparent
                                                }

                                                .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active {
                                                    border-color: #d5d8dc
                                                }

                                                .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active:after,
                                                .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active:before {
                                                    display: block;
                                                    content: "";
                                                    position: absolute
                                                }

                                                .elementor-widget-tabs .elementor-tab-desktop-title:focus-visible {
                                                    border: 1px solid #000
                                                }

                                                .elementor-widget-tabs .elementor-tab-mobile-title {
                                                    padding: 10px;
                                                    cursor: pointer
                                                }

                                                .elementor-widget-tabs .elementor-tab-content {
                                                    padding: 20px;
                                                    display: none
                                                }

                                                @media (max-width:767px) {

                                                    .elementor-tabs .elementor-tab-content,
                                                    .elementor-tabs .elementor-tab-title {
                                                        border-style: solid solid none
                                                    }

                                                    .elementor-tabs .elementor-tabs-wrapper {
                                                        display: none
                                                    }

                                                    .elementor-tabs .elementor-tabs-content-wrapper {
                                                        border-bottom-style: solid
                                                    }

                                                    .elementor-tabs .elementor-tab-content {
                                                        padding: 10px
                                                    }
                                                }

                                                @media (min-width:768px) {
                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs {
                                                        display: flex
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-wrapper {
                                                        flex-direction: column
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-content-wrapper {
                                                        flex-grow: 1;
                                                        border-style: solid solid solid none
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tab-content {
                                                        border-style: none solid solid
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-alignment-center .elementor-tabs-wrapper,
                                                    .elementor-widget-tabs.elementor-tabs-alignment-end .elementor-tabs-wrapper,
                                                    .elementor-widget-tabs.elementor-tabs-alignment-stretch .elementor-tabs-wrapper {
                                                        display: flex
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-alignment-center .elementor-tabs-wrapper {
                                                        justify-content: center
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-alignment-end .elementor-tabs-wrapper {
                                                        justify-content: flex-end
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-alignment-stretch.elementor-tabs-view-horizontal .elementor-tab-title {
                                                        width: 100%
                                                    }

                                                    .elementor-widget-tabs.elementor-tabs-alignment-stretch.elementor-tabs-view-vertical .elementor-tab-title {
                                                        height: 100%
                                                    }

                                                    .elementor-tabs .elementor-tab-mobile-title {
                                                        display: none
                                                    }
                                                }
                                                </style>
                                                <div class="elementor-tabs">
                                                    <div class="elementor-tabs-wrapper" role="tablist">
                                                        <div id="elementor-tab-title-6221"
                                                            class="elementor-tab-title elementor-tab-desktop-title"
                                                            aria-selected="true" data-tab="1" role="tab" tabindex="0"
                                                            aria-controls="elementor-tab-content-6221"
                                                            aria-expanded="false">Upcoming Sessions</div>
                                                        <div id="elementor-tab-title-6222"
                                                            class="elementor-tab-title elementor-tab-desktop-title"
                                                            aria-selected="false" data-tab="2" role="tab" tabindex="-1"
                                                            aria-controls="elementor-tab-content-6222"
                                                            aria-expanded="false">Requested Sessions</div>
                                                        <div id="elementor-tab-title-6223"
                                                            class="elementor-tab-title elementor-tab-desktop-title"
                                                            aria-selected="false" data-tab="3" role="tab" tabindex="-1"
                                                            aria-controls="elementor-tab-content-6223"
                                                            aria-expanded="false">Completed Sessions</div>
                                                    </div>
                                                    <div class="elementor-tabs-content-wrapper" role="tablist"
                                                        aria-orientation="vertical">
                                                        <div class="elementor-tab-title elementor-tab-mobile-title"
                                                            aria-selected="true" data-tab="1" role="tab" tabindex="0"
                                                            aria-controls="elementor-tab-content-6221"
                                                            aria-expanded="false">Upcoming Sessions</div>
                                                        @if($upcoming_sessions->count() < 1) <div
                                                            id="elementor-tab-content-6221"
                                                            class="elementor-tab-content elementor-clearfix"
                                                            data-tab="1" role="tabpanel"
                                                            aria-labelledby="elementor-tab-title-6221" tabindex="0"
                                                            hidden="false">
                                                            <p id="message" style="font-size:14px;">You have no upcoming
                                                                sessions -
                                                                schedule a session now.</p>
                                                    </div>
                                                    @else
                                                    @foreach($upcoming_sessions as $upcoming_session)
                                                    <div id="elementor-tab-content-6221"
                                                        class="elementor-tab-content elementor-clearfix" data-tab="1"
                                                        role="tabpanel" aria-labelledby="elementor-tab-title-6221"
                                                        tabindex="0" hidden="false">
                                                        <p style="font-size:14px;">Session with
                                                            {{ $upcoming_session->mentor->name }}</p>
                                                        <p>Date &amp;
                                                            Time :
                                                            {{ Carbon\Carbon::parse($upcoming_session->date)->format('jS F\\, Y') }},
                                                            {{ Illuminate\Support\Carbon::parse($upcoming_session->start_time)->format('h:i A') }}
                                                            <span
                                                                style="letter-spacing: 0px;">{{ $upcoming_session->utc }}<br /></span>
                                                        </p>
                                                        <p>Description
                                                            : {{ $upcoming_session->description }}<br />
                                                        </p>
                                                        <p><span><em><a href="{{ $upcoming_session->call_link ?: '' }}"
                                                                        class="link" data-bs-toggle="tooltip"
                                                                        data-bs-placement="bottom" title="Join Session"
                                                                        style="color: #3366ff !important;">
                                                                    </a>Join
                                                                    Session</em></span></p>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                    <div class="elementor-tab-title elementor-tab-mobile-title"
                                                        aria-selected="false" data-tab="2" role="tab" tabindex="-1"
                                                        aria-controls="elementor-tab-content-6222"
                                                        aria-expanded="false">Requested Sessions</div>
                                                    @if($requested_sessions->count() < 1) <div
                                                        id="elementor-tab-content-6222"
                                                        class="elementor-tab-content elementor-clearfix" data-tab="2"
                                                        role="tabpanel" aria-labelledby="elementor-tab-title-6222"
                                                        tabindex="0" hidden="hidden">
                                                        <p id="message" style="font-size:14px;">You have no requested
                                                            sessions -
                                                            schedule a session now.</p>
                                                </div>
                                                @else
                                                @foreach($requested_sessions as $requested_session)
                                                <div id="elementor-tab-content-6222"
                                                    class="elementor-tab-content elementor-clearfix" data-tab="2"
                                                    role="tabpanel" aria-labelledby="elementor-tab-title-6222"
                                                    tabindex="0" hidden="hidden">
                                                    <p style="font-size:14px;">Session with
                                                        {{ $requested_session->mentor->name }}</p>
                                                    <p>Date &amp;
                                                        Time :
                                                        {{ Illuminate\Support\Carbon::parse($requested_session->start_time)->format('h:i A') }},
                                                        {{ Carbon\Carbon::parse($requested_session->date)->format('jS F\\, Y') }},
                                                        <span
                                                            style="letter-spacing: 0px;">{{ $requested_session->utc }}<br /></span>
                                                    </p>
                                                    <p>Description
                                                        : {{ $requested_session->description }}<br />
                                                    </p>
                                                    <p><span><em><a href="{{ route('schedule-call', [$requested_session->mentor_id, $requested_session->id]) }}"
                                                                    target="_blank"
                                                                    style="color:#3366ff !important;">Update
                                                                    Session</a></em></span></p>
                                                </div>
                                                @endforeach
                                                @endif
                                                <div class="elementor-tab-title elementor-tab-mobile-title"
                                                    aria-selected="false" data-tab="3" role="tab" tabindex="-1"
                                                    aria-controls="elementor-tab-content-6223" aria-expanded="false">
                                                    Completed Sessions</div>
                                                @if($completed_sessions->count() < 1) <div
                                                    id="elementor-tab-content-6223"
                                                    class="elementor-tab-content elementor-clearfix" data-tab="3"
                                                    role="tabpanel" aria-labelledby="elementor-tab-title-6223"
                                                    tabindex="0" hidden="hidden">
                                                    <p id="message" style="font-size:14px;">You have no completed
                                                        sessions -
                                                        schedule a session now.</p>
                                            </div>
                                            @else
                                            @foreach($completed_sessions as $completed_session)
                                            <div id="elementor-tab-content-6223"
                                                class="elementor-tab-content elementor-clearfix" data-tab="3"
                                                role="tabpanel" aria-labelledby="elementor-tab-title-6223" tabindex="0"
                                                hidden="hidden">
                                                <p style="font-size:14px;">Session with
                                                    {{ $completed_session->mentor->name }}</p>
                                                <p>Date &amp;
                                                    Time :
                                                    {{ Carbon\Carbon::parse($completed_session->date)->format('jS F\\, Y') }},
                                                    {{ Illuminate\Support\Carbon::parse($completed_session->start_time)->format('h:i A') }}
                                                    <span
                                                        style="letter-spacing: 0px;">{{ $completed_session->utc }}<br /></span>
                                                </p>
                                                <p>Description
                                                    : {{ $completed_session->description }}<br />
                                                </p>
                                                <p><span><em> <a href="{{ route('user.review', [$completed_session->mentor_id]) }}"
                                                                target="_blank" style="color:#3366ff !important;">
                                                                Write Review
                                                            </a></em></span></p>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
        </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-2df66cd elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="2df66cd" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9bd30b6"
                    data-id="9bd30b6" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-39fa23d elementor-widget elementor-widget-text-editor"
                            data-id="39fa23d" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <h6>Your top match</h6>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e1dbd2f elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="e1dbd2f" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-7f40e2c elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="7f40e2c" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                @foreach($suggested_mentors as $suggested_mentor)
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3297377"
                    data-id="3297377" data-element_type="row">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-89a31e1 elementor-widget__width-initial elementor-position-top elementor-widget elementor-widget-image-box"
                            data-id="89a31e1" data-element_type="widget" data-widget_type="image-box.default">
                            <div class="elementor-widget-container">
                                <style>
                                /*! elementor - v3.21.0 - 20-05-2024 */
                                .elementor-widget-image-box .elementor-image-box-content {
                                    width: 100%
                                }

                                @media (min-width:768px) {

                                    .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper,
                                    .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
                                        display: flex
                                    }

                                    .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
                                        text-align: end;
                                        flex-direction: row-reverse
                                    }

                                    .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper {
                                        text-align: start;
                                        flex-direction: row
                                    }

                                    .elementor-widget-image-box.elementor-position-top .elementor-image-box-img {
                                        margin: auto
                                    }

                                    .elementor-widget-image-box.elementor-vertical-align-top .elementor-image-box-wrapper {
                                        align-items: flex-start
                                    }

                                    .elementor-widget-image-box.elementor-vertical-align-middle .elementor-image-box-wrapper {
                                        align-items: center
                                    }

                                    .elementor-widget-image-box.elementor-vertical-align-bottom .elementor-image-box-wrapper {
                                        align-items: flex-end
                                    }
                                }

                                @media (max-width:767px) {
                                    .elementor-widget-image-box .elementor-image-box-img {
                                        margin-left: auto !important;
                                        margin-right: auto !important;
                                        margin-bottom: 15px
                                    }
                                }

                                .elementor-widget-image-box .elementor-image-box-img {
                                    display: inline-block
                                }

                                .elementor-widget-image-box .elementor-image-box-title a {
                                    color: inherit
                                }

                                .elementor-widget-image-box .elementor-image-box-wrapper {
                                    text-align: center
                                }

                                .elementor-widget-image-box .elementor-image-box-description {
                                    margin: 0
                                }
                                </style>
                                <div class="elementor-image-box-wrapper">
                                    <figure class="elementor-image-box-img"><img fetchpriority="high" decoding="async"
                                            width="400" height="400"
                                            src="https://wiseadvizor.com/wp-content/uploads/2024/02/{{ $suggested_mentor->metaData->pro_pic_1 }}"
                                            class="attachment-full size-full wp-image-7552" alt=""
                                            style="width:100%;height:100%;max-width:400px" /></figure>
                                    <div class="elementor-image-box-content">
                                        <h6 class="elementor-image-box-title">
                                            {{ $suggested_mentor->name }}</h6>
                                        <p class="elementor-image-box-description">
                                            {{ $suggested_mentor->metaData->designation }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-00747b5 wpr-button-icon-style-inline wpr-button-icon-position-right elementor-widget elementor-widget-wpr-button"
                            data-id="00747b5" data-element_type="widget" data-widget_type="wpr-button.default">
                            <div class="elementor-widget-container">
                                <div class="wpr-button-wrap elementor-clearfix">
                                    <a class="wpr-button wpr-button-effect wpr-button-none" data-text="Go"
                                        href="{{ route('schedule-call', [$suggested_mentor->id, ucfirst(Str::slug($suggested_mentor->name))]) }}"
                                        style="background-color: #4285f4;">
                                        <span class="wpr-button-content">
                                            <span class="wpr-button-text" style="padding-top:5px">Book
                                                Session</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-cc9980c"
                                    data-id="cc9980c" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3b585d6"
                                    data-id="3b585d6" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div> -->
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-0d73bf6 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="0d73bf6" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-20aa685"
                    data-id="20aa685" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-09f8429 elementor-widget elementor-widget-text-editor"
                            data-id="09f8429" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <h6>Our upcoming webinar</h6>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d76a0e2 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="d76a0e2" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-19cb69240 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="19cb69240" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-wide">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3d14adf1"
                    data-id="3d14adf1" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-22c27c7c wpr-dual-heading-icon-top elementor-widget elementor-widget-wpr-dual-color-heading"
                            data-id="22c27c7c" data-element_type="widget"
                            data-widget_type="wpr-dual-color-heading.default">
                            <div class="elementor-widget-container">
                                <div class="wpr-dual-heading-wrap">
                                    <div class="wpr-dual-title-wrap">
                                        <h6 class="wpr-dual-title">

                                            <span class="second">No Events Registered Yet.</span>
                                        </h6>
                                    </div>
                                    <!-- <div class="wpr-dual-heading-description">No events yet.</div> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="elementor-element elementor-element-03fed36 elementor-widget elementor-widget-heading"
                                            data-id="03fed36" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h6 class="elementor-heading-title elementor-size-default">When - 12th
                                                    July 2024, 10:00 AM IST</h6>
                                            </div>
                                        </div>
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-6029c7d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                            data-id="6029c7d8" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3ac8ecb5"
                                                    data-id="3ac8ecb5" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-2e23eb91 wpr-button-icon-style-inline wpr-button-icon-position-right elementor-widget elementor-widget-wpr-button"
                                                            data-id="2e23eb91" data-element_type="widget"
                                                            data-widget_type="wpr-button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="wpr-button-wrap elementor-clearfix">
                                                                    <a class="wpr-button wpr-button-effect wpr-button-none"
                                                                        data-text="Go" href="#link"
                                                                        style="background-color: #4285f4;">
                                                                        <span class="wpr-button-content">
                                                                            <span
                                                                                class="wpr-button-text">Register</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section> -->
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-i5m9wmc elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="i5m9wmc" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cda29b6"
                    data-id="cda29b6" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-bbf9616 elementor-widget elementor-widget-heading"
                            data-id="bbf9616" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h6 class="elementor-heading-title elementor-size-default">Get referral
                                    discount</h6>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c715ba2 elementor-widget elementor-widget-text-editor"
                            data-id="c715ba2" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>Get referral discount on 35% off on your next call once you referral
                                    schedule the call.</p>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-29103eb elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="29103eb" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-cb10aab"
                                    data-id="cb10aab" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-0919c49 elementor-align-center elementor-widget elementor-widget-button"
                                            data-id="0919c49" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <input class="form-control" name="referral_link"
                                                    value="{{ $referral_link }}" id="referral_link" disabled>
                                                <button class="elementor-button elementor-button-link elementor-size-sm"
                                                    id="copy_link" aria-label="Search" type="submit"
                                                    style="background-color: #4285f4;">
                                                    <i class="fas fa-copy"></i>
                                                    Copy Referral
                                                </button>
                                                <!-- <div class="elementor-button-wrapper">
                                                                    <input type="text" class="form-control" value=""
                                                                        name="referral_link" disabled>
                                                                    <a id="referral_link"
                                                                        class="elementor-button elementor-button-link elementor-size-sm"
                                                                        href="#">Copy referral
                                                                    </a>
                                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4df1d2f e-grid-align-mobile-center elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                                            data-id="4df1d2f" data-element_type="widget"
                                            data-widget_type="social-icons.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                /*! elementor - v3.21.0 - 20-05-2024 */
                                                .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                                                .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                                                .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                                    line-height: 1;
                                                    font-size: 0
                                                }

                                                .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                                    display: inline-grid
                                                }

                                                .elementor-widget-social-icons .elementor-grid {
                                                    grid-column-gap: var(--grid-column-gap, 5px);
                                                    grid-row-gap: var(--grid-row-gap, 5px);
                                                    grid-template-columns: var(--grid-template-columns);
                                                    justify-content: var(--justify-content, center);
                                                    justify-items: var(--justify-content, center)
                                                }

                                                .elementor-icon.elementor-social-icon {
                                                    font-size: var(--icon-size, 25px);
                                                    line-height: var(--icon-size, 25px);
                                                    width: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em));
                                                    height: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em))
                                                }

                                                .elementor-social-icon {
                                                    --e-social-icon-icon-color: #fff;
                                                    display: inline-flex;
                                                    background-color: #69727d;
                                                    align-items: center;
                                                    justify-content: center;
                                                    text-align: center;
                                                    cursor: pointer
                                                }

                                                .elementor-social-icon i {
                                                    color: var(--e-social-icon-icon-color)
                                                }

                                                .elementor-social-icon svg {
                                                    fill: var(--e-social-icon-icon-color)
                                                }

                                                .elementor-social-icon:last-child {
                                                    margin: 0
                                                }

                                                .elementor-social-icon:hover {
                                                    opacity: .9;
                                                    color: #fff
                                                }

                                                .elementor-social-icon-android {
                                                    background-color: #a4c639
                                                }

                                                .elementor-social-icon-apple {
                                                    background-color: #999
                                                }

                                                .elementor-social-icon-behance {
                                                    background-color: #1769ff
                                                }

                                                .elementor-social-icon-bitbucket {
                                                    background-color: #205081
                                                }

                                                .elementor-social-icon-codepen {
                                                    background-color: #000
                                                }

                                                .elementor-social-icon-delicious {
                                                    background-color: #39f
                                                }

                                                .elementor-social-icon-deviantart {
                                                    background-color: #05cc47
                                                }

                                                .elementor-social-icon-digg {
                                                    background-color: #005be2
                                                }

                                                .elementor-social-icon-dribbble {
                                                    background-color: #ea4c89
                                                }

                                                .elementor-social-icon-elementor {
                                                    background-color: #d30c5c
                                                }

                                                .elementor-social-icon-envelope {
                                                    background-color: #ea4335
                                                }

                                                .elementor-social-icon-facebook,
                                                .elementor-social-icon-facebook-f {
                                                    background-color: #3b5998
                                                }

                                                .elementor-social-icon-flickr {
                                                    background-color: #0063dc
                                                }

                                                .elementor-social-icon-foursquare {
                                                    background-color: #2d5be3
                                                }

                                                .elementor-social-icon-free-code-camp,
                                                .elementor-social-icon-freecodecamp {
                                                    background-color: #006400
                                                }

                                                .elementor-social-icon-github {
                                                    background-color: #333
                                                }

                                                .elementor-social-icon-gitlab {
                                                    background-color: #e24329
                                                }

                                                .elementor-social-icon-globe {
                                                    background-color: #69727d
                                                }

                                                .elementor-social-icon-google-plus,
                                                .elementor-social-icon-google-plus-g {
                                                    background-color: #dd4b39
                                                }

                                                .elementor-social-icon-houzz {
                                                    background-color: #7ac142
                                                }

                                                .elementor-social-icon-instagram {
                                                    background-color: #262626
                                                }

                                                .elementor-social-icon-jsfiddle {
                                                    background-color: #487aa2
                                                }

                                                .elementor-social-icon-link {
                                                    background-color: #818a91
                                                }

                                                .elementor-social-icon-linkedin,
                                                .elementor-social-icon-linkedin-in {
                                                    background-color: #0077b5
                                                }

                                                .elementor-social-icon-medium {
                                                    background-color: #00ab6b
                                                }

                                                .elementor-social-icon-meetup {
                                                    background-color: #ec1c40
                                                }

                                                .elementor-social-icon-mixcloud {
                                                    background-color: #273a4b
                                                }

                                                .elementor-social-icon-odnoklassniki {
                                                    background-color: #f4731c
                                                }

                                                .elementor-social-icon-pinterest {
                                                    background-color: #bd081c
                                                }

                                                .elementor-social-icon-product-hunt {
                                                    background-color: #da552f
                                                }

                                                .elementor-social-icon-reddit {
                                                    background-color: #ff4500
                                                }

                                                .elementor-social-icon-rss {
                                                    background-color: #f26522
                                                }

                                                .elementor-social-icon-shopping-cart {
                                                    background-color: #4caf50
                                                }

                                                .elementor-social-icon-skype {
                                                    background-color: #00aff0
                                                }

                                                .elementor-social-icon-slideshare {
                                                    background-color: #0077b5
                                                }

                                                .elementor-social-icon-snapchat {
                                                    background-color: #fffc00
                                                }

                                                .elementor-social-icon-soundcloud {
                                                    background-color: #f80
                                                }

                                                .elementor-social-icon-spotify {
                                                    background-color: #2ebd59
                                                }

                                                .elementor-social-icon-stack-overflow {
                                                    background-color: #fe7a15
                                                }

                                                .elementor-social-icon-steam {
                                                    background-color: #00adee
                                                }

                                                .elementor-social-icon-stumbleupon {
                                                    background-color: #eb4924
                                                }

                                                .elementor-social-icon-telegram {
                                                    background-color: #2ca5e0
                                                }

                                                .elementor-social-icon-threads {
                                                    background-color: #000
                                                }

                                                .elementor-social-icon-thumb-tack {
                                                    background-color: #1aa1d8
                                                }

                                                .elementor-social-icon-tripadvisor {
                                                    background-color: #589442
                                                }

                                                .elementor-social-icon-tumblr {
                                                    background-color: #35465c
                                                }

                                                .elementor-social-icon-twitch {
                                                    background-color: #6441a5
                                                }

                                                .elementor-social-icon-twitter {
                                                    background-color: #1da1f2
                                                }

                                                .elementor-social-icon-viber {
                                                    background-color: #665cac
                                                }

                                                .elementor-social-icon-vimeo {
                                                    background-color: #1ab7ea
                                                }

                                                .elementor-social-icon-vk {
                                                    background-color: #45668e
                                                }

                                                .elementor-social-icon-weibo {
                                                    background-color: #dd2430
                                                }

                                                .elementor-social-icon-weixin {
                                                    background-color: #31a918
                                                }

                                                .elementor-social-icon-whatsapp {
                                                    background-color: #25d366
                                                }

                                                .elementor-social-icon-wordpress {
                                                    background-color: #21759b
                                                }

                                                .elementor-social-icon-x-twitter {
                                                    background-color: #000
                                                }

                                                .elementor-social-icon-xing {
                                                    background-color: #026466
                                                }

                                                .elementor-social-icon-yelp {
                                                    background-color: #af0606
                                                }

                                                .elementor-social-icon-youtube {
                                                    background-color: #cd201f
                                                }

                                                .elementor-social-icon-500px {
                                                    background-color: #0099e5
                                                }

                                                .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                                    border-radius: 10%
                                                }

                                                .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                                    border-radius: 50%
                                                }
                                                </style>
                                                <div class="elementor-social-icons-wrapper elementor-grid">
                                                    <span class="elementor-grid-item">
                                                        <a id="shareWithFb"
                                                            class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-repeater-item-9df531e">
                                                            <span class="elementor-screen-only">Facebook-f</span>
                                                            <i class="fab fa-facebook-f"></i> </a>
                                                    </span>
                                                    <span class="elementor-grid-item">
                                                        <a id="shareWithTwitter"
                                                            class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-e455e88">
                                                            <span class="elementor-screen-only">Twitter</span>
                                                            <i class="fab fa-twitter"></i> </a>
                                                    </span>
                                                    <span class="elementor-grid-item">
                                                        <a id="shareWithLinkedin"
                                                            class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-f787bb6">
                                                            <span class="elementor-screen-only">Linkedin</span>
                                                            <i class="fab fa-linkedin"></i> </a>
                                                    </span>
                                                    <span class="elementor-grid-item">
                                                        <a id="shareWithMail"
                                                            class="elementor-icon elementor-social-icon elementor-social-icon-envelope elementor-repeater-item-4034cea">
                                                            <span class="elementor-screen-only">Envelope</span>
                                                            <i class="fas fa-envelope"></i> </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3fbf146 elementor-widget elementor-widget-text-editor"
                                            data-id="3fbf146" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>or directly share on your social media.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <link rel="stylesheet" id="elementor-post-3007-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-3007.css?ver=1688644136" media="all">
    <link rel='stylesheet' id='elementor-post-32-css'
        href='https://wiseadvizor.com/wp-content/uploads/elementor/css/post-32.css?ver=1719392983' media='all' />
    <link rel='stylesheet' id='elementor-post-7754-css'
        href='https://wiseadvizor.com/wp-content/uploads/elementor/css/post-7754.css?ver=1725863782' media='all' />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" async>
    @include('partials.web-style')

    @include('partials.footer-web')

    @include('partials.web-script')
    </div>
</body>

</html>
<style>
.elementor-7754 .elementor-element.elementor-element-22c27c7c .wpr-dual-title .second {
    padding-top: 5px;
    padding-left: 120px;
    color: #fff;
    border-color: #000;
    font-family: "Poppins", Sans-serif;
    font-size: 16px;
    font-weight: 700;
    border-style: none;
}

.elementor-7754 .elementor-element.elementor-element-49e1889:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
.elementor-7754 .elementor-element.elementor-element-49e1889>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #4285f4;
}

/* a:hover {
    background-color: #4285f4;
} */

.elementor-7754 .elementor-element.elementor-element-00747b5 .wpr-button::before {
    background-color: #4285f4;
    /* -webkit-transition-duration: 0.4s; */
    transition-duration: 0.4s;
    /* -webkit-animation-duration: 0.4s; */
    animation-duration: 0.4s;
}

.elementor-7754 .elementor-element.elementor-element-ce8b0b8 .wpr-search-form-submit {
    color: #ffffff;
    background-color: #4285f4;
    border-color: #E8E8E8;
    min-width: 123px;
    border-width: 0px 0px 0px 0px;
    border-radius: 0px 0px 0px 0px;
}

.elementor-7754 .elementor-element.elementor-element-3b55da2 .elementor-tab-content {
    color: #C6C6C6;
    font-family: "Roboto", Sans-serif;
    font-size: 12px;
    font-weight: 400;
    font-style: normal;
    line-height: 15px;
    letter-spacing: 0px;
    word-spacing: 0px;
    text-shadow: 0px 0px 6px rgba(0, 0, 0, 0.3);
}

.elementor-7754 .elementor-element.elementor-element-3b55da2 .elementor-tab-title,
.elementor-7754 .elementor-element.elementor-element-3b55da2 .elementor-tab-title:before,
.elementor-7754 .elementor-element.elementor-element-3b55da2 .elementor-tab-title:after,
.elementor-7754 .elementor-element.elementor-element-3b55da2 .elementor-tab-content,
.elementor-7754 .elementor-element.elementor-element-3b55da2 .elementor-tabs-content-wrapper {
    border-width: 1px;
}

.elementor-7754 .elementor-element.elementor-element-3b55da2 .elementor-tab-title {
    font-family: "Helvetica", Sans-serif;
    font-size: 16px;
    font-weight: 700;
}

.elementor-7754 .elementor-element.elementor-element-67c6c66>.elementor-widget-container {
    margin: -18px 0px 0px 0px;
    padding: 0px 0px 0px 10px;
}

.elementor-7754 .elementor-element.elementor-element-b156db7>.elementor-widget-container {
    padding: 10px 10px 0px 40px;
}

h6 {
    font-family: "Helvetica", sans-serif;
    font-size: medium;
    font-weight: 400;
    /* line-height: var(--wp--custom--typography--line-height--normal); */
    text-transform: capitalize;
}

.site-header,
.site-main,
.widget-area,
.site-footer {
    padding-top: 0px;
    padding-bottom: 0px;
    margin-left: auto;
    margin-right: auto;
}

.elementor-32 .elementor-element.elementor-element-60f0ea5:not(.elementor-motion-effects-element-type-background),
.elementor-32 .elementor-element.elementor-element-60f0ea5>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #000;
    background-image: linear-gradient(90deg, #000 0%, #000 100%);
}

i.fas.fa-chevron-down {
    margin-top: -15px !important;
    padding-left: 10px !important;
    font-size: 9px !important;
    font-family: "Font Awesome 5 Free" !important;
    font-weight: 900 !important;
}

i.fas.fa-bell.fa-2xl {
    font-size: 32px !important;
}

.site-main>* {
    margin-top: 0px;
    margin-bottom: 0px;
}

.elementor-7754 .elementor-element.elementor-element-67c6c66 {
    color: #c7cacb;
}

.elementor-7754 .elementor-element.elementor-element-ce8b0b8 .wpr-search-form-input {
    color: #333333;
    background-color: #ffffff;
    border-color: #E8E8E8;
    text-align: left;
    border-width: 1px 1px 1px 1px;
    border-radius: 5px 0px 0px 5px !important;
    padding: 15px 15px 15px 15px;
}

.elementor-7754 .elementor-element.elementor-element-ce8b0b8 .wpr-search-form-input,
.elementor-7754 .elementor-element.elementor-element-ce8b0b8 .wpr-category-select-wrap,
.elementor-7754 .elementor-element.elementor-element-ce8b0b8 .wpr-category-select {
    font-family: "Helvetica", sans-serif;
    font-size: 15px;
}

.elementor-7754 .elementor-element.elementor-element-00747b5.wpr-button-icon-style-inline .wpr-button {
    height: 25px;
    padding: 0px 0px 0px 0px;
}

.elementor-7754 .elementor-element.elementor-element-89a31e1 .elementor-image-box-description {
    color: #9A9999;
    font-family: "Roboto", Sans-serif;
    font-size: 11px;
    font-weight: 400;
    padding-bottom: 10px;
}

.elementor-7754 .elementor-element.elementor-element-0919c49 .elementor-button {
    font-family: "Roboto", Sans-serif;
    font-weight: 400;
    background-color: #6166CE;
    margin-top: 10px;
}

.elementor-7754 .elementor-element.elementor-element-28edc46 .elementor-heading-title {
    padding-top: 10px;
    color: #FFFFFF;
}

.elementor-7754 .elementor-element.elementor-element-0e0d155 {
    color: #FFFFFF;
    font-family: "Helvetica", Sans-serif;
    font-weight: 400;
    padding-top: 10px;
    padding-left: 10px;
}

.elementor-7754 .elementor-element.elementor-element-0e0d155>.elementor-widget-container>h6 {
    font-size: 21px;
    font-family: "Helvetica", Sans-serif;
}

.elementor-7754 .elementor-element.elementor-element-39fa23d>.elementor-widget-container>h6 {
    font-size: 21px;
    font-family: "Helvetica", Sans-serif;
}

.elementor-7754 .elementor-element.elementor-element-09f8429>.elementor-widget-container>h6 {
    font-size: 21px;
    font-family: "Helvetica", Sans-serif;
}

.elementor-7754 .elementor-element.elementor-element-39fa23d {
    padding-left: 10px;
    padding-top: 25px;
    color: #FFFFFF;
}

.elementor-7754 .elementor-element.elementor-element-09f8429 {
    padding-left: 15px;
    color: #FFFFFF;
    padding-top: 20px;
}

.elementor-7754 .elementor-element.elementor-element-bbf9616 .elementor-heading-title {
    padding-top: 30px;
    color: #FFFFFF;
    font-family: "Helvetica", Sans-serif;
    font-size: 21px;
    font-weight: 600;
    /* padding-bottom: 20px; */
}

.elementor-7754 .elementor-element.elementor-element-3fbf146>.elementor-widget-container {
    margin: -32px 0px 35px 0px;
}

.elementor-7754 .elementor-element.elementor-element-39162d4 {
    padding-left: 8px;
    color: #FFFFFF;
}

@media (max-width: 767px) {

    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }

    #message {
        margin-top: 20px;
        padding-left: 10px
    }

    .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
        margin-left: 30px;
        margin-right: 30px;
        border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color);
    }

    .elementor-7754 .elementor-element.elementor-element-22c27c7c .wpr-dual-title .second {
        padding-top: 5px;
        padding-left: 0px;
        color: #fff;
        border-color: #000;
        font-family: "Poppins", Sans-serif;
        font-size: 16px;
        font-weight: 700;
        border-style: none;
    }

    .elementor-7754 .elementor-element.elementor-element-0919c49 .elementor-button {
        font-family: "Roboto", Sans-serif;
        font-weight: 400;
        background-color: #6166CE;
        margin-top: 20px;
    }

    .elementor-column.elementor-col-33.elementor-top-column.elementor-element.elementor-element-3297377 {
        margin-left: 30px;
    }

    .elementor-7754 .elementor-element.elementor-element-67c6c66>.elementor-widget-container {
        margin: -18px 0px 0px 0px;
        /* padding: 0px 0px 0px 10px; */
        text-align: center;
    }

    .elementor-7754 .elementor-element.elementor-element-39162d4 {
        text-align: center;
        /* padding-left: 8px; */
        color: #FFFFFF;
    }

    .elementor-7754 .elementor-element.elementor-element-4df1d2f>.elementor-widget-container {
        margin: -15px 0px 0px;
    }

    .elementor-7754 .elementor-element.elementor-element-00747b5>.elementor-widget-container {
        margin: -10px 0px 25px -38px;
    }

    .elementor-7754 .elementor-element.elementor-element-89a31e1 .elementor-image-box-wrapper .elementor-image-box-img {
        width: 100%;
    }

    .elementor-7754 .elementor-element.elementor-element-ce8b0b8 .wpr-search-form-input,
    .elementor-7754 .elementor-element.elementor-element-ce8b0b8 .wpr-category-select-wrap,
    .elementor-7754 .elementor-element.elementor-element-ce8b0b8 .wpr-category-select {
        font-family: "Helvetica", sans-serif;
        font-size: 8.5px;
    }

    .wpr-search-form-input-wrap.elementor-clearfix {
        margin-left: -20px;
    }

    .elementor-7754 .elementor-element.elementor-element-19cb69240 {
        padding: 25px 20px 50px 20px;
    }

    .elementor-7754 .elementor-element.elementor-element-ce8b0b8 .wpr-search-form-submit {
        margin-right: 0px;
        margin-top: 19px;
        color: #ffffff;
        background-color: #605BE5;
        border-color: #E8E8E8;
        min-width: 40px;
        border-width: 0px 0px 0px 0px;
        border-radius: 0px 0px 0px 0px;
    }

    .elementor-7754 .elementor-element.elementor-element-ce8b0b8 .wpr-search-form-input {
        margin-top: 20px;
        color: #333333;
        background-color: #ffffff;
        border-color: #E8E8E8;
        text-align: left;
        border-width: 1px 1px 1px 1px;
        border-radius: 0px 0px 0px 0px !important;
        padding: 15px 0px 15px 10px;
    }

    .elementor-7754 .elementor-element.elementor-element-49e1889:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
    .elementor-7754 .elementor-element.elementor-element-49e1889>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        margin-left: 3px;
        background-color: #4424E9;
        margin-bottom: 15px;
        margin-top: -20px;
    }

    .elementor-7754 .elementor-element.elementor-element-b156db7>.elementor-widget-container {
        padding: 10px 10px 0px 30px;
    }

    .elementor-32 .elementor-element.elementor-element-540d2d1>.elementor-widget-container {
        padding: 0px 20px 10px 100px;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
        background-color: #fff;
        color: #001E64;
    }

    .elementor-button.elementor-size-xs {
        font-size: 12px;
        padding: 10px 20px;
        border-radius: 7px;
        margin: 10px;
    }

    .elementor-button {
        display: inline-block;
        line-height: 1;
        background-color: #001E64;
        fill: #fff;
        text-align: center;
        transition: all .3s;
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

    #menu-item-5136 {
        font-size: 8px;
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

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
        background-color: #fff;
        color: #001E64 !important;
    }

    .elementor-7754 .elementor-element.elementor-element-28edc46 .elementor-heading-title {
        padding-right: 10px;
        padding-left: 10px;
        line-height: 25px;
        padding-top: 0px;
        color: #FFFFFF;
    }
}

@media (max-width: 360px) {
    .elementor-7754 .elementor-element.elementor-element-00747b5>.elementor-widget-container {
        margin: -10px 0px 25px -30px;
    }

    .elementor-element.elementor-element-b156db7.elementor-widget__width-initial.elementor-widget.elementor-widget-text-editor>span {
        padding-left: 8px;
        font-size: 12px;
    }
}


@media (max-width: 320px) {}

@media (max-width: 280px) {
    .elementor-3007 .elementor-element.elementor-element-a2b9669>.elementor-element-populated {
        padding: 0px 0px 0px 20px;
        margin-top: 60px;
    }
}

@media (max-width: 360px) {}

@media (max-width: 375px) {}

@media (min-width: 540px) {}

@media (min-width: 768px) and (max-width: 1024px) {
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
}
</style>
<script type="text/javascript">
(function($) {
    $(document).ready(function() {
        $('#copy_link').on('click', function() {
            // Get the text field
            var copyText = document.getElementById("referral_link");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            // alert("Copied the text: " + copyText.value);
        });
    });
}(jQuery));
</script>
<script type="text/javascript">
$(document).ready(function() {
    var copiedLink = document.getElementById("referral_link").value;

    $('#shareWithTwitter').click(function() {
        window.open("https://twitter.com/intent/tweet?url=" + copiedLink);
    });

    $('#shareWithFb').click(function() {
        window.open("https://www.facebook.com/sharer/sharer.php?u=" + copiedLink,
            'facebook-share-dialog', "width=626, height=436");
    });

    // $('#shareWithFb').click(function () {
    //     window.open("https://www.facebook.com/sharer/sharer.php?u=" + copiedLink, 'facebook-share-dialog', "width=626, height=436");
    // });

    $('#shareWithMail').click(function() {
        var formattedBody = "This is cause link: " + (copiedLink);
        var mailToLink = "mailto:?subject= " + user + " wants you to donate to this noble cause&body=" +
            encodeURIComponent(formattedBody);
        window.location.href = mailToLink;
    });

    $('#shareWithLinkedin').click(function() {
        var win = window.open('https://api.whatsapp.com/send?text=' + copiedLink, '_blank');
        win.focus();
    });
});
</script>