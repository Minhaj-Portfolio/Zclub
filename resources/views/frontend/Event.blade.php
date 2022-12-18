@extends('frontend.layouts.main')

@section('main-container')
    <section id="home" class="home-cover">
        <div class="cover_slider owl-carousel owl-theme">
            <div class="cover_item"
                style="background: url('frontend/img/post-bg.jpg'); background-attachment: fixed; height:0px;">
                <div class="slider_content">
                    <div class="slider-content-inner">
                        <div class="container">
                            <div class="slider-content-center">
                                <p style="color:white;font-size:15px;letter-spacing: 6.5px;">JOIN US IN OUR FUTURE EVENTS</p>
                                <h2 class="cover-title">
                                    <b> Our </b>
                                </h2>
                                <h3 style="font-style: italic;"><b>Upcoming Events</b></h3>
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
                            <h5>CHRISTMAS</h5>
                            <p>23 DEC 2022 </p>
                            <p> DJ Anup, DJ Nish </p>
                            <p> Bollywood Christmas Bash </p>
                            <a href="{{ url('/Reservation') }}"><button>View Event</button></a>
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
                            <h5>ALL WHITE</h5>
                            <p> 09 DEC 2021 </p>
                            <p> All-White Bollywood Party</p>
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
                            <h5>AP DILLON</h5>
                            <p>14 OCT 2022 </p>
                            <p> AP Dhillon
                            </p>
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
                            <h5>BOLLYWOOD MASS</h5>
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
                            <h5>BOLLYWOOD RETRO</h5>
                            <p>11 NOV 2022 </p>
                            <p> DJ Anup, DJ Sandeep Sulhan </p>
                            <p> Bollywood Retro
                            </p>
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
                            <h5>CHEATAS</h5>
                            <p>28 OCT 2022 </p>
                            <p> Chetas
                            </p>
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
                            <h5>COSTUME</h5>
                            <p>07 OCT 2022 </p>
                            <p> Bollywood Celebrities Costume Party
                            </p>
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
                            <h5>THANKS GIVING</h5>
                            <p>25 NOV 2022 </p>
                            <p> Bollywood Thanksgiving Party
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
