@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mata Kuliah
                <a href="{{ route('tambah.matkul')}}" class="btn btn-primary btn-md float-right">Tambah Data</a>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>KODE MATKUL</th>
                                <th>NAMA MATKUL</th>
                                <th>SKS</th>
                                <th>AKSI</th>
                            </tr>
                            @php
                                 $no = 1;
                            @endphp
                            @foreach ($matkul as $mk)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $mk->kd_matkul }}</td>
                                <td>{{ $mk->nama_matkul}}</td>
                                <td>{{ $mk->sks}}</td>
                                <td>
                                    <a href="{{ route('edit.matkul', $mk->id)}}" class="btn btn-sm btn-warning">EDIT</a>
                                    <a href="{{ route('hapus.matkul', $mk->id)}}" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection