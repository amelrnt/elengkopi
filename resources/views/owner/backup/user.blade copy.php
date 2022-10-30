@extends('owner.template')
@section('title', 'Dashboard')
@section('content')


<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Total Penjualan</h5>
                        <h2>Rp. <span class="counter">5000</span> <span class="tuition-fees"></span>
                        </h2>
                        <span class="text-success">20%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span
                                    class="sr-only">20% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Total Stok</h5>
                        <h2><span class="counter">3000</span> <span class="tuition-fees"></span>
                        </h2>
                        <span class="text-danger">30%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span
                                    class="sr-only">230% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Total Pembelian Bahan Baku</h5>
                        <h2>Rp. <span class="counter">2000</span> <span class="tuition-fees"></span>
                        </h2>
                        <span class="text-info">60%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span
                                    class="sr-only">20% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Total User</h5>
                        <h2><span class="counter">3500</span> <span class="tuition-fees"></span>
                        </h2>
                        <span class="text-inverse">80%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span
                                    class="sr-only">230% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-sales-area mg-tb-30">

    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Data User</h1>
                            </div>
                            <div class="add-product">
                                <a href="/admin/create">Tambah Data</a>
                            </div>
                        </div>
                        <div class="static-table-list">
                            <table class="table-striped" id="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Pegawai</th>
                                        <th>Email</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $users)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $users->name }}</td>
                                        <td>{{ $users->email }}</td>
                                        @if ($users->role == '1')
                                        <td>Operasional</td>
                                        @endif
                                        @if ($users->role == '2')
                                        <td>Penjualan</td>
                                        @endif
                                        @if ($users->role == '3')
                                        <td>Owner</td>
                                        @endif

                                        <td>
                                            <a href="/admin/edit/$admin -> id_pegawai"><button data-toggle="tooltip"
                                                    title="Edit" class="pd-setting-ed"><i
                                                        class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></button> </a>
                                            <!-- <a href="/admin/delete/$admin -> id_pegawai" class="Primary mg-b-10"
                                        data-toggle="modal"><button class="pd-setting-ed"><i class="fa fa-trash-o"
                                                aria-hidden="true"></i></button></a> -->
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Data User</h1>
                                </div>
                                <div class="add-product">
                                    <a href="/admin/create">Tambah Data</a>
                                </div>
                            </div>
                            <div class="static-table-list">
                                <table class="table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Pegawai</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $users)

                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $users->name }}</td>
                                            <td>{{ $users->email }}</td>
                                            @if ($users->role == '1')
                                            <td>Operasional</td>
                                            @endif
                                            @if ($users->role == '2')
                                            <td>Penjualan</td>
                                            @endif
                                            @if ($users->role == '3')
                                            <td>Owner</td>
                                            @endif

                                            <td>
                                                <a href="/admin/edit/$admin -> id_pegawai"><button data-toggle="tooltip"
                                                        title="Edit" class="pd-setting-ed"><i
                                                            class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i></button> </a>
                                                <!-- <a href="/admin/delete/$admin -> id_pegawai" class="Primary mg-b-10"
                                            data-toggle="modal"><button class="pd-setting-ed"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i></button></a> -->
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>

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
