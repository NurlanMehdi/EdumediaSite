@extends('admin.master')
@section('content')
    <div class="container-lg">
        <div class="page_head">
            <div class="page_head--header page_head--header_after">
                {{$data->blog_name}}
            </div>
            <hr/>
        </div>
        <div class="page_content">
            <form id="editServiceContentPage" class="section_articleInner_body_content--description" enctype="multipart/form-data" method="post" >
                {{csrf_field()}}
                <div class="page_head">
                    <label class="customLabel" for="title">İlkin məlumatlar</label>
                    <div class="quickLinks">
                        <a href="{{route('service.first.info',[0,$serviceId])}}" class="customBtn quickBtn">
                            Əlavə et
                        </a>
                    </div>
                </div>
                <div class="page_content">
                    <div class="table-responsive">
                        <table class="table dataTable table-borderless">
                            <thead>
                            <tr>
                                <th>Adı</th>
                                <th class="no-sort">Düzəliş</th>
                                <th class="no-sort" style="width: 30px;">Silmək</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($allData as $data)
                                @if($data->sfi_id)
                                    <tr>
                                        <td>{{$data->sfi_name ?? ''}}</td>
                                        <td>
                                            <a href="{{route('service.first.info',['id'=>$data->sfi_id,'serviceId'=>$serviceId])}}" class="customBtn applyBtn applyBtn-white">
                                                <i class="xin-icon xin-pencil"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('remove.info',['services_first_info',$data->sfi_id])}}" class="customBtn applyBtn applyBtn-trash_lang applyBtn-trash" aria-label="silmek buttonu">
                                                <i class="xin-icon xin-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="page_head">
                    <hr/>
                </div>
                <div class="page_head">
                    <label class="customLabel" for="title">Deliver</label>
                    <div class="quickLinks">
                        <a href="{{route('service.deliver',[0,$serviceId])}}" class="customBtn quickBtn">
                            Əlavə et
                        </a>
                    </div>
                </div>
                <div class="page_content">
                    <div class="table-responsive">
                        <table class="table dataTable table-borderless">
                            <thead>
                            <tr>
                                <th>Adı</th>
                                <th>Başlıq adı</th>
                                <th>Məlumat adı</th>
                                <th class="no-sort">Düzəliş</th>
                                <th class="no-sort" style="width: 30px;">Silmək</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($deliverData as $data)
                                <tr>

                                    <td>{{$data->name ?? ''}}</td>
                                    <td>{{$data->header_name ?? ''}}</td>
                                    <td>{{$data->info_name ?? ''}}</td>

                                    <td>
                                        <a href="" class="customBtn applyBtn applyBtn-white">
                                            <i class="xin-icon xin-pencil"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" class="customBtn applyBtn applyBtn-trash_lang applyBtn-trash" aria-label="silmek buttonu">
                                            <i class="xin-icon xin-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="page_head">
                    <hr/>
                </div>
                <div class="page_head">
                    <label class="customLabel" for="title">Service info</label>
                    <div class="quickLinks">
                        <a href="" class="customBtn quickBtn">
                            Əlavə et
                        </a>
                    </div>
                </div>
                <div class="page_content">
                    <div class="table-responsive">
                        <table class="table dataTable table-borderless">
                            <thead>
                            <tr>
                                <th>Adı</th>
                                <th class="no-sort">Düzəliş</th>
                                <th class="no-sort" style="width: 30px;">Silmək</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="page_head">
                    <hr/>
                </div>
                <div class="page_head">
                    <label class="customLabel" for="title">Other Services</label>
                    <div class="quickLinks">
                        <a href="" class="customBtn quickBtn">
                            Əlavə et
                        </a>
                    </div>
                </div>
                <div class="page_content">
                    <div class="table-responsive">
                        <table class="table dataTable table-borderless">
                            <thead>
                            <tr>
                                <th>Adı</th>
                                <th class="no-sort">Düzəliş</th>
                                <th class="no-sort" style="width: 30px;">Silmək</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="page_head">
                    <hr/>
                </div>
            </form>
        </div>
    </div>
@stop
@section('js')
    <script>

    </script>
@endsection
