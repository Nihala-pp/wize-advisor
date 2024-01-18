<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Schedule a Call &#8211; wiseAdvizor</title>
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/PNG-Blue.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <meta name="robots" content="max-image-preview:large">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <script src="https://www.paypal.com/sdk/js?client-id={{ $client_id }}&currency=USD"></script>
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

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PK457VCB');
    </script>
    <!-- End Google Tag Manager -->
    <style type="text/css">
    .current {
        background-color: #007bff !important;
        color: #fff !important;
    }
    </style>

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
        href="https://wiseadvizor.com/wp-content/uploads/theplus_gutenberg/plus-global.css?ver=1688368797" media="all">
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
    <link rel="stylesheet" id="elementor-post-2772-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-2772.css?ver=1699364619" media="all">
    <link rel="stylesheet" id="hfe-widgets-style-css"
        href="https://wiseadvizor.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.14"
        media="all">
    <link rel="stylesheet" id="elementor-post-3007-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-3007.css?ver=1699609169" media="all">
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
        href="https://wiseadvizor.com/wp-content/uploads/theplus-addons/theplus.min.css?ver=1699364619" media="all">
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
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js">
    </script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/sticky-header-effects-for-elementor/assets/js/she-header.js?ver=1.6.5"
        id="she-header-js"></script>
    <link rel="https://api.w.org/" href="https://wiseadvizor.com/wp-json/">
    <link rel="alternate" type="application/json" href="https://wiseadvizor.com/wp-json/wp/v2/pages/2772">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wiseadvizor.com/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.4.1">
    <link rel="canonical" href="https://wiseadvizor.com/browse-mentor/">
    <link rel="shortlink" href="https://wiseadvizor.com/?p=2772">
    <link rel="alternate" type="application/json+oembed"
        href="https://wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2Fbrowse-mentor%2F">
    <link rel="alternate" type="text/xml+oembed"
        href="https://wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2Fbrowse-mentor%2F#038;format=xml">
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
    class="page-template page-template-elementor_canvas page page-id-11 wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-11 payment-page">
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PK457VCB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

   <header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
    <p class="main-title bhf-hidden" itemprop="headline"><a href="https://wiseadvizor.com/" title="wiseAdvizor"
            rel="home">wiseAdvizor</a></p>
    <div data-elementor-type="wp-post" data-elementor-id="3007" class="elementor elementor-3007">
        <header
            class="elementor-section elementor-top-section elementor-element elementor-element-cf19fcc elementor-section-full_width elementor-section-content-top she-header-yes elementor-hidden-mobile elementor-section-height-default elementor-section-height-default"
            data-id="cf19fcc" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;transparent&quot;:&quot;yes&quot;,&quot;background_show&quot;:&quot;yes&quot;,&quot;background&quot;:&quot;#FFFFFF&quot;,&quot;bottom_border&quot;:&quot;yes&quot;,&quot;custom_bottom_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;20&quot;,&quot;sizes&quot;:[]},&quot;transparent_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;scroll_distance&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;60&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;custom_bottom_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;custom_bottom_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
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
                                                class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                <a href="https://wiseadvizor.com/contact-us/" itemprop="url"
                                                    class="hfe-menu-item">Contact Us</a>
                                            </li>
                                            <li id="menu-item-27" itemprop="name"
                                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children parent hfe-has-submenu hfe-creative-menu">
                                                <div class="hfe-has-submenu-container"><a
                                                        href="https://wiseadvizor.com/resources/" itemprop="url"
                                                        class="hfe-menu-item">Resource<span
                                                            class="hfe-menu-toggle sub-arrow hfe-menu-child-0"><i
                                                                class="fa"></i></span></a></div>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-24" itemprop="name"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                        <a href="https://wiseadvizor.com/community-posts/"
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
                                                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2650 current_page_item hfe-creative-menu">
                                                        <a href="https://wiseadvizor.com/blogs/" itemprop="url"
                                                            class="hfe-sub-menu-item hfe-sub-menu-item-active">Blogs</a>
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
                                            <span class="elementor-button-text">Browse Mentors</span>
                                        </span>
                                    </a>
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
                                                <i class="fas fa-bell fa-2xl"></i>
                                                <!-- <span
                                                        class="badge rounded-pill badge-notification bg-danger">1</span> -->
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
                                                id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                                                aria-expanded="false">
                                                @if (Auth::user()->metaData && Auth::user()->metaData->profile_pic)
                                                <img src="{{ asset('public/assets/img/') }}/{{ Auth::user() ? Auth::user()->metaData->profile_pic : '' }}"
                                                    class="rounded-circle" height="8" width="37"
                                                    alt="Black and White Portrait of a Man" loading="lazy" />
                                                @else
                                                <img src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                    class="rounded-circle" height="8" width="37">
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
                                                    <a class="dropdown-item" href="{{ route('user.reviews.list') }}">My
                                                        Reviews</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    @else
                                    <a class="elementor-button elementor-button-link elementor-size-xs"
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
        </header>
        <header
            class="elementor-section elementor-top-section elementor-element elementor-element-9adafe6 elementor-section-full_width elementor-section-content-top she-header-yes elementor-hidden-desktop elementor-hidden-tablet elementor-section-height-default elementor-section-height-default"
            data-id="9adafe6" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;transparent&quot;:&quot;yes&quot;,&quot;background_show&quot;:&quot;yes&quot;,&quot;background&quot;:&quot;#FFFFFF&quot;,&quot;bottom_border&quot;:&quot;yes&quot;,&quot;custom_bottom_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;20&quot;,&quot;sizes&quot;:[]},&quot;transparent_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;scroll_distance&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;60&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;custom_bottom_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;custom_bottom_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f871cda"
                    data-id="f871cda" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-556f326 elementor-widget elementor-widget-image"
                            data-id="556f326" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <a href="https://wiseadvizor.com">
                                    <img width="932" height="140"
                                        src="https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC.png"
                                        class="attachment-large size-large wp-image-624" alt=""
                                        srcset="https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC.png 932w, https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC-300x45.png 300w, https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC-768x115.png 768w"
                                        sizes="(max-width: 932px) 100vw, 932px"> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-094a417"
                    data-id="094a417" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-b0aaaa9 hfe-submenu-animation-slide_up hfe-link-redirect-self_link hfe-nav-menu__align-right elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile hfe-nav-menu__theme-icon-no hfe-submenu-icon-arrow hfe-nav-menu__breakpoint-tablet elementor-widget elementor-widget-navigation-menu"
                            data-id="b0aaaa9" data-element_type="widget"
                            data-settings="{&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;width_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;220&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                            data-widget_type="navigation-menu.default">
                            <div class="elementor-widget-container">
                                <div class="hfe-nav-menu hfe-layout-horizontal hfe-nav-menu-layout horizontal hfe-pointer__none"
                                    data-layout="horizontal">
                                    <div role="button" class="hfe-nav-menu__toggle elementor-clickable"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="screen-reader-text">Menu</span>
                                        <div class="hfe-nav-menu-icon">
                                            <i aria-hidden="false" class="fas fa-align-justify"></i>
                                        </div>
                                    </div>
                                    <nav itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement"
                                        class="hfe-nav-menu__layout-horizontal hfe-nav-menu__submenu-arrow hfe-dropdown"
                                        data-toggle-icon="<i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;fas fa-align-justify&quot;></i>"
                                        data-close-icon="<i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;far fa-window-close&quot;></i>"
                                        data-full-width="yes">
                                        <ul id="menu-1-b0aaaa9" class="hfe-nav-menu">
                                            <li id="menu-item-29" itemprop="name"
                                                class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                <a href="https://web.pransainvestment.ca/about-us/" itemprop="url"
                                                    class="hfe-menu-item">About Us</a>
                                            </li>
                                            <li id="menu-item-28" itemprop="name"
                                                class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                <a href="https://web.pransainvestment.ca/contact-us/" itemprop="url"
                                                    class="hfe-menu-item">Contact Us</a>
                                            </li>
                                            <li id="menu-item-27" itemprop="name"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children parent hfe-has-submenu hfe-creative-menu parent-has-child">
                                                <div class="hfe-has-submenu-container"><a
                                                        href="https://web.pransainvestment.ca/resources/" itemprop="url"
                                                        class="hfe-menu-item" aria-haspopup="true"
                                                        aria-expanded="false">Resource<span
                                                            class="hfe-menu-toggle sub-arrow hfe-menu-child-0"><i
                                                                class="fa"></i></span></a></div><button
                                                    class="sub-menu-toggle" aria-expanded="false"
                                                    onclick="twentytwentyoneExpandSubMenu(this)"
                                                    style="position: absolute;"><span class="icon-plus"><svg
                                                            class="svg-icon" width="18" height="18" aria-hidden="true"
                                                            role="img" focusable="false" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M18 11.2h-5.2V6h-1.6v5.2H6v1.6h5.2V18h1.6v-5.2H18z"
                                                                fill="currentColor"></path>
                                                        </svg></span><span class="icon-minus"><svg class="svg-icon"
                                                            width="18" height="18" aria-hidden="true" role="img"
                                                            focusable="false" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M6 11h12v2H6z" fill="currentColor"></path>
                                                        </svg></span><span class="screen-reader-text">Open
                                                        menu</span></button>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-24" itemprop="name"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                        <a href="https://web.pransainvestment.ca/community-post/"
                                                            itemprop="url" class="hfe-sub-menu-item">Community
                                                            Post</a>
                                                    </li>
                                                    <li id="menu-item-25" itemprop="name"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                        <a href="https://web.pransainvestment.ca/libraries/"
                                                            itemprop="url" class="hfe-sub-menu-item">Libraries</a>
                                                    </li>
                                                    <li id="menu-item-26" itemprop="name"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                        <a href="https://web.pransainvestment.ca/blogs/" itemprop="url"
                                                            class="hfe-sub-menu-item">FAQ</a>
                                                    </li>
                                                    <li id="menu-item-2842" itemprop="name"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                        <a href="https://web.pransainvestment.ca/faq/" itemprop="url"
                                                            class="hfe-sub-menu-item">BLOGS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-5114" itemprop="name"
                                                class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                <a href="https://web.pransainvestment.ca/browse-mentor/" itemprop="url"
                                                    class="hfe-menu-item">Browse Mentor</a>
                                            </li>
                                            <li id="menu-item-5136" itemprop="name"
                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu">
                                                <a href="https://wiseadvizor.com/login" itemprop="url"
                                                    class="hfe-menu-item">Sign In</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a2b9669"
                    data-id="a2b9669" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-ee84ee1 hfe-submenu-animation-slide_up hfe-link-redirect-self_link hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-nav-menu__breakpoint-tablet elementor-widget elementor-widget-navigation-menu"
                            data-id="ee84ee1" data-element_type="widget"
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
                                        <ul id="menu-1-ee84ee1" class="hfe-nav-menu">
                                            <li id="menu-item-29" itemprop="name"
                                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-11 current_page_item parent hfe-creative-menu">
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
                                                        <a href="https://wiseadvizor.com/community-posts/"
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
                                                            class="hfe-sub-menu-item">Blogs</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-5114" itemprop="name"
                                                class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                <a class="elementor-button elementor-button-link elementor-size-xs"
                                                    href="{{ route('browseMentor') }}">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Browse
                                                            Mentors</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li id="menu-item-5136" itemprop="name"
                                                class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu">
                                                @if(Auth::id() && auth()->user()->role_id == 3)
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#"
                                                            id="navbarDropdownMenuLink" role="button"
                                                            data-mdb-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-bell fa-2xl"></i>
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
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle d-flex align-items-center" href="#"
                                                            id="navbarDropdownMenuAvatar" role="button"
                                                            data-mdb-toggle="dropdown" aria-expanded="false">
                                                            @if (Auth::user()->metaData &&
                                                            Auth::user()->metaData->profile_pic)
                                                            <img src="{{ asset('public/assets/img/') }}/{{ Auth::user() ? Auth::user()->metaData->profile_pic : '' }}"
                                                                class="rounded-circle" height="8" width="37"
                                                                alt="Black and White Portrait of a Man"
                                                                loading="lazy" />
                                                            @else
                                                            <img src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                                class="rounded-circle" height="8" width="37">
                                                            @endif
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="navbarDropdownMenuAvatar">
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('user.dashboard') }}">My
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
                                                                <a class="dropdown-item"
                                                                    href="{{ route('user.reviews.list') }}">My
                                                                    Reviews</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('logout') }}">Logout</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                @else
                                                <a class="elementor-button elementor-button-link elementor-size-xs"
                                                    href="{{ route('login') }}">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Sign In</span>
                                                    </span>
                                                </a>
                                                @endif
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a2b9669"
                        data-id="a2b9669" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-aea4c40 elementor-widget__width-auto elementor-mobile-align-right elementor-widget-mobile__width-initial elementor-widget elementor-widget-button"
                                data-id="aea4c40" data-element_type="widget" data-widget_type="button.default">
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
                            <div class="elementor-element elementor-element-0a7faa7 elementor-align-right elementor-widget__width-auto elementor-mobile-align-left elementor-widget-mobile__width-initial elementor-widget elementor-widget-button"
                                data-id="0a7faa7" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        @if(Auth::id() && auth()->user()->role_id == 3)
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown">
                                                <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#"
                                                    id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fas fa-bell fa-2xl"></i>
                                                    <span
                                                        class="badge rounded-pill badge-notification bg-danger">1</span> -->
                <!-- </a>
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
                                                    @if (Auth::user()->metaData &&
                                                    Auth::user()->metaData->profile_pic) -->
                <!-- <img src="{{ asset('public/assets/img/') }}/{{ Auth::user() ? Auth::user()->metaData->profile_pic : '' }}"
                                                        class="rounded-circle" height="8" width="37"
                                                        alt="Black and White Portrait of a Man" loading="lazy" />
                                                    @else
                                                    <img src="{{ asset('public/assets/img/blank-profile-picture.png') }}"
                                                        class="rounded-circle" height="8" width="37">
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
                                                            href="{{ route('user.change-password') }}">Change -->
                <!-- Password</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('user.reviews.list') }}">My
                                                            Reviews</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        @else
                                        <a class="elementor-button elementor-button-link elementor-size-xs"
                                            href="{{ route('login') }}">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Sign In</span>
                                            </span>
                                        </a>
                                        @endif -->
                <!-- </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
        </header>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-d847c98 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="d847c98" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4d317bb"
                    data-id="4d317bb" data-element_type="column">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
            </div>
        </section>
    </div>
