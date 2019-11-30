-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.3.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table walkwifi.code_correspondence
CREATE TABLE IF NOT EXISTS `code_correspondence` (
  `code` varchar(30) NOT NULL,
  `boitier` varchar(30) NOT NULL,
  `carte` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table walkwifi.code_correspondence: ~3 rows (approximately)
/*!40000 ALTER TABLE `code_correspondence` DISABLE KEYS */;
INSERT IGNORE INTO `code_correspondence` (`code`, `boitier`, `carte`) VALUES
	('123456789', '777777', '49494949'),
	('987654321', '888888', '49494949'),
	('112233445', '998877', '110220');
/*!40000 ALTER TABLE `code_correspondence` ENABLE KEYS */;

-- Dumping structure for table walkwifi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) DEFAULT NULL,
  `boitier` varchar(30) DEFAULT NULL,
  `carte` varchar(30) DEFAULT NULL,
  `tarif` int(2) DEFAULT NULL,
  `startingtime` date DEFAULT NULL,
  `endingtime` date DEFAULT NULL,
  `totaltime` int(5) DEFAULT NULL,
  `totalcost` int(5) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `diffdate` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Dumping data for table walkwifi.users: ~4 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
