<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    protected $table = 'case';
    protected $fillable = [
        'case_fullname',
        'case_type',
        'case_standard',
        'case_fans',
        'case_side_panel',
        'case_price',
        'case_image_path',
    ];
}
