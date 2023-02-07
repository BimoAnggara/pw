<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengembalianTable extends Model
{
    use HasFactory;
    protected $table ='pengembalian_table';
    protected $guarded =['id'];
}
