<html>

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

<body>

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
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
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
