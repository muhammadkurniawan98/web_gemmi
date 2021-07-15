<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $table = 'donasi';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'nama_donatur',
        'nama_penerima',
        'alamat',
        'no_telepon',
        'jenis_donasi',
        'bukti_donasi',
        'tanggal',
    ];
}
