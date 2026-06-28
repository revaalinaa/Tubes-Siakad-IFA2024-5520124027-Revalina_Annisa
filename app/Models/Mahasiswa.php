<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
     protected $fillable = [

        'nim',
        'nama_mahasiswa',
        'jurusan',
        'angkatan',
        'user_id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
