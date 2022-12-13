@extends('frontend.layouts.main')

@section('main-container')
    <div class="container" id="pt222">
        <div class="section_title">
            <div class="title">
                <a href="{{ url('/gallery') }}">Gallery </a>
            </div>
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
