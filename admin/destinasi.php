<?php
$sid = session_id();
?>
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
	<link rel="stylesheet" href="../../css/owl.carousel.min.css">
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
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(../images/destinasi1.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">
						
		
					</div>
					
				</div>
			</div>
		</div>
	</header>

	
	<?php
include "../lib/config.php";
include "../lib/koneksi.php";

$id_paket=$_GET['id_paket'];
$kueriPaket = mysql_query("select * from paket_tour join tempat_wisata on paket_tour.kd_wilayah=tempat_wisata.kd_wilayah where id_paket='$id_paket' ");
$hasilQuery=mysql_fetch_array($kueriPaket);
$id_paket=$hasilQuery['id_paket'];
$idKendaraan=$hasilQuery['id_kendaraan'];
$idHotel=$hasilQuery['id_hotel'];
$kdWilayah=$hasilQuery['kd_wilayah'];
$lokasiWisata=$hasilQuery['lokasi_wisata'];
$namaPaket=$hasilQuery['nama_paket'];
$tarifPaket=$hasilQuery['tarif_paket'];
$durasiTour=$hasilQuery['durasi_tour'];
$deskripsi=$hasilQuery['deskripsi'];
$kegiatan=$hasilQuery['kegiatan'];


?>

	
	<div class="gtco-section">
		<div class="gtco-container">
		<div class="col-md-8 feature-center animate-box" data-animate-effect="fadeInLeft">
		<div class="row">
						<div id="slideshow-mudah" class="carousel slide" data-ride="carousel">
  <!-- Indicators, Ini adalah Tombol BULET BULET dibawah. item ini dapat dihapus jika tidak diperlukan -->
  <ol class="carousel-indicators">
    <li data-target="#slideshow-mudah" data-slide-to="0" class="active"></li>
    <li data-target="#slideshow-mudah" data-slide-to="1"></li>
    <li data-target="#slideshow-mudah" data-slide-to="2"></li>
  </ol>
			<div class="carousel-inner">
		<div class="item active">
		<span class="responsive"><img class="kiri"  src="../images/<?php echo $hasilQuery['foto_tempat'];?>" alt="slideshow-mudah" ></span></div>

		<div class="item">
		<span class="responsive"><img class="kiri"  src="../images/<?php echo $hasilQuery['fotoo'];?>" alt="slideshow-mudah" ></span></div>

		<div class="item">
		<span class="responsive"><img class="kiri"  src="../images/<?php echo $hasilQuery['fotooo'];?>" alt="slideshow-mudah" ></span></div>

			</div>
    <a class="left carousel-control" href="#slideshow-mudah" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#slideshow-mudah" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div></div></div>

		

		
		
					</div>
					<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
					<h2><?php echo $namaPaket;?>,Deskripsi Lokasi Wisata Di <?php echo $lokasiWisata;?></h2>
					<p align="justify"><?php echo $deskripsi;?><br/><br/><h3><b>Jadwal Kegiatan Tour</h3></b><?php echo $kegiatan;?></p><br/></div>

			<div class="col-md-4 animate-box" data-animate-effect="fadeInRight">	
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Booking Paket Tour</h3>
											<form action="order.php" method="post">
												
													<div class="row form-group">
							<div class="col-md-12">
							<input type="hidden" name="id_paket" value="<?php echo $id_paket; ?>">
							<div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
								<label class="sr-only" for="name">Tanggal Berangkat</label>
								<input type="text" name="tgl_berangkat" class="form-control" placeholder="Tanggal Berangkat" readonly="readonly">
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							</div>
							</div>
						</div>

						<div class="row form-group">
													<div class="col-md-12">
											<label for="destinasi">Nama Lengkap</label>
													<input id="adult" name="namaLengkap" class="form-control pad-left-34" placeholder="Nama Lengkap"  type="text">
													</div>
												</div>

													<div class="row form-group">
													<div class="col-md-12">
											<label for="destinasi">Kota Asal</label>
													<input id="adult" name="kotaAsal" class="form-control pad-left-34" placeholder="Kota Asal"  type="text">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
											<label for="destinasi">Email</label>
													<input id="adult" name="email" class="form-control pad-left-34" placeholder="Email" type="email">
													</div>
												</div>

													<div class="row form-group">
													<div class="col-md-12">
											<label for="destinasi">No HP</label>
													<input id="adult" name="noHp" class="form-control pad-left-34" placeholder="Nomor HP" type="text">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
											<label for="destinasi">Jumlah Orang</label>
													<input id="adult" name="jumlah" class="form-control pad-left-34" min="5" max="30" value="5" type="number">
													</div>
												</div>
			
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" name="pesan"class="btn btn-primary btn-block" value="Pesan Paket">
													</div>
												</div>
												</form>	
												<form method="post">
												<h3>Cek Total Harga Paket</h3>
												<div class="row form-group">
													<div class="col-md-12">
											<label for="destinasi">Jumlah Orang</label>
													<input id="adult" name="jumlah" class="form-control pad-left-34" min="5" max="30" value="5" type="number">
													</div>
												</div>


												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" name="proses"class="btn btn-primary btn-block" value="Proses Harga">
													</div>
												</div>

													<div class="row form-group">
													<div class="col-md-12">
													<?php
													if(isset($_POST['proses'])){
													$jumlah = $_POST['jumlah'];
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
													echo "<h3>Daftar Harga</h3>";
													echo "<p>Tarif Paket Per Orang Rp.$tarifPaket</p>";
													echo "<p>Total Tarif Paket Rp.$total</p>";
														}
														?>
													</div>
												</div>

											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>

	
			
		</div>
	</div><br/>
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

