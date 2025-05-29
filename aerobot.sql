-- MySQL dump 10.13  Distrib 8.0.42, for Linux (x86_64)
--
-- Host: localhost    Database: sistemadeseguimientoaerobot
-- ------------------------------------------------------
-- Server version	8.0.42

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aerolab_mindkids`
--

DROP TABLE IF EXISTS `aerolab_mindkids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aerolab_mindkids` (
  `id_mindkids` int NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `avance` varchar(100) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `comentarios` varchar(80) NOT NULL,
  `id_alum` int DEFAULT NULL,
  PRIMARY KEY (`id_mindkids`),
  KEY `id_alum` (`id_alum`),
  CONSTRAINT `aerolab_mindkids_ibfk_1` FOREIGN KEY (`id_alum`) REFERENCES `alumnos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aerolab_mindkids`
--

LOCK TABLES `aerolab_mindkids` WRITE;
/*!40000 ALTER TABLE `aerolab_mindkids` DISABLE KEYS */;
INSERT INTO `aerolab_mindkids` VALUES (1,'2025-05-25','programación1','programación1','muy bien',NULL),(2,'2025-05-27','programación2','programación2','vas bien',NULL);
/*!40000 ALTER TABLE `aerolab_mindkids` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumnos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidoPaterno` varchar(50) NOT NULL,
  `apellidoMaterno` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `estatus` varchar(50) DEFAULT NULL,
  `id_usuarios` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuarios` (`id_usuarios`),
  CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (1,'Edwin','Rojas','López','edwinguillermo','Activo',1);
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `apellidoPaterno` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `apellidoMaterno` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `estatus` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Edwin Guillermo','Rojas','López','edwinguillermo','1234','Activo'),(2,'Eric David','Rojas','López','ericdavid','1234','Activo'),(3,'Guillermo','Rojas','López','memo','1234','Inactivo'),(4,'Maria del Pilar','López','Salas','mariadelpilar','1234','Activo');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-26  1:24:14
