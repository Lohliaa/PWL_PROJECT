@extends('master')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                Tambah Jenis Service
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
                    <form method="post" enctype="multipart/form-data" action="{{ route('jenis_service.store') }}" id="myForm">
                    @csrf
                        <div class="form-group">
                            <label for="id_service">ID Jenis Service</label>
                            <input type="text" name="id_jenis_service" class="form-control" id="id_jenis_service" aria-describedby="id_jenis_service" >
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" required="required" name="foto">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="kategori" name="kategori" class="form-control" id="kategori" aria-describedby="kategori" >
                        </div>
                        <div class="form-group">
                            <label for="harga_service">Harga Service</label>
                            <input type="harga_service" name="harga_service" class="form-control" id="harga_service" aria-describedby="harga_service" >
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="deskripsi" name="deskripsi" class="form-control" id="deskripsi" aria-describedby="deskripsi" >
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection