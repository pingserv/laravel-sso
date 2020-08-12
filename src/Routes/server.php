<?php

/**
 * Routes which is neccessary for the SSO server.
 */

Route::middleware('api')->prefix('api/sso')->group(function () {
    Route::post('login', 'Pingserv\LaravelSSO\Controllers\ServerController@login');
    Route::post('logout', 'Pingserv\LaravelSSO\Controllers\ServerController@logout');
    Route::get('attach', 'Pingserv\LaravelSSO\Controllers\ServerController@attach');
    Route::get('userInfo', 'Pingserv\LaravelSSO\Controllers\ServerController@userInfo');
});
