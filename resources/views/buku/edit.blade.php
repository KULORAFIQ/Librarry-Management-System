@extends('layout.dasar')
 @section('konten')
     <!-- START FORM -->
 <form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id_petugas" class="col-sm-2 col-form-label">id petugas</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="id_petugas" value="{{ $buku->id_petugas }}" id="id_petugas">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="judul" class="col-sm-2 col-form-label">judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}" id="judul">
            </div>
        <div class="mb-3 row">
            <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="pengarang" value="{{ $buku->pengarang }}" id="pengarang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="penerbit" value="{{ $buku->penerbit }}" id="penerbit">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="thn_terbit" class="col-sm-2 col-form-label">tahun terbit</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="thn_terbit" value="{{ $buku->thn_terbit }}" id="thn_terbit">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jml_buku" class="col-sm-2 col-form-label">jumlah buku</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jml_buku" value="{{ $buku->jml_buku }}" id="jml_buku">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="lokasi" class="col-sm-2 col-form-label">lokasi</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="lokasi" value="{{ $buku->lokasi }}" id="lokasi">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tgl_input" class="col-sm-2 col-form-label">tanggal input</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl_input" value="{{ $buku->tgl_input }}" id="tgl_input">
            </div>
        </div>
      <div class="mb-3 row">
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->
 @endsection
 