<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $fillable=[
    'Order_Id',
    'Product_Id',
    'Product_Name',
    'Image',
    'Size',
    'Color',
    'Price',
    'Quantity',
    'Total_Price',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'Product_Id');
    }
}
