-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 07:45 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbayotourtravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` char(5) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
('K0002', 'A3', 'a', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` char(5) NOT NULL,
  `nama_hotel` varchar(20) NOT NULL,
  `lama_inap` int(11) NOT NULL,
  `cek_in` date NOT NULL,
  `cek_out` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_kamar` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `lama_inap`, `cek_in`, `cek_out`, `alamat`, `id_kamar`) VALUES
('H0001', 'Hotel Asih', 0, '0000-00-00', '0000-00-00', 'Sulawesi', 'K0001'),
('H0002', 'Hotel Permata', 0, '0000-00-00', '0000-00-00', 'Yogyakarta', 'K0002'),
('H0003', 'Hotel Permatasari', 0, '0000-00-00', '0000-00-00', 'Bali', 'K0003'),
('H0004', 'Hotel Germasari', 0, '0000-00-00', '0000-00-00', 'Lombok', 'K0004'),
('H0005', 'Hotel Cindrawasih', 0, '0000-00-00', '0000-00-00', 'Kalimantan', 'K0005'),
('H0006', 'Hotel Andamari', 0, '0000-00-00', '0000-00-00', 'Bandung', 'K0006');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` char(5) NOT NULL,
  `tipe_kamar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `tipe_kamar`) VALUES
('K0001', 'Superior Room'),
('K0002', 'Standard Room'),
('K0003', 'Deluxe Room'),
('K0004', 'Junior Suite Room'),
('K0005', 'Suite Room'),
('K0006', 'Presidential');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` char(5) NOT NULL,
  `id_supir` char(5) NOT NULL,
  `id_pemandu` char(5) NOT NULL,
  `nopol` char(11) NOT NULL,
  `jenis_kendaraan` varchar(20) NOT NULL,
  `perusahaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `id_supir`, `id_pemandu`, `nopol`, `jenis_kendaraan`, `perusahaan`) VALUES
('K0001', 'S0001', 'P0001', 'ABA001GG', 'Bus', 'Efisiensi'),
('K0002', 'S0001', 'P0001', 'ABA002GG', 'Bus', 'Eka Mira'),
('K0003', 'S0001', 'P0001', 'ABA003GG', 'Bus', 'Dwi Karya'),
('K0004', 'S0001', 'P0001', 'ABA004GG', 'Bus', 'Adhi Putra'),
('K0005', 'S0001', 'P0001', 'ABA005GG', 'Bus', 'Almas'),
('K0006', 'S0006', 'P0006', 'ABA006GG', 'Bus', 'Asli Prima');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(5) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `email`, `username`, `password`) VALUES
(1, 'annasalbro@gmail.com', 'surotoyk', '12345'),
(2, 'annasinside@gmail.com', 'a3isagod', '12345'),
(4, 'agungsuroto@gmail.com', 'wew', 'aw');

-- --------------------------------------------------------

--
-- Table structure for table `order_paket_tour`
--

CREATE TABLE `order_paket_tour` (
  `id_order` int(5) NOT NULL,
  `id_paket` char(5) NOT NULL,
  `atas_nama` varchar(25) NOT NULL,
  `nama_pemesan` varchar(25) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `id_session` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_paket_tour`
--

INSERT INTO `order_paket_tour` (`id_order`, `id_paket`, `atas_nama`, `nama_pemesan`, `kota`, `email`, `nohp`, `jumlah`, `tanggal_berangkat`, `id_session`) VALUES
(25, 'P0002', 'Bagung Suroto', 'Bagung', 'Yojo', 'bagung@gmail.com', '085726186476', 5, '2018-06-27', '95268t6scuba92k49t0bb4nkr1'),
(26, 'P0003', 'goblok', 'Suradi', 'd', 'agungabu@gmail.com', '2323', 7, '2018-06-28', 'jimspilcb7p3f0vq5o80msi0m4');

-- --------------------------------------------------------

--
-- Table structure for table `paket_tour`
--

