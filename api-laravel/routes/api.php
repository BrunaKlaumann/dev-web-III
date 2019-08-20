<?php

use Illuminate\Http\Request;
Use \App\Article;
Route::group(['middleware' => 'auth:api'], function() {
    Route::get('articles', 'ArticleController@index');
    Route::get('articles/{id}', 'ArticleController@show');
    Route::post('articles', 'ArticleController@store');
    Route::put('articles/{id}', 'ArticleController@update');
    Route::delete('articles/{id}', 'ArticleController@delete');
});
Route::post("register", 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
?>
