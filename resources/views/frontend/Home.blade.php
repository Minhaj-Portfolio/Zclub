@extends('frontend.layouts.main')

@section('main-container')
    <section id="home" class="home-cover">
        <div class="cover_slider owl-carousel owl-theme">
            <div class="cover_item" style="background: url('frontend/img/bg/slider.png'); background-attachment: fixed;">
                <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-center">
                                <h2 class="cover-title">
                                    Prepare yourself to party at
                                </h2>
                                <strong class="cover-xl-text">No.1 Desi Nightclub</strong>
                                <p class="cover-date">
                                    In Houston, Texas
                                </p>
                                <a href="{{ url('/contact') }}" class=" btn btn-primary btn-rounded">
                                    Grab Your Tickets
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cover_item" style="background: url('frontend/img/bg/slider.png');">
                <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-center">
                                <h2 class="cover-title">
                                    Prepare yourself to party at
                                </h2>
                                <strong class="cover-xl-text">No.1 Desi Nightclub</strong>
                                <p class="cover-date">
                                    In Houston, Texas
                                </p>
                                <a href="#" class=" btn btn-primary btn-rounded">
                                    Grab Your Tickets
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="pt100 pb100">
        <div class="container">
            <div class="section_title">
                <h3 class="title">
                    about the Club Z
                </h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <p>
                        Juice up your nights at your favourite crib Club Z as it's Houston's No.1 Desi Nightclub, bringing
                        distinctive Bollywood parties to town showcasing top-notch celebrity artists.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <p>
                        Also, we spotlight the
                        best DJs from all around the world, who energize the audience with their unstoppable beats and mixed
                        music genres. Forever go-to place to find ecstasy in a city like Houston.
                    </p>
                </div>
            </div>


            <div class="row justify-content-center mt30">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="icon_box_one">
                        <i class="fas fa-cocktail"></i>
                        <div class="content">
                            <h4></b>BIRTHDAY PARTIES</b></h4>
                            <p>
                                We organize Birthday party as per our consumer reservation requests.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="icon_box_one">
                        <i class="fa-solid fa-music"></i>
                        <div class="content">
                            <h4><b>DANCE FLOOR</b></h4>
                            <p>
                                Party dance and event dance are being organized at the dance floor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="icon_box_one">
                        <i class="lnr lnr-bullhorn"></i>
                        <div class="content">
                            <h4><b>LOUNGE AREA</b></h4>
                            <p>
                                You can get anything from the lounge area and order from here in event time.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="icon_box_one">
                        <i class="lnr lnr-clock"></i>
                        <div class="content">
                            <h4><b>SMOKE</b></h4>
                            <p>
                                Smoke are also available to our club. We recommend a specific area.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <div class="container">
        <div class="section_title">
            <h3 class="title">
                Gallery
            </h3>
        </div>
        <div class="nine columns">
            <div class="coverflow top10 bot10">
                <a class="prev-arrow"></a>
                <a href=""><img src="{{ url('frontend/img/Events/W1.png') }}" class="coverflow__image" /></a>
                <a href=""><img src="{{ url('frontend/img/Events/G1.png') }}" class="coverflow__image" /></a>
                <a href=""><img src="{{ url('frontend/img/Events/latest.png') }}" class="coverflow__image" /></a>
                <a href=""><img src="{{ url('frontend/img/Events/C1.png') }}" class="coverflow__image" /></a>
                <a href=""><img src="{{ url('frontend/img/Events/Ct1.png') }}" class="coverflow__image" /></a>
                <a class="next-arrow"></a>
            </div>
        </div>
    </div>
@endsection
