<?php

namespace App\Models\Admin\SiteContent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterInformation extends Model
{
    use HasFactory;
    protected $fillable=[
        'Logo',
        'Street_Address',
        'Contact',
        'Email',
        'News_Letter',
        'Accepts',
        'Design_Developed',
    ];
}
