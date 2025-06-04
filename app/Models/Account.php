<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    /** @use HasFactory<\Database\Factories\AccountFactory> */
    use HasFactory;

    protected $table = 'account';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','type',
    ];

    public function SubAccount(): HasMany
    {
        return $this->hasMany(SubAccount::class, 'accountId');
    }
}
