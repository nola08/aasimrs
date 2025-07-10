<?php

namespace App\Http\Controllers;

use App\Models\jadwal_dokterModel;
use Illuminate\Http\Request;

class Jadwal_DokterController extends Controller
{
    public function index()
    {
        $jadwal_dokter = jadwal_dokterModel::get();
        return view('front.jadwal_dokter.index', compact('jadwal_dokter'));
    }

    public function create()
    {
        return view('front.jadwal_dokter.tambah');
    }

    public function store(Request $request)
    {
        $jadwal = new jadwal_dokterModel();
        $jadwal->Nama_Dokter = $request->Nama_Dokter;
        $jadwal->Spesialis = $request->Spesialis;
        $jadwal->Hari_Praktek = $request->Hari_Praktek;
        $jadwal->Jam_Mulai = $request->Jam_Mulai;
        $jadwal->Jam_Selesai = $request->Jam_Selesai;
        $jadwal->Ruangan = $request->Ruangan;
        $jadwal->Keterangan = $request->Keterangan;
        $jadwal->save();

        return redirect()->route('jadwal_dokter.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $jadwal_dokter = jadwal_dokterModel::findOrFail($id);
        return view('front.jadwal_dokter.edit', compact('jadwal_dokter'));
    }

    public function update(Request $request, $id)
    {
        $jadwal = jadwal_dokterModel::findOrFail($id);
        $jadwal->Nama_Dokter = $request->Nama_Dokter;
        $jadwal->Spesialis = $request->Spesialis;
        $jadwal->Hari_Praktek = $request->Hari_Praktek;
        $jadwal->Jam_Mulai = $request->Jam_Mulai;
        $jadwal->Jam_Selesai = $request->Jam_Selesai;
        $jadwal->Ruangan = $request->Ruangan;
        $jadwal->Keterangan = $request->Keterangan;
        $jadwal->save();

        return redirect()->route('jadwal_dokter.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $jadwal = jadwal_dokterModel::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwal_dokter.index')->with('success', 'Data berhasil dihapus');
    }
}
