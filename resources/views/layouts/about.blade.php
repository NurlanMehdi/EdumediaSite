@extends('layouts.master')
@section('content')
    <div class="section page_header bgColor pd_mobile" data-color="white">
        <div class="page_header_top">
            <ul class="page_breadcrumb">
                <li class="page_breadcrumb_item">
                    <a href="{{route('index')}}">home</a>
                </li>
                <li class="page_breadcrumb_item">
                    <a href="{{route('about')}}">about us</a>
                </li>
            </ul>
        </div>
        <div class="page_header_bottom">
            <p class="page_header_topic page_header_topic_font">
                We’re a team of problem solvers delivering effective digital solutions that work.
            </p>
            <div class="page_header_desc">
                <p>
                    We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well- worked solutions.
                </p>
            </div>
        </div>
        <div class="page_img pd_mobile_0">
            <div class="about_slider">
                <div class="about_slider_content">
                    <div class="about_slider_content_item">
                        <img class="about_slider_content_item--img" src="{{asset('img/about_content.png')}}" />
                    </div>
                    <div class="about_slider_content_item">
                        <img class="about_slider_content_item--img" src="{{asset('img/about_content.png')}}" />
                    </div>
                    <div class="about_slider_content_item">
                        <img class="about_slider_content_item--img" src="{{asset('img/about_content.png')}}" />
                    </div>
                    <div class="about_slider_content_item">
                        <img class="about_slider_content_item--img" src="{{asset('img/about_content.png')}}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section about_desc bgColor fadeUp" data-color="white">
        <div class="about_content_desc_header">
            <h2 class="about_content_desc_head">Our culture, values, and beliefs.</h2>
        </div>
        <div class="about_content_desc_body">
            <div class="about_content_desc_body_item">
                <h3 class="about_content_desc_body_item_title">We’re user-first.</h3>
                <p class="about_content_desc_body_item_text">We provide the solution your customers need, not necessarily the one you think you want. We'll challenge a brief to ensure everything we do is built around them.</p>
            </div>
            <div class="about_content_desc_body_item">
                <h3 class="about_content_desc_body_item_title">Forward-Thinking.</h3>
                <p class="about_content_desc_body_item_text">We pride ourselves on pushing the boundaries of digital design and development. We combine relevant trends and best practices to build platforms with longevity.</p>
            </div>
            <div class="about_content_desc_body_item">
                <h3 class="about_content_desc_body_item_title">We build partnerships.</h3>
                <p class="about_content_desc_body_item_text">We don’t ‘win’ clients. We build partnerships. Every project is a process of close and constant collaboration, always communicating progress and sharing ideas.</p>
            </div>
            <div class="about_content_desc_body_item">
                <h3 class="about_content_desc_body_item_title">Forward-Thinking.</h3>
                <p class="about_content_desc_body_item_text">We pride ourselves on pushing the boundaries of digital design and development.  We combine relevant trends and best practices to build platforms with longevity.</p>
            </div>
        </div>
    </div>
    <div class="section team bgColor fadeUp pd_mobile" data-color="black">
        <div class="team_body">
            <div class="team_header">
                <h2 class="team_header_title">Meet the team</h2>
            </div>
            <div class="team_slideshow">
                <div class="team_slideshow_item">
                    <div class="team_slideshow_item_body">
                        <div class="team_slideshow_item_image">
                            <img src="{{asset('img/Rectangle 53.png')}}" alt="">
                        </div>
                        <div class="team_slideshow_item_content">
                            <p class="team_slideshow_item_body_name">Dilara Rustamzade</p>
                            <small class="team_slideshow_item_body_duty">CEO</small>
                        </div>
                    </div>
                </div>
                <div class="team_slideshow_item">
                    <div class="team_slideshow_item_body">
                        <div class="team_slideshow_item_image">
                            <img src="{{asset('img/Rectangle 53.png')}}" alt="">
                        </div>
                        <div class="team_slideshow_item_content">
                            <p class="team_slideshow_item_body_name">Dilara Rustamzade</p>
                            <small class="team_slideshow_item_body_duty">CEO</small>
                        </div>
                    </div>
                </div>
                <div class="team_slideshow_item">
                    <div class="team_slideshow_item_body">
                        <div class="team_slideshow_item_image">
                            <img src="{{asset('img/Rectangle 53.png')}}" alt="">
                        </div>
                        <div class="team_slideshow_item_content">
                            <p class="team_slideshow_item_body_name">Dilara Rustamzade</p>
                            <small class="team_slideshow_item_body_duty">CEO</small>
                        </div>
                    </div>
                </div>
                <div class="team_slideshow_item">
                    <div class="team_slideshow_item_body">
                        <div class="team_slideshow_item_image">
                            <img src="{{asset('img/Rectangle 53.png')}}" alt="">
                        </div>
                        <div class="team_slideshow_item_content">
                            <p class="team_slideshow_item_body_name">Dilara Rustamzade</p>
                            <small class="team_slideshow_item_body_duty">CEO</small>
                        </div>
                    </div>
                </div>
                <div class="team_slideshow_item">
                    <div class="team_slideshow_item_body">
                        <div class="team_slideshow_item_image">
                            <img src="{{asset('img/Rectangle 53.png')}}" alt="">
                        </div>
                        <div class="team_slideshow_item_content">
                            <p class="team_slideshow_item_body_name">Dilara Rustamzade</p>
                            <small class="team_slideshow_item_body_duty">CEO</small>
                        </div>
                    </div>
                </div>
                <div class="team_slideshow_item">
                    <div class="team_slideshow_item_body">
                        <div class="team_slideshow_item_image">
                            <img src="{{asset('img/Rectangle 53.png')}}" alt="">
                        </div>
                        <div class="team_slideshow_item_content">
                            <p class="team_slideshow_item_body_name">Dilara Rustamzade</p>
                            <small class="team_slideshow_item_body_duty">CEO</small>
                        </div>
                    </div>
                </div>
                <div class="team_slideshow_item">
                    <div class="team_slideshow_item_body">
                        <div class="team_slideshow_item_image">
                            <img src="{{asset('img/Rectangle 53.png')}}" alt="">
                        </div>
                        <div class="team_slideshow_item_content">
                            <p class="team_slideshow_item_body_name">Dilara Rustamzade</p>
                            <small class="team_slideshow_item_body_duty">CEO</small>
                        </div>
                    </div>
                </div>
                <div class="team_slideshow_item">
                    <div class="team_slideshow_item_body">
                        <div class="team_slideshow_item_image">
                            <img src="{{asset('img/Rectangle 53.png')}}" alt="">
                        </div>
                        <div class="team_slideshow_item_content">
                            <p class="team_slideshow_item_body_name">Dilara Rustamzade</p>
                            <small class="team_slideshow_item_body_duty">CEO</small>
                        </div>
                    </div>
                </div>
                <div class="team_slideshow_item">
                    <div class="team_slideshow_item_body">
                        <div class="team_slideshow_item_image">
                            <img src="{{asset('img/Rectangle 53.png')}}" alt="">
                        </div>
                        <div class="team_slideshow_item_content">
                            <p class="team_slideshow_item_body_name">Dilara Rustamzade</p>
                            <small class="team_slideshow_item_body_duty">CEO</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team_slide_footer">
                <button class="team_click_btn slick-arrow prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.667" height="13.599" viewBox="0 0 14.667 13.599">
                        <g id="noun_Left_1920800" transform="translate(-2.5 -13.7)">
                            <path id="Path_19" data-name="Path 19" d="M9.3,27.3l.9-.918L4.954,21.136H17.167V19.862H4.954L10.2,14.618,9.3,13.7,2.5,20.5Z" transform="translate(0 0)"></path>
                        </g>
                    </svg>
                </button>
                <p class="team_slide_footer_info pagingInfo">5/7</p>
                <button class="team_click_btn slick-arrow next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.667" height="13.599" viewBox="0 0 14.667 13.599">
                        <g id="noun_Left_1920800" transform="translate(17.167 27.299) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M9.3,27.3l.9-.918L4.954,21.136H17.167V19.862H4.954L10.2,14.618,9.3,13.7,2.5,20.5Z" transform="translate(0 0)"></path>
                        </g>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="section team_info bgColor fadeUp pd_mobile" data-color="black">
        <p class="team_info_text">We are constantly curious and driven by the desire to always make things even better. </p>
        <div class="team_info_group">
            <div class="team_info_group_content">
                <div class="team_info_group_item">
                    <div class="team_info_group_item_body">
                        <h1 class="team_info_group_item_numb timer">120+</h1>
                        <small class="team_info_group_item_title">Clients</small>
                    </div>
                </div>
                <div class="team_info_group_item">
                    <div class="team_info_group_item_body">
                        <h1 class="team_info_group_item_numb">536+</h1>
                        <small class="team_info_group_item_title">Successful solutions</small>
                    </div>
                </div>
                <div class="team_info_group_item">
                    <div class="team_info_group_item_body">
                        <h1 class="team_info_group_item_numb">10</h1>
                        <small class="team_info_group_item_title">Years of experience</small>
                    </div>
                </div>
                <div class="team_info_group_item">
                    <div class="team_info_group_item_body">
                        <h1 class="team_info_group_item_numb">30</h1>
                        <small class="team_info_group_item_title">Team members</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section expertise bgColor fadeUp pd_mobile" data-color="black">
        <div class="section_header">
            <div class="section_header_container">
                <h4 class="white_title expertise_head">Fields of expertise</h4>
            </div>
            <a href="{{route('service')}}" class="btn display_none">
                Services
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                    </g>
                </svg>
            </a>
        </div>
        <div class="expertise_content">
            <a href="#" class="expertise_content_item">
                <div class="expertise_content_item_body">
                    <div class="expertise_content_item_title">
                        <p class="expertise_content_item_title_tp">Design & Development</p>
                    </div>
                    <ul class="expertise_content_item_ul">
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
                    <div class="expertise_content_item_body_right_icon">
                        <svg id="expertise_item_icon" xmlns="http://www.w3.org/2000/svg" width="25.5" height="16.005" viewBox="0 0 25.5 16.005">
                            <g id="noun_Left_1920800" transform="translate(28 29.705) rotate(180)">
                                <path id="Path_19" data-name="Path 19" d="M10.5,29.7l1.058-1.08L5.388,22.452H28v-1.5H5.388L11.56,14.78,10.5,13.7l-8,8Z" transform="translate(0 0)" fill="#00aeef"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="#" class="expertise_content_item">
                <div class="expertise_content_item_body">
                    <div class="expertise_content_item_title">
                        <p class="expertise_content_item_title_tp">Hardware solutions</p>
                    </div>
                    <ul class="expertise_content_item_ul">
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
                                <path id="Path_19" data-name="Path 19" d="M10.5,29.7l1.058-1.08L5.388,22.452H28v-1.5H5.388L11.56,14.78,10.5,13.7l-8,8Z" transform="translate(0 0)" fill="#00aeef"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="#" class="expertise_content_item">
                <div class="expertise_content_item_body">
                    <div class="expertise_content_item_title">
                        <p class="expertise_content_item_title_tp">Educational content</p>
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
                                <path id="Path_19" data-name="Path 19" d="M10.5,29.7l1.058-1.08L5.388,22.452H28v-1.5H5.388L11.56,14.78,10.5,13.7l-8,8Z" transform="translate(0 0)" fill="#00aeef"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="#" class="expertise_content_item">
                <div class="expertise_content_item_body">
                    <div class="expertise_content_item_title">
                        <p class="expertise_content_item_title_tp">Coaching & consulting</p>
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
                                <path id="Path_19" data-name="Path 19" d="M10.5,29.7l1.058-1.08L5.388,22.452H28v-1.5H5.388L11.56,14.78,10.5,13.7l-8,8Z" transform="translate(0 0)" fill="#00aeef"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
        <div class="expertise_content_slide_btns">
            <button class="expertise_content_slide_btn prevs slick-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.667" height="13.599" viewBox="0 0 14.667 13.599">
                    <g id="noun_Left_1920800" transform="translate(-2.5 -13.7)">
                        <path id="Path_19" data-name="Path 19" d="M9.3,27.3l.9-.918L4.954,21.136H17.167V19.862H4.954L10.2,14.618,9.3,13.7,2.5,20.5Z" transform="translate(0 0)"></path>
                    </g>
                </svg>
            </button>
            <button class="expertise_content_slide_btn nexts slick-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.667" height="13.599" viewBox="0 0 14.667 13.599">
                    <g id="noun_Left_1920800" transform="translate(17.167 27.299) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M9.3,27.3l.9-.918L4.954,21.136H17.167V19.862H4.954L10.2,14.618,9.3,13.7,2.5,20.5Z" transform="translate(0 0)"></path>
                    </g>
                </svg>
            </button>
        </div>
    </div>
    <div class="section customers bgColor fadeUp pd_mobile" data-color="white">
        <div class="section_header">
            <div class="section_header_container">
                <p class="section_header_desc">
                    Who we work with
                </p>
            </div>
            <div class="section_header_text">
                Commitment to the highest quality production standards, a broad expertise, and a genuine strive to help our clients have secured us strategic cooperation with market-leading companies in many sectors and regions.
            </div>
        </div>
        <div class="customer_content">
            <div class="customer_content_item">
                <a href="#" class="customer_content_item_body">
                    <img src="{{asset('img/tehsil nazirliyi.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body">
                    <img src="{{asset('img/inovativ texnalogiyalar.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body">
                    <img src="{{asset('img/tehsil nazirliyi.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body">
                    <img src="{{asset('img/inovativ texnalogiyalar.png')}}" alt="">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="#" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/transport ministry.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/az smart.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/transport ministry.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/az smart.png')}}" alt="">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="#" class="customer_content_item_body">
                    <img src="{{asset('img/scanex.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body">
                    <img src="{{asset('img/tika-logo.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body">
                    <img src="{{asset('img/scanex.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body">
                    <img src="{{asset('img/tika-logo.png')}}" alt="">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="#" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/enginet logo.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/inovativ texnalogiyalar.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/enginet logo.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/inovativ texnalogiyalar.png')}}" alt="">
                </a>
            </div>
            <div class="customer_content_item display_none">
                <a href="#" class="customer_content_item_body">
                    <img src="{{asset('img/tika-logo.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body">
                    <img src="{{asset('img/az smart.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body">
                    <img src="{{asset('img/tika-logo.png')}}" alt="">
                </a>
                <a href="#" class="customer_content_item_body">
                    <img src="{{asset('img/az smart.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="section project bgColor fadeUp pd_mobile_0" data-color="white">
        <div class="project_content">
            <div class="project_content_desc">
                <h2>Have a project in mind?</h2>
                <a href="{{route('contact')}}" class="btn border_clr_btn">
                    Get in touch
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(9.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(-8 0)"/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection
