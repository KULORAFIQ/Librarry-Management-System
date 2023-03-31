@extends('layout.dasar')
 @section('konten')
     <!-- START FORM -->
 <form action="{{ route('kembali.store') }}" method="POST">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id_transaksi" class="col-sm-2 col-form-label">id transaksi</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="id_transaksi" value="{{ $kembali->id_transaksi }}" id="id_transaksi">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tgl_pengembalian" class="col-sm-2 col-form-label">tgl_pengembalian</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl_pengembalian" value="{{ $kembali->tgl_pengembalian }}" id="tgl_pengembalian">
            </div>
        <div class="mb-3 row">
            <label for="denda" class="col-sm-2 col-form-label">Denda</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="denda" value="{{ $kembali->denda }}"  id="denda">
            </div>
        </div>
        
     <div class="mb-3 row">
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->
 @endsection
 