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

Route::get('/', function () {
    return view('landing_test');
});

Route::get('/handball', function () {
    return view('handball');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/lading', function () {
    return view('landing');
});


Route::get('/edit_slide', 'SliderController@edit');
Route::post('/create', 'SliderController@update');
Route::get('/delete', 'SliderController@delete');



//::post('/sendEmail', 'HomeController@sendEmail');

Route::get('slides_slider','SliderController@index');



/********** CMS Slides***********/
Route::get('new_slide',"SliderController@new_slide");
Route::get('slides','SliderController@slides');
Route::post('new_slide_create','SliderController@new_slide_create');
