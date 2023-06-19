<!-- resources/views/form.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="Bryan" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea name="alamat" id="alamat" class="form-control" required>Jl. Cipinang Jaya II Flat No. 1 Jatinegara Jakarta Timur</textarea>
                        </div>

                        <div class="form-group">
                            <label for="nik">Nomor Induk Kependudukan:</label>
                            <input type="text" name="nik" id="nik" class="form-control" value="1801823123312321" required>
                        </div>

                        <div class="form-group">
                            <label for="akun_repositori">Akun Repositori:</label>
                            <input type="text" name="akun_repositori" id="akun_repositori" value="bryanrekatek@gmail.com" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