CREATE TABLE `paket_tour` (
  `id_paket` char(5) NOT NULL,
  `id_kendaraan` char(5) NOT NULL,
  `id_hotel` char(5) NOT NULL,
  `kd_wilayah` char(5) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `tarif_paket` int(11) NOT NULL,
  `durasi_tour` varchar(20) NOT NULL,
  `favorite` char(1) NOT NULL,
  `deskripsi` text NOT NULL,
  `kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_tour`
--

INSERT INTO `paket_tour` (`id_paket`, `id_kendaraan`, `id_hotel`, `kd_wilayah`, `nama_paket`, `tarif_paket`, `durasi_tour`, `favorite`, `deskripsi`, `kegiatan`) VALUES
('P0001', 'K0001', 'H0001', 'T0001', 'TOURSW1', 800000, '2 Hari 1 Malam', 'Y', 'Indonesia bagian timur memang terkenal dengan keindahan pulau dan pantainya. Tidak heran kalau banyak para pecinta traveling mulai melirik keindahan Indonesia timur sebagai destinasi liburan mereka. Salah satu destinasi incaran adalah Sulawesi Selatan. Selain terkanal dengan wisata kulinernya, Sulsel juga memiliki banyak pantai indah yang wajib dikunjungi.<br/><br/>\r\n\r\n<b>1.Pantai Tanjung Bira</b><br/>\r\nPantai Tanjung Bira menjadi mendadak popular di era sosial media merebak. Deretan foto-foto indah pantai ini menjadi buah bibir para penggila sosmed dan traveling. Tidak heran kalau nama Pantai Tanjung Bira langsung bertengger pada posisi paling depan sebagai destinasi liburan pantai yang wajib dikungjungi saat berada di Sulawesi. Pantai Tanjung Bira berada di Kabupaten Bulukumba Sulawesi Selatan. Sekitar 250 kilimeter dari Kota Makassar. Pantai yang berada dibagian paling selatan Sulawesi Selatan ini memiliki pasir putih yang halus seperti gula.</br><br/>\r\n\r\n<b>2.Pantai Bara</b><br/>\r\nSama seperti pantai Tanjung bira, lokasi pantai Bara juga berdekatan dengan pantai bira. Mungkin karena jarak yang berdekatan, sehingga anam pantai ini pun seperti nama saudara kembar. Kedua pantai ini sama-sama berada di Bulukumba, Sulawesi Selatan. Meski nama pantai bara belum sepopular nama pantai Tanjung Bira, namun, urusan pemandangan, pantai Bara juga tidak kalah mempesona. Hamparan pasir putih dan tenanganya air laut membuat pantai ini cocok untuk tempat merilekskan badan. Bagi mereka pecinta ketenangan pasti akan betah berlama-lama di Pantai Bara.<br/><br/>\r\n\r\n<b>3.Pantai Losari.</b><br/>\r\nPantai lokasi adalah sebuah pantai yang sangat terkenal yang terletak di makassar. pantai yang sangat indah yang berada  Jalan Penghibur sebelah barat kota Makassar. Pantai ini adlaah sarana berkumpul dan hiburan  bagi warga Makassar danpar awisatawan  untuk sekedar melepas penat dan sarana hiburan . Pantai ini ramai hampir di setiap waktu pagi, sore dan malam hari  ', '<h3><b>Hari 1 : Tour Ke Pantai Losari dan Tanjung Bira.</h3></b>\r\n\r\n1.Penjemputan di Bandara Udara Mutiara.<br/>\r\n2.Mampir menikmati wisata kuliner Mie Khas Sulawesi.<br/>\r\n3.Menuju Pantai Losari bersantai menikmati pemandangan.<br/>\r\n4.Makan Siang di Pulau Olagin dengan berbagai hidangan seafood khas Sulawesi.<br/>\r\n5.Mengunjungi Pantai Tanjung Bira anda bisa Snorkling di spot yang bagus.<br/>\r\n6.Mampir untuk Wisata Belanja Oleh-Oleh Khas Sulawesi.<br/>\r\n7.Makan malam ala Sumatera tempo dulu di lokal resto pilihan.<br/>\r\n8.Check in hotel dan istirahat.<br/><br/>\r\n\r\n<h3><b>Hari 2 : Berkunjung Ke Pantai Bara.</h3></b>\r\n1.Makan pagi di restoran hotel dan persiapan check out hotel.<br/>\r\n2.Mengunjungi Pantai Bara bersantai menikmati pemandangan.<br/>\r\n3.Makan siang di kota 1002 Warung Kopi Mangger.<br/>\r\n4.Pengantaran kembali ke Bandara untuk kembali ke kota asal.<br/>\r\n5.Tour selesai dengan penuh kesenangan dan tak terlupakan.'),
('P0002', 'K0002', 'H0002', 'T0002', 'TOURJG1', 1300000, '3 Hari 2 Malam', 'Y', 'Jogja adalah destinasi wisata yang sangat memesona. Tempat-tempat wisata yang baru dan menarik selalu bermunculan dan tak ada habisnya. Sebut saja wisata zaman old mulai dari Kraton Jogja, Taman Sari, Malioboro dan Prambanan. Kini sudah bermunculan wisata zaman now seperti Mangunan dan Gua Pindul. Dari Sleman, Kulonprogo, Bantul, Gunungkidul dan Jogja itu sendiri selalu menyajikan kejutan yang bikin kita nggak bosan ke sana.<br/><br/>\r\n\r\n<b>1.Kebun Buah Mangunan</b><br/>\r\nUdaranya sejuk dan pemandangannya luar biasa. Kebun Buah mangunan terletak di Mangunan, Kecamatan Dlingo, Kabupaten Bantul. Lokasi ini berjarak sekitar 15 km dari ibukota Kabupaten Bantul dan 35 km dari pusat Kota Yogyakarta.Titik ketinggian tersebut membuat kawasan ini memiliki udara yang sejuk serta pemandangan pegunungan seribu.Bisa melihat pantai Parangtritis dan kota Bantul dari satu lokasi. Wisatawan dapat menikmati pemandangan yang sangat indah dari Kebun Buah Mangunan yaitu Pantai Parangritis pada bagian selatan, pemandangan Kota Bantul yang berada di bagian barat serta keelokan sungai Oya yang sangat curam. Banyak populasi monyet yang juga terdapat di lokasi ini dapat menjadi salah satu potensi wisata.<br/><br/>\r\n\r\n<b>2.Watu Giring</b><br/>\r\nWatu Giring adalah sebuah bebatuan alam yang diambil dengan dipotong-potong di tempat oleh para penambang batu alam hingga menjadi seperti anak tangga atau heritage megalitikum.\r\nSaat ini penambangan batu alam yang ada di Kecamatan Semanu tersebut sudah dihentikan dan meninggalkan jejak penambangan batu alam.\r\nPeninggalan tersebut terlihat bak karya yang unik dengan penyatuan alam yang khas akan pegunungan Gunung kidul.\r\nObjek wisata Watu Giring yang berada di Semanu tersebut hampir mirip seperti yang ada di Bukit Breksi Kalasan, Sleman. Yang membedakan adalah potongan-potongan dari batu alam yang diambil.\r\nPara penambang batu alam di Semanu memotong batuan alam tersebut dengan ukuran yang kecil-kecil dan memanjang, hal tersebut berbeda dengan penambang yang ada di Bukit Breksi.\r\nPara penambang batu alam di Bukit Breksi memotong batuan alamnya dengan ukuran yang besar-besar.\r\nWalau pun berbeda, keduanya tetap menawarkan keunikan tersendiri yang pernah dibuat oleh manusia.<br/><br/>\r\n\r\n<b>3.Hutan Pinus Pengger<b/><br/>\r\nPepohonan pinus di Hutan Pinus Pengger masih terbilang rapat sehingga pada siang hari pun matahari tidak menembus area dasar pohon. Pemandangan ini tampak istimewa bagi yang mendambakan hutan pinus yang rapat dan masih terlihat alami.\r\nSuasana di sekitar hutan pinus terasa sejuk dengan angin sepoi-sepoi yang berhembus dari sisi timur dan kadang dari sisi selatan.\r\nSalah satu daya tarik lain Hutan Pinus Pengger Dlingo adalah spot untuk menikmati matahari terbenam di area Watu Adeg (Watu Ngadeg) atau ujung barat hutan pinus yang ditandai oleh area batu lava vulkanik yang telah membeku.\r\nBatuan lava beku ini mirip batuan lava beku di Wisata Watu Amben dan Gunung Api Purba Nglanggeran yang letaknya tidak jauh dari tempat tersebut. Dari tempat ini, pengunjung dapat menikmati momentum matahari terbenam atau sunset dari atas ketinggian dengan pemandangan yang hampir sama dengan Puncak Pinus Becici yang letaknya berada di sebelah selatannya.\r\nBila kondisi cuaca cukup cerah, akan terlihat jelas Gunung Merapi dan Gunung Merbabu di sisi sebelah kanan.\r\n\r\n', '<h3><b>Hari 1 : Tour Ke Kebun Buah Mangunan.</h3></b>\r\n\r\n1.Penjemputan di Bandara Udara Adi Sucipto.<br/>\r\n2.Mampir menikmati wisata kuliner Mie Jawa Khas Jogja.<br/>\r\n3.Menuju Pantai Kebun Buah Mangunan bersantai dan menikmati pemandangan.<br/>\r\n4.Makan Siang di Restoran Gunung Kidul dengan berbagai hidangan khas Jawa.<br/>\r\n5.Mampir untuk Wisata Belanja Oleh-Oleh Khas Yogyakarta.<br/>\r\n6.Makan malam di lokal resto pilihan.<br/>\r\n7.Check in hotel dan istirahat.<br/><br/>\r\n\r\n<h3><b>Hari 2 : Berkunjung Ke Watu Giring.</h3></b>\r\n1.Makan pagi di restoran hotel dan persiapan check out hotel.<br/>\r\n2.Mengunjungi Wisata Watu Giring menikmati tempat yang mirip situs reruntuhan Kuil Suku Maya.<br/>\r\n3.Makan siang di kota Warung Kopi Hora Umum.<br/>\r\n4.Mengunjungi Bukit Bintang dan Melihat indahnya pemandangan kota dari atas. <br/>\r\n5.Makan malam di lokal resto pilihan.<br/>\r\n6.Check in hotel dan istirahat.<br/><br/>\r\n\r\n<h3><b>Hari 3 : Berkunjung Ke Hutan Pinus Pengger.</h3></b>\r\n1.Makan siang di restoran hotel dan persiapan check out hotel.<br/>\r\n2.Mengunjungi Hutan Pinus Pengger menikmati pemandangan, dan mengikmati indahnya sunset.<br/>\r\n3.Makan malam di lokal resto pilihan.<br/>\r\n4.Pengantaran kembali ke Bandara untuk   kembali ke kota asal.<br/>\r\n5.Tour selesai dengan penuh kesenangan dan tak terlupakan.'),
('P0003', 'K0003', 'H0003', 'T0003', 'TOURBL1', 2000000, '2 Hari 1 Malam', 'Y', 'Bali memang merupakan destinasi favorit untuk berlibur, baik bagi wisatawan domestik maupun mancanegara. Ada begitu banyak objek wisata yang ditawarkan pulau eksotis ini, mulai dari panorama alam hingga tempat wisata buatan.Pesona pantai Bali adalah alasan utama mengapa sebagian besar orang mengunjungi Pulau Dewata ini. Menemukan pantai di Bali bisa jadi semudah menemukan pusat perbelanjaan di kota metropolis seperti Jakarta, Bandung, dan Surabaya. Jika Anda pencinta pantai dan berencana mengunjungi pantai-pantai cantik di Bali<br/><br/>\r\n\r\n<b>1.Tanah Lot</b><br/>\r\nDestinasi pantai di Bali yang pertama adalah Tanah Lot. Tempat wisata ini terletak di Desa Beraban, Tabanan dan hanya terpisah sekitar 24 km dari Pantai Kuta. Untuk rute tercepat yang bisa menghindari macet, Anda bisa berkendara melalui Jalan By Pass Tanah Lot. Keunikan tempat wisata yang satu ini adalah adanya pura yang berada di atas batu karang yang menjorok ke tengah laut. Selain itu, di dalam gua yang terletak di bawah tebing terdapat ular yang dikeramatkan. Legenda yang diyakini masyarakat lokal adalah bahwa ular tersebut merupakan jelmaan selendang Dang Hyang Niratha, keturunan Brahmana pada abad XVI.Selain menyaksikan langsung pura Tanah Lot yang terkenal dan ular suci di dalam gua, wisatawan juga banyak yang mendatangi pantai ini untuk menikmati matahari terbenam. Tidak sedikit wisatawan yang sudah mempersiapkan kamera untuk mengabadikan detik-detik tergelincirnya matahari di ufuk barat dari tebing. Bahkan tidak sedikit pula pasangan yang menjadikan lokasi ini sebagai latar foto prewedding.</br><br/>\r\n\r\n<b>2.Pantai Sanur</b><br/>\r\nPantai Sanur, lokasinya berada di sebelah timur Denpasar, sehingga banyak orang yang mengejar momen matahari terbit di pantai ini. Namun karena pantai ini terbuka selama 24 jam, Anda tidak harus datang saat subuh atau pagi hari saja. Sekadar bersantai di bibir pantai pada sore hari dengan lumpia kuah kacang yang lezat pun, bukan ide buruk.Jarak Pantai Sanur ke Bandara Ngurah Rai tidak terlalu jauh, hanya sekitar 16 km. Dari bandara, Anda dapat melalui jalan tol dengan arah ke Benoa, dilanjutkan Jalan By Pass Ngurah Rai. Setelah itu masuk ke Jalan Bet Ngadang, lalu Jalan Danau Tamblingan.<br/><br/>\r\n\r\n<b>3.Pantai Balangan.</b><br/>\r\nPantai eksotis dengan pasir berwarna putih ini terletak sekitar 8 km dari tempat wisata Bali wisata Garuda Wisnu Kencana dan 12 km dari Pura Uluwatu. Dari GWK, terus saja naik lurus hingga bertemu perempatan. Ambil jalan ke kanan (Jalan Pantai Balangan I), ikuti jalan hingga ujung dan petunjuk yang menyertainya. \r\n\r\nWarna air laut Pantai Balangan biru bersih dan ombaknya digemari oleh para peselancar. Jika ingin menyatu dengan air laut, Anda dapat berselancar atau berenang. Namun jika Anda hanya ingin menikmati dari bibir pantai pun, tak masalah. Dari kejauhan, aktivitas Bandara Ngurah Rai akan terlihat. Atau jika Anda berdiri di tebing, Anda juga bisa menyaksikan keindahan Pantai Dreamland. Selain itu, aktivitas masyarakat lokal saat membongkar hasil tangkapan ikan di pagi hari juga akan memberikan nuansa tersendiri.  ', '<h3><b>Hari 1 : Tour Ke Pantai Sanur dan Tanah Lot.</h3></b>\r\n\r\n1.Penjemputan di Bandara Udara Ngurah Rai.<br/>\r\n2.Mampir menikmati wisata kuliner Mie Khas Bali.<br/>\r\n3.Menuju Pantai Sanur bersantai dan menikmati pemandangan.<br/>\r\n4.Makan Siang di Pulau Oleng dengan berbagai hidangan seafood khas Bali.<br/>\r\n5.Mengunjungi Tanah Lot bersantai sambil menikmati sunset.<br/>\r\n6.Mampir untuk Wisata Belanja Oleh-Oleh Khas Bali.<br/>\r\n7.Makan malam ala Bali tempo dulu di lokal resto pilihan.<br/>\r\n8.Check in hotel dan istirahat.<br/><br/>\r\n\r\n<h3><b>Hari 2 : Berkunjung Ke Pantai Balangan.</h3></b>\r\n1.Makan pagi di restoran hotel dan persiapan check out hotel.<br/>\r\n2.Mengunjungi Pantai Balangan bersantai menikmati pemandangan, Anda juga bisa snorkling<br/>\r\n3.Makan siang di kota Warung Kopi Ngurai.<br/>\r\n4.Pengantaran kembali ke Bandara untuk kembali ke kota asal.<br/>\r\n5.Tour selesai dengan penuh kesenangan dan tak terlupakan.'),
('P0004', 'K0004', 'H0004', 'T0004', 'TOURLB1', 1800000, '2 Hari 1 Malam', 'Y', 'Mungkin selama ini yang Anda ketahui hanyalah Kepulauan Gili yang menyerupai kepingan surga, atau Gunung Rinjani sebuah gunung berapi aktif yang sangat menantang untuk didaki.\r\nGudangnya tempat wisata indah bukan hanya Pulau Bali. Lombok yang lokasinya bersebelahan dengan Bali memiliki tempat-tempat yang tidak kalah menarik untuk ditelusuri. Tidak heran, kalau saat ini popularitas Lombok di mata para wisatawan meningkat drastis.<br/><br/>\r\n\r\n<b>1.Pura Taman Payura</b><br/>\r\nSuasana yang klasik tidak hanya bisa dijumpai di Kota Tua Ampenan. Variasi lainnya, Anda bisa pula memilih berkunjung ke tempat wisata Pura Taman Mayura yang berada di Cakranegara. Kawasan ini memang dikenal sebagai area bersejarah di Kota Mataram. Utamanya, karena tempat ini adalah koloni dari Kerajaan Karangasem Bali.\r\nPura Taman Mayura pun merupakan salah satu peninggalan dari Raja Anak Agung Made Karangasem dari Kerajaan Karangasem Bali. Bangunan yang didirikan pada tahun 1744 ini memiliki desain arsitektur yang indah. Tidak heran kalau banyak wisatawan yang berkunjung ke tempat wisata seluas 3 hektare ini.</br><br/>\r\n\r\n<b>2.Pantai Senggigi</b><br/>\r\nSejak dulu, Pantai Senggigi dikenal sebagai tempat wisata paling populer di seantero Lombok. Pantai ini berjarak sekitar 50 Km dari Pelabuhan Lembar. Sebagai sebuah kawasan wisata yang dikenal luas, fasilitas penunjang bisa dijumpai dengan mudah di sini. Mulai dari keberadaan hotel murah, sarana transportasi, jasa pemandu wisata, penyewaan alat-alat snorkeling , dan lain-lain.\r\nTempat wisata ini pun selalu ramai oleh para pengunjung, baik siang ataupun malam hari. Terlebih, ada deretan hotel-hotel mewah sepanjang pantai. Mereka yang berkunjung ke tempat ini tidak hanya wisatawan lokal, tapi juga para turis mancanegara. Maklum saja, tempat ini memang kerap disebut sebagai pelopor yang mengenalkan wisata Indonesia di dunia internasional.<br/><br/>\r\n\r\n<b>3.Gili Trawangan.</b><br/>\r\nTempat wisata pertama yang kerap menjadi lokasi liburan di Lombok adalah Gili Trawangan. Pulau yang satu ini menawarkan beragam aktivitas wisata. Anda bisa menyaksikan keindahan alam bawah laut yang memukau, hamparan pasir putih yang luas, ataupun pemandangan matahari terbenam yang mengagumkan. ', '<h3><b>Hari 1 : Tour Ke Taman Payura dan Pantai Senggigi.</h3></b>\r\n\r\n1.Penjemputan di Bandara Udara International Lombok.<br/>\r\n2.Mampir menikmati wisata kuliner Mie Khas Lombok.<br/>\r\n3.Menuju Ke Taman Payura menikmati nuansa sejarah di kota Mataram.<br/>\r\n4.Makan Siang di Pulau Blagin dengan berbagai hidangan seafood khas Lombok.<br/>\r\n5.Mengunjungi Pantai Senggigi anda bisa Snorkling di spot yang bagus.<br/>\r\n6.Mampir untuk Wisata Belanja Oleh-Oleh Khas Lombok.<br/>\r\n7.Makan malam ala Lombok tempo dulu di lokal resto pilihan.<br/>\r\n8.Check in hotel dan istirahat.<br/><br/>\r\n\r\n<h3><b>Hari 2 : Berkunjung Ke Pulai Gili Trawangan.</h3></b>\r\n1.Makan pagi di restoran hotel dan persiapan check out hotel.<br/>\r\n2.Mengunjungi Gili Trawangan bersantai menikmati pemandangan laut.<br/>\r\n3.Makan siang di kota Warung Kopi Langger.<br/>\r\n4.Pengantaran kembali ke Bandara untuk kembali ke kota asal.<br/>\r\n5.Tour selesai dengan penuh kesenangan dan tak terlupakan.'),
('P0005', 'K0005', 'H0005', 'T0005', 'TOURKM1', 1700000, '3 Hari 2 Malam', 'Y', 'Provinsi yang letaknya di bagian paling selatan dari Pulau Kalimantan ini memiliki segudang daya tarik yang tak boleh dilewatkan sedikitpun oleh para penjelajah keindahan Indonesia.\r\nIngin pilihan spot wisata seperti apa yang Anda inginkan, Kalimantan Selatan hampir memiliki semuanya.\r\nAir terjun eksotis, pulau dan pantai yang keren, atau dataran tinggi yang megah, tinggal pilih dan datangi saja, karena semua siap menunggu Anda.\r\nHebatnya lagi, hampir semua spot wisata yang ada bisa dinikmati dengan harga yang relatif murah, bahkan gratis. Dan pastinya, tempatnya Instagrammable, lho!<br/><br/>\r\n\r\n<b>1.Jembatan Gantung Desa Nateh</b><br/>\r\nJembatan yang ada di Indonesia selalu memiliki keunikan tersendiri, tak terkecuali yang ada di Desa Nateh, Kecamatan Batang Alai Timur, Kabupaten Hulu Sungai Tengah ini.Dua bukit, yang jaraknya cukup berjauhan, dihubungkan dengan sebuah jembatan gantung yang desainya begitu… eksotis.Dengan dipadupadankan pemandangan indah khas perbukitan hijau dan sungai dengan aliran air yang menyegarkan dan juga bebatuan besar, Anda akan mendapatkan panorama yang tiada duanya.\r\nTingginya jembatan dan hembusan angin menambah keseruan sekaligus sedikit memompa adrenalin Anda.\r\nBerfoto di sini pastinya menjadi keharusan untuk Anda yang datang bertandang. Apalagi dari sejumlah sudut pandang, view-nya cukup aduhai.\r\nJangan lupa menyempatkan untuk menikmati atmosfer hutan lindung dan gua yang terletak tak jauh dari jembatan ini, ya.</br><br/>\r\n\r\n<b>2.Danau Biru Pengaron</b><br/>\r\nBekas tanah tambang atau penggalian batu bara bisa juga menjadi tempat yang keren. Salah satu contohnya adalah Danau Biru Pengaron.Terletak di Kabupaten Banjar, danau ini menampilkan keindahan yang alami. Airnya berwarna biru, dengan tebing-tebing hasil kerukan alat berat mengelilingi danau itu sendiri.Perpaduan warna air yang biru dan tekstur tanah yang berwarna-warni memunculkan keindahan tersendiri. Belum lagi semburat warna hijau dari pepohonan dan rumput serta ilalang yang ada di puncak bukit, seakan menambah eksotisme tempat ini.Beberapa spot juga menarik untuk dijadikan background berfoto Anda. Tapi, peringatan keras untuk tidak berenang di sini, karena struktur tanah yang labil dan berbahaya. Waspada, ya!.<br/><br/>\r\n\r\n<b>3.Waduk Riam Kanan.</b><br/>\r\nKonon katanya ada sembilan desa di dalam Waduk Riam Kanan ini, desa yang sengaja ditenggelamkan demi pembangunan waduk tersebut.Terlepas dari kontroversi tersebut, pemandangan dan panorama di waduk itu sendiri memang indah. Suasana yang tenang dan syahdu, juga alam perbukitan nan hijau, menambah keindahan dan keasrian Waduk Riam Kanan.\r\nPengunjung juga bisa berenang, atau bahkan melakukan snorkeling, namun penduduk lokal tidak menyediakan alat dan kelengkapan untuk aktivitas tersebut.Yang menarik adalah suasana yang menenangkan di danau tersebut. Pemandangannya yang asri juga menambah nilai untuk berwisata di tempat ini.', '<h3><b>Hari 1 : Tour Ke Jembatan Gantung Desa Nateh dan Danau Biru Pengaron.</h3></b>\r\n\r\n1.Penjemputan di Bandara Udara Juwata.<br/>\r\n2.Mampir menikmati wisata kuliner Mie Khas Kalimantan.<br/>\r\n3.Menuju Ke Jembatan Gantung Desa Nateh bersantai menikmati pemandangan Bukit.<br/>\r\n4.Makan Siang di Pulau Slegan dengan berbagai hidangan seafood khas Kalimantan.<br/>\r\n5.Mengunjungi Danau Biru Pengaron menikmati keindahan alam yang alami.<br/>\r\n6.Mampir untuk Wisata Belanja Oleh-Oleh Khas Kalimantan.<br/>\r\n7.Makan malam ala Kalimantan tempo dulu di lokal resto pilihan.<br/>\r\n8.Check in hotel dan istirahat.<br/><br/>\r\n\r\n<h3><b>Hari 2 : Berkunjung Ke Waduk Riam Kanan.</h3></b>\r\n1.Makan pagi di restoran hotel dan persiapan check out hotel.<br/>\r\n2.Mengunjungi Waduk Riam Kanan bersantai menikmati pemandangan dan panorama Waduk.<br/>\r\n3.Makan siang di kota Warung Kopi Yangger.<br/>\r\n4.Pengantaran kembali ke Bandara untuk kembali ke kota asal.<br/>\r\n5.Tour selesai dengan penuh kesenangan dan tak terlupakan.'),
('P0006', 'K0006', 'H0006', 'T0006', 'TOURBDG1', 1500000, 'Trip 1 Hari', 'Y', 'Dalam dua dekade terakhir, Bandung telah berkembang menjadi kota pelesir dengan berbagai objek wisata menarik. Dari wisata alam sampai aneka jenis wisata kekinian. Tak heran jika dari hari ke hari semakin banyak tempat wisata di Bandung yang bermunculan.Dengan meluasnya jejaring sosial, semakin banyak tempat wisata di Bandung yang baru dikenal. Tak sedikit pula pengembang yang memanfaatkan hobi traveling kaum milenial dengan mendirikan tempat wisata di Bandung.<br/><br/>\r\n\r\n<b>1.Gunung Tangkuban Perahu</b><br/>\r\nTempat wisata di Bandung ini sangat menarik untuk dikunjungi dan tentu saja karena berupa area pegunungan maka hawanya juga sangat sejuk. Fasilitas di tempat wisata ini juga cukup mumpuni seperti tempat wisata pada umumnya. Akses untuk mencapainya juga tidak terlalu rumit.\r\nGunung Tangkuban Perahu memiliki bentuk yang unik yaitu bagaikan perahu yang terbalik. Tidak heran gunung ini dinamakan Gunung Tangkuban Perahu. Apabila dalam cerita masa lalu terdapat cerita Sangkuriang yang menendang perahu karena kecewa dengan wanita (ibunya) yang hendak dinikahi.\r\nMemiliki hawa yang sejuk merupakan salah satu keunikan gunung ini yaitu mencapai 2 derajat Celsius. Di tempat wisata ini juga terdapat banyak pedagang suvenir khas..</br><br/>\r\n\r\n<b>2.Kawah Putih Ciwidey</b><br/>\r\nKawah Putih merupakan sebuah kawah yang terbentuk setelah letusan Gunung Patuha. Dinamakan kawah putih karena memiliki tanah yang berwarna putih dan warna kawahnya juga putih, warna putih dihasilkan oleh unsur belerang. Kawah putih merupakan satu-satunya tempat wisata di Bandung yang dapat berubah warna karena kadar belerang, suhu dan cuaca.Tempat ini memiliki keindahan romantis dan pesona yang luar biasa. Tidak heran banyak sekali yang menjadikan kawah putih sebagai tempat fotografi, prewedding, syuting film, melukis, dan berbagai kegiatan mengagumkan lainnya. Tidak hanya keromantisan, bahkan tempat wisata ini juga merupakan spot olahraga hiking dan berkuda.<br/><br/>\r\n\r\n<b>3.Curug Maribaya.</b><br/>\r\nCurugMaribaya terletak di Kampung Cikondang, Cibodas, Lembang, Kabupaten Bandung Barat, Jawa Barat. Letak Curug Maribaya sendiri berada dalam kawasan Taman Wisata Maribaya.\r\nAir terjun ini memiliki ketinggian sekitar 15 meter, memiliki 2 sumber aliran sungai Bandung Barat yaitu Ciwakari dan Sungai Cigulung. Air curug akan terlihat sangat jernih ketika musim kemarau. Hempasan air dari atas curug akan membawa sensasi sejuk terlebih ketika terdapat angin yang menghembus kepada air terjun.', '<h3><b>Trip 1 Hari : Mengunjungi Gunung Tangkuban Perahu, Kawah Putih       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ciwidey, Dan Curug Maribaya.</h3></b>\r\n\r\n1.Penjemputan di Bandara Udara Husein Sastranegara.<br/>\r\n2.Mampir menikmati wisata kuliner Mie Khas Bandung.<br/>\r\n3.Menuju Gunung Tangkuban Perahu bersantai menikmati suasana alam.<br/>\r\n4.Makan Siang dengan berbagai hidangan seafood khas Bandung.<br/>\r\n5.Mengunjungi Kawah Putih Ciwidey menikmati uniknya kawah vulkanik berwarna.<br/>\r\n6.Mengunjungi Curug Maribaya menikmati pemandangan Air Terjun yang indah<br/>\r\n7.Mampir untuk Wisata Belanja Oleh-Oleh Khas Bandung.<br/>\r\n8.Makan malam ala Bandung tempo dulu di lokal resto pilihan.<br/>\r\n9.Pengantaran kembali ke Bandara untuk kembali ke kota asal.<br/>\r\n10.Tour selesai dengan penuh kesenangan dan tak terlupakan.');

-- --------------------------------------------------------

--
-- Table structure for table `pemandu`
--

CREATE TABLE `pemandu` (
  `id_pemandu` char(5) NOT NULL,
  `nama_pemandu` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemandu`
--

INSERT INTO `pemandu` (`id_pemandu`, `nama_pemandu`, `no_telp`, `alamat`) VALUES
('P0001', 'Bagung Suroto', '085738234213', 'Yogyakarta'),
('P0002', 'Alexey Paidi', '085676333455', 'Kalimantan'),
('P0003', 'Sebastian Pendek', '085546789877', 'Bali'),
('P0004', 'Painem', '085578899876', 'Lombok'),
('P0005', 'Nyi Pelet', '088546788938', 'Sulawesi'),
('P0006', 'Santi Pekeh', '099587332847', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `supir`
--

CREATE TABLE `supir` (
  `id_supir` char(5) NOT NULL,
  `nama_supir` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supir`
--

INSERT INTO `supir` (`id_supir`, `nama_supir`, `no_telp`, `alamat`) VALUES
('S0001', 'Suroto Agung', '085726186476', 'Bantul'),
('S0002', 'Agung Suroto', '085726186479', 'Imogiri'),
('S0003', 'Alexander Kemphol', '089546356879', 'Bali'),
('S0004', 'Michael Samidi', '085782674568', 'Lombok'),
('S0005', 'Kristian Budi', '089588932786', 'Bandung'),
('S0006', 'James Widodo', '088573289134', 'Kalimantan');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `kd_wilayah` char(5) NOT NULL,
  `lokasi_wisata` varchar(20) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `foto_tempat` varchar(100) NOT NULL,
  `fotoo` varchar(100) NOT NULL,
  `fotooo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`kd_wilayah`, `lokasi_wisata`, `kategori`, `foto_tempat`, `fotoo`, `fotooo`) VALUES
('T0001', 'Sulawesi', 'Study Tour', 's1.jpg', 's2.jpg', 's3.jpg'),
('T0002', 'Yogyakarta', 'Holiday Tour', 'mangunan.jpg', 'y2.png', 'y3.jpg'),
('T0003', 'Bali', 'Study Tour', 'b1.jpg', 'b2.jpg', 'b3.jpg'),
('T0004', 'Lombok', 'Family Tour', 'l1.jpg', 'l2.jpg', 'l3.jpg'),
('T0005', 'Kalimantan', 'Honeymoon Packa', 'k1.jpg', 'k2.jpg', 'k3.jpg'),
('T0006', 'Bandung', 'Holiday Tour', 'bd1.jpg', 'bd2.jpg', 'bd3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pesan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id_testimoni`, `nama`, `email`, `pesan`, `foto`, `tanggal`) VALUES
(3, 'Bagung Suradi', 'bagungsuradi@gmail.com', 'Pelayanan yang fast respon, aman, dan terjangkau mantap !', 'keroppi_png_by_mituesposito-d5tyrs6.png', '2018-06-26'),
(4, 'Bagung Abu', 'bagungabu@gmail.com', 'Perjalanan Tour yang seru serta pelayanan yang ramah bikin betah pesan paket tour di Ayo Tour & Travel', 'KARTUN RUMAH.png', '2018-06-25'),
(6, 'Suradi', 'SuradiAbu@gmail.com', 'Pelayanan yang memuaskan serta harga paket tour yang terjangkau maju terus Ayo Tour & Travel !', 'g2_logo.png', '2018-06-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD KEY `id_supir` (`id_supir`),
  ADD KEY `id_pemandu` (`id_pemandu`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `order_paket_tour`
--
ALTER TABLE `order_paket_tour`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `paket_tour`
--
ALTER TABLE `paket_tour`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_kendaraan` (`id_kendaraan`),
  ADD KEY `id_hotel` (`id_hotel`),
  ADD KEY `kd_wilayah` (`kd_wilayah`);

--
-- Indexes for table `pemandu`
--
ALTER TABLE `pemandu`
  ADD PRIMARY KEY (`id_pemandu`);

--
-- Indexes for table `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id_supir`);

--
-- Indexes for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`kd_wilayah`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order_paket_tour`
--
ALTER TABLE `order_paket_tour`
  MODIFY `id_order` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`);

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_supir`) REFERENCES `supir` (`id_supir`),
  ADD CONSTRAINT `kendaraan_ibfk_2` FOREIGN KEY (`id_pemandu`) REFERENCES `pemandu` (`id_pemandu`);

--
-- Constraints for table `order_paket_tour`
--
ALTER TABLE `order_paket_tour`
  ADD CONSTRAINT `order_paket_tour_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket_tour` (`id_paket`);

--
-- Constraints for table `paket_tour`
--
ALTER TABLE `paket_tour`
  ADD CONSTRAINT `paket_tour_ibfk_1` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`),
  ADD CONSTRAINT `paket_tour_ibfk_2` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`),
  ADD CONSTRAINT `paket_tour_ibfk_3` FOREIGN KEY (`kd_wilayah`) REFERENCES `tempat_wisata` (`kd_wilayah`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
