<?php

Route::get('artisan', ['as' => 'webartisan', 'uses' => 'Emir\Webartisan\WebartisanController@index']);
Route::post('artisan/run', ['as' => 'webartisan.run', 'uses' => 'Emir\Webartisan\WebartisanController@actionRpc']);
