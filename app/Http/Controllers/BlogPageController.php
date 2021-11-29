<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function postFromBlog($id)
    {
        if ($id > 0){
            $posts = Post::join('post_translate','post_translate.item_id','=','post_items.id')
                ->select('post_items.id','post_items.status','post_items.created_at','post_items.img','post_translate.button_name','post_translate.name','post_translate.key','post_translate.header_name')
                ->where('blog_id','=',$id)
                ->get();
        }else{
            $posts = Post::join('post_translate','post_translate.item_id','=','post_items.id')
                ->select('post_items.id','post_items.status','post_items.created_at','post_items.img','post_translate.button_name','post_translate.name','post_translate.key','post_translate.header_name')
                ->get();
        }


        return $posts;

    }
}
