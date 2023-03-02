<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'todo_list_id'];

    public function todoList()
    {
        return $this->belongsTo(TodoList::class, 'todo_list_id');
    }

    public function image()
    {
        return $this->hasOne(TodoImage::class, 'todo_id');
    }
}
