<?php

namespace App\Models\Front;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'User_Id',
        'Product_Id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'Product_Id');
    }
}
