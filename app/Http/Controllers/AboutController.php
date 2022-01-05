<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function indexAbout()
    {
        $serviceInfo = DB::table('services_first_info')->leftJoin('dashboard_items','dashboard_items.id','=','services_first_info.services_id')->leftJoin('dashboard_translate','dashboard_translate.item_id','=','dashboard_items.id')->where('dashboard_translate.key','=',App::getLocale())->where('services_first_info.key','=',App::getLocale())->get();

        $serviceArray = [];
        $serviceId = [];
        foreach ($serviceInfo as $val) {
            if (!isset($serviceArray[$val->blog_name])) {
                $serviceId[$val->blog_name][] = $val->id;
                $serviceArray[$val->blog_name][] = $val->name;
            } elseif (isset($serviceArray[$val->blog_name]) && $serviceArray[$val->blog_name] != $val->name) {
                $serviceId[$val->blog_name][] = $val->id;
                $serviceArray[$val->blog_name][] = $val->name;
            }
        }

        $header = \App\Models\PageHeader::where('page_name','=','about_us')->where('key','=',App::getLocale())->first();
        return view('layouts/about',['header'=>$header,'serviceInfo'=>$serviceArray,'serviceId'=>$serviceId]);
    }
}
