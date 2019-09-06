<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
	$idKamar = $_POST['id_kamar'];
	$tipeKamar = $_POST['tipe_kamar'];
	$querySimpan = mysql_query("INSERT INTO kamar (id_kamar, tipe_kamar) VALUES ('$idKamar', '$tipeKamar')");
	if($querySimpan){
	echo "<script> alert('Data Kamar Hotel Berhasil Disimpan'); window.location = '$kamar_url'+'kamar.php?';</script>";	
	}else{
		echo "<script> alert('Data Kamar Hotel Gagal Disimpan'); window.location = '$kamar_url'+'kamar_tambah.php?';</script>";	
	}
?>