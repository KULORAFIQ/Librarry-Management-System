@extends('layout.dasar')
 @section('konten')
     <!-- START FORM -->
 <form action="{{ route('anggota.store') }}" method="POST">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="nis" class="col-sm-2 col-form-label">NIS</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="nis" id="nis">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
        <div class="mb-3 row">
            <label for="tmpt_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir"tgl_lahir
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kelas" class="col-sm-2 col-form-label">kelas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kelas" id="kelas">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="thn_masuk" class="col-sm-2 col-form-label">Tahun masuk</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="thn_masuk" id="thn_masuk">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->
 @endsection
 