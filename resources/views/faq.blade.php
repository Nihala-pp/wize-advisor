<head>
    <meta charset="UTF-8">
    <title>FAQ | Get Answers to Your Startup Growth Questions</title>
    <meta name="description"
        content="Take your startup growth to the next level with wiseAdvizor's expert mentorship. From shaping your startup idea to refining business strategies, we'll guide you towards business success.">
    <meta name="keywords" content="startup growth, business success, startup idea">
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
    <link rel='stylesheet' id='elementor-post-5607-css'
        href='https://wiseadvizor.com/wp-content/uploads/elementor/css/post-5607.css?ver=1710409200' media='all' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        href="https://wiseadvizor.com/wp-content/uploads/theplus_gutenberg/plus-global.css?ver=1687443863" media="all">
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
    <link rel="stylesheet" id="elementor-post-18-css"
        href="https://wiseadvizor.com/wp-content/uploads/elementor/css/post-18.css?ver=1699364612" media="all">
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
        href="https://wiseadvizor.com/wp-content/uploads/theplus-addons/theplus.min.css?ver=1699364612" media="all">
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
    <link rel="alternate" type="application/json" href="https://wiseadvizor.com/wp-json/wp/v2/pages/18">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wiseadvizor.com/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.4.1">
    <link rel="canonical" href="https://wiseadvizor.com/faq">
    <link rel="shortlink" href="https://wiseadvizor.com/?p=18">
    <link rel="alternate" type="application/json+oembed"
        href="https://wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2Fblogs%2F">
    <link rel="alternate" type="text/xml+oembed"
        href="https://wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2Fblogs%2F#038;format=xml">
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
    class="page-template page-template-elementor_canvas page page-id-18 page-parent wp-embed-responsive ehf-header ehf-footer ehf-template-twentytwentytwo ehf-stylesheet-twentytwentytwo qodef-qi--no-touch qi-addons-for-elementor-1.6.2 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-18">
    <header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
        <p class="main-title bhf-hidden" itemprop="headline"><a href="https://wiseadvizor.com/" title="wiseAdvizor"
                rel="home">wiseAdvizor</a></p>
        <div data-elementor-type="wp-post" data-elementor-id="3007" class="elementor elementor-3007">
            <header
                class="elementor-section elementor-top-section elementor-element elementor-element-cf19fcc elementor-section-full_width elementor-section-content-top she-header-yes elementor-hidden-mobile elementor-hidden-tablet elementor-section-height-default elementor-section-height-default"
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
                                            class="attachment-large size-large wp-image-624"
                                            alt="startup mentorship platform"
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
                                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-11 current_page_item parent hfe-creative-menu">
                                                    <a href="https://wiseadvizor.com/how-it-works" itemprop="url"
                                                        class="hfe-menu-item">How it works</a>
                                                </li>
                                                <li id="menu-item-28" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="https://wiseadvizor.com/faq" itemprop="url"
                                                        class="hfe-menu-item">FAQ's</a>
                                                </li>
                                                <li id="menu-item-27" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children parent hfe-has-submenu hfe-creative-menu">
                                                    <div class="hfe-has-submenu-container"><a
                                                            href="https://wiseadvizor.com/resources/" itemprop="url"
                                                            class="hfe-menu-item">Resources<span
                                                                class="hfe-menu-toggle hfe-menu-child-0"><i
                                                                    class="fas fa-chevron-down"></i></span></a></div>
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

                                                        <li id="menu-item-2842" itemprop="name"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                            <a href="https://wiseadvizor.com/blogs/" itemprop="url"
                                                                class="hfe-sub-menu-item">Blogs</a>
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
                                                <a class="text-reset me-3" href="#" id="navbarDropdownMenuLink"
                                                    role="button" data-mdb-toggle="dropdown" aria-expanded="false">
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
                                                    id="navbarDropdownMenuAvatar" role="button"
                                                    data-mdb-toggle="dropdown" aria-expanded="false">
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
                                            class="attachment-large size-large wp-image-624"
                                            alt="startup mentorship platform"
                                            srcset="https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC.png 932w, https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC-300x45.png 300w, https://wiseadvizor.com/wp-content/uploads/2023/06/pngLargeC-768x115.png 768w"
                                            sizes="(max-width: 932px) 100vw, 932px"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-094a417"
                        data-id="094a417" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-359f243 hfe-nav-menu__align-center hfe-submenu-animation-slide_up hfe-link-redirect-self_link hfe-submenu-icon-arrow  elementor-widget elementor-widget-navigation-menu"
                                data-id="359f243" data-element_type="widget"
                                data-settings="{&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;15&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;15&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:&quot;1&quot;},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:&quot;1&quot;},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:&quot;1&quot;},&quot;width_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;220&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;15&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
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
                                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-11 current_page_item parent hfe-creative-menu">
                                                    <a href="https://wiseadvizor.com/how-it-works" itemprop="url"
                                                        class="hfe-sub-menu-item">How it works
                                                    </a>
                                                </li>
                                                <li id="menu-item-28" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="https://wiseadvizor.com/faq/" itemprop="url"
                                                        class="hfe-sub-menu-item">FAQ'S</a>
                                                </li>
                                                <li id="menu-item-27" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children parent hfe-has-submenu hfe-creative-menu parent-has-child">
                                                    <div class="hfe-has-submenu-container"><a
                                                            href="https://wiseadvizor.com/resources/" itemprop="url"
                                                            class="hfe-menu-item" aria-haspopup="true"
                                                            aria-expanded="false">Resources<span
                                                                class="hfe-menu-toggle sub-arrow hfe-menu-child-0"><i
                                                                    class="fa"></i></span></a></div><button
                                                        class="sub-menu-toggle" aria-expanded="false"
                                                        onclick="twentytwentyoneExpandSubMenu(this)"
                                                        style="position: absolute;"><span class="icon-plus"><svg
                                                                class="svg-icon" width="18" height="18"
                                                                aria-hidden="true" role="img" focusable="false"
                                                                viewBox="0 0 24 24" fill="none"
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
                                                            <a href="https://wiseadvizor.com/community-posts/"
                                                                itemprop="url" class="hfe-sub-menu-item">Community
                                                                Post</a>
                                                        </li>
                                                        <li id="menu-item-25" itemprop="name"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                            <a href="https://wiseadvizor.com/libraries/" itemprop="url"
                                                                class="hfe-sub-menu-item">Libraries</a>
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
                                                    <a href="https://wiseadvizor.com/BrowseMentors/" itemprop="url"
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
                                                    <a href="https://wiseadvizor.com/how-it-works" itemprop="url"
                                                        class="hfe-sub-menu-item">How it works
                                                    </a>
                                                </li>
                                                <li id="menu-item-28" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="https://wiseadvizor.com/faq/" itemprop="url"
                                                        class="hfe-sub-menu-item">FAQ'S</a>
                                                </li>
                                                <li id="menu-item-27" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children parent hfe-has-submenu hfe-creative-menu">
                                                    <div class="hfe-has-submenu-container"><a
                                                            href="https://wiseadvizor.com/resources/" itemprop="url"
                                                            class="hfe-menu-item">Resources<span
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
                                                            <a class="text-reset me-3" href="#"
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
                                                            <a class="d-flex align-items-center" href="#"
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
                                        <a class="elementor-button elementor-butto98n-link elementor-size-xs"
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
            <header
                class="elementor-section elementor-top-section elementor-element elementor-element-cf19fcc elementor-section-full_width elementor-section-content-top she-header-yes elementor-hidden-mobile elementor-hidden-tablet elementor-section-height-default elementor-section-height-default"
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
                                            class="attachment-large size-large wp-image-624"
                                            alt="startup mentorship platform"
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
                                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-11 current_page_item parent hfe-creative-menu">
                                                    <a href="https://wiseadvizor.com/how-it-works" itemprop="url"
                                                        class="hfe-menu-item">How it works</a>
                                                </li>
                                                <li id="menu-item-28" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="https://wiseadvizor.com/faq" itemprop="url"
                                                        class="hfe-menu-item">FAQ's</a>
                                                </li>
                                                <li id="menu-item-27" itemprop="name"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children parent hfe-has-submenu hfe-creative-menu">
                                                    <div class="hfe-has-submenu-container"><a
                                                            href="https://wiseadvizor.com/resources/" itemprop="url"
                                                            class="hfe-menu-item">Resources<span
                                                                class="hfe-menu-toggle hfe-menu-child-0"><i
                                                                    class="fas fa-chevron-down"></i></span></a></div>
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

                                                        <li id="menu-item-2842" itemprop="name"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
                                                            <a href="https://wiseadvizor.com/blogs/" itemprop="url"
                                                                class="hfe-sub-menu-item">Blogs</a>
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
                                                <a class="text-reset me-3" href="#" id="navbarDropdownMenuLink"
                                                    role="button" data-mdb-toggle="dropdown" aria-expanded="false">
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
                                                    id="navbarDropdownMenuAvatar" role="button"
                                                    data-mdb-toggle="dropdown" aria-expanded="false">
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
    <div data-elementor-type="wp-page" data-elementor-id="18" class="elementor elementor-18">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-e7b7ae0 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
            data-id="e7b7ae0" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-761c686"
                    data-id="761c686" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-f86b72c elementor-widget elementor-widget-heading"
                            data-id="f86b72c" data-element_type="widget" data-widget_type="heading.default">
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
                                <h1 class="elementor-heading-title elementor-size-default">Frequently Asked Question
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-xy0j12g elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="xy0j12g" data-element_type="section">
            <div class="elementor-container elementor-column-gap-wide">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2f10f87"
                    data-id="2f10f87" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-ee35913 elementor-widget elementor-widget-heading"
                            data-id="ee35913" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default">For Mentor</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2642eda elementor-widget elementor-widget-accordion"
                            data-id="2642eda" data-element_type="widget" data-widget_type="accordion.default">
                            <div class="elementor-widget-container">
                                <style>
                                /*! elementor - v3.14.0 - 26-06-2023 */
                                .elementor-accordion {
                                    text-align: left
                                }

                                .elementor-accordion .elementor-accordion-item {
                                    border: 1px solid #d5d8dc
                                }

                                .elementor-accordion .elementor-accordion-item+.elementor-accordion-item {
                                    border-top: none
                                }

                                .elementor-accordion .elementor-tab-title {
                                    margin: 0;
                                    padding: 15px 20px;
                                    font-weight: 700;
                                    line-height: 1;
                                    cursor: pointer;
                                    outline: none
                                }

                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon {
                                    display: inline-block;
                                    width: 1.5em
                                }

                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon svg {
                                    width: 1em;
                                    height: 1em
                                }

                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon.elementor-accordion-icon-right {
                                    float: right;
                                    text-align: right
                                }

                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon.elementor-accordion-icon-left {
                                    float: left;
                                    text-align: left
                                }

                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-closed {
                                    display: block
                                }

                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-opened,
                                .elementor-accordion .elementor-tab-title.elementor-active .elementor-accordion-icon-closed {
                                    display: none
                                }

                                .elementor-accordion .elementor-tab-title.elementor-active .elementor-accordion-icon-opened {
                                    display: block
                                }

                                .elementor-accordion .elementor-tab-content {
                                    display: none;
                                    padding: 15px 20px;
                                    border-top: 1px solid #d5d8dc
                                }

                                @media (max-width:767px) {
                                    .elementor-accordion .elementor-tab-title {
                                        padding: 12px 15px
                                    }

                                    .elementor-accordion .elementor-tab-title .elementor-accordion-icon {
                                        width: 1.2em
                                    }

                                    .elementor-accordion .elementor-tab-content {
                                        padding: 7px 15px
                                    }
                                }

                                .e-con-inner>.elementor-widget-accordion,
                                .e-con>.elementor-widget-accordion {
                                    width: var(--container-widget-width);
                                    --flex-grow: var(--container-widget-flex-grow)
                                }
                                </style>
                                <div class="elementor-accordion">
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-4011" class="elementor-tab-title" data-tab="1"
                                            role="button" aria-controls="elementor-tab-content-4011"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">How can I become a mentor
                                                on WiseAdvizor?</a>
                                        </h6>
                                        <div id="elementor-tab-content-4011"
                                            class="elementor-tab-content elementor-clearfix" data-tab="1" role="region"
                                            aria-labelledby="elementor-tab-title-4011">
                                            <p>We appreciate your interest in becoming a mentor on WiseAdvizor. Please
                                                visit our website and navigate to the &#8220;Be a Mentor&#8221; section.
                                                There, you will find a form to fill out with your details, including
                                                your expertise, background, and experience. Our team will review your
                                                application, and if it aligns with our criteria, we will reach out to
                                                you with further information.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-4012" class="elementor-tab-title" data-tab="2"
                                            role="button" aria-controls="elementor-tab-content-4012"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">What are the benefits of
                                                being a mentor on WiseAdvizor?</a>
                                        </h6>
                                        <div id="elementor-tab-content-4012"
                                            class="elementor-tab-content elementor-clearfix" data-tab="2" role="region"
                                            aria-labelledby="elementor-tab-title-4012">
                                            <p>As a mentor on WiseAdvizor, you have the opportunity to make a
                                                significant impact on the entrepreneurial journeys of aspiring founders.
                                                By sharing your expertise and guidance, you can help shape the success
                                                of startups. Additionally, being a mentor allows you to expand your
                                                network, gain exposure in the startup community, and contribute to the
                                                growth of the ecosystem.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-4013" class="elementor-tab-title" data-tab="3"
                                            role="button" aria-controls="elementor-tab-content-4013"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">How much time commitment
                                                is expected from mentors?</a>
                                        </h6>
                                        <div id="elementor-tab-content-4013"
                                            class="elementor-tab-content elementor-clearfix" data-tab="3" role="region"
                                            aria-labelledby="elementor-tab-title-4013">
                                            <p>The time commitment as a mentor on WiseAdvizor can vary based on your
                                                availability and the number of calls you accept. You have control over
                                                your schedule and can choose the number of calls you are comfortable
                                                taking on. We recommend setting clear expectations regarding call
                                                duration and frequency to ensure a mutually beneficial mentoring
                                                experience.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-4014" class="elementor-tab-title" data-tab="4"
                                            role="button" aria-controls="elementor-tab-content-4014"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">Can I mentor in areas
                                                beyond my primary expertise?</a>
                                        </h6>
                                        <div id="elementor-tab-content-4014"
                                            class="elementor-tab-content elementor-clearfix" data-tab="4" role="region"
                                            aria-labelledby="elementor-tab-title-4014">
                                            <p data-renderer-start-pos="1334">While we encourage mentors to focus on
                                                their primary areas of expertise, we understand that some mentors may
                                                possess knowledge in multiple domains. If you feel confident in
                                                providing guidance in additional areas, you can include them in your
                                                mentor profile. However, we recommend prioritizing your core expertise
                                                to offer the most valuable and targeted mentorship.</p>
                                            <p data-renderer-start-pos="1703"> </p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-4015" class="elementor-tab-title" data-tab="5"
                                            role="button" aria-controls="elementor-tab-content-4015"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">Is there any compensation
                                                for being a mentor on WiseAdvizor?</a>
                                        </h6>
                                        <div id="elementor-tab-content-4015"
                                            class="elementor-tab-content elementor-clearfix" data-tab="5" role="region"
                                            aria-labelledby="elementor-tab-title-4015">
                                            <p>Yes, mentors on WiseAdvizor have the opportunity to earn compensation for
                                                their services. You can set your own rate for mentoring calls, which
                                                will be visible to users when they request a call with you. The
                                                compensation you receive reflects your expertise and the value you
                                                provide to entrepreneurs seeking your guidance.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-4016" class="elementor-tab-title" data-tab="6"
                                            role="button" aria-controls="elementor-tab-content-4016"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">Can I request information
                                                or background about the users before the call?</a>
                                        </h6>
                                        <div id="elementor-tab-content-4016"
                                            class="elementor-tab-content elementor-clearfix" data-tab="6" role="region"
                                            aria-labelledby="elementor-tab-title-4016">
                                            <p>While we respect your desire to gather information about users before the
                                                call, we prioritize user privacy. But at the time of call request, you
                                                will receive description and topic on which user is seeking guidance.
                                                Additionally, user may also provide a document if user wants to share
                                                any other information.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-4017" class="elementor-tab-title" data-tab="7"
                                            role="button" aria-controls="elementor-tab-content-4017"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">Can I decline a call
                                                request if I am unavailable or the user's needs do not align with my
                                                expertise?</a>
                                        </h6>
                                        <div id="elementor-tab-content-4017"
                                            class="elementor-tab-content elementor-clearfix" data-tab="7" role="region"
                                            aria-labelledby="elementor-tab-title-4017">
                                            <p>Yes, as a mentor, you have the flexibility to review and approve call
                                                requests based on your availability and expertise. If you are
                                                unavailable or feel that your expertise may not align with the
                                                user&#8217;s needs, you can decline the call request. It is important to
                                                provide a timely response and communicate any limitations or alternative
                                                suggestions to ensure a positive experience for the user. Please note
                                                that once you have accepted the call and after that there is a change in
                                                your schedule then you have to email us on <a
                                                    href="mailto:info@wiseadvizor.com">info@wiseadvizor.com</a>. Also,
                                                you cannot reject the call after 24hrs are left for the call.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-4018" class="elementor-tab-title" data-tab="8"
                                            role="button" aria-controls="elementor-tab-content-4018"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">Will I receive feedback or
                                                reviews from users after the call?</a>
                                        </h6>
                                        <div id="elementor-tab-content-4018"
                                            class="elementor-tab-content elementor-clearfix" data-tab="8" role="region"
                                            aria-labelledby="elementor-tab-title-4018">
                                            <p>Yes, after the call, users will have the opportunity to provide feedback
                                                and a rating based on their experience with you as their mentor. Their
                                                feedback helps us maintain the quality of our mentor pool and provides
                                                valuable insights for continuous improvement. Your profile will showcase
                                                your overall rating based on user feedback.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-4019" class="elementor-tab-title" data-tab="9"
                                            role="button" aria-controls="elementor-tab-content-4019"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">Can I request a call with
                                                a user who has requested to connect with me?</a>
                                        </h6>
                                        <div id="elementor-tab-content-4019"
                                            class="elementor-tab-content elementor-clearfix" data-tab="9" role="region"
                                            aria-labelledby="elementor-tab-title-4019">
                                            <p>At the moment, WiseAdvizor only allows users to request calls with
                                                mentors. As a mentor, you cannot directly request a call with a user who
                                                has expressed interest in connecting with you. However, you can review
                                                the call request and approve it if it aligns with your availability and
                                                expertise.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-40110" class="elementor-tab-title" data-tab="10"
                                            role="button" aria-controls="elementor-tab-content-40110"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">How can I contact
                                                WiseAdvizor for any mentor-related queries or support?</a>
                                        </h6>
                                        <div id="elementor-tab-content-40110"
                                            class="elementor-tab-content elementor-clearfix" data-tab="10" role="region"
                                            aria-labelledby="elementor-tab-title-40110">
                                            <p>If you have any questions or require assistance as a mentor on
                                                WiseAdvizor, please feel free to reach out to our support team. We are
                                                here to support you and address any concerns you may have. Contact
                                                information can typically be found on our website or platform.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9a690d2"
                    data-id="9a690d2" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-597182f elementor-widget elementor-widget-heading"
                            data-id="597182f" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default">For Mentee</p>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-4a4befe elementor-widget elementor-widget-accordion"
                            data-id="4a4befe" data-element_type="widget" data-widget_type="accordion.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-accordion">
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-7791" class="elementor-tab-title" data-tab="1"
                                            role="button" aria-controls="elementor-tab-content-7791"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">What is WiseAdvizor?</a>
                                        </h6>
                                        <div id="elementor-tab-content-7791"
                                            class="elementor-tab-content elementor-clearfix" data-tab="1" role="region"
                                            aria-labelledby="elementor-tab-title-7791">
                                            <p>WiseAdvizor is a platform that connects entrepreneurs and individuals
                                                seeking guidance with experienced startup mentors. Our platform enables
                                                users to schedule direct calls with mentors based on their areas of
                                                expertise, providing personalized guidance and support for their
                                                entrepreneurial journey.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-7792" class="elementor-tab-title" data-tab="2"
                                            role="button" aria-controls="elementor-tab-content-7792"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">How does WiseAdvizor
                                                work?</a>
                                        </h6>
                                        <div id="elementor-tab-content-7792"
                                            class="elementor-tab-content elementor-clearfix" data-tab="2" role="region"
                                            aria-labelledby="elementor-tab-title-7792">
                                            <p>WiseAdvizor works by allowing users to browse through our curated list of
                                                startup mentors. Users can view mentor profiles, which include their
                                                background, experience, and areas of expertise. Once users find a mentor
                                                that aligns with their needs, they can request a call and propose a
                                                suitable date and time. If the mentor approves the call request, the
                                                user will receive an invitation with the details of the scheduled call.
                                                You can read complete flow here.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-7793" class="elementor-tab-title" data-tab="3"
                                            role="button" aria-controls="elementor-tab-content-7793"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">How do I schedule a call
                                                with a mentor?</a>
                                        </h6>
                                        <div id="elementor-tab-content-7793"
                                            class="elementor-tab-content elementor-clearfix" data-tab="3" role="region"
                                            aria-labelledby="elementor-tab-title-7793">
                                            <p>To schedule a call with a mentor on WiseAdvizor, simply browse through
                                                our list of mentors and select the one who best matches your needs.
                                                Click on their profile to view more details, and then click the
                                                &#8220;Request a Call&#8221; button. Select your preferred date and time
                                                for the call, provide a description so that mentor can also prepare for
                                                the call, pay the price per call of the mentor, and submit your request.
                                                The mentor will review and approve the request if available.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-7794" class="elementor-tab-title" data-tab="4"
                                            role="button" aria-controls="elementor-tab-content-7794"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">How much does it cost to
                                                schedule a call with a mentor?</a>
                                        </h6>
                                        <div id="elementor-tab-content-7794"
                                            class="elementor-tab-content elementor-clearfix" data-tab="4" role="region"
                                            aria-labelledby="elementor-tab-title-7794">
                                            <p>The cost of scheduling a call with a mentor on WiseAdvizor varies
                                                depending on the mentor and their expertise. Each mentor sets their own
                                                rate, which is displayed on their profile. Users can view the
                                                mentor&#8217;s rate before requesting a call and can choose a mentor
                                                that aligns with their budget.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-7795" class="elementor-tab-title" data-tab="5"
                                            role="button" aria-controls="elementor-tab-content-7795"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">What if I need to
                                                reschedule or cancel a scheduled call?</a>
                                        </h6>
                                        <div id="elementor-tab-content-7795"
                                            class="elementor-tab-content elementor-clearfix" data-tab="5" role="region"
                                            aria-labelledby="elementor-tab-title-7795">
                                            <p data-renderer-start-pos="1772">If you need to reschedule or cancel a
                                                scheduled call, please notify us as soon as possible. You can also login
                                                and go to your Requested/Upcoming sessions and click on Modify Session.
                                                Select the new date and time. We understand that circumstances may
                                                change, and we will do our best to accommodate your request. However,
                                                please note that rescheduling a call is subject to the availability of
                                                the mentor. Please note that you can only update session before 24hours
                                                left for the call.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-7796" class="elementor-tab-title" data-tab="6"
                                            role="button" aria-controls="elementor-tab-content-7796"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">Can I request multiple
                                                calls with the same mentor?</a>
                                        </h6>
                                        <div id="elementor-tab-content-7796"
                                            class="elementor-tab-content elementor-clearfix" data-tab="6" role="region"
                                            aria-labelledby="elementor-tab-title-7796">
                                            <p data-renderer-start-pos="1772">Yes, you can request multiple calls with
                                                the same mentor if you require further guidance and support. After
                                                completing a call with a mentor, you can again go to the mentor profile
                                                page and schedule the call.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-7797" class="elementor-tab-title" data-tab="7"
                                            role="button" aria-controls="elementor-tab-content-7797"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">How can I provide feedback
                                                on my mentoring experience?</a>
                                        </h6>
                                        <div id="elementor-tab-content-7797"
                                            class="elementor-tab-content elementor-clearfix" data-tab="7" role="region"
                                            aria-labelledby="elementor-tab-title-7797">
                                            <p>We value your feedback and encourage you to share your experience with
                                                us. After your call with a mentor, we will send you a feedback form to
                                                gather your thoughts and suggestions. Additionally, you can always reach
                                                out to our support team with any feedback or concerns you may have.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-7798" class="elementor-tab-title" data-tab="8"
                                            role="button" aria-controls="elementor-tab-content-7798"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">Can mentors provide
                                                ongoing mentorship or support beyond the initial call?</a>
                                        </h6>
                                        <div id="elementor-tab-content-7798"
                                            class="elementor-tab-content elementor-clearfix" data-tab="8" role="region"
                                            aria-labelledby="elementor-tab-title-7798">
                                            <p data-renderer-start-pos="1772">Yes, mentors on WiseAdvizor have the
                                                option to offer ongoing mentorship or support beyond the initial call.
                                                Some mentors may provide additional services, such as longer-term
                                                mentorship programs or consulting packages. These details will be
                                                specified on the mentor&#8217;s profile.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-7799" class="elementor-tab-title" data-tab="9"
                                            role="button" aria-controls="elementor-tab-content-7799"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">Is my information
                                                confidential and secure?</a>
                                        </h6>
                                        <div id="elementor-tab-content-7799"
                                            class="elementor-tab-content elementor-clearfix" data-tab="9" role="region"
                                            aria-labelledby="elementor-tab-title-7799">
                                            <p>We take the privacy and security of our users&#8217; information
                                                seriously. Your personal information and communication with mentors are
                                                kept confidential and are only shared with the mentor you choose to
                                                schedule a call with. We have implemented security measures to protect
                                                your data and ensure a safe platform for mentorship connections.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-77910" class="elementor-tab-title" data-tab="10"
                                            role="button" aria-controls="elementor-tab-content-77910"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">Can I call my friends or
                                                team members also in the call?</a>
                                        </h6>
                                        <div id="elementor-tab-content-77910"
                                            class="elementor-tab-content elementor-clearfix" data-tab="10" role="region"
                                            aria-labelledby="elementor-tab-title-77910">
                                            <p>No, Only the user who has scheduled the call can attend. Inviting any
                                                other person will terminate or cancel the call on immediate basis. No
                                                refund will be processed.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-77911" class="elementor-tab-title" data-tab="11"
                                            role="button" aria-controls="elementor-tab-content-77911"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">What will happen if a
                                                mentor rejects my call?</a>
                                        </h6>
                                        <div id="elementor-tab-content-77911"
                                            class="elementor-tab-content elementor-clearfix" data-tab="11" role="region"
                                            aria-labelledby="elementor-tab-title-77911">
                                            <p>Nothing to worry, if a mentor rejects your call or is not able to attend,
                                                we will suggest you some more mentors available. You can schedule a call
                                                with them, or any other mentor listed on the platform. In case you feel
                                                to not schedule a call with any of them, just let us know on <a
                                                    href="mailto:info@wiseadvior.com">info@wiseadvior.com</a> and we
                                                will refund your money.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-accordion-item">
                                        <h6 id="elementor-tab-title-77912" class="elementor-tab-title" data-tab="12"
                                            role="button" aria-controls="elementor-tab-content-77912"
                                            aria-expanded="false">
                                            <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                                aria-hidden="true">
                                                <span class="elementor-accordion-icon-closed"><i
                                                        class="fas fa-plus"></i></span>
                                                <span class="elementor-accordion-icon-opened"><i
                                                        class="fas fa-minus"></i></span>
                                            </span>
                                            <a class="elementor-accordion-title" tabindex="0">What are the guidelines I
                                                need to follow during the call?</a>
                                        </h6>
                                        <div id="elementor-tab-content-77912"
                                            class="elementor-tab-content elementor-clearfix" data-tab="12" role="region"
                                            aria-labelledby="elementor-tab-title-77912">
                                            <p>Before a call starts, please go through our guidelines here.</p>
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
            class="elementor-section elementor-top-section elementor-element elementor-element-5hmwced elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="5hmwced" data-element_type="section">
            <div class="elementor-container elementor-column-gap-wide">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5b26813"
                    data-id="5b26813" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-bac9a5c elementor-widget elementor-widget-heading"
                            data-id="bac9a5c" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container quest">
                                <h3 class="elementor-heading-title elementor-size-default">Have any other questions?
                                </h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9bc0d4c elementor-align-center elementor-widget elementor-widget-button"
                            data-id="9bc0d4c" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper ask">
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary elementor-button elementor-button-link elementor-size-md"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ask a Question
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tell Us Your Query
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="elementor-element elementor-element-30c899b elementor-button-align-stretch elementor-widget elementor-widget-form"
                                                        data-id="30c899b" data-element_type="widget"
                                                        data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                                        data-widget_type="form.default">
                                                        <div class="elementor-widget-container">
                                                            <form class="elementor-form" method="post" name="New Form"
                                                                action="{{ route('askQuestion') }}">
                                                                @csrf
                                                                <input type="hidden" name="post_id" value="3048">
                                                                <input type="hidden" name="form_id" value="30c899b">
                                                                <input type="hidden" name="referer_title" value="Blogs">

                                                                <input type="hidden" name="queried_id" value="18">

                                                                <div
                                                                    class="elementor-form-fields-wrapper elementor-labels-">
                                                                    <div
                                                                        class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-first_name elementor-col-50 elementor-field-required">
                                                                        <label for="form-field-first_name"
                                                                            class="elementor-field-label elementor-screen-only">
                                                                            First Name </label>
                                                                        <input size="1" type="text" name="first_name"
                                                                            id="form-field-first_name"
                                                                            class="elementor-field elementor-size-md  elementor-field-textual"
                                                                            placeholder="First Name" required="required"
                                                                            aria-required="true">
                                                                    </div>
                                                                    <div
                                                                        class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-last_name elementor-col-50 elementor-field-required">
                                                                        <label for="form-field-last_name"
                                                                            class="elementor-field-label elementor-screen-only">
                                                                            Last Name </label>
                                                                        <input size="1" type="text" name="last_name"
                                                                            id="form-field-last_name"
                                                                            class="elementor-field elementor-size-md  elementor-field-textual"
                                                                            placeholder="Last Name" required="required"
                                                                            aria-required="true">
                                                                    </div>
                                                                    <div
                                                                        class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required email">
                                                                        <label for="form-field-email"
                                                                            class="elementor-field-label elementor-screen-only">
                                                                            Email </label>
                                                                        <input size="1" type="email" name="email"
                                                                            id="form-field-email"
                                                                            class="elementor-field elementor-size-md  elementor-field-textual"
                                                                            placeholder="Email" required="required"
                                                                            aria-required="true">
                                                                    </div>
                                                                    <div
                                                                        class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
                                                                        <label for="form-field-message"
                                                                            class="elementor-field-label elementor-screen-only">
                                                                            Message </label>
                                                                        <textarea
                                                                            class="elementor-field-textual elementor-field  elementor-size-md"
                                                                            name="message" id="form-field-message"
                                                                            rows="4" placeholder="Message"></textarea>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button"
                                                        class="btn btn-secondary elementor-button elementor-size-sm"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit"
                                                        class="btn btn-primary elementor-button elementor-size-sm">Send</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <a class="dropdown-item elementor-button elementor-button-link elementor-size-md"
                                        data-bs-toggle="modal" data-bs-target="#myModal">Ask a Question</a> -->
                                    <!-- <div id="myModal" data-elementor-type="popup" data-elementor-id="3048"
                                        class="elementor elementor-3048 elementor-location-popup modal fade"
                                        role="dialog"
                                        data-elementor-settings="{&quot;triggers&quot;:{&quot;click&quot;:&quot;yes&quot;,&quot;click_times&quot;:1},&quot;timing&quot;:{&quot;sources&quot;:&quot;yes&quot;,&quot;logged_in&quot;:&quot;yes&quot;,&quot;devices&quot;:&quot;yes&quot;,&quot;browsers&quot;:&quot;yes&quot;,&quot;sources_sources&quot;:[&quot;search&quot;,&quot;external&quot;,&quot;internal&quot;],&quot;logged_in_users&quot;:&quot;all&quot;,&quot;devices_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;browsers_browsers&quot;:&quot;all&quot;}}">
                                        <div class="elementor-section-wrap">
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-dae5c68 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="dae5c68" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a45800e"
                                                        data-id="a45800e" data-element_type="column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-196050c elementor-widget elementor-widget-heading"
                                                                data-id="196050c" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2
                                                                        class="elementor-heading-title elementor-size-default">
                                                                        Tell Us Your Query</h2>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-30c899b elementor-button-align-stretch elementor-widget elementor-widget-form"
                                                                data-id="30c899b" data-element_type="widget"
                                                                data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                                                data-widget_type="form.default">
                                                                <div class="elementor-widget-container">
                                                                    <form class="elementor-form" method="post"
                                                                        name="New Form">
                                                                        <input type="hidden" name="post_id"
                                                                            value="3048">
                                                                        <input type="hidden" name="form_id"
                                                                            value="30c899b">
                                                                        <input type="hidden" name="referer_title"
                                                                            value="Blogs">

                                                                        <input type="hidden" name="queried_id"
                                                                            value="18">

                                                                        <div
                                                                            class="elementor-form-fields-wrapper elementor-labels-">
                                                                            <div
                                                                                class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-first_name elementor-col-50 elementor-field-required">
                                                                                <label for="form-field-first_name"
                                                                                    class="elementor-field-label elementor-screen-only">
                                                                                    First Name </label>
                                                                                <input size="1" type="text"
                                                                                    name="form_fields[first_name]"
                                                                                    id="form-field-first_name"
                                                                                    class="elementor-field elementor-size-md  elementor-field-textual"
                                                                                    placeholder="First Name"
                                                                                    required="required"
                                                                                    aria-required="true">
                                                                            </div>
                                                                            <div
                                                                                class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-last_name elementor-col-50 elementor-field-required">
                                                                                <label for="form-field-last_name"
                                                                                    class="elementor-field-label elementor-screen-only">
                                                                                    Last Name </label>
                                                                                <input size="1" type="text"
                                                                                    name="form_fields[last_name]"
                                                                                    id="form-field-last_name"
                                                                                    class="elementor-field elementor-size-md  elementor-field-textual"
                                                                                    placeholder="Last Name"
                                                                                    required="required"
                                                                                    aria-required="true">
                                                                            </div>
                                                                            <div
                                                                                class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-50 elementor-field-required">
                                                                                <label for="form-field-email"
                                                                                    class="elementor-field-label elementor-screen-only">
                                                                                    Email </label>
                                                                                <input size="1" type="email"
                                                                                    name="form_fields[email]"
                                                                                    id="form-field-email"
                                                                                    class="elementor-field elementor-size-md  elementor-field-textual"
                                                                                    placeholder="Email"
                                                                                    required="required"
                                                                                    aria-required="true">
                                                                            </div>
                                                                            <div
                                                                                class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-mobile elementor-col-50 elementor-field-required">
                                                                                <label for="form-field-mobile"
                                                                                    class="elementor-field-label elementor-screen-only">
                                                                                    Mobile </label>
                                                                                <input size="1" type="tel"
                                                                                    name="form_fields[mobile]"
                                                                                    id="form-field-mobile"
                                                                                    class="elementor-field elementor-size-md  elementor-field-textual"
                                                                                    placeholder="Mobile"
                                                                                    required="required"
                                                                                    aria-required="true"
                                                                                    pattern="[0-9()#&amp;+*-=.]+"
                                                                                    title="Only numbers and phone characters (#, -, *, etc) are accepted.">

                                                                            </div>
                                                                            <div
                                                                                class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
                                                                                <label for="form-field-message"
                                                                                    class="elementor-field-label elementor-screen-only">
                                                                                    Message </label>
                                                                                <textarea
                                                                                    class="elementor-field-textual elementor-field  elementor-size-md"
                                                                                    name="form_fields[message]"
                                                                                    id="form-field-message" rows="4"
                                                                                    placeholder="Message"></textarea>
                                                                            </div>
                                                                            <div
                                                                                class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                                                <button type="submit"
                                                                                    class="elementor-button elementor-size-sm">
                                                                                    <span>
                                                                                        <span
                                                                                            class=" elementor-button-icon">
                                                                                        </span>
                                                                                        <span
                                                                                            class="elementor-button-text">Send</span>
                                                                                    </span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div> -->
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
                                            <input type="hidden" name="referer_title" value="Blogs">

                                            <input type="hidden" name="queried_id" value="18">

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
                                                                href="{{ route('privacyPolicy') }}">Privacy Policy</a>
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
                                                        <p class="elementor-heading-title elementor-size-default"><a
                                                                href="{{ route('termsConditions') }}">Terms &
                                                                Conditions</a></p>
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
                                                                href="{{ route('community-guidelines') }}">Community
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
                                                                href="{{ route('aboutUs') }}">About Us</a></p>
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
                                                                href="{{ route('contactUs') }}">Contact Us</a></p>
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
                                                                href="{{ route('faq') }}">FAQs</a></p>
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
                                                                href="{{ route('browseMentor') }}">Browse Mentors</a>
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
    <script src="{{ asset('public/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2') }}" id="jquery-ui-core-js"></script>
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
    <script src="{{ asset('public/wp-content/uploads/theplus-addons/theplus.min.js?ver=1688658984') }}"
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
            "id": 18,
            "title": "Blogs%20%E2%80%93%20WISE%20ADVIZOR",
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js">
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
            });
        });
    }(jQuery));
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11325588607"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-11325588607');
    </script>

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
</body>
<style>
i.fas.fa-chevron-down {
    padding-left: 10px !important;
    font-size: 9px !important;
    font-family: "Font Awesome 5 Free" !important;
    font-weight: 900 !important;
}

