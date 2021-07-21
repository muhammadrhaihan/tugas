@extends('layouts.app')
 
@section('content')
    
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header">Edit Matkul</div>
                 <div class="card-body">
                 <form method="POST" action="{{ route('update.matkul', $matkul->id)}}">
                 @csrf
                         <div class="form-group">
                            <div class="from row">
                                <div class="col">
                                    <label>Kode Matakuliah</label>
                                    <input type="text" class="form-control" name="kd_matkul" placeholder="Tambahkan Kode matkul" value="{{ is_null
                                    ('$matkul') ? '' : $matkul->kd_matkul }}">
                                </div>
                                <div class="col">
                                    <label>Nama Matakuliah</label>
                                    <input type="text" class="form-control" name="nama_matkul" placeholder="Tambahkan Nama Matakuliah" value="{{ is_null
                                    ('$matkul') ? '' : $matkul->nama_matkul }}">
                                </div>
                                <div class="col">
                                    <label>SKS</label>
                                    <input type="number" class="form-control" name="sks" placeholder="Tambahkan SKS Matakuliah" value="{{ is_null
                                    ('$matkul') ? '' : $matkul->sks }}">
                                </div>
                            </div>
                        </div>
                        <div class="form group">
                            <div class="form row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('matkul')}}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection