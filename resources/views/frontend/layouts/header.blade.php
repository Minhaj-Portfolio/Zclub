<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title> Z club </title>

    <link rel="stylesheet"
        href="{{ url('frontend/css/bootstrap.min.css%2bfont-awesome.min.css%2bet-line.css%2bionicons.min.css%2bowl.carousel.min.css%2bowl.theme.default.min.css%2banimate.min.css.pagespeed.cc.0vfyByTh0R.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/A.main.css.pagespeed.cf.TDBZLiA0of.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/contact.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/map.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/menu.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/css/Event.css') }}" />
    <link rel="shortcut icon" href="{{ url('frontend/img/logo.png') }}" />

    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <link rel="stylesheet" href="path/to/fontawesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script nonce="98782205-59a5-4349-a15c-655912f7cf2e">
        (function(w, d) {
            ! function(Z, _, ba, bb) {
                Z.zarazData = Z.zarazData || {};
                Z.zarazData.executed = [];
                Z.zaraz = {
                    deferred: [],
                    listeners: []
                };
                Z.zaraz.q = [];
                Z.zaraz._f = function(bc) {
                    return function() {
                        var bd = Array.prototype.slice.call(arguments);
                        Z.zaraz.q.push({
                            m: bc,
                            a: bd
                        })
                    }
                };
                for (const be of ["track", "set", "debug"]) Z.zaraz[be] = Z.zaraz._f(be);
                Z.zaraz.init = () => {
                    var bf = _.getElementsByTagName(bb)[0],
                        bg = _.createElement(bb),
                        bh = _.getElementsByTagName("title")[0];
                    bh && (Z.zarazData.t = _.getElementsByTagName("title")[0].text);
                    Z.zarazData.x = Math.random();
                    Z.zarazData.w = Z.screen.width;
                    Z.zarazData.h = Z.screen.height;
                    Z.zarazData.j = Z.innerHeight;
                    Z.zarazData.e = Z.innerWidth;
                    Z.zarazData.l = Z.location.href;
                    Z.zarazData.r = _.referrer;
                    Z.zarazData.k = Z.screen.colorDepth;
                    Z.zarazData.n = _.characterSet;
                    Z.zarazData.o = (new Date).getTimezoneOffset();
                    Z.zarazData.q = [];
                    for (; Z.zaraz.q.length;) {
                        const bl = Z.zaraz.q.shift();
                        Z.zarazData.q.push(bl)
                    }
                    bg.defer = !0;
                    for (const bm of [localStorage, sessionStorage]) Object.keys(bm || {}).filter((bo => bo
                        .startsWith("_zaraz_"))).forEach((bn => {
                        try {
                            Z.zarazData["z_" + bn.slice(7)] = JSON.parse(bm.getItem(bn))
                        } catch {
                            Z.zarazData["z_" + bn.slice(7)] = bm.getItem(bn)
                        }
                    }));
                    bg.referrerPolicy = "origin";
                    bg.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(Z
                        .zarazData)));
                    bf.parentNode.insertBefore(bg, bf)
                };
                ["complete", "interactive"].includes(_.readyState) ? zaraz.init() : Z.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>

</head>


<body>
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
    </div>

    <header class="header navbar fixed-top navbar-expand-md">
        <div class="container">
            <a class="navbar-brand logo" href="{{ url('/') }}">
                <img src="{{ url('frontend/img/logo.png') }}" alt="Evento" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="lnr lnr-text-align-right"></span>
            </button>
            <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
                <ul class=" nav navbar-nav menu">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Event') }}">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Reservation') }}">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
