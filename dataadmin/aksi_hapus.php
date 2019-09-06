<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idAdmin = $_GET['id_admin'];
	$queryHapus = mysql_query("DELETE FROM admin WHERE id_admin='$idAdmin'");
	if($queryHapus){
		echo "<script> alert('Data Admin Berhasil Dihapus'); window.location = '$admin_url'+'admin.php?';</script>";
	}else{
		echo "<script> alert('Data Admin Gagal Dihapus'); window.location = '$admin_url'+'admin.php?';</script>";
	}

?>