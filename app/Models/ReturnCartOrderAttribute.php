<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReturnCartOrderAttribute extends Model
{
    /** @use HasFactory<\Database\Factories\ReturnCartOrderAttributeFactory> */
    use HasFactory;
    protected $table = 'returnCartOrderAttributeValue';
    protected $primaryKey = 'id';
    protected $fillable = [
        'returnCartOrderProductId',
        'productAttributeValueId',
    ];

    public function returnCartOrderProduct(): BelongsTo
    {
        return $this->belongsTo(ReturnCartOrderProduct::class, 'returnCartOrderProductId');
    }

    public function productAttributeValue(): BelongsTo
    {
        return $this->belongsTo(ProductAttributeValue::class, 'productAttributeValueId');
    }
}
