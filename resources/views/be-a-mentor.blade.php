<!DOCTYPE html>
<html lang="en">
@php header('Access-Control-Allow-Origin: *'); @endphp

@include('partials.script')
@include('partials.header')
<title>Become a Mentor| Ignite Business Growth Today - wiseAdvizor</title>
<meta name="description"
    content="Be a mentor on wiseAdvizor, help entrepreneurs on their business growth. Share your expertise, guide them in crafting their startup stories.">
<meta name="keywords" content="business growth, startup stories, Become a Mentor">
<meta name="description"
        content="wiseAdvizor: Your startup mentorship platform. Get personalized 1:1 guidance from experienced mentors. Elevate your entrepreneurial journey.">
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
    <meta name="twitter:url" content="https://wiseadvizor.com">
    <meta name="twitter:image"
        url="https://wiseadvizor.com/wp-content/uploads/2023/07/Book-11-call-with-world-top-mentors-on-wiseadvizor.com.webp">
    <meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="https://wiseadvizor.com/be-a-mentor">

<body
    class="page-template page-template-elementor_canvas page page-id-11 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-11">
    @include('partials.header-common')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row mt-5">
                <div class="col-12 col-lg-10 m-auto">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h1 class="text-white text-capitalize ps-3">Empower Startups : Become a Mentor on
                                    wiseAdvizor</h1>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row" id="row">
                                <form method="POST" action="{{ route('addMentorRequest') }}" autocomplete="off">
                                    @csrf
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">First Name</label>
                                        <input type="text" name="firstname"
                                            class="form-control @error('firstname') is-invalid @enderror"
                                            autocomplete="off" required>

                                        @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Last Name</label>
                                        <input type="text" name="lastname"
                                            class="form-control @error('lastname') is-invalid @enderror"
                                            autocomplete="off" required>

                                        @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Email</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" autocomplete="off"
                                            required>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <!-- <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Phone</label>
                                        <input type="tel" name="phone" class="form-control" >
                                    </div> -->
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">Linked-In Profile</label>
                                        <input type="url" class="form-control @error('linked_in') is-invalid @enderror"
                                            name="linked_in" autocomplete="off" required>

                                        @error('linked_in')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-3">
                                        <label class="">What is your education background ?</label>
                                        <input type="text" name="qualification"
                                            class="form-control @error('qualification') is-invalid @enderror" required>
                                        @error('qualification')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="input-group input-group-static mb-4">
                                        <label class="">What is your professional
                                            status
                                            ?</label>
                                        <select class="form-control @error('designation') is-invalid @enderror"
                                            id="exampleFormControlSelect1" name="designation">
                                            <option value="business_owner">Business Owner</option>
                                            <option value="startup_owner">Startup Owner</option>
                                            <option value="freelancer">Freelancer</option>
                                            <option value="employee">Employee</option>
                                            <option value="board_member">Board Member</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="">
                                        <label>Have you any experience in working as a mentor/advisor
                                            to a start-up ?</label>
                                        <!-- <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Option one is this and that&mdash;be sure to include why it's great
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div> -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="experience"
                                                id="flexRadioDefault1" value="yes" required>
                                            <!-- <label class="custom-control-label" for="customRadio1">Yes</label> -->
                                            <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="experience"
                                                id="flexRadioDefault2" value="no">
                                            <label class="form-check-label" for="flexRadioDefault2">No</label>
                                            <!-- <label class="custom-control-label" for="customRadio2">No</label> -->
                                        </div>
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label class="">How many 30 minutes session you can conduct weekly
                                            ?</label>
                                        <input type="number" class="form-control" name="weekly_session" required>
                                    </div>
                                    <div class="">
                                        <label for="exampleFormControlSelect1" class="ms-0">Are you looking to charge
                                            for your sessions ?</label>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="is_charged" id="charge"
                                                value="yes" required>
                                            <label class="custom-control-label" for="customRadio1">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_charged"
                                                id="customRadio2" value="no">
                                            <label class="custom-control-label" for="customRadio2">No</label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-static mb-3 price" id="price">
                                        <label class="">How much are you looking to charge per session ? (In
                                            USD)</label>
                                        <input type="number" class="form-control" name="price_per_session"
                                            id="price_per_session">
                                    </div>
                                    <div class="">
                                        <label class="">What are your areas of expertise ? (Type and Press
                                            Enter)</label>
                                        <input name="expertise[]" class="form-control" id="expertise-tags"
                                            data-color="dark" type="text" required>
                                    </div>
                                    <button class="btn btn-primary" type="submit" name="submitform"
                                        id="submitform">Submit</button>

                                    <!-- <button type="submit" name="submitform" id="submitform" class="btn btn-primary"><i
                                            class="fa-solid mx-1 fa-floppy-disk"></i>{{ __('Save') }}</button> -->
                                </form>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </main> -->
        </div>
        <script type="text/javascript">
        if (document.getElementById('choices-button')) {
            var element = document.getElementById('choices-button');
            const example = new Choices(element, {});
        }
        var choicesTags = document.getElementById('expertise-tags');
        var color = choicesTags.dataset.color;
        if (choicesTags) {
            const example = new Choices(choicesTags, {
                delimiter: ',',
                editItems: true,
                maxItemCount: 5,
                removeItemButton: true,
                addItems: true,
                classNames: {
                    item: 'badge rounded-pill choices-' + color + ' me-2'
                }
            });
        }
        </script>
        <!--   Core JS Files   -->
        <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
            <div class="footer-width-fixer">
                <div data-elementor-type="wp-post" data-elementor-id="32" class="elementor elementor-32">
                    <footer
                        class="elementor-section elementor-top-section elementor-element elementor-element-60f0ea5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
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
                                            <style>
                                            /*! elementor-pro - v3.5.0 - 01-11-2021 */
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
                                            </style>
                                            <form class="elementor-form" method="post" name="Subscribe Form"
                                                action="{{ route('subscribe') }}">
                                                @csrf
                                                <input type="hidden" name="post_id" value="32">
                                                <input type="hidden" name="form_id" value="dd4d324">
                                                <input type="hidden" name="referer_title" value="Home">

                                                <input type="hidden" name="queried_id" value="8">

                                                <div class="elementor-form-fields-wrapper elementor-labels-above">
                                                    <div
                                                        class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-20 elementor-field-required elementor-mark-required">
                                                        <label for="form-field-email" class="elementor-field-label">
                                                            Subscribe to news updates </label>
                                                        <input size="1" type="email" name="email" id="form-field-email"
                                                            class="elementor-field elementor-size-md  elementor-field-textual"
                                                            placeholder="Your email address" required="required"
                                                            aria-required="true">
                                                    </div>
                                                    <div
                                                        class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-20 e-form__buttons">
                                                        <button type="submit"
                                                            class="elementor-button elementor-size-sm">
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
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-13e9ca2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="13e9ca2" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-c9b61e2"
                                                data-id="c9b61e2" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-b84e421 elementor-widget elementor-widget-heading"
                                                        data-id="b84e421" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                            /*! elementor - v3.14.0 - 26-06-2023 */
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
                                                            <p class="elementor-heading-title elementor-size-default">
                                                                <a href="https://wiseadvizor.com/how-it-works"> How it
                                                                    Works</a>
                                                            </p>
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
                                                                    href="https://wiseadvizor.com/privacy-policy">Privacy
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
                                                                    href="https://wiseadvizor.com/terms-conditions">Terms
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
                                                                    href="https://wiseadvizor.com/community-guidelines">Community
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
                                                                    href="https://wiseadvizor.com/about-us/">About
                                                                    Us</a>
                                                            </p>
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
                                                                    href="https://wiseadvizor.com/contact-us/">Contact
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
                                                                    href="https://wiseadvizor.com/faq/">FAQs</a></p>
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
                                                                    href="{{ route('browseMentor') }}">Browse
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
                                                <a href="https://wiseadvizor.com/">
                                                    <span>Copyright © <script>
                                                        document.write(new Date().getFullYear())
                                                        </script>, wiseAdvizor | Powered by IVY Investment
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
                                            /*! elementor - v3.14.0 - 26-06-2023 */
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
                                                width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))
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
    </main>
    </div>

    <style id="skip-link-styles">
    .skip-link.screen-reader-text {
        border: 0;
        clip: rect(1px, 1px, 1px, 1px);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute !important;
        width: 1px;
        word-wrap: normal !important;
    }

    .skip-link.screen-reader-text:focus {
        background-color: #eee;
        clip: auto !important;
        clip-path: none;
        color: #444;
        display: block;
        font-size: 1em;
        height: auto;
        left: 5px;
        line-height: normal;
        padding: 15px 23px 14px;
        text-decoration: none;
        top: 5px;
        width: auto;
        z-index: 100000;
    }
    </style>
    <script>
    (function() {
        var skipLinkTarget = document.querySelector('main'),
            sibling,
            skipLinkTargetID,
            skipLink;

        // Early exit if a skip-link target can't be located.
        if (!skipLinkTarget) {
            return;
        }

        // Get the site wrapper.
        // The skip-link will be injected in the beginning of it.
        sibling = document.querySelector('.wp-site-blocks');

        // Early exit if the root element was not found.
        if (!sibling) {
            return;
        }

        // Get the skip-link target's ID, and generate one if it doesn't exist.
        skipLinkTargetID = skipLinkTarget.id;
        if (!skipLinkTargetID) {
            skipLinkTargetID = 'wp--skip-link--target';
            skipLinkTarget.id = skipLinkTargetID;
        }

        // Create the skip link.
        skipLink = document.createElement('a');
        skipLink.classList.add('skip-link', 'screen-reader-text');
        skipLink.href = '#' + skipLinkTargetID;
        skipLink.innerHTML = 'Skip to content';

        // Inject the skip link.
        sibling.parentElement.insertBefore(skipLink, sibling);
    }());
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js">
    </script>
    <!-- <script src="https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/js/owl.carousel.min.js?ver=1.0"
        id="niso-carousel-owl.min-js"></script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/js/jquery.mousewheel.min.js?ver=1.0"
        id="jquery.mousewheel.min-js"></script>
    <script src="https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/js/nivo-lightbox.min.js?ver=1.0"
        id="niso-carousel-lightbox.min-js"></script>
     <script id="qi-addons-for-elementor-script-js-extra">
    var qodefQiAddonsGlobal = {
        "vars": {
            "adminBarHeight": 0,
            "iconArrowLeft": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>",
            "iconArrowRight": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>",
            "iconClose": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"
        }
    };
    </script> -->
    <!-- <script src="https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=6.2.2"
        id="qi-addons-for-elementor-script-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.2" id="jquery-ui-mouse-js">
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/ui/slider.min.js?ver=1.13.2" id="jquery-ui-slider-js">
    </script>
    <script src="https://wiseadvizor.com/wp-content/uploads/theplus-addons/theplus.min.js?ver=1688994499"
        id="theplus-front-js-js" defer></script> -->
    <script src="https://wiseadvizor.com/wp-content/plugins/header-footer-elementor/inc/js/frontend.js?ver=1.6.14"
        id="hfe-frontend-js-js"></script>
    <!-- <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.14.1"
        id="elementor-webpack-runtime-js"></script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.14.1"
        id="elementor-frontend-modules-js"></script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
        id="elementor-waypoints-js"></script> -->
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
        "version": "3.14.1",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "a11y_improvements": true,
            "additional_custom_breakpoints": true,
            "e_swiper_latest": true,
            "theme_builder_v2": true,
            "landing-pages": true,
            "form-submissions": true,
            "e_scroll_snap": true
        },
        "urls": {
            "assets": "https:\/\/wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
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
            "id": 4301,
            "title": "Be%20a%20Mentor%20%E2%80%93%20WISE%20ADVIZOR",
            "excerpt": "",
            "featuredImage": false
        }
    };
    </script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.14.1"
        id="elementor-frontend-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2"
        id="wp-polyfill-inert-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11"
        id="regenerator-runtime-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js">
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5" id="wp-hooks-js">
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae" id="wp-i18n-js">
    </script>
    <script id="wp-i18n-js-after">
    wp.i18n.setLocaleData({
        'text directionltr': ['ltr']
    });
    </script>
    <!-- <script
        src="https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js?ver=6.2.2"
        id="qi-addons-for-elementor-elementor-js"></script> -->
    <!-- <script
        src="https://wiseadvizor.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.5.0"
        id="elementor-pro-webpack-runtime-js"></script> -->
    <script id="elementor-pro-frontend-js-before">
    var ElementorProFrontendConfig = {
        "ajaxurl": "https:\/\/wiseadvizor.com\/wp-admin\/admin-ajax.php",
        "nonce": "b803da9bff",
        "urls": {
            "assets": "https:\/\/wiseadvizor.com\/wp-content\/plugins\/elementor-pro\/assets\/",
            "rest": "https:\/\/wiseadvizor.com\/wp-json\/"
        },
        "i18n": {
            "toc_no_headings_found": "No headings were found on this page."
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
            "defaultAnimationUrl": "https:\/\/wiseadvizor.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
        }
    };
    </script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.5.0"
        id="elementor-pro-frontend-js"></script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.5.0"
        id="pro-elements-handlers-js"></script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.5.0"
        id="e-sticky-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
    <script id="wp-util-js-extra">
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp-admin\/admin-ajax.php"
        }
    };
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/wp-util.min.js?ver=6.2.2" id="wp-util-js"></script>
    <script id="wpforms-elementor-js-extra">
    var wpformsElementorVars = {
        "captcha_provider": "recaptcha",
        "recaptcha_type": "v2"
    };
    </script>
    <!-- <script
        src="https://wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.8.2.2"
        id="wpforms-elementor-js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="{{ asset('public/assets/js/plugins/choices.min.js') }}"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js">
    </script> -->
    <!-- <script src="{{ asset('public/assets/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/assets/js/ct-navbar.js') }}"></script> -->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/65046147b1aaa13b7a770b04/1hacho0lm';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>

    <script type="text/javascript">
    $(document).ready(function() {

        $('#price').hide();

        // $('input[name="is_charged"]').change(function() {
        //     if ($(this).attr('id') == 'charge') {
        //         $('#price').show();
        //     } else {
        //         $('#price').hide();
        //     }
        // });

        $('input[name="is_charged"]').change(function() {
            if ($(this).attr('id') == 'charge') {
                $('#price').show();
            } else {
                $('#price').hide();
            }

            if ($(this).val() == 'yes') {
                $('#price_per_session').prop('required', true);
            } else {
                $('#price_per_session').prop('required', false);
            }
        });
    });
    </script>
    <script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"

    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
    </script>
    <!--End of Tawk.to Script-->
</body>
<style>
/* .browseMentor {
    padding-right: 20px;
} */

i.fas.fa-bell.fa-2xl {
    font-size: 32px !important;
}

.professional {
    padding-left: 15px;
}

.session {
    padding-left: 5px;
}

h1 {
    font-size: 17px !important;
    text-align: center;
}

@media(max-width:480px) {

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-ancestor a.hfe-menu-item {
        color: white !important;
    }

    h1 {
        font-size: 17px !important;
        text-align: center;
    }
}

@media (min-width: 768px) and (max-width: 1024px) {
    /* header*/

    h1 {
        font-size: 17px !important;
        text-align: center;
    }

    .elementor-3007 .elementor-element.elementor-element-4bc8cfa>.elementor-widget-container {
        padding: 25px 10px 0px 0px;
        margin-left: -60px;
    }

    .wp-image-624 {
        width: 100%;
        height: 15.02%;
        max-width: 150px !important;
    }

    /* .elementor-5225 .elementor-element.elementor-element-13dfc598 .elementor-heading-title {
        font-size: 40px;
        padding-left: 20px;
    } */

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

</html>