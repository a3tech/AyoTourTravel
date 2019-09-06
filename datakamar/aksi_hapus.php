<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idKamar = $_GET['id_kamar'];
	$queryHapus = mysql_query("DELETE FROM kamar WHERE id_kamar='$idKamar'");
	if($queryHapus){
		echo "<script> alert('Data Kamar Hotel Berhasil Dihapus'); window.location = '$kamar_url'+'kamar.php?';</script>";
	}else{
		echo "<script> alert('Data Kamar Hotel Gagal Dihapus'); window.location = '$kamar_url'+'kamar.php?';</script>";
	}

?>