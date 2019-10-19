<?php  
	include 'config.php';
	$result = mysqli_query($mysqli,"SELECT * FROM barang ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Data Barang</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/costom.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="row">
		<div class="col-sm-12 bg-primary text-center">
			<h2 class="text-light">Kelola Data Barang</h2>
		</div>
	</div>
	<br><br>
	<div class="container">
		<div class="clearfix">
			<span class="float-left font-weight-bold">Data Barang</span>
			<a class="float-right btn btn-primary" href="input.php">Tambah Data</a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr align="center">
					<th>Kode</th>
					<th>Nama</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php  
					while ($data = mysqli_fetch_array($result)) {
						echo "<tr align='center'>";
						echo "<td>".$data['kode']."</td>";
						echo "<td>".$data['nama']."</td>";
						echo "<td>".$data['harga']."</td>";
						echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td>";
						echo "</tr>";}?>
			</tbody>
		</table>
	</div>
</body>

</html>