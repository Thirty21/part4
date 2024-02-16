<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $datas = Admin::all();
        return view('home.index', compact('datas'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $datas = Admin::where('id_iventaris', 'like', '%' . $query . '%')
            ->orWhere('nama_barang', 'like', '%' . $query . '%')
            ->orWhere('kondisi', 'like', '%' . $query . '%')
            ->orWhere('stok', 'like', '%' . $query . '%')
            ->orWhere('tanggal_register', 'like', '%' . $query . '%')
            ->orWhere('foto', 'like', '%' . $query . '%')
            ->get();
        return view('home.index', compact('datas'));
    }
}
