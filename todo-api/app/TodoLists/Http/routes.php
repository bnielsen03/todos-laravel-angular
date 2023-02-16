<?php

use App\TodoLists\Http\Controllers\TodoListController;

Route::group(['prefix' => 'todo-lists', 'controller' => TodoListController::class], function() {
    Route::get('', 'index')->name('todo-lists');
    Route::get('create', 'form');
    Route::post('create', 'store');
    Route::delete('{id}', 'delete');
});
