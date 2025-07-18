<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DimensionUnit extends Model
{
    /** @use HasFactory<\Database\Factories\DimensionUnitFactory> */
    use HasFactory;

    protected $table = 'dimensionUnit';

    protected $fillable = [
        'name'
    ];
}
