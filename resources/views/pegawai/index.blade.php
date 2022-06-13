@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            <h2>Data Pegawai</h2>
            </div>
            <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('pegawai.create') }}">Input Pegawai</a>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Jabatan</th>
    </tr>
    @foreach ($pegawai as $Pegawai)
    <tr>

    <td>{{ $Pegawai->id }}</td>
    <td>{{ $Pegawai->nama }}</td>
    <td>{{ $Pegawai->alamat }}</td>
    <td>{{ $Pegawai->telepon }}</td>
    <td>{{ $Pegawai->jabatan }}</td>
    <td>
    <form action="{{ route('pegawai.destroy',$Pegawai->id) }}" method="POST">

    <a class="btn btn-info" href="{{ route('pegawai.show',$Pegawai->id) }}">Show</a>
    <a class="btn btn-primary" href="{{ route('pegawai.edit',$Pegawai->id) }}">Edit</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection
