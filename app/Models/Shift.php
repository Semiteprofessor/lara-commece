<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shift extends Model
{
    /** @use HasFactory<\Database\Factories\ShiftFactory> */
    use HasFactory;

    //create shift model
    protected $table = 'shift';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'startTime',
        'endTime',
        'workHour',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class, "shiftId");
    }
}
