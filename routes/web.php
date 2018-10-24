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
//});

Route::get('/', function () {
     return view('welcome');
    //return 'Welcome';
});

Route::get('/hello', function () {
    // return view('welcome');
    return '<h1> Welcome </h1>';
});

Route:: get('/about',function (){
    return view('Pages.about');

});

