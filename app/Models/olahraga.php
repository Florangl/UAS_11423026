<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class olahraga extends Model
{
    use HasFactory;
    protected $fillable = ['nama_katlapangan','harga_katlapangan','file_katlapangan','jumlah_lapangan','created_by','updated_by'];
    protected $table = 'olahraga';
    public $timestamps = false;
}

