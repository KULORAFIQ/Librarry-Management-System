<?php
require '../koneksi.php';

$idpeminjaman = $koneksi->real_escape_string( $_GET['id'] ?? '' );
$cpeminjaman = $koneksi->query("SELECT * FROM raport WHERE id = '{$idRaport}'");
$dpeminjaman = $cpeminjaman->fetch_object();

header('Content-Type: application/json');
echo json_encode($dpeminjaman);