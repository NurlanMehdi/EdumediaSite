@extends('admin.master')
@section('content')
    <div class="container-lg">
        <div class="page_head">
            <div class="page_head--header page_head--header_after">
                Dashboard
            </div>
            <div class="page_head--description">
                AdminPanel dashboard-ı
            </div>
            <hr/>

        </div>
        <div class="page_content">
            <div class="section_socialBanner_content_items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section_socialBanner_content_item">

                            <div class="section_socialBanner_content_item_content">
                                <a href="{{route('dashboardPage')}}" class="section_socialBanner_content_item_content_profile">
                                    <div class="section_socialBanner_content_item_content_profile--name text-uppercase">
                                        Servislər
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section_socialBanner_content_item">
                            <div class="section_socialBanner_content_item_content">
                                <a href="{{route('cocoPostPage')}}" class="section_socialBanner_content_item_content_profile">
                                    <div class="section_socialBanner_content_item_content_profile--name text-uppercase">
                                        Postlar
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section_socialBanner_content_item">

                            <div class="section_socialBanner_content_item_content">
                                <a href="{{route('cocoStudiesPage')}}" class="section_socialBanner_content_item_content_profile">
                                    <div class="section_socialBanner_content_item_content_profile--name text-uppercase">
                                        İşlərimiz
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section_socialBanner_content_item">

                            <div class="section_socialBanner_content_item_content">
                                <a href="{{route('aboutUsPage')}}" class="section_socialBanner_content_item_content_profile">
                                    <div class="section_socialBanner_content_item_content_profile--name text-uppercase">
                                        About Us
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section_socialBanner_content_item">

                            <div class="section_socialBanner_content_item_content">
                                <a href="{{route('about.and.careers')}}" class="section_socialBanner_content_item_content_profile">
                                    <div class="section_socialBanner_content_item_content_profile--name text-uppercase">
                                        About Us / Careers
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section_socialBanner_content_item">
                            <div class="section_socialBanner_content_item_content">
                                <a href="{{route('contactPage')}}" class="section_socialBanner_content_item_content_profile">
                                    <div class="section_socialBanner_content_item_content_profile--name text-uppercase">
                                        Əlaqə
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
