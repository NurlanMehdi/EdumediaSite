<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function fileUpload($request)
    {
        $input = $request->all();
        if ($request->hasFile('info_img')) {
            //$image = Storage::url($request->file('info_img')->store('uploads/img'));
            $destination_path = 'img';
            $image = $request->file('info_img');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('info_img')->storeAs($destination_path, $image_name);
            $input['info_img'] = $image_name;
        }
        return $input;
    }

    public function indexSpecialty($key)
    {
        return view('layouts/specialty',['key'=>$key]);
    }

    public function servicePage($id)
    {

        $serConroller = new ServicesController();
        $data = $serConroller->getServiceData($id);

        $deliverData = DB::table('deliver_item')
            ->leftJoin('deliver_translate', 'deliver_item.id', '=', 'deliver_translate.item_id')
            ->select('deliver_item.id', 'deliver_item.img', 'deliver_translate.name', 'deliver_translate.header_name', 'deliver_translate.info_name', 'deliver_translate.short_info')
            ->where('deliver_item.service_id', '=', $id)
            ->where('deliver_translate.key', '=', App::getLocale())
            ->get();
        $deliverArr = [];
        $serviceInfo = DB::table('services_first_info')->leftJoin('dashboard_items','dashboard_items.id','=','services_first_info.services_id')->leftJoin('dashboard_translate','dashboard_translate.item_id','=','dashboard_items.id')->where('dashboard_translate.key','=',App::getLocale())->where('services_first_info.key','=',App::getLocale())->where('services_id', '!=', $id)->get();


        $serviceArray = [];
        $serviceId = [];
        foreach ($serviceInfo as $val) {
            if (!isset($serviceArray[$val->blog_name])) {
                $serviceId[$val->blog_name][] = $val->services_id;
                $serviceArray[$val->blog_name][] = $val->name;

            } elseif (isset($serviceArray[$val->blog_name]) && $serviceArray[$val->blog_name] != $val->name) {
                $serviceId[$val->blog_name][] = $val->services_id;
                $serviceArray[$val->blog_name][] = $val->name;

            }
        }

        foreach ($data as $item) {
            if ($item->id == $id) {
                if ($item->url != 'Hardwaredistribution') {
                    return view('layouts/desing_development', ['data' => $item, 'allData' => $data, 'deliverArr' => $deliverArr, 'serviceInfo' => $serviceArray,'serviceId'=>$serviceId]);
                } else {
                    return view('layouts/hardwareDistribution', ['data' => $item, 'allData' => $data, 'serviceInfo' => $serviceArray,'serviceId'=>$serviceId]);
                }
            }
        }
    }

    public function mail(Request $request)
    {
        $body = $request->body;
        $name = $request->name;
        $number = $request->number;
        $email = $request->email;
        $interested = $request->interested;


        Mail::send('mail',['interested'=>$interested,'number'=>$number,'body'=>$body],function ($message) use ($email,$name){
            $message->to($email)->subject($name);
        });
        return redirect()->back();
    }
}
