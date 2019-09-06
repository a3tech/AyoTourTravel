<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
	$idKendaraan = $_POST['id_kendaraan'];
	$idSupir = $_POST['idSupir'];
	$idPemandu = $_POST['idPemandu'];
	$nopol = $_POST['nopol'];
	$jenisKendaraan = $_POST['jenis_kendaraan'];
	$perusahaan = $_POST['perusahaan'];
	$querySimpan = mysql_query("INSERT INTO kendaraan (id_kendaraan, id_supir, id_pemandu, nopol, jenis_kendaraan, perusahaan) VALUES ('$idKendaraan', '$idSupir', '$idPemandu', '$nopol', '$jenisKendaraan', '$perusahaan')");
	if($querySimpan){
	echo "<script> alert('Data Kendaraan Berhasil Disimpan'); window.location = '$kendaraan_url'+'kendaraan.php?';</script>";	
	}else{
		echo "<script> alert('Data Kendaraan Gagal Disimpan'); window.location = '$kendaraan_url'+'kendaraans_tambah.php?';</script>";	
	}
?>