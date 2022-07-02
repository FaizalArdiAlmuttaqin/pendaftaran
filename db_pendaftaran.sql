-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2022 pada 02.41
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id_pendaftaran` varchar(10) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(10) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `j_kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `nohp_peserta` varchar(20) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `jarak_kesekolah` int(20) NOT NULL,
  `keb_khusus` varchar(50) NOT NULL,
  `nm_bapak` varchar(50) NOT NULL,
  `pk_bapak` varchar(50) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `pk_ibu` varchar(50) NOT NULL,
  `nohp_ortu` varchar(20) NOT NULL,
  `alamat_ortu` varchar(50) NOT NULL,
  `nm_wali` varchar(50) NOT NULL,
  `pk_wali` varchar(50) NOT NULL,
  `nohp_wali` varchar(20) NOT NULL,
  `alamat_wali` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id_pendaftaran`, `tgl_pendaftaran`, `nm_peserta`, `tmp_lahir`, `tgl_lahir`, `umur`, `nik`, `j_kelamin`, `agama`, `nohp_peserta`, `alamat_rumah`, `rt`, `rw`, `jarak_kesekolah`, `keb_khusus`, `nm_bapak`, `pk_bapak`, `nm_ibu`, `pk_ibu`, `nohp_ortu`, `alamat_ortu`, `nm_wali`, `pk_wali`, `nohp_wali`, `alamat_wali`) VALUES
('P202200001', '2022-06-29', 'akbar al hasan', 'bengkulu', '2007-01-03', 15, '2134', 'laki-laki', 'Islam', '087087087087', 'jambu baru', '3 ', '4', 100, 'kesulitan mendengar', 'samsul', 'tukang bakso', 'siti', 'desainer', '0819877898987', 'jambu baru', 'tidak ada', 'tidak ada', 'tidak ada', 'tidak ada');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
