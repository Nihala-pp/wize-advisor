<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Expertise extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [];
    protected $table = "expertise";

    public static function update_expertise($id, $details)
    {
        self::updateOrCreate(
            ['mentor_id' => $id],
            $details
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'mentor_id');
    }
}
