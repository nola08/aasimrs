<?php

namespace App\Http\Controllers;

use App\Models\farmasiModel;
use Illuminate\Http\Request;

class farmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $farmasi = farmasiModel::get();
        return view('front.farmasi.index', compact('farmasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.farmasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $farmasi = new farmasiModel();
        $farmasi->nama_obat = $request->nama_obat;
        $farmasi->kode_obat = $request->kode_obat;
        $farmasi->bentuk_sediaan = $request->bentuk_sediaan;
        $farmasi->dosis = $request->dosis;
        $farmasi->stok = $request->stok;
        $farmasi->harga_satuan = $request->harga_satuan;
        $farmasi->expired_date = $request->expired_date;
        $farmasi->keterangan = $request->keterangan;
        $farmasi->save();

    return redirect()->route('farmasi.index')->with('success', 'Data berhasil ditambahkan');
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
        $farmasi = farmasiModel::findOrFail($id);
        return view('front.farmasi.edit', compact('farmasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $farmasi = farmasiModel::findOrFail($id);
    $farmasi->nama_obat = $request->nama_obat;
    $farmasi->kode_obat = $request->kode_obat;
    $farmasi->bentuk_sediaan = $request->bentuk_sediaan;
    $farmasi->dosis = $request->dosis;
    $farmasi->stok = $request->stok;
    $farmasi->harga_satuan = $request->harga_satuan;
    $farmasi->expired_date = $request->expired_date;
    $farmasi->keterangan = $request->keterangan;
    $farmasi->save();

    return redirect()->route('farmasi.index')->with('success', 'Data berhasil diperbarui');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $farmasi = farmasiModel::findOrFail($id);
        $farmasi->delete();
        return redirect()->route('farmasi.index')->with('success', 'Data berhasil dihapus');
    }
}
