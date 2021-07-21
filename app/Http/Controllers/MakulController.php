<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;
Use Alert;

class MakulController extends Controller
{
    public function index(){
        $makul = Makul::all();
        return view('makul.index', compact('makul'));
    }

    public function create(){
        return view('makul.create');
    }

    public function store(Request $request){
        Makul::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan!');
        return redirect()->route('makul');
    }

    public function edit(Request $request, $id){
        $makul = Makul::where('id_makul', $id)->first();
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id){
        $makul = Makul::where('id_makul', $id)->update([
            'kd_makul' => $request->kd_makul,
            'nm_makul' => $request->nm_makul,
            'sks' => $request->sks
        ]);
        toast('Data Berhasil Diubah!','success');
        return redirect()->route('makul');
    }

    public function destroy(Request $request, $id){
        $makul = Makul::where('id_makul', $id)->delete();
        return redirect()->route('makul');
    }
}
