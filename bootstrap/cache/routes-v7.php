<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::omEyzGaD0h2RxVje',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7CgAyedXnE4IdDtc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/case_studies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'case_studies',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/careers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'careers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/serviceItemInner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'serviceItemInner',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/privacyPolicy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacyPolicy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/siteMap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'siteMap',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminIndex',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactPage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/contact-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboardPage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cocoPostPage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/studies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cocoStudiesPage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'aboutUsPage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/blog-create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/blog-edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/header-text' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'header.text',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/studies-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'new.studies.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/studies-create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.studies',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/studies-edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.studies',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/post-create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/post-edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/about-and-careers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.and.careers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/create-about-careers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.about.careers',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/edit-about-careers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.about.careers',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/first-info-save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.services.first.info',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco/deliver-save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.services.deliver',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.handle',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout.handle',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coco' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/coco/(?|post\\-(?|selected\\-from\\-(?|studies/([^/]++)(*:60)|blog/([^/]++)(*:80))|page/([^/]++)(*:101))|blog\\-create\\-page/([^/]++)(*:137)|remove\\-(?|blog/([^/]++)(*:169)|studie/([^/]++)(*:192)|post/([^/]++)(?|(*:216)|/([^/]++)(*:233)))|header\\-text\\-show/([^/]++)(*:270)|edit\\-s(?|tudie\\-page/([^/]++)(*:308)|ervice\\-info/([^/]++)(*:337))|service\\-(?|content/([^/]++)(*:374)|deliver/([^/]++)/([^/]++)(*:407))|first\\-info/([^/]++)/([^/]++)(*:445))|/design_development/([^/]++)(*:482)|/blogItemInner/([^/]++)(*:513))/?$}sDu',
    ),
    3 => 
    array (
      60 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.selected.from.studies',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      80 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.selected.from.blog',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      101 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'new.post.page',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.blog.page',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'remove.blog.page',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'remove.studie.page',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'remove.post.page',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'remove.info',
          ),
          1 => 
          array (
            0 => 'table',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'selected.header.text',
          ),
          1 => 
          array (
            0 => 'key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.studie.page',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.services.first.info',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.content',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.deliver',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'serviceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      445 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.first.info',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'serviceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      482 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'servicePages',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogItemInner',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::omEyzGaD0h2RxVje' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::omEyzGaD0h2RxVje',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7CgAyedXnE4IdDtc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":291:{@CHJ8WR9sdyym6t112HuMEJvccgIUp322jQeB3ELCmUk=.a:5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000127473d00000000676380f7";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::7CgAyedXnE4IdDtc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@publicDashboardPage',
        'controller' => 'App\\Http\\Controllers\\DashboardController@publicDashboardPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@contactDashboardPage',
        'controller' => 'App\\Http\\Controllers\\ContactController@contactDashboardPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":1133:{@oM4RISR76fAbCf0j1REkZUI2TJnpYg+HGs3LisaE46s=.a:5:{s:3:"use";a:0:{}s:8:"function";s:920:"function () {
    $serviceInfo = \\Illuminate\\Support\\Facades\\DB::table(\'services_first_info\')->leftJoin(\'dashboard_translate\',\'dashboard_translate.id\',\'=\',\'services_first_info.services_id\')->where(\'services_first_info.key\',\'=\',\\Illuminate\\Support\\Facades\\App::getLocale())->get();

    $serviceArray = [];
    foreach ($serviceInfo as $val){
        if(!isset($serviceArray[$val->blog_name]))
        {
            $serviceArray[$val->blog_name][] = $val->name;
            $serviceArray[\'id\'][] = $val->id;
        }elseif(isset($serviceArray[$val->blog_name]) && $serviceArray[$val->blog_name] != $val->name){
            $serviceArray[$val->blog_name][] = $val->name;
            $serviceArray[\'id\'][] = $val->id;
        }

    }

    $header = \\App\\Models\\PageHeader::where(\'page_name\',\'=\',\'about_us\')->first();
    return \\view(\'layouts/about\',[\'header\'=>$header,\'serviceInfo\'=>$serviceArray]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000127473900000000676380f7";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":1262:{@Ud07Q43BFi/6WP68CH7hQH1MwwcySdGsQyNspoJz+lE=.a:5:{s:3:"use";a:0:{}s:8:"function";s:1048:"function () {
    $header = \\App\\Models\\PageHeader::where(\'page_name\',\'=\',\'services\')->first();

    $blogs = \\App\\Models\\Dashboard::join(\'dashboard_translate\',\'dashboard_translate.item_id\',\'=\',\'dashboard_items.id\')
        ->select(\'dashboard_items.id\',\'dashboard_items.url\',\'dashboard_items.img\',\'dashboard_items.status\',\'dashboard_translate.button_name\',\'dashboard_translate.names\',\'dashboard_translate.blog_button_other\',\'dashboard_translate.key\',\'dashboard_translate.blog_name\',\'dashboard_translate.short_info\')
        ->where(\'key\',\'=\',\\Illuminate\\Support\\Facades\\App::getLocale())
        ->get();

    $posts = \\App\\Models\\Post::join(\'post_translate\',\'post_translate.item_id\',\'=\',\'post_items.id\')
        ->select(\'post_items.id\',\'post_items.status\',\'post_items.img\',\'post_translate.button_name\',\'post_translate.name\',\'post_translate.key\',\'post_translate.header_name\')->get();
    $postHeaderName = \\App\\Models\\PostTranslate::first();

    return \\view(\'layouts/service\',[\'header\'=>$header,\'blogs\'=>$blogs,\'posts\'=>$posts]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000127472700000000676380f7";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'case_studies' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'case_studies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":461:{@wU6JP9jYtqfYqT29NpQhgZzqU+n6MUpSGJV6A0vaQyE=.a:5:{s:3:"use";a:0:{}s:8:"function";s:248:"function () {
    $header = \\App\\Models\\PageHeader::where(\'page_name\',\'=\',\'case_studies\')->first();
    $blogItems = \\App\\Models\\DashboardTranslater::get();
    return \\view(\'layouts/case_studies\',[\'header\'=>$header,\'blogItems\'=>$blogItems]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000127472500000000676380f7";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'case_studies',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.selected.from.studies' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/post-selected-from-studies/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StudiesPageController@studiesFromBlog',
        'controller' => 'App\\Http\\Controllers\\StudiesPageController@studiesFromBlog',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'post.selected.from.studies',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":445:{@/U1JlbMrqJfMkAYu4jWUBP582Mfk2fmyEEukc9TK7j0=.a:5:{s:3:"use";a:0:{}s:8:"function";s:232:"function () {
    $header = \\App\\Models\\PageHeader::where(\'page_name\',\'=\',\'blog\')->first();
    $blogItems = \\App\\Models\\DashboardTranslater::get();
    return \\view(\'layouts/blog\',[\'header\'=>$header,\'blogItems\'=>$blogItems]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000127472000000000676380f7";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'careers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'careers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":369:{@Zj8aAlYBblRBLM5oeq4hHe8ApKIUYpJ0Hou2HnZE7wY=.a:5:{s:3:"use";a:0:{}s:8:"function";s:156:"function () {
    $header = \\App\\Models\\PageHeader::where(\'page_name\',\'=\',\'careers\')->first();
    return \\view(\'layouts/careers\',[\'header\'=>$header]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000127472e00000000676380f7";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'careers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'servicePages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'design_development/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Controller@servicePage',
        'controller' => 'App\\Http\\Controllers\\Controller@servicePage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'servicePages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'serviceItemInner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'serviceItemInner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":577:{@4F8RgIdw7DjFO32ivDD34yJunWsZBtaflq1/Su8ITb8=.a:5:{s:3:"use";a:0:{}s:8:"function";s:364:"function () {
    $posts = \\App\\Models\\Post::join(\'post_translate\',\'post_translate.item_id\',\'=\',\'post_items.id\')
        ->select(\'post_items.id\',\'post_items.status\',\'post_items.img\',\'post_translate.button_name\',\'post_translate.name\',\'post_translate.key\',\'post_translate.header_name\')->get();

    return \\view(\'layouts/serviceItemInner\',[\'posts\'=>$posts]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000127472d00000000676380f7";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'serviceItemInner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogItemInner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogItemInner/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StudiesPageController@BlogItemsData',
        'controller' => 'App\\Http\\Controllers\\StudiesPageController@BlogItemsData',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'blogItemInner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacyPolicy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacyPolicy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":272:{@pcTle8RdBl3gpAETpFGHhKweKxU0B3mcUx6ssifyyO4=.a:5:{s:3:"use";a:0:{}s:8:"function";s:60:"function () {
    return \\view(\'layouts/privacyPolicy\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000127472800000000676380f7";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'privacyPolicy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteMap' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'siteMap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":266:{@1K2kt0ZFsTg0fbqoEFjWS3OSOn0KNUiCxZfXH32JY8Q=.a:5:{s:3:"use";a:0:{}s:8:"function";s:54:"function () {
    return \\view(\'layouts/siteMap\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000127471600000000676380f7";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'siteMap',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminIndex' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":270:{@Wnf5zC7s+6fCBpEtYxXfNHGujXgAophfG/Sd2N1xSis=.a:5:{s:3:"use";a:0:{}s:8:"function";s:58:"function () {
        return \\view(\'admin/index\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000127471500000000676380f7";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'adminIndex',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactPage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@contactPage',
        'controller' => 'App\\Http\\Controllers\\ContactController@contactPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'contactPage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'save.contact' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coco/contact-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactController@saveContact',
        'controller' => 'App\\Http\\Controllers\\ContactController@saveContact',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'save.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboardPage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@dashboardPage',
        'controller' => 'App\\Http\\Controllers\\DashboardController@dashboardPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'dashboardPage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cocoPostPage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@cocoPostPage',
        'controller' => 'App\\Http\\Controllers\\DashboardController@cocoPostPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'cocoPostPage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cocoStudiesPage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/studies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@studiesPage',
        'controller' => 'App\\Http\\Controllers\\DashboardController@studiesPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'cocoStudiesPage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'aboutUsPage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@aboutUsPage',
        'controller' => 'App\\Http\\Controllers\\DashboardController@aboutUsPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'aboutUsPage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create.blog.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/blog-create-page/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@createBlogPage',
        'controller' => 'App\\Http\\Controllers\\DashboardController@createBlogPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'create.blog.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'remove.blog.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/remove-blog/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@removeBlogPage',
        'controller' => 'App\\Http\\Controllers\\DashboardController@removeBlogPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'remove.blog.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create.blog' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coco/blog-create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@createBlog',
        'controller' => 'App\\Http\\Controllers\\DashboardController@createBlog',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'create.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.blog' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coco/blog-edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@editBlog',
        'controller' => 'App\\Http\\Controllers\\DashboardController@editBlog',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'edit.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'header.text' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coco/header-text',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@saveHeaderText',
        'controller' => 'App\\Http\\Controllers\\DashboardController@saveHeaderText',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'header.text',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'selected.header.text' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/header-text-show/{key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@headerText',
        'controller' => 'App\\Http\\Controllers\\DashboardController@headerText',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'selected.header.text',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'new.studies.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/studies-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@studiesPage',
        'controller' => 'App\\Http\\Controllers\\DashboardController@studiesPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'new.studies.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create.studies' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coco/studies-create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@createStudies',
        'controller' => 'App\\Http\\Controllers\\DashboardController@createStudies',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'create.studies',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.studies' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coco/studies-edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@editStudies',
        'controller' => 'App\\Http\\Controllers\\DashboardController@editStudies',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'edit.studies',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.studie.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/edit-studie-page/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@createStudiePage',
        'controller' => 'App\\Http\\Controllers\\DashboardController@createStudiePage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'edit.studie.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'remove.studie.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/remove-studie/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@removeStudiePage',
        'controller' => 'App\\Http\\Controllers\\DashboardController@removeStudiePage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'remove.studie.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'new.post.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/post-page/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@postPage',
        'controller' => 'App\\Http\\Controllers\\DashboardController@postPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'new.post.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coco/post-create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@createPost',
        'controller' => 'App\\Http\\Controllers\\DashboardController@createPost',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'create.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coco/post-edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@editPost',
        'controller' => 'App\\Http\\Controllers\\DashboardController@editPost',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'edit.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'remove.post.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/remove-post/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@removePostPage',
        'controller' => 'App\\Http\\Controllers\\DashboardController@removePostPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'remove.post.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.selected.from.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/post-selected-from-blog/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogPageController@postFromBlog',
        'controller' => 'App\\Http\\Controllers\\BlogPageController@postFromBlog',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'post.selected.from.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.and.careers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/about-and-careers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutCareersController@aboutAndCareers',
        'controller' => 'App\\Http\\Controllers\\AboutCareersController@aboutAndCareers',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'about.and.careers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create.about.careers' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coco/create-about-careers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutCareersController@createAboutOrCareers',
        'controller' => 'App\\Http\\Controllers\\AboutCareersController@createAboutOrCareers',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'create.about.careers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.about.careers' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coco/edit-about-careers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutCareersController@editAboutOrCareers',
        'controller' => 'App\\Http\\Controllers\\AboutCareersController@editAboutOrCareers',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'edit.about.careers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.content' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/service-content/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServicesController@serviceContent',
        'controller' => 'App\\Http\\Controllers\\ServicesController@serviceContent',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'services.content',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'service.first.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/first-info/{id}/{serviceId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServicesController@firstInfoPage',
        'controller' => 'App\\Http\\Controllers\\ServicesController@firstInfoPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'service.first.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create.services.first.info' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coco/first-info-save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServicesController@createServicesFirstInfo',
        'controller' => 'App\\Http\\Controllers\\ServicesController@createServicesFirstInfo',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'create.services.first.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'remove.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/remove-post/{table}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServicesController@deleteRowFromDatabase',
        'controller' => 'App\\Http\\Controllers\\ServicesController@deleteRowFromDatabase',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'remove.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.services.first.info' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coco/edit-service-info/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServicesController@editServiceInfo',
        'controller' => 'App\\Http\\Controllers\\ServicesController@editServiceInfo',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'edit.services.first.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'service.deliver' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco/service-deliver/{id}/{serviceId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServicesController@serviceDeliverPage',
        'controller' => 'App\\Http\\Controllers\\ServicesController@serviceDeliverPage',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'service.deliver',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create.services.deliver' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coco/deliver-save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServicesController@createServicesDeliver',
        'controller' => 'App\\Http\\Controllers\\ServicesController@createServicesDeliver',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'create.services.deliver',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.handle' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@handleLogin',
        'controller' => 'App\\Http\\Controllers\\LoginController@handleLogin',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'login.handle',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout.handle' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@handleLogout',
        'controller' => 'App\\Http\\Controllers\\LoginController@handleLogout',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'logout.handle',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coco',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => '/admin/auth/login',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
