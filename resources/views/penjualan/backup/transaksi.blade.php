@extends('penjualan.template')
@section('title', 'Bahan Baku')
@section('content')
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Data Transaksi</h1>
                                </div>
                                <div class="add-product">
                                    <a href="/admin/create">Tambah Data</a>
                                </div>
                            </div>
                            <div class="static-table-list">
                                <table class="table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th width="20px">#</th>
                                            <th>Menu</th>
                                            <th>User</th>
                                            <th>Jumlah</th>
                                            <th>Total Harga</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaksi as $transaksis)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $transaksis->menu->nama }}</td>
                                            <td>{{ $transaksis->user->name }}</td>
                                            <td>{{ $transaksis->jumlah }}</td>
                                            <td>Rp. {{ number_format($transaksis->totalharga,2,",",".") }}</td>
                                            <td>
                                                <a href="/admin/edit/$admin -> id_pegawai"><button data-toggle="tooltip"
                                                        title="Edit" class="pd-setting-ed"><i
                                                            class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i></button> </a>
                                                <a href="/admin/delete/$admin -> id_pegawai" class="Primary mg-b-10"
                                            data-toggle="modal"><button class="pd-setting-ed"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i></button></a>
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
        </div>


@endsection

@section('scripts')
<script>
    $(document).ready(function () {
    $('#table').DataTable();
});
</script>

@endsection
