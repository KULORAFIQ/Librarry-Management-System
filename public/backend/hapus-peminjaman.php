<?php
require '../koneksi.php';

$idpeminjaman = $koneksi->real_escape_string( $_GET['id'] ?? '' );
$delete = $koneksi->query("DELETE FROM raport WHERE id = '{$idpeminjaman}'");

header('Content-Type: application/json');
echo json_encode(['success' => $delete ? 1 : 0]);