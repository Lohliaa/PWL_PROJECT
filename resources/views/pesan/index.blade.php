
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('homeuser') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $jenis_service->kategori }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 mt-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ url('images') }}/{{ $jenis_service->foto }}" class="rounded mx-auto d-block"
                                    width="100%" alt="">
                            </div>
                            <div class="col-md-6 mt-5">
                                <h2>{{ $jenis_service->kategori }}</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($jenis_service->harga_service) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Service</td>
                                            <td>:</td>
                                            <td>
                                                <form method="post" action="{{ url('pesan') }}/{{ $jenis_service->id_jenis_service }}">
                                                    @csrf
                                                    <input type="text" name="jumlah_service" class="form-control"
                                                        required="">
                                                    <button type="submit" class="btn btn-primary mt-2"><i
                                                            class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection