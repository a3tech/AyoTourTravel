<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idPemandu = $_GET['id_pemandu'];
	$queryHapus = mysql_query("DELETE FROM pemandu WHERE id_pemandu='$idPemandu'");
	if($queryHapus){
		echo "<script> alert('Data Pemandu Berhasil Dihapus'); window.location = '$pemandu_url'+'pemandu.php?';</script>";
	}else{
		echo "<script> alert('Data Pemandu Gagal Dihapus'); window.location = '$pemandu_url'+'pemandu.php?';</script>";
	}

?>