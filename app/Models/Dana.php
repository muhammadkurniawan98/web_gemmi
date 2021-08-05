<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dana extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_dana',
        'tambahan_donasi',
        'donasi_id'
    ];

    public function Donasi(){
        return $this->belongsTo(Donasi::class);
    }
}
