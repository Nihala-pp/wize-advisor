<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TodoList extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'todolists';
    protected $fillable = ['tasks', 'is_done'];

    public static function todo_List($data)
    {
        return  Self::create([
            'tasks' => $data['task'],
            'is_done' => 0
        ]);
    }
}
