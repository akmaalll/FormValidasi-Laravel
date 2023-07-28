<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pg = Pegawai::get();
        $no = 1;
        $data = array(
            'no' => $no,
            'pegawais' => $pg

        );

        return view('index', $data);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => "required|min:5|max:20",
            'nip' => "required|max_digits:18",
            'status' => "required",
            'jabatan' => "required",
            'foto' => "required",
        ]);

        if ($request->hasFile('foto')) {

            $imgName =  $request->file('foto')->getClientOriginalName();
            $request->foto->move(public_path('images'), $imgName);
            $data['foto'] = $imgName;
        }

        Pegawai::create([
            'nama' => $request['nama'],
            'nip' => $request['nip'],
            'status' => $request['status'],
            'jabatan' => $request['jabatan'],
            'foto' => $data['foto']
        ]);

        return redirect()->route('index.pegawai');
    }
}
