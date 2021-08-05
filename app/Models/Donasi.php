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

    public function Dana(){
        return $this->hasOne(Dana::class);
    }
    public function Buku(){
        return $this->hasOne(Buku::class);
    }
    public function Sembako(){
        return $this->hasOne(Sembako::class);
    }
    public function Snack(){
        return $this->hasOne(Snack::class);
    }
    public function GNJ(){
        return $this->hasOne(GNJ::class);
    }
}
