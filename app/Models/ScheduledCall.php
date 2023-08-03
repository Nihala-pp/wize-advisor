<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScheduledCall extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'scheduled_calls';
    protected $guarded = [];
    protected $fillable = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }  

    public function mentor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'mentor_id');
    }  
}