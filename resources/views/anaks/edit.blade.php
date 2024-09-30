<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anak</title>
</head>
<body>
    <h1>Edit Data Anak</h1>

    <form action="{{ route('anaks.update', $anak->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="{{ $anak->nama }}" required>

        <label for="umur">Umur:</label>
        <input type="number" name="umur" value="{{ $anak->umur }}" required>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" required>{{ $anak->alamat }}</textarea>

        <label for="orang_tua">Orang Tua:</label>
        <input type="text" name="orang_tua" value="{{ $anak->orang_tua }}" required>

        <label for="kontak_orang_tua">Kontak Orang Tua:</label>
        <input type="text" name="kontak_orang_tua" value="{{ $anak->kontak_orang_tua }}" required>

        <label for="member">Member:</label>
        <select name="member" required>
            <option value="ya" {{ $anak->member == 'ya' ? 'selected' : '' }}>Ya</option>
            <option value="tidak" {{ $anak->member == 'tidak' ? 'selected' : '' }}>Tidak</option>
        </select>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('anaks.index') }}">Kembali ke Daftar Anak</a>
</body>
</html>
