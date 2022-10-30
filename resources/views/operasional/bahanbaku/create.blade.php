@extends('operasional.template')
@section('title', 'Bahan Baku / Create')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card mb-4">
            <div class="card-header"><strong>Tambah Data Bahan Baku</strong></div>
            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="example">
                    <form action="{{ route('bahanbaku.store')}} " method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Bahan Baku" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" name="biayapenyimpanan" class="form-control" placeholder="Biaya Penyimpanan" required>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </form>

            </div>
        </div>
        <!-- /.card.mb-4-->
    </div>
</div>


@endsection
@section('scripts')
@endsection
