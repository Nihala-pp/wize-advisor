<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Home &#8211; wiseAdvizor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
    var theplus_ajax_url = "https://wiseadvizor.com/wp-admin/admin-ajax.php";
    var theplus_ajax_post_url = "https://wiseadvizor.com/wp-admin/admin-post.php";
    var theplus_nonce = "e7ae24e787";
    </script>
    <meta name="robots" content="max-image-preview:large">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="alternate" type="application/rss+xml" title="wiseAdvizor &raquo; Feed"
        href="https://wiseadvizor.com/feed/">
    <link rel="alternate" type="application/rss+xml" title="wiseAdvizor &raquo; Comments Feed"
        href="https://wiseadvizor.com/comments/feed/">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/PNG-Blue.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />

    <!-- <link href="{{ asset('public/assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/ct-navbar.css') }}" rel="stylesheet" /> -->
    <!-- Hotjar Tracking Code for https://wiseadvizor.com -->
    <script>
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "\/https:\/\/wiseadvizor.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.1"
        }
    };
    /*! This file is auto-generated */
    ! function(i, n) {
        var o, s, e;

        function c(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: (new Date).valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
        }

        function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                    .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
            return t.every(function(e, t) {
                return e === r[t]
            })
        }

        function u(e, t, n) {
            switch (t) {
                case "flag":
                    return n(e, "🏳️‍⚧️", "🏳️​⚧️") ? !1 : !n(e, "🇺🇳", "🇺​🇳") && !n(e, "🏴󠁧󠁢󠁥󠁮󠁧󠁿",
                        "🏴​󠁧​󠁢​󠁥​󠁮​󠁧​󠁿");
                case "emoji":
                    return !n(e, "🫱🏻‍🫲🏿", "🫱🏻​🫲🏿")
            }
            return !1
        }

        function f(e, t, n) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                    300, 150) : i.createElement("canvas"),
                a = r.getContext("2d", {
                    willReadFrequently: !0
                }),
                o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
            return e.forEach(function(e) {
                o[e] = t(a, e, n)
            }), o
        }

        function t(e) {
            var t = i.createElement("script");
            t.src = e, t.defer = !0, i.head.appendChild(t)
        }
        "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, e = new Promise(function(e) {
            i.addEventListener("DOMContentLoaded", e, {
                once: !0
            })
        }), new Promise(function(t) {
            var n = function() {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                        e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                } catch (e) {}
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                    typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                            .toString()
                        ].join(",") + "));",
                        r = new Blob([e], {
                            type: "text/javascript"
                        }),
                        a = new Worker(URL.createObjectURL(r), {
                            name: "wpTestEmojiSupports"
                        });
                    return void(a.onmessage = function(e) {
                        c(n = e.data), a.terminate(), t(n)
                    })
                } catch (e) {}
                c(n = f(s, u, p))
            }
            t(n)
        }).then(function(e) {
            for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                    .everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                .DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
        }).then(function() {
            return e
        }).then(function() {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
        }))
    }((window, document), window._wpemojiSettings);
    </script>
    <style id="wp-emoji-styles-inline-css">
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

    @media (min-resolution:192dpi) {
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

    :where(figure) {
        margin: 0 0 1em
    }

    html :where(.is-position-sticky) {
        --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height, 0px)
    }

    @media screen and (max-width:600px) {
        html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset: 0px
        }
    }
    </style>
    <link rel="preload"
        href="https://wiseadvizor.com/wp-content/plugins/the-plus-addons-for-block-editor/assets/css/extra/fontawesome.min.css?ver=6.4.1"
        as="style" id="tpgb-fontawesome" media="all" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" id="tpgb-fontawesome-css"
            href="https://wiseadvizor.com/wp-content/plugins/the-plus-addons-for-block-editor/assets/css/extra/fontawesome.min.css?ver=6.4.1"
            media="all">
    </noscript>
    <link rel="stylesheet" id="tpgb-gfonts-global-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A700%2C500%2C400&#038;subset=latin&#038;display=swap&#038;ver=3.0.2"
        media="all">
    <link rel="stylesheet" id="plus-global-css"
        href="https://wiseadvizor.com/wp-content/uploads/theplus_gutenberg/plus-global.css?ver=1686921954" media="all">
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

    :where(.wp-site-blocks)>* {
        margin-block-start: 1.5rem;
        margin-block-end: 0;
    }

    :where(.wp-site-blocks)> :first-child:first-child {
        margin-block-start: 0;
    }

    :where(.wp-site-blocks)> :last-child:last-child {
        margin-block-end: 0;
    }

    body {
        --wp--style--block-gap: 1.5rem;
    }

    :where(body .is-layout-flow)> :first-child:first-child {
        margin-block-start: 0;
    }

    :where(body .is-layout-flow)> :last-child:last-child {
        margin-block-end: 0;
    }

    :where(body .is-layout-flow)>* {
        margin-block-start: 1.5rem;
        margin-block-end: 0;
    }

    :where(body .is-layout-constrained)> :first-child:first-child {
        margin-block-start: 0;
    }

    :where(body .is-layout-constrained)> :last-child:last-child {
        margin-block-end: 0;
    }

    :where(body .is-layout-constrained)>* {
        margin-block-start: 1.5rem;
        margin-block-end: 0;
    }

    :where(body .is-layout-flex) {
        gap: 1.5rem;
    }

    :where(body .is-layout-grid) {
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

    body .is-layout-grid {
        display: grid;
    }

    body .is-layout-grid>* {
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
    <style id="wp-block-template-skip-link-inline-css">
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
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-5.css?ver=1699355418" media="all">
    <link rel="stylesheet" id="she-header-style-css"
        href="https://wiseadvizor.com/wp-content/plugins/sticky-header-effects-for-elementor/assets/css/she-header-style.css?ver=1.6.5"
        media="all">
    <link rel="stylesheet" id="elementor-global-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/global.css?ver=1699355419" media="all">
    <link rel="stylesheet" id="elementor-post-8-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-8.css?ver=1699364637" media="all">
    <link rel="stylesheet" id="hfe-widgets-style-css"
        href="https://wiseadvizor.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.14"
        media="all">
    <link rel="stylesheet" id="elementor-post-30-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-30.css?ver=1699609171" media="all">
    <link rel="stylesheet" id="elementor-post-32-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-32.css?ver=1699355419" media="all">
    <link rel="stylesheet" id="qi-addons-for-elementor-grid-style-css"
        href="https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=6.4.1"
        media="all">
    <link rel="stylesheet" id="qi-addons-for-elementor-helper-parts-style-css"
        href="https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=6.4.1"
        media="all">
    <link rel="stylesheet" id="qi-addons-for-elementor-style-css"
        href="https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=6.4.1"
        media="all">
    <link rel="stylesheet" id="theplus-front-css-css"
        href="https://wiseadvizor.com/wp-content/uploads/theplus-addons/theplus.min.css?ver=1699364637" media="all">
    <link rel="stylesheet" id="twentytwentytwo-style-css"
        href="https://wiseadvizor.com/wp-content/themes/twentytwentytwo/style.css?ver=1.4" media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CSail%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.1"
        media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-regular-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css"
        href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3"
        media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script id="jquery-core-js-extra">
    var tpgb_load = {
        "ajaxUrl": "\/https:\/\/wiseadvizor.com\/wp-admin\/admin-ajax.php"
    };
    var smoothAllowedBrowsers = [];
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js">
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js">
    </script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/sticky-header-effects-for-elementor/assets/js/she-header.js?ver=1.6.5"
        id="she-header-js"></script>
    <link rel="https://api.w.org/" href="https://wiseadvizor.com/wp-json/">
    <link rel="alternate" type="application/json" href="https://wiseadvizor.com/wp-json/wp/v2/pages/8">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wiseadvizor.com/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.4.1">
    <link rel="canonical" href="https://wiseadvizor.com/">
    <link rel="shortlink" href="https://wiseadvizor.com/?p=8">
    <link rel="alternate" type="application/json+oembed"
        href="https://wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2Fhome%2F">
    <link rel="alternate" type="text/xml+oembed"
        href="https://wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2Fhome%2F#038;format=xml">
    <meta name="generator"
        content="Elementor 3.14.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style id="wp-fonts-local">
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
    class="page-template page-template-elementor_canvas page page-id-8 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-8">
    <header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
        <p class="main-title bhf-hidden" itemprop="headline"><a href="https://wiseadvizor.com/" title="wiseAdvizor"
                rel="home">wiseAdvizor</a></p>
        <div data-elementor-type="wp-post" data-elementor-id="30" class="elementor elementor-30">
            <header
                class="elementor-section elementor-top-section elementor-element elementor-element-7527857 elementor-section-full_width elementor-section-content-top elementor-hidden-tablet elementor-hidden-mobile she-header-yes elementor-section-height-default elementor-section-height-default"
                data-id="7527857" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;transparent&quot;:&quot;yes&quot;,&quot;background_show&quot;:&quot;yes&quot;,&quot;background&quot;:&quot;#00000000&quot;,&quot;transparent_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;scroll_distance&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;60&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8a75ec7"
                        data-id="8a75ec7" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-26115fa elementor-widget elementor-widget-image"
                                data-id="26115fa" data-element_type="widget" data-widget_type="image.default">
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
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-527a9b3"
                        data-id="527a9b3" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-ff5e4cd hfe-nav-menu__align-center hfe-submenu-animation-slide_up hfe-link-redirect-self_link hfe-submenu-icon-arrow hfe-nav-menu__breakpoint-tablet elementor-widget elementor-widget-navigation-menu"
                                data-id="ff5e4cd" data-element_type="widget"
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
                                            <ul id="menu-1-ff5e4cd" class="hfe-nav-menu">
                                                <li id="menu-item-29" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="https://wiseadvizor.com/about-us/" itemprop="url"
                                                        class="hfe-menu-item">About Us</a>
                                                </li>
                                                <li id="menu-item-28" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
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
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-78f6337"
                        data-id="78f6337" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-02e763c elementor-align-right elementor-widget__width-auto elementor-widget elementor-widget-button"
                                data-id="02e763c" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                            href="{{ route('login') }}">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Sign In</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ae81400 elementor-widget__width-auto elementor-widget elementor-widget-button"
                                data-id="ae81400" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                            href="{{ route('browseMentor') }}">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Browse Mentors</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-14994ed elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="14994ed" data-element_type="section" style="display:none;">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4e76ded elementor-hidden-mobile"
                        data-id="4e76ded" data-element_type="column">
                        <div class="elementor-widget-wrap">
                        </div>
                    </div>
                </div>
            </section>
            <header
                class="elementor-section elementor-top-section elementor-element elementor-element-a72004e elementor-section-full_width elementor-section-content-top elementor-hidden-tablet she-header-yes elementor-hidden-desktop elementor-section-height-default elementor-section-height-default"
                data-id="a72004e" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;transparent&quot;:&quot;yes&quot;,&quot;background_show&quot;:&quot;yes&quot;,&quot;background&quot;:&quot;#00000000&quot;,&quot;transparent_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;scroll_distance&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;60&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b97627d"
                        data-id="b97627d" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-af3e3d6 elementor-widget elementor-widget-image"
                                data-id="af3e3d6" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <a href="https://wiseadvizor.com">
                                        <img width="300" height="45"
                                            src="https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC-300x45.png"
                                            class="attachment-medium size-medium wp-image-624" alt=""
                                            srcset="https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC-300x45.png 300w, https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC-768x115.png 768w, https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC.png 932w"
                                            sizes="(max-width: 300px) 100vw, 300px"> </a>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b0aaaa9 hfe-submenu-animation-slide_up hfe-link-redirect-self_link hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-nav-menu__breakpoint-tablet elementor-widget elementor-widget-navigation-menu"
                                data-id="b0aaaa9" data-element_type="widget"
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
                                            <ul id="menu-1-b0aaaa9" class="hfe-nav-menu">
                                                <li id="menu-item-29" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="https://wiseadvizor.com/about-us/" itemprop="url"
                                                        class="hfe-menu-item">About Us</a>
                                                </li>
                                                <li id="menu-item-28" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
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
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-094a417"
                        data-id="094a417" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-4db9008 elementor-widget__width-auto elementor-widget-mobile__width-initial elementor-widget elementor-widget-button"
                                data-id="4db9008" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-xs"
                                            href="{{ route('browseMentor') }}">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Browse Mentors</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-00e2efe elementor-align-right elementor-widget__width-auto elementor-widget-mobile__width-initial elementor-widget elementor-widget-button"
                                data-id="00e2efe" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-xs"
                                            href="{{ route('login') }}">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Sign In</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div data-elementor-type="wp-page" data-elementor-id="8" class="elementor elementor-8">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-9a6781f elementor-section-content-middle elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                    data-id="9a6781f" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a037b03"
                            data-id="a037b03" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-bcb7070 elementor-widget-tablet__width-initial elementor-widget elementor-widget-image"
                                    data-id="bcb7070" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img decoding="async" width="360" height="360"
                                            src="{{ asset('public/wp-content/uploads/2023/06/ain-14-unscreen.gif') }}"
                                            class="attachment-full size-full wp-image-2588" alt="">
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-db6ff7f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="db6ff7f" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c158ab6"
                                            data-id="c158ab6" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-daa9944 animated-fast elementor-invisible elementor-widget elementor-widget-heading"
                                                    data-id="daa9944" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:&quot;2&quot;}"
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
                                                        <h1 class="elementor-heading-title elementor-size-default">
                                                            Unlock
                                                            Your
                                                            Potential</h1>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ca8bffa elementor-widget elementor-widget-heading"
                                                    data-id="ca8bffa" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">#with
                                                            wiseAdvizor</h2>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9ecb7fe elementor-widget elementor-widget-heading"
                                                    data-id="9ecb7fe" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">We're
                                                            excited
                                                            to bring you a transformative mentorship experience designed
                                                            to
                                                            empower startups and fuel their growth. </p>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-62d1cd5 elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="62d1cd5" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                href="{{ route('register') }}">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">Get
                                                                        Started</span>
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
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-b513049 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="b513049" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-760199c"
                            data-id="760199c" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-0c4f5bc elementor-blockquote--skin-quotation elementor-blockquote--align-center elementor-blockquote--button-color-official elementor-widget elementor-widget-blockquote"
                                    data-id="0c4f5bc" data-element_type="widget" data-widget_type="blockquote.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                        /*! elementor-pro - v3.5.0 - 01-11-2021 */
                                        @charset "UTF-8";

                                        .entry-content blockquote.elementor-blockquote:not(.alignright):not(.alignleft),
                                        .entry-summary blockquote.elementor-blockquote {
                                            margin-right: 0;
                                            margin-left: 0
                                        }

                                        .elementor-widget-blockquote blockquote {
                                            margin: 0;
                                            padding: 0;
                                            outline: 0;
                                            font-size: 100%;
                                            vertical-align: baseline;
                                            background: transparent;
                                            quotes: none;
                                            border: 0;
                                            font-style: normal;
                                            color: #55595c
                                        }

                                        .elementor-widget-blockquote blockquote:after,
                                        .elementor-widget-blockquote blockquote:before,
                                        .elementor-widget-blockquote blockquote cite:after,
                                        .elementor-widget-blockquote blockquote cite:before,
                                        .elementor-widget-blockquote blockquote footer:after,
                                        .elementor-widget-blockquote blockquote footer:before {
                                            content: "";
                                            content: none
                                        }

                                        .elementor-blockquote {
                                            -webkit-transition: .3s;
                                            -o-transition: .3s;
                                            transition: .3s
                                        }

                                        .elementor-blockquote__author,
                                        .elementor-blockquote__content {
                                            margin-bottom: 0;
                                            font-style: normal
                                        }

                                        .elementor-blockquote__author {
                                            font-weight: 700
                                        }

                                        .elementor-blockquote footer {
                                            margin-top: 12px;
                                            display: -webkit-box;
                                            display: -ms-flexbox;
                                            display: flex;
                                            -webkit-box-pack: justify;
                                            -ms-flex-pack: justify;
                                            justify-content: space-between
                                        }

                                        .elementor-blockquote__tweet-button {
                                            display: -webkit-box;
                                            display: -ms-flexbox;
                                            display: flex;
                                            -webkit-transition: .3s;
                                            -o-transition: .3s;
                                            transition: .3s;
                                            color: #1da1f2;
                                            -ms-flex-item-align: end;
                                            align-self: flex-end;
                                            line-height: 1;
                                            position: relative;
                                            width: -webkit-max-content;
                                            width: -moz-max-content;
                                            width: max-content
                                        }

                                        .elementor-blockquote__tweet-button:hover {
                                            color: #0967a0
                                        }

                                        .elementor-blockquote__tweet-button span {
                                            font-weight: 600
                                        }

                                        .elementor-blockquote__tweet-button i,
                                        .elementor-blockquote__tweet-button span {
                                            vertical-align: middle
                                        }

                                        .elementor-blockquote__tweet-button i+span,
                                        .elementor-blockquote__tweet-button svg+span {
                                            margin-left: .5em
                                        }

                                        .elementor-blockquote__tweet-button svg {
                                            fill: #1da1f2;
                                            height: 1em;
                                            width: 1em
                                        }

                                        .elementor-blockquote__tweet-label {
                                            white-space: pre-wrap
                                        }

                                        .elementor-blockquote--button-skin-bubble .elementor-blockquote__tweet-button,
                                        .elementor-blockquote--button-skin-classic .elementor-blockquote__tweet-button {
                                            padding: .7em 1.2em;
                                            border-radius: 100em;
                                            background-color: #1da1f2;
                                            color: #fff;
                                            font-size: 15px
                                        }

                                        .elementor-blockquote--button-skin-bubble .elementor-blockquote__tweet-button:hover,
                                        .elementor-blockquote--button-skin-classic .elementor-blockquote__tweet-button:hover {
                                            background-color: #0967a0;
                                            color: #fff
                                        }

                                        .elementor-blockquote--button-skin-bubble .elementor-blockquote__tweet-button:hover:before,
                                        .elementor-blockquote--button-skin-classic .elementor-blockquote__tweet-button:hover:before {
                                            border-right-color: #0967a0
                                        }

                                        .elementor-blockquote--button-skin-bubble .elementor-blockquote__tweet-button svg,
                                        .elementor-blockquote--button-skin-classic .elementor-blockquote__tweet-button svg {
                                            fill: #fff;
                                            height: 1em;
                                            width: 1em
                                        }

                                        .elementor-blockquote--button-skin-bubble.elementor-blockquote--button-view-icon .elementor-blockquote__tweet-button,
                                        .elementor-blockquote--button-skin-classic.elementor-blockquote--button-view-icon .elementor-blockquote__tweet-button {
                                            padding: 0;
                                            width: 2em;
                                            height: 2em
                                        }

                                        .elementor-blockquote--button-skin-bubble.elementor-blockquote--button-view-icon .elementor-blockquote__tweet-button i,
                                        .elementor-blockquote--button-skin-classic.elementor-blockquote--button-view-icon .elementor-blockquote__tweet-button i {
                                            position: absolute;
                                            left: 50%;
                                            top: 50%;
                                            -webkit-transform: translate(-50%, -50%);
                                            -ms-transform: translate(-50%, -50%);
                                            transform: translate(-50%, -50%)
                                        }

                                        .elementor-blockquote--button-skin-bubble .elementor-blockquote__tweet-button:before {
                                            content: "";
                                            border: .5em solid transparent;
                                            border-right-color: #1da1f2;
                                            position: absolute;
                                            left: -.8em;
                                            top: 50%;
                                            -webkit-transform: translateY(-50%) scaleY(.65);
                                            -ms-transform: translateY(-50%) scaleY(.65);
                                            transform: translateY(-50%) scaleY(.65);
                                            -webkit-transition: .3s;
                                            -o-transition: .3s;
                                            transition: .3s
                                        }

                                        .elementor-blockquote--button-skin-bubble.elementor-blockquote--align-left .elementor-blockquote__tweet-button:before {
                                            right: auto;
                                            left: -.8em;
                                            border-right-color: #1da1f2;
                                            border-left-color: transparent
                                        }

                                        .elementor-blockquote--button-skin-bubble.elementor-blockquote--align-left .elementor-blockquote__tweet-button:hover:before {
                                            border-right-color: #0967a0
                                        }

                                        .elementor-blockquote--button-skin-bubble.elementor-blockquote--align-right .elementor-blockquote__tweet-button:before {
                                            left: auto;
                                            right: -.8em;
                                            border-right-color: transparent;
                                            border-left-color: #1da1f2
                                        }

                                        .elementor-blockquote--button-skin-bubble.elementor-blockquote--align-right .elementor-blockquote__tweet-button:hover:before {
                                            border-left-color: #0967a0
                                        }

                                        .elementor-blockquote--skin-boxed .elementor-blockquote {
                                            background-color: #e6e9ec;
                                            padding: 30px
                                        }

                                        .elementor-blockquote--skin-border .elementor-blockquote {
                                            border-color: #e6e9ec;
                                            border-left: 7px #e6e9ec;
                                            border-style: solid;
                                            padding-left: 20px
                                        }

                                        .elementor-blockquote--skin-quotation .elementor-blockquote:before {
                                            content: "“";
                                            font-size: 100px;
                                            color: #e6e9ec;
                                            font-family: Times New Roman, Times, serif;
                                            font-weight: 900;
                                            line-height: 1;
                                            display: block;
                                            height: .6em
                                        }

                                        .elementor-blockquote--skin-quotation .elementor-blockquote__content {
                                            margin-top: 15px
                                        }

                                        .elementor-blockquote--align-left .elementor-blockquote__content {
                                            text-align: left
                                        }

                                        .elementor-blockquote--align-left .elementor-blockquote footer {
                                            -webkit-box-orient: horizontal;
                                            -webkit-box-direction: normal;
                                            -ms-flex-direction: row;
                                            flex-direction: row
                                        }

                                        .elementor-blockquote--align-right .elementor-blockquote__content {
                                            text-align: right
                                        }

                                        .elementor-blockquote--align-right .elementor-blockquote footer {
                                            -webkit-box-orient: horizontal;
                                            -webkit-box-direction: reverse;
                                            -ms-flex-direction: row-reverse;
                                            flex-direction: row-reverse
                                        }

                                        .elementor-blockquote--align-center .elementor-blockquote {
                                            text-align: center
                                        }

                                        .elementor-blockquote--align-center .elementor-blockquote__author,
                                        .elementor-blockquote--align-center .elementor-blockquote footer {
                                            display: block
                                        }

                                        .elementor-blockquote--align-center .elementor-blockquote__tweet-button {
                                            margin-right: auto;
                                            margin-left: auto
                                        }
                                        </style>
                                        <blockquote class="elementor-blockquote">
                                            <p class="elementor-blockquote__content">
                                                Mentoring is vital for startups as it provides expert guidance,
                                                networking
                                                opportunities, and experience-based learning, empowering them to
                                                navigate
                                                challenges and thrive in the competitive business landscape. </p>
                                            <footer>
                                                <cite class="elementor-blockquote__author">Deep Shikha </br> Co -
                                                    Founder</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-8124914 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="8124914" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-445f2a6"
                                            data-id="445f2a6" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-56bc6db elementor-widget elementor-widget-ucaddon_blob_shapes"
                                                    data-id="56bc6db" data-element_type="widget"
                                                    data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_direction&quot;:&quot;negative&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;1&quot;,&quot;sizes&quot;:[]}}"
                                                    data-widget_type="ucaddon_blob_shapes.default">
                                                    <div class="elementor-widget-container">
                                                        <!-- start Blob Shapes -->
                                                        <style type="text/css">
                                                        /* widget: Blob Shapes */

                                                        #uc_blob_shapes_elementor_56bc6db {
                                                            mix-blend-mode: overlay;
                                                            background-size: cover;
                                                            background-repeat: no-repeat;
                                                            background-position: center center;
                                                            opacity: 100%;
                                                        }

                                                        #uc_blob_shapes_elementor_56bc6db_justification {
                                                            display: flex;
                                                            min-height: 1px;
                                                        }

                                                        #uc_blob_shapes_elementor_56bc6db_size {
                                                            overflow: hidden;
                                                            width: 100%;
                                                            clip-path: polygon(70.400% 19.900%, 72.500% 21.400%, 74.600% 22.900%, 76.800% 24.300%, 79.000% 25.700%, 81.100% 27.100%, 83.200% 28.500%, 85.300% 29.900%, 87.300% 31.400%, 89.200% 32.900%, 91.000% 34.400%, 92.700% 35.900%, 94.200% 37.500%, 95.600% 39.100%, 96.800% 40.800%, 97.800% 42.500%, 98.600% 44.300%, 99.200% 46.200%, 99.600% 48.200%, 99.800% 50.200%, 99.800% 52.200%, 99.600% 54.300%, 99.300% 56.400%, 98.800% 58.500%, 98.100% 60.600%, 97.300% 62.600%, 96.300% 64.600%, 95.200% 66.500%, 94.000% 68.400%, 92.700% 70.200%, 91.200% 71.900%, 89.600% 73.500%, 87.900% 74.900%, 86.100% 76.200%, 84.300% 77.400%, 82.400% 78.500%, 80.400% 79.500%, 78.400% 80.400%, 76.300% 81.200%, 74.200% 82.000%, 72.000% 82.700%, 69.800% 83.400%, 67.600% 84.100%, 65.300% 84.800%, 63.000% 85.500%, 60.700% 86.200%, 58.400% 86.900%, 56.100% 87.700%, 53.800% 88.600%, 51.600% 89.500%, 49.400% 90.500%, 47.200% 91.500%, 45.000% 92.600%, 42.900% 93.700%, 40.800% 94.700%, 38.700% 95.700%, 36.600% 96.600%, 34.600% 97.500%, 32.600% 98.300%, 30.700% 99.000%, 28.800% 99.500%, 26.900% 99.900%, 25.100% 100.100%, 23.300% 100.100%, 21.600% 99.900%, 19.900% 99.500%, 18.300% 98.900%, 16.700% 98.100%, 15.200% 97.100%, 13.800% 95.900%, 12.400% 94.600%, 11.100% 93.200%, 9.800% 91.600%, 8.600% 89.900%, 7.500% 88.100%, 6.500% 86.300%, 5.500% 84.400%, 4.600% 82.500%, 3.800% 80.500%, 3.100% 78.500%, 2.400% 76.500%, 1.800% 74.500%, 1.300% 72.500%, 0.900% 70.500%, 0.500% 68.500%, 0.200% 66.500%, 0.000% 64.500%, -0.200% 62.500%, -0.300% 60.500%, 0.000% 58.700%, 0.000% 56.700%, 0.000% 54.700%, 0.000% 52.700%, 0.100% 50.700%, 0.200% 48.700%, 0.300% 46.700%, 0.400% 44.600%, 0.600% 42.500%, 0.800% 40.400%, 1.000% 38.300%, 1.300% 36.200%, 1.600% 34.100%, 1.900% 32.000%, 2.300% 29.900%, 2.800% 27.800%, 3.300% 25.800%, 3.900% 23.800%, 4.600% 21.800%, 5.400% 19.900%, 6.300% 18.000%, 7.300% 16.200%, 8.400% 14.400%, 9.600% 12.700%, 11.000% 11.100%, 12.500% 9.600%, 14.100% 8.200%, 15.800% 6.800%, 17.600% 5.500%, 19.400% 4.300%, 21.300% 3.300%, 23.200% 2.400%, 25.200% 1.600%, 27.200% 0.900%, 29.300% 0.400%, 31.400% -0.000%, 33.500% -0.200%, 35.500% 0.000%, 37.500% 0.100%, 39.500% 0.400%, 41.500% 0.900%, 43.400% 1.500%, 45.300% 2.300%, 47.200% 3.200%, 49.100% 4.200%, 51.000% 5.300%, 52.900% 6.500%, 54.800% 7.800%, 56.700% 9.200%, 58.600% 10.700%, 60.500% 12.200%, 62.400% 13.700%, 64.400% 15.200%, 66.400% 16.800%, 68.400% 18.300%, 70.400% 19.900%);
                                                            -webkit-clip-path: polygon(70.400% 19.900%, 72.500% 21.400%, 74.600% 22.900%, 76.800% 24.300%, 79.000% 25.700%, 81.100% 27.100%, 83.200% 28.500%, 85.300% 29.900%, 87.300% 31.400%, 89.200% 32.900%, 91.000% 34.400%, 92.700% 35.900%, 94.200% 37.500%, 95.600% 39.100%, 96.800% 40.800%, 97.800% 42.500%, 98.600% 44.300%, 99.200% 46.200%, 99.600% 48.200%, 99.800% 50.200%, 99.800% 52.200%, 99.600% 54.300%, 99.300% 56.400%, 98.800% 58.500%, 98.100% 60.600%, 97.300% 62.600%, 96.300% 64.600%, 95.200% 66.500%, 94.000% 68.400%, 92.700% 70.200%, 91.200% 71.900%, 89.600% 73.500%, 87.900% 74.900%, 86.100% 76.200%, 84.300% 77.400%, 82.400% 78.500%, 80.400% 79.500%, 78.400% 80.400%, 76.300% 81.200%, 74.200% 82.000%, 72.000% 82.700%, 69.800% 83.400%, 67.600% 84.100%, 65.300% 84.800%, 63.000% 85.500%, 60.700% 86.200%, 58.400% 86.900%, 56.100% 87.700%, 53.800% 88.600%, 51.600% 89.500%, 49.400% 90.500%, 47.200% 91.500%, 45.000% 92.600%, 42.900% 93.700%, 40.800% 94.700%, 38.700% 95.700%, 36.600% 96.600%, 34.600% 97.500%, 32.600% 98.300%, 30.700% 99.000%, 28.800% 99.500%, 26.900% 99.900%, 25.100% 100.100%, 23.300% 100.100%, 21.600% 99.900%, 19.900% 99.500%, 18.300% 98.900%, 16.700% 98.100%, 15.200% 97.100%, 13.800% 95.900%, 12.400% 94.600%, 11.100% 93.200%, 9.800% 91.600%, 8.600% 89.900%, 7.500% 88.100%, 6.500% 86.300%, 5.500% 84.400%, 4.600% 82.500%, 3.800% 80.500%, 3.100% 78.500%, 2.400% 76.500%, 1.800% 74.500%, 1.300% 72.500%, 0.900% 70.500%, 0.500% 68.500%, 0.200% 66.500%, 0.000% 64.500%, -0.200% 62.500%, -0.300% 60.500%, 0.000% 58.700%, 0.000% 56.700%, 0.000% 54.700%, 0.000% 52.700%, 0.100% 50.700%, 0.200% 48.700%, 0.300% 46.700%, 0.400% 44.600%, 0.600% 42.500%, 0.800% 40.400%, 1.000% 38.300%, 1.300% 36.200%, 1.600% 34.100%, 1.900% 32.000%, 2.300% 29.900%, 2.800% 27.800%, 3.300% 25.800%, 3.900% 23.800%, 4.600% 21.800%, 5.400% 19.900%, 6.300% 18.000%, 7.300% 16.200%, 8.400% 14.400%, 9.600% 12.700%, 11.000% 11.100%, 12.500% 9.600%, 14.100% 8.200%, 15.800% 6.800%, 17.600% 5.500%, 19.400% 4.300%, 21.300% 3.300%, 23.200% 2.400%, 25.200% 1.600%, 27.200% 0.900%, 29.300% 0.400%, 31.400% -0.000%, 33.500% -0.200%, 35.500% 0.000%, 37.500% 0.100%, 39.500% 0.400%, 41.500% 0.900%, 43.400% 1.500%, 45.300% 2.300%, 47.200% 3.200%, 49.100% 4.200%, 51.000% 5.300%, 52.900% 6.500%, 54.800% 7.800%, 56.700% 9.200%, 58.600% 10.700%, 60.500% 12.200%, 62.400% 13.700%, 64.400% 15.200%, 66.400% 16.800%, 68.400% 18.300%, 70.400% 19.900%);
                                                            background: linear-gradient(45deg, #330252, 50%, #330252 100%);

                                                        }

                                                        #uc_blob_shapes_elementor_56bc6db {
                                                            aspect-ratio: 1 / 1;
                                                            width: 100%;

                                                        }

                                                        .ue-blob-text-holder {
                                                            position: absolute;
                                                            top: 0px;
                                                            left: 0px;
                                                            right: 0px;
                                                            bottom: 0px;
                                                            width: 100%;
                                                            height: 100%;
                                                            z-index: 2;
                                                            display: flex;
                                                            justify-content: center;
                                                            flex-direction: column;
                                                        }

                                                        .ue_blob_inside {
                                                            position: relative;
                                                        }
                                                        </style>

                                                        <div id="uc_blob_shapes_elementor_56bc6db_justification"
                                                            class="ue-blob-wrapper">
                                                            <div id="uc_blob_shapes_elementor_56bc6db_size"
                                                                class="ue_blob_inside">

                                                                <div id="uc_blob_shapes_elementor_56bc6db"
                                                                    style="background-image:url()" class="blob"></div>
                                                                <div class="ue-blob-text-holder">
                                                                    <div class="ue-blob-title">Total Mentors</div>
                                                                    <div class="ue-blob-text">{{ $mentors->count() }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end Blob Shapes -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-cf0eed5"
                                            data-id="cf0eed5" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-605fd17 elementor-widget elementor-widget-ucaddon_blob_shapes"
                                                    data-id="605fd17" data-element_type="widget"
                                                    data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_direction&quot;:&quot;negative&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;1&quot;,&quot;sizes&quot;:[]}}"
                                                    data-widget_type="ucaddon_blob_shapes.default">
                                                    <div class="elementor-widget-container">
                                                        <!-- start Blob Shapes -->
                                                        <style type="text/css">
                                                        /* widget: Blob Shapes */

                                                        #uc_blob_shapes_elementor_605fd17 {
                                                            mix-blend-mode: overlay;
                                                            background-size: cover;
                                                            background-repeat: no-repeat;
                                                            background-position: center center;
                                                            opacity: 100%;
                                                        }

                                                        #uc_blob_shapes_elementor_605fd17_justification {
                                                            display: flex;
                                                            min-height: 1px;
                                                        }

                                                        #uc_blob_shapes_elementor_605fd17_size {
                                                            overflow: hidden;
                                                            width: 100%;
                                                            clip-path: polygon(70.400% 19.900%, 72.500% 21.400%, 74.600% 22.900%, 76.800% 24.300%, 79.000% 25.700%, 81.100% 27.100%, 83.200% 28.500%, 85.300% 29.900%, 87.300% 31.400%, 89.200% 32.900%, 91.000% 34.400%, 92.700% 35.900%, 94.200% 37.500%, 95.600% 39.100%, 96.800% 40.800%, 97.800% 42.500%, 98.600% 44.300%, 99.200% 46.200%, 99.600% 48.200%, 99.800% 50.200%, 99.800% 52.200%, 99.600% 54.300%, 99.300% 56.400%, 98.800% 58.500%, 98.100% 60.600%, 97.300% 62.600%, 96.300% 64.600%, 95.200% 66.500%, 94.000% 68.400%, 92.700% 70.200%, 91.200% 71.900%, 89.600% 73.500%, 87.900% 74.900%, 86.100% 76.200%, 84.300% 77.400%, 82.400% 78.500%, 80.400% 79.500%, 78.400% 80.400%, 76.300% 81.200%, 74.200% 82.000%, 72.000% 82.700%, 69.800% 83.400%, 67.600% 84.100%, 65.300% 84.800%, 63.000% 85.500%, 60.700% 86.200%, 58.400% 86.900%, 56.100% 87.700%, 53.800% 88.600%, 51.600% 89.500%, 49.400% 90.500%, 47.200% 91.500%, 45.000% 92.600%, 42.900% 93.700%, 40.800% 94.700%, 38.700% 95.700%, 36.600% 96.600%, 34.600% 97.500%, 32.600% 98.300%, 30.700% 99.000%, 28.800% 99.500%, 26.900% 99.900%, 25.100% 100.100%, 23.300% 100.100%, 21.600% 99.900%, 19.900% 99.500%, 18.300% 98.900%, 16.700% 98.100%, 15.200% 97.100%, 13.800% 95.900%, 12.400% 94.600%, 11.100% 93.200%, 9.800% 91.600%, 8.600% 89.900%, 7.500% 88.100%, 6.500% 86.300%, 5.500% 84.400%, 4.600% 82.500%, 3.800% 80.500%, 3.100% 78.500%, 2.400% 76.500%, 1.800% 74.500%, 1.300% 72.500%, 0.900% 70.500%, 0.500% 68.500%, 0.200% 66.500%, 0.000% 64.500%, -0.200% 62.500%, -0.300% 60.500%, 0.000% 58.700%, 0.000% 56.700%, 0.000% 54.700%, 0.000% 52.700%, 0.100% 50.700%, 0.200% 48.700%, 0.300% 46.700%, 0.400% 44.600%, 0.600% 42.500%, 0.800% 40.400%, 1.000% 38.300%, 1.300% 36.200%, 1.600% 34.100%, 1.900% 32.000%, 2.300% 29.900%, 2.800% 27.800%, 3.300% 25.800%, 3.900% 23.800%, 4.600% 21.800%, 5.400% 19.900%, 6.300% 18.000%, 7.300% 16.200%, 8.400% 14.400%, 9.600% 12.700%, 11.000% 11.100%, 12.500% 9.600%, 14.100% 8.200%, 15.800% 6.800%, 17.600% 5.500%, 19.400% 4.300%, 21.300% 3.300%, 23.200% 2.400%, 25.200% 1.600%, 27.200% 0.900%, 29.300% 0.400%, 31.400% -0.000%, 33.500% -0.200%, 35.500% 0.000%, 37.500% 0.100%, 39.500% 0.400%, 41.500% 0.900%, 43.400% 1.500%, 45.300% 2.300%, 47.200% 3.200%, 49.100% 4.200%, 51.000% 5.300%, 52.900% 6.500%, 54.800% 7.800%, 56.700% 9.200%, 58.600% 10.700%, 60.500% 12.200%, 62.400% 13.700%, 64.400% 15.200%, 66.400% 16.800%, 68.400% 18.300%, 70.400% 19.900%);
                                                            -webkit-clip-path: polygon(70.400% 19.900%, 72.500% 21.400%, 74.600% 22.900%, 76.800% 24.300%, 79.000% 25.700%, 81.100% 27.100%, 83.200% 28.500%, 85.300% 29.900%, 87.300% 31.400%, 89.200% 32.900%, 91.000% 34.400%, 92.700% 35.900%, 94.200% 37.500%, 95.600% 39.100%, 96.800% 40.800%, 97.800% 42.500%, 98.600% 44.300%, 99.200% 46.200%, 99.600% 48.200%, 99.800% 50.200%, 99.800% 52.200%, 99.600% 54.300%, 99.300% 56.400%, 98.800% 58.500%, 98.100% 60.600%, 97.300% 62.600%, 96.300% 64.600%, 95.200% 66.500%, 94.000% 68.400%, 92.700% 70.200%, 91.200% 71.900%, 89.600% 73.500%, 87.900% 74.900%, 86.100% 76.200%, 84.300% 77.400%, 82.400% 78.500%, 80.400% 79.500%, 78.400% 80.400%, 76.300% 81.200%, 74.200% 82.000%, 72.000% 82.700%, 69.800% 83.400%, 67.600% 84.100%, 65.300% 84.800%, 63.000% 85.500%, 60.700% 86.200%, 58.400% 86.900%, 56.100% 87.700%, 53.800% 88.600%, 51.600% 89.500%, 49.400% 90.500%, 47.200% 91.500%, 45.000% 92.600%, 42.900% 93.700%, 40.800% 94.700%, 38.700% 95.700%, 36.600% 96.600%, 34.600% 97.500%, 32.600% 98.300%, 30.700% 99.000%, 28.800% 99.500%, 26.900% 99.900%, 25.100% 100.100%, 23.300% 100.100%, 21.600% 99.900%, 19.900% 99.500%, 18.300% 98.900%, 16.700% 98.100%, 15.200% 97.100%, 13.800% 95.900%, 12.400% 94.600%, 11.100% 93.200%, 9.800% 91.600%, 8.600% 89.900%, 7.500% 88.100%, 6.500% 86.300%, 5.500% 84.400%, 4.600% 82.500%, 3.800% 80.500%, 3.100% 78.500%, 2.400% 76.500%, 1.800% 74.500%, 1.300% 72.500%, 0.900% 70.500%, 0.500% 68.500%, 0.200% 66.500%, 0.000% 64.500%, -0.200% 62.500%, -0.300% 60.500%, 0.000% 58.700%, 0.000% 56.700%, 0.000% 54.700%, 0.000% 52.700%, 0.100% 50.700%, 0.200% 48.700%, 0.300% 46.700%, 0.400% 44.600%, 0.600% 42.500%, 0.800% 40.400%, 1.000% 38.300%, 1.300% 36.200%, 1.600% 34.100%, 1.900% 32.000%, 2.300% 29.900%, 2.800% 27.800%, 3.300% 25.800%, 3.900% 23.800%, 4.600% 21.800%, 5.400% 19.900%, 6.300% 18.000%, 7.300% 16.200%, 8.400% 14.400%, 9.600% 12.700%, 11.000% 11.100%, 12.500% 9.600%, 14.100% 8.200%, 15.800% 6.800%, 17.600% 5.500%, 19.400% 4.300%, 21.300% 3.300%, 23.200% 2.400%, 25.200% 1.600%, 27.200% 0.900%, 29.300% 0.400%, 31.400% -0.000%, 33.500% -0.200%, 35.500% 0.000%, 37.500% 0.100%, 39.500% 0.400%, 41.500% 0.900%, 43.400% 1.500%, 45.300% 2.300%, 47.200% 3.200%, 49.100% 4.200%, 51.000% 5.300%, 52.900% 6.500%, 54.800% 7.800%, 56.700% 9.200%, 58.600% 10.700%, 60.500% 12.200%, 62.400% 13.700%, 64.400% 15.200%, 66.400% 16.800%, 68.400% 18.300%, 70.400% 19.900%);
                                                            background: linear-gradient(45deg, #330252 0%, 50%, #330252 100%);

                                                        }

                                                        #uc_blob_shapes_elementor_605fd17 {
                                                            aspect-ratio: 1 / 1;
                                                            width: 100%;

                                                        }

                                                        .ue-blob-text-holder {
                                                            position: absolute;
                                                            top: 0px;
                                                            left: 0px;
                                                            right: 0px;
                                                            bottom: 0px;
                                                            width: 100%;
                                                            height: 100%;
                                                            z-index: 2;
                                                            display: flex;
                                                            justify-content: center;
                                                            flex-direction: column;
                                                        }

                                                        .ue_blob_inside {
                                                            position: relative;
                                                        }
                                                        </style>

                                                        <div id="uc_blob_shapes_elementor_605fd17_justification"
                                                            class="ue-blob-wrapper">
                                                            <div id="uc_blob_shapes_elementor_605fd17_size"
                                                                class="ue_blob_inside">

                                                                <div id="uc_blob_shapes_elementor_605fd17"
                                                                    style="background-image:url()" class="blob"></div>
                                                                <div class="ue-blob-text-holder">
                                                                    <div class="ue-blob-title">Total Calls Scheduled
                                                                    </div>
                                                                    <div class="ue-blob-text">{{ $calls }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end Blob Shapes -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c5517e1"
                                            data-id="c5517e1" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-f8230d2 elementor-widget elementor-widget-ucaddon_blob_shapes"
                                                    data-id="f8230d2" data-element_type="widget"
                                                    data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_direction&quot;:&quot;negative&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;1&quot;,&quot;sizes&quot;:[]}}"
                                                    data-widget_type="ucaddon_blob_shapes.default">
                                                    <div class="elementor-widget-container">
                                                        <!-- start Blob Shapes -->
                                                        <style type="text/css">
                                                        /* widget: Blob Shapes */

                                                        #uc_blob_shapes_elementor_f8230d2 {
                                                            mix-blend-mode: overlay;
                                                            background-size: cover;
                                                            background-repeat: no-repeat;
                                                            background-position: center center;
                                                            opacity: 100%;
                                                        }

                                                        #uc_blob_shapes_elementor_f8230d2_justification {
                                                            display: flex;
                                                            min-height: 1px;
                                                        }

                                                        #uc_blob_shapes_elementor_f8230d2_size {
                                                            overflow: hidden;
                                                            width: 100%;
                                                            clip-path: polygon(70.400% 19.900%, 72.500% 21.400%, 74.600% 22.900%, 76.800% 24.300%, 79.000% 25.700%, 81.100% 27.100%, 83.200% 28.500%, 85.300% 29.900%, 87.300% 31.400%, 89.200% 32.900%, 91.000% 34.400%, 92.700% 35.900%, 94.200% 37.500%, 95.600% 39.100%, 96.800% 40.800%, 97.800% 42.500%, 98.600% 44.300%, 99.200% 46.200%, 99.600% 48.200%, 99.800% 50.200%, 99.800% 52.200%, 99.600% 54.300%, 99.300% 56.400%, 98.800% 58.500%, 98.100% 60.600%, 97.300% 62.600%, 96.300% 64.600%, 95.200% 66.500%, 94.000% 68.400%, 92.700% 70.200%, 91.200% 71.900%, 89.600% 73.500%, 87.900% 74.900%, 86.100% 76.200%, 84.300% 77.400%, 82.400% 78.500%, 80.400% 79.500%, 78.400% 80.400%, 76.300% 81.200%, 74.200% 82.000%, 72.000% 82.700%, 69.800% 83.400%, 67.600% 84.100%, 65.300% 84.800%, 63.000% 85.500%, 60.700% 86.200%, 58.400% 86.900%, 56.100% 87.700%, 53.800% 88.600%, 51.600% 89.500%, 49.400% 90.500%, 47.200% 91.500%, 45.000% 92.600%, 42.900% 93.700%, 40.800% 94.700%, 38.700% 95.700%, 36.600% 96.600%, 34.600% 97.500%, 32.600% 98.300%, 30.700% 99.000%, 28.800% 99.500%, 26.900% 99.900%, 25.100% 100.100%, 23.300% 100.100%, 21.600% 99.900%, 19.900% 99.500%, 18.300% 98.900%, 16.700% 98.100%, 15.200% 97.100%, 13.800% 95.900%, 12.400% 94.600%, 11.100% 93.200%, 9.800% 91.600%, 8.600% 89.900%, 7.500% 88.100%, 6.500% 86.300%, 5.500% 84.400%, 4.600% 82.500%, 3.800% 80.500%, 3.100% 78.500%, 2.400% 76.500%, 1.800% 74.500%, 1.300% 72.500%, 0.900% 70.500%, 0.500% 68.500%, 0.200% 66.500%, 0.000% 64.500%, -0.200% 62.500%, -0.300% 60.500%, 0.000% 58.700%, 0.000% 56.700%, 0.000% 54.700%, 0.000% 52.700%, 0.100% 50.700%, 0.200% 48.700%, 0.300% 46.700%, 0.400% 44.600%, 0.600% 42.500%, 0.800% 40.400%, 1.000% 38.300%, 1.300% 36.200%, 1.600% 34.100%, 1.900% 32.000%, 2.300% 29.900%, 2.800% 27.800%, 3.300% 25.800%, 3.900% 23.800%, 4.600% 21.800%, 5.400% 19.900%, 6.300% 18.000%, 7.300% 16.200%, 8.400% 14.400%, 9.600% 12.700%, 11.000% 11.100%, 12.500% 9.600%, 14.100% 8.200%, 15.800% 6.800%, 17.600% 5.500%, 19.400% 4.300%, 21.300% 3.300%, 23.200% 2.400%, 25.200% 1.600%, 27.200% 0.900%, 29.300% 0.400%, 31.400% -0.000%, 33.500% -0.200%, 35.500% 0.000%, 37.500% 0.100%, 39.500% 0.400%, 41.500% 0.900%, 43.400% 1.500%, 45.300% 2.300%, 47.200% 3.200%, 49.100% 4.200%, 51.000% 5.300%, 52.900% 6.500%, 54.800% 7.800%, 56.700% 9.200%, 58.600% 10.700%, 60.500% 12.200%, 62.400% 13.700%, 64.400% 15.200%, 66.400% 16.800%, 68.400% 18.300%, 70.400% 19.900%);
                                                            -webkit-clip-path: polygon(70.400% 19.900%, 72.500% 21.400%, 74.600% 22.900%, 76.800% 24.300%, 79.000% 25.700%, 81.100% 27.100%, 83.200% 28.500%, 85.300% 29.900%, 87.300% 31.400%, 89.200% 32.900%, 91.000% 34.400%, 92.700% 35.900%, 94.200% 37.500%, 95.600% 39.100%, 96.800% 40.800%, 97.800% 42.500%, 98.600% 44.300%, 99.200% 46.200%, 99.600% 48.200%, 99.800% 50.200%, 99.800% 52.200%, 99.600% 54.300%, 99.300% 56.400%, 98.800% 58.500%, 98.100% 60.600%, 97.300% 62.600%, 96.300% 64.600%, 95.200% 66.500%, 94.000% 68.400%, 92.700% 70.200%, 91.200% 71.900%, 89.600% 73.500%, 87.900% 74.900%, 86.100% 76.200%, 84.300% 77.400%, 82.400% 78.500%, 80.400% 79.500%, 78.400% 80.400%, 76.300% 81.200%, 74.200% 82.000%, 72.000% 82.700%, 69.800% 83.400%, 67.600% 84.100%, 65.300% 84.800%, 63.000% 85.500%, 60.700% 86.200%, 58.400% 86.900%, 56.100% 87.700%, 53.800% 88.600%, 51.600% 89.500%, 49.400% 90.500%, 47.200% 91.500%, 45.000% 92.600%, 42.900% 93.700%, 40.800% 94.700%, 38.700% 95.700%, 36.600% 96.600%, 34.600% 97.500%, 32.600% 98.300%, 30.700% 99.000%, 28.800% 99.500%, 26.900% 99.900%, 25.100% 100.100%, 23.300% 100.100%, 21.600% 99.900%, 19.900% 99.500%, 18.300% 98.900%, 16.700% 98.100%, 15.200% 97.100%, 13.800% 95.900%, 12.400% 94.600%, 11.100% 93.200%, 9.800% 91.600%, 8.600% 89.900%, 7.500% 88.100%, 6.500% 86.300%, 5.500% 84.400%, 4.600% 82.500%, 3.800% 80.500%, 3.100% 78.500%, 2.400% 76.500%, 1.800% 74.500%, 1.300% 72.500%, 0.900% 70.500%, 0.500% 68.500%, 0.200% 66.500%, 0.000% 64.500%, -0.200% 62.500%, -0.300% 60.500%, 0.000% 58.700%, 0.000% 56.700%, 0.000% 54.700%, 0.000% 52.700%, 0.100% 50.700%, 0.200% 48.700%, 0.300% 46.700%, 0.400% 44.600%, 0.600% 42.500%, 0.800% 40.400%, 1.000% 38.300%, 1.300% 36.200%, 1.600% 34.100%, 1.900% 32.000%, 2.300% 29.900%, 2.800% 27.800%, 3.300% 25.800%, 3.900% 23.800%, 4.600% 21.800%, 5.400% 19.900%, 6.300% 18.000%, 7.300% 16.200%, 8.400% 14.400%, 9.600% 12.700%, 11.000% 11.100%, 12.500% 9.600%, 14.100% 8.200%, 15.800% 6.800%, 17.600% 5.500%, 19.400% 4.300%, 21.300% 3.300%, 23.200% 2.400%, 25.200% 1.600%, 27.200% 0.900%, 29.300% 0.400%, 31.400% -0.000%, 33.500% -0.200%, 35.500% 0.000%, 37.500% 0.100%, 39.500% 0.400%, 41.500% 0.900%, 43.400% 1.500%, 45.300% 2.300%, 47.200% 3.200%, 49.100% 4.200%, 51.000% 5.300%, 52.900% 6.500%, 54.800% 7.800%, 56.700% 9.200%, 58.600% 10.700%, 60.500% 12.200%, 62.400% 13.700%, 64.400% 15.200%, 66.400% 16.800%, 68.400% 18.300%, 70.400% 19.900%);
                                                            background: linear-gradient(45deg, #330252 0%, 50%, #330252 100%);

                                                        }

                                                        #uc_blob_shapes_elementor_f8230d2 {
                                                            aspect-ratio: 1 / 1;
                                                            width: 100%;

                                                        }

                                                        .ue-blob-text-holder {
                                                            position: absolute;
                                                            top: 0px;
                                                            left: 0px;
                                                            right: 0px;
                                                            bottom: 0px;
                                                            width: 100%;
                                                            height: 100%;
                                                            z-index: 2;
                                                            display: flex;
                                                            justify-content: center;
                                                            flex-direction: column;
                                                        }

                                                        .ue_blob_inside {
                                                            position: relative;
                                                        }
                                                        </style>

                                                        <div id="uc_blob_shapes_elementor_f8230d2_justification"
                                                            class="ue-blob-wrapper">
                                                            <div id="uc_blob_shapes_elementor_f8230d2_size"
                                                                class="ue_blob_inside">

                                                                <div id="uc_blob_shapes_elementor_f8230d2"
                                                                    style="background-image:url()" class="blob"></div>
                                                                <div class="ue-blob-text-holder">
                                                                    <div class="ue-blob-title">Total Users</div>
                                                                    <div class="ue-blob-text">{{ $users }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end Blob Shapes -->
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-4128fae elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="4128fae" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https://wiseadvizor.com/wp-content/uploads/2023/06/how-it-background#fromView=search&term=abstract&page=3&position=45&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
                    <div class="elementor-background-video-container">
                        <div class="elementor-background-video-embed"></div>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a86ce31"
                            data-id="a86ce31" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-e08eaf8 elementor-invisible elementor-widget elementor-widget-heading"
                                    data-id="e08eaf8" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h4 class="elementor-heading-title elementor-size-default">How it works</h4>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-68748a9 elementor-widget elementor-widget-video"
                                    data-id="68748a9" data-element_type="widget"
                                    data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;play_on_mobile&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;}"
                                    data-widget_type="video.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                        /*! elementor - v3.14.0 - 26-06-2023 */
                                        .elementor-widget-video .elementor-widget-container {
                                            overflow: hidden;
                                            transform: translateZ(0)
                                        }

                                        .elementor-widget-video .elementor-wrapper {
                                            aspect-ratio: var(--video-aspect-ratio)
                                        }

                                        .elementor-widget-video .elementor-wrapper iframe,
                                        .elementor-widget-video .elementor-wrapper video {
                                            height: 100%;
                                            width: 100%;
                                            display: flex;
                                            border: none;
                                            background-color: #000
                                        }

                                        @supports not (aspect-ratio:1/1) {
                                            .elementor-widget-video .elementor-wrapper {
                                                position: relative;
                                                overflow: hidden;
                                                height: 0;
                                                padding-bottom: calc(100% / var(--video-aspect-ratio))
                                            }

                                            .elementor-widget-video .elementor-wrapper iframe,
                                            .elementor-widget-video .elementor-wrapper video {
                                                position: absolute;
                                                top: 0;
                                                right: 0;
                                                bottom: 0;
                                                left: 0
                                            }
                                        }

                                        .elementor-widget-video .elementor-open-inline .elementor-custom-embed-image-overlay {
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            width: 100%;
                                            height: 100%;
                                            background-size: cover;
                                            background-position: 50%
                                        }

                                        .elementor-widget-video .elementor-custom-embed-image-overlay {
                                            cursor: pointer;
                                            text-align: center
                                        }

                                        .elementor-widget-video .elementor-custom-embed-image-overlay:hover .elementor-custom-embed-play i {
                                            opacity: 1
                                        }

                                        .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                            display: block;
                                            width: 100%
                                        }

                                        .elementor-widget-video .e-hosted-video .elementor-video {
                                            -o-object-fit: cover;
                                            object-fit: cover
                                        }

                                        .e-con-inner>.elementor-widget-video,
                                        .e-con>.elementor-widget-video {
                                            width: var(--container-widget-width);
                                            --flex-grow: var(--container-widget-flex-grow)
                                        }
                                        </style>
                                        <div class="e-hosted-video elementor-wrapper elementor-open-inline">
                                            <video class="elementor-video"
                                                src="{{ asset('public/wp-content/uploads/2023/06/Blue-Liquid-Art-Design-Gallery-Intro-Video.mp4') }}"
                                                autoplay="" loop="" muted="muted" playsinline=""
                                                controlslist="nodownload"></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-c6fda76 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="c6fda76" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9f6496a"
                            data-id="9f6496a" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-5a907eb elementor-invisible elementor-widget elementor-widget-heading"
                                    data-id="5a907eb" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Our Expertise</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-a252efb elementor-widget elementor-widget-qi_addons_for_elementor_clients_slider"
                                    data-id="a252efb" data-element_type="widget"
                                    data-widget_type="qi_addons_for_elementor_clients_slider.default">
                                    <div class="elementor-widget-container">
                                        <div class="qodef-shortcode qodef-m  qodef-qi-clients-slider  qodef--hover-roll-horizontal   qodef-qi-grid qodef-qi-swiper-container        "
                                            data-options="{&quot;direction&quot;:&quot;horizontal&quot;,&quot;slidesPerView&quot;:&quot;8&quot;,&quot;spaceBetween&quot;:10,&quot;spaceBetweenTablet&quot;:30,&quot;spaceBetweenMobile&quot;:30,&quot;effect&quot;:&quot;&quot;,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;centeredSlides&quot;:true,&quot;speed&quot;:&quot;2000&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;outsideNavigation&quot;:&quot;no&quot;,&quot;outsidePagination&quot;:&quot;no&quot;,&quot;unique&quot;:&quot;1&quot;,&quot;partialValue&quot;:0,&quot;disablePartialValue&quot;:&quot;&quot;,&quot;customStages&quot;:true,&quot;slidesPerView1440&quot;:&quot;8&quot;,&quot;slidesPerView1366&quot;:&quot;6&quot;,&quot;slidesPerView1024&quot;:&quot;4&quot;,&quot;slidesPerView768&quot;:&quot;3&quot;,&quot;slidesPerView680&quot;:&quot;2&quot;,&quot;slidesPerView480&quot;:&quot;2&quot;}">
                                            <div class="swiper-wrapper">
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/sales-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Sales']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Sales
                                                            </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/validation-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Idea Validation']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Idea Validation
                                                            </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/PMF-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['product-market-fit']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Product Market
                                                            </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/marketing-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Marketing']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Marketing
                                                            </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/leadership-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Leadership']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Leadership
                                                            </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-23f47c8 elementor-widget elementor-widget-qi_addons_for_elementor_clients_slider"
                                    data-id="23f47c8" data-element_type="widget"
                                    data-widget_type="qi_addons_for_elementor_clients_slider.default">
                                    <div class="elementor-widget-container">
                                        <div class="qodef-shortcode qodef-m  qodef-qi-clients-slider  qodef--hover-roll-horizontal   qodef-qi-grid qodef-qi-swiper-container        "
                                            data-options="{&quot;direction&quot;:&quot;horizontal&quot;,&quot;slidesPerView&quot;:&quot;8&quot;,&quot;spaceBetween&quot;:10,&quot;spaceBetweenTablet&quot;:30,&quot;spaceBetweenMobile&quot;:30,&quot;effect&quot;:&quot;&quot;,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;centeredSlides&quot;:true,&quot;speed&quot;:&quot;2000&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;outsideNavigation&quot;:&quot;no&quot;,&quot;outsidePagination&quot;:&quot;no&quot;,&quot;unique&quot;:&quot;2&quot;,&quot;partialValue&quot;:0,&quot;disablePartialValue&quot;:&quot;&quot;,&quot;customStages&quot;:true,&quot;slidesPerView1440&quot;:&quot;8&quot;,&quot;slidesPerView1366&quot;:&quot;6&quot;,&quot;slidesPerView1024&quot;:&quot;4&quot;,&quot;slidesPerView768&quot;:&quot;3&quot;,&quot;slidesPerView680&quot;:&quot;2&quot;,&quot;slidesPerView480&quot;:&quot;2&quot;}">
                                            <div class="swiper-wrapper">
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/funds-raise-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Fund raising']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Fund raising
                                                            </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/network-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Networking']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Networking </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/roadmap-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Business Strategy']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Business Strategy
                                                            </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/Price-strategy-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Pricing Strategy']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Pricing Strategy
                                                            </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/social-media_-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Social Media']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Social Media
                                                            </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-e496a5a elementor-widget elementor-widget-qi_addons_for_elementor_clients_slider"
                                    data-id="e496a5a" data-element_type="widget"
                                    data-widget_type="qi_addons_for_elementor_clients_slider.default">
                                    <div class="elementor-widget-container">
                                        <div class="qodef-shortcode qodef-m  qodef-qi-clients-slider  qodef--hover-roll-horizontal   qodef-qi-grid qodef-qi-swiper-container        "
                                            data-options="{&quot;direction&quot;:&quot;horizontal&quot;,&quot;slidesPerView&quot;:&quot;8&quot;,&quot;spaceBetween&quot;:10,&quot;spaceBetweenTablet&quot;:30,&quot;spaceBetweenMobile&quot;:30,&quot;effect&quot;:&quot;&quot;,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;centeredSlides&quot;:true,&quot;speed&quot;:&quot;2000&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;outsideNavigation&quot;:&quot;no&quot;,&quot;outsidePagination&quot;:&quot;no&quot;,&quot;unique&quot;:&quot;3&quot;,&quot;partialValue&quot;:0,&quot;disablePartialValue&quot;:&quot;&quot;,&quot;customStages&quot;:true,&quot;slidesPerView1440&quot;:&quot;8&quot;,&quot;slidesPerView1366&quot;:&quot;6&quot;,&quot;slidesPerView1024&quot;:&quot;4&quot;,&quot;slidesPerView768&quot;:&quot;3&quot;,&quot;slidesPerView680&quot;:&quot;2&quot;,&quot;slidesPerView480&quot;:&quot;2&quot;}">
                                            <div class="swiper-wrapper">
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/CC-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Content creation']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Content creation </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/seo-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['SEO']) }}">
                                                            <h5 class="qodef-e-title">
                                                                SEO </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/procurement-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a
                                                            href="{{ route('browseMentor', ['Operations and logistics']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Operations </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/risk-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Risk Management']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Risk Management </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/attraction-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Ads Strategy']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Ads Strategy </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-496f21f elementor-widget elementor-widget-qi_addons_for_elementor_clients_slider"
                                    data-id="496f21f" data-element_type="widget"
                                    data-widget_type="qi_addons_for_elementor_clients_slider.default">
                                    <div class="elementor-widget-container">
                                        <div class="qodef-shortcode qodef-m  qodef-qi-clients-slider  qodef--hover-roll-horizontal   qodef-qi-grid qodef-qi-swiper-container        "
                                            data-options="{&quot;direction&quot;:&quot;horizontal&quot;,&quot;slidesPerView&quot;:&quot;8&quot;,&quot;spaceBetween&quot;:10,&quot;spaceBetweenTablet&quot;:30,&quot;spaceBetweenMobile&quot;:30,&quot;effect&quot;:&quot;&quot;,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;centeredSlides&quot;:true,&quot;speed&quot;:&quot;2000&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;outsideNavigation&quot;:&quot;no&quot;,&quot;outsidePagination&quot;:&quot;no&quot;,&quot;unique&quot;:&quot;4&quot;,&quot;partialValue&quot;:0,&quot;disablePartialValue&quot;:&quot;&quot;,&quot;customStages&quot;:true,&quot;slidesPerView1440&quot;:&quot;8&quot;,&quot;slidesPerView1366&quot;:&quot;6&quot;,&quot;slidesPerView1024&quot;:&quot;4&quot;,&quot;slidesPerView768&quot;:&quot;3&quot;,&quot;slidesPerView680&quot;:&quot;2&quot;,&quot;slidesPerView480&quot;:&quot;2&quot;}">
                                            <div class="swiper-wrapper">
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/creative-mind-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Brand Building']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Brand Building </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/team-management-final-50x50.png') }}"
                                                                    alt="" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Technology']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Technology </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/valuation-final-50x50.png') }}"
                                                                    alt="Valuation" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Startup valuation']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Startup Valuation </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/icons8-final-50x50.png') }}"
                                                                    alt="Technology" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Technology']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Technology </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="qodef-e swiper-slide">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-images-holder">
                                                            <div class="qodef-e-main-image">
                                                                <img decoding="async"
                                                                    src="{{ asset('public/wp-content/uploads/2023/06/email-final-50x50.png') }}"
                                                                    alt="Email" width="50" height="50">
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('browseMentor', ['Email Marketing']) }}">
                                                            <h5 class="qodef-e-title">
                                                                Email marketing </h5>
                                                        </a>
                                                    </div>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-3cff520 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="3cff520" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f9daa91"
                            data-id="f9daa91" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-44e602b elementor-invisible elementor-widget elementor-widget-heading"
                                    data-id="44e602b" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Our Mentors</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-d617383 elementor-widget elementor-widget-shortcode"
                                    data-id="d617383" data-element_type="widget" data-widget_type="shortcode.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-shortcode">
                                            <div class="white"
                                                style="background:rgba(0,0,0,0); border:solid 0px rgba(0,0,0,0); border-radius:0px; padding:0px 0px 0px 0px; overflow:hidden;">
                                                <div id="slider_1094"
                                                    class="owl-carousel sa_owl_theme autohide-arrows showcase_tablet showcase_hide_mobile"
                                                    data-slider-id="slider_1094"
                                                    style="visibility:hidden; width:120%; left:-10%; --widthtab:130%; --lefttab:-15%;">
                                                    @foreach($mentors as $mentor)
                                                    <div id="slider_1094_slide01" class="sa_hover_container"
                                                        style="padding:5% 5%; margin:0px 0%;">
                                                        <p></p>
                                                        <div data-elementor-type="section" data-elementor-id="934"
                                                            class="elementor elementor-934">
                                                            <div class="elementor-section-wrap">
                                                                <section
                                                                    class="elementor-section elementor-top-section elementor-element elementor-element-15dd6e02 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                    data-id="15dd6e02" data-element_type="section">
                                                                    <div
                                                                        class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-33aaae53"
                                                                            data-id="33aaae53"
                                                                            data-element_type="column">
                                                                            <div
                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                <div class="elementor-element elementor-element-73b857db elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_clients_list"
                                                                                    data-id="73b857db"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="qi_addons_for_elementor_clients_list.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <div
                                                                                            class="qodef-shortcode qodef-m  qodef-qi-clients-list qodef-border--no    qodef-qi-grid qodef-layout--qi-columns  qodef-col-num--1   qodef-responsive--predefined">
                                                                                            <div
                                                                                                class="qodef-grid-inner">
                                                                                                <div
                                                                                                    class="qodef-e qodef-grid-item">
                                                                                                    <div
                                                                                                        class="qodef-e-inner">
                                                                                                        <div
                                                                                                            class="qodef-e-images-holder">
                                                                                                            <div
                                                                                                                class="qodef-e-main-image">
                                                                                                                <img width="300"
                                                                                                                    height="200"
                                                                                                                    src="{{ asset('public/wp-content/uploads/2023/06/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }}"
                                                                                                                    class="attachment-medium size-medium"
                                                                                                                    alt=""
                                                                                                                    decoding="async"
                                                                                                                    srcset="{{ asset('public/wp-content/uploads/2023/06/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }} 300w, {{ asset('public/wp-content/uploads/2023/06/') }}/{{ $mentor->metaData ? $mentor->metaData->pro_pic_1 : '' }}"
                                                                                                                    600w
                                                                                                                    sizes="(max-width: 300px) 100vw, 300px">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <h5
                                                                                                            class="qodef-e-title">
                                                                                                            {{ $mentor->name }}
                                                                                                        </h5>
                                                                                                        <p
                                                                                                            class="qodef-e-text">
                                                                                                            {{ $mentor->metaData ? $mentor->metaData->designation : '' }}
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-452c0d8f elementor-widget elementor-widget-heading"
                                                                                    data-id="452c0d8f"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="heading.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <p
                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                            {{ $mentor->metaData ? Str::of($mentor->metaData->bio)->limit(100) : '' }}
                            
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <section
                                                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-d375fb7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                    data-id="d375fb7"
                                                                                    data-element_type="section">
                                                                                    <div
                                                                                        class="elementor-container elementor-column-gap-default">
                                                                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8b82564" data-id="8b82564"  data-element_type="column">
                                                                                            
                                                                                           
                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                            @php
                                                                                                               $expertise =  $mentor->metaData ? $mentor->metaData->expertise : '';                                                                 
                                                                                                               $decoded = json_decode($expertise,true);
                                                                                                            @endphp
                                                                                                <div class="elementor-element elementor-element-4f32c92 elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="4f32c92" data-element_type="widget" data-widget_type="button.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div style="display:flex; justify-content:space-between;">
                                                                                                            @foreach($decoded as $d)
                                                                                                               @foreach($d as $k => $v) 
                                                                                                                  <span class="badge badge-pill badge-warning">{{ $v }}</span>
                                                                                                               @endforeach    
                                                                                                            @endforeach
                                                                                                            <!-- <span
                                                                                                                class="badge badge-pill badge-warning">{{ $expert->expertise }}</span> -->
                                                                                                        </div>
                                                                                                        <!-- <div
                                                                                                            class="elementor-button-wrapper">
                                                                                                            <a class="elementor-button elementor-button-link elementor-size-xs"
                                                                                                                href="#">
                                                                                                                <span
                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                    <span
                                                                                                                        class="elementor-button-text">
                                                                                                                        {{ $expert->expertise }}
                                                                                                                    </span>
                                                                                                                </span>
                                                                                                            </a>
                                                                                                        </div> -->
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- <div class="elementor-element elementor-element-27f7170 elementor-widget__width-auto elementor-widget elementor-widget-button"
                                                                                                data-id="27f7170"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="button.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-button-wrapper">
                                                                                                        <a class="elementor-button elementor-button-link elementor-size-xs"
                                                                                                            href="#">
                                                                                                            <span
                                                                                                                class="elementor-button-content-wrapper">
                                                                                                                <span
                                                                                                                    class="elementor-button-text">{{ $mentor->metaData ? $mentor->metaData->expertise : '' }}</span>
                                                                                                            </span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div> -->
                                                                                                <div class="elementor-element elementor-element-0e36f0d elementor-widget elementor-widget-heading"
                                                                                                    data-id="0e36f0d"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="heading.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <span
                                                                                                            class="elementor-heading-title elementor-size-small"><a
                                                                                                                href="{{ route('profile', [$mentor->id]) }}">View
                                                                                                                Profile</a></span>
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
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    <!-- <div id="slider_1094_slide02" class="sa_hover_container" style="padding:5% 5%; margin:0px 0%;">
<p>		</p>
<div data-elementor-type="section" data-elementor-id="1015" class="elementor elementor-1015">
		<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-ec46ec5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ec46ec5" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-853df66" data-id="853df66" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-52213e51 elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_clients_list" data-id="52213e51" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_scale_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;3.7&quot;,&quot;sizes&quot;:[]},&quot;motion_fx_scale_effect&quot;:&quot;yes&quot;,&quot;motion_fx_scale_direction&quot;:&quot;out-in-out&quot;,&quot;motion_fx_scale_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:&quot;20&quot;,&quot;end&quot;:&quot;80&quot;}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="qi_addons_for_elementor_clients_list.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-clients-list qodef-border--no    qodef-qi-grid qodef-layout--qi-columns  qodef-col-num--1   qodef-responsive--predefined">
	<div class="qodef-grid-inner">
		<div class="qodef-e qodef-grid-item">
	<div class="qodef-e-inner">
				<div class="qodef-e-images-holder">
							<div class="qodef-e-main-image">
					<img width="300" height="200" src="{{ asset('public/') }}wp-content/uploads/2023/06/istockphoto-1413766112-170667a-300x200.webp" class="attachment-medium size-medium" alt="" decoding="async" srcset="{{ asset('public/') }}wp-content/uploads/2023/06/istockphoto-1413766112-170667a-300x200.webp 300w, {{ asset('public/') }}wp-content/uploads/2023/06/istockphoto-1413766112-170667a.webp 509w" sizes="(max-width: 300px) 100vw, 300px">				</div>
								</div>
					<h5 class="qodef-e-title">
			Sanjiv Omar		</h5>
			<p class="qodef-e-text">
		CEO	</p>
			</div>
