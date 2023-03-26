<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use BigComm\Brands\Controllers\ImportController;

Route::group(['prefix' => 'api', 'middleware' => 'api'], function () {
    Route::group([ 'prefix' => 'v1' ], function () {
        Route::get('order', [ImportController::class, 'getStoreDetails']);
    });
});
