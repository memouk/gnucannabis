-- MySQL dump 10.13  Distrib 8.0.41, for Linux (x86_64)
--
-- Host: 192.168.10.4    Database: gnucannabis
-- ------------------------------------------------------
-- Server version	8.0.40-0ubuntu0.22.04.1

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
-- Table structure for table `auth_assignment`
--

DROP TABLE IF EXISTS `auth_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` int DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `auth_item`
--

DROP TABLE IF EXISTS `auth_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_item` (
  `name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` smallint NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `rule_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `auth_item_child`
--

DROP TABLE IF EXISTS `auth_item_child`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `child` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `auth_rule`
--

DROP TABLE IF EXISTS `auth_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auth_rule` (
  `name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `calidades_producto`
--

DROP TABLE IF EXISTS `calidades_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `calidades_producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `caracteristicas_esqueje`
--

DROP TABLE IF EXISTS `caracteristicas_esqueje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `caracteristicas_esqueje` (
  `id` int NOT NULL AUTO_INCREMENT,
  `planta_id` int NOT NULL,
  `num_nudos` int DEFAULT NULL,
  `longitud` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `planta_id` (`planta_id`),
  CONSTRAINT `caracteristicas_esqueje_ibfk_1` FOREIGN KEY (`planta_id`) REFERENCES `plantas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `condiciones_ambientales`
--

DROP TABLE IF EXISTS `condiciones_ambientales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `condiciones_ambientales` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cultivo_id` int NOT NULL,
  `fecha` date NOT NULL,
  `temperatura` decimal(5,2) DEFAULT NULL,
  `humedad` decimal(5,2) DEFAULT NULL,
  `luz` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cultivo_id` (`cultivo_id`),
  CONSTRAINT `condiciones_ambientales_ibfk_1` FOREIGN KEY (`cultivo_id`) REFERENCES `cultivos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cosechas`
--

DROP TABLE IF EXISTS `cosechas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cosechas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `planta_id` int NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `peso_inicial` decimal(10,2) DEFAULT NULL,
  `peso_final` decimal(10,2) DEFAULT NULL,
  `calidad_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `planta_id` (`planta_id`),
  KEY `calidad_id` (`calidad_id`),
  CONSTRAINT `cosechas_ibfk_1` FOREIGN KEY (`planta_id`) REFERENCES `plantas` (`id`),
  CONSTRAINT `cosechas_ibfk_2` FOREIGN KEY (`calidad_id`) REFERENCES `calidades_producto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cultivos`
--

DROP TABLE IF EXISTS `cultivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cultivos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `tipo_cultivo_id` int NOT NULL,
  `tipo_licencia_id` int DEFAULT NULL,
  `pais_id` int NOT NULL,
  `ubicacion` varchar(200) DEFAULT NULL,
  `metodo_cultivo_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_cultivo_id` (`tipo_cultivo_id`),
  KEY `tipo_licencia_id` (`tipo_licencia_id`),
  KEY `pais_id` (`pais_id`),
  KEY `metodo_cultivo_id` (`metodo_cultivo_id`),
  CONSTRAINT `cultivos_ibfk_1` FOREIGN KEY (`tipo_cultivo_id`) REFERENCES `tipos_cultivo` (`id`),
  CONSTRAINT `cultivos_ibfk_2` FOREIGN KEY (`tipo_licencia_id`) REFERENCES `tipos_licencia` (`id`),
  CONSTRAINT `cultivos_ibfk_3` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`),
  CONSTRAINT `cultivos_ibfk_4` FOREIGN KEY (`metodo_cultivo_id`) REFERENCES `metodos_cultivo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cultivos_jardineros`
--

DROP TABLE IF EXISTS `cultivos_jardineros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cultivos_jardineros` (
  `cultivo_id` int NOT NULL,
  `jardinero_id` int NOT NULL,
  PRIMARY KEY (`cultivo_id`,`jardinero_id`),
  KEY `jardinero_id` (`jardinero_id`),
  CONSTRAINT `cultivos_jardineros_ibfk_1` FOREIGN KEY (`cultivo_id`) REFERENCES `cultivos` (`id`),
  CONSTRAINT `cultivos_jardineros_ibfk_2` FOREIGN KEY (`jardinero_id`) REFERENCES `jardineros` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `detalles_aplicacion_producto`
--

DROP TABLE IF EXISTS `detalles_aplicacion_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalles_aplicacion_producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `procedimiento_id` int NOT NULL,
  `producto_id` int NOT NULL,
  `cantidad` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `procedimiento_id` (`procedimiento_id`),
  KEY `producto_id` (`producto_id`),
  CONSTRAINT `detalles_aplicacion_producto_ibfk_1` FOREIGN KEY (`procedimiento_id`) REFERENCES `procedimientos` (`id`),
  CONSTRAINT `detalles_aplicacion_producto_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `etapas_planta`
--

DROP TABLE IF EXISTS `etapas_planta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `etapas_planta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `fotos_procedimiento`
--

DROP TABLE IF EXISTS `fotos_procedimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fotos_procedimiento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `procedimiento_id` int NOT NULL,
  `foto` mediumblob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `procedimiento_id` (`procedimiento_id`),
  CONSTRAINT `fotos_procedimiento_ibfk_1` FOREIGN KEY (`procedimiento_id`) REFERENCES `procedimientos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `inventario`
--

DROP TABLE IF EXISTS `inventario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inventario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cosecha_id` int NOT NULL,
  `cantidad` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cosecha_id` (`cosecha_id`),
  CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`cosecha_id`) REFERENCES `cosechas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `jardineros`
--

DROP TABLE IF EXISTS `jardineros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jardineros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `user_id` (`user_id`),
  CONSTRAINT `fk_jardineros_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `metodos_cultivo`
--

DROP TABLE IF EXISTS `metodos_cultivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `metodos_cultivo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `paises`
--

DROP TABLE IF EXISTS `paises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paises` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `regulacion_autocultivo` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `plantas`
--

DROP TABLE IF EXISTS `plantas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plantas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo_qr` varchar(50) NOT NULL,
  `cultivo_id` int NOT NULL,
  `etapa_id` int NOT NULL,
  `altura` decimal(5,2) DEFAULT NULL,
  `peso` decimal(5,2) DEFAULT NULL,
  `diametro_tallo` decimal(4,2) DEFAULT NULL,
  `num_hojas` int DEFAULT NULL,
  `color_hojas` varchar(50) DEFAULT NULL,
  `tipo_origen` enum('Semilla','Esqueje','Desconocido') NOT NULL,
  `planta_madre_id` int DEFAULT NULL,
  `proveedor` varchar(100) DEFAULT NULL,
  `fecha_germinacion` datetime DEFAULT NULL,
  `fecha_plantacion` datetime DEFAULT NULL,
  `fecha_floracion` datetime DEFAULT NULL,
  `fecha_cosecha` datetime DEFAULT NULL,
  `semilla_id` int DEFAULT NULL,
  `filename` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo_qr` (`codigo_qr`),
  KEY `cultivo_id` (`cultivo_id`),
  KEY `etapa_id` (`etapa_id`),
  KEY `planta_madre_id` (`planta_madre_id`),
  KEY `fk_plantas_semillas` (`semilla_id`),
  CONSTRAINT `fk_plantas_semillas` FOREIGN KEY (`semilla_id`) REFERENCES `semillas` (`id`),
  CONSTRAINT `plantas_ibfk_1` FOREIGN KEY (`cultivo_id`) REFERENCES `cultivos` (`id`),
  CONSTRAINT `plantas_ibfk_2` FOREIGN KEY (`etapa_id`) REFERENCES `etapas_planta` (`id`),
  CONSTRAINT `plantas_ibfk_3` FOREIGN KEY (`planta_madre_id`) REFERENCES `plantas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `procedimientos`
--

DROP TABLE IF EXISTS `procedimientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `procedimientos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `planta_id` int NOT NULL,
  `jardinero_id` int NOT NULL,
  `tipo_procedimiento_id` int NOT NULL,
  `fecha` date NOT NULL,
  `nota` text,
  PRIMARY KEY (`id`),
  KEY `planta_id` (`planta_id`),
  KEY `jardinero_id` (`jardinero_id`),
  KEY `tipo_procedimiento_id` (`tipo_procedimiento_id`),
  CONSTRAINT `procedimientos_ibfk_1` FOREIGN KEY (`planta_id`) REFERENCES `plantas` (`id`),
  CONSTRAINT `procedimientos_ibfk_2` FOREIGN KEY (`jardinero_id`) REFERENCES `jardineros` (`id`),
  CONSTRAINT `procedimientos_ibfk_3` FOREIGN KEY (`tipo_procedimiento_id`) REFERENCES `tipos_procedimiento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `tipo_producto_id` int NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`),
  KEY `tipo_producto_id` (`tipo_producto_id`),
  CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`tipo_producto_id`) REFERENCES `tipos_producto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `semillas`
