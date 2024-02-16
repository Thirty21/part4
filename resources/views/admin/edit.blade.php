@extends('layouts.main')

@section('content')
    <div class="flex items-center justify-center h-screen bg-blue-50">
        <div class="w-1/3 bg-white rounded-md shadow-xl border">
            <div class="px-10 py-10">
            <form action="{{ url('admin/'.$model->id) }}" method="POST" enctype="multipart/form-data">
                @method('patch')
                @csrf

                <div class="mb-4">
                    <label for="id_iventaris" class="block text-gray-700 text-sm font-bold mb-2">ID Iventaris:</label>
                    <input type="text" name="id_iventaris" id="id_iventaris" 	class="w-2/3 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('id_iventaris', $model->id_iventaris) }}" required>
                </div>

                <div class="mb-4">
                    <label for="nama_barang" class="block text-gray-700 text-sm font-bold mb-2">Nama Barang:</label>
                    <input type="text" name="nama_barang" id="nama_barang" 	class="w-2/3 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('nama_barang', $model->nama_barang) }}" required>
                </div>

                <div class="mb-4">
                    <label for="kondisi" class="block text-gray-700 text-sm font-bold mb-2">Kondisi:</label>
                    <input type="text" name="kondisi" id="kondisi" 	class="w-2/3 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('kondisi', $model->kondisi) }}" required>
                </div>

                <div class="mb-4">
                    <label for="stok" class="block text-gray-700 text-sm font-bold mb-2">Stok:</label>
                    <input type="number" name="stok" id="stok" 	class="w-2/3 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('stok', $model->stok) }}" required>
                </div>

                <div class="mb-4">
                    <label for="tanggal_register" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Register:</label>
                    <input type="date" name="tanggal_register" id="tanggal_register" 	class="w-2/3 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('tanggal_register', $model->tanggal_register) }}" required>
                </div>

                <div class="mb-4">
                    <label for="foto" class="block text-gray-700 text-sm font-bold mb-2">Foto:</label>
                    <input 	class="w-2/3 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" type="file" accept="image/*" name="foto">
                </div>

                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Submit</button>
                </div>
            </form>
        </div>
         </div>



@endsection

