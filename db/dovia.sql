-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2020 pada 03.34
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dovia`
--
CREATE DATABASE IF NOT EXISTS `dovia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dovia`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `user_admin` varchar(15) NOT NULL,
  `pass_admin` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `user_admin`, `pass_admin`) VALUES
(9, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500'),
(10, 'Maulaya Al-Farisi', 'maulaya', '202cb962ac59075b964b07152d234b70'),
(11, 'Ghadah Indri', 'gadah', 'e4e575cba7ab9d30e3d868cd748a81d7'),
(12, 'Dian Johan', 'dian ', '750f48161355ac52ad11c48ef5be70b6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'test 1'),
(2, 'test 2'),
(5, 'Grammar'),
(6, 'Verb 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id_post` int(5) NOT NULL,
  `judul_post` varchar(1000) NOT NULL,
  `isi_post` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `gambar_post` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `judul_post`, `isi_post`, `id_kategori`, `gambar_post`) VALUES
(16, 'Test Postingan', 'sadasdasdasdasdasdasdasdasddasdadasasdasdasdasdadasdasdasdadadasdas <br>\r\nasdasdadasdadasdasdsadsadssdasdsadsadasdasdsadasdsadsadasdsdasdasdd <br>\r\n<h4> asasdsdasda</h4>\r\n<p> hadhakjdhkjashdkjashkjdhaskjdkjsahdkjahskjdhsdhkashdkjashdkjahskjhd</p>\r\n<b>asdhaskjdhasjkdhkjashdkjsahkjdh<i>hadjhasjdhasj</i>hdakjjhdkashdkjsd</b>\r\n<i>hadjhasjdhasjasdasdasdsadsadasdasdsadasdsadsadsdadasdasdadasdsadd</i>\r\n<u>hadjsdfasdasdadasdadasdasdasdsdasdsadasdasdasdasdasdsdashasjdhasj</u>', 6, 'level proses.PNG'),
(17, 'Postingan Test II', 'sadasdasdasdasdasdasdasdasddasdadasasdasdasdasdadasdasdasdadadasdas <br>\r\nasdasdadasdadasdasdsadsadssdasdsadsadasdasdsadasdsadsadasdsdasdasdd <br>\r\n<h4> asasdsdasda</h4>\r\n<p> hadhakjdhkjashdkjashkjdhaskjdkjsahdkjahskjdhsdhkashdkjashdkjahskjhd</p>\r\n<b>asdhaskjdhasjkdhkjashdkjsahkjdh<i>hadjhasjdhasj</i>hdakjjhdkashdkjsd</b>\r\n<i>hadjhasjdhasjasdasdasdsadsadasdasdsadasdsadsadsdadasdasdadasdsadd</i>\r\n<u>hadjsdfasdasdadasdadasdasdasdsdasdsadasdasdasdasdasdsdashasjdhasj</u>', 5, 'website.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `no_telp` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_data`
--

INSERT INTO `user_data` (`id`, `nama`, `email`, `password`, `no_telp`) VALUES
(2, 'Maulaya Shalih Al-Farisi', 'maulaya@gmail.com', 'admin123', 123),
(3, 'Ghadah Indri Argianti', 'gadah@gmail.com', 'gadah123', 752812121);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
