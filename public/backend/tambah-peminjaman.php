<?php
require '../koneksi.php';

$pIsEdit = $koneksi->real_escape_string( $_POST['is-edit'] ?? '' );
$pNamaanggota = $koneksi->real_escape_string( $_POST['nama_anggota'] ?? '' );
$pJudulbuku = $koneksi->real_escape_string( $_POST['judul_buku'] ?? '' );
$pTanggalpeminjaman = $koneksi->real_escape_string( $_POST['tgl_peminjaman'] ?? '' );
$pTanggalpengembalian = $koneksi->real_escape_string( $_POST['tgl_pengembalian'] ?? '' );


$tambahRaport = !empty($pIsEdit)
    ? $koneksi->query("UPDATE peminjaman SET nama_anggota = '{$pNamaanggota}', judul_buku = '{$pJudulbuku}', tgl_peminjaman = '{$pTanggalpeminjaman}', tgl_pengembalian = '{$pTanggalpengembalian}', WHERE id = '{$pIsEdit}'")
    : $koneksi->query("INSERT INTO raport VALUES (NULL, '{$pNamaanggota}', '{$pJudulbuku}', '{$pTanggalpeminjaman}', '{$pTanggalpengembalian}')");

header('Content-Type: application/json');
echo json_encode(['success' => $tambahpeminjaman ? 1 : 0]);