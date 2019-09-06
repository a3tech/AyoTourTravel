<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
if (isset($_POST['save'])){

	$idKendaraan = $_POST['id_kendaraan'];
	$idSupir = $_POST['idSupir'];
	$idPemandu = $_POST['idPemandu'];
	$nopol = $_POST['nopol'];
	$jenisKendaraan = $_POST['jenis_kendaraan'];
	$perusahaan = $_POST['perusahaan'];
	$queryEdit = mysql_query("UPDATE kendaraan SET id_supir='$idSupir', id_pemandu='$idPemandu', nopol='$nopol', jenis_kendaraan='$jenisKendaraan', perusahaan='$perusahaan' WHERE id_kendaraan='$idKendaraan'");

	if($queryEdit){
		echo "<script> alert('Data Kendaraan Berhasil Diedit'); window.location = '$kendaraan_url'+'kendaraan.php?';</script>";
	}else{
		echo "<script> alert('Data Kendaraan Gagal Diedit'); window.location = '$kendaraan_url'+'kendaraan_ubah.php?';</script>";
	}

}
?>