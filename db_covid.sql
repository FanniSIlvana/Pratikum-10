-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2021 pada 22.42
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_covid`
--

CREATE TABLE `tbl_covid` (
  `id` int(11) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `total_kasus` int(11) NOT NULL,
  `kasus_baru` int(11) NOT NULL,
  `total_meninggal` int(11) NOT NULL,
  `meninggal_baru` int(11) NOT NULL,
  `total_sembuh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_covid`
--

INSERT INTO `tbl_covid` (`id`, `negara`, `total_kasus`, `kasus_baru`, `total_meninggal`, `meninggal_baru`, `total_sembuh`) VALUES
(1, 'World', 159595344, 611096, 3317384, 10586, 138206710),
(2, 'USA', 33515308, 30152, 596179, 370, 26507427),
(3, 'India', 22991927, 329517, 250025, 3879, 19021207),
(4, 'Brazil', 15214030, 29240, 423436, 1018, 13759125),
(5, 'France', 5780379, 3292, 106684, 292, 4917393),
(6, 'Turkey', 5044936, 13604, 43311, 282, 4743871),
(7, 'Russia', 4888727, 8465, 113647, 321, 4502906),
(8, 'UK', 4437217, 2357, 127609, 4, 4250699),
(9, 'Italy', 4116287, 5080, 123031, 198, 3619586);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_covid`
--
ALTER TABLE `tbl_covid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_covid`
--
ALTER TABLE `tbl_covid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
