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

Route::get('/','BasicController@home')->name('home');;
Route::get('/about','BasicController@about');
Route::get('/gallery','BasicController@gallery');
Route::get('/contact','BasicController@contact');


Route::get('/login','UserController@getLogin');
Route::post('/postlogin','UserController@postLogin');
Route::get('/logout','UserController@logout');


Route::get('/dashboard','DashboardController@dashboard');

Route::get('/news/view','NewsController@viewNews');
Route::get('/news/create','NewsController@createNews');
Route::post('/news/postNews', 'NewsController@postNews');
Route::get('/news/{id}/edit','NewsController@editNews');
Route::post('/news/update/{id}','NewsController@updateNews');
Route::post('/news/delete','NewsController@deleteNews');

Route::get('/gallery/view','GalleryController@getGallery');
Route::get('/gallery/upload','GalleryController@getUploadGallery');
Route::post('gallery/upload','GalleryController@uploadOnGallery');
Route::post('/gallery/delete','GalleryController@deleteGallery');


Route::get('/legislations/view','LegislationController@getLegislation');
Route::get('/legislations/create','LegislationController@createLegislation');
Route::post('/legislations/create','LegislationController@postLegislation');
Route::get('/legislations/{id}/edit','LegislationController@editLegislation');
Route::post('/legislations/update/{id}','LegislationController@updateLegislation');
Route::post('/legislations/delete','LegislationController@deleteLegislation');

Route::get('/members/view','MemberController@getMember');
Route::get('/members/create','MemberController@createMember');
Route::post('/members/create','MemberController@postMember');
Route::get('/members/{id}/edit','MemberController@editMember');
Route::post('/members/update/{id}','MemberController@updateMember');
Route::post('/members/delete','MemberController@deleteMember');
