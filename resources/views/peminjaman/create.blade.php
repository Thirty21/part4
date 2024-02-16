@extends('layouts.main')

@section('content')

<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
      <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
        <div class="max-w-md mx-auto">
          <div class="flex items-center space-x-5">
            <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
              <h2 class="leading-relaxed">Create Data</h2>
              <p class="text-sm text-gray-500 font-normal leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <form action="{{route('peminjaman.store')}}" method="POST" enctype="multipart/form-data" class="divide-y divide-gray-200">
            @csrf
            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
              <div class="flex flex-col">
                <label class="leading-loose">Id Inventaris</label>
                <input type="text" name="id_iventaris" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="masukan id">
              </div>
              <div class="flex flex-col">
                <label class="leading-loose">Nama Barang</label>
                <input type="text" name="nama_barang" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="masukan nama barang">
              </div>
              <div class="flex flex-col">
                <label class="leading-loose">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder=" masukan kondisi">
              </div>
              <div class="flex flex-col">
                <label class="leading-loose">Tanggal pinjam</label>
                <input type="date" name="tanggal_peminjam" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="masukan stock">
              </div>

              <div class="flex flex-col">
                <label class="leading-loose">Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="masukan tanggal register">
              </div>
              <div class="flex flex-col">
                <label class="leading-loose">Status</label>
                <select type="text" name="status" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="status">
                    <option value="proses">Proses</option>
                    {{-- <option value="sudah_kembali">Sudah Kembali</option>
                    <option value="belum_kembali">Belum Kembali</option> --}}
                </select>
              </div>
              <div class="flex flex-col">
                <label class="leading-loose">Petugas</label>
                <input type="text" name="petugas" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="masukan tanggal register">
              </div>

            </div>
            <div class="pt-4 flex items-center space-x-4">

                <button class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
