<?Php

include_once('templates/topbar.php');
include_once('templates/sidebar.php');

require_once 'dbkoneksi.php';

$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    // edit
    $sql = "SELECT * FROM pelanggan WHERE id = ?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idedit]);
    $row = $st->fetch();
} else {
    // new data
    $row = [];
}

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
                                <input type="text" name="kode" class="form-control" id="kode"
                                    value="<?= $row['kode'] ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nama">Nama Pelanggan</label>
                                <input type="text" name="nama" class="form-control" value="<?= $row['nama'] ?>"
                                    id="nama" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="tmp_lahir">Tempat Lahir</label>
                                <input type="text" name="tmp_lahir" class="form-control"
                                    value="<?= $row['tmp_lahir'] ?>" id="tmp_lahir" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control"
                                    value="<?= $row['tgl_lahir'] ?>" id="tgl_lahir" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mt-1">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>"
                                    id="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="kartu_id" class="col-4 col-form-label">Jenis Kartu</label>
                                <!-- buatkan kodisi jika edit jenis kartu mengambil dari data base-->
                                <div class="col-8">
                                    <select id="kartu_id" name="kartu_id" class="custom-select">
                                        <option value="1" <?php if ($row['kartu_id'] == 1) {
                                                                echo "selected";
                                                            } ?>>GOLD Utama</option>
                                        <option value="2" <?php if ($row['kartu_id'] == 2) {
                                                                echo "selected";
                                                            } ?>>Platinum Jaya</option>
                                        <option value="3" <?php if ($row['kartu_id'] == 3) {
                                                                echo "selected";
                                                            } ?>>Silver</option>
                                        <option value="4" <?php if ($row['kartu_id'] == 4) {
                                                                echo "selected";
                                                            } ?>>Non Member</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="jk">Jenis Kelamin</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input custom-control-input-danger" type="radio"
                                                id="jk" name="jk" value="L"
                                                <?php if ($row['jk'] == 'L') {
                                                                                                                                                            echo "checked";
                                                                                                                                                        } ?>>
                                            <label for="jk" class="custom-control-label">Laki-laki</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio">

                                            <input class="custom-control-input custom-control-input-danger" type="radio"
                                                id="jk" name="jk" value="P"
                                                <?php if ($row['jk'] == 'P') {
                                                                                                                                                            echo "checked";
                                                                                                                                                        } ?>>
                                            <label for="jk" class="custom-control-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 mb-5 ml-5">
                            <div class="col-6">
                                <div class="btn-group mb-3 btn-submit">
                                    <?php
                                    $button = (empty($_idedit)) ? "Simpan" : "Update";
                                    ?>
                                    <button class="btn btn-dark" type="submit" name="proses" value="<?= $button ?>">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="btn btn-secondary" type="submit" name="proses"
                                        value="<?= $button ?>">Simpan</button>
                                    <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
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