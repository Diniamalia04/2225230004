<?php

namespace App\Http\Controllers;

use App\Models\dini;
use Illuminate\Http\Request;


class functions extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=dini::all();
        return view('isian.tampildata')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('isian.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'penulis'=>'required',
            'judul'=>'required',
            'genre'=>'required',
            'cerita'=>'required'
        ]);
        $data=[
            'penulis'=> $request->input('penulis'),
            'judul'=> $request->input('judul'),
            'genre'=> $request->input('genre'),
            'cerita'=> $request->input('cerita')
        ];
        dini::create($data);
        return redirect ('isian');
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
        $data = dini::where('penulis', $id)->first();
        return view('isian.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'penulis'=>'required',
            'judul'=>'required',
            'genre'=>'required',
            'cerita'=>'required'
        ]);
        $data=[
            'penulis'=> $request->input('penulis'),
            'judul'=> $request->input('judul'),
            'genre'=> $request->input('genre'),
            'cerita'=> $request->input('cerita')
        ];
        dini::where('penulis', $id)->update($data);
        return redirect ('isian')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dini::where('penulis', $id)->delete();
        return redirect ('isian')->with('success', 'Data berhasil dihapus');
    }
}
