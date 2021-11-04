@extends('admin.master')
@section('content')
    <div class="container-lg">
        <div class="page_head">

            <div class="page_head--header ">
                About Us
            </div>
            <hr/>
            {{$errors->first()}}
        </div>
        <div class="page_content">
            <div class="form-group">
                <label class="customLabel" for="about_careers">About Us/Careers</label>
                <select name="about_careers"  class="customSelect about-careers" title="Status">
                    <option value="about">About Us</option>
                    <option value="careers">Careers</option>
                </select>
            </div>
            <form id="formAboutUs" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{($data['about']['id'] ?? 0) > 0 ? route('edit.about.careers') : route('create.about.careers')}}">
                {{csrf_field()}}
                <div class="form-group required">
                    <label class="customLabel" for="page_status">Status</label>
                    <select class="customSelect" name="status" id="page_status" required="" title="Status">
                        <option {{($data['about']['status'] ?? 0) == 1 ? '' : 'selected'}} value="1">Gizli</option>
                        <option {{($data['about']['status'] ?? 0) == 1 ? '' : 'selected'}} value="0">Görünən</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="customLabel" for="slug">About Us Button</label>
                    <input class="formControl" value="{{$data['about']['button_name'] ?? ''}}" name="button_name" id="slug" type="text" placeholder="Ətraflı" required="">
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="fake_name">Qısa məzmun</label>
                    <textarea id="short_desc" name="short_info" class="formControl" required="">{{$data['about']['short_info'] ?? ''}}</textarea>
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="slug">Şəkil</label>
                    <br>
                    <label for="blogImgUpload" class="quickBtn">Əlavə edin</label>
                    <input id="blogImgUpload" name="info_img" style="visibility:hidden;" value="{{($data['about']['img'] ?? '') == '' ? '' : asset('storage/img/'.$data['about']['img'])}}" type="file">
                    <br>
                    <img style="display:  {{($data['about']['img'] ?? '') == '' ? 'none' : 'block'}};max-width: 180px;" id="previewImg" src="{{($data['about']['img'] ?? '') == '' ? '' : asset('storage/img/'.$data['about']['img'])}}" alt="your image" />
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="cateqory_language">Dil</label>
                    <select class="customSelect" name="lang" id="cateqory_language" required="" title="Dil" >
                        <option value="az" {{($data['key'] ?? '') == 'az' ? 'selected' : ''}}>Azərbaycanca</option>
                        {{--                        <option value="en" {{($data['key'] ?? '') == 'en' ? 'selected' : ''}}>İngiliscə</option>--}}
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
            <form id="formCareers" style="display: none" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{($data['careers']['id'] ?? 0) > 0 ? route('edit.about.careers') : route('create.about.careers')}}">
                {{csrf_field()}}
                <div class="form-group required">
                    <label class="customLabel" for="page_status">Status</label>
                    <select class="customSelect" name="status" id="page_status" required="" title="Status">
                        <option {{($data['careers']['status'] ?? 0) == 1 ? '' : 'selected'}} value="1">Gizli</option>
                        <option {{($data['careers']['status'] ?? 0) == 1 ? '' : 'selected'}} value="0">Görünən</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="customLabel" for="slug">Careers Button</label>
                    <input class="formControl" value="{{$data['careers']['button_name'] ?? ''}}" name="button_name" id="slug" type="text" placeholder="Ətraflı" required="">
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="fake_name">Qısa məzmun</label>
                    <textarea id="short_desc" name="short_info" class="formControl" required="">{{$data['careers']['short_info'] ?? ''}}</textarea>
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="slug">Şəkil</label>
                    <br>
                    <label for="careerImgUpload" class="quickBtn">Əlavə edin</label>
                    <input id="careerImgUpload" name="info_img" style="visibility:hidden;" value="{{($data['careers']['img'] ?? '') == '' ? '' : asset('storage/img/'.$data['careers']['img'])}}" type="file">
                    <br>
                    <img style="display:  {{($data['careers']['img'] ?? '') == '' ? 'none' : 'block'}};max-width: 180px;" id="careersPreviewImg" src="{{($data['careers']['img'] ?? '') == '' ? '' : asset('storage/img/'.$data['careers']['img'])}}" alt="your image" />
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="cateqory_language">Dil</label>
                    <select class="customSelect" name="lang" id="cateqory_language" required="" title="Dil" >
                        <option value="az" {{($data['key'] ?? '') == 'az' ? 'selected' : ''}}>Azərbaycanca</option>
                        {{--                        <option value="en" {{($data['key'] ?? '') == 'en' ? 'selected' : ''}}>İngiliscə</option>--}}
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
            $('.about-careers').on('change',function (){
                if($(this).val() == 'about')
                {
                    $('#formAboutUs').show();
                    $('#formCareers').hide();
                }else{
                    $('#formCareers').show();
                    $('#formAboutUs').hide();
                }
            });

            $('#blogImgUpload').on('change',function (){
                readURL(this);
            })

            $('#careerImgUpload').on('change',function (){
                readURL(this,'careersPreviewImg');
            })

            $('.edit-blog').on('click',function (e){
                e.preventDefault();
                e.stopPropagation();
                if($('.about-careers option:selected').val() == 'about')
                {
                    $('#formAboutUs').append('<input type="hidden" name="blogId" value="{{$data['about']['id'] ?? 0}}">');
                    $('#formAboutUs').append('<input type="hidden" name="string_id" value="'+$('.about-careers option:selected').val()+'">');
                    $('#formAboutUs').append('<input type="hidden" name="info_img" value="{{$data['about']['img'] ?? ''}}">');
                    $('#formAboutUs').get(0).submit();
                }else{
                    $('#formCareers').append('<input type="hidden" name="blogId" value="{{$data['careers']['id'] ?? 0}}">');
                    $('#formCareers').append('<input type="hidden" name="string_id" value="'+$('.about-careers option:selected').val()+'">');
                    $('#formCareers').append('<input type="hidden" name="info_img" value="{{$data['careers']['img'] ?? ''}}">');
                    $('#formCareers').get(0).submit();
                }

            });
        })
    </script>
@endsection
