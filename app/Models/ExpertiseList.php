<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertiseList extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [];
    protected $table = "expertise_list";
}
