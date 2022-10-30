@extends('operasional.template')
@section('title', 'Bahan Baku')
@section('content')
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Data Pembelian Bahan Baku</h1>
                                </div>
                                <div class="add-product">
                                    <a href="/admin/create">Tambah Data</a>
                                </div>
                            </div>
                            <div class="static-table-list">
                                <table class="table" id="table">
                                    <thead>
                                        <tr>
                                            <th width="20px">#</th>
                                            <th>Id Bahan Baku</th>
                                            <th>Fraktur</th>
                                            <th>Jumlah</th>
                                            <th>Biaya Pengiriman</th>
                                            <th>Biaya Pemesanan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pembelianbahanbaku as $pembelianbahanbakus)

                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pembelianbahanbakus->bahanbaku->nama }}</td>
                                            <td>{{ $pembelianbahanbakus->fraktur }}</td>
                                            <td>{{ $pembelianbahanbakus->jumlah }} {{ $pembelianbahanbakus->satuan }}</td>
                                            <td>Rp. {{ number_format($pembelianbahanbakus->biayapengiriman,2,",",".") }}</td>
                                            <td>Rp. {{ number_format($pembelianbahanbakus->biayapemesanan,2,",",".") }}</td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection

@section('scripts')
<script>
    $(document).ready(function () {
    $('#table').DataTable();
});
</script>

@endsection