--

DROP TABLE IF EXISTS `semillas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `semillas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `cepa` varchar(100) DEFAULT NULL,
  `tipo_semilla` enum('Regular','Feminizada','Autofloreciente') DEFAULT NULL,
  `tipo_cannabis` enum('Sativa','Indica','Hibrida') NOT NULL,
  `porcentaje_thc` decimal(5,2) DEFAULT NULL,
  `porcentaje_cbd` decimal(5,2) DEFAULT NULL,
  `tiempo_floracion` int DEFAULT NULL,
  `rendimiento_interior` decimal(5,2) DEFAULT NULL,
  `rendimiento_exterior` decimal(5,2) DEFAULT NULL,
  `zonas_climaticas` varchar(200) DEFAULT NULL,
  `efectos` varchar(200) DEFAULT NULL,
  `sabor` varchar(200) DEFAULT NULL,
  `aroma` varchar(200) DEFAULT NULL,
  `dificultad_cultivo` enum('Fácil','Moderada','Difícil') DEFAULT NULL,
  `tipo_strain` varchar(100) DEFAULT NULL,
  `calificacion` decimal(3,2) DEFAULT NULL,
  `descripcion_strain` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tipos_cultivo`
--

DROP TABLE IF EXISTS `tipos_cultivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_cultivo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tipos_licencia`
--

DROP TABLE IF EXISTS `tipos_licencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_licencia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tipos_procedimiento`
--

DROP TABLE IF EXISTS `tipos_procedimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_procedimiento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tipos_producto`
--

DROP TABLE IF EXISTS `tipos_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `filename` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-31 10:39:33
