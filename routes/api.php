<?php

use Illuminate\Support\Facades\Route;

Route::group([
  'namespace' => 'Api',
  'as'        => 'api.',
], function () {
    Route::group([
      'namespace' => 'v1',
      'prefix' => 'v1',
    ], function () {
        Route::get('/', [
          'as'   => 'index',
          'uses' => 'WelcomeController@index',
        ]);

    });
});
