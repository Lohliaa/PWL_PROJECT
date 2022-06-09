@extends('master')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Customer
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
            <form method="post" action="{{ route('customer.update', $Customer->id) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="id">ID</label> 
                    <input type="text" name="id" class="form-control" id="id" value="{{ $Customer->id }}" aria-describedby="id" > 
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label> 
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $Customer->nama }}" aria-describedby="nama" > 
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label> 
                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $Customer->alamat }}" aria-describedby="alamat" > 
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label> 
                    <input type="text" name="telepon" class="form-control" id="telepon" value="{{ $Customer->telepon }}" aria-describedby="telepon" > 
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection 