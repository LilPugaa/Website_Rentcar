<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    public $timestamps = false;


    // Tentukan kolom mana yang bisa diisi
    protected $fillable = [
        'nama_mobil', 'plat', 'tanggal_disewa', 'tanggal_kembali', 'nama_penyewa','harga', 'status',
    ];
}
