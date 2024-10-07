@extends('layouts.app')

@section('title', 'Daftar Anak')

@section('content')
    <h1 class="mb-4">Daftar Anak</h1>

    <a href="{{ route('anaks.create') }}" class="btn btn-primary mb-3">Tambah Anak Baru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama lengkap</th>
                <th>Umur</th>
                <th>Alamat lengkap</th>
                <th>Orang Tua</th>
                <th>Kontak Orang Tua</th>
                <th>Member</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anaks as $anak)
                <tr>
                    <td>{{ $anak->nama }}</td>
                    <td>{{ $anak->umur }}</td>
                    <td>{{ $anak->alamat }}</td>
                    <td>{{ $anak->orang_tua }}</td>
                    <td>{{ $anak->kontak_orang_tua }}</td>
                    <td>{{ $anak->member }}</td>
                    <td>
                        <a href="{{ route('anaks.edit', $anak->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('anaks.destroy', $anak->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
