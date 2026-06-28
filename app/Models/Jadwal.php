<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [

        'matakuliah_id',
        'dosen_id',
        'hari',
        'jam',
        'kelas'

    ];


    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }


    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }
}
