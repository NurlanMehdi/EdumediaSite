@extends('admin.master')
@section('content')
    <div class="container-lg">
        <div class="page_head">
            <div class="page_head--header page_head--header_after">
                Post
            </div>
            <hr/>

            {{$errors->first()}}
        </div>
        <div class="page_content">
            <form id="postInfo" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{($data['id'] ?? 0) > 0 ? route('edit.post') : route('create.post')}}">
                {{csrf_field()}}
                <div class="form-group required">
                    <label class="customLabel" for="page_status">Status</label>
                    <select class="customSelect" name="status" id="status" required="" title="Status">
                        <option {{($data['status'] ?? 0) == 1 ? '' : 'selected'}} value="1">Gizli</option>
                        <option {{($data['status'] ?? 0) == 1 ? '' : 'selected'}} value="0">Görünən</option>
                    </select>
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="blog_name">Blog</label>

                    <select class="customSelect" name="blog_id" id="blogName" required="" title="Status">
                        @foreach($blogs as $blog)
                            <option value="{{$blog->item_id ?? ''}}" value="1">{{$blog->blog_name ?? ''}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="title">Adı</label>
                    <input class="formControl" value="{{$data['name'] ?? ''}}" name="names" id="title" type="text" placeholder="Adı" required="">
                </div>
                <div class="form-group">
                    <label class="customLabel" for="slug">Post button</label>
                    <input class="formControl" value="{{$data['button_name'] ?? ''}}" name="button_name" id="slug" type="text" placeholder="Post button" required="">
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="slug">Başlıq</label>
                    <input class="formControl" value="{{$data['header_name'] ?? ''}}" name="header_name" id="slug" type="text" placeholder="Başlıq" required="">
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="slug">Post info</label>
                    <input class="formControl" value="{{$data['post_info'] ?? ''}}" name="post_info" id="slug" type="text" placeholder="Post info" required="">
                </div>

                <div class="form-group required">
                    <label class="customLabel" for="slug">Şəkil</label>
                    <br>
                    <label for="blogImgUpload" class="quickBtn">Əlavə edin</label>
                    <input id="blogImgUpload" name="info_img" style="visibility:hidden;" value="{{($data['img'] ?? '') == '' ? '' : asset('storage/img/'.$data['img'])}}" type="file">
                    <br>
                    <img style="display:  {{($data['img'] ?? '') == '' ? 'none' : 'block'}};max-width: 180px;" id="previewImg" src="{{($data['img'] ?? '') == '' ? '' : asset('storage/img/'.$data['img'])}}" alt="your image" />
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="cateqory_language">Dil</label>
                    <select class="customSelect" name="lang" id="cateqory_language" required="" title="Dil" >
                        <option value="az" {{($data['key'] ?? '') == 'az' ? 'selected' : ''}}>Azərbaycanca</option>
                                                <option value="en" {{($data['key'] ?? '') == 'en' ? 'selected' : ''}}>İngiliscə</option>
                        {{--                        <option value="ru" {{($data['key'] ?? '') == 'ru' ? 'selected' : ''}}>Rusca</option>--}}
                    </select>
                </div>
                <div class="form-group pt-5">
                    <hr class="mt-5"/>
                    <div class="quickLinks">
                        <button type="button" class="customBtn quickBtn edit-blog">
                            Redaktə et
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
@section('js')
    <script>

        $(document).ready(function (){
            $('#blogImgUpload').on('change',function (){
                readURL(this);
            })

            $('.edit-blog').on('click',function (e){
                e.preventDefault();
                e.stopPropagation();

                if({{$data['id'] ?? 0}} > 0){
                    $('#postInfo').append('<input type="hidden" name="postId" value="{{$data['id'] ?? 0}}">');
                    $('#postInfo').append('<input type="hidden" name="info_img" value="{{$data['img'] ?? ''}}">');
                }

                $('#postInfo').get(0).submit();
            });
        })
    </script>
@endsection
