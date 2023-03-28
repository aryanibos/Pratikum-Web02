<?php
include_once('templates/topbar.php');
include_once('templates/sidebar.php');
require_once 'dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PRODUK ' . $row['nama'];
?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Produk Detail</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Kode Produk</span>
                                <span class="info-box-number text-center text-muted mb-0"><?= $row['kode'] ?> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Nama Produk</span>
                                <span class="info-box-number text-center text-muted mb-0">
                                    <?= $row['nama'] ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="info-box bg-light">
                            <div class="info-box-content">
                                <span class="info-box-text text-center text-muted">Stok Tersisa</span>
                                <span class="info-box-number text-center text-muted mb-0"><?= $row['stok'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <h3>Data Lainnya</h3>
                        <div class="post mt-5">
                            <div class="user">
                                <h5 class="username">
                                    <a href="#">Harga Pembelian</a>
                                </h5>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Rp.<?= number_format($row['harga_beli'], 2, ',', '.') ?>
                            </p>
                        </div>

                        <div class="post clearfix">
                            <div class="user">
                                <h5 class="username">
                                    <a href="#">Harga Penjualan</a>
                                </h5>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Rp.<?= number_format($row['harga_jual'], 2, ',', '.') ?>
                            </p>
                        </div>
                        <div class="post clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                <h3 class="text-primary"><i class="fas fa-paint-brush"></i> AdminLTE v3</h3>
                <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                    stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure
                    terr.</p>
                <br>
                <div class="text-muted">
                    <p class="text-sm">Client Company
                        <b class="d-block">Deveint Inc</b>
                    </p>
                    <p class="text-sm">Project Leader
                        <b class="d-block">Tony Chicken</b>
                    </p>
                </div>

                <h5 class="mt-5 text-muted">Project files</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                            Functional-requirements.docx</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i>
                            Email-from-flatbal.mln</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                    </li>
                    <li>
                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>
                            Contract-10_12_2014.docx</a>
                    </li>
                </ul>
                <div class="text-center mt-5 mb-3">
                    <a href="#" class="btn btn-sm btn-primary">Add files</a>
                    <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>

<?php

include_once('templates/footer.php');

?>