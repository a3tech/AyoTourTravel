<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
if (isset($_POST['save'])){

	$idAdmin = $_POST['id_admin'];
	$namaAdmin = $_POST['nama_admin'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$queryEdit = mysql_query("UPDATE admin SET nama_admin='$namaAdmin', username='$username', password='$password' WHERE id_admin='$idAdmin'");

	if($queryEdit){
		echo "<script> alert('Data Admin Berhasil Diedit'); window.location = '$admin_url'+'admin.php?';</script>";
	}else{
		echo "<script> alert('Data Admin Gagal Diedit'); window.location = '$admin_url'+'admin_ubah.php?';</script>";
	}

}
?>