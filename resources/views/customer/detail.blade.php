@extends('master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Customer
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>ID: </b>{{$Customer->id}}</li>
                <li class="list-group-item"><b>Nama: </b>{{$Customer->nama}}</li>
                <li class="list-group-item"><b>Alamat: </b>{{$Customer->alamat}}</li>
                <li class="list-group-item"><b>Telepon: </b>{{$Customer->telepon}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('customer.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection 