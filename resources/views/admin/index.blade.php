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
                                        Dashboard
                                    </div>
                                    <div class="section_socialBanner_content_item_content_profile--username">
                                        - 13
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section_socialBanner_content_item">
                            <div class="section_socialBanner_content_item_content">
                                <a href="categories.html" class="section_socialBanner_content_item_content_profile">
                                    <div class="section_socialBanner_content_item_content_profile--name text-uppercase">
                                        Səhifələr
                                    </div>
                                    <div class="section_socialBanner_content_item_content_profile--username">
                                        - 7
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section_socialBanner_content_item">
                            <div class="section_socialBanner_content_item_content">
                                <a href="categories.html" class="section_socialBanner_content_item_content_profile">
                                    <div class="section_socialBanner_content_item_content_profile--name text-uppercase">
                                        Xəbərlər
                                    </div>
                                    <div class="section_socialBanner_content_item_content_profile--username">
                                        - 17
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
                                    <div class="section_socialBanner_content_item_content_profile--username">
                                        - 3
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section_socialBanner_content_item">
                            <div class="section_socialBanner_content_item_content">
                                <a href="categories.html" class="section_socialBanner_content_item_content_profile">
                                    <div class="section_socialBanner_content_item_content_profile--name text-uppercase">
                                        Menyu
                                    </div>
                                    <div class="section_socialBanner_content_item_content_profile--username">
                                        - 52
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
