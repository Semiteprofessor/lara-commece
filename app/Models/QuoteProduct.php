<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuoteProduct extends Model
{
    /** @use HasFactory<\Database\Factories\QuoteProductFactory> */
    use HasFactory;
    protected $table = 'quoteProduct';
    protected $primaryKey = 'id';

    protected $fillable = [
        'quoteId',
        'productId',
        'unitPrice',
        'productQuantity',
    ];

    public function quote(): BelongsTo
    {
        return $this->belongsTo(Quote::class, 'quoteId');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'productId');
    }
}
