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
Route::get('/set-language/{lang}', 'LanguagesController@set')->name('set.language');
// Route::get('/generate-pdf/{id}','PDFController@generatePDF');


Route::get('/','BasicController@home')->name('home');


Route::get('/about','BasicController@about');
Route::get('/comittee/partial','BasicController@partialComittee');
Route::get('/comittee/under','BasicController@underComittee');
Route::get('/gallery','BasicController@gallery');

Route::get('/first/yearly_session','BasicController@firstSession');
Route::get('/second/yearly_session','BasicController@secondSession');
Route::get('/third/yearly_session','BasicController@thirdSession');
Route::get('/fourth/yearly_session','BasicController@fourthSession');
Route::get('/fifth/yearly_session','BasicController@fifthSession');


Route::get('/contact','BasicController@contact');
Route::post('/sendmail','SendMailController@send');


Route::get('/login','UserController@getLogin');
Route::post('/postlogin','UserController@postLogin');
Route::get('/logout','UserController@logout');


Route::get('/dashboard','DashboardController@dashboard');

Route::get('/news/view','NewsController@viewNews');
Route::get('/news/create','NewsController@createNews');
Route::post('/news/postNews', 'NewsController@postNews');
Route::get('/news/{id}/edit','NewsController@editNews');
Route::post('/news/update/{id}','NewsController@updateNews');
Route::post('/news/delete','NewsController@destroy');
Route::get('/news/{id}','NewsController@viewNewsById');

Route::get('/notice/view','NoticeController@viewNotice');
Route::get('/notice/create','NoticeController@createNotice');
Route::post('/notice/create', 'NoticeController@postNotice');
Route::get('/notice/{id}/edit','NoticeController@editNotice');
Route::post('/notice/update/{id}','NoticeController@updateNotice');
Route::post('/notice/delete','NoticeController@destroy');

Route::get('/gallery/view','GalleryController@getGallery');
Route::get('/gallery/upload','GalleryController@getUploadGallery');
Route::post('/gallery/upload','GalleryController@uploadOnGallery');
Route::get('/gallery/{id}/edit','GalleryController@editGallery');
Route::post('/gallery/update/{id}','GalleryController@updateGallery');
Route::post('/gallery/delete','GalleryController@destroy');


Route::get('pagenotfound', ['as'=>'notfound', 'uses'=>'BasicController@pagenotfound']);