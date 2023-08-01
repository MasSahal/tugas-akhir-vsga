<?php
include('../../koneksi.php');

$sql = "INSERT INTO ms_users (nama_lengkap, username, password, role, alamat, jk, email) VALUES ('$_POST[nama]', '$_POST[username]', '$_POST[password]', '$_POST[role]', '$_POST[alamat]', '$_POST[jk]', '$_POST[email]')";

if ($koneksi->query($sql)) {
    echo "<script>alert('Data berhasil ditambahkan!');window.location.href='../../index.php?page=view_user';</script>";
    exit;
} else {
    echo "<script>alert('Data gagal ditambahkan!');window.location.href='../../index.php?page=tambah_user';</script>";
    exit;
};
