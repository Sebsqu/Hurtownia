<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disks extends Model
{
    use HasFactory;

    protected $table = 'disk';
    protected $fillable = [
        'disk_fullname',
        'disk_capacity',
        'disk_interface',
        'disk_format',
        'disk_read_speed',
        'disk_write_speed',
        'disk_price',
        'disk_image_path'
    ];
}
