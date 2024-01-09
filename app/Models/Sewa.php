<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sewa extends Model
{
    use HasFactory;

    protected $fillable = [
        'huni_id',
        'kam_id',
        'tgl_bayar',
        'bulan',
        'bayar', 
        'user_id'
    ];

    public function penghuni(): HasOne
    {
        return $this->hasone(Penghuni::class,'id','huni_id');
    }

    public function kamar(): HasOne
    {
        return $this->hasone(Kamar::class,'id','kam_id');
    }

    public function user(): HasOne
    {
        return $this->hasone(User::class,'id','user_id');
    }
}