</header>

    <div class="row">
        <div class="col-sm-4 mb-3 mt-2">
            <div class="card h-100">
                <div class="card-body">
                    <i class="fa-thin fa-circle-arrow-left"></i>
                    <div class="rounded-circle mt-3">
                        <a href="{{ route('profile', [$mentor ? $mentor->id : '']) }}" title="Mentor"> <img
                                class="rounded-circle" decoding="async"
                                src="{{ asset('public/assets/img/').'/'.$mentor->metaData->profile_pic }}" alt="Mentor"
                                width="100" height="100">
                        </a>
                    </div>
                    <div class="card_carousel_title"> {{ $mentor ?  $mentor->name : '' }}</div>
                    <h5 class="card-title">30 Min Meeting</h5>
                    <!-- <i class="fab fa-time"> 30 Min</i> -->
                    <form name="scheduleCallForm" method="POST" enctype="multipart/form-data" class="scheduleCallForm"
                        id="scheduleCallForm">
                        @csrf
                        <input type="hidden" name="call_id" value="{{ $call->id ?? '' }}">
                        <input type="hidden" name="duration" value="30">
                        <input class="day" type="hidden" name="day" value="">
                        <input class="month" type="hidden" name="month" value="">
                        <input class="year" type="hidden" name="year" value="">
                        <input type="hidden" class="mentor" name="mentor" value="{{ $mentor ? $mentor->id : '' }}">
                        <input type="hidden" class="price" name="price"
                            value="{{ $mentor->metaData ? $mentor->metaData->price_per_call : '0' }}">
                        <input type="hidden" class="time" name="time" value="">
                        <label class="form-label desc" style="color:black;">Description (Regarding the topic)</label>
                        <textarea required="required" id="desc" class="form-control" rows="5" cols="5"
                            name="desc">{{ $call->description ?? '' }}</textarea>
                        <!-- <div class="text-danger error" data-error="desc"></div> -->
                        <label class="form-label" style="color:black;">Upload Document (if any)</label>
                        <input type="file" name="doc" class="form-control" id="customFile">
                </div>
            </div>
        </div>
        <div class="col-sm-8 mb-2 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="errorMsgntainer"></div>
                            <div class="col-md-6 text-left mb-0 mt-3">
                                <h2 class="heading-section"><b>Select a Date & Time</b></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content w-100">
                                    <div class="calendar-container mb-3">
                                        <div class="timezone">
                                            <select name="timezone" class="form-control mt-1 timezone select2"
                                                id="timezone" style="width:50%" required>
                                                <option value=""><b>Time zone</b></option>
                                                @foreach($timezone as $zone => $time)
                                                @php
                                                $choosen_zone = $call->utc ?? auth()->user()->metaData->timezone;
                                                @endphp
                                                <option value="{{ $time }}"
                                                    {{ $time == $choosen_zone  ? 'selected' : '' }}>
                                                    {{ $time }}</option>
                                                @endforeach
                                            </select>
                                            <!-- <div class="text-danger error" data-error="timezone"></div> -->
                                        </div>
                                        <div class="calendar">
                                            <div class="year-header">
                                                <span class="left-button fa fa-chevron-left" id="prev"> </span>
                                                <span class="year" id="label"></span>
                                                <span class="right-button fa fa-chevron-right" id="next"> </span>
                                            </div>
                                            <table class="months-table w-100">
                                                <tbody>
                                                    <tr class="months-row">
                                                        <td class="month">Jan</td>
                                                        <td class="month">Feb</td>
                                                        <td class="month">Mar</td>
                                                        <td class="month">Apr</td>
                                                        <td class="month">May</td>
                                                        <td class="month">Jun</td>
                                                        <td class="month">Jul</td>
                                                        <td class="month">Aug</td>
                                                        <td class="month">Sep</td>
                                                        <td class="month">Oct</td>
                                                        <td class="month">Nov</td>
                                                        <td class="month">Dec</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="days-table w-100">
                                                <td class="day">Sun</td>
                                                <td class="day">Mon</td>
                                                <td class="day">Tue</td>
                                                <td class="day">Wed</td>
                                                <td class="day">Thu</td>
                                                <td class="day">Fri</td>
                                                <td class="day">Sat</td>
                                            </table>
                                            <div class="frame">
                                                <table class="dates-table w-100">
                                                    <tbody class="tbody">
                                                    </tbody>
                                                </table>
                                            </div>
                                            <button class="button" id="add-button" style="display:none;">Add
                                                Event</button>
                                        </div>
                                    </div>
                                    @if(!empty($nextAvailability))
                                    <div style="margin-left:20px;" class="avail">
                                        <h4 style="color:green"><b>Next Availability on
                                                {{ Carbon\Carbon::parse($nextAvailability->date)->format('jS F\\, Y') }}</b>
                                        </h4>
                                    </div>
                                    @endif
                                    <div class="events-container">
                                    </div>
                                    <div class="dialog" id="dialog">
                                        <h2 class="dialog-header"> Add New Event </h2>
                                        <form class="form" id="form">
                                            <div class="form-container" align="center">
                                                <label class="form-label" id="valueFromMyButton" for="name">Event
                                                    name</label>
                                                <input class="input" type="text" id="name" maxlength="36">
                                                <label class="form-label" id="valueFromMyButton" for="count">Number
                                                    of people to
                                                    invite</label>
                                                <input class="input" type="number" id="count" min="0" max="1000000"
                                                    maxlength="7">
                                                <input type="button" value="Cancel" class="button" id="cancel-button">
                                                <input type="button" value="OK" class="button button-white"
                                                    id="ok-button">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="calendar">
                                                <div class="year-header">
                                                    <span class="left-button fa fa-chevron-left" id="prev"> </span>
                                                    <span class="year" id="label"></span>
                                                    <span class="right-button fa fa-chevron-right" id="next"> </span>
                                                </div>
                                                <table class="months-table w-100">
                                                    <tbody>
                                                        <tr class="months-row">
                                                            <td class="month">Jan</td>
                                                            <td class="month">Feb</td>
                                                            <td class="month">Mar</td>
                                                            <td class="month">Apr</td>
                                                            <td class="month">May</td>
                                                            <td class="month">Jun</td>
                                                            <td class="month">Jul</td>
                                                            <td class="month">Aug</td>
                                                            <td class="month">Sep</td>
                                                            <td class="month">Oct</td>
                                                            <td class="month">Nov</td>
                                                            <td class="month">Dec</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="days-table w-100">
                                                    <td class="day">Sun</td>
                                                    <td class="day">Mon</td>
                                                    <td class="day">Tue</td>
                                                    <td class="day">Wed</td>
                                                    <td class="day">Thu</td>
                                                    <td class="day">Fri</td>
                                                    <td class="day">Sat</td>
                                                </table>
                                                <div class="frame">
                                                    <table class="dates-table w-100">
                                                        <tbody class="tbody">
                                                        </tbody>
                                                    </table>
                                                </div>
                                                 <div class="timezone">
                                                    <select name="timezone" class="form-control mt-1 timezone"
                                                        id="timezone" style="width:50%" required>
                                                        <option value=""><b>Time zone</b></option>
                                                        @foreach($timezone as $zone => $time)
                                                        <option value="{{ $time }}">{{ $zone }}</option>
                                                        @endforeach
                                                    </select>
                                                </div> -->
                                    <!-- </form> -->
                                    <!-- <select class="form-control" id="add-button">Add Event

