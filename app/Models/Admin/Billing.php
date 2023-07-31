<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
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
