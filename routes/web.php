<?php

use App\Models\Dashboard;
use App\Models\Post;
use App\Models\PostTranslate;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\DashboardController::class,'publicDashboardPage'])->name('index');

Route::get('/contact', [\App\Http\Controllers\ContactController::class,'contactDashboardPage'])->name('contact');
Route::get('/about', function () {
    $serviceInfo = DB::table('services_first_info')->leftJoin('dashboard_translate','dashboard_translate.id','=','services_first_info.services_id')->where('services_first_info.key','=',App::getLocale())->get();

    $serviceArray = [];
    foreach ($serviceInfo as $val){
        if(!isset($serviceArray[$val->blog_name]))
        {
            $serviceArray[$val->blog_name][] = $val->name;
            $serviceArray['id'][] = $val->id;
        }elseif(isset($serviceArray[$val->blog_name]) && $serviceArray[$val->blog_name] != $val->name){
            $serviceArray[$val->blog_name][] = $val->name;
            $serviceArray['id'][] = $val->id;
        }

    }

    $header = \App\Models\PageHeader::where('page_name','=','about_us')->first();
    return view('layouts/about',['header'=>$header,'serviceInfo'=>$serviceArray]);
})->name('about');

Route::get('/service', function () {
    $header = \App\Models\PageHeader::where('page_name','=','services')->first();

    $blogs = \App\Models\Dashboard::join('dashboard_translate','dashboard_translate.item_id','=','dashboard_items.id')
        ->select('dashboard_items.id','dashboard_items.url','dashboard_items.img','dashboard_items.status','dashboard_translate.button_name','dashboard_translate.names','dashboard_translate.blog_button_other','dashboard_translate.key','dashboard_translate.blog_name','dashboard_translate.short_info')
        ->where('key','=',App::getLocale())
        ->get();

    $posts = Post::join('post_translate','post_translate.item_id','=','post_items.id')
        ->select('post_items.id','post_items.status','post_items.img','post_translate.button_name','post_translate.name','post_translate.key','post_translate.header_name')->get();
    $postHeaderName = PostTranslate::first();

    return view('layouts/service',['header'=>$header,'blogs'=>$blogs,'posts'=>$posts]);
})->name('service');

Route::get('/case_studies', function () {
    $header = \App\Models\PageHeader::where('page_name','=','case_studies')->first();
    $blogItems = \App\Models\DashboardTranslater::get();
    return view('layouts/case_studies',['header'=>$header,'blogItems'=>$blogItems]);
})->name('case_studies');

Route::get('/coco/post-selected-from-studies/{id}',[\App\Http\Controllers\StudiesPageController::class,'studiesFromBlog'])->name('post.selected.from.studies');

Route::get('/blog', function () {
    $header = \App\Models\PageHeader::where('page_name','=','blog')->first();
    $blogItems = \App\Models\DashboardTranslater::get();
    return view('layouts/blog',['header'=>$header,'blogItems'=>$blogItems]);
})->name('blog');

Route::get('/careers', function () {
    $header = \App\Models\PageHeader::where('page_name','=','careers')->first();
    return view('layouts/careers',['header'=>$header]);
})->name('careers');

Route::get('/design_development/{id}', [\App\Http\Controllers\Controller::class,'servicePage'])->name('servicePages');

Route::get('/serviceItemInner', function () {
    $posts = Post::join('post_translate','post_translate.item_id','=','post_items.id')
        ->select('post_items.id','post_items.status','post_items.img','post_translate.button_name','post_translate.name','post_translate.key','post_translate.header_name')->get();

    return view('layouts/serviceItemInner',['posts'=>$posts]);
})->name('serviceItemInner');

Route::get('/blogItemInner/{id}',[\App\Http\Controllers\StudiesPageController::class,'BlogItemsData'])->name('blogItemInner');

Route::get('/privacyPolicy', function () {
    return view('layouts/privacyPolicy');
})->name('privacyPolicy');

Route::get('/siteMap', function () {
    return view('layouts/siteMap');
})->name('siteMap');

//Admin Panel

