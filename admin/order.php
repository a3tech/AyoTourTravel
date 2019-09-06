<!DOCTYPE HTML>
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ayo Tour & Travel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link rel="stylesheet" href="../css/table.css">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
				<span class="responsive"><img class="kiri" src="../images/icons/logo.png" >
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="tour.php">Tour</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="admin.php">Profile</a></li>
						<li><a href="../logout.php">Logout</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(../images/destinasi.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	<?php
if(isset($_POST['pesan'])){
session_start();
include "../lib/koneksi.php";
$sid = session_id();
$id_paket=$_POST['id_paket'];
$kueriPaket = mysql_query("select * from paket_tour join tempat_wisata on paket_tour.kd_wilayah=tempat_wisata.kd_wilayah join kendaraan on kendaraan.id_kendaraan=paket_tour.id_kendaraan join hotel on hotel.id_hotel=paket_tour.id_hotel join kamar on kamar.id_kamar=hotel.id_kamar where id_paket='$id_paket' ");
$hasilQuery=mysql_fetch_array($kueriPaket);
$id_paket=$hasilQuery['id_paket'];
$idKendaraan=$hasilQuery['id_kendaraan'];
$jenisKendaraan=$hasilQuery['jenis_kendaraan'];
$idHotel=$hasilQuery['id_hotel'];
$namaHotel=$hasilQuery['nama_hotel'];
$tipeKamar=$hasilQuery['tipe_kamar'];
$kdWilayah=$hasilQuery['kd_wilayah'];
$lokasiWisata=$hasilQuery['lokasi_wisata'];
$namaPaket=$hasilQuery['nama_paket'];
$tarifPaket=$hasilQuery['tarif_paket'];
$durasiTour=$hasilQuery['durasi_tour'];
$deskripsi=$hasilQuery['deskripsi'];
$kegiatan=$hasilQuery['kegiatan'];

$nama=$_POST['namaLengkap'];
$kota=$_POST['kotaAsal'];
$email=$_POST['email'];
$nohp=$_POST['noHp'];
$jumlah=$_POST['jumlah'];
$tglberangkat=$_POST['tgl_berangkat'];
if($jumlah>1 && $jumlah<=5){
													$subtotal =$tarifPaket*$jumlah;
													$diskon = $subtotal*0.03;
													$total = $subtotal-$diskon; }
													else if($jumlah>6 && $jumlah<=10){
													$subtotal =$tarifPaket*$jumlah;
													$diskon = $subtotal*0.05;
													$total = $subtotal-$diskon;}
													else if($jumlah>10 && $jumlah<=15){
													$subtotal =$tarifPaket*$jumlah;
													$diskon = $subtotal*0.07;
													$total = $subtotal-$diskon;}
													else if($jumlah>15 && $jumlah<=20){
													$subtotal =$tarifPaket*$jumlah;
													$diskon = $subtotal*0.09;
													$total = $subtotal-$diskon;}
													else{
													$subtotal =$tarifPaket*$jumlah;
													$diskon = $subtotal*0.1;
													$total = $subtotal-$diskon;}
}
?>
		
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
			<h2>Detail Pemesanan Paket Tour</h2>

				<div class="col-md-12">
					<div class="col-md-12 animate-box data-animate-effect="fadeInRight"">







<table class="container" border='1' id='pesan_table'>
<tr>
<td colspan="7" align="center"><font color="white">Data Paket</font></td>
</tr>
<tr><th width='50'>No</th>
	<th width='150'>Nama Paket</th>
	<th width='100'>Lokasi</th>
	<th width='100'>Hotel</th>
	<th width='100'>Tipe Kamar</th>
	<th width='100'>Kendaraan</th>
	<th width='100'>Total Harga</th>
</tr>

<tr><th>1</th>
	<td><?php echo $namaPaket;?></td>
	<td><?php echo $lokasiWisata;?></td>
	<td><?php echo $namaHotel;?></td>
	<td><?php echo $tipeKamar; ?></td>
	<td><?php echo $jenisKendaraan;?></td>
	<td><?php echo $total; ?></td>
</tr>
</table>

<table class="container" border='1' id='pesan_table'>
<tr>
<td colspan="7" align="center"><font color="white">Data Pelanggan</font></td>
</tr>
<tr><th width='50'>No</th>
	<th width='150'>Nama Lengkap</th>
	<th width='100'>Kota Asal</th>
	<th width='100'>Email</th>
	<th width='100'>No HP</th>
	<th width='100'>Jumlah Orang</th>
	<th width='100'>Keberangkatan</th>
</tr>

<tr><th>1</th>
	<td><?php echo $nama; ?></td>
	<td><?php echo $kota; ?></td>
	<td><?php echo $email; ?></td>
	<td><?php echo $nohp; ?></td>
	<td><?php echo $jumlah; ?></td>
	<td><?php echo $tglberangkat; ?></td>
</tr>
</table><br/>

<div class="row">
<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
			<h3 align="center"><b>Selesaikan Pembayaran</b></h3>

			<p align="justify">Mohon selesaikan pembayaran melalui Transfer (ATM/Internet Banking/M-Banking) pada salah satu rekening dibawah ini dengan nominal sesuai dengan Total Harga paket yang tercantum ditabel diatas!</p><span class="responsive">
			<img class="tengah"  src="../images/mandiri.png"></span>
			<p align="left"><b>Bank &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Mandiri<br/>No Rekening : 7896 4356 67<br/>Atas Nama &nbsp;&nbsp;&nbsp;&nbsp;: PT Ayo Tour Travel</b></p>
			<span class="responsive"><img class="tengah"  src="../images/bca.png"></span>
			<p align="justify"><b>Bank &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: BCA<br/>No Rekening : 7896 4356 67<br/>Atas Nama &nbsp;&nbsp;&nbsp;&nbsp;: PT Ayo Tour Travel</b></p>
			<span class="responsive"><img class="tengah"  src="../images/bri.png"></span>
			<p align="justify"><b>Bank &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: BRI<br/>No Rekening : 7896 4356 67<br/>Atas Nama &nbsp;&nbsp;&nbsp;&nbsp;: PT Ayo Tour Travel</b></p>
			<span class="responsive"><img class="tengah"  src="../images/bni.png"></span>
			<p align="justify"><b>Bank &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: BNI<br/>No Rekening : 7896 4356 67<br/>Atas Nama &nbsp;&nbsp;&nbsp;&nbsp;: PT Ayo Tour Travel</b></p>

					<h3 align="center"><b>Konfirmasi Transfer Anda</b></h3>

			<p align="justify">Setelah selesai melakukan transfer untuk segera melakukan konfirmasi pembayaran dengan mengisi Atas Nama Rekening Asal yang melakukan Transfer lalu klik tombol Konfirmasi untuk menyelesaikan pemesanan Paket Tour </p>

			
			
			<form action="aksi_order.php" method="post">
			
											<p align="justify">Atas Nama Rekening</p>
													<div class="row form-group">
													<div class="col-md-6">
													<input type="hidden" name="id_paket" value="<?php echo $id_paket; ?>">
													<input type="hidden" name="namaLengkap" value="<?php echo $nama; ?>">
													<input type="hidden" name="kotaAsal" value="<?php echo $kota; ?>">
													<input type="hidden" name="email" value="<?php echo $email; ?>">
													<input type="hidden" name="noHp" value="<?php echo $nohp; ?>">
													<input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
													<input type="hidden" name="tgl_berangkat" value="<?php echo $tglberangkat; ?>">
													<input id="adult" name="atasNama" class="form-control pad-left-34" placeholder="Atas Nama Rekening"  type="text">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-4">
														<input type="submit" name="konfirmasi"class="btn btn-primary btn-block" value="Konfirmasi">
													</div>
												</div>
												</form><br/><br/><br/><br/>
							
								<p align="center"><b>PT.Ayo Tour & Travel</b></p>
								<p align="center"><i>Jln.C Simanjuntak Terban, Gondokusuman, Jogja-DI Yogyakarta</i></p>				

				</div></div>

			
			
	
	

</div></div></div></div></div>

	

		
		

	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Ayo Pesan Paket Tour Sekarang !</h2>
					<p>Pilih Paket Tour Yang Kamu Minati Dan Nikmati Diskon Harga Yang Kami Tawarkan !</p>
				</div>
			</div>
		</div>
	</div>





	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p><b>Ayo Tour & Travel</b> merupakan provider tour profesional dan berpengalaman sejak 2016 yang telah membantu ratusan kliennya merencanakan liburan terbaik mereka.Menyediakan berbagai pilihan Paket Tour menarik untuk kebutuhan mulai dari liburan keluarga, gathering, honeymoon, dan masih banyak lagi...<a href="../admin/about.php">read more</a></p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Ayo Tour & Travel</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Tentang Kami</a></li>
							<li><a href="#">Syarat Dan Ketentuan</a></li>
							<li><a href="#">Testimonial</a></li>
							<li><a href="#">Partner</a></li>
							<li><a href="#">Kontak</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Pembayaran</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">BCA</a></li>
							<li><a href="#">Mandiri</a></li>
							<li><a href="#">BRI</a></li>
							<li><a href="#">BNI</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Hubungi Kami</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> 085726186476 </a></li>
							<li><a href="#"><i class="icon-mail2"></i> cs@ayotourtravel.com</a></li>
							<li><a href="#"><i class="icon-facebook"></i> Ayo Tour & Travel</a></li>
							<li><a href="#"><i class="icon-twitter"></i>@AyoTour&Travel </a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">Designed by <a href="https://freehtml5.co/" target="_blank">A3 OFFICIAL</a></small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="../js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="../js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="../js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="../js/main.js"></script>

	</body>
</html>

