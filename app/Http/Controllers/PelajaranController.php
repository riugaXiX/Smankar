<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelajaran;

class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $p = new Pelajaran;
        $columns = $p->getTableColumns();
        return view('admin/pages/matapelajaran', [
            "title" => "Pelajaran",
            "pelajarans" => Pelajaran::all(),
            "pelajaran" => $columns

            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.tambah.tambahpelajaran',[
            'title' => 'Tambah Pelajaran'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'kdPelajaran' => 'required',
            'nmPelajaran' => 'required',
        ]);

        Pelajaran::create($data);

        return redirect('/pelajaran')->with('success', 'Data has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $d = Pelajaran::findOrFail($id);
        return view('admin.pages.edit.editpelajaran',[
            "title" => 'editpelajaran',
            "data" => $d,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $validatedData = $request->validate([
            'kdPelajaran' => 'required',
            'nmPelajaran' => 'required',
        ]);

        $pelajaran = Pelajaran::findOrFail($id);
        $pelajaran->update($validatedData);

        return redirect('/pelajaran')->with('success', 'Data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pelajaran = Pelajaran::findOrFail($id);
        $pelajaran->delete();

        return redirect('/pelajaran')->with('success', 'Data has been deleted successfully!');
    
    }
}
