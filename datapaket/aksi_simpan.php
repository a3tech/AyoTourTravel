<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
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
	$querySimpan = mysql_query("INSERT INTO paket_tour (id_paket, id_kendaraan, id_hotel, kd_wilayah, nama_paket, tarif_paket, durasi_tour, favorite, deskripsi, kegiatan) VALUES ('$idPaket', '$idKendaraan', '$idHotel', '$kdWilayah', '$namaPaket', '$tarifPaket', '$durasiTour', '$favorite', '$deskripsi', '$kegiatan')");
	if($querySimpan){
	echo "<script> alert('Data Paket Tour Berhasil Disimpan'); window.location = '$paket_url'+'paket.php?';</script>";	
	}else{
		echo "<script> alert('Data Paket Tour Gagal Disimpan'); window.location = '$paket_url'+'paket_tambah.php?';</script>";	
	}
?>