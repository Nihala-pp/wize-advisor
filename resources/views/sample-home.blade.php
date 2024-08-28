<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Elementor #7527 &#8211; WISE ADVIZOR</title>
    <meta name='robots' content='max-image-preview:large' />
    <script>
    (function() {
        var query = document.location.search;

        if (query && query.indexOf('preview=true') !== -1) {
            window.name = 'wp-preview-7527';
        }

        if (window.addEventListener) {
            window.addEventListener('pagehide', function() {
                window.name = '';
            });
        }
    }());
    </script>
    <link rel="alternate" type="application/rss+xml" title="WISE ADVIZOR &raquo; Feed"
        href="https://web.wiseadvizor.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="WISE ADVIZOR &raquo; Comments Feed"
        href="https://web.wiseadvizor.com/comments/feed/" />
    <script>
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/web.wiseadvizor.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3"
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
                    return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                        n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                            "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                            "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                case "emoji":
                    return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                        "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
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
    <link rel="preload" href="https://web.wiseadvizor.com/wp-includes/css/dashicons.min.css?ver=6.4.3" as="style"
        id="dashicons" media="all" onload="this.onload=null;this.rel='stylesheet'"><noscript>
        <link rel='stylesheet' id='dashicons-css'
            href='https://web.wiseadvizor.com/wp-includes/css/dashicons.min.css?ver=6.4.3' media='all' />
    </noscript>
    <link rel='stylesheet' id='admin-bar-css'
        href='https://web.wiseadvizor.com/wp-includes/css/admin-bar.min.css?ver=6.4.3' media='all' />
    <style id='admin-bar-inline-css'>
    @media screen {
        html {
            margin-top: 32px !important;
        }
    }

    @media screen and (max-width: 782px) {
        html {
            margin-top: 46px !important;
        }
    }

    @media print {
        #wpadminbar {
            display: none;
        }
    }
    </style>
    <link rel='stylesheet' id='elementor-icons-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.29.0'
        media='all' />
    <link rel='stylesheet' id='elementor-common-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/css/common.min.css?ver=3.21.6'
        media='all' />
    <link rel='stylesheet' id='e-theme-ui-light-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/css/theme-light.min.css?ver=3.21.6'
        media='all' />
    <style id='wp-emoji-styles-inline-css'>
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
    <link rel='stylesheet' id='twenty-twenty-one-custom-color-overrides-css'
        href='https://web.wiseadvizor.com/wp-content/themes/twentytwentyone/assets/css/custom-color-overrides.css?ver=2.0'
        media='all' />
    <style id='classic-theme-styles-inline-css'>
    /*! This file is auto-generated */
    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
    }
    </style>
    <style id='global-styles-inline-css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #FFFFFF;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--color--dark-gray: #28303D;
        --wp--preset--color--gray: #39414D;
        --wp--preset--color--green: #D1E4DD;
        --wp--preset--color--blue: #D1DFE4;
        --wp--preset--color--purple: #D1D1E4;
        --wp--preset--color--red: #E4D1D1;
        --wp--preset--color--orange: #E4DAD1;
        --wp--preset--color--yellow: #EEEADD;
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
        --wp--preset--gradient--purple-to-yellow: linear-gradient(160deg, #D1D1E4 0%, #EEEADD 100%);
        --wp--preset--gradient--yellow-to-purple: linear-gradient(160deg, #EEEADD 0%, #D1D1E4 100%);
        --wp--preset--gradient--green-to-yellow: linear-gradient(160deg, #D1E4DD 0%, #EEEADD 100%);
        --wp--preset--gradient--yellow-to-green: linear-gradient(160deg, #EEEADD 0%, #D1E4DD 100%);
        --wp--preset--gradient--red-to-yellow: linear-gradient(160deg, #E4D1D1 0%, #EEEADD 100%);
        --wp--preset--gradient--yellow-to-red: linear-gradient(160deg, #EEEADD 0%, #E4D1D1 100%);
        --wp--preset--gradient--purple-to-red: linear-gradient(160deg, #D1D1E4 0%, #E4D1D1 100%);
        --wp--preset--gradient--red-to-purple: linear-gradient(160deg, #E4D1D1 0%, #D1D1E4 100%);
        --wp--preset--font-size--small: 18px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 24px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--font-size--extra-small: 16px;
        --wp--preset--font-size--normal: 20px;
        --wp--preset--font-size--extra-large: 40px;
        --wp--preset--font-size--huge: 96px;
        --wp--preset--font-size--gigantic: 144px;
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
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    :where(.is-layout-grid) {
        gap: 0.5em;
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

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
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

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
    </style>
    <link rel='stylesheet' id='hfe-style-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.33'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.21.6'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5'
        media='all' />
    <link rel='stylesheet' id='elementor-post-5-css'
        href='https://web.wiseadvizor.com/wp-content/uploads/elementor/css/post-5.css?ver=1719392981' media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.8.2'
        media='all' />
    <link rel='stylesheet' id='she-header-style-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/sticky-header-effects-for-elementor/assets/css/she-header-style.css?ver=1.6.11'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='https://web.wiseadvizor.com/wp-content/uploads/elementor/css/global.css?ver=1719392983' media='all' />
    <link rel='stylesheet' id='elementor-post-7527-css'
        href='https://web.wiseadvizor.com/wp-content/uploads/elementor/css/post-7527.css?ver=1724847519' media='all' />
    <link rel='stylesheet' id='elementor-post-32-css'
        href='https://web.wiseadvizor.com/wp-content/uploads/elementor/css/post-32.css?ver=1719392983' media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=1.7.1'
        media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=1.7.1'
        media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-style-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=1.7.1'
        media='all' />
    <link rel='stylesheet' id='zip-ai-sidebar-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/astra-sites/inc/lib/zip-ai/sidebar/build/sidebar-app.css?ver=1.1.6'
        media='all' />
    <link rel='stylesheet' id='twenty-twenty-one-style-css'
        href='https://web.wiseadvizor.com/wp-content/themes/twentytwentyone/style.css?ver=2.0' media='all' />
    <link rel='stylesheet' id='twenty-twenty-one-print-style-css'
        href='https://web.wiseadvizor.com/wp-content/themes/twentytwentyone/assets/css/print.css?ver=2.0'
        media='print' />
    <link rel='stylesheet' id='wpforms-admin-bar-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/css/admin-bar.min.css?ver=1.8.8.3'
        media='all' />
    <style id='wpforms-admin-bar-inline-css'>
    #wpadminbar .wpforms-menu-notification-counter,
    #wpadminbar .wpforms-menu-notification-indicator {
        background-color: #d63638 !important;
        color: #ffffff !important;
    }
    </style>
    <link rel='stylesheet' id='wpr-text-animations-css-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/css/lib/animations/text-animations.min.css?ver=1.3.975'
        media='all' />
    <link rel='stylesheet' id='wpr-addons-css-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/css/frontend.min.css?ver=1.3.975'
        media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=1.3.975'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CSail%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script id="jquery-core-js-extra">
    var tpgb_load = {
        "ajaxUrl": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin-ajax.php"
    };
    var smoothAllowedBrowsers = [];
    </script>
    <script data-cfasync="false" src="https://web.wiseadvizor.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script data-cfasync="false" src="https://web.wiseadvizor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script
        src="https://web.wiseadvizor.com/wp-content/plugins/sticky-header-effects-for-elementor/assets/js/she-header.js?ver=1.6.11"
        id="she-header-js"></script>
    <script id="elementor-pro-app-js-before">
    var elementorAppProConfig = {
        "baseUrl": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor-pro\/",
        "site-editor": {
            "urls": {
                "legacy_view": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?post_type=elementor_library&tabs_group=theme"
            }
        },
        "kit-library": [],
        "onboarding": [],
        "import-export": []
    };
    </script>
    <link rel="https://api.w.org/" href="https://web.wiseadvizor.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://web.wiseadvizor.com/wp-json/wp/v2/pages/7527" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://web.wiseadvizor.com/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.3" />
    <link rel="canonical" href="https://web.wiseadvizor.com/elementor-7527/" />
    <link rel='shortlink' href='https://web.wiseadvizor.com/?p=7527' />
    <link rel="alternate" type="application/json+oembed"
        href="https://web.wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fweb.wiseadvizor.com%2Felementor-7527%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://web.wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fweb.wiseadvizor.com%2Felementor-7527%2F&#038;format=xml" />
    <style>
    #wpadminbar .theplus-purge-clear>.ab-item:before {
        content: '';
        background-image: url(https://web.wiseadvizor.com/wp-content/plugins/the-plus-addons-for-elementor-page-builder//assets/images/theplus-logo-small.png) !important;
        background-size: 20px !important;
        background-position: center;
        width: 20px;
        height: 20px;
        background-repeat: no-repeat;
        top: 50%;
        transform: translateY(-50%);
    }

    @media (max-width:660px) {
        #wpadminbar {
            position: fixed;
        }
    }
    </style>
    <script>
    (function() {
        window.onpageshow = function(event) {
            // Defined window.wpforms means that a form exists on a page.
            // If so and back/forward button has been clicked,
            // force reload a page to prevent the submit button state stuck.
            if (typeof window.wpforms !== 'undefined' && event.persisted) {
                window.location.reload();
            }
        };
    }());
    </script>
    <meta name="generator"
        content="Elementor 3.21.6; features: e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style id="wpr_lightbox_styles">
    .lg-backdrop {
        background-color: rgba(0, 0, 0, 0.6) !important;
    }

    .lg-toolbar,
    .lg-dropdown {
        background-color: rgba(0, 0, 0, 0.8) !important;
    }

    .lg-dropdown:after {
        border-bottom-color: rgba(0, 0, 0, 0.8) !important;
    }

    .lg-sub-html {
        background-color: rgba(0, 0, 0, 0.8) !important;
    }

    .lg-thumb-outer,
    .lg-progress-bar {
        background-color: #444444 !important;
    }

    .lg-progress {
        background-color: #a90707 !important;
    }

    .lg-icon {
        color: #efefef !important;
        font-size: 20px !important;
    }

    .lg-icon.lg-toogle-thumb {
        font-size: 24px !important;
    }

    .lg-icon:hover,
    .lg-dropdown-text:hover {
        color: #ffffff !important;
    }

    .lg-sub-html,
    .lg-dropdown-text {
        color: #efefef !important;
        font-size: 14px !important;
    }

    #lg-counter {
        color: #efefef !important;
        font-size: 14px !important;
    }

    .lg-prev,
    .lg-next {
        font-size: 35px !important;
    }

    /* Defaults */
    .lg-icon {
        background-color: transparent !important;
    }

    #lg-counter {
        opacity: 0.9;
    }

    .lg-thumb-outer {
        padding: 0 10px;
    }

    .lg-thumb-item {
        border-radius: 0 !important;
        border: none !important;
        opacity: 0.5;
    }

    .lg-thumb-item.active {
        opacity: 1;
    }
    </style>
    <style id="wpforms-css-vars-root">
    :root {
        --wpforms-field-border-radius: 3px;
        --wpforms-field-border-style: solid;
        --wpforms-field-border-size: 1px;
        --wpforms-field-background-color: #ffffff;
        --wpforms-field-border-color: rgba(0, 0, 0, 0.25);
        --wpforms-field-border-color-spare: rgba(0, 0, 0, 0.25);
        --wpforms-field-text-color: rgba(0, 0, 0, 0.7);
        --wpforms-field-menu-color: #ffffff;
        --wpforms-label-color: rgba(0, 0, 0, 0.85);
        --wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
        --wpforms-label-error-color: #d63637;
        --wpforms-button-border-radius: 3px;
        --wpforms-button-border-style: none;
        --wpforms-button-border-size: 1px;
        --wpforms-button-background-color: #066aab;
        --wpforms-button-border-color: #066aab;
        --wpforms-button-text-color: #ffffff;
        --wpforms-page-break-color: #066aab;
        --wpforms-background-image: none;
        --wpforms-background-position: center center;
        --wpforms-background-repeat: no-repeat;
        --wpforms-background-size: cover;
        --wpforms-background-width: 100px;
        --wpforms-background-height: 100px;
        --wpforms-background-color: rgba(0, 0, 0, 0);
        --wpforms-background-url: none;
        --wpforms-container-padding: 0px;
        --wpforms-container-border-style: none;
        --wpforms-container-border-width: 1px;
        --wpforms-container-border-color: #000000;
        --wpforms-container-border-radius: 3px;
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
        --wpforms-container-shadow-size-box-shadow: none;

    }
    </style>
</head>

<body
    class="page-template page-template-elementor_header_footer page page-id-7527 logged-in admin-bar no-customize-support wp-embed-responsive ehf-footer ehf-template-twentytwentyone ehf-stylesheet-twentytwentyone qodef-qi--no-touch qi-addons-for-elementor-1.7.1 is-light-theme no-js singular elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-7527">
    <script>
    (function() {
        var request, b = document.body,
            c = 'className',
            cs = 'customize-support',
            rcs = new RegExp('(^|\\s+)(no-)?' + cs + '(\\s+|$)');

        request = true;

        b[c] = b[c].replace(rcs, ' ');
        // The customizer requires postMessage and CORS (if the site is cross domain).
        b[c] += (window.postMessage && request ? ' ' : ' no-') + cs;
    }());
    </script>
    <div id="wpadminbar" class="nojq nojs">
        <div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar">
            <ul id='wp-admin-bar-root-default' class="ab-top-menu">
                <li id='wp-admin-bar-wp-logo' class="menupop"><a class='ab-item' aria-haspopup="true"
                        href='https://web.wiseadvizor.com/wp-admin/about.php'><span class="ab-icon"
                            aria-hidden="true"></span><span class="screen-reader-text">About WordPress</span></a>
                    <div class="ab-sub-wrapper">
                        <ul id='wp-admin-bar-wp-logo-default' class="ab-submenu">
                            <li id='wp-admin-bar-about'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/about.php'>About WordPress</a></li>
                            <li id='wp-admin-bar-contribute'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/contribute.php'>Get Involved</a></li>
                        </ul>
                        <ul id='wp-admin-bar-wp-logo-external' class="ab-sub-secondary ab-submenu">
                            <li id='wp-admin-bar-wporg'><a class='ab-item'
                                    href='https://wordpress.org/'>WordPress.org</a></li>
                            <li id='wp-admin-bar-documentation'><a class='ab-item'
                                    href='https://wordpress.org/documentation/'>Documentation</a></li>
                            <li id='wp-admin-bar-learn'><a class='ab-item' href='https://learn.wordpress.org/'>Learn
                                    WordPress</a></li>
                            <li id='wp-admin-bar-support-forums'><a class='ab-item'
                                    href='https://wordpress.org/support/forums/'>Support</a></li>
                            <li id='wp-admin-bar-feedback'><a class='ab-item'
                                    href='https://wordpress.org/support/forum/requests-and-feedback'>Feedback</a></li>
                        </ul>
                    </div>
                </li>
                <li id='wp-admin-bar-site-name' class="menupop"><a class='ab-item' aria-haspopup="true"
                        href='https://web.wiseadvizor.com/wp-admin/'>WISE ADVIZOR</a>
                    <div class="ab-sub-wrapper">
                        <ul id='wp-admin-bar-site-name-default' class="ab-submenu">
                            <li id='wp-admin-bar-dashboard'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/'>Dashboard</a></li>
                        </ul>
                        <ul id='wp-admin-bar-appearance' class="ab-submenu">
                            <li id='wp-admin-bar-themes'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/themes.php'>Themes</a></li>
                            <li id='wp-admin-bar-widgets'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/widgets.php'>Widgets</a></li>
                            <li id='wp-admin-bar-menus'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/nav-menus.php'>Menus</a></li>
                            <li id='wp-admin-bar-background' class="hide-if-customize"><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/themes.php?page=custom-background'>Background</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li id='wp-admin-bar-customize' class="hide-if-no-customize"><a class='ab-item'
                        href='https://web.wiseadvizor.com/wp-admin/customize.php?url=https%3A%2F%2Fweb.wiseadvizor.com%2Felementor-7527%2F%3Fpreview_id%3D7527%26preview_nonce%3De3806c885d%26preview%3Dtrue'>Customize</a>
                </li>
                <li id='wp-admin-bar-updates'><a class='ab-item'
                        href='https://web.wiseadvizor.com/wp-admin/update-core.php'><span class="ab-icon"
                            aria-hidden="true"></span><span class="ab-label" aria-hidden="true">16</span><span
                            class="screen-reader-text updates-available-text">16 updates available</span></a></li>
                <li id='wp-admin-bar-comments'><a class='ab-item'
                        href='https://web.wiseadvizor.com/wp-admin/edit-comments.php'><span class="ab-icon"
                            aria-hidden="true"></span><span class="ab-label awaiting-mod pending-count count-0"
                            aria-hidden="true">0</span><span class="screen-reader-text comments-in-moderation-text">0
                            Comments in moderation</span></a></li>
                <li id='wp-admin-bar-new-content' class="menupop"><a class='ab-item' aria-haspopup="true"
                        href='https://web.wiseadvizor.com/wp-admin/post-new.php'><span class="ab-icon"
                            aria-hidden="true"></span><span class="ab-label">New</span></a>
                    <div class="ab-sub-wrapper">
                        <ul id='wp-admin-bar-new-content-default' class="ab-submenu">
                            <li id='wp-admin-bar-new-post'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/post-new.php'>Post</a></li>
                            <li id='wp-admin-bar-new-media'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/media-new.php'>Media</a></li>
                            <li id='wp-admin-bar-new-page'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/post-new.php?post_type=page'>Page</a>
                            </li>
                            <li id='wp-admin-bar-new-e-landing-page'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/edit.php?action=elementor_new_post&#038;post_type=e-landing-page&#038;template_type=landing-page&#038;_wpnonce=c5191aa8b5#library'>Landing
                                    Page</a></li>
                            <li id='wp-admin-bar-new-elementor_library'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/post-new.php?post_type=elementor_library'>Template</a>
                            </li>
                            <li id='wp-admin-bar-new-sa_slider'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/post-new.php?post_type=sa_slider'>Slider</a>
                            </li>
                            <li id='wp-admin-bar-new-user'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/user-new.php'>User</a></li>
                            <li id='wp-admin-bar-wpforms'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/admin.php?page=wpforms-builder'>WPForms</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li id='wp-admin-bar-edit'><a class='ab-item'
                        href='https://web.wiseadvizor.com/wp-admin/post.php?post=7527&#038;action=edit'>Edit Page</a>
                </li>
                <li id='wp-admin-bar-elementor_inspector' class="menupop">
                    <div class="ab-item ab-empty-item" aria-haspopup="true">Elementor Debugger</div>
                    <div class="ab-sub-wrapper">
                        <ul id='wp-admin-bar-elementor_inspector-default' class="ab-submenu">
                            <li id='wp-admin-bar-elementor_inspector_pagetemplate' class="menupop">
                                <div class="ab-item ab-empty-item" aria-haspopup="true"><span class="wp-admin-bar-arrow"
                                        aria-hidden="true"></span>Page Template</div>
                                <div class="ab-sub-wrapper">
                                    <ul id='wp-admin-bar-elementor_inspector_pagetemplate-default' class="ab-submenu">
                                        <li id='wp-admin-bar-elementor_inspector_log_pagetemplate_0'><a class='ab-item'
                                                href='https://web.wiseadvizor.com/wp-admin/post.php?post=7527&#038;action=elementor'
                                                target='_blank'>Elementor - header-footer.php</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li id='wp-admin-bar-elementor_inspector_theme' class="menupop">
                                <div class="ab-item ab-empty-item" aria-haspopup="true"><span class="wp-admin-bar-arrow"
                                        aria-hidden="true"></span>Theme</div>
                                <div class="ab-sub-wrapper">
                                    <ul id='wp-admin-bar-elementor_inspector_theme-default' class="ab-submenu">
                                        <li id='wp-admin-bar-elementor_inspector_log_theme_0'>
                                            <div class="ab-item ab-empty-item" target='_blank'>Template File: WP Page
                                                Template > Elementor - header-footer.php</div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li id='wp-admin-bar-wpforms-menu' class="menupop"><a class='ab-item' aria-haspopup="true"
                        href='https://web.wiseadvizor.com/wp-admin/admin.php?page=wpforms-overview'>WPForms <div
                            class="wp-core-ui wp-ui-notification wpforms-menu-notification-counter">4</div></a>
                    <div class="ab-sub-wrapper">
                        <ul id='wp-admin-bar-wpforms-menu-default' class="ab-submenu">
                            <li id='wp-admin-bar-wpforms-notifications'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/admin.php?page=wpforms-overview'>Notifications
                                    <div class="wp-core-ui wp-ui-notification wpforms-menu-notification-indicator">
                                    </div></a></li>
                            <li id='wp-admin-bar-wpforms-forms'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/admin.php?page=wpforms-overview'>All
                                    Forms</a></li>
                            <li id='wp-admin-bar-wpforms-payments'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/admin.php?page=wpforms-payments'>Payments</a>
                            </li>
                            <li id='wp-admin-bar-wpforms-add-new'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/admin.php?page=wpforms-builder'>Add
                                    New</a></li>
                            <li id='wp-admin-bar-wpforms-community'><a class='ab-item'
                                    href='https://www.facebook.com/groups/wpformsvip/' target='_blank'
                                    rel='noopener noreferrer'>Community</a></li>
                            <li id='wp-admin-bar-wpforms-help-docs'><a class='ab-item'
                                    href='https://wpforms.com/docs/?utm_campaign=liteplugin&#038;utm_medium=admin-bar&#038;utm_source=WordPress&#038;utm_content=Documentation'
                                    target='_blank' rel='noopener noreferrer'>Help Docs</a></li>
                            <li id='wp-admin-bar-wpforms-upgrade'><a class='ab-item'
                                    href='https://wpforms.com/lite-upgrade/?utm_campaign=liteplugin&#038;utm_source=WordPress&#038;utm_medium=admin-bar&#038;utm_content=Upgrade%20to%20Pro&#038;utm_locale=en_US'
                                    target='_blank' rel='noopener noreferrer'>Upgrade to Pro</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul id='wp-admin-bar-top-secondary' class="ab-top-secondary ab-top-menu">
                <li id='wp-admin-bar-search' class="admin-bar-search">
                    <div class="ab-item ab-empty-item" tabindex="-1">
                        <form action="https://web.wiseadvizor.com/" method="get" id="adminbarsearch"><input
                                class="adminbar-input" name="s" id="adminbar-search" type="text" value=""
                                maxlength="150" /><label for="adminbar-search"
                                class="screen-reader-text">Search</label><input type="submit" class="adminbar-button"
                                value="Search" /></form>
                    </div>
                </li>
                <li id='wp-admin-bar-my-account' class="menupop with-avatar"><a class='ab-item' aria-haspopup="true"
                        href='https://web.wiseadvizor.com/wp-admin/profile.php'>Howdy, <span class="display-name">WISE
                            ADVIZOR</span><img alt=''
                            src='https://secure.gravatar.com/avatar/a8726c7255505df5fe7e481fccd93c50?s=26&#038;d=mm&#038;r=g'
                            srcset='https://secure.gravatar.com/avatar/a8726c7255505df5fe7e481fccd93c50?s=52&#038;d=mm&#038;r=g 2x'
                            class='avatar avatar-26 photo' height='26' width='26' decoding='async' /></a>
                    <div class="ab-sub-wrapper">
                        <ul id='wp-admin-bar-user-actions' class="ab-submenu">
                            <li id='wp-admin-bar-user-info'><a class='ab-item' tabindex="-1"
                                    href='https://web.wiseadvizor.com/wp-admin/profile.php'><img alt=''
                                        src='https://secure.gravatar.com/avatar/a8726c7255505df5fe7e481fccd93c50?s=64&#038;d=mm&#038;r=g'
                                        srcset='https://secure.gravatar.com/avatar/a8726c7255505df5fe7e481fccd93c50?s=128&#038;d=mm&#038;r=g 2x'
                                        class='avatar avatar-64 photo' height='64' width='64' decoding='async' /><span
                                        class='display-name'>WISE ADVIZOR</span></a></li>
                            <li id='wp-admin-bar-edit-profile'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-admin/profile.php'>Edit Profile</a></li>
                            <li id='wp-admin-bar-logout'><a class='ab-item'
                                    href='https://web.wiseadvizor.com/wp-login.php?action=logout&#038;_wpnonce=17b850c297'>Log
                                    Out</a></li>
                        </ul>
                    </div>
                </li>
                <li id='wp-admin-bar-zip-ai-assistant'><a class='ab-item' href=''><span class="ab-icon"
                            aria-hidden="true" style="margin: 0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"
                                focusable="false">
                                <path
                                    d="M9.8132 15.9038L9 18.75L8.1868 15.9038C7.75968 14.4089 6.59112 13.2403 5.09619 12.8132L2.25 12L5.09619 11.1868C6.59113 10.7597 7.75968 9.59112 8.1868 8.09619L9 5.25L9.8132 8.09619C10.2403 9.59113 11.4089 10.7597 12.9038 11.1868L15.75 12L12.9038 12.8132C11.4089 13.2403 10.2403 14.4089 9.8132 15.9038Z"
                                    stroke="currentColor" stroke-width="1.4" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M16.8942 20.5673L16.5 21.75L16.1058 20.5673C15.8818 19.8954 15.3546 19.3682 14.6827 19.1442L13.5 18.75L14.6827 18.3558C15.3546 18.1318 15.8818 17.6046 16.1058 16.9327L16.5 15.75L16.8942 16.9327C17.1182 17.6046 17.6454 18.1318 18.3173 18.3558L19.5 18.75L18.3173 19.1442C17.6454 19.3682 17.1182 19.8954 16.8942 20.5673Z"
                                    stroke="currentColor" stroke-width="1.4" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M18.2589 8.71454L18 9.75L17.7411 8.71454C17.4388 7.50533 16.4947 6.56117 15.2855 6.25887L14.25 6L15.2855 5.74113C16.4947 5.43883 17.4388 4.49467 17.7411 3.28546L18 2.25L18.2589 3.28546C18.5612 4.49467 19.5053 5.43883 20.7145 5.74113L21.75 6L20.7145 6.25887C19.5053 6.56117 18.5612 7.50532 18.2589 8.71454Z"
                                    stroke="currentColor" stroke-width="1.4" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </span></a></li>
            </ul>
        </div>
        <a class="screen-reader-shortcut"
            href="https://web.wiseadvizor.com/wp-login.php?action=logout&#038;_wpnonce=17b850c297">Log Out</a>
    </div>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            Skip to content </a>


        <header id="masthead" class="site-header has-title-and-tagline">



            <div class="site-branding">


                <p class="site-title"><a href="https://web.wiseadvizor.com/">WISE ADVIZOR</a></p>

            </div><!-- .site-branding -->


        </header><!-- #masthead -->

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div data-elementor-type="wp-page" data-elementor-id="7527" class="elementor elementor-7527">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-1426c6b50 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="1426c6b50" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f31effa animated-slow elementor-invisible"
                                    data-id="f31effa" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-01a2f40 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                            data-id="01a2f40" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3e76b19"
                                                    data-id="3e76b19" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-8148c97 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                            data-id="8148c97" data-element_type="widget"
                                                            data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <link rel="stylesheet"
                                                                    href="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">
                                                                <div class="elementor-icon-box-wrapper">

                                                                    <div class="elementor-icon-box-icon">
                                                                        <span
                                                                            class="elementor-icon elementor-animation-">
                                                                            <i aria-hidden="true"
                                                                                class="fas fa-star"></i> </span>
                                                                    </div>

                                                                    <div class="elementor-icon-box-content">

                                                                        <h4 class="elementor-icon-box-title">
                                                                            <span>
                                                                                Browse mentors </span>
                                                                        </h4>

                                                                        <p class="elementor-icon-box-description">
                                                                            Explore our curated network of mentors to
                                                                            find the perfect match for your specific
                                                                            needs.​ </p>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c8a3b8e"
                                                    data-id="c8a3b8e" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-84c73b9 elementor-view-stacked elementor-position-left elementor-widget__width-initial elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                            data-id="84c73b9" data-element_type="widget"
                                                            data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-box-wrapper">

                                                                    <div class="elementor-icon-box-icon">
                                                                        <span
                                                                            class="elementor-icon elementor-animation-">
                                                                            <i aria-hidden="true"
                                                                                class="fas fa-star"></i> </span>
                                                                    </div>

                                                                    <div class="elementor-icon-box-content">

                                                                        <h4 class="elementor-icon-box-title">
                                                                            <span>
                                                                                Schedule your call </span>
                                                                        </h4>

                                                                        <p class="elementor-icon-box-description">
                                                                            Once you've found your ideal mentor,
                                                                            schedule a convenient time for your
                                                                            one-on-one call.​ </p>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3b55eae"
                                                    data-id="3b55eae" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-9e71fe4 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                            data-id="9e71fe4" data-element_type="widget"
                                                            data-widget_type="icon-box.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-box-wrapper">

                                                                    <div class="elementor-icon-box-icon">
                                                                        <span
                                                                            class="elementor-icon elementor-animation-">
                                                                            <i aria-hidden="true"
                                                                                class="fas fa-star"></i> </span>
                                                                    </div>

                                                                    <div class="elementor-icon-box-content">

                                                                        <h4 class="elementor-icon-box-title">
                                                                            <span>
                                                                                Meet the Mentor </span>
                                                                        </h4>

                                                                        <p class="elementor-icon-box-description">
                                                                            Have your questions ready!
                                                                            Get the guidance you need for your startup
                                                                            growth. </p>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-f27240a elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                            data-id="f27240a" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2bde028"
                                                    data-id="2bde028" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-45cf9d3 elementor-widget elementor-widget-counter"
                                                            data-id="45cf9d3" data-element_type="widget"
                                                            data-widget_type="counter.default">
                                                            <div class="elementor-widget-container">
                                                                <style>
                                                                /*! elementor - v3.21.0 - 20-05-2024 */
                                                                .elementor-counter {
                                                                    display: flex;
                                                                    justify-content: center;
                                                                    align-items: stretch;
                                                                    flex-direction: column-reverse
                                                                }

                                                                .elementor-counter .elementor-counter-number {
                                                                    flex-grow: var(--counter-number-grow, 0)
                                                                }

                                                                .elementor-counter .elementor-counter-number-wrapper {
                                                                    flex: 1;
                                                                    display: flex;
                                                                    font-size: 69px;
                                                                    font-weight: 600;
                                                                    line-height: 1;
                                                                    text-align: center
                                                                }

                                                                .elementor-counter .elementor-counter-number-prefix {
                                                                    text-align: end;
                                                                    flex-grow: var(--counter-prefix-grow, 1);
                                                                    white-space: pre-wrap
                                                                }

                                                                .elementor-counter .elementor-counter-number-suffix {
                                                                    text-align: start;
                                                                    flex-grow: var(--counter-suffix-grow, 1);
                                                                    white-space: pre-wrap
                                                                }

                                                                .elementor-counter .elementor-counter-title {
                                                                    flex: 1;
                                                                    display: flex;
                                                                    justify-content: center;
                                                                    align-items: center;
                                                                    margin: 0;
                                                                    padding: 0;
                                                                    font-size: 19px;
                                                                    font-weight: 400;
                                                                    line-height: 2.5
                                                                }
                                                                </style>
                                                                <div class="elementor-counter">
                                                                    <div class="elementor-counter-title">Expert Mentors
                                                                    </div>
                                                                    <div class="elementor-counter-number-wrapper">
                                                                        <span
                                                                            class="elementor-counter-number-prefix"></span>
                                                                        <span class="elementor-counter-number"
                                                                            data-duration="2000" data-to-value="11"
                                                                            data-from-value="0"
                                                                            data-delimiter=",">0</span>
                                                                        <span
                                                                            class="elementor-counter-number-suffix"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fcd4892"
                                                    data-id="fcd4892" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-a017603 elementor-widget elementor-widget-counter"
                                                            data-id="a017603" data-element_type="widget"
                                                            data-widget_type="counter.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-counter">
                                                                    <div class="elementor-counter-title">Minutes of
                                                                        Mentorship</div>
                                                                    <div class="elementor-counter-number-wrapper">
                                                                        <span
                                                                            class="elementor-counter-number-prefix"></span>
                                                                        <span class="elementor-counter-number"
                                                                            data-duration="2000" data-to-value="54"
                                                                            data-from-value="0"
                                                                            data-delimiter=",">0</span>
                                                                        <span
                                                                            class="elementor-counter-number-suffix">+</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b51e35d"
                                                    data-id="b51e35d" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-ed6151f elementor-widget elementor-widget-counter"
                                                            data-id="ed6151f" data-element_type="widget"
                                                            data-widget_type="counter.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-counter">
                                                                    <div class="elementor-counter-title">Community
                                                                        Members</div>
                                                                    <div class="elementor-counter-number-wrapper">
                                                                        <span
                                                                            class="elementor-counter-number-prefix"></span>
                                                                        <span class="elementor-counter-number"
                                                                            data-duration="2000" data-to-value="800"
                                                                            data-from-value="0"
                                                                            data-delimiter=",">0</span>
                                                                        <span
                                                                            class="elementor-counter-number-suffix">+</span>
                                                                    </div>
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-a841139 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="a841139" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7399964"
                                    data-id="7399964" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-a55050f elementor-widget elementor-widget-video"
                                            data-id="a55050f" data-element_type="widget"
                                            data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;play_on_mobile&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;}"
                                            data-widget_type="video.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                /*! elementor - v3.21.0 - 20-05-2024 */
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
                                                    right: 0;
                                                    bottom: 0;
                                                    left: 0;
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
                                                    width: 100%;
                                                    aspect-ratio: var(--video-aspect-ratio);
                                                    -o-object-fit: cover;
                                                    object-fit: cover;
                                                    -o-object-position: center center;
                                                    object-position: center center
                                                }

                                                @supports not (aspect-ratio:1/1) {
                                                    .elementor-widget-video .elementor-custom-embed-image-overlay {
                                                        position: relative;
                                                        overflow: hidden;
                                                        height: 0;
                                                        padding-bottom: calc(100% / var(--video-aspect-ratio))
                                                    }

                                                    .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                                        position: absolute;
                                                        top: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        left: 0
                                                    }
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
                                                        src="https://web.wiseadvizor.com/wp-content/uploads/2024/08/How-can-I-acquire-customers-while-developing.mp4"
                                                        autoplay="" loop="" muted="muted" playsinline=""
                                                        controlsList="nodownload"></video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7f38235"
                                    data-id="7f38235" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-31c30dd elementor-widget elementor-widget-image-box"
                                            data-id="31c30dd" data-element_type="widget"
                                            data-widget_type="image-box.default">
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
                                                    <div class="elementor-image-box-content">
                                                        <p class="elementor-image-box-description">You don’t have to
                                                            guess whether someone has the relevant experience you need -
                                                            we’ve handpicked the top experts in their fields to address
                                                            your challenges directly.​</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-38e8c8e elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="38e8c8e" data-element_type="widget"
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
                                        <div class="elementor-element elementor-element-675522d elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="675522d" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-46a23e3 elementor-widget elementor-widget-image-box"
                                            data-id="46a23e3" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <div class="elementor-image-box-content">
                                                        <p class="elementor-image-box-description">Don't waste precious
                                                            time scrolling through endless blogs, videos, or sending
                                                            countless messages in search of advice. Every second
                                                            counts.​</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-01f7524 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="01f7524" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5316b62 elementor-widget elementor-widget-image-box"
                                            data-id="5316b62" data-element_type="widget"
                                            data-widget_type="image-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image-box-wrapper">
                                                    <div class="elementor-image-box-content">
                                                        <p class="elementor-image-box-description">Don't waste precious
                                                            time scrolling through endless blogs, videos, or sending
                                                            countless messages in search of advice. Every second
                                                            counts.​</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-f8f07f5 elementor-widget-mobile__width-initial wpr-button-icon-style-inline wpr-button-icon-position-right elementor-widget elementor-widget-wpr-button"
                                            data-id="f8f07f5" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:300}"
                                            data-widget_type="wpr-button.default">
                                            <div class="elementor-widget-container">



                                                <div class="wpr-button-wrap elementor-clearfix">
                                                    <a class="wpr-button wpr-button-effect wpr-button-none"
                                                        data-text="Go" href="#link">

                                                        <span class="wpr-button-content">
                                                            <span class="wpr-button-text">Get Started</span>

                                                            <span class="wpr-button-icon"><i
                                                                    class="fas fa-angle-right"></i></span>
                                                        </span>
                                                    </a>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-4fdd66b elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no"
                            data-id="4fdd66b" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8ab85ab"
                                    data-id="8ab85ab" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-a7ec923 elementor-testimonial--align-left elementor-testimonial--skin-default elementor-testimonial--layout-image_inline elementor-pagination-type-bullets elementor-widget elementor-widget-testimonial-carousel"
                                            data-id="a7ec923" data-element_type="widget"
                                            data-settings="{&quot;slides_per_view&quot;:&quot;2&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;pagination&quot;:&quot;bullets&quot;,&quot;speed&quot;:500,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}"
                                            data-widget_type="testimonial-carousel.default">
                                            <div class="elementor-widget-container">
                                                <link rel="stylesheet"
                                                    href="https://web.wiseadvizor.com/wp-content/plugins/elementor-pro/assets/css/widget-carousel.min.css">
                                                <div class="elementor-swiper">
                                                    <div class="elementor-main-swiper swiper-container">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="elementor-testimonial">
                                                                    <div class="elementor-testimonial__content">
                                                                        <div class="elementor-testimonial__text">
                                                                            It was a nice interaction with Cien, gave me
                                                                            a insight of how should we implement a
                                                                            business idea from scratch, and also made me
                                                                            understand from a technical aspects of how
                                                                            can I proceed further... </div>
                                                                    </div>
                                                                    <div class="elementor-testimonial__footer">
                                                                        <div class="elementor-testimonial__image">
                                                                            <img decoding="async"
                                                                                src="https://web.wiseadvizor.com/wp-content/uploads/2024/06/Team-3-1.jpg"
                                                                                alt="John Doe">
                                                                        </div>
                                                                        <cite class="elementor-testimonial__cite"><span
                                                                                class="elementor-testimonial__name">John
                                                                                Doe</span><span
                                                                                class="elementor-testimonial__title">CEO</span></cite>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="elementor-testimonial">
                                                                    <div class="elementor-testimonial__content">
                                                                        <div class="elementor-testimonial__text">
                                                                            Thank you so much for the fantastic guidance
                                                                            in our call! Your clear explanations and
                                                                            approachable teaching style made the call
                                                                            enjoyable to learn. I believe more people
                                                                            will love your guidance as much as I did,
                                                                            thanks to your excellent teaching and
                                                                            guidance </div>
                                                                    </div>
                                                                    <div class="elementor-testimonial__footer">
                                                                        <div class="elementor-testimonial__image">
                                                                            <img decoding="async"
                                                                                src="https://web.wiseadvizor.com/wp-content/uploads/2024/06/testimonial-2.jpg"
                                                                                alt="John Doe">
                                                                        </div>
                                                                        <cite class="elementor-testimonial__cite"><span
                                                                                class="elementor-testimonial__name">John
                                                                                Doe</span><span
                                                                                class="elementor-testimonial__title">CEO</span></cite>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <div class="elementor-testimonial">
                                                                    <div class="elementor-testimonial__content">
                                                                        <div class="elementor-testimonial__text">
                                                                            It was a great experience to learn so much
                                                                            from Cien and her knowledge will help me
                                                                            definitely in thriving for success for my
                                                                            startup ⭐ </div>
                                                                    </div>
                                                                    <div class="elementor-testimonial__footer">
                                                                        <cite class="elementor-testimonial__cite"><span
                                                                                class="elementor-testimonial__name">John
                                                                                Doe</span><span
                                                                                class="elementor-testimonial__title">CEO</span></cite>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-pagination"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon"
                        role="contentinfo">
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
                                                        <form class="elementor-form" method="post"
                                                            name="Subscribe Form">
                                                            <input type="hidden" name="post_id" value="32" />
                                                            <input type="hidden" name="form_id" value="dd4d324" />
                                                            <input type="hidden" name="referer_title"
                                                                value="Elementor #7527" />

                                                            <input type="hidden" name="queried_id" value="7527" />

                                                            <div
                                                                class="elementor-form-fields-wrapper elementor-labels-above">
                                                                <div
                                                                    class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-20 elementor-field-required elementor-mark-required">
                                                                    <label for="form-field-email"
                                                                        class="elementor-field-label">
                                                                        Subscribe to news updates </label>
                                                                    <input size="1" type="email"
                                                                        name="form_fields[email]" id="form-field-email"
                                                                        class="elementor-field elementor-size-md  elementor-field-textual"
                                                                        placeholder="Your email address"
                                                                        required="required" aria-required="true">
                                                                </div>
                                                                <div
                                                                    class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-20 e-form__buttons">
                                                                    <button type="submit"
                                                                        class="elementor-button elementor-size-sm">
                                                                        <span>
                                                                            <span class=" elementor-button-icon">
                                                                            </span>
                                                                            <span
                                                                                class="elementor-button-text">SUBSCRIBE</span>
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
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-b84e421 elementor-widget elementor-widget-heading"
                                                                    data-id="b84e421" data-element_type="widget"
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
                                                                        <p
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            How it Works</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-b1ed54d"
                                                            data-id="b1ed54d" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-7b6d864 elementor-widget elementor-widget-heading"
                                                                    data-id="7b6d864" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            <a
                                                                                href="https://web.pransainvestment.ca/privacy-policy/">Privacy
                                                                                Policy</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-c000038"
                                                            data-id="c000038" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-aaf88ad elementor-widget elementor-widget-heading"
                                                                    data-id="aaf88ad" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            <a
                                                                                href="https://web.pransainvestment.ca/terms-and-conditions/">Terms
                                                                                & Conditions</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-bd39b49"
                                                            data-id="bd39b49" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-b23aa07 elementor-widget elementor-widget-heading"
                                                                    data-id="b23aa07" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            <a
                                                                                href="https://web.pransainvestment.ca/community-guidelines/">Community
                                                                                Guidelines</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-2775f92"
                                                            data-id="2775f92" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-269f902 elementor-widget elementor-widget-heading"
                                                                    data-id="269f902" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            <a
                                                                                href="https://web.pransainvestment.ca/about-us/">About
                                                                                Us</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-12e052a"
                                                            data-id="12e052a" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-32f5614 elementor-widget elementor-widget-heading"
                                                                    data-id="32f5614" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            <a
                                                                                href="https://web.pransainvestment.ca/contact-us/">Contact
                                                                                Us</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-7c20640"
                                                            data-id="7c20640" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-159e6db elementor-widget elementor-widget-heading"
                                                                    data-id="159e6db" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            <a
                                                                                href="https://web.pransainvestment.ca/blogs/">FAQs</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-b37b831"
                                                            data-id="b37b831" data-element_type="column">
                                                            <div
                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-5db6379 elementor-widget elementor-widget-heading"
                                                                    data-id="5db6379" data-element_type="widget"
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p
                                                                            class="elementor-heading-title elementor-size-default">
                                                                            <a
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
                                                                <span>Copyright © 2024 wiseAdvizor | Powered by IVY
                                                                    Investment LLC</span>
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
                                                                    href="https://twitter.com/WiseAdvizor"
                                                                    target="_blank">
                                                                    <span class="elementor-screen-only">Twitter</span>
                                                                    <i class="fab fa-twitter"></i> </a>
                                                            </span>
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-39b2a58"
                                                                    href="https://www.youtube.com/@wiseAdvizor"
                                                                    target="_blank">
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
            </div><!-- #page -->
            <div id="zip-ai-sidebar-admin-trigger"></div>
            <div id="zip-ai-sidebar"></div>
            <script>
            document.body.classList.remove("no-js");
            </script>
            <script>
            if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {
                document.body.classList.add('is-IE');
            }
            </script>
            <script type="text/template" id="tmpl-elementor-templates-modal__header">
                <div class="elementor-templates-modal__header__logo-area"></div>
	<div class="elementor-templates-modal__header__menu-area"></div>
	<div class="elementor-templates-modal__header__items-area">
		<# if ( closeType ) { #>
			<div class="elementor-templates-modal__header__close elementor-templates-modal__header__close--{{{ closeType }}} elementor-templates-modal__header__item">
				<# if ( 'skip' === closeType ) { #>
				<span>Skip</span>
				<# } #>
				<i class="eicon-close" aria-hidden="true"></i>
				<span class="elementor-screen-only">Close</span>
			</div>
		<# } #>
		<div id="elementor-template-library-header-tools"></div>
	</div>
</script>

            <script type="text/template" id="tmpl-elementor-templates-modal__header__logo">
                <span class="elementor-templates-modal__header__logo__icon-wrapper e-logo-wrapper">
		<i class="eicon-elementor"></i>
	</span>
	<span class="elementor-templates-modal__header__logo__title">{{{ title }}}</span>
</script>
            <script type="text/template" id="tmpl-elementor-finder">
                <div id="elementor-finder__search">
		<i class="eicon-search" aria-hidden="true"></i>
		<input id="elementor-finder__search__input" placeholder="Type to find anything in Elementor" autocomplete="off">
	</div>
	<div id="elementor-finder__content"></div>
</script>

            <script type="text/template" id="tmpl-elementor-finder-results-container">
                <div id="elementor-finder__no-results">No Results Found</div>
	<div id="elementor-finder__results"></div>
</script>

            <script type="text/template" id="tmpl-elementor-finder__results__category">
                <div class="elementor-finder__results__category__title">{{{ title }}}</div>
	<div class="elementor-finder__results__category__items"></div>
</script>

            <script type="text/template" id="tmpl-elementor-finder__results__item">
                <a href="{{ url }}" class="elementor-finder__results__item__link">
		<div class="elementor-finder__results__item__icon">
			<i class="eicon-{{{ icon }}}" aria-hidden="true"></i>
		</div>
		<div class="elementor-finder__results__item__title">{{{ title }}}</div>
		<# if ( description ) { #>
			<div class="elementor-finder__results__item__description">- {{{ description }}}</div>
		<# } #>

		<# if ( lock ) { #>
		<div class="elementor-finder__results__item__badge"><i class="{{{ lock.badge.icon }}}"></i>{{ lock.badge.text }}</div>
		<# } #>
	</a>
	<# if ( actions.length ) { #>
		<div class="elementor-finder__results__item__actions">
		<# jQuery.each( actions, function() { #>
			<a class="elementor-finder__results__item__action elementor-finder__results__item__action--{{ this.name }}" href="{{ this.url }}" target="_blank">
				<i class="eicon-{{{ this.icon }}}"></i>
			</a>
		<# } ); #>
		</div>
	<# } #>
</script>
            <link rel='stylesheet' id='hfe-widgets-style-css'
                href='https://web.wiseadvizor.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.33'
                media='all' />
            <link rel='stylesheet' id='wpr-button-animations-css-css'
                href='https://web.wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/css/lib/animations/button-animations.min.css?ver=1.3.975'
                media='all' />
            <link rel='stylesheet' id='e-animations-css'
                href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.21.6'
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
            <script src="https://web.wiseadvizor.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2"
                id="jquery-ui-core-js"></script>
            <script id="qi-addons-for-elementor-script-js-extra">
            var qodefQiAddonsGlobal = {
                "vars": {
                    "adminBarHeight": 32,
                    "iconArrowLeft": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>",
                    "iconArrowRight": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>",
                    "iconClose": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"
                }
            };
            </script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=1.7.1"
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
            <script
                src="//web.wiseadvizor.com/wp-content/plugins/the-plus-addons-for-elementor-page-builder/assets/js/main/general/theplus-purge.js?ver=5.5.3"
                id="plus-purge-js-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/vendor/react.min.js?ver=18.2.0" id="react-js">
            </script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/vendor/react-dom.min.js?ver=18.2.0"
                id="react-dom-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1"
                id="wp-hooks-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef"
                id="wp-i18n-js"></script>
            <script id="wp-i18n-js-after">
            wp.i18n.setLocaleData({
                'text direction\u0004ltr': ['ltr']
            });
            </script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/url.min.js?ver=b4979979018b684be209"
                id="wp-url-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/api-fetch.min.js?ver=0fa4dabf8bf2c7adf21a"
                id="wp-api-fetch-js"></script>
            <script id="wp-api-fetch-js-after">
            wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("https://web.wiseadvizor.com/wp-json/"));
            wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("d466649275");
            wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
            wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
            wp.apiFetch.nonceEndpoint = "https://web.wiseadvizor.com/wp-admin/admin-ajax.php?action=rest-nonce";
            </script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/a11y.min.js?ver=7032343a947cfccf5608"
                id="wp-a11y-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/deprecated.min.js?ver=73ad3591e7bc95f4777a"
                id="wp-deprecated-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/dom.min.js?ver=49ff2869626fbeaacc23"
                id="wp-dom-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/escape-html.min.js?ver=03e27a7b6ae14f7afaa6"
                id="wp-escape-html-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/element.min.js?ver=ed1c7604880e8b574b40"
                id="wp-element-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-includes/js/dist/is-shallow-equal.min.js?ver=20c2b06ecf04afb14fee"
                id="wp-is-shallow-equal-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/keycodes.min.js?ver=3460bd0fac9859d6886c"
                id="wp-keycodes-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/priority-queue.min.js?ver=422e19e9d48b269c5219"
                id="wp-priority-queue-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/compose.min.js?ver=3189b344ff39fef940b7"
                id="wp-compose-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/vendor/moment.min.js?ver=2.29.4"
                id="moment-js"></script>
            <script id="moment-js-after">
            moment.updateLocale('en_US', {
                "months": ["January", "February", "March", "April", "May", "June", "July", "August",
                    "September", "October", "November", "December"
                ],
                "monthsShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                    "Dec"
                ],
                "weekdays": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "weekdaysShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "week": {
                    "dow": 1
                },
                "longDateFormat": {
                    "LT": "g:i a",
                    "LTS": null,
                    "L": null,
                    "LL": "F j, Y",
                    "LLL": "F j, Y g:i a",
                    "LLLL": null
                }
            });
            </script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/date.min.js?ver=936c461ad5dce9c2c8ea"
                id="wp-date-js"></script>
            <script id="wp-date-js-after">
            wp.date.setSettings({
                "l10n": {
                    "locale": "en_US",
                    "months": ["January", "February", "March", "April", "May", "June", "July", "August",
                        "September", "October", "November", "December"
                    ],
                    "monthsShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                        "Dec"
                    ],
                    "weekdays": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                    "weekdaysShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                    "meridiem": {
                        "am": "am",
                        "pm": "pm",
                        "AM": "AM",
                        "PM": "PM"
                    },
                    "relative": {
                        "future": "%s from now",
                        "past": "%s ago",
                        "s": "a second",
                        "ss": "%d seconds",
                        "m": "a minute",
                        "mm": "%d minutes",
                        "h": "an hour",
                        "hh": "%d hours",
                        "d": "a day",
                        "dd": "%d days",
                        "M": "a month",
                        "MM": "%d months",
                        "y": "a year",
                        "yy": "%d years"
                    },
                    "startOfWeek": 1
                },
                "formats": {
                    "time": "g:i a",
                    "date": "F j, Y",
                    "datetime": "F j, Y g:i a",
                    "datetimeAbbreviated": "M j, Y g:i a"
                },
                "timezone": {
                    "offset": 0,
                    "string": "",
                    "abbr": ""
                }
            });
            </script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/html-entities.min.js?ver=36a4a255da7dd2e1bf8e"
                id="wp-html-entities-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/primitives.min.js?ver=6984e6eb5d6157c4fe44"
                id="wp-primitives-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/private-apis.min.js?ver=11cb2ebaa70a9f1f0ab5"
                id="wp-private-apis-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/redux-routine.min.js?ver=0be1b2a6a79703e28531"
                id="wp-redux-routine-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/data.min.js?ver=dc5f255634f3da29c8d5"
                id="wp-data-js"></script>
            <script id="wp-data-js-after">
            (function() {
                var userId = 1;
                var storageKey = "WP_DATA_USER_" + userId;
                wp.data
                    .use(wp.data.plugins.persistence, {
                        storageKey: storageKey
                    });
            })();
            </script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/rich-text.min.js?ver=6222504ebedf0627981b"
                id="wp-rich-text-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/warning.min.js?ver=122829a085511691f14d"
                id="wp-warning-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/components.min.js?ver=387d6480ace3103ccd8b"
                id="wp-components-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/plugins.min.js?ver=c485ff6186cdddabcf91"
                id="wp-plugins-js"></script>
            <script id="zip-ai-sidebar-js-extra">
            var zip_ai_react = {
                "ajax_url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin-ajax.php",
                "ajax_nonce": "6a08209b4d",
                "admin_nonce": "0766c273ee",
                "current_post_id": "7527",
                "auth_middleware": "https:\/\/app.zipwp.com\/auth\/?type=token&redirect_url=https%3A%2F%2Fweb.wiseadvizor.com%2Fwp-admin%2F%3Fnonce%3D24d5ce95b1%26scs-authorize%3Dtrue",
                "is_authorized": "",
                "is_ai_assistant_enabled": "1",
                "is_customize_preview": "",
                "collab_product_details": null,
                "zip_ai_assistant_options": ""
            };
            </script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/astra-sites/inc/lib/zip-ai/sidebar/build/sidebar-app.js?ver=195428426d8559d53d29"
                id="zip-ai-sidebar-js"></script>
            <script id="twenty-twenty-one-ie11-polyfills-js-after">
            (Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach) ||
            document.write(
                '<script src="https://web.wiseadvizor.com/wp-content/themes/twentytwentyone/assets/js/polyfills.js?ver=2.0"></scr' +
                'ipt>');
            </script>
            <script
                src="https://web.wiseadvizor.com/wp-content/themes/twentytwentyone/assets/js/responsive-embeds.js?ver=2.0"
                id="twenty-twenty-one-responsive-embeds-script-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.2"
                id="jquery-ui-mouse-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/jquery/ui/draggable.min.js?ver=1.13.2"
                id="jquery-ui-draggable-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js">
            </script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/backbone.min.js?ver=1.5.0" id="backbone-js">
            </script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/backbone/backbone.marionette.min.js?ver=2.4.5.e1"
                id="backbone-marionette-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/backbone/backbone.radio.min.js?ver=1.0.4"
                id="backbone-radio-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/common-modules.min.js?ver=3.21.6"
                id="elementor-common-modules-js"></script>
            <script id="elementor-web-cli-js-before">
            var elementorWebCliConfig = {
                "isDebug": true,
                "urls": {
                    "rest": "https:\/\/web.wiseadvizor.com\/wp-json\/",
                    "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
                },
                "nonce": "d466649275",
                "version": "3.21.6"
            };
            var elementorWebCliConfig = {
                "isDebug": true,
                "urls": {
                    "rest": "https:\/\/web.wiseadvizor.com\/wp-json\/",
                    "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
                },
                "nonce": "d466649275",
                "version": "3.21.6"
            };
            </script>
            <script src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/web-cli.min.js?ver=3.21.6"
                id="elementor-web-cli-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0"
                id="elementor-dialog-js"></script>
            <script id="wp-api-request-js-extra">
            var wpApiSettings = {
                "root": "https:\/\/web.wiseadvizor.com\/wp-json\/",
                "nonce": "d466649275",
                "versionString": "wp\/v2\/"
            };
            </script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/api-request.min.js?ver=6.4.3"
                id="wp-api-request-js"></script>
            <script id="elementor-dev-tools-js-before">
            var elementorDevToolsConfig = {
                "isDebug": true,
                "urls": {
                    "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
                },
                "deprecation": {
                    "soft_notices": [],
                    "soft_version_count": 4,
                    "hard_version_count": 8,
                    "current_version": "3.21.6"
                }
            };
            var elementorDevToolsConfig = {
                "isDebug": true,
                "urls": {
                    "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
                },
                "deprecation": {
                    "soft_notices": [],
                    "soft_version_count": 4,
                    "hard_version_count": 8,
                    "current_version": "3.21.6"
                }
            };
            var elementorDevToolsConfig = {
                "isDebug": true,
                "urls": {
                    "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
                },
                "deprecation": {
                    "soft_notices": [],
                    "soft_version_count": 4,
                    "hard_version_count": 8,
                    "current_version": "3.21.6"
                }
            };
            </script>
            <script src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/dev-tools.min.js?ver=3.21.6"
                id="elementor-dev-tools-js"></script>
            <script id="elementor-common-js-before">
            var elementorCommonConfig = {
                "version": "3.21.6",
                "isRTL": false,
                "isDebug": true,
                "isElementorDebug": false,
                "activeModules": ["ajax", "finder", "connect", "event-tracker"],
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
                    "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/",
                    "rest": "https:\/\/web.wiseadvizor.com\/wp-json\/"
                },
                "filesUpload": {
                    "unfilteredFiles": true
                },
                "library_connect": {
                    "is_connected": true,
                    "subscription_plans": {
                        "free": {
                            "label": null,
                            "promotion_url": null,
                            "color": null
                        },
                        "essential": {
                            "label": "Pro",
                            "promotion_url": "https:\/\/my.elementor.com\/upgrade-subscription\/?utm_source=template-library&utm_medium=wp-dash&utm_campaign=gopro",
                            "color": "#92003B"
                        },
                        "essential-oct2023": {
                            "label": "Advanced",
                            "promotion_url": "https:\/\/my.elementor.com\/upgrade-subscription\/?utm_source=template-library&utm_medium=wp-dash&utm_campaign=gopro",
                            "color": "#92003B"
                        },
                        "advanced": {
                            "label": "Advanced",
                            "promotion_url": "https:\/\/my.elementor.com\/upgrade-subscription\/?utm_source=template-library&utm_medium=wp-dash&utm_campaign=gopro",
                            "color": "#92003B"
                        },
                        "expert": {
                            "label": "Expert",
                            "promotion_url": "https:\/\/my.elementor.com\/upgrade-subscription\/?utm_source=template-library&utm_medium=wp-dash&utm_campaign=gopro",
                            "color": "#92003B"
                        },
                        "agency": {
                            "label": "Agency",
                            "promotion_url": "https:\/\/my.elementor.com\/upgrade-subscription\/?utm_source=template-library&utm_medium=wp-dash&utm_campaign=gopro",
                            "color": "#92003B"
                        }
                    },
                    "base_access_level": 0,
                    "base_access_tier": "free",
                    "current_access_level": 0,
                    "current_access_tier": "free"
                },
                "ajax": {
                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin-ajax.php",
                    "nonce": "3a1157c864"
                },
                "finder": {
                    "data": {
                        "edit": {
                            "title": "Edit",
                            "dynamic": true,
                            "name": "edit"
                        },
                        "general": {
                            "title": "General",
                            "dynamic": false,
                            "items": {
                                "saved-templates": {
                                    "title": "Saved Templates",
                                    "icon": "library-save",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?post_type=elementor_library&tabs_group=library",
                                    "keywords": ["template", "section", "page", "library"]
                                },
                                "system-info": {
                                    "title": "System Info",
                                    "icon": "info-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-system-info",
                                    "keywords": ["system", "info", "environment", "elementor"]
                                },
                                "role-manager": {
                                    "title": "Role Manager",
                                    "icon": "person",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-role-manager",
                                    "keywords": ["role", "manager", "user", "elementor"]
                                },
                                "knowledge-base": {
                                    "title": "Knowledge Base",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=go_knowledge_base_site",
                                    "keywords": ["help", "knowledge", "docs", "elementor"]
                                },
                                "theme-builder": {
                                    "title": "Theme Builder",
                                    "icon": "library-save",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.21.6#\/site-editor",
                                    "keywords": ["template", "header", "footer", "single", "archive", "search",
                                        "404", "library"
                                    ]
                                },
                                "kit-library": {
                                    "title": "Kit Library",
                                    "icon": "kit-parts",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.21.6#\/kit-library",
                                    "keywords": ["kit library", "kit", "library", "site parts", "parts", "assets",
                                        "templates"
                                    ]
                                },
                                "popups": {
                                    "title": "Popups",
                                    "icon": "library-save",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?post_type=elementor_library&tabs_group=popup&elementor_library_type=popup",
                                    "keywords": ["template", "popup", "library"]
                                }
                            },
                            "name": "general"
                        },
                        "create": {
                            "title": "Create",
                            "dynamic": false,
                            "items": {
                                "page": {
                                    "title": "Add New Page Template",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&template_type=page&_wpnonce=c5191aa8b5",
                                    "keywords": ["Add New Page Template", "post", "page", "template", "new",
                                        "create"
                                    ]
                                },
                                "section": {
                                    "title": "Add New Section",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=c5191aa8b5&template_type=section",
                                    "keywords": ["Add New Section", "post", "page", "template", "new", "create"]
                                },
                                "wp-post": {
                                    "title": "Add New Post",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=post&template_type=wp-post&_wpnonce=c5191aa8b5",
                                    "keywords": ["Add New Post", "post", "page", "template", "new", "create"]
                                },
                                "wp-page": {
                                    "title": "Add New Page",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=page&template_type=wp-page&_wpnonce=c5191aa8b5",
                                    "keywords": ["Add New Page", "post", "page", "template", "new", "create"]
                                },
                                "wpr-theme-builder": {
                                    "title": "Add New WPR Theme Builder",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&template_type=wpr-theme-builder&_wpnonce=c5191aa8b5",
                                    "keywords": ["Add New WPR Theme Builder", "post", "page", "template", "new",
                                        "create"
                                    ]
                                },
                                "wpr-popups": {
                                    "title": "Add New WPR Popup",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&template_type=wpr-popups&_wpnonce=c5191aa8b5",
                                    "keywords": ["Add New WPR Popup", "post", "page", "template", "new", "create"]
                                },
                                "landing-page": {
                                    "title": "Add New Landing Page",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=e-landing-page&template_type=landing-page&_wpnonce=c5191aa8b5#library",
                                    "keywords": ["Add New Landing Page", "post", "page", "template", "new",
                                        "create"]
                                },
                                "popup": {
                                    "title": "Add New Popup",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=c5191aa8b5&template_type=popup",
                                    "keywords": ["Add New Popup", "post", "page", "template", "new", "create"]
                                },
                                "header": {
                                    "title": "Add New Header",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=c5191aa8b5&template_type=header",
                                    "keywords": ["Add New Header", "post", "page", "template", "new", "create"]
                                },
                                "footer": {
                                    "title": "Add New Footer",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=c5191aa8b5&template_type=footer",
                                    "keywords": ["Add New Footer", "post", "page", "template", "new", "create"]
                                },
                                "single": {
                                    "title": "Add New Single",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=c5191aa8b5&template_type=single",
                                    "keywords": ["Add New Single", "post", "page", "template", "new", "create"]
                                },
                                "single-post": {
                                    "title": "Add New Single Post",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=c5191aa8b5&template_type=single-post",
                                    "keywords": ["Add New Single Post", "post", "page", "template", "new", "create"]
                                },
                                "single-page": {
                                    "title": "Add New Single Page",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=c5191aa8b5&template_type=single-page&_elementor_template_sub_type=page",
                                    "keywords": ["Add New Single Page", "post", "page", "template", "new", "create"]
                                },
                                "archive": {
                                    "title": "Add New Archive",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=c5191aa8b5&template_type=archive",
                                    "keywords": ["Add New Archive", "post", "page", "template", "new", "create"]
                                },
                                "search-results": {
                                    "title": "Add New Search Results",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=c5191aa8b5&template_type=search-results&_elementor_template_sub_type=search",
                                    "keywords": ["Add New Search Results", "post", "page", "template", "new",
                                        "create"
                                    ]
                                },
                                "error-404": {
                                    "title": "Add New Error 404",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=c5191aa8b5&template_type=error-404&_elementor_template_sub_type=not_found404",
                                    "keywords": ["Add New Error 404", "post", "page", "template", "new", "create"]
                                },
                                "code_snippet": {
                                    "title": "Add New Custom Code",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/post-new.php?post_type=elementor_snippet",
                                    "keywords": ["Add New Custom Code", "post", "page", "template", "new", "create"]
                                },
                                "wpr_templates": {
                                    "title": "Add New Royal Templates",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=wpr_templates&_wpnonce=c5191aa8b5",
                                    "keywords": ["Add New Royal Templates", "post", "page", "template", "new",
                                        "create"
                                    ]
                                },
                                "elementor-hf": {
                                    "title": "Add New Elementor Header &amp; Footer Builder",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor-hf&_wpnonce=c5191aa8b5",
                                    "keywords": ["Add New Elementor Header &amp; Footer Builder", "post", "page",
                                        "template", "new", "create"
                                    ]
                                },
                                "wpr_mega_menu": {
                                    "title": "Add New Royal Mega Menu",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=wpr_mega_menu&_wpnonce=c5191aa8b5",
                                    "keywords": ["Add New Royal Mega Menu", "post", "page", "template", "new",
                                        "create"
                                    ]
                                },
                                "theme-template": {
                                    "title": "Add New Theme Template",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.21.6#\/site-editor\/add-new",
                                    "keywords": ["template", "theme", "new", "create"]
                                }
                            },
                            "name": "create"
                        },
                        "site": {
                            "title": "Site",
                            "dynamic": false,
                            "items": {
                                "homepage": {
                                    "title": "Homepage",
                                    "url": "https:\/\/web.wiseadvizor.com",
                                    "icon": "home-heart",
                                    "keywords": ["home", "page"]
                                },
                                "wordpress-dashboard": {
                                    "title": "Dashboard",
                                    "icon": "dashboard",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/",
                                    "keywords": ["dashboard", "wordpress"]
                                },
                                "wordpress-menus": {
                                    "title": "Menus",
                                    "icon": "wordpress",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/nav-menus.php",
                                    "keywords": ["menu", "wordpress"]
                                },
                                "wordpress-themes": {
                                    "title": "Themes",
                                    "icon": "wordpress",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/themes.php",
                                    "keywords": ["themes", "wordpress"]
                                },
                                "wordpress-customizer": {
                                    "title": "Customizer",
                                    "icon": "wordpress",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/customize.php",
                                    "keywords": ["customizer", "wordpress"]
                                },
                                "wordpress-plugins": {
                                    "title": "Plugins",
                                    "icon": "wordpress",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/plugins.php",
                                    "keywords": ["plugins", "wordpress"]
                                },
                                "wordpress-users": {
                                    "title": "Users",
                                    "icon": "wordpress",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/users.php",
                                    "keywords": ["users", "profile", "wordpress"]
                                },
                                "apps": {
                                    "title": "Add-ons",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-apps",
                                    "icon": "apps",
                                    "keywords": ["apps", "addon", "plugin", "extension", "integration"]
                                }
                            },
                            "name": "site"
                        },
                        "settings": {
                            "title": "Settings",
                            "dynamic": false,
                            "items": {
                                "general-settings": {
                                    "title": "General Settings",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor",
                                    "keywords": ["general", "settings", "elementor"]
                                },
                                "advanced": {
                                    "title": "Advanced",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor#tab-advanced",
                                    "keywords": ["advanced", "settings", "elementor"]
                                },
                                "experiments": {
                                    "title": "Experiments",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor#tab-experiments",
                                    "keywords": ["settings", "elementor", "experiments"]
                                },
                                "features": {
                                    "title": "Features",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor#tab-experiments",
                                    "keywords": ["settings", "elementor", "features"]
                                },
                                "element-manager": {
                                    "title": "Element Manager",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-element-manager",
                                    "keywords": ["settings", "elements", "widgets", "manager"]
                                },
                                "custom-fonts": {
                                    "title": "Custom Fonts",
                                    "icon": "typography",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?post_type=elementor_font",
                                    "keywords": ["custom", "fonts", "elementor"]
                                },
                                "custom-icons": {
                                    "title": "Custom Icons",
                                    "icon": "favorite",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?post_type=elementor_icons",
                                    "keywords": ["custom", "icons", "elementor"]
                                }
                            },
                            "name": "settings"
                        },
                        "tools": {
                            "title": "Tools",
                            "dynamic": false,
                            "items": {
                                "tools": {
                                    "title": "Tools",
                                    "icon": "tools",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-tools",
                                    "keywords": ["tools", "regenerate css", "safe mode", "debug bar",
                                        "sync library", "elementor"
                                    ]
                                },
                                "replace-url": {
                                    "title": "Replace URL",
                                    "icon": "tools",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-tools#tab-replace_url",
                                    "keywords": ["tools", "replace url", "domain", "elementor"]
                                },
                                "maintenance-mode": {
                                    "title": "Maintenance Mode",
                                    "icon": "tools",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-tools#tab-maintenance_mode",
                                    "keywords": ["tools", "maintenance", "coming soon", "elementor"]
                                },
                                "import-export": {
                                    "title": "Import Export",
                                    "icon": "import-export",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-tools#tab-import-export-kit",
                                    "keywords": ["tools", "import export", "import", "export", "kit"]
                                },
                                "version-control": {
                                    "title": "Version Control",
                                    "icon": "time-line",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-tools#tab-versions",
                                    "keywords": ["tools", "version", "control", "rollback", "beta", "elementor"]
                                }
                            },
                            "name": "tools"
                        }
                    }
                },
                "connect": [],
                "event-tracker": {
                    "isUserDataShared": true
                }
            };
            </script>
            <script src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/common.min.js?ver=3.21.6"
                id="elementor-common-js"></script>
            <script id="elementor-app-loader-js-before">
            var elementorAppConfig = {
                "menu_url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.21.6#\/site-editor",
                "assets_url": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/",
                "pages_url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?post_type=page",
                "return_url": "https:\/\/web.wiseadvizor.com\/wp-admin\/",
                "hasPro": true,
                "admin_url": "https:\/\/web.wiseadvizor.com\/wp-admin\/",
                "login_url": "https:\/\/web.wiseadvizor.com\/wp-login.php",
                "base_url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.21.6",
                "promotion": {
                    "upgrade_url": "https:\/\/go.elementor.com\/go-pro-theme-builder\/"
                },
                "site-editor": [],
                "import-export": [],
                "kit-library": [],
                "onboarding": []
            };
            </script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/app-loader.min.js?ver=3.21.6"
                id="elementor-app-loader-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1"
                id="jquery-numerator-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js">
            </script>
            <script id="tpgb-admin-bar-js-before">
            var TpgbAdminbar = {
                "tpgb_edit_template": []
            }
            </script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/the-plus-addons-for-block-editor/assets/js/main/general/tpgb-admin-bar.min.js?ver=3.2.9"
                id="tpgb-admin-bar-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.21.6"
                id="elementor-webpack-runtime-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.21.6"
                id="elementor-frontend-modules-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
                id="elementor-waypoints-js"></script>
            <script id="elementor-frontend-js-before">
            var elementorFrontendConfig = {
                "environmentMode": {
                    "edit": false,
                    "wpPreview": true,
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
                    "id": 7527,
                    "title": "Elementor%20%237527%20%E2%80%93%20WISE%20ADVIZOR",
                    "excerpt": "",
                    "featuredImage": false
                },
                "user": {
                    "roles": ["administrator"]
                }
            };
            </script>
            <script src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.21.6"
                id="elementor-frontend-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js?ver=6.4.3"
                id="qi-addons-for-elementor-elementor-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.8.2"
                id="elementor-pro-webpack-runtime-js"></script>
            <script id="elementor-pro-frontend-js-before">
            var ElementorProFrontendConfig = {
                "ajaxurl": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin-ajax.php",
                "nonce": "462910e3ee",
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
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.8.2"
                id="elementor-pro-frontend-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.8.2"
                id="pro-elements-handlers-js"></script>
            <script id="wpr-addons-js-js-extra">
            var WprConfig = {
                "ajaxurl": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin-ajax.php",
                "resturl": "https:\/\/web.wiseadvizor.com\/wp-json\/wpraddons\/v1",
                "nonce": "f673c01cb8",
                "addedToCartText": "was added to cart",
                "viewCart": "View Cart",
                "comparePageID": "",
                "comparePageURL": "https:\/\/web.wiseadvizor.com\/elementor-7527\/",
                "wishlistPageID": "",
                "wishlistPageURL": "https:\/\/web.wiseadvizor.com\/elementor-7527\/",
                "chooseQuantityText": "Please select the required number of items.",
                "site_key": "",
                "is_admin": "1",
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
            <script id="elementor-admin-bar-js-before">
            var elementorAdminBarConfig = {
                "elementor_edit_page": {
                    "id": "elementor_edit_page",
                    "title": "Edit with Elementor",
                    "href": "https:\/\/web.wiseadvizor.com\/wp-admin\/post.php?post=7527&action=elementor",
                    "children": {
                        "32": {
                            "id": "elementor_edit_doc_32",
                            "title": "Footer",
                            "sub_title": "Post",
                            "href": "https:\/\/web.wiseadvizor.com\/wp-admin\/post.php?post=32&action=elementor"
                        },
                        "33": {
                            "id": "elementor_site_settings",
                            "title": "Site Settings",
                            "sub_title": "Site",
                            "href": "https:\/\/web.wiseadvizor.com\/wp-admin\/post.php?post=7527&action=elementor&active-document=5",
                            "class": "elementor-site-settings",
                            "parent_class": "elementor-second-section"
                        },
                        "34": {
                            "id": "elementor_app_site_editor",
                            "title": "Theme Builder",
                            "sub_title": "Site",
                            "href": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.21.6#\/site-editor",
                            "class": "elementor-app-link",
                            "parent_class": "elementor-second-section"
                        }
                    }
                }
            };
            </script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/elementor-admin-bar.min.js?ver=3.21.6"
                id="elementor-admin-bar-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/hoverintent-js.min.js?ver=2.2.1"
                id="hoverintent-js-js"></script>
            <script id="admin-bar-js-before">
            (function() {
                function wpforms_admin_bar_menu_init() {
                    var template = document.getElementById('tmpl-wpforms-admin-menubar-data'),
                        notifications = document.getElementById('wp-admin-bar-wpforms-notifications');

                    if (!template) {
                        return;
                    }

                    if (!notifications) {
                        var menu = document.getElementById('wp-admin-bar-wpforms-menu-default');

                        if (!menu) {
                            return;
                        }

                        menu.insertAdjacentHTML('afterBegin', template.innerHTML);
                    } else {
                        notifications.insertAdjacentHTML('afterend', template.innerHTML);
                    }
                };
                document.addEventListener('DOMContentLoaded', wpforms_admin_bar_menu_init);
            }());
            </script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/admin-bar.min.js?ver=6.4.3" id="admin-bar-js">
            </script>
</body>

</html>