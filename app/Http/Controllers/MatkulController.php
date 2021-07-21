<?php

namespace App\Http\Controllers;

use App\Matkul;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Alert;

class matkulController extends Controller
{
    public function index()
    {
        $matkul = Matkul::all(); //select * from matkul
        return view ('matkul.index', compact('matkul'));
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $request)
    {
        Matkul::create($request->all());
        alert()->success('Sukses','Data Berhasil disimpan');
        return redirect()->route('matkul');
    }

    public function edit($id)
    {
        $matkul = Matkul::find($id); // untuk mencari data // select * from nama_table
        return view('matkul.edit', compact('matkul'));
    }
    public function update(Request $request, $id)
    {
        $matkul = Matkul::find($id); 
        $matkul->update($request->all());
        toast('Yeay Berhasil Mengedit Data','success');

        return redirect()->route('matkul');
    }
    public function destroy($id)
    {
        $matkul = Matkul::find($id); 
        $matkul->delete();
        toast('Yeay Berhasil Menghapus Data','success');
        return redirect()->route('matkul');
    }
}
