<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = "settings";
    protected $fillable = ['slug', 'content'];

    public static function updateSettings($data)
    {
        Self::create($data);
        return $data;
    }
}
