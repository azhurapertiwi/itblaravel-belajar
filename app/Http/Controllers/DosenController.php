<?php

namespace App\Http\Controllers;
use App\Models\Dosen;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Dosen::all(); // all() -> menampilkan semua data
        // $data=Dosen:where('nidn', '12345') // where() -> tampilkan data 'berdasarkan'
        return view('dosen', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form_dosen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dosen::create([
            'nama'=> $request->nama,
            'nidn'=> $request->nidn,
            'alamat'=> $request->alamat,
            'hp'=> $request->hp,
        ]);
        return redirect('/dosen');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $dosen = Dosen::find($id);
        return view('edit_dosen', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $dosen = Dosen::find($id);
        $dosen->nama = $request->nama;
        $dosen->nidn = $request->nidn;        
        $dosen->alamat = $request->alamat;        
        $dosen->hp = $request->hp;   
        $dosen->save();
        
        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();

        return redirect("/dosen");
    }
}