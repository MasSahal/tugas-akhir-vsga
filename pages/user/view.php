<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Data User</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="?page=dashboard">Home</a></li>
                    <li><span>Data User</span></li>
                </ul>
            </div>
        </div>
        <?php include('components/profile.php'); ?>
    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">

    <?php
    $record = $koneksi->query("SELECT * FROM ms_users"); ?>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <a name="" id="" class="btn btn-sm btn-success" href="?page=tambah_user" role="button">Tambah</a>
                        <a name="" id="" class="btn btn-sm btn-secondary" href="?page=view_user" role="button">Refresh</a>
                    </div>
                    <div class="table">
                        <table class="table table-hover table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>Email</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Akses</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($record as $i => $r) { ?>
                                    <tr>
                                        <td><?= $i += 1; ?></td>
                                        <td><span><?= $r['nama_lengkap']; ?></span><br><small>Username : <?= $r['username']; ?></small></td>
                                        <td><?= $r['email']; ?></td>
                                        <td>
                                            <?php if ($r['jk'] == "L") {
                                                echo "Laki-laki";
                                            } else {
                                                echo "Perempuan";
                                            }; ?>
                                        </td>
                                        <td><?= $r['alamat']; ?></td>
                                        <td>
                                            <?php if ($r['role'] == 1) {
                                                echo "Admin";
                                            } else {
                                                echo "User";
                                            }; ?>
                                        </td>
                                        <td>
                                            <a href="?page=edit_user&id=<?= $r['id_user']; ?>" class="badge badge-warning">Edit</a>
                                            <a href="proses/user/delete.php?id=<?= $r['id_user']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin hapus data ini?')">Delete</a>
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