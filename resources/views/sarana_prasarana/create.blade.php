@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Moda</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('sarana_prasarana.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nama_moda">Nama Moda</label>
                                <input type="text" name="nama_moda" id="nama_moda" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="jenis">Jenis</label>
                                <input type="text" name="jenis" id="jenis" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="nomor_identitas">Nomor Identitas</label>
                                <input type="number" name="nomor_identitas" id="nomor_identitas" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="lokasi">Lokasi</label>
                                <input type="text" name="lokasi" id="lokasi" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="kapasitas">Kapasitas</label>
                                <input type="number" name="kapasitas" id="kapasitas" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="satuan">Satuan</label>
                                <input type="text" name="satuan" id="satuan" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_pembelian">Tanggal Pembelian</label>
                                <input type="date" name="tanggal_pembelian" id="tanggal_pembelian" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
