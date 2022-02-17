@extends('admin.master')
@section('content')
    <div class="container-lg">
        <div class="page_head">
            <div class="page_head--header page_head--header_after">
                Layihə məlumatı
            </div>
            <hr/>

            {{$errors->first()}}
        </div>
        <div class="page_content">
            <form id="postInfo" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{($studieContent->id ?? 0) > 0 ? route('edit.studie.content',$studieContent->id) : route('create.studie.content',$id)}}">
                {{csrf_field()}}
                <div class="form-group required">
                    <label class="customLabel" for="slug">Başlıq</label>
                    <input class="formControl" value="{{$studieContent->header_text ?? ''}}" name="header_text" id="header_text" type="text" placeholder="Başlıq" required="">
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="slug">İlkin məlumat</label>
                    <input class="formControl" value="{{$studieContent->first_text ?? ''}}" name="first_text" id="first_text" type="text" placeholder="İlkin məlumat" required="">
                </div>
                <div class="form-group">
                    <label class="customLabel" for="slug">Məlumat adı</label>
                    <input class="formControl" value="{{$studieContent->header_name ?? ''}}" name="header_name" id="header_name" type="text" placeholder="Məlumat adı" required="">
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="slug">Son məlumat</label>
                    <input class="formControl" value="{{$studieContent->footer_text ?? ''}}" name="footer_text" id="footer_text" type="text" placeholder="Son məlumat" required="">
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="slug">Şəkil</label>
                    <br>
                    <label for="blogImgUpload" class="quickBtn">Əlavə edin</label>
                    <input id="blogImgUpload" name="info_img" style="visibility:hidden;" value="{{($studieContent->img ?? '') == '' ? '' : asset('storage/img/'.$studieContent->img)}}" type="file">
                    <br>
                    <img style="display:  {{($data['img'] ?? '') == '' ? 'none' : 'block'}};max-width: 180px;" id="previewImg" src="{{($studieContent->img ?? '') == '' ? '' : asset('storage/img/'.$studieContent->img)}}" alt="your image" />
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="cateqory_language">Dil</label>
                    <select class="customSelect" name="lang" id="cateqory_language" required="" title="Dil" >
                        <option value="az" {{($studieContent->key ?? '') == 'az' ? 'selected' : ''}}>Azərbaycanca</option>
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

                if({{$studieContent->id ?? 0}} > 0){
                    $('#postInfo').append('<input type="hidden" name="info_img" value="{{$studieContent->img ?? ''}}">');
                }

                $('#postInfo').get(0).submit();
            });
        })
    </script>
@endsection
