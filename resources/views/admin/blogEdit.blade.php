@extends('admin.master')
@section('content')
    <div class="container-lg">
        <div class="page_head">
            <div class="page_head--header page_head--header_after">
                Servis
            </div>
            <hr/>

            {{$errors->first()}}
        </div>
        <div class="page_content">
            <form id="editDashboardBlogs" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{($data['id'] ?? 0) > 0 ? route('edit.blog') : route('create.blog')}}">
                {{csrf_field()}}
                <div class="form-group required">
                    <label class="customLabel" for="page_status">Status</label>
                    <select class="customSelect" name="status" id="page_status" required="" title="Status">
                        <option {{($data['status'] ?? 0) == 1 ? '' : 'selected'}} value="1">Gizli</option>
                        <option {{($data['status'] ?? 0) == 1 ? '' : 'selected'}} value="0">Görünən</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="customLabel" for="title">Servis adı</label>
                    <input class="formControl" value="{{$data['names'] ?? ''}}" name="names" id="title" type="text" placeholder="Servis adı" required="">
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="slug">Başlıq</label>
                    <input class="formControl" value="{{$data['blog_name'] ?? ''}}" name="blog_name" id="slug" type="text" placeholder="Başlıq" required="">
                </div>
                <div class="form-group">
                    <label class="customLabel" for="slug">Services button</label>
                    <input class="formControl" value="{{$data['button_name'] ?? ''}}" name="button_name" id="slug" type="text" placeholder="Ətraflı" required="">
                </div>
                <div class="form-group ">
                    <label class="customLabel" for="slug">View more button</label>
                    <input class="formControl" value="{{$data['blog_button_other'] ?? ''}}" name="blog_button_other" id="slug" type="text" placeholder="Blog ətraflı" required="">
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="fake_name">Qısa məzmun</label>
                    <textarea id="short_desc" name="short_info" class="formControl" required="">{{$data['short_info'] ?? ''}}</textarea>
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

                $('#editDashboardBlogs').append('<input type="hidden" name="blogId" value="{{$data['id'] ?? 0}}">');
                $('#editDashboardBlogs').append('<input type="hidden" name="info_img" value="{{$data['img'] ?? ''}}">');
                $('#editDashboardBlogs').get(0).submit();
            });
        })
    </script>
@endsection
