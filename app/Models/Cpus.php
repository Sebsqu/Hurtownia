<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpus extends Model
{
    use HasFactory;

    protected $table = 'cpu';
    protected $fillable = [
        'cpu_fullname',
        'cpu_socket',
        'cpu_timing',
        'cpu_cache',
        'cpu_cores',
        'cpu_graphics',
        'cpu_price',
        'cpu_image_path',
    ];
}
