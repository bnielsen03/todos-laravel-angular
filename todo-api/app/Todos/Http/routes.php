<?php

Route::group(['prefix' => 'todo-lists/{todoListID}', 'controller' => \App\Todos\Http\Controllers\TodoController::class], function() {
    Route::get('', 'index')->name('todos');
    Route::get('create', 'form');
    Route::post('create', 'store');
    Route::post('todos/{todoID}/toggle', 'toggle');
    Route::delete('todos/{todoID}', 'delete');
});
