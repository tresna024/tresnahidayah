<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin Aplikasi',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'img_profile' => 'user-img.jpg',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, dolore.',
            'instansi' => 'Politeknik Negeri Lhokseumawe',
            'alamat' => 'aceh',
            'jabatan' => 'admin',
            'no_hp' => '800888888',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60),
        ]);
    }
}

