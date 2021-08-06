<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dana extends Model
{
    use HasFactory;
    protected $table = 'dana';

    protected $fillable = [
        'jumlah_dana',
        'bank_rekening',
        'donasi_id'
    ];

    public function Donasi(){
        return $this->belongsTo(Donasi::class);
    }

    public $timestamps = false;
}
