<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class DaftarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftars = Daftar::all(); 

        return view('daftars.index', compact('daftars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namalengkap' => 'required', 
            'jk' => 'required', 
            'alamatlengkap' => 'required', 
            'agama' => 'required', 
            'asalsmp' => 'required',
            'jurusan' => 'required',  
        ]); 

        $siswa=Daftar::create($request->all()); 

        return redirect()->route('print', $siswa->id)->with('success','Selamat, Anda sudah terdaftar di SMK Semangat 45 !.');
    }
    public function print($id){
        $siswa=Daftar::find($id);
        return view('daftars.print', compact('siswa'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function show(Daftar $daftar)
    {
        return view('daftars.detail', compact('daftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftar $daftar)
    {
        return view('daftars.edit', compact('daftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftar $daftar)
    {
        $request->validate([
            'namalengkap' => 'required', 
            'jk' => 'required', 
            'alamatlengkap' => 'required', 
            'agama' => 'required', 
            'asalsmp' => 'required',
            'jurusan' => 'required',  
        ]); 

        $daftar->update($request->all());

        return redirect()->route('daftars.index')
            ->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftar $daftar)
    {
        $daftar->delete(); 

        return redirect()->route('daftars.index')
            ->with('success', 'Data sudah dihapus');
    }
}
