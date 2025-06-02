<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductWishlist extends Model
{
    /** @use HasFactory<\Database\Factories\ProductWishlistFactory> */
    use HasFactory;

    public $table = 'productWishlist';

    protected $fillable = [
        'wishlistId',
        'productId',
    ];

    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class, 'wishlistId');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'productId');
    }
}
