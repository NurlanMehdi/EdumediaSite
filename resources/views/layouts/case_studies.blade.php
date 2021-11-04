@extends('layouts.master')
@section('content')
    <div class="section page_header bgColor pd_mobile" data-color="white">
        <div class="page_header_top">
            <ul class="page_breadcrumb">
                <li class="page_breadcrumb_item">
                    <a href="{{route('service')}}">home</a>
                </li>
                <li class="page_breadcrumb_item page_breadcrumb_item_clr">
                    <a href="{{route('service')}}">service</a>
                </li>
                <li class="page_breadcrumb_item page_breadcrumb_item_clr">
                    <a href="{{route('case_studies')}}">design & development</a>
                </li>
            </ul>
        </div>
        <div class="page_header_bottom">
            <p class="page_header_topic page_header_topic_clr">
                {{$header['header_text'] ?? ''}}
            </p>
            <!-- <div class="page_header_desc page_header_desc_clr">
                <p>

                </p>
            </div> -->
        </div>
    </div>
    <div class="section filter bgColor pd_mobile" data-color="white">
        <div class="filter_header">
            <ul class="filter_header_nav">
                <li class="filter_header_nav_item">
                    <a id="0" class="filter_header_nav_item_link filter_header_nav_item_link_clr blog-name all-blogs">All</a>
                </li>
                @foreach($blogItems as $item)
                    <li class="filter_header_nav_item">
                        <a class="filter_header_nav_item_link filter_header_nav_item_link_clr blog-name" id="{{$item->item_id ?? ''}}">{{$item->blog_name ?? ''}}</a>
                    </li>
                @endforeach


            </ul>
        </div>
        <select class="custom_select section_blog_item_categories_select">
            <option class="blog-name" id="0">All</option>
            @foreach($blogItems as $item)
                <option class="blog-name" id="{{$item->item_id ?? ''}}">{{$item->blog_name ?? ''}}</option>
            @endforeach
        </select>
        <div class="filter_content">
        </div>
    </div>
    @include('layouts.tplAboutAndCareers')
    @include('layouts.projectInMind')
@stop
@section('js')
    <script>
        $(document).ready(function (){
            setTimeout(function(){ $('.all-blogs').trigger('click'); },100);

            $('.blog-name').on('click',function (){
                var id = $(this).attr('id');
                let url = "{{route('post.selected.from.studies',':id')}}";
                url = url.replace(':id',id);
                $('.filter_content').html('');
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function (response) {
                        $.each( response, function( key, value ) {
                            var date    = new Date(value.created_at),
                                yr      = date.getFullYear(),
                                month   = date.getMonth() < 10 ? '0' + date.getMonth() : date.getMonth(),
                                day     = date.getDate()  < 10 ? '0' + date.getDate()  : date.getDate(),
                                newDate = day + '-' + month + '-' + yr;
                            var post = ' <a href="{{route('blogItemInner')}}" class="flex_25 filter_content_item"><div class="filter_content_item_body"><div class="box pd-top100"> <div class="box_item"> <img class="filter_content_item_img" src="'+'/storage/img/'+value.img+'" alt=""> </div> </div> <div class="filter_content_item_desc"> <small  class="filter_content_item_desc_top">'+newDate+'</small> <p class="filter_content_item_desc_bottom filter_content_item_desc_bottom_clr">'+value.header_name+'</p></div></div></a>';

                            $('.filter_content').append(post);
                        });
                    }
                })
            })
        })

    </script>
@endsection
