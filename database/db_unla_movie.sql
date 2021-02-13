-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 13 Feb 2021 pada 13.10
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_unla_movie`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_movie`
--

CREATE TABLE `tb_movie` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `genre` varchar(150) NOT NULL,
  `youtube_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_movie`
--

INSERT INTO `tb_movie` (`id`, `judul`, `genre`, `youtube_id`) VALUES
(1, 'Billie Elish - Bad Guy', 'Musik, Creepy, Apa weh', 'DyDfgMOUjCI'),
(2, 'Ariel Noah', 'Musik', 'asdsadsa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_movie`
--
ALTER TABLE `tb_movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_movie`
--
ALTER TABLE `tb_movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
