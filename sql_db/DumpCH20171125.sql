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
  `id_model` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_sub_category` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `item_description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=424 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (209,50,2,1,'26-Sep-2016<br><br>',''),(210,50,2,2,'N/A				<br>',''),(211,50,3,3,'N/A				<br>',''),(212,50,3,4,'N/A				<br>',''),(213,50,3,5,'N/A				<br>',''),(214,50,3,6,'N/A				<br>',''),(215,50,3,7,'N/A				<br>',''),(216,50,3,8,'N/A				<br>',''),(217,50,4,10,'<div><i>Yes / Not originally designed for AF</i></div><br>','<u></u><br>'),(218,50,4,11,'SANtricity OS® 8.30<br>','SANtricity OS 8.30 and SANtricity Storage Manager 11.30.\r\nReal-time operating system, based on VxWorks OS.<br>'),(219,50,4,12,'No<br>',''),(220,50,4,13,'No<br>',''),(221,50,4,14,'<div><ul><li>FC</li></ul></div><div><ul><li>iSCSI</li></ul></div><div><ul><li>SAS</li></ul></div><br>',''),(222,50,4,15,'120<br>',''),(223,50,4,16,'1,76 PB				<br>',''),(224,50,4,17,'NL-SAS 7.2K RPM: 4TB; 6TB*; 8TB; 10TB*.<br><br>\r\nSAS 10K RPM: 900GB; 1.2TB; 1.8TB*.<br><br>\r\nSSD: 800GB; 1.6TB*; 3.2TB.<br>','<i>* - available with encryption FIPS.</i><br>'),(225,50,4,19,'SAS 10K RPM: 900GB; 1.2TB; 1.8TB*.<br><i></i><i></i><br>\r\nSSD: 800GB; 1.6TB*; 3.2TB.<i></i><br>','<i>* - available with encryption FIPS.</i><br>'),(226,50,4,18,'N/A				<br>',''),(227,50,4,43,'180 per HA pair				<br>',''),(228,50,5,44,'',''),(229,50,5,20,'',''),(230,50,5,21,'',''),(231,50,5,22,'',''),(232,50,5,23,'',''),(233,50,6,24,'',''),(234,50,6,25,'',''),(235,50,6,26,'',''),(236,50,6,27,'',''),(237,50,7,28,'',''),(238,50,7,29,'',''),(239,50,7,30,'',''),(240,50,7,31,'',''),(241,50,8,32,'',''),(242,50,8,33,'',''),(243,50,8,34,'',''),(244,50,8,35,'',''),(245,50,8,36,'',''),(246,50,8,37,'',''),(247,50,8,38,'',''),(248,50,8,39,'',''),(249,50,9,40,'',''),(250,50,9,41,'',''),(251,50,9,42,'',''),(381,51,2,1,'26-Jul-2000<br>','<i>bla bla bla</i><br>'),(382,51,2,2,'26-Sep-2019<br>','<i>bla bla bla</i><br>'),(383,51,3,3,'',''),(384,51,3,4,'',''),(385,51,3,5,'',''),(386,51,3,6,'',''),(387,51,3,7,'',''),(388,51,3,8,'',''),(389,51,4,10,'',''),(390,51,4,11,'',''),(391,51,4,12,'',''),(392,51,4,13,'',''),(393,51,4,14,'',''),(394,51,4,15,'',''),(395,51,4,16,'',''),(396,51,4,17,'',''),(397,51,4,19,'',''),(398,51,4,18,'',''),(399,51,4,43,'',''),(400,51,5,44,'',''),(401,51,5,20,'',''),(402,51,5,21,'',''),(403,51,5,22,'',''),(404,51,5,23,'',''),(405,51,6,24,'',''),(406,51,6,25,'',''),(407,51,6,26,'',''),(408,51,6,27,'',''),(409,51,7,28,'',''),(410,51,7,29,'',''),(411,51,7,30,'',''),(412,51,7,31,'',''),(413,51,8,32,'',''),(414,51,8,33,'',''),(415,51,8,34,'',''),(416,51,8,35,'',''),(417,51,8,36,'',''),(418,51,8,37,'',''),(419,51,8,38,'',''),(420,51,8,39,'',''),(421,51,9,40,'',''),(422,51,9,41,'',''),(423,51,9,42,'','');
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
  `id_type` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `id_series` int(11) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `model_description` text,
  `model_status` enum('1','2') NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_model`
--

LOCK TABLES `m_model` WRITE;
/*!40000 ALTER TABLE `m_model` DISABLE KEYS */;
INSERT INTO `m_model` VALUES (1,1,1,1,'VNX 5200','-<br>','1'),(2,1,1,1,'VNX 5400','','1'),(3,1,1,1,'VNX 5600','','1'),(4,1,1,4,'VNXe 3150','','1'),(5,1,1,4,'VNXe 3200','','1'),(6,1,1,4,'VNXe 1600','','1'),(7,1,2,2,'DX60 S3','','1'),(8,1,2,2,'DX100 S3','','1'),(9,1,2,2,'DX200 S3','','1'),(10,1,3,3,'7200c','','1'),(11,1,3,3,'7400c','','1'),(12,1,3,3,'7440c','','1'),(13,1,3,6,'20800','','1'),(14,1,3,7,'1040 1GbE iSCSI Controller','','1'),(15,1,3,7,'1040 8Gb FC Controller','','1'),(16,1,4,10,'HUS 110','','1'),(17,1,4,10,'HUS 130','','1'),(18,1,4,10,'HUS 150','','1'),(19,1,4,11,'G1000','','1'),(20,1,4,11,'G200','','1'),(21,1,4,11,'G400','','1'),(22,1,4,11,'G600','','1'),(23,1,4,11,'G800','','1'),(24,1,4,12,'HUS VM','','1'),(25,1,5,13,'5300 V3','','1'),(26,1,5,13,'5500 V3','','1'),(27,1,5,13,'5600 V3','','1'),(28,1,5,13,'5800 V3','','1'),(29,1,5,13,'6800 V3','','1'),(30,1,5,14,'2200 V3','','1'),(31,1,5,14,'2600 V3','','1'),(32,1,6,15,'V3700 gen1','','1'),(33,1,6,15,'V5000 gen1','','1'),(34,1,6,16,'V5010 gen2','','1'),(35,1,6,16,'V5020 gen2','','1'),(36,1,6,16,'V5030 gen2','','1'),(37,1,6,17,'DS8884 Model 980','','1'),(38,1,6,17,'DS8886 Model 981','','1'),(39,1,7,18,'V3700','','1'),(40,1,7,18,'V5000','','1'),(41,1,7,18,'V7000 Gen2','','1'),(42,1,7,19,'S2200 SAN','','1'),(43,1,7,19,'S2200 SAS','','1'),(44,1,7,19,'S3200 SAN','','1'),(45,1,7,19,'S3200 SAS','','1'),(46,1,8,22,'E2712','','1'),(47,1,8,22,'E2724','','1'),(48,1,8,22,'E2760','','1'),(49,1,8,25,'E2812','','1'),(50,1,8,25,'E2824','','1'),(51,1,8,25,'E2860','','1');
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
  `id_type` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `series_name` varchar(100) NOT NULL,
  `series_description` text,
  `series_status` enum('1','2') NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_series`
