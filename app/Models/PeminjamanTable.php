<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanTable extends Model
{
    use HasFactory;
    protected $table ='peminjaman_table';
    protected $guarded =['id'];
}
