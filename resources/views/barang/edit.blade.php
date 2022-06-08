@extends('master')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Barang
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('barang.update', $Barang->id) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="id">ID</label> 
                    <input type="text" name="id" class="form-control" id="id" value="{{ $Barang->id }}" aria-describedby="id" > 
                </div>
                <div class="form-group">
                    <label for="Nama_Barang">Nama Barang</label> 
                    <input type="text" name="Nama_Barang" class="form-control" id="Nama_Barang" value="{{ $Barang->Nama_Barang }}" aria-describedby="Nama_Barang" > 
                </div>
                <div class="form-group">
                    <label for="Jenis_Barang">Jenis Barang</label> 
                    <input type="Jenis_Barang" name="Jenis_Barang" class="form-control" id="Jenis_Barang" value="{{ $Barang->Jenis_Barang }}" aria-describedby="Jenis_Barang" > 
                </div>
                <div class="form-group">
                    <label for="Gambar">Gambar</label> 
                    <input type="file" name="Gambar" class="form-control" id="Gambar" value="{{ $Barang->Gambar }}" aria-describedby="Gambar" > 
                </div>
                <div class="form-group">
                    <label for="Harga">Harga</label> 
                    <input type="Harga" name="Harga" class="form-control" id="Harga" value="{{ $Barang->Harga }}" aria-describedby="Harga" > 
                </div>
                <div class="form-group">
                    <label for="Deskripsi">Deskripsi</label> 
                    <input type="Deskripsi" name="Deskripsi" class="form-control" id="Deskripsi" value="{{ $Barang->Deskripsi }}" aria-describedby="Deskripsi" > 
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection 