<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SalaryHistory extends Model
{
    /** @use HasFactory<\Database\Factories\SalaryHistoryFactory> */
    use HasFactory;

    protected $table = 'salaryHistory';
    protected $primaryKey = 'id';
    protected $fillable = [
        'userId',
        'salary',
        'startDate',
        'endDate',
        'comment',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
