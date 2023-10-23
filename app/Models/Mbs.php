<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mbs extends Model
{
    use HasFactory;

    protected $table = 'motherboard';
    protected $fillable = [
        'mb_fullname',
        'mb_format',
        'mb_socket',
        'mb_chipset',
        'mb_supported_processors',
        'mb_price',
        'mb_image_path',
    ];
}
