<?php

namespace App\Http\Controllers;

use App\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        return Anggota::all();
    }

    public function create(request $request)
    {
        $anggota = new Anggota();

        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->username = $request->username;
        $anggota->password = $request->password;
        $anggota->email = $request->email;

        $anggota->save();

        return "Data Berhasil Disimpan";
    }

    public function update(request $request, $id)
    {
        $username = $request->username;
        $email = $request->email;
        $namaAnggota = $request->nama;

        $anggota = Anggota::find($id);
        $anggota->username = $username;
        $anggota->email = $email;
        $anggota->nama_anggota = $namaAnggota;

        $anggota->save();

        return "Data Anggota Berhasil diperbaharui";
    }

    public function delete($id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();

        return "Data Anggota Berhasil dihapus";
    }
}
