@extends('layouts.main')

@section('content')
    <div class="flex items-center justify-center h-screen bg-blue-50">
        <div class="w-1/3 bg-white rounded-md shadow-xl border">
            <div class="px-10 py-10">
            <form action="{{ url('adminpeminjaman/'.$model->id) }}" method="POST" enctype="multipart/form-data">
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
                    <label for="nama_peminjam" class="block text-gray-700 text-sm font-bold mb-2">Nama Peminjaman:</label>
                    <input type="text" name="nama_peminjam" id="nama_peminjam" 	class="w-2/3 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('nama_peminjam', $model->nama_peminjam) }}" required>
                </div>

                <div class="mb-4">
                    <label for="tanggal_peminjam" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Peminjam:</label>
                    <input type="date" name="tanggal_peminjam" id="tanggal_peminjam" 	class="w-2/3 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('tanggal_peminjam', $model->tanggal_peminjam) }}" required>
                </div>

                <div class="mb-4">
                    <label for="tanggal_kembali" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Kembali:</label>
                    <input type="date" name="tanggal_kembali" id="tanggal_kembali" 	class="w-2/3 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('tanggal_kembali', $model->tanggal_kembali) }}" required>
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status</label>
                    <select id="status" name="status"	class="w-2/3 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('status', $model->status) }}">
                        <option value="proses" {{ $model->status == 'proses' ? 'selected' : '' }}>Proses</option>
                        <option value="sudah_kembali" {{ $model->status == 'sudah_kembali' ? 'selected' : '' }}>Sudah Kembali</option>
                        <option value="belum_kembali" {{ $model->status == 'belum_kembali' ? 'selected' : '' }}>Belum Kembali</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="petugas" class="block text-gray-700 text-sm font-bold mb-2">Petugas:</label>
                    <input type="text" name="petugas" id="petugas" 	class="w-2/3 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" value="{{ old('petugas', $model->petugas) }}" required>
                </div>

                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Submit</button>
                </div>
            </form>
        </div>
         </div>



@endsection

