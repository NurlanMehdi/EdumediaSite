<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use App\Models\DashboardTranslater;
use App\Models\PageHeader;
use App\Models\Post;
use App\Models\PostTranslate;
use App\Models\Studies;
use App\Models\StudiesTranslater;
use http\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $blogs = Dashboard::join('dashboard_translate','dashboard_translate.item_id','=','dashboard_items.id')
            ->select('dashboard_items.id','dashboard_items.status','dashboard_items.img','dashboard_translate.button_name','dashboard_translate.names','dashboard_translate.blog_button_other','dashboard_translate.key','dashboard_translate.blog_name','dashboard_translate.short_info')->get();

        $header = PageHeader::where('page_name','=','home')->first();
        return view('admin/dashboard',['blogs'=>$blogs,'header'=>$header]);
    }

    public function cocoPostPage()
    {
        $posts = Post::join('post_translate','post_translate.item_id','=','post_items.id')
            ->select('post_items.id','post_items.status','post_items.img','post_translate.button_name','post_translate.name','post_translate.key','post_translate.header_name')->get();

        $header = PageHeader::where('page_name','=','home')->first();
        return view('admin/cocoPostPage',['header'=>$header,'posts'=>$posts]);
    }

    public function studiesPage()
    {
        $studies = Studies::join('studies_translate','studies_translate.item_id','=','studies_items.id')
            ->select('studies_items.id','studies_items.status','studies_items.img','studies_translate.button_name','studies_translate.name','studies_translate.key','studies_translate.header_name')->get();

        $header = PageHeader::where('page_name','=','home')->first();
        return view('admin/cocoStudiesPage',['header'=>$header,'studies'=>$studies]);
    }


    public function indexStudieContent($id)
    {
        $studieContent = DB::table('studie_content')->where('studie_id','=',$id)->first();
        return view('admin/indexStudieContent',['id'=>$id,'studieContent'=>$studieContent]);
    }

    public function editStudieContent($service_id)
    {
        $validator = validator(request()->all(),[
            'header_text' => 'required|string',
            'first_text' => 'string|nullable',
            'header_name' => 'string|nullable',
            'footer_text' => 'string|nullable',
            'lang' => 'required|string',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $input = $this->fileUpload(\request());

            DB::table('studie_content')->where('id','=',$service_id)->update([
                'header_text' => request()->get('header_text'),
                'first_text' => request()->get('first_text'),
                'header_name' => request()->get('header_name'),
                'footer_text' => request()->get('footer_text'),
                'img' => $input['info_img'],
                'key' => request()->get('lang'),
            ]);

            return $this->studiesPage();
        }

    }

    public function createStudieContent($id)
    {

        $validator = validator(request()->all(),[
            'header_text' => 'required|string',
            'first_text' => 'string|nullable',
            'header_name' => 'string|nullable',
            'footer_text' => 'string|nullable',
            'lang' => 'required|string',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $input = $this->fileUpload(\request());

            DB::table('studie_content')->insert([
                'header_text' => request()->get('header_text'),
                'first_text' => request()->get('first_text'),
                'header_name' => request()->get('header_name'),
                'footer_text' => request()->get('footer_text'),
                'img' => $input['info_img'],
                'key' => request()->get('lang'),
                'studie_id' => $id,
            ]);

            return $this->studiesPage();
        }
    }


    public function aboutUsPage()
    {

        return view('admin/cocoAboutUs');
    }

    public function publicDashboardPage()
    {
        $blogHeaderName = DashboardTranslater::first();
        $studiesHeaderName = StudiesTranslater::first();
        $postHeaderName = PostTranslate::first();
        $blogs = Dashboard::join('dashboard_translate','dashboard_translate.item_id','=','dashboard_items.id')
            ->select('dashboard_items.id','dashboard_items.status','dashboard_translate.button_name','dashboard_translate.names','dashboard_translate.blog_button_other','dashboard_translate.key','dashboard_translate.blog_name','dashboard_translate.short_info')
            ->where('key','=',App::getLocale())
            ->get();

        $studies = Studies::join('studies_translate','studies_translate.item_id','=','studies_items.id')
            ->select('studies_items.id','studies_items.status','studies_items.img','studies_translate.button_name','studies_translate.name','studies_translate.other_info','studies_translate.key','studies_translate.header_name')
            ->where('key','=',App::getLocale())
            ->get();

        $posts = Post::join('post_translate','post_translate.item_id','=','post_items.id')
            ->select('post_items.id','post_items.created_at','post_items.status','post_items.img','post_translate.button_name','post_translate.name','post_translate.key','post_translate.header_name')
            ->where('key','=',App::getLocale())
            ->paginate(4);

        $header = PageHeader::where('page_name','=','home')->first();
        return view('layouts/index',['blogs'=>$blogs,'blogHeaderName'=>$blogHeaderName,'header'=>$header,'studies'=>$studies,'posts'=>$posts,'postHeaderName'=>$postHeaderName,'studiesHeaderName'=>$studiesHeaderName]);
    }

    public function createBlogPage($id)
    {
        $data = [];
        if ($id > 0){
            $data = Dashboard::join('dashboard_translate','dashboard_translate.item_id','=','dashboard_items.id')
                ->select('dashboard_items.id','dashboard_items.status','dashboard_items.img','dashboard_translate.button_name','dashboard_translate.names','dashboard_translate.blog_button_other','dashboard_translate.key','dashboard_translate.blog_name','dashboard_translate.short_info')->where('dashboard_items.id','=',$id)->first();
        }else{
            $data = [];
        }
        return view('admin/blogEdit',['data'=>$data]);
    }

    public function createStudiePage($id)
    {
        $data = [];
        if ($id > 0){
            $data = Studies::join('studies_translate','studies_translate.item_id','=','studies_items.id')
                ->select('studies_items.id','studies_items.status','studies_items.img','studies_translate.button_name','studies_translate.name','studies_translate.key','studies_translate.header_name','studies_translate.other_info')->where('studies_items.id','=',$id)->first();
        }else{
            $data = [];
        }
        $blogs = DashboardTranslater::get();
        return view('admin/studiesPage',['data'=>$data,'blogs'=>$blogs]);
    }

    public function removeBlogPage($id)
    {
        $blog = Dashboard::where('id',$id)->delete();
        $blog_translate = DashboardTranslater::whereIn('item_id',[$id])->delete();
        return $this->dashboardPage();
    }

    public function removeStudiePage($id)
    {
        $blog = Studies::where('id',$id)->delete();
        $blog_translate = StudiesTranslater::whereIn('item_id',[$id])->delete();
        return $this->dashboardPage();
    }

    public function editBlog()
    {
        $validator = validator(request()->all(),[
            'status' => 'required|string',
            'blog_name' => 'required|string',
            'lang' => 'required|string',
            'names' => 'required|string',
            'button_name' => 'required|string',
            'blog_button_other' => 'required|string',
            'short_info' => 'nullable|string',
            'blogId' => 'required|integer'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $input = $this->fileUpload(\request());
            $blog = Dashboard::where('id',request()->get('blogId'));
            $blog->update([
                'status'=> request()->get('status'),
                'img' => $input['info_img'],
                'url' => $this->createUrl(request()->get('blog_name')),
            ]);

            $blog_translate = DashboardTranslater::where('item_id',request()->get('blogId'));
            $blog_translate->update([
                'key'=> request()->get('lang'),
                'blog_name'=> request()->get('blog_name'),
                'names'=> request()->get('names'),
                'short_info'=> request()->get('short_info'),
            ]);

            DB::table('dashboard_translate')->update(array('names'=>request()->get('names'),'button_name'=>request()->get('button_name'),'blog_button_other'=>request()->get('blog_button_other')));
        }

        return $this->dashboardPage();
    }

    public function createBlog()
    {
        $validator = validator(request()->all(),[
            'status' => 'required|string',
            'blog_name' => 'required|string',
            'lang' => 'required|string',
            'names' => 'nullable|string',
            'button_name' => 'nullable|string',
            'blog_button_other' => 'nullable|string',
            'short_info' => 'nullable|string',
            'blogId' => 'required|integer'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $input = $this->fileUpload(\request());
            $blog = new Dashboard();
            $blog->status = request()->get('status');
            $blog->url = $this->createUrl(request()->get('blog_name'));
            $blog->img = $input['info_img'];
            $blog->save();

            $blogtranslate = new DashboardTranslater();
            $blogtranslate->item_id = $blog->id;
            $blogtranslate->key = request()->get('lang');
            $blogtranslate->blog_name = request()->get('blog_name');
            $blogtranslate->short_info = request()->get('short_info');
            $blogtranslate->save();
            DB::table('dashboard_translate')->update(array('names'=>request()->get('names'),'blog_button_other'=>request()->get('blog_button_other'),'button_name'=>request()->get('button_name')));
        }

        return $this->dashboardPage();
    }

    public function createUrl($string)
    {

        $word = explode(' ', $string);
        $url = '';
        foreach ($word as $val) {
            $url = $url . $val;
        }


        if ($string == 'Təlim və konsultasiya'){
            $url = 'Coachingandconsulting';
        }elseif ($string == 'Avadanlıq təminatı'){
            $url = 'Hardwaredistribution';
        }elseif($string == 'Təhsil məzmunu'){
            $url = 'E-Contentcreation';
        }else{
            $url = str_replace("&", "",$url);
        }
        return $url;

    }

    public function editStudies()
    {
        $validator = validator(request()->all(),[
            'status' => 'required|string',
            'names' => 'required|string',
            'lang' => 'required|string',
            'header_name' => 'required|string',
            'button_name' => 'required|string',
            'studiesId' => 'required|integer'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else {
            $input = $this->fileUpload(\request());
            $blog = Studies::where('id', request()->get('studiesId'));
            $blog->update([
                'status' => request()->get('status'),
                'blog_id' => request()->get('blog_id'),
                'img' => $input['info_img'],
            ]);

            $blog_translate = StudiesTranslater::where('item_id', request()->get('studiesId'));
            $blog_translate->update([
                'key' => request()->get('lang'),
                'name' => request()->get('names'),
                'header_name' => request()->get('header_name'),
                'other_info' => request()->get('other_info'),
                'button_name' => request()->get('button_name'),
            ]);

            DB::table('studies_translate')->update(array('name'=>request()->get('names'),'button_name'=>request()->get('button_name')));
        }

        return $this->studiesPage();
    }

    public function createStudies()
    {
        $validator = validator(request()->all(),[
            'status' => 'required|string',
            'names' => 'required|string',
            'lang' => 'required|string',
            'header_name' => 'required|string',
            'button_name' => 'required|string'
        ]);


        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $input = $this->fileUpload(\request());
            $blog = new Studies();
            $blog->status = request()->get('status');
            $blog->blog_id = request()->get('blog_id');

            $blog->img = $input['info_img'];
            $blog->save();

            $blogtranslate = new StudiesTranslater();
            $blogtranslate->item_id = $blog->id;
            $blogtranslate->key = request()->get('lang');
            $blogtranslate->name = request()->get('names');
            $blogtranslate->header_name = request()->get('header_name');
            $blogtranslate->other_info = request()->get('other_info');
            $blogtranslate->button_name = request()->get('button_name');
            $blogtranslate->save();
            DB::table('studies_translate')->update(array('name'=>request()->get('names'),'button_name'=>request()->get('button_name')));

        }

        return $this->studiesPage();
    }

    public function saveHeaderText()
    {

        $validator = validator(request()->all(),[
            'page_name' => 'required|string',
            'header_text' => 'required|string',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            if (request()->get('headerId') > 0){
                $header = PageHeader::where('id',request()->get('headerId'));
                $header->update([
                    'key'=> 'az',
                    'page_name'=> request()->get('page_name'),
                    'header_text'=> request()->get('header_text'),
                ]);
            }else{
                $header = new PageHeader();
                $header->key = 'az';
                $header->page_name = request()->get('page_name');
                $header->header_text = request()->get('header_text');
                $header->save();
            }
        }
        return $this->dashboardPage();
    }

    public function headerText($key)
    {
        $data = [];

        if ($key != ''){
            $data = PageHeader::where('page_name','=',$key)->first();
        }else{
            $data = [];
        }

        return response()->json(['data'=>$data]);
    }

    public function postPage($id = 0)
    {
        $data = [];
        if ($id > 0){
            $data = Post::join('post_translate','post_translate.item_id','=','post_items.id')
                ->select('post_items.id','post_items.status','post_items.img','post_translate.button_name','post_translate.name','post_translate.key','post_translate.header_name','post_translate.post_info')->where('post_items.id','=',$id)->first();
        }else{
            $data = [];
        }

        $blogs = DashboardTranslater::get();
        return view('admin/postPage',['data'=>$data,'blogs'=>$blogs]);
    }

    public function createPost()
    {
        $validator = validator(request()->all(),[
            'status' => 'nullable|string',
            'names' => 'required|string',
            'lang' => 'required|string',
            'header_name' => 'required|string',
            'button_name' => 'required|string',
            'post_info' => 'required|string',
            'blog_id' => 'required|integer'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $input = $this->fileUpload(\request());
            $blog = new Post();
            $blog->status = request()->get('status');
            $blog->img = $input['info_img'];
            $blog->blog_id = $input['blog_id'];
            $blog->created_at = date("Y-m-d H:i:s",time());
            $blog->save();

            $blogtranslate = new PostTranslate();
            $blogtranslate->item_id = $blog->id;
            $blogtranslate->key = request()->get('lang');
            $blogtranslate->name = request()->get('names');
            $blogtranslate->header_name = request()->get('header_name');
            $blogtranslate->post_info = request()->get('post_info');
            $blogtranslate->button_name = request()->get('button_name');
            $blogtranslate->save();
            DB::table('post_translate')->update(array('name'=>request()->get('names'),'button_name'=>request()->get('button_name')));

        }

        return $this->cocoPostPage();
    }

    public function getServiceData()
    {
        $blogs = \App\Models\Dashboard::leftJoin('dashboard_translate','dashboard_translate.item_id','=','dashboard_items.id')
            ->leftJoin('services_first_info','dashboard_translate.item_id','=','services_first_info.services_id')
            ->select('dashboard_items.id','services_first_info.id as sfi_id','services_first_info.name as sfi_name','services_first_info.short_info as sfi_short_info','dashboard_items.url','dashboard_items.img','dashboard_items.status','dashboard_translate.button_name','dashboard_translate.names','dashboard_translate.blog_button_other','dashboard_translate.key','dashboard_translate.blog_name','dashboard_translate.short_info')
            ->where('dashboard_translate.key','=',App::getLocale())
            ->get();

        return $blogs;
    }

    public function editPost()
    {
        $validator = validator(request()->all(),[
            'status' => 'nullable|string',
            'names' => 'required|string',
            'lang' => 'required|string',
            'header_name' => 'required|string',
            'button_name' => 'required|string',
            'post_info' => 'required|string',
            'postId' => 'required|integer',
            'blog_id' => 'required|integer'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else {
            $input = $this->fileUpload(\request());
            $blog = Post::where('id', request()->get('postId'));
            $blog->update([
                'status' => request()->get('status'),
                'blog_id' => request()->get('blog_id'),
                'img' => $input['info_img'],
                'created_at' => date("Y-m-d H:i:s",time())
            ]);

            $blog_translate = PostTranslate::where('item_id', request()->get('studiesId'));
            $blog_translate->update([
                'key' => request()->get('lang'),
                'name' => request()->get('names'),
                'header_name' => request()->get('header_name'),
                'post_info' => request()->get('post_info'),
                'button_name' => request()->get('button_name'),
            ]);

            DB::table('post_translate')->update(array('name'=>request()->get('names'),'button_name'=>request()->get('button_name')));
        }

        return $this->postPage();
    }

    public function removePostPage($id)
    {
        $blog = Post::where('id',$id)->delete();
        $blog_translate = PostTranslate::whereIn('item_id',[$id])->delete();
        return $this->dashboardPage();
    }
}
