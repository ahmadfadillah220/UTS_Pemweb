-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table pemweb.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table pemweb.admin: ~0 rows (approximately)
DELETE FROM `admin`;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
	(1, 'admin', 'admin123');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table pemweb.biodata
CREATE TABLE IF NOT EXISTS `biodata` (
  `id_biodata` int(11) NOT NULL AUTO_INCREMENT,
  `namaLengkap` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `aboutUs` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_biodata`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table pemweb.biodata: ~1 rows (approximately)
DELETE FROM `biodata`;
/*!40000 ALTER TABLE `biodata` DISABLE KEYS */;
INSERT INTO `biodata` (`id_biodata`, `namaLengkap`, `profile`, `email`, `phone`, `aboutUs`) VALUES
	(1, 'Ahmad Fadillah', 'Mahasiswa', 'Ahmad.Fadillah@student.upj.ac.id', '0895412870696', 'Perkenalkan saya Ahmad Fadillah biasa dipanggil Fadil, saya berasal dari universitas pembangunan jaya, tujuan saya membangun web ini untuk memperkenalkan diri saya kepada kalian semua.');
/*!40000 ALTER TABLE `biodata` ENABLE KEYS */;

-- Dumping structure for table pemweb.education
CREATE TABLE IF NOT EXISTS `education` (
  `id_education` int(11) NOT NULL AUTO_INCREMENT,
  `PM` varchar(50) DEFAULT NULL,
  `LI` varchar(50) DEFAULT NULL,
  `UPJ` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_education`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table pemweb.education: ~0 rows (approximately)
DELETE FROM `education`;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` (`id_education`, `PM`, `LI`, `UPJ`) VALUES
	(1, '2013-2016', '2016-2019', '2019-Sekarang');
/*!40000 ALTER TABLE `education` ENABLE KEYS */;

-- Dumping structure for table pemweb.hobi
CREATE TABLE IF NOT EXISTS `hobi` (
  `id_hobi` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_hobi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table pemweb.hobi: ~0 rows (approximately)
DELETE FROM `hobi`;
/*!40000 ALTER TABLE `hobi` DISABLE KEYS */;
INSERT INTO `hobi` (`id_hobi`, `deskripsi`) VALUES
	(1, 'Hobi Saya adalah bermain bulutangkis dan fotografer');
/*!40000 ALTER TABLE `hobi` ENABLE KEYS */;

-- Dumping structure for table pemweb.kontak
CREATE TABLE IF NOT EXISTS `kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `jam_kerja` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table pemweb.kontak: ~0 rows (approximately)
DELETE FROM `kontak`;
/*!40000 ALTER TABLE `kontak` DISABLE KEYS */;
INSERT INTO `kontak` (`id_kontak`, `alamat`, `email`, `phone`, `jam_kerja`) VALUES
	(1, 'Jalan mirah V', 'Ahmad.Fadillah@student.upj.ac.id', '+62 895 4128 70696', '08.00-15.00 WIB');
/*!40000 ALTER TABLE `kontak` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
