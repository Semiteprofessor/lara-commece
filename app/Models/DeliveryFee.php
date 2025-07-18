<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryFee extends Model
{
    /** @use HasFactory<\Database\Factories\DeliveryFeeFactory> */
    use HasFactory;

    protected $table = 'deliveryFee';

    protected $fillable = [
        'deliveryArea',
        'deliveryFee',
    ];
}
