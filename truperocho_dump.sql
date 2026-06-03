-- MySQL dump 10.13  Distrib 8.0.45, for Linux (x86_64)
--
-- Host: localhost    Database: truperocho
-- ------------------------------------------------------
-- Server version	8.0.45-0ubuntu0.24.04.1

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
-- Table structure for table `herramientas`
--

DROP TABLE IF EXISTS `herramientas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `herramientas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `stock` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `herramientas`
--

LOCK TABLES `herramientas` WRITE;
/*!40000 ALTER TABLE `herramientas` DISABLE KEYS */;
INSERT INTO `herramientas` VALUES (2,'Martillo de Uña 16oz',155.00,30),(3,'Desarmador Plano 6\"',45.00,50),(4,'Desarmador Cruz 6',45.00,51),(5,'Pinza de Presión 10\"',180.00,30),(6,'Pinza Punta Fina 6\"',120.00,35),(7,'Llave Ajustable 12\"',220.00,20),(8,'Llave Española 10mm',85.00,40),(9,'Cinta Métrica 5m',95.00,45),(10,'Nivel de Burbuja 24\"',175.00,20),(11,'Segueta con Arco',130.00,25),(12,'Sierra Circular 7\"',1850.00,8),(13,'Taladro Percutor 1/2\"',2200.00,10),(14,'Esmeriladora Angular 4.5\"',1500.00,12),(15,'Soldadora Eléctrica 140A',3500.00,5),(16,'Compresor de Aire 25L',4800.00,4),(17,'Llave de Impacto 1/2\"',2800.00,6),(18,'Mazo de Goma 2lb',120.00,30),(19,'Cincel Plano 1\"',75.00,40),(20,'Pata de Cabra 24\"',185.00,15),(21,'Cutter Profesional',65.00,50),(22,'Navaja de Electricista',95.00,35),(23,'Flexómetro 8m',145.00,40),(24,'Escuadra 12\"',110.00,25),(25,'Plomada de 8oz',85.00,20),(26,'Brocha 4\"',55.00,60),(27,'Rodillo de Pintura 9\"',75.00,45),(28,'Pistola de Silicón',120.00,30),(29,'Llave Allen Set 9pzs',195.00,25),(30,'Llave de Tubo 14\"',280.00,15),(31,'Arco de Sierra 12\"',145.00,20),(32,'Cepillo de Madera',220.00,10),(33,'Formón 1\"',135.00,20),(34,'Grampa en C 4\"',165.00,25),(35,'Grampa en C 6\"',210.00,20),(36,'Taladro Manual',350.00,10),(37,'Llave de Perico 10\"',195.00,18),(38,'Cizalla 24\"',850.00,8),(39,'Paleta de Albañil',145.00,30),(40,'Llana Dentada',125.00,25),(41,'Desarmador Destornillador Eléctrico',650.00,15),(42,'Pinza Multiusos 8\"',165.00,28),(43,'Llave Stilson 14\"',320.00,12),(44,'Nivel Láser',1200.00,8),(45,'Cautín 40W',280.00,20),(46,'Multímetro Digital',450.00,15),(47,'Detector de Voltaje',220.00,18),(48,'Cinta Aislante Negra',35.00,80),(49,'Cinta Teflón',25.00,100),(50,'Guantes de Trabajo',85.00,50),(51,'Lentes de Seguridad',65.00,45),(52,'Flexometro',97.00,21);
/*!40000 ALTER TABLE `herramientas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'truperocho'
--

--
-- Dumping routines for database 'truperocho'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-01  2:47:43
SELECT * FROM productos;