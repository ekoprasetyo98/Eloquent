<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;

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
        // $data = DB::table('pegawai')->where('id',$id)->get();
        $data = Pegawai::find($id);
        // dd($data);
        
        return view('edit-form',['dataPegawaiById'=>$data]);
    }

    public function update($id, Request $request){
        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect('/pegawai');
        
    }

    public function delete($id){
        // dd($id);
        Pegawai::find($id)->delete();
        return redirect('/pegawai');
        
        
    }



}
