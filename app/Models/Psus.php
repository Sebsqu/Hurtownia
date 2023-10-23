<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psus extends Model
{
    use HasFactory;

    protected $table = 'psu';
    protected $fillable = [
        'psu_fullname',
        'psu_power',
        'psu_standard',
        'psu_efficiency',
        'psu_certificate',
        'psu_price',
        'psu_image_path',
    ];
}
