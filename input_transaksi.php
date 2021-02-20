<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_transaksi="insert into transaksi(id_transaksi, nama_transaksi, tgl_transaksi, harga, qty, id_barang, diskon, id_pelanggan)values
	('".$_POST['id_transaksi']."',
	 '".$_POST['nama_transaksi']."',
	 '".$_POST['tgl_transaksi']."',
	 '".$_POST['harga']."',
	 '".$_POST['qty']."',
	 '".$_POST['id_barang']."',
	 '".$_POST['diskon']."',
	 '".$_POST['id_pelanggan']."')";
	 $proses_data=mysqli_query($input,$query_transaksi);
if($proses_data){
	echo 'Input Data Berhasil ';
} else {
	echo header ("location: menu.php");
}
}


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
		<tr>
			<td>Id transaksi</td>
			<td><input name="id_transaksi" type="number"></td>
		</tr>
	<tr>
			<td>Nama transaksi</td>
			<td><input name="nama_transaksi" type="text"></td>
		</tr>
		<tr>
			<td>Tanggal Transaksi</td>
			<td><input name="tgl_transaksi" type="date"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input name="harga" type="text"></td>
		</tr>
		<tr>
			<td>Qty</td>
			<td><input name="qty" type="text"></td>
		</tr>
<tr>
			<td>Id Barang</td>
			<td><input name="id_barang" type="text"></td>
		</tr>
		<tr>
			<td>Diskon</td>
			<td><input name="diskon" type="text"></td>
		</tr>
		<tr>
			<td>Pelanggan</td>
			<td><input name="id_pelanggan" type="text"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
	</form>
	
