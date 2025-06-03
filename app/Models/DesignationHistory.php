<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DesignationHistory extends Model
{
    /** @use HasFactory<\Database\Factories\DesignationHistoryFactory> */
    use HasFactory;
    protected $table = 'designationHistory';
    protected $primaryKey = 'id';
    protected $fillable = [
        'userId',
        'designationId',
        'startDate',
        'endDate',
        'comment',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function designation(): BelongsTo
    {
        return $this->belongsTo(Designation::class, 'designationId');
    }
}
