<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nonaktifkan timestamps jika tidak diperlukan
    public $timestamps = false;

    // Tentukan kolom primary key yang baru
    protected $primaryKey = 'id_users';

    // Tentukan kolom mana yang bisa diisi
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

}


