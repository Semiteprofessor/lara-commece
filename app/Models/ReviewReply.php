<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReviewReply extends Model
{
    /** @use HasFactory<\Database\Factories\ReviewReplyFactory> */
    use HasFactory;

    protected $table = 'reviewReply';
    protected $primaryKey = 'id';
    protected $fillable = [
        'reviewId',
        'adminId',
        'comment',
    ];

    public function review(): BelongsTo
    {
        return $this->belongsTo(ReviewRating::class, 'reviewId');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'adminId');
    }
}
