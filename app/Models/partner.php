<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    protected $table = 'tb_partner'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'id_partner';

    protected $fillable = [
        'logo_partner',
        // Tambahkan kolom lain sesuai kebutuhan Anda
    ];

    // Jika model memiliki kolom timestamp (created_at, updated_at)
    public $timestamps = false;
}

