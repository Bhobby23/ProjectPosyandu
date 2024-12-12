@extends('layout.app')

@section('content')
<div class="container">
    <h1>Daftar Kader</h1>
    <a href="{{ route('kaders.create') }}" class="btn btn-primary">Tambah Kader</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kaders as $kader)
            <tr>
                <td>{{ $kader->id_kader }}</td>
                <td>{{ $kader->nama }}</td>
                <td>
                    <a href="{{ route('kaders.edit', $kader->id_kader) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('kaders.destroy', $kader->id_kader) }}" method="POST" style="display:inline;">
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
@endsection
