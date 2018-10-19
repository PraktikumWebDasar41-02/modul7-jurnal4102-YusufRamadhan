-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.11
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `NIM` bigint(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Program_Studi` text NOT NULL,
  `Fakultas` text NOT NULL,
  `Asal` text NOT NULL,
  `Moto_Hidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`NIM`, `Nama`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Program_Studi`, `Fakultas`, `Asal`, `Moto_Hidup`) VALUES
(6701174004, 'Rifqi Ryandi', '1998-12-14', 'Laki-Laki', 'S1 MBTI', 'Fakultas Ekonomi Bisnis', 'Medan', 'Selow aja'),
(6701174074, 'Muhamad Yusuf Ramadhan', '1998-12-17', 'Laki-Laki', 'D3 Manajemen Informatika', 'Fakultas Ilmu Terapan', 'Bogor', 'Wao wao'),
(6701174082, 'Firza Maulana Nasution', '1999-02-16', 'Laki-Laki', 'D3 Manajemen Informatika', 'Fakultas Ilmu Terapan', 'Medan', 'KM BISA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
