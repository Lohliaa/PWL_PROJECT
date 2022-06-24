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
                <form method="post" action="{{ route('jenis_service.update', $JenisService->id_jenis_service) }}" id="myForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="id_jenis_service">ID Service</label>
                        <input type="text" name="id_jenis_service" class="form-control" id="id_jenis_service" value="{{ $JenisService->id_jenis_service }}" ariadescribedby="id_jenis_service" >
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" required="required" name="foto"
                            value="{{ $JenisService->foto }}"></br>
                        <img width="100px" src="{{ asset('storage/'.$JenisService->foto)}}">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" name="kategori" class="form-control" id="kategori" value="{{ $JenisService->kategori }}" ariadescribedby="kategori" >
                    </div>
                    <div class="form-group">
                        <label for="harga_service">Harga Service</label>              
                        <input type="harga_service" name="harga_service" class="form-control" id="harga_service" value="{{ $JenisService->harga_service }}" ariadescribedby="harga_service" >
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>              
                        <input type="deskripsi" name="deskripsi" class="form-control" id="deskripsi" value="{{ $JenisService->deskripsi }}" ariadescribedby="deskripsi" >
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
   </div>
@endsection