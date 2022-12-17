@extends('frontend.layouts.main')

@section('main-container')
    <section id="home" class="home-cover">
        <div class="cover_slider owl-carousel owl-theme">
            <div class="cover_item"
                style="background: url('frontend/img/bg/slider.png'); background-attachment: fixed; height:0px;">
                <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-center">
                                <h2 class="cover-title">
                                    <b> EVENTS </b>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container" id="pt222">
        <h3>UPCOMING EVENT</h3>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ url('frontend/img/Events/latest.png') }}" alt="No Event"
                                style="width:300px;height:200px">
                        </div>
                        <div class="flip-box-back">
                            <h2>CHRISTMAS</h2>
                            <p>Event</p>
                            <button>Booked</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="pt222">
        <h3>PREVIOUS EVENTS</h3>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ url('frontend/img/Events/W1.png') }}" alt="Paris"
                                style="width:300px;height:200px">
                        </div>
                        <div class="flip-box-back">
                            <h2>ALL WHITE</h2>
                            <p>Dress to impress</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ url('frontend/img/Events/D1.png') }}" alt="Paris"
                                style="width:300px;height:200px">
                        </div>
                        <div class="flip-box-back">
                            <h2>AP DILLON</h2>
                            <p>After party</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ url('frontend/img/Events/M1.png') }}" alt="Paris"
                                style="width:300px;height:200px">
                        </div>
                        <div class="flip-box-back">
                            <h2>BOLLYWOOD MASS</h2>
                            <p>Masquerade Party</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" id="pt222">
            <div class="col-lg-4 col-md-6">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ url('frontend/img/Events/R1.png') }}" alt="Paris"
                                style="width:300px;height:200px">
                        </div>
                        <div class="flip-box-back">
                            <h2>BOLLYWOOD RETRO</h2>
                            <p>Desi Night Party</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ url('frontend/img/Events/C1.png') }}" alt="Paris"
                                style="width:300px;height:200px">
                        </div>
                        <div class="flip-box-back">
                            <h2>CHEATAS</h2>
                            <p>Fusion Group Games</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ url('frontend/img/Events/Ct1.png') }}" alt="Paris"
                                style="width:300px;height:200px">
                        </div>
                        <div class="flip-box-back">
                            <h2>COSTUME</h2>
                            <p>Win $1000 Giveaway</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="pt222">
            <div class="col-lg-4 col-md-6">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ url('frontend/img/Events/G1.png') }}" alt="Paris"
                                style="width:300px;height:200px">
                        </div>
                        <div class="flip-box-back">
                            <h2>THANKS GIVING</h2>
                            <p>Giving</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
