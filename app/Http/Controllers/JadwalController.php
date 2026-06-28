<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Dosen;
use App\Models\Matakuliah;
use Illuminate\Http\Request;


class JadwalController extends Controller
{


public function index()
{
    $jadwals = Jadwal::with(['dosen','matakuliah'])->get();

    return view('jadwal.index', compact('jadwals'));
}



public function create()
{

$dosen = Dosen::all();

$matakuliah = Matakuliah::all();


return view('jadwal.create',
compact('dosen','matakuliah'));

}



public function store(Request $request)
{

Jadwal::create([


'dosen_id'=>$request->dosen_id,

'matakuliah_id'=>$request->matakuliah_id,

'hari'=>$request->hari,

'jam'=>$request->jam,

'kelas'=>$request->kelas


]);


return redirect('/jadwal');

}



public function destroy(Jadwal $jadwal)
{

$jadwal->delete();

return redirect('/jadwal');

}


}