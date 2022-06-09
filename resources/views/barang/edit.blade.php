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
                    <label for="nama_barang">Nama Barang</label> 
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{ $Barang->nama_barang }}" aria-describedby="nama_barang" > 
                </div>
                <div class="form-group">
                    <label for="jenis_barang">Jenis Barang</label> 
                    <input type="jenis_barang" name="jenis_barang" class="form-control" id="jenis_barang" value="{{ $Barang->jenis_barang }}" aria-describedby="jenis_barang" > 
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label> 
                    <input type="file" name="gambar" class="form-control" id="gambar" value="{{ $Barang->gambar }}" aria-describedby="gambar" > 
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label> 
                    <input type="harga" name="harga" class="form-control" id="harga" value="{{ $Barang->harga }}" aria-describedby="harga" > 
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label> 
                    <input type="deskripsi" name="deskripsi" class="form-control" id="deskripsi" value="{{ $Barang->deskripsi }}" aria-describedby="deskripsi" > 
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection 