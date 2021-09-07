<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact();
        $contact->mail='info@edumedia.az';
        $contact->facebook='https://www.facebook.com/edumedia.azerbaijan';
        $contact->instagram='https://www.instagram.com/edumediaaz/';
        $contact->linkedin='https://www.linkedin.com/company/edumedia-azerbaijan-llc/mycompany/';
        $contact->phone_number='+994 12 496 90 94';
        $contact->address = '34, Khatai Avenue,Luxen Plaza, Baku,AZ1008, Azerbaijan';

        $contact->save();
    }
}
