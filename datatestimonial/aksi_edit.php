<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
if (isset($_POST['save'])){

	$id_testimoni = $_POST['id_testimoni'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];
	$tanggal = $_POST['tanggal'];
	$nama_file = $_FILES['gambar']['name'];
	$tmp_file = $_FILES['gambar']['tmp_name'];
	$path="../images/".$nama_file;
	move_uploaded_file($tmp_file, $path);
	

		$queryEdit = mysql_query("UPDATE testimonial SET nama='$nama', email='$email', pesan='$pesan', foto='$nama_file', tanggal='$tanggal'  WHERE id_testimoni='$id_testimoni'");
		if($queryEdit){
		echo "<script> alert('Data Testimoni Pelanggan Berhasil Diupdate'); window.location = '$testimoni_url'+'testimoni.php?';</script>";	
		}else{
		echo "<script> alert('Data Testimoni Pelanggan Gagal Diupdate'); window.location = '$testimoni_url'+'tempat_ubah.php?';</script>";	

}}
?>