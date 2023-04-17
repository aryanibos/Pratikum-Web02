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
                            <h3 class=" mt-3"> Kelola Pelanggan</h3>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php" style="color: red;">Admin</a></li>
                                <li class="breadcrumb-item active">Kelola Pelanggan</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- form start -->
                <form method="POST" action="proses_pelanggan.php">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <label for="kode">Kode Pelanggan</label>
                                <input type="text" name="kode" class="form-control" id="kode" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nama">Nama Pelanggan</label>
                                <input type="text" name="nama" class="form-control" id="nama" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="tmp_lahir">Tempat Lahir</label>
                                <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mt-1">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="kartu_id" class="col-4 col-form-label">Jenis Kartu</label>
                                <?php
                                $sqljenis = "SELECT * FROM kartu";
                                $rsjenis = $dbh->query($sqljenis);
                                ?>
                                <select id="kartu_id" name="kartu_id" class="custom-select">
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
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="jk">Jenis Kelamin</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input custom-control-input-danger" type="radio" id="jk" name="jk" value="L">
                                            <label for="jk" class="custom-control-label">Laki-laki</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input custom-control-input-danger" type="radio" id="jk" name="jk" value="P">
                                            <label for="jk" class="custom-control-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 mb-5 ml-5">
                            <div class="col-6">
                                <div class="btn-group mb-3 btn-submit">
                                    <button class="btn btn-dark" type="submit" name="proses" value="Simpan">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="btn btn-secondary" type="submit" name="proses" value="Simpan">Simpan</button>
                                </div>
                            </div>
                            <div class="col-6">
                                <a href="tambah_pelanggan.php">
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