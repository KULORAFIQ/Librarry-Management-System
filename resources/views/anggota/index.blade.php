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
                  <a href="{{ route('anggota.create') }}" class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-4">Nis</th>
                            <th class="col-md-3">Nama</th>
                            <th class="col-md-3">Tempat Lahir</th>
                            <th class="col-md-4">TanggalLahir</th>
                            <th class="col-md-4">Jenis Kelamin</th>
                            <th class="col-md-4">Kelas</th>
                            <th class="col-md-4">Tahun Masuk</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anggota as $no => $hasil)
                        <tr>
                            <th>{{ $no+1 }}</th>
                            <td>{{ $hasil->nis }}</td>
                            <td>{{ $hasil->nama }}</td>
                            <td>{{ $hasil->tmpt_lahir }}</td>
                            <td>{{ $hasil->tgl_lahir }}</td>
                            <td>{{ $hasil->jenis_kelamin }}</td>
                            <td>{{ $hasil->kelas }}</td>
                            <td>{{ $hasil->thn_masuk }}</td>
                            <td>
                                <form action="{{ route('anggota.destroy', $hasil->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('anggota.edit', $hasil->id) }}" class="btn btn-warning btn-sm">Edit</a>
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