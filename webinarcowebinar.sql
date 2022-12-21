-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 03:28 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webinarcowebinar`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailevent`
--

CREATE TABLE `detailevent` (
  `id` int(10) NOT NULL,
  `nama_webinar` varchar(30) NOT NULL,
  `pembicara` varchar(30) NOT NULL,
  `topik_webinar` varchar(30) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `durasi` int(10) NOT NULL,
  `batas_peserta` int(10) NOT NULL,
  `type_event` varchar(30) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailevent`
--

INSERT INTO `detailevent` (`id`, `nama_webinar`, `pembicara`, `topik_webinar`, `tanggal_mulai`, `waktu_mulai`, `durasi`, `batas_peserta`, `type_event`, `gambar`) VALUES
(1, 'test123', 'test123', 'test123', '2022-12-21', '21:27:00', 5, 5, 'Gratis + sertifikat', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailevent`
--
ALTER TABLE `detailevent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailevent`
--
ALTER TABLE `detailevent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
