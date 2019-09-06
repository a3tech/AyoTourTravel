<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idSupir = $_GET['id_supir'];
	$queryHapus = mysql_query("DELETE FROM supir WHERE id_supir='$idSupir'");
	if($queryHapus){
		echo "<script> alert('Data Supir Berhasil Dihapus'); window.location = '$supir_url'+'supir.php?';</script>";
	}else{
		echo "<script> alert('Data Supir Gagal Dihapus'); window.location = '$supir_url'+'supir.php?';</script>";
	}

?>