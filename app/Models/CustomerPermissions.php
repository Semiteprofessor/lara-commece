<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPermissions extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerPermissionsFactory> */
    use HasFactory;
    protected $table = 'customerPermissions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user',
        'permissions',
    ];
}
