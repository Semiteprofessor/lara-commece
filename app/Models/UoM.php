<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UoM extends Model
{
    /** @use HasFactory<\Database\Factories\UoMFactory> */
    use HasFactory;

    protected $table = 'uom';

    protected $fillable = [
        'name',
    ];

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'uomId');
    }
}
