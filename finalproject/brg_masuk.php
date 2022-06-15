<?php 
// memanggil file functions
require 'functions.php';
$brgmasuk = query("SELECT * FROM brg_masuk");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Barang Masuk</title>
	<link rel="stylesheet" href="assets/css/search.css">
	<link rel="stylesheet" href="assets/css/sidebar.css">
	<link rel="stylesheet" href="assets/css/table.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<div class="btn">
		<span class="fas fa-bars"></span>
	</div>
	<nav class="sidebar">
		<div class="text">Side Menu</div>
		<ul>
			<li><a href="stockbarang.php">Dashboard</a></li>
			<li>
				<a class="tran-btn">Transaksi
					<span class="fas fa-caret-down first"></span></a>
				<ul class="tran-show">
					<li><a href="brg_masuk.php">Barang Masuk</a></li>
					<li><a href="brg_keluar.php">Barang Keluar</a></li>
				</ul>
			</li>
			<li><a href="supplier.php">Suppliers</a></li>
			<li><a href="customer.php">Customer</a></li>
			<li><a href="kategori.php">Kategori</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>

	<script>
	$('.btn').click(function(){
		$(this).toggleClass("click");
		$('.sidebar').toggleClass("show");
	});
		$('.tran-btn').click(function() {
			$('nav ul .tran-show').toggleClass("show");
			$('nav ul .first').toggleClass("rotate");
		});
		$('nav ul li').click(function(){
			$(this).addClass("active").siblings().removeClass("active");
		})
	</script>

	<h1>Daftar Barang Masuk</h1>
	<br><br>

	<form action="" method="post"class="box">

		<input type="text" name="key" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off" id="key">
		<input type="submit" name="cari" id="cari" value="Search">

	</form>

	<br><br>
	<a href="masuk.php">Tambah</a>

	<br><br>

	<table class="table1">
	<tr>
		<th>No.</th>
		<th>ID Transaksi</th>
		<th>Tanggal</th>
		<th>Nama Barang</th>
		<th>Kategori</th>
		<th>Supplier</th>
		<th>Jumlah</th>
		<th>Satuan</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach ($brgmasuk as $row) : ?>
	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row["id_transaksi"] ?></td>
		<td><?php echo $row["tanggal"] ?></td>
		<td><?php echo $row["nama_barang"] ?></td>
		<td><?php echo $row["kategori"] ?></td>
		<td><?php echo $row["supplier"] ?></td>
		<td><?php echo $row["jumlah"] ?></td>
		<td><?php echo $row["satuan"] ?></td>
		
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>
	</table>
	
</body>
</html>
