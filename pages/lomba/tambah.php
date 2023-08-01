<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Tambah Lomba</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="?page=dashboard">Home</a></li>
                    <li><a href="?page=view_lomba">Data Lomba</a></li>
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
                    <form action="proses/lomba/tambah.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_lomba">Nama Lomba</label>
                                    <input type="text" name="nama_lomba" id="nama_lomba" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gambar">Gambar Lomba</label>
                                    <input type="file" name="gambar" id="gambar" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tgl_lomba">Tanggal Lomba</label>
                                    <input type="date" name="tgl_lomba" id="tgl_lomba" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hadiah">Hadiah Utama Lomba</label>
                                    <input type="text" name="hadiah" id="hadiah" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="detail">Detail Lomba</label>
                                    <textarea type="text" name="detail" id="detail" rows="4" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="aturan">Aturan Lomba</label>
                                    <textarea type="text" name="aturan" id="aturan" rows="4" class="form-control" required></textarea>
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