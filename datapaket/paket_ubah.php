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

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link href="../css/bootstrap.min.css" rel="stylesheet"> 
    <link href="../css/datepicker.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script> 

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
						<li><a href="../admin/home.php">Home</a></li>
						<li><a href="../admin/tour.php">Tour</a></li>
						<li><a href="../admin/about.php">About</a></li>
						<li><a href="../admin/admin.php">Profile</a></li>
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
include "../lib/config.php";
include "../lib/koneksi.php";

$idPaket=$_GET['id_paket'];
$queryEdit=mysql_query("SELECT * FROM paket_tour WHERE id_paket='$idPaket'");
$hasilQuery=mysql_fetch_array($queryEdit);
$idPaket=$hasilQuery['id_paket'];
$idKendaraan=$hasilQuery['id_kendaraan'];
$idHotel=$hasilQuery['id_hotel'];
$kdWilayah=$hasilQuery['kd_wilayah'];
$namaPaket=$hasilQuery['nama_paket'];
$tarifPaket=$hasilQuery['tarif_paket'];
$durasiTour=$hasilQuery['durasi_tour'];
$favorite=$hasilQuery['favorite'];
$deskripsi=$hasilQuery['deskripsi'];
$kegiatan=$hasilQuery['kegiatan'];


?>
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-8 animate-box">
					<h3>Edit Data Paket Tour</h3>
					<form action="aksi_edit.php" method="post">
						<div class="row form-group">
							<div class="col-md-12">
							<input type="hidden" name="id_paket" value="<?php echo $idPaket; ?>">
							<select class="form-control" name="idKendaraan">
							<?php
							$kueriKendaraan = mysql_query("select * from kendaraan");
							while ($knd=mysql_fetch_array($kueriKendaraan))
							{?>
							<option value="<?php echo $knd['id_kendaraan']; ?>"><?php echo $knd['jenis_kendaraan'];?></option>
							<?php } ?></select>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
							<select class="form-control" name="idHotel">
							<?php
							include "../lib/config.php";
							include "../lib/koneksi.php";
							$kueriHotel = mysql_query("select * from hotel");
							while ($htl=mysql_fetch_array($kueriHotel))
							{?>
							<option value="<?php echo $htl['id_hotel']; ?>"><?php echo $htl['nama_hotel'];?></option>
							<?php } ?></select>
							</div>
						</div>

							<div class="row form-group">
							<div class="col-md-12">
							<select class="form-control" name="kdWilayah">
							<?php
							include "../lib/config.php";
							include "../lib/koneksi.php";
							$kueriWilayah = mysql_query("select * from tempat_wisata");
							while ($wlh=mysql_fetch_array($kueriWilayah))
							{?>
							<option value="<?php echo $wlh['kd_wilayah']; ?>"><?php echo $wlh['lokasi_wisata'];?></option>
							<?php } ?></select>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Nama Paket</label>
								<input type="text" id="namaPaket" name="nama_paket" class="form-control" value="<?php echo $namaPaket;?>" >
							</div>
							
						</div>

							<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Tarif Paket</label>
								<input type="text" id="tarifPaket" name="tarif_paket" class="form-control" value="<?php echo $tarifPaket;?>" >
							</div>
							
						</div>

							<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Durasi Tour</label>
								<input type="text" id="durasiTour" name="durasi_tour" class="form-control" value="<?php echo $durasiTour;?>" >
							</div>
							
						</div>

							<div class="row form-group">
							<div class="col-md-12">
							Paket Tour Favorit<br/>
								<label class="sr-only" for="favorite">Favorite</label>
								<input type="radio" class="form-radio" id="favorite" name="favorite" class="form-control" value="Y">Y&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" class="form-radio" id="favorite" name="favorite" class="form-control" value="N">N
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Deskripsi</label>
								<textarea id="deskripsi" name="deskripsi" class="form-control"><?php echo $deskripsi;?></textarea>
							</div>
							</div>


								<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Jadwal Kegiatan</label>
								<textarea id="kegiatan" name="kegiatan" class="form-control" ><?php echo $kegiatan;?></textarea>
							</div>
							</div>

						<div class="form-group">
							<input type="submit" name ="save" value="Simpan" class="btn btn-primary">
							<input type="button" value=Batal onclick=self.history.back() class="btn btn-primary">
						</div>

					</form>		
				</div>
				</div>
			</div>
		</div>
	</div>

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
	 <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>

	</body>
</html>

