@extends('layouts.master')
@section('content')
    <div class="section main_header bgColor pd_mobile_0">
        <div class="header_content">
            <div class="header_content_img">
                <img src="./img/photo-of-people-doing-handshakes-3184429.png" alt="">
            </div>
            <div class="header_content_text">
                <!-- <div class="header_content_text_body">
                    <p class="header_content_text_date">01 March 2021</p>
                    <h3 class="header_content_text_title">BI System for the Ministry of Education</h3>
                </div> -->
                <div class="page_header_top">
                    <ul class="page_breadcrumb">
                        <li class="page_breadcrumb_item">
                            <a href="{{route('index')}}">{{__('language.anasehife')}}</a>
                        </li>
                        <li class="page_breadcrumb_item">

                            <a href="{{route('careers')}}">{{__('language.karyera')}}</a>

                        </li>
                    </ul>
                </div>
                <div class="page_header_bottom main_header_head">
                    <p class="page_header_topic page_header_topic_clr">
                       {{$header->header_text ?? ''}}
                    </p>
                    <div class="page_header_desc page_header_desc_clr">
                        <p>
                            {{__('language.birlikdeYarat')}}
                        </p>
                    </div>
                    <div alt="scrollBtn" id="button" class="arrow section-down-arrow-wrap scroller">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17.692" height="28.189" viewBox="0 0 17.692 28.189">
                            <g id="noun_Left_1920800" transform="translate(-13.7 30.689) rotate(-90)">
                                <path id="Path_19" data-name="Path 19" d="M11.346,31.392l1.17-1.194L5.692,23.375h25V21.718h-25l6.823-6.823L11.346,13.7,2.5,22.546Z" transform="translate(0 0)" fill="#fff"/>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </div>
    <div class="section careers_main bgColor fadeUp pd_mobile" data-color="black">
        <div class="careers_main_desc">
            <p>
                {{__('language.edumediaPeshekarKomandasininUzvu')}}
            </p>
        </div>
        <ul class="careers_main_nav">
            <li class="careers_main_nav_item">
                <a href="{{route('specialty','designer')}}">Graphic Designer
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)"></path>
                        </g>
                    </svg>
                </a>

            </li>
            <li class="careers_main_nav_item">
                <a href="{{route('specialty','fDeveloper')}}">Front-End Developer
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)"></path>
                        </g>
                    </svg>
                </a>

            </li>
            <li class="careers_main_nav_item">
                <a href="{{route('specialty','bDeveloper')}}">Back-End Developer
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
            <h3 class="cv_job_content_title">{{__('language.joinUs')}}</h3>
            <a href="mailto::info@edumedia.az" class="cv_job_content_desc">{{__('language.addCv')}}</a>
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
