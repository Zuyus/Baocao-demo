<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable=[
        'Name',
        'ColorCode'
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'color_product');
    }
}
