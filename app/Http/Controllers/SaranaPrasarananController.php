<?php

namespace App\Http\Controllers;

use App\Models\SaranaPrasaranan;
use Illuminate\Http\Request;

class SaranaPrasarananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //get all list
    public function index(){
        $sarana_prasarana = SaranaPrasaranan::all();
        return view('sarana_prasarana.index', compact('sarana_prasarana'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('sarana_prasarana.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'nama_moda' => 'required',
            'jenis' => 'required',
            'nomor_identitas' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'kapasitas' => 'required',
            'satuan' => 'required',
            'tanggal_pembelian' => 'required',
        ]);

        SaranaPrasaranan::create($request->all());

        return redirect()->route('sarana_prasarana.index')
            ->with('success', 'Sarana Prasarana created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        $sarana_prasarana = SaranaPrasaranan::find($id);
        return view('sarana_prasarana.show', compact('sarana_prasarana'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $sarana_prasarana = SaranaPrasaranan::find($id);
        return view('sarana_prasarana.edit', compact('sarana_prasarana'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $request->validate([
            'nama_moda' => 'required',
            'jenis' => 'required',
            'nomor_identitas' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'kapasitas' => 'required',
            'satuan' => 'required',
            'tanggal_pembelian' => 'required',
        ]);

        $sarana_prasarana = SaranaPrasaranan::find($id);
        $sarana_prasarana->update($request->all());

        return redirect()->route('sarana_prasarana.index')
            ->with('success', 'Sarana Prasarana updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        $sarana_prasarana = SaranaPrasaranan::find($id);
        $sarana_prasarana->delete();

        return redirect()->route('sarana_prasarana.index')
            ->with('success', 'Sarana Prasarana deleted successfully');
    }
}
