@extends('layouts.master')
@section('content')
<div class="container" id="container">
    <div class="section page_header bgColor pd_mobile" data-color="white">
        <div class="page_header_top">
            <ul class="page_breadcrumb">
                <li class="page_breadcrumb_item">
                    <a href="index.html">home</a>
                </li>
                <li class="page_breadcrumb_item page_breadcrumb_item_clr">
                    <a href="contact.html">contact</a>
                </li>
            </ul>
        </div>
        <div class="page_header_bottom">
            <p class="page_header_topic page_header_topic_clr">
                Let's work together
            </p>
        </div>
    </div>
    <div class="section contact_page bgColor pd_mobile" data-color="white">
        <div class="contact_left">
            <form action="#">
                <div class="formItem">
                    <label for="name">What is your name?</label>
                    <input type="text" id="name" placeholder="Your name and surname" class="contact_input">
                </div>
                <div class="formItem">
                    <label for="number">What is your phone number?</label>
                    <input type="text" id="number" placeholder="e.g +994 50 890 90 00" class="contact_input">
                </div>
                <div class="formItem">
                    <label for="email">What is your email?</label>
                    <input type="text" id="email" placeholder="e.g example@corporate.com" class="contact_input">
                </div>
                <div class="formItem">
                    <label for="interesting">What type of service are you interested in?</label>
                    <select name="interested in" id="interested">
                        <option value="develop">01 Design & Develop</option>
                        <option value="design">02 Graphic Designer</option>
                        <option value="front">03 Front-end</option>
                        <option value="back">04 Back-end</option>
                    </select>
                </div>
                <div class="formItem">
                    <label for="about_edumedia">How did you find about Edumedia?</label>
                    <select name="about_edumedia" id="about_edumedia">
                        <option value="social_media">Social Media</option>
                        <option value="design">02 Graphic Designer</option>
                        <option value="front">03 Front-end</option>
                        <option value="back">04 Back-end</option>
                    </select>
                </div>
                <div class="formItem">
                    <label for="text">Tell us about your project</label>
                    <textarea name="text" id="text" placeholder="e.g project goals, timeline and budget"></textarea>
                </div>
                <a href="#" type="submit" class="contact_btn">
                    Send
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.467" height="9.707" viewBox="0 0 15.467 9.707">
                        <g id="noun_Left_1920800" transform="translate(36.967 23.407) rotate(180)">
                            <path id="Path_19" data-name="Path 19" d="M7.354,23.407,8,22.752,4.252,19.008H17.966V18.1H4.252L8,14.355,7.354,13.7,2.5,18.554Z" transform="translate(19 0)" fill="#fff"></path>
                        </g>
                    </svg>
                </a>
            </form>
        </div>
        <div class="contact_right">
            <div class="contact">
                <p class="title">Contact</p>
                <span>{{($contact->phone_number_status == 0) ? $contact->phone_number : ''}}</span>
                <a href="#">{{($contact->mail_status == 0) ? $contact->mail : ''}}</a>
            </div>
            <div class="find_us">
                <p class="title">Find us</p>
                <span>
                    {{($contact->address_status == 0) ? $contact->address : ''}}
                    </span>
                <div class="mapouter" style="margin: 30px 0px;"><div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=Edumedia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://getasearch.com/fmovies"></a><br><style>.mapouter{position:relative;text-align:right;height:280px;width:280px;filter: grayscale(1);}</style><a href="https://www.embedgooglemap.net">google map html embed</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:280px;width:280px;}</style></div></div>
            </div>
            <div class="social">
                <p class="title">Social</p>
                <div class="social_links">
                    <a href="{{($contact->facebook_status == 0) ? $contact->facebook : ''}}">Facebook</a>
                    <a href="{{($contact->linkedin_status == 0) ? $contact->linkedin : ''}}">LinkedIn</a>
                    <a href="{{($contact->instagram_status == 0) ? $contact->instagram : ''}}">Instagram</a>
                </div>
            </div>
        </div>
    </div>
@endsection
