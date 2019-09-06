<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
if (isset($_POST['save'])){

	$idKamar = $_POST['id_kamar'];
	$tipeKamar = $_POST['tipe_kamar'];
	$queryEdit = mysql_query("UPDATE kamar SET tipe_kamar='$tipeKamar' WHERE id_kamar='$idKamar'");

	if($queryEdit){
		echo "<script> alert('Data Kamar Hotel Berhasil Diedit'); window.location = '$kamar_url'+'kamar.php?';</script>";
	}else{
		echo "<script> alert('Data Kamar Hotel Gagal Diedit'); window.location = '$kamar_url'+'kamar_ubah.php?';</script>";
	}

}
?>