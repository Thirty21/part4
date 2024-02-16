<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjamen';
    protected $fillable = [
        'id_iventaris',
        'nama_barang',
        'nama_peminjam',
        'tanggal_peminjam',
        'tanggal_kembali',
        'status',
        'petugas',
    ];
}
