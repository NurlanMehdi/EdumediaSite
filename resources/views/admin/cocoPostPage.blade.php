@extends('admin.master')
@section('content')
    <div class="container-lg">
        <div class="page_head">
            <div class="page_head--description">
                Postlar
            </div>
            <div class="quickLinks">
                <a href="{{route('new.post.page',0)}}" class="customBtn quickBtn">
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
                        <th class="no-sort" style="width: 30px;">Silmək</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->name ?? ''}}</td>
                            <td>{{($post->status ?? 0) == 1 ? 'Bağlı' : 'Açıq'}} </td>

                            <td>
                                <a href="{{route('new.post.page',$post->id)}}" class="customBtn applyBtn applyBtn-white">
                                    <i class="xin-icon xin-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('remove.post.page',$post->id)}}" class="customBtn applyBtn applyBtn-trash_lang applyBtn-trash" aria-label="silmek buttonu">
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
 
            $('.save-header-text').on('click',function (e){
                e.preventDefault();
                e.stopPropagation();
                $('#headerText').get(0).submit();
            });
        })
    </script>
@endsection
