<?php

use App\Http\Controllers\AboutCareersController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StudiesPageController;
use App\Models\Dashboard;
use App\Models\Post;
use App\Models\PostTranslate;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', [DashboardController::class,'publicDashboardPage'])->name('index');
Route::get('/specialty/{key}',[Controller::class,'indexSpecialty'])->name('specialty');
Route::get('/contact', [ContactController::class,'contactDashboardPage'])->name('contact');
Route::get('/about',[AboutController::class,'indexAbout'])->name('about');
Route::get('/service', function () {
    $header = \App\Models\PageHeader::where('page_name','=','services')->where('key','=',App::getLocale())->first();

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
    $header = \App\Models\PageHeader::where('page_name','=','case_studies')->where('key','=',App::getLocale())->first();
    $blogItems = \App\Models\DashboardTranslater::where('key','=',App::getLocale())->get();
    return view('layouts/case_studies',['header'=>$header,'blogItems'=>$blogItems]);
})->name('case_studies');

Route::get('/coco/post-selected-from-studies/{id}',[StudiesPageController::class,'studiesFromBlog'])->name('post.selected.from.studies');

Route::get('/blog', function () {
    $header = \App\Models\PageHeader::where('page_name','=','blog')->where('key','=',App::getLocale())->first();
    $blogItems = \App\Models\DashboardTranslater::where('key','=',App::getLocale())->get();
    return view('layouts/blog',['header'=>$header,'blogItems'=>$blogItems]);
})->name('blog');

Route::get('/careers', function () {
    $header = \App\Models\PageHeader::where('page_name','=','careers')->where('key','=',App::getLocale())->first();
    return view('layouts/careers',['header'=>$header]);
})->name('careers');

Route::get('/design_development/{id}', [\App\Http\Controllers\Controller::class,'servicePage'])->name('servicePages');

Route::get('/serviceItemInner', function () {
    $posts = Post::join('post_translate','post_translate.item_id','=','post_items.id')
        ->select('post_items.id','post_items.status','post_items.img','post_translate.button_name','post_translate.name','post_translate.key','post_translate.header_name')->where('post_translate.key','=',App::getLocale())->get();

    return view('layouts/serviceItemInner',['posts'=>$posts]);
})->name('serviceItemInner');

Route::get('/blogItemInner/{id}/{item_id}',[\App\Http\Controllers\StudiesPageController::class,'BlogItemsData'])->name('blogItemInner');

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

    Route::get('/coco/contact', [ContactController::class,'contactPage'])->name('contactPage');
    Route::post('/coco/contact-info', [ContactController::class,'saveContact'])->name('save.contact');
    Route::get('/coco/dashboard', [DashboardController::class,'dashboardPage'])->name('dashboardPage');
    Route::get('/coco/posts', [DashboardController::class,'cocoPostPage'])->name('cocoPostPage');
    Route::get('/coco/studies', [DashboardController::class,'studiesPage'])->name('cocoStudiesPage');
    Route::get('/coco/about-us', [DashboardController::class,'aboutUsPage'])->name('aboutUsPage');


    Route::get('/coco/blog-create-page/{id}', [DashboardController::class,'createBlogPage'])->name('create.blog.page');
    Route::get('/coco/remove-blog/{id}', [DashboardController::class,'removeBlogPage'])->name('remove.blog.page');
    Route::post('/coco/blog-create/', [DashboardController::class,'createBlog'])->name('create.blog');
    Route::post('/coco/blog-edit/', [DashboardController::class,'editBlog'])->name('edit.blog');
    Route::post('/coco/header-text/', [DashboardController::class,'saveHeaderText'])->name('header.text');
    Route::get('/coco/header-text-show/{key}/{lang}', [DashboardController::class,'headerText'])->name('selected.header.text');
    Route::get('/coco/studies-page', [DashboardController::class,'studiesPage'])->name('new.studies.page');
    Route::post('/coco/studies-create/', [DashboardController::class,'createStudies'])->name('create.studies');
    Route::post('/coco/studies-edit/', [DashboardController::class,'editStudies'])->name('edit.studies');
    Route::get('/coco/edit-studie-page/{id}', [DashboardController::class,'createStudiePage'])->name('edit.studie.page');
    Route::get('/coco/remove-studie/{id}', [DashboardController::class,'removeStudiePage'])->name('remove.studie.page');

    //layihelerin contenti
    Route::get('/coco/content-studie/{id}', [DashboardController::class,'indexStudieContent'])->name('content.studie');
    Route::post('/coco/create-content-studie/{id}', [DashboardController::class,'createStudieContent'])->name('create.studie.content');
    Route::post('/coco/edit-content-studie/{id}', [DashboardController::class,'editStudieContent'])->name('edit.studie.content');

    Route::get('/coco/post-page/{id}', [DashboardController::class,'postPage'])->name('new.post.page');
    Route::post('/coco/post-create/', [DashboardController::class,'createPost'])->name('create.post');
    Route::post('/coco/post-edit/', [DashboardController::class,'editPost'])->name('edit.post');
    Route::get('/coco/remove-post/{id}', [DashboardController::class,'removePostPage'])->name('remove.post.page');

    Route::get('/coco/post-selected-from-blog/{id}',[BlogPageController::class,'postFromBlog'])->name('post.selected.from.blog');

    Route::get('/coco/about-and-careers/',[AboutCareersController::class,'aboutAndCareers'])->name('about.and.careers');
    Route::post('/coco/create-about-careers/', [AboutCareersController::class,'createAboutOrCareers'])->name('create.about.careers');
    Route::post('/coco/edit-about-careers/', [AboutCareersController::class,'editAboutOrCareers'])->name('edit.about.careers');

    Route::get('/coco/service-content/{id}', [ServicesController::class,'serviceContent'])->name('services.content');
    Route::get('/coco/first-info/{id}/{serviceId}', [ServicesController::class,'firstInfoPage'])->name('service.first.info');
    Route::post('/coco/first-info-save/', [ServicesController::class,'createServicesFirstInfo'])->name('create.services.first.info');

    Route::get('/coco/remove-post/{table}/{id}', [ServicesController::class,'deleteRowFromDatabase'])->name('remove.info');
    Route::post('/coco/edit-service-info/{id}', [ServicesController::class,'editServiceInfo'])->name('edit.services.first.info');

    Route::get('/coco/service-deliver/{id}/{serviceId}', [ServicesController::class,'serviceDeliverPage'])->name('service.deliver');
    Route::post('/coco/deliver-save/', [ServicesController::class,'createServicesDeliver'])->name('create.services.deliver');
});

Route::post('/login', [LoginController::class,'handleLogin'])->name('login.handle')->middleware('guest');
Route::get('/logout', [LoginController::class,'handleLogout'])->name('logout.handle');
Route::view('/coco', '/admin/auth/login')->name('login')->middleware('guest');

Route::get('/lang/{locale}',[
    LocalizationController::class,
    'index'
])->name('changeLang');

//MAIL

Route::post('/mail',[Controller::class,'mail'])->name('mail');

