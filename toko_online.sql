-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 04:00 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Tanaman Anggrek Malang', 'Anggrek rawat 6 bulan asli Malang', 'Tanaman_Hias', 10000, 9, 'anggrek.jpg'),
(2, 'Kayu Manis', 'Tanaman herbal kayu manis asli Malang', 'Tanaman_Herbal', 2000, 14, 'kayumanis.jpg'),
(6, 'Tanaman Buah Jeruk', 'Tanaman buah seruk banyuwangi terkenal manis', 'Tanaman_Buah', 15000, 30, '802962077.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blogspot`
--

CREATE TABLE `tb_blogspot` (
  `id_deskripsi` int(11) NOT NULL,
  `nama_deskripsi` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_blogspot`
--

INSERT INTO `tb_blogspot` (`id_deskripsi`, `nama_deskripsi`, `deskripsi`, `gambar`) VALUES
(1, 'Cara menanam Anggrek', 'Cara Menanam Anggrek Cara menanam anggrek pada umumnya hampir sama dengan tanaman hias yang lain. Hanya saja ada pengaruh dari beberapa faktor agar tanaman anggrek dapat hidup dan berbunga dengan baik. Berikut beberapa hal yang perlu diperhatikan dalam cara menanam Anggrek:  1. Pemilihan bibit unggul Secara genotip bibit yang baik berasal dari induk yang sehat, rajin berbunga, bunganya banyak dengan warna cerah dan tidak mudah layu. Perbanyakan bibit dapat secara generatif dengan biji atau secara vegetatif melalui pemisahan anakan.     2. Faktor lingkungan Faktor lingkungan sangat berpengaruh terhadap kemampuan tanaman anggrek dalam berbunga. Faktor lingkungan yang sangat berpengaruh pada pertumbuhan dan berbunganya anggrek adalah :     Intensitas Cahaya Intensitas cahaya berpengaruh pada pertumbuhan dan perkembangan anggrek tergantung pada jenis, ukuran dan umur tanaman, biasanya berkisar antara 1500 – 5000 fc.', 'anggrek31.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'michael', 'jl gunung ceneng 1', '2019-11-29 14:39:31', '2019-11-29 14:39:31'),
(2, 'asd', 'asd', '2019-11-29 14:48:38', '2019-11-29 14:48:38'),
(3, 'Joseph stalin', 'jl staliningrat 69', '2019-11-30 22:11:05', '2019-11-30 22:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_barang`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 1, 'Tanaman Anggrek Malang', 1, 10000, ''),
(2, 2, 2, 'Kayu Manis', 1, 2000, ''),
(3, 3, 1, 'Tanaman Anggrek Malang', 1, 10000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_barang = NEW.id_barang;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '12345', 2),
(5, 'ikeng', 'ikeng', '123', 2),
(7, 'stalin', 'stalin', 'gulag', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_blogspot`
--
ALTER TABLE `tb_blogspot`
  ADD PRIMARY KEY (`id_deskripsi`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_blogspot`
--
ALTER TABLE `tb_blogspot`
  MODIFY `id_deskripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
