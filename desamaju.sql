-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2020 at 02:20 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desamaju`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `image`, `url`) VALUES
(1, 'MYOB', 'client-1.png', '-'),
(2, 'BELIMO', 'client-2.png', '-'),
(3, 'LifeGroups', 'client-3.png', '-'),
(4, 'Lilly', 'client-4.png', '-'),
(5, 'citrus', 'client-5.png', '-'),
(6, 'Trustly', 'client-6.png', '-'),
(7, 'oldendorff', 'client-7.png', '-'),
(8, 'grabyo', 'client-8.png', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kata_kata`
--

CREATE TABLE `kata_kata` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kata_kata`
--

INSERT INTO `kata_kata` (`id`, `name`, `jabatan`, `isi`, `image`) VALUES
(1, 'Cak Thoriq', 'Bupati Kabupaten Lumajang', 'Teknologi dapat merubah manusia, teknologi dapat membantu cara kerja manusia, desa maju harapan kita bersama.', 'testimonial-1.jpg'),
(2, 'Bunda Indah', 'Wakil Bupati Kabupaten Lumajang', 'Kami sangat mendukung smart city, smart village demi terciptanya masyarakat yang melek IT dan teknologi untuk kesejahteran warga kami.', 'testimonial-2.jpg'),
(3, 'Dewi', 'Plt. Dinas Komunikasi dan Informatika', 'Sangat mendukung program DESAMAJU.id, dapat membantu mewujudkan program pemerintah indonesia maju. Mengawal dan membangun dari desa.', 'testimonial-3.jpg'),
(4, 'Ir. H. Widayat', 'Pensiunan BUMN', 'Dengan menerapkan desa digital, menyampaikan anspirasi masyarakat lebih mudah hanya dengan menggunakan salah satu aplikasi LAPOR.', 'testimonial-4.jpg'),
(5, 'Muhammad Akbar Bin Widayat', 'Wiraswasta', 'Saya sangat berterimakasih atas usaha untuk mendirikan desa maju dengan membenahi infratruktur yang ada, internet ada di mana-mana.', 'testimonial-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `icon` varchar(128) NOT NULL,
  `color` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `name`, `isi`, `icon`, `color`) VALUES
(1, 'Infrastruktur', 'Wifi, akses jaringan internet hostpot sangat dibutuhkan untuk mendapatkan informasi yang uptodate. CCTV, untuk memantau keamanan di ruas-ruas jalan desa.', 'ion-ios-analytics-outline', '#ff689b'),
(2, 'E-Goverment', 'E-siskamling, E-simkeudes, E-aset, E-surat, E-Monev, E-sid, E-puskesmas, E-klinik, Smart-tani, Simpeg, Lapor pengaduan', 'ion-ios-bookmarks-outline', '#e9bf06'),
(3, 'Bisnis Online', 'Kulinerae, Marketplace, E-Commerce', 'ion-ios-paper-outline', '#3fcdc7'),
(4, 'Web Profil Desa', 'Harga pasar, UKM, Regulasi, Galery,', 'ion-ios-speedometer-outline', '#41cf2e'),
(5, 'Destinasi', 'Wisata, Kuliner, Perbankan, Pendidikan, Penginapan, Sewa Mobil, Service Mobil, Cuci Mobil, Salon Kecantikan, Pangkas Rambut, Jasa Pengiriman', 'ion-ios-world-outline', '#d6ff22'),
(6, 'Kesehatan', 'Rumah sakit, Puskesmas, Bidan, Perawat, Mantri, Apotik', 'ion-ios-clock-outline', '#4680ff');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `twitter` varchar(128) DEFAULT NULL,
  `facebook` varchar(128) DEFAULT NULL,
  `gplus` varchar(128) DEFAULT NULL,
  `linked_in` varchar(128) DEFAULT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `jabatan`, `twitter`, `facebook`, `gplus`, `linked_in`, `image`) VALUES
(1, 'Citra Darma Wida', 'Chief Executive Officer', NULL, NULL, NULL, NULL, 'team-1.jpg'),
(2, 'Tamara Firstanty', 'Product Manager', NULL, NULL, NULL, NULL, 'team-2.jpg'),
(3, 'Muhammad Akbar', 'CTO', NULL, NULL, NULL, NULL, 'team-3.jpg'),
(4, 'Widayat', 'Komisaris', NULL, NULL, NULL, NULL, 'team-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `sub_name` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `type` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `sub_name`, `image`, `type`) VALUES
(1, 'App 1', 'App', 'app1.jpg', 'app'),
(2, 'Web 3', 'Web', 'web3.jpg', 'web'),
(3, 'App 2', 'App', 'app2.jpg', 'app'),
(4, 'Card 2', 'Card', 'card2.jpg', 'card'),
(5, 'Web 2', 'Web', 'web2.jpg', 'web'),
(6, 'App 3', 'App', 'app3.jpg', 'app'),
(7, 'Card 1', 'Card', 'card1.jpg', 'card'),
(8, 'Card 3', 'Card', 'card3.jpg', 'card'),
(9, 'Web 1', 'Web', 'web1.jpg', 'web');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kata_kata`
--
ALTER TABLE `kata_kata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kata_kata`
--
ALTER TABLE `kata_kata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
