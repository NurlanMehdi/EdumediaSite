<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function fileUpload($request)
    {
        $input = $request->all();
        if ($request->hasFile('info_img'))
        {
            //$image = Storage::url($request->file('info_img')->store('uploads/img'));
            $destination_path = 'img';
            $image = $request->file('info_img');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('info_img')->storeAs($destination_path,$image_name);
            $input['info_img'] = $image_name;
        }
        return $input;
    }

    public function servicePage($id)
    {

        $serConroller = new ServicesController();
        $data = $serConroller->getServiceData($id);

        $deliverData = DB::table('deliver_item')
            ->leftJoin('deliver_translate','deliver_item.id','=','deliver_translate.item_id')
            ->select('deliver_item.id','deliver_item.img','deliver_translate.name','deliver_translate.header_name','deliver_translate.info_name','deliver_translate.short_info')
            ->where('deliver_item.service_id','=',$id)
            ->where('deliver_translate.key','=',App::getLocale())
            ->get();
        $deliverArr = [];

        foreach ($deliverData as $val)
        {

//            if (!isset($deliverArr['header_name']) || $deliverArr['header_name'] != $val->header_name){
//                $deliverArr['header_name'] = $val->header_name;
//            }
//            $deliverArr['name'][$val->header_name] = ['info_name'=>$val->info_name,'short_info'=>$val->short_info,'img'=>$val->img];

//            $deliverArr  =
//                [
//                    'name' => $val->name,
//                    'header_name'=>$val->header_name,
//                    $val->header_name =>['info_name'=>$val->info_name,'short_info'=>$val->short_info,'img'=>$val->img],
//
//                ];
        }
//        echo '<pre>';
//        var_dump($deliverArr);exit;
        foreach ($data as $item)
        {
            if ($item->id == $id){
                if ($item->url != 'Hardwaredistribution') {
                    return view('layouts/desing_development',['data'=>$item,'allData'=>$data,'deliverArr'=>$deliverArr]);
                }else{
                    return view('layouts/hardwareDistribution',['data'=>$item,'allData'=>$data]);
                }
            }
        }
    }
}
