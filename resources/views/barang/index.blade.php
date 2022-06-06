@extends('barang.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            <h2>Data Barang</h2>
            </div>
            <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Barang</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
        <th>id</th>
        <th>Nama_Barang</th>
        <th>Jenis_Barang</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($barang as $Barang)
    <tr>

    <td>{{ $Barang->id }}</td>
    <td>{{ $Barang->Nama_Barang }}</td>
    <td>{{ $Barang->Jenis_Barang }}</td>
    <td>{{ $Barang->Gambar }}</td>
    <td>{{ $Barang->Harga }}</td>
    <td>
    <form action="{{ route('barang.destroy',$Barang->id) }}" method="POST">

    <a class="btn btn-info" href="{{ route('barang.show',$Barang->id) }}">Show</a>
    <a class="btn btn-primary" href="{{ route('barang.edit',$Barang->id) }}">Edit</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
        </tr>
        @endforeach
    </table>
@endsection