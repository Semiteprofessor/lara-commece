<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EmploymentStatus extends Model
{
    /** @use HasFactory<\Database\Factories\EmploymentStatusFactory> */
    use HasFactory;

    //create employmentStatus model
    protected $table = 'employmentStatus';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        "colourValue",
        'description',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'employmentStatusId');
    }
}
