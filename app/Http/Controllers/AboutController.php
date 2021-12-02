<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function indexAbout()
    {
        $serviceInfo = DB::table('services_first_info')->leftJoin('dashboard_translate','dashboard_translate.id','=','services_first_info.services_id')->where('services_first_info.key','=',App::getLocale())->get();

        $serviceArray = [];
        foreach ($serviceInfo as $val) {
            if (!isset($serviceArray[$val->blog_name])) {
                $serviceArray[$val->blog_name][] = $val->name;
                $serviceArray[$val->blog_name]['id'] = $val->id;
            } elseif (isset($serviceArray[$val->blog_name]) && $serviceArray[$val->blog_name] != $val->name) {
                $serviceArray[$val->blog_name][] = $val->name;
                $serviceArray[$val->blog_name]['id'] = $val->id;
            }

        }

   
        $header = \App\Models\PageHeader::where('page_name','=','about_us')->first();
        return view('layouts/about',['header'=>$header,'serviceInfo'=>$serviceArray]);
    }
}
