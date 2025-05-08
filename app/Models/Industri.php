<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    //
    protected $fillable = [
        'nama_industri',
        'tanggal_kerjasama',
        'profile_industri',
        'logo_industri',
        'alamat_industri',
        'kontak_industri',
        'email_industri',
        'bidang_konsentrasi',
    ];
}
