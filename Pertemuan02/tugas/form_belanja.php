<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="mt-5 mb-5">
                    <h2>Belanja Online</h2>
                </div>

                <form method="post">
                    <div class="form-group row">
                        <label for="cust" class="col-4 col-form-label">Costumer</label>
                        <div class="col-8">
                            <input id="cust" name="cust" placeholder="Masukkan Nama Customer" type="text"
                                class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"
                                    required="required">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input"
                                    value="Kulkas" required="required">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input"
                                    value="Mesin Cuci" required="required">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jmh" placeholder="Masukkan Jumlah" type="number"
                                class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 ">
                <ul class="list-group mt-5">
                    <li class="list-group-item active">Daftar Harga</li>
                    <li class="list-group-item ">TV: 4.200.000</li>
                    <li class="list-group-item ">Kulkas: 3.100.000</li>
                    <li class="list-group-item ">Mesin Cuci: 3.800.000</li>
                    <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
                </ul>
            </div>

        </div>
        <hr>
        <?php 
            
            if (isset($_POST['submit'])) {
                $custumer = $_POST['cust'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jmh'];
    
                if ($produk == "TV") {
                    $total = $jumlah * 4200000;
                    echo "Nama Custumer : $custumer <br>";
                    echo "Produk Pilihan : $produk <br>";
                    echo "Jumlah Beli : $jumlah <br>";
                    echo "Total belanja : Rp.". number_format($total) . ",-";
                }elseif ($produk == "Kulkas") {
                    $total = $jumlah * 3100000;
                    echo "Nama Custumer : $custumer <br>";
                    echo "Produk Pilihan : $produk <br>";
                    echo "Jumlah Beli : $jumlah <br>";
                    echo "Total belanja : Rp.". number_format($total) . ",-";
                }elseif ($produk == "Mesin Cuci") {
                    $total = $jumlah * 3800000;
                    echo "Nama Custumer : $custumer <br>";
                    echo "Produk Pilihan : $produk <br>";
                    echo "Jumlah Beli : $jumlah <br>";
                    echo "Total belanja : Rp.". number_format($total) . ",-";
                }else{
                    echo "produk tidak ada";
                }
            }
            
            

            ?>
    </div>

</body>

</html>