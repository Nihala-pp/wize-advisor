<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    @if(!empty($name))
    <title>Connect 1:1 Mentorship - {{$name}}</title>
    <meta name="description"
        content="Get expert mentorship & business guidance for building a startup with wiseAdvizor. Connect with {{$name}} today.">
    @elseif(!empty($token))
    <title>Connect 1:1 Mentorship - {{$token}} with {{$mentor}}</title>
    <meta name="description"
        content="Get expert mentorship & business guidance from {{ $mentor }} for building a startup with wiseAdvizor. {{$token}} today.">
    @else
    <title>Your Go-To Business Coach for Building a Successful Startup</title>
    <meta name="description"
        content="Get expert mentorship & business guidance for building a startup with wiseAdvizor. Connect with a business coach today.">
    @endif
    <meta name="keywords" content="business guidance, building a startup, business coach, Startup mentors">
    @if($id && empty($name))
    <link rel="canonical" href="https://wiseadvizor.com/login/{{ $token }}/{{ $id }}">
    <meta property="og:url" content="https://wiseadvizor.com/login/{{ $token }}/{{ $id }}">
    <meta name="twitter:url" content="https://wiseadvizor.com/login/{{ $token }}/{{ $id }}">
    @elseif($token && $name)
    <link rel="canonical" href="https://wiseadvizor.com/login/{{ $token }}/{{ $id }}/{{ $name }}">
    <meta property="og:url" content="https://wiseadvizor.com/login/{{ $token }}/{{ $id }}/{{ $name }}">
    <meta name="twitter:url" content="https://wiseadvizor.com/login/{{ $token }}/{{ $id }}/{{ $name }}">
    @else
    <link rel="canonical" href="https://wiseadvizor.com/login">
    <meta property="og:url" content="https://wiseadvizor.com/login">
    <meta name="twitter:url" content="https://wiseadvizor.com/login">
    @endif
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
    <link rel='stylesheet' id='elementor-post-7907-css'
        href='https://web.wiseadvizor.com/wp-content/uploads/elementor/css/post-7907.css?ver=1729502695' media='all' />
    <meta name="twitter:card" content="summary_large_image">
    @include('partials.header')
    <meta name='robots' content='max-image-preview:large' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
</head>

