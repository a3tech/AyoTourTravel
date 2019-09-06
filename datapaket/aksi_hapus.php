<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idPaket = $_GET['id_paket'];
	$queryHapus = mysql_query("DELETE FROM paket_tour WHERE id_paket='$idPaket'");
	if($queryHapus){
		echo "<script> alert('Data Paket Tour Berhasil Dihapus'); window.location = '$paket_url'+'paket.php?';</script>";
	}else{
		echo "<script> alert('Data Paket Tour Gagal Dihapus'); window.location = '$paket_url'+'paket.php?';</script>";
	}

?>