<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermAndCondition extends Model
{
    /** @use HasFactory<\Database\Factories\TermAndConditionFactory> */
    use HasFactory;

    protected $table = 'termsAndCondition';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'subject',
    ];
}
