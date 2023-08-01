<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Data Peserta Lomba</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="?page=dashboard">Home</a></li>
                    <li><span>Data Peserta Lomba</span></li>
                </ul>
            </div>
        </div>
        <?php include('components/profile.php'); ?>

    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">

    <?php
    $record = $koneksi->query("SELECT * FROM ms_select_lomba a JOIN ms_lomba b ON a.id_lomba=b.id_lomba JOIN ms_users c ON a.id_user=c.id_user"); ?>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="header-title">Data Peserta Lomba</h4>
                    <hr> -->
                    <div class="mb-3">
                        <a name="" id="" class="btn btn-sm btn-success" href="?page=tambah_select" role="button">Tambah</a>
                        <a name="" id="" class="btn btn-sm btn-secondary" href="?page=view_select" role="button">Refresh</a>
                    </div>
                    <div class="table">
                        <table class="table table-hover table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Peserta</th>
                                    <th>Lomba Di Ikuti</th>
                                    <th>Tanggal Registrasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($record as $i => $r) { ?>
                                    <tr>
                                        <td><?= $i += 1; ?></td>
                                        <td><b class="text-secondary"><?= $r['kode']; ?></b></td>
                                        <td><?= $r['nama_lengkap']; ?></td>
                                        <td><?= $r['nama_lomba']; ?></td>
                                        <td><?= $r['created_at']; ?></td>
                                        <td>
                                            <a href="?page=detail_select&id=<?= $r['id']; ?>" class="badge badge-info">Detail</a>
                                            <a href="?page=edit_select&id=<?= $r['id']; ?>" class="badge badge-warning">Edit</a>
                                            <a href="proses/select/delete.php?id=<?= $r['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin hapus data ini?')">Delete</a>
                                        </td>
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