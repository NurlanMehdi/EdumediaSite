<!DOCTYPE html>

<html lang="{{app()->getLocale()}}">
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

    <link rel="stylesheet" href="{{asset('css/main.css?version=123')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css?version=12')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon (2).ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>
</head>
<body>
<div class="app">
<div class="modal">
    <div class="modal-back-frame modal-toggle"></div>
    <div class="modal-wrapper">
      <div class="modal-header">
        <button class="modal-close modal-toggle">╳</button>
      </div>
      <div class="modal-body">
   <div class="modal-content">
        <h2 class="modal-heading">Hesabatlar</h2>
        <div class="modal-btn">
            <a href="" download>
                2021 Hesabat
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve" fill="currentColor"> 
                            <g>
                                <path d="M245,0c-9.5,0-17.2,7.7-17.2,17.2v331.2L169,289.6c-6.7-6.7-17.6-6.7-24.3,0s-6.7,17.6,0,24.3l88.1,88.1     c3.3,3.3,7.7,5,12.1,5c4.4,0,8.8-1.7,12.1-5l88.1-88.1c6.7-6.7,6.7-17.6,0-24.3c-6.7-6.7-17.6-6.7-24.3,0L262,348.4V17.1     C262.1,7.6,254.5,0,245,0z"/>
                                <path d="M462.1,472.9v-99.7c0-9.5-7.7-17.2-17.2-17.2s-17.2,7.7-17.2,17.2v82.6H62.2v-82.6c0-9.5-7.7-17.2-17.1-17.2     s-17.2,7.7-17.2,17.2v99.7c0,9.5,7.7,17.1,17.2,17.1h399.8C454.4,490,462.1,482.4,462.1,472.9z"/>
                            </g>
                </svg>
            </a>
            <a href="" download>
                2022 Hesabat

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve" fill="currentColor"> 
                  
                            <g>
                                <path d="M245,0c-9.5,0-17.2,7.7-17.2,17.2v331.2L169,289.6c-6.7-6.7-17.6-6.7-24.3,0s-6.7,17.6,0,24.3l88.1,88.1     c3.3,3.3,7.7,5,12.1,5c4.4,0,8.8-1.7,12.1-5l88.1-88.1c6.7-6.7,6.7-17.6,0-24.3c-6.7-6.7-17.6-6.7-24.3,0L262,348.4V17.1     C262.1,7.6,254.5,0,245,0z"/>
                                <path d="M462.1,472.9v-99.7c0-9.5-7.7-17.2-17.2-17.2s-17.2,7.7-17.2,17.2v82.6H62.2v-82.6c0-9.5-7.7-17.2-17.1-17.2     s-17.2,7.7-17.2,17.2v99.7c0,9.5,7.7,17.1,17.2,17.1h399.8C454.4,490,462.1,482.4,462.1,472.9z"/>
                            </g>
                
                </svg>
            </a>
        </div>
        </div>
      </div>
    </div>
  
</div>

    <div id="sidebar" class="sidebar {{Request::is('/') ||  Request::is('service') || Request::is('blog') ||  Request::is('careers') ? 'sidebar_bg_dark' : 'sidebar_bg_light' }}">
        <div class="sidebar_body">
            <div class="sidebar_btn" title="Toggle button" id="open_menu_btn">
                <div class="bar1 sidebar_menu_icon  {{Request::is('/') ||  Request::is('service') || Request::is('blog') ||  Request::is('careers') ? 'sidebar_menu_icon_clr_light' : 'sidebar_menu_icon_clr_dark' }} "></div>
                <div class="bar2 sidebar_menu_icon {{Request::is('/') ||  Request::is('service') || Request::is('blog') ||  Request::is('careers') ? 'sidebar_menu_icon_clr_light' : 'sidebar_menu_icon_clr_dark' }}"></div>
            </div>
            <a href="{{route('index')}}" class="sidebar_icon">
                <img src="{{asset('img/sidebar-icon.png')}}" alt="">
                <p class="sidebar_icon_text  {{Request::is('/') ||  Request::is('service') || Request::is('blog') ||  Request::is('careers') ? '' : 'sidebar_icon_text_clr' }} ">edumedia</p>
            </a>
            <a href="{{route('contact')}}" class="{{Request::is('/') ||  Request::is('service') || Request::is('blog') ||  Request::is('careers') ? 'customer_btn_dark' : 'customer_btn_light' }}">
                <div class="customerLink {{Request::is('/') ||  Request::is('service') || Request::is('blog') ||  Request::is('careers') ? '' : 'customer_btn_clr' }}">
                    {{__('language.mushterimizOl')}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.162" height="18.162" viewBox="0 0 18.162 18.162">
                        <g id="noun_Left_1920800" transform="translate(29.617 16.393) rotate(135)">
                            <path id="Path_19" data-name="Path 19" d="M8.492,25.684l.792-.809L4.662,20.253H16.2V19.131H4.662l4.622-4.622L8.492,13.7,2.5,19.692Z" transform="translate(0 0)" fill="{{Request::is('/') ||  Request::is('service') || Request::is('blog') ||  Request::is('careers') ? '#ffffff' : '#151515' }}"/>
                        </g>
                    </svg>
                </div>
            </a>
        </div>
    </div>
    <div id="onclick_sidebar" class="onclick_sidebar {{Request::is('/') ||  Request::is('service') || Request::is('blog') ||  Request::is('careers') ? 'sidebar_bg_dark' : 'sidebar_bg_light' }}" >
        <div class="onclick_sidebar_body">
            <div class="onclick_sidebar_top">
                <div class="onclick_sidebar_lang">
                    <a href="{{route('changeLang','az')}}"  class="onclick_sidebar_lang_item {{(app()->getLocale() === 'az') ? 'active' : ''}}">
                        AZ
                    </a>

                    <a href="{{route('changeLang','en')}}"  class="onclick_sidebar_lang_item {{(app()->getLocale() === 'en') ? 'active' : ''}}">
                        ENG
                    </a>
                </div>
                <ul class="onclick_sidebar_header">
                    <li class="onclick_sidebar_header_item">
                        <a href="https://www.facebook.com/edumedia.azerbaijan">Facebook</a>
                    </li>
                    <li class="onclick_sidebar_header_item">
                        <a href="https://www.linkedin.com/company/edumedia-azerbaijan-llc/mycompany/">LinkedIn</a>
                    </li>
                    <li class="onclick_sidebar_header_item">
                        <a href="https://www.instagram.com/edumediaaz/">Instagram</a>
                    </li>
                    <li class="onclick_sidebar_header_item">
                        <a href="" class="modal-toggle">Göstəricilər</a>
                    </li>
                </ul>
            </div>
            <ul class="onclick_sidebar_content">
                <li class="onclick_sidebar_content_item">
                    <a href="{{route('index')}}" class="onclick_sidebar_content_item_link {{Request::is('/') == true ? 'active' : '' }}">{{__('language.anasehife')}}</a>
                </li>
                <li class="onclick_sidebar_content_item">
                    <a href="{{route('service')}}" class="onclick_sidebar_content_item_link {{Request::is('service') == true ? 'active' : '' }}">{{__('language.xidmetler')}}</a>
                </li>
                <li class="onclick_sidebar_content_item">
                    <a href="{{route('case_studies')}}" class="onclick_sidebar_content_item_link {{Request::is('case_studies') == true ? 'active' : '' }}">{{__('language.layiheler')}}</a>
                </li>
                <li class="onclick_sidebar_content_item">
                    <a href="{{route('about')}}" class="onclick_sidebar_content_item_link {{Request::is('about') == true ? 'active' : '' }}">{{__('language.haqqimizda')}}</a>
                </li>
                <li class="onclick_sidebar_content_item">
                    <a href="{{route('careers')}}" class="onclick_sidebar_content_item_link {{Request::is('careers') == true ? 'active' : '' }}">{{__('language.karyera')}}</a>
                </li>
            </ul>
            <div class="onclick_sidebar_footer">
                <div class="onclick_section_footer">
                    <a href="{{route('contact')}}" class="btn onclick_mobile_section_footer_btn">
                        {{__('language.mushterimizOl')}}
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
                            {{\App\Models\Contact::first()['address'] ?? ''}}
                        </p>
                    </div>
                    <div class="footer_center_contact">
                        <a class="footer_center_contact_mail" href="{{route('about')}}">{{\App\Models\Contact::first()['mail'] ?? ''}}</a>
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
                        <h2 class="footer_head">{{__('language.explore')}}</h2>
                        <ul class="footer_explore_nav">
                            <li class="footer_explore_nav_item">
                                <a href="{{\App\Models\Contact::where('facebook_status',0)->first()->facebook ?? ''}}">
                                    Facebook
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                        <g id="noun_Left_1920800" transform="translate(9.967 23.407) rotate(180)">
                                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(-8 0)"></path>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="footer_explore_nav_item">
                                <a href="{{\App\Models\Contact::where('linkedin_status',0)->first()->linkedin ?? ''}}">
                                    LinkedIn
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                        <g id="noun_Left_1920800" transform="translate(9.967 23.407) rotate(180)">
                                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(-8 0)"></path>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="footer_explore_nav_item">
                                <a href="{{\App\Models\Contact::where('instagram_status',0)->first()->instagram ?? ''}}">
                                    Instagram
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                        <g id="noun_Left_1920800" transform="translate(9.967 23.407) rotate(180)">
                                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(-8 0)"></path>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="footer_explore_nav_item">
                                <a href="" class="modal-toggle">
                                    Göstəricilər
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
                            @if(app()->getLocale() == 'az')
                                {{\App\Models\Contact::where('address_status',0)->first()->address ?? ''}}
                            @else
                                {{__('language.edumediaUnvan')}}
                            @endif

                        </p>
                    </div>
                    <div class="footer_center_contact">
                        <a href="tel:+994124969094" class="footer_center_contact_number">{{\App\Models\Contact::where('phone_number_status',0)->first()->phone_number ?? ''}}</a>
                        <a class="footer_center_contact_mail" href="mailto::info@edumedia.az">{{\App\Models\Contact::where('mail_status',0)->first()->mail ?? ''}}</a>
                    </div>
                </div>
                {{--                <div class="footer_bottom">--}}
                {{--                    <ul class="footer_bottom_nav">--}}
                {{--                        <li class="footer_bottom_nav_item">--}}
                {{--                            <a href="{{route('privacyPolicy')}}">Privacy Policy</a>--}}
                {{--                        </li>--}}
                {{--                        <li class="footer_bottom_nav_item">--}}
                {{--                            <a href="{{route('siteMap')}}">Sitemap</a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                    <div class="footer_bottom_right">--}}
                {{--                        <p class="footer_tag">@Edumedia 2021</p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>

</div>
<script src="{{asset('admin/assets/vendor/jQuery/jquery-3.6.0.min.js')}}"></script>

<script>
$('.modal-toggle').on('click', function(e) {
  e.preventDefault();
  $('.modal').toggleClass('is-visible');
  if($('.is-visible')[0]){
    $("body").css("overflow", "hidden");    
  }else{
    $("body").css("overflow", "auto");
  }
});
</script>
<script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('js')
</body>
</html>