</select> -->
                                    <!-- </div>
                                        </div>
                                        <div class="events-container">
                                        </div>
                                        <div class="dialog" id="dialog">
                                            <h2 class="dialog-header"> Add New Event </h2>
                                            <form class="form" id="form">
                                                <div class="form-container" align="center">
                                                    <label class="form-label" id="valueFromMyButton" for="name">Event
                                                        name</label>
                                                    <input class="input" type="text" id="name" maxlength="36">
                                                    <label class="form-label" id="valueFromMyButton" for="count">Number
                                                        of people to invite</label>
                                                    <input class="input" type="number" id="count" min="0" max="1000000"
                                                        maxlength="7">
                                                    <input type="button" value="Cancel" class="button"
                                                        id="cancel-button">
                                                    <input type="button" value="OK" class="button button-white"
                                                        id="ok-button">
                                                </div>
                                            </form>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark btn-lg mt-5 payNow" id="payNow"
                            style="align:center;background-color:#001E64;">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                        <form class="elementor-form" method="post" name="Subscribe Form">
                                            <input type="hidden" name="post_id" value="32">
                                            <input type="hidden" name="form_id" value="dd4d324">
                                            <input type="hidden" name="referer_title" value="Browse Mentor">

                                            <input type="hidden" name="queried_id" value="2772">

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
                                                            <a href="https://wiseadvizor.com/#how_it_works"> How it
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
                                                        <p class="elementor-heading-title elementor-size-default">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="{{ asset('public/assets/js/popper.js') }}"></script>
    <!-- <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript">
    (function($) {
        // Setup the calendar with the current date
        $(document).ready(function() {
            var date = new Date();
            var today = date.getDate();
            // Set click handlers for DOM elements
            $(".right-button").click({
                date: date
            }, next_year);
            $(".left-button").click({
                date: date
            }, prev_year);
            $(".month").click({
                date: date
            }, month_click);
            $("#add-button").click({
                date: date
            }, new_event);
            // Set current month as active
            $(".months-row").children().eq(date.getMonth()).addClass("active-month");
            init_calendar(date);
            var events = check_events(today, date.getMonth(), date.getFullYear());
            show_events(events, months[date.getMonth()], today);

            $.ajaxSetup({
                headers: {
                    'Accept': "application/json",
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // function paynow() {
            $("body").on('click', '#payNow', function(e) {
                e.preventDefault();
                // $("form[name='scheduleCallForm']").submit(function(e) {

                // var $form = document.getElementById('scheduleCallForm');

                // var formdata = new FormData(document.getElementById("scheduleCallForm"));
                var desc = $('#desc').val();
                var mentor = $('.mentor').val();
                // e.preventDefault();


                var formdata = $('.scheduleCallForm').serialize();
                // let myForm = document.getElementById('scheduleCallForm');
                // let formdata = new FormData(myForm);

                // var $form = $(this);
                // var formData = new FormData($form[0]); // note [0] here
                // url = $form.prop("action");

                $('.error').html('');

                return $.ajax("https://wiseadvizor.com/addScheduleRequest", {
                    method: 'POST',
                    data: {
                        "data": formdata
                    },
                    success: function(response) {
                        $('.payment-page').html(response);
                    },
                    // error: function(error) {
                    //     let errors = error.responseJSON.errors
                    //     for (let key in errors) {
                    //         let errorDiv = $(`.error[data-error="${key}"]`);
                    //         if (errorDiv.length) {
                    //             errorDiv.text(errors[key][0]);
                    //         }
                    //     }
                    // }
                    error: function(err) {
                        let error = err.responseJSON;
                        $.each(error.errors, function(index, value) {
                            $(document).find('[name=' + index + ']').after(
                                '<span class="text-danger error">' +
                                value + '</span>' + '<br>');

                            // $('.errorMsgntainer').append(
                            //     '<span class="text-danger">' + value +
                            //     '<span>' + '<br>');
                        });
                    }
                });
            });
            // }

            $("body").on('click', '.event-card', function(e) {
                e.preventDefault();

                var fired_button = $(this).val();
                $('body').find('.time').val(fired_button);

                $('.event-card').removeClass("current");
                $(this).addClass("current");
            });
        });

        // Initialize the calendar by appending the HTML dates
        function init_calendar(date) {
            console.log(date);
            $(".tbody").empty();
            $(".events-container").empty();
            var calendar_days = $(".tbody");
            var month = date.getMonth();
            var year = date.getFullYear();
            var day_count = days_in_month(month, year);
            var row = $("<tr class='table-row'></tr>");
            var today = date.getDate();
            // Set date to 1 to find the first day of the month
            date.setDate(1);
            var first_day = date.getDay();
            // 35+firstDay is the number of date elements to be added to the dates table
            // 35 is from (7 days in a week) * (up to 5 rows of dates in a month)
            for (var i = 0; i < 35 + first_day; i++) {
                // Since some of the elements will be blank, 
                // need to calculate actual date from index
                var day = i - first_day + 1;
                // If it is a sunday, make a new row
                if (i % 7 === 0) {
                    calendar_days.append(row);
                    row = $("<tr class='table-row'></tr>");
                }
                // if current index isn't a day in this month, make it blank
                if (i < first_day || day > day_count) {
                    var curr_date = $("<td class='table-date nil'>" + "</td>");
                    row.append(curr_date);
                } else {
                    var curr_date = $("<td class='table-date'>" + day + "</td>");
                    var events = check_events(day, month + 1, year);
                    if (today === day && $(".active-date").length === 0) {
                        curr_date.addClass("active-date");
                        show_events(events, months[month], day);
                    }
                    // If this date has any events, style it with .event-date
                    if (events.length !== 0) {
                        curr_date.addClass("event-date");
                    }
                    // Set onClick handler for clicking a date
                    curr_date.click({
                        events: events,
                        month: months[month],
                        day: day
                    }, date_click);
                    row.append(curr_date);
                }
            }
            // Append the last row and set the current year
            calendar_days.append(row);
            $(".year").text(year);
        }

        // Get the number of days in a given month/year
        function days_in_month(month, year) {
            var monthStart = new Date(year, month, 1);
            var monthEnd = new Date(year, month + 1, 1);
            return (monthEnd - monthStart) / (1000 * 60 * 60 * 24);
        }

        // Event handler for when a date is clicked
        function date_click(event) {
            $(".events-container").show(250);
            $("#dialog").hide(250);
            $(".active-date").removeClass("active-date");
            $(this).addClass("active-date");
            var d = new Date();
            var month_taken = event.data.month;
            var new_month = getMonthFromString(month_taken);
            // var month_name = getMonthName(new_month);
            var mentor = $('.mentor').val();
            var day = event.data.day;

            // console.log(event.data);
            $('body').find('.day').val(day);
            var year = new Date().getFullYear();
            $('body').find('.year').val(year);

            // var new_month = getMonthFromString(month);
            // var month_name = getMonthName(new_month);

            if (months[d.getMonth()] === month_taken) {
                month_name = month_taken;
            } else {
                month_name = getMonthName(new_month);
            }
            $('body').find('.month').val(month_name);

            var timezone = $("#timezone").val();

            return $.ajax("https://wiseadvizor.com/getTimeAvailability", {
                method: 'POST',
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    "mentor": mentor,
                    "day": day,
                    "month": month_name,
                    "year": year,
                    "timezone": timezone,
                },
                success: function(response) {
                    var times = [];
                    for (var key in response) {
                        // console.log(response[key]);
                        times.push({
                            start_time: response[key],
                        });
                    }
                    show_events(times, event.data.month, event.data.day);
                },
            });
            // show_events(event.data.events, event.data.month, event.data.day);
        };

        // Event handler for when a month is clicked
        function month_click(event) {
            $(".events-container").show(250);
            $("#dialog").hide(250);
            var date = event.data.date;
            $(".active-month").removeClass("active-month");
            $(this).addClass("active-month");
            var new_month = $(".month").index(this);
            // date.setMonth(date.getMonth() + 1);
            date.setMonth(new_month);
            init_calendar(date);
        }

        // Event handler for when the year right-button is clicked
        function next_year(event) {
            $("#dialog").hide(250);
            var date = event.data.date;
            var new_year = date.getFullYear() + 1;
            $("year").html(new_year);
            date.setFullYear(new_year);
            init_calendar(date);
        }

        // Event handler for when the year left-button is clicked
        function prev_year(event) {
            $("#dialog").hide(250);
            var date = event.data.date;
            var new_year = date.getFullYear() - 1;
            $("year").html(new_year);
            date.setFullYear(new_year);
            init_calendar(date);
        }

        // Event handler for clicking the new event button
        function new_event(event) {
            // if a date isn't selected then do nothing
            if ($(".active-date").length === 0)
                return;
            // remove red error input on click
            $("input").click(function() {
                $(this).removeClass("error-input");
            })
            // empty inputs and hide events
            $("#dialog input[type=text]").val('');
            $("#dialog input[type=number]").val('');
            $(".events-container").hide(250);
            $("#dialog").show(250);
            // Event handler for cancel button
            $("#cancel-button").click(function() {
                $("#name").removeClass("error-input");
                $("#count").removeClass("error-input");
                $("#dialog").hide(250);
                $(".events-container").show(250);
            });
            // Event handler for ok button
            $("#ok-button").unbind().click({
                date: event.data.date
            }, function() {
                var date = event.data.date;
                var name = $("#name").val().trim();
                var count = parseInt($("#count").val().trim());
                var day = parseInt($(".active-date").html());
                // Basic form validation
                if (name.length === 0) {
                    $("#name").addClass("error-input");
                } else if (isNaN(count)) {
                    $("#count").addClass("error-input");
                } else {
                    $("#dialog").hide(250);
                    console.log("new event");
                    new_event_json(name, count, date, day);
                    date.setDate(day);
                    init_calendar(date);
                }
            });
        }

        // Adds a json event to event_data
        function new_event_json(name, count, date, day) {
            var event = {
                "occasion": name,
                "invited_count": count,
                "year": date.getFullYear(),
                "month": date.getMonth() + 1,
                "day": day
            };
            event_data["events"].push(event);
        }

        // Display all events of the selected date in card views
        function show_events(events, month, day) {
            // console.log(month);
            // Clear the dates container
            var d = new Date();
            var new_month = getMonthFromString(month);
            // var month_name = getMonthName(new_month);
            if (months[d.getMonth()] === month) {
                month_name = month;
            } else {
                month_name = getMonthName(new_month);
            }
            // console.log(month_name);
            $(".events-container").empty();
            $(".events-container").show(250);
            console.log(event_data["events"]);
            // If there are no events for this date, notify the user
            if (events.length === 0) {
                // console.log(getMonth(month));
                var event_card = $("<div class='event-card'></div>");
                var event_name = $("<div class='event-name'>There are no slots available on " +
                    month_name +
                    " " +
                    day +
                    ".</div>");
                $(event_card).css({
                    "border-left": "10px solid #FF1744"
                });
                $(event_card).append(event_name);
                $(".events-container").append(event_card);
            } else {
                // Go through and add each event as a card to the events container
                for (var i = 0; i < events.length; i++) {

                    var event_card = $(
                        "<button type='button' class='btn btn-outline-primary btn-lg btn-block event-card timeslot' value=" +
                        events[i]["start_time"] +
                        " style='background-color:white;border:solid;border-color:#007bff;width:75%' required></button>"
                    );
                    var event_name = $("<div class='event-name'>" + events[i]["start_time"] + "</div>");
                    // var event_count = $("<div class='event-count'>"+events[i]["invited_count"]+" Invited</div>");
                    if (events[i]["cancelled"] === true) {
                        $(event_card).css({
                            "border-left": "10px solid #FF1744"
                        });
                        // event_count = $("<div class='event-cancelled'>Cancelled</div>");
                    }
                    $(event_card).append(event_name);
                    $(".events-container").append(event_card);

                    // var event_card = $("<div class='event-card'></div>");
                    // var event_name = $("<div class='event-name'>" + events[i]["occasion"] + ":</div>");
                    // var event_count = $("<div class='event-count'>" + events[i]["invited_count"] +
                    //     " Invited</div>");
                    // if (events[i]["cancelled"] === true) {
                    //     $(event_card).css({
                    //         "border-left": "10px solid #FF1744"
                    //     });
                    //     event_count = $("<div class='event-cancelled'>Cancelled</div>");
                    // }
                    // $(event_card).append(event_name).append(event_count);
                    // $(".events-container").append(event_card);
                }
            }
        }

        // Checks if a specific date has any events
        function check_events(day, month, year) {
            var events = [];
            for (var i = 0; i < event_data["events"].length; i++) {
                var event = event_data["events"][i];
                if (event["day"] === day &&
                    event["month"] === month &&
                    event["year"] === year) {
                    events.push(event);
                }
            }
            return events;
        }

        // Given data for events in JSON format
        var event_data = {
            "events": [{
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10
                },
                {
                    "occasion": "Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10,
                    "cancelled": true
                },
                {
                    "occasion": " Repeated Test Event ",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 10
                },
                {
                    "occasion": " Test Event",
                    "invited_count": 120,
                    "year": 2020,
                    "month": 5,
                    "day": 11
                }
            ]
        };

        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];

        function getMonthFromString(mon) {
            var d = Date.parse(mon + "1, 2023");
            if (!isNaN(d)) {
                return new Date(d).getMonth();
            }
            return -1;
        }

        function getMonthName(month) {
            const d = new Date();
            d.setMonth(month - 1);
            const monthName = d.toLocaleString("default", {
                month: "long"
            });
            return monthName;
        }
    })(jQuery);
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
    <script>
    $('.select2').select2();
    </script>
    <!--End of Tawk.to Script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js">
    </script>
</body>
<style>
.avail h4 {
    margin-left: 20px;
    font-family: "Helvetica", Sans-serif;
    font-size: 16px !important;
    font-weight: 300;
}

.avail h4 b {
    padding-left: 20px;
}

/* .browseMentor {
        padding-right: 20px;
    } */

i.fas.fa-bell.fa-2xl {
    font-size: 32px !important;
}

/* .timeslot:active{
    background-color:#007BFF;
} */

@media(max-width:480px) {
    .desc {
        font-size: 9.5px !important;
    }

    #desc {
        width: 75%;
    }

    #customFile {
        width: 75%;
    }

    .heading-section {
        color: #000;
        font-size: 16px;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-ancestor a.hfe-menu-item {
        color: white !important;
    }
}

