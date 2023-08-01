<?php

include('../../koneksi.php');
$id = $_GET['id'];

$sql = "DELETE FROM ms_users WHERE id_user = '$id'";
if ($koneksi->query($sql)) {
    echo "<script>alert('Data berhasil dihapus!');window.location.href='../../index.php?page=view_user';</script>";
    exit;
} else {
    echo "<script>alert('Data gagal dihapus!');window.location.href='../../index.php?page=view_user';</script>";
    exit;
}
