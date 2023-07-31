<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CutomerService extends Model
{
    use HasFactory;
    protected $fillable=[
        'location',
        'en_description',
        'fr_description',
    ];

}
