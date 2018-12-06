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

Route::get('/','AdminController\Action@Home');

Auth::routes();

Route::get('/admin/dashboard', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController\Action@display');
Route::get('/logout', 'AdminController\Action@logout');
Route::get('/admin/upload_photos','AdminController\Action@renderUpload' );
Route::post('/uploadpicture', 'AdminController\Action@uploadPicture');
Route::get('/admin/add_category','AdminController\Action@renderCategory');
Route::post('/Add_category','AdminController\Action@addCategory' );
Route::get('/admin/update_contact','AdminController\Action@renderUpdateContact');
Route::post('/Update_contact','AdminController\Action@updateContact');
Route::post('/send_message','AdminController\Action@get_message');
Route::get('/admin/read_message','AdminController\Action@renderViewMessage');
Route::get('/admin/delete_message/{id}', 'AdminController\Action@delete_message');
Route::get('/admin/update_about_us', 'AdminController\Action@renderAboutUs');
Route::post('/admin/update_about_us','AdminController\Action@UpdateAboutUs');
