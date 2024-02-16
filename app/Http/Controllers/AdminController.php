<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Admin::all();
        return view('admin.index', compact('datas'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new Admin();
        return view('admin.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'id_iventaris' => 'required',
            'nama_barang' => 'required',
            'kondisi' => 'required',
            'stok' => 'required|numeric',
            'tanggal_register' => 'required|date',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
        ]);

        // Handle file upload
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        } else {
            // Handle the case where no file is uploaded
            $imageName = null; // or provide a default image name
        }

        // Create a new Admin model instance
        $model = new Admin();
        $model->id_iventaris = $request->id_iventaris;
        $model->nama_barang = $request->nama_barang;
        $model->kondisi = $request->kondisi;
        $model->stok = $request->stok;
        $model->tanggal_register = $request->tanggal_register;
        $model->foto = $imageName; // Assign the image name to the 'foto' column
        $model->save();

        return redirect('admin')->with('success', 'Data Berhasil');
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
        $model = Admin::find($id);
        return view('admin.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'id_iventaris' => 'required',
            'nama_barang' => 'required',
            'kondisi' => 'required',
            'stok' => 'required|numeric',
            'tanggal_register' => 'required|date',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
        ]);

        // Find the existing Admin model instance
        $model = Admin::findOrFail($id);

        // Handle file upload if a new photo is provided
        if ($request->hasFile('foto')) {
            // Delete the old photo if it exists
            if ($model->foto) {
                unlink(public_path('uploads/' . $model->foto));
            }

            // Upload the new photo
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            // Update the 'foto' column with the new image name
            $model->foto = $imageName;
        }

        // Update other fields
        $model->id_iventaris = $request->id_iventaris;
        $model->nama_barang = $request->nama_barang;
        $model->kondisi = $request->kondisi;
        $model->stok = $request->stok;
        $model->tanggal_register = $request->tanggal_register;

        // Save the updated data
        $model->save();

        return redirect('admin')->with('success', 'Data Berhasil Diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */


    public function destroy(string $id)
    {
        // Find the Admin model
        $model = Admin::find($id);

        // Retrieve the file name
        $foto = $model->foto;

        // Check if the file exists and delete it
        if ($foto && Storage::exists('uploads/' . $foto)) {
            Storage::delete('uploads/' . $foto);
        }

        // Delete the model
        $model->delete();

        return redirect('admin')->with('success', 'Data Berhasil dihapus beserta fotonya');
    }
}
