<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Matakuliah;
use App\Models\Jadwal;
use App\Models\Krs;

class DashboardController extends Controller
{
        public function index()
    {
        return view('dashboard.dashboard', [
            'mahasiswa' => Mahasiswa::count(),
            'dosen' => Dosen::count(),
            'matakuliah' => Matakuliah::count(),
            'jadwal' => Jadwal::count(),
            'krs' => Krs::count(),
        ]);
    }
}