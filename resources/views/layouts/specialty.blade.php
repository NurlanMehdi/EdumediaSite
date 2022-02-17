@extends('layouts.master')
@section('content')
    <!DOCTYPE html>
<html lang="en">

<body>
<div class="app">
    <div class="section main_header bgColor pd_mobile_0" >
        <div class="header_content">
            <div class="header_content_img">
                @if($key == 'designer')
                    <img src="{{asset('img/dizayner.jpg')}}" alt="">
                @elseif($key == 'fDeveloper')
                    <img src="{{asset('img/front.jpg')}}" alt="">
                @else
                    <img src="{{asset('img/developer.jpg')}}" alt="">
                @endif
            </div>
            <div class="header_content_text">
                <!-- <div class="header_content_text_body">
                    <p class="header_content_text_date">01 March 2021</p>
                    <h3 class="header_content_text_title">BI System for the Ministry of Education</h3>
                </div> -->
                <div class="page_header_top">
                    <ul class="page_breadcrumb">
                        <li class="page_breadcrumb_item main_header_head">
                            <a href="{{route('index')}}">{{__('language.anasehife')}}</a>
                        </li>
                        <li class="page_breadcrumb_item main_header_head">
                            <a href="{{route('careers')}}">{{__('language.karyera')}}</a>
                        </li>
                        <li class="page_breadcrumb_item">
                            @if($key == 'designer')
                                <a>Graphic Designer</a>
                            @elseif($key == 'fDeveloper')
                                <a>Front-End Developer</a>
                            @else
                                <a>Back-End Developer</a>
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="page_header_bottom main_header_head">
                    <p class="page_header_topic page_header_topic_clr">
                        @if($key == 'designer')
                            Graphic Designer
                        @elseif($key == 'fDeveloper')
                            Front-End Developer
                        @else
                            Back-End Developer
                        @endif
                    </p>
                    <div class="page_header_desc page_header_desc_clr">
                        <p>
                            {{__('language.strategiyaVeYaradiciliq')}}
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
    <div class="section designer_overview bgColor fadeUp pd_mobile" data-color="black">
        <div class="designer_overview_content">
            <h1 class="designer_overview_content_head">
                @if($key == 'designer')
                    {{__('language.whoGraphicDesigner')}}
                @elseif($key == 'fDeveloper')
                    {{__('language.whoFrontDeveloper')}}
                @else
                    {{__('language.whoBackDeveloper')}}
                @endif
            </h1>
            <p class="designer_overview_content_desc">
                @if($key == 'designer')
                    {{__('language.GDinfo')}}

                @elseif($key == 'fDeveloper')
                    {{__('language.FDinfo')}}
                @else
                    {{__('language.BDinfo')}}
                @endif
            </p>
        </div>
        <div class="designer_overview_needs">
            <div class="designer_overview_needs_item" data-aos="fade-up">
                <h2 class="designer_overview_needs_item_title">{{__('language.JobDescription')}}</h2>
                <ul class="designer_overview_needs_item_body">
                    @if($key == 'designer')
                        <li class="designer_overview_needs_item_body_li">{{__('language.designerDescription1')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.designerDescription2')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.designerDescription3')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.designerDescription4')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.designerDescription5')}}</li>
                    @elseif($key == 'fDeveloper')
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdDescription1')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdDescription2')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdDescription3')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdDescription4')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdDescription5')}}</li>
                    @else
                        <li class="designer_overview_needs_item_body_li">{{__('language.bdDescription1')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.bdDescription2')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.bdDescription3')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.bdDescription4')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.bdDescription5')}}</li>
                    @endif

                </ul>
            </div>
            <div class="designer_overview_needs_item" data-aos="fade-up">
                <h2 class="designer_overview_needs_item_title">{{__('language.Responsibilities')}}</h2>
                <ul class="designer_overview_needs_item_body">
                    @if($key == 'designer')
                        <li class="designer_overview_needs_item_body_li">{{__('language.designerResponsibilities1')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.designerResponsibilities2')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.designerResponsibilities3')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.designerResponsibilities4')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.designerResponsibilities5')}}</li>
                    @elseif($key == 'fDeveloper')
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdResponsibilities1')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdResponsibilities2')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdResponsibilities3')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdResponsibilities4')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdResponsibilities5')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdResponsibilities6')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdResponsibilities7')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdResponsibilities8')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.fdResponsibilities9')}}</li>
                    @else
                        <li class="designer_overview_needs_item_body_li">{{__('language.bdResponsibilities1')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.bdResponsibilities2')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.bdResponsibilities3')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.bdResponsibilities4')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.bdResponsibilities5')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.bdResponsibilities6')}}</li>
                        <li class="designer_overview_needs_item_body_li">{{__('language.bdResponsibilities7')}}</li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
    <div class="section about_yourself bgColor fadeUp pd_mobile" data-color="white">
        <div class="about_yourself_header">
            <h1 class="about_yourself_header_head">{{__('language.muracietEdin')}}</h1>
        </div>
        <div class="about_yourself_content">
            <form action="#">
                <div class="formItem">
                    <label for="name">{{__('language.name')}} / {{__('language.surname')}}</label>
                    <input type="text" id="name" placeholder="{{__('language.name')}} / {{__('language.surname')}}" class="contact_input">
                </div>
                <div class="formItem">
                    <label for="number">{{__('language.phone')}}</label>
                    <input type="text" id="number" placeholder="{{__('language.phone')}}" class="contact_input">
                </div>
                <div class="formItem">
                    <label for="email">{{__('language.e-mail')}}</label>
                    <input type="text" id="email" placeholder="{{__('language.e-mail')}}" class="contact_input">
                </div>
                <div class="formItem">
                    <label for="cv">{{__("language.addCv")}}</label>
                    <div class="about_yourself_content_form_file">
                        <label class="about_yourself_content_form_label" style="text-align: start" for="cv">{{__("language.addCv")}}</label>
                        <input type="file"  class="about_yourself_content_form_control">
                    </div>
                </div>
                <a href="#" type="submit" class="contact_btn">
                    {{__("language.send")}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(36.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(19 0)" fill="#fff"></path>
                        </g>
                    </svg>
                </a>
            </form>
        </div>
    </div>
</div>
<script src="./dist/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>
@include('layouts.tplAboutAndCareers')
@include('layouts.projectInMind')
@endsection






