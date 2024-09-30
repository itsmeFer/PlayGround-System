<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anak</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Jika menggunakan file CSS -->
</head>
<body>
    <h1>Daftar Anak Terdaftar</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Orang Tua</th>
                <th>Kontak Orang Tua</th>
                <th>Member</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($anaks as $anak)
                <tr>
                    <td>{{ $anak->id }}</td>
                    <td>{{ $anak->nama }}</td>
                    <td>{{ $anak->umur }}</td>
                    <td>{{ $anak->alamat }}</td>
                    <td>{{ $anak->orang_tua }}</td>
                    <td>{{ $anak->kontak_orang_tua }}</td>
                    <td>{{ $anak->member }}</td>
                    <td>
                        <a href="{{ route('anaks.edit', $anak->id) }}">Edit</a>
                        <form action="{{ route('anaks.destroy', $anak->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Tidak ada data anak yang terdaftar.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('anaks.create') }}">Daftar Anak Baru</a> <!-- Link ke form pendaftaran -->
</body>
</html>
