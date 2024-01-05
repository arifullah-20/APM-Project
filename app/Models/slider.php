<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table = 'tb_slider'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'id_slider';

    protected $fillable = [
        'gambar_slider',
        // Tambahkan kolom lain sesuai kebutuhan Anda
    ];

    // Jika model memiliki kolom timestamp (created_at, updated_at)
    public $timestamps = false;
}
