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
                                <h3 class=" mt-3"> Kelola Produk</h3>
                            </div>
                            <div class="col-md-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.html" style="color: red;">Admin</a></li>
                                    <li class="breadcrumb-item active">Kelola Produk</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <label for="exampleInputMekanik">Nama Produk</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="exampleInputMekanik" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3 text-center">
                                    <label for="exampleSelectBorder">No Resi</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" id="exampleInputMekanik" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3 text-center">
                                    <label for="exampleSelectBorder">Kemampuan</label>
                                </div>
                                <div class="col-md-3">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox1"
                                        value="option1">
                                    <label for="customCheckbox1" class="custom-control-label ml-4">Barang Impor</label>
                                </div>
                                <div class="col-md-3">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox2"
                                        value="option1">
                                    <label for="customCheckbox2" class="custom-control-label ml-5">Barang Ekspor</label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3 text-center">
                                    <label for="Deskripsi">Deskripsi Produk</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="5" placeholder="" required></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 text-center">
                                    <label for="MerkRuangan">Upload Foto Produk</label>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="upload-foto">
                                        <img src="dist/img/avatar5.png" alt="" class="">
                                        <input type="file" class="form-control" id="MerkRuangan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 mb-5 ml-5">
                                <div class="col-6">
                                    <a href="produk.php">
                                        <div class="btn-group mb-3 btn-submit">
                                            <button class="btn btn-dark" type="button">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button class="btn btn-secondary">
                                                Submit
                                            </button>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <div class="btn-group mb-3 btn-reset">
                                        <button class="btn btn-dark">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                        <button class="btn btn-secondary" type="reset">
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include_once('templates/footer.php');

?>