</div>
	</div>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-2ae99f80 elementor-widget elementor-widget-heading" data-id="2ae99f80" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_scale_effect&quot;:&quot;yes&quot;,&quot;motion_fx_scale_direction&quot;:&quot;in-out&quot;,&quot;motion_fx_scale_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:&quot;80&quot;,&quot;end&quot;:&quot;80&quot;}},&quot;motion_fx_scale_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;2&quot;,&quot;sizes&quot;:[]},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus nisl vitae magna pulvinar laoreet.</p>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-5d0a3cda elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5d0a3cda" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-41d0d563" data-id="41d0d563" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-764cb2e1 elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="764cb2e1" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-xs" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Marketing</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-2db71cae elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="2db71cae" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-xs" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Technology</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-ca6bd45 elementor-widget elementor-widget-heading" data-id="ca6bd45" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<span class="elementor-heading-title elementor-size-small"><a href="{{ asset('public/') }}profile/">View Profile</a></span>		</div>
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
		</div>
		</div>
<div id="slider_1094_slide03" class="sa_hover_container" style="padding:5% 5%; margin:0px 0%;">
<p>		</p>
<div data-elementor-type="section" data-elementor-id="941" class="elementor elementor-941">
		<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-4d919a6b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4d919a6b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-32637138" data-id="32637138" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-444cdd5c elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_clients_list" data-id="444cdd5c" data-element_type="widget" data-widget_type="qi_addons_for_elementor_clients_list.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-clients-list qodef-border--no    qodef-qi-grid qodef-layout--qi-columns  qodef-col-num--1   qodef-responsive--predefined">
	<div class="qodef-grid-inner">
		<div class="qodef-e qodef-grid-item">
	<div class="qodef-e-inner">
				<div class="qodef-e-images-holder">
							<div class="qodef-e-main-image">
					<img width="300" height="200" src="{{ asset('public/') }}wp-content/uploads/2023/06/istockphoto-1297832726-612x612-1-300x200.jpg" class="attachment-medium size-medium" alt="" decoding="async" srcset="{{ asset('public/') }}wp-content/uploads/2023/06/istockphoto-1297832726-612x612-1-300x200.jpg 300w, {{ asset('public/') }}wp-content/uploads/2023/06/istockphoto-1297832726-612x612-1.jpg 612w" sizes="(max-width: 300px) 100vw, 300px">				</div>
								</div>
					<h5 class="qodef-e-title">
			Maxime Moyson		</h5>
			<p class="qodef-e-text">
		Launch Engineer	</p>
			</div>
