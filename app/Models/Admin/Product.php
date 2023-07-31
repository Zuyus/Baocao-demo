<?php

namespace App\Models\Admin;

use App\Models\ProductReview;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Sluggable;
    protected $fillable=[
        'Category_Id',
        'Brand_Id',
        'en_Product_Name',
        'en_Product_Slug',
        'fr_Product_Name',
        'fr_Product_Slug',
        'en_About',
        'fr_About',
        'ItemTag',
        'Price',
        'Discount',
        'Discount_Price',
        'Quantity',
        'Sold',
        'Primary_Image',
        'Image2',
        'Image3',
        'Image4',
        'Image5',
        'Featured_Product',
        'Best_Selling',
        'New_Arrival',
        'On_Sale',
        'Status',
        'en_Description',
        'fr_Description',
        'en_ShippingReturn',
        'fr_ShippingReturn',
        'en_AdditionalInformation',
        'fr_AdditionalInformation',
        'Voucher',
        'digital_type',
        'digital_file',
        'digital_link',
        'license_name',
        'license_key',
        'affiliate_link',
        'type',
    ];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'en_Product_Slug' => [
                'source' => 'en_Product_Name'
            ],
            'fr_Product_Slug' => [
                'source' => 'fr_Product_Name'
            ],
        ];
    }
    public function category(){
        return $this->belongsTo(Category::class,'Category_Id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class,'Brand_Id');
    }


    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color_product');
    }
    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'size_product');
    }

    public function product_tags()
    {
        return $this->hasMany(ProductTag::class, 'product_id');
    }

    public function product_reviews()
    {
        return $this->hasMany(ProductReview::class, 'product_id');
    }
}
