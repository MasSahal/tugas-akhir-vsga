<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Data Lomba</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="?page=dashboard">Home</a></li>
                    <li><span>Data Lomba</span></li>
                </ul>
            </div>
        </div>
        <?php include('components/profile.php'); ?>

    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">

    <?php
    $record = $koneksi->query("SELECT * FROM ms_lomba"); ?>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <a name="" id="" class="btn btn-sm btn-success" href="?page=tambah_lomba" role="button">Tambah</a>
                        <a name="" id="" class="btn btn-sm btn-secondary" href="?page=view_lomba" role="button">Refresh</a>
                        <a name="" id="" class="btn btn-sm btn-info" href="pages/lomba/export.php" target="_blank" role="button">Export PDF</a>
                    </div>
                    <div class="table">
                        <table class="table table-hover table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lomba</th>
                                    <th>Detail</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($record as $i => $r) { ?>
                                    <tr>
                                        <td><?= $i += 1; ?></td>
                                        <td><?= $r['nama_lomba']; ?></td>
                                        <td><?= strlen($r['detail']) <= 20 ? $r['detail'] : substr($r['detail'], 0, 20) . "..." ?></td>
                                        <td>
                                            <a href="?page=detail_lomba&id=<?= $r['id_lomba']; ?>" class="badge badge-info">Detail</a>
                                            <a href="?page=edit_lomba&id=<?= $r['id_lomba']; ?>" class="badge badge-warning">Edit</a>
                                            <a href="proses/lomba/delete.php?id=<?= $r['id_lomba']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin hapus data ini?')">Delete</a>
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