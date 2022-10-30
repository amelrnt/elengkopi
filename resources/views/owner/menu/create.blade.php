@extends('owner.template')
@section('title', 'Menu / Create')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card mb-4">
            <div class="card-header"><strong>Edit Data Menu</strong></div>
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
                    <form action="{{ route('menu.store')}} " method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="nama" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" name="harga" class="form-control" placeholder="Harga Menu" required>
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
