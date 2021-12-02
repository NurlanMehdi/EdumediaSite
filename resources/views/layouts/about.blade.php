@extends('layouts.master')
@section('content')
    <div class="section main_header bgColor pd_mobile_0">
        <div class="header_content">
            <div class="header_content_img">
                <img src="{{asset('img/about_content.png')}}" alt="">
            </div>
            <div class="header_content_text">
                <!-- <div class="header_content_text_body">
                    <p class="header_content_text_date">01 March 2021</p>
                    <h3 class="header_content_text_title">BI System for the Ministry of Education</h3>
                </div> -->
                <div class="page_header_top">
                    <ul class="page_breadcrumb">
                        <li class="page_breadcrumb_item">
                            <a href="{{route('index')}}">Ana səhifə</a>
                        </li>
                        <li class="page_breadcrumb_item">
                            <a href="{{route('about')}}">Haqqımızda</a>
                        </li>
                    </ul>
                </div>
                <div class="page_header_bottom main_header_head">
                    <p class="page_header_topic page_header_topic_clr">
                        {{$header['header_text'] ?? ''}}
                    </p>
                    <div class="page_header_desc page_header_desc_clr">
                        <p>
                            Edumedia-Azərbaycan yeni və interaktiv xidmət və həllər təminatçısıdır. Edumedia uğurlu beynəlxalq təcrübənin yerli bazara gətirilməsi üzərində işləyir; öz sifarişçisini bir təklif daxilində İT xidmətləri ilə təmin edir; müştərilərinin ehtiyaclarını ətraflı müəyyən edərək, onları məmnun etmək üçün səylə çalışır; yeni mənfəətli tərəfdaşlıq münasibətləri qurmaq üçün vaxt və resurs sərf edir.
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
    <div class="section about_desc bgColor fadeUp" data-color="white">
        <div class="about_content_desc_header">
            <h2 class="about_content_desc_head">Əsas dəyərlərimiz</h2>
        </div>
        <div class="about_content_desc_body">
            <div class="about_content_desc_body_item">
                <h3 class="about_content_desc_body_item_title">Kreativlik</h3>

            </div>
            <div class="about_content_desc_body_item">
                <h3 class="about_content_desc_body_item_title">Əməkdaşlıq</h3>

            </div>
            <div class="about_content_desc_body_item">
                <h3 class="about_content_desc_body_item_title">Məsuliyyət</h3>

            </div>
            <div class="about_content_desc_body_item">
                <h3 class="about_content_desc_body_item_title">Müştəri məmnuniyyət.</h3>

            </div>
            <div class="about_content_desc_body_item">
                <h3 class="about_content_desc_body_item_title">Uğurlu həllərin təminatı</h3>
                <!-- <p class="about_content_desc_body_item_text">We pride ourselves on pushing the boundaries of digital design and development.  We combine relevant trends and best practices to build platforms with longevity.</p>-->
            </div>
        </div>
    </div>
    {{--    <div class="section team bgColor fadeUp pd_mobile" data-color="black">--}}
    {{--        <div class="team_body">--}}
    {{--            <div class="team_header">--}}
    {{--                <h2 class="team_header_title">Komandamız</h2>--}}
    {{--            </div>--}}
    {{--            <div class="team_slideshow">--}}
    {{--                <div class="team_slideshow_item">--}}
    {{--                    <div class="team_slideshow_item_body">--}}
    {{--                        <div class="team_slideshow_item_image">--}}
    {{--                            <img src="{{asset('img/Rectangle 53.png')}}" alt="">--}}
    {{--                        </div>--}}
    {{--                        <div class="team_slideshow_item_content">--}}
    {{--                            <p class="team_slideshow_item_body_name">Dilara Rustamzade</p>--}}
    {{--                            <small class="team_slideshow_item_body_duty">CEO</small>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="team_slide_footer">--}}
    {{--                <button class="team_click_btn slick-arrow prev">--}}
    {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="14.667" height="13.599" viewBox="0 0 14.667 13.599">--}}
    {{--                        <g id="noun_Left_1920800" transform="translate(-2.5 -13.7)">--}}
    {{--                            <path id="Path_19" data-name="Path 19" d="M9.3,27.3l.9-.918L4.954,21.136H17.167V19.862H4.954L10.2,14.618,9.3,13.7,2.5,20.5Z" transform="translate(0 0)"></path>--}}
    {{--                        </g>--}}
    {{--                    </svg>--}}
    {{--                </button>--}}
    {{--                <p class="team_slide_footer_info pagingInfo">5/7</p>--}}
    {{--                <button class="team_click_btn slick-arrow next">--}}
    {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="14.667" height="13.599" viewBox="0 0 14.667 13.599">--}}
    {{--                        <g id="noun_Left_1920800" transform="translate(17.167 27.299) rotate(180)">--}}
    {{--                            <path id="Path_19" data-name="Path 19" d="M9.3,27.3l.9-.918L4.954,21.136H17.167V19.862H4.954L10.2,14.618,9.3,13.7,2.5,20.5Z" transform="translate(0 0)"></path>--}}
    {{--                        </g>--}}
    {{--                    </svg>--}}
    {{--                </button>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="section team_info bgColor fadeUp pd_mobile" data-color="black">
        <p class="team_info_text">Biz daim özümüzü inkişaf etdirir və hər şeyi daha yaxşı şəkildə etmək arzusu ilə çalışırıq. </p>
        <div class="team_info_group">
            <div class="team_info_group_content">
                <div class="team_info_group_item">
                    <div class="team_info_group_item_body">
                        <h1 class="team_info_group_item_numb timer">120+</h1>
                        <small class="team_info_group_item_title">Müştərilərimiz</small>
                    </div>
                </div>
                <div class="team_info_group_item">
                    <div class="team_info_group_item_body">
                        <h1 class="team_info_group_item_numb">536+</h1>
                        <small class="team_info_group_item_title">Uğurlu layihələrimiz </small>
                    </div>
                </div>
                <div class="team_info_group_item">
                    <div class="team_info_group_item_body">
                        <h1 class="team_info_group_item_numb">10</h1>
                        <small class="team_info_group_item_title">Təcrübəmiz</small>
                    </div>
                </div>
                <div class="team_info_group_item">
                    <div class="team_info_group_item_body">
                        <h1 class="team_info_group_item_numb">27</h1>
                        <small class="team_info_group_item_title">Komanda üzvləri</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section expertise bgColor fadeUp pd_mobile" data-color="black">
        <div class="section_header">
            <div class="section_header_container">
                <h4 class="white_title expertise_head">Fəaliyyət sahəmiz</h4>
            </div>
            <a href="{{route('service')}}" class="btn display_none">
                Xidmətlər
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                    </g>
                </svg>
            </a>
        </div>
        <div class="expertise_content">
            @foreach($serviceInfo as $key => $val)

                <a href="{{route('servicePages', $serviceId[$key])}}" class="expertise_content_item">

                    <div class="expertise_content_item_body">

                        <div class="expertise_content_item_title">
                            <p class="expertise_content_item_title_tp">
                                {{$key}}
                            </p>
                        </div>
                        <ul class="expertise_content_item_ul expertise_content_item_ul_clr ">

                            @foreach($val as $key => $item)

                                <li class="expertise_content_item_li">
                                    {{$item}}
                                </li>


                            @endforeach

                        </ul>
                        <div class="expertise_content_item_body_right_icon">
                            <svg id="expertise_item_icon" xmlns="http://www.w3.org/2000/svg" width="25.5" height="16.005" viewBox="0 0 25.5 16.005">
                                <g id="noun_Left_1920800" transform="translate(28 29.705) rotate(180)">
                                    <path id="Path_19" data-name="Path 19" d="M10.5,29.7l1.058-1.08L5.388,22.452H28v-1.5H5.388L11.56,14.78,10.5,13.7l-8,8Z" transform="translate(0 0)" fill="#00aeef"></path>
                                </g>
                            </svg>
                        </div>
                    </div>


                </a>

            @endforeach
        </div>
        <div class="expertise_content_slide_btns">
            <button class="expertise_content_slide_btn prevs slick-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.667" height="13.599" viewBox="0 0 14.667 13.599">
                    <g id="noun_Left_1920800" transform="translate(-2.5 -13.7)">
                        <path id="Path_19" data-name="Path 19" d="M9.3,27.3l.9-.918L4.954,21.136H17.167V19.862H4.954L10.2,14.618,9.3,13.7,2.5,20.5Z" transform="translate(0 0)"></path>
                    </g>
                </svg>
            </button>
            <button class="expertise_content_slide_btn nexts slick-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.667" height="13.599" viewBox="0 0 14.667 13.599">
                    <g id="noun_Left_1920800" transform="translate(17.167 27.299) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M9.3,27.3l.9-.918L4.954,21.136H17.167V19.862H4.954L10.2,14.618,9.3,13.7,2.5,20.5Z" transform="translate(0 0)"></path>
                    </g>
                </svg>
            </button>
        </div>
    </div>
    <div class="section customers bgColor fadeUp pd_mobile" data-color="white">
        <div class="section_header">
            <div class="section_header_container">
                <h4 class="black_title">MÜŞTƏRİLƏRİMİZ</h4>
                <p class="section_header_desc">
                    Müştərilərimizlə uzunmüddətli əlaqələr qurmağı bacarırıq ​
                </p>
            </div>
            <a href="{{route('about')}}" class="btn btn_bgcolor sectionHeadBtn">
                Haqqımızda
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"/>
                    </g>
                </svg>
            </a>
        </div>
        <div class="customer_content">
            <div class="customer_content_item">
                <a href="https://edu.gov.az/" class="customer_content_item_body">
                    <img src="{{asset('img/Layer 2.png')}}" alt="">
                </a>
                <a href="https://www.ite.az/" class="customer_content_item_body">
                    <img src="{{asset('img/inovativ texnalogiyalar.png')}}" alt="texnologiya">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="https://www.mfa.gov.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/logo (1).svg')}}" alt="transport ministry ">
                </a>
                <a href="https://www.azsmart.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/az smart.png')}}" alt="az smart">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="https://www.scanex.az/" class="customer_content_item_body">
                    <img src="{{asset('img/scanex.png')}}" alt="scanex">
                </a>
                <a href="https://www.tkta.edu.az/" class="customer_content_item_body">
                    <img src="{{asset('img/tkta-logo_with_text.svg')}}" alt="tika-logo">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="http://enginet.az/index.php/az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/enginet logo.png')}}" alt="enginet logo">
                </a>
                <a href="https://www.ite.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/inovativ texnalogiyalar.png')}}" alt="inovativ texnalogiyalar">
                </a>
            </div>
            <div class="customer_content_item display_none">
                <a href="https://www.tkta.edu.az/" class="customer_content_item_body">
                    <img src="{{asset('img/tkta-logo_with_text.svg')}}" alt="tika-logo">
                </a>
                <a href="https://www.azsmart.az/" class="customer_content_item_body">
                    <img src="{{asset('img/az smart.png')}}" alt="az smart">
                </a>
            </div>
        </div>
    </div>
    @include('layouts.projectInMind')
@endsection
