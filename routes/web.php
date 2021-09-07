<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/index');
})->name('index');

Route::get('/contact', [\App\Http\Controllers\ContactController::class,'contactDashboardPage'])->name('contact');
Route::get('/about', function () {
    return view('layouts/about');
})->name('about');

Route::get('/service', function () {
    return view('layouts/service');
})->name('service');

Route::get('/case_studies', function () {
    return view('layouts/case_studies');
})->name('case_studies');

Route::get('/blog', function () {
    return view('layouts/blog');
})->name('blog');

Route::get('/careers', function () {
    return view('layouts/careers');
})->name('careers');

Route::get('/desing_development', function () {
    return view('layouts/desing_development');
})->name('desing_development');

Route::get('/hardwareDistribution', function () {
    return view('layouts/hardwareDistribution');
})->name('hardwareDistribution');

Route::get('/serviceItemInner', function () {
    return view('layouts/serviceItemInner');
})->name('serviceItemInner');

Route::get('/blogItemInner', function () {
    return view('layouts/blogItemInner');
})->name('blogItemInner');

Route::get('/privacyPolicy', function () {
    return view('layouts/privacyPolicy');
})->name('privacyPolicy');

Route::get('/siteMap', function () {
    return view('layouts/siteMap');
})->name('siteMap');

//Admin Panel

Route::post('/login', [App\Http\Controllers\LoginController::class,'handleLogin'])->name('login.handle')->middleware('guest');
Route::get('/logout', [App\Http\Controllers\LoginController::class,'handleLogout'])->name('logout.handle');
Route::get('/coco', function () {
    return view('admin/auth/login');
})->name('login');

Route::group(['middleware' => 'auth:web'],function (){
    Route::get('/coco/index', function () {
        return view('admin/index');
    })->name('adminIndex');

    Route::get('/coco/contact', [\App\Http\Controllers\ContactController::class,'contactPage'])->name('contactPage');
    Route::post('/coco/contact-info', [\App\Http\Controllers\ContactController::class,'saveContact'])->name('save.contact');
    Route::get('/coco/dashboard', [\App\Http\Controllers\DashboardController::class,'dashboardPage'])->name('dashboardPage');
});

