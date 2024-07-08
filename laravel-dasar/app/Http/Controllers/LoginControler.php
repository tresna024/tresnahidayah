<?php

namespace App\Http\Controllers;

use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class LoginControler extends Controller
{
        public function login(){
        return view('auth.login', [
            "title" => "Login"
        ]);
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect()->route('home');
        }
        return redirect()->route('login');
    }

    public function registrasi(){
        return view('auth.registrasi', [
            "title" => "Registrasi"
        ]);
    }

    public function simpan_registrasi(Request $request)
    {
        Log::info('Request received for registration:', $request->all());

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            Log::error('Validation failed:', $validator->errors()->toArray());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'jabatan' => 'Admin',
                'img_profile' => 'admin/img/user-img.jpg',
                'password' => bcrypt($request->password),
                'remember_token' => Str::random(60),
            ]);
            Log::info('User created successfully:', $user->toArray());
        } catch (\Exception $e) {
            Log::error('Error creating user:', ['message' => $e->getMessage()]);
            return redirect()->back()->with('error', 'An error occurred while creating the user.')->withInput();
        }

        Alert::success('Pesan Berhasil', 'Data Berhasil di tambah');
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silahkan login.');
    }

}
