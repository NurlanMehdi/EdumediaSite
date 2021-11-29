<?php

namespace App\Http\Controllers;

use App\Models\AboutAndCareers;
use Illuminate\Http\Request;

class AboutCareersController extends Controller
{
    public function aboutAndCareers()
    {
        $data = $this->aboutAndCareersGetData();

        return view('admin/aboutAndCareers',['data'=>$data]);
    }

    public static function aboutAndCareersGetData()
    {
        $data = AboutAndCareers::get();
        $arr = [];
        foreach ($data as $val)
        {
            $arr[] = $val['string_id'];
            $arr[$val['string_id']] = $val;

        }

        return $arr;
    }

    public function editAboutOrCareers()
    {
        $validator = validator(request()->all(),[
            'status' => 'nullable|string',
            'lang' => 'required|string',
            'string_id' => 'required|string',
            'button_name' => 'required|string',
            'short_info' => 'required|string'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else {
            $input = $this->fileUpload(\request());
            $blog = AboutAndCareers::where('id', request()->get('blogId'));
            $blog->update([
                'status' => request()->get('status'),
                'string_id' => request()->get('string_id'),
                'short_info' => request()->get('short_info'),
                'button_name' => request()->get('button_name'),
                'key' => request()->get('lang'),
                'img' => $input['info_img']
            ]);
        }
        return view('admin/index');
    }

    public function createAboutOrCareers()
    {
        $validator = validator(request()->all(),[
            'status' => 'nullable|string',
            'lang' => 'required|string',
            'string_id' => 'required|string',
            'button_name' => 'required|string',
            'short_info' => 'required|string'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $input = $this->fileUpload(\request());
            $blog = new AboutAndCareers();
            $blog->status = request()->get('status');
            $blog->string_id = request()->get('string_id');
            $blog->short_info = request()->get('short_info');
            $blog->button_name = request()->get('button_name');
            $blog->key = request()->get('lang');
            $blog->img = $input['info_img'];
            $blog->save();
        }
        return view('admin/index');
    }

    public function fileUpload($request)
    {
        $input = $request->all();
        if ($request->hasFile('info_img'))
        {


            $destination_path = 'img';
            $image = $request->file('info_img');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('info_img')->storeAs($destination_path,$image_name);
            $input['info_img'] = $image_name;
        }
        return $input;
    }

}
