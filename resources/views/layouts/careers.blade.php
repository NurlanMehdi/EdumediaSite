@extends('layouts.master')
@section('content')
    <div class="section page_header bgColor pd_mobile" data-color="black">
        <div class="page_header_top">
            <ul class="page_breadcrumb">
                <li class="page_breadcrumb_item">
                    <a href="{{route('index')}}">home</a>
                </li>
                <li class="page_breadcrumb_item">
                    <a href="{{route('careers')}}">careers</a>
                </li>
            </ul>
        </div>
        <div class="page_header_bottom">
            <p class="page_header_topic">
                {{$header['header_text'] ?? ''}}
            </p>
            <div class="page_header_desc careers_header_desc">
                <p>Make great things in Edumedia.</p>
            </div>
        </div>
        <div class="page_img pd_mobile_0">
            <div class="box pd-top50 pd_top100_mobile">
                <div class="careers_main_img_body box_item">
                    <img src="./img/photo-of-people-doing-handshakes-3184429.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section careers_main bgColor fadeUp pd_mobile" data-color="black">
        <div class="careers_main_desc">
            <p>
                Edumedia is designed to be a place for doing meaningful work. Our team is tight-knit and dedicated to building great products. Send us something you’ve made that you’re proud of and we’ll be in touch.
            </p>
        </div>
        <ul class="careers_main_nav">
            <li class="careers_main_nav_item">
                <a href="graphic_designer.html">Graphic Designer
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)"></path>
                        </g>
                    </svg>
                </a>

            </li>
            <li class="careers_main_nav_item">
                <a href="graphic_designer.html">Front-End Developer
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)"></path>
                        </g>
                    </svg>
                </a>

            </li>
            <li class="careers_main_nav_item">
                <a href="graphic_designer.html">Graphic Designer
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)"></path>
                        </g>
                    </svg>
                </a>

            </li>
            <li class="careers_main_nav_item">
                <a href="graphic_designer.html">Front-End Developer
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)"></path>
                        </g>
                    </svg>
                </a>

            </li>
        </ul>
    </div>
    <div class="section cv_job bgColor fadeUp pd_mobile_0" data-color="black">
        <div class="cv_job_content">
            <h3 class="cv_job_content_title">Don't see your job?</h3>
            <a href="mailto::info@edumedia.az" class="cv_job_content_desc">Send Us CV anyway!</a>
        </div>
    </div>
    <div class="section careers_photos bgColor fadeUp" data-color="black">
        <div class="careers_photos_content">
            <div class="col">
                <div class="col1">
                    <div class="col1_body">
                        <img src="./img/screen_2x.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col2">
                <div class="col3">
                    <div class="col4">
                        <div class="col4_body">
                            <img src="./img/austin-distel-mpN7xjKQ_Ns-unsplash.png" alt="">
                        </div>
                    </div>
                    <div class="col4">
                        <div class="col4_body">
                            <img src="./img/mimi-thian--VHQ0cw2euA-unsplash.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col6">
                    <div class="col6_body">
                        <img src="./img/pexels-photo-1308777.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.projectInMind')
@endsection
