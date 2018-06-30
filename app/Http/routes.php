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

/*Route::get('/handball', function () {
    return view('handball');
});*/
Route::get('/handball','SportController@Handball');
Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/lading', function () {
    return view('landing');
});

Route::get('/merchandising', function () {
    return view('merchandising');
});

Route::get('/dxn', function () {
    return view('dxn');
});

Route::get('/actividades_handball', function () {
    return view('layouts.partials.handball.actividades_handball');
});

Route::get('/actividades_ajedrez', function () {
    return view('layouts.partials.ajedrez.actividades_ajedrez');
});

Route::get('/ajedrez', 'SportController@Ajedrez');


Route::get('/edit_slide', 'SliderController@edit');
Route::post('/create', 'SliderController@update');
Route::get('/delete', 'SliderController@delete');


//::post('/sendEmail', 'HomeController@sendEmail');

Route::get('slides_slider','SliderController@index');


/********** CMS Slides***********/
Route::get('new_slide',"SliderController@new_slide");
Route::get('slides','SliderController@slides');
Route::post('new_slide_create','SliderController@new_slide_create');


/***************CMS handball**************/
Route::get('/new_beneficio', 'SportController@beneficio');
Route::post('/beneficio_create', 'SportController@beneficioCreate');

Route::get('/new_activity', 'SportController@activity');
Route::post('/activity_create', 'SportController@activityCreate');

Route::get('/new_manager', 'SportController@manager');
Route::post('/manager_create', 'SportController@managerCreate');

Route::get('/galeria', 'SportController@galeria');


/***************CMS ajedrez**************/
Route::get('/new_beneficio_ajedrez', 'SportController@beneficioAjedrez');
Route::post('/beneficio_create_ajedrez', 'SportController@beneficioCreateAjedrez');

Route::get('/new_activity_ajedrez', 'SportController@activityAjedrez');
Route::post('/activity_create_ajedrez', 'SportController@activityCreateAjedrez');

Route::get('/new_manager_ajedrez', 'SportController@managerAjedrez');
Route::post('/manager_create_ajedrez', 'SportController@managerCreateAjedrez');

Route::get('/galeria', 'SportController@galeriaAjedrez');


/*****sport***************/
Route::get('/add_sport', function () {
    return view('cms.sport.sport');
});
Route::post('new_sport_create','SportController@new_sport');
Route::get('sports','SportController@sports');


