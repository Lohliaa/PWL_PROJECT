@extends('master') 
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Detail Transaksi </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Id: </b>{{ $service->id }}</li>
                        <li class="list-group-item"><b>Tanggal: </b>{{ $service->tanggal }}</li>
                        <li class="list-group-item"><b>Status: </b>{{ $service->status }}</li>
                        <li class="list-group-item"><b>Jumlah Harga: </b>{{ $service->jumlah_harga }}</li>
                    </ul>
                </div> <a class="btn btn-success mt-3" href="{{ route('homeadmin') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection