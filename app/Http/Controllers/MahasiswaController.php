<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\User;
use App\Makul;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::with(['user'])->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create(){
        $user = User::all();
        return view('mahasiswa.create', compact('user'));
    }

    public function store(Request $request){
        Mahasiswa::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan!');
        return redirect()->route('mahasiswa');
    }

    public function edit($id){
        $user = User::all();
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa', 'user'));
    }

    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Data Berhasil Diubah!','success');
        return redirect()->route('mahasiswa');
    }

    public function destroy(Request $request, $id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Data Berhasil Dihapus!','success');
        return redirect()->route('mahasiswa');
    }
}
