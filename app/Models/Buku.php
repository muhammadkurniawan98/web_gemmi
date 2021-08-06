<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';

    protected $fillable = [
        'jenis_buku',
        'keterangan',
        'donasi_id'
    ];
    public function Donasi(){
        return $this->belongsTo(Donasi::class);
    }

    public $timestamps = false;
}
