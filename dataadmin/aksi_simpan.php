<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
	$idAdmin = $_POST['id_admin'];
	$namaAdmin = $_POST['nama_admin'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$querySimpan = mysql_query("INSERT INTO admin (id_admin, nama_admin, username, password) VALUES ('$idAdmin', '$namaAdmin', '$username', '$password')");
	if($querySimpan){
	echo "<script> alert('Data Admin Berhasil Disimpan'); window.location = '$admin_url'+'admin.php?';</script>";	
	}else{
		echo "<script> alert('Data Admin Gagal Disimpan'); window.location = '$admin_url'+'admin_tambah.php?';</script>";	
	}
?>