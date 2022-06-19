@extends('master')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Jenis Service
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
                <form method="post" action="{{ route('jenis_service.update', $Jenis_Service->id_jenis_service) }}" id="myForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="id_jenis_service">ID Service</label>
                        <input type="text" name="id_jenis_service" class="form-control" id="id_jenis_service" value="{{ $Jenis_Service->id_jenis_service }}" ariadescribedby="id_jenis_service" >
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" required="required" name="foto"
                            value="{{ $Jenis_Service->foto }}"></br>
                        <img width="100px" src="{{ asset('images/'.$Jenis_Service->foto)}}">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" name="kategori" class="form-control" id="kategori" value="{{ $Jenis_Service->kategori }}" ariadescribedby="kategori" >
                    </div>
                    <div class="form-group">
                        <label for="harga_service">Harga Service</label>              
                        <input type="harga_service" name="harga_service" class="form-control" id="harga_service" value="{{ $Jenis_Service->harga_service }}" ariadescribedby="harga_service" >
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>              
                        <input type="deskripsi" name="deskripsi" class="form-control" id="deskripsi" value="{{ $Jenis_Service->deskripsi }}" ariadescribedby="deskripsi" >
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
   </div>
@endsection