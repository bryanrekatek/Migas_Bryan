@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail User</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ isset($user) ? $user->name : old('name') }}" required>
                        </div>
            
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ isset($user) ? $user->email : old('email') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="alamat" name="alamat" id="alamat" class="form-control" value="{{ isset($user) ? $user->alamat : old('alamat') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nik">Nomor Induk Kependudukan</label>
                            <input type="nik" name="nik" id="nik" class="form-control" value="{{ isset($user) ? $user->nik : old('nik') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="akun_repo">Akun Repositori</label>
                            <input type="akun_repo" name="akun_repo" id="akun_repo" class="form-control" value="{{ isset($user) ? $user->akun_repo : old('akun_repo') }}" required>
                        </div>
                        <a href="{{ route('home') }}" class="btn btn-secondary mt-2">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
