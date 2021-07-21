<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\User;
use App\Makul;
use App\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index(){
        $nilai = Nilai::with(['makul', 'mahasiswa'])->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create(){
        $makul = Makul::all();
        $mahasiswa = Mahasiswa::all();
        return view('nilai.create', compact('makul', 'mahasiswa'));
    }

    public function store(Request $request){
        Nilai::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan!');
        return redirect()->route('nilai');
    }

    public function edit($id){
        $makul = Makul::all();
        $mahasiswa = Mahasiswa::all();
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai', 'makul', 'mahasiswa'));
    }

    public function update(Request $request, $id){
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Data Berhasil Diubah!','success');
        return redirect()->route('nilai');
    }

    public function destroy(Request $request, $id){
        $nilai = nilai::find($id);
        $nilai->delete();
        toast('Data Berhasil Dihapus!','success');
        return redirect()->route('nilai');
    }
}
