@extends('owner.template')
@section('title', 'Data Transaksi')
@section('content')

<div class="body flex-grow-1 px-3">
    <div class="container-lg">

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
                                <th>Tanggal</th>
                                <th>Menu</th>
                                <th>Qty</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $transaksis)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td>{{ $transaksis->menu->nama }}</td> --}}
                                {{-- <td>{{ $transaksis->menu }}</td> --}}
                                <td>{{ $transaksis->created_at }}</td>
                                <td>{{ $transaksis->menu->nama }}</td>
                                <td>Rp. {{ $transaksis->menu->harga }} x {{ $transaksis->jumlah }}</td>
                                <td>Rp. {{$transaksis->jumlah * $transaksis->menu->harga}}</td>

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
        autoWidth: true,
        buttons: [
            {
                extend: 'pdfHtml5',
                download: 'open',
                // split: [ 'pdf', 'excel'],
                exportOptions: {
                    // columns: [ 0, 1, 2, 3,4, ]
                },
                customize:function(doc) {

                    // doc.content[1].margin = [ 150, 0, 0, 0 ]
                    // console.log(doc);
                    doc.content[1].table.widths =
                    Array(doc.content[1].table.body[0].length + 1).join('*').split('');
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

});
</script>

@endsection
