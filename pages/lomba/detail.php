<!-- page title area start -->
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM ms_lomba WHERE id_lomba = '$id'";
$record = $koneksi->query($sql)->fetch_assoc();
?>

<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Detail Lomba</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="?page=dashboard">Home</a></li>
                    <li><a href="?page=view_lomba">Data Lomba</a></li>
                    <li><span>Detail Lomba <?= $record['nama_lomba']; ?></span></li>
                </ul>
            </div>
        </div>
        <?php include('components/profile.php'); ?>

    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <img src="./assets/lomba/<?= $record['gambar']; ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                        </div>
                        <div class="col-md-6">
                            <table class="table table-borderles">
                                <tr>
                                    <td>
                                        <strong>Nama Lomba</strong><br>
                                        <span><?= $record['nama_lomba']; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Tanggal Lomba</strong><br>
                                        <span><?= $record['tgl_lomba']; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Hadiah Utama Lomba</strong><br>
                                        <span><?= $record['hadiah']; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Detail Lomba</strong><br>
                                        <span><?= $record['detail']; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Aturan Lomba</strong><br>
                                        <span><?= $record['aturan']; ?></span>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <br>
                            <h4>Peserta Terdaftar</h4>
                            <br>
                            <table class="table table-striped table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $sql = "SELECT * FROM ms_select_lomba a JOIN ms_users b ON a.id_user=b.id_user WHERE a.id_lomba='$id'";

                                    foreach ($koneksi->query($sql) as $r) { ?>
                                        <tr>
                                            <td>1</td>
                                            <td><?= $r['nama_lengkap']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>