</div>
	</div>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-64917582 elementor-widget elementor-widget-heading" data-id="64917582" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus nisl vitae magna pulvinar laoreet.</p>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-b071bfe elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b071bfe" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-942d8da" data-id="942d8da" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-20f6200 elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="20f6200" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-xs" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Marketing</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2a0c422" data-id="2a0c422" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-011753f elementor-widget__width-initial elementor-widget elementor-widget-button" data-id="011753f" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-xs" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Technology</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<div class="elementor-element elementor-element-7ea6938 elementor-widget elementor-widget-heading" data-id="7ea6938" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<span class="elementor-heading-title elementor-size-small"><a href="{{ asset('public/') }}profile/">View Profile</a></span>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				</div>
		</div>
		</div>
<div id="slider_1094_slide04" class="sa_hover_container" style="padding:5% 5%; margin:0px 0%;">
<p>		</p>
<div data-elementor-type="section" data-elementor-id="934" class="elementor elementor-934">
		<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-15dd6e02 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="15dd6e02" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-33aaae53" data-id="33aaae53" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-73b857db elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_clients_list" data-id="73b857db" data-element_type="widget" data-widget_type="qi_addons_for_elementor_clients_list.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-clients-list qodef-border--no    qodef-qi-grid qodef-layout--qi-columns  qodef-col-num--1   qodef-responsive--predefined">
	<div class="qodef-grid-inner">
		<div class="qodef-e qodef-grid-item">
	<div class="qodef-e-inner">
				<div class="qodef-e-images-holder">
							<div class="qodef-e-main-image">
					<img width="300" height="200" src="{{ asset('public/') }}wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-300x200.webp" class="attachment-medium size-medium" alt="" decoding="async" srcset="{{ asset('public/') }}wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-300x200.webp 300w, {{ asset('public/') }}wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera.webp 600w" sizes="(max-width: 300px) 100vw, 300px">				</div>
								</div>
					<h5 class="qodef-e-title">
			Florian Weber		</h5>
			<p class="qodef-e-text">
		Ecommerce Consultant	</p>
			</div>
