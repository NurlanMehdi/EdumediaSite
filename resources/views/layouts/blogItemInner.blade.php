@extends('layouts.master')
@section('content')
    <div class="section BI_system bgColor pd_mobile_0" data-color="black">
        <div class="BI_system_header">
            <div class="BI_system_header_img">
                <img src="{{asset('storage/app/img/')."/".$data->img}}" alt="">
            </div>
            
            <div class="BI_system_header_text">
                <div class="BI_system_header_text_body">
                    <p class="BI_system_header_text_date">01 March 2021</p>
                                     <h3 class="BI_system_header_text_title">{{$data->header_name}}</h3>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </div>
    <div class="page_body bgColor fadeUp" data-color="white">
        <div class="BI_system_desc pd_mobile">
            <p class="BI_system_desc_text" data-aos="fade-up">
                The Ministry of Education has requested us to create a BI system that would combine the automatization of frequently used reports and preparation of dashboards, and minimize the time requested for these processes.
            </p>
            <p class="BI_system_desc_text" data-aos="fade-up">
                During our discovery phase for the project, we noticed that search functionality across a number of homebuilders had not been updated in years and added a lot of friction to the user experience. This is a core feature that the user is likely to interact with first when landing on a homebuilder’s website. They could be leisurely browsing a new area they’d like to move to or see what’s being built within a certain radius of their location.
            </p>
            <h6>Header</h6>
            <p class="BI_system_desc_text" data-aos="fade-up">
                Our approach to search for Spitfire Homes was to make sure it was easy to use, super fast and easy to edit – allowing the user to easily filter by bedrooms, price and house type almost instantly without having to submit a new search. To achieve this, we implemented state management techniques and re-rendering based on a users’ input and interaction. This approach also means the page doesn’t need to reload every time a filter is updated.
            </p>
            <div class="BI_system_desc_img" data-aos="fade-up">
                <img src="./img/11344.png" alt="">
            </div>
            <p class="BI_system_desc_text" data-aos="fade-up">
                During our discovery phase for the project, we noticed that search functionality across a number of homebuilders had not been updated in years and added a lot of friction to the user experience. This is a core feature that the user is likely to interact with first when landing on a homebuilder’s website. They could be leisurely browsing a new area they’d like to move to or see what’s being built within a certain radius of their location. <br><br> Our approach to search for Spitfire Homes was to make sure it was easy to use, super fast and easy to edit – allowing the user to easily filter by bedrooms, price and house type almost instantly without having to submit a new search. To achieve this, we implemented state management techniques and re-rendering based on a users’ input and interaction. This approach also means the page doesn’t need to reload every time a filter is updated.
            </p>
            <div class="BI_system_desc_link" data-aos="fade-up">
                <a href="case_studies.html" class="btn">
                    View Case Study
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="BI_system_desc_share" data-aos="fade-up">
                <p>Share:</p>
                <ul class="BI_system_desc_share_social">
                    <li class="BI_system_desc_share_social_item">
                        <a href="https://www.facebook.com/edumedia.azerbaijan">Facebook</a>
                    </li>
                    <li class="BI_system_desc_share_social_item">
                        <a href="https://twitter.com/edumediaaze">Twitter</a>
                    </li>
                    <li class="BI_system_desc_share_social_item">
                        <a href="https://www.linkedin.com/company/edumedia-azerbaijan-llc/?originalSubdomain=tr">Linkedin</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section blog_posts bgColor fadeUp pd_mobile" data-color="black">
        <div class="section_header">
            <div class="section_header_container">
                <h4 class="white_title">LATEST BLOG POSTS</h4>
            </div>
            <a href="blog.html" class="btn mobile_section_btn sectionHeadBtn">
                See all
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"/>
                    </g>
                </svg>
            </a>
        </div>
      
        <div class="section_footer">
            <a href="blog.html" class="btn mobile_section_footer_btn">
                See all
                <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                    </g>
                </svg>
            </a>
        </div>
    </div>
  @include('layouts.tplAboutAndCareers')
    @include('layouts.projectInMind')
@endsection






