-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Nov 2020 pada 08.01
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `databarang`
--

CREATE TABLE `databarang` (
  `NamaBarang` text NOT NULL,
  `Satuan` varchar(50) NOT NULL,
  `HargaBeli` varchar(50) NOT NULL,
  `HargaJual` varchar(50) NOT NULL,
  `Stok` varchar(50) NOT NULL,
  `Gambar` varchar(225) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `Product` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `databarang`
--

INSERT INTO `databarang` (`NamaBarang`, `Satuan`, `HargaBeli`, `HargaJual`, `Stok`, `Gambar`, `Kategori`, `Product`, `id`, `Keterangan`) VALUES
('sendok baja', '1', '15000', '25000', '3659', '1.jpeg', 'sendok', 'unggulan', 1, '2020-11-12 23:18:49'),
('gosokan kayu', '1', '5000', '10000', '1', '2.jpeg', 'gosokan', 'unggulan', 2, '2020-11-10 22:41:02'),
('bor', '1', '200000', '300000', '97', 'Hydrangeas.jpg', 'bor', 'unggulan', 3, '2020-11-13 00:11:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapembeli`
--

CREATE TABLE `datapembeli` (
  `Nama` varchar(150) NOT NULL,
  `Alamat` text NOT NULL,
  `Telephone` varchar(20) NOT NULL,
  `JumlahBarang` varchar(50) NOT NULL,
  `Subtotal` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Komentar` text NOT NULL,
  `Aksi` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `Tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapembeli`
--

INSERT INTO `datapembeli` (`Nama`, `Alamat`, `Telephone`, `JumlahBarang`, `Subtotal`, `UserName`, `Komentar`, `Aksi`, `id`, `Tanggal`) VALUES
('sabar', 'kp. bojong larang', '0896999', '6', '90000', '159', 'cepat kirim ya', 'DiTerima', 9, '2020-11-12 21:28:52'),
('sabar', 'hau', '12', '200', '5000000', '159', 'kkk', 'DiTerima', 10, '2020-11-12 23:00:18'),
('sabar', '', '12', '4', '100000', '159', '', 'DiTerima', 11, '2020-11-12 23:17:59'),
('', '', '', '37', '925000', '159', '', 'DiTerima', 12, '2020-11-12 23:20:05'),
('', '', '', '3', '900000', '159', '', 'diproses', 13, '2020-11-13 00:12:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapengelola`
--

CREATE TABLE `datapengelola` (
  `IdPengelola` int(11) NOT NULL,
  `Nama` varchar(150) NOT NULL,
  `Alamat` text NOT NULL,
  `NoTelp` varchar(12) NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapengelola`
--

INSERT INTO `datapengelola` (`IdPengelola`, `Nama`, `Alamat`, `NoTelp`, `Keterangan`) VALUES
(1, 'anonim', 'parkud', '085846761639', '2009-01-06 14:39:26'),
(2, 'mrx', 'smi', '1234', '2009-01-06 14:39:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapesanan`
--

CREATE TABLE `datapesanan` (
  `id_pesanan` int(11) NOT NULL,
  `UserName` text NOT NULL,
  `Komentar` text NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datatoko`
--

CREATE TABLE `datatoko` (
  `NamaToko` text NOT NULL,
  `AlamatToko` text NOT NULL,
  `Telephone` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datatoko`
--

INSERT INTO `datatoko` (`NamaToko`, `AlamatToko`, `Telephone`, `id`, `Keterangan`) VALUES
('TB. Tunas Jaya', 'bojong larang', '02111121234', 2, '2020-11-13 22:56:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `Kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `Kategori`) VALUES
(1, 'sendok'),
(2, 'gosokan'),
(3, 'bor'),
(4, 'cerinda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_barang` text NOT NULL,
  `Gambar` varchar(225) NOT NULL,
  `NamaBarang` varchar(200) NOT NULL,
  `Jumlah` varchar(100) NOT NULL,
  `Total` varchar(100) NOT NULL,
  `UserName` text NOT NULL,
  `Aksi` varchar(100) NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_barang`, `Gambar`, `NamaBarang`, `Jumlah`, `Total`, `UserName`, `Aksi`, `Keterangan`) VALUES
(3, '1', '1.jpeg', 'sendok baja', '3', '75000', '159', 'admin', '2020-11-12 13:22:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode`
--

CREATE TABLE `kode` (
  `idPembeli` varchar(30) NOT NULL,
  `Subtotal` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kode`
--

INSERT INTO `kode` (`idPembeli`, `Subtotal`, `tanggal`, `id`) VALUES
('1', '250000', '2009-01-09 18:20:55', 35),
('9', '', '2020-11-12 19:04:40', 36),
('13', '', '2020-11-13 22:24:43', 37);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Level` varchar(50) NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`UserName`, `Password`, `Level`, `Keterangan`) VALUES
('1234', '1234', 'user', '2020-11-11 20:40:28'),
('149', '149', '149', '2020-11-11 14:37:58'),
('159', '149', 'user', '2020-11-11 14:38:45'),
('169', '149', 'user', '2020-11-12 12:58:50'),
('ID20280202198001', '149', 'user', '2020-11-12 12:59:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `UserName` varchar(50) NOT NULL,
  `IdBarang` varchar(50) NOT NULL,
  `Gambar` text NOT NULL,
  `NamaBarang` text NOT NULL,
  `JumlahBeli` varchar(50) NOT NULL,
  `Total` varchar(50) NOT NULL,
  `Aksi` varchar(50) NOT NULL,
  `Aksi1` varchar(50) NOT NULL,
  `Aksi2` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `Tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`UserName`, `IdBarang`, `Gambar`, `NamaBarang`, `JumlahBeli`, `Total`, `Aksi`, `Aksi1`, `Aksi2`, `id`, `Tanggal`) VALUES
('159', '2', '2.jpeg', 'gosokan kayu', '4', '40000', 'dikirim', '1', '1', 7, '2020-11-12 21:28:53'),
('159', '1', '1.jpeg', 'sendok baja', '2', '50000', 'dikirim', '1', '1', 8, '2020-11-12 21:28:53'),
('159', '1', '1.jpeg', 'sendok baja', '200', '5000000', '1', '1', '1', 9, '2020-11-12 23:00:18'),
('159', '1', '1.jpeg', 'sendok baja', '4', '100000', '1', '1', '1', 10, '2020-11-12 23:17:59'),
('159', '1', '1.jpeg', 'sendok baja', '37', '925000', '1', '1', '1', 11, '2020-11-12 23:20:05'),
('159', '3', 'Hydrangeas.jpg', 'bor', '3', '900000', '1', '0', '0', 12, '2020-11-13 00:12:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapembeli`
--
ALTER TABLE `datapembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapengelola`
--
ALTER TABLE `datapengelola`
  ADD PRIMARY KEY (`IdPengelola`);

--
-- Indexes for table `datapesanan`
--
ALTER TABLE `datapesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `datatoko`
--
ALTER TABLE `datatoko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `kode`
--
ALTER TABLE `kode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databarang`
--
ALTER TABLE `databarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `datapembeli`
--
ALTER TABLE `datapembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `datapengelola`
--
ALTER TABLE `datapengelola`
  MODIFY `IdPengelola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `datapesanan`
--
ALTER TABLE `datapesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `datatoko`
--
ALTER TABLE `datatoko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kode`
--
ALTER TABLE `kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
