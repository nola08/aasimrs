<?php

namespace App\Http\Controllers;

use App\Models\IdentitasModel;
use App\Models\pendaftaranModel;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        //$web_ppdb = IdentitasModel::find('1');
        return view('front.home');
    }
    public function pendaftaran(){
        return view('front.pasien_daftar');
        }

        public function pendaftaran_store(Request $request){
            $daftar = new pendaftaranModel();
            $daftar->nama_pasien = $request->nama_pasien;
            $daftar->alamat = $request->alamat;
            $daftar->nik = $request->nik;
            $daftar->handphone = $request->handphone;
            $daftar->tempat_lahir = $request->tempat_lahir;
            $daftar->tanggal_lahir = $request->tanggal_lahir;
            $daftar->jenis_layanan_kesehatan = $request->jenis_layanan_kesehatan;
            $daftar->save();
            return redirect()->back()->with('succes', 'Data berhasil dikirim');

}      
}