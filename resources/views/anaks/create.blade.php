<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anak Baru</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Anak Baru</h1>

        <form action="{{ route('anaks.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
            </div>

            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan umur" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat" required></textarea>
            </div>

            <div class="form-group">
                <label for="orang_tua">Orang Tua</label>
                <input type="text" class="form-control" id="orang_tua" name="orang_tua" placeholder="Masukkan nama orang tua" required>
            </div>

            <div class="form-group">
                <label for="kontak_orang_tua">Kontak Orang Tua</label>
                <input type="text" class="form-control" id="kontak_orang_tua" name="kontak_orang_tua" placeholder="Masukkan kontak orang tua" required>
            </div>

            <div class="form-group">
                <label for="member">Member</label>
                <select class="form-control" id="member" name="member" required>
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Daftar</button>
            <a href="{{ route('anaks.index') }}" class="btn btn-secondary">Kembali ke Daftar Anak</a>
        </form>
    </div>

    <!-- Link ke Bootstrap JS dan dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
