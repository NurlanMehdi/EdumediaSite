@extends('admin.master')
@section('content')
    <div class="container-lg">
        <div class="page_head">
            <form id="headerText" class="section_articleInner_body_content--description" method="post" action="{{route('header.text')}}">
                {{csrf_field()}}
                <div class="page_head--header page_head--header_after">
                    Dashboard
                </div>
                <div class="page_head--description">
                    Əsas başlıq
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="cateqory_language">Dil</label>
                    <select class="customSelect" name="lang" id="cateqory_language" required="" title="Dil" >
                        <option value="az" selected>Azərbaycanca</option>
                        <option value="en">İngiliscə</option>
                    </select>
                </div>
                <div class="form-group required">
                    <label class="customLabel" for="page_name">Səhifə</label>
                    <select class="customSelect" name="page_name" id="pagesHeaders" required="" title="Dil" >
                        <option value="home" selected>Home</option>
                        <option value="services">Services</option>
                        <option value="case_studies">Case Studies</option>
                        <option value="about_us">About Us</option>
                        <option value="blog">Blog</option>
                        <option value="careers">Careers</option>
                         <option value="contact">Contact</option>
                    </select>
                </div>
                <div class="form-group required">
                    <input type="hidden" class="headerId" name="headerId" value="{{$header['id'] ?? 0}}">
                    <label class="customLabel" for="title">Başlıq</label>
                    <input class="formControl" name="header_text" value="{{$header['header_text'] ?? ''}}"  id="header_text" type="text" placeholder="Başlıq" required="">
                </div>
                <button type="button" class="customBtn quickBtn save-header-text">
                    Redaktə et
                </button>
            </form>
            <hr/>
        </div>
        <div class="page_head">
            <div class="page_head--description">
                Servis listi
            </div>
            <div class="quickLinks">
                <a href="{{route('create.blog.page',0)}}" class="customBtn quickBtn">
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
                        <th>Servis adı</th>
                        <th>Status</th>
                        <th class="no-sort">Düzəliş</th>
                        <th class="no-sort">Content</th>
                        <th class="no-sort" style="width: 30px;">Silmək</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>

                            <td>{{$blog->blog_name ?? ''}}</td>
                            <td>{{($blog->status ?? 0) == 1 ? 'Bağlı' : 'Açıq'}} </td>

                            <td>
                                <a href="{{route('create.blog.page',$blog->id)}}" class="customBtn applyBtn applyBtn-white">
                                    <i class="xin-icon xin-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('services.content',$blog->id)}}" class="customBtn applyBtn applyBtn-white">
                                    <i class="xin-icon xin-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('remove.blog.page',$blog->id)}}" class="customBtn applyBtn applyBtn-trash_lang applyBtn-trash" aria-label="silmek buttonu">
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
                let url = "{{route('selected.header.text',[':key',':lang'])}}";
                url = url.replace(':key', $(this).val());
                url = url.replace(':lang', $('#cateqory_language').val());


                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function (response) {
                        console.log(response)

                        $('.headerId').val(response.data.id)
                        $('#header_text').val(response.data.header_text)
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
