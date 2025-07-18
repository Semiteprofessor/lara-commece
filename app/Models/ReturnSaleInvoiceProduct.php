<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReturnSaleInvoiceProduct extends Model
{
    /** @use HasFactory<\Database\Factories\ReturnSaleInvoiceProductFactory> */
    use HasFactory;
    protected $table = 'returnSaleInvoiceProduct';
    protected $primaryKey = 'id';
    protected $fillable = [
        'invoiceId',
        'productId',
        'productQuantity',
        'productUnitSalePrice',
        'saleInvoiceProductId',
        'productFinalAmount',
        'tax',
        'taxAmount',
    ];

    public function returnSaleInvoice(): BelongsTo
    {
        return $this->belongsTo(ReturnSaleInvoice::class, 'invoiceId');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'productId');
    }

    public function saleInvoiceProduct(): BelongsTo
    {
        return $this->belongsTo(SaleInvoiceProduct::class, 'saleInvoiceProductId');
    }
}
