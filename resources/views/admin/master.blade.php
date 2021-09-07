<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SITE MANIFEST AND FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('admin/assets/vendor/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/assets/vendor/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/vendor/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('admin/assets/vendor/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('admin/assets/vendor/favicon/safari-pinned-tab.svg')}}" color="#15306b">
    <meta name="apple-mobile-web-app-title" content="Edumedia">
    <meta name="application-name" content="Edumedia">
    <meta name="msapplication-TileColor" content="#15306b">
    <meta name="theme-color" content="#15306b">
    <!-- SITE MANIFEST AND FAVICONS END -->

    <!-- SEO -->
    <title>EDUMEDIA</title>
    <meta name="author" content="Əli Mahmudlu - Frontend Web Developer - Edumedia Azerbaijan">
    <meta name="copyright" content="Əli Mahmudlu - Frontend Web Developer - Edumedia Azerbaijan">
    <meta name="Description" content="Xarici İşlər Nazirliyi | XİN">
    <meta name="keywords" content="Edumedia">
    <meta property="image" content="" />
    <meta property="og:title" name="og:title" content="Edumedia">
    <meta property="og:type" content="Home Page" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="EDUMEDIA" />
    <!-- SEO END -->

    <!-- STYLESHEET -->
    <link rel="stylesheet preload" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet preload" href="{{asset('admin/assets/css/fonts.css')}}" />
    <link rel="stylesheet preload" href="{{asset('admin/assets/css/main.css')}}" />
    <!-- STYLESHEET END -->
</head>
<body>
<!-- HEADER -->
<section class="section section_header">
    <div class="container-fluid">
        <div class="section_header_topHeader">
            <div class="section_header_topHeader_logo">
                <a href="index.html" class="section_header_topHeader_logo_link">
                    <span class="section_header_topHeader_logo_link--text">
                        Edumedia
                    </span>
                </a>
            </div>
            <a href="#" class="section_header_topHeader_toggle">
                <i class="xin-icon xin-burger"></i>
            </a>
        </div>
        @if(Request::is('coco') != 1)
            <div class="section_header_mainHeader">
                <div class="section_header_mainHeader_navbar">
                    <a href="{{route('adminIndex')}}" data-name="Dashboard" data-sub-menu="menu_dashboard" class="section_header_mainHeader_navbar_link">
                        Dashboard
                    </a>
                    <a href="categories.html" data-name="Kateqoriyalar" data-sub-menu="menu_categories" class="section_header_mainHeader_navbar_link">
                        Kateqoriyalar
                    </a>
                    <a href="pages.html" data-name="Səhifələr" data-sub-menu="menu_pages" class="section_header_mainHeader_navbar_link">
                        Səhifələr
                    </a>
                    <a href="news.html" data-name="Xəbərlər" data-sub-menu="menu_news" class="section_header_mainHeader_navbar_link">
                        Xəbərlər
                    </a>
                    <a href="contacts.html" data-name="Əlaqə" data-sub-menu="menu_contacts" class="section_header_mainHeader_navbar_link">
                        Əlaqə
                    </a>
                    <a href="{{route('logout.handle')}}" data-name="Çıxış" data-sub-menu="menu_logout" class="section_header_mainHeader_navbar_link">
                        Çıxış
                    </a>
                </div>
            </div>
            <div class="section_header_mobileNavbar">
                <div class="section_header_mobileNavbar_nav">
                    <div class="section_header_mobileNavbar_nav_item">
                        <a href="{{route('adminIndex')}}" class="section_header_mobileNavbar_nav_item--link">
                            Dashboard
                        </a>
                    </div>
                    <div class="section_header_mobileNavbar_nav_item">
                        <a href="categories.html" class="section_header_mobileNavbar_nav_item--link">
                            Kateqoriyalar
                        </a>
                    </div>
                    <div class="section_header_mobileNavbar_nav_item">
                        <a href="pages.html" class="section_header_mobileNavbar_nav_item--link">
                            Səhifələr
                        </a>
                    </div>
                    <div class="section_header_mobileNavbar_nav_item">
                        <a href="news.html" class="section_header_mobileNavbar_nav_item--link">
                            Xəbərlər
                        </a>
                    </div>
                    <div class="section_header_mobileNavbar_nav_item">
                        <a href="contacts.html" class="section_header_mobileNavbar_nav_item--link">
                            Əlaqə
                        </a>
                    </div>
                </div>
                <div class="section_header_mobileNavbar_bottom">
                    <div class="section_header_mobileNavbar_bottom_content">
                        <div class="section_header_mobileNavbar_bottom_content_social">
                            <a href="#" class="section_header_mobileNavbar_bottom_content_social--link">
                                <i class="xin-icon xin-twitter_bg"></i>
                            </a>
                            <a href="#" class="section_header_mobileNavbar_bottom_content_social--link">
                                <i class="xin-icon xin-facebook_bg"></i>
                            </a>
                            <a href="#" class="section_header_mobileNavbar_bottom_content_social--link">
                                <i class="xin-icon xin-instagram_bg"></i>
                            </a>
                            <a href="#" class="section_header_mobileNavbar_bottom_content_social--link">
                                <i class="xin-icon xin-youtube_bg"></i>
                            </a>
                        </div>
                        <div class="section_header_mobileNavbar_bottom_content_lang">
                            <a href="#" class="section_header_mobileNavbar_bottom_content_lang--link">
                                az
                            </a>
                            <a href="#" class="section_header_mobileNavbar_bottom_content_lang--link">
                                ru
                            </a>
                            <a href="#" class="section_header_mobileNavbar_bottom_content_lang--link active">
                                en
                            </a>
                            <a href="#" class="section_header_mobileNavbar_bottom_content_lang--link">
                                fr
                            </a>
                        </div>
                    </div>
                    <div class="section_header_mobileNavbar_bottom_search">
                        <label class="sr-only" for="searchMobile">Search</label>
                        <form class="searchForm">
                            <i class="xin-icon xin-search"></i>
                            <input class="section_header_mainHeader_search_input searchForm--input customForm-control" id="searchMobile" name="search" value="" placeholder="Search" type="search">
                        </form>
                    </div>
                </div>
            </div>
        @endif


    </div>
</section>
<!-- HEADER END -->

<!-- MAIN PAGE -->
<section class="mainPage">
    @yield('content')
</section>
<!-- MAIN PAGE END -->

<!-- FOOTER -->
<!-- MINOR FOOTER -->
<section class="section section_minorFooter">
    <div class="container-lg">
        <div class="section_minorFooter_content">
            <div class="section_minorFooter_content--description">
                All Rights Reserved. Please get in touch to use any licensed materials.
            </div>
            <a href="#" class="section_minorFooter_content--link">
                Privacy Policy
            </a>
        </div>
    </div>
</section>
<!-- MINOR FOOTER END -->
<!-- FOOTER END -->

<!-- SCRIPTS -->
<script src="{{asset('admin/assets/vendor/jQuery/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/jQueryActual/jqueryActual.js')}}"></script>
<script src="{{asset('admin/assets/vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<div id="selectScript"></div>
<div id="datePickerScript"></div>
<div id="dataTableScript"></div>
<div id="slugifyScript"></div>

<script src="{{asset('admin/assets/js/main.js')}}"></script>
<!-- SCRIPTS END -->
@yield('js')
</body>
</html>

