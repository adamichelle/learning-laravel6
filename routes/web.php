<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/string-response', function () {
    return "Hello world!";
});

Route::get('/json-response', function () {
    return [
        'foo' => 'bar'
    ];
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/get-req-data', function () {
    $name = request('name');

    return view('test', [
        'name' => $name
    ]);
});

// wild cards using the routes file
// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'my-first-post' => 'Hello. This is my first blog post',
//         'my-second-post' => 'Now I am getting a hang of this blogging thing'
//     ];

//     if(! array_key_exists($post, $posts)) {
//         abort(404, 'Sorry that post was not found');
//     }

//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });

Route::get('/posts/{post}', 'PostController@show');

Route::get('/contact', function (){
    return View('contact');
});

Route::get('/template-page', function (){
    return View('template-page');
});
