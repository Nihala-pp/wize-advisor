<!DOCTYPE html>
<html lang="en-US">
@if(!empty($name))
<title>Join wiseAdvizor | Connect with {{$name}}</title>
<meta name="description"
    content="Join wiseAdvizor and gain access to {{$name}} offering invaluable entrepreneur advice to navigate the challenges of entrepreneurship.">
@else
<title>Join wiseAdvizor | Startup mentorship for your success</title>
<meta name="description"
    content="Join wiseAdvizor and gain access to startup mentors offering invaluable entrepreneur advice to navigate the challenges of entrepreneurship.">
@endif
<meta name="keywords" content="entrepreneur advice, startup mentors">
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
<meta name="twitter:card" content="summary_large_image">
@include('partials.header')
<script>
var theplus_ajax_url = "https://wiseadvizor.com/wp-admin/admin-ajax.php";
var theplus_ajax_post_url = "https://wiseadvizor.com/wp-admin/admin-post.php";
var theplus_nonce = "768edfe145";
</script>
<meta name='robots' content='max-image-preview:large' />
<script>
window._wpemojiSettings = {
    "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
    "ext": ".png",
    "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
    "svgExt": ".svg",
    "source": {
        "concatemoji": "https:\/\/wiseadvizor.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3"
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
                return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e,
                    "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
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
        var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300,
                150) : i.createElement("canvas"),
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
                if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e
                    .timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
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
        for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[
            t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n
            .supports[t]);
        n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
            .DOMReady = !1, n.readyCallback = function() {
                n.DOMReady = !0
            }
    }).then(function() {
        return e
    }).then(function() {
        var e;
        n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e
            .wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
    }))
}((window, document), window._wpemojiSettings);
</script>
<link rel="preload" href="https://wiseadvizor.com/wp-includes/css/dashicons.min.css?ver=6.4.3" as="style" id="dashicons"
    media="all" onload="this.onload=null;this.rel='stylesheet'"><noscript>
    <link rel='stylesheet' id='dashicons-css' href='https://wiseadvizor.com/wp-includes/css/dashicons.min.css?ver=6.4.3'
        media='all' />
</noscript>
<link rel='stylesheet' id='admin-bar-css' href='https://wiseadvizor.com/wp-includes/css/admin-bar.min.css?ver=6.4.3'
    media='all' />
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
    href='https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.27.0'
    media='all' />
<link rel='stylesheet' id='elementor-common-css'
    href='https://wiseadvizor.com/wp-content/plugins/elementor/assets/css/common.min.css?ver=3.19.0' media='all' />
<link rel='stylesheet' id='e-theme-ui-light-css'
    href='https://wiseadvizor.com/wp-content/plugins/elementor/assets/css/theme-light.min.css?ver=3.19.0' media='all' />
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
    href='https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/fontello.min.css?ver=1.0'
    media='all' />
<link rel='stylesheet' id='niso-carousel-owl-css'
    href='https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/owl.carousel.min.css?ver=1.0'
    media='all' />
<link rel='stylesheet' id='niso-theme-default-css'
    href='https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/themes/niso.theme.default.min.css?ver=1.0'
    media='all' />
<link rel='stylesheet' id='niso-animate-css'
    href='https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/animate.min.css?ver=1.3.18'
    media='all' />
<link rel='stylesheet' id='niso-carousel-css'
    href='https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/niso-carousel.min.css?ver=1.3.18'
    media='all' />
<link rel='stylesheet' id='niso-carousel-lightbox-css'
    href='https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/nivo-lightbox.min.css?ver=1.0'
    media='all' />
<link rel='stylesheet' id='niso-carousel-lightbox-theme-css'
    href='https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/css/themes/default.min.css?ver=1.0'
    media='all' />
<link rel='stylesheet' id='hfe-style-css'
    href='https://wiseadvizor.com/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.min.css?ver=1.6.24'
    media='all' />
<link rel='stylesheet' id='elementor-frontend-css'
    href='https://wiseadvizor.com/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.19.0'
    media='all' />
<link rel='stylesheet' id='swiper-css'
    href='https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css?ver=5.3.6'
    media='all' />
<link rel='stylesheet' id='elementor-post-5-css'
    href='https://wiseadvizor.com/wp-content/uploads/elementor/css/post-5.css?ver=1706785959' media='all' />
<link rel='stylesheet' id='elementor-pro-css'
    href='https://wiseadvizor.com/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.8.2'
    media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css'
    href='https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.19.0'
    media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css'
    href='https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.19.0'
    media='all' />
<link rel='stylesheet' id='elementor-global-css'
    href='https://wiseadvizor.com/wp-content/uploads/elementor/css/global.css?ver=1706785961' media='all' />
<link rel='stylesheet' id='elementor-post-5595-css'
    href='https://wiseadvizor.com/wp-content/uploads/elementor/css/post-5595.css?ver=1707730167' media='all' />
<link rel='stylesheet' id='hfe-widgets-style-css'
    href='https://wiseadvizor.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.min.css?ver=1.6.24' disabled>
<link rel='stylesheet' id='elementor-post-32-css'
    href='https://wiseadvizor.com/wp-content/uploads/elementor/css/post-32.css?ver=1706785961' media='all' />
<link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css'
    href='https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=6.4.3'
    media='all' />
<link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css'
    href='https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=6.4.3'
    media='all' />
<link rel="preload" id='qi-addons-for-elementor-style-css'
    href="https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=1.7.1"
    as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet"
        href="https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=1.7.1">
</noscript>
<link rel='stylesheet' id='wpforms-admin-bar-css'
    href='https://wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/css/admin-bar.min.css?ver=1.8.6.4'
    media='all' />
<style id='wpforms-admin-bar-inline-css'>
#wpadminbar .wpforms-menu-notification-counter,
#wpadminbar .wpforms-menu-notification-indicator {
    background-color: #d63638 !important;
    color: #ffffff !important;
}
</style>
<link rel='stylesheet' id='wpr-text-animations-css-css'
    href='https://wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/css/lib/animations/text-animations.min.css?ver=1.3.87'
    media='all' />
<link rel="preload" id='wpr-addons-css-css'
    href="https://wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/css/frontend.min.css?ver=1.3.975"
    as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet"
        href="https://wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/css/frontend.min.css?ver=1.3.975">
</noscript>
<link rel='stylesheet' id='google-fonts-1-css'
    href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CSail%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.3'
    async>
