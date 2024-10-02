<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anak Baru</title>
</head>
<body>
    <h1>Daftar Anak Baru</h1>

    <form action="{{ route('anaks.store') }}" method="POST">
        @csrf
        
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="umur">Umur:</label>
        <input type="number" name="umur" required>

        <label for="alamat">Alamat lengkap:</label>
        <textarea name="alamat" required></textarea>

        <label for="orang_tua">Orang Tua:</label>
        <input type="text" name="orang_tua" required>

        <label for="kontak_orang_tua">Kontak Orang Tua:</label>
        <input type="text" name="kontak_orang_tua" required>

        <label for="member">Member:</label>
        <select name="member" required>
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
        </select>

        <button type="submit">Daftarkan anak</button>
    </form>

    <a href="{{ route('anaks.index') }}">Kembali ke Daftar Anak</a>
</body>
</html>
