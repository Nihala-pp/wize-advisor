<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserMeta extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "user_meta_data";
    protected $fillable = [];

    public static function update_user_details($details)
    {
        self::create([
            $details
        ]);
    }
}
