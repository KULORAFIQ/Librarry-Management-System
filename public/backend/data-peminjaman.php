<?php
require '../koneksi.php';
$dataArrpeminjaman = [];

$cpeminjaman = $koneksi
while( $dpeminjaman = $cpeminjaman->fetch_assoc() ) {
    $dataArrpeminjaman[] = $dpeminjaman;
}

header('Content-Type: application/json');
echo json_encode($dataArrpeminjaman);