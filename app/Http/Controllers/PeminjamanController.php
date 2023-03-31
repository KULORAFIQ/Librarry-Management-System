<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('peminjaman.index')->with([
            'peminjaman' => Peminjaman::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peminjaman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kd_peminjaman' => 'required',
            'judul' => 'required',
            'nim' => 'required',
            'nama' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required'
        ]);

        $peminjaman = new Peminjaman;
        $peminjaman->kd_peminjaman = $request->kd_peminjaman;
        $peminjaman->judul = $request->judul;
        $peminjaman->nim = $request->nim;
        $peminjaman->nama = $request->nama;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->save();

        return to_route('peminjaman.index')->with('success','Data Berhasil Di Tambahkan.');
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
        return view('peminjaman.edit')->with([
            'peminjaman' => Peminjaman::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kd_peminjaman' => 'required',
            'judul' => 'required',
            'nim' => 'required',
            'nama' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required'
        ]);

        $peminjaman = Peminjaman::find($id);
        $peminjaman->kd_peminjaman = $request->kd_peminjaman;
        $peminjaman->judul = $request->judul;
        $peminjaman->nim = $request->nim;
        $peminjaman->nama = $request->nama;
        $peminjaman->tgl_pinjam = $request->tgl_pinjam;
        $peminjaman->tgl_kembali = $request->tgl_kembali;
        $peminjaman->save();

        return to_route('peminjaman.index')->with('success','Data Berhasil Di Tambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();

        return back()->with('success', 'Data Berhasil Dihaspus');
    }
}
