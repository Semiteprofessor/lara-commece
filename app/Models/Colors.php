<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Colors extends Model
{
    /** @use HasFactory<\Database\Factories\ColorsFactory> */
    use HasFactory;
    protected $table = 'colors';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'colorCode',
    ];

    public function productColor(): HasMany
    {
        return $this->hasMany(ProductColor::class, 'colorId');
    }

    public function cartProduct(): HasMany
    {
        return $this->hasMany(CartProduct::class, 'colorId');
    }
}
