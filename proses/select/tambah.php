<?php
include('../../koneksi.php');

$kode = "ST" . substr(strtoupper(uniqid()), 4, 9);
$sql = "INSERT INTO ms_select_lomba (kode, id_lomba, id_user, ket) VALUES ('$kode', '$_POST[id_lomba]', '$_POST[id_user]', '$_POST[ket]')";

if ($koneksi->query($sql)) {
    echo "<script>alert('Data berhasil ditambahkan!');window.location.href='../../index.php?page=view_select';</script>";
    exit;
} else {
    echo "<script>alert('Data gagal ditambahkan!');window.location.href='../../index.php?page=tambah_select';</script>";
    exit;
}
