<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Webinar &#8211; WISE ADVIZOR</title>
    <script>
    var theplus_ajax_url = "https://web.wiseadvizor.com/wp-admin/admin-ajax.php";
    var theplus_ajax_post_url = "https://web.wiseadvizor.com/wp-admin/admin-post.php";
    var theplus_nonce = "45aa92a5e5";
    </script>
    <meta name='robots' content='max-image-preview:large' />
    <!-- <script>
    (function() {
        var query = document.location.search;

        if (query && query.indexOf('preview=true') !== -1) {
            window.name = 'wp-preview-5668';
        }

        if (window.addEventListener) {
            window.addEventListener('pagehide', function() {
                window.name = '';
            });
        }
    }());
    </script> -->
    <link rel="alternate" type="application/rss+xml" title="WISE ADVIZOR &raquo; Feed"
        href="https://web.wiseadvizor.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="WISE ADVIZOR &raquo; Comments Feed"
        href="https://web.wiseadvizor.com/comments/feed/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
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
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.27.0'
        media='all' />
    <link rel='stylesheet' id='elementor-common-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/css/common.min.css?ver=3.19.0'
        media='all' />
    <link rel='stylesheet' id='e-theme-ui-light-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/css/theme-light.min.css?ver=3.19.0'
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
    <link rel='stylesheet' id='niso-carousel-fontello-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/fontello.css?ver=1.0'
        media='all' />
    <link rel='stylesheet' id='niso-carousel-owl-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/owl.carousel.css?ver=1.0'
        media='all' />
    <link rel='stylesheet' id='niso-theme-default-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/themes/niso.theme.default.css?ver=1.0'
        media='all' />
    <link rel='stylesheet' id='niso-animate-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/animate.css?ver=1.3.18'
        media='all' />
    <link rel='stylesheet' id='niso-carousel-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/niso-carousel.css?ver=1.3.18'
        media='all' />
    <link rel='stylesheet' id='niso-carousel-lightbox-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/nivo-lightbox.css?ver=1.0'
        media='all' />
    <link rel='stylesheet' id='niso-carousel-lightbox-theme-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/themes/default.css?ver=1.0'
        media='all' />
    <link rel='stylesheet' id='hfe-style-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.24'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.19.0'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css?ver=5.3.6'
        media='all' />
    <link rel='stylesheet' id='elementor-post-5-css'
        href='https://web.wiseadvizor.com/wp-content/uploads/elementor/css/post-5.css?ver=1706785959' media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.8.2'
        media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.19.0'
        media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.19.0'
        media='all' />
    <link rel='stylesheet' id='she-header-style-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/sticky-header-effects-for-elementor/assets/css/she-header-style.css?ver=1.6.10'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='https://web.wiseadvizor.com/wp-content/uploads/elementor/css/global.css?ver=1706785961' media='all' />
    <link rel='stylesheet' id='hfe-widgets-style-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.24'
        media='all' />
    <link rel='stylesheet' id='elementor-post-5668-css'
        href='https://web.wiseadvizor.com/wp-content/uploads/elementor/css/post-5668.css?ver=1711953395' media='all' />
    <link rel='stylesheet' id='elementor-post-32-css'
        href='https://web.wiseadvizor.com/wp-content/uploads/elementor/css/post-32.css?ver=1706785961' media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-style-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='theplus-front-css-css'
        href='//web.wiseadvizor.com/wp-content/uploads/theplus-addons/theplus.min.css?ver=1711953395' media='all' />
    <link rel='stylesheet' id='twenty-twenty-one-style-css'
        href='https://web.wiseadvizor.com/wp-content/themes/twentytwentyone/style.css?ver=2.0' media='all' />
    <link rel='stylesheet' id='twenty-twenty-one-print-style-css'
        href='https://web.wiseadvizor.com/wp-content/themes/twentytwentyone/assets/css/print.css?ver=2.0'
        media='print' />
    <link rel='stylesheet' id='wpforms-admin-bar-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/css/admin-bar.min.css?ver=1.8.6.4'
        media='all' />
    <style id='wpforms-admin-bar-inline-css'>
    #wpadminbar .wpforms-menu-notification-counter,
    #wpadminbar .wpforms-menu-notification-indicator {
        background-color: #d63638 !important;
        color: #ffffff !important;
    }
    </style>
    <link rel='stylesheet' id='wpr-text-animations-css-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/css/lib/animations/text-animations.min.css?ver=1.3.87'
        media='all' />
    <link rel='stylesheet' id='wpr-addons-css-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/css/frontend.min.css?ver=1.3.87'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CSail%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CShippori+Antique+B1%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COswald%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Condensed%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3'
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
        src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.19.0"
        id="font-awesome-4-shim-js"></script>
    <script
        src="https://web.wiseadvizor.com/wp-content/plugins/sticky-header-effects-for-elementor/assets/js/she-header.js?ver=1.6.10"
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
    <link rel="alternate" type="application/json" href="https://web.wiseadvizor.com/wp-json/wp/v2/pages/5668" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://web.wiseadvizor.com/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.3" />
    <link rel="canonical" href="https://web.wiseadvizor.com/elementor-5668/" />
    <link rel='shortlink' href='https://web.wiseadvizor.com/?p=5668' />
    <link rel="alternate" type="application/json+oembed"
        href="https://web.wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fweb.wiseadvizor.com%2Felementor-5668%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://web.wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fweb.wiseadvizor.com%2Felementor-5668%2F&#038;format=xml" />
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
    </style>
    <meta name="generator"
        content="Elementor 3.19.0; features: e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-swap">
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
</head>

