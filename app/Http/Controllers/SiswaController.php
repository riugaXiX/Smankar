<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index(){
        return view('admin/pages/siswa', [
            "title" => "Siswa",
            "Siswas" => siswa::all()
            
            
        ]);
    }
}
