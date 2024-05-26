<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    /**
     * Tentukan nama tabel secara eksplisit
     *
     * @var string
     */
    protected $table = 'pegawai'; 

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_pegawai',
        'alamat_pegawai',
        'jabatan',
    ];
/**
     * Nonaktifkan timestamps
     *
     * @var bool
     */
    public $timestamps = false;
}