<?php
include('../../koneksi.php');


$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

$split = explode(".", $gambar);
$ext = end($split);

if (in_array($ext, ['jpg', 'png', 'jpeg', 'gif'])) {
    $newName = uniqid() . "." . $ext;
    move_uploaded_file($tmp, "../../assets/lomba/" . $newName);

    // sql data
    $sql = "INSERT INTO ms_lomba (nama_lomba, tgl_lomba, hadiah, detail, aturan, gambar) VALUES ('$_POST[nama_lomba]', '$_POST[tgl_lomba]', '$_POST[hadiah]', '$_POST[detail]', '$_POST[aturan]', '$newName')";

    if ($koneksi->query($sql)) {
        echo "<script>alert('Data berhasil ditambahkan!');window.location.href='../../index.php?page=view_lomba';</script>";
        exit;
    } else {
        echo "<script>alert('Data gagal ditambahkan!');window.location.href='../../index.php?page=tambah_lomba';</script>";
        exit;
    }
} else {
    echo "<script>alert('Format gambar tidak didukung!');window.location.href='../../index.php?page=tambah_lomba';</script>";
    exit;
}
