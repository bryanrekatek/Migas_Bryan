<!-- resources/views/buku/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Daftar Buku
                        <a href="{{ route('buku.create') }}" class="btn btn-primary float-right">Tambah Data</a>
                    </div>

                    <div class="card-body">
                        <table class="table" id="buku-table">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Load data buku saat halaman di-load
            loadData();

            // Fungsi untuk mengambil data buku melalui AJAX
            function loadData() {
                $.ajax({
                    url: "/api/buku",
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        var rows = "";

                        $.each(response.data, function(index, buku) {
                            rows += "<tr>";
                            rows += "<td>" + buku.judul + "</td>";
                            rows += "<td>" + buku.penulis + "</td>";
                            rows += "<td>" + buku.penerbit + "</td>";
                            rows += "<td>" + buku.tahun_terbit + "</td>";
                            rows += "<td>" + buku.keterangan + "</td>";
                            rows += "<td>";
                            rows += "<a href='{{ route('buku.edit', '') }}/" + buku.id + "' class='btn btn-warning'>Edit</a>";
                            rows += "<button class='btn btn-danger btn-delete' data-id='" + buku.id + "'>Delete</button>";
                            rows += "</td>";
                            rows += "</tr>";
                        });

                        $("#buku-table tbody").html(rows);
                    }
                });
            }

            // Fungsi untuk menghapus data buku melalui AJAX
            $(document).on("click", ".btn-delete", function() {
                var bukuId = $(this).data("id");

                $.ajax({
                    url: "api/buku/" + bukuId,
                    type: "DELETE",
                    dataType: "json",
                    success: function(response) {
                        alert(response.message);
                        loadData();
                    }
                });
            });
        });
    </script>
@endsection
