<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idKendaraan = $_GET['id_kendaraan'];
	$queryHapus = mysql_query("DELETE FROM kendaraan WHERE id_kendaraan='$idKendaraan'");
	if($queryHapus){
		echo "<script> alert('Data Kendaraan Berhasil Dihapus'); window.location = '$kendaraan_url'+'kendaraan.php?';</script>";
	}else{
		echo "<script> alert('Data Kendaraan Gagal Dihapus'); window.location = '$kendaraan_url'+'kendaraan.php?';</script>";
	}

?>