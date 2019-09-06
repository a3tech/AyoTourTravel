<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idTestimoni = $_GET['id_testimoni'];
	$queryHapus = mysql_query("DELETE FROM testimonial WHERE id_testimoni='$idTestimoni'");
	if($queryHapus){
		echo "<script> alert('Data Testimoni Berhasil Dihapus'); window.location = '$testimoni_url'+'testimoni.php?';</script>";
	}else{
		echo "<script> alert('Data Testimoni Gagal Dihapus'); window.location = '$testimoni_url'+'testimoni.php?';</script>";
	}

?>