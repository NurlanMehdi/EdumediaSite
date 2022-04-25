@extends('layouts.master')
@section('content')
    <div class="section page_header bgColor pd_mobile" data-color="white">
        <div class="page_header_top">
            <ul class="page_breadcrumb">
                <li class="page_breadcrumb_item">
                    <a href="{{route('index')}}">{{__('language.anasehife')}}</a>
                </li>
                <li class="page_breadcrumb_item page_breadcrumb_item_clr">

                    <a href="{{route('contact')}}">{{__('language.elaqe')}}</a>

                </li>
            </ul>
        </div>
        <div class="page_header_bottom">
            <p class="page_header_topic page_header_topic_clr">
                {{$header->header_text ?? ''}}
            </p>
        </div>
    </div>
    <div class="section contact_page bgColor pd_mobile" data-color="white">
        <div class="contact_left">
            <form action="{{ route('mail') }}" method="POST">
                @csrf
                <div class="formItem">
                    <label for="name">{{__('language.name')}} / {{__('language.surname')}}</label>
                    <input type="text" name="name" placeholder="{{__('language.name')}} / {{__('language.surname')}}" class="contact_input">
                </div>
                <div class="formItem">
                    <label for="number">{{__('language.phone')}}</label>
                    <input type="text" name="number" placeholder="{{__('language.phone')}}" class="contact_input">
                </div>
                <div class="formItem">
                    <label for="email">{{__('language.e-mail')}}</label>
                    <input type="text" name="email" placeholder="{{__('language.e-mail')}}" class="contact_input">
                </div>
                <div class="formItem">
                    <label for="interesting">{{__('language.maraqlandiginizXidmetSahesi')}}</label>
                    <select name="interested" id="interested">
                        <option value="develop">{{__('language.designAndDevelopment')}}</option>
                        <option value="hardware">{{__('language.hardware')}}</option>
                        <option value="coachAndConsulting">{{__('language.coachAndConsulting')}}</option>
                    </select>
                </div>

                <div class="formItem">
                    <label for="body">{{__('language.layihenizHaqqindaBizeDanishin')}}</label>
                    <textarea name="body" id="body" placeholder=""></textarea>
                </div>
                <button type="submit" class="contact_btn">
                    {{__('language.send')}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(36.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(19 0)" fill="#fff"></path>
                        </g>
                    </svg>
                </button>
            </form>
        </div>
        <div class="contact_right">
            <div class="contact">
                <p class="title">{{__('language.elaqe')}}</p>
                <span>{{($contact->phone_number_status == 0) ? $contact->phone_number : ''}}</span>
                <a href="mailto::info@edumedia.az">{{($contact->mail_status == 0) ? $contact->mail : ''}}</a>
            </div>
            <div class="find_us">
                <p class="title">{{__('language.unvan')}}</p>
                <span>
                    @if(app()->getLocale() == 'az')
                        {{($contact->address_status == 0) ? $contact->address : ''}}
                    @else
                        {{__('language.edumediaUnvan')}}
                    @endif

                    </span>
                <div class="mapouter" style="margin: 30px 0px;"><div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=Edumedia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://getasearch.com/fmovies"></a><br><style>.mapouter{position:relative;text-align:right;height:280px;width:280px;filter: grayscale(1);}</style><a href="https://www.embedgooglemap.net">google map html embed</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:280px;width:280px;}</style></div></div>
            </div>
            <div class="social">
                <p class="title">{{__('language.socialMedia')}}</p>
                <div class="social_links">
                    <a href="{{($contact->facebook_status == 0) ? $contact->facebook : ''}}">Facebook</a>
                    <a href="{{($contact->linkedin_status == 0) ? $contact->linkedin : ''}}">LinkedIn</a>
                    <a href="{{($contact->instagram_status == 0) ? $contact->instagram : ''}}">Instagram</a>
                </div>
            </div>
        </div>
    </div>

@endsection
