<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_buku',
        'tambahan_donasi',
        'donasi_id'
    ];
    public function Donasi(){
        return $this->belongsTo(Donasi::class);
    }
}
