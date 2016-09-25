<?php

Route::group([

    'prefix' => 'admin/tags',
    'as' => 'admin.tags.',
    'namespace' => 'CodePress\CodeTag\Controllers',
    'middleware' => ['web']

], function () {

    Route::get('', 'AdminTagsController@index')
        ->name('index');

    Route::get('/create', 'AdminTagsController@create')
        ->name('create');

    Route::post('/store', 'AdminTagsController@store')
        ->name('store');

    Route::get('/{id}/edit/', 'AdminTagsController@edit')
        ->name('edit');

    Route::post('/{id}/update', 'AdminTagsController@update')
        ->name('update');

    Route::get('/{id}/delete/', 'AdminTagsController@delete')
        ->name('delete');

});