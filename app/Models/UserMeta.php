<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class UserMeta extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "user_meta_data";
    protected $guarded = [];
    protected $fillable = [];

    public static function update_user_details($id, $details)
    {
        self::updateOrCreate(
            ['user_id' => $id],
            $details
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
