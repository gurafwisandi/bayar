-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2021 pada 12.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayaraja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `address`
--

CREATE TABLE `address` (
  `id_alamat` int(15) NOT NULL,
  `id_customer` int(15) NOT NULL,
  `provinsi` varchar(64) DEFAULT NULL,
  `kabupaten` varchar(64) DEFAULT NULL,
  `kecamatan` varchar(64) DEFAULT NULL,
  `kelurahan` varchar(64) DEFAULT NULL,
  `kodepos` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurs`
--

CREATE TABLE `kurs` (
  `id_kurs` int(15) NOT NULL,
  `id_mata_uang` int(15) NOT NULL,
  `id_payment` int(15) NOT NULL,
  `nilai` double DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kurs`
--

INSERT INTO `kurs` (`id_kurs`, `id_mata_uang`, `id_payment`, `nilai`, `tanggal`) VALUES
(2021060101, 1, 1, 14500, '2021-06-10 22:45:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_uang`
--

CREATE TABLE `mata_uang` (
  `id_mata_uang` int(15) NOT NULL,
  `desk` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_uang`
--

INSERT INTO `mata_uang` (`id_mata_uang`, `desk`) VALUES
(1, 'USD'),
(2, 'PONDSTERLING');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(15) NOT NULL,
  `merchant` varchar(64) DEFAULT NULL,
  `norek` varchar(25) DEFAULT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id_payment`, `merchant`, `norek`, `nama`) VALUES
(8, 'BCA', '5490189019', 'LEO'),
(10, 'MANDIRI', '78788899877', 'RISDIANTO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(15) NOT NULL,
  `jenis_jasa` varchar(64) DEFAULT NULL,
  `fee` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `jenis_jasa`, `fee`) VALUES
(2001, 'Gudang US', 500000),
(2002, 'Gudang CINA', 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(15) NOT NULL,
  `id_customer` int(15) NOT NULL,
  `tanggal_transaksi` datetime DEFAULT NULL,
  `website` text DEFAULT NULL,
  `item` text DEFAULT NULL,
  `id_kurs` int(15) NOT NULL,
  `harga` double DEFAULT NULL,
  `shipping` double DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `kurs_modal` double DEFAULT NULL,
  `kurs_transaksi` double DEFAULT NULL,
  `id_payment` int(15) NOT NULL,
  `id_produk` int(15) NOT NULL,
  `extra_fee` double DEFAULT NULL,
  `pajak` double DEFAULT NULL,
  `total_rupiah` double DEFAULT NULL,
  `margin` double DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL,
  `nama` varchar(64) DEFAULT NULL,
  `npwp` varchar(25) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin,2:cutomer'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `username`, `nama`, `npwp`, `status`, `level`) VALUES
(12, 'admin@gmail.com', '9ea32266b9cc4caeebeff751753ebde2af959ffb', 'andi17', 'Andi Suyanti', '', 'aktive', 1),
(13, 'customer12gmail.com', '6988cc4e8fa516eee923371c45e47f096479fd08', 'tutirahma', 'Tuti Rahma', '67777888888', 'aktive', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indeks untuk tabel `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`id_kurs`);

--
-- Indeks untuk tabel `mata_uang`
--
ALTER TABLE `mata_uang`
  ADD PRIMARY KEY (`id_mata_uang`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
