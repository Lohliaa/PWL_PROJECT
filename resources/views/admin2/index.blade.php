@extends('master')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-center mt-2">
            <Center>Daftar Transaksi</Center>
        </div>
        <br>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Jumlah Harga</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($service as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->tanggal }}</td>
                <td>{{ $s->status }}</td>
                <td>{{ $s->jumlah_harga }}</td>
                <td>
                    <form action="{{ route('admin2.destroy', $s->id) }}" method="POST"> <a class="btn btn-info"
                            href="{{ route('admin2.show', $s->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('admin2.edit', $s->id) }}">Edit</a>
                        @csrf
                        @method('DELETE') <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <br>
        {{$service->links()}}
        @endsection