<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";

	$idMember = $_GET['id_member'];
	$queryHapus = mysql_query("DELETE FROM member WHERE id_member='$idMember'");
	if($queryHapus){
		echo "<script> alert('Data Member Berhasil Dihapus'); window.location = '$member_url'+'member.php?';</script>";
	}else{
		echo "<script> alert('Data Member Gagal Dihapus'); window.location = '$member_url'+'member.php?';</script>";
	}

?>