<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuanganTable extends Model
{
    use HasFactory;
    protected $table ='ruangan_table';
    protected $guarded =['id'];
}
