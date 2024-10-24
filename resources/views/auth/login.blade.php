<!DOCTYPE html>
<html lang="en-US">
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
@include('partials.test')
<meta name='robots' content='max-image-preview:large' />
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
<link rel="icon" type="image/png" href="{{ asset('public/assets/img/PNG-Blue.png') }}">

<body
    class="page-template page-template-elementor_canvas page page-id-7907 wp-embed-responsive ehf-template-twentytwentyone ehf-stylesheet-twentytwentyone qodef-qi--no-touch qi-addons-for-elementor-1.7.1 elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-7907">
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
                                </style> <img fetchpriority="high" decoding="async" width="300" height="260"
                                    src="https://wiseadvizor.com/wp-content/uploads/2024/10/PNG-White-1024x888.png"
                                    class="attachment-large size-large wp-image-8304" alt="Startup mentors"
                                    srcset="https://wiseadvizor.com/wp-content/uploads/2024/10/PNG-White-300x260.png 300w, https://wiseadvizor.com/wp-content/uploads/2024/10/PNG-White-1024x888.png 1024w, https://wiseadvizor.com/wp-content/uploads/2024/10/PNG-White-768x666.png 768w, https://wiseadvizor.com/wp-content/uploads/2024/10/PNG-White.png 1200w"
                                    sizes="(max-width: 300px) 100vw, 300px">
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
                                <h1 class="elementor-heading-title elementor-size-default">
                                    @if(!empty($name))
                                    {{ __('Grow Your Startup with') }} {{ $name }} - {{ ('Schedule a Call') }}
                                    @else
                                    {{ __('Connect with Startup Mentors : Login to wiseAdvizor') }}
                                    @endif
                                </h1>
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
                                <form class="elementor-login elementor-form" action="{{ route('login.post') }}"
                                    method="POST">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token ?: Null }}">
                                    <input type="hidden" name="mentor_id" value="{{ $id ?: Null }}">
                                    <input type="hidden" name="mentor_name" value="{{ $name ?: Null }}">
                                    <div class="elementor-form-fields-wrapper">
                                        <div
                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-col-100 elementor-field-required">
                                            <input size="1" type="email" name="email" id="user email"
                                                placeholder="Email"
                                                class="elementor-field elementor-field-textual elementor-size-xs"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div
                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-col-100 elementor-field-required">
                                            <input size="1" type="password" name="password" id="password"
                                                placeholder="Password"
                                                class="elementor-field elementor-field-textual elementor-size-xs"
                                                required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
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
                        <!-- <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-3dea5d6 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="3dea5d6" data-element_type="section" style="margin-left:20px; !important;">
                            <div class="elementor-container elementor-column-gap-default"> -->
                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ef7fe9d"
                            data-id="ef7fe9d" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-34ee8e2 elementor-widget elementor-widget-heading"
                                    data-id="34ee8e2" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h6 class="elementor-heading-title elementor-size-default">
                                            <a href="{{ route('forget.password.get') }}"
                                                class="text-primary text-gradient font-weight-bold">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6c20c08 elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_separator"
                            data-id="6c20c08" data-element_type="widget"
                            data-widget_type="qi_addons_for_elementor_separator.default" style="border:solid;border-width: 1px !important;
                            border-color: #2C2828 !important;">
                            <div class="elementor-widget-container">
                                <div
                                    class="qodef-shortcode qodef-m  qodef-qi-separator qodef-qi-clear qodef-separator--standard ">
                                    <div class="qodef-m-line"></div>
                                </div>
                            </div>
                        </div>
                        <!-- </div>
                        </section> -->
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
                                                    account?
                                                    <a href="{{ route('register', [$token, $id]) }}"
                                                        class="text-primary text-gradient font-weight-bold">
                                                        @if(!empty($name))
                                                        Register Here!<span class="text">and Schedule call with
                                                            {{ $name }}</span>
                                                        @elseif(!empty($token))
                                                        Create Account <span class="text">and Schedule call with
                                                            {{ $mentor }}</span>
                                                        @else
                                                        Create New Account
                                                        @endif
                                                    </a>
                                                </h6>
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
</body>

</html>
<style>
html,
body {
    max-width: 100%;
    overflow-y: hidden !important;
}

.elementor-column.elementor-col-50,
.elementor-column[data-col="50"] {
    margin-left: -15px;
    width: 50%;
}

.elementor-7907 .elementor-element.elementor-element-cc342ce .elementor-heading-title {
    padding-left: 10px;
    color: #A5A5A5;
    font-family: "Helvetica", Sans-serif;
    font-size: 12px;
    font-weight: 600;
}

.elementor-7907 .elementor-element.elementor-element-40154f3 .elementor-heading-title {
    color: #A5A5A5;
    font-family: "Helvetica", Sans-serif;
    font-size: 12px;
    font-weight: 600;
}

.elementor-7907 .elementor-element.elementor-element-804ac2c .elementor-heading-title {
    color: #FFFFFF;
    font-family: "Helvetica", Sans-serif;
    font-size: 13px;
    font-weight: 400;
}

.elementor-7907 .elementor-element.elementor-element-77167f8 {
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    margin-top: 30px;
    margin-bottom: 0px;
    padding: 100px 0px 100px 0px;
}

.elementor-7907 .elementor-element.elementor-element-34ee8e2 .elementor-heading-title {
    padding-bottom: 15px;
    color: #A5A5A5;
    font-family: "Helvetica", Sans-serif;
    font-size: 12px;
    font-weight: 600;
}

.elementor-7907 .elementor-element.elementor-element-6503d89 .elementor-button {
    font-family: "Helvetica", Sans-serif;
    font-weight: 600;
    background-color: #3F55CE;
}

.elementor-7907 .elementor-element.elementor-element-77667c2 img {
    width: 19%;
}

body.elementor-page-7907:not(.elementor-motion-effects-element-type-background),
body.elementor-page-7907>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #000;
}

@media (max-width: 767px) {

    html,
    body {
        max-width: 100%;
        overflow-y: hidden !important;
    }

    .elementor-7907 .elementor-element.elementor-element-77167f8 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        margin: 40px;
        margin-top: 30px;
        margin-bottom: 0px;
        padding: 100px 0px 100px 0px;
    }

    .elementor-7907 .elementor-element.elementor-element-34ee8e2 .elementor-heading-title {
        text-align: center;
        /* padding-top: 7px; */
        color: #A5A5A5;
        font-family: "Helvetica", Sans-serif;
        font-size: 12px;
        font-weight: 600;
    }
}

@media(max-width:1280px) {
    .elementor-7907 .elementor-element.elementor-element-77167f8 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        /* margin-top: 30px; */
        margin-bottom: 0px;
        padding: 35px 0px 100px 0px;
    }
}
</style>