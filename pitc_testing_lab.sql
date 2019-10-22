-- --------------------------------------------------------
-- Host:                         192.168.100.202
-- Server version:               10.1.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pitc_testing_lab
CREATE DATABASE IF NOT EXISTS `pitc_testing_lab` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pitc_testing_lab`;

-- Dumping structure for table pitc_testing_lab.communication_profiles
CREATE TABLE IF NOT EXISTS `communication_profiles` (
  `id` bigint(1) NOT NULL AUTO_INCREMENT,
  `profile_type_id` int(11) DEFAULT NULL,
  `protocol_id` int(11) DEFAULT NULL,
  `host` text,
  `username` varchar(313) DEFAULT NULL,
  `password` varchar(313) DEFAULT NULL,
  `port` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table pitc_testing_lab.communication_profiles: ~22 rows (approximately)
/*!40000 ALTER TABLE `communication_profiles` DISABLE KEYS */;
INSERT INTO `communication_profiles` (`id`, `profile_type_id`, `protocol_id`, `host`, `username`, `password`, `port`) VALUES
	(1, 1, 1, '192.168.15.222', 'attaru', '6664646', 3306),
	(2, 1, 1, '192.168.151.2', 'ooiijn', '54641', 6630),
	(3, 1, 1, '192.168.15.222', 'attaru', '6664646', 3306),
	(4, 1, 1, '192.168.151.2', 'ooiijn', '54641', 6630),
	(5, 1, 1, '192.168.15.222', 'attaru', '6664646', 3306),
	(6, 1, 1, '192.168.151.2', 'ooiijn', '54641', 6630),
	(7, 1, 1, '192.168.15.222', 'attaru', '6664646', 3306),
	(8, 1, 1, '192.168.151.2', 'ooiijn', '54641', 6630),
	(9, 1, 1, '192.168.15.222', 'attaru', '6664646', 3306),
	(10, 1, 1, '192.168.151.2', 'ooiijn', '54641', 6630),
	(11, 1, 1, '192.168.15.222', 'attaru', '6664646', 3306),
	(12, 1, 1, '192.168.151.2', 'ooiijn', '54641', 6630),
	(13, 1, 1, '192.168.15.222', '222aaa', '21mkklk', 222),
	(14, 1, 1, '192.168.151.2', '54s', '11ss', 111),
	(15, 2, 1, '192.168.15.222', 'attaru', '6664646', 3306),
	(16, 1, 1, '192.168.151.2', 'ooiijn', '54641', 6630),
	(17, 1, 1, '192.168.15.222', 'pitc', 'pitc@admin', 3306),
	(18, 2, 1, '192.168.151.2', 'pitc', 'pitc@admin', 6060),
	(19, 1, 1, '192.168.15.222', 'attaru', '6664646', 3306),
	(20, 1, 1, '192.168.151.2', 'ooiijn', '54641', 6630),
	(21, 1, 1, '192.168.15.100', 'user1', 'password1', 3306),
	(22, 1, 1, '192.168.151.2', 'user2', 'password2', 3306);
/*!40000 ALTER TABLE `communication_profiles` ENABLE KEYS */;

-- Dumping structure for table pitc_testing_lab.company
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table pitc_testing_lab.company: ~8 rows (approximately)
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` (`id`, `name`, `description`) VALUES
	(1, 'KBK Electronics (Pvt.) Ltd.', 'KBK Electronics (Pvt.) Ltd.'),
	(2, 'Creative Electronics (Pvt.) Ltd.', 'Creative Electronics (Pvt.) Ltd.'),
	(3, 'Accurate (Pvt.) Ltd.', 'Accurate (Pvt.) Ltd.'),
	(4, 'Microtech Industries (Pvt.) Ltd.', 'Microtech Industries (Pvt.) Ltd.'),
	(5, 'Vertex Electronics (Pvt.) Ltd.', 'Vertex Electronics (Pvt.) Ltd.'),
	(6, 'Syed Bhais (Pvt.) Ltd.', 'Syed Bhais (Pvt.) Ltd.'),
	(7, 'IMS (Pvt.) Ltd.', 'IMS (Pvt.) Ltd.'),
	(8, 'Pak Elektron Limited', 'Pak Elektron Limited');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;

-- Dumping structure for table pitc_testing_lab.meters
CREATE TABLE IF NOT EXISTS `meters` (
  `id` bigint(1) NOT NULL AUTO_INCREMENT,
  `test_info_id` int(11) NOT NULL,
  `msn` int(1) NOT NULL,
  `type` varchar(63) NOT NULL,
  `phase` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table pitc_testing_lab.meters: ~7 rows (approximately)
/*!40000 ALTER TABLE `meters` DISABLE KEYS */;
INSERT INTO `meters` (`id`, `test_info_id`, `msn`, `type`, `phase`) VALUES
	(1, 1, 56556, '1', 1),
	(2, 1, 559855, '1', 1),
	(3, 1, 369456632, '1', 1),
	(4, 2, 454554545, '1', 1),
	(5, 3, 56556, '1', 1),
	(6, 4, 36985225, '1', 1),
	(7, 5, 3698, '1', 1);
/*!40000 ALTER TABLE `meters` ENABLE KEYS */;

-- Dumping structure for table pitc_testing_lab.profile_type
CREATE TABLE IF NOT EXISTS `profile_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(111) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table pitc_testing_lab.profile_type: ~4 rows (approximately)
/*!40000 ALTER TABLE `profile_type` DISABLE KEYS */;
INSERT INTO `profile_type` (`id`, `name`, `description`) VALUES
	(1, 'Database', 'DB Tables/Views'),
	(2, 'Web Services', 'Standard Web Services'),
	(3, 'CIM', 'Common Information Model'),
	(4, 'Multi-Speak', 'Multi-Speak ');
/*!40000 ALTER TABLE `profile_type` ENABLE KEYS */;

-- Dumping structure for table pitc_testing_lab.protocol
CREATE TABLE IF NOT EXISTS `protocol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(111) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table pitc_testing_lab.protocol: ~8 rows (approximately)
/*!40000 ALTER TABLE `protocol` DISABLE KEYS */;
INSERT INTO `protocol` (`id`, `name`, `description`) VALUES
	(1, 'MySQL', 'MySQL Database'),
	(2, 'MSSQL', 'MSSQL Database'),
	(3, 'ORACLE', 'ORACLE Database'),
	(4, 'Mongo DB', 'No SQL DB'),
	(5, 'NoSQL', 'No SQL Databases'),
	(6, 'REST-Ful', 'Restful Web Services'),
	(7, 'SOAP ', 'Soap Web Services\r\n'),
	(8, 'CIM-Http', '');
/*!40000 ALTER TABLE `protocol` ENABLE KEYS */;

-- Dumping structure for table pitc_testing_lab.test_info
CREATE TABLE IF NOT EXISTS `test_info` (
  `id` bigint(1) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `start_datetime` datetime DEFAULT NULL,
  `end_datetime` datetime DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `company_rep` varchar(141) DEFAULT NULL,
  `company_rep_designation` varchar(141) DEFAULT NULL,
  `mdc_version` varchar(192) NOT NULL,
  `is_gprs` int(1) DEFAULT NULL,
  `is_rf` int(1) DEFAULT NULL,
  `is_plc` int(1) DEFAULT NULL,
  `is_wifi` int(1) DEFAULT NULL,
  `is_zigbee` int(1) DEFAULT NULL,
  `is_lan` int(1) DEFAULT NULL,
  `read_profile_id` int(11) NOT NULL,
  `write_profile_id` int(11) NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table pitc_testing_lab.test_info: ~5 rows (approximately)
/*!40000 ALTER TABLE `test_info` DISABLE KEYS */;
INSERT INTO `test_info` (`id`, `login_id`, `start_datetime`, `end_datetime`, `company_id`, `company_rep`, `company_rep_designation`, `mdc_version`, `is_gprs`, `is_rf`, `is_plc`, `is_wifi`, `is_zigbee`, `is_lan`, `read_profile_id`, `write_profile_id`, `remarks`) VALUES
	(1, 1, '2019-02-10 11:11:51', NULL, 4, 'Umair', 'AA', '1.256.5', 1, 1, NULL, 1, 1, NULL, 13, 14, ''),
	(2, 1, '2019-02-11 11:50:56', NULL, 2, 'Umair', 'CEO', '1.2', 1, 1, NULL, NULL, NULL, NULL, 15, 16, ''),
	(3, 1, '2019-02-11 13:35:35', NULL, 6, 'Umairq', 'dsdsjk', '1.2', NULL, NULL, NULL, NULL, NULL, NULL, 17, 18, ''),
	(4, 1, '2019-02-11 13:46:42', NULL, 4, 'dsdnksjn', 'dfjkfj', '120.2', 1, NULL, NULL, NULL, NULL, NULL, 19, 20, ''),
	(5, 1, '2019-02-19 13:56:31', NULL, 2, 'Yasir', 's', '3.4.2', 1, NULL, NULL, NULL, NULL, NULL, 21, 22, '');
/*!40000 ALTER TABLE `test_info` ENABLE KEYS */;

-- Dumping structure for table pitc_testing_lab.test_list
CREATE TABLE IF NOT EXISTS `test_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table pitc_testing_lab.test_list: ~0 rows (approximately)
/*!40000 ALTER TABLE `test_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `test_list` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
