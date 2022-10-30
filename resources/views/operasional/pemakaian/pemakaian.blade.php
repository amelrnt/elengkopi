@extends('operasional.template')
@section('title', 'Pembelian Bahan Baku')
@section('content')

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="d-flex justify-content-end">
            <div class="text-right">
                <a class="btn btn-primary pull-right" href="/operasional/pemakaianbahanbaku/create">Tambah Data</a>
            </div>
        </div>
        <br>
        <div class="card mb-4">
            <div class="card-header"><strong>Data Pemakaian Bahan Baku</strong></div>
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
                                <th width="20px">No</th>
                                <th>Tanggal</th>
                                <th>Bahan Baku</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemakaianbahanbaku as $pemakaianbahanbakus)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ substr($pemakaianbahanbakus->created_at,0,10) }}</td>
                                <td>{{ $pemakaianbahanbakus->bahanbaku->nama }}</td>
                                <td>{{ $pemakaianbahanbakus->jumlah }} {{ $pemakaianbahanbakus->satuan }}</td>

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
