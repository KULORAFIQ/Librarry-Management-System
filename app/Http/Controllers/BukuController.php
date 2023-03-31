<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('buku.index')->with([
            'buku' => Buku::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_petugas' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'thn_terbit' => 'required',
            'jml_buku' => 'required',
            'lokasi' => 'required',
            'tgl_input' => 'required',
        ]);

        $buku = new Buku;
        $buku->id_petugas = $request->id_petugas;
        $buku->judul = $request->judul;
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->thn_terbit = $request->thn_terbit;
        $buku->jml_buku = $request->jml_buku;
        $buku->lokasi = $request->lokasi;
        $buku->tgl_input = $request->tgl_input;
        $buku->save();

        return to_route('buku.index')->with('success','Data Berhasil Di Tambahkan.');
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
        return view('buku.edit')->with([
            'buku' => Buku::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_petugas' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'thn_terbit' => 'required',
            'jml_buku' => 'required',
            'lokasi' => 'required',
            'tgl_input' => 'required',
        ]);

        $buku = new Buku;
        $buku->id_petugas = $request->id_petugas;
        $buku->judul = $request->judul;
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->thn_terbit = $request->thn_terbit;
        $buku->jml_buku = $request->jml_buku;
        $buku->lokasi = $request->lokasi;
        $buku->tgl_input = $request->tgl_input;
        $buku->save();

        return to_route('buku.index')->with('success','Data Berhasil Di Tambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::find($id);
        $buku->delete();

        return back()->with('success', 'Data Berhasil Dihaspus');
    }
}
