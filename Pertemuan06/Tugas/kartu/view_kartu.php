<?php
require_once '../dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
// select * from kartu where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM kartu a
//INNER JOIN jenis_kartu b ON a.jenis_kartu_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM kartu WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA kartu ' . $row['nama'];
?>

<div class="container m-5">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td><?=$row['id']?></td>
            </tr>
            <tr>
                <td>Kode</td>
                <td><?=$row['kode']?></td>
            </tr>
            <tr>
                <td>Nama Kartu</td>
                <td><?=$row['nama']?></td>
            </tr>
            <tr>
                <td>Diskon</td>
                <td><?=$row['diskon']?></td>
            </tr>
            <tr>
                <td>Iuran</td>
                <td><?=$row['iuran']?></td>
            </tr>
        </tbody>
    </table>
</div>