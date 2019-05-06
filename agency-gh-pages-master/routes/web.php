<?php

Auth::routes();
Route::get('/home', 'HomeController@show_all')->name('home');
Route::get('/', 'HomeController@show_all');


//////////////--GET--//////////////
Route::get('/profile', function () {
    return view('profile');
});
//////////////Gallery//////////////
Route::get('/form-album', 'GalleryController@create');
Route::get('/edit-album/{id}', 'GalleryController@edit');
Route::get('/show-album', 'GalleryController@index');
Route::get('/edit-album-detail/{id}','GalleryController@edit_album_detail');
//////////////Article//////////////
Route::get('/edit-article/{id}', 'ArticleController@edit');
Route::get('/show-article', 'ArticleController@index');
Route::get('/form-article', 'ArticleController@create');
/////<---------------------->//////

//////////////--POST--/////////////

//////////////Gallery//////////////
Route::post('/form-album', 'GalleryController@upload');
Route::post('/album-ins', 'GalleryController@insert');
Route::post('/album-upd/{id}', 'GalleryController@update');
//////////////Article//////////////
Route::post('/article-ins', 'ArticleController@insert');
Route::post('/article-upd', 'ArticleController@update');
//////////////Picture//////////////
Route::post('/pic-upload', 'PictureController@upload');
/////<---------------------->//////

//////////////--DELETE--////////////
Route::delete('/album-del/{id}', 'GalleryController@delete');
Route::delete('/article-del/{id}', 'ArticleController@delete');
Route::delete('/pic-del/{id}', 'PictureController@delete');
/////<---------------------->//////
