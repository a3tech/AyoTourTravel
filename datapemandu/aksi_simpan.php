<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
	$idPemandu = $_POST['id_pemandu'];
	$namaPemandu = $_POST['nama_pemandu'];
	$noTelp = $_POST['no_telp'];
	$alamat = $_POST['alamat'];
	$querySimpan = mysql_query("INSERT INTO pemandu (id_pemandu, nama_pemandu, no_telp, alamat) VALUES ('$idPemandu', '$namaPemandu', '$noTelp', '$alamat')");
	if($querySimpan){
	echo "<script> alert('Data Pemandu Berhasil Disimpan'); window.location = '$pemandu_url'+'pemandu.php?';</script>";	
	}else{
		echo "<script> alert('Data Pemandu Gagal Disimpan'); window.location = '$pemandu_url'+'pemandu_tambah.php?';</script>";	
	}
?>