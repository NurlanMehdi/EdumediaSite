@extends('admin.master')
@section('content')
    <div class="container-lg">
        <div class="page_head">
            <div class="page_head--header page_head--header_after">
                İlkin məlumatlar
            </div>
            <hr/>

            {{$errors->first()}}
        </div>
        <div class="page_content">
            <form id="firstİnfoServices" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" action="{{($data->sfi_id ?? 0) > 0 ? route('edit.services.first.info',$data->sfi_id) : route('create.services.first.info')}}">
                {{csrf_field()}}
                <div class="form-group required">
                    <label class="customLabel" for="slug">Başlıq</label>
                    <input class="formControl" value="{{$data->sfi_name ?? ''}}" name="first_info_name" id="slug" type="text" placeholder="Başlıq" required="">
                </div>
                <div class="form-group">
                    <label class="customLabel" for="title">Qısa məzmun</label>
                    <input class="formControl" value="{{$data->sfi_short_info ?? ''}}" name="short_info" id="title" type="text" placeholder="Qısa məzmun" required="">
                </div>

                <div class="form-group required">
                    <label class="customLabel" for="cateqory_language">Dil</label>
                    <select class="customSelect" name="lang" id="cateqory_language" required="" title="Dil" >
                        <option value="az" {{($data->key ?? '') == 'az' ? 'selected' : ''}}>Azərbaycanca</option>
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
            $('.edit-blog').on('click',function (e){
                e.preventDefault();
                e.stopPropagation();

                $('#firstİnfoServices').append('<input type="hidden" name="info_id" value="{{$data->id ?? 0}}">');
                $('#firstİnfoServices').append('<input type="hidden" name="serviceId" value="{{$servicesId ?? 0}}">');
                $('#firstİnfoServices').get(0).submit();
            });
        })
    </script>
@endsection
