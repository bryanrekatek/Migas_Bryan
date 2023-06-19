<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function formIndex(){
        return view('buku.index');
    }
    public function formCreate(){
        return view('buku.create');
    }
    public function formEdit($id){
        $buku = Buku::whereId($id)->first();
        return view('buku.edit', compact('buku'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $buku = Buku::all();
        return response()->json([
            'success' => true,
            'message' => 'Daftar data buku',
            'data' => $buku
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'keterangan' => 'required',
        ]);
        $buku = new Buku();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->keterangan = $request->keterangan;
        $buku->save();

        return response()->json([
            'success' => true,
            'message' => 'Buku berhasil ditambahkan',
            'data' => $buku
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        $buku = Buku::whereId($id)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail data buku',
            'data' => $buku
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'keterangan' => 'required',
        ]);
        $buku = Buku::whereId($id)->first();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->keterangan = $request->keterangan;
        $buku->save();

        return response()->json([
            'success' => true,
            'message' => 'Buku berhasil diupdate',
            'data' => $buku
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        $buku = Buku::whereId($id)->first();
        $buku->delete();

        return response()->json([
            'success' => true,
            'message' => 'Buku berhasil dihapus',
        ], 200);
    }
}
