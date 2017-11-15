-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: compare_hardisk_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB

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
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `id_series` int(11) NOT NULL,
  `id_model` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_sub_category` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `item_description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `list_date`
--

DROP TABLE IF EXISTS `list_date`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `list_date` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_model` int(11) NOT NULL,
  `title` text NOT NULL,
  `announced_date` date NOT NULL,
  `end_of_sale` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `list_date`
--

LOCK TABLES `list_date` WRITE;
/*!40000 ALTER TABLE `list_date` DISABLE KEYS */;
/*!40000 ALTER TABLE `list_date` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_model`
--

DROP TABLE IF EXISTS `m_model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_model` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_series` int(11) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `model_description` text,
  `model_status` enum('1','2') NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_model`
--

LOCK TABLES `m_model` WRITE;
/*!40000 ALTER TABLE `m_model` DISABLE KEYS */;
/*!40000 ALTER TABLE `m_model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_series`
--

DROP TABLE IF EXISTS `m_series`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_series` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_vendor` int(11) NOT NULL,
  `series_name` varchar(100) NOT NULL,
  `series_description` text,
  `series_status` enum('1','2') NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_series`
--

LOCK TABLES `m_series` WRITE;
/*!40000 ALTER TABLE `m_series` DISABLE KEYS */;
INSERT INTO `m_series` VALUES (1,1,'series 1','series 1<br>','1'),(2,3,'series 2X','series 2X<br>','1');
/*!40000 ALTER TABLE `m_series` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_type`
--

DROP TABLE IF EXISTS `m_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) NOT NULL,
  `type_description` text,
  `type_status` enum('1','2','3') NOT NULL DEFAULT '2' COMMENT '1 =>active\n2 => not active\n3 => removed',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_type`
--

LOCK TABLES `m_type` WRITE;
/*!40000 ALTER TABLE `m_type` DISABLE KEYS */;
INSERT INTO `m_type` VALUES (1,'HD (hardisk and hybrid array)','kjlk<br>','1'),(2,'crotlkj','<ul><li>dsfdsf</li><li>dfldjflk</li><li>;ldfj<br></li></ul>','1');
/*!40000 ALTER TABLE `m_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_vendor`
--

DROP TABLE IF EXISTS `m_vendor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_vendor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_type` int(11) NOT NULL,
  `vendor_name` varchar(100) NOT NULL,
  `vendor_description` text,
  `vendor_status` enum('1','2') NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_vendor`
--

LOCK TABLES `m_vendor` WRITE;
/*!40000 ALTER TABLE `m_vendor` DISABLE KEYS */;
INSERT INTO `m_vendor` VALUES (1,2,'Dell EMS','-<br>','1'),(2,2,'Fujitsu','-<br>','1'),(3,1,'HPE','-<br>','1'),(4,1,'Hitachi','-<br>','1');
/*!40000 ALTER TABLE `m_vendor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spec_category`
--

DROP TABLE IF EXISTS `spec_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spec_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` int(11) NOT NULL DEFAULT '1',
  `spec_category_name` text NOT NULL,
  `spec_category_description` text,
  `spec_category_status` int(11) NOT NULL DEFAULT '2' COMMENT '1 => active,\n2 => not active,\n3 => removed',
  `spec_category_position` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spec_category`
--

LOCK TABLES `spec_category` WRITE;
/*!40000 ALTER TABLE `spec_category` DISABLE KEYS */;
INSERT INTO `spec_category` VALUES (2,1,'Title And Date','Title and Date',1,1),(3,1,'SPC Benchmark 1™','SPC Benchmark 1™<br>',1,2),(4,1,'General Feature','General Feature<br>',1,3),(5,1,'Storage Processor Feature','Storage Processor Feature<br>',1,4),(6,1,'Software Feature','Software Feature<br>',1,5),(7,1,'Block Module Feature','Block Module Feature<br>',1,6),(8,1,'File Module Feature','File Module Feature<br>',1,7),(9,1,'Operation Enviroment Feature','Operation Enviroment Feature<br>',1,8);
/*!40000 ALTER TABLE `spec_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spec_subcategory`
--

DROP TABLE IF EXISTS `spec_subcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spec_subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_spec_category` varchar(45) NOT NULL,
  `spec_subcategory_name` text NOT NULL,
  `spec_subcategory_description` text,
  `spec_subcategory_status` int(11) NOT NULL DEFAULT '2' COMMENT '1 => active,\n2 => not active,\n3 => removed',
  `spec_subcategory_position` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spec_subcategory`
--

LOCK TABLES `spec_subcategory` WRITE;
/*!40000 ALTER TABLE `spec_subcategory` DISABLE KEYS */;
INSERT INTO `spec_subcategory` VALUES (1,'2','Announced, date','Announced, date<br>',1,1),(2,'2','End Of Sale, date','End Of Sale, date<br>',1,2),(3,'3','SPC-1 IOPS™','100% Load<br>',1,1),(4,'3','Average Response Time, ms','100% Load<br>',1,2),(5,'3','SPC-1 Price-Performance™','',1,3),(6,'3','Total Logical Capacity','',1,4),(7,'3','Data Protection Level','',1,5),(8,'3','Application Utilization, %','Usable Capacity  divided by Physical Storage Capacity<br>',1,6),(10,'4','All Flash (AF): Support / Designed','',1,1),(11,'4','Storage OS','',1,2),(12,'4','Scale-Out Configurations','',1,3),(13,'4','Upgrade','',1,4),(14,'4','Host Connectivity','',1,5),(15,'4','Max. Number of Flash Drive, per HA pair','',1,6),(16,'4','Max. Raw Capacity, per HA pair, TB','',1,7),(17,'4','Large Form Factor (LFF - 3,5\")','',1,8),(18,'4','Additional Disk Types','',1,9),(19,'4','System Architecture','',1,10),(20,'5','Chassis height','',1,11),(21,'5','Internal Drives of SP, per HA pair','',1,12),(22,'5','CPU / RAM, per SP','',1,13),(23,'5','SP Cache (Memory), Default per SP, GB','',1,14),(24,'6','Replication: Synchronous / Asynchronous','',1,15),(25,'6','Storage MetroCluster','The Storage MetroCluster allows to have two copies of synchronous data \r\nin two sites simultaneously. Data is available to read\\write at each \r\nsite. Enables production workloads on both storage systems while \r\nmaintaining full data consistency and protection.<br>',1,16),(26,'6','Thin Provisioning: Thin / Thick','',1,17),(27,'6','Automated Storage Reclamation','',1,18),(28,'7','Max. LUN Size, TB','',1,19),(29,'7','Max. No. of LUNs, per HA pair 	','',1,20),(30,'7','Hosts Connection FC (FCoE), per port / per HA pair','',1,21),(31,'7','Hosts Connection iSCSI, per port / per HA pair','',1,22),(32,'8','File Module','',1,23),(33,'8','CPU / Memory, per File Module','',1,24),(34,'8','Capacity, per File Module','',1,25),(35,'8','File Module Interface, per Module','',1,26),(36,'8','Max. Number of Concurrent NFS / CIFS','',1,27),(37,'8','Max File System Size, TB','',1,28),(38,'8','Max. No. of File Systems','',1,29),(39,'8','Max. Number CIFS Shares or NFS Exports, per HA pair','',1,30),(40,'9','Max. Power Consumption, W (value at 200V)','CE - Controller Enclosure (HA Pair); EE - Expansion Enclosure (Disk \r\nShelf); EE HDE - Expansion Enclosure High Density; FE - File Module.<br>',1,31),(41,'9','Max. Heat Dissipation, Btu/hr','CE - Controller Enclosure (HA Pair); EE - Expansion Enclosure (Disk \r\nShelf); EE HDE - Expansion Enclosure High Density; FE - File Module.<br>',1,32),(42,'9','Operation Temperature, degrees C','',1,33);
/*!40000 ALTER TABLE `spec_subcategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '2' COMMENT '1 => active\n2 => not active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-15  8:06:18
