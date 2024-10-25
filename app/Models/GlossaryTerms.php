<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlossaryTerms extends Model
{
    use HasFactory;

    protected $table = 'glossary_terms';

    protected $guarded = [];
    protected $fillable = [];
}
