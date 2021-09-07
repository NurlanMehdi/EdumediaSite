@extends('layouts.master')
@section('content')
    <div class="section page_header bgColor pd_mobile" data-color="black">
        <div class="page_header_top">
            <ul class="page_breadcrumb">
                <li class="page_breadcrumb_item">
                    <a href="index.html">home</a>
                </li>
                <li class="page_breadcrumb_item">
                    <a href="blog.html">blog</a>
                </li>
            </ul>
        </div>
        <div class="page_header_bottom">
            <p class="page_header_topic page_header_topic_font">
                Insights, thoughts & announcements from the studio
            </p>
            <!-- <div class="page_header_desc">

            </div> -->
        </div>
    </div>
    <div class="section filter bgColor pd_mobile" data-color="black">
        <div class="filter_header">
            <ul class="filter_header_nav">
                <li class="filter_header_nav_item">
                    <a href="#" class="filter_header_nav_item_link">All</a>
                </li>
                <li class="filter_header_nav_item">
                    <a href="#" class="filter_header_nav_item_link">Design &amp; Development</a>
                </li>
                <li class="filter_header_nav_item">
                    <a href="#" class="filter_header_nav_item_link">Hardware solutions</a>
                </li>
                <li class="filter_header_nav_item">
                    <a href="#" class="filter_header_nav_item_link">Educational content</a>
                </li>
                <li class="filter_header_nav_item">
                    <a href="#" class="filter_header_nav_item_link">Coaching &amp; consulting</a>
                </li>
            </ul>
        </div>
        <select class="custom_select section_blog_item_categories_select">
            <option value="0">All</option>
            <option value="design-Development">Design &amp; Development</option>
            <option value="hardware-solutions">Hardware solutions</option>
            <option value="education-content">Educational content</option>
            <option value="coaching-consulting">Coaching &amp; consulting</option>
        </select>
        <div class="filter_content">
            <a href="blogItemInner.html" class="flex_25 filter_content_item">
                <div class="filter_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img class="filter_content_item_img" src="img/startup-programming-team-508896704-5a4c19350c1a8200366a68a9.png" alt="">
                        </div>
                    </div>
                    <div class="filter_content_item_desc">
                        <small  class="filter_content_item_desc_top">01 March 2021</small>
                        <p class="filter_content_item_desc_bottom filter_content_item_desc_bottom_clr">BI System for the Ministry of Education</p>
                    </div>
                </div>
            </a>
            <a href="blogItemInner.html" class="flex_25 filter_content_item">
                <div class="filter_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img class="filter_content_item_img" src="img/startup-programming-team-508896704-5a4c19350c1a8200366a68a9.png" alt="code sekli">
                        </div>
                    </div>
                    <div class="filter_content_item_desc">
                        <small class="filter_content_item_desc_top">WEB DESIGN</small>
                        <p class="filter_content_item_desc_bottom filter_content_item_desc_bottom_clr">Edu.gov.az website</p>
                    </div>
                </div>
            </a>
            <a href="blogItemInner.html" class="flex_25 filter_content_item">
                <div class="filter_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img class="filter_content_item_img" src="img/startup-programming-team-508896704-5a4c19350c1a8200366a68a9.png" alt="">
                        </div>
                    </div>
                    <div class="filter_content_item_desc">
                        <small class="filter_content_item_desc_top">Software development</small>
                        <p class="filter_content_item_desc_bottom filter_content_item_desc_bottom_clr">BI System for the Ministry of Education</p>
                    </div>
                </div>
            </a>
            <a href="blogItemInner.html" class="flex_25 filter_content_item">
                <div class="filter_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img class="filter_content_item_img" src="img/11344.png" alt="code sekli">
                        </div>
                    </div>
                    <div class="filter_content_item_desc">
                        <small class="filter_content_item_desc_top">WEB DESIGN</small>
                        <p class="filter_content_item_desc_bottom filter_content_item_desc_bottom_clr">Edu.gov.az website</p>
                    </div>
                </div>
            </a>
            <a href="blogItemInner.html" class="flex_25 filter_content_item">
                <div class="filter_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img class="filter_content_item_img" src="img/startup-programming-team-508896704-5a4c19350c1a8200366a68a9.png" alt="">
                        </div>
                    </div>
                    <div class="filter_content_item_desc">
                        <small  class="filter_content_item_desc_top">01 March 2021</small>
                        <p class="filter_content_item_desc_bottom filter_content_item_desc_bottom_clr">BI System for the Ministry of Education</p>
                    </div>
                </div>
            </a>
            <a href="blogItemInner.html" class="flex_25 filter_content_item">
                <div class="filter_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img class="filter_content_item_img" src="img/startup-programming-team-508896704-5a4c19350c1a8200366a68a9.png" alt="code sekli">
                        </div>
                    </div>
                    <div class="filter_content_item_desc">
                        <small class="filter_content_item_desc_top">WEB DESIGN</small>
                        <p class="filter_content_item_desc_bottom filter_content_item_desc_bottom_clr">Edu.gov.az website</p>
                    </div>
                </div>
            </a>
            <a href="blogItemInner.html" class="flex_25 filter_content_item">
                <div class="filter_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img class="filter_content_item_img" src="img/startup-programming-team-508896704-5a4c19350c1a8200366a68a9.png" alt="">
                        </div>
                    </div>
                    <div class="filter_content_item_desc">
                        <small class="filter_content_item_desc_top">Software development</small>
                        <p class="filter_content_item_desc_bottom filter_content_item_desc_bottom_clr">BI System for the Ministry of Education</p>
                    </div>
                </div>
            </a>
            <a href="blogItemInner.html" class="flex_25 filter_content_item">
                <div class="filter_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img class="filter_content_item_img" src="img/11344.png" alt="code sekli">
                        </div>
                    </div>
                    <div class="filter_content_item_desc">
                        <small class="filter_content_item_desc_top">WEB DESIGN</small>
                        <p class="filter_content_item_desc_bottom filter_content_item_desc_bottom_clr">Edu.gov.az website</p>
                    </div>
                </div>
            </a>
            <a href="blogItemInner.html" class="flex_25 filter_content_item">
                <div class="filter_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img class="filter_content_item_img" src="img/11344.png" alt="">
                        </div>
                    </div>
                    <div class="filter_content_item_desc">
                        <small  class="filter_content_item_desc_top">01 March 2021</small>
                        <p class="filter_content_item_desc_bottom filter_content_item_desc_bottom_clr">BI System for the Ministry of Education</p>
                    </div>
                </div>
            </a>
            <a href="blogItemInner.html" class="flex_25 filter_content_item">
                <div class="filter_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img class="filter_content_item_img" src="img/11344.png" alt="code sekli">
                        </div>
                    </div>
                    <div class="filter_content_item_desc">
                        <small class="filter_content_item_desc_top">WEB DESIGN</small>
                        <p class="filter_content_item_desc_bottom filter_content_item_desc_bottom_clr">Edu.gov.az website</p>
                    </div>
                </div>
            </a>
            <a href="blogItemInner.html" class="flex_25 filter_content_item">
                <div class="filter_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img class="filter_content_item_img" src="img/startup-programming-team-508896704-5a4c19350c1a8200366a68a9.png" alt="">
                        </div>
                    </div>
                    <div class="filter_content_item_desc">
                        <small class="filter_content_item_desc_top">Software development</small>
                        <p class="filter_content_item_desc_bottom filter_content_item_desc_bottom_clr">BI System for the Ministry of Education</p>
                    </div>
                </div>
            </a>
            <a href="blogItemInner.html" class="flex_25 filter_content_item">
                <div class="filter_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img class="filter_content_item_img" src="img/11344.png" alt="code sekli">
                        </div>
                    </div>
                    <div class="filter_content_item_desc">
                        <small class="filter_content_item_desc_top">WEB DESIGN</small>
                        <p class="filter_content_item_desc_bottom filter_content_item_desc_bottom_clr">Edu.gov.az website</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="section blog_posts_footer bgColor fadeUp pd_mobile" data-color="black">
        <div class="blog_posts_footer_item">
            <div class="blog_posts_footer_item_content">
                <div class="blog_posts_footer_item_content_body">
                    <div class="blog_posts_footer_item_content_body_img">
                        <img src="./img/techguy.png" alt="">
                    </div>
                    <div class="overlay"></div>
                    <div class="blog_posts_footer_item_content_body_desc">
                        <p class="blog_posts_footer_item_content_body_desc_text">
                            We’re a team of problem solvers  delivering effective digital  solutions that work.
                        </p>
                        <a href="about.html" class="btn btn_border">
                            About Us
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                    <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog_posts_footer_item">
            <div class="blog_posts_footer_item_content">
                <div class="blog_posts_footer_item_content_body">
                    <div class="blog_posts_footer_item_content_body_img">
                        <img src="{{asset('img/7e86a435982265.570b650707a20.png')}}" alt="">
                    </div>
                    <div class="overlay"></div>
                    <div class="blog_posts_footer_item_content_body_desc">
                        <p class="blog_posts_footer_item_content_body_desc_text">
                            We are looking for inspiring brilliant minds to innovate & create!
                        </p>
                        <a href="{{route(('careers'))}}" class="btn btn_border">
                            Careers
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                    <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section project bgColor fadeUp pd_mobile_0" data-color="black">
        <div class="project_content">
            <div class="project_content_desc">
                <h2>Have a project in mind?</h2>
                <a href="{{route(('contact'))}}" class="btn border_clr_btn">
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
