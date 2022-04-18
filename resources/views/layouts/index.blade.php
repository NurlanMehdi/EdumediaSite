@extends('layouts.master')
@section('content')
    <div class="section header bgColor pd_mobile" data-color="black">
        <img class="section_header_absolute_img" src="{{asset('img/Main 2_6 (2).gif')}}" alt="giff">
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
                <a alt="scrollBtn" id="button" class="arrow section-down-arrow-wrap scroller">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.692" height="28.189" viewBox="0 0 17.692 28.189">
                        <g id="noun_Left_1920800" transform="translate(-13.7 30.689) rotate(-90)">
                            <path id="Path_19" data-name="Path 19" d="M11.346,31.392l1.17-1.194L5.692,23.375h25V21.718h-25l6.823-6.823L11.346,13.7,2.5,22.546Z" transform="translate(0 0)" fill="#fff"/>
                        </g>
                    </svg>
                </a>
                <div class="header_link">
                    <a href="{{route('about')}}" class="btn">
                        {{__('language.haqqimizda')}}
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
    <div class="section banner fadeUp bgColor pd_mobile" id="nextSection" data-color="black">
        <div class="section_header">
            <h4 class="white_title">{{$blogHeaderName->names ?? ''}}</h4>
            <a href="{{route('service')}}" class="btn banner_service_btn" style="display:none;">
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
            @foreach($blogs as $key => $blog)
                <div class="banner_content_mobile_item">
                    <div class="banner_content_mobile_item_numb">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28.996" height="28.999" viewBox="0 0 28.996 28.999">
                            <g id="Group_730" data-name="Group 730" transform="translate(-71.5 -924)">
                                <path id="Path_9" data-name="Path 9" d="M11.416,17.9l.691.688a2.048,2.048,0,0,1,0,2.895L4.146,29.443a2.048,2.048,0,0,1-2.895,0l-.688-.691a2.048,2.048,0,0,1,0-2.895l7.961-7.943a2.048,2.048,0,0,1,2.891-.014Z" transform="translate(71.536 906.7)" fill="#00aeef" @if($key != 0) opacity="0.25" @endif/>
                                <path id="Path_12" data-name="Path 12" d="M45.508,18.571l.691-.688a2.048,2.048,0,0,1,2.895,0l7.943,7.961a2.048,2.048,0,0,1,0,2.895l-.688.691a2.048,2.048,0,0,1-2.895,0l-7.961-7.961a2.048,2.048,0,0,1,.014-2.9Z" transform="translate(42.861 906.716)" fill="#00aeef" @if($key != 1) opacity="0.25" @endif/>
                                <path id="Path_11" data-name="Path 11" d="M.616,63.5l.688-.691a2.052,2.052,0,0,1,2.895,0l7.961,7.961a2.048,2.048,0,0,1,0,2.895l-.691.691a2.048,2.048,0,0,1-2.895,0L.631,66.392A2.048,2.048,0,0,1,.616,63.5Z" transform="translate(71.497 878.047)" fill="#00aeef" @if($key != 2) opacity="0.25" @endif/>
                                <path id="Path_10" data-name="Path 10" d="M56.365,62.819l.688.691a2.048,2.048,0,0,1,0,2.895L49.11,74.366a2.048,2.048,0,0,1-2.895,0l-.691-.691a2.048,2.048,0,0,1,0-2.895l7.961-7.961A2.052,2.052,0,0,1,56.365,62.819Z" transform="translate(42.845 878.035)" fill="#00aeef"  @if($key != 3) opacity="0.25" @endif/>
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
                                <a href="{{route('blogItemInner',[$row->id,$row->item_id])}}" class="case_studies_content_item">
                                    <div class="case_studies_content_item_body">
                                        <div class="box pd-top50">
                                            <div class="box_item">
                                                <img class="case_studies_item_img" src="{{'storage/app/img/'.$row->img}}" alt="sekil">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="case_studies_content_item_desc">
                                        <p>{{$row->header_name}}</p>
                                        <small>{{$row->other_info}}</small>
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
                <h4 class="black_title">{{__('language.mushterilerimiz1')}}</h4>
                <!--<p class="section_header_desc">-->
            <!--    {{__('language.mushterilerimizBashliq1')}}-->
                <!--</p>-->
            </div>
            <a href="{{route('about')}}" class="btn btn_bgcolor sectionHeadBtn" style="display:none;">
                {{__('language.haqqimizda')}}
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
                <a href="https://www.etwinningplus.edu.az/" class="customer_content_item_body">
                    <img src="{{asset('img/e-twinning.svg')}}" alt="texnologiya">
                </a>
                <a href="https://www.tkta.edu.az/" class="customer_content_item_body">
                    <img src="{{asset('img/tkta-logo_with_text.svg')}}" alt="tika-logo">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="https://www.mfa.gov.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/logo (2).svg')}}" alt="transport ministry ">
                </a>
                <a href="https://www.azsmart.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/reqemsal-logo.svg')}}" alt="reqemsal bacariqlar">
                </a>
                <a href="https://marsacademy.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/MA-logo.svg')}}" alt="mars academy">
                </a>
                <a href="https://www.azsmart.az/" class="customer_content_item_body">
                    <img src="{{asset('img/az smart.png')}}" alt="az smart">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="https://www.scanex.az/" class="customer_content_item_body">
                    <img src="{{asset('img/scanex.png')}}" alt="scanex">
                </a>
                <a href="https://video.edu.az/" class="customer_content_item_body">
                    <img src="{{asset('img/video-edu-az.png')}}" alt="video edu az">
                </a>
                <a href="https://birlink.az/az" class="customer_content_item_body">
                    <img src="{{asset('img/birlink-logo.svg')}}" alt="birlink">
                </a>
                <a href="https://az.polychallenge.org/" class="customer_content_item_body">
                    <img src="{{asset('img/Polyup 2.2.svg')}}" alt="vl">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="http://enginet.az/index.php/az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/enginet logo.png')}}" alt="enginet logo">
                </a>
                <a href="https://grants.edu.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/qrant_logo-mono.svg')}}" alt="grant edu az">
                </a>
                <a href="https://ict.edu.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/tsii.svg')}}" alt="tsii logo">
                </a>
                <a href="https://bsu-uni.edu.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/uni.png')}}" alt="tsii logo">
                </a>
            </div>
        </div>
        <div class="section_footer">
            <a href="{{route('about')}}" class="btn btn_bgcolor mobile_section_footer_btn">
                {{__('language.haqqimizda')}}
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
    <div class="section customers fadeUp bgColor pd_mobile" data-color="white">
        <div class="section_header">
            <div class="section_header_container">
                <h4 class="black_title">{{__('language.partners1')}}</h4>
            <!-- <p class="section_header_desc">
                    {{__('language.mushterilerimizBashliq1')}}
                </p> -->
            </div>
            <a href="{{route('about')}}" class="btn btn_bgcolor sectionHeadBtn" style="display:none;">
                {{__('language.haqqimizda')}}
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"/>
                    </g>
                </svg>
            </a>
        </div>
        <div class="customer_content">
            <div class="customer_content_item">
                <a href="https://www.acer.com" class="customer_content_item_body">
                    <img src="{{asset('img/partner/acer.svg')}}" alt="">
                </a>
                <a href="https://www.arduino.cc/" class="customer_content_item_body">
                    <img src="{{asset('img/partner/arduino.svg')}}" alt="texnologiya">
                </a>
                <a href="https://www.benmaker.com/" class="customer_content_item_body">
                    <img src="{{asset('img/partner/benmaker.svg')}}" alt="texnologiya">
                </a>
                <a href="https://www.cisco.com/" class="customer_content_item_body">
                    <img src="{{asset('img/partner/cisco.svg')}}" alt="tika-logo">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="https://www.dobot.cc/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/partner/dobot.svg')}}" alt="transport ministry ">
                </a>
                <a href="https://epson.com/usa" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/partner/epson.svg')}}" alt="reqemsal bacariqlar">
                </a>
                <a href="https://www.flashforge.com/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/partner/flashforge-01.svg')}}" alt="mars academy">
                </a>
                <a href="https://globisens.net/" class="customer_content_item_body">
                    <img src="{{asset('img/partner/globisens.svg')}}" alt="az smart">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="https://isandbox.ru/" class="customer_content_item_body">
                    <img src="{{asset('img/partner/isanbox.svg')}}" alt="scanex">
                </a>
                <a href="https://www.lego.com/en-gb/" class="customer_content_item_body">
                    <img src="{{asset('img/partner/lego.svg')}}" alt="video edu az">
                </a>
                <a href="https://microbit.org/" class="customer_content_item_body">
                    <img src="{{asset('img/partner/microbit.svg')}}" alt="birlink">
                </a>
                <a href="https://www.optoma.com/" class="customer_content_item_body">
                    <img src="{{asset('img/partner/optoma.svg')}}" alt="vl">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="https://www.prometheanworld.com/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/partner/promethean.svg')}}" alt="enginet logo">
                </a>
                <a href="https://grants.edu.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/partner/Logo-vL.png')}}" alt="grant edu az">
                </a>
                <a href="https://ultimaker.com/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/partner/ultimaker.svg')}}" alt="tsii logo">
                </a>
                <a href="https://www.video-doska.ru/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/partner/videodoska.svg')}}" alt="tsii logo">
                </a>
            </div>
        </div>
    </div>
    @include('layouts.projectInMind')

@endsection






