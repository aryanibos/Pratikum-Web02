<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="mt-5 mb-5">
            <h2>Form Nilai Siswa</h2>
        </div>
        <form action="proses_nilai.php" method="get">
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="text1" name="nama" placeholder="Masukkan Nama" type="text" class="form-control"
                        required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata kuliah</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select" required="required">
                        <option value="Pemrograman WEB">Pemrograman Web</option>
                        <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                        <option value="Basis Data">Basis Data</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-8">
                    <input id="uts" name="uts" placeholder="Masukkan Nilai UTS" type="number" class="form-control"
                        required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-8">
                    <input id="uas" name="uas" placeholder="Masukkan Nilai UAS" type="number" class="form-control"
                        required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="pratikum" class="col-4 col-form-label">Nilai Tugas/Pratikum</label>
                <div class="col-8">
                    <input id="pratikum" name="pratikum" placeholder="Masukkan Nilai TUgas/Pratikum" type="number"
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
</body>

</html>