<?php
require_once '../dbkoneksi.php';

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

<div class="container m-5">
    <form method="POST" action="proses_pelanggan.php">
        <div class="form-group row mt-3">
            <label for="kode" class="col-4 col-form-label">Kode</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="kode" name="kode" type="text" class="form-control" value="<?= $row['kode'] ?>">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="nama" class="col-4 col-form-label">Nama Custumer</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama'] ?>">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L"
                            <?php if ($row['jk'] == 'L') echo 'checked' ?>>
                        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="P"
                            <?php if ($row['jk'] == 'P') echo 'checked' ?>>
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="tmp_lahir" name="tmp_lahir" value="<?= $row['tmp_lahir'] ?>" type="text"
                        class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="tgl_lahir" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>" type="date"
                        class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="email" name="email" value="<?= $row['email'] ?>" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="jenis" class="col-4 col-form-label">Jenis Kartu</label>
            <div class="col-8">
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
                    <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

                </select>
            </div>
        </div>
        <div class="form-group row mt-3">
            <div class="offset-4 col-8">
                <?php
                $button = (empty($_idedit)) ? "Simpan" : "Update";
                ?>
                <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
                <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
            </div>
        </div>
    </form>
</div>