<body
    class="page-template page-template-elementor_canvas page page-id-7907 wp-embed-responsive ehf-footer ehf-template-twentytwentyone ehf-stylesheet-twentytwentyone qodef-qi--no-touch qi-addons-for-elementor-1.7.1 is-light-theme no-js singular elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-7907">
    <div data-elementor-type="wp-page" data-elementor-id="7907" class="elementor elementor-7907">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-77167f8 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="77167f8" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1002b6b"
                    data-id="1002b6b" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-77667c2 elementor-widget elementor-widget-image"
                            data-id="77667c2" data-element_type="widget" data-widget_type="image.default">
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
                                </style> <img fetchpriority="high" decoding="async" width="750" height="650"
                                    src="https://web.wiseadvizor.com/wp-content/uploads/2024/10/PNG-White-1024x888.png"
                                    class="attachment-large size-large wp-image-8304" alt=""
                                    srcset="https://web.wiseadvizor.com/wp-content/uploads/2024/10/PNG-White-1024x888.png 1024w, https://web.wiseadvizor.com/wp-content/uploads/2024/10/PNG-White-300x260.png 300w, https://web.wiseadvizor.com/wp-content/uploads/2024/10/PNG-White-768x666.png 768w, https://web.wiseadvizor.com/wp-content/uploads/2024/10/PNG-White.png 1200w"
                                    sizes="(max-width: 750px) 100vw, 750px"
                                    style="width:100%;height:86.75%;max-width:1200px" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-804ac2c elementor-widget elementor-widget-heading"
                            data-id="804ac2c" data-element_type="widget" data-widget_type="heading.default">
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
                                <h6 class="elementor-heading-title elementor-size-default">Connect with Startup Mentors
                                    : Login to wiseAdvizor</h6>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6503d89 elementor-button-align-center elementor-widget elementor-widget-login"
                            data-id="6503d89" data-element_type="widget" data-widget_type="login.default">
                            <div class="elementor-widget-container">
                                <style>
                                /*! elementor-pro - v3.8.2 - 21-11-2022 */
                                .elementor-button.elementor-hidden,
                                .elementor-hidden {
                                    display: none
                                }

                                .e-form__step {
                                    width: 100%
                                }

                                .e-form__step:not(.elementor-hidden) {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -ms-flex-wrap: wrap;
                                    flex-wrap: wrap
                                }

                                .e-form__buttons {
                                    -ms-flex-wrap: wrap;
                                    flex-wrap: wrap
                                }

                                .e-form__buttons,
                                .e-form__buttons__wrapper {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex
                                }

                                .e-form__indicators {
                                    -webkit-box-pack: justify;
                                    -ms-flex-pack: justify;
                                    justify-content: space-between;
                                    -ms-flex-wrap: nowrap;
                                    flex-wrap: nowrap;
                                    font-size: 13px;
                                    margin-bottom: var(--e-form-steps-indicators-spacing)
                                }

                                .e-form__indicators,
                                .e-form__indicators__indicator {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center
                                }

                                .e-form__indicators__indicator {
                                    -webkit-box-orient: vertical;
                                    -webkit-box-direction: normal;
                                    -ms-flex-direction: column;
                                    flex-direction: column;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    -ms-flex-preferred-size: 0;
                                    flex-basis: 0;
                                    padding: 0 var(--e-form-steps-divider-gap)
                                }

                                .e-form__indicators__indicator__progress {
                                    width: 100%;
                                    position: relative;
                                    background-color: var(--e-form-steps-indicator-progress-background-color);
                                    border-radius: var(--e-form-steps-indicator-progress-border-radius);
                                    overflow: hidden
                                }

                                .e-form__indicators__indicator__progress__meter {
                                    width: var(--e-form-steps-indicator-progress-meter-width, 0);
                                    height: var(--e-form-steps-indicator-progress-height);
                                    line-height: var(--e-form-steps-indicator-progress-height);
                                    padding-right: 15px;
                                    border-radius: var(--e-form-steps-indicator-progress-border-radius);
                                    background-color: var(--e-form-steps-indicator-progress-color);
                                    color: var(--e-form-steps-indicator-progress-meter-color);
                                    text-align: right;
                                    -webkit-transition: width .1s linear;
                                    -o-transition: width .1s linear;
                                    transition: width .1s linear
                                }

                                .e-form__indicators__indicator:first-child {
                                    padding-left: 0
                                }

                                .e-form__indicators__indicator:last-child {
                                    padding-right: 0
                                }

                                .e-form__indicators__indicator--state-inactive {
                                    color: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2)
                                }

                                .e-form__indicators__indicator--state-inactive [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                    background-color: var(--e-form-steps-indicator-inactive-secondary-color, #fff)
                                }

                                .e-form__indicators__indicator--state-inactive object,
                                .e-form__indicators__indicator--state-inactive svg {
                                    fill: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2)
                                }

                                .e-form__indicators__indicator--state-active {
                                    color: var(--e-form-steps-indicator-active-primary-color, #39b54a);
                                    border-color: var(--e-form-steps-indicator-active-secondary-color, #fff)
                                }

                                .e-form__indicators__indicator--state-active [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                    background-color: var(--e-form-steps-indicator-active-secondary-color, #fff)
                                }

                                .e-form__indicators__indicator--state-active object,
                                .e-form__indicators__indicator--state-active svg {
                                    fill: var(--e-form-steps-indicator-active-primary-color, #39b54a)
                                }

                                .e-form__indicators__indicator--state-completed {
                                    color: var(--e-form-steps-indicator-completed-secondary-color, #fff)
                                }

                                .e-form__indicators__indicator--state-completed [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                    background-color: var(--e-form-steps-indicator-completed-primary-color, #39b54a)
                                }

                                .e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label {
                                    color: var(--e-form-steps-indicator-completed-primary-color, #39b54a)
                                }

                                .e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none {
                                    color: var(--e-form-steps-indicator-completed-primary-color, #39b54a);
                                    background-color: initial
                                }

                                .e-form__indicators__indicator--state-completed object,
                                .e-form__indicators__indicator--state-completed svg {
                                    fill: var(--e-form-steps-indicator-completed-secondary-color, #fff)
                                }

                                .e-form__indicators__indicator__icon {
                                    width: var(--e-form-steps-indicator-padding, 30px);
                                    height: var(--e-form-steps-indicator-padding, 30px);
                                    font-size: var(--e-form-steps-indicator-icon-size);
                                    border-width: 1px;
                                    border-style: solid;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                    overflow: hidden;
                                    margin-bottom: 10px
                                }

                                .e-form__indicators__indicator__icon img,
                                .e-form__indicators__indicator__icon object,
                                .e-form__indicators__indicator__icon svg {
                                    width: var(--e-form-steps-indicator-icon-size);
                                    height: auto
                                }

                                .e-form__indicators__indicator__icon .e-font-icon-svg {
                                    height: 1em
                                }

                                .e-form__indicators__indicator__number {
                                    width: var(--e-form-steps-indicator-padding, 30px);
                                    height: var(--e-form-steps-indicator-padding, 30px);
                                    border-width: 1px;
                                    border-style: solid;
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                    margin-bottom: 10px
                                }

                                .e-form__indicators__indicator--shape-circle {
                                    border-radius: 50%
                                }

                                .e-form__indicators__indicator--shape-square {
                                    border-radius: 0
                                }

                                .e-form__indicators__indicator--shape-rounded {
                                    border-radius: 5px
                                }

                                .e-form__indicators__indicator--shape-none {
                                    border: 0
                                }

                                .e-form__indicators__indicator__label {
                                    text-align: center
                                }

                                .e-form__indicators__indicator__separator {
                                    width: 100%;
                                    height: var(--e-form-steps-divider-width);
                                    background-color: #c2cbd2
                                }

                                .e-form__indicators--type-icon,
                                .e-form__indicators--type-icon_text,
                                .e-form__indicators--type-number,
                                .e-form__indicators--type-number_text {
                                    -webkit-box-align: start;
                                    -ms-flex-align: start;
                                    align-items: flex-start
                                }

                                .e-form__indicators--type-icon .e-form__indicators__indicator__separator,
                                .e-form__indicators--type-icon_text .e-form__indicators__indicator__separator,
                                .e-form__indicators--type-number .e-form__indicators__indicator__separator,
                                .e-form__indicators--type-number_text .e-form__indicators__indicator__separator {
                                    margin-top: calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2)
                                }

                                .elementor-field-type-hidden {
                                    display: none
                                }

                                .elementor-field-type-html {
                                    display: inline-block
                                }

                                .elementor-login .elementor-lost-password,
                                .elementor-login .elementor-remember-me {
                                    font-size: .85em
                                }

                                .elementor-field-type-recaptcha_v3 .elementor-field-label {
                                    display: none
                                }

                                .elementor-field-type-recaptcha_v3 .grecaptcha-badge {
                                    z-index: 1
                                }

                                .elementor-button .elementor-form-spinner {
                                    -webkit-box-ordinal-group: 4;
                                    -ms-flex-order: 3;
                                    order: 3
                                }

                                .elementor-form .elementor-button>span {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    -webkit-box-pack: center;
                                    -ms-flex-pack: center;
                                    justify-content: center;
                                    -webkit-box-align: center;
                                    -ms-flex-align: center;
                                    align-items: center
                                }

                                .elementor-form .elementor-button .elementor-button-text {
                                    white-space: normal;
                                    -webkit-box-flex: 0;
                                    -ms-flex-positive: 0;
                                    flex-grow: 0
                                }

                                .elementor-form .elementor-button svg {
                                    height: auto
                                }

                                .elementor-form .elementor-button .e-font-icon-svg {
                                    height: 1em
                                }

                                .elementor-select-wrapper .select-caret-down-wrapper {
                                    position: absolute;
                                    top: 50%;
                                    -webkit-transform: translateY(-50%);
                                    -ms-transform: translateY(-50%);
                                    transform: translateY(-50%);
                                    inset-inline-end: 10px;
                                    pointer-events: none;
                                    font-size: 11px
                                }

                                .elementor-select-wrapper .select-caret-down-wrapper svg {
                                    display: unset;
                                    width: 1em;
                                    aspect-ratio: unset;
                                    fill: currentColor
                                }

                                .elementor-select-wrapper .select-caret-down-wrapper i {
                                    font-size: 19px;
                                    line-height: 2
                                }

                                .elementor-select-wrapper.remove-before:before {
                                    content: "" !important
                                }
                                </style>
                                <form class="elementor-login elementor-form" method="post"
                                    action="https://web.wiseadvizor.com/wp-login.php">
                                    <input type="hidden" name="redirect_to" value="/elementor-7907/">
                                    <div class="elementor-form-fields-wrapper">
                                        <div
                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-col-100 elementor-field-required">
                                            <input size="1" type="text" name="log" id="user" placeholder=""
                                                class="elementor-field elementor-field-textual elementor-size-xs">
                                        </div>
                                        <div
                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-col-100 elementor-field-required">
                                            <input size="1" type="password" name="pwd" id="password" placeholder=""
                                                class="elementor-field elementor-field-textual elementor-size-xs">
                                        </div>


                                        <div
                                            class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100">
                                            <button type="submit" class="elementor-size-xs elementor-button"
                                                name="wp-submit">
                                                <span class="elementor-button-text">Log In</span>
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-3dea5d6 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="3dea5d6" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6b3c566"
                                    data-id="6b3c566" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-cc342ce elementor-widget elementor-widget-heading"
                                            data-id="cc342ce" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h6 class="elementor-heading-title elementor-size-default">Remember me
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ef7fe9d"
                                    data-id="ef7fe9d" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-34ee8e2 elementor-widget elementor-widget-heading"
                                            data-id="34ee8e2" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h6 class="elementor-heading-title elementor-size-default">Forgot
                                                    Password?</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-6dd74e5 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="6dd74e5" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b30331b"
                                    data-id="b30331b" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-40154f3 elementor-widget elementor-widget-heading"
                                            data-id="40154f3" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h6 class="elementor-heading-title elementor-size-default">Don't have an
                                                    account? Create new account</h6>
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
    <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
        <div class='footer-width-fixer'>
            <div data-elementor-type="wp-post" data-elementor-id="32" class="elementor elementor-32">
                <footer
                    class="elementor-section elementor-top-section elementor-element elementor-element-60f0ea5 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                    data-id="60f0ea5" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a49692e"
                            data-id="a49692e" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-dd4d324 elementor-button-align-stretch elementor-widget elementor-widget-form"
                                    data-id="dd4d324" data-element_type="widget"
                                    data-settings="{&quot;button_width&quot;:&quot;20&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                    data-widget_type="form.default">
                                    <div class="elementor-widget-container">
                                        <form class="elementor-form" method="post" name="Subscribe Form">
                                            <input type="hidden" name="post_id" value="32" />
                                            <input type="hidden" name="form_id" value="dd4d324" />
                                            <input type="hidden" name="referer_title" value="Elementor #7907" />

                                            <input type="hidden" name="queried_id" value="7907" />

                                            <div class="elementor-form-fields-wrapper elementor-labels-above">
                                                <div
                                                    class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-20 elementor-field-required elementor-mark-required">
                                                    <label for="form-field-email" class="elementor-field-label">
                                                        Subscribe to news updates </label>
                                                    <input size="1" type="email" name="form_fields[email]"
                                                        id="form-field-email"
                                                        class="elementor-field elementor-size-md  elementor-field-textual"
                                                        placeholder="Your email address" required="required"
                                                        aria-required="true">
                                                </div>
                                                <div
                                                    class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-20 e-form__buttons">
                                                    <button type="submit" class="elementor-button elementor-size-sm">
                                                        <span>
                                                            <span class=" elementor-button-icon">
                                                            </span>
                                                            <span class="elementor-button-text">SUBSCRIBE</span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-13e9ca2 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                    data-id="13e9ca2" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-c9b61e2"
                                            data-id="c9b61e2" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-b84e421 elementor-widget elementor-widget-heading"
                                                    data-id="b84e421" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">How it
                                                            Works</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-b1ed54d"
                                            data-id="b1ed54d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-7b6d864 elementor-widget elementor-widget-heading"
                                                    data-id="7b6d864" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default"><a
                                                                href="https://web.pransainvestment.ca/privacy-policy/">Privacy
                                                                Policy</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-c000038"
                                            data-id="c000038" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-aaf88ad elementor-widget elementor-widget-heading"
                                                    data-id="aaf88ad" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default"><a
                                                                href="https://web.pransainvestment.ca/terms-and-conditions/">Terms
                                                                & Conditions</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-bd39b49"
                                            data-id="bd39b49" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-b23aa07 elementor-widget elementor-widget-heading"
                                                    data-id="b23aa07" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default"><a
                                                                href="https://web.pransainvestment.ca/community-guidelines/">Community
                                                                Guidelines</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-2775f92"
                                            data-id="2775f92" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-269f902 elementor-widget elementor-widget-heading"
                                                    data-id="269f902" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default"><a
                                                                href="https://web.pransainvestment.ca/about-us/">About
                                                                Us</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-12e052a"
                                            data-id="12e052a" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-32f5614 elementor-widget elementor-widget-heading"
                                                    data-id="32f5614" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default"><a
                                                                href="https://web.pransainvestment.ca/contact-us/">Contact
                                                                Us</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-7c20640"
                                            data-id="7c20640" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-159e6db elementor-widget elementor-widget-heading"
                                                    data-id="159e6db" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default"><a
                                                                href="https://web.pransainvestment.ca/blogs/">FAQs</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-b37b831"
                                            data-id="b37b831" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-5db6379 elementor-widget elementor-widget-heading"
                                                    data-id="5db6379" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default"><a
                                                                href="https://web.pransainvestment.ca/browse-mentor/">Browse
                                                                Mentors</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-6bd5898 elementor-widget__width-auto elementor-widget elementor-widget-copyright"
                                    data-id="6bd5898" data-element_type="widget"
                                    data-settings="{&quot;align&quot;:&quot;left&quot;}"
                                    data-widget_type="copyright.default">
                                    <div class="elementor-widget-container">
                                        <div class="hfe-copyright-wrapper">
                                            <a href="https://wiseadvizor.com">
                                                <span>Copyright © 2024 wiseAdvizor | Powered by IVY Investment
                                                    LLC</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-540d2d1 elementor-shape-circle elementor-grid-6 elementor-widget__width-auto elementor-grid-mobile-6 elementor-widget-mobile__width-initial elementor-widget elementor-widget-social-icons"
                                    data-id="540d2d1" data-element_type="widget"
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
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-a96e0b3"
                                                    href="https://www.facebook.com/people/WiseAdvizor/100092527332364/"
                                                    target="_blank">
                                                    <span class="elementor-screen-only">Facebook</span>
                                                    <i class="fab fa-facebook"></i> </a>
                                            </span>
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-50885d5"
                                                    href="https://twitter.com/WiseAdvizor" target="_blank">
                                                    <span class="elementor-screen-only">Twitter</span>
                                                    <i class="fab fa-twitter"></i> </a>
                                            </span>
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-39b2a58"
                                                    href="https://www.youtube.com/@wiseAdvizor" target="_blank">
                                                    <span class="elementor-screen-only">Youtube</span>
                                                    <i class="fab fa-youtube"></i> </a>
                                            </span>
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-9d2b1b1"
                                                    href="https://www.linkedin.com/company/wiseadvizor/"
                                                    target="_blank">
                                                    <span class="elementor-screen-only">Linkedin</span>
                                                    <i class="fab fa-linkedin"></i> </a>
                                            </span>
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-29dcd07"
                                                    target="_blank">
                                                    <span class="elementor-screen-only">Instagram</span>
                                                    <i class="fab fa-instagram"></i> </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </footer>
    <script>
    document.body.classList.remove("no-js");
    </script>
    <script>
    if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {
        document.body.classList.add('is-IE');
    }
    </script>
    <link rel='stylesheet' id='hfe-widgets-style-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.33'
        media='all' />
    <script src="https://web.wiseadvizor.com/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2"
        id="wp-polyfill-inert-js"></script>
    <script src="https://web.wiseadvizor.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0"
        id="regenerator-runtime-js"></script>
    <script src="https://web.wiseadvizor.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0"
        id="wp-polyfill-js"></script>
    <script src="https://web.wiseadvizor.com/wp-includes/js/dist/dom-ready.min.js?ver=392bdd43726760d1f3ca"
        id="wp-dom-ready-js"></script>
    <script id="starter-templates-zip-preview-js-extra">
    var starter_templates_zip_preview = {
        "AstColorPaletteVarPrefix": "--ast-global-",
        "AstEleColorPaletteVarPrefix": "--ast-global-"
    };
    </script>
    <script
        src="https://web.wiseadvizor.com/wp-content/plugins/astra-sites/inc/lib/onboarding/assets/dist/template-preview/main.js?ver=06758d4d807d9d22c6ea"
        id="starter-templates-zip-preview-js"></script>
    <script src="https://web.wiseadvizor.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js">
    </script>
    <script id="qi-addons-for-elementor-script-js-extra">
    var qodefQiAddonsGlobal = {
        "vars": {
            "adminBarHeight": 0,
            "iconArrowLeft": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>",
            "iconArrowRight": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>",
            "iconClose": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"
        }
    };
    </script>
    <script src="https://web.wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=1.7.1"
        id="qi-addons-for-elementor-script-js"></script>
    <script
        src="https://web.wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/js/lib/particles/particles.js?ver=3.0.6"
        id="wpr-particles-js"></script>
    <script
        src="https://web.wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/js/lib/jarallax/jarallax.min.js?ver=1.12.7"
        id="wpr-jarallax-js"></script>
    <script
        src="https://web.wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/js/lib/parallax/parallax.min.js?ver=1.0"
        id="wpr-parallax-hover-js"></script>
    <script id="twenty-twenty-one-ie11-polyfills-js-after">
    (Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach) ||
    document.write(
        '<script src="https://web.wiseadvizor.com/wp-content/themes/twentytwentyone/assets/js/polyfills.js?ver=2.0"></scr' +
        'ipt>');
    </script>
    <script src="https://web.wiseadvizor.com/wp-content/themes/twentytwentyone/assets/js/responsive-embeds.js?ver=2.0"
        id="twenty-twenty-one-responsive-embeds-script-js"></script>
    <script src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.21.6"
        id="elementor-webpack-runtime-js"></script>
    <script src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.21.6"
        id="elementor-frontend-modules-js"></script>
    <script
        src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.21.6",
        "is_static": false,
        "experimentalFeatures": {
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "additional_custom_breakpoints": true,
            "e_swiper_latest": true,
            "container_grid": true,
            "theme_builder_v2": true,
            "home_screen": true,
            "ai-layout": true,
            "landing-pages": true,
            "page-transitions": true,
            "notes": true,
            "form-submissions": true,
            "e_scroll_snap": true
        },
        "urls": {
            "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
        },
        "swiperClass": "swiper",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 7907,
            "title": "Elementor%20%237907%20%E2%80%93%20WISE%20ADVIZOR",
            "excerpt": "",
            "featuredImage": false
        }
    };
    </script>
    <script src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.21.6"
        id="elementor-frontend-js"></script>
    <script src="https://web.wiseadvizor.com/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1"
        id="wp-hooks-js"></script>
    <script src="https://web.wiseadvizor.com/wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef" id="wp-i18n-js">
    </script>
    <script id="wp-i18n-js-after">
    wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
    });
    </script>
    <script
        src="https://web.wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js?ver=6.4.3"
        id="qi-addons-for-elementor-elementor-js"></script>
    <script
        src="https://web.wiseadvizor.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.8.2"
        id="elementor-pro-webpack-runtime-js"></script>
    <script id="elementor-pro-frontend-js-before">
    var ElementorProFrontendConfig = {
        "ajaxurl": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin-ajax.php",
        "nonce": "28fb873824",
        "urls": {
            "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor-pro\/assets\/",
            "rest": "https:\/\/web.wiseadvizor.com\/wp-json\/"
        },
        "shareButtonsNetworks": {
            "facebook": {
                "title": "Facebook",
                "has_counter": true
            },
            "twitter": {
                "title": "Twitter"
            },
            "linkedin": {
                "title": "LinkedIn",
                "has_counter": true
            },
            "pinterest": {
                "title": "Pinterest",
                "has_counter": true
            },
            "reddit": {
                "title": "Reddit",
                "has_counter": true
            },
            "vk": {
                "title": "VK",
                "has_counter": true
            },
            "odnoklassniki": {
                "title": "OK",
                "has_counter": true
            },
            "tumblr": {
                "title": "Tumblr"
            },
            "digg": {
                "title": "Digg"
            },
            "skype": {
                "title": "Skype"
            },
            "stumbleupon": {
                "title": "StumbleUpon",
                "has_counter": true
            },
            "mix": {
                "title": "Mix"
            },
            "telegram": {
                "title": "Telegram"
            },
            "pocket": {
                "title": "Pocket",
                "has_counter": true
            },
            "xing": {
                "title": "XING",
                "has_counter": true
            },
            "whatsapp": {
                "title": "WhatsApp"
            },
            "email": {
                "title": "Email"
            },
            "print": {
                "title": "Print"
            }
        },
        "facebook_sdk": {
            "lang": "en_US",
            "app_id": ""
        },
        "lottie": {
            "defaultAnimationUrl": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
        }
    };
    </script>
    <script src="https://web.wiseadvizor.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.8.2"
        id="elementor-pro-frontend-js"></script>
    <script
        src="https://web.wiseadvizor.com/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.8.2"
        id="pro-elements-handlers-js"></script>
    <script id="wpr-addons-js-js-extra">
    var WprConfig = {
        "ajaxurl": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin-ajax.php",
        "resturl": "https:\/\/web.wiseadvizor.com\/wp-json\/wpraddons\/v1",
        "nonce": "18da77c152",
        "addedToCartText": "was added to cart",
        "viewCart": "View Cart",
        "comparePageID": "",
        "comparePageURL": "https:\/\/web.wiseadvizor.com\/elementor-7907\/",
        "wishlistPageID": "",
        "wishlistPageURL": "https:\/\/web.wiseadvizor.com\/elementor-7907\/",
        "chooseQuantityText": "Please select the required number of items.",
        "site_key": "",
        "is_admin": "",
        "input_empty": "Please fill out this field",
        "select_empty": "Nothing selected",
        "file_empty": "Please upload a file",
        "recaptcha_error": "Recaptcha Error"
    };
    </script>
    <script data-cfasync="false"
        src="https://web.wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/js/frontend.min.js?ver=1.3.975"
        id="wpr-addons-js-js"></script>
    <script
        src="https://web.wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/js/modal-popups.min.js?ver=1.3.975"
        id="wpr-modal-popups-js-js"></script>
    <script src="https://web.wiseadvizor.com/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
    <script id="wp-util-js-extra">
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp-admin\/admin-ajax.php"
        }
    };
    </script>
    <script src="https://web.wiseadvizor.com/wp-includes/js/wp-util.min.js?ver=6.4.3" id="wp-util-js"></script>
    <script id="wpforms-elementor-js-extra">
    var wpformsElementorVars = {
        "captcha_provider": "recaptcha",
        "recaptcha_type": "v2"
    };
    </script>
    <script
        src="https://web.wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.8.8.3"
        id="wpforms-elementor-js"></script>
</body>

</html>