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

    public function create(){
        return view('admin.pages.tambah.tambahsiswa',[
            'title' => 'tambahsiswa'
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'nmSiswa' => 'required',
            'NIS' => 'required',
            'almtSiswa' => 'required',
            'nmrSiswa' => 'required',
            'email' => 'required',
        ]);

        siswa::create($data);

        return redirect('/siswa')->with('success', 'Data has been added successfully!');
    }

    public function edit($id){
        $d = siswa::findOrFail($id);
        return view('admin.pages.edit.editsiswa',[
            "title" => 'editsiswa',
            "data" => $d
        ]);
    }

    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'nmSiswa' => 'required',
            'NIS' => 'required',
            'almtSiswa' => 'required',
            'nmrSiswa' => 'required',
            'email' => 'required',
        ]);

        $siswa = siswa::findOrFail($id);
        $siswa->update($validatedData);

        return redirect('/siswa')->with('success', 'Data has been updated successfully!');
    }

    public function destroy($id){
        $siswa = siswa::findOrFail($id);
        $siswa->delete();

        return redirect('/siswa')->with('success', 'Data has been deleted successfully!');
    
    }

}
