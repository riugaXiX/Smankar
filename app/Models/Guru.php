<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIK',
        'nmGuru',
        'almtGuru',
        'nomorGuru',
        'pelajaran_id',
    ];


    public function pelajaran(){
        return $this->belongsTo(Pelajaran::class);
    }
}
