<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";


	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$norekening = $_POST['norekening'];
	$atasnama = $_POST['atasnama'];
	$bank = $_POST['bank'];
	$nohp = $_POST['nohp'];
	$profesi = $_POST['profesi'];
	$alamat = $_POST['alamat'];


	if(empty($username) or empty($password)){

		echo "<script>alert('Form Tidak Boleh Kosong !!! Silahkan Ulangi Lagi...'); window.location=('register.php') </script>";
	}else{

		$pass = md5($_POST['password']);
		$querySimpan = mysql_query("INSERT INTO member (email, username, password) VALUES ('$email', '$username', '$password')");
	if($querySimpan){
	echo "<script> alert('Data Member Berhasil Didaftarkan'); window.location = '$regis_url'+'login.php?';</script>";	
	}else{
		echo "<script> alert('Data Member Gagal Didaftarkan'); window.location = '$regis_url'+'register.php?';</script>";	
	}
	}
?>