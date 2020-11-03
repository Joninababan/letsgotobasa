-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2020 pada 11.36
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letsgotobasa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(2, 'joni123', 'joni123', 'joni nababan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `id_transportasi` int(11) DEFAULT NULL,
  `id_driver` int(5) NOT NULL,
  `nama_pelanggan` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `daritanggal` varchar(255) DEFAULT NULL,
  `sampaitanggal` varchar(255) DEFAULT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id`, `id_pelanggan`, `id_transportasi`, `id_driver`, `nama_pelanggan`, `lokasi`, `daritanggal`, `sampaitanggal`, `status`) VALUES
(1, 1, 15, 0, 'Joni', 'Jl Jamin Ginting', '2019-01-17', '2019-01-18', 'Menunggu Konfirmasi'),
(2, 1, 19, 0, 'Joni', 'Medan', '2019-01-17', '2019-01-18', 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasi`
--

CREATE TABLE `destinasi` (
  `id_destinasi` int(20) NOT NULL,
  `nama_destinasi` varchar(100) NOT NULL,
  `nama_kabupaten` varchar(100) NOT NULL,
  `foto_destinasi` varchar(200) NOT NULL,
  `map` varchar(500) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `destinasi`
--

INSERT INTO `destinasi` (`id_destinasi`, `nama_destinasi`, `nama_kabupaten`, `foto_destinasi`, `map`, `deskripsi`) VALUES
(3, 'Pemandian Air Panas Tamaro', 'taput', 'airpanasTamaro.jfif', 'https://goo.gl/maps/nxQxaGDeq1m', ''),
(4, 'Panatapan Hutaginjang', 'taput', 'hutaginjang.jfif', 'https://goo.gl/maps/RQNCGaVRvuQ2', ''),
(5, 'Pondok Wisata Samosir', 'Samosir', 'pondokwisatasamosir.jpg', 'https://goo.gl/maps/7hbC1jzGyX72', 'Nyaman'),
(6, 'Bukit Holbung', 'Samosir', 'holbung.jpg', 'https://goo.gl/maps/vpTRrJhkj6y', 'indah'),
(7, 'Air Terjun Efrata', 'samosir', 'airterjun.jpg', 'https://goo.gl/maps/FcPFwZMYH8D2', ''),
(8, 'Bukit Beta', 'samosir', 'bukitbeta.jpg', 'https://goo.gl/maps/ZupSAXK8xQo', ''),
(15, 'Pemandian Air Panas Sipoholon', 'taput', 'airpanassipoholon.PNG', 'https://goo.gl/maps/7Hd6btuGyir', ''),
(16, 'Air Panas Tamaro', 'humbahas', 'airpanasTamaro.jfif', 'https://goo.gl/maps/nxQxaGDeq1m', ''),
(17, 'Gibeon', 'tobasa', 'gibeon.jfif', 'https://goo.gl/maps/HNZVnSewNx12', ''),
(18, 'Air Terjun Bah Biak', 'simalungun', 'bah biak.jpg', 'https://goo.gl/maps/JTFazvhzYQ82', ''),
(19, 'Bukit Indah Simarjarunjung', 'simalungun', 'Bis.jpg', 'https://goo.gl/maps/YnhuXWw3zgH2', ''),
(20, 'Kebun teh sidamanik', 'simalungun', 'kebun teh sidamani.jpg', 'https://goo.gl/maps/BppDCk3ZSrs', ''),
(21, 'Sipincur', 'humbahas', 'sipincur.jfif', 'https://goo.gl/maps/N8Zk4knRcYr', ''),
(22, 'Sitiotio', 'humbahas', 'sitiotio.jfif', 'https://goo.gl/maps/2gGpTb8hE2L2', ''),
(23, 'Sulusulu', 'humbahas', 'sulusulu.jfif', 'https://goo.gl/maps/ZPmGHjXdXV52', ''),
(24, 'Air terjun janji', 'humbahas', 'terjunjanji.jfif', 'https://goo.gl/maps/6FqjhybCnSH2', ''),
(25, 'LumbanSilintong', 'tobasa', 'lumbansilintong.jfif', 'https://goo.gl/maps/QjmyVUhxqwM2', ''),
(26, 'Bulbul', 'tobasa', 'bulbul.jfif', 'https://goo.gl/maps/fSHNGn7bRMm', ''),
(27, 'Parparean', 'tobasa', 'parparean.jfif', 'https://goo.gl/maps/wr5BxDcPLmz', ''),
(28, 'Taman Eden', 'tobasa', 'tamaneden.jfif', 'https://goo.gl/maps/hH5mjCBaP5o', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `nama_kabupaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `nama_kabupaten`) VALUES
(1, 'Simalungun'),
(2, ''),
(3, ''),
(4, 'Simalungun'),
(5, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kulinerr`
--

CREATE TABLE `kulinerr` (
  `idKuliner` int(200) NOT NULL,
  `namatTempat` varchar(200) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `kontak` varchar(200) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `foto_kuliner` varchar(200) NOT NULL,
  `buka` varchar(200) NOT NULL,
  `map` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kulinerr`
--

INSERT INTO `kulinerr` (`idKuliner`, `namatTempat`, `Alamat`, `kontak`, `deskripsi`, `foto_kuliner`, `buka`, `map`) VALUES
(4, 'Smile Coffeee', 'Jalan Patuan Nagari, Kelurahan No.mor 46, Sangkar Nihuta, Balige, Kabupaten Toba Samosir, Sumatera Utara 22313', '0821-6430-7259', 'nyaman', 'smilecoffee.jpg', 'setiap hari', 'https://goo.gl/maps/wwJhqxRqw2y'),
(5, 'Toba Bakery', 'Jalan Sisingamangaraja, Kelurahan No.85 D, Balige II, Balige, Kabupaten Toba Samosir, Sumatera Utara 22312', '0853-7606-9802', 'toba-bakery.business.site', 'TobaBakery.jpg', 'setiap hari 08.00-21.00', 'https://goo.gl/maps/DuR8AuM3jgQ2'),
(6, 'Rumah Makan Batak Meat Nauli', 'Jl. Gereja, Lumban Dolok Haume Bange, Balige, Kabupaten Toba Samosir, Sumatera Utara', '0853-7606-9803', 'nyaman - santai -', 'RM.MeatNauli.jpg', 'setiap hari 08.00-21.00', 'https://goo.gl/maps/zzhZtFSL69y'),
(9, 'Kedai kopi hello Toba', 'Sibola Hotangsas, Balige, Kabupaten Toba Samosir, Sumatera Utara', '0812-6020-3600', 'nyaman - tunai', 'KedaiKopiHelloToba.jpg', 'setiap hari', 'https://goo.gl/maps/hvc1e3vuzND2'),
(10, 'Saung Bambu', 'Jalan Gotting, Lumban Pea Tim., Balige, Kabupaten Toba Samosir, Sumatera Utara', '0813-9682-1275', 'nyaman . santai', 'SaungBambu.jpg', 'setiap hari - 10.00-21.30', 'https://goo.gl/maps/fjiPDqbTpEo'),
(11, 'RM. Fly Over laguboti', 'Jl. Siborong Borong - Parapat No.22, Pardomuan Nauli, Lagu Boti, Kabupaten Toba Samosir, Sumatera Utara 22381', '0823-6228-5015', 'nyaman . santai', 'RM.FlyOver.jpg', 'setiap hari - 07.00-21.00', 'https://goo.gl/maps/mt6cY8CD3R72'),
(12, 'Hutanta Cafe', 'Jl. P. Siantar No.KM 2, Sibola Hotangsas, Balige, Kabupaten Toba Samosir, Sumatera Utara 22312', '0811-6201-680', 'nyaman . santai . berkelompok', 'HutantaCafe.jpg', 'setiap hari - 09.00-22.00', 'https://goo.gl/maps/S9YaRxDtDJB2'),
(13, 'Toba Corner Restaurant', 'Pardede Onan, Balige, Kabupaten Toba Samosir, Sumatera Utara', '', 'nyaman . santai . cocok untuk anak-anak', 'tobaCorner.jpg', 'setiap hari 08.00-20.00', 'https://goo.gl/maps/TZgit2bE8cN2'),
(14, 'Istana Minang 2 Restaurant', 'Jl. Sisingamangaraja No.72, Naga Huta, Siantar Marihat, Kota Pematang Siantar, Sumatera Utara 21114', '(0625) 41262', 'nyaman . santai . cocok untuk anak-anak', 'IstanaMinang2.jpg', 'setiap hari - 08.00-23.00', 'https://goo.gl/maps/8vL98dU3jan'),
(15, 'Minang Gumarang Restaurant', 'Jl. Sisinga Mangaraja, Tiga Raja, Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174', '0812-6207-210', 'nyaman . cocok untuk anak-anak . berkelompok', 'MinangGumarang.jpg', 'setiap hari', 'https://goo.gl/maps/Vam8cwULLSD2'),
(16, 'Restaurant Asia', 'Tiga Raja, Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174', '0853-7606-4388', 'nyaman . santai . cocok untuk anak-anak', 'RestaurantAsia.jpg', 'setiap hari - 07.30-21.30', 'https://goo.gl/maps/5PWAoUxbCjF2'),
(17, 'Singgalang', 'Jl. Sisingamangaraja No. 52, Prapat, Girsang Sipangan Bolon, Tiga Raja, Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174', '(0625) 41260', 'nyaman . santai . cocok untuk anak-anak', 'Singgalang.jpg', 'setiap hari - 07.00-22.00', 'https://goo.gl/maps/KH2Vbf47JTk'),
(18, 'Restoran Hong Kong', 'Jl. Haranggaol, Tiga Raja, Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174', '(0625) 41395', 'santai . cocok untuk anak-anak . berkelompok', 'RestoranHongKong.jpg', 'setiap hari - 24 jam', 'https://goo.gl/maps/xDFMXeXCk252'),
(19, 'BKaro Coffee Shop', 'Jl. Haranggaol, Tiga Raja, Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174', '(0625) 41306', 'hanya uang tunai . nyaman . santai', 'BKaro.jpg', 'setiap hari - 08.00-19.00', 'https://goo.gl/maps/4d6ev3xMXHq'),
(20, 'Setapac Cafe', 'Jl. Haranggaol, Tiga Raja, Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara 21174', '0852-8478-8218', 'hanya uang tunai . nyaman . santai', 'Setapac.jpg', '', 'https://goo.gl/maps/DTqRGsmrNtK2'),
(22, 'Pora Pora Coffee Shop', 'Parapat, Girsang Sipangan Bolon, Kabupaten Simalungun, Sumatera Utara', '0813-6004-6431', 'nyaman . santai . berkelompok', 'PoraPoraCoffeeShop.jpg', '', 'https://goo.gl/maps/FHn1o7pibek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `username`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'joni123', 'joni@yahoo.com', 'joni123', 'Joni', '08123213121', 'Medan'),
(2, 'mustova123', 'mustofanababan@yahoo.co.id', 'mustova', 'mustova', '082222222222', 'medan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(1, 1, 'hoho', 'mandiri', 100000, '2019-01-17', '201901170944333.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaranbooking`
--

CREATE TABLE `pembayaranbooking` (
  `id_pembayaran` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaranbooking`
--

INSERT INTO `pembayaranbooking` (`id_pembayaran`, `id`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(1, 1, 'Joni', 'BRI', 150000, '2019-01-17', '201901170943022.png'),
(2, 2, 'Joni', 'Mandiri', 450000, '2019-01-17', '20190117095753wea.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `resi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `tanggal_pembelian`, `total_pembelian`, `alamat_pengiriman`, `resi`, `status`) VALUES
(1, 1, '2019-01-17', 50000, '', '', ''),
(2, 2, '2020-11-03', 100000, '', '', 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`) VALUES
(1, 4, 18, 0),
(2, 5, 18, 190),
(3, 1, 19, 1),
(4, 2, 18, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok_produk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`, `stok_produk`) VALUES
(18, 'Miniatur', 100000, 5000, 'miniatur.jpg', 'Hiasan yang indah untuk dibawa je rumah andaa', 1),
(19, 'Kain tenun', 50000, 3000, 'kain tenun.jpg', 'Kain yang cocok sebagai oleh-oleh', 31),
(20, 'Gantungan', 10000, 1000, 'sialagan.JPG', 'Bagus', 47),
(21, 'Pahatan Kayu', 100000, 5000, 'pahatan.jpg', 'Pahatan indah', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `souvenir`
--

CREATE TABLE `souvenir` (
  `id_souvenir` int(11) NOT NULL,
  `namaTempat` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `fotosouvenir` varchar(100) NOT NULL,
  `buka` varchar(50) NOT NULL,
  `map` varchar(200) NOT NULL,
  `produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `souvenir`
--

INSERT INTO `souvenir` (`id_souvenir`, `namaTempat`, `alamat`, `deskripsi`, `fotosouvenir`, `buka`, `map`, `produk`) VALUES
(1, 'Batikta', 'Jl. Pematang Siantar Km. 2 | Tampubolon Balige, Balige 22315, Indonesia ', 'Murah meriah dan berkualitas', 'batikta.jpg', 'Setiap hari', 'https://www.google.co.id/maps/place/Batikta', 'batik batak, kaos batak '),
(2, 'Pasar Tomok', 'Samosir', 'Pasar Tomok menyediakan  souvenir khas batak', 'tomok.jpg', 'setiap hari', 'https://www.google.co.id/maps/place/Pasar+TOMOK', ' gorga batak,ulos batak dan aneka pernak-pernik lainya'),
(3, 'sialagan pinda raya', 'Huta Siallagan,Ambarita', 'Murah meriah,tahan lama dan fashionable', 'sialagan.jpg', 'setiap hari', 'https://www.google.co.id/maps/place/Souvenir+Shop+Siallagan', 'menjual pakaian ulos,gorga dan pustaha'),
(4, 'Marysca Souvenir', 'Tuktuk Siadong-adong,Pulau Samosir', 'Marysca Souvenir ada ratusan bahkan ribuan Souvenir ciri khas ornamen batak yang dijual.', 'tuk.jpg', 'Senin-jumat', 'https://www.google.co.id/maps/place/Marysca+Souvenir+Shop', 'ulos,kalung,gelang\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportasi`
--

CREATE TABLE `transportasi` (
  `id_transportasi` int(11) NOT NULL,
  `nama_driver` varchar(100) NOT NULL,
  `usia` int(10) NOT NULL,
  `notelp_driver` varchar(100) NOT NULL,
  `alamat_driver` varchar(100) NOT NULL,
  `foto_driver` varchar(200) NOT NULL,
  `nama_transportasi` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `tempat_duduk_transportasi` int(11) NOT NULL,
  `plat_transportasi` varchar(100) NOT NULL,
  `foto_transportasi` varchar(100) NOT NULL,
  `harga_transportasi` int(11) NOT NULL,
  `deskripsi_transportasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportasi`
--

INSERT INTO `transportasi` (`id_transportasi`, `nama_driver`, `usia`, `notelp_driver`, `alamat_driver`, `foto_driver`, `nama_transportasi`, `brand`, `tempat_duduk_transportasi`, `plat_transportasi`, `foto_transportasi`, `harga_transportasi`, `deskripsi_transportasi`) VALUES
(15, 'Jola', 20, '0812342234228', 'Silaen', 'images (9).jpg', 'Xenia', 'Daihatsu', 8, 'BK 2932 IJ', 'Daihatsu_Xenia.png', 450000, 'Bagus'),
(16, 'Amri', 39, '081282739201', 'Siantar', 'daihatsu-ayla.png', 'Ayla', 'Daihatsu', 8, 'BK 2312 IJ', 'daihatsu-ayla.png', 400000, 'Nyaman'),
(17, 'Cepo', 40, '082173829173', 'Laguboti', 'Daithatsu_Terios.png', 'Terios', 'Daihatsu', 10, 'BK 8392 IK', 'Daithatsu_Terios.png', 500000, 'Bagus'),
(18, 'Amrul', 21, '082383920183', 'Sitoluama', 'honda-jazz.png', 'Jazz', 'Honda', 8, 'BK 1111 YZ', 'honda-jazz.png', 350000, 'Bagus'),
(19, 'Datch', 29, '082363828291', 'Siantar Narumonda', 'download (2).jpg', 'Panther', 'Isuzu', 9, 'BB 2313 XZ', 'Isuzu_Panther.png', 400000, 'Bagus'),
(21, 'Ben', 27, '082372328482', 'Silaen', '', 'Elgrand', 'Nissan', 8, 'BB 2329 UY', 'Nissan_Elgrand.png', 450000, 'Bagus'),
(22, 'Hago', 29, '082378428291', 'Balige', 'images (7).jpg', 'APV', 'suzuki', 10, 'BB 2002 II', 'Suzuki_APV.png', 350000, 'Bagus'),
(23, 'Jobar', 22, '082384927238', 'Porsea', 'download (2).jpg', 'Ertiga', 'suzuki', 8, 'BK 9832 UI', 'Suzuki_Ertiga.png', 500000, 'Bagus'),
(24, 'Suzu', 39, '082347382940', 'Parparean', 'images (10).jpg', 'Agya', 'toyota', 8, 'BK 2344 LK', 'Toyota-Agya.png', 400000, 'Bagus'),
(25, 'Sudoku', 26, '082374828294', 'Sirumonda', 'images (7).jpg', 'Innova', 'toyota', 8, 'BK 2332 UI', 'Toyota_Innova.png', 450000, 'Bagus');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indeks untuk tabel `kulinerr`
--
ALTER TABLE `kulinerr`
  ADD PRIMARY KEY (`idKuliner`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pembayaranbooking`
--
ALTER TABLE `pembayaranbooking`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `souvenir`
--
ALTER TABLE `souvenir`
  ADD PRIMARY KEY (`id_souvenir`);

--
-- Indeks untuk tabel `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`id_transportasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id_destinasi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kulinerr`
--
ALTER TABLE `kulinerr`
  MODIFY `idKuliner` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pembayaranbooking`
--
ALTER TABLE `pembayaranbooking`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `id_transportasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
