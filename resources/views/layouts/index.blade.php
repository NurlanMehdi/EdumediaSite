@extends('layouts.master')
@section('content')
    <div class="section header bgColor pd_mobile" data-color="black">
        <img class="section_header_absolute_img" src="{{asset('img/Main 2_6.gif')}}" alt="giff">
        <div class="header_container">
            <div class="header_body">
                <div class="header_icon">
                    <img src="{{asset('img/page icon.png')}}" alt="page-icon">
                </div>
                <div class="header_desc">
                    <h1>
                        We combine strategy, technology and design to solve the most complex business challenges.
                    </h1>
                </div>
                <a href="#scroll" alt="scrollBtn" id="button" class="arrow section-down-arrow-wrap scroller">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.692" height="28.189" viewBox="0 0 17.692 28.189">
                        <g id="noun_Left_1920800" transform="translate(-13.7 30.689) rotate(-90)">
                            <path id="Path_19" data-name="Path 19" d="M11.346,31.392l1.17-1.194L5.692,23.375h25V21.718h-25l6.823-6.823L11.346,13.7,2.5,22.546Z" transform="translate(0 0)" fill="#fff"/>
                        </g>
                    </svg>
                </a>
                <div class="header_link">
                    <a href="{{route('about')}}" class="btn">
                        About us
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
    <div class="section banner fadeUp bgColor pd_mobile" data-color="black">
        <div class="section_header">
            <h4 class="white_title">WHAT WE DO</h4>
            <a href="{{route('service')}}" class="btn banner_service_btn">
                Services
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"/>
                    </g>
                </svg>
            </a>
        </div>
        <div class="banner_content">
            <div class="banner_content_item active">
                <div class="banner_content_item_body" onclick="location.href='{{route('desing_development')}}'">
                    <h2>Software development</h2>
                    <div class="banner_content_item_desc">
                        <p>
                            Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs
                        </p>
                        <a href="{{route('desing_development')}}" class="btn">
                            View more
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                    <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="banner_content_item_numb">
                    <div class="banner_empty"></div>
                </div>
            </div>
            <div class="banner_content_item active">
                <div class="banner_content_item_body" onclick="location.href='{{route('hardwareDistribution')}}'">
                    <h2>Hardware distribution</h2>
                    <div class="banner_content_item_desc">
                        <p>
                            Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs
                        </p>
                        <a href="{{route('service')}}" class="btn">
                            View more
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                    <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="banner_content_item_numb">
                    <div class="banner_empty"></div>
                </div>
            </div>
            <div class="banner_content_item active">
                <div class="banner_content_item_body" onclick="location.href='{{route('desing_development')}}'">
                    <h2>E-Content creation</h2>
                    <div class="banner_content_item_desc">
                        <p>
                            Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs
                        </p>
                        <a href="{{route('service')}}" class="btn">
                            View more
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                    <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="banner_content_item_numb">
                    <div class="banner_empty"></div>
                </div>
            </div>
            <div class="banner_content_item active">
                <div class="banner_content_item_body" onclick="location.href='{{route('desing_development')}}'">
                    <h2>Coaching and consulting</h2>
                    <div class="banner_content_item_desc">
                        <p>
                            Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs
                        </p>
                        <a href="{{route('service')}}" class="btn">
                            View more
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                    <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="banner_content_item_numb">
                    <div class="banner_empty"></div>
                </div>
            </div>
        </div>
        <div class="banner_content_mobile">
            <div class="banner_content_mobile_item">
                <div class="banner_content_mobile_item_numb">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28.996" height="28.999" viewBox="0 0 28.996 28.999">
                        <g id="Group_730" data-name="Group 730" transform="translate(-71.5 -924)">
                            <path id="Path_9" data-name="Path 9" d="M11.416,17.9l.691.688a2.048,2.048,0,0,1,0,2.895L4.146,29.443a2.048,2.048,0,0,1-2.895,0l-.688-.691a2.048,2.048,0,0,1,0-2.895l7.961-7.943a2.048,2.048,0,0,1,2.891-.014Z" transform="translate(71.536 906.7)" fill="#00aeef"/>
                            <path id="Path_10" data-name="Path 10" d="M56.365,62.819l.688.691a2.048,2.048,0,0,1,0,2.895L49.11,74.366a2.048,2.048,0,0,1-2.895,0l-.691-.691a2.048,2.048,0,0,1,0-2.895l7.961-7.961A2.052,2.052,0,0,1,56.365,62.819Z" transform="translate(42.845 878.035)" fill="#00aeef" opacity="0.25"/>
                            <path id="Path_11" data-name="Path 11" d="M.616,63.5l.688-.691a2.052,2.052,0,0,1,2.895,0l7.961,7.961a2.048,2.048,0,0,1,0,2.895l-.691.691a2.048,2.048,0,0,1-2.895,0L.631,66.392A2.048,2.048,0,0,1,.616,63.5Z" transform="translate(71.497 878.047)" fill="#00aeef" opacity="0.25"/>
                            <path id="Path_12" data-name="Path 12" d="M45.508,18.571l.691-.688a2.048,2.048,0,0,1,2.895,0l7.943,7.961a2.048,2.048,0,0,1,0,2.895l-.688.691a2.048,2.048,0,0,1-2.895,0l-7.961-7.961a2.048,2.048,0,0,1,.014-2.9Z" transform="translate(42.861 906.716)" fill="#00aeef" opacity="0.25"/>
                        </g>
                    </svg>
                </div>
                <h2 class="banner_content_mobile_item_title">Software development</h2>
                <p class="banner_content_mobile_item_desc">
                    Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs
                </p>
                <a href="{{route('service')}}" class="btn">
                    View more
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="banner_content_mobile_item">
                <div class="banner_content_mobile_item_numb">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28.996" height="28.999" viewBox="0 0 28.996 28.999">
                        <g id="Group_730" data-name="Group 730" transform="translate(-71.5 -924)">
                            <path id="Path_9" data-name="Path 9" d="M11.416,17.9l.691.688a2.048,2.048,0,0,1,0,2.895L4.146,29.443a2.048,2.048,0,0,1-2.895,0l-.688-.691a2.048,2.048,0,0,1,0-2.895l7.961-7.943a2.048,2.048,0,0,1,2.891-.014Z" transform="translate(71.536 906.7)" fill="#00aeef" opacity="0.25"/>
                            <path id="Path_10" data-name="Path 10" d="M56.365,62.819l.688.691a2.048,2.048,0,0,1,0,2.895L49.11,74.366a2.048,2.048,0,0,1-2.895,0l-.691-.691a2.048,2.048,0,0,1,0-2.895l7.961-7.961A2.052,2.052,0,0,1,56.365,62.819Z" transform="translate(42.845 878.035)" fill="#00aeef" opacity="0.25"/>
                            <path id="Path_11" data-name="Path 11" d="M.616,63.5l.688-.691a2.052,2.052,0,0,1,2.895,0l7.961,7.961a2.048,2.048,0,0,1,0,2.895l-.691.691a2.048,2.048,0,0,1-2.895,0L.631,66.392A2.048,2.048,0,0,1,.616,63.5Z" transform="translate(71.497 878.047)" fill="#00aeef" opacity="0.25"/>
                            <path id="Path_12" data-name="Path 12" d="M45.508,18.571l.691-.688a2.048,2.048,0,0,1,2.895,0l7.943,7.961a2.048,2.048,0,0,1,0,2.895l-.688.691a2.048,2.048,0,0,1-2.895,0l-7.961-7.961a2.048,2.048,0,0,1,.014-2.9Z" transform="translate(42.861 906.716)" fill="#00aeef"/>
                        </g>
                    </svg>
                </div>
                <h2 class="banner_content_mobile_item_title">Hardware distribution</h2>
                <p class="banner_content_mobile_item_desc">
                    Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs
                </p>
                <a href="{{route('service')}}" class="btn">
                    View more
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="banner_content_mobile_item">
                <div class="banner_content_mobile_item_numb">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28.996" height="28.999" viewBox="0 0 28.996 28.999">
                        <g id="Group_730" data-name="Group 730" transform="translate(-71.5 -924)">
                            <path id="Path_9" data-name="Path 9" d="M11.416,17.9l.691.688a2.048,2.048,0,0,1,0,2.895L4.146,29.443a2.048,2.048,0,0,1-2.895,0l-.688-.691a2.048,2.048,0,0,1,0-2.895l7.961-7.943a2.048,2.048,0,0,1,2.891-.014Z" transform="translate(71.536 906.7)" fill="#00aeef" opacity="0.25"/>
                            <path id="Path_10" data-name="Path 10" d="M56.365,62.819l.688.691a2.048,2.048,0,0,1,0,2.895L49.11,74.366a2.048,2.048,0,0,1-2.895,0l-.691-.691a2.048,2.048,0,0,1,0-2.895l7.961-7.961A2.052,2.052,0,0,1,56.365,62.819Z" transform="translate(42.845 878.035)" fill="#00aeef" opacity="0.25"/>
                            <path id="Path_11" data-name="Path 11" d="M.616,63.5l.688-.691a2.052,2.052,0,0,1,2.895,0l7.961,7.961a2.048,2.048,0,0,1,0,2.895l-.691.691a2.048,2.048,0,0,1-2.895,0L.631,66.392A2.048,2.048,0,0,1,.616,63.5Z" transform="translate(71.497 878.047)" fill="#00aeef"/>
                            <path id="Path_12" data-name="Path 12" d="M45.508,18.571l.691-.688a2.048,2.048,0,0,1,2.895,0l7.943,7.961a2.048,2.048,0,0,1,0,2.895l-.688.691a2.048,2.048,0,0,1-2.895,0l-7.961-7.961a2.048,2.048,0,0,1,.014-2.9Z" transform="translate(42.861 906.716)" fill="#00aeef" opacity="0.25"/>
                        </g>
                    </svg>
                </div>
                <h2 class="banner_content_mobile_item_title">Software development</h2>
                <p class="banner_content_mobile_item_desc">
                    Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs
                </p>
                <a href="{{route('service')}}" class="btn">
                    View more
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="banner_content_mobile_item">
                <div class="banner_content_mobile_item_numb">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28.996" height="28.999" viewBox="0 0 28.996 28.999">
                        <g id="Group_730" data-name="Group 730" transform="translate(-71.5 -924)">
                            <path id="Path_9" data-name="Path 9" d="M11.416,17.9l.691.688a2.048,2.048,0,0,1,0,2.895L4.146,29.443a2.048,2.048,0,0,1-2.895,0l-.688-.691a2.048,2.048,0,0,1,0-2.895l7.961-7.943a2.048,2.048,0,0,1,2.891-.014Z" transform="translate(71.536 906.7)" fill="#00aeef" opacity="0.25"/>
                            <path id="Path_10" data-name="Path 10" d="M56.365,62.819l.688.691a2.048,2.048,0,0,1,0,2.895L49.11,74.366a2.048,2.048,0,0,1-2.895,0l-.691-.691a2.048,2.048,0,0,1,0-2.895l7.961-7.961A2.052,2.052,0,0,1,56.365,62.819Z" transform="translate(42.845 878.035)" fill="#00aeef"/>
                            <path id="Path_11" data-name="Path 11" d="M.616,63.5l.688-.691a2.052,2.052,0,0,1,2.895,0l7.961,7.961a2.048,2.048,0,0,1,0,2.895l-.691.691a2.048,2.048,0,0,1-2.895,0L.631,66.392A2.048,2.048,0,0,1,.616,63.5Z" transform="translate(71.497 878.047)" fill="#00aeef" opacity="0.25"/>
                            <path id="Path_12" data-name="Path 12" d="M45.508,18.571l.691-.688a2.048,2.048,0,0,1,2.895,0l7.943,7.961a2.048,2.048,0,0,1,0,2.895l-.688.691a2.048,2.048,0,0,1-2.895,0l-7.961-7.961a2.048,2.048,0,0,1,.014-2.9Z" transform="translate(42.861 906.716)" fill="#00aeef" opacity="0.25"/>
                        </g>
                    </svg>
                </div>
                <h2 class="banner_content_mobile_item_title">Hardware distribution</h2>
                <p class="banner_content_mobile_item_desc">
                    Interactive boards, monitors / Short and long focus projectors / Digital science lab / Robotics / 3D pens, 3D printers / Engineering solutions for educational institutions / Linguistic labs
                </p>
                <a href="{{route('service')}}" class="btn">
                    View more
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="section case_studies fadeUp bgColor pd_mobile" data-color="white">
        <div class="section_header">
            <div class="section_header_container">
                <h4 class="black_title">OUR CASE STUDIES</h4>
            </div>
            <a href="{{route('case_studies')}}" class="btn btn_bgcolor sectionHeadBtn">
                See all
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"/>
                    </g>
                </svg>
            </a>
        </div>
        <div class="case_studies_content">
            <div class="case_studies_slider">
                <a href="{{route('serviceItemInner')}}" class="case_studies_content_item">
                    <div class="case_studies_content_item_body">
                        <img class="case_studies_item_img" src="{{asset('img/314799-scaled.png')}}" alt="sekil">
                    </div>
                    <div class="case_studies_content_item_desc">
                        <small>Software development</small>
                        <p>BI System for the Ministry of Education</p>
                    </div>
                </a>
                <a href="{{route('serviceItemInner')}}" class="case_studies_content_item">
                    <div class="case_studies_content_item_body">
                        <img class="case_studies_item_img" src="{{asset('img/314799-scaled.png')}}" alt="code sekli">
                    </div>
                    <div class="case_studies_content_item_desc">
                        <small>WEB DESIGN</small>
                        <p>Edu.gov.az website</p>
                    </div>
                </a>
                <a href="{{route('serviceItemInner')}}" class="case_studies_content_item">
                    <div class="case_studies_content_item_body">
                        <img class="case_studies_item_img" src="{{asset('img/314799-scaled.png')}}" alt="sekil">
                    </div>
                    <div class="case_studies_content_item_desc">
                        <small>Software development</small>
                        <p>BI System for the Ministry of Education</p>
                    </div>
                </a>
                <a href="{{route('serviceItemInner')}}" class="case_studies_content_item">
                    <div class="case_studies_content_item_body">
                        <img class="case_studies_item_img" src="{{asset('img/314799-scaled.png')}}" alt="code sekli">
                    </div>
                    <div class="case_studies_content_item_desc">
                        <small>WEB DESIGN</small>
                        <p>Edu.gov.az website</p>
                    </div>
                </a>
                <a href="{{route('serviceItemInner')}}" class="case_studies_content_item">
                    <div class="case_studies_content_item_body">
                        <img class="case_studies_item_img" src="{{asset('img/314799-scaled.png')}}" alt="sekil">
                    </div>
                    <div class="case_studies_content_item_desc">
                        <small>Software development</small>
                        <p>BI System for the Ministry of Education</p>
                    </div>
                </a>
                <a href="{{route('serviceItemInner')}}" class="case_studies_content_item">
                    <div class="case_studies_content_item_body">
                        <img class="case_studies_item_img" src="{{asset('img/314799-scaled.png')}}" alt="code sekli">
                    </div>
                    <div class="case_studies_content_item_desc">
                        <small>WEB DESIGN</small>
                        <p>Edu.gov.az website</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="case_studies_footer">
            <button class="case_studies_arrow prev" aria-label="prevBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.667" height="13.599" viewBox="0 0 14.667 13.599">
                    <g id="noun_Left_1920800" transform="translate(-2.5 -13.7)">
                        <path id="Path_19" data-name="Path 19" d="M9.3,27.3l.9-.918L4.954,21.136H17.167V19.862H4.954L10.2,14.618,9.3,13.7,2.5,20.5Z" transform="translate(0 0)"/>
                    </g>
                </svg>
            </button>
            <div class="case_studies_text pagingInfo">
                1/9
            </div>
            <button class="case_studies_arrow next" aria-label="nextBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.667" height="13.599" viewBox="0 0 14.667 13.599">
                    <g id="noun_Left_1920800" transform="translate(17.167 27.299) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M9.3,27.3l.9-.918L4.954,21.136H17.167V19.862H4.954L10.2,14.618,9.3,13.7,2.5,20.5Z" transform="translate(0 0)"/>
                    </g>
                </svg>
            </button>
        </div>
        <div class="section_footer">
            <a href="about.html" class="btn btn_bgcolor mobile_section_footer_btn">
                See all
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <div class="section customers fadeUp bgColor pd_mobile" data-color="white">
        <div class="section_header">
            <div class="section_header_container">
                <h4 class="black_title">OUR CLIENTS</h4>
                <p class="section_header_desc">
                    Our experience allows us to bring our
                    disruptive approach to any sector
                </p>
            </div>
            <a href="{{route('about')}}" class="btn btn_bgcolor sectionHeadBtn">
                About us
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"/>
                    </g>
                </svg>
            </a>
        </div>
        <div class="customer_content">
            <div class="customer_content_item">
                <a href="https://edu.gov.az/" class="customer_content_item_body">
                    <img src="{{asset('img/Layer 2.png')}}" alt="">
                </a>
                <a href="https://www.ite.az/" class="customer_content_item_body">
                    <img src="{{asset('img/inovativ texnalogiyalar.png')}}" alt="texnologiya">
                </a>
                <a href="https://edu.gov.az/" class="customer_content_item_body">
                    <img src="{{asset('img/tehsil nazirliyi.png')}}" alt="">
                </a>
                <a href="https://www.ite.az/" class="customer_content_item_body">
                    <img src="{{asset('img/inovativ texnalogiyalar.png')}}" alt="texnologiya">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="https://mincom.gov.az/en/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/transport ministry.png')}}" alt="transport ministry ">
                </a>
                <a href="https://www.azsmart.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/az smart.png')}}" alt="az smart">
                </a>
                <a href="https://mincom.gov.az/en/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/transport ministry.png')}}" alt="transport ministry">
                </a>
                <a href="https://www.azsmart.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/az smart.png')}}" alt="az smart">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="https://www.scanex.az/" class="customer_content_item_body">
                    <img src="{{asset('img/scanex.png')}}" alt="scanex">
                </a>
                <a href="https://www.tika.gov.tr/en" class="customer_content_item_body">
                    <img src="{{asset('img/tika-logo.png')}}" alt="tika-logo">
                </a>
                <a href="https://www.scanex.az/" class="customer_content_item_body">
                    <img src="{{asset('img/scanex.png')}}" alt="scanex">
                </a>
                <a href="https://www.tika.gov.tr/en" class="customer_content_item_body">
                    <img src="{{asset('img/tika-logo.png')}}" alt="tika-logo">
                </a>
            </div>
            <div class="customer_content_item">
                <a href="http://enginet.az/index.php/az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/enginet logo.png')}}" alt="enginet logo">
                </a>
                <a href="https://www.ite.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/inovativ texnalogiyalar.png')}}" alt="inovativ texnalogiyalar">
                </a>
                <a href="http://enginet.az/index.php/az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/enginet logo.png')}}" alt="enginet logo">
                </a>
                <a href="https://www.ite.az/" class="customer_content_item_body js_content_end">
                    <img src="{{asset('img/inovativ texnalogiyalar.png')}}" alt="inovativ texnalogiyalar">
                </a>
            </div>
            <div class="customer_content_item display_none">
                <a href="https://www.tika.gov.tr/en" class="customer_content_item_body">
                    <img src="{{asset('img/tika-logo.png')}}" alt="tika-logo">
                </a>
                <a href="https://www.azsmart.az/" class="customer_content_item_body">
                    <img src="{{asset('img/az smart.png')}}" alt="az smart">
                </a>
                <a href="https://www.tika.gov.tr/en" class="customer_content_item_body">
                    <img src="{{asset('img/tika-logo.png')}}g" alt="tika-logo">
                </a>
                <a href="https://www.azsmart.az/" class="customer_content_item_body">
                    <img src="{{asset('img/az smart.png')}}" alt="az smart">
                </a>
            </div>
        </div>
        <div class="section_footer">
            <a href="{{route('about')}}" class="btn btn_bgcolor mobile_section_footer_btn">
                About us
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <div class="section blog_posts fadeUp bgColor pd_mobile" data-color="black">
        <div class="section_header">
            <div class="section_header_container">
                <h4 class="white_title">LATEST BLOG POSTS</h4>
            </div>
            <a href="{{route('blog')}}" class="btn mobile_section_btn sectionHeadBtn">
                See all
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"/>
                    </g>
                </svg>
            </a>
        </div>
        <div class="blog_posts_content">
            <a href="{{route('blogItemInner')}}" class="blog_posts_content_item">
                <div class="blog_posts_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img src="{{asset('img/startup-programming-team-508896704-5a4c19350c1a8200366a68a9.png')}}" alt="netstreem_cover">
                        </div>
                    </div>
                    <div class="blog_posts_content_item_desc">
                        <small class="blog_posts_content_item_desc_date">01 March 2021</small>
                        <p class="blog_posts_content_item_desc_text" id="b">BI System for the Ministry of Education</p>
                    </div>
                </div>
            </a>
            <a href="{{route('blogItemInner')}}" class="blog_posts_content_item">
                <div class="blog_posts_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img src="{{asset('img/11344.png')}}" alt="shekil">
                        </div>
                    </div>
                    <div class="blog_posts_content_item_desc">
                        <small class="blog_posts_content_item_desc_date">01 March 2021</small>
                        <p class="blog_posts_content_item_desc_text" id="b">BI System for the Ministry of Education</p>
                    </div>
                </div>
            </a>
            <a href="{{route('blogItemInner')}}" class="blog_posts_content_item">
                <div class="blog_posts_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img src="{{asset('img/startup-programming-team-508896704-5a4c19350c1a8200366a68a9.png')}}" alt="netstreem_cover">
                        </div>
                    </div>
                    <div class="blog_posts_content_item_desc">
                        <small class="blog_posts_content_item_desc_date">01 March 2021</small>
                        <p class="blog_posts_content_item_desc_text" id="b">BI System for the Ministry of Education</p>
                    </div>
                </div>
            </a>
            <a href="{{route('blogItemInner')}}" class="blog_posts_content_item">
                <div class="blog_posts_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img src="{{asset('img/11344.png')}}" alt="shekil">
                        </div>
                    </div>
                    <div class="blog_posts_content_item_desc">
                        <small class="blog_posts_content_item_desc_date">01 March 2021</small>
                        <p class="blog_posts_content_item_desc_text" id="b">BI System for the Ministry of Education</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="section_footer">
            <a href="{{route('blog')}}" class="btn mobile_section_footer_btn">
                See all
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <div class="section blog_posts_footer fadeUp bgColor pd_mobile" data-color="black">
        <div class="blog_posts_footer_item">
            <div class="blog_posts_footer_item_content">
                <div class="blog_posts_footer_item_content_body">
                    <div class="blog_posts_footer_item_content_body_img">
                        <img src="{{asset('img/techguy.png')}}" alt="techguy">
                    </div>
                    <div class="overlay"></div>
                    <div class="blog_posts_footer_item_content_body_desc">
                        <p class="blog_posts_footer_item_content_body_desc_text">
                            We’re a team of problem solvers  delivering effective digital  solutions that work.
                        </p>
                        <a href="{{route('about')}}" class="btn btn_border">
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
                        <img src="{{asset('img/7e86a435982265.570b650707a20.png')}}" alt="image">
                    </div>
                    <div class="overlay"></div>
                    <div class="blog_posts_footer_item_content_body_desc">
                        <p class="blog_posts_footer_item_content_body_desc_text">
                            We are looking for inspiring brilliant minds to innovate & create!
                        </p>
                        <a href="{{route('careers')}}" class="btn btn_border">
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
    <div class="section project fadeUp bgColor pd_mobile_0" data-color="black">
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






