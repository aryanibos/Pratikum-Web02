<?php
require_once '../dbkoneksi.php';
?>
<?php
$sql = "SELECT DISTINCT kartu.*, pelanggan.kartu_id as is_pelanggan FROM kartu LEFT JOIN pelanggan ON kartu.id = pelanggan.kartu_id";
$rs = $dbh->query($sql);
?>


<div class="container m-5">
    <a class="btn btn-success" href="form_kartu.php" role="button">Create Kartu</a>
    <table class="table mt-3" width="100%" border="1" cellspacing="2" cellpadding="2">
        <thead>
            <tr style="text-align: center;">
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Diskon</th>
                <th>Iuran</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor  = 1;
            foreach ($rs as $row) {
            ?>
            <tr style="text-align: center;">
                <td><?= $nomor ?></td>
                <td><?= $row['kode'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['diskon'] ?></td>
                <td><?= "Rp." . number_format($row['iuran'], 2, ',', '.') ?></td>
                <td>
                    <a class="btn btn-primary" href="view_kartu.php?id=<?= $row['id'] ?>">View</a>
                    <a class="btn btn-primary" href="form_kartu.php?id=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-primary <?= $row['is_pelanggan'] ? 'disabled' : '' ?>"
                        href="delete_kartu.php?iddel=<?= $row['id'] ?>"
                        onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                </td>
            </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>