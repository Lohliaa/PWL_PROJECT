@extends('master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Jenis Service
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID Jenis Service: </b>{{$JenisService->id_jenis_service}}</li>           
                    <li class="list-group-item"><b>Foto: </b><img width="100px" src="{{ asset('storage/' .$JenisService->foto)}}">
                    <li class="list-group-item"><b>Kategori: </b>{{$JenisService->kategori}}</li>
                    <li class="list-group-item"><b>Harga Service: </b>{{$JenisService->harga_jual}}</li>
                    <li class="list-group-item"><b>Deskripsi: </b>{{$JenisService->deskripsi}}</li>
                    </ul>
                    </div>
            <a class="btn btn-success mt-3" href="{{ route('jenis_service.index') }}">Kembali</a>
            </div>
        </div>
   </div>
@endsection