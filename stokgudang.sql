-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 04:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stokgudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID_barang` int(8) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `harga_barang` int(24) NOT NULL,
  `stok_barang` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_barang`, `nama_barang`, `jenis_barang`, `harga_barang`, `stok_barang`) VALUES
(20200002, 'Logitech G102', 'Mouse', 200000, 70),
(20200003, 'Asus A456UR', 'Laptop', 5000000, 20),
(20200004, 'HP All-in-One EliteOne 800 G4 (Core i7-8700)', 'Komputer', 20000000, 60),
(20200005, 'SteelSeries Arctis 3 White/Black 7.1', 'Headset', 900000, 63),
(20200006, 'Knowledge Zenith KZ ZSN - In Ear Earphone - HYBRID Dual DRIVER', 'Earphone', 239000, 16),
(20200007, 'LED MONITOR LG 19M38A', 'Monitor', 895000, 20),
(20200008, 'Redmi Note 9 (4GB+64GB)', 'Handphone', 2299000, 20),
(20200009, 'Yamaha Gitar Klasik C-315', 'Gitar', 849000, 20),
(20200010, 'SanDisk CZ50 Cruzer Blade (16 GB)', 'Flashdisk', 50000, 20),
(20200011, 'Logitech F710 Wireless Gamepad', 'Joystick', 579000, 20),
(20200012, 'Deep Cool WindPal Mini Laptop Cooling Pad Fan', 'Cooling Pad', 101000, 25),
(20200013, 'Steelseries RIVAL 105', 'Mouse', 388000, 13),
(20200014, 'Lenovo Thinkpad T440s', 'Laptop', 4250000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `ID_pegawai` int(8) NOT NULL,
  `nama_pegawai` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`ID_pegawai`, `nama_pegawai`, `username`, `password`) VALUES
(20201101, 'Daud Dimas Prasetyo', 'dauddimas', '21232f297a57a5a743894a0e4a801fc3'),
(20201102, 'Edho Sulenda Satrio Pambudi', 'edhossp', '21232f297a57a5a743894a0e4a801fc3'),
(20201103, 'Bernita', 'bernita', '21232f297a57a5a743894a0e4a801fc3'),
(20201105, 'Ichsan Arsyi Putra', 'ichsanap', '21232f297a57a5a743894a0e4a801fc3'),
(20201106, 'Tata', 'tata', '21232f297a57a5a743894a0e4a801fc3'),
(20201107, 'Ahmad H', 'ahmadh', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_barang`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`ID_pegawai`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `ID_barang` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20200016;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `ID_pegawai` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20201108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
