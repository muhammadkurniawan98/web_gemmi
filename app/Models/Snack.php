<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snack extends Model
{
    use HasFactory;
    protected $table = 'snack';

    protected $fillable = [
        'jenis_snack',
        'tambahan_donasi',
        'donasi_id'
    ];
    public function Donasi(){
        return $this->belongsTo(Donasi::class);
    }

    public $timestamps = false;
}
