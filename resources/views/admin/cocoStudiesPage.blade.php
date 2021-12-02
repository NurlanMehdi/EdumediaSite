@extends('admin.master')
@section('content')
    <div class="container-lg">
        <div class="page_head">
            <div class="page_head--description">
                İşlərimiz
            </div>
            <div class="quickLinks">
                <a href="{{route('edit.studie.page',0)}}" class="customBtn quickBtn">
                    Əlavə et
                </a>
            </div>
            <hr/>

        </div>
        <div class="page_content">
            <div class="table-responsive">
                <table class="table dataTable table-borderless">
                    <thead>
                    <tr>
                        <th>Adı</th>
                        <th>Status</th>
                        <th class="no-sort">Düzəliş</th>
                        <th class="no-sort">Content</th>
                        <th class="no-sort" style="width: 30px;">Silmək</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($studies as $studie)
                        <tr>
                            <td>{{$studie->header_name ?? ''}}</td>
                            <td>{{($studie->status ?? 0) == 1 ? 'Bağlı' : 'Açıq'}} </td>

                            <td>
                                <a href="{{route('edit.studie.page',$studie->id)}}" class="customBtn applyBtn applyBtn-white">
                                    <i class="xin-icon xin-pencil"></i>
                                </a>
                            </td>                            <td>
                                <a href="{{route('content.studie',$studie->id)}}" class="customBtn applyBtn applyBtn-white">
                                    <i class="xin-icon xin-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('remove.studie.page',$studie->id)}}" class="customBtn applyBtn applyBtn-trash_lang applyBtn-trash" aria-label="silmek buttonu">
                                    <i class="xin-icon xin-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script>

        $(document).ready(function (){
            $('#pagesHeaders').on('change',function (){
                $('[name="header_text"]').val('');
                let url = "{{route('selected.header.text',':key')}}";
                url = url.replace(':key', $(this).val());

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function (response) {
                        $('.headerId').val(response.data.id)
                    }
                })
            });
            $('.save-header-text').on('click',function (e){
                e.preventDefault();
                e.stopPropagation();
                $('#headerText').get(0).submit();
            });
        })
    </script>
@endsection
