<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('anggota.index')->with([
            'anggota' => Anggota::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required',
            'thn_masuk' => 'required',
        ]);

        $anggota = new Anggota;
        $anggota->nis = $request->nis;
        $anggota->nama = $request->nama;
        $anggota->tmpt_lahir = $request->tmpt_lahir;
        $anggota->tgl_lahir = $request->tgl_lahir;
        $anggota->jenis_kelamin = $request->jenis_kelamin;
        $anggota->kelas = $request->kelas;
        $anggota->thn_masuk = $request->thn_masuk;
        $anggota->save();

        return to_route('anggota.index')->with('success','Data Berhasil Di Tambahkan.');
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
        return view('anggota.edit')->with([
            'anggota' => Anggota::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required',
            'thn_masuk' => 'required',
        ]);

        $anggota = new Anggota;
        $anggota->nis = $request->nis;
        $anggota->nama = $request->nama;
        $anggota->tmpt_lahir = $request->tmpt_lahir;
        $anggota->tgl_lahir = $request->tgl_lahir;
        $anggota->jenis_kelamin = $request->jenis_kelamin;
        $anggota->kelas = $request->kelas;
        $anggota->thn_masuk = $request->thn_masuk;
        $anggota->save();

        return to_route('anggota.index')->with('success','Data Berhasil Di Tambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();

        return back()->with('success', 'Data Berhasil Dihaspus');
    }
}
