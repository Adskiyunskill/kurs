-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mydb
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cars` (
  `id_cars` int NOT NULL,
  `marks` varchar(50) NOT NULL,
  `years_old` int NOT NULL,
  `user_id_user` int NOT NULL,
  PRIMARY KEY (`id_cars`),
  KEY `fk_cars_user1_idx` (`user_id_user`),
  CONSTRAINT `fk_cars_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,'Форд Фокус',2018,1);
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cars_addition`
--

DROP TABLE IF EXISTS `cars_addition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cars_addition` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cars_id_cars` int NOT NULL,
  `type_car` varchar(50) NOT NULL,
  `mileage` decimal(10,2) NOT NULL,
  `extendet_info` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cars_addition_cars1_idx` (`cars_id_cars`),
  CONSTRAINT `fk_cars_addition_cars1` FOREIGN KEY (`cars_id_cars`) REFERENCES `cars` (`id_cars`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars_addition`
--

LOCK TABLES `cars_addition` WRITE;
/*!40000 ALTER TABLE `cars_addition` DISABLE KEYS */;
/*!40000 ALTER TABLE `cars_addition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `insurance policies`
--

DROP TABLE IF EXISTS `insurance policies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `insurance policies` (
  `id_Insurance policies` int NOT NULL AUTO_INCREMENT,
  `cars_id_cars` int NOT NULL,
  `type_policies` varchar(50) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id_Insurance policies`),
  KEY `fk_Insurance policies_cars1_idx` (`cars_id_cars`),
  CONSTRAINT `fk_Insurance policies_cars1` FOREIGN KEY (`cars_id_cars`) REFERENCES `cars` (`id_cars`)
) ENGINE=InnoDB AUTO_INCREMENT=24534346 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insurance policies`
--

LOCK TABLES `insurance policies` WRITE;
/*!40000 ALTER TABLE `insurance policies` DISABLE KEYS */;
INSERT INTO `insurance policies` VALUES (1,1,'Абоба','2021-01-20','2024-05-20',9000.00,'On');
/*!40000 ALTER TABLE `insurance policies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tel_numb` varchar(15) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `num_strax` varchar(50) DEFAULT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin','79621848940','agarions21@gmail.com','1','Дмитрий','Скворцов'),(2,'anna89','password2','8849939','annaexample@gmail.com','2','Анна','Форджер'),(3,'24paketik','Volt19721',NULL,'xziiiii2003@gmail.com',NULL,NULL,NULL),(5,'testik','password1',NULL,'rabbit_001@bk.ru',NULL,NULL,NULL),(6,'fgddfg','22334455',NULL,'antonohotnikov41@gmail.com',NULL,NULL,NULL),(7,'telefone','Energo44',NULL,'st-is.0719@spo-ket.ru',NULL,NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-01 12:23:52
