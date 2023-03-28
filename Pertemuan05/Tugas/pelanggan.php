<?Php

include_once('templates/topbar.php');
include_once('templates/sidebar.php');

require_once 'dbkoneksi.php';

$sql = "SELECT * FROM pelanggan";
$rs = $dbh->query($sql);


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class=" mt-3"> Daftar Produk</h3>
                            <a href="kelola-produk.php">
                                <div class="btn-group mb-3">
                                    <button class="btn btn-dark">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <button class="btn btn-secondary">
                                        Tambah Data
                                    </button>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php" style="color: red;">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Daftar Pelanggan</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama Pelanggan</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Jenis Kartu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor  = 1;
                            foreach ($rs as $row) {
                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $row['kode'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= ($row['jk'] == "L") ? "Laki-Laki" : "Perempuan"; ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td>
                                        <?php
                                        if ($row['kartu_id'] == "1") {
                                            echo "Gold Utama";
                                        } elseif ($row['kartu_id'] == "2") {
                                            echo "Platinum Jaya";
                                        } elseif ($row['kartu_id'] == "3") {
                                            echo "Silver";
                                        } else {
                                            echo "Non Member";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="" class="">
                                                    <i class="fas fa-info text-primary"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="" class="">
                                                    <i class="fas fa-pencil-alt text-success"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="" class="">
                                                    <i class="fas fa-trash-alt text-danger"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

include_once('templates/footer.php');

?>