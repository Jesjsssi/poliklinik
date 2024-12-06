@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Poli</h1>
    <a href="{{ route('polis.create') }}" class="btn btn-primary mb-3">Tambah Poli</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Poli</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($polis as $poli)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $poli->nama_poli }}</td>
                    <td>{{ $poli->keterangan }}</td>
                    <td>
                        <a href="{{ route('polis.edit', $poli->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('polis.destroy', $poli->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection