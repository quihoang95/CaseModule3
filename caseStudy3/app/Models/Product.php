<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_name',
        'description',
        'stock',
        'image',
        'image1',
        'image2',
        'priceEach',
        'category_id'
    ];

    function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getProductImage()
    {
        return '/storage/products/' . ltrim($this->image, '/public/products/');
    }

    public function getProductImage1()
    {
        return '/storage/products/' . ltrim($this->image1, '/public/products/');
    }

    public function getProductImage2()
    {
        return '/storage/products/' . ltrim($this->image2, '/public/products/');
    }


    public $timestamp = false;
}
