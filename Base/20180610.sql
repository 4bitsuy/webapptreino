-- MySQL dump 10.16  Distrib 10.1.29-MariaDB, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: treinolocal
-- ------------------------------------------------------
-- Server version	10.1.29-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES (1,1,'2018-03-20 02:08:12',NULL);
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `archivosftp`
--

LOCK TABLES `archivosftp` WRITE;
/*!40000 ALTER TABLE `archivosftp` DISABLE KEYS */;
INSERT INTO `archivosftp` VALUES (36,2,'este','trinoarch_1525017023.pdf','2018-04-29 18:50:23','2018-04-29 18:50:23');
/*!40000 ALTER TABLE `archivosftp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `cursa`
--

LOCK TABLES `cursa` WRITE;
/*!40000 ALTER TABLE `cursa` DISABLE KEYS */;
INSERT INTO `cursa` VALUES (1,1,1,1,1,'0000-00-00 00:00:00',NULL,'2018-03-01','2018-05-28'),(2,2,2,1,1,NULL,NULL,'2018-04-01','2018-08-22'),(3,1,2,1,1,NULL,NULL,'2018-03-01','2018-12-19');
/*!40000 ALTER TABLE `cursa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `dicta`
--

LOCK TABLES `dicta` WRITE;
/*!40000 ALTER TABLE `dicta` DISABLE KEYS */;
INSERT INTO `dicta` VALUES (1,1,2,1,'2018-03-01','2018-12-19',1,NULL,NULL),(2,1,1,1,'2018-03-01','2018-05-28',1,NULL,NULL),(3,2,2,1,'2018-04-01','2018-08-22',1,NULL,NULL);
/*!40000 ALTER TABLE `dicta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `docente`
--

LOCK TABLES `docente` WRITE;
/*!40000 ALTER TABLE `docente` DISABLE KEYS */;
INSERT INTO `docente` VALUES (1,1,'2018-04-03 01:55:24',NULL),(2,1,'2018-04-05 01:02:02',NULL);
/*!40000 ALTER TABLE `docente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `grado`
--

LOCK TABLES `grado` WRITE;
/*!40000 ALTER TABLE `grado` DISABLE KEYS */;
INSERT INTO `grado` VALUES (1,1,'1 - Lorem puto el que lee, consectetur adipiscing elit. Nulla pharetra ultrices maximus. Praesent vel lobortis erat, eu bibendum augue. Maecenas mollis eu diam in rhoncus. Pellentesque c','2018-03-01','2018-05-10','Abierto',NULL,'2018-03-27 02:13:43'),(2,2,'libero id arcu commodo suscipit at sit amet lorem. Maecenas ex est, maximus tristique tristique sit amet, molestie ut urna. Donec sed nisl sagittis urna euismod rhoncus a sed nisl.','2018-03-10','2018-06-11','abierto',NULL,'2018-03-27 02:09:11');
/*!40000 ALTER TABLE `grado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `lista`
--

LOCK TABLES `lista` WRITE;
/*!40000 ALTER TABLE `lista` DISABLE KEYS */;
/*!40000 ALTER TABLE `lista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (50,'2014_10_12_000000_create_users_table',1),(51,'2014_10_12_100000_create_password_resets_table',1),(52,'2018_02_13_131653_alta_tbl_rol',1),(53,'2018_02_17_141932_alta_tbl_persona',1),(54,'2018_02_17_143945_alta_tbl_alumno',1),(55,'2018_02_17_144408_alta_tbl_docente',1),(56,'2018_02_17_144603_alta_tbl_telefono',1),(57,'2018_02_17_144856_alta_tbl_grado',1),(58,'2018_02_17_145645_alta_tbl_modulo',1),(59,'2018_02_21_015059_alta_tbl_relgramod',1),(60,'2018_02_21_020612_alta_tbl_cursa',1),(61,'2018_02_21_024516_alta_tbl_lista',1),(62,'2018_02_21_025739_alta_tbl_nota',1),(63,'2018_02_21_232255_alta_tbl_relrolusu',1),(64,'2018_02_22_001517_alta_tbl_objetos',1),(65,'2018_02_22_005357_alta_tbl_relrolobjeto',1),(66,'2018_02_22_015543_alta_tbl_tema',1),(67,'2018_02_22_020405_alta_tbl_rel_tema_modulo',1),(68,'2018_02_22_021050_alta_tbl_archivos_ftp',1),(69,'2018_02_27_002540_rename_users',1),(70,'2018_02_27_004131_add_name_users',1),(71,'2018_02_27_234427_rename_password_users',1),(72,'2018_03_01_235751_tbl_rel_tema_alu',1),(73,'2018_03_07_003522_add_dsc_grado',1),(75,'2018_03_20_011912_tema_update',2),(76,'2018_03_21_014013_add_es_curso_corto_tema',3),(77,'2018_03_25_223520_add_fechas_curso',4),(78,'2018_04_03_004011_alta_tbl_dicta',5),(79,'2018_04_03_005540_alta_tbl_rel_tema_doc',5),(80,'2018_04_03_020947_modify_unique_tbl_lista',6),(81,'2018_04_23_155149_alta_tbl_archivos_f_t_p',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `modulo`
--

LOCK TABLES `modulo` WRITE;
/*!40000 ALTER TABLE `modulo` DISABLE KEYS */;
INSERT INTO `modulo` VALUES (1,'Historia del deporte','2 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra ultrices maximus. Praesent vel lobortis erat, eu bibendum augue. Maecenas mollis eu diam in rhoncus. Pellentesque c',NULL,NULL),(2,'Estiramiento','Mauris et libero id arcu commodo suscipit at sit amet lorem. Maecenas ex est, maximus tristique tristique sit amet, molestie ut urna. Donec sed nisl sagittis urna euismod rhoncus a sed nisl. ',NULL,NULL);
/*!40000 ALTER TABLE `modulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nota`
--

LOCK TABLES `nota` WRITE;
/*!40000 ALTER TABLE `nota` DISABLE KEYS */;
/*!40000 ALTER TABLE `nota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `objetos`
--

LOCK TABLES `objetos` WRITE;
/*!40000 ALTER TABLE `objetos` DISABLE KEYS */;
/*!40000 ALTER TABLE `objetos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,50640349,'Robert','Daniel','Sinibaldi','Delle-Fave','0000-00-00','ro@gmail.com','50640349',NULL,NULL);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `relgramod`
--

LOCK TABLES `relgramod` WRITE;
/*!40000 ALTER TABLE `relgramod` DISABLE KEYS */;
INSERT INTO `relgramod` VALUES (1,1,1,NULL,NULL,NULL),(2,2,2,NULL,NULL,NULL);
/*!40000 ALTER TABLE `relgramod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `relrolobjeto`
--

LOCK TABLES `relrolobjeto` WRITE;
/*!40000 ALTER TABLE `relrolobjeto` DISABLE KEYS */;
/*!40000 ALTER TABLE `relrolobjeto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `relrolusu`
--

LOCK TABLES `relrolusu` WRITE;
/*!40000 ALTER TABLE `relrolusu` DISABLE KEYS */;
INSERT INTO `relrolusu` VALUES (1,1,1,NULL,NULL),(2,3,2,NULL,NULL);
/*!40000 ALTER TABLE `relrolusu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `reltemaalu`
--

LOCK TABLES `reltemaalu` WRITE;
/*!40000 ALTER TABLE `reltemaalu` DISABLE KEYS */;
INSERT INTO `reltemaalu` VALUES (1,1,1,NULL,NULL),(2,1,2,NULL,NULL),(3,1,3,NULL,NULL),(4,1,4,NULL,NULL),(5,1,5,NULL,NULL),(6,1,6,NULL,NULL);
/*!40000 ALTER TABLE `reltemaalu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `reltemadoc`
--

LOCK TABLES `reltemadoc` WRITE;
/*!40000 ALTER TABLE `reltemadoc` DISABLE KEYS */;
/*!40000 ALTER TABLE `reltemadoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `reltemamodulo`
--

LOCK TABLES `reltemamodulo` WRITE;
/*!40000 ALTER TABLE `reltemamodulo` DISABLE KEYS */;
INSERT INTO `reltemamodulo` VALUES (1,1,1,NULL,NULL),(2,2,1,NULL,NULL),(3,3,1,NULL,NULL),(4,4,2,NULL,NULL),(5,5,2,NULL,NULL),(6,6,2,NULL,NULL);
/*!40000 ALTER TABLE `reltemamodulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'Administrador','admin',NULL,NULL),(2,'Alumno','alumno',NULL,NULL),(3,'Docente','docente',NULL,NULL);
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `telefono`
--

LOCK TABLES `telefono` WRITE;
/*!40000 ALTER TABLE `telefono` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefono` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tema`
--

LOCK TABLES `tema` WRITE;
/*!40000 ALTER TABLE `tema` DISABLE KEYS */;
INSERT INTO `tema` VALUES (1,'Indigenas y el deporte','Donec tristique elit sed leo fermentum malesuada sed non turpis. Suspendisse aliquam quam eget nunc tristique, eget tincidunt justo vulputate. Duis ac enim quis est bibendum dapibus ac mattis',NULL,NULL,NULL,NULL,NULL,0),(2,'Primeros Balones',' Duis sed ullamcorper tortor. Integer vitae neque non massa sodales volutpat quis ut metus. Nunc orci ex, rutrum non auctor a, pellentesque eget massa. Etiam dictum libero nec congue efficitu',NULL,NULL,NULL,NULL,NULL,0),(3,'Reglas del Deporte','Pellentesque hendrerit sapien mi, vel elementum risus auctor vitae. Phasellus dictum, nulla sit amet molestie porta, nulla justo commodo leo, venenatis elementum dolor arcu sit amet mauris. ',NULL,NULL,NULL,NULL,NULL,1),(4,'Calentamiento','Nam rutrum, felis in efficitur tristique, dui massa imperdiet nisl, a gravida nibh metus eget tellus. Ut pretium sapien urna, volutpat vulputate turpis molestie vitae.',NULL,NULL,NULL,NULL,NULL,1),(5,'Los músculos','Nullam et elit ante. Nunc sem mauris, suscipit ut elementum vitae, accumsan ac diam. Nullam a vehicula nulla. Pellentesque volutpat felis massa, et iaculis ex luctus id.',NULL,NULL,NULL,NULL,NULL,0),(6,'Estiramiento según deporte','Aliquam tortor nibh, interdum a nisl ac, porttitor varius odio. Morbi venenatis a ligula vitae hendrerit. Nulla facilisi. Nunc accumsan, nibh ut pulvinar facilisis, ex diam euismod ipsum, fin',NULL,NULL,NULL,NULL,NULL,0);
/*!40000 ALTER TABLE `tema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'$2y$10$DYZNHma5.e0xL.8OaybNWOE5GpvPWKiBNGYbpiA1WTz0i0vKTzUdm','maxifarcilli@gmail.com','47071662','baWKWDdnzyAL73YKUslqZCq1CHv5YK2QwNMG5nle0IjnVn9Vj7q1k7H9I3ih','2018-02-27 03:47:42','2018-02-27 03:47:42','maxi'),(2,'$2y$10$DYZNHma5.e0xL.8OaybNWOE5GpvPWKiBNGYbpiA1WTz0i0vKTzUdm','ro@gmail.com','50640349','Nc6AxFjFgdIbm6yK2Eg7KnRlxDI1HTNxRGopAflHv6rRBY3qgV73ORS1m6Vy','2018-03-09 03:47:42','2018-03-09 03:47:42','robert');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
