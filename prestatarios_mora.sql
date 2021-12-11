-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: prestatarios
-- ------------------------------------------------------
-- Server version	5.7.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `mora`
--

DROP TABLE IF EXISTS `mora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mora` (
  `idmora` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `credito` int(11) DEFAULT NULL,
  `prestatario` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `mora` int(11) DEFAULT NULL,
  `dias` int(11) DEFAULT NULL,
  `telFijo` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telCel` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `referidoPor` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `contactos` varchar(500) COLLATE latin1_spanish_ci DEFAULT NULL,
  `estadoActor` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cuota` double DEFAULT NULL,
  `crear` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idmora`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mora`
--

LOCK TABLES `mora` WRITE;
/*!40000 ALTER TABLE `mora` DISABLE KEYS */;
INSERT INTO `mora` VALUES (60,'2020-07-05',41,'Erika Lizeth Viana Pérez',200000,100000,8,NULL,NULL,NULL,NULL,NULL,'Activo',NULL,'Nuevo Credito'),(61,'2020-01-15',33,'Erika Tatiana Bernal Quimbayo',200000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Activo',NULL,'Nuevo Credito'),(62,'2020-05-25',31,'Humberto Ortiz Carvajal',100000,NULL,NULL,'000000','3001112233','Juan@juan.com','Carlos',NULL,'Activo',NULL,'Nuevo Credito'),(63,'2021-01-15',30,'Juan Pablo Sarmiento Bautista',150000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `mora` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-11 14:10:07
