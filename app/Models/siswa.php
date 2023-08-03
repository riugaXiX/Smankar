<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{

    protected $fillable = [
        'nmSiswa',
        'NIS',
        'almtSiswa',
        'nmrSiswa',
        'email',
    ];
    use HasFactory;
}
