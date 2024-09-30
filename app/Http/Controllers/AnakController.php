<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    // Metode untuk menampilkan daftar anak
    public function index()
    {
        $anaks = Anak::all(); // Mengambil semua data anak dari database
        return view('anaks.index', compact('anaks')); // Mengirim data ke view
    }

    // Metode untuk menampilkan form pendaftaran
    public function create()
    {
        return view('anaks.create'); // Tampilkan form pendaftaran
    }

    // Metode untuk menyimpan data anak
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer',
            'alamat' => 'required|string',
            'orang_tua' => 'required|string|max:255',
            'kontak_orang_tua' => 'required|string',
            'member' => 'required|in:ya,tidak',
        ]);

        // Simpan data anak ke database
        Anak::create($validatedData);

        return redirect()->route('anaks.index')->with('success', 'Pendaftaran berhasil!'); // Redirect ke halaman daftar anak
    }
    public function destroy($id)
{
    $anak = Anak::findOrFail($id); // Mencari anak berdasarkan ID
    $anak->delete(); // Menghapus data anak

    return redirect()->route('anaks.index')->with('success', 'Data anak berhasil dihapus!'); // Redirect ke halaman daftar anak
}
}
