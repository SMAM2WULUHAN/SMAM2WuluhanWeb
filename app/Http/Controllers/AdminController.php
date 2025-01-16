<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AdminController extends Controller
{
    // Tampilkan halaman update berita
    public function index()
    {
        $beritas = DB::table('berita')->get(); // Mengambil semua data dari tabel berita
        return view('updateberita', compact('beritas')); // Mengirim data ke view
    }

    public function dashboard()
    {
        $beritass = DB::table('berita')->get(); // Mengambil semua data dari tabel berita
        return view('dashboard', compact('beritass')); // Mengirim data ke view
    }

    // Tambahkan berita baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
            'deskripsi' => 'required|string',
        ]);

        // Default path gambar kosong
        $pathGambar = null;

        // Jika ada gambar, upload ke folder public/gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $pathGambar = $file->storeAs('public/gambar', $filename);
            $pathGambar = 'storage/gambar/' . $filename; // Simpan ke database

        }

        // Simpan data ke database
        DB::table('berita')->insert([
            'judul' => $request->input('judul'),
            'gambar' => $pathGambar, // Hanya path yang disimpan
            'deskripsi' => $request->input('deskripsi'),
            'tanggal' => Carbon::now(), // Tanggal dan waktu saat ini
        ]);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Berita berhasil ditambahkan.');
    }

    // Update berita yang ada
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        DB::table('berita')->where('id', $id)->update($validated);

        return redirect()->route('admin.index')->with('success', 'Berita berhasil diupdate.');
    }



    // Hapus berita
    public function destroy($id)
    {
        DB::table('berita')->where('id', $id)->delete();

        return redirect()->route('admin.index')->with('success', 'Berita berhasil dihapus.');
    }

    //form tambah
    public function create()
    {
        return view('tambahberita'); // Pastikan ada file tambahberita.blade.php
    }


}
