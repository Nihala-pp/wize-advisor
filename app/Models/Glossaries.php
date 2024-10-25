<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glossaries extends Model
{
    use HasFactory;

    protected $table = 'glossary';

    protected $guarded = [];
    protected $fillable = [];
}
