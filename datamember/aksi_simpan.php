<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$querySimpan = mysql_query("INSERT INTO member (email, username, password) VALUES ('$email', '$username', '$password')");
	if($querySimpan){
	echo "<script> alert('Data Member Berhasil Disimpan'); window.location = '$member_url'+'member.php?';</script>";	
	}else{
		echo "<script> alert('Data Member Gagal Disimpan'); window.location = '$member_url'+'member_tambah.php?';</script>";	
	}
?>