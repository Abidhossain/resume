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
    return view('frontend.pages.index_page');
});

Route::get('dashboard','Admin\HomeController@index');

//========================Basic Info Route======================//

Route::get('basic-info','Admin\HomeController@basic_index'); 
Route::post('basic-info-update','Admin\HomeController@basic_info_update');

//========================About Route======================//

Route::get('user-about','Admin\HomeController@about_index'); 
Route::post('about-info-update','Admin\HomeController@about_info_update');

//========================Testimonials Route======================//

Route::get('testimonials','Admin\HomeController@testimonial_index'); 
Route::get('testomonials-read','Admin\HomeController@testimonial_read'); 
Route::post('store-testimonials','Admin\HomeController@store_testimonials');

//========================Service Route======================//

Route::get('services','Admin\HomeController@service_index');  
Route::get('service-read','Admin\HomeController@service_read'); 
Route::post('store-services','Admin\HomeController@store_services');

//========================Project Route======================//

Route::get('projects','Admin\HomeController@project_index');
Route::get('projects-read','Admin\HomeController@project_read');    
Route::post('store-projects','Admin\HomeController@store_project');

//========================Frontend Route======================//

Route::post('contact-message','Frontend\IndexController@contact_message');

//========================Frontend Route======================//
Route::get('index','Frontend\IndexController@index');


Route::get('pdf_viewer','Admin\PdfController@index');
Route::get('resume/pdf','Admin\PdfController@pdf');
