<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'kode_produk',
        'nama_produk',
        'gambar',
        'deskripsi',
        'harga',
    ];

    public function gambars()
    {
        return $this->hasMany(ProdukGambar::class);
    }
}
