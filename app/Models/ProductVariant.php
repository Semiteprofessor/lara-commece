<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductVariant extends Model
{
    /** @use HasFactory<\Database\Factories\ProductVariantFactory> */
    use HasFactory;

    protected $table = "productVariant";
    protected $primaryKey = "id";
    protected $fillable = [
        'manufacturerId',
        'productBrandId',
        'subCategoryId',
        'purchaseTaxId',
        'salesTaxId',
        'uomId'
    ];
}
