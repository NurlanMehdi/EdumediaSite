@extends('layouts.master')
@section('content')
    <div class="section main_header bgColor pd_mobile_0">
        <div class="header_content">
            <div class="header_content_img">
                <img src="{{asset('storage/app/img/'.$data->img)}}" alt="">
            </div>
            <div class="header_content_text">
                <!-- <div class="header_content_text_body">
                    <p class="header_content_text_date">01 March 2021</p>
                    <h3 class="header_content_text_title">BI System for the Ministry of Education</h3>
                </div> -->
                <div class="page_header_top">

                    <ul class="page_breadcrumb">
                        <li class="page_breadcrumb_item main_header_head">
                            <a href="{{route('index')}}">{{__('language.anasehife')}} </a>
                        </li>
                        <li class="page_breadcrumb_item main_header_head">
                            <a href="{{route('service')}}">{{__('language.xidmetler')}}</a>
                        </li>
                        <li class="page_breadcrumb_item">
                            <a> {{$data->blog_name}}</a>
                        </li>
                    </ul>
                </div>
                <div class="page_header_bottom main_header_head">
                    <p class="page_header_topic">
                        {{$data->blog_name}}
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

    <div class="section page_about bgColor fadeUp pd_mobile" data-color="black">
        <div class="page_about_content">
            @foreach($allData as $val)
                <div class="page_about_content_item">
                    <div class="page_about_content_item_body">
                        <h2 class="page_about_content_item_head">{{$val->sfi_name}}</h2>
                        <p class="page_about_content_item_desc">
                            {{$val->sfi_short_info}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @if($data->url == 'DizaynvəProgramtəminatı')
        <div class="section design_development bgColor fadeUp pd_mobile" data-color="black">
            <div class="desing_development_header" data-aos="fade-up">
                <h2 class="desing_development_header_head">{{__('language.xidmetler')}}</h2>
            </div>
            <div class="desing_development_content" data-aos="fade-up">
                <div class="desing_development_content_item">
                    <div class="desing_development_content_item_desc margin">
                        <div class="desing_development_content_item_desc_body">
                            <h3 class="desing_development_content_item_desc_head">{{__('language.development')}}</h3>
                            <ul class="desing_development_content_item_desc_acordion">
                                <li class="desing_development_content_item_desc_acordion_card open">
                                    <button class="desing_development_content_item_desc_acordion_card_title">
                                        {{__('language.responsiveWebsite')}}
                                    </button>
                                    <div class="desing_development_content_item_desc_acordion_card_text" style="display: block;">
                                        <p> {{__('language.responsiveWebsiteInfo')}}</p>
                                    </div>
                                </li>
                                <li class="desing_development_content_item_desc_acordion_card">
                                    <button class="desing_development_content_item_desc_acordion_card_title">
                                        {{__('language.mobileApps')}}
                                    </button>
                                    <div class="desing_development_content_item_desc_acordion_card_text">
                                        <p>{{__('language.mobileAppsInfo')}}</p>
                                    </div>
                                </li>
                                <li class="desing_development_content_item_desc_acordion_card">
                                    <button class="desing_development_content_item_desc_acordion_card_title">
                                        {{__('language.complexPlatforms')}}
                                    </button>
                                    <div class="desing_development_content_item_desc_acordion_card_text">
                                        <p>{{__('language.complexPlatformsInfo')}}</p>
                                    </div>
                                </li>
                                <li class="desing_development_content_item_desc_acordion_card">
                                    <button class="desing_development_content_item_desc_acordion_card_title">
                                        {{__('language.BIsystems')}}
                                    </button>
                                    <div class="desing_development_content_item_desc_acordion_card_text">
                                        <p>{{__('language.BIsystemsInfo')}}</p>
                                    </div>
                                </li>
                                <li class="desing_development_content_item_desc_acordion_card">
                                    <button class="desing_development_content_item_desc_acordion_card_title">
                                        {{__('language.Erp/Crm')}}
                                    </button>
                                    <div class="desing_development_content_item_desc_acordion_card_text">
                                        <p>{{__('language.Erp/CrmInfo')}}</p>
                                    </div>
                                </li>
                                <!-- <li class="desing_development_content_item_desc_acordion_card">
                                    <button class="desing_development_content_item_desc_acordion_card_title">
                                        Oyunlar
                                    </button>
                                    <div class="desing_development_content_item_desc_acordion_card_text">
                                        <p>Daha yaxşı və müasir oyunların yaradılmasını mümkün etmək üçün daim yeni texnologiyalardan istifadə edirik</p>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="desing_development_content_item_photo margin">
                        <div class="desing_development_content_item_img box">
                            <div class="desing_development_content_item_img_body box_item">
                                <img src="{{asset('./img/arif-riyanto-G1N9kDHqBrQ-unsplash.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desing_development_content_item flex_direction">
                    <div class="desing_development_content_item_desc margin">
                        <div class="desing_development_content_item_desc_body">
                            <h3 class="desing_development_content_item_desc_head">{{__('language.design')}}</h3>
                            <ul class="desing_development_content_item_desc_acordion">
                                <li class="desing_development_content_item_desc_acordion_card">
                                    <button class="desing_development_content_item_desc_acordion_card_title">
                                        {{__('language.Ux/Ui')}}
                                    </button>
                                    <div class="desing_development_content_item_desc_acordion_card_text">
                                        <p>{{__('language.Ux/UiInfo')}}</p>
                                    </div>
                                </li>
                                <li class="desing_development_content_item_desc_acordion_card">
                                    <button class="desing_development_content_item_desc_acordion_card_title">
                                        {{__('language.LogoDesign')}}
                                    </button>
                                    <div class="desing_development_content_item_desc_acordion_card_text">
                                        <p>{{__('language.LogoDesignInfo')}}</p>
                                    </div>
                                </li>
                                <li class="desing_development_content_item_desc_acordion_card">
                                    <button class="desing_development_content_item_desc_acordion_card_title">
                                        <p>{{__('language.branding')}}</p>
                                    </button>
                                    <div class="desing_development_content_item_desc_acordion_card_text">
                                        <p> <p>{{__('language.brandingInfo')}}</p></p>
                                    </div>
                                </li>
                                <li class="desing_development_content_item_desc_acordion_card">
                                    <button class="desing_development_content_item_desc_acordion_card_title">
                                        <p>{{__('language.printDesign')}}</p>
                                    </button>
                                    <div class="desing_development_content_item_desc_acordion_card_text">
                                        <p>{{__('language.printDesignInfo')}}</p>
                                    </div>
                                </li>
                                <li class="desing_development_content_item_desc_acordion_card">
                                    <button class="desing_development_content_item_desc_acordion_card_title">
                                        {{__('language.socialMedia')}}
                                    </button>
                                    <div class="desing_development_content_item_desc_acordion_card_text">
                                        <p>{{__('language.socialMediaInfo')}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="desing_development_content_item_photo margin">
                        <div class="desing_development_content_item_img box">
                            <div class="desing_development_content_item_img_body box_item">
                                <img src="{{asset('./img/photo-1506097425191-7ad538b29cef.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="desing_development_desc" data-aos="fade-up" style="display:none;">
                <div class="desing_development_desc_body">
                    <h3 class="desing_development_desc_body_h3">
                        Biz sadəcə kodlaşdırmırıq, həm də Müştərilərimizə tətbiq əhatəsini sadələşdirməyə kömək edirik, həmçinin strateji texnologiyalar toplusu üzrə məsləhətləşirik.
                    </h3>
                </div>
                <div class="desing_development_desc_body">
                    <p>
                        Yaxşı dizayn hədəf auditoriyanızın brendiniz və biznesinizlə qarşılıqlı əlaqəsini dəyişə bilər. Seminarlara, istifadəçi araşdırmalarına və təhlillərə əsaslanan anlayışlara istinadən, hədəf və məqsədinizə çatmağınıza əminik. Hədəf qrupu üçün uyğun və mənalı, aydın və effektiv konsepsiya yaratmağa diqqət yetirməklə, təcrübəlrimizə əsasən dəyər yaradacağımıza təminat veririk.
                    </p>
                    <br>
                    <p>
                        Uğurlu həllə aparan yol həmişə sizinlə sıx əməkdaşlıqla əldə edilir, çünki işinizi sizdən yaxşı bilən yoxdur.
                    </p>
                    <br>
                    <p>


                        İstər rəqəmsal strategiyaya ehtiyacınız olsun, istərsə də mövcud həlldə yenilik tətbiq etməyə kömək edin, məqsəd həmişə tapşırığı istəklərinizə, prioritetlərinizə və büdcənizə cavab verəcək şəkildə yaxşı həll etməkdir.
                    </p>
                </div>
            </div>
        </div>
    @endif

    <div class="section expertise bgColor fadeUp pd_mobile" data-color="white">
        <div class="expertise_container">
            <div class="desingDevelopment_expertise_content expertise_content_none  pd-top150">
                <div class="expertise_content_item">
                    <div class="expertise_content_item_body">
                        <h2 class="expertise_content_item_h2">{{__('language.digerXidmetler')}}</h2>

                    </div>
                </div>
                @foreach($serviceInfo as $key => $val)

                    <a href="{{route('servicePages', $serviceId[$key][0])}}" class="expertise_content_item">

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
            <div class="service_left display">
                <div class="service_left_content">
                    <div class="service_left_content_header service_nav_item_clr">
                        {{__('language.xidmetler')}}
                    </div>
                    <ul class="service_left_content_nav">
                        @foreach($serviceInfo as $key => $val)

                            <li class="service_left_content_nav_item">
                                <a href="{{route('servicePages', $serviceId[$key])}}" class="service_left_content_nav_item_link service_nav_item_clr" data-services-menu-id="designAndDevelopment">{{$key}}</a>
                                <svg class="nav_arrow" xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                                    </g>
                                </svg>
                            </li>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- @include('layouts/tplAboutAndCareers')
    @include('layouts/projectInMind') -->

@endsection






