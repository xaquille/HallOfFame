-- MySQL dump 10.13  Distrib 5.5.62, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: halloffame
-- ------------------------------------------------------
-- Server version	5.5.62-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'jancok','asu@asu.com','admin','asd'),(2,'test','asd@ads.com','user','a3dcb4d229de6fde0db5686dee4714'),(3,'test','test@getnada.com','user','71a4d4cd2f30b185d707718273b17d'),(4,'jsald','admin@admin.com','user','7815696ecbf1c96e6894b779456d33'),(5,'baru','asdasd@asd.com','user','7815696ecbf1c96e6894b779456d33'),(6,'gayabaru','gaya@gaya.com','user','7815696ecbf1c96e6894b779456d33'),(7,'sheila','sheila@on7.com','user','7815696ecbf1c96e6894b779456d33'),(8,'pororo','pororo@pororo.com','','7815696ecbf1c96e6894b779456d33'),(9,'yoiii','yoii@yu.com','','7815696ecbf1c96e6894b779456d33'),(10,'asu','asu@asu.com','','7815696ecbf1c96e6894b779456d33');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cert`
--

DROP TABLE IF EXISTS `cert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cert` (
  `id_cert` smallint(6) NOT NULL AUTO_INCREMENT,
  `certificate_number` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cert`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cert`
--

LOCK TABLES `cert` WRITE;
/*!40000 ALTER TABLE `cert` DISABLE KEYS */;
INSERT INTO `cert` VALUES (1,'//BMD//2019'),(2,'//BMD//2019'),(3,'//BMD//2019'),(4,'//BMD/V/2019'),(5,'null/cert.bugbounty/BMD/V/2019'),(6,'//BMD/V/2019'),(7,'/cert.bugbounty/BMD/V/2019');
/*!40000 ALTER TABLE `cert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hunter`
--

DROP TABLE IF EXISTS `hunter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hunter` (
  `id_hunter` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `risk` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `nocert` varchar(100) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_hunter`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hunter`
--

LOCK TABLES `hunter` WRITE;
/*!40000 ALTER TABLE `hunter` DISABLE KEYS */;
INSERT INTO `hunter` VALUES (1,'Siapa Aja Boleh','XSS','High','2019-05-27','021/cert.bugbounty/BMD/V/2019','https://www.thehackernews.com'),(2,'Gevariel Xaquille Azkaveliano','Remote Command Control','Critical','2019-05-27','011/cert.bugbounty/BMD/V/2019','https://www.thehackernews.com'),(3,'Ignazio Andrean Aradyka','SQL Injection','Low','2019-05-27','019/cert.bugbounty/BMD/V/2019','https://www.facebook.com'),(4,'Xaquille azka','Sensitive Data exposure','Medium','2019-05-27','069/cert.bugbounty/BMD/V/2019','https://www.google.com'),(6,'asdasda','wqeqw','Medium','2008-05-21','asdasd/asda','qwe12');
/*!40000 ALTER TABLE `hunter` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-30  7:34:06
