@extends('master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Barang
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>ID: </b>{{$Barang->id}}</li>
                <li class="list-group-item"><b>Nama Barang: </b>{{$Barang->Nama_Barang}}</li>
                <li class="list-group-item"><b>Jenis Barang: </b>{{$Barang->Jenis_Barang}}</li>
                <li class="list-group-item"><b>Gambar: </b>{{$Barang->Gambar}}</li>
                <li class="list-group-item"><b>Harga: </b>{{$Barang->Harga}}</li>
                <li class="list-group-item"><b>Deskripsi: </b>{{$Barang->Deskripsi}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('barang.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection 