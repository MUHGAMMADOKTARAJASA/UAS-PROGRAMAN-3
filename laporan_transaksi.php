<?php
include "koneksi.php";
$tampil_data=mysqli_query($input, "select pelanggan.nama_pelanggan, pelanggan.status, kategori.nama_kt, barang.nama, transaksi.qty, transaksi.harga, transaksi.Diskon, (qty*harga)-(qty*harga*Diskon/100) as total from transaksi
									inner join pelanggan on transaksi.id_pelanggan=transaksi.id_pelanggan
									inner join barang on transaksi.id_barang=barang.id_barang
									inner join kategori on barang.kategori_id=kategori.id_kategori");
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
		<h2>LAPORAN TRANSAKSI</h2>
        <tr>
            <td>Pelanggan</td>
            <td>Status</td>
			<td>Kategori</td>
            <td>Barang</td>
			<td>Qty</td>
			<td>harga</td>
			<td>Diskon</td>
            <td>total</td>
        </tr>
        <?php while($data=mysqli_fetch_array($tampil_data)){ ?>
        <tr>
			<td><?php echo $data["nama_pelanggan"];?></td>
			<td><?php echo $data["status"];?></td>
            <td><?php echo $data["nama_kt"];?></td>
            <td><?php echo $data["nama"];?></td>
			<td><?php echo $data["qty"];?></td>
			<td><?php echo $data["harga"];?></td>
			<td><?php echo $data["Diskon"];?></td>
			<td><?php echo $data["total"];?></td>
        </tr>
        <?php } ?>

    </table>
</form>
	</div>
</body>
</html>