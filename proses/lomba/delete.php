<?php

include('../../koneksi.php');
$id = $_GET['id'];

// ambil data lomba
$sql = "SELECT * FROM ms_lomba WHERE id_lomba = '$id'";
$record = $koneksi->query($sql)->fetch_object();

// cek gambar, apakah ada
if (file_exists('../../assets/lomba/' . $record->gambar)) {
    unlink('../../assets/lomba/' . $record->gambar);
}

$sql = "DELETE FROM ms_lomba WHERE id_lomba = '$id'";
if ($koneksi->query($sql)) {
    echo "<script>alert('Data berhasil dihapus!');window.location.href='../../index.php?page=view_lomba';</script>";
    exit;
} else {
    echo "<script>alert('Data gagal dihapus!');window.location.href='../../index.php?page=view_lomba';</script>";
    exit;
}
