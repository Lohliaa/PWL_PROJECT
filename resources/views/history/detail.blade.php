@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('history') }}">Riwayat Service</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Service Motor Customer</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Sukses Check Out</h3>
                    <h5>Layanan Service Motor anda sudah sukses dicheck out selanjutnya silakan melakukan pembayaran di tempat dengan nominal sebesar : <strong>Rp. {{ number_format($service->harga_service-$service->kode) }}</strong></h5>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Detail Service</h3>
                    @if(!empty($service))
                    <p align="right">Tanggal Pesan : {{ $service->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Jenis Service</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($service_details as $service_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ url('images') }}//{{ $service_detail->jenis_service->foto }}" width="100" alt="...">
                                </td>
                                <td>{{ $service_detail->jenis_service->kategori }}</td>
                                <td>{{ $service_detail->jumlah }} </td>
                                <td>Rp. {{ number_format($service_detail->jenis_service->harga_service) }}</td>
                                <td>Rp. {{ number_format($service_detail->jumlah_harga) }}</td>
                                
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($service->jumlah_harga) }}</strong></td>
                                
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
        
    </div>
    <br>
    <center><a class="btn btn-danger" href="{{ route('cetak_pdf', $service ) }}"> Cetak ke PDF</a></center>
</div>
@endsection