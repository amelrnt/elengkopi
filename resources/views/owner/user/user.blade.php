@extends('owner.template')
@section('title', 'User')
@section('content')

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="d-flex justify-content-end">
            <div class="text-right">
                <a class="btn btn-primary pull-right" href="/owner/user/create">Tambah Data</a>
            </div>
        </div>
        <br>
        <div class="card mb-4">
            <div class="card-header"><strong>Data User</strong></div>
            <div class="card-body">
                @error('error')

                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror

                <div class="example">
                    <table class="table table">
                        <thead>
                            <tr>
                                <th>No</th>
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

                                <td class="row">
                                    <form action="/owner/user/{{ $users->id }}/edit" method="get" class="col-md-4">
                                        <button type="submit" class="btn btn-primary me-2">
                                            <svg class="icon" style="color: white">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                                            </svg>

                                        </button>

                                    </form>
                                    <form action="/owner/user/{{ $users->id }}" method="post" class="col-md-4">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger me-2">
                                            <svg class="icon" style="color: white">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
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
    var table = $('.table').DataTable({
        dom: 'Bfrtip',
        // autoWidth: true,
        buttons: [
            {
                extend: 'pdfHtml5',
                download: 'open',
                // split: [ 'pdf', 'excel'],
                exportOptions: {
                    columns: [ 0, 1, 3 ]
                },
                // styles: {
                //     tableHeader: {
                //         alignment: 'center'
                //     },

                customize:function(doc) {

                    doc.content[1].table.widths =
                    Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                    // doc.content[1].margin = [ 100, 0, 10, 0 ]
                    // console.log(doc);
                },
            },
            {
                extend: 'excel',
                exportOptions: {
                    // columns: [ 0, 1, 2, 3 ]
                },
            }
        ],

}
    );
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
