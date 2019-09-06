<?php
session_start();
include "../lib/koneksi.php";
$sid = session_id();
$id_paket=$_POST['id_paket'];
$atasNama=$_POST['atasNama'];
$nama=$_POST['namaLengkap'];
$kota=$_POST['kotaAsal'];
$email=$_POST['email'];
$nohp=$_POST['noHp'];
$jumlah=$_POST['jumlah'];
$tglberangkat=$_POST['tgl_berangkat'];
$sql = mysql_query("SELECT id_paket from order_paket_tour where  id_paket='$id_paket' AND id_session='$sid' ");
$ketemu=mysql_num_rows($sql);
if($ketemu==0){
	mysql_query("insert into order_paket_tour (id_paket, atas_nama, nama_pemesan, kota, email, nohp, jumlah, tanggal_berangkat, id_session) values ('$id_paket', '$atasNama', '$nama', '$kota', '$email', '$nohp', '$jumlah', '$tglberangkat', '$sid')");
}
echo "<script> alert('Terima Kasih Sudah Memesan Paket Tour Kami, Kami Akan Melakukan Pengecekan, Silahkan Cek Email Anda Untuk Menerima Konfirmasi Dari Kami.. !'); window.location = 'tour.php?';</script>";	
?>