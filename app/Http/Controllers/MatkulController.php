<?php

namespace App\Http\Controllers;

use App\Matkul;
use Illuminate\Http\Request;
Use Alert;

class MatkulController extends Controller
{
    public function index()
    {
    	$matkul = Matkul::all(); //Select * From nama_table
    	return view('matkul.index', compact('matkul'));
    }

    public function create()
    {
    	return view('matkul.create');

    }
    public function store(Request $request)
    {
    	Matkul::create($request->all());
    	alert()->success('Success', 'Berhasil Menambahkan Data');
    	return redirect()->route('Matkul');
    }
    public function edit($id)
    {
   		$matkul = Matkul::find($id); //Select * From nama_table where id = $id
    	return view('Edit.Matkul', compact('matkul'));
    }
    public function update(Request $request, $id)
    {
    	$matkul = Matkul::find($id);
    	$matkul->update($request->all());
    	toast('Selamat Anda Berhasil Mengedit Data','Success');
    	return redirect()->route('Matkul');
    }
    public function destroy($id)
    {
    	$matkul = Matkul::find($id);
    	$matkul->delete();
    	toast('Selamat Anda Berhasil Mengedit Data','Success');
    	return redirect()->route('Matkul');
    }
}	
