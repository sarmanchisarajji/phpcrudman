-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2022 pada 23.03
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jobseeker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekrut`
--

CREATE TABLE `tb_rekrut` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rekrut`
--

INSERT INTO `tb_rekrut` (`id`, `username`, `email`, `kategori`, `jurusan`, `foto`) VALUES
(8, ' Wita Budiman', 'witab12345@gmail.com', 'D3', ' MIPA', ' witwit.jpg'),
(10, 'Habib', 'mashabib@gmail.com', 'S1', 'Teknik Industri', 'bibbib.jpg'),
(11, 'Afghani ahmad', 'anoell@gmail.com', 'D4', 'Kedokteran', 'null.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`) VALUES
('admin', '$2y$10$KxFHy9sh6WgLgbkuWPJU9.Z4Gd2NvB.exmyw6aHa0tSzqi7jNJSOu'),
('sarman', '$2y$10$EqCmqUTk1De3oydnFvBV1uXTIbtNbgjif.ezoUAmrzmt77UzcnUre');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_rekrut`
--
ALTER TABLE `tb_rekrut`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_rekrut`
--
ALTER TABLE `tb_rekrut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
