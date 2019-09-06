<?php
include "../lib/koneksi.php";
$username = $_POST["username"];
$pass = $_POST["password"];

if(!ctype_alnum($username) OR !ctype_alnum($pass)){
	echo "<center>Login Gagal! <br>
	Username atau Password Anda Tidak Benar.<br>
	Atau account Anda sedang diblokir.<br>";
echo "<a href=login.php><b>Ulang Lagi</b></a></center>";
}else{
	$login = mysql_query("SELECT * FROM admin where username='$username' and password='$pass' ");
	$ketemu = mysql_num_rows($login);
	$r = mysql_fetch_array($login);

if ($ketemu > 0){
	session_start();

	$_SESSION['username'] = $r['username'];
	$_SESSION['password'] = $r['password'];

	header('location:admin/admin.php?module=home');

}else{
$login = mysql_query("SELECT * FROM member where username='$username' and password='$pass' ");
	$ketemu = mysql_num_rows($login);
	$r = mysql_fetch_array($login);

if ($ketemu > 0){
	session_start();

	$_SESSION['email'] = $r['email'];
	$_SESSION['user'] = $r['username'];
	$_SESSION['pass'] = $r['password'];

	header('location:../member/member.php?module=home');

}else{
	echo "<center>LOGIN GAGAL! <br>
	Username atau Password Anda Tidak Benar. <br>
	Atau account Anda sedang diblokir.<br>";
	echo "<a href=../login.php><b>ULANGI LAGI</b></a></center>";
}
}}
?>