<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use App\Models\User;
use App\Models\Berita;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; 

class AdminControler extends Controller
{
    public function index()
    {
        return view('admin.home', [
            "title" => "Dashboard"
        ]);
    }

    public function berita()
    {
        $berita = Berita::all();
        return view('admin.berita', compact('berita'), [
            "title" => "Berita"
        ]);
    }

    public function simpan_berita(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $img_berita = $request->file('gambar')->store('images', 'public');

        $berita = new Berita([
            'user_id' => $user->id, // Mengambil user_id dari user yang sedang login
            'judul' => $request->input('judul'),
            'slug' => $request->input('slug'),
            'gambar' => $img_berita,
            'isi' => $request->input('isi'),
        ]);

        $berita->save();
        Alert::success('Pesan Berhasil', 'Data Berhasil di tambah');
        return redirect()->route('berita');
    }

    public function edit_berita(Berita $beritum){
        return view('admin.edit_berita', compact('beritum'), [
            "title" => "Edit Berita"
        ]);
    }

    public function update(Request $request, Berita $beritum)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $beritum->gambar;
        if ($request->hasFile('gambar')) {
            if ($beritum->gambar) {
                Storage::delete($beritum->gambar);
            }
            $path = $request->file('gambar')->store('images', 'public');
        }

        $beritum->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'slug' => $request->slug,
            'gambar' => $path,
        ]);

        Alert::success('Pesan Berhasil', 'Data Berita Berhasil di Edit');
        return redirect()->route('berita');
    }

    public function destroy(Berita $beritum)
    {

        if ($beritum->gambar) {
            Storage::delete($beritum->gambar);
        }
        $beritum->delete();

        return response()->json(['success' => true]);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'),[
            "title" => "Profile"
        ]);
    }

    public function edit_profile(Request $request) 
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'about' => 'required|string|max:255',
            'img_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('img_profile')) {
            // Hapus gambar lama jika ada
            if ($user->img_profile) {
                $oldImagePath = public_path($user->img_profile);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Simpan gambar baru
            $imagePath = 'admin/img/' . $request->file('img_profile')->getClientOriginalName();
            $request->file('img_profile')->move(public_path('admin/img'), $request->file('img_profile')->getClientOriginalName());
            $user->img_profile = $imagePath;
        }

        $user = Auth::user();
        $user->name = $request->name;
        $user->about = $request->about;
        $user->instansi = $request->instansi;
        $user->alamat = $request->alamat;
        $user->no_hp = $request->no_hp;
        $user->email = $request->email;

        $user->save();

        Alert::success('Pesan Berhasil', 'Data Profil Berhasil di Edit');
        return redirect()->route('profile');
    }

    public function galeri()
    {
        return view('admin.galeri', [
            "title" => "Galeri"
        ]);
    }

    public function komentar()
    {
        return view('admin.komentar', [
            "title" => "Komentar"
        ]);
    }

    public function struktur()
    {
        $organisasi = Organisasi::all();

        return view('admin.struktur', compact('organisasi'),[
            "title" => "Struktur"
        ]);
    }

    public function simpanstruktur(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nama_ketua' => 'required|string|max:255',
            'img_ketua' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_wakil' => 'required|string|max:255',
            'img_wakil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ketua_ikpas' => 'required|string|max:255',
            'wakil_ketua' => 'required|string|max:255',
            'sekretaris' => 'required|string|max:255',
            'bendahara' => 'required|string|max:255',
            'bidang_kesehatan' => 'required|string|max:255',
            'bidang_kerohania' => 'required|string|max:255',
            'bidang_senior' => 'required|string|max:255',
            'bidang_infokom' => 'required|string|max:255',
            'bidang_keamanan' => 'required|string|max:255',
        ]);

        if ($user->organisasi) {
            return redirect()->route('struktur')->with('error', 'You already have an organization.');
        }

        $img_ketua = $request->file('img_ketua')->store('images', 'public');
        $img_wakil = $request->file('img_wakil')->store('images', 'public');

        $organisasi = new Organisasi([
            'user_id' => $user->id,
            'nama_ketua' => $request->input('nama_ketua'),
            'img_ketua' => $img_ketua,
            'nama_wakil' => $request->input('nama_wakil'),
            'img_wakil' => $img_wakil,
            'ketua_ikpas' => $request->input('ketua_ikpas'),
            'wakil_ketua' => $request->input('wakil_ketua'),
            'sekretaris' => $request->input('sekretaris'),
            'bendahara' => $request->input('bendahara'),
            'bidang_kesehatan' => $request->input('bidang_kesehatan'),
            'bidang_kerohania' => $request->input('bidang_kerohania'),
            'bidang_senior' => $request->input('bidang_senior'),
            'bidang_keamanan' => $request->input('bidang_keamanan'),
            'bidang_infokom' => $request->input('bidang_infokom')
        ]);

        $organisasi->save();

        return redirect()->route('struktur')->with('success', 'Organization created successfully.');
    }

    public function edit_struktur(Request $request, $id)
    {
        $organisasi = Organisasi::find($id);
    
        $organisasi->nama_ketua = $request->input('nama_ketua');
        $organisasi->nama_wakil = $request->input('nama_wakil');
        $organisasi->ketua_ikpas = $request->input('ketua_ikpas');
        $organisasi->wakil_ketua = $request->input('wakil_ketua');
        $organisasi->sekretaris = $request->input('sekretaris');
        $organisasi->bendahara = $request->input('bendahara');
        $organisasi->bidang_kesehatan = $request->input('bidang_kesehatan');
        $organisasi->bidang_kerohania = $request->input('bidang_kerohania');
        $organisasi->bidang_senior = $request->input('bidang_senior');
        $organisasi->bidang_infokom = $request->input('bidang_infokom');
        $organisasi->bidang_keamanan = $request->input('bidang_keamanan');
    
        // Mengupload gambar ketua baru jika ada
        if ($request->hasFile('img_ketua')) {
            $img_ketua = $request->file('img_ketua')->store('images', 'public');
            $organisasi->img_ketua = $img_ketua;
        }
    
        // Mengupload gambar wakil baru jika ada
        if ($request->hasFile('img_wakil')) {
            $img_wakil = $request->file('img_wakil')->store('images', 'public');
            $organisasi->img_wakil = $img_wakil;
        }
    
        $organisasi->save();
        Alert::success('Pesan Berhasil', 'Data Struktur Organisasi Berhasil di Edit');
        return redirect()->route('struktur');
    }
}
