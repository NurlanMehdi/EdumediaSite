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
                    A digital-first approach to strategy and creative.
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
    <div class="section hardwareDistribution_header bgColor fadeUp pd_mobile" data-color="black">
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
    </div>
    <div class="section hardwareDistribution bgColor fadeUp pd_mobile" data-color="black">
        <div class="hardwareDistribution_content">
            <div class="hardwareDistribution_content_left">
                <div class="hardwareDistribution_content_left_body">
                    <div class="hardwareDistribution_content_left_desc">
                        We assure the highest quality of the products. We strive for your satisfaction thus provide warranty for all the items
                    </div>
                </div>
            </div>
            <div class="hardwareDistribution_content_right">
                <div class="hardwareDistribution_content_right_body">
                    <div class="hardwareDistribution_content_right_body_images">
                        <div class="hardwareDistribution_content_right_body_slide">
                            <div class="hardwareDistribution_content_right_body_slide_item">
                                <img src="./img/PngItem_2516042.png" alt="">
                            </div>
                            <div class="hardwareDistribution_content_right_body_slide_item">
                                <img src="./img/PngItem_2516042.png" alt="">
                            </div>
                            <div class="hardwareDistribution_content_right_body_slide_item">
                                <img src="./img/PngItem_2516042.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="hardwareDistribution_content_right_body_desc">
                        <div class="hardwareDistribution_content_right_body_desc_head">
                            Interactive boards, monitors
                        </div>
                        <div class="hardwareDistribution_content_right_body_desc_text">
                            We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
                        </div>
                        <a href="#" class="hardwareDistribution_content_right_body_desc_link">
                            www.prometheanworld.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section hardwareDistributionCategories bgColor fadeUp pd_mobile" data-color="black">
        <div class="hardwareDistributionCategories_body">
            <div class="hardwareDistributionCategories_body_category">
                <div class="hardwareDistributionCategories_body_category_head">
                    Digital science lab
                </div>
                <div class="hardwareDistributionCategories_body_category_items">
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
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
                    Digital science lab
                </div>
                <div class="hardwareDistributionCategories_body_category_items">
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
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
                    Digital science lab
                </div>
                <div class="hardwareDistributionCategories_body_category_items">
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
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
                    Digital science lab
                </div>
                <div class="hardwareDistributionCategories_body_category_items">
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
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
                    Digital science lab
                </div>
                <div class="hardwareDistributionCategories_body_category_items">
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
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
                    Digital science lab
                </div>
                <div class="hardwareDistributionCategories_body_category_items">
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
                            </div>
                            <a href="#" class="hardwareDistributionCategories_body_category_item_content_link">
                                www.prometheanworld.com
                            </a>
                        </div>
                    </div>
                    <div class="hardwareDistributionCategories_body_category_item">
                        <div class="hardwareDistributionCategories_body_category_item_image">
                            <img src="./img/hardwareDistribution_item.png" alt="">
                        </div>
                        <div class="hardwareDistributionCategories_body_category_item_content">
                            <div class="hardwareDistributionCategories_body_category_item_content_head">
                                Digital science lab
                            </div>
                            <div class="hardwareDistributionCategories_body_category_item_content_desc">
                                We are a digital agency that has both technically heavy development and razor-sharp design competencies. Because we are convinced that it is the best way to develop and deliver solid and well-worked solutions.
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
    <div class="section team_info_group bgColor fadeUp hardwareDistribution_teamInfo" data-color="black">
        <p class="team_info_text">We are constantly curious and driven by the desire to always make things even better. </p><div class="team_info_group_content">
            <div class="team_info_group_item">
                <div class="team_info_group_item_body">
                    <h1 class="team_info_group_item_numb">120+</h1>
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
                <h4 class="black_title">{{$studies[0]->name}}</h4>
            </div>
            <a href="{{route('case_studies')}}" class="btn btn_bgcolor">
                {{$studies[0]->button_name}}
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
@include('layouts.tplAboutAndCareers')
@include('layouts.projectInMind')
@endsection






