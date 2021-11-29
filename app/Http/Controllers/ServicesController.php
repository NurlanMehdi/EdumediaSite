<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ServicesController extends Controller
{
    public function getServiceData($id = 0)
    {
        if($id > 0){
            $blogs = DB::table('dashboard_items')->leftJoin('dashboard_translate','dashboard_translate.item_id','=','dashboard_items.id')
                ->leftJoin('services_first_info','dashboard_translate.item_id','=','services_first_info.services_id')
                ->select('services_first_info.id as sfi_id','services_first_info.name as sfi_name','services_first_info.short_info as sfi_short_info','dashboard_items.id','dashboard_items.url','dashboard_items.img','dashboard_items.status','dashboard_translate.button_name','dashboard_translate.names','dashboard_translate.blog_button_other','dashboard_translate.key','dashboard_translate.blog_name','dashboard_translate.short_info')
                ->where('dashboard_translate.key','=',App::getLocale())
                ->where('dashboard_items.id','=',$id)
                ->get();
        }else{
            $blogs = DB::table('dashboard_items')->leftJoin('dashboard_translate','dashboard_translate.item_id','=','dashboard_items.id')
                ->leftJoin('services_first_info','dashboard_translate.item_id','=','services_first_info.services_id')
                ->select('services_first_info.id as sfi_id','services_first_info.name as sfi_name','services_first_info.short_info as sfi_short_info','dashboard_items.id','dashboard_items.url','dashboard_items.img','dashboard_items.status','dashboard_translate.button_name','dashboard_translate.names','dashboard_translate.blog_button_other','dashboard_translate.key','dashboard_translate.blog_name','dashboard_translate.short_info')
                ->where('dashboard_translate.key','=',App::getLocale())
                ->get();
        }
        return $blogs;
    }
    public function serviceContent($id)
    {
        $data = $this->getServiceData($id);

        $deliverData = DB::table('deliver_item')
            ->leftJoin('deliver_translate','deliver_item.id','=','deliver_translate.item_id')
            ->select('deliver_item.id','deliver_item.img','deliver_translate.name','deliver_translate.header_name','deliver_translate.info_name','deliver_translate.short_info')
            ->where('deliver_item.service_id','=',$id)
            ->where('deliver_translate.key','=',App::getLocale())
            ->get();

        foreach ($data as $item)
        {
            if ($item->id == $id){
                if ($item->url != 'Hardwaredistribution') {
                    return view('admin/design_development',['data'=>$item,'allData'=>$data,'deliverData'=>$deliverData,'serviceId'=>$id]);
                }else{
                    return view('admin/hardwareDistribution',['data'=>$item,'allData'=>$data,'serviceId'=>$id]);
                }
            }
        }
    }

    public function deleteRowFromDatabase($table,$id)
    {
        DB::table($table)->where('id','=',$id)->delete();
        return Redirect::back();
    }

    public function editServiceInfo($id)
    {
        $validator = validator(request()->all(),[
            'first_info_name' => 'nullable|string',
            'short_info' => 'nullable|string',
            'lang' => 'required|string',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            DB::table('services_first_info')->where('id',$id)->update(array('name'=>request()->get('first_info_name'),'short_info'=>request()->get('short_info'),'key'=>request()->get('lang')));
        }
        $serviceId = DB::table('services_first_info')->select('services_id')->where('id',$id)->get();

        return Redirect::route('services.content',$serviceId[0]->services_id);
    }

    public function firstInfoPage($id = 0,$serviceId=0)
    {
        $data = [];
        if ($id > 0){
            $seviceData = $this->getServiceData($serviceId);

            foreach ($seviceData as $val)
            {
                if($val->{'sfi_id'} == (int)$id)
                {
                    $data = $val;
                }
            }
        }
        return view('admin/services/firstInfoServices',['data'=>$data,'servicesId'=>$serviceId]);
    }

    public function serviceDeliverPage($id = 0,$serviceId=0)
    {
        $data = [];
        if ($id > 0){
            $seviceData = $this->getServiceData($serviceId);

            foreach ($seviceData as $val)
            {
                if($val['sfi_id'] == $id)
                {
                    $data = $val;
                }
            }
        }
        return view('admin/services/serviceDeliver',['data'=>$data,'servicesId'=>$serviceId]);
    }

    public function createServicesFirstInfo()
    {
        $validator = validator(request()->all(),[
            'first_info_name' => 'nullable|string',
            'short_info' => 'nullable|string',
            'lang' => 'required|string',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            DB::table('services_first_info')->insert([
                'short_info' => request()->get('short_info'),
                'name' => request()->get('first_info_name'),
                'services_id' => request()->get('serviceId'),
                'key' => request()->get('lang')
            ]);
            return $this->serviceContent(request()->get('serviceId'));
        }
    }

    public function createServicesDeliver()
    {
        $validator = validator(request()->all(), [
            'services_id' => request()->get('serviceId'),
            'deliver_name' => 'required|string',
            'header_name' => 'required|string',
            'info_name' => 'required|string',
            'short_info' => 'required|string',
            'lang' => 'required|string'
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $input = $this->fileUpload(\request());
            $deliverItem = DB::table('deliver_item')->insertGetId([
                'img' => $input['info_img'],
                'service_id' => request()->get('serviceId')
            ]);

            $deliverItem = DB::table('deliver_translate')->insert([
                'item_id' => $deliverItem,
                'name' => request()->get('deliver_name'),
                'header_name' => request()->get('header_name'),
                'info_name' => request()->get('info_name'),
                'short_info' => request()->get('short_info'),
                'key' => request()->get('lang')
            ]);
            DB::table('deliver_translate')->update(array('name' => request()->get('deliver_name')));

            return $this->serviceContent(request()->get('serviceId'));
        }
    }
}
