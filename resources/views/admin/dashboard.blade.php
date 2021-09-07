@extends('admin.master')
@section('content')
    <div class="container-lg">
        <div class="page_head">
            <div class="page_head--header page_head--header_after">
                Dashboard
            </div>
            <div class="page_head--description">
                Blogların listi
            </div>
            <hr/>

        </div>
        <div class="page_content">
            <div class="table-responsive">
                <table class="table dataTable table-borderless">
                    <thead>
                    <tr>
                        <th>Blogun adı</th>
                        <th>Status</th>
                        <th class="no-sort">Dillər</th>
                        <th class="no-sort" style="width: 30px;">Silmək</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>

                            <td>{{$blog->name_az ?? ''}}</td>
                            <td>{{($blog->name_az ?? 0) == 1 ? 'Bağlı' : 'Açıq'}} </td>
                            <td>
                                <div class="buttonGroup buttonGroup--table">
                                    <a href="{{route('edit.dashboard.blogs','az')}}" class="customBtn applyBtn applyBtn-white applyBtn-squared_lang" data-original-title="Operations">
                                        az
                                    </a>
                                    <a href="{{route('edit.dashboard.blogs','en')}}" class="customBtn applyBtn applyBtn-white applyBtn-squared_lang" data-original-title="Operations">
                                        en
                                    </a>
                                </div>
                            </td>
                            <td>
                                <button class="customBtn applyBtn applyBtn-trash_lang applyBtn-trash" aria-label="silmek buttonu">
                                    <i class="xin-icon xin-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
