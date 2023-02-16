<?php

namespace App\Todos\Http\Controllers;

use App\Models\Todo;
use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoController
{
    public function index(Request $request, $todoListID)
    {
        $todoList = TodoList::with('todos')->find($todoListID);

        return view('todos.index', compact('todoList'));
    }

    public function complete(Request $request, $todoListID, $todoID)
    {

    }

    public function delete(Request $request, $todoListID, $todoID)
    {

    }

    public function store(Request $request, $todoListID)
    {
        Todo::create([
            'title' => $request->input('title'),
            'todo_list_id' => $todoListID
        ]);

        return redirect("/todo-lists/$todoListID");
    }

    public function form(Request $request, $todoListID)
    {
        return view('todos.form', compact('todoListID'));
    }
}
