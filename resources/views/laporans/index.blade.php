<!-- resources/views/laporans/index.blade.php -->

@extends('layout.app')

@section('title', 'Laporan')

@section('content')
    <h1>Laporan</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK Anggota</th>
                <th>Nama Anggota</th>
                <th>Alamat Anggota</th>
                <th>Nama Kader</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporans as $laporan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $laporan->anggota->nik }}</td>
                    <td>{{ $laporan->anggota->nama }}</td>
                    <td>{{ $laporan->anggota->alamat }}</td>
                    <td>{{ $laporan->kader->nama }}</td>
                    <td>{{ $laporan->tanggal }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection