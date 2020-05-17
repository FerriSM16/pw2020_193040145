-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2020 pada 23.37
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apparel`
--

CREATE TABLE `apparel` (
  `id` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Merek` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Warna` varchar(100) NOT NULL,
  `Harga` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `apparel`
--

INSERT INTO `apparel` (`id`, `Foto`, `Merek`, `Model`, `Warna`, `Harga`) VALUES
(1, '1.jpg', 'Cardinal', 'Pakaian Pria dewasa', 'Hitam dan Putih', '135.000'),
(2, '2.jpg', 'Neil Allyn', 'Pakaian Pria dewasa', 'Putih', '1.208.000'),
(3, '3.jpg', 'Zara clothing', 'Pakaian Wanita(Cape Colar)', 'Coklat', '2.350.000'),
(4, '4.jpg', 'Burberry', 'Middy Collar', 'Kuning', '900.000'),
(5, '5.jpg', 'Armani', 'Kaos Wanita', 'Putih', '230.000'),
(6, '6.jpg', 'Gucci', 'Hoodie Peria/Wanita', 'Hitam', '809.000'),
(7, '7.jpg', 'Dior', 'Dresses Wanita', 'Biru Tua', '1.305.000'),
(8, '9.jpg', 'Louis Vuitton', 'Jeans Wanita', 'Biru Pudar', '374.950'),
(9, '8.jpg', 'levis', 'Celana Pria', 'Coklat Gelap', '203,000'),
(10, '10.jpg', 'UniqLo', 'Kaos Pria/Wanita', 'Putih', '500.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apparel`
--
ALTER TABLE `apparel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `apparel`
--
ALTER TABLE `apparel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
