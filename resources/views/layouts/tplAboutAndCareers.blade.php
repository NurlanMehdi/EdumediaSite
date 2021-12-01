@if((\App\Http\Controllers\AboutCareersController::aboutAndCareersGetData()['about']['id'] ?? '') != '')
    <div class="section blog_posts_footer fadeUp bgColor pd_mobile" data-color="black">
        <div class="blog_posts_footer_item">
            <div class="blog_posts_footer_item_content">
                <div class="blog_posts_footer_item_content_body">
                    <div class="blog_posts_footer_item_content_body_img">
                        <img src="{{'/storage/app/img/'.(\App\Http\Controllers\AboutCareersController::aboutAndCareersGetData()['about']['img'] ?? '')}}" alt="techguy">
                    </div>
                    <div class="overlay"></div>
                    <div class="blog_posts_footer_item_content_body_desc">
                        <p class="blog_posts_footer_item_content_body_desc_text">
                            {{\App\Http\Controllers\AboutCareersController::aboutAndCareersGetData()['about']['short_info'] ?? ''}}
                        </p>
                        <a href="{{route('about')}}" class="btn btn_border">
                            {{\App\Http\Controllers\AboutCareersController::aboutAndCareersGetData()['about']['button_name'] ?? ''}}
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
                        <img src="{{'/storage/app/img/'.(\App\Http\Controllers\AboutCareersController::aboutAndCareersGetData()['careers']['img'] ?? '')}}" alt="image">
                    </div>
                    <div class="overlay"></div>
                    <div class="blog_posts_footer_item_content_body_desc">
                        <p class="blog_posts_footer_item_content_body_desc_text">
                            {{\App\Http\Controllers\AboutCareersController::aboutAndCareersGetData()['careers']['short_info'] ?? ''}}
                        </p>
                        <a href="{{route('careers')}}" class="btn btn_border">
                            {{\App\Http\Controllers\AboutCareersController::aboutAndCareersGetData()['careers']['button_name'] ?? ''}}
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
@endif


