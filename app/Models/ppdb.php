<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppdb extends Model
{
    use HasFactory;

    protected $fillable = [
        'nmSiswa',
        'NIS',
        'almtSiswa',
        'nmrSiswa',
        'email',
        'inggris',
        'indonesia',
        'matematika'



    ];

    protected $guarded = ['id'];
    
}
