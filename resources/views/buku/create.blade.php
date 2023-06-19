<!-- resources/views/buku/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Buku</div>

                    <div class="card-body">
                        <form id="create-form" method="POST">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input type="text" name="penulis" id="penulis" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <input type="text" name="penerbit" id="penerbit" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="tahun_terbit">Tahun Terbit</label>
                                <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#create-form').submit(function (event) {
                event.preventDefault();

                var data = {
                    judul: $('#judul').val(),
                    penulis: $('#penulis').val(),
                    penerbit: $('#penerbit').val(),
                    tahun_terbit: $('#tahun_terbit').val(),
                    keterangan: $('#keterangan').val(),
                };

                $.ajax({
                    url: '/api/buku',
                    type: 'POST',
                    data: data,
                    success: function (response) {
                        alert('Data buku berhasil ditambahkan');
                        window.location.href = '{{ route("buku.index") }}';
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                        alert('Terjadi kesalahan. Silakan coba lagi.');
                    }
                });
            });
        });
    </script>
@endsection
