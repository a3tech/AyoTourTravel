<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
if (isset($_POST['save'])){

	$idMember = $_POST['id_member'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$queryEdit = mysql_query("UPDATE member SET email='$email', username='$username', password='$password' WHERE id_member='$idMember'");

	if($queryEdit){
		echo "<script> alert('Data Member Berhasil Diedit'); window.location = '$member_url'+'member.php?';</script>";
	}else{
		echo "<script> alert('Data Member Gagal Diedit'); window.location = '$member_url'+'member_ubah.php?';</script>";
	}

}
?>