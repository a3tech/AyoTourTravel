<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idOrder = $_GET['id_order'];
	$queryHapus = mysql_query("DELETE FROM order_paket_tour WHERE id_order='$idOrder'");
	if($queryHapus){
		echo "<script> alert('Data Transaksi Paket Tour Berhasil Dihapus'); window.location = '$order_url'+'dataorder.php?';</script>";
	}else{
		echo "<script> alert('Data Transaksi Paket Tour Gagal Dihapus'); window.location = '$order_url'+'dataorder.php?';</script>";
	}

?>