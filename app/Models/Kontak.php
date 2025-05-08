<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{

    //
    protected $fillable = [
        'nama', 'email', 'nomor_telepon', 'instagram', 'facebook', 'twitter', 'tiktok', 'youtube',

    ];
}
