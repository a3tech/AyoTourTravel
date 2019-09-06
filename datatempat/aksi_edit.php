<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
if (isset($_POST['save'])){

	$kd_wilayah = $_POST['kd_wilayah'];
	$lokasi_wisata = $_POST['lokasi_wisata'];
	$kategori = $_POST['kategori'];
	$jumlah = count($_FILES['gambar']['name']);
	if ($jumlah > 0) {
		$gambar = array();
	for ($i=0; $i < $jumlah; $i++) { 
	$nama_file = $_FILES['gambar']['name'][$i];
	$tmp_file = $_FILES['gambar']['tmp_name'][$i];
	$path="../images/".$nama_file;
	$gambar[$i] = $nama_file;
	move_uploaded_file($tmp_file, $path);
	}

		$queryEdit = mysql_query("UPDATE tempat_wisata SET lokasi_wisata='$lokasi_wisata', kategori='$kategori', foto_tempat='$gambar[0]', fotoo='$gambar[1]', fotooo='$gambar[2]'  WHERE kd_wilayah='$kd_wilayah'");
		echo "<script> alert('Data Tempat Wisata Berhasil Disimpan'); window.location = '$tempat_url'+'tempat.php?';</script>";	
		}else{
		echo "<script> alert('Data Tempat Wisata Gagal Disimpan'); window.location = '$tempat_url'+'tempat_tambah.php?';</script>";	

}}
?>