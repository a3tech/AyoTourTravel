<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idHotel = $_GET['id_hotel'];
	$queryHapus = mysql_query("DELETE FROM hotel WHERE id_hotel='$idHotel'");
	if($queryHapus){
		echo "<script> alert('Data Hotel Berhasil Dihapus'); window.location = '$hotel_url'+'hotel.php?';</script>";
	}else{
		echo "<script> alert('Data Kamar Hotel Gagal Dihapus'); window.location = '$hotel_url'+'hotel.php?';</script>";
	}

?>