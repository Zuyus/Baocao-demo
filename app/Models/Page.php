<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'en_title',
        'en_description',
        'fr_title',
        'fr_description',
        'slug',
        'meta_description',
        'meta_keywords',
    ];
}
