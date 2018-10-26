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

//Route :: get('u/{id}',function ($id){
//    return $id;
//});//

Route::get('/', function () {
     return view('welcome');
    //return 'Welcome';
});

Route::get('/h', 'PagesController@index');

Route:: get('/about',function (){
    return view('Pages.about');

});

// https://blog.pusher.com/laravel-mvc-use/
//Sorce of the MVC
//Route::resource('posts', 'PostsController');
Route::resource('clients', 'ClientsController');

