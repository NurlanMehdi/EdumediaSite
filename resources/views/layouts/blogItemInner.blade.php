@extends('layouts.master')
@section('content')
    <div class="section BI_system bgColor pd_mobile_0" data-color="black">
        <div class="BI_system_header">
            <div class="BI_system_header_img">

                <img src="{{asset('storage/app/img/')."/".$data->img ?? ''}}" alt="">
            </div>

            <div class="BI_system_header_text">
                <div class="BI_system_header_text_body">

                                     <h3 class="BI_system_header_text_title">{{$data->header_name ?? ''}}</h3>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </div>
    <div class="page_body bgColor fadeUp" data-color="white">
        <div class="BI_system_desc pd_mobile">
            <p class="BI_system_desc_text" data-aos="fade-up">
                {{$studieInfo->header_text ?? ''}}
            </p>
            <p class="BI_system_desc_text" data-aos="fade-up">
                {{$studieInfo->first_text ?? ''}}
            </p>
            <h6> {{$studieInfo->header_name ?? ''}}</h6>
            <div class="BI_system_desc_img" data-aos="fade-up">
                @if(($studieInfo->img ?? '') != '')
                    <img src="{{asset('storage/app/img/'.$studieInfo->img)}}" alt="">
                @endif

            </div>
            <p class="BI_system_desc_text" data-aos="fade-up">
                {{$studieInfo->footer_text ?? ''}}
            </p>
            <div class="BI_system_desc_link" data-aos="fade-up">
                <a href="{{route('case_studies')}}" class="btn">
                    {{__('language.viewWebsite')}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(17.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(0 0)" fill="#00aeef"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="BI_system_desc_share" data-aos="fade-up">
                <p>{{__('language.share')}}:</p>
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
  @include('layouts.tplAboutAndCareers')
    @include('layouts.projectInMind')
@endsection