<link rel='stylesheet' id='elementor-icons-shared-0-css'
    href='https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3'
    media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css'
    href='https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3'
    media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css'
    href='https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3'
    media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<!-- <link rel="https://api.w.org/" href="https://wiseadvizor.com/wp-json/" /> -->
<!-- <link rel="alternate" type="application/json" href="https://wiseadvizor.com/wp-json/wp/v2/pages/5595" /> -->
<!-- <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wiseadvizor.com/xmlrpc.php?rsd" /> -->
<!-- <meta name="generator" content="WordPress 6.4.3" /> -->
@if(!empty($token))
<link rel="canonical" href="https://wiseadvizor.com/registration/{{$token}}/{{$id}}">
<meta name="twitter:url" content="https://wiseadvizor.com/registration/{{$token}}/{{$id}}">
<meta property="og:url" content="https://wiseadvizor.com/registration/{{$token}}/{{$id}}">
@else
<link rel="canonical" href="https://wiseadvizor.com/registration">
<meta name="twitter:url" content="https://wiseadvizor.com/registration">
<meta property="og:url" content="https://wiseadvizor.com/registration">
@endif
<!-- <link rel='shortlink' href='https://wiseadvizor.com/?p=5595' /> -->
<!-- <link rel="alternate" type="application/json+oembed"
    href="https://wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fweb.wiseadvizor.com%2Fsignup%2F" />
<link rel="alternate" type="text/xml+oembed"
    href="https://wiseadvizor.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fweb.wiseadvizor.com%2Fsignup%2F&#038;format=xml" /> -->
<style>
#wpadminbar .theplus-purge-clear>.ab-item:before {
    content: '';
    background-image: url("https://wiseadvizor.com/wp-content/plugins/the-plus-addons-for-elementor-page-builder//assets/images/theplus-logo-small.png") !important;
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
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
</head>

