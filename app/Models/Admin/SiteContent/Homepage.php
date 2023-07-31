<?php

namespace App\Models\Admin\SiteContent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;
    protected $fillable=[
        'Location',
        'en_Title',
        'en_Description_One',
        'en_Description_Two',
        'fr_Title',
        'fr_Description_One',
        'fr_Description_Two',
    ];
}
