<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\pegawai;
use Illuminate\Http\Request;


class PegawaiController extends Controller
{
    public function index() {
        $pegawai = pegawai::all();
        return view('backend.layouts.listpegawai', compact('pegawai'));
        // return view('backend.layouts.listpegawai');
//        routes untuk kembali ke index
    }
    public function tambahpegawai()
    {
        return view('backend.layouts.tambahpegawai');
    }
    public function store(Request $Request)
    {
        $this->validate($Request,[
            'name' => 'required|max:255',
            'password' => 'required',
            'gaji' => 'required',
          ]);
      
          $pegawai = pegawai::create([
            'name' => $Request->name,
            'password' => $Request->password,
            'gaji' => $Request->gaji,
          ]);
          return redirect()->route('listpegawai');
    }
}
