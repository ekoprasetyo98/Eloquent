<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    //
    public function index(){
        // mengambil data dari model menggunakan function eloquent all()
        $pegawai = Pegawai::all();
        // kirim data ke view
        return view('pegawai',['dataPegawai'=>$pegawai]);

    }

    public function input(Request $request)
    {
        // untuk insert data ke database menggunakan function create()
        Pegawai::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function edit($id){
        $data = Pegawai::find($id);
        return view('edit-form',['dataPegawaiById'=>$data]);
    }

    public function update($id, Request $request){
        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect('/pegawai');
        
    }



}
