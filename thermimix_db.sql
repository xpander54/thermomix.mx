-- MySQL dump 10.13  Distrib 5.5.29, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: thermomix
-- ------------------------------------------------------
-- Server version	5.5.29-0ubuntu0.12.04.2

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
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appointments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `leido` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(45) NOT NULL DEFAULT 'pendiente',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES (4,'netorcido@gmail.com','Ernesto','Jiménez','44370855','',1,'pendiente','2013-02-28 21:31:46','2013-02-28 21:31:46'),(5,'rodrigo@gmail.com','Rodrigo','De León Zepeda','55193014','Esto es una mamada.',0,'pendiente','2013-03-01 18:57:43','2013-03-01 18:57:43'),(6,'','','','','',0,'pendiente','2013-03-07 14:27:01','2013-03-07 14:27:01'),(7,'','','','','',0,'pendiente','2013-03-07 14:27:38','2013-03-07 14:27:38'),(8,'','','','','',0,'pendiente','2013-03-07 14:28:01','2013-03-07 14:28:01'),(9,'','','','','',0,'pendiente','2013-03-07 14:28:04','2013-03-07 14:28:04'),(10,'','','','','',0,'pendiente','2013-03-07 14:28:10','2013-03-07 14:28:10'),(11,'','','','','',0,'pendiente','2013-03-07 14:28:13','2013-03-07 14:28:13'),(12,'','','','','',0,'pendiente','2013-03-07 14:29:09','2013-03-07 14:29:09'),(13,'','','','','',0,'pendiente','2013-03-07 14:29:12','2013-03-07 14:29:12'),(14,'','','','','',0,'pendiente','2013-03-07 14:29:29','2013-03-07 14:29:29'),(15,'','','','','',0,'pendiente','2013-03-07 14:29:31','2013-03-07 14:29:31'),(16,'','','','','',0,'pendiente','2013-03-07 14:29:34','2013-03-07 14:29:34'),(17,'','','','','',0,'pendiente','2013-03-07 14:29:36','2013-03-07 14:29:36'),(18,'','','','','',0,'pendiente','2013-03-07 14:29:41','2013-03-07 14:29:41'),(19,'','','','','',0,'pendiente','2013-03-07 14:29:44','2013-03-07 14:29:44'),(20,'','','','','',0,'pendiente','2013-03-07 14:29:45','2013-03-07 14:29:45'),(21,'','','','','',0,'pendiente','2013-03-07 14:29:47','2013-03-07 14:29:47'),(22,'','','','','',0,'pendiente','2013-03-07 14:30:04','2013-03-07 14:30:04'),(23,'','','','','',0,'pendiente','2013-03-07 14:30:11','2013-03-07 14:30:11'),(24,'','','','','',0,'pendiente','2013-03-07 14:30:13','2013-03-07 14:30:13'),(25,'','','','','',0,'pendiente','2013-03-07 14:30:15','2013-03-07 14:30:15'),(26,'','','','','',0,'pendiente','2013-03-07 14:30:17','2013-03-07 14:30:17'),(27,'','','','','',0,'pendiente','2013-03-07 14:30:19','2013-03-07 14:30:19'),(28,'','','','','',0,'pendiente','2013-03-07 14:30:22','2013-03-07 14:30:22'),(29,'','','','','',0,'pendiente','2013-03-07 14:30:45','2013-03-07 14:30:45'),(30,'','','','','',0,'pendiente','2013-03-07 14:32:08','2013-03-07 14:32:08'),(31,'','','','','',0,'pendiente','2013-03-07 14:32:10','2013-03-07 14:32:10'),(32,'','','','','',0,'pendiente','2013-03-07 14:32:12','2013-03-07 14:32:12'),(33,'','','','','',0,'pendiente','2013-03-07 14:32:15','2013-03-07 14:32:15'),(34,'','','','','',0,'pendiente','2013-03-07 14:32:33','2013-03-07 14:32:33'),(35,'','','','','',0,'pendiente','2013-03-07 14:32:35','2013-03-07 14:32:35'),(36,'','','','','',0,'pendiente','2013-03-07 14:32:37','2013-03-07 14:32:37'),(37,'','','','','',0,'pendiente','2013-03-07 14:32:39','2013-03-07 14:32:39'),(38,'','','','','',0,'pendiente','2013-03-07 14:32:41','2013-03-07 14:32:41'),(39,'','','','','',0,'pendiente','2013-03-07 14:32:43','2013-03-07 14:32:43'),(40,'','','','','',0,'pendiente','2013-03-07 14:32:44','2013-03-07 14:32:44'),(41,'','','','','',0,'pendiente','2013-03-07 14:32:46','2013-03-07 14:32:46'),(42,'','','','','',0,'pendiente','2013-03-07 14:32:48','2013-03-07 14:32:48'),(43,'','','','','',0,'pendiente','2013-03-07 14:32:50','2013-03-07 14:32:50'),(44,'','','','','',0,'pendiente','2013-03-07 14:32:52','2013-03-07 14:32:52'),(45,'','','','','',0,'pendiente','2013-03-07 14:32:54','2013-03-07 14:32:54'),(46,'','','','','',0,'pendiente','2013-03-07 14:32:55','2013-03-07 14:32:55'),(47,'','','','','',0,'pendiente','2013-03-07 14:32:58','2013-03-07 14:32:58'),(48,'','','','','',0,'pendiente','2013-03-07 14:36:51','2013-03-07 14:36:51');
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-03-08 21:05:46