<body
    class="page-template page-template-elementor_header_footer page page-id-5668 wp-embed-responsive ehf-footer ehf-template-twentytwentyone ehf-stylesheet-twentytwentyone qodef-qi--no-touch qi-addons-for-elementor-1.6.7 is-light-theme no-js singular elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-5668">
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

    <div id="page" class="site">
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div data-elementor-type="wp-page" data-elementor-id="5668" class="elementor elementor-5668">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-355bdd2 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="355bdd2" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6c5957f"
                                    data-id="6c5957f" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-42d40cd elementor-widget elementor-widget-heading"
                                            data-id="42d40cd" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                /*! elementor - v3.19.0 - 29-01-2024 */
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
                                                <p class="elementor-heading-title elementor-size-default">Free online
                                                    webinar</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-36477d7 elementor-widget elementor-widget-heading"
                                            data-id="36477d7" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">How to
                                                    validate your business idea?</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-139df9d elementor-widget elementor-widget-heading"
                                            data-id="139df9d" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">Host: Soha El
                                                    Baklawy, Entrepreneur & Startup Mentor</h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8f1739e elementor-widget elementor-widget-heading"
                                            data-id="8f1739e" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="elementor-heading-title elementor-size-default">When: 17th
                                                    April 2024, 12:00PM IST</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-a12b512 elementor-widget elementor-widget-wpr-countdown"
                                            data-id="a12b512" data-element_type="widget"
                                            data-widget_type="wpr-countdown.default">
                                            <div class="elementor-widget-container">
                                                <div class="wpr-countdown-wrap elementor-clearfix" data-type="due-date"
                                                    data-show-again="0" data-actions="[]" data-interval="1713355200">
                                                    <div class="wpr-countdown-item"><span
                                                            class="wpr-countdown-number wpr-countdown-days"
                                                            data-item="days"></span><span class="wpr-countdown-label"
                                                            data-text="{&quot;singular&quot;:&quot;Day&quot;,&quot;plural&quot;:&quot;Days&quot;}">Days</span>
                                                    </div>
                                                    <div class="wpr-countdown-item"><span
                                                            class="wpr-countdown-number wpr-countdown-hours"
                                                            data-item="hours"></span><span class="wpr-countdown-label"
                                                            data-text="{&quot;singular&quot;:&quot;Hour&quot;,&quot;plural&quot;:&quot;Hours&quot;}">Hours</span>
                                                    </div>
                                                    <div class="wpr-countdown-item"><span
                                                            class="wpr-countdown-number wpr-countdown-minutes"
                                                            data-item="minutes"></span><span class="wpr-countdown-label"
                                                            data-text="{&quot;singular&quot;:&quot;Minute&quot;,&quot;plural&quot;:&quot;Minutes&quot;}">Minutes</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-69b8626 elementor-align-center elementor-widget elementor-widget-button"
                                            data-id="69b8626" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="#register_here">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Book your seat
                                                                now</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6635b3f elementor-widget elementor-widget-heading"
                                            data-id="6635b3f" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="elementor-heading-title elementor-size-default">10 Spots left
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e2217df"
                                    data-id="e2217df" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-43093cf elementor-widget elementor-widget-image"
                                            data-id="43093cf" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                /*! elementor - v3.19.0 - 29-01-2024 */
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
                                                </style> <img fetchpriority="high" decoding="async" width="594"
                                                    height="632"
                                                    src="https://web.wiseadvizor.com/wp-content/uploads/2024/03/sohas-pic-2023.png"
                                                    class="attachment-large size-large wp-image-5671" alt=""
                                                    srcset="https://web.wiseadvizor.com/wp-content/uploads/2024/03/sohas-pic-2023.png 594w, https://web.wiseadvizor.com/wp-content/uploads/2024/03/sohas-pic-2023-282x300.png 282w"
                                                    sizes="(max-width: 594px) 100vw, 594px"
                                                    style="width:100%;height:106.4%;max-width:594px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-7824c66 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            style="background-color:#6458D4" data-id="7824c66" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3430f77"
                                    data-id="3430f77" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4948a4b9 elementor-widget elementor-widget-heading"
                                            data-id="4948a4b9" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Is your
                                                    startup idea brilliant... or just wishful thinking? <br><Br>
                                                    Does your business really fill a market need.. or Are you just too
                                                    in-love with your idea?
                                                    <br>
                                                    Many aspiring entrepreneurs get stuck at the validation stage, while
                                                    other entrepreneurs doomly fail as a result of mismatch if their
                                                    business concept has and real-world potential.
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3a029543 elementor-widget elementor-widget-text-editor"
                                            data-id="3a029543" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                /*! elementor - v3.19.0 - 29-01-2024 */
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
                                                </style>
                                                <p>During this stage, the entrepreneur evaluates the business idea to
                                                    determine its viability and potential for success. This stage
                                                    requires a lot of research, testing, and experimentation to ensure
                                                    that the business idea is profitable. To emphasize the viability and
                                                    potential of your startup. Reiterate the market need, your unique
                                                    solution, and the value it brings to customers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-4399a714 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            style="background-color:#F3EEF5;" data-id="4399a714" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-wide">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6f1fa09d border-right"
                                    data-id="6f1fa09d" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-754665b1 elementor-widget elementor-widget-heading"
                                            data-id="754665b1" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">In this
                                                    exclusive webinar, you'll learn :

                                                </h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-eec5a83 elementor-widget elementor-widget-text-editor"
                                            data-id="eec5a83" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>To enhance your startup&#8217;s viability: Develop the knowledge and
                                                    tools to confidently evaluate your idea&#8217;s success potential
                                                    via: </p>
                                                <ul
                                                    style="padding-left: calc(2 * var(--global--spacing-horizontal)); font-family: var(--list--font-family); max-width: var(--global--spacing-measure); font-size: 16px;">
                                                    <li style="max-width: var(--global--spacing-measure);"><span
                                                            style="max-width: var(--global--spacing-measure);">Easy ways
                                                            for validating business ideas</span></li>
                                                </ul>
                                                <ul
                                                    style="padding-left: calc(2 * var(--global--spacing-horizontal)); font-family: var(--list--font-family); max-width: var(--global--spacing-measure); font-size: 16px;">
                                                    <li style="max-width: var(--global--spacing-measure);"><span
                                                            style="max-width: var(--global--spacing-measure);">5 major
                                                            steps of Business validation</span></li>
                                                    <li style="max-width: var(--global--spacing-measure);"><span
                                                            style="max-width: var(--global--spacing-measure);">How Lean
                                                            Business model canvas helps with Business Validation</span>
                                                    </li>
                                                    <li style="max-width: var(--global--spacing-measure);"><span
                                                            style="max-width: var(--global--spacing-measure); font-family: Aptos, Aptos_EmbeddedFont, Aptos_MSFontService, Calibri, Helvetica, sans-serif;">Brief
                                                            on Market research, testing and MVP</span></li>
                                                    <li style="max-width: var(--global--spacing-measure);">
                                                        <h2
                                                            style="color: #242424; letter-spacing: normal; font-size: 20px; font-family: Kanit, sans-serif; font-weight: 500; margin-bottom: 5px; line-height: 0.7em;">
                                                            <span
                                                                style="border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 12pt; line-height: inherit; font-family: Aptos, Aptos_EmbeddedFont, Aptos_MSFontService, Calibri, Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; margin: 0px; padding: 0px; vertical-align: baseline;">Refining
                                                                your value proposition: </span><span
                                                                style="border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 12pt; line-height: inherit; font-family: Aptos, Aptos_EmbeddedFont, Aptos_MSFontService, Calibri, Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; margin: 0px; padding: 0px; vertical-align: baseline;">enhancing
                                                                product market fit</span>
                                                        </h2>
                                                        <p> </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex" style="height: 255px;color:#000 !important;width: 1.5px;">
                                    <div class="vr"></div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7a39da1"
                                    data-id="7a39da1" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-7a86f3c elementor-widget elementor-widget-heading"
                                            data-id="7a86f3c" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">This webinar
                                                    is perfect for you if:</h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5ce9ed3 elementor-widget elementor-widget-text-editor"
                                            data-id="5ce9ed3" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <ul
                                                    style="color: #242424; font-family: 'Segoe UI', 'Segoe UI Web (West European)', 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', sans-serif;">
                                                    <li
                                                        style="color: black !important; font-size: 12pt; font-family: Aptos, Aptos_EmbeddedFont, Aptos_MSFontService, Calibri, Helvetica, sans-serif; margin-left: 15px;">
                                                        <span
                                                            style="border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 12pt; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; margin: 0px; padding: 0px; vertical-align: baseline; color: inherit;">You
                                                            have a startup idea but are unsure if it&#8217;s
                                                            viable.<br /></span>
                                                    </li>
                                                    <li
                                                        style="color: black !important; font-size: 12pt; font-family: Aptos, Aptos_EmbeddedFont, Aptos_MSFontService, Calibri, Helvetica, sans-serif; margin-left: 15px;">
                                                        <span
                                                            style="border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 12pt; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; margin: 0px; padding: 0px; vertical-align: baseline; color: inherit;">You&#8217;re
                                                            struggling to identify your target audience and market
                                                            demand.<br /></span>
                                                    </li>
                                                    <li
                                                        style="color: black !important; font-size: 12pt; font-family: Aptos, Aptos_EmbeddedFont, Aptos_MSFontService, Calibri, Helvetica, sans-serif; margin-left: 15px;">
                                                        <span
                                                            style="border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 12pt; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; margin: 0px; padding: 0px; vertical-align: baseline; color: inherit;">You
                                                            need guidance on testing your product or service
                                                            effectively.<br /></span>
                                                    </li>
                                                    <li
                                                        style="color: black !important; font-size: 12pt; font-family: Aptos, Aptos_EmbeddedFont, Aptos_MSFontService, Calibri, Helvetica, sans-serif; margin-left: 15px;">
                                                        <span
                                                            style="border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 12pt; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; margin: 0px; padding: 0px; vertical-align: baseline; color: inherit;">You
                                                            want to learn how to articulate your value proposition and
                                                            stand out from the competition.</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-c3ea9a2 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="c3ea9a2" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-89609e1"
                                    data-id="89609e1" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-0f9d480 elementor-widget elementor-widget-heading"
                                            data-id="0f9d480" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-default">About Soha
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5c71ff6 elementor-widget elementor-widget-text-editor"
                                            data-id="5c71ff6" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p><span style="color: #000000;"><strong>She has over 22 years of
                                                            experience</strong> guiding aspiring entrepreneurs towards
                                                        success. She&#8217;s the founder of Businessita, a platform
                                                        dedicated to empowering women in business, and has a proven
                                                        track record of helping startups thrive.</span></p>
                                                <div class="elementor-element elementor-element-6b6a93e elementor-widget elementor-widget-text-editor"
                                                    data-id="6b6a93e" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p><span style="color: #000000;">She is internationally
                                                                recognized, having received multiple awards and being
                                                                honored as one of the top 50 influential women in her
                                                                field. As a mentor, trainer, and strategy &amp; startup
                                                                advisor, she brings a wealth of experience and accolades
                                                                to inspire and empower individuals and
                                                                organizations.</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6133575 elementor-widget elementor-widget-heading"
                                            data-id="6133575" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="elementor-heading-title elementor-size-default">Achievements:
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7674a77 elementor-widget elementor-widget-text-editor"
                                            data-id="7674a77" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <ul>
                                                    <li>
                                                        <div>Delivered 440+ consultation hour</div>
                                                    </li>
                                                    <li>
                                                        <div>Delivered 700+ mentorship hours</div>
                                                    </li>
                                                    <li>
                                                        <div>27 talks (Nationally and Internationally)</div>
                                                    </li>
                                                    <li>
                                                        <div>26+ features (Nationally and Internationally)</div>
                                                    </li>
                                                    <li>
                                                        <div>10+ jury (Nationally and internationally)</div>
                                                    </li>
                                                    <li>
                                                        <div>Mentored 180+ Entrepreneur (Nationally and Internationally)
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>Delivered 6+ Corporate Strategy and development
                                                            consultations</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0698e86"
                                    data-id="0698e86" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-080f3cc elementor-widget elementor-widget-heading"
                                            data-id="080f3cc" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default"
                                                    style="color: #000000;font-family:Poppins, Sans-serif;">Register
                                                    Here
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-79eef3b elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="79eef3b" data-element_type="widget"
                                            data-widget_type="divider.default">
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
                                                </style>
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3a54ca2 elementor-button-align-stretch elementor-widget elementor-widget-form"
                                            data-id="3a54ca2" data-element_type="widget"
                                            data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
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
                                                <form id="register_here" class="elementor-form" method="post"
                                                    name="New Form" action="{{ route('webinar.save') }}">
                                                    @csrf
                                                    <input type="hidden" name="post_id" value="13">
                                                    <input type="hidden" name="form_id" value="3a54ca2">
                                                    <input type="hidden" name="referer_title" value="Contact Us">

                                                    <input type="hidden" name="queried_id" value="13">

                                                    <div class="elementor-form-fields-wrapper elementor-labels-">
                                                        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-firstname elementor-col-50 elementor-sm-50 elementor-field-required"
                                                            style="margin-bottom:10px;padding-right:10px;">
                                                            <input size="1" type="text" name="firstname"
                                                                id="form-field-firstname"
                                                                class="elementor-field elementor-size-md  elementor-field-textual"
                                                                placeholder="First Name" required="required"
                                                                aria-required="true">
                                                        </div>
                                                        <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-lastname elementor-col-50 elementor-sm-50 elementor-field-required"
                                                            style="margin-bottom:10px;">
                                                            <input size="1" type="text" name="lastname"
                                                                id="form-field-lastname"
                                                                class="elementor-field elementor-size-md  elementor-field-textual"
                                                                placeholder="Last Name" required="required"
                                                                aria-required="true">
                                                        </div>
                                                        <div class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-mobilenumber elementor-col-50 elementor-sm-50 elementor-field-required mb-2"
                                                            style="margin-bottom:10px;padding-right:10px;">
                                                            <input type="number" name="mobilenumber"
                                                                id="form-field-mobilenumber"
                                                                class="elementor-field elementor-size-md  elementor-field-textual"
                                                                placeholder="LinkedIn" aria-required="true">
                                                        </div>
                                                        <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-50 elementor-sm-50 elementor-field-required mb-2"
                                                            style="margin-bottom:10px;">
                                                            <input size="1" type="email" name="email"
                                                                id="form-field-email"
                                                                class="elementor-field elementor-size-md  elementor-field-textual"
                                                                placeholder="Email" required="required"
                                                                aria-required="true">
                                                        </div>
                                                        <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100 elementor-field-required mb-2"
                                                            style="margin-bottom:10px;">
                                                            <textarea
                                                                class="elementor-field-textual elementor-field  elementor-size-md"
                                                                name="message" id="form-field-message" rows="4"
                                                                placeholder="As spots are limited, we kindly ask you to confirm your availability for the webinar."
                                                                required="required" aria-required="true"></textarea>
                                                        </div>
                                                        <div class="elementor-field-type-recaptcha elementor-field-group elementor-column elementor-field-group-field_6ff1b74 elementor-col-100 mb-2"
                                                            style="margin-bottom:10px;">
                                                            <div class="elementor-field" id="form-field-field_6ff1b74">
                                                                <!-- <div class="elementor-g-recaptcha"> -->
                                                                <!-- <strong>ReCaptcha:</strong> -->
                                                                <div class="g-recaptcha"
                                                                    data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}">
                                                                </div>
                                                                @if ($errors->has('g-recaptcha-response'))
                                                                <span
                                                                    class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                                                @endif
                                                                <!-- </div> -->
                                                            </div>
                                                        </div>
                                                        <!-- <div
                                                            class="elementor-field-type-recaptcha elementor-field-group elementor-column elementor-field-group-field_6ff1b74 elementor-col-100">
                                                            <div class="elementor-field" id="form-field-field_6ff1b74">
                                                                <div class="elementor-g-recaptcha"
                                                                    data-sitekey="6LfPgL4mAAAAAERvwHh18CwnF_WM9VlCt_n3HU53"
                                                                    data-type="v2_checkbox" data-theme="light"
                                                                    data-size="normal"></div>
                                                            </div>
                                                        </div> -->
                                                        <div
                                                            class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                            <button type="submit"
                                                                class="elementor-button elementor-size-sm">
                                                                <span>
                                                                    <span class=" elementor-button-icon">
                                                                    </span>
                                                                    <span class="elementor-button-text">Submit
                                                                    </span>
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
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-448095a elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                            data-id="448095a" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6ffc236"
                                    data-id="6ffc236" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
            </div><!-- #page -->
            <script>
            document.body.classList.remove("no-js");
            </script>
            <script>
            if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {
                document.body.classList.add('is-IE');
            }
            </script>
            <link rel='stylesheet' id='wpforms-modern-full-css'
                href='https://web.wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/css/frontend/modern/wpforms-full.min.css?ver=1.8.6.4'
                media='all' />
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/js/owl.carousel.min.js?ver=1.0"
                id="niso-carousel-owl.min-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/js/jquery.mousewheel.min.js?ver=1.0"
                id="jquery.mousewheel.min-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/js/nivo-lightbox.min.js?ver=1.0"
                id="niso-carousel-lightbox.min-js"></script>
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
                    "iconArrowLeft": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>",
                    "iconArrowRight": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>",
                    "iconClose": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"
                }
            };
            </script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=6.4.3"
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
                src="//web.wiseadvizor.com/wp-content/plugins/the-plus-addons-for-elementor-page-builder/assets/js/main/general/theplus-purge.js?ver=5.3.5"
                id="plus-purge-js-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.2"
                id="jquery-ui-mouse-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/jquery/ui/slider.min.js?ver=1.13.2"
                id="jquery-ui-slider-js"></script>
            <script src="//web.wiseadvizor.com/wp-content/uploads/theplus-addons/theplus.min.js?ver=1711953395"
                id="theplus-front-js-js" defer></script>
            <!-- <script id="twenty-twenty-one-ie11-polyfills-js-after">
            (Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach) ||
            document.write(
                '<script src="https://web.wiseadvizor.com/wp-content/themes/twentytwentyone/assets/js/polyfills.js?ver=2.0"></scr' +
                'ipt>');
            </script> -->
            <script
                src="https://web.wiseadvizor.com/wp-content/themes/twentytwentyone/assets/js/responsive-embeds.js?ver=2.0"
                id="twenty-twenty-one-responsive-embeds-script-js"></script>
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
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/common-modules.min.js?ver=3.19.0"
                id="elementor-common-modules-js"></script>
            <script id="elementor-web-cli-js-before">
            var elementorWebCliConfig = {
                "isDebug": false,
                "urls": {
                    "rest": "https:\/\/web.wiseadvizor.com\/wp-json\/",
                    "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
                },
                "nonce": "ed3fb9d5db",
                "version": "3.19.0"
            };
            var elementorWebCliConfig = {
                "isDebug": false,
                "urls": {
                    "rest": "https:\/\/web.wiseadvizor.com\/wp-json\/",
                    "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
                },
                "nonce": "ed3fb9d5db",
                "version": "3.19.0"
            };
            </script>
            <script src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/web-cli.min.js?ver=3.19.0"
                id="elementor-web-cli-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0"
                id="elementor-dialog-js"></script>
            <script id="wp-api-request-js-extra">
            var wpApiSettings = {
                "root": "https:\/\/web.wiseadvizor.com\/wp-json\/",
                "nonce": "ed3fb9d5db",
                "versionString": "wp\/v2\/"
            };
            </script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/api-request.min.js?ver=6.4.3"
                id="wp-api-request-js"></script>
            <script id="elementor-dev-tools-js-before">
            var elementorDevToolsConfig = {
                "isDebug": false,
                "urls": {
                    "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
                },
                "deprecation": {
                    "soft_notices": [],
                    "soft_version_count": 4,
                    "hard_version_count": 8,
                    "current_version": "3.19.0"
                }
            };
            var elementorDevToolsConfig = {
                "isDebug": false,
                "urls": {
                    "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
                },
                "deprecation": {
                    "soft_notices": [],
                    "soft_version_count": 4,
                    "hard_version_count": 8,
                    "current_version": "3.19.0"
                }
            };
            var elementorDevToolsConfig = {
                "isDebug": false,
                "urls": {
                    "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
                },
                "deprecation": {
                    "soft_notices": [],
                    "soft_version_count": 4,
                    "hard_version_count": 8,
                    "current_version": "3.19.0"
                }
            };
            </script>
            <script src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/dev-tools.min.js?ver=3.19.0"
                id="elementor-dev-tools-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1"
                id="wp-hooks-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef"
                id="wp-i18n-js"></script>
            <script id="wp-i18n-js-after">
            wp.i18n.setLocaleData({
                'text direction\u0004ltr': ['ltr']
            });
            </script>
            <script id="elementor-common-js-before">
            var elementorCommonConfig = {
                "version": "3.19.0",
                "isRTL": false,
                "isDebug": false,
                "isElementorDebug": false,
                "activeModules": ["ajax", "finder", "connect", "event-tracker"],
                "experimentalFeatures": {
                    "e_optimized_assets_loading": true,
                    "e_optimized_css_loading": true,
                    "additional_custom_breakpoints": true,
                    "theme_builder_v2": true,
                    "block_editor_assets_optimize": true,
                    "ai-layout": true,
                    "landing-pages": true,
                    "e_image_loading_optimization": true,
                    "e_global_styleguide": true,
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
                    "nonce": "3835e7b050"
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
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.19.0#\/site-editor",
                                    "keywords": ["template", "header", "footer", "single", "archive", "search",
                                        "404", "library"
                                    ]
                                },
                                "kit-library": {
                                    "title": "Kit Library",
                                    "icon": "kit-parts",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.19.0#\/kit-library",
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
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&template_type=page&_wpnonce=b32cbd820f",
                                    "keywords": ["Add New Page Template", "post", "page", "template", "new",
                                        "create"
                                    ]
                                },
                                "section": {
                                    "title": "Add New Section",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=b32cbd820f&template_type=section",
                                    "keywords": ["Add New Section", "post", "page", "template", "new", "create"]
                                },
                                "wp-post": {
                                    "title": "Add New Post",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=post&template_type=wp-post&_wpnonce=b32cbd820f",
                                    "keywords": ["Add New Post", "post", "page", "template", "new", "create"]
                                },
                                "wp-page": {
                                    "title": "Add New Page",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=page&template_type=wp-page&_wpnonce=b32cbd820f",
                                    "keywords": ["Add New Page", "post", "page", "template", "new", "create"]
                                },
                                "wpr-theme-builder": {
                                    "title": "Add New WPR Theme Builder",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&template_type=wpr-theme-builder&_wpnonce=b32cbd820f",
                                    "keywords": ["Add New WPR Theme Builder", "post", "page", "template", "new",
                                        "create"
                                    ]
                                },
                                "wpr-popups": {
                                    "title": "Add New WPR Popup",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&template_type=wpr-popups&_wpnonce=b32cbd820f",
                                    "keywords": ["Add New WPR Popup", "post", "page", "template", "new", "create"]
                                },
                                "landing-page": {
                                    "title": "Add New Landing Page",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=e-landing-page&template_type=landing-page&_wpnonce=b32cbd820f#library",
                                    "keywords": ["Add New Landing Page", "post", "page", "template", "new",
                                        "create"
                                    ]
                                },
                                "popup": {
                                    "title": "Add New Popup",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=b32cbd820f&template_type=popup",
                                    "keywords": ["Add New Popup", "post", "page", "template", "new", "create"]
                                },
                                "header": {
                                    "title": "Add New Header",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=b32cbd820f&template_type=header",
                                    "keywords": ["Add New Header", "post", "page", "template", "new", "create"]
                                },
                                "footer": {
                                    "title": "Add New Footer",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=b32cbd820f&template_type=footer",
                                    "keywords": ["Add New Footer", "post", "page", "template", "new", "create"]
                                },
                                "single": {
                                    "title": "Add New Single",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=b32cbd820f&template_type=single",
                                    "keywords": ["Add New Single", "post", "page", "template", "new", "create"]
                                },
                                "single-post": {
                                    "title": "Add New Single Post",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=b32cbd820f&template_type=single-post",
                                    "keywords": ["Add New Single Post", "post", "page", "template", "new", "create"]
                                },
                                "single-page": {
                                    "title": "Add New Single Page",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=b32cbd820f&template_type=single-page&_elementor_template_sub_type=page",
                                    "keywords": ["Add New Single Page", "post", "page", "template", "new", "create"]
                                },
                                "archive": {
                                    "title": "Add New Archive",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=b32cbd820f&template_type=archive",
                                    "keywords": ["Add New Archive", "post", "page", "template", "new", "create"]
                                },
                                "search-results": {
                                    "title": "Add New Search Results",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=b32cbd820f&template_type=search-results&_elementor_template_sub_type=search",
                                    "keywords": ["Add New Search Results", "post", "page", "template", "new",
                                        "create"
                                    ]
                                },
                                "error-404": {
                                    "title": "Add New Error 404",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=b32cbd820f&template_type=error-404&_elementor_template_sub_type=not_found404",
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
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=wpr_templates&_wpnonce=b32cbd820f",
                                    "keywords": ["Add New Royal Templates", "post", "page", "template", "new",
                                        "create"
                                    ]
                                },
                                "elementor-hf": {
                                    "title": "Add New Elementor Header & Footer Builder",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor-hf&_wpnonce=b32cbd820f",
                                    "keywords": ["Add New Elementor Header & Footer Builder", "post", "page",
                                        "template", "new", "create"
                                    ]
                                },
                                "wpr_mega_menu": {
                                    "title": "Add New Royal Mega Menu",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=wpr_mega_menu&_wpnonce=b32cbd820f",
                                    "keywords": ["Add New Royal Mega Menu", "post", "page", "template", "new",
                                        "create"
                                    ]
                                },
                                "theme-template": {
                                    "title": "Add New Theme Template",
                                    "icon": "plus-circle-o",
                                    "url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.19.0#\/site-editor\/add-new",
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
                                    "title": "Apps",
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
            <script src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/common.min.js?ver=3.19.0"
                id="elementor-common-js"></script>
            <script id="elementor-app-loader-js-before">
            var elementorAppConfig = {
                "menu_url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.19.0#\/site-editor",
                "assets_url": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/",
                "pages_url": "https:\/\/web.wiseadvizor.com\/wp-admin\/edit.php?post_type=page",
                "return_url": "https:\/\/web.wiseadvizor.com\/wp-admin\/",
                "hasPro": true,
                "admin_url": "https:\/\/web.wiseadvizor.com\/wp-admin\/",
                "login_url": "https:\/\/web.wiseadvizor.com\/wp-login.php",
                "base_url": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.19.0",
                "site-editor": [],
                "import-export": [],
                "kit-library": [],
                "onboarding": []
            };
            </script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/app-loader.min.js?ver=3.19.0"
                id="elementor-app-loader-js"></script>
            <script id="tpgb-admin-bar-js-before">
            var TpgbAdminbar = {
                "tpgb_edit_template": []
            }
            </script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/the-plus-addons-for-block-editor/assets/js/main/general/tpgb-admin-bar.min.js?ver=3.2.4"
                id="tpgb-admin-bar-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.19.0"
                id="elementor-webpack-runtime-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.19.0"
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
                "version": "3.19.0",
                "is_static": false,
                "experimentalFeatures": {
                    "e_optimized_assets_loading": true,
                    "e_optimized_css_loading": true,
                    "additional_custom_breakpoints": true,
                    "theme_builder_v2": true,
                    "block_editor_assets_optimize": true,
                    "ai-layout": true,
                    "landing-pages": true,
                    "e_image_loading_optimization": true,
                    "e_global_styleguide": true,
                    "page-transitions": true,
                    "notes": true,
                    "form-submissions": true,
                    "e_scroll_snap": true
                },
                "urls": {
                    "assets": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
                },
                "swiperClass": "swiper-container",
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
                    "id": 5668,
                    "title": "Elementor%20%235668%20%E2%80%93%20WISE%20ADVIZOR",
                    "excerpt": "",
                    "featuredImage": false
                },
                "user": {
                    "roles": ["administrator"]
                }
            };
            </script>
            <script src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.19.0"
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
                "nonce": "210ab3198a",
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
                "nonce": "c98943252d",
                "addedToCartText": "was added to cart",
                "viewCart": "View Cart",
                "comparePageID": "",
                "comparePageURL": "https:\/\/web.wiseadvizor.com\/elementor-5668\/",
                "wishlistPageID": "",
                "wishlistPageURL": "https:\/\/web.wiseadvizor.com\/elementor-5668\/",
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
                src="https://web.wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/js/frontend.min.js?ver=1.3.87"
                id="wpr-addons-js-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/js/modal-popups.min.js?ver=1.3.87"
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
                src="https://web.wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.8.6.4"
                id="wpforms-elementor-js"></script>
            <script id="elementor-admin-bar-js-before">
            var elementorAdminBarConfig = {
                "elementor_edit_page": {
                    "id": "elementor_edit_page",
                    "title": "Edit with Elementor",
                    "href": "https:\/\/web.wiseadvizor.com\/wp-admin\/post.php?post=5668&action=elementor",
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
                            "href": "https:\/\/web.wiseadvizor.com\/wp-admin\/post.php?post=5668&action=elementor&active-document=5",
                            "class": "elementor-site-settings",
                            "parent_class": "elementor-second-section"
                        },
                        "34": {
                            "id": "elementor_app_site_editor",
                            "title": "Theme Builder",
                            "sub_title": "Site",
                            "href": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.19.0#\/site-editor",
                            "class": "elementor-app-link",
                            "parent_class": "elementor-second-section"
                        }
                    }
                }
            };
            </script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/elementor/assets/js/elementor-admin-bar.min.js?ver=3.19.0"
                id="elementor-admin-bar-js"></script>
            <script src="https://web.wiseadvizor.com/wp-includes/js/hoverintent-js.min.js?ver=2.2.1"
                id="hoverintent-js-js"></script>
            <!-- <script id="admin-bar-js-before">
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
            </script> -->
            <script src="https://web.wiseadvizor.com/wp-includes/js/admin-bar.min.js?ver=6.4.3" id="admin-bar-js">
            </script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/lib/jquery.validate.min.js?ver=1.19.5"
                id="wpforms-validation-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/lib/mailcheck.min.js?ver=1.1.2"
                id="wpforms-mailcheck-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/lib/punycode.min.js?ver=1.0.0"
                id="wpforms-punycode-js"></script>
            <script src="https://web.wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/js/utils.min.js?ver=1.8.6.4"
                id="wpforms-generic-utils-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/js/wpforms.min.js?ver=1.8.6.4"
                id="wpforms-js"></script>
            <script
                src="https://web.wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/js/wpforms-modern.min.js?ver=1.8.6.4"
                id="wpforms-modern-js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>
            <!-- <script>
            (function() {
                function wpforms_js_error_loading() {

                    if (typeof window.wpforms !== 'undefined') {
                        return;
                    }

                    const forms = document.querySelectorAll('.wpforms-form');

                    if (!forms.length) {
                        return;
                    }

                    const error = document.createElement('div');

                    error.classList.add('wpforms-error-container');
                    error.setAttribute('role', 'alert');
                    error.innerHTML =
                        'Heads up! WPForms has detected an issue with JavaScript on this page. JavaScript is required for this form to work properly, so this form may not work as expected. See our <a href="https://wpforms.com/docs/getting-support-wpforms/" target="_blank" rel="noopener noreferrer">troubleshooting guide</a> to learn more or contact support.<p>This message is only displayed to site administrators.</p>';

                    forms.forEach(function(form) {

                        if (form.querySelector('.wpforms-error-container')) {
                            return;
                        }

                        const formError = error.cloneNode(true),
                            formErrorId = form.id + '-error';

                        formError.setAttribute('id', formErrorId);

                        form.insertBefore(formError, form.firstChild);
                        form.setAttribute('aria-invalid', 'true');
                        form.setAttribute('aria-errormessage', formErrorId);
                    });
                }

                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', wpforms_js_error_loading);
                } else {
                    wpforms_js_error_loading();
                }
            }());
            </script> -->
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
            <script type='text/javascript'>
            /* <![CDATA[ */
            var wpforms_settings = {
                "val_required": "This field is required.",
                "val_email": "Please enter a valid email address.",
                "val_email_suggestion": "Did you mean {suggestion}?",
                "val_email_suggestion_title": "Click to accept this suggestion.",
                "val_email_restricted": "This email address is not allowed.",
                "val_number": "Please enter a valid number.",
                "val_number_positive": "Please enter a valid positive number.",
                "val_minimum_price": "Amount entered is less than the required minimum.",
                "val_confirm": "Field values do not match.",
                "val_checklimit": "You have exceeded the number of allowed selections: {#}.",
                "val_limit_characters": "{count} of {limit} max characters.",
                "val_limit_words": "{count} of {limit} max words.",
                "val_recaptcha_fail_msg": "Google reCAPTCHA verification failed, please try again later.",
                "val_turnstile_fail_msg": "Cloudflare Turnstile verification failed, please try again later.",
                "val_inputmask_incomplete": "Please fill out the field in required format.",
                "uuid_cookie": "",
                "locale": "en",
                "wpforms_plugin_url": "https:\/\/web.wiseadvizor.com\/wp-content\/plugins\/wpforms-lite\/",
                "gdpr": "",
                "ajaxurl": "https:\/\/web.wiseadvizor.com\/wp-admin\/admin-ajax.php",
                "mailcheck_enabled": "1",
                "mailcheck_domains": [],
                "mailcheck_toplevel_domains": ["dev"],
                "is_ssl": "1",
                "page_title": "Elementor #5668",
                "page_id": "5668",
                "currency_code": "USD",
                "currency_thousands": ",",
                "currency_decimals": "2",
                "currency_decimal": ".",
                "currency_symbol": "$",
                "currency_symbol_pos": "left",
                "val_requiredpayment": "Payment is required.",
                "val_creditcard": "Please enter a valid credit card number.",
                "css_vars": ["field-border-radius", "field-background-color", "field-border-color",
                    "field-text-color", "label-color", "label-sublabel-color", "label-error-color",
                    "button-border-radius", "button-background-color", "button-text-color",
                    "field-size-input-height", "field-size-input-spacing", "field-size-font-size",
                    "field-size-line-height", "field-size-padding-h", "field-size-checkbox-size",
                    "field-size-sublabel-spacing", "field-size-icon-size", "label-size-font-size",
                    "label-size-line-height", "label-size-sublabel-font-size",
                    "label-size-sublabel-line-height", "button-size-font-size", "button-size-height",
                    "button-size-padding-h", "button-size-margin-top"
                ],
                "isModernMarkupEnabled": "1",
                "formErrorMessagePrefix": "Form error message",
                "errorMessagePrefix": "Error message",
                "submitBtnDisabled": "Submit button is disabled during form submission."
            }
            /* ]]> */
            </script>

            <script type="text/html" id="tmpl-wpforms-admin-menubar-data">
            <li id="wp-admin-bar-wpforms-form-id-5755"
                class="menupop wpforms-menu-form wpforms-menu-form-notifications wpforms-menu-form-last">
                <div class="ab-item ab-empty-item" aria-haspopup="true"><span class="wp-admin-bar-arrow"
                        aria-hidden="true"></span>Register here</div>
                <div class="ab-sub-wrapper">
                    <ul id="wp-admin-bar-wpforms-form-id-5755-default" class="ab-submenu">
                        <li id="wp-admin-bar-wpforms-form-id-5755-edit">
                            <a class="ab-item"
                                href="https://web.wiseadvizor.com/wp-admin/admin.php?page=wpforms-builder&#038;view=fields&#038;form_id=5755">Edit
                                Form</a>
                        </li>
                    </ul>
                </div>
            </li>
            </script>
