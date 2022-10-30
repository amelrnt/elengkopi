@extends('operasional.template')
@section('title', 'Bahan Baku / Edits')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card mb-4">
            <div class="card-header"><strong>Edit Data Bahan Baku</strong></div>
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
                    <form action="{{ route('bahanbaku.update',$bahanbaku->id)}} " method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Bahan Baku" value="{{ $bahanbaku->nama }}" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" name="biayapenyimpanan" class="form-control" placeholder="Biaya Penyimpanan" value="{{ $bahanbaku->biayapenyimpanan }}" required>
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
