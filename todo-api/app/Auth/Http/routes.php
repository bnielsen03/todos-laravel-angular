<?php

Route::group(['prefix' => 'auth'], function() {
    Route::post('register', \App\Auth\Http\Controllers\AuthController::class.'@register');
});
