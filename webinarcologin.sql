-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2023 pada 17.45
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webinarcologin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'regular-user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 1),
(1, 2),
(1, 2),
(1, 3),
(1, 3),
(2, 2),
(2, 2),
(2, 4),
(2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 3),
(2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-13 21:02:18', 1),
(2, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-13 21:19:06', 1),
(3, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-13 21:21:41', 1),
(4, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-13 21:30:16', 1),
(5, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-13 21:31:04', 1),
(6, '::1', 'ryadhelmi@gmail.com', 2, '2022-12-13 21:45:52', 1),
(7, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-14 04:22:55', 1),
(8, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-14 04:27:09', 1),
(9, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-14 07:00:51', 1),
(10, '::1', 'setyokecap@gmail.com', 3, '2022-12-14 07:06:06', 1),
(11, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-14 08:06:44', 1),
(12, '::1', 'SetyoArie', NULL, '2022-12-14 10:49:58', 0),
(13, '::1', 'setyokecap@gmail.com', 3, '2022-12-14 10:50:12', 1),
(14, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-14 10:55:59', 1),
(15, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-14 11:38:14', 1),
(16, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-15 01:21:56', 1),
(17, '::1', 'rifqikarunia', NULL, '2022-12-15 01:38:29', 0),
(18, '::1', 'rifqikarunia', NULL, '2022-12-15 01:38:46', 0),
(19, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-15 01:39:01', 1),
(20, '::1', 'rifkikarunia', NULL, '2022-12-15 01:49:21', 0),
(21, '::1', 'rifqikaruniaibadirachman.9a@gmail.com', 4, '2022-12-15 01:49:37', 1),
(22, '::1', 'rifqikaruniaibadirachman.9a@gmail.com', 4, '2022-12-16 06:12:04', 1),
(23, '::1', 'setyoarie', NULL, '2022-12-16 12:29:34', 0),
(24, '::1', 'setyokecap@gmail.com', 3, '2022-12-16 12:29:50', 1),
(25, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 12:30:12', 1),
(26, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 12:38:50', 1),
(27, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 12:40:51', 1),
(28, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 20:19:40', 1),
(29, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 20:36:36', 1),
(30, '::1', 'setyoarie', NULL, '2022-12-16 20:40:45', 0),
(31, '::1', 'setyokecap@gmail.com', 3, '2022-12-16 20:41:00', 1),
(32, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 20:41:22', 1),
(33, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 20:43:51', 1),
(34, '::1', 'setyokecap@gmail.com', 3, '2022-12-16 20:47:36', 1),
(35, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 20:47:53', 1),
(36, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 20:56:08', 1),
(37, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 20:57:54', 1),
(38, '::1', 'rifqikaruniaibadirachman.9a@gmail.com', 4, '2022-12-16 20:59:13', 1),
(39, '::1', 'setyokecap@gmail.com', 3, '2022-12-16 20:59:30', 1),
(40, '::1', 'setyokecap@gmail.com', 3, '2022-12-16 21:04:20', 1),
(41, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 21:29:49', 1),
(42, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 21:52:12', 1),
(43, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 21:59:02', 1),
(44, '::1', 'setyokecap@gmail.com', 3, '2022-12-16 22:07:49', 1),
(45, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-16 22:32:20', 1),
(46, '::1', 'setyokecap@gmail.com', 3, '2022-12-16 22:32:53', 1),
(47, '::1', 'lugayamuktias', NULL, '2022-12-21 01:22:24', 0),
(48, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-21 01:22:35', 1),
(49, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-21 01:45:37', 1),
(50, '::1', 'rifqikaruniaibadirachman.9a@gmail.com', 4, '2022-12-21 01:48:28', 1),
(51, '::1', 'setyokecap@gmail.com', 3, '2022-12-21 02:08:04', 1),
(52, '::1', 'setyokecap@gmail.com', 3, '2022-12-22 19:18:59', 1),
(53, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-22 19:29:21', 1),
(54, '::1', 'setyokecap@gmail.com', 3, '2022-12-22 19:30:40', 1),
(55, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-22 19:32:46', 1),
(56, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-23 02:57:05', 1),
(57, '::1', 'lugayamuktias', NULL, '2022-12-23 07:25:56', 0),
(58, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-23 07:26:19', 1),
(59, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-25 07:25:10', 1),
(60, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-28 07:20:50', 1),
(61, '::1', 'setyokecap@gmail.com', 3, '2022-12-28 07:34:00', 1),
(62, '::1', 'lugayamuktias', NULL, '2022-12-28 07:35:55', 0),
(82, '::1', 'lugayamuktias', NULL, '2022-12-28 07:47:17', 0),
(83, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-28 07:47:27', 1),
(84, '::1', 'setyokecap@gmail.com', 3, '2022-12-28 10:16:59', 1),
(85, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-28 10:36:19', 1),
(86, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-28 11:11:44', 1),
(87, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-28 18:08:33', 1),
(88, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-28 20:24:45', 1),
(89, '::1', 'setyokecap@gmail.com', 3, '2022-12-28 20:33:52', 1),
(90, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-28 21:30:05', 1),
(91, '::1', 'setyokecap@gmail.com', 3, '2022-12-28 23:34:53', 1),
(92, '::1', 'lugayamuktias@gmail.com', 1, '2022-12-29 00:10:15', 1),
(93, '::1', 'lugayamuktias@gmail.com', 1, '2023-01-03 03:09:44', 1),
(94, '::1', 'lugayamuktias@gmail.com', 1, '2023-01-03 03:10:07', 1),
(95, '::1', 'lugayamuktias@gmail.com', NULL, '2023-01-03 03:21:46', 0),
(96, '::1', 'lugayamuktias@gmail.com', 1, '2023-01-03 03:21:55', 1),
(97, '::1', 'lugayamuktias@gmail.com', 1, '2023-01-03 09:46:19', 1),
(98, '::1', 'gheralnaza@gmail.com', 5, '2023-01-03 09:47:52', 1),
(99, '::1', 'lugayamuktias@gmail.com', 1, '2023-01-03 09:48:50', 1),
(100, '::1', 'setyokecap@gmail.com', 3, '2023-01-03 10:40:20', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage User\'s profile'),
(3, 'Manage-Webinar', 'Create, Edit and Delete Webinar'),
(4, 'Register-Webinar', 'Manage Registration Webinar Sebagai User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailevent`
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
  `type_event` varchar(30) DEFAULT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detailevent`
--

INSERT INTO `detailevent` (`id`, `nama_webinar`, `pembicara`, `topik_webinar`, `tanggal_mulai`, `waktu_mulai`, `durasi`, `batas_peserta`, `type_event`, `gambar`) VALUES
(1, 'test123', 'test123', 'test123', '2022-12-21', '21:27:00', 5, 5, 'Gratis + sertifikat', ''),
(3, 'asdasdasd', 'asdasdasd', 'sadsadasd', '2022-12-31', '17:53:00', 56, 59, 'Gratis (tanpa sertifikat)', ''),
(4, 'sadasdsadasd', 'sadsadasdasdasd', '', '2022-12-31', '13:30:00', 51, 58, 'Gratis + sertifikat', ''),
(5, 'Seminar Software', 'H. Rizki', 'Membuat Perangkat Lunak', '2022-12-30', '22:00:00', 200, 300, 'Gratis + sertifikat', ''),
(13, 'Keamanan3', 'Pak Dedi', 'Keamanan3', '2023-01-05', '23:33:00', 444, 444, 'Gratis (tanpa sertifikat)', 'Foto-Lugaya.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1670983015, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpeserta`
--

CREATE TABLE `tbpeserta` (
  `idpeserta` int(5) NOT NULL,
  `namapeserta` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `address` varchar(500) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `idwebinar` int(5) NOT NULL,
  `namawebinar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbpeserta`
--

INSERT INTO `tbpeserta` (`idpeserta`, `namapeserta`, `tgllahir`, `jeniskelamin`, `notelp`, `address`, `pekerjaan`, `idwebinar`, `namawebinar`) VALUES
(1, 'udin', '2012-08-17', 'Laki - laki', '08123456789', 'Jl. Yuk 123', 'Mahasiswa', 1, 'Webinar 1'),
(2, 'Siti', '2012-05-11', 'Perempuan', '08123456789', 'Kebon Awi no 58', 'Mahasiswa', 2, 'Webinar 1'),
(3, 'udin', '2012-08-17', 'Laki - laki', '08123456789', 'Jl. Yuk 123', 'Mahasiswa', 1, 'Webinar 1'),
(4, 'Siti', '2012-05-11', 'Perempuan', '08123456789', 'Kebon Awi no 58', 'Mahasiswa', 2, 'Webinar 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'lugayamuktias@gmail.com', 'lugayamuktias', '$2y$10$D61059pWSYsJ/GBcjQvFk.5Bty/ePeOVF89JGVjbjTdYwhrj6jFOq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-13 21:02:07', '2022-12-13 21:02:07', NULL),
(2, 'ryadhelmi@gmail.com', 'ryadhelmi', '$2y$10$ZHrEdAxZDTuji9o9M6Kc2uGr2GYjUdvfdp7Dde0A64GsYVHwlectC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-13 21:45:42', '2022-12-13 21:45:42', NULL),
(3, 'setyokecap@gmail.com', 'SetyoArie', '$2y$10$EJVVjDx.mPfE1Dm0xjJSe.MLrEgkAkNvKO5qT6NuzCNmDsWXn4A8S', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-14 07:05:45', '2022-12-14 07:05:45', NULL),
(5, 'gheralnaza@gmail.com', 'gheralNaza', '$2y$10$R6xUw2b5QuQ6vvpBIY.s9edwXq.3qnNuPeoTauGr8Zaj5syJBUEg2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-01-03 09:47:42', '2023-01-03 09:47:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `detailevent`
--
ALTER TABLE `detailevent`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbpeserta`
--
ALTER TABLE `tbpeserta`
  ADD PRIMARY KEY (`idpeserta`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `detailevent`
--
ALTER TABLE `detailevent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbpeserta`
--
ALTER TABLE `tbpeserta`
  MODIFY `idpeserta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
