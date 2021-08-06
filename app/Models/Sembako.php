<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sembako extends Model
{
    use HasFactory;
    protected $table = 'sembako';

    protected $fillable = [
        'jenis_sembako',
        'tambahan_donasi',
        'donasi_id'
    ];
    public function Donasi(){
        return $this->belongsTo(Donasi::class);
    }

    public $timestamps = false;
}
