<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;

    protected $table = 'donatur';

    protected $fillable = [
        'user_id',
        'status',
        'ttl',
        'pekerjaan',
        'tanggal'
    ];

    public $timestamps = false;

    public function User(){
        return $this->belongsTo(User::class);
    }
}
