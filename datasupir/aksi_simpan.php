<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
	$idSupir = $_POST['id_supir'];
	$namaSupir = $_POST['nama_supir'];
	$noTelp = $_POST['no_telp'];
	$alamat = $_POST['alamat'];
	$querySimpan = mysql_query("INSERT INTO supir (id_supir, nama_supir, no_telp, alamat) VALUES ('$idSupir', '$namaSupir', '$noTelp', '$alamat')");
	if($querySimpan){
	echo "<script> alert('Data Supir Berhasil Disimpan'); window.location = '$supir_url'+'supir.php?';</script>";	
	}else{
		echo "<script> alert('Data Supir Gagal Disimpan'); window.location = '$supir_url'+'supir_tambah.php?';</script>";	
	}
?>