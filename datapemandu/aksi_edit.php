<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
if (isset($_POST['save'])){

	$idPemandu = $_POST['id_pemandu'];
	$namaPemandu = $_POST['nama_pemandu'];
	$noTelp = $_POST['no_telp'];
	$alamat = $_POST['alamat'];
	$queryEdit = mysql_query("UPDATE pemandu SET nama_pemandu='$namaPemandu', no_telp='$noTelp', alamat='$alamat' WHERE id_pemandu='$idPemandu'");

	if($queryEdit){
		echo "<script> alert('Data Pemandu Berhasil Diedit'); window.location = '$pemandu_url'+'pemandu.php?';</script>";
	}else{
		echo "<script> alert('Data Pemandu Gagal Diedit'); window.location = '$pemandu_url'+'pemandu_ubah.php?';</script>";
	}

}
?>