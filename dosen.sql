-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2021 pada 16.10
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `waktu` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `gaji` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `nidn`, `nama`, `waktu`, `username`, `gaji`) VALUES
(1, '123', 'Leady Novita', '2021-04-14', '', '975000'),
(2, '123', 'Theresia Elsa', '2021-04-14', '', '8550000'),
(3, '45654', 'Shereen Breatrix', '2021-04-14', '', '1900000'),
(4, '1861022', 'Shereen Breatrix Adwhijaja', '2021-04-14', '', '1900000'),
(5, '1861022', 'Shereen Breatrix', '2021-04-14', '', '1900000'),
(6, '1861022', 'Shereen Breatrix', '2021-04-14', '', '1900000'),
(7, '123', 'Shereen Breatrix', '2021-04-14', '', '1900000'),
(8, '789', 'Theresia Elsa', '2021-04-14', '', '1550000'),
(9, '1861013', 'Theresia Elsa Lengari', '2021-04-14', '', '1550000'),
(10, '1861022', 'Shereen Breatrix', '2021-04-14', '', '1900000'),
(11, '45654', 'Shereen Breatrix', '2021-04-14', '', '1900000'),
(12, '45654', 'Shereen Breatrix', '2021-04-14', '', '1900000'),
(13, '45654', 'Shereen Breatrix', '2021-04-14', '', '1900000'),
(14, '1861022', 'Shereen Breatrix Adwhijaja', '2021-04-14', '', '1900000'),
(15, '1861013', 'Theresia Elsa', '2021-04-14', '', '1350000'),
(16, '011100', 'Leady Novita Lande', '2021-04-14', 'root', '2500000'),
(17, '1861028', 'Leady Novita', '2021-04-14', 'root', '2500000'),
(18, '011100', 'Leady Novita Lande', '2021-04-14', 'root', '2500000'),
(19, '123', 'Reny Erna Malioy', '2021-04-14', 'root', '1450000'),
(20, '123', 'Reny Erna Malioy', '2021-04-14', 'root', '1950000'),
(21, '1861008', 'Reny Erna', '2021-04-14', 'root', '1350000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_dosen`
--

CREATE TABLE `tabel_dosen` (
  `id` int(11) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `pangkat` varchar(10) NOT NULL,
  `pengalaman` text NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_dosen`
--

INSERT INTO `tabel_dosen` (`id`, `nidn`, `nama`, `tempat`, `tanggal`, `telepon`, `pendidikan`, `jenis_kelamin`, `spesialis`, `email`, `password`, `golongan`, `pangkat`, `pengalaman`, `gaji`, `total`) VALUES
(1, '45654', 'Shereen Breatrix', 'Makassar', '2021-04-01', '085387326823', 'S3', 'Wanita', 'Programming, Networking, Database, Analyst, ', 'shereenbeatrix@gmail.com', 'shereen1861022', '3C', 'L', 'shereen 1861022', '400000', '1900000'),
(2, '789', 'Theresia Elsa', 'Makassar', '2021-04-05', '082345678900', 'S2', 'Wanita', 'Database, ', 'elsalengari@gmail.com', 'elsa789', '3A', 'L', 'elsa', '300000', '1550000'),
(3, '011100', 'Leady Novita Lande', 'Rantepao', '2021-04-03', '085342985300', 'S3', 'Wanita', 'Programming, Networking, ', 'leadynovitalande@gmail.com', 'leady123', '3B', 'LK', 'leady edit123', '500000', '2500000'),
(4, '123', 'Reny Erna Malioy', 'Maluku', '2021-04-18', '085387326823', 'S2', 'Wanita', 'Programming, Networking, Database, Analyst, ', 'renyerna@gmail.com', 'reny123', '3B', 'L', 'reny123 edit4', '700000', '1950000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_dosen`
--
ALTER TABLE `tabel_dosen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tabel_dosen`
--
ALTER TABLE `tabel_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
