<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Copyright 2023 IVY Investment LLC 
* Coded by Nihala PP

=========================================================
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/PNG-Blue.png') }}">
    <title>wiseAdvizor </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('public/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('public/assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/vendor/@fontawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
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

    a {
        font-size: 15px;
    }

    /* 
    i.fas.fa-bell {
        height: 75px;
        width: 1256px;
    } */

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
    }

    .menuITem {
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

    @media screen and (max-width:600px) {
        html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset: 0px
        }
    }
    </style>
    <link rel="preload"
        href="https://wiseadvizor.com/wp-content/plugins/the-plus-addons-for-block-editor/assets/css/extra/fontawesome.min.css?ver=6.2.2"
        as="style" id="tpgb-fontawesome" media="all" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" id="tpgb-fontawesome-css"
            href="https://wiseadvizor.com/wp-content/plugins/the-plus-addons-for-block-editor/assets/css/extra/fontawesome.min.css?ver=6.2.2"
            media="all">
    </noscript>
    <link rel="stylesheet" id="tpgb-gfonts-global-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A700%2C500%2C400&#038;subset=latin&#038;display=swap&#038;ver=3.0.2"
        media="all">
    <link rel="stylesheet" id="plus-global-css"
        href="https://wiseadvizor.com/wp-content/uploads/theplus_gutenberg/plus-global.css?ver=1687439283" media="all">
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
        href="https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/fontello.css?ver=1.0"
        media="all">
    <link rel="stylesheet" id="niso-carousel-owl-css"
        href="https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/owl.carousel.css?ver=1.0"
        media="all">
    <link rel="stylesheet" id="niso-theme-default-css"
        href="https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/themes/niso.theme.default.css?ver=1.0"
        media="all">
    <link rel="stylesheet" id="niso-animate-css"
        href="https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/animate.css?ver=1.3.18"
        media="all">
    <link rel="stylesheet" id="niso-carousel-css"
        href="https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/niso-carousel.css?ver=1.3.18"
        media="all">
    <link rel="stylesheet" id="niso-carousel-lightbox-css"
        href="https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/nivo-lightbox.css?ver=1.0"
        media="all">
    <link rel="stylesheet" id="niso-carousel-lightbox-theme-css"
        href="https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/themes/default.css?ver=1.0"
        media="all">
    <style id="wp-webfonts-inline-css">
    @font-face {
        font-family: "Source Serif Pro";
        font-style: normal;
        font-weight: 200 900;
        font-display: fallback;
        src: url('https://wiseadvizor.com/wp-content/themes/twentytwentytwo/assets/fonts/source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        font-family: "Source Serif Pro";
        font-style: italic;
        font-weight: 200 900;
        font-display: fallback;
        src: url('https://wiseadvizor.com/wp-content/themes/twentytwentytwo/assets/fonts/source-serif-pro/SourceSerif4Variable-Italic.ttf.woff2') format('woff2');
        font-stretch: normal;
    }
    </style>
    <link rel="stylesheet" id="hfe-style-css"
        href="https://wiseadvizor.com/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.14"
        media="all">
    <link rel="stylesheet" id="elementor-icons-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.20.0"
        media="all">
    <link rel="stylesheet" id="elementor-frontend-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.14.1"
        media="all">
    <link rel="stylesheet" id="swiper-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5"
        media="all">
    <link rel="stylesheet" id="elementor-post-5-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-5.css?ver=1688377903" media="all">
    <link rel="stylesheet" id="elementor-pro-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.5.0"
        media="all">
    <link rel="stylesheet" id="font-awesome-5-all-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.14.1"
        media="all">
    <link rel="stylesheet" id="font-awesome-4-shim-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.14.1"
        media="all">
    <link rel="stylesheet" id="she-header-style-css"
        href="https://wiseadvizor.com/wp-content/plugins/sticky-header-effects-for-elementor/assets/css/she-header-style.css?ver=1.6.5"
        media="all">
    <link rel="stylesheet" id="elementor-global-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/global.css?ver=1688377904" media="all">
    <link rel="stylesheet" id="hfe-widgets-style-css"
        href="https://wiseadvizor.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.14"
        media="all">
    <link rel="stylesheet" id="elementor-post-13-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-13.css?ver=1688723449" media="all">
    <link rel="stylesheet" id="elementor-post-3007-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-3007.css?ver=1688644136" media="all">
    <link rel="stylesheet" id="elementor-post-32-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-32.css?ver=1688661608" media="all">
    <link rel="stylesheet" id="qi-addons-for-elementor-grid-style-css"
        href="https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=6.2.2"
        media="all">
    <link rel="stylesheet" id="qi-addons-for-elementor-helper-parts-style-css"
        href="https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=6.2.2"
        media="all">
    <link rel="stylesheet" id="qi-addons-for-elementor-style-css"
        href="https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=6.2.2"
        media="all">
    <link rel="stylesheet" id="theplus-front-css-css"
        href="https://wiseadvizor.com/wp-content/uploads/theplus-addons/theplus.min.css?ver=1688723449" media="all">
    <link rel="stylesheet" id="twentytwentytwo-style-css"
        href="https://wiseadvizor.com/wp-content/themes/twentytwentytwo/style.css?ver=1.4" media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CSail%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.2.2"
        media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-regular-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3"
        media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script id="jquery-core-js-extra">
    var tpgb_load = {
        "ajaxUrl": "https:\/\/wiseadvizor.com\/wp-admin\/admin-ajax.php"
    };
    var smoothAllowedBrowsers = [];
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.4" id="jquery-core-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0" id="jquery-migrate-js">
    </script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.14.1"
        id="font-awesome-4-shim-js"></script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/sticky-header-effects-for-elementor/assets/js/she-header.js?ver=1.6.5"
        id="she-header-js"></script>
    <link rel="https://api.w.org/" href="https://wiseadvizor.com/wp-json/">
    <link rel="alternate" type="application/json" href="https://wiseadvizor.com/wp-json/wp/v2/pages/13">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wiseadvizor.com/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://wiseadvizor.com/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 6.2.2">
    <link rel="canonical" href="https://wiseadvizor.com/contact-us/">
    <link rel="shortlink" href="https://wiseadvizor.com/?p=13">
    <link rel="alternate" type="application/json+oembed"
        href="https://wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2Fcontact-us%2F">
    <link rel="alternate" type="text/xml+oembed"
        href="https://wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2Fcontact-us%2F#038;format=xml">
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
    class="page-template page-template-elementor_canvas page page-id-13 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-13">
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
        <p class="main-title bhf-hidden" itemprop="headline"><a href="https://wiseadvizor.com/" title="wiseAdvizor"
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
                                    </style> <a href="https://wiseadvizor.com">
                                        <img width="932" height="140"
                                            src="https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC.png"
                                            class="attachment-large size-large wp-image-624" alt=""
                                            srcset="https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC.png 932w, https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC-300x45.png 300w, https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC-768x115.png 768w"
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
                                                    <a href="https://wiseadvizor.com/about-us/" itemprop="url"
                                                        class="hfe-menu-item">About Us</a>
                                                </li>
                                                <li id="menu-item-28" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-13 current_page_item parent hfe-creative-menu">
                                                    <a href="https://wiseadvizor.com/contact-us/" itemprop="url"
                                                        class="hfe-menu-item">Contact Us</a>
                                                </li>
                                                <li id="menu-item-27" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children parent hfe-has-submenu hfe-creative-menu">
                                                    <div class="hfe-has-submenu-container"><a
                                                            href="https://wiseadvizor.com/resources/" itemprop="url"
                                                            class="hfe-menu-item">Resource<span
                                                                class="hfe-menu-toggle sub-arrow hfe-menu-child-0"><i
                                                                    class="fa"></i></span></a></div>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-24" itemprop="name"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                            <a href="https://wiseadvizor.com/community-post/"
                                                                itemprop="url" class="hfe-sub-menu-item">Community
                                                                Post</a>
                                                        </li>
                                                        <li id="menu-item-25" itemprop="name"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                            <a href="https://wiseadvizor.com/libraries/" itemprop="url"
                                                                class="hfe-sub-menu-item">Libraries</a>
                                                        </li>
                                                        <li id="menu-item-26" itemprop="name"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                            <a href="https://wiseadvizor.com/faq/" itemprop="url"
                                                                class="hfe-sub-menu-item">FAQ</a>
                                                        </li>
                                                        <li id="menu-item-2842" itemprop="name"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                            <a href="https://wiseadvizor.com/blogs/" itemprop="url"
                                                                class="hfe-sub-menu-item">BLOGS</a>
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
                        </div>
                        <div class="elementor-element elementor-element-78270f3 elementor-widget__width-auto elementor-widget elementor-widget-button"
                            data-id="78270f3" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <div class="container-fluid">
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
                                                        class="rounded-circle" height="8" width="75"
                                                        alt="Black and White Portrait of a Man" loading="lazy">
                                                    @else
                                                    <img src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                        height="100px;" width="100px;" class="rounded-circle">
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
                                        <!-- <ul class="navbar-nav"> -->
                                        <!-- Avatar -->
                                        <!-- <li class="nav-item me-3 me-lg-0 dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                    role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                                        class="rounded-circle" height="5" width="50"
                                                        alt="Black and White Portrait of a Man" loading="lazy" />
                                                </a>
                                                <p>{{ Auth::user()->name }}</p>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('user.profile', [Auth::id()]) }}">My
                                                            Profile</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('user.review') }}">My
                                                            Reviews</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                                    </li>
                                                </ul>
                                            </li> -->
                                        <!-- </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </header>

    <body class="g-sidenav-show  bg-white">
        <!-- </aside> -->
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <!-- <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"

            navbar-scroll="true"> -->

            <!-- Navbar -->

            <!-- Navbar -->
            <!-- End Navbar -->
            <!--====================================================
                           Upcoming Sessions
    ======================================================-->
            <div class="row" style="background-image: url('{{ asset('public/assets/img/cover.jpg') }}')">
                <div class="container-fluid py-4 req">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                            <div class="card my-4">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                        <h6 class="text-white text-capitalize ps-3">Upcoming Sessions</h6>
                                    </div>
                                </div>
                                <div class="card-body px-0 pb-2">
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Name</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Description</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Date & Time</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Action</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    </th>
                                                    <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($upcoming_sessions as $upcoming_session)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <img src="{{ asset('public/assets/img/').'/' }}{{ $upcoming_session->mentor->metaData ? $upcoming_session->mentor->metaData->profile_pic : '' }}"
                                                                    class="avatar avatar-sm me-3" alt="xd">
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">
                                                                    {{ $upcoming_session->mentor->name }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group mt-2">
                                                            {{ $upcoming_session->description }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group mt-2">
                                                            {{ $upcoming_session->date }}
                                                            {{ $upcoming_session->start_time }}
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <div class="avatar-group mt-2">
                                                            <a href="{{ $upcoming_session->call_link ?: '' }}" class=""
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Join Session">
                                                                Join Session
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <div class="avatar-group mt-2">
                                                            <a href="{{ route('user.schedule.update', [$upcoming_session->id]) }}"
                                                                class="" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" title="update Session">
                                                                Update Session
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====================================================
                           Requested Sessions
    ======================================================-->
                <div class="container-fluid py-4 req">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                            <div class="card my-4">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                        <h6 class="text-white text-capitalize ps-3">Requested Sessions</h6>
                                    </div>
                                </div>
                                <div class="card-body px-0 pb-2">
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Name</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Description</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Date & Time</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Status</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Action</th>
                                                    <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($requested_sessions as $requested_session)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <img src="{{ asset('public/assets/img/').'/' }}{{ $requested_session->mentor->metaData ? $requested_session->mentor->metaData->profile_pic : '' }}"
                                                                    class="avatar avatar-sm me-3" alt="xd">
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">
                                                                    {{ $requested_session->mentor->name }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group mt-2">
                                                            {{ $requested_session->description }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group mt-2">
                                                            {{ $requested_session->date }}
                                                            {{ $requested_session->start_time }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group mt-2">
                                                            {{ $requested_session->status }}
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <div class="avatar-group mt-2">
                                                            <a href="{{ route('user.schedule.update', [$requested_session->id]) }}"
                                                                class="" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" title="Update Session">
                                                                Update Session
                                                            </a>
                                                        </div>
                                                        <!-- <div class="avatar-group mt-2">
                                                    <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Reject Session">
                                                        Reject
                                                    </a>
                                                </div> -->
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--====================================================
                           Completed Sessions
    ======================================================-->
                <div class="container-fluid py-4 req">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                        <h6 class="text-white text-capitalize ps-3">Completed Sessions</h6>
                                    </div>
                                </div>
                                <div class="card-body px-0 pb-2">
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Name</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Date & Time</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Action</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    </th>
                                                    <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($completed_sessions as $completed_session)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <img src="{{ asset('public/assets/img/').'/' }}{{ $completed_session->mentor->metaData ? $completed_session->mentor->metaData->profile_pic : '' }}"
                                                                    class="avatar avatar-sm me-3" alt="xd">
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">
                                                                    {{ $completed_session->mentor->name }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group mt-2">
                                                            {{ $completed_session->date }} -
                                                            {{ $completed_session->start_time }}
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <div class="avatar-group mt-2">
                                                            <a href="{{ route('user.review', [$completed_session->mentor_id]) }}"
                                                                class="" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" title="Write Review"
                                                                target="_blank">
                                                                Write Review
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <div class="avatar-group mt-2">
                                                            <a href="{{ route('schedule-call', [$completed_session->mentor_id]) }}"
                                                                class="" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" title="Schedule Again">
                                                                Schedule Again
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--====================================================
                           Suggested Mentors
    ======================================================-->
                <div class="container-fluid py-4 req">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                        <h6 class="text-white text-capitalize ps-3">Suggested Mentors</h6>
                                    </div>
                                </div>
                                <div class="card-body px-0 pb-2">
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Name</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Topic</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Action</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    </th>
                                                    <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($suggested_mentors as $suggested_mentor)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <img src="{{ asset('public/assets/img/') }}/{{ $suggested_mentor->metaData ? $suggested_mentor->metaData->profile_pic : '' }}"
                                                                    class="avatar avatar-sm me-3" alt="xd">
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">
                                                                    {{ $suggested_mentor->name }}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avat2023-07-05 13ar-group mt-2">
                                                            {{ $suggested_mentor->metaData->designation }}
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <div class="avatar-group mt-2">
                                                            <a href="{{ route('profile', [$suggested_mentor->id]) }}"
                                                                class="" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" title="Join Session">
                                                                View Profile
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <div class="avatar-group mt-2">
                                                            <a href="{{ route('schedule-call', [$suggested_mentor->id]) }}"
                                                                class="" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom" title="Join Session">
                                                                Schedule Call
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid py-4">
                    <footer class="footer py-4  ">
                        <div class="container-fluid">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-4 mb-lg-0 mb-4">
                                    <div class="copyright text-center text-sm text-muted text-lg-start">
                                        © <script>
                                        document.write(new Date().getFullYear())
                                        </script>,
                                        made with <i class="fa fa-heart"></i> by
                                        <a href="" class="font-weight-bold" target="_blank">IVY Investment
                                            LLC.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
        </main>
        </div>
        <!-- </main> -->
        <!--   Core JS Files   -->
        <script src="{{ asset('public/assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>

        <script>
        (function(e) {
            var t, o = {
                    className: "autosizejs",
                    append: "",
                    callback: !1,
                    resizeDelay: 10
                },
                i =
                '<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',
                n = ["fontFamily", "fontSize", "fontWeight", "fontStyle", "letterSpacing", "textTransform",
                    "wordSpacing", "textIndent"
                ],
                s = e(i).data("autosize", !0)[0];
            s.style.lineHeight = "99px", "99px" === e(s).css("lineHeight") && n.push("lineHeight"), s.style
                .lineHeight =
                "", e.fn.autosize = function(i) {
                    return this.length ? (i = e.extend({}, o, i || {}), s.parentNode !== document.body && e(document
                        .body).append(s), this.each(function() {
                        function o() {
                            var t, o;
                            "getComputedStyle" in window ? (t = window.getComputedStyle(u, null), o = u
                                    .getBoundingClientRect().width, e.each(["paddingLeft",
                                        "paddingRight",
                                        "borderLeftWidth", "borderRightWidth"
                                    ], function(e, i) {
                                        o -= parseInt(t[i], 10)
                                    }), s.style.width = o + "px") : s.style.width = Math.max(p.width(),
                                    0) +
                                "px"
                        }

                        function a() {
                            var a = {};
                            if (t = u, s.className = i.className, d = parseInt(p.css("maxHeight"), 10),
                                e
                                .each(n, function(e, t) {
                                    a[t] = p.css(t)
                                }), e(s).css(a), o(), window.chrome) {
                                var r = u.style.width;
                                u.style.width = "0px", u.offsetWidth, u.style.width = r
                            }
                        }

                        function r() {
                            var e, n;
                            t !== u ? a() : o(), s.value = u.value + i.append, s.style.overflowY = u
                                .style
                                .overflowY, n = parseInt(u.style.height, 10), s.scrollTop = 0, s
                                .scrollTop =
                                9e4, e = s.scrollTop, d && e > d ? (u.style.overflowY = "scroll", e =
                                    d) : (
                                    u.style.overflowY = "hidden", c > e && (e = c)), e += w, n !== e &&
                                (u
                                    .style.height = e + "px", f && i.callback.call(u, u))
                        }

                        function l() {
                            clearTimeout(h), h = setTimeout(function() {
                                var e = p.width();
                                e !== g && (g = e, r())
                            }, parseInt(i.resizeDelay, 10))
                        }
                        var d, c, h, u = this,
                            p = e(u),
                            w = 0,
                            f = e.isFunction(i.callback),
                            z = {
                                height: u.style.height,
                                overflow: u.style.overflow,
                                overflowY: u.style.overflowY,
                                wordWrap: u.style.wordWrap,
                                resize: u.style.resize
                            },
                            g = p.width();
                        p.data("autosize") || (p.data("autosize", !0), ("border-box" === p.css(
                                    "box-sizing") || "border-box" === p.css("-moz-box-sizing") ||
                                "border-box" === p.css("-webkit-box-sizing")) && (w = p
                                .outerHeight() -
                                p.height()), c = Math.max(parseInt(p.css("minHeight"), 10) - w || 0,
                                p
                                .height()), p.css({
                                overflow: "hidden",
                                overflowY: "hidden",
                                wordWrap: "break-word",
                                resize: "none" === p.css("resize") || "vertical" === p.css(
                                    "resize") ? "none" : "horizontal"
                            }), "onpropertychange" in u ? "oninput" in u ? p.on(
                                "input.autosize keyup.autosize", r) : p.on(
                                "propertychange.autosize",
                                function() {
                                    "value" === event.propertyName && r()
                                }) : p.on("input.autosize", r), i.resizeDelay !== !1 && e(window)
                            .on(
                                "resize.autosize", l), p.on("autosize.resize", r), p.on(
                                "autosize.resizeIncludeStyle",
                                function() {
                                    t = null, r()
                                }), p.on("autosize.destroy", function() {
                                t = null, clearTimeout(h), e(window).off("resize", l), p.off(
                                    "autosize").off(".autosize").css(z).removeData(
                                    "autosize")
                            }), r())
                    })) : this
                }
        })(window.jQuery || window.$);

        var __slice = [].slice;
        (function(e, t) {
            var n;
            n = function() {
                function t(t, n) {
                    var r, i, s, o = this;
                    this.options = e.extend({}, this.defaults, n);
                    this.$el = t;
                    s = this.defaults;
                    for (r in s) {
                        i = s[r];
                        if (this.$el.data(r) != null) {
                            this.options[r] = this.$el.data(r)
                        }
                    }
                    this.createStars();
                    this.syncRating();
                    this.$el.on("mouseover.starrr", "span", function(e) {
                        return o.syncRating(o.$el.find("span").index(e.currentTarget) + 1)
                    });
                    this.$el.on("mouseout.starrr", function() {
                        return o.syncRating()
                    });
                    this.$el.on("click.starrr", "span", function(e) {
                        return o.setRating(o.$el.find("span").index(e.currentTarget) + 1)
                    });
                    this.$el.on("starrr:change", this.options.change)
                }
                t.prototype.defaults = {
                    rating: void 0,
                    numStars: 5,
                    change: function(e, t) {}
                };
                t.prototype.createStars = function() {
                    var e, t, n;
                    n = [];
                    for (e = 1, t = this.options.numStars; 1 <= t ? e <= t : e >= t; 1 <= t ? e++ : e--) {
                        n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))
                    }
                    return n
                };
                t.prototype.setRating = function(e) {
                    if (this.options.rating === e) {
                        e = void 0
                    }
                    this.options.rating = e;
                    this.syncRating();
                    return this.$el.trigger("starrr:change", e)
                };
                t.prototype.syncRating = function(e) {
                    var t, n, r, i;
                    e || (e = this.options.rating);
                    if (e) {
                        for (t = n = 0, i = e - 1; 0 <= i ? n <= i : n >= i; t = 0 <= i ? ++n : --n) {
                            this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass(
                                "glyphicon-star")
                        }
                    }
                    if (e && e < 5) {
                        for (t = r = e; e <= 4 ? r <= 4 : r >= 4; t = e <= 4 ? ++r : --r) {
                            this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass(
                                "glyphicon-star-empty")
                        }
                    }
                    if (!e) {
                        return this.$el.find("span").removeClass("glyphicon-star").addClass(
                            "glyphicon-star-empty")
                    }
                };
                return t
            }();
            return e.fn.extend({
                starrr: function() {
                    var t, r;
                    r = arguments[0], t = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
                    return this.each(function() {
                        var i;
                        i = e(this).data("star-rating");
                        if (!i) {
                            e(this).data("star-rating", i = new n(e(this), r))
                        }
                        if (typeof r === "string") {
                            return i[r].apply(i, t)
                        }
                    })
                }
            })
        })(window.jQuery, window);

        $(function() {
            return $(".starrr").starrr();
        });

        $(function() {

            $('#new-review').autosize({
                append: "\n"
            });

            var reviewBox = $('#post-review-box');
            var newReview = $('#new-review');
            var openReviewBtn = $('#open-review-box');
            var closeReviewBtn = $('#close-review-box');
            var ratingsField = $('#ratings-hidden');

            openReviewBtn.click(function(e) {
                reviewBox.slideDown(400, function() {
                    $('#new-review').trigger('autosize.resize');
                    newReview.focus();
                });
                openReviewBtn.fadeOut(100);
                closeReviewBtn.show();
            });

            closeReviewBtn.click(function(e) {
                e.preventDefault();
                reviewBox.slideUp(300, function() {
                    newReview.focus();
                    openReviewBtn.fadeIn(200);
                });
                closeReviewBtn.hide();

            });

            $('.starrr').on('starrr:change', function(e, value) {
                ratingsField.val(value);
            });
        });
        </script>
        <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script type="text/javascript" src="{{ asset('public/assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js">
        </script>
    </body>
    <style>
    .animated {
        -webkit-transition: height 0.2s;
        -moz-transition: height 0.2s;
        transition: height 0.2s;
    }

    .stars {
        margin: 20px 0;
        font-size: 24px;
        color: #d17581;
    }

    /* .navbar-light li a {
        font-family: "Helvetica", Sans-serif !important;
        font-size: 17px !important;
        font-weight: 700 !important;
        color: #001e64 !important;
    } */

    .card-header {
        background-color: #001e64 !important;
    }

    .card-header:first-child {
        border-radius: 0.75rem 0.75rem 0 0;
    }

    .req {
        padding-right: 50px;
        margin-left: 20px;
    }

    .btn-secondary {
        background-color: #fff !important;
    }

    /* #navbarDropdownMenuLink {
        z-index: 999999 !important;
    } */

    /* 
.dropdown-menu {
    position: absolute;
    top: 59px;
} */

    /* 
    .menu-list {
        align: center;
    } */

    /* .dropdown-menu {
	margin: 8px 0px!important;
} */
    </style>

</html>