<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
	$nama_file = $_FILES['gambar']['name'];
	$ukuran_file = $_FILES['gambar']['size'];
	$tipe_file = $_FILES['gambar']['type'];
	$tmp_file = $_FILES['gambar']['tmp_name'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];
	$tgl_booking = date("Y-m-d");
	$path="../images/".$nama_file;
	if($tipe_file == "image/jpg" || $tipe_file == "image/png" || $tipe_file == "image/jpeg"){
		if($ukuran_file<=1000000){
			if(move_uploaded_file($tmp_file, $path)){

			$querySimpan = mysql_query("INSERT INTO testimonial(nama, email, pesan, foto, tanggal) VALUES ('$nama', '$email', '$pesan', '$nama_file', '$tgl_booking')  ");

	if($querySimpan){
	echo "<script> alert('Testimoni Anda Berhasil Dikirim'); window.location = '$testimoni_url'+'testimonial_tambah.php?';</script>";	
	}else{
		echo "<script> alert('Foto Anda Berhasil Diupload'); window.location = '$testimoni_url'+'testimonial_tambah.php?';</script>";	
	}
	}else{
		echo "<script> alert('Foto Anda Gagal Diupload'); window.location = '$testimoni_url'+'testimonial_tambah.php?';</script>";	
	}
	}else{
		echo "<script> alert('Foto Anda Gagal Diupload Karena Ukuran File Melebihi 1MB !'); window.location = '$testimoni_url'+'testimonial_tambah.php?';</script>";	
	}
	}else{
		echo "<script> alert('Foto Anda Gagal Diupload Karena Tidak Berekstensi JPG/JPEG/PNG !'); window.location = '$testimoni_url'+'testimonial_tambah.php?';</script>";	
	}
?>