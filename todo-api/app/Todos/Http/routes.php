<?php

Route::group(['prefix' => 'todo-lists/{id}', 'controller' => \App\Todos\Http\Controllers\TodoController::class], function() {
    Route::get('', 'index')->name('todos');
    Route::get('create', 'form');
    Route::post('create', 'store');
});
