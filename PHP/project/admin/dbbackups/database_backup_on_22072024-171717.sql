-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: 426project
-- ------------------------------------------------------
-- Server version 	10.4.27-MariaDB
-- Date: Mon, 22 Jul 2024 17:17:17 +0530

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adminusers`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminusers`
--

LOCK TABLES `adminusers` WRITE;
/*!40000 ALTER TABLE `adminusers` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `adminusers` VALUES (1,'Priyajitsinh','Jadeja','admin@project.com','d033e22ae348aeb5660fc2140aec35850c4da997','2024-07-17 11:20:37','2024-07-18 11:18:10');
/*!40000 ALTER TABLE `adminusers` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `adminusers` with 1 row(s)
--

--
-- Table structure for table `logs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(128) NOT NULL,
  `event` varchar(2048) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `logs` VALUES (1,'2024-07-17 11:37:50','kalpesh915@gmail.com','Invalid Login Attempt',1),(2,'2024-07-17 11:38:15','admin@project.com','Login Successfully',1),(3,'2024-07-17 11:48:59','admin@project.com','Login Successfully',1),(4,'2024-07-17 11:49:10','admin@project.com','Login Successfully',1),(5,'2024-07-17 12:01:27','admin@project.com','Profile Updated to Vanzara ',1),(6,'2024-07-17 12:01:58','admin@project.com','Profile Updated to Priyajitsinh Jadeja',1),(7,'2024-07-18 11:03:01','admin@project.com','Login Successfully',1),(8,'2024-07-18 11:16:36','admin@project.com','Invalid Attempt of Password Changes',1),(9,'2024-07-18 11:16:57','admin@project.com','Invalid Attempt of Password Changes',1),(10,'2024-07-18 11:17:33','admin@project.com','Password Changes Successfully',1),(11,'2024-07-18 11:18:10','admin@project.com','Password Changes Successfully',1),(12,'2024-07-18 11:41:16','admin@project.com','Settings are Updated to Google Translate = 1 and Career Option to 1',1),(13,'2024-07-18 11:41:43','admin@project.com','Settings are Updated to Google Translate to 0 and Career Option to 1',1),(14,'2024-07-18 11:54:44','admin@project.com','Settings are Updated to Google Translate to 1 and Career Option to 1',1),(15,'2024-07-19 11:13:51','admin@project.com','Login Successfully',1),(16,'2024-07-19 12:05:21','admin@project.com','SMTP Details are Updated to mail.prajapatispirit.org, help@prajapatispirit.org, 123@IantRajkot, SSL, 465, 15',1),(17,'2024-07-22 11:03:30','admin@project.com','Login Successfully',1);
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `logs` with 17 row(s)
--

--
-- Table structure for table `seo`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seo` (
  `seoid` int(11) NOT NULL AUTO_INCREMENT,
  `metakeywords` varchar(1024) NOT NULL,
  `metadescription` varchar(2048) NOT NULL,
  `googletagid` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`seoid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seo`
--

LOCK TABLES `seo` WRITE;
/*!40000 ALTER TABLE `seo` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `seo` VALUES (1,'Phone Cover, Charger, Cable, Data Cable, Headphone, Wireless Headphone, Adapter, Glass, Pin, Sim Card, Mobile Stand and many more....','Shop online for Mobile Accessories at best prices now! Moblix is a one stop shop for genuine Mobile Accessories. Cash on delivery, Free shipping available......','GT-11223344','2024-07-19 11:23:46','2024-07-19 11:37:45');
/*!40000 ALTER TABLE `seo` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `seo` with 1 row(s)
--

--
-- Table structure for table `settings`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `settingid` int(11) NOT NULL AUTO_INCREMENT,
  `googletranslate` tinyint(4) NOT NULL,
  `careeroption` tinyint(4) NOT NULL,
  PRIMARY KEY (`settingid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `settings` VALUES (1,1,1);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `settings` with 1 row(s)
--

--
-- Table structure for table `smtpconfig`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smtpconfig` (
  `configid` int(11) NOT NULL AUTO_INCREMENT,
  `smtphostname` varchar(128) NOT NULL,
  `smtpusername` varchar(128) NOT NULL,
  `smtppassword` varchar(128) NOT NULL,
  `smtpsecure` varchar(20) NOT NULL,
  `smtpport` varchar(10) NOT NULL,
  `otptimelimit` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`configid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smtpconfig`
--

LOCK TABLES `smtpconfig` WRITE;
/*!40000 ALTER TABLE `smtpconfig` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `smtpconfig` VALUES (1,'mail.prajapatispirit.org','help@prajapatispirit.org','123@IantRajkot','SSL','465',15,'2024-07-19 11:45:13','2024-07-19 12:04:44');
/*!40000 ALTER TABLE `smtpconfig` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `smtpconfig` with 1 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Mon, 22 Jul 2024 17:17:17 +0530
