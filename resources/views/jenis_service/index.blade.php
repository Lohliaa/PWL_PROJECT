@extends('master')
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Data Jenis Service</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('jenis_service.create') }}"> Input Jenis Service</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-striped table-hover">
        <tr>
            <th>ID Jenis Service</th>
            <th>Foto</th>
            <th>Kategori</th>
            <th>Harga Service</th>
            <th>Deskripsi</th>
            <th width="290px">Action</th>
        </tr>
        @foreach ($jenis_service as $js)
        <tr>

            <td>{{ $js->id_jenis_service }}</td>
            <td><img width="100px" height="100px" src="{{asset('storage/'.$js->foto)}}"></td>
            <td>{{ $js->kategori }}</td>
            <td>{{ $js->harga_service}}</td>
            <td>{{ $js->deskripsi }}</td>
            <td>
            <form action="{{ route('jenis_service.destroy',$js->id_jenis_service ) }}" method="POST">
                <a class="btn btn-info" href="{{ route('jenis_service.show',$js->id_jenis_service ) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('jenis_service.edit',$js->id_jenis_service ) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
    @endforeach
    </table>
        {{ $jenis_service->links() }}

@endsection
