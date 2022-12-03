-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: icuab
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `Areas_intereses`
--

DROP TABLE IF EXISTS `Areas_intereses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Areas_intereses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investigador_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `areas_intereses_investigador_id_foreign` (`investigador_id`),
  CONSTRAINT `areas_intereses_investigador_id_foreign` FOREIGN KEY (`investigador_id`) REFERENCES `investigadores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Areas_intereses`
--

LOCK TABLES `Areas_intereses` WRITE;
/*!40000 ALTER TABLE `Areas_intereses` DISABLE KEYS */;
INSERT INTO `Areas_intereses` VALUES (1,'laravel',1,'2022-12-03 21:55:10','2022-12-03 21:55:10'),(2,'php',1,'2022-12-03 21:55:10','2022-12-03 21:55:10'),(3,'JS',1,'2022-12-03 21:55:10','2022-12-03 21:55:10'),(4,'laravel',2,'2022-12-03 21:55:40','2022-12-03 21:55:40'),(5,'php',2,'2022-12-03 21:55:40','2022-12-03 21:55:40'),(6,'JS',2,'2022-12-03 21:55:40','2022-12-03 21:55:40'),(7,'laravel',3,'2022-12-03 22:02:30','2022-12-03 22:02:30'),(8,'liveware',3,'2022-12-03 22:02:30','2022-12-03 22:02:30'),(9,'php',3,'2022-12-03 22:02:30','2022-12-03 22:02:30');
/*!40000 ALTER TABLE `Areas_intereses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `centros_adscripcions`
--

DROP TABLE IF EXISTS `centros_adscripcions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `centros_adscripcions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centros_adscripcions`
--

LOCK TABLES `centros_adscripcions` WRITE;
/*!40000 ALTER TABLE `centros_adscripcions` DISABLE KEYS */;
INSERT INTO `centros_adscripcions` VALUES (1,'Centro de Investigación en Dispositivos Semiconductores ','2022-12-03 00:00:00',NULL),(2,'Centro de Investigación en Ciencias Microbiológicas ','2022-12-03 00:00:00',NULL),(3,'Centro de Química','2022-12-03 00:00:00',NULL),(4,'Centro  de Investigación en Biodiversidad, Alimentación y Cambio Climático','2022-12-03 00:00:00',NULL),(5,'Centro de Agroecología','2022-12-03 00:00:00',NULL),(6,'Centro de Investigación en Físico Química de Materiales ','2022-12-03 00:00:00',NULL),(7,'Centro de Investigación en Ciencias Agrícolas','2022-12-03 00:00:00',NULL),(8,'Departamento de Matemáticas','2022-12-03 00:00:00',NULL),(9,'Departamento Universitario para el Desarrollo Sustentable','2022-12-03 00:00:00',NULL),(10,'Departamento de Biología y Toxicología de la Reproducción','2022-12-03 00:00:00',NULL),(11,'Departamento de Matemáticas','2022-12-03 00:00:00',NULL),(12,'Departamento de Investigación en Zeolítas','2022-12-03 00:00:00',NULL);
/*!40000 ALTER TABLE `centros_adscripcions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `correos`
--

DROP TABLE IF EXISTS `correos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `correos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `correos`
--