</div>
	</div>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-452c0d8f elementor-widget elementor-widget-heading" data-id="452c0d8f" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus nisl vitae magna pulvinar laoreet.</p>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-d375fb7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d375fb7" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8b82564" data-id="8b82564" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4f32c92 elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="4f32c92" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-xs" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Marketing</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-27f7170 elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="27f7170" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-xs" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Technology</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-0e36f0d elementor-widget elementor-widget-heading" data-id="0e36f0d" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<span class="elementor-heading-title elementor-size-small"><a href="{{ asset('public/') }}profile/">View Profile</a></span>		</div>
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
		</div>
		</div>
<div id="slider_1094_slide05" class="sa_hover_container" style="padding:5% 5%; margin:0px 0%;">
<p>		</p>
<div data-elementor-type="section" data-elementor-id="1015" class="elementor elementor-1015">
		<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-ec46ec5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ec46ec5" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-853df66" data-id="853df66" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-52213e51 elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_clients_list" data-id="52213e51" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_scale_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;3.7&quot;,&quot;sizes&quot;:[]},&quot;motion_fx_scale_effect&quot;:&quot;yes&quot;,&quot;motion_fx_scale_direction&quot;:&quot;out-in-out&quot;,&quot;motion_fx_scale_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:&quot;20&quot;,&quot;end&quot;:&quot;80&quot;}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="qi_addons_for_elementor_clients_list.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-clients-list qodef-border--no    qodef-qi-grid qodef-layout--qi-columns  qodef-col-num--1   qodef-responsive--predefined">
	<div class="qodef-grid-inner">
		<div class="qodef-e qodef-grid-item">
	<div class="qodef-e-inner">
				<div class="qodef-e-images-holder">
							<div class="qodef-e-main-image">
					<img width="300" height="200" src="{{ asset('public/') }}wp-content/uploads/2023/06/istockphoto-1413766112-170667a-300x200.webp" class="attachment-medium size-medium" alt="" decoding="async" srcset="{{ asset('public/') }}wp-content/uploads/2023/06/istockphoto-1413766112-170667a-300x200.webp 300w, {{ asset('public/') }}wp-content/uploads/2023/06/istockphoto-1413766112-170667a.webp 509w" sizes="(max-width: 300px) 100vw, 300px">				</div>
								</div>
					<h5 class="qodef-e-title">
			Sanjiv Omar		</h5>
			<p class="qodef-e-text">
		CEO	</p>
			</div>
