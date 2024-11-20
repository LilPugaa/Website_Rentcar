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

    // Method untuk mengecek role pengguna
    public function hasRole($role)
    {
        return $this->role === $role;
    }

    // Method untuk mengecek permission
    public function hasPermissionTo($permission)
    {
        // Misalnya Anda memiliki kolom `permissions` dalam tabel users yang menyimpan array permission
        $permissions = explode(',', $this->permissions); // Kolom permissions berupa string yang dipisah dengan koma
        return in_array($permission, $permissions);
    }
}

