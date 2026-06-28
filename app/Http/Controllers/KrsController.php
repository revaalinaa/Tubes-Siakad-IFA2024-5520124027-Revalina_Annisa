<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Krs;
use App\Models\Jadwal;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;



class KrsController extends Controller
{


public function index()
{
    $jadwals = Jadwal::with(['dosen','matakuliah'])->get();

    $krs = Krs::with('jadwal.matakuliah')->get();

    return view('krs.index', compact('jadwals', 'krs'));
}



public function store(Request $request)
{


$mahasiswa = Mahasiswa::where(
'user_id',
auth()->id()
)->first();



Krs::create([

'mahasiswa_id'=>$mahasiswa->id,

'jadwal_id'=>$request->jadwal_id

]);


return redirect('/krs');


}



public function destroy(Krs $krs)
{

$krs->delete();


return redirect('/krs');

}

public function exportPdf()
{

    $data = [
        'krs' => Krs::with('mahasiswa','jadwal')
        ->get()
    ];


    $pdf = PDF::loadView('krs.pdf',$data);


    return $pdf->download('krs.pdf');

}

}