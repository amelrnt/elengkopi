@extends('penjualan.template')
@section('title', 'Data Transaksi')
@section('content')

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="d-flex justify-content-end">
            <div class="text-right">
                <a class="btn btn-primary pull-right" href="/penjualan/transaksi/create">Tambah Data</a>
            </div>
        </div>
        <br>

        <div class="card mb-4">
            <div class="card-header"><strong>Data transaksi</strong></div>
            <div class="card-body">
                @error('error')

                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror

                <div class="example">
                    <table class="table table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $transaksis)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaksis->created_at }}</td>
                                {{-- <td>{{ $transaksis->menu->nama }}</td> --}}
                                {{-- <td>{{ $transaksis->jumlah }}</td> --}}
                                <td>Rp. {{ number_format($transaksis->totalharga,2,",",".") }}</td>

                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                <p class="text-medium-emphasis small">:</p>

            </div>
        </div>
        <!-- /.card.mb-4-->
    </div>
</div>

@endsection


@section('scripts')
<script>
    $(document).ready(function () {
    var table = $('.table').DataTable(
    );

});
</script>

@endsection
