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
                            <a href="{{route('index')}}">Ana Səhifə</a>
                        </li>
                        <li class="page_breadcrumb_item main_header_head">
                            <a href="{{route('careers')}}">Karyera</a>
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
                            Strategiya və yaradıcılığa ilk rəqəmsal yanaşma.
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
                    Graphic Designer
                @elseif($key == 'fDeveloper')
                    Front-End Developer
                @else
                    Back-End Developer
                @endif
            kimdir?
            </h1>
            <p class="designer_overview_content_desc">
                @if($key == 'designer')
                    Graphic Designer, bir mesajı əyani ya da yazı yolu ilə müəyyən hədəf kütləyə çatdırmaq məqsədi ilə edilən görünə bilən hər hansı bir formada, iki ölçülü və ya üç ölçülü olaraq düzəldilən logo, kitab, animasiya, film dizaynı kimi yaradıcılıq tələb edən dizaynları yaradan təhsil sahəsidir. Graphic Designer-in özü özlüyündə sürətlənmə, asimmetriya və ya simmetriya, vurğulama, hərəkət, nisbət yaxınlıq, təkrarlama və birlik kimi müəyyən ölçüləri ehtiva edir.
                @elseif($key == 'fDeveloper')
                    Front-End Developer fərqli brauzerlərdə düzgün görünüş təmin etmək, kodu daha faydalı və vaxta qənaət edən bir formada yazmaq üçün cavabdehdilər. Əlavə olaraq, Front-End Developer arxa planda server məlumatlarını yükləyərək səhifələrin dinamik yüklənməsinə və ya məlumatların dəyişməsinə imkan verən metod və kitabxana biliklərinə də sahib olmalıdır.
                @else
                    Back-End Developer kimi ən azı bir server tərəfli (server – side) proqramlaşdırma dilini bilməlidir. Bundan əlavə, müxtəlif DBMS (Database Management System) texnologiyaları, veb xidmətləri (web services) və ya API bilikləri barədə məlumat da Back-End Developer-in bilməsi vacib olan ehtiyaclardandır.
                @endif
            </p>
        </div>
        <div class="designer_overview_needs">
            <div class="designer_overview_needs_item" data-aos="fade-up">
                <h2 class="designer_overview_needs_item_title">İş haqda ümumi məlumat:</h2>
                <ul class="designer_overview_needs_item_body">
                    @if($key == 'designer')
                        <li class="designer_overview_needs_item_body_li">Biznesin tələblərinə, məhsulun mövzusuna, vizyonuna uyğun UX və UI dizaynların yaradılması</li>
                        <li class="designer_overview_needs_item_body_li">Müştəri təcrübəsinin və tələbatlarının araşdırılması</li>
                        <li class="designer_overview_needs_item_body_li">Son trendlərə uyğun dizayn prinsiplərinin tətbiqi və dizayn sistemin yaradılması, inkişaf etdirilməsi</li>
                        <li class="designer_overview_needs_item_body_li">Yaradılmış dizaynının inkişaf etdirilməsi</li>
                        <li class="designer_overview_needs_item_body_li">Yaradılmış dizayn prototiplərinin potensial istifadəçilərlə test edilməsi, nəticələrin analizi</li>
                    @elseif($key == 'fDeveloper')
                        <li class="designer_overview_needs_item_body_li">Siz frontend arxitekturalarını və UI/UX dizaynerlərimizn tərtib etdiyi istifadəçi interfeyslərini tədbiq etmək</li>
                        <li class="designer_overview_needs_item_body_li">Yenidən istifadə edilə bilən və genişlənə bilən komponentləri yaratmaq;</li>
                        <li class="designer_overview_needs_item_body_li">“code refactoring” çərçivəsində əlavə tapşırıqları yerinə yetirmək</li>
                        <li class="designer_overview_needs_item_body_li">Hazırki və gələcəkdə tədbiq edəcəyimiz səhifələrin / komponentlərin avtomatik test (Cypress) edilməsini təmin etmək</li>
                        <li class="designer_overview_needs_item_body_li">Proyektimizin faydalana biləcəyi yeni frontend ideyaları və texnologiyaları nəzərdən keçirmək</li>
                    @else
                        <li class="designer_overview_needs_item_body_li">Yeni veb layihələr üzərində çalışmaq</li>
                        <li class="designer_overview_needs_item_body_li">Mövcud veb layihələri inkişaf etdirmək</li>
                        <li class="designer_overview_needs_item_body_li">Keyfiyyətli və səliqəli kod yazmaq</li>
                        <li class="designer_overview_needs_item_body_li">Yazdığı kodların üzərində testlər aparmaq</li>
                        <li class="designer_overview_needs_item_body_li">Veb layihələr üzərində komanda üzvü olaraq çalışmaq</li>
                    @endif

                </ul>
            </div>
            <div class="designer_overview_needs_item" data-aos="fade-up">
                <h2 class="designer_overview_needs_item_title">Namizəd üçün tələblər</h2>
                <ul class="designer_overview_needs_item_body">
                    @if($key == 'designer')
                        <li class="designer_overview_needs_item_body_li">Sketch, Figma, Adobe XD proqramlarında işləmək bacarığı</li>
                        <li class="designer_overview_needs_item_body_li">UX\UI dizayn üzrə minimum 1 il iş təcrübəsi</li>
                        <li class="designer_overview_needs_item_body_li">Responsiv dizayn üzrə təcrübə</li>
                        <li class="designer_overview_needs_item_body_li">Yaradıcılıq və araşdırma qabiliyyəti</li>
                        <li class="designer_overview_needs_item_body_li">Verilən tapşırığa adaptasiya olma və sərbəst araşdırma qabiliyyət</li>
                    @elseif($key == 'fDeveloper')
                        <li class="designer_overview_needs_item_body_li">HTML, CSS (SCSS) və JavaScript-i mükəmməl bilmək</li>
                        <li class="designer_overview_needs_item_body_li">Js-i və onun əsas prinsiplərini yaxşı başa düşmək</li>
                        <li class="designer_overview_needs_item_body_li">NPM, Webpack, Babel kimi frontend alətləri ilə işləmə təcrübəsi</li>
                        <li class="designer_overview_needs_item_body_li">Səmərəli, təhlükəsiz, təmiz və genişlənə bilən kod yazmaq bacarığı</li>
                        <li class="designer_overview_needs_item_body_li">GİT-lə işləmə təcrübəsi (yaranan konfliktləri problemsiz şəkildə həll etmək)</li>
                        <li class="designer_overview_needs_item_body_li">REST API üzrə əsas biliklər (sorğunu göndərib cavabı qəbul etmək)</li>
                        <li class="designer_overview_needs_item_body_li">Müxtəlif brauzerlərlə işləmə təcrübəsi</li>
                        <li class="designer_overview_needs_item_body_li">İngilis dilini bilmək üstünlük olacaq</li>
                        <li class="designer_overview_needs_item_body_li">Typescript biliyi arzuolunandır</li>
                    @else
                        <li class="designer_overview_needs_item_body_li">PHP (ORM, MVC, OOP) anlayışı</li>
                        <li class="designer_overview_needs_item_body_li">Larevel, yii, codeingiter ilə təcrübə</li>
                        <li class="designer_overview_needs_item_body_li">SQL, MySQL, MongoDB bilikləri və təcrübəsi</li>
                        <li class="designer_overview_needs_item_body_li">REST API ilə işləmə təcrübəsi (Sayta ödəniş sistemi quraşdırılması)</li>
                        <li class="designer_overview_needs_item_body_li">Database ilə işləmək təcrübəsi</li>
                        <li class="designer_overview_needs_item_body_li">Komandada işləmək təcrübəsi</li>
                        <li class="designer_overview_needs_item_body_li">Analitik düşüncə</li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
    <div class="section about_yourself bgColor fadeUp pd_mobile" data-color="white">
        <div class="about_yourself_header">
            <h1 class="about_yourself_header_head">Müraciət edin və özünüz haqqında bizə məlumat verin.</h1>
        </div>
        <div class="about_yourself_content">
            <form action="#">
                <div class="formItem">
                    <label for="name">Ad / Soyad</label>
                    <input type="text" id="name" placeholder="Ad / Soyad" class="contact_input">
                </div>
                <div class="formItem">
                    <label for="number">Əlaqə nömrəsi</label>
                    <input type="text" id="number" placeholder="Əlaqə nömrəsi" class="contact_input">
                </div>
                <div class="formItem">
                    <label for="email">E-poçt</label>
                    <input type="text" id="email" placeholder="E-poçt" class="contact_input">
                </div>
                <div class="formItem">
                    <label for="cv">Cv əlavə edin</label>
                    <div class="about_yourself_content_form_file">
                        <label class="about_yourself_content_form_label" style="text-align: start" for="cv">PDF</label>
                        <input type="file"  class="about_yourself_content_form_control">
                    </div>
                </div>
                <a href="#" type="submit" class="contact_btn">
                    Göndər
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






