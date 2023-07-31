<?php

namespace App\Models\Admin\SiteContent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    use HasFactory;
    protected $fillable=[
        'Facebook',
        'Skype',
        'Twitter',
        'Linkedin',
        'Instagram',
    ];
}
