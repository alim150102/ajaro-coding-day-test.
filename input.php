<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/costom.css">
</head>

<body>
    <div class="row">
        <div class="col-sm-12 bg-primary text-center">
            <h2 class="text-light">Kelola Data Barang</h2>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <h5 class="font-weight-bold">Input Data Barang</h5>
                <br>
                <form action="" method="post">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kode</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control rounded-pill" name="kode">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control rounded-pill" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-9">
                        <textarea type="text" class="form-control" name="desk" id="deskripsi"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Stok</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control rounded-pill" name="stok" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control rounded-pill" name="harga">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Berat</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control rounded-pill" name="berat">
                    </div>
                    <div class="col-sm-1">
                        <p class="mt-2 ml-1 font-italic">gram</p>
                    </div>
                </div>
                <div class="col-sm-3 offset-sm-4">
                    <button type="submit" class="btn btn-success" name="submit">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
include 'config.php';

    if (isset($_POST['submit'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $desk = $_POST['desk'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $berat = $_POST['berat'];

        $result = mysqli_query($mysqli,"INSERT INTO barang(kode,nama,deskripsi,stok,harga,berat) VALUES('$kode','$nama','$desk','$stok','$harga','$berat')");
        header("Location:index.php");

    }

    

?>