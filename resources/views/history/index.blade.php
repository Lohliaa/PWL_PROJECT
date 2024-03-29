@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('pesan') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Riwayat Service</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Riwayat Service</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($services as $s)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $s->tanggal }}</td>
                                <td>
                                    @if($s->status == 1)
                                    Sudah Pesan & Belum dibayar
                                    @else
                                    Sudah dibayar
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($s->jumlah_service) }}</td>
                                <td>
                                    <a href="{{ url('history') }}/{{ $s->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
