<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Images extends Model
{
    /** @use HasFactory<\Database\Factories\ImagesFactory> */
    use HasFactory;

    protected $table = 'images';
    protected $primaryKey = 'id';
    protected $fillable = [
        'productId',
        'reviewId',
        'imageName',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'productId');
    }

    public function review():BelongsTo
    {
        return $this->belongsTo(ReviewRating::class, 'reviewId');
    }
}
