<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Menampilkan halaman update berita.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua berita dari tabel berita
        $beritas = DB::table('berita')->get(); // Query untuk mengambil data berita

        return view('admin.updateberita', compact('beritas'));
    }

    /**
     * Menangani pembaruan berita.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal ukuran file 2MB
        ]);

        // Cek apakah ada gambar yang diupload
        if ($request->hasFile('gambar')) {
            // Ambil berita yang ada di database untuk gambar lama
            $berita = DB::table('berita')->where('id', $id)->first();

            // Hapus gambar lama jika ada
            if ($berita && $berita->gambar && Storage::exists('public/images/' . $berita->gambar)) {
                Storage::delete('public/images/' . $berita->gambar);
            }

            // Simpan gambar baru
            $gambar = $request->file('gambar')->store('public/images');
            $gambarName = basename($gambar); // Ambil nama file gambar

            // Tambahkan nama gambar ke data yang akan diupdate
            $validatedData['gambar'] = $gambarName;
        }

        // Update berita di database
        DB::table('berita')
            ->where('id', $id)
            ->update($validatedData); // Menggunakan update dengan data yang telah divalidasi

        // Kembali ke halaman berita dengan pesan sukses
        return redirect()->route('updateberita')->with('success', 'Berita berhasil diperbarui');
    }

    /**
     * Menampilkan form untuk mengedit berita berdasarkan ID.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // Ambil data berita berdasarkan ID
        $berita = DB::table('berita')->where('id', $id)->first();

        // Tampilkan form edit dengan data berita yang ditemukan
        return view('admin.editberita', compact('berita'));
    }
    
}
