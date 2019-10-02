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
    return view('index');
});
Route::get('/simulation', function () {
    return view('simulation');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/laboratories', function () {
    return view('laboratories');
});

Route::get('/products','ProductController@indexProducts')->name('products');
Route::get('/products/{products}','ProductController@showProducts');
Route::get('autocomplete', 'ProductController@autocomplete')->name('autocomplete');

Route::get('/courses','CourseController@indexCourses')->name('courses');
Route::get('/courses/{courses}','CourseController@showCourses');

Route::get('/laboratories','LaboratoryController@indexLaboratories')->name('laboratories');
Route::get('/laboratories/{laboratory}','LaboratoryController@showLaboratories');

Route::get('/simulation','SimulationController@index')->name('simulation');

Auth::routes();

Route::group(['prefix' => 'admin', 'as'=>'admin.','middleware' => 'auth'],function(){
    Route::resource('area','AreaController');
    Route::resource('course','CourseController');
    Route::resource('product','ProductController');
    Route::resource('laboratory','LaboratoryController');
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/laboratory/autocompleteproduct', 'LaboratoryController@autocompleteproduct');
});
