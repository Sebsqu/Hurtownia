<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rams extends Model
{
    use HasFactory;

    protected $table = 'ram';
    protected $fillable = [
        'ram_fullname',
        'ram_type_of_memory',
        'ram_total_capacity',
        'ram_capacity',
        'ram_frequency',
        'ram_cycle_latency',
        'ram_price',
        'ram_image_path',
    ];
}
