<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$kd_wilayah = $_GET['kd_wilayah'];
	$queryHapus = mysql_query("DELETE FROM tempat_wisata WHERE kd_wilayah='$kd_wilayah'");
	if($queryHapus){
		echo "<script> alert('Data Tempat Wisata Berhasil Dihapus'); window.location = '$tempat_url'+'tempat.php?';</script>";
	}else{
		echo "<script> alert('Data Tempat Wisata Gagal Dihapus'); window.location = '$tempat_url'+'tempat.php?';</script>";
	}

?>