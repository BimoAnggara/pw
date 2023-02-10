<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $fillable = ['nama_barang','jenis_barang','tanggal_pengadaan','jumlah_barang','merk_barang','kondisi_barang','deskripsi_barang'];
}
