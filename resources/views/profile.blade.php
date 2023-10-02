<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Profile &#8211; wiseAdvizor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
    var theplus_ajax_url = "{{ asset('public/wp-admin/admin-ajax.php') }}";
    var theplus_ajax_post_url = "{{ asset('public/wp-admin/admin-post.php') }}";
    var theplus_nonce = "cbe4e9be63";
    </script>
    <meta name="robots" content="max-image-preview:large">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="alternate" type="application/rss+xml" title="wiseAdvizor &raquo; Feed"
        href="{{ asset('public/feed/') }}">
    <link rel="alternate" type="application/rss+xml" title="wiseAdvizor &raquo; Comments Feed"
        href="{{ asset('public/comments/feed/') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/PNG-Blue.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <!-- <link href="asset('public/assets/css/pe-icon-7-stroke.css')" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/ct-navbar.css') }}" rel="stylesheet" /> -->
    <style>
    /*! elementor - v3.14.0 - 26-06-2023 */
    .elementor-widget-progress {
        text-align: left;
    }

    .elementor-progress-wrapper {
        position: relative;
        background-color: #eee;
        color: #fff;
        height: 100%;
        border-radius: 2px
    }

    .elementor-progress-bar {
        display: flex;
        background-color: #69727d;
        width: 0;
        font-size: 11px;
        height: 30px;
        line-height: 30px;
        border-radius: 2px;
        transition: width 1s ease-in-out
    }

    .elementor-progress-text {
        flex-grow: 1;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        padding-left: 15px
    }

    .elementor-progress-percentage {
        padding-right: 15px
    }

    .elementor-widget-progress .elementor-progress-wrapper.progress-info .elementor-progress-bar {
        background-color: #5bc0de
    }

    .elementor-widget-progress .elementor-progress-wrapper.progress-success .elementor-progress-bar {
        background-color: #5cb85c
    }

    .elementor-widget-progress .elementor-progress-wrapper.progress-warning .elementor-progress-bar {
        background-color: #f0ad4e
    }

    .elementor-widget-progress .elementor-progress-wrapper.progress-danger .elementor-progress-bar {
        background-color: #d9534f
    }

    .elementor-progress .elementor-title {
        display: block
    }

    @media (max-width:767px) {
        .elementor-progress-text {
            padding-left: 10px
        }
    }

    .e-con-inner .elementor-progress-wrapper,
    .e-con .elementor-progress-wrapper {
        height: auto
    }
    </style>
    <!-- Hotjar Tracking Code for https://wiseadvizor.com -->
    <script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 3668045,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <script>
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/wiseadvizor.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2.2"
        }
    };
    /*! This file is auto-generated */
    ! function(e, a, t) {
        var n, r, o, i = a.createElement("canvas"),
            p = i.getContext && i.getContext("2d");

        function s(e, t) {
            p.clearRect(0, 0, i.width, i.height), p.fillText(e, 0, 0);
            e = i.toDataURL();
            return p.clearRect(0, 0, i.width, i.height), p.fillText(t, 0, 0), e === i.toDataURL()
        }

        function c(e) {
            var t = a.createElement("script");
            t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
        }
        for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
            if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                case "flag":
                    return s("🏳️‍⚧️", "🏳️​⚧️") ? !1 : !s("🇺🇳", "🇺​🇳") && !s("🏴󠁧󠁢󠁥󠁮󠁧󠁿",
                        "🏴​󠁧​󠁢​󠁥​󠁮​󠁧​󠁿");
                case "emoji":
                    return !s("🫱🏻‍🫲🏿", "🫱🏻​🫲🏿")
            }
            return !1
        }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
            .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
        t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
            .readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e
                .wpemoji)))
    }(window, document, window._wpemojiSettings);
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1HZW2R3J0M"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-1HZW2R3J0M');
    </script>
    <style>
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <style id="wp-block-library-inline-css">
    :root {
        --wp-admin-theme-color: #007cba;
        --wp-admin-theme-color--rgb: 0, 124, 186;
        --wp-admin-theme-color-darker-10: #006ba1;
        --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
        --wp-admin-theme-color-darker-20: #005a87;
        --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
        --wp-admin-border-width-focus: 2px;
        --wp-block-synced-color: #7a00df;
        --wp-block-synced-color--rgb: 122, 0, 223
    }

    @media (-webkit-min-device-pixel-ratio:2),
    (min-resolution:192dpi) {
        :root {
            --wp-admin-border-width-focus: 1.5px
        }
    }

    .wp-element-button {
        cursor: pointer
    }

    :root {
        --wp--preset--font-size--normal: 16px;
        --wp--preset--font-size--huge: 42px
    }

    :root .has-very-light-gray-background-color {
        background-color: #eee
    }

    :root .has-very-dark-gray-background-color {
        background-color: #313131
    }

    :root .has-very-light-gray-color {
        color: #eee
    }

    :root .has-very-dark-gray-color {
        color: #313131
    }

    :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
        background: linear-gradient(135deg, #00d084, #0693e3)
    }

    :root .has-purple-crush-gradient-background {
        background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
    }

    :root .has-hazy-dawn-gradient-background {
        background: linear-gradient(135deg, #faaca8, #dad0ec)
    }

    :root .has-subdued-olive-gradient-background {
        background: linear-gradient(135deg, #fafae1, #67a671)
    }

    :root .has-atomic-cream-gradient-background {
        background: linear-gradient(135deg, #fdd79a, #004a59)
    }

    :root .has-nightshade-gradient-background {
        background: linear-gradient(135deg, #330968, #31cdcf)
    }

    :root .has-midnight-gradient-background {
        background: linear-gradient(135deg, #020381, #2874fc)
    }

    .has-regular-font-size {
        font-size: 1em
    }

    .has-larger-font-size {
        font-size: 2.625em
    }

    .has-normal-font-size {
        font-size: var(--wp--preset--font-size--normal)
    }

    .has-huge-font-size {
        font-size: var(--wp--preset--font-size--huge)
    }

    .has-text-align-center {
        text-align: center
    }

    .has-text-align-left {
        text-align: left
    }

    .has-text-align-right {
        text-align: right
    }

    #end-resizable-editor-section {
        display: none
    }

    .aligncenter {
        clear: both
    }

    .items-justified-left {
        justify-content: flex-start
    }

    .items-justified-center {
        justify-content: center
    }

    .items-justified-right {
        justify-content: flex-end
    }

    .items-justified-space-between {
        justify-content: space-between
    }

    .screen-reader-text {
        clip: rect(1px, 1px, 1px, 1px);
        word-wrap: normal !important;
        border: 0;
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px
    }

    .screen-reader-text:focus {
        clip: auto !important;
        background-color: #ddd;
        -webkit-clip-path: none;
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
        z-index: 100000
    }

    html :where(.has-border-color) {
        border-style: solid
    }

    html :where([style*=border-top-color]) {
        border-top-style: solid
    }

    html :where([style*=border-right-color]) {
        border-right-style: solid
    }

    html :where([style*=border-bottom-color]) {
        border-bottom-style: solid
    }

    html :where([style*=border-left-color]) {
        border-left-style: solid
    }

    html :where([style*=border-width]) {
        border-style: solid
    }

    html :where([style*=border-top-width]) {
        border-top-style: solid
    }

    html :where([style*=border-right-width]) {
        border-right-style: solid
    }

    html :where([style*=border-bottom-width]) {
        border-bottom-style: solid
    }

    html :where([style*=border-left-width]) {
        border-left-style: solid
    }

    html :where(img[class*=wp-image-]) {
        height: auto;
        max-width: 100%
    }

    figure {
        margin: 0 0 1em
    }

    html :where(.is-position-sticky) {
        --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height, 0px)
    }

    /* ul {
        list-style-type: none;
        margin: 0;
        padding: 0;

    }

    .pe-7s-user {
        margin-right: 20px;
        align: center;
    }

.elementor-button-wrapper .browse {
        margin-left: 20px;
    */

    /* .menuITem {
        margin-left: 30px;
    }

    .name {
        font-size: 13px;
        line-height: 0em;
        margin-right: 20px;
    }



    .menu {
        font-size: 12px;
        text-align: center;
    } */
    *
    /* / .elementor-button-wrapper .browse {
        margin-left: 20px;
    } */

    @media screen and (max-width:600px) {
        html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset: 0px
        }
    }
    </style>
    <link rel="preload"
        href="{{ asset('public/wp-content/plugins/the-plus-addons-for-block-editor/assets/css/extra/fontawesome.min.css?ver=6.2.2') }}"
        as="style" id="tpgb-fontawesome" media="all" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" id="tpgb-fontawesome-css"
            href="{{ asset('public/wp-content/plugins/the-plus-addons-for-block-editor/assets/css/extra/fontawesome.min.css?ver=6.2.2') }}"
            media="all">
    </noscript>
    <link rel="stylesheet" id="tpgb-gfonts-global-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A700%2C500%2C400&#038;subset=latin&#038;display=swap&#038;ver=3.0.2"
        media="all">
    <link rel="stylesheet" id="plus-global-css"
        href="{{ asset('public/wp-content/uploads/theplus_gutenberg/plus-global.css?ver=1687510205') }}" media="all">
    <style id="global-styles-inline-css">
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--color--foreground: #000000;
        --wp--preset--color--background: #ffffff;
        --wp--preset--color--primary: #1a4548;
        --wp--preset--color--secondary: #ffe2c7;
        --wp--preset--color--tertiary: #F6F6F6;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--gradient--vertical-secondary-to-tertiary: linear-gradient(to bottom, var(--wp--preset--color--secondary) 0%, var(--wp--preset--color--tertiary) 100%);
        --wp--preset--gradient--vertical-secondary-to-background: linear-gradient(to bottom, var(--wp--preset--color--secondary) 0%, var(--wp--preset--color--background) 100%);
        --wp--preset--gradient--vertical-tertiary-to-background: linear-gradient(to bottom, var(--wp--preset--color--tertiary) 0%, var(--wp--preset--color--background) 100%);
        --wp--preset--gradient--diagonal-primary-to-foreground: linear-gradient(to bottom right, var(--wp--preset--color--primary) 0%, var(--wp--preset--color--foreground) 100%);
        --wp--preset--gradient--diagonal-secondary-to-background: linear-gradient(to bottom right, var(--wp--preset--color--secondary) 50%, var(--wp--preset--color--background) 50%);
        --wp--preset--gradient--diagonal-background-to-secondary: linear-gradient(to bottom right, var(--wp--preset--color--background) 50%, var(--wp--preset--color--secondary) 50%);
        --wp--preset--gradient--diagonal-tertiary-to-background: linear-gradient(to bottom right, var(--wp--preset--color--tertiary) 50%, var(--wp--preset--color--background) 50%);
        --wp--preset--gradient--diagonal-background-to-tertiary: linear-gradient(to bottom right, var(--wp--preset--color--background) 50%, var(--wp--preset--color--tertiary) 50%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--duotone--foreground-and-background: url('#wp-duotone-foreground-and-background');
        --wp--preset--duotone--foreground-and-secondary: url('#wp-duotone-foreground-and-secondary');
        --wp--preset--duotone--foreground-and-tertiary: url('#wp-duotone-foreground-and-tertiary');
        --wp--preset--duotone--primary-and-background: url('#wp-duotone-primary-and-background');
        --wp--preset--duotone--primary-and-secondary: url('#wp-duotone-primary-and-secondary');
        --wp--preset--duotone--primary-and-tertiary: url('#wp-duotone-primary-and-tertiary');
        --wp--preset--font-size--small: 1rem;
        --wp--preset--font-size--medium: 1.125rem;
        --wp--preset--font-size--large: 1.75rem;
        --wp--preset--font-size--x-large: clamp(1.75rem, 3vw, 2.25rem);
        --wp--preset--font-family--system-font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        --wp--preset--font-family--source-serif-pro: "Source Serif Pro", serif;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        --wp--custom--spacing--small: max(1.25rem, 5vw);
        --wp--custom--spacing--medium: clamp(2rem, 8vw, calc(4 * var(--wp--style--block-gap)));
        --wp--custom--spacing--large: clamp(4rem, 10vw, 8rem);
        --wp--custom--spacing--outer: var(--wp--custom--spacing--small, 1.25rem);
        --wp--custom--typography--font-size--huge: clamp(2.25rem, 4vw, 2.75rem);
        --wp--custom--typography--font-size--gigantic: clamp(2.75rem, 6vw, 3.25rem);
        --wp--custom--typography--font-size--colossal: clamp(3.25rem, 8vw, 6.25rem);
        --wp--custom--typography--line-height--tiny: 1.15;
        --wp--custom--typography--line-height--small: 1.2;
        --wp--custom--typography--line-height--medium: 1.4;
        --wp--custom--typography--line-height--normal: 1.6;
    }

    body {
        margin: 0;
        --wp--style--global--content-size: 650px;
        --wp--style--global--wide-size: 1000px;
    }

    .wp-site-blocks>.alignleft {
        float: left;
        margin-right: 2em;
    }

    .wp-site-blocks>.alignright {
        float: right;
        margin-left: 2em;
    }

    .wp-site-blocks>.aligncenter {
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
    }

    .wp-site-blocks>* {
        margin-block-start: 0;
        margin-block-end: 0;
    }

    .wp-site-blocks>*+* {
        margin-block-start: 1.5rem;
    }

    body {
        --wp--style--block-gap: 1.5rem;
    }

    body .is-layout-flow>* {
        margin-block-start: 0;
        margin-block-end: 0;
    }

    body .is-layout-flow>*+* {
        margin-block-start: 1.5rem;
        margin-block-end: 0;
    }

    body .is-layout-constrained>* {
        margin-block-start: 0;
        margin-block-end: 0;
    }

    body .is-layout-constrained>*+* {
        margin-block-start: 1.5rem;
        margin-block-end: 0;
    }

    body .is-layout-flex {
        gap: 1.5rem;
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    body {
        background-color: var(--wp--preset--color--background);
        color: var(--wp--preset--color--foreground);
        font-family: var(--wp--preset--font-family--system-font);
        font-size: var(--wp--preset--font-size--medium);
        line-height: var(--wp--custom--typography--line-height--normal);
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }

    a:where(:not(.wp-element-button)) {
        color: var(--wp--preset--color--foreground);
        text-decoration: underline;
    }

    h1 {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--custom--typography--font-size--colossal);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--tiny);
    }

    h2 {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--custom--typography--font-size--gigantic);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--small);
    }

    h3 {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--custom--typography--font-size--huge);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--tiny);
    }

    h4 {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--preset--font-size--x-large);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--tiny);
    }

    h5 {
        font-family: var(--wp--preset--font-family--system-font);
        font-size: var(--wp--preset--font-size--medium);
        font-weight: 700;
        line-height: var(--wp--custom--typography--line-height--normal);
        text-transform: uppercase;
    }

    h6 {
        font-family: var(--wp--preset--font-family--system-font);
        font-size: var(--wp--preset--font-size--medium);
        font-weight: 400;
        line-height: var(--wp--custom--typography--line-height--normal);
        text-transform: uppercase;
    }

    .wp-element-button,
    .wp-block-button__link {
        background-color: #32373c;
        border-width: 0;
        color: #fff;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        padding: calc(0.667em + 2px) calc(1.333em + 2px);
        text-decoration: none;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-foreground-color {
        color: var(--wp--preset--color--foreground) !important;
    }

    .has-background-color {
        color: var(--wp--preset--color--background) !important;
    }

    .has-primary-color {
        color: var(--wp--preset--color--primary) !important;
    }

    .has-secondary-color {
        color: var(--wp--preset--color--secondary) !important;
    }

    .has-tertiary-color {
        color: var(--wp--preset--color--tertiary) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-foreground-background-color {
        background-color: var(--wp--preset--color--foreground) !important;
    }

    .has-background-background-color {
        background-color: var(--wp--preset--color--background) !important;
    }

    .has-primary-background-color {
        background-color: var(--wp--preset--color--primary) !important;
    }

    .has-secondary-background-color {
        background-color: var(--wp--preset--color--secondary) !important;
    }

    .has-tertiary-background-color {
        background-color: var(--wp--preset--color--tertiary) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-foreground-border-color {
        border-color: var(--wp--preset--color--foreground) !important;
    }

    .has-background-border-color {
        border-color: var(--wp--preset--color--background) !important;
    }

    .has-primary-border-color {
        border-color: var(--wp--preset--color--primary) !important;
    }

    .has-secondary-border-color {
        border-color: var(--wp--preset--color--secondary) !important;
    }

    .has-tertiary-border-color {
        border-color: var(--wp--preset--color--tertiary) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-vertical-secondary-to-tertiary-gradient-background {
        background: var(--wp--preset--gradient--vertical-secondary-to-tertiary) !important;
    }

    .has-vertical-secondary-to-background-gradient-background {
        background: var(--wp--preset--gradient--vertical-secondary-to-background) !important;
    }

    .has-vertical-tertiary-to-background-gradient-background {
        background: var(--wp--preset--gradient--vertical-tertiary-to-background) !important;
    }

    .has-diagonal-primary-to-foreground-gradient-background {
        background: var(--wp--preset--gradient--diagonal-primary-to-foreground) !important;
    }

    .has-diagonal-secondary-to-background-gradient-background {
        background: var(--wp--preset--gradient--diagonal-secondary-to-background) !important;
    }

    .has-diagonal-background-to-secondary-gradient-background {
        background: var(--wp--preset--gradient--diagonal-background-to-secondary) !important;
    }

    .has-diagonal-tertiary-to-background-gradient-background {
        background: var(--wp--preset--gradient--diagonal-tertiary-to-background) !important;
    }

    .has-diagonal-background-to-tertiary-gradient-background {
        background: var(--wp--preset--gradient--diagonal-background-to-tertiary) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .has-system-font-font-family {
        font-family: var(--wp--preset--font-family--system-font) !important;
    }

    .has-source-serif-pro-font-family {
        font-family: var(--wp--preset--font-family--source-serif-pro) !important;
    }
    </style>
    <link rel="stylesheet" id="niso-carousel-fontello-css"
        href="{{ asset('public/wp-content/plugins/niso-carousel-slider/assets/css/fontello.css?ver=1.0') }}"
        media="all">
    <link rel="stylesheet" id="niso-carousel-owl-css"
        href="{{ asset('public/wp-content/plugins/niso-carousel-slider/assets/css/owl.carousel.css?ver=1.0') }}"
        media="all">
    <link rel="stylesheet" id="niso-theme-default-css"
        href="{{ asset('public/wp-content/plugins/niso-carousel-slider/assets/css/themes/niso.theme.default.css?ver=1.0') }}"
        media="all">
    <link rel="stylesheet" id="niso-animate-css"
        href="{{ asset('public/wp-content/plugins/niso-carousel-slider/assets/css/animate.css?ver=1.3.18') }}"
        media="all">
    <link rel="stylesheet" id="niso-carousel-css"
        href="{{ asset('public/wp-content/plugins/niso-carousel-slider/assets/css/niso-carousel.css?ver=1.3.18') }}"
        media="all">
    <link rel="stylesheet" id="niso-carousel-lightbox-css"
        href="{{ asset('public/wp-content/plugins/niso-carousel-slider/assets/css/nivo-lightbox.css?ver=1.0') }}"
        media="all">
    <link rel="stylesheet" id="niso-carousel-lightbox-theme-css"
        href="{{ asset('public/wp-content/plugins/niso-carousel-slider/assets/css/themes/default.css?ver=1.0') }}"
        media="all">
    <style id="wp-webfonts-inline-css">
    @font-face {
        font-family: "Source Serif Pro";
        font-style: normal;
        font-weight: 200 900;
        font-display: fallback;
        src: url('{{ asset('public/wp-content/themes/twentytwentytwo/assets/fonts/source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2') }}') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        font-family: "Source Serif Pro";
        font-style: italic;
        font-weight: 200 900;
        font-display: fallback;
        src: url('{{ asset('public/wp-content/themes/twentytwentytwo/assets/fonts/source-serif-pro/SourceSerif4Variable-Italic.ttf.woff2') }}') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        src: url('{{ asset('public/assets/fonts/Pe-icon-7-stroke.svg') }}') format('svg');
        font-stretch: normal;
    }

    @font-face {
        src: url('{{ asset('public/assets/fonts/Pe-icon7-stroke.eot') }}') format('eot');
        font-stretch: normal;
    }

    @font-face {
        src: url('{{ asset('public/assets/fonts/Pe-icon-7-stroke.ttf') }}') format('ttf');
        font-stretch: normal;
    }

    @font-face {
        src: url('{{ asset('public/assets/fonts/Pe-icon-7-stroke.woff') }}') format('woff');
        font-stretch: normal;
    }
    </style>
    <link rel="stylesheet" id="hfe-style-css"
        href="{{ asset('public/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.14') }}"
        media="all">
    <link rel="stylesheet" id="elementor-icons-css"
        href="{{ asset('public/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.20.0') }}"
        media="all">
    <link rel="stylesheet" id="elementor-frontend-css"
        href="{{ asset('public/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.14.1') }}"
        media="all">
    <link rel="stylesheet" id="swiper-css"
        href="{{ asset('public/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5') }}"
        media="all">
    <link rel="stylesheet" id="elementor-post-5-css"
        href="{{ asset('public/wp-content/uploads/elementor/css/post-5.css?ver=1688377903') }}" media="all">
    <link rel="stylesheet" id="elementor-pro-css"
        href="{{ asset('public/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.5.0') }}"
        media="all">
    <link rel="stylesheet" id="font-awesome-5-all-css"
        href="{{ asset('public/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.14.1') }}"
        media="all">
    <link rel="stylesheet" id="font-awesome-4-shim-css"
        href="{{ asset('public/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.14.1') }}"
        media="all">
    <link rel="stylesheet" id="she-header-style-css"
        href="{{ asset('public/wp-content/plugins/sticky-header-effects-for-elementor/assets/css/she-header-style.css?ver=1.6.5') }}"
        media="all">
    <link rel="stylesheet" id="elementor-global-css"
        href="{{ asset('public/wp-content/uploads/elementor/css/global.css?ver=1688377904') }}" media="all">
    <link rel="stylesheet" id="hfe-widgets-style-css"
        href="{{ asset('public/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.14') }}"
        media="all">
    <link rel="stylesheet" id="elementor-post-2372-css"
        href="{{ asset('public/wp-content/uploads/elementor/css/post-2372.css?ver=1689690069') }}" media="all">
    <link rel="stylesheet" id="elementor-post-3007-css"
        href="{{ asset('public/wp-content/uploads/elementor/css/post-3007.css?ver=1688644136') }}" media="all">
    <link rel="stylesheet" id="elementor-post-32-css"
        href="{{ asset('public/wp-content/uploads/elementor/css/post-32.css?ver=1688661608') }}" media="all">
    <link rel="stylesheet" id="qi-addons-for-elementor-grid-style-css"
        href="{{ asset('public/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=6.2.2') }}"
        media="all">
    <link rel="stylesheet" id="qi-addons-for-elementor-helper-parts-style-css"
        href="{{ asset('public/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=6.2.2') }}"
        media="all">
    <link rel="stylesheet" id="qi-addons-for-elementor-style-css"
        href="{{ asset('public/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=6.2.2') }}"
        media="all">
    <link rel="stylesheet" id="theplus-front-css-css"
        href="{{ asset('public/wp-content/uploads/theplus-addons/theplus.min.css?ver=1689690069') }}" media="all">
    <link rel="stylesheet" id="twentytwentytwo-style-css"
        href="{{ asset('public/wp-content/themes/twentytwentytwo/style.css?ver=1.4') }}" media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CSail%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.2.2"
        media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css"
        href="{{ asset('public/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3') }}"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-regular-css"
        href="{{ asset('public/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3') }}"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css"
        href="{{ asset('public/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3') }}"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css"
        href="{{ asset('public/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3') }}"
        media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script id="jquery-core-js-extra">
    var tpgb_load = {
        "ajaxUrl": "https:\/\/wiseadvizor.com\/wp-admin\/admin-ajax.php"
    };
    var smoothAllowedBrowsers = [];
    </script>
    <script src="{{ asset('public/wp-includes/js/jquery/jquery.min.js?ver=3.6.4') }}" id="jquery-core-js">
    </script>
    <script src="{{ asset('public/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0') }}" id="jquery-migrate-js">
    </script>
    <script
        src="{{ asset('public/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.14.1') }}"
        id="font-awesome-4-shim-js"></script>
    <script
        src="{{ asset('public/wp-content/plugins/sticky-header-effects-for-elementor/assets/js/she-header.js?ver=1.6.5') }}"
        id="she-header-js"></script>
    <link rel="https://api.w.org/" href="{{ asset('public/wp-json/') }}">
    <link rel="alternate" type="application/json" href="{{ asset('public/wp-json/wp/v2/pages/2372') }}">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ asset('public/xmlrpc.php?rsd') }}">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{ asset('public/wp-includes/wlwmanifest.xml') }}">
    <meta name="generator" content="WordPress 6.2.2">
    <link rel="canonical" href="{{ route('profile') }}">
    <link rel="shortlink" href="{{ asset('public/?p=2372') }}">
    <link rel="alternate" type="application/json+oembed"
        href="{{ asset('public/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2Fprofile%2F') }}">
    <link rel="alternate" type="text/xml+oembed"
        href="{{ asset('public/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2Fprofile%2F#038;format=xml') }}">
    <meta name="generator"
        content="Elementor 3.14.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style type="text/css">
    #niso-carousel-952.niso-carousel .niso-post-item .post-img img {
        height: 350px;
    }

    #niso-carousel-952.niso-carousel {
        margin: 10px 0px;
    }

    #niso-carousel-952.niso-theme .owl-nav {
        margin: 0px 0px 0px 0px;
    }

    #niso-carousel-952.owl-theme .owl-dots {
        text-align: center;
    }

    #niso-carousel-952.owl-theme .owl-nav [class*="owl-"] i {
        color: #ffffff;
    }

    #niso-carousel-952.owl-theme .owl-nav [class*="owl-"] i:hover {
        color: #cccccc;
    }

    #niso-carousel-952.owl-theme .owl-nav [class*="owl-"] i:after {
        background-color: #111111;
        opacity: 0.80;
        filter: alpha(opacity=80);
    }

    #niso-carousel-952.owl-theme .owl-nav [class*="owl-"] i:hover:after {
        background-color: #555555;
    }

    html body .animated {
        -webkit-animation-duration: 500000 ms;
        animation-duration: 500000 ms;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    </style>
    <style id="wpforms-css-vars-root">
    :root {
        --wpforms-field-border-radius: 3px;
        --wpforms-field-background-color: #ffffff;
        --wpforms-field-border-color: rgba(0, 0, 0, 0.25);
        --wpforms-field-text-color: rgba(0, 0, 0, 0.7);
        --wpforms-label-color: rgba(0, 0, 0, 0.85);
        --wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
        --wpforms-label-error-color: #d63637;
        --wpforms-button-border-radius: 3px;
        --wpforms-button-background-color: #066aab;
        --wpforms-button-text-color: #ffffff;
        --wpforms-field-size-input-height: 43px;
        --wpforms-field-size-input-spacing: 15px;
        --wpforms-field-size-font-size: 16px;
        --wpforms-field-size-line-height: 19px;
        --wpforms-field-size-padding-h: 14px;
        --wpforms-field-size-checkbox-size: 16px;
        --wpforms-field-size-sublabel-spacing: 5px;
        --wpforms-field-size-icon-size: 1;
        --wpforms-label-size-font-size: 16px;
        --wpforms-label-size-line-height: 19px;
        --wpforms-label-size-sublabel-font-size: 14px;
        --wpforms-label-size-sublabel-line-height: 17px;
        --wpforms-button-size-font-size: 17px;
        --wpforms-button-size-height: 41px;
        --wpforms-button-size-padding-h: 15px;
        --wpforms-button-size-margin-top: 10px;

    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
</head>

<body
    class="page-template page-template-elementor_canvas page page-id-2372 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-2372">
    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0 0.49803921568627"></fefuncr>
                    <fefuncg type="table" tablevalues="0 0.49803921568627"></fefuncg>
                    <fefuncb type="table" tablevalues="0 0.49803921568627"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0 1"></fefuncr>
                    <fefuncg type="table" tablevalues="0 1"></fefuncg>
                    <fefuncb type="table" tablevalues="0 1"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0.54901960784314 0.98823529411765"></fefuncr>
                    <fefuncg type="table" tablevalues="0 1"></fefuncg>
                    <fefuncb type="table" tablevalues="0.71764705882353 0.25490196078431"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0 1"></fefuncr>
                    <fefuncg type="table" tablevalues="0 0.27843137254902"></fefuncg>
                    <fefuncb type="table" tablevalues="0.5921568627451 0.27843137254902"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0 0"></fefuncr>
                    <fefuncg type="table" tablevalues="0 0.64705882352941"></fefuncg>
                    <fefuncb type="table" tablevalues="0 1"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0.78039215686275 1"></fefuncr>
                    <fefuncg type="table" tablevalues="0 0.94901960784314"></fefuncg>
                    <fefuncb type="table" tablevalues="0.35294117647059 0.47058823529412"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0.65098039215686 0.40392156862745"></fefuncr>
                    <fefuncg type="table" tablevalues="0 1"></fefuncg>
                    <fefuncb type="table" tablevalues="0.44705882352941 0.4"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0.098039215686275 1"></fefuncr>
                    <fefuncg type="table" tablevalues="0 0.66274509803922"></fefuncg>
                    <fefuncb type="table" tablevalues="0.84705882352941 0.41960784313725"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-foreground-and-background">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0 1"></fefuncr>
                    <fefuncg type="table" tablevalues="0 1"></fefuncg>
                    <fefuncb type="table" tablevalues="0 1"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-foreground-and-secondary">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0 1"></fefuncr>
                    <fefuncg type="table" tablevalues="0 0.88627450980392"></fefuncg>
                    <fefuncb type="table" tablevalues="0 0.78039215686275"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-foreground-and-tertiary">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0 0.96470588235294"></fefuncr>
                    <fefuncg type="table" tablevalues="0 0.96470588235294"></fefuncg>
                    <fefuncb type="table" tablevalues="0 0.96470588235294"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-primary-and-background">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0.10196078431373 1"></fefuncr>
                    <fefuncg type="table" tablevalues="0.27058823529412 1"></fefuncg>
                    <fefuncb type="table" tablevalues="0.28235294117647 1"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-primary-and-secondary">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0.10196078431373 1"></fefuncr>
                    <fefuncg type="table" tablevalues="0.27058823529412 0.88627450980392"></fefuncg>
                    <fefuncb type="table" tablevalues="0.28235294117647 0.78039215686275"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-primary-and-tertiary">
                <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 ">
                </fecolormatrix>
                <fecomponenttransfer color-interpolation-filters="sRGB">
                    <fefuncr type="table" tablevalues="0.10196078431373 0.96470588235294"></fefuncr>
                    <fefuncg type="table" tablevalues="0.27058823529412 0.96470588235294"></fefuncg>
                    <fefuncb type="table" tablevalues="0.28235294117647 0.96470588235294"></fefuncb>
                    <fefunca type="table" tablevalues="1 1"></fefunca>
                </fecomponenttransfer>
                <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
            </filter>
        </defs>
    </svg>
    <header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
        <p class="main-title bhf-hidden" itemprop="headline"><a href="{{ route('home') }}" title="wiseAdvizor"
                rel="home">wiseAdvizor</a></p>
        <div data-elementor-type="wp-post" data-elementor-id="3007" class="elementor elementor-3007">
            <header
                class="elementor-section elementor-top-section elementor-element elementor-element-cf19fcc elementor-section-full_width elementor-section-content-top elementor-hidden-tablet elementor-hidden-mobile she-header-yes elementor-section-height-default elementor-section-height-default"
                data-id="cf19fcc" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;transparent&quot;:&quot;yes&quot;,&quot;background_show&quot;:&quot;yes&quot;,&quot;background&quot;:&quot;#FFFFFF&quot;,&quot;bottom_border&quot;:&quot;yes&quot;,&quot;custom_bottom_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;20&quot;,&quot;sizes&quot;:[]},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:&quot;0&quot;,&quot;sticky_effects_offset&quot;:&quot;0&quot;,&quot;transparent_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;scroll_distance&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;60&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;custom_bottom_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;custom_bottom_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-31c72d6"
                        data-id="31c72d6" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4a940d6 elementor-widget elementor-widget-image"
                                data-id="4a940d6" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <style>
                                    /*! elementor - v3.14.0 - 26-06-2023 */
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
                                    </style> <a href="{{ route('home') }}">
                                        <img width="932" height="140"
                                            src="{{ asset('public/wp-content/uploads/2023/06/pngLargeC.png') }}"
                                            class="attachment-large size-large wp-image-624" alt=""
                                            srcset="{{ asset('public/wp-content/uploads/2023/06/pngLargeC.png') }} 932w, {{ asset('public/wp-content/uploads/2023/06/pngLargeC-300x45.png') }} 300w, {{ asset('public/wp-content/uploads/2023/06/pngLargeC-768x115.png') }} 768w"
                                            sizes="(max-width: 932px) 100vw, 932px"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-60e4ec3"
                        data-id="60e4ec3" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-359f243 hfe-nav-menu__align-center hfe-submenu-animation-slide_up hfe-link-redirect-self_link hfe-submenu-icon-arrow hfe-nav-menu__breakpoint-tablet elementor-widget elementor-widget-navigation-menu"
                                data-id="359f243" data-element_type="widget"
                                data-settings="{&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;15&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;15&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:&quot;1&quot;},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:&quot;1&quot;},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:&quot;1&quot;},&quot;width_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;220&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;15&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                data-widget_type="navigation-menu.default">
                                <div class="elementor-widget-container">
                                    <div class="hfe-nav-menu hfe-layout-horizontal hfe-nav-menu-layout horizontal hfe-pointer__none"
                                        data-layout="horizontal">
                                        <div role="button" class="hfe-nav-menu__toggle elementor-clickable">
                                            <span class="screen-reader-text">Menu</span>
                                            <div class="hfe-nav-menu-icon">
                                                <i aria-hidden="true" tabindex="0" class="fas fa-align-justify"></i>
                                            </div>
                                        </div>
                                        <nav itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement"
                                            class="hfe-nav-menu__layout-horizontal hfe-nav-menu__submenu-arrow"
                                            data-toggle-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;fas fa-align-justify&quot;&gt;&lt;/i&gt;"
                                            data-close-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;far fa-window-close&quot;&gt;&lt;/i&gt;"
                                            data-full-width="yes">
                                            <ul id="menu-1-359f243" class="hfe-nav-menu">
                                                <li id="menu-item-29" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="{{ route('aboutUs') }}" itemprop="url"
                                                        class="hfe-menu-item">About Us</a>
                                                </li>
                                                <li id="menu-item-28" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="{{ route('contactUs') }}" itemprop="url"
                                                        class="hfe-menu-item">Contact Us</a>
                                                </li>
                                                <li id="menu-item-27" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children parent hfe-has-submenu hfe-creative-menu">
                                                    <div class="hfe-has-submenu-container"><a href="" itemprop="url"
                                                            class="hfe-menu-item">Resource<span
                                                                class="hfe-menu-toggle sub-arrow hfe-menu-child-0"><i
                                                                    class="fa"></i></span></a></div>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-24" itemprop="name"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                            <a href="{{ route('community-posts') }}" itemprop="url"
                                                                class="hfe-sub-menu-item">Community Post</a>
                                                        </li>
                                                        <li id="menu-item-25" itemprop="name"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                            <a href="{{ route('libraries') }}" itemprop="url"
                                                                class="hfe-sub-menu-item">Libraries</a>
                                                        </li>
                                                        <li id="menu-item-26" itemprop="name"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                            <a href="{{ route('faq') }}" itemprop="url"
                                                                class="hfe-sub-menu-item">FAQ</a>
                                                        </li>
                                                        <li id="menu-item-2842" itemprop="name"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2650 current_page_item hfe-creative-menu">
                                                            <a href="{{ route('blogs') }}" itemprop="url"
                                                                class="hfe-sub-menu-item hfe-sub-menu-item-active">BLOGS</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a87489f"
                        data-id="a87489f" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4bc8cfa elementor-align-right elementor-widget__width-auto elementor-widget elementor-widget-button"
                                data-id="4bc8cfa" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                            href="{{ route('browseMentor') }}">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Browse Mentor</span>
                                            </span>
                                        </a>
                                        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
                                        <!-- </nav> -->
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-78270f3 elementor-widget__width-auto elementor-widget elementor-widget-button"
                                data-id="78270f3" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        @if(Auth::id() && auth()->user()->role_id == 3)
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown">
                                                <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#"
                                                    id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fas fa-bell fa-lg"></i>
                                                    <span
                                                        class="badge rounded-pill badge-notification bg-danger">1</span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="navbarDropdownMenuLink">
                                                    <li>
                                                        <a class="dropdown-item" href="#">Some news</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Another news</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle d-flex align-items-center" href="#"
                                                    id="navbarDropdownMenuAvatar" role="button"
                                                    data-mdb-toggle="dropdown" aria-expanded="false">
                                                    @if (Auth::user()->metaData && Auth::user()->metaData->profile_pic)
                                                    <img src="{{ asset('public/assets/img/') }}/{{ Auth::user() ? Auth::user()->metaData->profile_pic : '' }}"
                                                        class="rounded-circle" height="8" width="37"
                                                        alt="Black and White Portrait of a Man" loading="lazy" />
                                                    @else
                                                    <img src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                        class="rounded-circle" height="50px;" width="50px;">
                                                    @endif
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="navbarDropdownMenuAvatar">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('user.dashboard') }}">My
                                                            Dashboard</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('user.profile', [Auth::id()]) }}">My
                                                            Profile</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('user.change-password') }}">Change
                                                            Password</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('user.review') }}">My
                                                            Reviews</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        @else
                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                            href="{{ route('login') }}">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Sign In</span>
                                            </span>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </header>
    </div>
    </header>

    <div data-elementor-type="wp-page" data-elementor-id="2372" class="elementor elementor-2372">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-wza5aou elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="wza5aou" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b1f32fb"
                    data-id="b1f32fb" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-f428972 elementor-widget elementor-widget-heading"
                            data-id="f428972" data-element_type="widget" data-widget_type="heading.default">
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
                                <h1 class="elementor-heading-title elementor-size-default">HI! I AM {{ $data->name }}!
                                    _____</h1>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-0e640ef elementor-widget elementor-widget-text-editor"
                            data-id="0e640ef" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <style>
                                /*! elementor - v3.14.0 - 26-06-2023 */
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

                                .elementor-heading-title .price {
                                    padding-bottom: 30px !important;
                                }
                                </style>
                                <!-- <p>I build brands.</p> -->
                                <p>{{ $data->metaData ? $data->metaData->bio : '' }}</p>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-8d957dd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="8d957dd" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-223593d"
                                    data-id="223593d" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7d4fe70 elementor-mobile-align-center elementor-widget__width-auto elementor-widget elementor-widget-button"
                                            data-id="7d4fe70" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    @if(Auth::id())
                                                    <a href="{{ route('schedule-call', [$data->id]) }}"
                                                        class="elementor-button elementor-button-link elementor-size-sm">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Schedule
                                                                Call</span>
                                                        </span>
                                                    </a>
                                                    @else
                                                    <a href="{{ route('login', ['schedule-call', $data->id]) }}"
                                                        class="elementor-button elementor-button-link elementor-size-sm">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Schedule
                                                                Call</span>
                                                        </span>
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4690d57"
                                    data-id="4690d57" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-48429f9 elementor-widget__width-auto elementor-star-rating--align-center elementor--star-style-star_fontawesome elementor-widget elementor-widget-star-rating"
                                            data-id="48429f9" data-element_type="widget"
                                            data-widget_type="star-rating.default">
                                            <div class="elementor-widget-container">
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
                                                    cursor: default
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
                                                    align-items: center
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
                                                        text-align: left;
                                                        justify-content: flex-start
                                                    }

                                                    .elementor-star-rating-mobile--align-center .elementor-star-rating__wrapper {
                                                        text-align: center;
                                                        justify-content: center
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
                                                    content: "★"
                                                }
                                                </style>
                                                <div class="elementor-star-rating__wrapper">
                                                    <div class="elementor-star-rating" title="5/5"
                                                        itemtype="http://schema.org/Rating" itemscope=""
                                                        itemprop="reviewRating"><i
                                                            class="elementor-star-full">&#xE934;</i><i
                                                            class="elementor-star-full">&#xE934;</i><i
                                                            class="elementor-star-full">&#xE934;</i><i
                                                            class="elementor-star-full">&#xE934;</i><i
                                                            class="elementor-star-full">&#xE934;</i> <span
                                                            itemprop="ratingValue"
                                                            class="elementor-screen-only">5/5</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="elementor-element elementor-element-9d326af elementor-widget elementor-widget-heading"
                            data-id="9d326af" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <span
                                    class="elementor-heading-title elementor-size-default price">{{ $data->metaData ?  $data->metaData->price_per_call : '' }}
                                    $ / 30 Min</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-457d214"
                    data-id="457d214" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5cf1512 elementor-widget elementor-widget-image"
                            data-id="5cf1512" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="500" height="500"
                                    src="{{ asset('wp-content/uploads/2023/07/').'/' }}{{ $data->metaData ? $data->metaData->profile_pic : '' }}"
                                    class="attachment-large size-large wp-image-3756" alt=""
                                    srcset="{{ asset('wp-content/uploads/2023/07/').'/' }}{{ $data->metaData ? $data->metaData->profile_pic : '' }} 500w, {{ asset('wp-content/uploads/2023/07/').'/' }}{{ $data->metaData ? $data->metaData->profile_pic : '' }} 300w, {{ asset('wp-content/uploads/2023/07/').'/' }}{{ $data->metaData ? $data->metaData->profile_pic : '' }} 150w, {{ asset('wp-content/uploads/2023/07/').'/' }}{{ $data->metaData ? $data->metaData->profile_pic : '' }} 450w, {{ asset('wp-content/uploads/2023/07/').'/' }}{{ $data->metaData ? $data->metaData->profile_pic : '' }} 700w, {{ asset('wp-content/uploads/2023/07/').'/' }}{{ $data->metaData ? $data->metaData->profile_pic : '' }} 650w, {{ asset('wp-content/uploads/2023/07/').'/' }}{{ $data->metaData ? $data->metaData->profile_pic : '' }} 1300w"
                                    sizes="(max-width: 500px) 100vw, 500px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-pz2wra7 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
            data-id="pz2wra7" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0103c1e"
                    data-id="0103c1e" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-dcbce22 elementor-widget elementor-widget-heading"
                            data-id="dcbce22" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">About Me
                                </h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-07446d7 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="07446d7" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <style>
                                /*! elementor - v3.14.0 - 26-06-2023 */
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
                                    border-bottom: 0;
                                    flex-grow: 1;
                                    border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
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

                                .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                    border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
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

                                div.elementor-widget-container.date {
                                    margin-bottom: 20px !important;
                                }

                                div.elementor-widget-container.date2 {
                                    margin-bottom: 25px !important;
                                }

                                div.elementor-widget-container.description>ul {
                                    word-spacing: 0.1px !important;
                                    align-items: left !important;
                                }
                                </style>
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-e49cb6c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="e49cb6c" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5f8e7d3"
                                    data-id="5f8e7d3" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <!-- <div class="elementor-element elementor-element-28a7a93 elementor-widget elementor-widget-heading"
                                            data-id="28a7a93" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">
                                                    Developing
                                                    With a Passion While Exploring The World.</h5>
                                            </div>
                                        </div> -->
                                        <!-- <div class="elementor-element elementor-element-b6d042e elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="b6d042e" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="elementor-element elementor-element-6b6a93e elementor-widget elementor-widget-text-editor"
                                            data-id="6b6a93e" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    @php
                                                    $text = str_ireplace("<br />", "\r\n", $data->metaData->about_me);
                                                    echo $text;
                                                    @endphp
                                                    <!-- {{ Illuminate\Support\Str::words($data->metaData->about_me, 20) }} -->
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-297c2fe elementor-widget elementor-widget-text-editor"
                                            data-id="297c2fe" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    @php
                                                    $text = str_ireplace("<br />", "\r\n", $data->metaData->about_me_1);
                                                    echo $text;
                                                    @endphp </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ff6b5f5 elementor-mobile-align-center elementor-hidden-mobile elementor-widget elementor-widget-button"
                                            data-id="ff6b5f5" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    @if(Auth::id())
                                                    <a href="{{ route('schedule-call', [$data->id]) }}"
                                                        class="elementor-button elementor-button-link elementor-size-sm">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Schedule
                                                                Call</span>
                                                        </span>
                                                    </a>
                                                    @else
                                                    <a href="{{ route('login', ['schedule-call', $data->id]) }}"
                                                        class="elementor-button elementor-button-link elementor-size-sm">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Schedule
                                                                Call</span>
                                                        </span>
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-52071b2"
                                    data-id="52071b2" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-6f4f3fe elementor-widget elementor-widget-text-editor"
                                            data-id="6f4f3fe" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    @php
                                                    $text = str_ireplace("<br />", "\r\n", $data->metaData->about_me_2);
                                                    echo $text;
                                                    @endphp
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3c041f0 elementor-widget elementor-widget-text-editor"
                                            data-id="3c041f0" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    @php
                                                    $text = str_ireplace("<br />", "\r\n", $data->metaData->about_me_3);
                                                    echo $text;
                                                    @endphp
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-21a9478"
                                    data-id="21a9478" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-5d4df70 elementor-widget elementor-widget-image"
                                            data-id="5d4df70" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img decoding="async" width="640" height="814"
                                                    src="{{ asset('public/wp-content/uploads/2023/06/section-1-bg1.jpg') }}"
                                                    class="attachment-full size-full wp-image-2413" alt=""
                                                    srcset="{{ asset('public/wp-content/uploads/2023/06/section-1-bg1.jpg') }} 640w, {{ asset('public/wp-content/uploads/2023/06/section-1-bg1-236x300.jpg') }} 236w"
                                                    sizes="(max-width: 640px) 100vw, 640px">
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
            class="elementor-section elementor-top-section elementor-element elementor-element-bce5b88 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="bce5b88" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                @if($achievements->isNotEmpty())
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f36dc21"
                    data-id="f36dc21" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-90a514a elementor-widget elementor-widget-heading"
                            data-id="90a514a" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">
                                    Achievements</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-cab3f6f elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="cab3f6f" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-71f202c elementor-widget elementor-widget-text-editor"
                            data-id="71f202c" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <ul>
                                    @foreach($achievements as $achievement)
                                    <li>{{ $achievement->description }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if(!empty($data->metaData->awards))
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7856893"
                    data-id="7856893" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-a7ec35b elementor-widget elementor-widget-heading"
                            data-id="a7ec35b" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">Awards
                                </h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a7e14d0 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="a7e14d0" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-740e75b elementor-widget elementor-widget-text-editor"
                            data-id="740e75b" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <ul>
                                    @foreach(json_decode($data->metaData->awards) as $awards)
                                    <li>{{ $awards }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-kiw0ep4 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
            data-id="kiw0ep4" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fadab0a"
                    data-id="fadab0a" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-94a07f3 elementor-widget elementor-widget-heading"
                            data-id="94a07f3" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">My
                                    Expertise</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-cdd8d8d elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="cdd8d8d" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- <section data-element_type="section"> -->
                        <!-- <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-a9a790e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="a9a790e" data-element_type="section"> -->
                        <!-- <div class="elementor-container elementor-column-gap-default"> -->
                        <!-- <div class="col-md-4"> -->
                        <!-- <div class="elementor-column elementor-col-75 elementor-inner-column elementor-element elementor-element-1d348a4"
                                    data-id="1d348a4" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"> -->
                        <ul class="list-unstyled">
                            @foreach($expertise as $expert)
                            <li class="media my-4">
                                <!-- <img class="mr-3" src="{{ asset('public/wp-content/uploads/2023/06/computer.png') }}"
                                    alt="Generic placeholder image" height="64" width="64"> -->
                                <div class="media-body">
                                    <h5 class="mt-0  mb-1"> {{ $expert->expertise }}</h5>
                                    <p>{{ $expert->description }}</p>
                                </div>
                            </li>
                            <hr>
                            <!-- <div class="elementor-element elementor-element-cdd8d8d elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                data-id="cdd8d8d" data-element_type="widget" data-widget_type="divider.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-divider">
                                        <span class="elementor-divider-separator">
                                        </span>
                                    </div>
                                </div>
                            </div> -->
                            @endforeach
                        </ul>
                        <!-- <div class="col-md-4">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-527ecfa elementor-widget elementor-widget-image"
                                                data-id="527ecfa" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="256" height="256"
                                                        src="{{ asset('public/wp-content/uploads/2023/06/computer.png') }}"
                                                        class="attachment-large size-large wp-image-2422" alt=""
                                                        srcset="{{ asset('public/wp-content/uploads/2023/06/computer.png') }} 256w, {{ asset('public/wp-content/uploads/2023/06/computer-150x150.png') }} 150w, {{ asset('public/wp-content/uploads/2023/06/computer-450x450.png') }} 450w, {{ asset('public/wp-content/uploads/2023/06/computer-700x700.png') }} 700w, {{ asset('public/wp-content/uploads/2023/06/computer-650x650.png') }} 650w, {{ asset('public/wp-content/uploads/2023/06/computer-1300x1300.png') }} 1300w"
                                                        sizes="(max-width: 256px) 100vw, 256px">
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-632bd01 elementor-widget elementor-widget-heading"
                                                data-id="632bd01" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">
                                                        {{ $expert->expertise }} </h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c6fb8b5 elementor-widget elementor-widget-text-editor"
                                                data-id="c6fb8b5" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>{{ Str::limit($expert->description, 75) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                        <!--  </div> -->
                        <!-- </div> -->
                        <!-- </div> -->
                        <!-- </section> -->
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-7ysff7o elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
            data-id="7ysff7o" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="display:none;">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-828c28c"
                    data-id="828c28c" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-86b94c8 elementor-view-default elementor-widget elementor-widget-icon"
                            data-id="86b94c8" data-element_type="widget" data-widget_type="icon.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-wrapper">
                                    <a class="elementor-icon" href="#">
                                        <i aria-hidden="true" class="far fa-play-circle"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-f14c791 elementor-widget elementor-widget-heading"
                            data-id="f14c791" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Working
                                    Process</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c626176 elementor-widget elementor-widget-text-editor"
                            data-id="c626176" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                tellus,<br> luctus nec
                                ullamcorper mattis, pulvinar dapibus leo.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-8x7dty6 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
            data-id="8x7dty6" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a72efbb"
                    data-id="a72efbb" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-a7cb679 elementor-widget elementor-widget-heading"
                            data-id="a7cb679" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">Work Experience</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-12b61d0 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="12b61d0" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-9905fba elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="9905fba" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-no">
                                @foreach($experience as $exp)
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8a50591"
                                    data-id="8a50591" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-element elementor-element-3f8ebce elementor-widget elementor-widget-heading"
                                            data-id="3f8ebce" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <span class="elementor-heading-title elementor-size-medium">
                                                    {{ $exp->position }}</span>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3af0bab elementor-widget elementor-widget-heading"
                                            data-id="3af0bab" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container date">
                                                <span class="elementor-heading-title elementor-size-default">
                                                    {{ $exp->start_date }} To
                                                    {{ $exp->end_date ? $exp->end_date : 'Present' }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5c6f3ea elementor-widget elementor-widget-text-editor"
                                            data-id="5c6f3ea" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <ul>
                                                    @php
                                                    $text = str_ireplace("<br />", "\r\n", $exp->description);
                                                    echo $text;
                                                    @endphp
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7c40f05 elementor-widget elementor-widget-progress"
                                            data-id="7c40f05" data-element_type="widget"
                                            data-widget_type="progress.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-progress-wrapper" role="progressbar"
                                                    aria-valuemin="0" aria-valuemax="100" aria-valuenow="100"
                                                    aria-valuetext="100% (Mobile Premier League )">
                                                    <div class="elementor-progress-bar" data-max="100">
                                                        <span class="elementor-progress-text">{{ $exp->company_name }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-ed09546 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="ed09546" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                @foreach($last_experience as $last_exp)
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-651f958"
                                    data-id="651f958" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7bebc4a elementor-widget elementor-widget-heading"
                                            data-id="7bebc4a" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <span
                                                    class="elementor-heading-title elementor-size-medium">{{ $last_exp->position }}</span>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-c95ee9d elementor-widget elementor-widget-heading"
                                            data-id="c95ee9d" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container date2">
                                                <span class="elementor-heading-title elementor-size-default">
                                                    {{ $last_exp->start_date }} To
                                                    {{ $last_exp->end_date ? $last_exp->end_date : 'Present' }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-37316f5 elementor-widget elementor-widget-text-editor"
                                            data-id="37316f5" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container description">
                                                <ul>
                                                    @php
                                                    $text = str_ireplace("<br />", "\r\n", $last_exp->description);
                                                    echo $text;
                                                    @endphp
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-430d076 elementor-widget elementor-widget-progress"
                                            data-id="430d076" data-element_type="widget"
                                            data-widget_type="progress.default">
                                            <div class="elementor-widget-container">

                                                <div class="elementor-progress-wrapper" role="progressbar"
                                                    aria-valuemin="0" aria-valuemax="100" aria-valuenow="100"
                                                    aria-valuetext="100% (Paytm)">
                                                    <div class="elementor-progress-bar" data-max="100">
                                                        <span
                                                            class="elementor-progress-text">{{ $last_exp->company_name }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-m1olgxq elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle"
            data-id="m1olgxq" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="display:none;">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-083fa10"
                    data-id="083fa10" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-fd30fee elementor-widget elementor-widget-heading"
                            data-id="fd30fee" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">My Blogs
                                </h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1321564 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="1321564" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-21dc411 elementor-widget elementor-widget-image-carousel"
                            data-id="21dc411" data-element_type="widget"
                            data-settings="{&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:&quot;5000&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:&quot;500&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;20&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                            data-widget_type="image-carousel.default">
                            <div class="elementor-widget-container">
                                <style>
                                /*! elementor - v3.14.0 - 26-06-2023 */
                                .elementor-widget-image-carousel .swiper,
                                .elementor-widget-image-carousel .swiper-container {
                                    position: static
                                }

                                .elementor-widget-image-carousel .swiper-container .swiper-slide figure,
                                .elementor-widget-image-carousel .swiper .swiper-slide figure {
                                    line-height: inherit
                                }

                                .elementor-widget-image-carousel .swiper-slide {
                                    text-align: center
                                }

                                .elementor-image-carousel-wrapper:not(.swiper-container-initialized):not(.swiper-initialized) .swiper-slide {
                                    max-width: calc(100% / var(--e-image-carousel-slides-to-show, 3))
                                }
                                </style>
                                <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                                    <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                                        <div class="swiper-slide" role="group" aria-roledescription="slide"
                                            aria-label="1 of 5">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="{{ asset('public/wp-content/uploads/2023/06/portfolio-2.png') }}"
                                                    alt="portfolio-2.png"></figure>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-roledescription="slide"
                                            aria-label="2 of 5">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="{{ asset('public/wp-content/uploads/2023/06/portfolio-3.png') }}"
                                                    alt="portfolio-3.png"></figure>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-roledescription="slide"
                                            aria-label="3 of 5">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="{{ asset('public/wp-content/uploads/2023/06/portfolio-6-1.png') }}"
                                                    alt="portfolio-6-1.png"></figure>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-roledescription="slide"
                                            aria-label="4 of 5">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="{{ asset('public/wp-content/uploads/2023/06/portfolio-4.png') }}"
                                                    alt="portfolio-4.png"></figure>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-roledescription="slide"
                                            aria-label="5 of 5">
                                            <figure class="swiper-slide-inner"><img decoding="async"
                                                    class="swiper-slide-image"
                                                    src="{{ asset('public/wp-content/uploads/2023/06/portfolio-7-1.png') }}"
                                                    alt="portfolio-7-1.png"></figure>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-2gvy9o8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="2gvy9o8" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-75d7dbd"
                    data-id="75d7dbd" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-d2e8414 elementor-widget elementor-widget-heading"
                            data-id="d2e8414" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">What My
                                    Mentee Says</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a1d20cc elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="a1d20cc" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-9905fba elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="9905fba" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="testimonial-box m-0 h-100">
                                    <img src="https://www.sociablekit.com/tutorials/tutorials-resources/images/quote-top.svg"
                                        alt="" class="quote-icon" />
                                    <p>
                                        "I have to hand it to a company that goes above and beyond with their customer
                                        service... your team is a notch above anything I've experienced. Great software,
                                        great support - what else can you ask for?"
                                    </p>
                                    <div class="user-box">
                                        <img class="lazy-loading"
                                            src="https://www.sociablekit.com/sociablekit-template/images/loading.gif"
                                            data-src="https://www.sociablekit.com/tutorials/resources/images/reviewers/yannick_picard.jpg"
                                            alt="" />
                                        <div>
                                            <h4>Yannick Picard</h4>
                                            <span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-no">
                                @foreach($reviews as $review)
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8a50591"
                                    data-id="8a50591" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-element elementor-element-642ada1 elementor-view-default elementor-widget elementor-widget-icon"
                                            data-id="642ada1" data-element_type="widget"
                                            data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="fas fa-quote-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-b5670d9 elementor-widget elementor-widget-image"
                                            data-id="b5670d9" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container" style="margin-bottom:10px;">
                                                @if ($review->user->metaData->profile_pic)
                                                <img decoding="async" width="336" height="336"
                                                    src="{{ asset('public/assets/img') }}/{{ $review->user->metaData->profile_pic }}"
                                                    class="attachment-large size-large wp-image-2460" alt=""
                                                    srcset="{{ asset('public/assets/img') }}/{{ $review->user->metaData->profile_pic }} 336w, {{ asset('public/assets/img') }}/{{ $review->user->metaData->profile_pic }} 300w, {{ asset('public/assets/img') }}/{{ $review->user->metaData->profile_pic }} 150w, {{ asset('public/assets/img') }}/{{ $review->user->metaData->profile_pic }} 450w, {{ asset('public/assets/img') }}/{{ $review->user->metaData->profile_pic }} 700w, {{ asset('public/assets/img') }}/{{ $review->user->metaData->profile_pic }} 650w, {{ asset('public/assets/img') }}/{{ $review->user->metaData->profile_pic }} 1300w"
                                                    sizes="(max-width: 336px) 100vw, 336px">
                                                @else
                                                <img decoding="async" width="336" height="336"
                                                    src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                    class="attachment-large size-large wp-image-2460" alt=""
                                                    srcset="{{ asset('public/assets/img/blank-profile-picture.png') }} 336w, {{ asset('public/assets/img/blank-profile-picture.png') }} 300w, {{ asset('public/assets/img/blank-profile-picture.png') }} 150w, {{ asset('public/assets/img/blank-profile-picture.png') }} 450w, {{ asset('public/assets/img/blank-profile-picture.png') }} 700w, {{ asset('public/assets/img/blank-profile-picture.png') }} 650w, {{ asset('public/assets/img/blank-profile-picture.png') }} 1300w"
                                                    sizes="(max-width: 336px) 100vw, 336px">
                                            </div>
                                            @endif
                                        </div>
                                        <div class="elementor-element elementor-element-91d36c6 elementor-star-rating--align-center elementor--star-style-star_fontawesome elementor-widget elementor-widget-star-rating"
                                            data-id="91d36c6" data-element_type="widget"
                                            data-widget_type="star-rating.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-star-rating__wrapper">
                                                    <div class="elementor-star-rating" title="5/5"
                                                        itemtype="http://schema.org/Rating" itemscope=""
                                                        itemprop="reviewRating">
                                                        <i class="elementor-star-full">&#xE934;</i><i
                                                            class="elementor-star-full">&#xE934;</i><i
                                                            class="elementor-star-full">&#xE934;</i><i
                                                            class="elementor-star-full">&#xE934;</i><i
                                                            class="elementor-star-full">&#xE934;</i>
                                                        <span itemprop="ratingValue"
                                                            class="elementor-screen-only">5/5</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-e1a5c8d elementor-widget elementor-widget-text-editor"
                                            data-id="e1a5c8d" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>{{ $review->review }} </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-80f799d elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="80f799d" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-75927c9 elementor-widget elementor-widget-heading"
                                            data-id="75927c9" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <span
                                                    class="elementor-heading-title elementor-size-default">{{ $review->user->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div> -->
                        </section>
                    </div>
                </div>
            </div>
        </section>
        @if(!empty($data->metaData->achievements))
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-de2b30f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="de2b30f" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5e2918a"
                    data-id="5e2918a" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-da8e50b elementor-widget elementor-widget-heading"
                            data-id="da8e50b" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default">Featured
                                    In</h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a5f40c4 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                            data-id="a5f40c4" data-element_type="widget" data-widget_type="divider.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-divider">
                                    <span class="elementor-divider-separator">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-148904d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="148904d" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f773da8"
                                    data-id="f773da8" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-element elementor-element-2301d67 elementor-widget elementor-widget-heading"
                                            data-id="2301d67" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="elementor-heading-title elementor-size-default">
                                                    <a
                                                        href="https://baladnaelyoum.com/news/603318">https://baladnaelyoum.com/news/603318</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-42fc597 elementor-widget elementor-widget-heading"
                                            data-id="42fc597" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="elementor-heading-title elementor-size-default">
                                                    <a
                                                        href="https://ahlmasrnews.com/904242">https://ahlmasrnews.com/904242</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-762b12c elementor-widget elementor-widget-heading"
                                            data-id="762b12c" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="elementor-heading-title elementor-size-default">
                                                    <a
                                                        href="https://alnaasher.com/archives/83532">https://alnaasher.com/archives/83532</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-aad76ca elementor-widget elementor-widget-heading"
                                            data-id="aad76ca" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="elementor-heading-title elementor-size-default">
                                                    <a
                                                        href="https://www.sada-elarab.com/166309">https://www.sada-elarab.com/166309</a>
                                                </p>
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
        @endif
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-o8fq3al elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="o8fq3al" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c1cfa93"
                    data-id="c1cfa93" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-20527eb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="20527eb" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-be4a5eb"
                                    data-id="be4a5eb" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-1d73ff0 elementor-widget elementor-widget-heading"
                                            data-id="1d73ff0" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-default">
                                                    Stay In Touch
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-f18deea elementor-widget elementor-widget-text-editor"
                                            data-id="f18deea" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Ut elit tellus,
                                                luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-b43ec61 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="b43ec61" data-element_type="widget"
                                            data-widget_type="divider.default">
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
                            class="elementor-section elementor-inner-section elementor-element elementor-element-e0b13ad elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="e0b13ad" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e79cd86"
                                    data-id="e79cd86" data-element_type="column">
                                    <div class="elementor-widget-wrap">
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
                                        <form class="elementor-form" method="post" name="Subscribe Form">
                                            <input type="hidden" name="post_id" value="32">
                                            <input type="hidden" name="form_id" value="dd4d324">
                                            <input type="hidden" name="referer_title" value="Profile">

                                            <input type="hidden" name="queried_id" value="2372">

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
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            How it
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
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('privacyPolicy') }}">Privacy
                                                                Policy</a>
                                                        </p>
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
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('termsConditions') }}">Terms
                                                                &
                                                                Conditions</a>
                                                        </p>
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
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('community-guidelines') }}">Community
                                                                Guidelines</a>
                                                        </p>
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
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('aboutUs') }}">About
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
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('contactUs') }}">Contact
                                                                Us</a>
                                                        </p>
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
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('faq') }}">FAQs</a>
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
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            <a href="{{ route('browseMentor') }}">Browse
                                                                Mentors</a>
                                                        </p>
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
                                                <span>Copyright © 2023 wiseAdvizor | Powered by IVY
                                                    Investment
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
    <script src="{{ asset('public/wp-content/plugins/niso-carousel-slider/assets/js/owl.carousel.min.js?ver=1.0') }}"
        id="niso-carousel-owl.min-js"></script>
    <script
        src="{{ asset('public/wp-content/plugins/niso-carousel-slider/assets/js/jquery.mousewheel.min.js?ver=1.0') }}"
        id="jquery.mousewheel.min-js"></script>
    <script src="{{ asset('public/wp-content/plugins/niso-carousel-slider/assets/js/nivo-lightbox.min.js?ver=1.0') }}"
        id="niso-carousel-lightbox.min-js"></script>
    <script src="{{ asset('public/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2') }}" id="jquery-ui-core-js">
    </script>
    <script id="qi-addons-for-elementor-script-js-extra">
    var qodefQiAddonsGlobal = {
        "vars": {
            "adminBarHeight": 0,
            "iconArrowLeft": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>",
            "iconArrowRight": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>",
            "iconClose": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"
        }
    };
    </script>
    <script src="{{ asset('public/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=6.2.2') }}"
        id="qi-addons-for-elementor-script-js"></script>
    <script src="{{ asset('public/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.2') }}" id="jquery-ui-mouse-js">
    </script>
    <script src="{{ asset('public/wp-includes/js/jquery/ui/slider.min.js?ver=1.13.2') }}" id="jquery-ui-slider-js">
    </script>
    <script src="{{ asset('public/wp-content/uploads/theplus-addons/theplus.min.js?ver=1689690069') }}"
        id="theplus-front-js-js" defer></script>
    <script src="{{ asset('public/wp-content/plugins/header-footer-elementor/inc/js/frontend.js?ver=1.6.14') }}"
        id="hfe-frontend-js-js"></script>
    <script src="{{ asset('public/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.14.1') }}"
        id="elementor-webpack-runtime-js"></script>
    <script src="{{ asset('public/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.14.1') }}"
        id="elementor-frontend-modules-js"></script>
    <script src="{{ asset('public/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2') }}"
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
            "id": 2372,
            "title": "Profile%20%E2%80%93%20WISE%20ADVIZOR",
            "excerpt": "",
            "featuredImage": false
        }
    };
    </script>
    <script src="{{ asset('public/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.14.1') }}"
        id="elementor-frontend-js"></script>
    <script src="{{ asset('public/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2') }}"
        id="wp-polyfill-inert-js"></script>
    <script src="{{ asset('public/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11') }}"
        id="regenerator-runtime-js"></script>
    <script src="{{ asset('public/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0') }}" id="wp-polyfill-js">
    </script>
    <script src="{{ asset('public/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5') }}" id="wp-hooks-js">
    </script>
    <script src="{{ asset('public/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae') }}" id="wp-i18n-js">
    </script>
    <script id="wp-i18n-js-after">
    wp.i18n.setLocaleData({
        'text directionltr': ['ltr']
    });
    </script>
    <script
        src="{{ asset('public/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js?ver=6.2.2') }}"
        id="qi-addons-for-elementor-elementor-js"></script>
    <script src="{{ asset('public/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.5.0') }}"
        id="elementor-pro-webpack-runtime-js"></script>
    <script id="elementor-pro-frontend-js-before">
    var ElementorProFrontendConfig = {
        "ajaxurl": "https:\/\/wiseadvizor.com\/wp-admin\/admin-ajax.php",
        "nonce": "d9fea2930c",
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
    <script src="{{ asset('public/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.5.0') }}"
        id="elementor-pro-frontend-js"></script>
    <script src="{{ asset('public/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.5.0') }}"
        id="pro-elements-handlers-js"></script>
    <script
        src="{{ asset('public/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.5.0') }}"
        id="e-sticky-js"></script>
    <script src="{{ asset('public/wp-includes/js/underscore.min.js?ver=1.13.4') }}" id="underscore-js"></script>
    <script id="wp-util-js-extra">
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp-admin\/admin-ajax.php"
        }
    };
    </script>
    <script src="{{ asset('public/wp-includes/js/wp-util.min.js?ver=6.2.2') }}" id="wp-util-js">
    </script>
    <script id="wpforms-elementor-js-extra">
    var wpformsElementorVars = {
        "captcha_provider": "recaptcha",
        "recaptcha_type": "v2"
    };
    </script>
    <script
        src="{{ asset('public/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.8.2.2') }}"
        id="wpforms-elementor-js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js">
    </script>
    <!-- <script src="{{ asset('public/assets/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/assets/js/ct-navbar.js') }}"></script> -->
    <script type="text/javascript">
    (function($) {
        "use strict";
        $(document).ready(function() {
            $('#niso-carousel-952.owl-carousel').owlCarousel({
                //Multiple carousel settings
                items: 4,
                loop: true,
                autoplay: true,
                autoplaySpeed: 300,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                slideBy: 1,
                smartSpeed: 250,
                nav: false,
                dots: true,
                dotsSpeed: 250,
                mouseDrag: true,
                touchDrag: true,
                pullDrag: true,
                freeDrag: false,
                center: false,
                stagePadding: 0,
                startPosition: 0,
                lazyLoad: false,
                rtl: false,
                video: false,
                autoHeight: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2,
                    },
                    960: {
                        items: 3,
                    },
                    1300: {
                        items: 4,
                    }
                }
            });
        });
    }(jQuery));
    </script>

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
    <!--End of Tawk.to Script-->
</body>

</html>