<?php
//definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "dbayotourtravel";

mysql_connect($server, $username, $password) or die("Koneksi Gagal !");
mysql_select_db($database) or die ("Database Tidak Bisa Dibuka");
?>