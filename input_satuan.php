<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_satuan="insert into satuan(id_satuan,nama_satuan)values
	('".$_POST['id_satuan']."',
	 '".$_POST['nama_satuan']."')";
	 $proses_data=mysqli_query($input,$query_satuan);
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
	<a class="active" href="menu.php">menu</a>
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
			<td>Id Satuan</td>
			<td><input name="id_satuan" type="number"></td>
		</tr>
	<tr>
			<td>Nama</td>
			<td><input name="nama_satuan" type="text"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
	</form>
	