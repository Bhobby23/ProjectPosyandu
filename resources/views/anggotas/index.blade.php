@extends('Layout.app')

@section('content')
<div class="container">
    <h1>Daftar Anggota</h1>
    @can('create', App\Models\Anggota::class)
        <a href="{{ route('anggotas.create') }}" class="btn btn-primary">Tambah Anggota</a>
    @endcan
    <table class="table mt-3">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anggotas as $anggota)
            <tr>
                <td>{{ $anggota->nik }}</td>
                <td>{{ $anggota->nama }}</td>
                <td>{{ $anggota->alamat }}</td>
                <td>
                    @can('update', $anggota) <!-- Hanya kader yang bisa mengedit -->
                        <a href="{{ route('anggotas.edit', $anggota->nik) }}" class="btn btn-warning">Edit</a>
                    @endcan
                    @can('delete', $anggota) <!-- Hanya kader yang bisa menghapus -->
                        <form action="{{ route('anggotas.destroy', $anggota->nik) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection