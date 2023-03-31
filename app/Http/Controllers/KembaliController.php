<?php

namespace App\Http\Controllers;

use App\Models\Kembali;
use Illuminate\Http\Request;

class KembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kembali.index')->with([
            'kembali' => Kembali::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kembali.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_transaksi' => 'required',
            'tgl_pengembalian' => 'required',
            'denda' => 'required',
            
        ]);

        $kembali = new Kembali;
        $kembali->id_transaksi = $request->id_transaksi;
        $kembali->tgl_pengembalian = $request->tgl_pengembalian;
        $kembali->denda = $request->denda;
       
        $kembali->save();

        return to_route('kembali.index')->with('success','Data Berhasil Di Tambahkan.');
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
        return view('kembali.edit')->with([
            'kembali' => Kembali::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_transaksi' => 'required',
            'tgl_pengembalian' => 'required',
            'denda' => 'required',
            
        ]);

        $kembali = new Kembali;
        $kembali->id_transaksi = $request->id_transaksi;
        $kembali->tgl_pengembalian = $request->tgl_pengembalian;
        $kembali->denda = $request->denda;
       
        $kembali->save();

        return to_route('kembali.index')->with('success','Data Berhasil Di Tambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kembali = Kembali::find($id);
        $kembali->delete();

        return back()->with('success', 'Data Berhasil Dihaspus');
    }
}
