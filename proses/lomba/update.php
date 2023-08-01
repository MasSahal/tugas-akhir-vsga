<?php
include('../../koneksi.php');

$id = $_POST['id'];

if (!empty($_FILES['gambar']['name'])) {

    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    $split = explode(".", $gambar);
    $ext = end($split);

    if (in_array($ext, ['jpg', 'png', 'jpeg', 'gif'])) {
        $newName = uniqid() . "." . $ext;
        move_uploaded_file($tmp, "../../assets/lomba/" . $newName);
    }

    // hapus file lama 
    // ambil data lomba
    $sql = "SELECT * FROM ms_lomba WHERE id_lomba = '$id'";
    $record = $koneksi->query($sql)->fetch_object();

    // cek gambar, apakah ada
    if (file_exists('../../assets/lomba/' . $record->gambar)) {
        unlink('../../assets/lomba/' . $record->gambar);
    }

    $sql = "UPDATE ms_lomba SET nama_lomba = '$_POST[nama_lomba]', tgl_lomba = '$_POST[tgl_lomba]', hadiah = '$_POST[hadiah]', detail = '$_POST[detail]', aturan = '$_POST[aturan]', gambar = '$newName' WHERE id_lomba = '$id'";
} else {
    $sql = "UPDATE ms_lomba SET nama_lomba = '$_POST[nama_lomba]', tgl_lomba = '$_POST[tgl_lomba]', hadiah = '$_POST[hadiah]', detail = '$_POST[detail]', aturan = '$_POST[aturan]' WHERE id_lomba = '$id'";
}

if ($koneksi->query($sql)) {
    echo "<script>alert('Data berhasil diubah!');window.location.href='../../index.php?page=view_lomba';</script>";
    exit;
} else {
    echo "<script>alert('Data gagal diubah!');window.location.href='../../index.php?page=edit_lomba&id=$id';</script>";
    exit;
}
