CREATE DATABASE  IF NOT EXISTS `eam_schema` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `eam_schema`;
-- MySQL dump 10.13  Distrib 5.6.27, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: eam_schema
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.9-MariaDB

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
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `idbooks` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `author` varchar(45) NOT NULL,
  `publisher` varchar(45) NOT NULL,
  `library` varchar(145) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`idbooks`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'istoria','papadakis','patakis','Βιβλιοθήκη Λαογραφίας',7),(2,'istoria','papadakis','gkrizas','Βιβλιοθήκη Βυζαντινής και Νεοελληνικής Φιλολογίας',5),(3,'fysiki agwgi','maltezos','patakis','Βιβλιοθήκη Επιστήμης Φυσικής Αγωγής και Αθλητισμού',8);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `library`
--

DROP TABLE IF EXISTS `library`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `library` (
  `idlibrary` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `rental_duration` int(11) NOT NULL,
  `department` varchar(45) NOT NULL,
  `link` varchar(45) NOT NULL,
  `central_library` varchar(100) NOT NULL,
  `opening_hours` varchar(200) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`idlibrary`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `library`
--

LOCK TABLES `library` WRITE;
/*!40000 ALTER TABLE `library` DISABLE KEYS */;
INSERT INTO `library` VALUES (1,'Βιβλιοθήκη Επιστήμης Φυσικής Αγωγής και Αθλητισμού','Εθν.Αντίστασης 41-Δάφνη',7,'ΤΕΦΑΑ','LibrariesPages/phys_ag.php','Βιβλιοθήκη της Σχολής Επιστήμης Φυσικής Αγωγής και Αθλητισμού','Δευτέρα -Παρασκευή 8.30π.μ.-15.30μ.μ. FAX: 210 7276074','tefaa [AT] lib.uoa.gr'),(2,'Βιβλιοθήκη Επιστημών Υγείας','Μικράς Ασίας και Δήλου 1 Γουδή 115 27',7,'Ιατρική Νοσηλευτική','LibrariesPages/epist_yg.php','Βιβλιοθήκη Σχολής Επιστημών Υγείας','Δευτέρα - Παρασκευή: 08:30 - 20:30 FAX: 210 - 7461459','epistigias [AT] lib.uoa.gr '),(3,'Βιβλιοθήκη Οδοντιατρικής Σχολής','Θηβών 2, 115 27 - Γουδή',7,'Οδοντιατρική','LibrariesPages/odont_sx.php','Βιβλιοθήκη Σχολής Επιστημών Υγείας','Δευτέρα - Παρασκευή 09:00 - 19:00 FAX: 210-7461188','odontiatriki [AT] lib.uoa.gr'),(4,'Βιβλιοθήκη Λαογραφίας','Πανεπιστήμιο Αθηνών, Φιλοσοφική Σχολή, 157 03 Ζωγράφου',7,'Ιστορίας & Αρχαιολογίας Φιλολογία ΦΠΨ','LibrariesPages/laography.php','Βιβλιοθήκη της Φιλοσοφικής Σχολής','Ώρες Λειτουργίας: Δευτέρα, Τετάρτη, Παρασκευή 09:00 - 16:00 Τρίτη & Πέμπτη 09:00 - 19:00. ','laografia [AT] lib.uoa.gr '),(5,'Βιβλιοθήκη Βυζαντινής και Νεοελληνικής Φιλολογίας','Εθνικό και Καποδιστριακό Πανεπιστήμιο Αθηνών Φιλοσοφική Σχολή Σπουδαστήριο Βυζαντινής και Νεοελληνικής Φιλολογίας\nΠανεπιστημιούπολη 157 03 ΖΩΓΡΑΦΟΥ',8,'Φιλολογία','LibrariesPages/library.php','Βιβλιοθήκη της Φιλοσοφικής Σχολής','Δευτέρα-Πέμπτη: 08.30-18.00, Παρασκευή: 08.30-15.30 \nFAX: 210-7277477','viznelfilologia [AT] lib.uoa.gr');
/*!40000 ALTER TABLE `library` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rented_books`
--

DROP TABLE IF EXISTS `rented_books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rented_books` (
  `idrented_books` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `rental_date` date NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `expiration_date` date NOT NULL,
  PRIMARY KEY (`idrented_books`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rented_books`
--

LOCK TABLES `rented_books` WRITE;
/*!40000 ALTER TABLE `rented_books` DISABLE KEYS */;
INSERT INTO `rented_books` VALUES (18,1,'2016-01-26',2,'2016-03-21'),(19,1,'2016-01-26',1,'2016-02-16');
/*!40000 ALTER TABLE `rented_books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `idusers` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'takis','papadopoulos','patissia','123@gmail.com','123');
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

-- Dump completed on 2016-01-26 17:54:06
