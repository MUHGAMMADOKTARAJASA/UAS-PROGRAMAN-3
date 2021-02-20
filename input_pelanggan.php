<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_barang="insert into pelanggan(id_pelanggan,nama_pelanggan,no_tlp,status)values
	('".$_POST['id_pelanggan']."',
	 '".$_POST['nama_pelanggan']."',
    '".$_POST['no_tlp']."',
'".$_POST['status']."')";
	 $proses_data=mysqli_query($input,$query_barang);
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
	<a class="active" href="menu.php">Home</a>
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
			<td>Id Pelanggan</td>
			<td><input name="id_pelanggan" type="number"></td>
		</tr>
	<tr>
			<td>Nama Pelanggan</td>
			<td><input name="nama_pelanggan" type="text"></td>
		</tr>
		<tr>
			<td>No Tlp</td>
			<td><input name="no_tlp" type="number"></td>
		</tr>
	<tr>
			<td>Status</td>
			<td><input name="status" type="text"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
	</form>
	


