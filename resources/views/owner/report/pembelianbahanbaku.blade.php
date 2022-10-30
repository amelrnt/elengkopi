@extends('owner.template')
@section('title', 'Pembelian Bahan Baku')
@section('content')

<div class="body flex-grow-1 px-3">
    <div class="container-lg">

        <div class="card mb-4">
            <div class="card-header"><strong>Data pembelian</strong></div>
            <div class="card-body">
                @error('error')

                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror

                <div class="example">
                    <table class="table table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jumlah</th>
                                <th>Biaya Pengiriman</th>
                                <th>Biaya Pemesanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembelian as $pembelians)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pembelians->jumlah }} {{ $pembelians->satuan }}</td>
                                <td>{{ $pembelians->biayapengiriman }}</td>
                                <td>{{ $pembelians->biayapemesanan }}</td>

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

});
</script>

@endsection