<body
    class="page-template page-template-elementor_canvas page page-id-5595 logged-in admin-bar no-customize-support wp-embed-responsive ehf-footer ehf-template-twentytwentyone ehf-stylesheet-twentytwentyone qodef-qi--no-touch qi-addons-for-elementor-1.6.7 is-light-theme no-js singular elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-5595">
    <!-- <script>
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
    </script> -->
    <!--<div id="wpadminbar" class="nojq nojs">-->
    <!--				<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar">-->
    <!--		<ul id='wp-admin-bar-root-default' class="ab-top-menu"><li id='wp-admin-bar-wp-logo' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://wiseadvizor.com/wp-admin/about.php'><span class="ab-icon" aria-hidden="true"></span><span class="screen-reader-text">About WordPress</span></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-wp-logo-default' class="ab-submenu"><li id='wp-admin-bar-about'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/about.php'>About WordPress</a></li><li id='wp-admin-bar-contribute'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/contribute.php'>Get Involved</a></li></ul><ul id='wp-admin-bar-wp-logo-external' class="ab-sub-secondary ab-submenu"><li id='wp-admin-bar-wporg'><a class='ab-item' href='https://wordpress.org/'>WordPress.org</a></li><li id='wp-admin-bar-documentation'><a class='ab-item' href='https://wordpress.org/documentation/'>Documentation</a></li><li id='wp-admin-bar-learn'><a class='ab-item' href='https://learn.wordpress.org/'>Learn WordPress</a></li><li id='wp-admin-bar-support-forums'><a class='ab-item' href='https://wordpress.org/support/forums/'>Support</a></li><li id='wp-admin-bar-feedback'><a class='ab-item' href='https://wordpress.org/support/forum/requests-and-feedback'>Feedback</a></li></ul></div></li><li id='wp-admin-bar-site-name' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://wiseadvizor.com/wp-admin/'>WISE ADVIZOR</a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-site-name-default' class="ab-submenu"><li id='wp-admin-bar-dashboard'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/'>Dashboard</a></li></ul><ul id='wp-admin-bar-appearance' class="ab-submenu"><li id='wp-admin-bar-themes'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/themes.php'>Themes</a></li><li id='wp-admin-bar-widgets'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/widgets.php'>Widgets</a></li><li id='wp-admin-bar-menus'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/nav-menus.php'>Menus</a></li><li id='wp-admin-bar-background' class="hide-if-customize"><a class='ab-item' href='https://wiseadvizor.com/wp-admin/themes.php?page=custom-background'>Background</a></li></ul></div></li><li id='wp-admin-bar-customize' class="hide-if-no-customize"><a class='ab-item' href='https://wiseadvizor.com/wp-admin/customize.php?url=https%3A%2F%2Fweb.wiseadvizor.com%2Fsignup%2F%3Fpreview_id%3D5595%26preview_nonce%3D0a74e17f5f%26preview%3Dtrue'>Customize</a></li><li id='wp-admin-bar-updates'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/update-core.php'><span class="ab-icon" aria-hidden="true"></span><span class="ab-label" aria-hidden="true">6</span><span class="screen-reader-text updates-available-text">6 updates available</span></a></li><li id='wp-admin-bar-comments'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/edit-comments.php'><span class="ab-icon" aria-hidden="true"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text comments-in-moderation-text">0 Comments in moderation</span></a></li><li id='wp-admin-bar-new-content' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://wiseadvizor.com/wp-admin/post-new.php'><span class="ab-icon" aria-hidden="true"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-new-content-default' class="ab-submenu"><li id='wp-admin-bar-new-post'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/post-new.php'>Post</a></li><li id='wp-admin-bar-new-media'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/media-new.php'>Media</a></li><li id='wp-admin-bar-new-page'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/post-new.php?post_type=page'>Page</a></li><li id='wp-admin-bar-new-e-landing-page'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/edit.php?action=elementor_new_post&#038;post_type=e-landing-page&#038;template_type=landing-page&#038;_wpnonce=3bd61170f4#library'>Landing Page</a></li><li id='wp-admin-bar-new-elementor_library'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/post-new.php?post_type=elementor_library'>Template</a></li><li id='wp-admin-bar-new-sa_slider'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/post-new.php?post_type=sa_slider'>Slider</a></li><li id='wp-admin-bar-new-user'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/user-new.php'>User</a></li><li id='wp-admin-bar-wpforms'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/admin.php?page=wpforms-builder'>WPForms</a></li></ul></div></li><li id='wp-admin-bar-edit'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/post.php?post=5595&#038;action=edit'>Edit Page</a></li><li id='wp-admin-bar-wpforms-menu' class="menupop"><a class='ab-item' aria-haspopup="true" href='https://wiseadvizor.com/wp-admin/admin.php?page=wpforms-overview'>WPForms <div class="wp-core-ui wp-ui-notification wpforms-menu-notification-counter">6</div></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-wpforms-menu-default' class="ab-submenu"><li id='wp-admin-bar-wpforms-notifications'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/admin.php?page=wpforms-overview'>Notifications <div class="wp-core-ui wp-ui-notification wpforms-menu-notification-indicator"></div></a></li><li id='wp-admin-bar-wpforms-forms'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/admin.php?page=wpforms-overview'>All Forms</a></li><li id='wp-admin-bar-wpforms-payments'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/admin.php?page=wpforms-payments'>Payments</a></li><li id='wp-admin-bar-wpforms-add-new'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/admin.php?page=wpforms-builder'>Add New</a></li><li id='wp-admin-bar-wpforms-community'><a class='ab-item' href='https://www.facebook.com/groups/wpformsvip/' target='_blank' rel='noopener noreferrer'>Community</a></li><li id='wp-admin-bar-wpforms-help-docs'><a class='ab-item' href='https://wpforms.com/docs/?utm_campaign=liteplugin&#038;utm_medium=admin-bar&#038;utm_source=WordPress&#038;utm_content=Documentation' target='_blank' rel='noopener noreferrer'>Help Docs</a></li><li id='wp-admin-bar-wpforms-upgrade'><a class='ab-item' href='https://wpforms.com/lite-upgrade/?utm_campaign=liteplugin&#038;utm_source=WordPress&#038;utm_medium=admin-bar&#038;utm_content=Upgrade%20to%20Pro&#038;utm_locale=en_US' target='_blank' rel='noopener noreferrer'>Upgrade to Pro</a></li></ul></div></li></ul><ul id='wp-admin-bar-top-secondary' class="ab-top-secondary ab-top-menu"><li id='wp-admin-bar-search' class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="https://wiseadvizor.com/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">Search</label><input type="submit" class="adminbar-button" value="Search" /></form></div></li><li id='wp-admin-bar-my-account' class="menupop with-avatar"><a class='ab-item' aria-haspopup="true" href='https://wiseadvizor.com/wp-admin/profile.php'>Howdy, <span class="display-name">WISE ADVIZOR</span><img alt='' src='https://secure.gravatar.com/avatar/a8726c7255505df5fe7e481fccd93c50?s=26&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/a8726c7255505df5fe7e481fccd93c50?s=52&#038;d=mm&#038;r=g 2x' class='avatar avatar-26 photo' height='26' width='26' decoding='async'/></a><div class="ab-sub-wrapper"><ul id='wp-admin-bar-user-actions' class="ab-submenu"><li id='wp-admin-bar-user-info'><a class='ab-item' tabindex="-1" href='https://wiseadvizor.com/wp-admin/profile.php'><img alt='' src='https://secure.gravatar.com/avatar/a8726c7255505df5fe7e481fccd93c50?s=64&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/a8726c7255505df5fe7e481fccd93c50?s=128&#038;d=mm&#038;r=g 2x' class='avatar avatar-64 photo' height='64' width='64' decoding='async'/><span class='display-name'>WISE ADVIZOR</span></a></li><li id='wp-admin-bar-edit-profile'><a class='ab-item' href='https://wiseadvizor.com/wp-admin/profile.php'>Edit Profile</a></li><li id='wp-admin-bar-logout'><a class='ab-item' href='https://wiseadvizor.com/wp-login.php?action=logout&#038;_wpnonce=965e545c4c'>Log Out</a></li></ul></div></li></ul>			</div>-->
    <!--				<a class="screen-reader-shortcut" href="https://wiseadvizor.com/wp-login.php?action=logout&#038;_wpnonce=965e545c4c">Log Out</a>-->
    <!--			</div>-->

    <div data-elementor-type="wp-page" data-elementor-id="5595" class="elementor elementor-5595">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-f1541c9 elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
            data-id="f1541c9" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-16ea950 signup"
                    data-id="16ea950" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <!-- <div class="">

                        </div> -->
                        <div class="elementor-element elementor-element-fa5f143 elementor-widget elementor-widget-heading"
                            data-id="fa5f143" data-element_type="widget" data-widget_type="heading.default">
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
                                <div class="image">
                                    <a href="https://wiseadvizor.com/">
                                        <img alt="Logo" loading="lazy" width="200" height="200" decoding="async"
                                            data-nimg="1" src="{{ asset('public/assets/img/WhitePNGNew.png') }}"
                                            style="color:transparent;">
                                    </a>
                                    <!-- <h2 class="ml-6 text-white text-5xl font-bold">Syllaby</h2> -->
                                </div>
                                <div class="elementor-heading-title elementor-size-default">Embark on a journey of
                                    growth and success!
                                    <div><br></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-010d17d elementor-position-left elementor-widget__width-initial elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="010d17d" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <link rel="stylesheet"
                                    href="https://wiseadvizor.com/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">
                                <div class="elementor-icon-box-wrapper">
                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon elementor-animation-">
                                            <i aria-hidden="true" class="fas fa-street-view"></i> </span>
                                    </div>
                                    <div class="elementor-icon-box-content">
                                        <div class="elementor-icon-box-title">
                                            <span>
                                                Expert Guidance​​ </span>
                                        </div>
                                        <p class="elementor-icon-box-description">
                                            Get insights and advice from experienced mentors in your industry. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e5dbc03 elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_separator"
                            data-id="e5dbc03" data-element_type="widget"
                            data-widget_type="qi_addons_for_elementor_separator.default">
                            <div class="elementor-widget-container">
                                <div
                                    class="qodef-shortcode qodef-m  qodef-qi-separator qodef-qi-clear qodef-separator--standard ">
                                    <div class="qodef-m-line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-c8b5ae5 elementor-position-left elementor-widget__width-initial elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="c8b5ae5" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">
                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon elementor-animation-">
                                            <i aria-hidden="true" class="fas fa-syringe"></i> </span>
                                    </div>
                                    <div class="elementor-icon-box-content">
                                        <div class="elementor-icon-box-title">
                                            <span>
                                                Tailored Strategies </span>
                                        </div>
                                        <p class="elementor-icon-box-description">
                                            Receive personalized advice to deal with your challenges and advance
                                            your career or business. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6c20c08 elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_separator"
                            data-id="6c20c08" data-element_type="widget"
                            data-widget_type="qi_addons_for_elementor_separator.default">
                            <div class="elementor-widget-container">
                                <div
                                    class="qodef-shortcode qodef-m  qodef-qi-separator qodef-qi-clear qodef-separator--standard ">
                                    <div class="qodef-m-line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-5794f5e elementor-position-left elementor-widget__width-initial elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="5794f5e" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">
                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon elementor-animation-">
                                            <i aria-hidden="true" class="fas fa-thumbs-up"></i> </span>
                                    </div>
                                    <div class="elementor-icon-box-content">
                                        <div class="elementor-icon-box-title">
                                            <span>
                                                Confidence and Clarity </span>
                                        </div>
                                        <p class="elementor-icon-box-description">
                                            Make informed decisions with confidence and achieve your goals. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-da596dc elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_separator"
                            data-id="da596dc" data-element_type="widget"
                            data-widget_type="qi_addons_for_elementor_separator.default">
                            <div class="elementor-widget-container">
                                <div
                                    class="qodef-shortcode qodef-m  qodef-qi-separator qodef-qi-clear qodef-separator--standard ">
                                    <div class="qodef-m-line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9d9a822 elementor-position-left elementor-widget__width-initial elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                            data-id="9d9a822" data-element_type="widget" data-widget_type="icon-box.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-box-wrapper">
                                    <div class="elementor-icon-box-icon">
                                        <span class="elementor-icon elementor-animation-">
                                            <i aria-hidden="true" class="fas fa-user-friends"></i> </span>
                                    </div>
                                    <div class="elementor-icon-box-content">
                                        <div class="elementor-icon-box-title">
                                            <span>
                                                Networking Opportunities </span>
                                        </div>
                                        <p class="elementor-icon-box-description">
                                            Connect with professionals, entrepreneurs, startup mentors and industry
                                            experts for new opportunities and collaborations. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-177e8ca elementor-widget__width-initial elementor-widget elementor-widget-qi_addons_for_elementor_separator"
                            data-id="177e8ca" data-element_type="widget"
                            data-widget_type="qi_addons_for_elementor_separator.default">
                            <div class="elementor-widget-container">
                                <div
                                    class="qodef-shortcode qodef-m  qodef-qi-separator qodef-qi-clear qodef-separator--standard ">
                                    <div class="qodef-m-line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-56e8bbb create-form"
                    data-id="56e8bbb" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="col-xl-12 col-lg-12 col-md-12 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-12">
                            <div class="logo_div bg-gradient-to-t from-gradtwo-from to-gradtwo-to">
                                <div class="flex justify-center md:justify-start items-center">
                                    <a href="https://wiseadvizor.com/">
                                        <img alt="Logo" loading="lazy" width="180" height="180" decoding="async"
                                            data-nimg="1" src="{{ asset('public/assets/img/WhitePNGNew.png') }}"
                                            style="visibility:hidden;color:transparent;">
                                    </a>
                                </div>
                            </div>
                            <div class="card mt-0 mb-0">
                                <div class="card-header mt-0">
                                    <h1 class="font-weight-bolder">Create Account</h1>
                                    <p class="mb-0 para">Welcome! Join us and start your journey today.</p>
                                    <!-- <div class="row">
                                        <div class="col-3 text-center ms-auto">
                                            <a class="btn btn-link px-0" href="{{ route('auth.linkedin') }}">
                                                <img src="{{ asset('public/assets/img/linkedin.png') }}"
                                                    class="avatar avatar-sm me-1" alt="linkedin">
                                            </a>
                                        </div>
                                        <div class="col-3 text-center me-auto">
                                            <a class="btn btn-link px-0" href="{{ route('auth.google') }}">
                                                <img src="{{ asset('public/assets/img/google.png') }}"
                                                    class="avatar avatar-sm me-1" alt="google">
                                            </a>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="card-body signup-form">
                                    <form method="POST" action="{{ route('register.post') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token ?: Null }}">
                                        <input type="hidden" name="mentor_id" value="{{ $id ?: Null }}">
                                        <input type="hidden" name="timezone" class="timezone">
                                        <input type="hidden" name="is_referral" class="is_referral" value="{{ $is_referral ?: Null  }}">
                                        <input type="hidden" name="referral_code_used" class="referral_code_used" value="{{ $referral_code_used ?: Null  }}">
                                        @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                        <div>{{$error}}</div>
                                        @endforeach
                                        @endif
                                        <div class="input-group input-group-static mb-0" style="padding-left:5px;">
                                            <label class="">Name</label>
                                            <input id="name" type="text" class="form-control" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('email')
                                            <p class="alert alert-success">{{ $error('email') }}</p>
                                            @endif

                                            <!-- @error('name')
                                            <span class="alert alert-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror -->
                                        </div>
                                        <div class="input-group input-group-static mb-0" style="padding-left:5px;">
                                            <label class="">Email</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group input-group-static mb-1" style="padding-left:5px;">
                                            <label class="">Password</label>
                                            <!-- <span class="" role="alert"><br />
                                                – Must be atleast 8 characters <br />
                                                – Must include one lowercase character <br />
                                                – Must include one uppercase character
                                            </span> -->
                                            <input id="password" type="password" class="form-control" name="password"
                                                pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                title="Must contain atleast one uppercase and lowercase letter, and at least 8 or more characters"
                                                required>
                                            <div id="message">
                                                <!-- <h6 style="padding-top:10px;">Password must contain the following:</h6> -->
                                                <p id="letter" class="invalid">Must include one <b>lowercase</b>
                                                    character</p>
                                                <p id="capital" class="invalid">Must include one <b>capital
                                                        (uppercase)</b> character</p>
                                                <p id="length" class="invalid">Must be atleast <b>8 characters</b></p>
                                            </div>
                                            <!-- @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror -->
                                        </div>
                                        <div class="input-group input-group-static mb-1" style="padding-left:5px;">
                                            <label class="">Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required>
                                        </div>
                                        <span></span>
                                        <!-- <div class="input-group input-group-static mb-1" style="padding-left:5px;">
                                            <label class="">Company Name</label>
                                            <input type="text" class="form-control" name="company_name">
                                        </div> -->
                                        <!-- <div class="input-group input-group-static mb-1" style="padding-left:5px;">
                                        <label class="">Designation</label>
                                        <input type="text" class="form-control" name="designation">
                                    </div>  -->
                                        <!-- <div class="input-group input-group-static mb-1" style="padding-left:5px;">
                                            <label class="">LinkedIn Url</label>
                                            <input type="url" class="form-control" name="linked_in">
                                        </div> -->
                                        <!-- <div class="mb-1">
                                            <label class="form-label time">Timezone</label>
                                            <select name="timezone"
                                                class="timezone select2 form-control @error('timezone') is-invalid @enderror"
                                                required>
                                                <option value="">Choose Your Timezone</option>
                                                @foreach($timezone as $zone => $time)
                                                <option value="{{ $time }}">{{ $time }}</option>
                                                @endforeach
                                            </select>
                                            @error('timezone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div> -->
                                        <!-- <div class="mb-0">
                                            <label class="form-label">Expertise you are looking for?</label></br>
                                            <select class="select form-control @error('expert') is-invalid @enderror"
                                                multiple data-mdb-clear-button="true" name="expert[]" required>
                                                @foreach($expertise as $key => $expert)
                                                <option value="{{ $expert }}">{{ $expert }}</option>
                                                @endforeach
                                            </select>
                                        </div> -->
                                        <div class="form-check form-check-info text-start ps-0 mt-3">
                                            <input
                                                class="form-check-input @error('terms_condition') is-invalid @enderror"
                                                type="checkbox" name="terms_condition" value="1" id="flexCheckDefault"
                                                required>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree the <a href="{{ route('termsConditions') }}"
                                                    class="text-dark font-weight-bolder">Terms and Conditions</a>
                                            </label>
                                            @error('terms_condition')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div
                                            class="elementor-field-type-recaptcha elementor-field-group elementor-column elementor-field-group-field_6ff1b74 elementor-col-100">
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
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"
                                                style="background-color:#001E64;">Sign
                                                Up</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-2 text-sm mx-auto">
                                        Already have an account?
                                        <a href="{{ route('login') }}"
                                            class="text-primary text-gradient font-weight-bold">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3'
        media='all' />
    <script src="https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/js/owl.carousel.min.js?ver=1.0"
        id="niso-carousel-owl.min-js"></script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/js/jquery.mousewheel.min.js?ver=1.0"
        id="jquery.mousewheel.min-js"></script>
    <script src="https://wiseadvizor.com/wp-content/plugins/niso-carousel-slider/assets/js/nivo-lightbox.min.js?ver=1.0"
        id="niso-carousel-lightbox.min-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2"
        id="wp-polyfill-inert-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0"
        id="regenerator-runtime-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js">
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/dist/dom-ready.min.js?ver=392bdd43726760d1f3ca"
        id="wp-dom-ready-js"></script>
    <script id="starter-templates-zip-preview-js-extra">
    var starter_templates_zip_preview = {
        "AstColorPaletteVarPrefix": "--ast-global-",
        "AstEleColorPaletteVarPrefix": "--ast-global-"
    };
    </script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/astra-sites/inc/lib/onboarding/assets/dist/template-preview/main.js?ver=06758d4d807d9d22c6ea"
        id="starter-templates-zip-preview-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js">
    </script>
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
    <script src="https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=6.4.3"
        id="qi-addons-for-elementor-script-js"></script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/js/lib/particles/particles.min.js?ver=3.0.6"
        id="wpr-particles-js"></script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/js/lib/jarallax/jarallax.min.js?ver=1.12.7"
        id="wpr-jarallax-js"></script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/js/lib/parallax/parallax.min.js?ver=1.0"
        id="wpr-parallax-hover-js"></script>
    <script
        src="//wiseadvizor.com/wp-content/plugins/the-plus-addons-for-elementor-page-builder/assets/js/main/general/theplus-purge.js?ver=5.3.5"
        id="plus-purge-js-js"></script>
    <script id="twenty-twenty-one-ie11-polyfills-js-after">
    (Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach) ||
    document.write(
        '<script src="https://wiseadvizor.com/wp-content/themes/twentytwentyone/assets/js/polyfills.js?ver=2.0"></scr' +
        'ipt>');
    </script> -->
    <!-- <script src="https://wiseadvizor.com/wp-content/themes/twentytwentyone/assets/js/responsive-embeds.js?ver=2.0"
        id="twenty-twenty-one-responsive-embeds-script-js"></script> -->
    <!-- <script src="https://wiseadvizor.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.2" id="jquery-ui-mouse-js">
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/jquery/ui/draggable.min.js?ver=1.13.2"
        id="jquery-ui-draggable-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/backbone.min.js?ver=1.5.0" id="backbone-js"></script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/backbone/backbone.marionette.min.js?ver=2.4.5.e1"
        id="backbone-marionette-js"></script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/backbone/backbone.radio.min.js?ver=1.0.4"
        id="backbone-radio-js"></script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/js/common-modules.min.js?ver=3.19.0"
        id="elementor-common-modules-js"></script>
    <script id="elementor-web-cli-js-before">
    var elementorWebCliConfig = {
        "isDebug": false,
        "urls": {
            "rest": "https:\/\/wiseadvizor.com\/wp-json\/",
            "assets": "https:\/\/wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
        },
        "nonce": "54075f5f08",
        "version": "3.19.0"
    };
    var elementorWebCliConfig = {
        "isDebug": false,
        "urls": {
            "rest": "https:\/\/wiseadvizor.com\/wp-json\/",
            "assets": "https:\/\/wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
        },
        "nonce": "54075f5f08",
        "version": "3.19.0"
    };
    </script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/js/web-cli.min.js?ver=3.19.0"
        id="elementor-web-cli-js"></script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0"
        id="elementor-dialog-js"></script>
    <script id="wp-api-request-js-extra">
    var wpApiSettings = {
        "root": "https:\/\/wiseadvizor.com\/wp-json\/",
        "nonce": "54075f5f08",
        "versionString": "wp\/v2\/"
    };
    </script> -->
    <!-- <script src="https://wiseadvizor.com/wp-includes/js/api-request.min.js?ver=6.4.3" id="wp-api-request-js"></script>
    <script id="elementor-dev-tools-js-before">
    var elementorDevToolsConfig = {
        "isDebug": false,
        "urls": {
            "assets": "https:\/\/wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
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
            "assets": "https:\/\/wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
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
            "assets": "https:\/\/wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
        },
        "deprecation": {
            "soft_notices": [],
            "soft_version_count": 4,
            "hard_version_count": 8,
            "current_version": "3.19.0"
        }
    };
    </script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/js/dev-tools.min.js?ver=3.19.0"
        id="elementor-dev-tools-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1" id="wp-hooks-js">
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef" id="wp-i18n-js">
    </script>
    <script id="wp-i18n-js-after">
    wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
    });
    </script> -->
    <!-- <script id="elementor-common-js-before">
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
            "assets": "https:\/\/wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/",
            "rest": "https:\/\/wiseadvizor.com\/wp-json\/"
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
            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin-ajax.php",
            "nonce": "cef22cd5a8"
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
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?post_type=elementor_library&tabs_group=library",
                            "keywords": ["template", "section", "page", "library"]
                        },
                        "system-info": {
                            "title": "System Info",
                            "icon": "info-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-system-info",
                            "keywords": ["system", "info", "environment", "elementor"]
                        },
                        "role-manager": {
                            "title": "Role Manager",
                            "icon": "person",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-role-manager",
                            "keywords": ["role", "manager", "user", "elementor"]
                        },
                        "knowledge-base": {
                            "title": "Knowledge Base",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=go_knowledge_base_site",
                            "keywords": ["help", "knowledge", "docs", "elementor"]
                        },
                        "theme-builder": {
                            "title": "Theme Builder",
                            "icon": "library-save",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.19.0#\/site-editor",
                            "keywords": ["template", "header", "footer", "single", "archive", "search", "404",
                                "library"
                            ]
                        },
                        "kit-library": {
                            "title": "Kit Library",
                            "icon": "kit-parts",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.19.0#\/kit-library",
                            "keywords": ["kit library", "kit", "library", "site parts", "parts", "assets",
                                "templates"
                            ]
                        },
                        "popups": {
                            "title": "Popups",
                            "icon": "library-save",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?post_type=elementor_library&tabs_group=popup&elementor_library_type=popup",
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
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&template_type=page&_wpnonce=3bd61170f4",
                            "keywords": ["Add New Page Template", "post", "page", "template", "new", "create"]
                        },
                        "section": {
                            "title": "Add New Section",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=3bd61170f4&template_type=section",
                            "keywords": ["Add New Section", "post", "page", "template", "new", "create"]
                        },
                        "wp-post": {
                            "title": "Add New Post",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=post&template_type=wp-post&_wpnonce=3bd61170f4",
                            "keywords": ["Add New Post", "post", "page", "template", "new", "create"]
                        },
                        "wp-page": {
                            "title": "Add New Page",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=page&template_type=wp-page&_wpnonce=3bd61170f4",
                            "keywords": ["Add New Page", "post", "page", "template", "new", "create"]
                        },
                        "wpr-theme-builder": {
                            "title": "Add New WPR Theme Builder",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&template_type=wpr-theme-builder&_wpnonce=3bd61170f4",
                            "keywords": ["Add New WPR Theme Builder", "post", "page", "template", "new", "create"]
                        },
                        "wpr-popups": {
                            "title": "Add New WPR Popup",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&template_type=wpr-popups&_wpnonce=3bd61170f4",
                            "keywords": ["Add New WPR Popup", "post", "page", "template", "new", "create"]
                        },
                        "landing-page": {
                            "title": "Add New Landing Page",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=e-landing-page&template_type=landing-page&_wpnonce=3bd61170f4#library",
                            "keywords": ["Add New Landing Page", "post", "page", "template", "new", "create"]
                        },
                        "popup": {
                            "title": "Add New Popup",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=3bd61170f4&template_type=popup",
                            "keywords": ["Add New Popup", "post", "page", "template", "new", "create"]
                        },
                        "header": {
                            "title": "Add New Header",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=3bd61170f4&template_type=header",
                            "keywords": ["Add New Header", "post", "page", "template", "new", "create"]
                        },
                        "footer": {
                            "title": "Add New Footer",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=3bd61170f4&template_type=footer",
                            "keywords": ["Add New Footer", "post", "page", "template", "new", "create"]
                        },
                        "single": {
                            "title": "Add New Single",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=3bd61170f4&template_type=single",
                            "keywords": ["Add New Single", "post", "page", "template", "new", "create"]
                        },
                        "single-post": {
                            "title": "Add New Single Post",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=3bd61170f4&template_type=single-post",
                            "keywords": ["Add New Single Post", "post", "page", "template", "new", "create"]
                        },
                        "single-page": {
                            "title": "Add New Single Page",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=3bd61170f4&template_type=single-page&_elementor_template_sub_type=page",
                            "keywords": ["Add New Single Page", "post", "page", "template", "new", "create"]
                        },
                        "archive": {
                            "title": "Add New Archive",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=3bd61170f4&template_type=archive",
                            "keywords": ["Add New Archive", "post", "page", "template", "new", "create"]
                        },
                        "search-results": {
                            "title": "Add New Search Results",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=3bd61170f4&template_type=search-results&_elementor_template_sub_type=search",
                            "keywords": ["Add New Search Results", "post", "page", "template", "new", "create"]
                        },
                        "error-404": {
                            "title": "Add New Error 404",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&_wpnonce=3bd61170f4&template_type=error-404&_elementor_template_sub_type=not_found404",
                            "keywords": ["Add New Error 404", "post", "page", "template", "new", "create"]
                        },
                        "code_snippet": {
                            "title": "Add New Custom Code",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/post-new.php?post_type=elementor_snippet",
                            "keywords": ["Add New Custom Code", "post", "page", "template", "new", "create"]
                        },
                        "wpr_templates": {
                            "title": "Add New Royal Templates",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=wpr_templates&_wpnonce=3bd61170f4",
                            "keywords": ["Add New Royal Templates", "post", "page", "template", "new", "create"]
                        },
                        "elementor-hf": {
                            "title": "Add New Elementor Header & Footer Builder",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor-hf&_wpnonce=3bd61170f4",
                            "keywords": ["Add New Elementor Header & Footer Builder", "post", "page", "template",
                                "new", "create"
                            ]
                        },
                        "wpr_mega_menu": {
                            "title": "Add New Royal Mega Menu",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?action=elementor_new_post&post_type=wpr_mega_menu&_wpnonce=3bd61170f4",
                            "keywords": ["Add New Royal Mega Menu", "post", "page", "template", "new", "create"]
                        },
                        "theme-template": {
                            "title": "Add New Theme Template",
                            "icon": "plus-circle-o",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.19.0#\/site-editor\/add-new",
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
                            "url": "https:\/\/wiseadvizor.com",
                            "icon": "home-heart",
                            "keywords": ["home", "page"]
                        },
                        "wordpress-dashboard": {
                            "title": "Dashboard",
                            "icon": "dashboard",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/",
                            "keywords": ["dashboard", "wordpress"]
                        },
                        "wordpress-menus": {
                            "title": "Menus",
                            "icon": "wordpress",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/nav-menus.php",
                            "keywords": ["menu", "wordpress"]
                        },
                        "wordpress-themes": {
                            "title": "Themes",
                            "icon": "wordpress",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/themes.php",
                            "keywords": ["themes", "wordpress"]
                        },
                        "wordpress-customizer": {
                            "title": "Customizer",
                            "icon": "wordpress",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/customize.php",
                            "keywords": ["customizer", "wordpress"]
                        },
                        "wordpress-plugins": {
                            "title": "Plugins",
                            "icon": "wordpress",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/plugins.php",
                            "keywords": ["plugins", "wordpress"]
                        },
                        "wordpress-users": {
                            "title": "Users",
                            "icon": "wordpress",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/users.php",
                            "keywords": ["users", "profile", "wordpress"]
                        },
                        "apps": {
                            "title": "Apps",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-apps",
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
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor",
                            "keywords": ["general", "settings", "elementor"]
                        },
                        "advanced": {
                            "title": "Advanced",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor#tab-advanced",
                            "keywords": ["advanced", "settings", "elementor"]
                        },
                        "experiments": {
                            "title": "Experiments",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor#tab-experiments",
                            "keywords": ["settings", "elementor", "experiments"]
                        },
                        "features": {
                            "title": "Features",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor#tab-experiments",
                            "keywords": ["settings", "elementor", "features"]
                        },
                        "element-manager": {
                            "title": "Element Manager",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-element-manager",
                            "keywords": ["settings", "elements", "widgets", "manager"]
                        },
                        "custom-fonts": {
                            "title": "Custom Fonts",
                            "icon": "typography",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?post_type=elementor_font",
                            "keywords": ["custom", "fonts", "elementor"]
                        },
                        "custom-icons": {
                            "title": "Custom Icons",
                            "icon": "favorite",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?post_type=elementor_icons",
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
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-tools",
                            "keywords": ["tools", "regenerate css", "safe mode", "debug bar", "sync library",
                                "elementor"
                            ]
                        },
                        "replace-url": {
                            "title": "Replace URL",
                            "icon": "tools",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-tools#tab-replace_url",
                            "keywords": ["tools", "replace url", "domain", "elementor"]
                        },
                        "maintenance-mode": {
                            "title": "Maintenance Mode",
                            "icon": "tools",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-tools#tab-maintenance_mode",
                            "keywords": ["tools", "maintenance", "coming soon", "elementor"]
                        },
                        "import-export": {
                            "title": "Import Export",
                            "icon": "import-export",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-tools#tab-import-export-kit",
                            "keywords": ["tools", "import export", "import", "export", "kit"]
                        },
                        "version-control": {
                            "title": "Version Control",
                            "icon": "time-line",
                            "url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-tools#tab-versions",
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
    </script> -->
    <!-- <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/js/common.min.js?ver=3.19.0"
        id="elementor-common-js"></script>
    <script id="elementor-app-loader-js-before">
    var elementorAppConfig = {
        "menu_url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.19.0#\/site-editor",
        "assets_url": "https:\/\/wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/",
        "pages_url": "https:\/\/wiseadvizor.com\/wp-admin\/edit.php?post_type=page",
        "return_url": "https:\/\/wiseadvizor.com\/wp-admin\/",
        "hasPro": true,
        "admin_url": "https:\/\/wiseadvizor.com\/wp-admin\/",
        "login_url": "https:\/\/wiseadvizor.com\/wp-login.php",
        "base_url": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.19.0",
        "site-editor": [],
        "import-export": [],
        "kit-library": [],
        "onboarding": []
    };
    </script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/js/app-loader.min.js?ver=3.19.0"
        id="elementor-app-loader-js"></script>
    <script id="tpgb-admin-bar-js-before">
    var TpgbAdminbar = {
        "tpgb_edit_template": []
    }
    </script> -->
    <!-- <script
        src="https://wiseadvizor.com/wp-content/plugins/the-plus-addons-for-block-editor/assets/js/main/general/tpgb-admin-bar.min.js?ver=3.2.4"
        id="tpgb-admin-bar-js"></script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.19.0"
        id="elementor-webpack-runtime-js"></script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.19.0"
        id="elementor-frontend-modules-js"></script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
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
            "assets": "https:\/\/wiseadvizor.com\/wp-content\/plugins\/elementor\/assets\/"
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
            "id": 5595,
            "title": "signup%20%E2%80%93%20WISE%20ADVIZOR",
            "excerpt": "",
            "featuredImage": false
        },
        "user": {
            "roles": ["administrator"]
        }
    };
    </script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.19.0"
        id="elementor-frontend-js"></script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js?ver=6.4.3"
        id="qi-addons-for-elementor-elementor-js"></script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.8.2"
        id="elementor-pro-webpack-runtime-js"></script> -->
    <!-- <script id="elementor-pro-frontend-js-before">
    var ElementorProFrontendConfig = {
        "ajaxurl": "https:\/\/wiseadvizor.com\/wp-admin\/admin-ajax.php",
        "nonce": "2005dcc7db",
        "urls": {
            "assets": "https:\/\/wiseadvizor.com\/wp-content\/plugins\/elementor-pro\/assets\/",
            "rest": "https:\/\/wiseadvizor.com\/wp-json\/"
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
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.8.2"
        id="elementor-pro-frontend-js"></script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.8.2"
        id="pro-elements-handlers-js"></script>
    <script data-cfasync="false"
        src="https://wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/js/frontend.min.js?ver=1.3.87"
        id="wpr-addons-js-js"></script>
    <script
        src="https://wiseadvizor.com/wp-content/plugins/royal-elementor-addons/assets/js/modal-popups.min.js?ver=1.3.87"
        id="wpr-modal-popups-js-js"></script>
    <script id="wp-util-js-extra">
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp-admin\/admin-ajax.php"
        }
    };
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/wp-util.min.js?ver=6.4.3" id="wp-util-js"></script>
    <script id="wpforms-elementor-js-extra">
    var wpformsElementorVars = {
        "captcha_provider": "recaptcha",
        "recaptcha_type": "v2"
    };
    </script> -->
    <!-- <script
        src="https://wiseadvizor.com/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.8.6.4"
        id="wpforms-elementor-js"></script> -->
    <script id="wpforms-elementor-js-extra">
    var wpformsElementorVars = {
        "captcha_provider": "recaptcha",
        "recaptcha_type": "v2"
    };
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="{{ asset('public/assets/js/jstz.min.js') }}"></script>


    <!-- <script id="elementor-admin-bar-js-before">
    var elementorAdminBarConfig = {
        "elementor_edit_page": {
            "id": "elementor_edit_page",
            "title": "Edit with Elementor",
            "href": "https:\/\/wiseadvizor.com\/wp-admin\/post.php?post=5595&action=elementor",
            "children": {
                "32": {
                    "id": "elementor_edit_doc_32",
                    "title": "Footer",
                    "sub_title": "Post",
                    "href": "https:\/\/wiseadvizor.com\/wp-admin\/post.php?post=32&action=elementor"
                },
                "33": {
                    "id": "elementor_site_settings",
                    "title": "Site Settings",
                    "sub_title": "Site",
                    "href": "https:\/\/wiseadvizor.com\/wp-admin\/post.php?post=5595&action=elementor&active-document=5",
                    "class": "elementor-site-settings",
                    "parent_class": "elementor-second-section"
                },
                "34": {
                    "id": "elementor_app_site_editor",
                    "title": "Theme Builder",
                    "sub_title": "Site",
                    "href": "https:\/\/wiseadvizor.com\/wp-admin\/admin.php?page=elementor-app&ver=3.19.0#\/site-editor",
                    "class": "elementor-app-link",
                    "parent_class": "elementor-second-section"
                }
            }
        }
    };
    </script>
    <script src="https://wiseadvizor.com/wp-content/plugins/elementor/assets/js/elementor-admin-bar.min.js?ver=3.19.0"
        id="elementor-admin-bar-js"></script>
    <script src="https://wiseadvizor.com/wp-includes/js/hoverintent-js.min.js?ver=2.2.1" id="hoverintent-js-js">
    </script>
    <script src="https://wiseadvizor.com/wp-includes/js/admin-bar.min.js?ver=6.4.3" id="admin-bar-js"></script> -->
    <script data-cfasync="false" src="https://wiseadvizor.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js" async></script>
    <script data-cfasync="false" src="https://wiseadvizor.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script type="text/javascript">
    $(function() {
        validate_pass();

        var password = document.getElementById("password");
        var confirm_password = document.getElementById("password-confirm");

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        // var tz = jstz.determine(); 
        // var timezone = tz.name(); 
        var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;

        $('body').find('.timezone').val(timezone);

        // alert(tz.name());
    });

    function validate_pass() {

        // var myInput = document.getElementById("password");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        password.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        password.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        password.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if (password.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (password.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate length
            if (password.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    }
    </script>
</body>

</html>
<style>
.input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),
.input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-control,
.input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-select,
.input-group.has-validation>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
.input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-control,
.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-select,
.input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating) {
    margin-bottom: -5px;
    /* margin-top: 10px; */
    border-bottom-right-radius: 0;
}

