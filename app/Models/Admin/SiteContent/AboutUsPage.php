<?php

namespace App\Models\Admin\SiteContent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'Location',
        'Image',
        'Icon_One',
        'Icon_Two',
        'Icon_Three',
        'Icon_Four',
        'en_Title_One',
        'en_Title_Two',
        'en_Title_Three',
        'en_Title_Four',
        'en_Title',
        'en_Subtitle',
        'en_Description_One',
        'en_Description_Two',
        'en_Description_Three',
        'en_Description_Four',
        'fr_Title_One',
        'fr_Title_Two',
        'fr_Title_Three',
        'fr_Title_Four',
        'fr_Subtitle',
        'fr_Description_One',
        'fr_Description_Two',
        'fr_Description_Three',
        'fr_Description_Four',
    ];
}
