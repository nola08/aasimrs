<?php

namespace App\Http\Controllers;

use App\Models\rekam_medis;
use App\Models\rekam_medisModel;
use Illuminate\Http\Request;

class rekam_medisController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rekam_medis = rekam_medisModel::get(); 
        return view('front.rekam_medis.index', compact('rekam_medis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.rekam_medis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rekam_medis = new rekam_medisModel();
        $rekam_medis ->nama_pasien = $request->nama_pasien;
        $rekam_medis ->tanggal_kunjungan = $request->tanggal_kunjungan;
        $rekam_medis ->hari = $request->hari;
        $rekam_medis ->keluhan = $request->keluhan;
        $rekam_medis ->diagnosa= $request->diagnosa;
        $rekam_medis ->tindakan = $request->tindakan;
        $rekam_medis ->resep_obat = $request->resep_obat;
        $rekam_medis ->nama_dokter = $request->nama_dokter;
        $rekam_medis ->catatan_tambahan = $request->catatan_tambahan;
        $rekam_medis ->save();

        return redirect()->route('rekam_medis.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rekam_medis = rekam_medisModel::findOrFail($id);
        return view('front.rekam_medis.edit', compact('rekam_medis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rekam_medis  = rekam_medisModel::findOrFail($id);
        $rekam_medis ->nama_pasien = $request->nama_pasien;
        $rekam_medis ->tanggal_kunjungan = $request->tanggal_kunjungan;
        $rekam_medis ->hari = $request->hari;
        $rekam_medis ->keluhan = $request->keluhan;
        $rekam_medis ->diagnosa= $request->diagnosa;
        $rekam_medis ->tindakan = $request->tindakan;
        $rekam_medis ->resep_obat = $request->resep_obat;
        $rekam_medis ->nama_dokter = $request->nama_dokter;
        $rekam_medis ->catatan_tambahan = $request->catatan_tambahan;
        $rekam_medis ->save();

        return redirect()->route('rekam_medis.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rekam_medis  = rekam_medisModel::findOrFail($id);
        $rekam_medis->delete(); 
        return redirect()->route('rekam_medis.index')->with('success', 'Data obat berhasil dihapus.');
    }
}