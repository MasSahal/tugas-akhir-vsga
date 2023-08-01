<?php
session_start();
$koneksi = new mysqli('localhost', 'root', '', 'db_simbata');

if ($koneksi->connect_error) {
    die("Koneksi Gagal : " . $koneksi->connect_error);
}
