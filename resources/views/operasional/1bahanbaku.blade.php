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
                                    <h1>Data Bahan Baku</h1>
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
                                            <th>Nama Bahan Baku</th>
                                            <th>Biaya Penyimpanan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bahanbaku as $bahanbakus)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $bahanbakus->nama }}</td>
                                            <td>Rp. {{ number_format($bahanbakus->biayapenyimpanan,2,",",".") }}</td>
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
