-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 03:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lembahindah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `stok` int(10) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT current_timestamp(),
  `deskripsi1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kategori`, `nama`, `harga`, `foto`, `stok`, `tanggal_upload`, `deskripsi1`) VALUES
(4, 'stroller', 'tenda untuk 2 orang', 50000, 'tenda2orang.PNG', 8, '2022-06-14 13:12:11', 'tenda untuk 2 orang hanya selapis, jadi saat hujan direkomendasikan untuk menyewa flysheet'),
(5, 'tenda', 'tenda untuk 4 orang', 75000, 'tenda4orang.PNG', 10, '2022-06-14 13:12:17', 'tenda untuk orang mempunyai lapisan double, jadi saat hujan tidak memerlukan flysheet'),
(6, 'tenda', 'tenda untuk 6 orang', 100000, 'tenda6orang.PNG', 10, '2022-06-14 13:12:23', 'tenda untuk 6 orang ini mempunyai lapisan double, jika hujan tidak memerlukan flysheet dan juga memiliki matras didalamnya'),
(10, 'tenda', 'flysheet', 10000, 'flysheet.PNG', 10, '2022-06-29 13:55:27', 'flysheet untuk melindungi tenda saat terjadinya hujan'),
(11, 'tenda', 'matras', 5000, 'matras.PNG', 10, '2022-06-29 13:56:55', 'matras untuk menghangatkan tubuh dan juga melindungi tubuh agar tidak terkena struktur tanah yang kurang bagus'),
(12, 'tenda', 'bantal tiup', 5000, 'bantal.PNG', 10, '2022-06-29 13:59:37', 'bantap tiup untuk kenyamanan saat beristirahat'),
(13, 'memasak', 'grill pan', 15000, 'grillpan.PNG', 10, '2022-06-29 14:00:32', 'grill pan untuk memamanggang / memasak makanan'),
(14, 'memasak', 'kompor portable', 20000, 'kompor.PNG', 7, '2023-05-19 08:01:34', 'kompor portable membantu anda untuk memasak sesuatu'),
(16, 'memasak', 'Talenan dan Pisau', 10000, 'telenan.PNG', 8, '2023-05-29 16:38:32', 'Telenan dan Pisau sangat cocok untuk anda yang akan memasak sesuatu !!!'),
(17, 'makanan', 'Set Alat Makan', 10000, 'setalatmakan.PNG', 12, '2023-05-29 16:40:20', 'Set Alat Makan ini terdiri dari 2 mangkok, 1 piring, 2 gelas, perlengkapan makan yang lain.'),
(18, 'makanan', 'Air Mineral', 10000, 'airmineral.PNG', 56, '2023-05-29 16:43:03', 'Air Mineral bisa untuk diminum maupun dimasak !!!'),
(19, 'makanan', 'Frozen Food', 35000, 'frozenfood.PNG', 25, '2023-05-29 16:44:00', 'Frozen Food terdiri dari nugget, bakso, suki mix, kentans stik, dimsum. semuanya 35.000. untuk memilih frozen food yang mana langsung diambil ditempat ya !!'),
(20, 'pencahayaan', 'Senter Kepala', 5000, 'senterkepala.PNG', 9, '2023-05-29 16:46:46', 'Senter Kepala dasdjosadsajdasjlda'),
(21, 'pencahayaan', 'Lampu Gantung', 5000, 'lampugantung.PNG', 11, '2023-05-29 16:46:46', 'Lampu Gantung qheoiwqjeasdasd'),
(22, 'pencahayaan', 'Senter', 5000, 'senter.PNG', 17, '2023-05-29 16:48:26', 'Senter sdasdsadsadasd');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `metode` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `ktp` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `tgl_diambil` date DEFAULT NULL,
  `tgl_dikembalikan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_user`, `id_produk`, `tipe`, `amount`, `metode`, `nama`, `alamat`, `nomor`, `email`, `note`, `ktp`, `status`, `tgl_diambil`, `tgl_dikembalikan`) VALUES
(21, 1, 5, '4 Minggu', 250000, 'Bayar di Kantor', 'aldo', 'banyu urip, banyu urip, sawahan, Surabaya, 60254', '08124566', 'aldopradana3@gmail.com', 'bagus', 'skuterin.png', 'Silahkan Ambil Di Kantor', '2022-06-29', '2022-07-28'),
(22, 2, 5, '1 Minggu', 100000, 'Bank Transfer', 'aldo', 'kapas madya, simokerto, pogot, Sidoarjo, 60755', '08124566', 'bellananda321@gmail.com', 'bagus', 'dewzsjo-0581130f-c95f-40d2-a1dd-618c9572670a.png', 'Menunggu Pembayaran', NULL, NULL),
(28, 8, 5, '1 Minggu', 100000, 'Bayar di Kantor', 'werwer', 'werwr, werwew, rwrwr, Surabaya, 342234', '234234', 'nugrahvarel@gmail.com', 'ewrwrwe', 'Colville National Forest - Camping & Cabins_Campgr', 'Menunggu Pembayaran', NULL, NULL),
(29, 7, 5, '1 Minggu', 100000, 'Bayar di Kantor', '123123', '123123, 1231231, 2321312, Surabaya, 3123', '1232131', '23123123', '1231', 'captain.png', 'Menunggu Pembayaran', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `nohp`, `email`, `password`) VALUES
(1, 'Nugraha Varrel Kusuma', 'kebraon', '0821312', 'naew@gmail.com', '12345'),
(2, 'Nugraha Varrel Kusuma', 'simo', '2131', 'nugrahavarel@gmail.com', '12345'),
(3, 'varel', 'kebraon', '082132222131', 'nugrahavarel@gmail.com', '12345'),
(4, 'Yuaini', 'Mojokerto', '098754567', 'yuaini2016@gmail.com', 'Yuaini06'),
(5, 'shinta', 'jalan melati', '0897654323', 'shinta@gmail.com', '123'),
(6, 'shintadwi', 'jalan mawar', '08865432', 'shintadwi@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
