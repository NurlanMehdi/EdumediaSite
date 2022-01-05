@extends('layouts.master')
@section('content')
    <div class="section page_header bgColor pd_mobile" data-color="black">
        <div class="page_header_top">
              <ul class="page_breadcrumb">
                <li class="page_breadcrumb_item">
                    <a href="{{route('index')}}">{{__('language.anasehife')}}</a>
                </li>
                <li class="page_breadcrumb_item">

                    <a href="{{route('service')}}">{{__('language.xidmetler')}}</a>

                </li>
            </ul>
        </div>
        <div class="page_header_bottom">
            <p class="page_header_topic page_header_topic_font">
                {{$header['header_text'] ?? ''}}
            </p>
            <div class="page_header_desc">
                <p>{{__('language.servisBashliqText')}}</p>
            </div>
        </div>
    </div>
    <div class="section service bgColor pd_mobile" data-color="black">
        <div class="service_body">
            <div class="service_left">
                <div class="service_left_content">
                    <ul class="service_left_content_nav">
                        @foreach($blogs as $key => $blog)
                            <li class="service_left_content_nav_item">

                                <a href="{{route('servicePages',$blog->id)}}" class="service_left_content_nav_item_link {{($key ?? 0) == 0 ? 'active' : '' }}" data-services-menu-id="{{$blog->url}}">{{$blog->blog_name}}</a>
                                <svg class="nav_arrow" xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                                    <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                                        <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                                    </g>
                                </svg>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="service_right">
                <div class="service_right_content">
                    <div class="box pd-top55">
                        <div class="box_item">
                            <div class="service_right_content_items">
                                @foreach($blogs as $key =>  $blog)
                                    <a href="{{route('servicePages',$blog->id)}}" data-services-content-id="{{$blog->url}}" class="service_right_content_item  {{($key ?? 0) == 0 ? 'active' : '' }} ">
                                        <div class="service_right_content_item_image">
                                            <img src="{{'storage/app/img/'.$blog->img}}" alt="">
                                        </div>
                                        <div class="overlay"></div>
                                        <div class="service_right_content_item_desc">
                                            <div class="service_right_content_item_desc_head">
                                                {{$blog->blog_name}}
                                            </div>
                                            <div class="service_right_content_item_desc_text">
                                                {{$blog->short_info}}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    @include('layouts.miniPostDashboard')--}}
    @include('layouts.tplAboutAndCareers')
    @include('layouts.projectInMind')
@endsection
