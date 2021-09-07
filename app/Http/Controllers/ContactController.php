<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactPage()
    {
        $contact = Contact::first();
        return view('admin/contact',['contact'=>$contact]);
    }

    public function contactDashboardPage()
    {
        $contact = Contact::first();
        return view('layouts/contact',['contact'=>$contact]);
    }

    public function saveContact()
    {
        $validator = validator(request()->all(),[
            'mail' => 'nullable|string',
            'mail_status' => 'nullable|integer',
            'facebook' => 'nullable|string',
            'facebook_status' => 'nullable|integer',
            'instagram' => 'nullable|string',
            'instagram_status' => 'nullable|integer',
            'linkedin' => 'nullable|string',
            'linkedin_status' => 'nullable|integer',
            'phone_number' => 'nullable|string',
            'phone_number_status' => 'nullable|integer',
            'address' => 'nullable|string',
            'address_status' => 'nullable|integer',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }else{
            $contact = Contact::where('id',request()->get('contactId'));
            $contact->update([
                'mail' => request()->get('mail'),
                'mail_status' => request()->get('mail_status'),
                'facebook' => request()->get('facebook'),
                'facebook_status' => request()->get('facebook_status'),
                'instagram' => request()->input('instagram'),
                'instagram_status' => request()->get('instagram_status'),
                'linkedin' => request()->get('linkedin'),
                'linkedin_status' => request()->get('linkedin_status'),
                'phone_number' => request()->get('phone_number'),
                'phone_number_status' => request()->get('phone_number_status'),
                'address' => request()->get('address'),
                'address_status' => request()->get('address_status')
            ]);

            return redirect()->back()->withErrors($validator);
        }
    }
}
