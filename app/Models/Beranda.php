<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    protected $fillable = [
        'gambaran_umum',
        'keunggulan',
        'manfaat',
    ];
}
