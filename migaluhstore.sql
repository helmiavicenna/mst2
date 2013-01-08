-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2013 at 01:43 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `migaluhstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(9) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) NOT NULL,
  `barang` varchar(100) NOT NULL,
  `harga` int(9) NOT NULL,
  `stok` int(9) NOT NULL,
  `FKpemasok` int(9) NOT NULL,
  `FKkategori` int(9) NOT NULL,
  `status` int(9) NOT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `id` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `belanja`
--

CREATE TABLE IF NOT EXISTS `belanja` (
  `id_belanja` int(9) NOT NULL AUTO_INCREMENT,
  `FKbarang` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `jumlah` int(9) NOT NULL,
  `total` int(9) NOT NULL,
  `FKmember` int(9) NOT NULL,
  `status` int(9) NOT NULL,
  PRIMARY KEY (`id_belanja`),
  KEY `id` (`id_belanja`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(9) NOT NULL AUTO_INCREMENT,
  `tipe` varchar(10) NOT NULL,
  `diskon` int(9) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `massa_in` date NOT NULL,
  `massa_up` date NOT NULL,
  `status` int(9) NOT NULL,
  PRIMARY KEY (`id_kategori`),
  KEY `id` (`id_kategori`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` int(9) NOT NULL AUTO_INCREMENT,
  `kota` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `kota`) VALUES
(1, 'Malang'),
(2, 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(9) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `FKkota` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tipe` int(9) NOT NULL,
  `tanggalgabung` datetime NOT NULL,
  `status` int(9) NOT NULL,
  PRIMARY KEY (`id_member`),
  KEY `id` (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `FKkota`, `email`, `tipe`, `tanggalgabung`, `status`) VALUES
(1, 'Dewii', 'Malang', 'iwedh.sp@gmail.com', 1, '2012-12-10 00:00:00', 0),
(2, 'Dianss', 'Malangg', 'dian@gmail.com', 0, '2012-12-12 00:00:00', 0),
(3, 'Dinda', 'Surabaya', 'dinda@gmail.com', 1, '2012-12-12 00:00:00', 1),
(4, 'Andi', 'Sumedangg', 'andi@gmail.com', 0, '2012-12-12 00:00:00', 1),
(5, 'Sinyo', 'Malang', 'sinyo@gmail.com', 1, '2012-12-13 00:00:00', 0),
(6, 'Diana', 'Malang', 'diana@gmail.com', 0, '2012-12-12 00:00:00', 0),
(7, 'Diana', 'Malang', 'diana@gmail.com', 0, '2012-12-12 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemasok`
--

CREATE TABLE IF NOT EXISTS `pemasok` (
  `id_pemasok` int(9) NOT NULL AUTO_INCREMENT,
  `agen` varchar(100) NOT NULL,
  `FKkota` varchar(100) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggalgabung` datetime NOT NULL,
  `status` int(9) NOT NULL,
  PRIMARY KEY (`id_pemasok`),
  KEY `id` (`id_pemasok`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_pembelian` int(9) NOT NULL AUTO_INCREMENT,
  `FKpemasok` int(9) NOT NULL,
  `FKbarang` varchar(10) NOT NULL,
  `jumlah` int(9) NOT NULL,
  `status` int(9) NOT NULL,
  PRIMARY KEY (`id_pembelian`),
  KEY `id` (`id_pembelian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `id_penjualan` int(9) NOT NULL AUTO_INCREMENT,
  `FKbelanja` int(9) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `totalB` int(9) NOT NULL,
  `diskon` int(9) NOT NULL,
  `totalA` int(9) NOT NULL,
  `FKmember` int(9) NOT NULL,
  `status` int(9) NOT NULL,
  PRIMARY KEY (`id_penjualan`),
  KEY `id` (`id_penjualan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
