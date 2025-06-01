<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory;

    //create role model
    protected $table = 'role';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
    ];
    public function rolePermission(): HasMany
    {
        return $this->hasMany(RolePermission::class, 'roleId');
    }
}
