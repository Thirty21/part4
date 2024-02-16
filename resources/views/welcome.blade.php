@extends('layouts.main')

@section('content')
<div class="flex items-center justify-center h-screen gap-4 bg-blue-50">
    <a href="{{url('admin')}}" class="text-3xl px-5 py-3 mb-64 rounded-xl bg-orange-300">admin</a>
    <a href="{{url('adminpeminjaman')}}" class="text-3xl px-5 mb-40 py-3 rounded-xl bg-teal-400">admin Peminjaman</a>
    <a href="{{url('home')}}" class="text-3xl px-5 py-3 rounded-xl mb-10 bg-purple-300">Home</a>
    <a href="{{url('peminjaman')}}" class="text-3xl px-5 py-3 rounded-xl mt-10 bg-purple-700 text-white">Peminjaman</a>
    </div>
@endsection
