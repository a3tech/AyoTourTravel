<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
	$idHotel = $_POST['id_hotel'];
	$idKamar = $_POST['idKamar'];
	$namaHotel = $_POST['nama_hotel'];
	$alamat = $_POST['alamat'];
	$querySimpan = mysql_query("INSERT INTO hotel (id_hotel, nama_hotel, alamat, id_kamar) VALUES ('$idHotel', '$namaHotel', '$alamat', '$idKamar')");
	if($querySimpan){
	echo "<script> alert('Data Hotel Berhasil Disimpan'); window.location = '$hotel_url'+'hotel.php?';</script>";	
	}else{
		echo "<script> alert('Data Hotel Gagal Disimpan'); window.location = '$hotel_url'+'hotel_tambah.php?';</script>";	
	}
?>