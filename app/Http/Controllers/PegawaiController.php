<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index(){
        $pg = Pegawai::get();
        $no = 1;
        $data = array(
            'no' => $no,
            'pegawais' => $pg
        );

        return view('index', $data);
    }

    public function tambah(){
        return view('tambah');
    }
}
