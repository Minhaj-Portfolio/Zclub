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
                                    Prepare yourself for the
                                </h2>
                                <strong class="cover-xl-text">Latest Event</strong>
                                <p class="cover-date">
                                    12-14 February 2018 - Los Angeles, CA.
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
                                    Prepare yourself for the
                                </h2>
                                <strong class="cover-xl-text">Latest Event</strong>
                                <p class="cover-date">
                                    12-14 February 2018 - Los Angeles, CA.
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
                    About the event
                </h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing eli. Integer iaculis in lacus a sollicitudin. Ut
                        hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat.
                        Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <p>
                        In rhoncus massa nec sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis
                        consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at
                        volutpat ligula euismod quis. Maecenas ornare, ex in malesuada tempus.
                    </p>
                </div>
            </div>


            <div class="row justify-content-center mt30">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="icon_box_one">
                        <i class="lnr lnr-mic"></i>
                        <div class="content">
                            <h4>9 Speakers</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                            </p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="icon_box_one">
                        <i class="lnr lnr-rocket"></i>
                        <div class="content">
                            <h4>8 hrs Marathon</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                            </p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="icon_box_one">
                        <i class="lnr lnr-bullhorn"></i>
                        <div class="content">
                            <h4>Live Broadcast</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                            </p>
                            <a href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="icon_box_one">
                        <i class="lnr lnr-clock"></i>
                        <div class="content">
                            <h4>Early Bird</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                            </p>
                            <a href="#">read more</a>
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
                <a href=""><img src="{{ url('frontend/img/cleander/xc1.png.pagespeed.ic.JiI-ZKujy8.jpg') }}"
                        class="coverflow__image" /></a>
                <a href=""><img src="{{ url('frontend/img/cleander/xc1.png.pagespeed.ic.JiI-ZKujy8.jpg') }}"
                        class="coverflow__image" /></a>
                <a href=""><img src="{{ url('frontend/img/cleander/xc1.png.pagespeed.ic.JiI-ZKujy8.jpg') }}"
                        class="coverflow__image" /></a>
                <a href=""><img src="{{ url('frontend/img/cleander/xc1.png.pagespeed.ic.JiI-ZKujy8.jpg') }}"
                        class="coverflow__image" /></a>
                <a href=""><img src="{{ url('frontend/img/cleander/xc1.png.pagespeed.ic.JiI-ZKujy8.jpg') }}"
                        class="coverflow__image" /></a>
                <a class="next-arrow"></a>
            </div>
        </div>
    </div>
@endsection
