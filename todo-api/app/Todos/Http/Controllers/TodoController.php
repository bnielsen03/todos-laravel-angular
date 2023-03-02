<?php

namespace App\Todos\Http\Controllers;

use App\Models\Todo;
use App\Models\TodoImage;
use App\Models\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TodoController
{
    public function index(Request $request, $todoListID)
    {
        $todoList = TodoList::with('todos.image')->find($todoListID);

        return view('todos.index', compact('todoList'));
    }

    public function toggle(Request $request, $todoListID, $todoID)
    {
        $todo = Todo::find($todoID);
        $todo->completed_at = $todo->completed_at ? null : now();
        return response()->json(
            [
                'success' => $todo->save()
            ]
        );
    }

    public function delete(Request $request, $todoListID, $todoID)
    {
        return response()->json(
            [
                'success' => Todo::where('id', $todoID)->delete()
            ]
        );
    }

    public function store(Request $request, $todoListID)
    {
        dd(base64_encode($request->file('image')->getContent()));
        $path = Storage::disk('s3')->putFile('/test/image', $request->file('image'));

        $todo = Todo::create([
            'title' => $request->input('title'),
            'todo_list_id' => $todoListID
        ]);

        TodoImage::create([
            'todo_id' => $todo->getKey(),
            'path' => $path
        ]);

        return redirect("/todo-lists/$todoListID");
    }

    public function form(Request $request, $todoListID)
    {
        return view('todos.form', compact('todoListID'));
    }
}
