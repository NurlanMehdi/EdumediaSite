<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->username='coco';
        $user->email='coco@gmail.com';
        $user->password = bcrypt('123456');

        $user->save();
    }
}
