<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    /** @use HasFactory<\Database\Factories\CouponFactory> */
    use HasFactory;

    protected $table = 'coupon';
    protected $primaryKey = 'id';
    protected $fillable = [
        'couponCode',
        'type',
        'startDate',
        'endDate',
        'value'
    ];
}
