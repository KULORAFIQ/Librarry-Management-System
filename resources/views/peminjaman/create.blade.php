 @extends('layout.dasar')
 @section('konten')
     <!-- START FORM -->
 <form action="{{ route('peminjaman.store') }}" method="POST">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="kd_peminjaman" class="col-sm-2 col-form-label">Kode Peminjaman</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="kd_peminjaman" id="kd_peminjaman">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="judul" id="judul">
            </div>
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">Nim</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="nim" id="nim">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tgl_peminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl_pinjam" id="tgl_peminjaman">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tgl_pengembalian" class="col-sm-2 col-form-label">Tanggal Pengembalian</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl_kembali" id="tgl_pengembalian">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->
 @endsection
 