<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('public/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Admin Dokter</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>Edit Dokter</h1>
        <form action="{{ route('dokters.update', $dokter->id) }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $dokter->nama }}"
                    placeholder="Masukkan nama dokter" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Masukkan alamat dokter"
                    required>{{ $dokter->alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $dokter->no_hp }}"
                    placeholder="Masukkan nomor HP dokter" required>
            </div>
            <div class="mb-3">
                <label for="id_poli" class="form-label">Poli</label>
                <select name="id_poli" id="id_poli" class="form-control" required>
                    <option value="" disabled>Pilih Poli</option>
                    @foreach ($polis as $poli)
                        <option value="{{ $poli->id }}" {{ $dokter->id_poli == $poli->id ? 'selected' : '' }}>
                            {{ $poli->nama_poli }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.dokter.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    @endsection


    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>