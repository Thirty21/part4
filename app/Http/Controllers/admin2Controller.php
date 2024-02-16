<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class Admin2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Peminjaman::all();
        return view('admin2.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        $model = Peminjaman::findOrFail($id);
        return view('admin2.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Peminjaman::findOrFail($id);
        $model->id_iventaris = $request->id_iventaris;
        $model->nama_barang = $request->nama_barang;
        $model->nama_peminjam = $request->nama_peminjam;
        $model->tanggal_peminjam = $request->tanggal_peminjam;
        $model->tanggal_kembali = $request->tanggal_kembali;
        $model->status = $request->status;
        $model->petugas = $request->petugas;
        $model->save();

        return redirect('adminpeminjaman')->with('success', 'data berhasil  di Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
