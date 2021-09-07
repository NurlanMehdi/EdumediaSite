<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edumedia</title>

    <meta name="keywords" content="edumedia, edu, media, azerbaycan, azerbaijan, azərbaycan">
    <meta name="description" content="EDUMEDIA">
    <meta name="author" content="Farid Yusifov - Frontend Web Developer - Edumedia Azerbaijan">
    <meta name="copyright" content="Farid Yusifov - Frontend Web Developer - Edumedia Azerbaijan">
    <meta property="og:title" content="EDUMEDIA">
    <meta property="og:description" content="EDUMEDIA">
    <meta property="og:image" content="./img/sidebar-icon.png">
    <meta property="og:url" content="edumedia.az">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon (2).ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>
</head>
<body>
<div class="app">
    <div id="sidebar" class="sidebar {{Request::is('contact') ? 'sidebar_bg_light' : ''}} {{Request::is('about') ? 'sidebar_bg_light' : ''}}">
        <div class="sidebar_body">
            <div class="sidebar_btn" title="Toggle button" id="open_menu_btn">
                <div class="bar1 sidebar_menu_icon sidebar_menu_icon_clr_dark"></div>
                <div class="bar2 sidebar_menu_icon sidebar_menu_icon_clr_dark"></div>
            </div>
            <a href="{{route('index')}}" class="sidebar_icon">
                <img src="{{asset('img/sidebar-icon.png')}}" alt="">
                <p class="sidebar_icon_text sidebar_icon_text_clr">edumedia</p>
            </a>
            <a href="{{route('contact')}}" class="customer_btn_light">
                <div class="customerLink customer_btn_clr">
                    Müştərimiz ol
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.162" height="18.162" viewBox="0 0 18.162 18.162">
                        <g id="noun_Left_1920800" transform="translate(29.617 16.393) rotate(135)">
                            <path id="Path_19" data-name="Path 19" d="M8.492,25.684l.792-.809L4.662,20.253H16.2V19.131H4.662l4.622-4.622L8.492,13.7,2.5,19.692Z" transform="translate(0 0)" fill="#151515"/>
                        </g>
                    </svg>
                </div>
            </a>
        </div>
    </div>
    <div id="onclick_sidebar" class="onclick_sidebar" >
        <div class="onclick_sidebar_body">
            <div class="onclick_sidebar_top">
                <div class="onclick_sidebar_lang">
                    <a href="#" class="onclick_sidebar_lang_item">AZ</a>
                    <a href="#" class="onclick_sidebar_lang_item active">ENG</a>
                </div>
                <ul class="onclick_sidebar_header">
                    <li class="onclick_sidebar_header_item">
                        <a href="#">Facebook</a>
                    </li>
                    <li class="onclick_sidebar_header_item">
                        <a href="#">LinkedIn</a>
                    </li>
                    <li class="onclick_sidebar_header_item">
                        <a href="#">Instagram</a>
                    </li>
                </ul>
            </div>
            <ul class="onclick_sidebar_content">
                <li class="onclick_sidebar_content_item">
                    <a href="{{route('index')}}" class="onclick_sidebar_content_item_link active">Home</a>
                </li>
                <li class="onclick_sidebar_content_item">
                    <a href="{{route('service')}}" class="onclick_sidebar_content_item_link">Services</a>
                </li>
                <li class="onclick_sidebar_content_item">
                    <a href="{{route('case_studies')}}" class="onclick_sidebar_content_item_link">Case Studies</a>
                </li>
                <li class="onclick_sidebar_content_item">
                    <a href="{{route('about')}}" class="onclick_sidebar_content_item_link">About Us</a>
                </li>
                <li class="onclick_sidebar_content_item">
                    <a href="{{route('blog')}}" class="onclick_sidebar_content_item_link">Blog</a>
                </li>
                <li class="onclick_sidebar_content_item">
                    <a href="{{route('careers')}}" class="onclick_sidebar_content_item_link">Careers</a>
                </li>
            </ul>
            <div class="onclick_sidebar_footer">
                <div class="onclick_section_footer">
                    <a href="{{route('contact')}}" class="btn onclick_mobile_section_footer_btn">
                        Get in touch
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                            <g id="noun_Left_1920800" transform="translate(9.967 23.407) rotate(180)">
                                <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(-8 0)" fill="#151515"></path>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="onclick_sidebar_footer_body">
                    <a href="{{route('index')}}" class="footer_center_icon">
                        <img src="{{asset('img/page icon.png')}}" alt="page icon">
                    </a>
                    <div class="footer_center_adress">
                        <p>
                            34, Khatai Avenue,  Luxen Plaza, <br> Baku, AZ1008, Azerbaijan
                        </p>
                    </div>
                    <div class="footer_center_contact">
                        <a class="footer_center_contact_mail" href="{{route('about')}}">info@edumedia.az</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="container">
        @yield('content')
        <div class="section footer pd_mobile">
            <div class="footer_content">
                <div class="footer_top">
                    <div class="footer_explore">
                        <h2 class="footer_head">EXPLORE</h2>
                        <ul class="footer_explore_nav">
                            <li class="footer_explore_nav_item">
                                <a href="{{route('about')}}">About Us</a>
                            </li>
                            <li class="footer_explore_nav_item">
                                <a href="{{route('service')}}">Services</a>
                            </li>
                            <li class="footer_explore_nav_item">
                                <a href="{{route('case_studies')}}">Case Studies</a>
                            </li>
                            <li class="footer_explore_nav_item">
                                <a href="{{route('blog')}}">Blog</a>
                            </li>
                            <li class="footer_explore_nav_item">
                                <a href="{{route('careers')}}">Career</a>
                            </li>
                            <li class="footer_explore_nav_item">
                                <a href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer_follow_us">
                        <h2 class="footer_head">FOLLOW US </h2>
                        <ul class="follow_us_nav">
                            <li class="follow_us_nav_item">
                                <a href="{{\App\Models\Contact::where('facebook_status',0)->first()->facebook ?? ''}}">
                                    Facebook
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                        <g id="noun_Left_1920800" transform="translate(9.967 23.407) rotate(180)">
                                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(-8 0)"></path>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="follow_us_nav_item">
                                <a href="{{\App\Models\Contact::where('linkedin_status',0)->first()->linkedin ?? ''}}">
                                    LinkedIn
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                        <g id="noun_Left_1920800" transform="translate(9.967 23.407) rotate(180)">
                                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(-8 0)"></path>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="follow_us_nav_item">
                                <a href="{{\App\Models\Contact::where('instagram_status',0)->first()->instagram ?? ''}}">
                                    Instagram
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                        <g id="noun_Left_1920800" transform="translate(9.967 23.407) rotate(180)">
                                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(-8 0)"></path>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer_center">
                    <a href="{{route('index')}}" class="footer_center_icon">
                        <img src="{{asset('img/page icon.png')}}" alt="">
                    </a>
                    <div class="footer_center_adress">
                        <p>
                            {{\App\Models\Contact::where('address_status',0)->first()->address ?? ''}}
                        </p>
                    </div>
                    <div class="footer_center_contact">
                        <a href="tel:+994124969094" class="footer_center_contact_number">{{\App\Models\Contact::where('phone_number_status',0)->first()->phone_number ?? ''}}</a>
                        <a class="footer_center_contact_mail" href="mailto::info@edumedia.az">{{\App\Models\Contact::where('mail_status',0)->first()->mail ?? ''}}</a>
                    </div>
                </div>
                <div class="footer_bottom">
                    <ul class="footer_bottom_nav">
                        <li class="footer_bottom_nav_item">
                            <a href="{{route('privacyPolicy')}}">Privacy Policy</a>
                        </li>
                        <li class="footer_bottom_nav_item">
                            <a href="{{route('siteMap')}}">Sitemap</a>
                        </li
                    </ul>
                    <div class="footer_bottom_right">
                        <p class="footer_tag">@Edumedia 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="{{asset('dist/jquery.min.js')}}" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
