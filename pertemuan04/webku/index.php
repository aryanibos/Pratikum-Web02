<?Php 

include_once('templates/topbar.php');
include_once('templates/sidebar.php');



?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class=" mt-3"> Daftar Transaksi</h3>
                                <a href="#">
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
                                    <li class="breadcrumb-item active">Transaksi</li>
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
                                    <th>Tanggal</th>
                                    <th>Pelanggan</th>
                                    <th>Nopol</th>
                                    <th>Kategori</th>
                                    <th>Keluhan</th>
                                    <th>Layanan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>01 Jan 2023
                                    </td>
                                    <td>Arya Isnaidi</td>
                                    <td>B23456</td>
                                    <td>Tesla</td>
                                    <td>Ganti Oli Terbaru</td>
                                    <td>Service Ringan</td>
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
                                <tr>
                                    <td>02</td>
                                    <td>09 Feb 2023
                                    </td>
                                    <td>MASRAYANI SIAGIAN</td>
                                    <td>B342251</td>
                                    <td>Mini Buss</td>
                                    <td>Ganti Oli Terbaru</td>
                                    <td>Service Ringan</td>
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
                                <tr>
                                    <td>03</td>
                                    <td>26 Jan 2023
                                    </td>
                                    <td>MOCHAMMAD FIKRI</td>
                                    <td>B567728</td>
                                    <td>Lamborghini</td>
                                    <td>Ganti Ban Terbaru</td>
                                    <td>Service Ringan</td>
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

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
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
                                    <li class="breadcrumb-item active">Daftar Produk</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>No Resi</th>
                                    <th>Jenis Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Oli Power Steering
                                    </td>
                                    <td>B1-10218817611243</td>
                                    <td>Barang Impor</td>
                                    <td> sangat membantu agar putara...</td>
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
                                <tr>
                                    <td>02</td>
                                    <td>Oli transmisi
                                    </td>
                                    <td>B1-10218817611243</td>
                                    <td>Barang Expor</td>
                                    <td>Untuk melumasi komponen-kom...</td>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container-fluid -->


<?php

include_once('templates/footer.php');

?>