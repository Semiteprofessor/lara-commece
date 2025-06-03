<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcomSetting extends Model
{
    /** @use HasFactory<\Database\Factories\EcomSettingFactory> */
    use HasFactory;

    public $table = 'ecom_setting';

    protected $fillable = [
        'IsActive',
    ];
}
