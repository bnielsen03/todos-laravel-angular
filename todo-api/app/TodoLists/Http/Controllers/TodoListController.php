<?php

namespace App\TodoLists\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index(Request $request)
    {
        $todoLists = TodoList::query()->where('user_id', $request->user()->id)->get();
        return view('todoLists.dashboard');
    }

    public function form(Request $request)
    {
        return view('todoLists.form');
    }

    public function store(Request $request)
    {
        TodoList::create([
            'name' => $request->input('title'),
            'user_id' => $request->user()->id
        ]);

        return redirect(route('todo-lists'));
    }
}
