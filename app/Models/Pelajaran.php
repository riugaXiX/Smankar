<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'kdPelajaran',
        'nmPelajaran'
    ];

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }

    public function guru(){
        return $this->hasMany(Pelajaran::class);
    }
}