Route::group(['middleware' => 'auth:web'],function (){
    Route::get('/home', function () {
        return view('admin/index');
    })->name('adminIndex');

    Route::get('/coco/contact', [\App\Http\Controllers\ContactController::class,'contactPage'])->name('contactPage');
    Route::post('/coco/contact-info', [\App\Http\Controllers\ContactController::class,'saveContact'])->name('save.contact');
    Route::get('/coco/dashboard', [\App\Http\Controllers\DashboardController::class,'dashboardPage'])->name('dashboardPage');
    Route::get('/coco/posts', [\App\Http\Controllers\DashboardController::class,'cocoPostPage'])->name('cocoPostPage');
    Route::get('/coco/studies', [\App\Http\Controllers\DashboardController::class,'studiesPage'])->name('cocoStudiesPage');
    Route::get('/coco/about-us', [\App\Http\Controllers\DashboardController::class,'aboutUsPage'])->name('aboutUsPage');


    Route::get('/coco/blog-create-page/{id}', [\App\Http\Controllers\DashboardController::class,'createBlogPage'])->name('create.blog.page');
    Route::get('/coco/remove-blog/{id}', [\App\Http\Controllers\DashboardController::class,'removeBlogPage'])->name('remove.blog.page');
    Route::post('/coco/blog-create/', [\App\Http\Controllers\DashboardController::class,'createBlog'])->name('create.blog');
    Route::post('/coco/blog-edit/', [\App\Http\Controllers\DashboardController::class,'editBlog'])->name('edit.blog');
    Route::post('/coco/header-text/', [\App\Http\Controllers\DashboardController::class,'saveHeaderText'])->name('header.text');
    Route::get('/coco/header-text-show/{key}', [\App\Http\Controllers\DashboardController::class,'headerText'])->name('selected.header.text');
    Route::get('/coco/studies-page', [\App\Http\Controllers\DashboardController::class,'studiesPage'])->name('new.studies.page');
    Route::post('/coco/studies-create/', [\App\Http\Controllers\DashboardController::class,'createStudies'])->name('create.studies');
    Route::post('/coco/studies-edit/', [\App\Http\Controllers\DashboardController::class,'editStudies'])->name('edit.studies');
    Route::get('/coco/edit-studie-page/{id}', [\App\Http\Controllers\DashboardController::class,'createStudiePage'])->name('edit.studie.page');
    Route::get('/coco/remove-studie/{id}', [\App\Http\Controllers\DashboardController::class,'removeStudiePage'])->name('remove.studie.page');

    Route::get('/coco/post-page/{id}', [\App\Http\Controllers\DashboardController::class,'postPage'])->name('new.post.page');
    Route::post('/coco/post-create/', [\App\Http\Controllers\DashboardController::class,'createPost'])->name('create.post');
    Route::post('/coco/post-edit/', [\App\Http\Controllers\DashboardController::class,'editPost'])->name('edit.post');
    Route::get('/coco/remove-post/{id}', [\App\Http\Controllers\DashboardController::class,'removePostPage'])->name('remove.post.page');

    Route::get('/coco/post-selected-from-blog/{id}',[\App\Http\Controllers\BlogPageController::class,'postFromBlog'])->name('post.selected.from.blog');

    Route::get('/coco/about-and-careers/',[\App\Http\Controllers\AboutCareersController::class,'aboutAndCareers'])->name('about.and.careers');
    Route::post('/coco/create-about-careers/', [\App\Http\Controllers\AboutCareersController::class,'createAboutOrCareers'])->name('create.about.careers');
    Route::post('/coco/edit-about-careers/', [\App\Http\Controllers\AboutCareersController::class,'editAboutOrCareers'])->name('edit.about.careers');

    Route::get('/coco/service-content/{id}', [\App\Http\Controllers\ServicesController::class,'serviceContent'])->name('services.content');
    Route::get('/coco/first-info/{id}/{serviceId}', [\App\Http\Controllers\ServicesController::class,'firstInfoPage'])->name('service.first.info');
    Route::post('/coco/first-info-save/', [\App\Http\Controllers\ServicesController::class,'createServicesFirstInfo'])->name('create.services.first.info');

    Route::get('/coco/remove-post/{table}/{id}', [\App\Http\Controllers\ServicesController::class,'deleteRowFromDatabase'])->name('remove.info');
    Route::post('/coco/edit-service-info/{id}', [\App\Http\Controllers\ServicesController::class,'editServiceInfo'])->name('edit.services.first.info');

    Route::get('/coco/service-deliver/{id}/{serviceId}', [\App\Http\Controllers\ServicesController::class,'serviceDeliverPage'])->name('service.deliver');
    Route::post('/coco/deliver-save/', [\App\Http\Controllers\ServicesController::class,'createServicesDeliver'])->name('create.services.deliver');
});

Route::post('/login', [\App\Http\Controllers\LoginController::class,'handleLogin'])->name('login.handle')->middleware('guest');
Route::get('/logout', [\App\Http\Controllers\LoginController::class,'handleLogout'])->name('logout.handle');
Route::view('/coco', '/admin/auth/login')->name('login')->middleware('guest');



