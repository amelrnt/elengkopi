@extends('penjualan.template')
@section('title', 'Profile')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="card mb-4">
            <div class="card-header"><strong>Edit Data User</strong></div>
            <div class="card-body">
                @error('error')

                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
                <div class="example">
                    <form action="{{ route('profile.update')}} " method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" name="phone" class="form-control" placeholder="Phone" value="{{ $user->phone }}">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="input-group mb-3">
                            <select name="role" class="form-select" required>
                                <option value="" >Pilih Jenis User</option>
                                <option value="1" @if ($user->role == 1) selected @endif>Operasional</option>
                                <option value="2" @if ($user->role == 2) selected @endif>Penjualan</option>
                                <option value="3" @if ($user->role == 3) selected @endif>Owner</option>
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
