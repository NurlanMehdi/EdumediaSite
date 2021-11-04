@extends('admin.master')
@section('content')
    <div class="container-lg">
        <div class="page_head">
            <div class="page_head--header page_head--header_after">
                Deliver
            </div>
            <hr/>

            {{$errors->first()}}
        </div>
        <div class="page_content">
            <form id="deliverServices" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{($data['sfi_id'] ?? 0) > 0 ? route('edit.services.first.info',$data['sfi_id']) : route('create.services.deliver')}}">
                {{csrf_field()}}
                <div class="form-group required">
                    <label class="customLabel" for="slug">Adı</label>
                    <input class="formControl" value="{{$data['sfi\_name'] ?? ''}}" name="deliver_name" id="slug" type="text" placeholder="Adı" required="">
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="slug">Başlıq adı</label>
                    <input class="formControl" value="{{$data['sfi_name'] ?? ''}}" name="header_name" id="slug" type="text" placeholder="Başlıq adı" required="">
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="slug">Məlumat adı</label>
                    <input class="formControl" value="{{$data['sfi_name'] ?? ''}}" name="info_name" id="slug" type="text" placeholder="Məlumat adı" required="">
                </div>
                <div class="form-group">
                    <label class="customLabel" for="title">Qısa məzmun</label>
                    <input class="formControl" value="{{$data['sfi_short_info'] ?? ''}}" name="short_info" id="title" type="text" placeholder="Qısa məzmun" required="">
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="slug">Şəkil</label>
                    <br>
                    <label for="deliverImgUpload" class="quickBtn">Əlavə edin</label>
                    <input id="deliverImgUpload" name="info_img" style="visibility:hidden;" value="{{($data['img'] ?? '') == '' ? '' : asset('storage/img/'.$data['img'])}}" type="file">
                    <br>
                    <img style="display:  {{($data['img'] ?? '') == '' ? 'none' : 'block'}};max-width: 180px;" id="previewImg" src="{{($data['img'] ?? '') == '' ? '' : asset('storage/img/'.$data['img'])}}" alt="your image" />
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
            $('#deliverImgUpload').on('change',function (){
                readURL(this);
            })

            $('.edit-blog').on('click',function (e){
                e.preventDefault();
                e.stopPropagation();

                $('#deliverServices').append('<input type="hidden" name="info_id" value="{{$data['id'] ?? 0}}">');
                $('#deliverServices').append('<input type="hidden" name="serviceId" value="{{$servicesId ?? 0}}">');
                $('#deliverServices').append('<input type="hidden" name="info_img" value="{{$servicesId ?? 0}}">');
                $('#deliverServices').get(0).submit();
            });
        })
    </script>
@endsection
