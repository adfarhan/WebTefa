<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{

    //
    protected $table = 'visis';

    protected $fillable = ['visi'];

    public function misis()
    {
        return $this->hasMany(Misi::class);
    }
}
