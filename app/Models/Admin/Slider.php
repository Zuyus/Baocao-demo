<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable=[
        'en_Title',
        'en_Sub_Title',
        'en_Description',
        'en_Button_Text',

        'fr_Title',
        'fr_Sub_Title',
        'fr_Description',
        'fr_Button_Text',

        'Thumbnail',
        'Background_Image'
    ];
}
