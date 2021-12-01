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
                            <a href="{{route('index')}}">Ana Səhifə</a>
                        </li>
                        <li class="page_breadcrumb_item main_header_head">
                            <a href="{{route('service')}}">Xidmətlər</a>
                        </li>
                        <li class="page_breadcrumb_item">
                            <a href="desing_development.html">    {{$data->blog_name}}</a>
                        </li>
                    </ul>
                </div>
                <div class="page_header_bottom main_header_head">
                    <p class="page_header_topic">
                        {{$data->blog_name}}
                    </p>
                    <div class="page_header_desc page_header_desc_clr">
                        <p>
                           Strategiya və yaradıcılığa rəqəmsal yanaşma
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
    <div class="section hardwareDistribution_header bgColor fadeUp pd_mobile" data-color="black">
        <div class="page_header_bottom">
            <p class="page_header_topic page_header_topic_font">
               Komandamız effektiv rəqəmsal həllər təqdim edərək problemlərin həllini təmin edir.
            </p>
            <div class="page_header_desc">
                <p>
                   Biz həm texniki cəhətdən uğurlu inkişaf etmiş, həm də dəqiq dizayn səriştələrinə malik rəqəmsal agentliyik. Çünki biz əminik ki, bu, uğurlu həllər yaratmaq və çatdırmağın ən yaxşı yoludur.
                </p>
            </div>
        </div>
    </div>
    <div class="section hardwareDistribution bgColor fadeUp pd_mobile" data-color="black">
        <div class="hardwareDistribution_content">
            <div class="hardwareDistribution_content_left">
                <div class="hardwareDistribution_content_left_body">
                    <div class="hardwareDistribution_content_left_desc">
                       Məhsulların keyfiyyətinə zəmanət veririk. Çünki, biz sizin məmnunluğunuz üçün çalışırıq.
                    </div>
                </div>
            </div>
            <div class="hardwareDistribution_content_right">
                <div class="hardwareDistribution_content_right_body">
                    <div class="hardwareDistribution_content_right_body_images">
                        <div class="hardwareDistribution_content_right_body_slide">
                            <div class="hardwareDistribution_content_right_body_slide_item">
                                <img src="{{asset('/img/PngItem_2516042.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="hardwareDistribution_content_right_body_desc">
                        <div class="hardwareDistribution_content_right_body_desc_head">
                            İnteraktiv lövhələr və monitorlar
                        </div>
                        <div class="hardwareDistribution_content_right_body_desc_text">
 Promethean interaktiv lövhələri dəsrlərinizi daha canlı və əyləncəli keçməkdə sizə kömək edəcək. ActivBoard interaktiv lövhələri Promethean şirkətinin tədrisyönümlü proqram təminatı ilə işləyir və şagirdlərin diqqətini cəlb etmək və istənilən sinifdə rəqəmsal avadanlığın köməyilə keçdiyiniz dərslərə interaktiv imkanlar əlavə etmək üçün nəzərdə tutulur. Bütün siniflər bir-birindən fərqlənir, buna görə də, bir neçə konfiqurasiyalı ActivBoard interaktiv lövhələri mövcuddur və onları konkret tələblərə uyğunlaşdırmaq mümkündür. Lövhələr üçün olan tətbiqi proqramda aşağıdakı avadanlıqlar təklif edilə bilər:
<br>
- Sorğu və test sistemi ActivExpression
<br>
- Sorğu və test sistemi ActiVote
<br>
- Simsiz planşet ActivSlate
<br>
- Sənəd-kamera ActiView 324
<br>
- (Divar dinamikləri olan) akustik sistem ActivSound 200
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section hardwareDistributionCategories bgColor fadeUp pd_mobile" data-color="black">
        <div class="hardwareDistributionCategories_body">
            <div class="hardwareDistributionCategories_body_category">
                <div class="hardwareDistributionCategories_body_category_head">
                    Qısa və uzun yansımalı projektorlar

                </div>
                <div class="hardwareDistributionCategories_body_category_items">
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <div class="box pd-top100">
                                <div class="box_item">
                                    <img src="{{asset('img/thumbnail-image-mh534-01.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">

                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                            Proyektor-böyük ekranda təsvirin yaradılması üçün nəzərdə tutulmuş optik cihazdır.
                            Müasir proyektorlar nisbətən yaxın vaxtlarda peyda olub və onlar satışda böyük dövriyyə qazanır, tətbiqin bir çox sahələrində populyarlaşır.
                            Proyektorlar yalnız təlim slaydlarını göstərmək üçün deyil, həm də ev istifadəsi üçün istifadə olunur.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hardwareDistributionCategories_body_category">
                <div class="hardwareDistributionCategories_body_category_head">
              TƏHSİL ROBOTLARI

                </div>
                <div class="hardwareDistributionCategories_body_category_items">

                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <div class="box pd-top100">
                                <div class="box_item">
                                    <img src="{{asset('img/tehsil-robot.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">

                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                           Bu məhsulun istehsalında robot texnikası sahəsindəki yeni texnologiyalardan istifadə olunmuşdur. Oyuncaqların mühərrikləri, əlavə sensorları və rəngli ekranları vardır. Robotlar onlarla ilk dəfə rastlaşanların hamısını heyrətə gətirir, axı onlar özlərini əsl canlılar kimi aparırlar. Onlara toxunduqda və səs eşitdikdə reaksiya verir, əşyanın temperaturunu və məsafəni müəyyən edə bilirlər. Siz əl çaldıqda, onlar yaxına gəlməyi, yaxınlıqdakı əşyanı qaldırmağı və işıq və qaranlığı ayırd etməyi bacarırlar. Adama elə gəlir ki, bütün bunlar kifayət qədər çətindir, amma təcrübə göstərir ki, istifadəçi səviyyəsində kompüter bacarıqlarına malik olan hər bir uşaq heç bir problem olmadan konstruktoru proqramlaşdıra və öz şəxsi robotunu yarada bilər. Qeyd edək ki, oyuncaqlara əmrləri yalnız kompüterdən deyil, həmçinin, Bluetooth proqramını dəstəkləyən istənilən mobil telefondan daxil etmək mümkündür.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <div class="box pd-top100">
                                <div class="box_item">
                                    <img src="{{asset('img/tehsil-robot-2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">

                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                           Bu məhsulun istehsalında robot texnikası sahəsindəki yeni texnologiyalardan istifadə olunmuşdur. Oyuncaqların mühərrikləri, əlavə sensorları və rəngli ekranları vardır. Robotlar onlarla ilk dəfə rastlaşanların hamısını heyrətə gətirir, axı onlar özlərini əsl canlılar kimi aparırlar. Onlara toxunduqda və səs eşitdikdə reaksiya verir, əşyanın temperaturunu və məsafəni müəyyən edə bilirlər. Siz əl çaldıqda, onlar yaxına gəlməyi, yaxınlıqdakı əşyanı qaldırmağı və işıq və qaranlığı ayırd etməyi bacarırlar. Adama elə gəlir ki, bütün bunlar kifayət qədər çətindir, amma təcrübə göstərir ki, istifadəçi səviyyəsində kompüter bacarıqlarına malik olan hər bir uşaq heç bir problem olmadan konstruktoru proqramlaşdıra və öz şəxsi robotunu yarada bilər. Qeyd edək ki, oyuncaqlara əmrləri yalnız kompüterdən deyil, həmçinin, Bluetooth proqramını dəstəkləyən istənilən mobil telefondan daxil etmək mümkündür.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hardwareDistributionCategories_body_category">
                <div class="hardwareDistributionCategories_body_category_head">
                     3D qələmlər,3D printerlər


                </div>
                <div class="hardwareDistributionCategories_body_category_items">

                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <div class="box pd-top100">
                                <div class="box_item">
                                    <img src="{{asset('img/3dprinter.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">

                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                        3D printer kompüter sistemi ilə birgə çalışan 3 ölçülü fiziki obyektlər yarada bilən qurğudur. Ənənəvi printerlər kimi 3D printerlər də ilk növbətə rəqəmsal məlumatı qəbul edir.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section expertise bgColor fadeUp pd_mobile" data-color="white">
        <div class="expertise_container">
            <div class="desingDevelopment_expertise_content expertise_content_none  pd-top150">
                <div class="expertise_content_item">
                    <div class="expertise_content_item_body">
                        <h2 class="expertise_content_item_h2">Digər Xidmətlər</h2>
                    </div>
                </div>
                   @foreach($serviceInfo as $key => $val)
              @if($key != 'id')
                   <a href="{{route('servicePages', $serviceInfo['id'][0])}}" class="expertise_content_item">

                          <div class="expertise_content_item_body">

                        <div class="expertise_content_item_title">
                            <p class="expertise_content_item_title_tp">
                                {{$key}}
                            </p>
                        </div>
                        <ul class="expertise_content_item_ul expertise_content_item_ul_clr ">
                            @foreach($val as $item)

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
              @endif

                          @endforeach
            </div>
            <div class="service_left display">
                <div class="service_left_content">
                    <div class="service_left_content_header service_nav_item_clr">
                        Our services
                    </div>
                    <ul class="service_left_content_nav">
                        <li class="service_left_content_nav_item">
                            <a href="desing_development.html" class="service_left_content_nav_item_link service_nav_item_clr" data-services-menu-id="designAndDevelopment">Design &amp; Development</a>
                            <svg class="nav_arrow" xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                    <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                                </g>
                            </svg>
                        </li>
                        <li class="service_left_content_nav_item">
                            <a href="hardwareDistribution.html" class="service_left_content_nav_item_link service_nav_item_clr active" data-services-menu-id="hardwareSolutions">Hardware solutions</a>
                            <svg class="nav_arrow" xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                    <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                                </g>
                            </svg>
                        </li>
                        <li class="service_left_content_nav_item">
                            <a href="desing_development.html" class="service_left_content_nav_item_link service_nav_item_clr" data-services-menu-id="educationContent">Educational content</a>
                            <svg class="nav_arrow" xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                    <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                                </g>
                            </svg>
                        </li>
                        <li class="service_left_content_nav_item">
                            <a href="desing_development.html" class="service_left_content_nav_item_link service_nav_item_clr" data-services-menu-id="coachingAndConsulting">Coaching &amp; consulting</a>
                            <svg class="nav_arrow" xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                    <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                                </g>
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@include('layouts.tplAboutAndCareers')
@include('layouts.projectInMind')
@endsection






