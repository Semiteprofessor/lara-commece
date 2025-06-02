<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductProductAttributeValue extends Model
{
    /** @use HasFactory<\Database\Factories\ProductProductAttributeValueFactory> */
    use HasFactory;
    protected $table = 'productSubCategory';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'productCategoryId',
    ];

    public function productCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'productCategoryId');
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'productSubCategoryId');
    }
}
