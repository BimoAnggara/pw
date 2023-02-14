<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = ['nama_barang','jenis_barang','sumber_dana','tanggal_pengadaan','jumlah_barang','merk_barang','kategori_barang','kondisi_barang','deskripsi_barang'];
}
