@extends('layout.app')

@section('content')
<div class="container">
    <h1>Tambah Kader</h1>
    <form action="{{ route('kaders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Kader</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
