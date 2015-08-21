-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.36-community-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema citywithoutcrime
--

CREATE DATABASE IF NOT EXISTS citywithoutcrime;
USE citywithoutcrime;

--
-- Definition of table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`email`,`password`) VALUES 
 ('harshanand007@yahoo.co.in','12345');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


--
-- Definition of table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE `complaint` (
  `reg_no` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `area_code` int(11) DEFAULT NULL,
  `proof` varchar(25) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `c_type` varchar(20) DEFAULT NULL,
  `c_gender` varchar(10) DEFAULT NULL,
  `c_height` int(11) DEFAULT NULL,
  `c_weight` int(11) DEFAULT NULL,
  `c_description` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

/*!40000 ALTER TABLE `complaint` DISABLE KEYS */;
INSERT INTO `complaint` (`reg_no`,`name`,`location`,`area_code`,`proof`,`photo`,`c_type`,`c_gender`,`c_height`,`c_weight`,`c_description`) VALUES 
 ('13458','Harsh Anand','Karunamoyee',700091,'1','Day1.doc','Theft','male',170,80,'He almost killed me :('),
 ('7594','asda','adasd',32323,'1','analysis.png','Murder','male',32,43,'asdasdasd'),
 ('3683','asda','adasd',32323,'1','analysis.png','Murder','male',32,43,'asdasdasd'),
 ('15368','asdasdasd','asdasd',123243,'driving license','FAQ.php','Theft','female',21,32,'sdasd');
/*!40000 ALTER TABLE `complaint` ENABLE KEYS */;


--
-- Definition of table `criminal`
--

DROP TABLE IF EXISTS `criminal`;
CREATE TABLE `criminal` (
  `sr_no` int(11) DEFAULT NULL,
  `serial_no` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminal`
--

/*!40000 ALTER TABLE `criminal` DISABLE KEYS */;
INSERT INTO `criminal` (`sr_no`,`serial_no`,`name`,`gender`,`height`,`weight`,`status`,`photo`) VALUES 
 (2,'asdas','Maniceet Sahay','Male',165,65,'Rape','Day4.doc'),
 (1,'adsad','Saurav Sarkar','Male',170,70,'Theft','Day2.doc'),
 (3,'ada','dsd','Male',152,23,'fdadd','Day5.doc'),
 (4,'sadd','asdsa','Male',123,42,'asdas','logo.jpg');
/*!40000 ALTER TABLE `criminal` ENABLE KEYS */;


--
-- Definition of table `station`
--

DROP TABLE IF EXISTS `station`;
CREATE TABLE `station` (
  `serial_no` int(11) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `area_code` int(11) DEFAULT NULL,
  `station_name` varchar(20) DEFAULT NULL,
  `phone_number` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

/*!40000 ALTER TABLE `station` DISABLE KEYS */;
INSERT INTO `station` (`serial_no`,`location`,`area_code`,`station_name`,`phone_number`) VALUES 
 (1,'Karunamoyee',700091,'Mr. Rajeev Mukherjee','8884107090');
/*!40000 ALTER TABLE `station` ENABLE KEYS */;


--
-- Definition of table `user_register`
--

DROP TABLE IF EXISTS `user_register`;
CREATE TABLE `user_register` (
  `reg_no` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_number` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

/*!40000 ALTER TABLE `user_register` DISABLE KEYS */;
INSERT INTO `user_register` (`reg_no`,`name`,`gender`,`address`,`phone_number`,`email`,`password`) VALUES 
 ('13458','Harsh','male','Ranchi','2147483647','harshanand007@gmail.com','12345'),
 ('15368','adsabdn','male','sad','234324132','sdmnas@asdln.com','123454');
/*!40000 ALTER TABLE `user_register` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
