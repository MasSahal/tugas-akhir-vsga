<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Tambah Peserta Lomba</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="?page=dashboard">Home</a></li>
                    <li><a href="?page=view_lomba">Data Peserta Lomba</a></li>
                    <li><span>Tambah</span></li>
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
                    <form action="proses/select/tambah.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_user">Peserta Dipilih</label>
                                    <select name="id_user" id="id_user" class="form-control">
                                        <?php
                                        $a = $koneksi->query("SELECT * FROM ms_users");
                                        foreach ($a as $r) {; ?>
                                            <option value="<?= $r['id_user']; ?>"><?= $r['nama_lengkap']; ?></option>
                                        <?php }; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="id_lomba">Lomba Dipilih</label>
                                    <select name="id_lomba" id="id_lomba" class="form-control">
                                        <?php
                                        $a = $koneksi->query("SELECT * FROM ms_lomba");
                                        foreach ($a as $r) {; ?>
                                            <option value="<?= $r['id_lomba']; ?>"><?= $r['nama_lomba']; ?></option>
                                        <?php }; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="ket">Keterangan</label>
                                    <textarea class="form-control" name="ket" id="ket" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <button type="submit" class="btn btn-success">Tambahkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>