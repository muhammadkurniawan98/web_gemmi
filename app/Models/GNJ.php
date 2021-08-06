<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GNJ extends Model
{
    use HasFactory;
    protected $table = 'gnj';

    protected $fillable = [
        'jenis_gnj',
        'tambahan_donasi',
        'donasi_id'
    ];
    public function Donasi(){
        return $this->belongsTo(Donasi::class);
    }

    public $timestamps = false;
}
