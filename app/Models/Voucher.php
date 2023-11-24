<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Voucher extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "vouchers";
    protected $guarded = [];
    protected $fillable = [];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'mentor_id');
    }
}