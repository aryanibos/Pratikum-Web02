<?php
require_once '../dbkoneksi.php';
?>

<?php
// cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
$_id = isset($_GET['id']) ? $_GET['id'] : null;
if (!empty($_id)) {
  // ambil data produk berdasarkan id
  $sql = "SELECT * FROM produk WHERE id=?";
  $st = $dbh->prepare($sql);
  $st->execute([$_id]);
  $row = $st->fetch();
} else {
  // jika tidak ada parameter id pada URL, maka dianggap input data baru
  // inisialisasi variabel $row sebagai array kosong
  $row = [];
}
?>

<div class="container m-5">
    <form method="POST" action="proses_produk.php">
        <div class="form-group row mt-3">
            <label for="kode" class="col-4 col-form-label">Kode</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="kode" name="kode" type="text" class="form-control"
                        value="<?php if (isset($row['kode'])) echo $row['kode']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="nama" class="col-4 col-form-label">Nama Produk</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="nama" name="nama" type="text" class="form-control"
                        value="<?php if (isset($row['nama'])) echo $row['nama']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="harga_beli" name="harga_beli"
                        value="<?php if (isset($row['harga_beli'])) echo $row['harga_beli']; ?>" type="text"
                        class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="stok" class="col-4 col-form-label">Stok</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="stok" name="stok" value="<?php if (isset($row['stok'])) echo $row['stok']; ?>"
                        type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="min_stok" name="min_stok"
                        value="<?php if (isset($row['min_stok'])) echo $row['min_stok']; ?>" type="text"
                        class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row mt-3">
            <label for="jenis" class="col-4 col-form-label">Jenis Produk</label>
            <div class="col-8">
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
        <div class="form-group row mt-3">
            <div class="offset-4 col-8">
                <?php
        $button = (empty($_id)) ? "Simpan" : "Update";
        ?>
                <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
                <input type="hidden" name="id" value="<?= $_id ?>" />
            </div>
        </div>
    </form>
</div>