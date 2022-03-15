-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2022 pada 05.55
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('admin','resepsionis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'resepsionis', 'resepsionis', 'resepsionis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_hotel`
--

CREATE TABLE `fasilitas_hotel` (
  `id` int(11) NOT NULL,
  `f1` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas_hotel`
--

INSERT INTO `fasilitas_hotel` (`id`, `f1`, `gambar`) VALUES
(1, 'Parking area ', ''),
(2, 'Free Wifi', ''),
(3, 'Swimming Pool', ''),
(4, 'Receptionis 24 Hours', ''),
(5, 'Security 24 Hours', ''),
(6, 'Laundry', ''),
(7, 'Restaurant', ''),
(8, 'Free Pick Up From Airport', ''),
(9, 'Bar', ''),
(10, 'Breakfast', ''),
(11, 'Minimarket', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `f1` varchar(100) NOT NULL,
  `f2` varchar(100) NOT NULL,
  `f3` varchar(100) NOT NULL,
  `f4` varchar(100) NOT NULL,
  `f5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id`, `judul`, `tipe`, `f1`, `f2`, `f3`, `f4`, `f5`) VALUES
(1, 'Fasilitas Kamar', 'Standard Room', 'Breakfast ', 'Single bed', 'Parking Area', 'Swimming pool', 'Free WIFI 24 hours'),
(2, 'Fasilitas kamar ', 'Deluxe Room', 'Swimming Pool', 'Breakfast, coffe and tea marker', 'Double bed', 'Parking Area', 'Free WIFI 24 hours'),
(3, 'Fasilitas kamar ', 'Presidential Room', 'Double bed or single bed ', 'Private Swimming pool', 'Breakfast, coffe and tea marker', 'Mini bar', 'Free WIFI 24 hours'),
(4, 'Fasilitas kamar ', 'Suite Room', 'Breakfast, lunch, dinner and coffe and tea maker', 'Private swimming pool', 'Private parking area', 'Private kitchen in room', 'Free WIFI 24 hours');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `penjelasan` text NOT NULL,
  `jenis_kamar` varchar(50) NOT NULL,
  `stok_kamar` int(20) NOT NULL,
  `tarif` int(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `penjelasan`, `jenis_kamar`, `stok_kamar`, `tarif`, `gambar`) VALUES
(1, 'Standard Room memiliki kamar tidur yang cukup luas, dengan satu single bed, pendingin ruangan (AC), TV, telephone serta WIFI free 24 jam. Tersedia makanan snack serta minuman dingin dan kopi teh serta furniture yang sangat nyaman', 'Standard Room ', 3, 250000, 'IMG-622e1a4eb99704.70814344.jpg'),
(2, 'Deluxe Room memiliki kamar tidur yang cukup luas, dengan double bed, pendingin ruangan (AC), TV, telephone serta WIFI free 24 jam. Tersedia makanan snack serta minuman dingin dan kopi teh serta furniture yang sangat nyaman dan interior yang mewah', 'Deluxe Room', 12, 500000, 'IMG-622e1a65264f25.27677816.jpg'),
(3, 'Presidential Room memiliki kamar tidur yang cukup luas, dengan double bed, pendingin ruangan (AC), TV, telephone serta WIFI free 24 jam. Tersedia makanan snack serta minuman dingin dan kopi teh serta furniture yang sangat nyaman serta pemandangan yang indah', 'Presidential Room', 3, 5000000, 'IMG-622e1a7535edb2.28435677.jpg'),
(4, 'Suite Room memiliki kamar tidur yang cukup luas, dengan double bed, pendingin ruangan (AC), TV, telephone serta WIFI free 24 jam. Tersedia makanan snack serta minuman dingin dan kopi teh serta furniture yang sangat nyaman serta pemandangan yang indah', 'Suite Room', 5, 1000000, 'IMG-622e1a854a9e22.16385154.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `harga` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_kamar`, `nik`, `nama`, `tipe`, `check_in`, `check_out`, `harga`) VALUES
(12, 4, 34567, 'indah purmata', 'Suite Room', '2022-02-20', '2022-02-21', 'Rp. 1000000 untuk 1 Hari'),
(13, 4, 7778, 'indah ', 'Suite Room', '2022-02-21', '2022-02-22', 'Rp. 1000000 untuk 1 Hari'),
(14, 3, 787878, 'resina ', 'Presidential Room', '2022-02-22', '2022-02-28', 'Rp. 30000000 untuk 6 Hari'),
(16, 3, 1231723, 'indah purmata', 'Presidential Room', '2022-03-24', '2022-03-31', 'Rp. 35000000 untuk 7 Hari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `nik` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`nik`, `nama`, `alamat`, `no_hp`) VALUES
(234, 'tes', 'sleman', 345345),
(5454, 'resina ', 'yogyakarta', 345345),
(7778, 'indah ', 'yogyakarta', 345345),
(34567, 'indah purmata', 'yogyakarta', 8234234),
(787878, 'resina ', 'bantul', 23456),
(1231723, 'indah purmata', 'yogyakarta', 345345),
(2147483647, 'c', '567567', 657567);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `nik` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
