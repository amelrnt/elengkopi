@extends('owner.template')
@section('title', 'User / Create')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card mb-4">
            <div class="card-header"><strong>Tambah Data User</strong></div>
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
                    <form action="{{ route('user.store')}} " method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" name="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="confirmpassword" class="form-control"
                                placeholder="Confirm Password">
                        </div>
                        <div class="input-group mb-3">
                            <select name="role" class="form-select" required>
                                <option value="" selected="">Pilih Jenis User</option>
                                <option value="1">Operasional</option>
                                <option value="2">Penjualan</option>
                                <option value="3">Owner</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.card.mb-4-->
    </div>
</div>


@endsection
@section('scripts')
@endsection
