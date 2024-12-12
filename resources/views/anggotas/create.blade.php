@extends('layout.app')

@section('content')
<div class="container">
    <h1>Tambah Anggota</h1>
    <form action="{{ route('anggotas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" name="nik" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
