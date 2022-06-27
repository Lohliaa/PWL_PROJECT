<!DOCTYPE html>
<html>

<head>
    <title>Cetak Riwayat Layanan Service Motor</title>
</head>

<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>
    <center>
        <h2>Detail Service Motor</h2>
    </center>
    <br>
    <br><br><br>
    <table class="table table-bordered" width="700px">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Jenis Service</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total Harga</th>
        </tr>
        <?php $no = 1; ?>
        @foreach($service_details as $service_detail)
        <tr>
            <td>{{ $no++ }}</td>
            <td>
                <img src="{{ url('storage') }}//{{ $service_detail->jenis_service->foto }}" width="100" alt="...">
            </td>
            {{--  <td>{{ $service_detail->jenis_service->foto }}</td>  --}}
            <td align="center">{{ $service_detail->jenis_service->kategori }}</td>
            <td align="center">{{ $service_detail->jumlah }}</td>
            <td align="center">{{ number_format($service_detail->jenis_service->harga_service) }}</td>
            <td align="center">{{ number_format($service_detail->jumlah_harga) }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>