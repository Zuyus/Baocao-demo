<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSettings extends Model
{
    use HasFactory;
    protected $fillable=[
        'Title',
        'Logo',
        'Favicon',
        'MetaDescription',
        'MetaKeywords',
        'MetaAuthor',
    ];
}
