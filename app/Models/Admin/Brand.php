<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable=[
      'BrandImage',
      'en_BrandName',
      'fr_BrandName',
      'en_BrandSlug',
      'fr_BrandSlug',
        'Status'
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'Brand_Id');
    }
}
