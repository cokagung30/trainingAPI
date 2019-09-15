<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'nama_anggota' => 'required',
            'email' => 'required',
            'password' => 'required',
            'username' => 'required'
        ]);

        $namaAnggota = $request->input('nama');
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');

        $anggota
    }
}
