@extends('operasional.template')
@section('title', 'Pemakaian Bahan Baku / Create')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card mb-4">
            <div class="card-header"><strong>Tambah Data Pemakaian Bahan Baku</strong></div>
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
                    <form action="{{ route('pemakaianbahanbaku.store')}} " method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="input-group mb-3">
                            <select name="bahanbaku" class="form-select" required>
                                <option value="" selected="">Pilih Bahan Baku</option>
                                @foreach ($menu as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" required>
                        </div>
                        <div class="input-group mb-3">
                            <select name="satuan" class="form-select" required>
                                <option value="" selected="">Pilih Jenis Satuan</option>
                                <option value="Kg">Kg</option>
                                <option value="Liter">Liter</option>
                            </select>
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
