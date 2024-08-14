-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: 426project
-- ------------------------------------------------------
-- Server version 	10.4.32-MariaDB
-- Date: Wed, 14 Aug 2024 17:21:01 +0530

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
INSERT INTO `adminusers` VALUES (1,'Priyajitsinh','Jadeja','kalpesh915@gmail.com','3acd0be86de7dcccdbf91b20f94a68cea535922d','2024-07-17 11:20:37','2024-08-14 11:47:20');
/*!40000 ALTER TABLE `adminusers` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `adminusers` with 1 row(s)
--

--
-- Table structure for table `career`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `career` (
  `careerid` int(11) NOT NULL AUTO_INCREMENT,
  `candidatename` varchar(32) NOT NULL,
  `candidatephone` varchar(15) NOT NULL,
  `candidateemail` varchar(128) NOT NULL,
  `qualification` varchar(128) NOT NULL,
  `experience` varchar(256) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateofbirth` date NOT NULL,
  `candidateaddress` varchar(1024) NOT NULL,
  `resumepath` varchar(512) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`careerid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `career`
--

LOCK TABLES `career` WRITE;
/*!40000 ALTER TABLE `career` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `career` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `career` with 0 row(s)
--

--
-- Table structure for table `category`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(64) NOT NULL,
  `categoryclassname` varchar(64) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `category` VALUES (1,'Mobile','Mobile',1,'2024-07-30 11:37:34','2024-07-30 11:42:49'),(2,'Mobile Phone','Mobile_Phone',0,'2024-07-30 11:39:22','2024-08-12 11:51:55'),(3,'Head Phone','Head_Phone',1,'2024-07-30 11:39:30','2024-08-12 11:49:02'),(4,'Charger','Charger',1,'2024-08-01 13:22:35','2024-08-12 11:49:17'),(5,'Data Cable','Data_Cable',1,'2024-08-01 13:23:13','2024-08-12 11:49:01'),(6,'Card Reader','Card_Reader',1,'2024-08-01 13:23:20','2024-08-12 11:51:24');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `category` with 6 row(s)
--

--
-- Table structure for table `contactus`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL AUTO_INCREMENT,
  `contactperson` varchar(64) NOT NULL,
  `phone1` varchar(15) NOT NULL,
  `phone2` varchar(15) NOT NULL,
  `email1` varchar(128) NOT NULL,
  `email2` varchar(128) NOT NULL,
  `address` varchar(512) NOT NULL,
  `googlemap` varchar(4096) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactus`
--

LOCK TABLES `contactus` WRITE;
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `contactus` VALUES (1,'Devarshi','9999988888','8888877777','smit@gmail.com','smit@yahoo.com','kalawad road rajkot\r\nnear kansagra college','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.600387836795!2d70.77860527393749!3d22.293122443158175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca246c0ccfc7%3A0x7ac4068b39bb6418!2sBAPS%20Swaminarayan%20Mandir%20Sant%20Ashram!5e0!3m2!1sen!2sin!4v1721819896554!5m2!1sen!2sin','2024-07-24 11:19:14','2024-07-27 13:14:28');
/*!40000 ALTER TABLE `contactus` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `contactus` with 1 row(s)
--

--
-- Table structure for table `faq`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `faqid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(256) NOT NULL,
  `answer` varchar(1024) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`faqid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `faq` VALUES (6,'Question 1','Answer 1',1,'2024-08-07 11:11:15','2024-08-07 11:11:15');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `faq` with 1 row(s)
--

--
-- Table structure for table `images`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `imageid` int(11) NOT NULL AUTO_INCREMENT,
  `imagetitle` varchar(128) NOT NULL,
  `imagedescription` varchar(1024) NOT NULL,
  `imagepath` varchar(512) NOT NULL,
  `imagetype` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`imageid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `images` VALUES (1,'Slider 1','demo','images/Slider 31072024170932 33320 img1.jpg',2,1,'2024-07-31 11:39:32','2024-07-31 11:39:32'),(6,'Slider 1','demo','images/Gallery 02082024165037 47782 img8.jpg',1,1,'2024-08-02 11:20:37','2024-08-12 11:51:00'),(7,'img','abc','images/Gallery 12082024172100 19847 page-header.jpg',1,1,'2024-08-12 11:51:00','2024-08-12 11:51:00');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `images` with 3 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `logs` VALUES (68,'2024-08-08 11:59:46','admin@project.com','Log Deleted',1),(69,'2024-08-09 11:19:19','admin@project.com','Login Successfully',1),(70,'2024-08-12 11:03:28','admin@project.com','Login Successfully',1),(71,'2024-08-12 11:47:43','admin@project.com','Login Successfully',1),(72,'2024-08-12 11:47:45','admin@project.com','Login Successfully',1),(73,'2024-08-12 11:47:47','admin@project.com','Login Successfully',1),(74,'2024-08-12 11:48:04','admin@project.com','Login Successfully',1),(75,'2024-08-13 11:15:49','admin@project.com','Login Successfully',0),(76,'2024-08-13 11:16:39','admin@project.com','SMTP Details are Updated to mail.prajapatispirit.org, developers@prajapatispirit.org, 123@iantRajkot, SSL, 465, 15',0),(77,'2024-08-13 11:17:54','admin@project.com','Invalid Login Attempt',0),(78,'2024-08-13 11:18:06','kalpesh915@gmail.com','Login Successfully',0),(79,'2024-08-14 11:31:06','kalpesh915@gmail.com','Password Reset OTP 122417 send on your email address',0),(80,'2024-08-14 11:47:20','kalpesh915@gmail.com','Password Reset Successfully',0),(81,'2024-08-14 11:48:09','kalpesh915@gmail.com','Password Reset OTP 235169 send on your email address',0),(82,'2024-08-14 11:48:42','kalpesh915@gmail.com','Password Reset Successfully',0),(83,'2024-08-14 11:49:13','kalpesh915@gmail.com','Invalid Login Attempt',0),(84,'2024-08-14 11:49:22','kalpesh915@gmail.com','Login Successfully',0),(85,'2024-08-14 11:50:53','kalpesh915@gmail.com','Login Successfully',0);
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `logs` with 18 row(s)
--

--
-- Table structure for table `messages`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `messageid` int(11) NOT NULL AUTO_INCREMENT,
  `sendername` varchar(128) NOT NULL,
  `senderemail` varchar(128) NOT NULL,
  `senderphone` varchar(15) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `message` varchar(4096) NOT NULL,
  `messagetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`messageid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `messages` VALUES (1,'Smit Vanzara','smeet@gmail.com','9988776655','Testing','how are you?','2024-07-26 11:40:48',1);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `messages` with 1 row(s)
--

--
-- Table structure for table `passwordresetotp`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `passwordresetotp` (
  `otpid` int(11) NOT NULL AUTO_INCREMENT,
  `emailaddress` varchar(128) NOT NULL,
  `otptext` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `expiry_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`otpid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passwordresetotp`
--

LOCK TABLES `passwordresetotp` WRITE;
/*!40000 ALTER TABLE `passwordresetotp` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `passwordresetotp` VALUES (6,'kalpesh915@gmail.com','235169','2024-08-14 11:48:09','2024-08-14 12:03:09',1);
/*!40000 ALTER TABLE `passwordresetotp` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `passwordresetotp` with 1 row(s)
--

--
-- Table structure for table `productimages`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productimages` (
  `productimageid` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `filepath` varchar(256) NOT NULL,
  `mediatype` varchar(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`productimageid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productimages`
--

LOCK TABLES `productimages` WRITE;
/*!40000 ALTER TABLE `productimages` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `productimages` VALUES (20,9,'productimages/image 09082024171102 57343 img3.jpg','image',1,'2024-08-09 11:41:02','2024-08-09 11:41:02'),(21,9,'productimages/image 09082024171102 42510 img4.jpg','image',1,'2024-08-09 11:41:02','2024-08-09 11:41:02'),(25,9,'productimages/image 12082024171118 54690 img7.jpg','image',1,'2024-08-12 11:41:18','2024-08-12 11:41:18'),(26,9,'productimages/image 12082024171118 50853 img8.jpg','image',1,'2024-08-12 11:41:18','2024-08-12 11:41:18'),(27,9,'productimages/image 12082024171118 25719 img11.jpg','image',1,'2024-08-12 11:41:18','2024-08-12 11:41:18');
/*!40000 ALTER TABLE `productimages` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `productimages` with 5 row(s)
--

--
-- Table structure for table `products`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(128) NOT NULL,
  `productcategory` int(11) NOT NULL,
  `brandname` varchar(128) NOT NULL,
  `manufacturedate` date NOT NULL,
  `expirydate` date NOT NULL,
  `material` varchar(256) NOT NULL,
  `packaging` varchar(256) NOT NULL,
  `dimention` varchar(128) NOT NULL,
  `color` varchar(32) NOT NULL,
  `weight` varchar(64) NOT NULL,
  `productdescription` varchar(4096) NOT NULL,
  `country` varchar(64) NOT NULL,
  `handling` varchar(2048) NOT NULL,
  `sku` varchar(16) NOT NULL,
  `price` varchar(20) NOT NULL,
  `discount` varchar(20) NOT NULL,
  `warranty` varchar(1024) NOT NULL,
  `minimumorder` varchar(128) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `products` VALUES (9,'Smart Phone',2,'One Plus','2022-06-07','2027-06-09','Metal','Big Box','110 x 220 x 330','Pearl White','350gms','Demo Example Text demo','UAE','Electronic Product','SAM128','36000','30000','12 Months','1',1,'2024-08-09 11:41:02','2024-08-12 11:50:40');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `products` with 1 row(s)
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
-- Table structure for table `services`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `serviceid` int(11) NOT NULL AUTO_INCREMENT,
  `servicetitle` varchar(32) NOT NULL,
  `servicedescription` varchar(512) NOT NULL,
  `serviceicon` varchar(64) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`serviceid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `services` VALUES (5,'Users','Demo user','fa fa-users',1,'2024-08-07 11:09:59','2024-08-07 11:09:59'),(6,'car','Demo','fa-solid fa-car',1,'2024-08-07 11:10:11','2024-08-07 11:10:11');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `services` with 2 row(s)
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
INSERT INTO `smtpconfig` VALUES (1,'mail.prajapatispirit.org','developers@prajapatispirit.org','123@iantRajkot','ssl','465',15,'2024-07-19 11:45:13','2024-08-14 11:12:55');
/*!40000 ALTER TABLE `smtpconfig` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `smtpconfig` with 1 row(s)
--

--
-- Table structure for table `socialmedia`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `socialmedia` (
  `socialmediaid` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(256) NOT NULL,
  `instagram` varchar(256) NOT NULL,
  `linkedin` varchar(256) NOT NULL,
  `telegram` varchar(256) NOT NULL,
  `snapchat` varchar(256) NOT NULL,
  `youtube` varchar(256) NOT NULL,
  `whatsapp` varchar(256) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `pinterest` varchar(256) NOT NULL,
  PRIMARY KEY (`socialmediaid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socialmedia`
--

LOCK TABLES `socialmedia` WRITE;
/*!40000 ALTER TABLE `socialmedia` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `socialmedia` VALUES (1,'https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com');
/*!40000 ALTER TABLE `socialmedia` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `socialmedia` with 1 row(s)
--

--
-- Table structure for table `subscribers`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscribers` (
  `subscriberid` int(11) NOT NULL AUTO_INCREMENT,
  `subscriberemail` varchar(128) NOT NULL,
  `subscribertime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`subscriberid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribers`
--

LOCK TABLES `subscribers` WRITE;
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `subscribers` VALUES (1,'dhruvisha@gmail.com','2024-07-30 11:56:15',1),(2,'hemal@gmail.com','2024-07-30 11:56:15',1),(3,'smit@gmail.com','2024-07-30 11:56:28',1),(4,'aryan@gmail.com','2024-07-30 11:56:28',1);
/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `subscribers` with 4 row(s)
--

--
-- Table structure for table `team`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `teamid` int(11) NOT NULL AUTO_INCREMENT,
  `membername` varchar(32) NOT NULL,
  `designation` varchar(64) NOT NULL,
  `experience` varchar(64) NOT NULL,
  `jobdescription` varchar(512) NOT NULL,
  `memberphoto` varchar(256) NOT NULL,
  `teamfacebook` varchar(128) NOT NULL,
  `teamtwitter` varchar(128) NOT NULL,
  `teaminstagram` varchar(128) NOT NULL,
  `teamlinkedin` varchar(128) NOT NULL,
  `teamemail` varchar(128) NOT NULL,
  `teamphone` varchar(15) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`teamid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `team` with 0 row(s)
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

-- Dump completed on: Wed, 14 Aug 2024 17:21:01 +0530
