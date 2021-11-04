<div class="section blog_posts fadeUp bgColor pd_mobile" data-color="black">
    <div class="section_header">
        <div class="section_header_container">
            <h4 class="white_title">{{$postHeaderName -> name ?? ''}}</h4>
        </div>
        <a href="{{route('blog')}}" class="btn mobile_section_btn sectionHeadBtn">
            {{$postHeaderName -> button_name ?? ''}}
            <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                    <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"/>
                </g>
            </svg>
        </a>
    </div>
    <div class="blog_posts_content">
        @foreach($posts as $post)
            <a href="{{route('blogItemInner')}}" class="blog_posts_content_item">
                <div class="blog_posts_content_item_body">
                    <div class="box pd-top100">
                        <div class="box_item">
                            <img src="{{'storage/app/img/'.$post->img}}" alt="netstreem_cover">
                        </div>
                    </div>
                    <div class="blog_posts_content_item_desc">
                        <small class="blog_posts_content_item_desc_date">{{date('d m Y', strtotime($post ->created_at)) ?? ''}}</small>
                        <p class="blog_posts_content_item_desc_text" id="b">{{$post ->header_name ?? ''}}</p>
                    </div>
                </div>
            </a>
        @endforeach

    </div>
    <div class="section_footer">
        <a href="{{route('blog')}}" class="btn mobile_section_footer_btn">
            {{$postHeaderName -> button_name ?? ''}}
            <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                    <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                </g>
            </svg>
        </a>
    </div>
</div>
