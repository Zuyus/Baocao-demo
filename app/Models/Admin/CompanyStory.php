<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyStory extends Model
{
    use HasFactory;
    protected $fillable=[
        'Year',
        'en_Description',
        'fr_Description',
    ];
}