--

LOCK TABLES `m_series` WRITE;
/*!40000 ALTER TABLE `m_series` DISABLE KEYS */;
INSERT INTO `m_series` VALUES (1,1,1,'VNX2','','1'),(2,1,2,'ETERNUS DX','-<br>','1'),(3,1,3,'3PAR 7000','-<br>','1'),(4,1,1,'VNXe','','1'),(5,1,1,'Unity','','1'),(6,1,3,'3PAR 20000','','1'),(7,1,3,'MSA  1040','','1'),(8,1,3,'MSA 2040','','1'),(9,1,3,'3PAR 8000','','1'),(10,1,4,'HUS 100','','1'),(11,1,4,'VSP G','','1'),(12,1,4,'HUS VM','','1'),(13,1,5,'OceanStor 5000/6000 V3','','1'),(14,1,5,'OceanStor 2000 V3','','1'),(15,1,6,'Storwize gen1','','1'),(16,1,6,'Storwize gen2','','1'),(17,1,6,'DS8880','','1'),(18,1,7,'Lenovo Storwize','','1'),(19,1,7,'Lenovo Storage','','1'),(20,1,8,'FAS2500','','1'),(21,1,8,'FAS8000','','1'),(22,1,8,'E2700','','1'),(23,1,8,'E5500','','1'),(24,1,8,'E5600','','1'),(25,1,8,'E2800','','1'),(26,1,8,'FAS2600','','1'),(27,1,8,'FAS9000','','1'),(28,1,8,'FAS8200','','1');
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
INSERT INTO `m_type` VALUES (1,'HD (hardisk and hybrid array)','','1'),(2,'AF (All Flash Array)','','1');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_vendor`
--

LOCK TABLES `m_vendor` WRITE;
/*!40000 ALTER TABLE `m_vendor` DISABLE KEYS */;
INSERT INTO `m_vendor` VALUES (1,1,'Dell EMC','-<br>','1'),(2,1,'Fujitsu','-<br>','1'),(3,1,'HPE','-<br>','1'),(4,1,'Hitachi','-<br>','1'),(5,1,'Huawei','-<br>','1'),(6,1,'IBM','-<br>','1'),(7,1,'Lenovo','-<br>','1'),(8,1,'NetApp','-<br>','1'),(9,2,'Dell EMC','-<br>','1'),(10,2,'Fujitsu','-<br>','1'),(11,2,'Hitachi','-<br>','1'),(12,2,'IBM','','1'),(13,2,'NetApp','','1'),(14,2,'Pure Storage','','1');
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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spec_subcategory`
--

