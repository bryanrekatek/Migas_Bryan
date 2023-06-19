<!-- resources/views/moda/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Daftar Sarana Prasaranan
                        <a href="{{ route('sarana_prasarana.create') }}" class="btn btn-primary float-right">Tambah Data</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Moda</th>
                                    <th>Jenis</th>
                                    <th>Nomor Identitas</th>
                                    <th>Deskripsi</th>
                                    <th>Lokasi</th>
                                    <th>Kapasitas</th>
                                    <th>Satuan</th>
                                    <th>Tanggal Pembelian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sarana_prasarana as $moda)
                                    <tr>
                                        <td>{{ $moda->nama_moda }}</td>
                                        <td>{{ $moda->jenis }}</td>
                                        <td>{{ $moda->nomor_identitas }}</td>
                                        <td>{{ $moda->deskripsi }}</td>
                                        <td>{{ $moda->lokasi }}</td>
                                        <td>{{ $moda->kapasitas }}</td>
                                        <td>{{ $moda->satuan }}</td>

                                        <td>{{ \Carbon\Carbon::parse($moda->tanggal_pembelian)->format('d F Y') }}</td>
                                        <td>
                                            <a href="{{ route('sarana_prasarana.edit', $moda->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('sarana_prasarana.destroy', $moda->id) }}" method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
