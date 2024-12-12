<!-- resources/views/anggotas/edit.blade.php -->

@extends('layout.app')

@section('title', 'Update Anggota')

@section('content')
    <h1>Update Anggota</h1>
    <form action="{{ route('anggotas.update', $anggota->nik) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="{{ $anggota->nik }}" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $anggota->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat">{{ $anggota->alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('anggotas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection