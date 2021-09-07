<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $blogs = Dashboard::get();
        return view('admin/dashboard',['blogs'=>$blogs]);
    }
}
