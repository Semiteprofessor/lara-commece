<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    /** @use HasFactory<\Database\Factories\SupplierFactory> */
    use HasFactory;

    protected $table = 'supplier';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'phone',
        'address',
        'email',
    ];

    public function purchaseInvoice(): HasMany
    {
        return $this->hasMany(PurchaseInvoice::class, 'supplierId');
    }
}
