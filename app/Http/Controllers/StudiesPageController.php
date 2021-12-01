<?php

namespace App\Http\Controllers;

use App\Models\Studies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class StudiesPageController extends Controller
{
    public function studiesFromBlog($id)
    {
        if ($id > 0){
            $posts = Studies::join('studies_translate','studies_translate.item_id','=','studies_items.id')
                ->select('studies_items.id','studies_items.status','studies_items.created_at','studies_items.img','studies_translate.button_name','studies_translate.name','studies_translate.key','studies_translate.header_name')
                ->where('blog_id','=',$id)
                ->get();
        }else{
            $posts = Studies::join('studies_translate','studies_translate.item_id','=','studies_items.id')
                ->select('studies_items.id','studies_items.status','studies_items.created_at','studies_items.img','studies_translate.button_name','studies_translate.name','studies_translate.key','studies_translate.header_name')
                ->get();
        }


        return $posts;

    }

    public function getStudiesData()
    {
        $posts = Studies::join('studies_translate','studies_translate.item_id','=','studies_items.id')
            ->join('dashboard_translate','dashboard_translate.item_id','=','studies_items.blog_id')
            ->select('studies_items.id','dashboard_translate.blog_name','studies_items.status','studies_items.created_at','studies_items.img','studies_translate.button_name','studies_translate.name','studies_translate.key','studies_translate.header_name')
            ->where('studies_translate.key','=',App::getLocale())
            ->get();

        return $posts;
    }

    public function BlogItemsData($id)
    {
        $posts = Studies::join('studies_translate','studies_translate.item_id','=','studies_items.id')
            ->select('studies_items.id','studies_items.status','studies_items.created_at','studies_items.img','studies_translate.button_name','studies_translate.name','studies_translate.key','studies_translate.header_name')
            ->where('item_id','=',$id)
            ->first();
  //      echo '<pre>';
        return view('layouts.blogItemInner',['data'=>$posts]);
   //     var_dump($posts);
    }

}
