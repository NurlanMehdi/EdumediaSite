@extends('layouts.master')
@section('content')
    <div class="section header bgColor pd_mobile" data-color="black">
        <img class="section_header_absolute_img" src="{{asset('img/Main 2_6.gif')}}" alt="giff">
        <div class="header_container">
            <div class="header_body">
                <div class="header_icon">
                    <img src="{{asset('img/page icon.png')}}" alt="page-icon">
                </div>
                <div class="header_desc">
                    <h1>
                        {{$header['header_text'] ?? ''}}
                    </h1>
                </div>
                <a href="#scroll" alt="scrollBtn" id="button" class="arrow section-down-arrow-wrap scroller">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.692" height="28.189" viewBox="0 0 17.692 28.189">
                        <g id="noun_Left_1920800" transform="translate(-13.7 30.689) rotate(-90)">
                            <path id="Path_19" data-name="Path 19" d="M11.346,31.392l1.17-1.194L5.692,23.375h25V21.718h-25l6.823-6.823L11.346,13.7,2.5,22.546Z" transform="translate(0 0)" fill="#fff"/>
                        </g>
                    </svg>
                </a>
                <div class="header_link">
                    <a href="{{route('about')}}" class="btn">
                        Haqqımızda
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                            <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section banner fadeUp bgColor pd_mobile" data-color="black">
        <div class="section_header">
            <h4 class="white_title">{{$blogHeaderName->names ?? ''}}</h4>
            <a href="{{route('service')}}" class="btn banner_service_btn">
                {{$blogHeaderName->button_name ?? ''}}
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"/>
                    </g>
                </svg>
            </a>
        </div>
        <div class="banner_content">

            @foreach($blogs as $blog)
                <div class="banner_content_item active">
                    <div class="banner_content_item_body" onclick="location.href='{{route('servicePages',$blog->id)}}'">
                        <h2>{{$blog->blog_name ?? ''}}</h2>
                        <div class="banner_content_item_desc">
                            {{--                            <p>--}}
                            {{--                                {{$blog->short_info ?? ''}}--}}
                            {{--                            </p>--}}
                            <a href="{{route('servicePages',$blog->id)}}" class="btn">
                                {{$blog->blog_button_other ?? ''}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>

                    </div>
                    <div class="banner_content_item_numb">
                        <div class="banner_empty"></div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="banner_content_mobile">
            @foreach($blogs as $blog)
                <div class="banner_content_mobile_item">
                    <div class="banner_content_mobile_item_numb">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28.996" height="28.999" viewBox="0 0 28.996 28.999">
                            <g id="Group_730" data-name="Group 730" transform="translate(-71.5 -924)">
                                <path id="Path_9" data-name="Path 9" d="M11.416,17.9l.691.688a2.048,2.048,0,0,1,0,2.895L4.146,29.443a2.048,2.048,0,0,1-2.895,0l-.688-.691a2.048,2.048,0,0,1,0-2.895l7.961-7.943a2.048,2.048,0,0,1,2.891-.014Z" transform="translate(71.536 906.7)" fill="#00aeef"/>
                                <path id="Path_10" data-name="Path 10" d="M56.365,62.819l.688.691a2.048,2.048,0,0,1,0,2.895L49.11,74.366a2.048,2.048,0,0,1-2.895,0l-.691-.691a2.048,2.048,0,0,1,0-2.895l7.961-7.961A2.052,2.052,0,0,1,56.365,62.819Z" transform="translate(42.845 878.035)" fill="#00aeef" opacity="0.25"/>
                                <path id="Path_11" data-name="Path 11" d="M.616,63.5l.688-.691a2.052,2.052,0,0,1,2.895,0l7.961,7.961a2.048,2.048,0,0,1,0,2.895l-.691.691a2.048,2.048,0,0,1-2.895,0L.631,66.392A2.048,2.048,0,0,1,.616,63.5Z" transform="translate(71.497 878.047)" fill="#00aeef" opacity="0.25"/>
                                <path id="Path_12" data-name="Path 12" d="M45.508,18.571l.691-.688a2.048,2.048,0,0,1,2.895,0l7.943,7.961a2.048,2.048,0,0,1,0,2.895l-.688.691a2.048,2.048,0,0,1-2.895,0l-7.961-7.961a2.048,2.048,0,0,1,.014-2.9Z" transform="translate(42.861 906.716)" fill="#00aeef" opacity="0.25"/>
                            </g>
                        </svg>
                    </div>
                    <h2 class="banner_content_mobile_item_title">{{$blog->blog_name ?? ''}}</h2>
                    <p class="banner_content_mobile_item_desc">
                        {{$blog->short_info ?? ''}}
                    </p>
                    <a href="{{route('service')}}" class="btn">
                        {{$blog->blog_button_other ?? ''}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                            <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                            </g>
                        </svg>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="section case_studies fadeUp bgColor pd_mobile" data-color="white">
        <div class="section_header">
            <div class="section_header_container">
                <h4 class="black_title">{{$studiesHeaderName->name ?? ''}}</h4>
            </div>
            <a href="{{route('case_studies')}}" class="btn btn_bgcolor sectionHeadBtn">
                {{$studiesHeaderName->button_name ?? ''}}
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"/>
                    </g>
                </svg>
            </a>
        </div>
        <div class="case_studies_content">
            @foreach($studies->chunk(4) as $rows)
                <div class="case_studies_slider">
                    @foreach($rows as $row)



                        <div class="case_studies_silder_item">
                            <div>
                                <a href="{{route('blogItemInner',$row->id)}}" class="case_studies_content_item">
                                    <div class="case_studies_content_item_body">
                                        <div class="box pd-top50">
                                            <div class="box_item">
                                                <img class="case_studies_item_img" src="{{'storage/app/img/'.$row->img}}" alt="sekil">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="case_studies_content_item_desc">
                                        <small>{{$row->header_name}}</small>
                                        <p>{{$row->other_info}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

        </div>
        <div class="case_studies_footer">
            <button class="case_studies_arrow prev" aria-label="prevBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.667" height="13.599" viewBox="0 0 14.667 13.599">
                    <g id="noun_Left_1920800" transform="translate(-2.5 -13.7)">
                        <path id="Path_19" data-name="Path 19" d="M9.3,27.3l.9-.918L4.954,21.136H17.167V19.862H4.954L10.2,14.618,9.3,13.7,2.5,20.5Z" transform="translate(0 0)"/>
                    </g>
                </svg>
            </button>
            <div class="case_studies_text pagingInfo">
                1/9
            </div>
            <button class="case_studies_arrow next" aria-label="nextBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.667" height="13.599" viewBox="0 0 14.667 13.599">
                    <g id="noun_Left_1920800" transform="translate(17.167 27.299) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M9.3,27.3l.9-.918L4.954,21.136H17.167V19.862H4.954L10.2,14.618,9.3,13.7,2.5,20.5Z" transform="translate(0 0)"/>
                    </g>
                </svg>
            </button>
        </div>
        <div class="section_footer">
            <a href="about.html" class="btn btn_bgcolor mobile_section_footer_btn">
                {{$studiesHeaderName->button_name ?? ''}}
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <div class="section customers fadeUp bgColor pd_mobile" data-color="white">
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
                <a href="https://edu.gov.az/" class="customer_content_item_body">
                    <img src="{{asset('img/tehsil nazirliyi.png')}}" alt="">
                </a>
                <a href="https://www.ite.az/" class="customer_content_item_body">
                    <img src="{{asset('img/inovativ texnalogiyalar.png')}}" alt="texnologiya">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="https://www.mfa.gov.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/xin-logo.png')}}" alt="transport ministry ">
                </a>
                <a href="https://www.azsmart.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/az smart.png')}}" alt="az smart">
                </a>
                <a href="https://www.mfa.gov.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/xin-logo.png')}}" alt="transport ministry">
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
                <a href="https://www.tkta.edu.az/" class="customer_content_item_body">
                    <img src="{{asset('img/tkta-logo_with_text.svg')}}g" alt="tika-logo">
                </a>
                <a href="https://www.azsmart.az/" class="customer_content_item_body">
                    <img src="{{asset('img/az smart.png')}}" alt="az smart">
                </a>
            </div>
        </div>
        <div class="section_footer">
            <a href="{{route('about')}}" class="btn btn_bgcolor mobile_section_footer_btn">
                Haqqımızda
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                    </g>
                </svg>
            </a>
        </div>
    </div>
    {{--    @include('layouts.miniPostDashboard')--}}
    @include('layouts.tplAboutAndCareers')
    @include('layouts.projectInMind')

@endsection






