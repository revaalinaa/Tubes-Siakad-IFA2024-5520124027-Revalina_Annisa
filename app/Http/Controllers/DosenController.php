<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{


public function index()
{
    $dosens = Dosen::all();

    return view('dosen.index', compact('dosens'));
}



public function create()
{

    return view('dosen.create');

}



public function store(Request $request)
{

    $request->validate([

        'nidn'=>'required|unique:dosens',

        'nama_dosen'=>'required',

        'email'=>'required|email'

    ]);



    Dosen::create([

        'nidn'=>$request->nidn,

        'nama_dosen'=>$request->nama_dosen,

        'email'=>$request->email,

        'no_hp'=>$request->no_hp

    ]);


    return redirect('/dosen');

}




public function edit(Dosen $dosen)
{

    return view('dosen.edit', compact('dosen'));

}




public function update(Request $request, Dosen $dosen)
{

    $request->validate([

        'nidn'=>'required',

        'nama_dosen'=>'required',

        'email'=>'required|email'

    ]);



    $dosen->update([

        'nidn'=>$request->nidn,

        'nama_dosen'=>$request->nama_dosen,

        'email'=>$request->email,

        'no_hp'=>$request->no_hp

    ]);


    return redirect('/dosen');

}




public function destroy(Dosen $dosen)
{

    $dosen->delete();


    return redirect('/dosen');

}


}