@media(max-width:767px) {
    .elementor-3007 .elementor-element.elementor-element-b97627d {
        width: 30%;
    }

    .elementor-3007 .elementor-element.elementor-element-a2b9669 {
        width: 50%;
    }

    .elementor-3007 .elementor-element.elementor-element-094a417 {
        width: 20%;
    }

    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 .sub-menu a.hfe-sub-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 .elementor-menu-toggle:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 nav.hfe-dropdown li a.hfe-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 nav.hfe-dropdown li a.hfe-sub-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 nav.hfe-dropdown-expandible li a.hfe-menu-item:hover,
    .elementor-3007 .elementor-element.elementor-element-b0aaaa9 nav.hfe-dropdown-expandible li a.hfe-sub-menu-item:hover {
        color: #001E64;
    }

    .elementor-3007 .elementor-element.elementor-element-094a417>.elementor-element-populated {
        padding: 0px 0px 0px 35px;
        margin-top: 45px;
    }

    .elementor-3007 .elementor-element.elementor-element-f871cda>.elementor-element-populated {
        padding: 0px 0px 0px 10px;
        margin-top: -20px;
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
        margin-top: 45px;
    }
}

@media (max-width: 320px) {}

@media (max-width: 280px) {
    .elementor-3007 .elementor-element.elementor-element-a2b9669>.elementor-element-populated {
        padding: 0px 0px 0px 20px;
        margin-top: 45px;
    }
}

@media (max-width: 360px) {}

@media (max-width: 375px) {}

@media (min-width: 540px) {}
</style>

</html>