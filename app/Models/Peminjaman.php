<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable = ['nis','nama_siswa','nama_barang','tanggal_peminjaman','jumlah_barang_peminjam','id_barang','status_peminjaman'];
}