LOCK TABLES `correos` WRITE;
/*!40000 ALTER TABLE `correos` DISABLE KEYS */;
INSERT INTO `correos` VALUES (1,'adsd@sads','2022-12-03 21:14:32','2022-12-03 21:14:32'),(2,'luis15ago98@gmail.com','2022-12-03 21:55:10','2022-12-03 21:55:10'),(3,'luis15ago98@gmail.com','2022-12-03 21:55:40','2022-12-03 21:55:40'),(4,'luis15ago98@gmail.com','2022-12-03 22:02:30','2022-12-03 22:02:30');
/*!40000 ALTER TABLE `correos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `investigadores`
--

DROP TABLE IF EXISTS `investigadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `investigadores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_paterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_materno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_id` bigint unsigned NOT NULL,
  `centro_adscripcion_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `investigadores_correo_id_foreign` (`correo_id`),
  KEY `investigadores_centro_adscripcion_id_foreign` (`centro_adscripcion_id`),
  CONSTRAINT `investigadores_centro_adscripcion_id_foreign` FOREIGN KEY (`centro_adscripcion_id`) REFERENCES `centros_adscripcions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `investigadores_correo_id_foreign` FOREIGN KEY (`correo_id`) REFERENCES `correos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `investigadores`
--

LOCK TABLES `investigadores` WRITE;
/*!40000 ALTER TABLE `investigadores` DISABLE KEYS */;
INSERT INTO `investigadores` VALUES (1,'Luis Enrique','Leon','Hernandez',2,1,'2022-12-03 21:55:10','2022-12-03 21:55:10'),(2,'Luis Enrique','Leon','Hernandez',3,1,'2022-12-03 21:55:40','2022-12-03 21:55:40'),(3,'Luis Enrique','Leon','Hernandez',4,1,'2022-12-03 22:02:30','2022-12-03 22:02:30');
/*!40000 ALTER TABLE `investigadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `journals`
--

DROP TABLE IF EXISTS `journals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `journals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `journals`
--

LOCK TABLES `journals` WRITE;
/*!40000 ALTER TABLE `journals` DISABLE KEYS */;
/*!40000 ALTER TABLE `journals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logins`
--

DROP TABLE IF EXISTS `logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo_user` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `logins_tipo_user_foreign` (`tipo_user`),
  CONSTRAINT `logins_tipo_user_foreign` FOREIGN KEY (`tipo_user`) REFERENCES `tipos_users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logins`
--

LOCK TABLES `logins` WRITE;
/*!40000 ALTER TABLE `logins` DISABLE KEYS */;
INSERT INTO `logins` VALUES (4,'henrry','$2y$10$te97OBC17f0As0ou3Vggyu5J0z6jivB6.TI8IeFQFbBGDL0g4eQ1e',NULL,'2022-11-26 22:36:05','2022-11-26 22:36:05',1),(8,'gerardo','$2y$10$nwuzj1aSKSbQspiOB.1QYufUYaQfaMwdsqreDLC0FAhIvE8YinrM2',NULL,'2022-12-03 06:32:25','2022-12-03 06:32:25',1);
/*!40000 ALTER TABLE `logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2022_11_14_023235_create_correos',1),(3,'2022_11_14_023456_create_centros_adscripcions',1),(4,'2022_11_14_023532_create_journals',1),(5,'2022_11_14_024002_create_logins',1),(6,'2022_11_14_024301_create_tipos_redes_institucionales',1),(7,'2022_11_17_000754_create__investigadores',1),(8,'2022_11_17_002935_create_redes_instirucionales',1),(9,'2022_11_17_004132_create_patentes',1),(10,'2022_11_23_051311_create_tipos_users',1),(11,'2022_11_23_051639_add_tipo_field_to_logins_table',1),(13,'2022_12_03_213127_create__areas_intereses',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patentes`
--

DROP TABLE IF EXISTS `patentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patentes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investigador_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patentes_investigador_id_foreign` (`investigador_id`),
  CONSTRAINT `patentes_investigador_id_foreign` FOREIGN KEY (`investigador_id`) REFERENCES `investigadores` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patentes`
--

LOCK TABLES `patentes` WRITE;
/*!40000 ALTER TABLE `patentes` DISABLE KEYS */;
/*!40000 ALTER TABLE `patentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `redes_institucionales`
--

DROP TABLE IF EXISTS `redes_institucionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `redes_institucionales` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_red_institucion_id` bigint unsigned NOT NULL,
  `investigador_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `redes_institucionales_tipo_red_institucion_id_foreign` (`tipo_red_institucion_id`),
  KEY `redes_institucionales_investigador_id_foreign` (`investigador_id`),
  CONSTRAINT `redes_institucionales_investigador_id_foreign` FOREIGN KEY (`investigador_id`) REFERENCES `investigadores` (`id`),
  CONSTRAINT `redes_institucionales_tipo_red_institucion_id_foreign` FOREIGN KEY (`tipo_red_institucion_id`) REFERENCES `tipos_redes_institucionales` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `redes_institucionales`
--

LOCK TABLES `redes_institucionales` WRITE;
/*!40000 ALTER TABLE `redes_institucionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `redes_institucionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_redes_institucionales`
--

DROP TABLE IF EXISTS `tipos_redes_institucionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_redes_institucionales` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_redes_institucionales`
--

LOCK TABLES `tipos_redes_institucionales` WRITE;
/*!40000 ALTER TABLE `tipos_redes_institucionales` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipos_redes_institucionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_users`
--

DROP TABLE IF EXISTS `tipos_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_users`
--

LOCK TABLES `tipos_users` WRITE;
/*!40000 ALTER TABLE `tipos_users` DISABLE KEYS */;
INSERT INTO `tipos_users` VALUES (1,'Administrador'),(2,'Capturista');
/*!40000 ALTER TABLE `tipos_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-03 16:07:56
