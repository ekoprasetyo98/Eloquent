<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai as Pegawai;

class PegawaiController extends Controller
{
    //
    public function index(){
        // mengambil data dari model menggunakan function eloquent all()
        $pegawai = Pegawai::all();
        // kirim data ke view
        return view('pegawai',['dataPegawai'=>$pegawai]);

    }

}
