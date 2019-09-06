<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
if (isset($_POST['save'])){

	$idSupir = $_POST['id_supir'];
	$namaSupir = $_POST['nama_supir'];
	$noTelp = $_POST['no_telp'];
	$alamat = $_POST['alamat'];
	$queryEdit = mysql_query("UPDATE supir SET nama_supir='$namaSupir', no_telp='$noTelp', alamat='$alamat' WHERE id_supir='$idSupir'");

	if($queryEdit){
		echo "<script> alert('Data Supir Berhasil Diedit'); window.location = '$supir_url'+'supir.php?';</script>";
	}else{
		echo "<script> alert('Data Supir Gagal Diedit'); window.location = '$supir_url'+'supir_ubah.php?';</script>";
	}

}
?>