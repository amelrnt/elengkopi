@extends('owner.template')
@section('title', 'User')
@section('content')

<div class="data-table-area mg-b-15">

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data Menu</h1>
                        </div>
                    </div>
                    <div class="add-product">
                        <a href="/owner/user/create">Tambah Data</a>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="fixed-table-container" style="padding-bottom: 0px;">
                                    <div class="fixed-table-body">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                            data-key-events="true"
                                            data-resizable="true"
                                            data-show-export="true" data-toolbar="#toolbar"
                                            class="table table-hover JColResizer">
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
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>

    </div>
</div>




@endsection

@section('scripts')

@endsection
