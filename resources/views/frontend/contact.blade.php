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
                                    <b> Contact </b>
                                </h2>
                                <h3 style="font-style: italic;"><b>Us</b></h3>
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
                <a href="#">Contact Us</a>
            </h3>
        </div>
        <section class="row">
            <div class="col-md-6">
                <form method="POST" action="{{ url('/') }}/Contact">
                    @csrf
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="lname">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="xyz123@gmail.com...">

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="col-md-6">
                <div class="mapouter">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Los Angeles, CA&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                href="https://mcpedls.com/"></a></div>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                width: 100%;
                                height: 100%;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                width: 100%;
                                height: 100%;
                            }

                            .gmap_iframe {
                                width: 100% !important;
                                height: 100% !important;
                            }
                        </style>
                    </div>
                </div>
        </section>
    </div>
@endsection
