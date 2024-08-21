<!doctype html>
<html lang="en-US">
@include('partials.web-header-new')

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name='robots' content='max-image-preview:large' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css"> -->
    <link rel='stylesheet' id='elementor-preview-8222-css'
        href='https://web.wiseadvizor.com/wp-content/uploads/elementor/css/post-8108.css?ver=1723472779' media='all' />
</head>

<body
    class="page-template page-template-elementor_header_footer page page-id-8108  wp-embed-responsive ehf-footer ehf-template-twentytwentyone ehf-stylesheet-twentytwentyone qodef-qi--no-touch qi-addons-for-elementor-1.7.1 is-light-theme no-js singular elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-8108">
    @include('partials.header-common')
    <div data-elementor-type="wp-page" data-elementor-id="8108" class="elementor elementor-8108">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-658d30a elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="658d30a" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="row">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-06004d0"
                        data-id="06004d0" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <form method="POST" action="{{ route('user.save') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="row_id" value="{{ $data->id ? : '' }}">
                                <div class="elementor-element elementor-element-7259f9a elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                    data-id="7259f9a" data-element_type="widget" data-widget_type="icon-box.default">
                                    <div class="elementor-widget-container">
                                        <link rel="stylesheet"
                                            href="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">
                                        <div class="elementor-icon-box-wrapper">
                                            <div class="elementor-icon-box-icon">
                                                <span class="elementor-icon elementor-animation-">
                                                    @if ($data->metaData && $data->metaData->profile_pic)
                                                    <img src="{{ asset('public/assets/img') }}/{{ $data->metaData->profile_pic }}"
                                                        height="50px;" width="50px;">
                                                    @else
                                                    <img src="{{ asset('public/assets/img/blank-profile-picture.webp') }}"
                                                        height="50px;" width="50px;">
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="elementor-icon-box-content">
                                                <h5 class="elementor-icon-box-title">
                                                    <span>
                                                        {{ $data->name }} </span>
                                                </h5>
                                                <p class="elementor-icon-box-description">
                                                    <input type="file" id="validationCustom09" name="profile_pic"
                                                        class="form-control photo"
                                                        value="{{ $data->metaData ? $data->metaData->profile_pic : '' }}"
                                                        @php if($data->metaData && $data->metaData->profile_pic)
                                                    {
                                                    $validation = '';
                                                    }
                                                    else {
                                                    $validation = 'required';
                                                    }
                                                    echo $validation;
                                                    @endphp
                                                    >
                                                    <!-- <label for="validationCustom09" style="color:#007bff;">Change profile picture</label> -->
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-elementq elementor-element-80e2a2d elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                    data-id="80e2a2d" data-element_type="widget" data-widget_type="icon-box.default"
                                    style="margin-bottom:10px;">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-icon-box-wrapper">

                                            <div class="elementor-icon-box-icon">
                                                <span class="elementor-icon elementor-animation-">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="50"
                                                        viewBox="0 0 37.5 37.499999" height="50"
                                                        preserveAspectRatio="xMidYMid meet">
                                                        <defs>
                                                            <clipPath id="addb6b8f11">
                                                                <path
                                                                    d="M 0 0 L 37.007812 0 L 37.007812 37.007812 L 0 37.007812 Z M 0 0 "
                                                                    clip-rule="nonzero"></path>
                                                            </clipPath>
                                                            <clipPath id="5da7e175bc">
                                                                <path
                                                                    d="M 6.34375 2.371094 L 30.765625 2.371094 L 30.765625 33.457031 L 6.34375 33.457031 Z M 6.34375 2.371094 "
                                                                    clip-rule="nonzero"></path>
                                                            </clipPath>
                                                        </defs>
                                                        <g clip-path="url(#addb6b8f11)">
                                                            <path fill="#ffffff"
                                                                d="M 0 0 L 37.007812 0 L 37.007812 37.007812 L 0 37.007812 Z M 0 0 "
                                                                fill-opacity="1" fill-rule="nonzero"></path>
                                                            <path fill="#ffffff"
                                                                d="M 0 0 L 37.007812 0 L 37.007812 37.007812 L 0 37.007812 Z M 0 0 "
                                                                fill-opacity="1" fill-rule="nonzero"></path>
                                                        </g>
                                                        <g clip-path="url(#5da7e175bc)">
                                                            <path fill="#000000"
                                                                d="M 27.425781 13.472656 L 27.425781 11.253906 C 27.425781 10.667969 27.371094 10.09375 27.257812 9.519531 C 27.144531 8.949219 26.976562 8.390625 26.75 7.855469 C 26.527344 7.316406 26.253906 6.804688 25.933594 6.316406 C 25.609375 5.832031 25.242188 5.382812 24.828125 4.972656 C 24.417969 4.558594 23.96875 4.191406 23.484375 3.867188 C 23 3.542969 22.488281 3.269531 21.949219 3.046875 C 21.410156 2.824219 20.855469 2.65625 20.285156 2.542969 C 19.714844 2.429688 19.136719 2.371094 18.554688 2.371094 C 17.972656 2.371094 17.394531 2.429688 16.824219 2.542969 C 16.25 2.65625 15.695312 2.824219 15.160156 3.046875 C 14.621094 3.269531 14.109375 3.542969 13.625 3.867188 C 13.140625 4.191406 12.691406 4.558594 12.28125 4.972656 C 11.867188 5.382812 11.5 5.832031 11.175781 6.316406 C 10.851562 6.804688 10.578125 7.316406 10.355469 7.855469 C 10.132812 8.390625 9.964844 8.949219 9.851562 9.519531 C 9.738281 10.09375 9.679688 10.667969 9.679688 11.253906 L 9.679688 13.472656 C 9.238281 13.472656 8.816406 13.558594 8.40625 13.726562 C 8 13.894531 7.640625 14.136719 7.328125 14.449219 C 7.015625 14.761719 6.777344 15.121094 6.605469 15.527344 C 6.4375 15.9375 6.355469 16.363281 6.355469 16.804688 L 6.355469 30.125 C 6.355469 30.566406 6.4375 30.992188 6.605469 31.402344 C 6.777344 31.808594 7.015625 32.167969 7.328125 32.480469 C 7.640625 32.792969 8 33.035156 8.40625 33.203125 C 8.816406 33.371094 9.238281 33.457031 9.679688 33.457031 L 27.425781 33.457031 C 27.867188 33.457031 28.292969 33.371094 28.699219 33.203125 C 29.109375 33.035156 29.46875 32.792969 29.78125 32.480469 C 30.09375 32.167969 30.332031 31.808594 30.5 31.402344 C 30.671875 30.992188 30.753906 30.566406 30.753906 30.125 L 30.753906 16.804688 C 30.753906 16.363281 30.671875 15.9375 30.5 15.527344 C 30.332031 15.121094 30.09375 14.761719 29.78125 14.449219 C 29.46875 14.136719 29.109375 13.894531 28.699219 13.726562 C 28.292969 13.558594 27.867188 13.472656 27.425781 13.472656 Z M 11.898438 11.253906 C 11.898438 10.816406 11.941406 10.382812 12.027344 9.953125 C 12.113281 9.523438 12.238281 9.109375 12.40625 8.703125 C 12.574219 8.300781 12.777344 7.914062 13.019531 7.550781 C 13.261719 7.1875 13.539062 6.851562 13.847656 6.542969 C 14.15625 6.234375 14.492188 5.957031 14.855469 5.714844 C 15.21875 5.472656 15.605469 5.265625 16.007812 5.097656 C 16.410156 4.929688 16.828125 4.804688 17.257812 4.71875 C 17.683594 4.632812 18.117188 4.589844 18.554688 4.589844 C 18.992188 4.589844 19.425781 4.632812 19.851562 4.71875 C 20.28125 4.804688 20.695312 4.929688 21.101562 5.097656 C 21.503906 5.265625 21.886719 5.472656 22.25 5.714844 C 22.613281 5.957031 22.949219 6.234375 23.261719 6.542969 C 23.570312 6.851562 23.84375 7.1875 24.085938 7.550781 C 24.332031 7.914062 24.535156 8.300781 24.703125 8.703125 C 24.871094 9.109375 24.996094 9.523438 25.082031 9.953125 C 25.167969 10.382812 25.210938 10.816406 25.210938 11.253906 L 25.210938 13.472656 L 11.898438 13.472656 Z M 19.664062 24.265625 L 19.664062 25.683594 C 19.664062 25.832031 19.636719 25.972656 19.578125 26.109375 C 19.523438 26.246094 19.441406 26.367188 19.339844 26.46875 C 19.234375 26.574219 19.113281 26.65625 18.980469 26.710938 C 18.84375 26.765625 18.703125 26.796875 18.554688 26.796875 C 18.40625 26.796875 18.265625 26.765625 18.128906 26.710938 C 17.992188 26.65625 17.875 26.574219 17.769531 26.46875 C 17.664062 26.367188 17.585938 26.246094 17.53125 26.109375 C 17.472656 25.972656 17.445312 25.832031 17.445312 25.683594 L 17.445312 24.265625 C 17.160156 24.101562 16.925781 23.886719 16.738281 23.617188 C 16.550781 23.347656 16.425781 23.054688 16.371094 22.730469 C 16.3125 22.40625 16.328125 22.085938 16.410156 21.769531 C 16.496094 21.453125 16.644531 21.167969 16.855469 20.917969 C 17.066406 20.664062 17.320312 20.472656 17.617188 20.332031 C 17.914062 20.195312 18.226562 20.125 18.554688 20.125 C 18.882812 20.125 19.195312 20.195312 19.492188 20.332031 C 19.789062 20.472656 20.042969 20.664062 20.253906 20.917969 C 20.464844 21.167969 20.613281 21.453125 20.695312 21.769531 C 20.78125 22.085938 20.796875 22.40625 20.738281 22.730469 C 20.683594 23.054688 20.558594 23.347656 20.371094 23.617188 C 20.183594 23.886719 19.945312 24.101562 19.664062 24.265625 Z M 19.664062 24.265625 "
                                                                fill-opacity="1" fill-rule="nonzero"></path>
                                                        </g>
                                                    </svg> </span>
                                            </div>

                                            <div class="elementor-icon-box-content">

                                                <h3 class="elementor-icon-box-title">
                                                    <span>
                                                        Change Password </span>
                                                </h3>

                                                <p class="elementor-icon-box-description"><a
                                                        href="{{ route('user.change-password') }}">
                                                        Update your profile password </a></p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-d356614 elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                    data-id="d356614" data-element_type="widget" data-widget_type="icon-box.default"
                                    style="margin-bottom:10px;">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-icon-box-wrapper">

                                            <div class="elementor-icon-box-icon">
                                                <span class="elementor-icon elementor-animation-">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="50"
                                                        viewBox="0 0 37.5 37.499999" height="50"
                                                        preserveAspectRatio="xMidYMid meet">
                                                        <defs>
                                                            <clipPath id="bb6e29e739">
                                                                <path
                                                                    d="M 0 0 L 37.007812 0 L 37.007812 37.007812 L 0 37.007812 Z M 0 0 "
                                                                    clip-rule="nonzero"></path>
                                                            </clipPath>
                                                            <clipPath id="850706a105">
                                                                <path
                                                                    d="M 3.699219 3.699219 L 33.304688 3.699219 L 33.304688 33.304688 L 3.699219 33.304688 Z M 3.699219 3.699219 "
                                                                    clip-rule="nonzero"></path>
                                                            </clipPath>
                                                        </defs>
                                                        <g clip-path="url(#bb6e29e739)">
                                                            <path fill="#ffffff"
                                                                d="M 0 0 L 37.007812 0 L 37.007812 37.007812 L 0 37.007812 Z M 0 0 "
                                                                fill-opacity="1" fill-rule="nonzero"></path>
                                                            <path fill="#ffffff"
                                                                d="M 0 0 L 37.007812 0 L 37.007812 37.007812 L 0 37.007812 Z M 0 0 "
                                                                fill-opacity="1" fill-rule="nonzero"></path>
                                                        </g>
                                                        <g clip-path="url(#850706a105)">
                                                            <path fill="#000000"
                                                                d="M 18.503906 3.699219 C 10.328125 3.699219 3.699219 10.328125 3.699219 18.503906 C 3.699219 26.679688 10.328125 33.304688 18.503906 33.304688 C 26.679688 33.304688 33.304688 26.679688 33.304688 18.503906 C 33.304688 10.328125 26.679688 3.699219 18.503906 3.699219 Z M 22.332031 24.425781 L 17.457031 19.550781 C 17.179688 19.273438 17.023438 18.894531 17.023438 18.503906 L 17.023438 11.101562 C 17.023438 10.285156 17.6875 9.621094 18.503906 9.621094 C 19.320312 9.621094 19.984375 10.285156 19.984375 11.101562 L 19.984375 17.890625 L 24.425781 22.332031 C 25 22.910156 25 23.847656 24.425781 24.425781 C 23.847656 25 22.910156 25 22.332031 24.425781 Z M 22.332031 24.425781 "
                                                                fill-opacity="1" fill-rule="nonzero"></path>
                                                        </g>
                                                    </svg> </span>
                                            </div>

                                            <div class="elementor-icon-box-content">

                                                <h3 class="elementor-icon-box-title">
                                                    <span>
                                                        {{ $total_learning }} minutes </span>
                                                </h3>

                                                <p class="elementor-icon-box-description">
                                                    Total learning time </p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-a80d77a elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                    data-id="a80d77a" data-element_type="widget" data-widget_type="icon-box.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-icon-box-wrapper">
                                            <div class="elementor-icon-box-icon">
                                                <span class="elementor-icon elementor-animation-">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="50"
                                                        viewBox="0 0 37.5 37.499999" height="50"
                                                        preserveAspectRatio="xMidYMid meet">
                                                        <defs>
                                                            <clipPath id="0dcf49beb4">
                                                                <path
                                                                    d="M 0 0 L 37.007812 0 L 37.007812 37.007812 L 0 37.007812 Z M 0 0 "
                                                                    clip-rule="nonzero"></path>
                                                            </clipPath>
                                                            <clipPath id="f4c37cafdc">
                                                                <path
                                                                    d="M 12 27 L 25 27 L 25 32.085938 L 12 32.085938 Z M 12 27 "
                                                                    clip-rule="nonzero"></path>
                                                            </clipPath>
                                                            <clipPath id="c8116aec6a">
                                                                <path
                                                                    d="M 4.699219 9 L 32.085938 9 L 32.085938 28 L 4.699219 28 Z M 4.699219 9 "
                                                                    clip-rule="nonzero"></path>
                                                            </clipPath>
                                                            <clipPath id="b6b71015d3">
                                                                <path
                                                                    d="M 18 4.699219 L 32.085938 4.699219 L 32.085938 18 L 18 18 Z M 18 4.699219 "
                                                                    clip-rule="nonzero"></path>
                                                            </clipPath>
                                                        </defs>
                                                        <g clip-path="url(#0dcf49beb4)">
                                                            <path fill="#ffffff"
                                                                d="M 0 0 L 37.007812 0 L 37.007812 37.007812 L 0 37.007812 Z M 0 0 "
                                                                fill-opacity="1" fill-rule="nonzero"></path>
                                                            <path fill="#ffffff"
                                                                d="M 0 0 L 37.007812 0 L 37.007812 37.007812 L 0 37.007812 Z M 0 0 "
                                                                fill-opacity="1" fill-rule="nonzero"></path>
                                                        </g>
                                                        <g clip-path="url(#f4c37cafdc)">
                                                            <path fill="#000000"
                                                                d="M 22.957031 29.800781 L 20.675781 29.800781 L 20.675781 27.519531 L 16.109375 27.519531 L 16.109375 29.800781 L 13.828125 29.800781 C 13.199219 29.800781 12.6875 30.3125 12.6875 30.945312 C 12.6875 31.574219 13.199219 32.085938 13.828125 32.085938 L 22.957031 32.085938 C 23.585938 32.085938 24.097656 31.574219 24.097656 30.945312 C 24.097656 30.3125 23.585938 29.800781 22.957031 29.800781 Z M 22.957031 29.800781 "
                                                                fill-opacity="1" fill-rule="nonzero"></path>
                                                        </g>
                                                        <g clip-path="url(#c8116aec6a)">
                                                            <path fill="#000000"
                                                                d="M 30.085938 15.539062 L 29.800781 15.539062 L 29.800781 25.238281 L 6.980469 25.238281 L 6.980469 11.546875 L 16.679688 11.546875 L 16.679688 9.265625 L 6.695312 9.265625 C 5.601562 9.265625 4.699219 10.164062 4.699219 11.261719 L 4.699219 25.523438 C 4.699219 26.617188 5.601562 27.519531 6.695312 27.519531 L 30.085938 27.519531 C 31.183594 27.519531 32.085938 26.617188 32.085938 25.523438 L 32.085938 14.957031 C 31.503906 15.324219 30.816406 15.539062 30.085938 15.539062 Z M 30.085938 15.539062 "
                                                                fill-opacity="1" fill-rule="nonzero"></path>
                                                        </g>
                                                        <path fill="#000000"
                                                            d="M 19.535156 18.390625 C 19.535156 19.652344 18.511719 20.675781 17.25 20.675781 C 15.992188 20.675781 14.96875 19.652344 14.96875 18.390625 C 14.96875 17.132812 15.992188 16.109375 17.25 16.109375 C 18.511719 16.109375 19.535156 17.132812 19.535156 18.390625 Z M 19.535156 18.390625 "
                                                            fill-opacity="1" fill-rule="nonzero"></path>
                                                        <path fill="#000000"
                                                            d="M 21.816406 24.953125 L 21.816406 25.238281 L 12.6875 25.238281 L 12.6875 24.953125 C 12.6875 23.21875 14.089844 21.816406 15.824219 21.816406 L 18.675781 21.816406 C 20.410156 21.816406 21.816406 23.21875 21.816406 24.953125 Z M 21.816406 24.953125 "
                                                            fill-opacity="1" fill-rule="nonzero"></path>
                                                        <g clip-path="url(#b6b71015d3)">
                                                            <path fill="#000000"
                                                                d="M 30.085938 4.699219 L 20.390625 4.699219 C 19.289062 4.699219 18.390625 5.59375 18.390625 6.695312 L 18.390625 11.832031 C 18.390625 12.933594 19.289062 13.828125 20.390625 13.828125 L 21.816406 13.828125 L 21.816406 16.394531 C 21.816406 16.75 22.03125 17.066406 22.359375 17.191406 C 22.460938 17.230469 22.566406 17.25 22.671875 17.25 C 22.90625 17.25 23.136719 17.152344 23.300781 16.972656 L 26.1875 13.828125 L 30.085938 13.828125 C 31.1875 13.828125 32.085938 12.933594 32.085938 11.832031 L 32.085938 6.695312 C 32.085938 5.59375 31.1875 4.699219 30.085938 4.699219 Z M 22.386719 10.121094 C 21.914062 10.121094 21.53125 9.738281 21.53125 9.265625 C 21.53125 8.792969 21.914062 8.410156 22.386719 8.410156 C 22.859375 8.410156 23.242188 8.792969 23.242188 9.265625 C 23.242188 9.738281 22.859375 10.121094 22.386719 10.121094 Z M 25.238281 10.121094 C 24.765625 10.121094 24.382812 9.738281 24.382812 9.265625 C 24.382812 8.792969 24.765625 8.410156 25.238281 8.410156 C 25.710938 8.410156 26.09375 8.792969 26.09375 9.265625 C 26.09375 9.738281 25.710938 10.121094 25.238281 10.121094 Z M 28.089844 10.121094 C 27.617188 10.121094 27.234375 9.738281 27.234375 9.265625 C 27.234375 8.792969 27.617188 8.410156 28.089844 8.410156 C 28.5625 8.410156 28.945312 8.792969 28.945312 9.265625 C 28.945312 9.738281 28.5625 10.121094 28.089844 10.121094 Z M 28.089844 10.121094 "
                                                                fill-opacity="1" fill-rule="nonzero"></path>
                                                        </g>
                                                    </svg> </span>
                                            </div>

                                            <div class="elementor-icon-box-content">

                                                <h3 class="elementor-icon-box-title">
                                                    <span>
                                                        {{ $completed_sessions }} sessions </span>
                                                </h3>

                                                <p class="elementor-icon-box-description">
                                                    Completed sessions </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8b1b580"
                        data-id="8b1b580" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <input type="hidden" name="row_id" value="{{ $data->id ? : '' }}">
                            <div class="form-group row mb-3">
                                <label for="validationCustom01" class="form-label">Full Name </label>
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" id="validationCustom01"
                                        value="{{ $data->name ? : '' }}" required>
                                </div>
                                <div class="invalid-feedback">
                                    Please Enter your Name.
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom02" class="form-label">Email </label>
                                <input type="email" name="email" class="form-control" id="validationCustom02"
                                    value="{{ $data->email ? : '' }}" required>
                                <div class="invalid-feedback">
                                    Please Enter your Email.
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom03" class="form-label">Company Name</label>
                                <input type="text" name="company_name" class="form-control" id="validationCustom03"
                                    value="{{ $data->metaData->company ? $data->metaData->company : '' }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom04" class="form-label">Designation</label>
                                <input type="text" name="designation" class="form-control" id="validationCustom04"
                                    value="{{ $data->metaData->designation ? $data->metaData->designation : '' }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom05" class="form-label">Linked-In Url</label>
                                <input type="url" name="linked_in" class="form-control" id="validationCustom05"
                                    value="{{ $data->metaData ? $data->metaData->social_linked_in : '' }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom07" class="form-label">Expertise</label>
                                <select class="selectpicker form-control" multiple data-live-search="true"
                                    data-width="100%" id="validationCustom07" name="expert[]" required>
                                    <option value="">Choose Your Expertise</option>
                                    @php
                                    $expt = $data->metaData ? json_decode($data->metaData->expertise) : '';
                                    @endphp
                                    @if(!empty($expt))
                                    @foreach($expt as $exp)
                                    @foreach($expertise as $key => $expert)
                                    <option value="{{ $expert }}" {{ $expert == $exp ? 'selected' : '' }}>
                                        {{ $expert }}
                                    </option>
                                    @endforeach
                                    @endforeach
                                    @else
                                    @foreach($expertise as $key => $expert)
                                    <option value="{{ $expert }}">
                                        {{ $expert }}
                                    </option>
                                    @endforeach
                                    @endif
                                </select>
                                <div class="invalid-feedback">
                                    Please choose Expertise.
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom06" class="form-label">Timezone</label>
                                <select class="selectpicker form-control" data-live-search="true" data-width="100%"
                                    id="validationCustom06" name="timezone" required>
                                    <option value="">Choose Your Timezone</option>
                                    @foreach($timezone as $zone => $time)
                                    <option value="{{ $zone }}"
                                        {{ $zone == $data->metaData->timezone  ? 'selected' : '' }}>
                                        {{ $zone }}
                                    </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please choose a Timezone.
                                </div>
                            </div>
                            <button type="submit" name="submitform" id="submitform" class="btn btn-primary"><i
                                    class="fa-solid mx-1 fa-floppy-disk"></i>{{ __('Save') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('partials.web-script')
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
    </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script> -->
    <script type="text/javascript">
    $('select').selectpicker();
    </script>
</body>
<style>
body,
html {
    overflow-x: hidden;
    max-width: 100%;
}

label {
    color: #fff !important;
}

img {
    margin-bottom: 15px;
}

.elementor-elementq .elementor-element-80e2a2d .elementor-position-left .elementor-view-default .elementor-mobile-position-top .elementor-vertical-align-top .elementor-widget .elementor-widget-icon-box {
    margin-left: 10px !important;
}

.elementor-8108 .elementor-element.elementor-element-658d30a:not(.elementor-motion-effects-element-type-background),
.elementor-8108 .elementor-element.elementor-element-658d30a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #000000;
    padding-right: 20px;
    padding-left: 85px;
    padding-top: 50px;
    padding-bottom: 50px;
}

.form-control {
    color: #fff !important;
    background-color: #000 !important;
}

.bootstrap-select>.dropdown-toggle.bs-placeholder,
.bootstrap-select>.dropdown-toggle.bs-placeholder:hover,
.bootstrap-select>.dropdown-toggle.bs-placeholder:focus,
.bootstrap-select>.dropdown-toggle.bs-placeholder:active {
    color: #fff;
    background-color: #000;
}

/* .dropdown-item {
    display: block;
    width: 100%;
    padding: .25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #fff;
    text-align: inherit;
    white-space: nowrap;
    background-color: #000;
    border: 0;
} */

.btn-light {
    color: #fff;
    background-color: #000;
    border-color: #f8f9fa;
}

/* .dropdown-menu {
    z-index: 1000;
    float: left;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #000;
    text-align: left;
    list-style: none;
    background-color: #000;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .15);
    border-radius: .25rem;
} */

.elementor-8108 .elementor-element.elementor-element-8b1b580>.elementor-element-populated {
    border-style: solid;
    border-width: 2px 2px 2px 2px;
    border-color: #4A4A4A;
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding: 25px 35px 25px 35px;
    border-radius: 15px;
}

.photo {
    border: none;
    color: #fff !important;
    padding: 0rem 0rem;
    font-size: 12px;
    background-color: #000 !important;
}

.elementor-8108 .elementor-element.elementor-element-7259f9a .elementor-icon-box-title,
.elementor-8108 .elementor-element.elementor-element-7259f9a .elementor-icon-box-title a {
    font-family: "Helvetica", Sans-serif;
    font-weight: 400;
    font-size: 18px;
    color: #fff;
}

.elementor-column.elementor-col-50.elementor-top-column.elementor-element.elementor-element-06004d0 {
    width: 25% !important;
}

.elementor-column.elementor-col-50.elementor-top-column.elementor-element.elementor-element-8b1b580 {
    width: 70% !important;
}

h3 {
    font-size: 16px;
    color: #fff;
}

.elementor-widget-icon-box .elementor-icon-box-description {
    margin: 0;
    color: #7A7A7A;
    font-size: 14px;
}


/***  header ***/


i.fas.fa-chevron-down {
    margin-top: -15px !important;
    padding-left: 10px !important;
    font-size: 9px !important;
    font-family: "Font Awesome 5 Free" !important;
    font-weight: 900 !important;
}

i.fas.fa-bell.fa-2xl {
    font-size: 32px !important;
    color: #000;
}

.elementor-3007 .elementor-element.elementor-element-9adafe6:not(.elementor-motion-effects-element-type-background),
.elementor-3007 .elementor-element.elementor-element-9adafe6>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #FFFFFF;
    /* margin-top: -35px; */
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
    /* font-size: 15px; */
    /* padding: 12px 24px; */
    /* border-radius: 3px; */
    /* color: #fff; */
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

@media (max-width: 767px) {

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
        background-color: #fff;
        color: #001E64;
    }

    .elementor-32 .elementor-element.elementor-element-540d2d1>.elementor-widget-container {
        padding: 0px 20px 10px 100px;
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
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
        background-color: #fff;
        color: #001E64 !important;
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

</html>