</div>
	</div>
</div>
		</div>
				</div>
				<div class="elementor-element elementor-element-2ae99f80 elementor-widget elementor-widget-heading" data-id="2ae99f80" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_scale_effect&quot;:&quot;yes&quot;,&quot;motion_fx_scale_direction&quot;:&quot;in-out&quot;,&quot;motion_fx_scale_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:&quot;80&quot;,&quot;end&quot;:&quot;80&quot;}},&quot;motion_fx_scale_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;2&quot;,&quot;sizes&quot;:[]},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus nisl vitae magna pulvinar laoreet.</p>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-5d0a3cda elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5d0a3cda" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-41d0d563" data-id="41d0d563" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-764cb2e1 elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="764cb2e1" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-xs" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Marketing</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-2db71cae elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="2db71cae" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-xs" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Technology</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-ca6bd45 elementor-widget elementor-widget-heading" data-id="ca6bd45" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<span class="elementor-heading-title elementor-size-small"><a href="{{ asset('public/') }}profile/">View Profile</a></span>		</div>
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
		</div>
		</div>
<div id="slider_1094_slide06" class="sa_hover_container" style="padding:5% 5%; margin:0px 0%;">
<p>		</p>
<div data-elementor-type="section" data-elementor-id="941" class="elementor elementor-941">
		<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-4d919a6b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4d919a6b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-32637138" data-id="32637138" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-444cdd5c elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_clients_list" data-id="444cdd5c" data-element_type="widget" data-widget_type="qi_addons_for_elementor_clients_list.default">
				<div class="elementor-widget-container">
			<div class="qodef-shortcode qodef-m  qodef-qi-clients-list qodef-border--no    qodef-qi-grid qodef-layout--qi-columns  qodef-col-num--1   qodef-responsive--predefined">
	<div class="qodef-grid-inner">
		<div class="qodef-e qodef-grid-item">
	<div class="qodef-e-inner">
				<div class="qodef-e-images-holder">
							<div class="qodef-e-main-image">
					<img width="300" height="200" src="{{ asset('public/') }}wp-content/uploads/2023/06/istockphoto-1297832726-612x612-1-300x200.jpg" class="attachment-medium size-medium" alt="" decoding="async" srcset="{{ asset('public/') }}wp-content/uploads/2023/06/istockphoto-1297832726-612x612-1-300x200.jpg 300w, {{ asset('public/') }}wp-content/uploads/2023/06/istockphoto-1297832726-612x612-1.jpg 612w" sizes="(max-width: 300px) 100vw, 300px">				</div>
								</div>
					<h5 class="qodef-e-title">
			Maxime Moyson		</h5>
			<p class="qodef-e-text">
		Launch Engineer	</p>
			</div>
