<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
     protected $fillable = [

        'nidn',
        'nama_dosen',
        'email',
        'no_hp'

    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
