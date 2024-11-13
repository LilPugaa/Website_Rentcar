<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    // Nonaktifkan timestamps jika tidak diperlukan
    public $timestamps = false;

    // Tentukan kolom primary key yang baru
    protected $primaryKey = 'id_rentals';

    // Tentukan kolom mana yang bisa diisi
    protected $fillable = [
        'nama_mobil', 'plat', 'tanggal_disewa', 'tanggal_kembali', 'name', 'harga', 'status',
    ];
}
