@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Data Customer</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('customer.create') }}"> Input Customer</a>
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
        </tr>
        @foreach ($customer as $Customer)
        <tr>

            <td>{{ $Customer->id }}</td>
            <td>{{ $Customer->nama }}</td>
            <td>{{ $Customer->alamat }}</td>
            <td>{{ $Customer->telepon }}</td>
            <td>
                <form action="{{ route('customer.destroy',$Customer->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('customer.show',$Customer->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('customer.edit',$Customer->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
{{ $customer->links() }}
@endsection