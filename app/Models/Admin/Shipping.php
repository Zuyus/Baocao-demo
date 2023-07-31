<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $fillable = [
        'User_Id',
        'Name',
        'Email',
        'Street',
        'State',
        'Zipcode',
        'Country'
    ];
}
