<?php
include "koneksi.php";
$tampil_data=mysqli_query($input, "select * from barang
				inner join kategori on barang.kategori_id=kategori.id_kategori
				inner join satuan on barang.satuan_id=satuan.id_satuan");
?>


<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
	<div class="topnav">
	<a class="active" href="Menu.php">Menu</a>
	<a href="input_pelanggan.php">Pelanggan</a>
	<a href="input_barang.php">Barang</a>
	<a href="input_satuan.php">Satuan</a>
	<a href="input_kategori.php">Kategori</a>
	<a href="input_transaksi.php">Transaksi</a>
	<a href="tampil_pelanggan.php">Tampil Pelanggan</a>
	<a href="tampil_barang.php">Tampil Barang</a>
	<a href="tampil_satuan.php">Tampil Satuan</a>
	<a href="tampil_kategori.php">Tampil Kategori</a>
	<a href="tampil_transaksi.php">Tampil Transaksi</a>
	<a href="laporan_transaksi.php">Laporan Transaksi</a>
	</div>
	<form method="POST" action="">
	<table class="table1">
		<h2>TAMPIL DATA BARANG</h2>
        <tr>
            <td>Id Barang</td>
            <td>Nama barang</td>
            <td>Nama Kategori</td>
            <td>Nama Satuan</td>
        </tr>
        <?php while($data=mysqli_fetch_array($tampil_data)){ ?>
        <tr>
            <td><?php echo $data["id_barang"];?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["nama_kt"];?></td>
            <td><?php echo $data["nama_satuan"];?></td>
        </tr>
        <?php  } ?>

    </table>
</form>
	</div>
</body>
</html>