</div>
	</div>
</div> -->
                                                    <!-- </div>
				</div>
				<div class="elementor-element elementor-element-64917582 elementor-widget elementor-widget-heading" data-id="64917582" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus nisl vitae magna pulvinar laoreet.</p>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-b071bfe elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b071bfe" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-942d8da" data-id="942d8da" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-20f6200 elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="20f6200" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-xs" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Marketing</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2a0c422" data-id="2a0c422" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-011753f elementor-widget__width-initial elementor-widget elementor-widget-button" data-id="011753f" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a class="elementor-button elementor-button-link elementor-size-xs" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Technology</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<div class="elementor-element elementor-element-7ea6938 elementor-widget elementor-widget-heading" data-id="7ea6938" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<span class="elementor-heading-title elementor-size-small"><a href="{{ asset('public/') }}profile/">View Profile</a></span>		</div>
				</div>
					</div>
		</div>
		</div>
		</section>
				</div>
		</div>
		</div> -->
                                                </div>
                                                <div id="showcase_1094" class="showcase_nav owl-nav autohide_arrows">
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                            jQuery(document).ready(function() {
                                                jQuery('#slider_1094').owlCarousel({
                                                    responsive: {
                                                        0: {
                                                            items: 1
                                                        },
                                                        480: {
                                                            items: 1
                                                        },
                                                        768: {
                                                            items: 1
                                                        },
                                                        980: {
                                                            items: 2
                                                        },
                                                        1200: {
                                                            items: 3
                                                        },
                                                        1500: {
                                                            items: 3
                                                        }
                                                    },
                                                    autoplay: true,
                                                    autoplayTimeout: 5000,
                                                    autoplayHoverPause: true,
                                                    smartSpeed: 200,
                                                    fluidSpeed: 200,
                                                    autoplaySpeed: 200,
                                                    navSpeed: 200,
                                                    dotsSpeed: 200,
                                                    loop: true,
                                                    nav: false,
                                                    navText: ['Previous', 'Next'],
                                                    navContainer: '#showcase_1094',
                                                    dots: false,
                                                    responsiveRefreshRate: 200,
                                                    slideBy: 'page',
                                                    mergeFit: true,
                                                    autoHeight: false,
                                                    mouseDrag: false,
                                                    touchDrag: false
                                                });
                                                jQuery('#slider_1094').css('visibility', 'visible');
                                                sa_resize_slider_1094();
                                                window.addEventListener('resize', sa_resize_slider_1094);

                                                function sa_resize_slider_1094() {
                                                    var min_height = '50';
                                                    var win_width = jQuery(window).width();
                                                    var slider_width = jQuery('#slider_1094').width();
                                                    if (win_width < 480) {
                                                        var slide_width = slider_width / 1;
                                                    } else if (win_width < 768) {
                                                        var slide_width = slider_width / 1;
                                                    } else if (win_width < 980) {
                                                        var slide_width = slider_width / 2
                                                    } else if (win_width < 1200) {
                                                        var slide_width = slider_width / 3;
                                                    } else if (win_width < 1500) {
                                                        var slide_width = slider_width / 3;
                                                    } else {
                                                        var slide_width = slider_width / 3;
                                                    }
                                                    slide_width = Math.round(slide_width);
                                                    var slide_height = '0';
                                                    if (min_height == 'aspect43') {
                                                        slide_height = (slide_width / 4) * 3;
                                                        slide_height = Math.round(slide_height);
                                                    } else if (min_height == 'aspect169') {
                                                        slide_height = (slide_width / 16) * 9;
                                                        slide_height = Math.round(slide_height);
                                                    } else {
                                                        slide_height = (slide_width / 100) * min_height;
                                                        slide_height = Math.round(slide_height);
                                                    }
                                                    jQuery('#slider_1094 .owl-item .sa_hover_container').css(
                                                        'min-height', slide_height + 'px');
                                                }
                                                set_first_last_active_classes('slider_1094');
                                                jQuery('#slider_1094').on(
                                                    'translated.owl.carousel resized.owl.carousel',
                                                    function(event) {
                                                        set_first_last_active_classes('slider_1094');
                                                    });

                                                function set_first_last_active_classes(css_id) {
                                                    var total = jQuery(
                                                            '#slider_1094 .owl-stage .owl-item.active')
                                                        .length;
                                                    jQuery('#slider_1094 .owl-stage .owl-item').removeClass(
                                                        'sc_partial');
                                                    jQuery('#slider_1094 .owl-stage .owl-item.active').each(
                                                        function(
                                                            index) {
                                                            if (index === 0) {
                                                                jQuery(this).addClass('sc_partial');
                                                            }
                                                            if (index === total - 1 && total > 1) {
                                                                jQuery(this).addClass('sc_partial');
                                                            }
                                                        });
                                                }
                                                var owl_goto = jQuery('#slider_1094');
                                                jQuery('.slider_1094_goto1').click(function(event) {
                                                    owl_goto.trigger('to.owl.carousel', 0);
                                                });
                                                jQuery('.slider_1094_goto2').click(function(event) {
                                                    owl_goto.trigger('to.owl.carousel', 1);
                                                });
                                                jQuery('.slider_1094_goto3').click(function(event) {
                                                    owl_goto.trigger('to.owl.carousel', 2);
                                                });
                                                jQuery('.slider_1094_goto4').click(function(event) {
                                                    owl_goto.trigger('to.owl.carousel', 3);
                                                });
                                                jQuery('.slider_1094_goto5').click(function(event) {
                                                    owl_goto.trigger('to.owl.carousel', 4);
                                                });
                                                jQuery('.slider_1094_goto6').click(function(event) {
                                                    owl_goto.trigger('to.owl.carousel', 5);
                                                });
                                                var resize_1094 = jQuery('.owl-carousel');
                                                resize_1094.on('initialized.owl.carousel', function(e) {
                                                    if (typeof(Event) === 'function') {
                                                        window.dispatchEvent(new Event('resize'));
                                                    } else {
                                                        var evt = window.document.createEvent(
                                                            'UIEvents');
                                                        evt.initUIEvent('resize', true, false, window,
                                                            0);
                                                        window.dispatchEvent(evt);
                                                    }
                                                });
                                            });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-b0a6192 elementor-align-center elementor-widget elementor-widget-button"
                                    data-id="b0a6192" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="{{ route('browseMentor') }}">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">View More</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-df03b3c elementor-widget elementor-widget-ucaddon_uc_card_post_carousel"
                                    data-id="df03b3c" data-element_type="widget"
                                    data-widget_type="ucaddon_uc_card_post_carousel.default">
                                    <div class="elementor-widget-container">
                                        <!-- start Post Carousel Lite -->
                                        <link id="owl-carousel-css"
                                            href="{{ asset('public/wp-content/plugins/unlimited-elements-for-elementor/assets_libraries/owl-carousel-new/assets/owl.carousel.css') }}"
                                            type="text/css" rel="stylesheet">

                                        <style type="text/css">
                                        /* widget: Post Carousel Lite */

                                        #uc_uc_card_post_carousel_elementor_df03b3c * {
                                            box-sizing: border-box;
                                        }

                                        #uc_uc_card_post_carousel_elementor_df03b3c {
                                            position: relative;
                                            min-height: 1px;
                                        }

                                        #uc_uc_card_post_carousel_elementor_df03b3c .uc_image_carousel_content {
                                            text-align: center;
                                            display: flex;
                                            flex-flow: column nowrap;
                                        }

                                        #uc_uc_card_post_carousel_elementor_df03b3c .ue_post_carousel_item {
                                            overflow: hidden;

                                        }

                                        #uc_uc_card_post_carousel_elementor_df03b3c .ue_post_btn_holder {
                                            margin-top: auto;
                                        }

                                        #uc_uc_card_post_carousel_elementor_df03b3c .uc_more_btn {

                                            display: inline-block;
                                            text-align: center;
                                            text-decoration: none;
                                        }

                                        .uc_overlay_image_carousel .uc_more_btn {
                                            text-decoration: none;
                                            display: inline-block;
                                        }

                                        .uc_overlay_image_carousel .uc_post_title {
                                            font-size: 21px;
                                            text-decoration: none;
                                        }

                                        #uc_uc_card_post_carousel_elementor_df03b3c .owl-nav .owl-prev {
                                            position: absolute;
                                            display: inline-block;
                                            text-align: center;
                                        }

                                        #uc_uc_card_post_carousel_elementor_df03b3c .owl-nav .owl-next {
                                            position: absolute;
                                            display: inline-block;
                                            text-align: center;
                                        }

                                        #uc_uc_card_post_carousel_elementor_df03b3c .owl-dots {
                                            overflow: hidden;
                                            display: true !important;
                                            text-align: center;
                                        }

                                        #uc_uc_card_post_carousel_elementor_df03b3c .owl-dot {
                                            border-radius: 50%;
                                            display: inline-block;
                                        }
                                        </style>

                                        <div class="uc_overlay_image_carousel"
                                            id="uc_uc_card_post_carousel_elementor_df03b3c" data-custom-sethtml="true">
                                            <div class="uc_carousel owl-carousel owl-theme uc-items-wrapper">

                                            </div>
                                        </div>

                                        <!-- --->
                                        <!-- --->
                                        <!-- --->
                                        <!-- end Post Carousel Lite -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-dcb8db5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="dcb8db5" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ff760db"
                            data-id="ff760db" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4e4b0af elementor-widget elementor-widget-heading"
                                    data-id="4e4b0af" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">What Our Mentees Say
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-0deeba2 elementor-widget elementor-widget-heading"
                                    data-id="0deeba2" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">
                                            {{ Str::of($reviews->review)->limit(50) }}
                                        </p><br />
                                        <footer>
                                            <cite class="elementor-blockquote__author">___
                                                {{ $reviews->user->name }}</cite>
                                        </footer>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-b303a45 elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="b303a45" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-adc7191"
                                            data-id="adc7191" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-405616b elementor-widget-mobile__width-initial elementor-widget elementor-widget-image"
                                                    data-id="405616b" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        @if ($reviews->user->metaData)
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/') }}/{{ $reviews->user->metaData ? $reviews->user->metaData->profile_pic : '' }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt="" srcset="{{ asset('public/assets/img/') }}/{{ $reviews->user->metaData ? $reviews->user->metaData->profile_pic : '' }}
                                                    450w" sizes="(max-width: 150px) 100vw, 150px">
                                                        <!-- <img src="{{ asset('public/assets/img/') }}/{{ Auth::user() ? Auth::user()->metaData->profile_pic : '' }}"
                                                    class="rounded-circle" height="8" width="37"
                                                    alt="Black and White Portrait of a Man" loading="lazy" /> -->
                                                        @else
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt="" srcset="{{ asset('public/assets/img/blank-profile-picture.png') }}, {{ asset('public/assets/img/blank-profile-picture.png') }} 300w, {{ asset('public/assets/img/blank-profile-picture.png') }} 600w, {{ asset('public/assets/img/blank-profile-picture.png') }} 500w, {{ asset('public/assets/img/blank-profile-picture.png') }}
                                                    450w" sizes="(max-width: 150px) 100vw, 150px">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7b394ae elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                                                    data-id="7b394ae" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            {{ $reviews->user->name }}</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-2007f34 elementor-widget elementor-widget-heading"
                                                    data-id="2007f34" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">
                                                            {{ $reviews->user->metaData->designation }}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-be768bc elementor-widget elementor-widget-heading"
                                                    data-id="be768bc" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            {{ Str::of($reviews->review)->limit(50) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-78b6efc"
                                            data-id="78b6efc" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-74bcc36"
                                            data-id="74bcc36" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6bc782c elementor-widget-mobile__width-initial elementor-widget elementor-widget-image"
                                                    data-id="6bc782c" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        @if($reviews->user->metaData)
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/') }}/{{ $reviews->user->metaData ? $reviews->user->metaData->profile_pic : '' }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt=""
                                                            srcset="{{ asset('public/assets/img/') }}/{{ $reviews->user->metaData ? $reviews->user->metaData->profile_pic : '' }}"
                                                            450w sizes="(max-width: 150px) 100vw, 150px">
                                                        <!-- <img src="{{ asset('public/assets/img/') }}/{{ Auth::user() ? Auth::user()->metaData->profile_pic : '' }}"
                                                    class="rounded-circle" height="8" width="37"
                                                    alt="Black and White Portrait of a Man" loading="lazy" /> -->
                                                        @else
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt="" srcset="{{ asset('public/assets/img/blank-profile-picture.png') }}, {{ asset('public/assets/img/blank-profile-picture.png') }} 300w, {{ asset('public/assets/img/blank-profile-picture.png') }} {{ asset('public/assets/img/blank-profile-picture.png') }} 600w, {{ asset('public/assets/img/blank-profile-picture.png') }} 500w, {{ asset('public/assets/img/blank-profile-picture.png') }}
                                                    450w" sizes="(max-width: 150px) 100vw, 150px">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8290913 elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                                                    data-id="8290913" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            {{ $reviews->user->name }}</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-0ab35dc elementor-widget elementor-widget-heading"
                                                    data-id="0ab35dc" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">
                                                            {{ $reviews->user->metaData->designation }}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-0ab1bd0 elementor-widget elementor-widget-heading"
                                                    data-id="0ab1bd0" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            {{ Str::of($reviews->review)->limit(50) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-f8de82a elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="f8de82a" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-283cc6e"
                                    data-id="283cc6e" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-31137f4 elementor-widget-mobile__width-initial elementor-widget elementor-widget-image"
                                            data-id="31137f4" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img decoding="async" width="150" height="150"
                                                    src="{{ asset('public/wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-150x150.webp') }}"
                                                    class="attachment-thumbnail size-thumbnail wp-image-601" alt=""
                                                    srcset="{{ asset('public/wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-150x150.webp') }}, {{ asset('public/wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-150x150.webp') }} 300w, {{ asset('public/wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-150x150.webp') }}wp-content/uploads/2023/06/elementor/thumbs/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-q7ygj334537ed9shujtxi1a7bnczcz4sjw0nxb5fn4.webp 600w, {{ asset('public/wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-150x150.webp') }} 500w, {{ asset('public/wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-150x150.webp') }}"
                                                    450w sizes="(max-width: 150px) 100vw, 150px">
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-ccd0b5a elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                                            data-id="ccd0b5a" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">Alen</h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-c3f8de7 elementor-widget elementor-widget-heading"
                                            data-id="c3f8de7" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h6 class="elementor-heading-title elementor-size-default">Marketing
                                                    pro
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d2aa41b elementor-widget elementor-widget-heading"
                                            data-id="d2aa41b" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="elementor-heading-title elementor-size-default">Lorem
                                                    ipsum
                                                    dolor sit amet dsdfsf sdfdf sdfsfd</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-dd8dac8 elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="dd8dac8" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1d68055"
                                            data-id="1d68055" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-c86512d elementor-widget-mobile__width-initial elementor-widget elementor-widget-image"
                                                    data-id="c86512d" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        @if ($review2->user->metaData)
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/') }}/{{ $review2->user->metaData ? $review2->user->metaData->profile_pic : '' }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt=""
                                                            srcset="{{ asset('public/assets/img/') }}/{{ $review2->user->metaData ? $review2->user->metaData->profile_pic : '' }}, {{ asset('public/assets/img/') }}/{{ $review2->user->metaData ? $review2->user->metaData->profile_pic : '' }} 300w, {{ asset('public/assets/img/') }}/{{ $review2->user->metaData ? $review2->user->metaData->profile_pic : '' }} 600w, {{ asset('public/assets/img/') }}/{{ $review2->user->metaData ? $review2->user->metaData->profile_pic : '' }} 500w, {{ asset('public/assets/img/') }}/{{ $review2->user->metaData ? $review2->user->metaData->profile_pic : '' }}">
                                                        @else
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt="" srcset="{{ asset('public/assets/img/blank-profile-picture.png') }}, {{ asset('public/assets/img/blank-profile-picture.png') }} 300w, {{ asset('public/assets/img/blank-profile-picture.png') }} 600w, {{ asset('public/assets/img/blank-profile-picture.png') }} 500w, {{ asset('public/assets/img/blank-profile-picture.png') }}
                                                    450w" sizes="(max-width: 150px) 100vw, 150px">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a8c414f elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                                                    data-id="a8c414f" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            {{ $review2->name }}</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-64263e0 elementor-widget elementor-widget-heading"
                                                    data-id="64263e0" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">
                                                            {{ $review2->user->metaData->designation }}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-f9164c6 elementor-widget elementor-widget-heading"
                                                    data-id="f9164c6" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            {{  Str::of($review2->review)->limit(50) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9aae013"
                                            data-id="9aae013" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-aa43f1f"
                                            data-id="aa43f1f" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-9e2f95c elementor-widget-mobile__width-initial elementor-widget elementor-widget-image"
                                                    data-id="9e2f95c" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        @if ($review3->user->metaData)
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/') }}/{{ $review3->user->metaData ? $review3->user->metaData->profile_pic : '' }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt=""
                                                            srcset="{{ asset('public/assets/img/') }}/{{ $review3->user->metaData ? $review3->user->metaData->profile_pic : '' }}, {{ asset('public/assets/img/') }}/{{ $review3->user->metaData ? $review3->user->metaData->profile_pic : '' }} 300w, {{ asset('public/assets/img/') }}/{{ $review3->user->metaData ? $review3->user->metaData->profile_pic : '' }} 600w, {{ asset('public/assets/img/') }}/{{ $review3->user->metaData ? $review3->user->metaData->profile_pic : '' }} 500w, {{ asset('public/assets/img/') }}/{{ $review3->user->metaData ? $review3->user->metaData->profile_pic : '' }}"
                                                            450w sizes="(max-width: 150px) 100vw, 150px">
                                                        @else
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt="" srcset="{{ asset('public/assets/img/blank-profile-picture.png') }}, {{ asset('public/assets/img/blank-profile-picture.png') }} 300w, {{ asset('public/assets/img/blank-profile-picture.png') }} 600w, {{ asset('public/assets/img/blank-profile-picture.png') }} 500w, {{ asset('public/assets/img/blank-profile-picture.png') }}
                                                    450w" sizes="(max-width: 150px) 100vw, 150px">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-cd8caff elementor-widget-mobile__width-initial elementor-widget elementor-widget-heading"
                                                    data-id="cd8caff" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            {{ $review3->name }}</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3be270d elementor-widget elementor-widget-heading"
                                                    data-id="3be270d" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">
                                                            {{ $review3->user->metaData->designation }}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-c6c5de6 elementor-widget elementor-widget-heading"
                                                    data-id="c6c5de6" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            {{ Str::of($review3->review)->limit(50) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c596b79"
                            data-id="c596b79" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-0cd4b9f elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="0cd4b9f" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0144146"
                                            data-id="0144146" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-d5fadc5 elementor-widget elementor-widget-image"
                                                    data-id="d5fadc5" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        @if ($review4->user->metaData->profile_pic)
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/') }}/{{ $review4->user->metaData ? $review4->user->metaData->profile_pic : '' }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt=""
                                                            srcset="{{ asset('public/assets/img/') }}/{{ $review4->user->metaData ? $review4->user->metaData->profile_pic : '' }}, {{ asset('public/assets/img/') }}/{{ $review4->user->metaData ? $review4->user->metaData->profile_pic : '' }} 300w, {{ asset('public/assets/img/') }}/{{ $review4->user->metaData ? $review4->user->metaData->profile_pic : '' }} 600w, {{ asset('public/assets/img/') }}/{{ $review4->user->metaData ? $review4->user->metaData->profile_pic : '' }} 500w, {{ asset('public/assets/img/') }}/{{ $review4->user->metaData ? $review4->user->metaData->profile_pic : '' }}"
                                                            450w sizes="(max-width: 150px) 100vw, 150px">
                                                        @else
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt="" srcset="{{ asset('public/assets/img/blank-profile-picture.png') }}, {{ asset('public/assets/img/blank-profile-picture.png') }} 300w, {{ asset('public/assets/img/blank-profile-picture.png') }} 600w, {{ asset('public/assets/img/blank-profile-picture.png') }} 500w, {{ asset('public/assets/img/blank-profile-picture.png') }}
                                                    450w" sizes="(max-width: 150px) 100vw, 150px">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-cf2c223 elementor-widget elementor-widget-heading"
                                                    data-id="cf2c223" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            {{ $review4->user->name }}</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-b5effb5 elementor-widget elementor-widget-heading"
                                                    data-id="b5effb5" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">
                                                            {{ $review4->user->metaData->designation }} </h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-62e39a3 elementor-widget elementor-widget-heading"
                                                    data-id="62e39a3" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            {{ Str::of($review4->review)->limit(50) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c8da375"
                                            data-id="c8da375" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-12d68ca"
                                            data-id="12d68ca" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-1e158b0 elementor-widget__width-initial elementor-widget elementor-widget-image"
                                                    data-id="1e158b0" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        @if ($review5->user->metaData->profile_pic)
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/') }}/{{ $review5->user->metaData ? $review5->user->metaData->profile_pic : '' }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt=""
                                                            srcset="{{ asset('public/assets/img/') }}/{{ $review5->user->metaData ? $review5->user->metaData->profile_pic : '' }}, {{ asset('public/assets/img/') }}/{{ $review5->user->metaData ? $review5->user->metaData->profile_pic : '' }} 300w, {{ asset('public/assets/img/') }}/{{ $review5->user->metaData ? $review5->user->metaData->profile_pic : '' }} 600w, {{ asset('public/assets/img/') }}/{{ $review5->user->metaData ? $review5->user->metaData->profile_pic : '' }} 500w, {{ asset('public/assets/img/') }}/{{ $review5->user->metaData ? $review5->user->metaData->profile_pic : '' }}"
                                                            450w sizes="(max-width: 150px) 100vw, 150px">
                                                        @else
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt="" srcset="{{ asset('public/assets/img/blank-profile-picture.png') }}, {{ asset('public/assets/img/blank-profile-picture.png') }} 300w, {{ asset('public/assets/img/blank-profile-picture.png') }} 600w, {{ asset('public/assets/img/blank-profile-picture.png') }} 500w, {{ asset('public/assets/img/blank-profile-picture.png') }}
                                                    450w" sizes="(max-width: 150px) 100vw, 150px">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-441c424 elementor-widget elementor-widget-heading"
                                                    data-id="441c424" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            {{ $review5->user->name }}</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a185d6f elementor-widget elementor-widget-heading"
                                                    data-id="a185d6f" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">
                                                            {{ $review5->user->metaData->designation }}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-79dba7e elementor-widget elementor-widget-heading"
                                                    data-id="79dba7e" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            {{ Str::of($review5->review)->limit(50) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-d356d3f elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="d356d3f" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d22268a"
                                            data-id="d22268a" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6d758cd elementor-widget__width-initial elementor-widget elementor-widget-image"
                                                    data-id="6d758cd" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        @if ($review2->user->metaData->profile_pic)
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/') }}/{{ $review2->user->metaData ? $review2->user->metaData->profile_pic : '' }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt=""
                                                            srcset="{{ asset('public/assets/img/') }}/{{ $review2->user->metaData ? $review2->user->metaData->profile_pic : '' }}, {{ asset('public/assets/img/') }}/{{ $review2->user->metaData ? $review2->user->metaData->profile_pic : '' }} 300w, {{ asset('public/assets/img/') }}/{{ $review2->user->metaData ? $review2->user->metaData->profile_pic : '' }} 600w, {{ asset('public/assets/img/') }}/{{ $review2->user->metaData ? $review2->user->metaData->profile_pic : '' }} 500w, {{ asset('public/assets/img/') }}/{{ $review2->user->metaData ? $review2->user->metaData->profile_pic : '' }}"
                                                            450w sizes="(max-width: 150px) 100vw, 150px">
                                                        @else
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt="" srcset="{{ asset('public/assets/img/blank-profile-picture.png') }}, {{ asset('public/assets/img/blank-profile-picture.png') }} 300w, {{ asset('public/assets/img/blank-profile-picture.png') }} 600w, {{ asset('public/assets/img/blank-profile-picture.png') }} 500w, {{ asset('public/assets/img/blank-profile-picture.png') }}
                                                    450w" sizes="(max-width: 150px) 100vw, 150px">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5620f48 elementor-widget elementor-widget-heading"
                                                    data-id="5620f48" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            {{ $review2->user->name }}</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d9e1cb7 elementor-widget elementor-widget-heading"
                                                    data-id="d9e1cb7" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">
                                                            {{ $review5->user->metaData->designation }}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-14913d3 elementor-widget elementor-widget-heading"
                                                    data-id="14913d3" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            {{ Str::of($review2->review)->limit(50) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-dc1b235"
                                            data-id="dc1b235" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8a174d4"
                                            data-id="8a174d4" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-b4be166 elementor-widget__width-initial elementor-widget elementor-widget-image"
                                                    data-id="b4be166" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        @if ($review3->user->metaData->profile_pic)
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/') }}/{{ $review3->user->metaData ? $review3->user->metaData->profile_pic : '' }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt=""
                                                            srcset="{{ asset('public/assets/img/') }}/{{ $review3->user->metaData ? $review3->user->metaData->profile_pic : '' }}, {{ asset('public/assets/img/') }}/{{ $review3->user->metaData ? $review3->user->metaData->profile_pic : '' }} 300w, {{ asset('public/assets/img/') }}/{{ $review3->user->metaData ? $review3->user->metaData->profile_pic : '' }} 600w, {{ asset('public/assets/img/') }}/{{ $review3->user->metaData ? $review3->user->metaData->profile_pic : '' }} 500w, {{ asset('public/assets/img/') }}/{{ $review3->user->metaData ? $review3->user->metaData->profile_pic : '' }}"
                                                            450w sizes="(max-width: 150px) 100vw, 150px">
                                                        @else
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt="" srcset="{{ asset('public/assets/img/blank-profile-picture.png') }}, {{ asset('public/assets/img/blank-profile-picture.png') }} 300w, {{ asset('public/assets/img/blank-profile-picture.png') }} 600w, {{ asset('public/assets/img/blank-profile-picture.png') }} 500w, {{ asset('public/assets/img/blank-profile-picture.png') }}
                                                    450w" sizes="(max-width: 150px) 100vw, 150px">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4c4fadf elementor-widget elementor-widget-heading"
                                                    data-id="4c4fadf" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            {{ $review3->user->name }}</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8317b5a elementor-widget elementor-widget-heading"
                                                    data-id="8317b5a" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">
                                                            {{ $review3->user->metaData->designation }}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-bc8b441 elementor-widget elementor-widget-heading"
                                                    data-id="bc8b441" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            {{ Str::of($review3->review)->limit(50) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-e1678f8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="e1678f8" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-df7830d"
                                            data-id="df7830d" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-92ef909"
                                            data-id="92ef909" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-532fd2e elementor-widget__width-initial elementor-widget elementor-widget-image"
                                                    data-id="532fd2e" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        @if ($reviews->user->metaData->profile_pic)
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/') }}/{{ $reviews->user->metaData ? $reviews->user->metaData->profile_pic : '' }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt=""
                                                            srcset="{{ asset('public/assets/img/') }}/{{ $reviews->user->metaData ? $reviews->user->metaData->profile_pic : '' }}"
                                                            450w sizes="(max-width: 150px) 100vw, 150px">
                                                        <!-- <img src="{{ asset('public/assets/img/') }}/{{ Auth::user() ? Auth::user()->metaData->profile_pic : '' }}"
                                                    class="rounded-circle" height="8" width="37"
                                                    alt="Black and White Portrait of a Man" loading="lazy" /> -->
                                                        @else
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt=""
                                                            srcset="{{ asset('public/assets/img/blank-profile-picture.png') }}, {{ asset('public/assets/img/blank-profile-picture.png') }} 300w, {{ asset('public/assets/img/blank-profile-picture.png') }} {{ asset('public/assets/img/blank-profile-picture.png') }} 600w, {{ asset('public/assets/img/blank-profile-picture.png') }} 500w, {{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                            450w sizes="(max-width: 150px) 100vw, 150px">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-379903e elementor-widget elementor-widget-heading"
                                                    data-id="379903e" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            {{ $reviews->user->name }}</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-e6de0f0 elementor-widget elementor-widget-heading"
                                                    data-id="e6de0f0" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">
                                                            {{ $reviews->user->metaData->designation }}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ca1a343 elementor-widget elementor-widget-heading"
                                                    data-id="ca1a343" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            {{ Str::of($reviews->review)->limit(50) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6e21d40"
                                            data-id="6e21d40" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-50b16a3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="50b16a3" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bcb114d"
                                            data-id="bcb114d" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e84c9ef"
                                            data-id="e84c9ef" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-e10f42e elementor-widget elementor-widget-image"
                                                    data-id="e10f42e" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        @if ($review1->user->metaData->profile_pic)
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img') }}/{{ $review1->user->metaData->profile_pic }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt=""
                                                            srcset="{{ asset('public/assets/img') }}/{{ $review1->user->metaData->profile_pic }}, {{ asset('public/assets/img') }}/{{ $review1->user->metaData->profile_pic }} 300w, {{ asset('public/assets/img') }}/{{ $review1->user->metaData->profile_pic }} 600w, {{ asset('public/assets/img') }}/{{ $review1->user->metaData->profile_pic }} 500w, {{ asset('public/assets/img') }}/{{ $review1->user->metaData->profile_pic }}"
                                                            450w sizes="(max-width: 150px) 100vw, 150px">
                                                        @else
                                                        <img decoding="async" width="150" height="150"
                                                            src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                            class="attachment-thumbnail size-thumbnail wp-image-601"
                                                            alt=""
                                                            srcset="{{ asset('public/wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-150x150.webp') }}, {{ asset('public/wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-150x150.webp') }} 300w, {{ asset('public/wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-150x150.webp') }}wp-content/uploads/2023/06/elementor/thumbs/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-q7ygj334537ed9shujtxi1a7bnczcz4sjw0nxb5fn4.webp 600w, {{ asset('public/wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-150x150.webp') }} 500w, {{ asset('public/wp-content/uploads/2023/06/depositphotos_97431594-stock-photo-businessman-smiling-confidently-at-camera-150x150.webp') }}"
                                                            450w sizes="(max-width: 150px) 100vw, 150px">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d949cfa elementor-widget elementor-widget-heading"
                                                    data-id="d949cfa" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h4 class="elementor-heading-title elementor-size-default">
                                                            {{ $review1->user->name }}</h4>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-de21adc elementor-hidden-mobile elementor-widget elementor-widget-heading"
                                                    data-id="de21adc" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">
                                                            {{ $review1->user->metaData->designation }}
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1e9a843 elementor-widget elementor-widget-heading"
                                                    data-id="1e9a843" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default">
                                                            {{ Str::of($review1->review)->limit(50) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1029991"
                                            data-id="1029991" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-b2c5733 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="b2c5733" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/www.youtube.com\/watch?v=MDU2NsdQ9R0&amp;list=PL7RcAd6D0_T31iFRpnhZsQo1mtg1Uox_p&quot;}">
                    <div class="elementor-background-video-container elementor-hidden-phone">
                        <div class="elementor-background-video-embed"></div>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f70d2b0"
                            data-id="f70d2b0" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4f7cb56 elementor-widget elementor-widget-heading"
                                    data-id="4f7cb56" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">Join our mentor
                                            community,
                                            share your expertise, and empower the next generation of entrepreneurs.
                                            Together,
                                            let's shape the future of entrepreneurship.</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-fbc2c99 elementor-align-center elementor-widget elementor-widget-button"
                                    data-id="fbc2c99" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                href="{{ route('be-a-mentor') }}">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Be a Mentor</span>
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
                                                    <input type="hidden" name="referer_title" value="Home">

                                                    <input type="hidden" name="queried_id" value="8">

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
                                                                <p
                                                                    class="elementor-heading-title elementor-size-default">
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
                                                                <p
                                                                    class="elementor-heading-title elementor-size-default">
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
                                                                <p
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    <a href="{{ route('termsConditions') }}">Terms &
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
                                                                <p
                                                                    class="elementor-heading-title elementor-size-default">
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
                                                                <p
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    <a href="{{ route('aboutUs') }}">About Us</a>
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
                                                                <p
                                                                    class="elementor-heading-title elementor-size-default">
                                                                    <a href="{{ route('contactUs') }}">Contact Us</a>
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
                                                                <p
                                                                    class="elementor-heading-title elementor-size-default">
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
                                                                <p
                                                                    class="elementor-heading-title elementor-size-default">
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
                                                        <span>Copyright © 2023 wiseAdvizor | Powered by IVY Investment
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
            <link rel="stylesheet" id="uc_ac_assets_file_style_css_13102-css"
                href="{{ asset('public/wp-content/uploads/ac_assets/bubble_float/style.css?ver=1.5.75') }}" media="all">
            <link rel="stylesheet" id="owl_carousel_css-css"
                href="{{ asset('public/wp-content/plugins/slide-anything/owl-carousel/owl.carousel.css?ver=2.2.1.1') }}"
                media="all">
            <link rel="stylesheet" id="owl_theme_css-css"
                href="{{ asset('public/wp-content/plugins/slide-anything/owl-carousel/sa-owl-theme.css?ver=2.0') }}"
                media="all">
            <link rel="stylesheet" id="owl_animate_css-css"
                href="{{ asset('public/wp-content/plugins/slide-anything/owl-carousel/animate.min.css?ver=2.0') }}"
                media="all">
            <link rel="stylesheet" id="lightgallery_css-css"
                href="{{ asset('public/wp-content/plugins/slide-anything/lightgallery/css/lightgallery.css?ver=2.5.0') }}"
                media="all">
            <link rel="stylesheet" id="lightgallery_bundle_css-css"
                href="{{ asset('public/wp-content/plugins/slide-anything/lightgallery/css/lightgallery-bundle.min.css?ver=2.5.0') }}"
                media="all">
            <link rel="stylesheet" id="elementor-post-934-css"
                href="{{ asset('public/wp-content/uploads/elementor/css/post-934.css?ver=1688647328') }}" media="all">
            <link rel="stylesheet" id="elementor-post-1015-css"
                href="{{ asset('public/wp-content/uploads/elementor/css/post-1015.css?ver=1688647329') }}" media="all">
            <link rel="stylesheet" id="elementor-post-941-css"
                href="{{ asset('public/wp-content/uploads/elementor/css/post-941.css?ver=1688647329') }}" media="all">
            <link rel="stylesheet" id="e-animations-css"
                href="{{ asset('public/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.14.1') }}"
                media="all">
            <script
                src="{{ asset('public/wp-content/plugins/niso-carousel-slider/assets/js/owl.carousel.min.js?ver=1.0') }}"
                id="niso-carousel-owl.min-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/niso-carousel-slider/assets/js/jquery.mousewheel.min.js?ver=1.0') }}"
                id="jquery.mousewheel.min-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/niso-carousel-slider/assets/js/nivo-lightbox.min.js?ver=1.0') }}"
                id="niso-carousel-lightbox.min-js"></script>
            <script src="{{ asset('public/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js') }}">
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
            <script
                src="{{ asset('public/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=6.2.2') }}"
                id="qi-addons-for-elementor-script-js"></script>
            <script src="{{ asset('public/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.2') }}"
                id="jquery-ui-mouse-js">
            </script>
            <script src="{{ asset('public/wp-includes/js/jquery/ui/slider.min.js?ver=1.13.2') }}"
                id="jquery-ui-slider-js">
            </script>
            <script src="{{ asset('public/wp-content/uploads/theplus-addons/theplus.min.js?ver=1688661372') }}"
                id="theplus-front-js-js" defer></script>
            <script src="{{ asset('public/wp-content/plugins/header-footer-elementor/inc/js/frontend.js?ver=1.6.14') }}"
                id="hfe-frontend-js-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/qi-addons-for-elementor/assets/plugins/swiper/swiper.min.js?ver=6.2.2') }}"
                id="swiper-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/slide-anything/owl-carousel/owl.carousel.min.js?ver=2.2.1') }}"
                id="owl_carousel_js-js"></script>
            <script src="{{ asset('public/wp-content/plugins/slide-anything/js/jquery.mousewheel.min.js?ver=3.1.13') }}"
                id="mousewheel_js-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/slide-anything/owl-carousel/owl.carousel2.thumbs.min.js?ver=0.1.8') }}"
                id="owl_thumbs_js-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/slide-anything/lightgallery/lightgallery.min.js?ver=2.5.0') }}"
                id="lightgallery_js-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/slide-anything/lightgallery/plugins/video/lg-video.min.js?ver=2.5.0') }}"
                id="lightgallery_video_js-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/slide-anything/lightgallery/plugins/zoom/lg-zoom.min.js?ver=2.5.0') }}"
                id="lightgallery_zoom_js-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/slide-anything/lightgallery/plugins/autoplay/lg-autoplay.min.js?ver=2.5.0') }}"
                id="lightgallery_autoplay_js-js"></script>
            <script src="{{ asset('public/wp-content/plugins/slide-anything/lightgallery/player.min.js?ver=2.17.1') }}"
                id="vimeo_player_js-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/unlimited-elements-for-elementor/assets_libraries/owl-carousel-new/owl.carousel.min.js?ver=1.5.75') }}"
                id="owl-carousel-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/qi-addons-for-elementor/inc/masonry/assets/js/plugins/isotope.pkgd.min.js?ver=6.2.2') }}"
                id="isotope-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/qi-addons-for-elementor/inc/masonry/assets/js/plugins/packery-mode.pkgd.min.js?ver=6.2.2') }}"
                id="packery-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.14.1" id="elementor-webpack-runtime-js') }}">
            </script>
            <script
                src="{{ asset('public/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.14.1" id="elementor-frontend-modules-js') }}">
            </script>
            <script
                src="{{ asset('public/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js') }}">
            </script>
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
                    "id": 8,
                    "title": "Home%20%E2%80%93%20WISE%20ADVIZOR",
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
            <script src="{{ asset('public/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0') }}"
                id="wp-polyfill-js">
            </script>
            <script src="{{ asset('public/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5') }}"
                id="wp-hooks-js">
            </script>
            <script src="{{ asset('public/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae') }}"
                id="wp-i18n-js">
            </script>
            <script id="wp-i18n-js-after">
            wp.i18n.setLocaleData({
                'text directionltr': ['ltr']
            });
            </script>
            <script
                src="{{ asset('public/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js?ver=6.2.2') }}"
                id="qi-addons-for-elementor-elementor-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.5.0') }}"
                id="elementor-pro-webpack-runtime-js"></script>
            <script id="elementor-pro-frontend-js-before">
            var ElementorProFrontendConfig = {
                "ajaxurl": "https:\/\/wiseadvizor.com\/wp-admin\/admin-ajax.php",
                "nonce": "3a5ad37dc1",
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
            <script
                src="{{ asset('public/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.5.0') }}"
                id="pro-elements-handlers-js"></script>
            <script
                src="{{ asset('public/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.5.0') }}"
                id="e-sticky-js"></script>
            <script src="{{ asset('public/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js') }}"></script>
            <script id="wp-util-js-extra">
            var _wpUtilSettings = {
                "ajax": {
                    "url": "\/wp-admin\/admin-ajax.php"
                }
            };
            </script>
            <script src="{{ asset('public/wp-includes/js/wp-util.min.js?ver=6.2.2') }}" id="wp-util-js"></script>
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
            <!-- <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>  -->
            <!-- <script src="{{ asset('public/assets/js/bootstrap.js') }}"></script>  -->
            <!-- <script src="{{ asset('public/assets/js/ct-navbar.js') }}"></script> -->

            <!--   Unlimited Elements 1.5.75 Scripts -->
            <script type="text/javascript" id="unlimited-elements-scripts">
            /* Post Carousel Lite scripts: */

            jQuery(document).ready(function() {
                function uc_uc_card_post_carousel_elementor_df03b3c_start() {

                    var objCarousel = jQuery('#uc_uc_card_post_carousel_elementor_df03b3c .owl-carousel');
                    var objWrapper = jQuery('#uc_uc_card_post_carousel_elementor_df03b3c');

                    objCarousel.owlCarousel({
                        loop: true,
                        navText: ["<i class='fas fa-arrow-left'><\/i>",
                            "<i class='fas fa-arrow-right'><\/i>"
                        ],
                        nav: true,
                        dots: true,
                        autoplay: true,
                        rtl: false,
                        paddingType: "none",
                        autoplayTimeout: 4000,
                        autoplayHoverPause: true,
                        smartSpeed: 1000,
                        margin: 30,
                        responsive: {
                            0: {
                                items: 1,
                                slideBy: 1,


                            },
                            768: {
                                items: 2,
                                slideBy: 1,


                            },
                            980: {
                                items: 3,
                                slideBy: 1,


                            }
                        }
                    });

                    objWrapper.on("uc_ajax_sethtml", function(event, htmlItems, isAppend) {

                        objCarousel.trigger("replace.owl.carousel", htmlItems);
                        objCarousel.trigger("refresh.owl.carousel");

                    });

                }
                if (jQuery("#uc_uc_card_post_carousel_elementor_df03b3c").length)
                    uc_uc_card_post_carousel_elementor_df03b3c_start();
                else
                    jQuery(document).on('elementor/popup/show', () => {
                        if (jQuery("#uc_uc_card_post_carousel_elementor_df03b3c").length)
                            uc_uc_card_post_carousel_elementor_df03b3c_start();
                    });
            });
            </script>
            <style>
            .unlimited-elements-background-overlay {
                img position: absolute;
                top: 0px;
                left: 0px;
                width: 100%;
                height: 100%;
                z-index: 0;
            }

            .unlimited-elements-background-overlay.uc-bg-front {
                z-index: 999;
            }

            img {
                max-width: 100%;
            }

            @media screen and (max-width:480px) {
                .elementor-element-92ef909 {
                    display: none !important;
                }

                .elementor-element-e84c9ef {
                    display: none !important;
                }

                .elementor-element.elementor-element-e08eaf8 .elementor-heading-title {
                    color: #330252;
                }
            }

            @media screen and (max-width:767px) {
                .elementor-element-92ef909 {
                    display: none !important;
                }

                .elementor-element-e84c9ef {
                    display: none !important;
                }

                .elementor-element.elementor-element-e08eaf8 .elementor-heading-title {
                    color: #330252;
                }
            }
            </style>

            <div class="unlimited-elements-background-overlay" data-forid="b513049" data-location="back"
                style="display:none">
                <!-- start Bubble Float -->
                <style type="text/css">
                /* widget: Bubble Float */

                #uc_bubble_float_bg_addon49645 .bubble::before {
                    background: #F3EEF5;
                }
                </style>
                <div class="bubbles" id="uc_bubble_float_bg_addon49645">
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                    <div class="bubble"></div>
                </div>
                <script type="text/javascript">
                setTimeout(function() {

                    /* Bubble Float scripts: */

                }, 300);
                </script>
                <!-- end Bubble Float -->
            </div>
            <script type="text/javascript">
            jQuery(document).ready(function() {

                function ucBackgroundOverlayPutStart() {

                    var objBG = jQuery(".unlimited-elements-background-overlay");

                    if (objBG.length == 0)
                        return (false);

                    objBG.each(function(index, bgElement) {

                        var objBgElement = jQuery(bgElement);

                        var targetID = objBgElement.data("forid");

                        var location = objBgElement.data("location");

                        switch (location) {
                            case "body":
                            case "body_front":
                                var objTarget = jQuery("body");
                                break;
                            case "layout":
                            case "layout_front":
                                var objLayout = jQuery("*[data-id=\"" + targetID + "\"]");
                                var objTarget = objLayout.parents(".elementor");
                                if (objTarget.length > 1)
                                    objTarget = jQuery(objTarget[0]);
                                break;
                            default:
                                var objTarget = jQuery("*[data-id=\"" + targetID + "\"]");
                                break;
                        }

                        if (objTarget.length == 0)
                            return (true);

                        var objVideoContainer = objTarget.children(
                            ".elementor-background-video-container");

                        if (objVideoContainer.length == 1)
                            objBgElement.detach().insertAfter(objVideoContainer).show();
                        else
                            objBgElement.detach().prependTo(objTarget).show();

                        objBgElement.trigger("bg_attached");
                        objBgElement.addClass("uc-bg-attached");

                    });
                }

                ucBackgroundOverlayPutStart();

                jQuery(document).on('elementor/popup/show', () => {

                    if (jQuery(".unlimited-elements-background-overlay").not(".uc-bg-attached").length)
                        ucBackgroundOverlayPutStart();

                });

            });
            </script>
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
                    })
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