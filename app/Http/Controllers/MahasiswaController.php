<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $mahasiswas = Mahasiswa::when($search, function ($query) use ($search) {
            $query->where('nama_mahasiswa', 'like', "%{$search}%");
        })->get();

        return view('mahasiswa.index', compact('mahasiswas'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mahasiswa::create([

            'user_id'=>auth()->id(),
            'nim'=>$request->nim,
            'nama_mahasiswa'=>$request->nama_mahasiswa,
            'jurusan'=>$request->jurusan,
            'angkatan'=>$request->angkatan

        ]);


    return redirect('/mahasiswa');

    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim'=>'required',
            'nama_mahasiswa'=>'required'
        ]);


        $mahasiswa->update([

            'nim'=>$request->nim,
            'nama_mahasiswa'=>$request->nama_mahasiswa,
            'jurusan'=>$request->jurusan,
            'angkatan'=>$request->angkatan

        ]);


        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
