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
        'nama_penerima',
        'jenis_donasi',
        'jumlah_donasi',
        'bukti_donasi',
        'tanggal',
        'status'
    ];
    public function User(){
        return $this->belongsTo(User::class);
    }
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
