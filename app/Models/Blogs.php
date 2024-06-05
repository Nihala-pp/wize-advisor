<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\BlogCategories;

class Blogs extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [];
    protected $table = "blogs";

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategories::class, 'category_id');
    }
}