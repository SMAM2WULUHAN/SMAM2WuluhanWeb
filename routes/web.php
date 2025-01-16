<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;


Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/'); // Redirect ke halaman login atau home
})->name('logout');

Route::view('/', 'welcome')->name('welcome');

Route::get('/berita', function () {
    // Ambil data berita dari database
    $berita = DB::table('berita')->get();
    return view('berita', ['berita' => $berita]);
});

Route::view('/ekstrakurikuler', 'ekstrakurikuler')->name('ekstrakurikuler');

Route::view('/kontak', 'kontak')->name('kontak');

Route::view('/tenagapendidik', 'tenagapendidik')->name('tenagapendidik');

Route::view('/fasilitas', 'fasilitas')->name('fasilitas');

Route::get('/berita', function () {
    $berita = DB::table('berita')->get(); // Ambil semua berita
    return view('berita', compact('berita')); // Tampilkan halaman daftar berita
})->name('berita');

//detail berita
Route::get('/berita/{id}', function ($id) {
    // Contoh data berita manual
    $berita = [
        1 => [
            'judul' => 'News Title 1',
            'gambar' => 'https://i.imgur.com/J32k7g5.png',
            'deskripsi' => 'TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST.',
            'tanggal' => 'Senin, 01 Jan 2025',
        ],
        2 => [
            'judul' => 'News Title 2',
            'gambar' => 'https://i.imgur.com/J32k7g5.png',
            'deskripsi' => 'Ini adalah deskripsi berita kedua.',
            'tanggal' => 'Selasa, 02 Jan 2025',
        ],
    ];

    if (!isset($berita[$id])) {
        abort(404); // Jika ID tidak ditemukan, tampilkan halaman 404
    }

    return view('detail', ['berita' => $berita[$id]]);
})->name('berita.show');

//menampilkan berita ke halaman publik
Route::get('/berita/{id}', function ($id) {
    // Ambil data berita berdasarkan ID dari database
    $berita = DB::table('berita')->where('id', $id)->first();

    // Pastikan berita ditemukan
    if (!$berita) {
        abort(404, 'Berita tidak ditemukan');
    }

    // Tampilkan view detail
    return view('detail', compact('berita'));
})->name('berita.detail');

Route::middleware(['auth'])->group(function () {
    // Route untuk dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route untuk update berita
    Route::get('/updateberita', [AdminController::class, 'index'])->name('updateberita');

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard'); // Tampilkan halaman berita
        Route::get('/updateberita', [AdminController::class, 'index'])->name('updateberita'); // Alias untuk berita
        Route::post('/store', [AdminController::class, 'store'])->name('berita.store'); // Tambah berita
        Route::get('/create', [AdminController::class, 'create'])->name('berita.create'); // Form tambah berita
        Route::put('/update/{id}', [AdminController::class, 'update'])->name('berita.update'); // Update berita
        Route::delete('/destroy/{id}', [AdminController::class, 'destroy'])->name('berita.destroy'); // Hapus berita
    });

    
    

    



    // Route untuk koneksi
    Route::get('/koneksi', function () {
        return view('koneksi');
    })->name('koneksi');
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
});


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
