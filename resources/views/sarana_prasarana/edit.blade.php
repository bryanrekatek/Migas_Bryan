
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Moda</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('sarana_prasarana.update', $sarana_prasarana->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nama_moda">Nama Moda</label>
                                <input type="text" name="nama_moda" id="nama_moda" class="form-control" value="{{ $sarana_prasarana->nama_moda }}" required>
                            </div>

                            <div class="form-group">
                                <label for="jenis">Jenis</label>
                                <input type="text" name="jenis" id="jenis" class="form-control" value="{{ $sarana_prasarana->jenis }}" required>
                            </div>

                            <div class="form-group">
                                <label for="nomor_identitas">Nomor Identitas</label>
                                <input type="number" name="nomor_identitas" id="nomor_identitas" class="form-control" value="{{ $sarana_prasarana->nomor_identitas }}" required>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ $sarana_prasarana->deskripsi }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="lokasi">Lokasi</label>
                                <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $sarana_prasarana->lokasi }}" required>
                            </div>

                            <div class="form-group">
                                <label for="kapasitas">Kapasitas</label>
                                <input type="number" name="kapasitas" id="kapasitas" class="form-control" value="{{ $sarana_prasarana->kapasitas }}" required>
                            </div>

                            <div class="form-group">
                                <label for="satuan">Satuan</label>
                                <input type="text" name="satuan" id="satuan" class="form-control" value="{{ $sarana_prasarana->satuan }}" required>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_pembelian">Tanggal Pembelian</label>
                                <input type="date" name="tanggal_pembelian" id="tanggal_pembelian" class="form-control" value="{{ $sarana_prasarana->tanggal_pembelian }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
