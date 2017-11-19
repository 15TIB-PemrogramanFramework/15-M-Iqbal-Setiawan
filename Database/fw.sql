-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Nov 2017 pada 08.34
-- Versi Server: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(35) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `alamat` varchar(55) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `nohp`, `alamat`) VALUES
('admin', '091097', 'bale', '081274742525', 'alam raya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` varchar(3) NOT NULL,
  `namabarang` varchar(55) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(6969) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `namabarang`, `harga`, `stok`, `gambar`) VALUES
('182', 'I-Phone X 256Gb', 22700000, 100, '1510740893.jpg'),
('i33', 'apple watch series 3 42M', 6750000, 100, '1510740392.jpg'),
('i86', 'I-Phone X 64Gb', 18700000, 100, '1510740680.jpg'),
('i8g', 'I-Phone 8 Plus 64Gb Space Gray', 12650000, 100, '1510741030.jpg'),
('i8l', 'I-Phone 8 Plus 256Gb Gold', 14650000, 100, '1510741133.jpg'),
('i8s', 'I-Phone 8 Plus 256Gb Silver', 14650000, 100, '1510741204.jpg'),
('iw2', 'apple watch series 2 42M', 5950000, 100, '1510740200.jpg'),
('iw3', 'apple watch series 3 38M', 6250000, 100, '1510740281.jpg'),
('iws', 'apple watch series 2 38M', 5650000, 100, '1510740073.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE IF NOT EXISTS `beli` (
  `kode_beli` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `id` varchar(3) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `status` varchar(35) NOT NULL,
  PRIMARY KEY (`kode_beli`),
  KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `kode_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(8) NOT NULL,
  `id` varchar(3) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  PRIMARY KEY (`kode_komentar`),
  KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`kode_komentar`, `username`, `id`, `isi`) VALUES
(1, 'bale', 'i33', 'wah mantap barang nya gan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `username` varchar(8) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`username`, `password`, `nama`, `jk`, `nohp`, `alamat`) VALUES
('bale', '123123', 'bale setiawan', 'laki-laki', '082636272', 'jl.Alam raya Gg. naras 3'),
('rico', '123', 'rico mikola', 'Perempuan', '0828482', 'jl paus'),
('yoga', '123', 'yoga adi prasetyo', 'Perempuan', '082234382', 'sidimpuan');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `beli`
--
ALTER TABLE `beli`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `member` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fkbarang` FOREIGN KEY (`id`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkusername` FOREIGN KEY (`username`) REFERENCES `member` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