.input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    margin-bottom: 16px;
    margin-left: -1px;
    /* border-bottom-left-radius: 0; */
    font-size: 12px;
}

.elementor-5595 .elementor-element.elementor-element-56e8bbb>.elementor-element-populated {
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    margin-top: -40px;
}

.qodef-qi-separator .qodef-m-line {
    position: relative;
    display: inline-block;
    width: 100%;
    vertical-align: top;
    font-size: 1px;
    /* color: #111; */
    border-bottom: 1em solid currentColor;
    margin: 20px 0;
}

.para {
    font-size: 13px !important;
    text-align: center;
}

.signup-form {
    margin-top: -20px;
}

.input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),
.input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-control,
.input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-select,
.input-group.has-validation>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
.input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-control,
.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-select,
.input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating) {
    margin-top: -5px;
    < !-- border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    -->
}

< !-- .input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    margin-bottom: 32px;
    margin-left: -1px;
    < !-- border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    -->< !--
}

-->h1 {
    font-size: 20px;
    text-align: center;
}

< !-- p {
    font-size: 13px !important;
    text-align: center;
}

-->.elementor-5595 .elementor-element.elementor-element-f1541c9:not(.elementor-motion-effects-element-type-background),
.elementor-5595 .elementor-element.elementor-element-f1541c9>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #FFFFFF;
    margin-top: -35px;
}