/* .browseMentor {
    padding-right: 20px;
} */

i.fas.fa-bell.fa-2xl {
    font-size: 32px !important;
    color: #000;
}

.elementor-field-group-first_name {
    padding-right: 10px;
    padding-bottom: 15px;
}

.elementor-field-group-last_name {
    padding-left: 10px;
    padding-bottom: 15px;
}

.email {
    padding-bottom: 15px;
}

.elementor-18 .elementor-element.elementor-element-9bc0d4c .elementor-button:hover,
.elementor-18 .elementor-element.elementor-element-9bc0d4c .elementor-button:focus {
    background-color: #001E64;
}

@media(max-width:480px) {

    .elementor-field-group-last_name {
        padding-left: 0px;
        padding-bottom: 15px;
    }

    .elementor-field-group-first_name {
        padding-right: 0px;
        padding-bottom: 15px;
    }

    .ask {
        margin-top: -20px !important;
    }

    .quest {
        margin-top: -50px !important;
    }

    .elementor-18 .elementor-element.elementor-element-f86b72c>.elementor-widget-container {
        padding: 55px 1548px 120px 50px;
    }

    .elementor-18 .elementor-element.elementor-element-2642eda .elementor-accordion-title {
        font-size: 12px;
        line-height: 1em;
    }

    .elementor-18 .elementor-element.elementor-element-2642eda .elementor-tab-title {
        padding: 10px 25px 10px 0px;
    }

    .elementor-tab-content-4011 p {
        text-align: justify;
        text-justify: inter-word;
    }

    .elementor-18 .elementor-element.elementor-element-2642eda .elementor-accordion-icon.elementor-accordion-icon-left {
        margin-right: 8px;
        margin-left: 8px;
    }

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .menu-item.current-menu-ancestor a.hfe-menu-item {
        color: white !important;
    }
}

@media (max-width: 767px) {

    .elementor-field-group-last_name {
        padding-left: 0px;
        padding-bottom: 15px;
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

    .elementor-3007 .elementor-element.elementor-element-ee84ee1 .sub-menu,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown-expandible,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-menu-item,
    .elementor-3007 .elementor-element.elementor-element-ee84ee1 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
        background-color: #fff;
        color: #001E64 !important;
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

    .elementor-32 .elementor-element.elementor-element-540d2d1>.elementor-widget-container {
        padding: 0px 20px 10px 100px;
    }

    .elementor-32 .elementor-element.elementor-element-540d2d1>.elementor-widget-container {
        padding: 0px 20px 10px 100px;
    }


    /* i.fas.fa-bell.fa-2xl {
    font-size: 32px !important;
    padding-left: 10px;
    color: #000;
}

img.rounded-circle {
    margin-bottom: 10px;
} */
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

    .elementor-18 .elementor-element.elementor-element-f86b72c>.elementor-widget-container {
        padding: 55px 0px 120px 0px;
    }

    /* header */

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

}
</style>

</html>