@extends('layout.dasar')
@section('konten')
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href="{{ route('buku.create') }}" class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-4">id petugas</th>
                            <th class="col-md-3">judul</th>
                            <th class="col-md-3">pengarang</th>
                            <th class="col-md-4">penerbit</th>
                            <th class="col-md-4">tahun terbit</th>
                            <th class="col-md-4">jumlah buku</th>
                            <th class="col-md-4">lokasi</th>
                            <th class="col-md-2">tanggal input</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $no => $hasil)
                        <tr>
                            <th>{{ $no+1 }}</th>
                            <td>{{ $hasil->id_petugas }}</td>
                            <td>{{ $hasil->judul }}</td>
                            <td>{{ $hasil->pengarang }}</td>
                            <td>{{ $hasil->penerbit }}</td>
                            <td>{{ $hasil->thn_terbit }}</td>
                            <td>{{ $hasil->jml_buku }}</td>
                            <td>{{ $hasil->lokasi }}</td>
                            <td>{{ $hasil->tgl_input }}</td>
                            <td>
                                <form action="{{ route('buku.destroy', $hasil->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('buku.edit', $hasil->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
@endsection