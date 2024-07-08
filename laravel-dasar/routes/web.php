<?php

use App\Http\Controllers\PostControler;
use App\Http\Controllers\AdminControler;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\LoginControler;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});


Route::get('/asrama', [UserControler::class, 'asrama']);

Route::get('/kegiatan', [UserControler::class, 'kegiatan']);

Route::get('/kegiatan2', [UserControler::class, 'kegiatan2']);

Route::get('/coba', function (){
    return view('coba',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Tresna Hidayah",
        "email" => "tresna@gmail.com",
        "gambar" => "gambar.jpg"
    ]);
});

Route::get('/sejarah', function () {
    return view('sejarah', [
        "title" => "Sejarah"
    ]);
});

Route::get('/visi', function () {
    return view('visi', [
        "title" => "Visi & Misi"
    ]);
});

Route::get('/organisasi', function () {
    return view('organisasi', [
        "title" => "Struktur Organisasi"
    ]);
});

Route::get('/Aturan Asrama', function () {
    return view('aturan', [
        "title" => "Aturan Penghuni Asmara 2024/2025"
    ]);
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran', [
        "title" => "Pendaftaran"
    ]);
});

Route::get('/Sarana Dan Prasarana', function () {
    return view('sarana', [
        "title" => "Saran Dan Prasarana"
    ]);
});

Route::get('/Kegiatan Warga Asrama', function () {
    return view('kegiatan', [
        "title" => "Kegiatan Warga Asrama"
    ]);
});


Route::get('/Galeri', function () {
    return view('galeri', [
        "title" => "Galeri"
    ]);
});

Route::get('/Contact Us', function () {
    return view('contac', [
        "title" => "Contact Us"
    ]);
});

// route bagian admin

Route::get('/admin/berita', [AdminControler::class, 'berita'])->middleware('auth')->name('berita'); 

Route::get('/admin/{beritum}/edit_berita', [AdminControler::class, 'edit_berita'])->middleware('auth')->name('edit_berita'); 

Route::post('/admin/{beritum}', [AdminControler::class, 'update'])->middleware('auth')->name('update'); 

Route::delete('/admin/hapus_berita/{beritum}', [AdminControler::class, 'destroy'])->middleware('auth')->name('hapus_berita'); 

Route::post('/admin/simpan_berita', [AdminControler::class, 'simpan_berita'])->middleware('auth')->name('simpan_berita');

Route::get('/admin/profile', [AdminControler::class, 'profile'])->middleware('auth')->name('profile');

Route::post('/admin/update', [AdminControler::class, 'edit_profile'])->middleware('auth')->name('edit');

Route::get('/admin/galeri', [AdminControler::class, 'galeri']);

Route::get('/admin/komentar', [AdminControler::class, 'komentar']);

Route::get('/admin/struktur', [AdminControler::class, 'struktur'])->middleware('auth')->name('struktur');

Route::post('/admin/simpanstruktur/{id}', [AdminControler::class, 'simpanstruktur'])->middleware('auth')->name('simpanstruktur');

Route::post('/admin/edit_struktur/{id}', [AdminControler::class, 'edit_struktur'])->middleware('auth')->name('edit_struktur');

Route::middleware(['web'])->group(function () {

    Route::get('/admin', [LoginControler::class, 'login'])->name('login');

    Route::post('/admin/postlogin', [LoginControler::class, 'postlogin'])->name('postlogin');

    Route::get('/admin/registrasi', [LoginControler::class, 'registrasi'])->name('registrasi');

    Route::post('/admin/simpanregistrasi', [LoginControler::class, 'simpan_registrasi'])->name('simpan_registrasi');
});



Route::get('/admin/home', [AdminControler::class, 'index'])->name('home')->middleware('auth');  

Route::get('/post', [PostControler::class, 'index']);

//halaman single post
Route::get('post/{post:slug}', [PostControler::class, 'show']);
