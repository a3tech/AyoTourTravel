<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
if (isset($_POST['save'])){

	$idPaket = $_POST['id_paket'];
	$idKendaraan= $_POST['idKendaraan'];
	$idHotel= $_POST['idHotel'];
	$kdWilayah= $_POST['kdWilayah'];
	$namaPaket = $_POST['nama_paket'];
	$tarifPaket = $_POST['tarif_paket'];
	$durasiTour = $_POST['durasi_tour'];
	$favorite = $_POST['favorite'];
	$deskripsi = $_POST['deskripsi'];
	$kegiatan = $_POST['kegiatan'];
	$queryEdit = mysql_query("UPDATE paket_tour SET id_kendaraan='$idKendaraan', id_hotel='$idHotel', kd_wilayah='$kdWilayah', nama_paket='$namaPaket', tarif_paket='$tarifPaket', durasi_tour='$durasiTour', favorite='$favorite', deskripsi='$deskripsi', kegiatan='$kegiatan' WHERE id_paket='$idPaket'");

	if($queryEdit){
		echo "<script> alert('Data Paket Tour Berhasil Diedit'); window.location = '$paket_url'+'paket.php?';</script>";
	}else{
		echo "<script> alert('Data Paket Tour Gagal Diedit'); window.location = '$paket_url'+'paket_ubah.php?';</script>";
	}

}
?>