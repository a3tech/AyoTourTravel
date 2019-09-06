<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
if (isset($_POST['save'])){

	$idHotel = $_POST['id_hotel'];
	$idKamar = $_POST['idKamar'];
	$namaHotel = $_POST['nama_hotel'];
	$alamat = $_POST['alamat'];
	$queryEdit = mysql_query("UPDATE hotel SET id_kamar='$idKamar', nama_hotel='$namaHotel', alamat='$alamat' WHERE id_hotel='$idHotel'");

	if($queryEdit){
		echo "<script> alert('Data Hotel Berhasil Diedit'); window.location = '$hotel_url'+'hotel.php?';</script>";
	}else{
		echo "<script> alert('Data Hotel Gagal Diedit'); window.location = '$hotel_url'+'hotel_ubah.php?';</script>";
	}

}
?>