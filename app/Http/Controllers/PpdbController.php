<?php

namespace App\Http\Controllers;

use App\Models\ppdb;
use App\Models\siswa;
use Illuminate\Http\Request;


class PpdbController extends Controller
{
    //
    public function index(){
        $ppdb = ppdb::where("isterima",0)->get();
        foreach ($ppdb as $d ) {
            # code...
            $d->totalnilai = $d->inggris + $d->indonesia + $d->matematika;
        }


        return view('admin/pages/pesertaDidikBaru', [
            "title" => "PPDB",
            "PPDBS" => $ppdb  
        ]);
    }

    public function update($id){
        $d = ppdb::where("id",$id)->first();
        // dd($d->nmSiswa);
        siswa::insert([
            'nmSiswa' => $d->nmSiswa,
            'NIS' => $d->NIS,
            'almtSiswa' => $d->almtSiswa,
            'nmrSiswa' => $d->nmrSiswa,
            'email' => $d->email,
            'created_at' => date(now()),
            'updated_at' => date(now())
        ]);
        ppdb::where("id",$id)->update(["isterima"=>1]);
        return redirect("/siswa");   
    }

    public function tolak($id){
        $d = ppdb::where("id",$id)->first();
        ppdb::where("id",$id)->update(["isterima"=>1]);
    }
}
