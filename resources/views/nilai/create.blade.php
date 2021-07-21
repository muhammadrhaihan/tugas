@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Nilai
                </div>
                <div class="card-body">
                <form action="{{ route('simpan.nilai') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <div class="form col">
                                <div class="row">
                                   <label for="mahasiswa_id">Nama Mahasiswa</label>
                                       <select class="form-control" name="mahasiswa_id" id="mahasiwa_id">
                                           <option value=""disabled selected>--- Pilih Nama ---</option>
                                           @foreach ($mahasiswa as $mhs)
                                           <option value="{{ $mhs->id }}" > {{ $mhs->user->name }}</option>
                                           @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="form col">
                                <div class="row">
                                    <label for="matkul">Nama Matkul</label>
                                        <select class="form-control" name="matkul_id" id="matkul_id">
                                            <option value="" disabled selected>-- Pilih Nama Matkul --</option>
                                            @foreach ($matkul as $mk)
                                            <option value="{{ $mk->id}}">{{$mk->nama_matkul}}</option>
                                            @endforeach
                                        </select>
                                </div>
                               </div>
                                <div class="form col">
                                <div class="row">
                                    <label for="nilai">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="Tambahkan Nilai">
                                </div>
                       <div class="form group float-right">
                           <div class="form row ">
                                <div class="col">
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <a href="{{ route('nilai') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                           </div>
                       </div>
                    </form>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection