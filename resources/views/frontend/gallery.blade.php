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
                                <p style="color:white;font-size:15px;letter-spacing: 6.5px;">LET’S HAVE SOME TALK</p>
                                <h2 class="cover-title">
                                    <b> Our </b>
                                </h2>
                                <h3 style="font-style: italic;"><b>Gallery</b></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container" id="pt222">
        <div class="section_title">
            <h3 class="title">
                <a href="{{ url('/Gallery') }}">GALLERY</a>
            </h3>
        </div>
        {{-- first of 3 --}}
        <div class="row">
            <div class="col-lg-4 center" id="pt222">
                <div class="flip-box">
                    <div class="flip-box-inner">

                        <a href="{{ url('/A') }}"> <img src="{{ url('frontend/img/Gallery/Ali/1.jpg') }}" alt="No Event"
                                style="width:300px;height:200px"> </a>

                        <div class="flip-box-back">
                            <p> see the album</p>
                            <a href="{{ url('/A') }}"><button> See album </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 center" id="pt222">
                <div class="flip-box">
                    <div class="flip-box-inner">

                        <a href="{{ url('/B') }}"> <img src="{{ url('frontend/img/Gallery/Bohemia/1.jpg') }}"
                                alt="No Event" style="width:300px;height:200px"> </a>

                        <div class="flip-box-back">
                            <p> see the album</p>
                            <a href="{{ url('/B') }}"><button> See album </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 center" id="pt222">
                <div class="flip-box">
                    <div class="flip-box-inner">

                        <a href="{{ url('/G') }}"> <img src="{{ url('frontend/img/Gallery/Guru/1.jpg') }}"
                                alt="No Event" style="width:300px;height:200px"> </a>

                        <div class="flip-box-back">
                            <p> see the album</p>
                            <a href="{{ url('/G') }}"><button> See album </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- second  of 3  --}}
        <div class="row">
            <div class="col-lg-4 center" id="pt222">
                <div class="flip-box">
                    <div class="flip-box-inner">

                        <a href="{{ url('/I') }}"> <img src="{{ url('frontend/img/Gallery/Imran/1.jpg') }}"
                                alt="No Event" style="width:300px;height:200px"> </a>

                        <div class="flip-box-back">
                            <p> see the album</p>
                            <a href="{{ url('/I') }}"><button> See album </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 center" id="pt222">
                <div class="flip-box">
                    <div class="flip-box-inner">

                        <a href="{{ url('/M') }}"> <img src="{{ url('frontend/img/Gallery/Manpreet/1.jpg') }}"
                                alt="No Event" style="width:300px;height:200px"> </a>

                        <div class="flip-box-back">
                            <p> see the album</p>
                            <a href="{{ url('/M') }}"><button> See album </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 center" id="pt222">
                <div class="flip-box">
                    <div class="flip-box-inner">

                        <a href="{{ url('/K') }}"> <img src="{{ url('frontend/img/Gallery/Micky/1.jpg') }}"
                                alt="No Event" style="width:300px;height:200px"> </a>

                        <div class="flip-box-back">
                            <p> see the album</p>
                            <a href="{{ url('/K') }}"><button> See album </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- third of 3 --}}
        <div class="row">
            <div class="col-lg-4 center" id="pt222">
                <div class="flip-box">
                    <div class="flip-box-inner">

                        <a href="{{ url('/C') }}"> <img src="{{ url('frontend/img/Gallery/Monica/1.jpg') }}"
                                alt="No Event" style="width:300px;height:200px"> </a>

                        <div class="flip-box-back">
                            <p> see the album</p>
                            <a href="{{ url('/C') }}"><button> See album </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 center" id="pt222">
                <div class="flip-box">
                    <div class="flip-box-inner">

                        <a href="{{ url('/R') }}"> <img src="{{ url('frontend/img/Gallery/Raghav/1.jpg') }}"
                                alt="No Event" style="width:300px;height:200px"> </a>

                        <div class="flip-box-back">
                            <p> see the album</p>
                            <a href="{{ url('/R') }}"><button> See album </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- container closer --}}
    </div>
    <style>
        .flip-box-back {
            background-color: black;
        }
    </style>
@endsection
