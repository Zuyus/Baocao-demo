<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'tag',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
