-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 05:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailevent`
--

CREATE TABLE `detailevent` (
  `id` int(11) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `nama_event` varchar(1000) NOT NULL,
  `tipe_event` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `durasi` int(10) NOT NULL,
  `pemateri` varchar(100) NOT NULL,
  `topik` varchar(100) NOT NULL,
  `waktu_mulai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailevent`
--

INSERT INTO `detailevent` (`id`, `gambar`, `nama_event`, `tipe_event`, `mulai`, `durasi`, `pemateri`, `topik`, `waktu_mulai`) VALUES
(32, 'Gambar/Webminar/CORONa.jpeg', 'Waspada Covid-19 ', 'Gratis (tanpa sertifikat)', '2020-12-15', 90, 'Dr. Dadang', 'COVID-19', '12:00:00'),
(33, 'Gambar/Webminar/hari-bumi-sedunia-5ea1ce0e097f360170580732.jpg', 'SNIA Unjani', 'Gratis + sertifikat', '2020-12-08', 69, 'Rachma Dhian S.KOM., M.T', 'Cinta Bumi', '13:00:00'),
(34, 'Gambar/Webminar/android_2019_logo_2.jpg', 'Android For Live', 'Gratis (tanpa sertifikat)', '2020-12-15', 90, 'Dr. Dadang', 'Mobile Programing', '11:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `linkzoom`
--

CREATE TABLE `linkzoom` (
  `id` int(11) NOT NULL,
  `link_zoom` varchar(999) NOT NULL,
  `id_seminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linkzoom`
--

INSERT INTO `linkzoom` (`id`, `link_zoom`, `id_seminar`) VALUES
(10, 'Selamat anda Berhasil Terdaftar dalam Webinar.\r\nSilahkan Gunakan link berikut untuk bergabung : http://localhost/phpmyadmin/sql.php?server=1&db=kp&table=linkzoomhfghg', 55),
(27, 'lolll', 20),
(28, '7777', 21),
(29, 'yyy', 19),
(30, 'jjjjj', 19),
(37, '8l', 8),
(41, 'Selamat anda terdaftar sebagai Peserta SNIA Unjani gunaka link Berikut untuk bergabung : https://us02web.zoom.us/j/84995500958?pwd=N29QSW9LT1dkNEpCR0lodzNiWGNkQT09', 18),
(42, 'pesan lain webinar selain SNIA', 9),
(51, 'ubah pesan', 25),
(55, 'Gunakan Link Berikut : aaaaaa', 30),
(62, 'Silahkan Gunakan Link berikut : www.webinar.com', 32);

-- --------------------------------------------------------

--
-- Table structure for table `pesertaevent`
--

CREATE TABLE `pesertaevent` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor_whatsapp` varchar(15) NOT NULL,
  `kode_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesertaevent`
--

INSERT INTO `pesertaevent` (`id`, `nama`, `email`, `jenis_kelamin`, `tanggal_lahir`, `pekerjaan`, `alamat`, `nomor_whatsapp`, `kode_event`) VALUES
(190, 'Ghiffary Naufal', 'GhifaryNaufal@gmail.com', 'Laki - Laki', '2020-10-19', 'Mahasiswa', 'Bandung', '00000000', 19),
(192, 'Gumball', 'watterson@gmail.com', 'Laki - Laki', '2020-10-27', 'Pelajar', 'elmore west', '9999999', 18),
(193, 'Ghiffary', 'watterson@gmail.com', 'Laki - Laki', '2020-10-27', 'Pelajar', 'elmore west', '6281321021636', 18),
(194, 'Ghiffary', 'watterson@gmail.com', 'Laki - Laki', '2020-10-27', 'Pelajar', 'elmore west', '6281321021636', 9),
(195, 'Gumball', 'watterson@gmail.com', 'Laki - Laki', '2020-10-28', 'Pelajar', 'elmore west', '9999999', 9),
(199, 'Gumball', 'watterson@gmail.com', 'Laki - Laki', '2020-10-28', 'Pelajar', 'elmore west', '9999999', 25),
(200, 'Gumball', 'watterson@gmail.com', 'Laki - Laki', '2020-10-31', 'Pelajar', 'elmore west', '9999999', 26),
(201, '', '', '', '0000-00-00', '', '', '', 26),
(202, '', '', '', '0000-00-00', '', '', '', 26),
(203, '', '', '', '0000-00-00', '', '', '', 26),
(204, '', '', '', '0000-00-00', '', '', '', 26),
(205, '', '', '', '0000-00-00', '', '', '', 26),
(206, '', '', '', '0000-00-00', '', '', '', 26),
(207, 'AAAAAA', 'AAA', 'Perempuan', '2020-11-16', 'SSS', 'SSS', 'AAAA', 26),
(209, 'Dhian', 'Dhian@gmail.com', 'Laki - Laki', '2020-11-02', 'Pelajar', 'jl.unjani', '6281321021636', 30),
(213, 'Ghiffary', 'sya@gmail.com', 'Laki - Laki', '2020-12-14', 'Pelajar', 'unjani', '6281321021636', 32);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('Admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailevent`
--
ALTER TABLE `detailevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkzoom`
--
ALTER TABLE `linkzoom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesertaevent`
--
ALTER TABLE `pesertaevent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailevent`
--
ALTER TABLE `detailevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `linkzoom`
--
ALTER TABLE `linkzoom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `pesertaevent`
--
ALTER TABLE `pesertaevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
