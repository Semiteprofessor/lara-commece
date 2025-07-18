<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    /** @use HasFactory<\Database\Factories\AnnouncementFactory> */
    use HasFactory;

    protected $table = 'announcement';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'description',
        'status',
    ];
}
