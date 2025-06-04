<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /** @use HasFactory<\Database\Factories\AccountFactory> */
    use HasFactory;

    protected $table = 'account';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','type',
    ];

    public function SubAccount()
    {
        return $this->hasMany(SubAccount::class, 'accountId');
    }
}
