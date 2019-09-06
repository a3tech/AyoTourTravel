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
						<li><a href="member.php">Profile</a></li>
						<li><a href="../logout.php">Logout</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<?php
include "../lib/config.php";
include "../lib/koneksi.php";

$kueriPaket = mysql_query("select * from paket_tour join tempat_wisata on paket_tour.kd_wilayah=tempat_wisata.kd_wilayah ");
$paket=mysql_fetch_array($kueriPaket);
?>
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(../images/destinasi1.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp"><br/><br/><br/>
							<h1>Banyak Pilihan Paket Tour Yang Kami Tawarkan</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Cari Paket Tour</h3>
											<form action="caritour.php" method="POST">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="destinasi">Destinasi Wisata</label>
														<select name="lokasi" id="destination" class="form-control">
														<option value="">Pilih Lokasi</option>
														<?php
														include "../lib/config.php";
														include "../lib/koneksi.php";
														$kueriWilayah = mysql_query("select * from paket_tour join tempat_wisata on paket_tour.kd_wilayah=tempat_wisata.kd_wilayah");
														while ($wlh=mysql_fetch_array($kueriWilayah))
														{?>
														<option value="<?php echo $wlh['lokasi_wisata'];?>"><?php echo $wlh['lokasi_wisata'];?></option>
														<?php } ?></select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="durasi">Durasi Tour</label>
														<select name="durasi" id="durasi" class="form-control">
															<option value="">Pilih Durasi</option>
														<?php
														include "../lib/config.php";
														include "../lib/koneksi.php";
														$kueriDurasi = mysql_query("select * from paket_tour join tempat_wisata on paket_tour.kd_wilayah=tempat_wisata.kd_wilayah");
														while ($drs=mysql_fetch_array($kueriDurasi))
														{?>
														<option value="<?php echo $drs['durasi_tour'];?>"><?php echo $drs['durasi_tour'];?></option>
														<?php } ?></select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="kategori">Kategori Tour</label>
														<select name="kategori" id="kategori" class="form-control">
														<option value="">Pilih Kategori</option>
														<?php
														include "../lib/config.php";
														include "../lib/koneksi.php";
														$kueriKategori = mysql_query("select * from paket_tour join tempat_wisata on paket_tour.kd_wilayah=tempat_wisata.kd_wilayah");
														while ($ktg=mysql_fetch_array($kueriKategori))
														{?>
														<option value="<?php echo $ktg['kategori'];?>"><?php echo $ktg['kategori'];?></option>
														<?php } ?></select>
													</div>
												</div>
											

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" name="cari" class="btn btn-primary btn-block" value="Cari">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Daftar Paket Tour</h2>
					<h1>Pilih Daftar Paket Tour Yang Kamu Minati !</h1> 
				</div>
			</div>

			<div class="row">

			<?php
	include "../lib/config.php";
	include "../lib/koneksi.php";
	$kueriPaket = mysql_query("select * from paket_tour join tempat_wisata on paket_tour.kd_wilayah=tempat_wisata.kd_wilayah");
	while($paket=mysql_fetch_array($kueriPaket)){
		?>

			<div class="col-lg-4 col-md-4 col-sm-6">

					<div class="fh5co-card-item ">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="../images/<?php echo $paket['foto_tempat'];?>" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><?php echo $paket['nama_paket']; ?></h2>
							<p align="center">Lokasi <?php echo $paket['lokasi_wisata']; ?><br/>Tarif Paket Rp.<?php echo $paket['tarif_paket']; ?><br/>Durasi Tour <?php echo $paket['durasi_tour']; ?><br/>Kategori <?php echo $paket['kategori']; ?></p>
							<a href="destinasi.php?id_paket=<?php echo $paket['id_paket'];?>" class="btn btn-primary">Booking</a>
						</div>
					</div>
				</div>
					<?php } ?>

			</div>
		</div></div>
	

	
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
					<h3>Tentang Kami</h3>
						<p><b>Ayo Tour & Travel</b> merupakan provider tour profesional dan berpengalaman sejak 2016 yang telah membantu ratusan kliennya merencanakan liburan terbaik mereka.Menyediakan berbagai pilihan Paket Tour menarik untuk kebutuhan mulai dari liburan keluarga, gathering, honeymoon, dan masih banyak lagi...<a href="about.php">read more</a></p>
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
							<li><a href="#">BTN</a></li>
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
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
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

