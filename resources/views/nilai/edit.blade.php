@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Nilai    
                </div>
                <div class="card-body">
                    <form action="{{ route('update.nilai', $nilai->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <div class="form col">

                                <div class="row">
                                <label for="mahasiswa_id">Nama Mahasiswa</label>
                                <select class="form-control" name="mahasiswa_id" id="mahasiswa_id">
                                    <option value=""disabled selected>--- Pilih Nama ---</option>
                                    @foreach ($mahasiswa as $mhs)
                                    <option value="{{ $mhs->id }}" {{ $nilai->mahasiswa_id == $mhs->id ? 'selected' : '' }} > {{ $mhs->user->name }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                           <div class="form col">
                                <div class="row">
                                    <label for="matkul_id">Nama Matkul</label>
                                        <select name="matkul_id" id="matkul_id" class="form-control">
                                            <option value="" disabled selected>-- Pilih Nama Matkul --</option>
                                            @foreach ($matkul as $mk)
                                            <option value="{{ $mk->id}}" {{ $nilai->matkul_id == $mk->id ? 'selected' : '' }} > {{$mk->nama_matkul}}</option>
                                            @endforeach
                                        </select>
                                </div>
                           </div>
                           <div class="form col">
                                <div class="row">
                                    <label for="nilai">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" value="{{ is_null ($nilai) ? '' : $nilai->nilai }}">
                                </div>
                        <div class="form-group float right">
                            <div class="form row">
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