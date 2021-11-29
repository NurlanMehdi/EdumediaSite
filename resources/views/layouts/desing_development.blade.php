@extends('layouts.master')
@section('content')
    <div class="section page_header bgColor pd_mobile" data-color="white">
        <div class="page_header_top">
            <ul class="page_breadcrumb">
                <li class="page_breadcrumb_item">
                    <a href="{{route('index')}}">home</a>
                </li>
                <li class="page_breadcrumb_item page_breadcrumb_item_clr">
                    <a href="{{route('service')}}">services</a>
                </li>
                <li class="page_breadcrumb_item page_breadcrumb_item_clr">
                    <a href="{{route('servicePages',$data->id)}}">{{$data->blog_name}}</a>
                </li>
            </ul>
        </div>
        <div class="page_header_bottom">
            <p class="page_header_topic page_header_topic_clr">
                {{$data->blog_name}}
            </p>
            <div class="page_header_desc page_header_desc_clr">
                <p>
                    Innovative approach to complex solutions
                </p>
            </div>
        </div>
        <div class="page_img pd_mobile_0">
            <div class="page_img_main pd_top100_mobile">
                <div class="page_img_body">
                    <img src="{{asset('/img/graphic desiner img.png')}}" alt="">
                </div>
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
            <h2 class="desing_development_header_head">What we deliver</h2>
        </div>
        <div class="desing_development_content" data-aos="fade-up">
            <div class="desing_development_content_item">
                <div class="desing_development_content_item_desc margin">
                    <div class="desing_development_content_item_desc_body">
                        <h3 class="desing_development_content_item_desc_head">Development</h3>
                        <ul class="desing_development_content_item_desc_acordion">
                            <li class="desing_development_content_item_desc_acordion_card open">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Responsive website
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text" style="display: block;">
                                    <p>Web pages developed by our team are flexible, dynamic and adaptable to any client need</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Mobile apps
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>We create dynamic mobile apps that perform specific tasks for your business and services and track your customer engagement.</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Complex Systems
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
<p>Our team has a long experience working with complex architectures and building multifunctional systems</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    BI systems
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>We help you analyze and make valid decisions based on the precise data provided by complex BI systems we develop</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    ERP/CRM systems
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>We develop architecture for complicated systems that help make your life easier</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Games
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>We are constantly integrating new technologies to make it possible to develop better and up-to-date game</p>
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
                        <h3 class="desing_development_content_item_desc_head">Design</h3>
                        <ul class="desing_development_content_item_desc_acordion">
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    UX / UI
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>Our web designs are based on user interactions with the website features and controls, as well as user behavior and feeling when using the website</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Logo Design
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>We create one of the most important elements of corporate identity that will differentiate your company among other</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Branding
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>We help you shape your brand by creating all the necessary elements of corporate identity</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Print Design
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>From flyers and magazines to outdoor advertising and event materials, we treat each design as a separate project that includes brainstorming, research and best specialists in the field</p>
                                </div>
                            </li>
                            <li class="desing_development_content_item_desc_acordion_card">
                                <button class="desing_development_content_item_desc_acordion_card_title">
                                    Social Media Design
                                </button>
                                <div class="desing_development_content_item_desc_acordion_card_text">
                                    <p>Our team makes sure to adapt and manage your brand social media communication materials according to constant and dynamic change in communication strategies and tools.</p>
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
                    We don’t just code but help our Clients simplify application landscape as well as consult on strategic technology stack.
                </h3>
            </div>
            <div class="desing_development_desc_body">
                <p>
                    Good design can change how the target audience perceives and interacts with your brand and business. Based on insights based on workshops, user research and analysis, we ensure that you reach the goal with your message and goal. With a focus on creating a clear and effective concept that is relevant and meaningful to the target group, we ensure value-creating user experiences.
                </p>
                <br>
                <p>
                    The road to a successful web solution is always best achieved in close collaboration with you, because no one knows your business better than you do.
                </p>
                <br>
                <p>
                    Whether you need a 360 degree digital strategy or just help to implement new CMS in existing solution, the purpose is always to solve the task as best as possible so that it meets your wishes, priorities and budget.
                </p>
            </div>
        </div>
    </div>
    <div class="section expertise bgColor fadeUp pd_mobile" data-color="white">
        <div class="expertise_container">
            <div class="desingDevelopment_expertise_content expertise_content_none  pd-top150">
                <div class="expertise_content_item">
                    <div class="expertise_content_item_body">
                        <h2 class="expertise_content_item_h2">Other Services</h2>
                        <a href="#" class="expertise_content_item_title" style="display: none;">Design &amp; Development</a>
                        <ul class="expertise_content_item_ul" style="display: none;">
                            <li class="expertise_content_item_li">
                                Responsive websites
                            </li>
                            <li class="expertise_content_item_li">
                                Mobile apps
                            </li>
                            <li class="expertise_content_item_li">
                                Complex platforms
                            </li>
                            <li class="expertise_content_item_li">
                                BI systems
                            </li>
                            <li class="expertise_content_item_li">
                                ERP/CRM systems
                            </li>
                            <li class="expertise_content_item_li">
                                Games
                            </li>
                        </ul>
                        <div class="expertise_content_item_body_right_icon" style="display: none;">
                            <svg id="expertise_item_icon" xmlns="http://www.w3.org/2000/svg" width="25.5" height="16.005" viewBox="0 0 25.5 16.005">
                                <g id="noun_Left_1920800" transform="translate(28 29.705) rotate(180)">
                                    <path id="Path_19" data-name="Path 19" d="M10.5,29.7l1.058-1.08L5.388,22.452H28v-1.5H5.388L11.56,14.78,10.5,13.7l-8,8Z" transform="translate(0 0)" fill="#00aeef"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="hardwareDistribution.html" class="expertise_content_item">
                    <div class="expertise_content_item_body">
                        <div class="expertise_content_item_title">
                            <p class="expertise_content_item_title_tp">
                                Hardware solutions
                            </p>
                        </div>
                        <ul class="expertise_content_item_ul expertise_content_item_ul_clr ">
                            <li class="expertise_content_item_li">
                                Interactive boards, monitors
                            </li>
                            <li class="expertise_content_item_li">
                                Short and long throw projection
                            </li>
                            <li class="expertise_content_item_li">
                                Digital science labs
                            </li>
                            <li class="expertise_content_item_li">
                                Robotics
                            </li>
                            <li class="expertise_content_item_li">
                                3D pens, 3D printers
                            </li>
                            <li class="expertise_content_item_li">
                                Engineering solutions for educational institutions
                            </li>
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
                <a href="serviceItemInner.html" class="expertise_content_item">
                    <div class="expertise_content_item_body">
                        <div class="expertise_content_item_title">
                            <p class="expertise_content_item_title_tp">
                                Educational content
                            </p>
                        </div>
                        <ul class="expertise_content_item_ul">
                            <li class="expertise_content_item_li">
                                Interactive video lessons
                            </li>
                            <li class="expertise_content_item_li">
                                3D animated videos
                            </li>
                            <li class="expertise_content_item_li">
                                HTML5 based interactive e-lessons
                            </li>
                            <li class="expertise_content_item_li">
                                E-books
                            </li>
                            <li class="expertise_content_item_li">
                                Traditional textbooks
                            </li>
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
                <a href="desing_development.html" class="expertise_content_item">
                    <div class="expertise_content_item_body">
                        <div class="expertise_content_item_title">
                            <p class="expertise_content_item_title_tp">
                                Coaching &amp; consulting
                            </p>
                        </div>
                        <ul class="expertise_content_item_ul">
                            <li class="expertise_content_item_li">
                                Instilling Agile thinking at the company team level
                            </li>
                            <li class="expertise_content_item_li">
                                Adaptation of current projects to Agile project management approach
                            </li>
                            <li class="expertise_content_item_li">
                                Application of Agile Project Management Tools
                            </li>
                            <li class="expertise_content_item_li">
                                Changing office interior according to Agile PM standarts
                            </li>
                            <li class="expertise_content_item_li">
                                Agile PM Training for every company member
                            </li>
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
    <div class="section blog_posts bgColor fadeUp pd_mobile display_none" data-color="white">
        <?php
        $studiesPageController = new \App\Http\Controllers\StudiesPageController();
        $studies = $studiesPageController->getStudiesData();
        ?>
        <div class="section_header">
            <div class="section_header_container">
                <h4 class="black_title">{{$studies[0]->name ?? ''}}</h4>
            </div>
            <a href="{{route('case_studies')}}" class="btn btn_bgcolor">
                {{$studies[0]->button_name ?? ''}}
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                    </g>
                </svg>
            </a>
        </div>
        <div class="designDevelopment_blog_posts_content">
            @for ($i = 0; $i < count($studies) && $i < 3; $i++)
                    <a href="blog.html" class="blog_posts_content_item flex" id="a">
                        <div class="blog_posts_content_item_body">
                            <div class="box pd-top100">
                                <div class="box_item">
                                    <img src="{{asset('storage/img/'.$studies[$i]->img)}}" alt="">
                                </div>
                            </div>
                            <div class="blog_posts_content_item_desc">
                                <small class="blog_posts_content_item_desc_date">{{$studies[$i]->blog_name}}</small>
                                <p class="blog_posts_content_item_desc_text blog_posts_content_item_desc_text_clr" id="b">
                                    {{$studies[$i]->header_name}}</p>
                            </div>
                        </div>
                    </a>
                @endfor
        </div>
    </div>
@include('layouts/tplAboutAndCareers')
@include('layouts/projectInMind')

@endsection






