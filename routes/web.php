<?php


Route::get('/','HomeController@home' );

Route::get('home','HomeController@home' );

Route::get('home/{id}','HomeController@cat' );

Route::get('category','HomeController@category');

Route::post('categoryadd/post','HomeController@cataddpost')->name('categoryadd.post');

Route::get('categoryadd','HomeController@categoryadd');

Route::get('product','HomeController@product');

Route::get('productadd','HomeController@productadd');

Route::post('productadd/post','HomeController@proaddpost')->name('productadd.post');
