<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $fillable = [
        'judul_berita',
        'tanggal_berita',
        'isi_berita',
        'gambar_berita',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
