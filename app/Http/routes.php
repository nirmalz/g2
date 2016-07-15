<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

function pre($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
//
//// Route related to student
//Route::get('register', 'StudentController@viewForm');
//Route::post('register', 'StudentController@createStudent');
//
//Route::get('home', function(){
//    return view('home');
//});
//
//Route::get('contact', function(){
//    return view('contact');
//});
//
//Route::get('faq', function(){
//    return view('faq');
//});

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
