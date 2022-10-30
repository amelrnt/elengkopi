@extends('owner.template')
@section('title', 'Menu')
@section('content')

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="d-flex justify-content-end">
            <div class="text-right">
                <a class="btn btn-primary pull-right" href="/owner/menu/create">Tambah Data</a>
            </div>
        </div>
        <br>
        <div class="card mb-4">
            <div class="card-header"><strong>Data Menu</strong></div>
            <div class="card-body">
                @error('error')

                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
                @if (\Session::has('success'))

                <div class="alert alert-success" role="alert">
                    {!! \Session::get('success') !!}.
                </div>
                @endif

                <div class="example">
                    <table class="table table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Menu</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menu as $menus)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $menus->nama }}</td>
                                <td>Rp. {{ number_format($menus->harga,2,",",".") }}</td>

                                <td class="row">
                                    <form action="/owner/menu/{{ $menus->id }}/edit" method="get"
                                        class="col-md-4">
                                        <button type="submit" class="btn btn-primary me-2">
                                            <svg class="icon" style="color: white">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil">
                                                </use>
                                            </svg>

                                        </button>

                                    </form>
                                    <form action="/owner/menu/{{ $menus->id }}" method="post" class="col-md-4">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger me-2">
                                            <svg class="icon" style="color: white">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash">
                                                </use>
                                            </svg>
                                        </button>

                                    </form>
                                    {{-- <a href="/admin/edit/$admin -> id_pegawai"><button data-toggle="tooltip"
                                            title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i></button> </a> --}}
                                    <!-- <a href="/admin/delete/$admin -> id_pegawai" class="Primary mg-b-10"
                                data-toggle="modal"><button class="pd-setting-ed"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i></button></a> -->
                                </td>
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
    $('.table').DataTable();
    $('.table tbody').on('click', '.btn-danger', function(e) {
        e.preventDefault();

        var href = $(this).attr('href');
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data!'
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).closest('form').submit();
            }
        })
    });
});
</script>

@endsection
