@extends('layout.app')

@section('content')
<div class="container">
    <h1>Edit Kader</h1>
    <form action="{{ route('kaders.update', $kader->id_kader) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Kader</label>
            <input type="text" name="nama" class="form-control" value="{{ $kader->nama }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
