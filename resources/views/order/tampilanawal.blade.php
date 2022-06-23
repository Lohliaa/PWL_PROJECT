@extends('order.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12 mt-1">
            <nav aria-label="breadcrumb">
            </nav>
        </div>
            @foreach ($jenis_services as $js)
                    <div class="container">
                        <div class="new-arrivals-content">
                            <br><br><br>
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-new-arrival">
                                        <div class="single-new-arrival-bg">
                                            <img width="10" height="250" src="{{ url('images') }}/{{ $js->foto }}" class="card-img-top"
                            alt="...">
                                            <div class="single-new-arrival-bg-overlay"></div>
                                            <div class="sale bg-1">
                                                <p>sale</p>
                                            </div>
                                            <div class="new-arrival-cart">
                                                <p>
                                                    <span class="lnr lnr-cart"></span>
                                                    <a href="{{url('pesan')}}/{{$js->id_jenis_service}}">add <span>to </span> cart</a>
                                                </p>
                                                <p class="arrival-review pull-right">
                                                    <span class="lnr lnr-heart"></span>
                                                    <span class="lnr lnr-frame-expand"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <h4><a href="#">{{ $js->kategori }}</a></h4>
                                        <p class="arrival-jenis_service-price">Rp. {{ $js->harga_service }}</p>                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            <br><br>
            {{$jenis_services -> links()}}
        </div>
    </div>
@endsection