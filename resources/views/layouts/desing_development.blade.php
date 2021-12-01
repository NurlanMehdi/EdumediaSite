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
                               <a href="{{route('index')}}">Ana səhifə </a>
                        </li>
                        <li class="page_breadcrumb_item main_header_head">
                        <a href="{{route('service')}}">Xidmətlər</a>
                        </li>
                        <li class="page_breadcrumb_item">
                            <a href="desing_development.html"> {{$data->blog_name}}</a>
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
    <div class="section design_development bgColor fadeUp pd_mobile" data-color="black">
        <div class="desing_development_header" data-aos="fade-up">
            <h2 class="desing_development_header_head">Biz nə edirik?</h2>
        </div>
        <div class="desing_development_content" data-aos="fade-up">
            <div class="desing_development_content_item">
                <div class="desing_development_content_item_desc margin">
                    <div class="desing_development_content_item_desc_body">
                        <h3 class="desing_development_content_item_desc_head">Proqram təminatı</h3>
                        <ul class="desing_development_content_item_desc_acordion">
                            <li class="desing_development_content_item_desc_acordion_card open">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Vebsaytlar
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text" style="display: block;">
                                    <p>Komandamız tərəfindən hazırlanmış veb səhifələr çevik, dinamik və istənilən müştəri ehtiyacına uyğunlaşdırıla bilən şəkildədir</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                  Mobil tətbiqlər
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>Biz sizin biznes və xidmətləriniz üçün xüsusi tapşırıqları yerinə yetirən və müştəri əlaqənizi gücləndirən mobil tətbiqlər hazırlayırıq.</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Kompleks platformalar
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
<p>Komandamızın mürəkkəb strukturlu işlər görmək və çoxfunksiyalı sistemlər qurmaq təcrübəsi var</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Bİ sistemləri
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>Biz sizə tətbiq ediyimiz mürəkkəb BI sistemləri tərəfindən təmin edilən dəqiq məlumatlar əsasında təhlil etmək və düzgün qərarlar qəbul etməkdə kömək edirik</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                 ERP/CRM sistemləri
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>Biz sizin həyatınızı asanlaşdırmağa kömək edən mürəkkəb sistemlər üçün strukturu inkişaf etdiririk</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Oyunlar
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>Daha yaxşı və müasir oyunların yaradılmasını mümkün etmək üçün daim yeni texnologiyalardan istifadə edirik</p>
                                </div>
                            </li>
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
                        <h3 class="desing_development_content_item_desc_head">Dizayn</h3>
                        <ul class="desing_development_content_item_desc_acordion">
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    UX / UI
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>Veb dizaynlarımız istifadəçinin veb sayt xüsusiyyətləri və idarəetmə vasitələri ilə qarşılıqlı əlaqəsinə, həmçinin vebsaytdan istifadə edərkən istifadəçi davranışına və hisslərinə əsaslanır.</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                   Loqo dizaynı
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>Biz sizin şirkətinizi digərlərindən fərqləndirəcək korporativ simanın ən vacib elementlərindən birini yaradırıq</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Brendinq
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>Biz korporativ simanın bütün zəruri elementlərini yaradaraq brendinizi formalaşdırmağa kömək edirik</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                   Çap məhsulları dizaynı
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>Flyerlər və jurnallar, xarici reklam və tədbir materialları daxil biz hər bir dizaynı təhlil araşdırma edir, bu sahədə ən yaxşı mütəxəssisləri özündə birləşdirərək ayrıca layihə olaraq nəzərdən keçiririk.</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Sosial media
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>Komandamız markanızın sosial media hesablarının və kommunikasiya strategiyalarının daim və dinamik şəkildə dəyişikliklərə uyğunlaşdırmağa və idarə etməyə kömək edir.</p>
                                </div>
                            </li>
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
        </div>
        <div class="desing_development_desc" data-aos="fade-up">
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
@include('layouts/tplAboutAndCareers')
@include('layouts/projectInMind')

@endsection






