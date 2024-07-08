<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'nama_ketua',
        'img_ketua',
        'nama_wakil',
        'img_wakil',
        'ketua_ikpas',
        'wakil_ketua',
        'sekretaris',
        'bendahara',
        'bidang_kesehatan',
        'bidang_kerohania',
        'bidang_senior',
        'bidang_keamanan',
        'bidang_infokom', 
        'password'
    ];
}
