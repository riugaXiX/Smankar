<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\pelajaran;


class GuruController extends Controller
{
    //
    public function index(){
        return view('admin/pages/guru', [
            "title" => "Guru",
            "Gurus" => guru::all()
            
        ]);
    }

    public function show($id){
        return view('detailguru',[
            'title' => "detail",
            'detail' => guru::all()
        ]);
    }

    public function create(){
        return view('admin.pages.tambah.tambahguru',[
            'title' => 'tambahguru',
            'Pelajarans'=>pelajaran::all()
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'NIK' => 'required',
            'nmGuru' => 'required',
            'almtGuru'=> 'required',
            'nomorGuru' => 'required',
            'pelajaran_id' => 'required',
        ]);

        Guru::create($data);

        return redirect('/guru')->with('success', 'Data has been added successfully!');
    }

    public function edit($id){
        $d = Guru::findOrFail($id);
        return view('admin.pages.edit.editguru',[
            "title" => 'editguru',
            "data" => $d,
            "Pelajarans" =>pelajaran::all()
        ]);
    }

    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'NIK' => 'required',
            'nmGuru' => 'required',
            'almtGuru'=> 'required',
            'nomorGuru' => 'required',
            'pelajaran_id' => 'required',
        ]);

        $guru = Guru::findOrFail($id);
        $guru->update($validatedData);

        return redirect('/guru')->with('success', 'Data has been updated successfully!');
    }

    public function destroy($id){
        $post = Guru::findOrFail($id);
        $post->delete();

        return redirect('/guru')->with('success', 'Data has been deleted successfully!');
    
    }

}