</body>
<style>
.elementor-5668 .elementor-element.elementor-element-0698e86>.elementor-element-populated {
    box-shadow: 0px 0px 45px 0px rgba(213, 191.23695652173913, 191.23695652173913, 0.5);
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    text-align: left;
    margin: 0px 25px 0px 25px;
    --e-column-margin-right: 25px;
    --e-column-margin-left: 25px;
    padding: 25px 25px 0px 25px;
}

.elementor-5668 .elementor-element.elementor-element-7a86f3c .elementor-heading-title {
    color: #00092A;
    font-family: "Poppins", Sans-serif;
    font-size: 20px;
    font-weight: 500;
    padding-left: 40px;
}

.elementor-5668 .elementor-element.elementor-element-355bdd2:not(.elementor-motion-effects-element-type-background),
.elementor-5668 .elementor-element.elementor-element-355bdd2>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #131212;
    margin-top: -62px;
}

.elementor-5668 .elementor-element.elementor-element-eec5a83>ul>li {
    font-size: 16px;
    font-family: var(--font-base, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif);
}

@media (max-width: 767px) {

    .elementor-5668 .elementor-element.elementor-element-355bdd2:not(.elementor-motion-effects-element-type-background),
    .elementor-5668 .elementor-element.elementor-element-355bdd2>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #131212;
        margin-top: -78px;
    }

    .elementor-5668 .elementor-element.elementor-element-3a029543 {
    color: #000000;
    font-family: "Poppins", Sans-serif;
    font-size: 14px;
    font-weight: 400;
    padding-left: 15px;
    padding-right: 10px;
    text-align: justify;
}
}
</style>

</html>