.image {
    margin-left: 235px;
    margin-bottom: 40px;
    margin-top: 35px;
}

-->.qodef-qi-separator .qodef-m-line {
    position: relative;
    display: inline-block;
    width: 100%;
    vertical-align: top;
    font-size: 1px;
    /* color: #111; */
    border-bottom: 1em solid currentColor;
    margin: 20px 0;
}

.input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    margin-bottom: 16px;
    margin-left: -1px;
    /* border-bottom-left-radius: 0; */
}

.elementor-5595 .elementor-element.elementor-element-16ea950:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
.elementor-5595 .elementor-element.elementor-element-16ea950>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: transparent;
    background-image: linear-gradient(360deg, #799EF3 0%, #001E64 100%);
}

.elementor-5595 .elementor-element.elementor-element-9d9a822 .elementor-icon-box-description {
    color: #FFFFFF;
    font-family: "Helvetica", Sans-serif;
    font-size: 12px;
    font-weight: 300;
    text-shadow: 0px 0px 12px rgba(0, 0, 0, 0.3);
}

.time {
    margin-right: 10px;
}

.timezone {
    margin-left: 5px;
}

@media screen and (max-width: 767px) {

    .create-form {
        margin-top: -30px;
        /* width: 430px !important; */
    }

    .signup {
        display: none;
    }

    .logo_div img {
        visibility: visible !important;
        margin-left: 130px;
        margin-top: 50px;
    }

    .to-gradtwo-to {
        background-color: transparent;
        background-image: linear-gradient(360deg, #799EF3 0%, #001E64 100%);
    }

    .from-gradtwo-from {
        width: 130% !important;
        padding-top: 2rem !important;
        padding-bottom: 2rem !important;
    }

    .card {
        width: 130%;
    }

    .elementor-column {
        /* width: 100%; */
    }

    .elementor-5595 .elementor-element.elementor-element-56e8bbb>.elementor-element-populated {
        margin-right: 85px;
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    }

    .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
        margin-left: -15px;
        /* padding: 10px; */
    }
}

@media screen and (max-device-width: 480px) and (min-width: 410px) {}
</style>
<style>
/* Style all input fields */
/* input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
} */

/* Style the submit button */
/* input[type=submit] {
    background-color: #04AA6D;
    color: white;
} */

/* Style the container for inputs */
/* .container {
    background-color: #f1f1f1;
    padding: 20px;
} */

/* The message box is shown when the user clicks on the password field */
#message {
    display: none;
    /* background: #f1f1f1; */
    color: #000;
    position: relative;
    /* padding: 5px; */
    /* margin-top: 10px; */
}

#message p {
    /* padding: 5px 10px; */
    font-size: 10px;
    margin-bottom: -5px;
    padding-left: 5px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -5px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -5px;
    content: "✖";
}
</style>