LOCK TABLES `spec_subcategory` WRITE;
/*!40000 ALTER TABLE `spec_subcategory` DISABLE KEYS */;
INSERT INTO `spec_subcategory` VALUES (1,'2','Announced, date','Announced, date<br>',1,1),(2,'2','End Of Sale, date','End Of Sale, date<br>',1,2),(3,'3','SPC-1 IOPS™','100% Load<br>',1,1),(4,'3','Average Response Time, ms','100% Load<br>',1,2),(5,'3','SPC-1 Price-Performance™','',1,3),(6,'3','Total Logical Capacity','',1,4),(7,'3','Data Protection Level','',1,5),(8,'3','Application Utilization, %','Usable Capacity  divided by Physical Storage Capacity<br>',1,6),(10,'4','All Flash (AF): Support / Designed','',1,1),(11,'4','Storage OS','',1,2),(12,'4','Scale-Out Configurations','',1,3),(13,'4','Upgrade','',1,4),(14,'4','Host Connectivity','',1,5),(15,'4','Max. Number of Flash Drive, per HA pair','',1,6),(16,'4','Max. Raw Capacity, per HA pair, TB','',1,7),(17,'4','Large Form Factor (LFF - 3,5\")','',1,8),(18,'4','Additional Disk Types','',1,10),(19,'4','Small Form Factor (SFF - 2,5\")','',1,9),(20,'5','Chassis height','',1,2),(21,'5','Internal Drives of SP, per HA pair','',1,3),(22,'5','CPU / RAM, per SP','',1,4),(23,'5','SP Cache (Memory), Default per SP, GB','',1,5),(24,'6','Replication: Synchronous / Asynchronous','',1,15),(25,'6','Storage MetroCluster','The Storage MetroCluster allows to have two copies of synchronous data \r\nin two sites simultaneously. Data is available to read\\write at each \r\nsite. Enables production workloads on both storage systems while \r\nmaintaining full data consistency and protection.<br>',1,16),(26,'6','Thin Provisioning: Thin / Thick','',1,17),(27,'6','Automated Storage Reclamation','',1,18),(28,'7','Max. LUN Size, TB','',1,19),(29,'7','Max. No. of LUNs, per HA pair 	','',1,20),(30,'7','Hosts Connection FC (FCoE), per port / per HA pair','',1,21),(31,'7','Hosts Connection iSCSI, per port / per HA pair','',1,22),(32,'8','File Module','',1,23),(33,'8','CPU / Memory, per File Module','',1,24),(34,'8','Capacity, per File Module','',1,25),(35,'8','File Module Interface, per Module','',1,26),(36,'8','Max. Number of Concurrent NFS / CIFS','',1,27),(37,'8','Max File System Size, TB','',1,28),(38,'8','Max. No. of File Systems','',1,29),(39,'8','Max. Number CIFS Shares or NFS Exports, per HA pair','',1,30),(40,'9','Max. Power Consumption, W (value at 200V)','CE - Controller Enclosure (HA Pair); EE - Expansion Enclosure (Disk \r\nShelf); EE HDE - Expansion Enclosure High Density; FE - File Module.<br>',1,31),(41,'9','Max. Heat Dissipation, Btu/hr','CE - Controller Enclosure (HA Pair); EE - Expansion Enclosure (Disk \r\nShelf); EE HDE - Expansion Enclosure High Density; FE - File Module.<br>',1,32),(42,'9','Operation Temperature, degrees C','',1,33),(43,'4','Max. Number of Hard Drives, per HA pair','',1,34),(44,'5','System Architecture','',1,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','admin','1');
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

-- Dump completed on 2017-11-25 14:12:35
