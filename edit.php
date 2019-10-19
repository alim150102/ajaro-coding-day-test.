<?php
    include 'config.php';
    $id = $_GET['id'];

    $tampil = mysqli_query($mysqli,"SELECT * FROM barang WHERE id = '$id'");


    while($data = mysqli_fetch_assoc($tampil)){
        $a = $data['kode'];
        $b = $data['nama'];
        $c = $data['deskripsi'];
        $d = $data['stok'];
        $e = $data['harga'];
        $f = $data['berat'];
    }
?>






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
            <h1 class="text-light">Kelola Data Barang</h1>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <h5 class="font-weight-bold">Edit Data Barang</h5>
                <br>
                <form method="post">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kode</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control rounded-pill" name="kode" value='<?php echo $a ?>'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control rounded-pill" name='nama' value='<?php echo $b ?>'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" id="deskripsi" name='desk' style="height: 100px;"><?php echo $c ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Stok</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control rounded-pill" name='stok' value='<?php echo $d ?>'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control rounded-pill" name='harga' value='<?php echo $e ?>'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Berat</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control rounded-pill" name='berat' value='<?php echo $f ?>'>
                        </div>
                        <div class="col-sm-1">
                            <p class="mt-2 ml-1 font-italic">gram</p>
                        </div>
                    </div>
                    <div class="col-sm-3 offset-sm-4">
                        <button type="submit" class="btn btn-success" name="edit">Edit</button>
                    </div>
            </form>    
            </div>
        </div>
    </div>
</body>

</html>

<?php
    if (isset($_POST['edit'])) {
        $id = $_GET['id'];
        $a = $_POST['kode'];
        $b = $_POST['nama'];
        $c = $_POST['desk'];
        $d = $_POST['stok'];
        $e = $_POST['harga'];
        $f = $_POST['berat'];

        $query = mysqli_query($mysqli,"UPDATE barang SET kode='$a',nama='$b',deskripsi='$c',stok='$d',harga='$e',berat='$f' WHERE id='$id'");

        if ($query) {
            header("Location:index.php");
        }else {
            echo 'gagal';
        }
    }    
?>