<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{

    protected $fillable = [
        'nama', 'nip', 'jabatan', 'foto', 'facebook', 'instagram', 'linkedin'
    ];
}
