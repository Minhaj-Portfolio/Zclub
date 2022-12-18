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
            <div class="title">
                <a href="{{ url('/gallery') }}">Gallery </a>
            </div>
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
