<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Peminjaman::all();
        return view('peminjaman.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new Peminjaman();
        return view('peminjaman.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Peminjaman();
        $model->id_iventaris = $request->id_iventaris;
        $model->nama_barang = $request->nama_barang;
        $model->nama_peminjam = $request->nama_peminjam;
        $model->tanggal_peminjam = $request->tanggal_peminjam;
        $model->tanggal_kembali = $request->tanggal_kembali;
        $model->status = $request->status;
        $model->petugas = $request->petugas;
        $model->save();

        return redirect('/peminjaman')->with('success', 'Data Berhasil');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
