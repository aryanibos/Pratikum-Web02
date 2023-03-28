<?Php

include_once('templates/topbar.php');
include_once('templates/sidebar.php');

require_once 'dbkoneksi.php';


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class=" mt-3"> Kelola Produk</h3>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php" style="color: red;">Admin</a></li>
                                <li class="breadcrumb-item active">Kelola Produk</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- form start -->
                <form method="POST" action="proses_produk.php">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <label for="kode">Kode Produk</label>
                                <input type="text" name="kode" class="form-control" id="kode" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nama">Nama Produk</label>
                                <input type="text" name="nama" class="form-control" id="nama" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="stok">Stok</label>
                                <input type="text" name="stok" class="form-control" id="stok" required>
                            </div>
                            <div class="col-md-6">
                                <label for="min_stok">Minimum Stok</label>
                                <input type="text" name="min_stok" class="form-control" id="min_stok" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mt-1">
                                <label for="harga_beli">Harga Beli</label>
                                <input type="text" name="harga_beli" class="form-control" id="harga_beli" required>
                            </div>
                            <div class="col-md-6">
                                <label for="jenis" class="col-4 col-form-label">Jenis Produk</label>
                                <?php
                                $sqljenis = "SELECT * FROM jenis_produk";
                                $rsjenis = $dbh->query($sqljenis);
                                ?>
                                <select id="jenis" name="jenis" class="custom-select">
                                    <?php
                                    foreach ($rsjenis as $rowjenis) {
                                    ?>
                                    <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-5 mb-5 ml-5">
                            <div class="col-6">
                                <div class="btn-group mb-3 btn-submit">
                                    <button class="btn btn-dark" type="submit" name="proses" value="Simpan">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="btn btn-secondary" type="submit" name="proses"
                                        value="Simpan">Simpan</button>
                                </div>
                            </div>
                            <div class="col-6">
                                <a href="tambah_produk.php">
                                    <div class="btn-group mb-3 btn-reset">
                                        <button class="btn btn-dark">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                        <button class="btn btn-secondary" type="reset">
                                            Reset
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
        </div>

    </div>
</div>
<?php

include_once('templates/footer.php');

?>