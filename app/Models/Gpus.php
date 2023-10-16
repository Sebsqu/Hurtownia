<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gpus extends Model
{
    use HasFactory;

    protected $table = 'gpu';
    protected $filleable = [
        'gpu_fullname',
        'gpu_connector',
        'gpu_memory',
        'gpu_memory_bus',
        'gpu_timing',
        'gpu_charger',
        'gpu_outputs',
        'gpu_price',
        'gpu_image_path'
    ];
}
