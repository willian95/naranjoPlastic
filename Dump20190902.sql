-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: naranjo
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `caja`
--

DROP TABLE IF EXISTS `caja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAuth` int(11) NOT NULL,
  `operacion` varchar(191) NOT NULL,
  `comentario` text NOT NULL,
  `pesos` decimal(10,2) NOT NULL,
  `dolar` decimal(10,2) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caja`
--

LOCK TABLES `caja` WRITE;
/*!40000 ALTER TABLE `caja` DISABLE KEYS */;
/*!40000 ALTER TABLE `caja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cita`
--

DROP TABLE IF EXISTS `cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) DEFAULT NULL,
  `idTerapeuta` int(11) DEFAULT NULL,
  `idConsultorio` int(11) DEFAULT NULL,
  `idAuth` int(11) DEFAULT NULL,
  `horaInicio` time DEFAULT NULL,
  `horaFinal` time DEFAULT NULL,
  `fechaCita` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `idServicio` int(11) DEFAULT NULL,
  `observacion` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cita`
--

LOCK TABLES `cita` WRITE;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
INSERT INTO `cita` VALUES (1,1,5,NULL,5,'13:00:00','14:00:00','2019-08-14','2019-08-14 21:59:25','2019-08-14 21:59:25',NULL,'CITA PRUEBA'),(7,1,5,1,5,'13:00:00','14:00:00','2019-08-16','2019-08-16 16:58:30','2019-08-16 16:58:30',1,'CITA DE PRUEBA');
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idEstado` int(11) NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudad`
--

LOCK TABLES `ciudad` WRITE;
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `apePat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaNacimiento` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lugarNacimiento` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edad` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telCasa` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telOficina` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `escolaridad` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edoCivil` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigoPostal` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enteroNosotros` text COLLATE utf8mb4_unicode_ci,
  `cirugiasPrevias` text COLLATE utf8mb4_unicode_ci,
  `puesto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compania` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telCompania` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emerNombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emerRelacion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emerTel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombreSeccion2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lugarNacimientoSeccion2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edadSeccion2` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefonoSeccion2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaHistoriaSeccion2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaNacimientoSeccion2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `padreSeccion2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enfermedadesPadreSeccion2` text COLLATE utf8mb4_unicode_ci,
  `alergiasPadreSeccion2` text COLLATE utf8mb4_unicode_ci,
  `madreSeccion2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enfermedadesMadreSeccion2` text COLLATE utf8mb4_unicode_ci,
  `alergiasMadreSeccion2` text COLLATE utf8mb4_unicode_ci,
  `abuelosPaternosEnfermedadesSeccion2` text COLLATE utf8mb4_unicode_ci,
  `abuelosMaternosEnfermedadesSeccion2` text COLLATE utf8mb4_unicode_ci,
  `hermanosCuantosSeccion2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hermanosEnfermedadesSeccion2` text COLLATE utf8mb4_unicode_ci,
  `enfermedadesCongenitasSeccion2` text COLLATE utf8mb4_unicode_ci,
  `enfermedadesInfanciaSeccion2` text COLLATE utf8mb4_unicode_ci,
  `enfermedadesCronicoDegenerativasSeccion2` text COLLATE utf8mb4_unicode_ci,
  `internamientosQuirurgicosSeccion2` text COLLATE utf8mb4_unicode_ci,
  `transfusionesSeccion2` text COLLATE utf8mb4_unicode_ci,
  `traumaticasSeccion2` text COLLATE utf8mb4_unicode_ci,
  `alergiasSeccion2` text COLLATE utf8mb4_unicode_ci,
  `tabaquismoSeccion2` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcoholismoSeccion2` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drogasSeccion2` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numeroHabitacionesSeccion2` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuantasPersonasSeccion2` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materialSeccion2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ventilacionSeccion2` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aguaSeccion2` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gasSeccion2` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luzSeccion2` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drenajeSeccion2` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mascotasSeccion2` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cualesMascotasSeccion2` text COLLATE utf8mb4_unicode_ci,
  `disposicionBasuraSeccion2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alimentacionSeccion2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organizacionSeccion2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `higieneSeccion2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gestasSeccion2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partosSeccion2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cesareasSeccion2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abortosSeccion2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ivsaSeccion2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pfSeccion2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expedienteNumeroSeccion2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `padecimientoSeccion3` text COLLATE utf8mb4_unicode_ci,
  `asteniaSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adinamiaSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hiporexiaSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perdidaPesoSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `problemaRespirarSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sonidosRespirarSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secrecionesSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colorEsputoSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agitaSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cansancioSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cianosisSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fatigaSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soplosSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diarreaSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mocoSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sangreSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estreSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excretaSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vomitosSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poliuriaSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disuriaSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sangreGenitourinarioSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `olorSeccion3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colorSeccion3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frecuenciaOrinarSeccion3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenesmoSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hiperactividadSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perdidaFuerzaSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `somnolenciaSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cefaleasSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `irritabilidadSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paresiasSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faltaMovimientoSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parestiasisSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `movimientosInvoluntariosSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artralgiasSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contraccionesMusculosSeccion3` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erupcionesSeccion3` text COLLATE utf8mb4_unicode_ci,
  `dematosisSeccion3` text COLLATE utf8mb4_unicode_ci,
  `glandulasSeccion3` text COLLATE utf8mb4_unicode_ci,
  `peloSeccion3` text COLLATE utf8mb4_unicode_ci,
  `dientesSeccion3` text COLLATE utf8mb4_unicode_ci,
  `grSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hbSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hctSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plagSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmhgSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leuSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monoSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eosSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clientescol` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `segmentadosSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enBandaSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qsGlucosaSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ureaSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creatininaSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagSeccion3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otrasCirugias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furSeccion2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taSeccion4` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fcSeccion4` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempSeccion4` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pesoSeccion4` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estatusSeccion4` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabezaSeccion4` text COLLATE utf8mb4_unicode_ci,
  `cuelloSeccion4` text COLLATE utf8mb4_unicode_ci,
  `toraxSeccion4` text COLLATE utf8mb4_unicode_ci,
  `abdomenSeccion4` text COLLATE utf8mb4_unicode_ci,
  `extremidadesSeccion4` text COLLATE utf8mb4_unicode_ci,
  `genitalesSeccion4` text COLLATE utf8mb4_unicode_ci,
  `diagnosticoSeccion4` text COLLATE utf8mb4_unicode_ci,
  `tratamientoSeccion4` text COLLATE utf8mb4_unicode_ci,
  `pais` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (8,'NOMBRE','2019-09-02 09:33:38','2019-09-02 09:43:21','APELLIDO','2019-09-01','lugar de nacimiento','23',NULL,NULL,NULL,'religion','3','ejemplo@gmail.com','2','2','1019','calle','ciudad','4102','entero nosootrtos','cirugias previas','PUESTO','COMPAÑIA','telefono','NOMBRE RELACION TELEFONO','RELACION','telefono','nombre2','lugar nacimiento','23','123','2019-09-01','2019-09-11','padre','enfermedades padre','alergias padre','madre','enfermedades madre','alergias madre','enfermedades abuelo paterno','enfermedades abuelo materno','4','enfermedades hermanos','enfermedades congenitas','enfermedades propias',NULL,'internamientos','transfusiones','traumaticas','alergia','1','1','1','4','4','material','1','1','1','1','1','1','mascotas','basura','alimentacion','organizaciones','higiene','1','3','4','5','7','8','123123',NULL,'1','1','1','1','1','1','1',NULL,'1','1','1','1','1','1','1','1','1','1','1','1','1','0','olor','color','frecuencia orinar','1','1','1','2','1','1','1','1','1','1','1','0','erupciones','dematosis','gladulas','uñas','dientes','gr','hb','hct','plag','cmhg','leu','lin','mono','eos','bas',NULL,'segmentados','en banda','qs','urea','creatinina','col','tag',NULL,'cirugias previas','6','ta','fc','temp',NULL,'estatura','cabeza','cuello','torax','abdomen','extremidades','genitales','diagnostico','tratamiento','11'),(9,'NOMBRE','2019-09-02 09:38:19','2019-09-02 09:38:19','APELLIDO','2019-09-01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'email@gmail.com','1','2','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0','0',NULL,NULL,NULL,'0','0','0','0','0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'123123',NULL,'0','0','0','0','0','0','0','color esputo','0','0','0','0','0','0','0','0','0','0','0','0','0','0',NULL,NULL,NULL,'0','0','0',NULL,'0','0','0','0','0','0','0','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'peso',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'4');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consultorio`
--

DROP TABLE IF EXISTS `consultorio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consultorio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAuth` int(11) NOT NULL,
  `consultorio` varchar(191) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultorio`
--

LOCK TABLES `consultorio` WRITE;
/*!40000 ALTER TABLE `consultorio` DISABLE KEYS */;
INSERT INTO `consultorio` VALUES (1,5,'CONSULTA','2019-08-14 22:10:20','2019-08-14 22:10:20');
/*!40000 ALTER TABLE `consultorio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detallemembresia`
--

DROP TABLE IF EXISTS `detallemembresia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detallemembresia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idMembresia` int(11) NOT NULL,
  `idProdServ` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detallemembresia`
--

LOCK TABLES `detallemembresia` WRITE;
/*!40000 ALTER TABLE `detallemembresia` DISABLE KEYS */;
/*!40000 ALTER TABLE `detallemembresia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detallemembresiausuario`
--

DROP TABLE IF EXISTS `detallemembresiausuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detallemembresiausuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idMembresia` int(11) NOT NULL,
  `idProdServ` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detallemembresiausuario`
--

LOCK TABLES `detallemembresiausuario` WRITE;
/*!40000 ALTER TABLE `detallemembresiausuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `detallemembresiausuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalleservicio`
--

DROP TABLE IF EXISTS `detalleservicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalleservicio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idProducto` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  `productoSesion` int(11) NOT NULL,
  `productoCompleto` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalleservicio`
--

LOCK TABLES `detalleservicio` WRITE;
/*!40000 ALTER TABLE `detalleservicio` DISABLE KEYS */;
INSERT INTO `detalleservicio` VALUES (1,1,1,3,15,'2019-08-14 22:09:56','2019-08-14 22:09:56'),(2,1,2,0,0,'2019-08-15 20:12:47','2019-08-15 20:12:47'),(3,1,3,0,0,'2019-08-15 20:14:38','2019-08-15 20:14:38'),(4,1,4,0,0,'2019-08-15 20:15:07','2019-08-15 20:15:07'),(5,1,5,0,0,'2019-08-15 20:15:37','2019-08-15 20:15:37'),(6,1,6,0,0,'2019-08-15 20:15:56','2019-08-15 20:15:56'),(7,1,7,0,0,'2019-08-15 20:16:23','2019-08-15 20:16:23'),(8,1,8,0,0,'2019-08-15 20:16:57','2019-08-15 20:16:57'),(9,1,9,0,0,'2019-08-15 20:17:18','2019-08-15 20:17:18'),(10,1,10,0,0,'2019-08-15 20:17:36','2019-08-15 20:17:36'),(11,1,11,0,0,'2019-08-15 20:18:03','2019-08-15 20:18:03'),(12,1,12,0,0,'2019-08-15 20:18:32','2019-08-15 20:18:32'),(13,1,13,0,0,'2019-08-15 20:18:55','2019-08-15 20:18:55'),(14,1,14,0,0,'2019-08-15 20:19:24','2019-08-15 20:19:24'),(15,1,15,0,0,'2019-08-15 20:19:46','2019-08-15 20:19:46'),(16,1,16,0,0,'2019-08-15 20:20:11','2019-08-15 20:20:11'),(17,1,17,0,0,'2019-08-15 20:20:35','2019-08-15 20:20:35'),(18,1,18,0,0,'2019-08-15 20:20:50','2019-08-15 20:20:50'),(19,1,19,0,0,'2019-08-15 20:21:14','2019-08-15 20:21:14'),(20,1,20,0,0,'2019-08-15 20:21:54','2019-08-15 20:21:54'),(21,1,21,0,0,'2019-08-15 20:22:31','2019-08-15 20:22:31'),(22,1,22,0,0,'2019-08-15 20:22:51','2019-08-15 20:22:51'),(23,1,23,0,0,'2019-08-15 20:23:10','2019-08-15 20:23:10'),(24,1,24,0,0,'2019-08-15 20:23:28','2019-08-15 20:23:28'),(25,1,25,0,0,'2019-08-15 20:23:49','2019-08-15 20:23:49'),(26,1,26,0,0,'2019-08-15 20:24:13','2019-08-15 20:24:13'),(27,1,27,0,0,'2019-08-15 20:24:27','2019-08-15 20:24:27'),(28,1,28,0,0,'2019-08-15 20:24:43','2019-08-15 20:24:43'),(29,1,29,0,0,'2019-08-15 20:25:03','2019-08-15 20:25:03'),(30,1,30,0,0,'2019-08-15 20:25:28','2019-08-15 20:25:28'),(31,1,31,0,0,'2019-08-15 20:25:48','2019-08-15 20:25:48');
/*!40000 ALTER TABLE `detalleservicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalleventa`
--

DROP TABLE IF EXISTS `detalleventa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalleventa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `folio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` decimal(8,2) NOT NULL,
  `cantidad` decimal(8,2) DEFAULT NULL,
  `cantidadDisponible` decimal(8,2) DEFAULT NULL,
  `cantidadStock` decimal(8,2) DEFAULT NULL,
  `total` decimal(8,2) NOT NULL,
  `costo` decimal(8,2) DEFAULT NULL,
  `idTerapeuta` decimal(8,2) DEFAULT NULL,
  `completo` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalleventa`
--

LOCK TABLES `detalleventa` WRITE;
/*!40000 ALTER TABLE `detalleventa` DISABLE KEYS */;
INSERT INTO `detalleventa` VALUES (1,'1',1,'PRUEBA',50.00,1.00,5.00,4.00,50.00,20.00,NULL,NULL,NULL,'2019-08-15 20:38:46','2019-08-15 20:38:46'),(2,'2',1,'PRUEBA',50.00,2.00,4.00,2.00,100.00,20.00,NULL,NULL,NULL,'2019-08-15 20:40:08','2019-08-15 20:40:08');
/*!40000 ALTER TABLE `detalleventa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalleventaservicio`
--

DROP TABLE IF EXISTS `detalleventaservicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalleventaservicio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idTerapeuta` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idProducto` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `servicioCantidad` int(11) DEFAULT NULL,
  `disponible` int(11) DEFAULT NULL,
  `idTipoServicio` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalleventaservicio`
--

LOCK TABLES `detalleventaservicio` WRITE;
/*!40000 ALTER TABLE `detalleventaservicio` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalleventaservicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) DEFAULT NULL,
  `pais_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2204 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'Azerbaijan',3),(2,'Nargorni Karabakh',3),(3,'Nakhichevanskaya Region',3),(4,'Anguilla',4),(5,'Brestskaya obl.',7),(6,'Vitebskaya obl.',7),(7,'Gomelskaya obl.',7),(8,'Grodnenskaya obl.',7),(9,'Minskaya obl.',7),(10,'Mogilevskaya obl.',7),(11,'Belize',8),(12,'Hamilton',10),(13,'Dong Bang Song Cuu Long',15),(14,'Dong Bang Song Hong',15),(15,'Dong Nam Bo',15),(16,'Duyen Hai Mien Trung',15),(17,'Khu Bon Cu',15),(18,'Mien Nui Va Trung Du',15),(19,'Thai Nguyen',15),(20,'Artibonite',16),(21,'Grand&#039;Anse',16),(22,'North West',16),(23,'West',16),(24,'South',16),(25,'South East',16),(26,'Grande-Terre',17),(27,'Basse-Terre',17),(28,'Abkhazia',21),(29,'Ajaria',21),(30,'Georgia',21),(31,'South Ossetia',21),(32,'Al QÄhira',23),(33,'Aswan',23),(34,'Asyut',23),(35,'Beni Suef',23),(36,'Gharbia',23),(37,'Damietta',23),(38,'Southern District',24),(39,'Central District',24),(40,'Northern District',24),(41,'Haifa',24),(42,'Tel Aviv',24),(43,'Jerusalem',24),(44,'Bangala',25),(45,'Chhattisgarh',25),(46,'Karnataka',25),(47,'Uttaranchal',25),(48,'Andhara Pradesh',25),(49,'Assam',25),(50,'Bihar',25),(51,'Gujarat',25),(52,'Jammu and Kashmir',25),(53,'Kerala',25),(54,'Madhya Pradesh',25),(55,'Manipur',25),(56,'Maharashtra',25),(57,'Megahalaya',25),(58,'Orissa',25),(59,'Punjab',25),(60,'Pondisheri',25),(61,'Rajasthan',25),(62,'Tamil Nadu',25),(63,'Tripura',25),(64,'Uttar Pradesh',25),(65,'Haryana',25),(66,'Chandigarh',25),(67,'Azarbayjan-e Khavari',26),(68,'Esfahan',26),(69,'Hamadan',26),(70,'Kordestan',26),(71,'Markazi',26),(72,'Sistan-e Baluches',26),(73,'Yazd',26),(74,'Kerman',26),(75,'Kermanshakhan',26),(76,'Mazenderan',26),(77,'Tehran',26),(78,'Fars',26),(79,'Horasan',26),(80,'Husistan',26),(81,'Aktyubinskaya obl.',30),(82,'Alma-Atinskaya obl.',30),(83,'Vostochno-Kazahstanskaya obl.',30),(84,'Gurevskaya obl.',30),(85,'Zhambylskaya obl. (Dzhambulskaya obl.)',30),(86,'Dzhezkazganskaya obl.',30),(87,'Karagandinskaya obl.',30),(88,'Kzyl-Ordinskaya obl.',30),(89,'Kokchetavskaya obl.',30),(90,'Kustanaiskaya obl.',30),(91,'Mangystauskaya (Mangyshlakskaya obl.)',30),(92,'Pavlodarskaya obl.',30),(93,'Severo-Kazahstanskaya obl.',30),(94,'Taldy-Kurganskaya obl.',30),(95,'Turgaiskaya obl.',30),(96,'Akmolinskaya obl. (Tselinogradskaya obl.)',30),(97,'Chimkentskaya obl.',30),(98,'Littoral',31),(99,'Southwest Region',31),(100,'North',31),(101,'Central',31),(102,'Government controlled area',33),(103,'Turkish controlled area',33),(104,'Issik Kulskaya Region',34),(105,'Kyrgyzstan',34),(106,'Narinskaya Region',34),(107,'Oshskaya Region',34),(108,'Tallaskaya Region',34),(109,'al-Jahra',37),(110,'al-Kuwait',37),(111,'Latviya',38),(112,'Tarabulus',39),(113,'Bengasi',39),(114,'Litva',40),(115,'Moldova',43),(116,'Auckland',45),(117,'Bay of Plenty',45),(118,'Canterbury',45),(119,'Gisborne',45),(120,'Hawke&#039;s Bay',45),(121,'Manawatu-Wanganui',45),(122,'Marlborough',45),(123,'Nelson',45),(124,'Northland',45),(125,'Otago',45),(126,'Southland',45),(127,'Taranaki',45),(128,'Tasman',45),(129,'Waikato',45),(130,'Wellington',45),(131,'West Coast',45),(132,'Saint-Denis',49),(133,'Altaiskii krai',50),(134,'Amurskaya obl.',50),(135,'Arhangelskaya obl.',50),(136,'Astrahanskaya obl.',50),(137,'Bashkiriya obl.',50),(138,'Belgorodskaya obl.',50),(139,'Bryanskaya obl.',50),(140,'Buryatiya',50),(141,'Vladimirskaya obl.',50),(142,'Volgogradskaya obl.',50),(143,'Vologodskaya obl.',50),(144,'Voronezhskaya obl.',50),(145,'Nizhegorodskaya obl.',50),(146,'Dagestan',50),(147,'Evreiskaya obl.',50),(148,'Ivanovskaya obl.',50),(149,'Irkutskaya obl.',50),(150,'Kabardino-Balkariya',50),(151,'Kaliningradskaya obl.',50),(152,'Tverskaya obl.',50),(153,'Kalmykiya',50),(154,'Kaluzhskaya obl.',50),(155,'Kamchatskaya obl.',50),(156,'Kareliya',50),(157,'Kemerovskaya obl.',50),(158,'Kirovskaya obl.',50),(159,'Komi',50),(160,'Kostromskaya obl.',50),(161,'Krasnodarskii krai',50),(162,'Krasnoyarskii krai',50),(163,'Kurganskaya obl.',50),(164,'Kurskaya obl.',50),(165,'Lipetskaya obl.',50),(166,'Magadanskaya obl.',50),(167,'Marii El',50),(168,'Mordoviya',50),(169,'Moscow &amp; Moscow Region',50),(170,'Murmanskaya obl.',50),(171,'Novgorodskaya obl.',50),(172,'Novosibirskaya obl.',50),(173,'Omskaya obl.',50),(174,'Orenburgskaya obl.',50),(175,'Orlovskaya obl.',50),(176,'Penzenskaya obl.',50),(177,'Permskiy krai',50),(178,'Primorskii krai',50),(179,'Pskovskaya obl.',50),(180,'Rostovskaya obl.',50),(181,'Ryazanskaya obl.',50),(182,'Samarskaya obl.',50),(183,'Saint-Petersburg and Region',50),(184,'Saratovskaya obl.',50),(185,'Saha (Yakutiya)',50),(186,'Sahalin',50),(187,'Sverdlovskaya obl.',50),(188,'Severnaya Osetiya',50),(189,'Smolenskaya obl.',50),(190,'Stavropolskii krai',50),(191,'Tambovskaya obl.',50),(192,'Tatarstan',50),(193,'Tomskaya obl.',50),(195,'Tulskaya obl.',50),(196,'Tyumenskaya obl. i Hanty-Mansiiskii AO',50),(197,'Udmurtiya',50),(198,'Ulyanovskaya obl.',50),(199,'Uralskaya obl.',50),(200,'Habarovskii krai',50),(201,'Chelyabinskaya obl.',50),(202,'Checheno-Ingushetiya',50),(203,'Chitinskaya obl.',50),(204,'Chuvashiya',50),(205,'Yaroslavskaya obl.',50),(206,'Ahuachapán',51),(207,'Cuscatlán',51),(208,'La Libertad',51),(209,'La Paz',51),(210,'La Unión',51),(211,'San Miguel',51),(212,'San Salvador',51),(213,'Santa Ana',51),(214,'Sonsonate',51),(215,'Paramaribo',54),(216,'Gorno-Badakhshan Region',56),(217,'Kuljabsk Region',56),(218,'Kurgan-Tjube Region',56),(219,'Sughd Region',56),(220,'Tajikistan',56),(221,'Ashgabat Region',57),(222,'Krasnovodsk Region',57),(223,'Mary Region',57),(224,'Tashauz Region',57),(225,'Chardzhou Region',57),(226,'Grand Turk',58),(227,'Bartin',59),(228,'Bayburt',59),(229,'Karabuk',59),(230,'Adana',59),(231,'Aydin',59),(232,'Amasya',59),(233,'Ankara',59),(234,'Antalya',59),(235,'Artvin',59),(236,'Afion',59),(237,'Balikesir',59),(238,'Bilecik',59),(239,'Bursa',59),(240,'Gaziantep',59),(241,'Denizli',59),(242,'Izmir',59),(243,'Isparta',59),(244,'Icel',59),(245,'Kayseri',59),(246,'Kars',59),(247,'Kodjaeli',59),(248,'Konya',59),(249,'Kirklareli',59),(250,'Kutahya',59),(251,'Malatya',59),(252,'Manisa',59),(253,'Sakarya',59),(254,'Samsun',59),(255,'Sivas',59),(256,'Istanbul',59),(257,'Trabzon',59),(258,'Corum',59),(259,'Edirne',59),(260,'Elazig',59),(261,'Erzincan',59),(262,'Erzurum',59),(263,'Eskisehir',59),(264,'Jinja',60),(265,'Kampala',60),(266,'Andijon Region',61),(267,'Buxoro Region',61),(268,'Jizzac Region',61),(269,'Qaraqalpaqstan',61),(270,'Qashqadaryo Region',61),(271,'Navoiy Region',61),(272,'Namangan Region',61),(273,'Samarqand Region',61),(274,'Surxondaryo Region',61),(275,'Sirdaryo Region',61),(276,'Tashkent Region',61),(277,'Fergana Region',61),(278,'Xorazm Region',61),(279,'Vinnitskaya obl.',62),(280,'Volynskaya obl.',62),(281,'Dnepropetrovskaya obl.',62),(282,'Donetskaya obl.',62),(283,'Zhitomirskaya obl.',62),(284,'Zakarpatskaya obl.',62),(285,'Zaporozhskaya obl.',62),(286,'Ivano-Frankovskaya obl.',62),(287,'Kievskaya obl.',62),(288,'Kirovogradskaya obl.',62),(289,'Krymskaya obl.',62),(290,'Luganskaya obl.',62),(291,'Lvovskaya obl.',62),(292,'Nikolaevskaya obl.',62),(293,'Odesskaya obl.',62),(294,'Poltavskaya obl.',62),(295,'Rovenskaya obl.',62),(296,'Sumskaya obl.',62),(297,'Ternopolskaya obl.',62),(298,'Harkovskaya obl.',62),(299,'Hersonskaya obl.',62),(300,'Hmelnitskaya obl.',62),(301,'Cherkasskaya obl.',62),(302,'Chernigovskaya obl.',62),(303,'Chernovitskaya obl.',62),(304,'Estoniya',68),(305,'Cheju',69),(306,'Chollabuk',69),(307,'Chollanam',69),(308,'Chungcheongbuk',69),(309,'Chungcheongnam',69),(310,'Incheon',69),(311,'Kangweon',69),(312,'Kwangju',69),(313,'Kyeonggi',69),(314,'Kyeongsangbuk',69),(315,'Kyeongsangnam',69),(316,'Pusan',69),(317,'Seoul',69),(318,'Taegu',69),(319,'Taejeon',69),(320,'Ulsan',69),(321,'Aichi',70),(322,'Akita',70),(323,'Aomori',70),(324,'Wakayama',70),(325,'Gifu',70),(326,'Gunma',70),(327,'Ibaraki',70),(328,'Iwate',70),(329,'Ishikawa',70),(330,'Kagawa',70),(331,'Kagoshima',70),(332,'Kanagawa',70),(333,'Kyoto',70),(334,'Kochi',70),(335,'Kumamoto',70),(336,'Mie',70),(337,'Miyagi',70),(338,'Miyazaki',70),(339,'Nagano',70),(340,'Nagasaki',70),(341,'Nara',70),(342,'Niigata',70),(343,'Okayama',70),(344,'Okinawa',70),(345,'Osaka',70),(346,'Saga',70),(347,'Saitama',70),(348,'Shiga',70),(349,'Shizuoka',70),(350,'Shimane',70),(351,'Tiba',70),(352,'Tokyo',70),(353,'Tokushima',70),(354,'Tochigi',70),(355,'Tottori',70),(356,'Toyama',70),(357,'Fukui',70),(358,'Fukuoka',70),(359,'Fukushima',70),(360,'Hiroshima',70),(361,'Hokkaido',70),(362,'Hyogo',70),(363,'Yoshimi',70),(364,'Yamagata',70),(365,'Yamaguchi',70),(366,'Yamanashi',70),(368,'Hong Kong',73),(369,'Indonesia',74),(370,'Jordan',75),(371,'Malaysia',76),(372,'Singapore',77),(373,'Taiwan',78),(374,'Kazahstan',30),(375,'Ukraina',62),(376,'India',25),(377,'Egypt',23),(378,'Damascus',106),(379,'Isle of Man',131),(380,'Zapadno-Kazahstanskaya obl.',30),(381,'Adygeya',50),(382,'Hakasiya',50),(383,'Dubai',93),(384,'Chukotskii AO',50),(385,'Beirut',99),(386,'Tegucigalpa',137),(387,'Santo Domingo',138),(388,'Ulan Bator',139),(389,'Sinai',23),(390,'Baghdad',140),(391,'Basra',140),(392,'Mosul',140),(393,'Johannesburg',141),(394,'Morocco',104),(395,'Tangier',104),(396,'Yamalo-Nenetskii AO',50),(397,'Tunisia',122),(398,'Thailand',92),(399,'Mozambique',117),(400,'Korea',84),(401,'Pakistan',87),(402,'Aruba',142),(403,'Bahamas',80),(404,'South Korea',69),(405,'Jamaica',132),(406,'Sharjah',93),(407,'Abu Dhabi',93),(409,'Ramat Hagolan',24),(410,'Nigeria',115),(411,'Ain',64),(412,'Haute-Savoie',64),(413,'Aisne',64),(414,'Allier',64),(415,'Alpes-de-Haute-Provence',64),(416,'Hautes-Alpes',64),(417,'Alpes-Maritimes',64),(418,'Ard&egrave;che',64),(419,'Ardennes',64),(420,'Ari&egrave;ge',64),(421,'Aube',64),(422,'Aude',64),(423,'Aveyron',64),(424,'Bouches-du-Rh&ocirc;ne',64),(425,'Calvados',64),(426,'Cantal',64),(427,'Charente',64),(428,'Charente Maritime',64),(429,'Cher',64),(430,'Corr&egrave;ze',64),(431,'Dordogne',64),(432,'Corse',64),(433,'C&ocirc;te d&#039;Or',64),(434,'Sa&ocirc;ne et Loire',64),(435,'C&ocirc;tes d&#039;Armor',64),(436,'Creuse',64),(437,'Doubs',64),(438,'Dr&ocirc;me',64),(439,'Eure',64),(440,'Eure-et-Loire',64),(441,'Finist&egrave;re',64),(442,'Gard',64),(443,'Haute-Garonne',64),(444,'Gers',64),(445,'Gironde',64),(446,'Hérault',64),(447,'Ille et Vilaine',64),(448,'Indre',64),(449,'Indre-et-Loire',64),(450,'Isère',64),(451,'Jura',64),(452,'Landes',64),(453,'Loir-et-Cher',64),(454,'Loire',64),(455,'Rh&ocirc;ne',64),(456,'Haute-Loire',64),(457,'Loire Atlantique',64),(458,'Loiret',64),(459,'Lot',64),(460,'Lot-et-Garonne',64),(461,'Loz&egrave;re',64),(462,'Maine et Loire',64),(463,'Manche',64),(464,'Marne',64),(465,'Haute-Marne',64),(466,'Mayenne',64),(467,'Meurthe-et-Moselle',64),(468,'Meuse',64),(469,'Morbihan',64),(470,'Moselle',64),(471,'Ni&egrave;vre',64),(472,'Nord',64),(473,'Oise',64),(474,'Orne',64),(475,'Pas-de-Calais',64),(476,'Puy-de-D&ocirc;me',64),(477,'Pyrénées-Atlantiques',64),(478,'Hautes-Pyrénées',64),(479,'Pyrénées-Orientales',64),(480,'Bas Rhin',64),(481,'Haut Rhin',64),(482,'Haute-Sa&ocirc;ne',64),(483,'Sarthe',64),(484,'Savoie',64),(485,'Paris',64),(486,'Seine-Maritime',64),(487,'Seine-et-Marne',64),(488,'Yvelines',64),(489,'Deux-S&egrave;vres',64),(490,'Somme',64),(491,'Tarn',64),(492,'Tarn-et-Garonne',64),(493,'Var',64),(494,'Vaucluse',64),(495,'Vendée',64),(496,'Vienne',64),(497,'Haute-Vienne',64),(498,'Vosges',64),(499,'Yonne',64),(500,'Territoire de Belfort',64),(501,'Essonne',64),(502,'Hauts-de-Seine',64),(503,'Seine-Saint-Denis',64),(504,'Val-de-Marne',64),(505,'Val-d&#039;Oise',64),(506,'Piemonte - Torino',29),(507,'Piemonte - Alessandria',29),(508,'Piemonte - Asti',29),(509,'Piemonte - Biella',29),(510,'Piemonte - Cuneo',29),(511,'Piemonte - Novara',29),(512,'Piemonte - Verbania',29),(513,'Piemonte - Vercelli',29),(514,'Valle d&#039;Aosta - Aosta',29),(515,'Lombardia - Milano',29),(516,'Lombardia - Bergamo',29),(517,'Lombardia - Brescia',29),(518,'Lombardia - Como',29),(519,'Lombardia - Cremona',29),(520,'Lombardia - Lecco',29),(521,'Lombardia - Lodi',29),(522,'Lombardia - Mantova',29),(523,'Lombardia - Pavia',29),(524,'Lombardia - Sondrio',29),(525,'Lombardia - Varese',29),(526,'Trentino Alto Adige - Trento',29),(527,'Trentino Alto Adige - Bolzano',29),(528,'Veneto - Venezia',29),(529,'Veneto - Belluno',29),(530,'Veneto - Padova',29),(531,'Veneto - Rovigo',29),(532,'Veneto - Treviso',29),(533,'Veneto - Verona',29),(534,'Veneto - Vicenza',29),(535,'Friuli Venezia Giulia - Trieste',29),(536,'Friuli Venezia Giulia - Gorizia',29),(537,'Friuli Venezia Giulia - Pordenone',29),(538,'Friuli Venezia Giulia - Udine',29),(539,'Liguria - Genova',29),(540,'Liguria - Imperia',29),(541,'Liguria - La Spezia',29),(542,'Liguria - Savona',29),(543,'Emilia Romagna - Bologna',29),(544,'Emilia Romagna - Ferrara',29),(545,'Emilia Romagna - Forlì-Cesena',29),(546,'Emilia Romagna - Modena',29),(547,'Emilia Romagna - Parma',29),(548,'Emilia Romagna - Piacenza',29),(549,'Emilia Romagna - Ravenna',29),(550,'Emilia Romagna - Reggio Emilia',29),(551,'Emilia Romagna - Rimini',29),(552,'Toscana - Firenze',29),(553,'Toscana - Arezzo',29),(554,'Toscana - Grosseto',29),(555,'Toscana - Livorno',29),(556,'Toscana - Lucca',29),(557,'Toscana - Massa Carrara',29),(558,'Toscana - Pisa',29),(559,'Toscana - Pistoia',29),(560,'Toscana - Prato',29),(561,'Toscana - Siena',29),(562,'Umbria - Perugia',29),(563,'Umbria - Terni',29),(564,'Marche - Ancona',29),(565,'Marche - Ascoli Piceno',29),(566,'Marche - Macerata',29),(567,'Marche - Pesaro - Urbino',29),(568,'Lazio - Roma',29),(569,'Lazio - Frosinone',29),(570,'Lazio - Latina',29),(571,'Lazio - Rieti',29),(572,'Lazio - Viterbo',29),(573,'Abruzzo - L´Aquila',29),(574,'Abruzzo - Chieti',29),(575,'Abruzzo - Pescara',29),(576,'Abruzzo - Teramo',29),(577,'Molise - Campobasso',29),(578,'Molise - Isernia',29),(579,'Campania - Napoli',29),(580,'Campania - Avellino',29),(581,'Campania - Benevento',29),(582,'Campania - Caserta',29),(583,'Campania - Salerno',29),(584,'Puglia - Bari',29),(585,'Puglia - Brindisi',29),(586,'Puglia - Foggia',29),(587,'Puglia - Lecce',29),(588,'Puglia - Taranto',29),(589,'Basilicata - Potenza',29),(590,'Basilicata - Matera',29),(591,'Calabria - Catanzaro',29),(592,'Calabria - Cosenza',29),(593,'Calabria - Crotone',29),(594,'Calabria - Reggio Calabria',29),(595,'Calabria - Vibo Valentia',29),(596,'Sicilia - Palermo',29),(597,'Sicilia - Agrigento',29),(598,'Sicilia - Caltanissetta',29),(599,'Sicilia - Catania',29),(600,'Sicilia - Enna',29),(601,'Sicilia - Messina',29),(602,'Sicilia - Ragusa',29),(603,'Sicilia - Siracusa',29),(604,'Sicilia - Trapani',29),(605,'Sardegna - Cagliari',29),(606,'Sardegna - Nuoro',29),(607,'Sardegna - Oristano',29),(608,'Sardegna - Sassari',29),(609,'Las Palmas',28),(610,'Soria',28),(611,'Palencia',28),(612,'Zamora',28),(613,'Cádiz',28),(614,'Navarra',28),(615,'Ourense',28),(616,'Segovia',28),(617,'Guip&uacute;zcoa',28),(618,'Ciudad Real',28),(619,'Vizcaya',28),(620,'álava',28),(621,'A Coruña',28),(622,'Cantabria',28),(623,'Almería',28),(624,'Zaragoza',28),(625,'Santa Cruz de Tenerife',28),(626,'Cáceres',28),(627,'Guadalajara',28),(628,'ávila',28),(629,'Toledo',28),(630,'Castellón',28),(631,'Tarragona',28),(632,'Lugo',28),(633,'La Rioja',28),(634,'Ceuta',28),(635,'Murcia',28),(636,'Salamanca',28),(637,'Valladolid',28),(638,'Jaén',28),(639,'Girona',28),(640,'Granada',28),(641,'Alacant',28),(642,'Córdoba',28),(643,'Albacete',28),(644,'Cuenca',28),(645,'Pontevedra',28),(646,'Teruel',28),(647,'Melilla',28),(648,'Barcelona',28),(649,'Badajoz',28),(650,'Madrid',28),(651,'Sevilla',28),(652,'Val&egrave;ncia',28),(653,'Huelva',28),(654,'Lleida',28),(655,'León',28),(656,'Illes Balears',28),(657,'Burgos',28),(658,'Huesca',28),(659,'Asturias',28),(660,'Málaga',28),(661,'Afghanistan',144),(662,'Niger',210),(663,'Mali',133),(664,'Burkina Faso',156),(665,'Togo',136),(666,'Benin',151),(667,'Angola',119),(668,'Namibia',102),(669,'Botswana',100),(670,'Madagascar',134),(671,'Mauritius',202),(672,'Laos',196),(673,'Cambodia',158),(674,'Philippines',90),(675,'Papua New Guinea',88),(676,'Solomon Islands',228),(677,'Vanuatu',240),(678,'Fiji',176),(679,'Samoa',223),(680,'Nauru',206),(681,'Cote D&#039;Ivoire',168),(682,'Liberia',198),(683,'Guinea',187),(684,'Guyana',189),(685,'Algeria',98),(686,'Antigua and Barbuda',147),(687,'Bahrain',127),(688,'Bangladesh',149),(689,'Barbados',128),(690,'Bhutan',152),(691,'Brunei',155),(692,'Burundi',157),(693,'Cape Verde',159),(694,'Chad',130),(695,'Comoros',164),(696,'Congo (Brazzaville)',112),(697,'Djibouti',169),(698,'East Timor',171),(699,'Eritrea',173),(700,'Ethiopia',121),(701,'Gabon',180),(702,'Gambia',181),(703,'Ghana',105),(704,'Lesotho',197),(705,'Malawi',125),(706,'Maldives',200),(707,'Myanmar (Burma)',205),(708,'Nepal',107),(709,'Oman',213),(710,'Rwanda',217),(711,'Saudi Arabia',91),(712,'Sri Lanka',120),(713,'Sudan',232),(714,'Swaziland',234),(715,'Tanzania',101),(716,'Tonga',236),(717,'Tuvalu',239),(718,'Western Sahara',242),(719,'Yemen',243),(720,'Zambia',116),(721,'Zimbabwe',96),(722,'Aargau',66),(723,'Appenzell Innerrhoden',66),(724,'Appenzell Ausserrhoden',66),(725,'Bern',66),(726,'Basel-Landschaft',66),(727,'Basel-Stadt',66),(728,'Fribourg',66),(729,'Gen&egrave;ve',66),(730,'Glarus',66),(731,'Graubünden',66),(732,'Jura',66),(733,'Luzern',66),(734,'Neuch&acirc;tel',66),(735,'Nidwalden',66),(736,'Obwalden',66),(737,'Sankt Gallen',66),(738,'Schaffhausen',66),(739,'Solothurn',66),(740,'Schwyz',66),(741,'Thurgau',66),(742,'Ticino',66),(743,'Uri',66),(744,'Vaud',66),(745,'Valais',66),(746,'Zug',66),(747,'Zürich',66),(749,'Aveiro',48),(750,'Beja',48),(751,'Braga',48),(752,'Braganca',48),(753,'Castelo Branco',48),(754,'Coimbra',48),(755,'Evora',48),(756,'Faro',48),(757,'Madeira',48),(758,'Guarda',48),(759,'Leiria',48),(760,'Lisboa',48),(761,'Portalegre',48),(762,'Porto',48),(763,'Santarem',48),(764,'Setubal',48),(765,'Viana do Castelo',48),(766,'Vila Real',48),(767,'Viseu',48),(768,'Azores',48),(769,'Armed Forces Americas',55),(770,'Armed Forces Europe',55),(771,'Alaska',55),(772,'Alabama',55),(773,'Armed Forces Pacific',55),(774,'Arkansas',55),(775,'American Samoa',55),(776,'Arizona',55),(777,'California',55),(778,'Colorado',55),(779,'Connecticut',55),(780,'District of Columbia',55),(781,'Delaware',55),(782,'Florida',55),(783,'Federated States of Micronesia',55),(784,'Georgia',55),(786,'Hawaii',55),(787,'Iowa',55),(788,'Idaho',55),(789,'Illinois',55),(790,'Indiana',55),(791,'Kansas',55),(792,'Kentucky',55),(793,'Louisiana',55),(794,'Massachusetts',55),(795,'Maryland',55),(796,'Maine',55),(797,'Marshall Islands',55),(798,'Michigan',55),(799,'Minnesota',55),(800,'Missouri',55),(801,'Northern Mariana Islands',55),(802,'Mississippi',55),(803,'Montana',55),(804,'North Carolina',55),(805,'North Dakota',55),(806,'Nebraska',55),(807,'New Hampshire',55),(808,'New Jersey',55),(809,'New Mexico',55),(810,'Nevada',55),(811,'New York',55),(812,'Ohio',55),(813,'Oklahoma',55),(814,'Oregon',55),(815,'Pennsylvania',55),(816,'Puerto Rico',246),(817,'Palau',55),(818,'Rhode Island',55),(819,'South Carolina',55),(820,'South Dakota',55),(821,'Tennessee',55),(822,'Texas',55),(823,'Utah',55),(824,'Virginia',55),(825,'Virgin Islands',55),(826,'Vermont',55),(827,'Washington',55),(828,'West Virginia',55),(829,'Wisconsin',55),(830,'Wyoming',55),(831,'Greenland',94),(832,'Brandenburg',18),(833,'Baden-Württemberg',18),(834,'Bayern',18),(835,'Hessen',18),(836,'Hamburg',18),(837,'Mecklenburg-Vorpommern',18),(838,'Niedersachsen',18),(839,'Nordrhein-Westfalen',18),(840,'Rheinland-Pfalz',18),(841,'Schleswig-Holstein',18),(842,'Sachsen',18),(843,'Sachsen-Anhalt',18),(844,'Thüringen',18),(845,'Berlin',18),(846,'Bremen',18),(847,'Saarland',18),(848,'Scotland North',13),(849,'England - East',13),(850,'England - West Midlands',13),(851,'England - South West',13),(852,'England - North West',13),(853,'England - Yorks &amp; Humber',13),(854,'England - South East',13),(855,'England - London',13),(856,'Northern Ireland',13),(857,'England - North East',13),(858,'Wales South',13),(859,'Wales North',13),(860,'England - East Midlands',13),(861,'Scotland Central',13),(862,'Scotland South',13),(863,'Channel Islands',13),(864,'Isle of Man',13),(865,'Burgenland',2),(866,'Kärnten',2),(867,'Niederösterreich',2),(868,'Oberösterreich',2),(869,'Salzburg',2),(870,'Steiermark',2),(871,'Tirol',2),(872,'Vorarlberg',2),(873,'Wien',2),(874,'Bruxelles',9),(875,'West-Vlaanderen',9),(876,'Oost-Vlaanderen',9),(877,'Limburg',9),(878,'Vlaams Brabant',9),(879,'Antwerpen',9),(880,'LiÄge',9),(881,'Namur',9),(882,'Hainaut',9),(883,'Luxembourg',9),(884,'Brabant Wallon',9),(887,'Blekinge Lan',67),(888,'Gavleborgs Lan',67),(890,'Gotlands Lan',67),(891,'Hallands Lan',67),(892,'Jamtlands Lan',67),(893,'Jonkopings Lan',67),(894,'Kalmar Lan',67),(895,'Dalarnas Lan',67),(897,'Kronobergs Lan',67),(899,'Norrbottens Lan',67),(900,'Orebro Lan',67),(901,'Ostergotlands Lan',67),(903,'Sodermanlands Lan',67),(904,'Uppsala Lan',67),(905,'Varmlands Lan',67),(906,'Vasterbottens Lan',67),(907,'Vasternorrlands Lan',67),(908,'Vastmanlands Lan',67),(909,'Stockholms Lan',67),(910,'Skane Lan',67),(911,'Vastra Gotaland',67),(913,'Akershus',46),(914,'Aust-Agder',46),(915,'Buskerud',46),(916,'Finnmark',46),(917,'Hedmark',46),(918,'Hordaland',46),(919,'More og Romsdal',46),(920,'Nordland',46),(921,'Nord-Trondelag',46),(922,'Oppland',46),(923,'Oslo',46),(924,'Ostfold',46),(925,'Rogaland',46),(926,'Sogn og Fjordane',46),(927,'Sor-Trondelag',46),(928,'Telemark',46),(929,'Troms',46),(930,'Vest-Agder',46),(931,'Vestfold',46),(933,'&ETH;&bull;land',63),(934,'Lapland',63),(935,'Oulu',63),(936,'Southern Finland',63),(937,'Eastern Finland',63),(938,'Western Finland',63),(940,'Arhus',22),(941,'Bornholm',22),(942,'Frederiksborg',22),(943,'Fyn',22),(944,'Kobenhavn',22),(945,'Staden Kobenhavn',22),(946,'Nordjylland',22),(947,'Ribe',22),(948,'Ringkobing',22),(949,'Roskilde',22),(950,'Sonderjylland',22),(951,'Storstrom',22),(952,'Vejle',22),(953,'Vestsjalland',22),(954,'Viborg',22),(956,'Hlavni Mesto Praha',65),(957,'Jihomoravsky Kraj',65),(958,'Jihocesky Kraj',65),(959,'Vysocina',65),(960,'Karlovarsky Kraj',65),(961,'Kralovehradecky Kraj',65),(962,'Liberecky Kraj',65),(963,'Olomoucky Kraj',65),(964,'Moravskoslezsky Kraj',65),(965,'Pardubicky Kraj',65),(966,'Plzensky Kraj',65),(967,'Stredocesky Kraj',65),(968,'Ustecky Kraj',65),(969,'Zlinsky Kraj',65),(971,'Berat',114),(972,'Diber',114),(973,'Durres',114),(974,'Elbasan',114),(975,'Fier',114),(976,'Gjirokaster',114),(977,'Korce',114),(978,'Kukes',114),(979,'Lezhe',114),(980,'Shkoder',114),(981,'Tirane',114),(982,'Vlore',114),(984,'Canillo',145),(985,'Encamp',145),(986,'La Massana',145),(987,'Ordino',145),(988,'Sant Julia de Loria',145),(989,'Andorra la Vella',145),(990,'Escaldes-Engordany',145),(992,'Aragatsotn',6),(993,'Ararat',6),(994,'Armavir',6),(995,'Geghark&#039;unik&#039;',6),(996,'Kotayk&#039;',6),(997,'Lorri',6),(998,'Shirak',6),(999,'Syunik&#039;',6),(1000,'Tavush',6),(1001,'Vayots&#039; Dzor',6),(1002,'Yerevan',6),(1004,'Federation of Bosnia and Herzegovina',79),(1005,'Republika Srpska',79),(1007,'Mikhaylovgrad',11),(1008,'Blagoevgrad',11),(1009,'Burgas',11),(1010,'Dobrich',11),(1011,'Gabrovo',11),(1012,'Grad Sofiya',11),(1013,'Khaskovo',11),(1014,'Kurdzhali',11),(1015,'Kyustendil',11),(1016,'Lovech',11),(1017,'Montana',11),(1018,'Pazardzhik',11),(1019,'Pernik',11),(1020,'Pleven',11),(1021,'Plovdiv',11),(1022,'Razgrad',11),(1023,'Ruse',11),(1024,'Shumen',11),(1025,'Silistra',11),(1026,'Sliven',11),(1027,'Smolyan',11),(1028,'Sofiya',11),(1029,'Stara Zagora',11),(1030,'Turgovishte',11),(1031,'Varna',11),(1032,'Veliko Turnovo',11),(1033,'Vidin',11),(1034,'Vratsa',11),(1035,'Yambol',11),(1037,'Bjelovarsko-Bilogorska',71),(1038,'Brodsko-Posavska',71),(1039,'Dubrovacko-Neretvanska',71),(1040,'Istarska',71),(1041,'Karlovacka',71),(1042,'Koprivnicko-Krizevacka',71),(1043,'Krapinsko-Zagorska',71),(1044,'Licko-Senjska',71),(1045,'Medimurska',71),(1046,'Osjecko-Baranjska',71),(1047,'Pozesko-Slavonska',71),(1048,'Primorsko-Goranska',71),(1049,'Sibensko-Kninska',71),(1050,'Sisacko-Moslavacka',71),(1051,'Splitsko-Dalmatinska',71),(1052,'Varazdinska',71),(1053,'Viroviticko-Podravska',71),(1054,'Vukovarsko-Srijemska',71),(1055,'Zadarska',71),(1056,'Zagrebacka',71),(1057,'Grad Zagreb',71),(1059,'Gibraltar',143),(1060,'Evros',20),(1061,'Rodhopi',20),(1062,'Xanthi',20),(1063,'Drama',20),(1064,'Serrai',20),(1065,'Kilkis',20),(1066,'Pella',20),(1067,'Florina',20),(1068,'Kastoria',20),(1069,'Grevena',20),(1070,'Kozani',20),(1071,'Imathia',20),(1072,'Thessaloniki',20),(1073,'Kavala',20),(1074,'Khalkidhiki',20),(1075,'Pieria',20),(1076,'Ioannina',20),(1077,'Thesprotia',20),(1078,'Preveza',20),(1079,'Arta',20),(1080,'Larisa',20),(1081,'Trikala',20),(1082,'Kardhitsa',20),(1083,'Magnisia',20),(1084,'Kerkira',20),(1085,'Levkas',20),(1086,'Kefallinia',20),(1087,'Zakinthos',20),(1088,'Fthiotis',20),(1089,'Evritania',20),(1090,'Aitolia kai Akarnania',20),(1091,'Fokis',20),(1092,'Voiotia',20),(1093,'Evvoia',20),(1094,'Attiki',20),(1095,'Argolis',20),(1096,'Korinthia',20),(1097,'Akhaia',20),(1098,'Ilia',20),(1099,'Messinia',20),(1100,'Arkadhia',20),(1101,'Lakonia',20),(1102,'Khania',20),(1103,'Rethimni',20),(1104,'Iraklion',20),(1105,'Lasithi',20),(1106,'Dhodhekanisos',20),(1107,'Samos',20),(1108,'Kikladhes',20),(1109,'Khios',20),(1110,'Lesvos',20),(1112,'Bacs-Kiskun',14),(1113,'Baranya',14),(1114,'Bekes',14),(1115,'Borsod-Abauj-Zemplen',14),(1116,'Budapest',14),(1117,'Csongrad',14),(1118,'Debrecen',14),(1119,'Fejer',14),(1120,'Gyor-Moson-Sopron',14),(1121,'Hajdu-Bihar',14),(1122,'Heves',14),(1123,'Komarom-Esztergom',14),(1124,'Miskolc',14),(1125,'Nograd',14),(1126,'Pecs',14),(1127,'Pest',14),(1128,'Somogy',14),(1129,'Szabolcs-Szatmar-Bereg',14),(1130,'Szeged',14),(1131,'Jasz-Nagykun-Szolnok',14),(1132,'Tolna',14),(1133,'Vas',14),(1134,'Veszprem',14),(1135,'Zala',14),(1136,'Gyor',14),(1150,'Veszprem',14),(1152,'Balzers',126),(1153,'Eschen',126),(1154,'Gamprin',126),(1155,'Mauren',126),(1156,'Planken',126),(1157,'Ruggell',126),(1158,'Schaan',126),(1159,'Schellenberg',126),(1160,'Triesen',126),(1161,'Triesenberg',126),(1162,'Vaduz',126),(1163,'Diekirch',41),(1164,'Grevenmacher',41),(1165,'Luxembourg',41),(1167,'Aracinovo',85),(1168,'Bac',85),(1169,'Belcista',85),(1170,'Berovo',85),(1171,'Bistrica',85),(1172,'Bitola',85),(1173,'Blatec',85),(1174,'Bogdanci',85),(1175,'Bogomila',85),(1176,'Bogovinje',85),(1177,'Bosilovo',85),(1179,'Cair',85),(1180,'Capari',85),(1181,'Caska',85),(1182,'Cegrane',85),(1184,'Centar Zupa',85),(1187,'Debar',85),(1188,'Delcevo',85),(1190,'Demir Hisar',85),(1191,'Demir Kapija',85),(1195,'Dorce Petrov',85),(1198,'Gazi Baba',85),(1199,'Gevgelija',85),(1200,'Gostivar',85),(1201,'Gradsko',85),(1204,'Jegunovce',85),(1205,'Kamenjane',85),(1207,'Karpos',85),(1208,'Kavadarci',85),(1209,'Kicevo',85),(1210,'Kisela Voda',85),(1211,'Klecevce',85),(1212,'Kocani',85),(1214,'Kondovo',85),(1217,'Kratovo',85),(1219,'Krivogastani',85),(1220,'Krusevo',85),(1223,'Kumanovo',85),(1224,'Labunista',85),(1225,'Lipkovo',85),(1228,'Makedonska Kamenica',85),(1229,'Makedonski Brod',85),(1234,'Murtino',85),(1235,'Negotino',85),(1238,'Novo Selo',85),(1240,'Ohrid',85),(1242,'Orizari',85),(1245,'Petrovec',85),(1248,'Prilep',85),(1249,'Probistip',85),(1250,'Radovis',85),(1252,'Resen',85),(1253,'Rosoman',85),(1256,'Saraj',85),(1260,'Srbinovo',85),(1262,'Star Dojran',85),(1264,'Stip',85),(1265,'Struga',85),(1266,'Strumica',85),(1267,'Studenicani',85),(1268,'Suto Orizari',85),(1269,'Sveti Nikole',85),(1270,'Tearce',85),(1271,'Tetovo',85),(1273,'Valandovo',85),(1275,'Veles',85),(1277,'Vevcani',85),(1278,'Vinica',85),(1281,'Vrapciste',85),(1286,'Zelino',85),(1289,'Zrnovci',85),(1291,'Malta',86),(1292,'La Condamine',44),(1293,'Monaco',44),(1294,'Monte-Carlo',44),(1295,'Biala Podlaska',47),(1296,'Bialystok',47),(1297,'Bielsko',47),(1298,'Bydgoszcz',47),(1299,'Chelm',47),(1300,'Ciechanow',47),(1301,'Czestochowa',47),(1302,'Elblag',47),(1303,'Gdansk',47),(1304,'Gorzow',47),(1305,'Jelenia Gora',47),(1306,'Kalisz',47),(1307,'Katowice',47),(1308,'Kielce',47),(1309,'Konin',47),(1310,'Koszalin',47),(1311,'Krakow',47),(1312,'Krosno',47),(1313,'Legnica',47),(1314,'Leszno',47),(1315,'Lodz',47),(1316,'Lomza',47),(1317,'Lublin',47),(1318,'Nowy Sacz',47),(1319,'Olsztyn',47),(1320,'Opole',47),(1321,'Ostroleka',47),(1322,'Pila',47),(1323,'Piotrkow',47),(1324,'Plock',47),(1325,'Poznan',47),(1326,'Przemysl',47),(1327,'Radom',47),(1328,'Rzeszow',47),(1329,'Siedlce',47),(1330,'Sieradz',47),(1331,'Skierniewice',47),(1332,'Slupsk',47),(1333,'Suwalki',47),(1335,'Tarnobrzeg',47),(1336,'Tarnow',47),(1337,'Torun',47),(1338,'Walbrzych',47),(1339,'Warszawa',47),(1340,'Wloclawek',47),(1341,'Wroclaw',47),(1342,'Zamosc',47),(1343,'Zielona Gora',47),(1344,'Dolnoslaskie',47),(1345,'Kujawsko-Pomorskie',47),(1346,'Lodzkie',47),(1347,'Lubelskie',47),(1348,'Lubuskie',47),(1349,'Malopolskie',47),(1350,'Mazowieckie',47),(1351,'Opolskie',47),(1352,'Podkarpackie',47),(1353,'Podlaskie',47),(1354,'Pomorskie',47),(1355,'Slaskie',47),(1356,'Swietokrzyskie',47),(1357,'Warminsko-Mazurskie',47),(1358,'Wielkopolskie',47),(1359,'Zachodniopomorskie',47),(1361,'Alba',72),(1362,'Arad',72),(1363,'Arges',72),(1364,'Bacau',72),(1365,'Bihor',72),(1366,'Bistrita-Nasaud',72),(1367,'Botosani',72),(1368,'Braila',72),(1369,'Brasov',72),(1370,'Bucuresti',72),(1371,'Buzau',72),(1372,'Caras-Severin',72),(1373,'Cluj',72),(1374,'Constanta',72),(1375,'Covasna',72),(1376,'Dambovita',72),(1377,'Dolj',72),(1378,'Galati',72),(1379,'Gorj',72),(1380,'Harghita',72),(1381,'Hunedoara',72),(1382,'Ialomita',72),(1383,'Iasi',72),(1384,'Maramures',72),(1385,'Mehedinti',72),(1386,'Mures',72),(1387,'Neamt',72),(1388,'Olt',72),(1389,'Prahova',72),(1390,'Salaj',72),(1391,'Satu Mare',72),(1392,'Sibiu',72),(1393,'Suceava',72),(1394,'Teleorman',72),(1395,'Timis',72),(1396,'Tulcea',72),(1397,'Vaslui',72),(1398,'Valcea',72),(1399,'Vrancea',72),(1400,'Calarasi',72),(1401,'Giurgiu',72),(1404,'Acquaviva',224),(1405,'Chiesanuova',224),(1406,'Domagnano',224),(1407,'Faetano',224),(1408,'Fiorentino',224),(1409,'Borgo Maggiore',224),(1410,'San Marino',224),(1411,'Monte Giardino',224),(1412,'Serravalle',224),(1413,'Banska Bystrica',52),(1414,'Bratislava',52),(1415,'Kosice',52),(1416,'Nitra',52),(1417,'Presov',52),(1418,'Trencin',52),(1419,'Trnava',52),(1420,'Zilina',52),(1423,'Beltinci',53),(1425,'Bohinj',53),(1426,'Borovnica',53),(1427,'Bovec',53),(1428,'Brda',53),(1429,'Brezice',53),(1430,'Brezovica',53),(1432,'Cerklje na Gorenjskem',53),(1434,'Cerkno',53),(1436,'Crna na Koroskem',53),(1437,'Crnomelj',53),(1438,'Divaca',53),(1439,'Dobrepolje',53),(1440,'Dol pri Ljubljani',53),(1443,'Duplek',53),(1447,'Gornji Grad',53),(1450,'Hrastnik',53),(1451,'Hrpelje-Kozina',53),(1452,'Idrija',53),(1453,'Ig',53),(1454,'Ilirska Bistrica',53),(1455,'Ivancna Gorica',53),(1462,'Komen',53),(1463,'Koper-Capodistria',53),(1464,'Kozje',53),(1465,'Kranj',53),(1466,'Kranjska Gora',53),(1467,'Krsko',53),(1469,'Lasko',53),(1470,'Ljubljana',53),(1471,'Ljubno',53),(1472,'Logatec',53),(1475,'Medvode',53),(1476,'Menges',53),(1478,'Mezica',53),(1480,'Moravce',53),(1482,'Mozirje',53),(1483,'Murska Sobota',53),(1487,'Nova Gorica',53),(1489,'Ormoz',53),(1491,'Pesnica',53),(1494,'Postojna',53),(1497,'Radece',53),(1498,'Radenci',53),(1500,'Radovljica',53),(1502,'Rogaska Slatina',53),(1505,'Sencur',53),(1506,'Sentilj',53),(1508,'Sevnica',53),(1509,'Sezana',53),(1511,'Skofja Loka',53),(1513,'Slovenj Gradec',53),(1514,'Slovenske Konjice',53),(1515,'Smarje pri Jelsah',53),(1521,'Tolmin',53),(1522,'Trbovlje',53),(1524,'Trzic',53),(1526,'Velenje',53),(1528,'Vipava',53),(1531,'Vrhnika',53),(1532,'Vuzenica',53),(1533,'Zagorje ob Savi',53),(1535,'Zelezniki',53),(1536,'Ziri',53),(1537,'Zrece',53),(1539,'Domzale',53),(1540,'Jesenice',53),(1541,'Kamnik',53),(1542,'Kocevje',53),(1544,'Lenart',53),(1545,'Litija',53),(1546,'Ljutomer',53),(1550,'Maribor',53),(1552,'Novo Mesto',53),(1553,'Piran',53),(1554,'Preddvor',53),(1555,'Ptuj',53),(1556,'Ribnica',53),(1558,'Sentjur pri Celju',53),(1559,'Slovenska Bistrica',53),(1560,'Videm',53),(1562,'Zalec',53),(1564,'Seychelles',109),(1565,'Mauritania',108),(1566,'Senegal',135),(1567,'Road Town',154),(1568,'Congo',165),(1569,'Avarua',166),(1570,'Malabo',172),(1571,'Torshavn',175),(1572,'Papeete',178),(1573,'St George&#039;s',184),(1574,'St Peter Port',186),(1575,'Bissau',188),(1576,'Saint Helier',193),(1577,'Fort-de-France',201),(1578,'Willemstad',207),(1579,'Noumea',208),(1580,'Kingston',212),(1581,'Adamstown',215),(1582,'Doha',216),(1583,'Jamestown',218),(1584,'Basseterre',219),(1585,'Castries',220),(1586,'Saint Pierre',221),(1587,'Kingstown',222),(1588,'San Tome',225),(1589,'Belgrade',226),(1590,'Freetown',227),(1591,'Mogadishu',229),(1592,'Fakaofo',235),(1593,'Port of Spain',237),(1594,'Mata-Utu',241),(1596,'Amazonas',89),(1597,'Ancash',89),(1598,'Apurímac',89),(1599,'Arequipa',89),(1600,'Ayacucho',89),(1601,'Cajamarca',89),(1602,'Callao',89),(1603,'Cusco',89),(1604,'Huancavelica',89),(1605,'Huánuco',89),(1606,'Ica',89),(1607,'Junín',89),(1608,'La Libertad',89),(1609,'Lambayeque',89),(1610,'Lima',89),(1611,'Loreto',89),(1612,'Madre de Dios',89),(1613,'Moquegua',89),(1614,'Pasco',89),(1615,'Piura',89),(1616,'Puno',89),(1617,'San Martín',89),(1618,'Tacna',89),(1619,'Tumbes',89),(1620,'Ucayali',89),(1622,'Alto Paraná',110),(1623,'Amambay',110),(1624,'Boquerón',110),(1625,'Caaguaz&uacute;',110),(1626,'Caazapá',110),(1627,'Central',110),(1628,'Concepción',110),(1629,'Cordillera',110),(1630,'Guairá',110),(1631,'Itap&uacute;a',110),(1632,'Misiones',110),(1633,'Neembuc&uacute;',110),(1634,'Paraguarí',110),(1635,'Presidente Hayes',110),(1636,'San Pedro',110),(1637,'Alto Paraguay',110),(1638,'Canindey&uacute;',110),(1639,'Chaco',110),(1642,'Artigas',111),(1643,'Canelones',111),(1644,'Cerro Largo',111),(1645,'Colonia',111),(1646,'Durazno',111),(1647,'Flores',111),(1648,'Florida',111),(1649,'Lavalleja',111),(1650,'Maldonado',111),(1651,'Montevideo',111),(1652,'Paysand&uacute;',111),(1653,'Río Negro',111),(1654,'Rivera',111),(1655,'Rocha',111),(1656,'Salto',111),(1657,'San José',111),(1658,'Soriano',111),(1659,'Tacuarembó',111),(1660,'Treinta y Tres',111),(1662,'Región de Tarapacá',81),(1663,'Región de Antofagasta',81),(1664,'Región de Atacama',81),(1665,'Región de Coquimbo',81),(1666,'Región de Valparaíso',81),(1667,'Región del Libertador General Bernardo O&#039;Higgins',81),(1668,'Región del Maule',81),(1669,'Región del Bío Bío',81),(1670,'Región de La Araucanía',81),(1671,'Región de Los Lagos',81),(1672,'Región Aisén del General Carlos Ibáñez del Campo',81),(1673,'Región de Magallanes y de la Antártica Chilena',81),(1674,'Región Metropolitana de Santiago',81),(1676,'Alta Verapaz',185),(1677,'Baja Verapaz',185),(1678,'Chimaltenango',185),(1679,'Chiquimula',185),(1680,'El Progreso',185),(1681,'Escuintla',185),(1682,'Guatemala',185),(1683,'Huehuetenango',185),(1684,'Izabal',185),(1685,'Jalapa',185),(1686,'Jutiapa',185),(1687,'Petén',185),(1688,'Quetzaltenango',185),(1689,'Quiché',185),(1690,'Retalhuleu',185),(1691,'Sacatepéquez',185),(1692,'San Marcos',185),(1693,'Santa Rosa',185),(1694,'Sololá',185),(1695,'Suchitepequez',185),(1696,'Totonicapán',185),(1697,'Zacapa',185),(1699,'Amazonas',82),(1700,'Antioquia',82),(1701,'Arauca',82),(1702,'Atlántico',82),(1703,'Caquetá',82),(1704,'Cauca',82),(1705,'César',82),(1706,'Chocó',82),(1707,'Córdoba',82),(1708,'Guaviare',82),(1709,'Guainía',82),(1710,'Huila',82),(1711,'La Guajira',82),(1712,'Meta',82),(1713,'Narino',82),(1714,'Norte de Santander',82),(1715,'Putumayo',82),(1716,'Quindío',82),(1717,'Risaralda',82),(1718,'San Andrés y Providencia',82),(1719,'Santander',82),(1720,'Sucre',82),(1721,'Tolima',82),(1722,'Valle del Cauca',82),(1723,'Vaupés',82),(1724,'Vichada',82),(1725,'Casanare',82),(1726,'Cundinamarca',82),(1727,'Distrito Especial',82),(1730,'Caldas',82),(1731,'Magdalena',82),(1733,'Aguascalientes',42),(1734,'Baja California',42),(1735,'Baja California Sur',42),(1736,'Campeche',42),(1737,'Chiapas',42),(1738,'Chihuahua',42),(1739,'Coahuila de Zaragoza',42),(1740,'Colima',42),(1741,'Distrito Federal',42),(1742,'Durango',42),(1743,'Guanajuato',42),(1744,'Guerrero',42),(1745,'Hidalgo',42),(1746,'Jalisco',42),(1747,'México',42),(1748,'Michoacán de Ocampo',42),(1749,'Morelos',42),(1750,'Nayarit',42),(1751,'Nuevo León',42),(1752,'Oaxaca',42),(1753,'Puebla',42),(1754,'Querétaro de Arteaga',42),(1755,'Quintana Roo',42),(1756,'San Luis Potosí',42),(1757,'Sinaloa',42),(1758,'Sonora',42),(1759,'Tabasco',42),(1760,'Tamaulipas',42),(1761,'Tlaxcala',42),(1762,'Veracruz-Llave',42),(1763,'Yucatán',42),(1764,'Zacatecas',42),(1766,'Bocas del Toro',124),(1767,'Chiriquí',124),(1768,'Coclé',124),(1769,'Colón',124),(1770,'Darién',124),(1771,'Herrera',124),(1772,'Los Santos',124),(1773,'Panamá',124),(1774,'San Blas',124),(1775,'Veraguas',124),(1777,'Chuquisaca',123),(1778,'Cochabamba',123),(1779,'El Beni',123),(1780,'La Paz',123),(1781,'Oruro',123),(1782,'Pando',123),(1783,'Potosí',123),(1784,'Santa Cruz',123),(1785,'Tarija',123),(1787,'Alajuela',36),(1788,'Cartago',36),(1789,'Guanacaste',36),(1790,'Heredia',36),(1791,'Limón',36),(1792,'Puntarenas',36),(1793,'San José',36),(1795,'Galápagos',103),(1796,'Azuay',103),(1797,'Bolívar',103),(1798,'Canar',103),(1799,'Carchi',103),(1800,'Chimborazo',103),(1801,'Cotopaxi',103),(1802,'El Oro',103),(1803,'Esmeraldas',103),(1804,'Guayas',103),(1805,'Imbabura',103),(1806,'Loja',103),(1807,'Los Ríos',103),(1808,'Manabí',103),(1809,'Morona-Santiago',103),(1810,'Pastaza',103),(1811,'Pichincha',103),(1812,'Tungurahua',103),(1813,'Zamora-Chinchipe',103),(1814,'Sucumbíos',103),(1815,'Napo',103),(1816,'Orellana',103),(1818,'Buenos Aires',5),(1819,'Catamarca',5),(1820,'Chaco',5),(1821,'Chubut',5),(1822,'Córdoba',5),(1823,'Corrientes',5),(1824,'Distrito Federal',5),(1825,'Entre Ríos',5),(1826,'Formosa',5),(1827,'Jujuy',5),(1828,'La Pampa',5),(1829,'La Rioja',5),(1830,'Mendoza',5),(1831,'Misiones',5),(1832,'Neuquén',5),(1833,'Río Negro',5),(1834,'Salta',5),(1835,'San Juan',5),(1836,'San Luis',5),(1837,'Santa Cruz',5),(1838,'Santa Fe',5),(1839,'Santiago del Estero',5),(1840,'Tierra del Fuego',5),(1841,'Tucumán',5),(1843,'Amazonas',95),(1844,'Anzoategui',95),(1845,'Apure',95),(1846,'Aragua',95),(1847,'Barinas',95),(1848,'Bolívar',95),(1849,'Carabobo',95),(1850,'Cojedes',95),(1851,'Delta Amacuro',95),(1852,'Falcón',95),(1853,'Guárico',95),(1854,'Lara',95),(1855,'Mérida',95),(1856,'Miranda',95),(1857,'Monagas',95),(1858,'Nueva Esparta',95),(1859,'Portuguesa',95),(1860,'Sucre',95),(1861,'Táchira',95),(1862,'Trujillo',95),(1863,'Yaracuy',95),(1864,'Zulia',95),(1865,'Dependencias Federales',95),(1866,'Distrito Capital',95),(1867,'Vargas',95),(1869,'Boaco',209),(1870,'Carazo',209),(1871,'Chinandega',209),(1872,'Chontales',209),(1873,'Estelí',209),(1874,'Granada',209),(1875,'Jinotega',209),(1876,'León',209),(1877,'Madriz',209),(1878,'Managua',209),(1879,'Masaya',209),(1880,'Matagalpa',209),(1881,'Nueva Segovia',209),(1882,'Rio San Juan',209),(1883,'Rivas',209),(1884,'Zelaya',209),(1886,'Pinar del Rio',113),(1887,'Ciudad de la Habana',113),(1888,'Matanzas',113),(1889,'Isla de la Juventud',113),(1890,'Camaguey',113),(1891,'Ciego de Avila',113),(1892,'Cienfuegos',113),(1893,'Granma',113),(1894,'Guantanamo',113),(1895,'La Habana',113),(1896,'Holguin',113),(1897,'Las Tunas',113),(1898,'Sancti Spiritus',113),(1899,'Santiago de Cuba',113),(1900,'Villa Clara',113),(1901,'Acre',12),(1902,'Alagoas',12),(1903,'Amapa',12),(1904,'Amazonas',12),(1905,'Bahia',12),(1906,'Ceara',12),(1907,'Distrito Federal',12),(1908,'Espirito Santo',12),(1909,'Mato Grosso do Sul',12),(1910,'Maranhao',12),(1911,'Mato Grosso',12),(1912,'Minas Gerais',12),(1913,'Para',12),(1914,'Paraiba',12),(1915,'Parana',12),(1916,'Piaui',12),(1917,'Rio de Janeiro',12),(1918,'Rio Grande do Norte',12),(1919,'Rio Grande do Sul',12),(1920,'Rondonia',12),(1921,'Roraima',12),(1922,'Santa Catarina',12),(1923,'Sao Paulo',12),(1924,'Sergipe',12),(1925,'Goias',12),(1926,'Pernambuco',12),(1927,'Tocantins',12),(1930,'Akureyri',83),(1931,'Arnessysla',83),(1932,'Austur-Bardastrandarsysla',83),(1933,'Austur-Hunavatnssysla',83),(1934,'Austur-Skaftafellssysla',83),(1935,'Borgarfjardarsysla',83),(1936,'Dalasysla',83),(1937,'Eyjafjardarsysla',83),(1938,'Gullbringusysla',83),(1939,'Hafnarfjordur',83),(1943,'Kjosarsysla',83),(1944,'Kopavogur',83),(1945,'Myrasysla',83),(1946,'Neskaupstadur',83),(1947,'Nordur-Isafjardarsysla',83),(1948,'Nordur-Mulasysla',83),(1949,'Nordur-Tingeyjarsysla',83),(1950,'Olafsfjordur',83),(1951,'Rangarvallasysla',83),(1952,'Reykjavik',83),(1953,'Saudarkrokur',83),(1954,'Seydisfjordur',83),(1956,'Skagafjardarsysla',83),(1957,'Snafellsnes- og Hnappadalssysla',83),(1958,'Strandasysla',83),(1959,'Sudur-Mulasysla',83),(1960,'Sudur-Tingeyjarsysla',83),(1961,'Vestmannaeyjar',83),(1962,'Vestur-Bardastrandarsysla',83),(1964,'Vestur-Isafjardarsysla',83),(1965,'Vestur-Skaftafellssysla',83),(1966,'Anhui',35),(1967,'Zhejiang',35),(1968,'Jiangxi',35),(1969,'Jiangsu',35),(1970,'Jilin',35),(1971,'Qinghai',35),(1972,'Fujian',35),(1973,'Heilongjiang',35),(1974,'Henan',35),(1975,'Hebei',35),(1976,'Hunan',35),(1977,'Hubei',35),(1978,'Xinjiang',35),(1979,'Xizang',35),(1980,'Gansu',35),(1981,'Guangxi',35),(1982,'Guizhou',35),(1983,'Liaoning',35),(1984,'Nei Mongol',35),(1985,'Ningxia',35),(1986,'Beijing',35),(1987,'Shanghai',35),(1988,'Shanxi',35),(1989,'Shandong',35),(1990,'Shaanxi',35),(1991,'Sichuan',35),(1992,'Tianjin',35),(1993,'Yunnan',35),(1994,'Guangdong',35),(1995,'Hainan',35),(1996,'Chongqing',35),(1997,'Central',97),(1998,'Coast',97),(1999,'Eastern',97),(2000,'Nairobi Area',97),(2001,'North-Eastern',97),(2002,'Nyanza',97),(2003,'Rift Valley',97),(2004,'Western',97),(2006,'Gilbert Islands',195),(2007,'Line Islands',195),(2008,'Phoenix Islands',195),(2010,'Australian Capital Territory',1),(2011,'New South Wales',1),(2012,'Northern Territory',1),(2013,'Queensland',1),(2014,'South Australia',1),(2015,'Tasmania',1),(2016,'Victoria',1),(2017,'Western Australia',1),(2018,'Dublin',27),(2019,'Galway',27),(2020,'Kildare',27),(2021,'Leitrim',27),(2022,'Limerick',27),(2023,'Mayo',27),(2024,'Meath',27),(2025,'Carlow',27),(2026,'Kilkenny',27),(2027,'Laois',27),(2028,'Longford',27),(2029,'Louth',27),(2030,'Offaly',27),(2031,'Westmeath',27),(2032,'Wexford',27),(2033,'Wicklow',27),(2034,'Roscommon',27),(2035,'Sligo',27),(2036,'Clare',27),(2037,'Cork',27),(2038,'Kerry',27),(2039,'Tipperary',27),(2040,'Waterford',27),(2041,'Cavan',27),(2042,'Donegal',27),(2043,'Monaghan',27),(2044,'Karachaeva-Cherkesskaya Respublica',50),(2045,'Raimirskii (Dolgano-Nenetskii) AO',50),(2046,'Respublica Tiva',50),(2047,'Newfoundland',32),(2048,'Nova Scotia',32),(2049,'Prince Edward Island',32),(2050,'New Brunswick',32),(2051,'Quebec',32),(2052,'Ontario',32),(2053,'Manitoba',32),(2054,'Saskatchewan',32),(2055,'Alberta',32),(2056,'British Columbia',32),(2057,'Nunavut',32),(2058,'Northwest Territories',32),(2059,'Yukon Territory',32),(2060,'Drenthe',19),(2061,'Friesland',19),(2062,'Gelderland',19),(2063,'Groningen',19),(2064,'Limburg',19),(2065,'Noord-Brabant',19),(2066,'Noord-Holland',19),(2067,'Utrecht',19),(2068,'Zeeland',19),(2069,'Zuid-Holland',19),(2071,'Overijssel',19),(2072,'Flevoland',19),(2073,'Duarte',138),(2074,'Puerto Plata',138),(2075,'Valverde',138),(2076,'María Trinidad Sánchez',138),(2077,'Azua',138),(2078,'Santiago',138),(2079,'San Cristóbal',138),(2080,'Peravia',138),(2081,'Elías Piña',138),(2082,'Barahona',138),(2083,'Monte Plata',138),(2084,'Salcedo',138),(2085,'La Altagracia',138),(2086,'San Juan',138),(2087,'Monseñor Nouel',138),(2088,'Monte Cristi',138),(2089,'Espaillat',138),(2090,'Sánchez Ramírez',138),(2091,'La Vega',138),(2092,'San Pedro de Macorís',138),(2093,'Independencia',138),(2094,'Dajabón',138),(2095,'Baoruco',138),(2096,'El Seibo',138),(2097,'Hato Mayor',138),(2098,'La Romana',138),(2099,'Pedernales',138),(2100,'Samaná',138),(2101,'Santiago Rodríguez',138),(2102,'San José de Ocoa',138),(2103,'Chiba',70),(2104,'Ehime',70),(2105,'Oita',70),(2106,'Skopje',85),(2108,'Schanghai',35),(2109,'Hongkong',35),(2110,'Neimenggu',35),(2111,'Aomen',35),(2112,'Amnat Charoen',92),(2113,'Ang Thong',92),(2114,'Bangkok',92),(2115,'Buri Ram',92),(2116,'Chachoengsao',92),(2117,'Chai Nat',92),(2118,'Chaiyaphum',92),(2119,'Chanthaburi',92),(2120,'Chiang Mai',92),(2121,'Chiang Rai',92),(2122,'Chon Buri',92),(2124,'Kalasin',92),(2126,'Kanchanaburi',92),(2127,'Khon Kaen',92),(2128,'Krabi',92),(2129,'Lampang',92),(2131,'Loei',92),(2132,'Lop Buri',92),(2133,'Mae Hong Son',92),(2134,'Maha Sarakham',92),(2137,'Nakhon Pathom',92),(2139,'Nakhon Ratchasima',92),(2140,'Nakhon Sawan',92),(2141,'Nakhon Si Thammarat',92),(2143,'Narathiwat',92),(2144,'Nong Bua Lam Phu',92),(2145,'Nong Khai',92),(2146,'Nonthaburi',92),(2147,'Pathum Thani',92),(2148,'Pattani',92),(2149,'Phangnga',92),(2150,'Phatthalung',92),(2154,'Phichit',92),(2155,'Phitsanulok',92),(2156,'Phra Nakhon Si Ayutthaya',92),(2157,'Phrae',92),(2158,'Phuket',92),(2159,'Prachin Buri',92),(2160,'Prachuap Khiri Khan',92),(2162,'Ratchaburi',92),(2163,'Rayong',92),(2164,'Roi Et',92),(2165,'Sa Kaeo',92),(2166,'Sakon Nakhon',92),(2167,'Samut Prakan',92),(2168,'Samut Sakhon',92),(2169,'Samut Songkhran',92),(2170,'Saraburi',92),(2172,'Si Sa Ket',92),(2173,'Sing Buri',92),(2174,'Songkhla',92),(2175,'Sukhothai',92),(2176,'Suphan Buri',92),(2177,'Surat Thani',92),(2178,'Surin',92),(2180,'Trang',92),(2182,'Ubon Ratchathani',92),(2183,'Udon Thani',92),(2184,'Uthai Thani',92),(2185,'Uttaradit',92),(2186,'Yala',92),(2187,'Yasothon',92),(2188,'Busan',69),(2189,'Daegu',69),(2191,'Gangwon',69),(2192,'Gwangju',69),(2193,'Gyeonggi',69),(2194,'Gyeongsangbuk',69),(2195,'Gyeongsangnam',69),(2196,'Jeju',69),(2201,'Delhi',25),(2202,'Región de Los Ríos',81),(2203,'Región de Arica y Parinacota',81);
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formapagos`
--

DROP TABLE IF EXISTS `formapagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formapagos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formapagos`
--

LOCK TABLES `formapagos` WRITE;
/*!40000 ALTER TABLE `formapagos` DISABLE KEYS */;
/*!40000 ALTER TABLE `formapagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foto`
--

DROP TABLE IF EXISTS `foto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foto`
--

LOCK TABLES `foto` WRITE;
/*!40000 ALTER TABLE `foto` DISABLE KEYS */;
INSERT INTO `foto` VALUES (1,1,'d929e10b-508c-4a6c-8c9d-9da1d00d9ac8/Jona tamaño Infantil.png',NULL,NULL);
/*!40000 ALTER TABLE `foto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventario`
--

DROP TABLE IF EXISTS `inventario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `existencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventario`
--

LOCK TABLES `inventario` WRITE;
/*!40000 ALTER TABLE `inventario` DISABLE KEYS */;
INSERT INTO `inventario` VALUES (1,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'30','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'9','0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'4','0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'100','0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,'100','0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,'300','0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,'100','0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,'200','0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,'200','0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,'6','0000-00-00 00:00:00','0000-00-00 00:00:00'),(14,'70','0000-00-00 00:00:00','0000-00-00 00:00:00'),(15,'16','0000-00-00 00:00:00','0000-00-00 00:00:00'),(16,'63','0000-00-00 00:00:00','0000-00-00 00:00:00'),(17,'60','0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,'51','0000-00-00 00:00:00','0000-00-00 00:00:00'),(19,'28','0000-00-00 00:00:00','0000-00-00 00:00:00'),(20,'17','0000-00-00 00:00:00','0000-00-00 00:00:00'),(21,'15','0000-00-00 00:00:00','0000-00-00 00:00:00'),(22,'3','0000-00-00 00:00:00','0000-00-00 00:00:00'),(23,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(24,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(25,'15','0000-00-00 00:00:00','0000-00-00 00:00:00'),(26,'16','0000-00-00 00:00:00','0000-00-00 00:00:00'),(27,'32','0000-00-00 00:00:00','0000-00-00 00:00:00'),(28,'28','0000-00-00 00:00:00','0000-00-00 00:00:00'),(29,'124','0000-00-00 00:00:00','0000-00-00 00:00:00'),(30,'113','0000-00-00 00:00:00','0000-00-00 00:00:00'),(31,'66','0000-00-00 00:00:00','0000-00-00 00:00:00'),(32,'31','0000-00-00 00:00:00','0000-00-00 00:00:00'),(33,'20','0000-00-00 00:00:00','0000-00-00 00:00:00'),(34,'11','0000-00-00 00:00:00','0000-00-00 00:00:00'),(35,'110','0000-00-00 00:00:00','0000-00-00 00:00:00'),(36,'143','0000-00-00 00:00:00','0000-00-00 00:00:00'),(37,'3','0000-00-00 00:00:00','0000-00-00 00:00:00'),(38,'4','0000-00-00 00:00:00','0000-00-00 00:00:00'),(39,'3','0000-00-00 00:00:00','0000-00-00 00:00:00'),(40,'7','0000-00-00 00:00:00','0000-00-00 00:00:00'),(41,'9','0000-00-00 00:00:00','0000-00-00 00:00:00'),(42,'26','0000-00-00 00:00:00','0000-00-00 00:00:00'),(43,'8','0000-00-00 00:00:00','0000-00-00 00:00:00'),(44,'11','0000-00-00 00:00:00','0000-00-00 00:00:00'),(45,'26','0000-00-00 00:00:00','0000-00-00 00:00:00'),(46,'9','0000-00-00 00:00:00','0000-00-00 00:00:00'),(47,'1','0000-00-00 00:00:00','0000-00-00 00:00:00'),(48,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(49,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(50,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(51,'11','0000-00-00 00:00:00','0000-00-00 00:00:00'),(52,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(53,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(54,'10','0000-00-00 00:00:00','0000-00-00 00:00:00'),(55,'40','0000-00-00 00:00:00','0000-00-00 00:00:00'),(56,'30','0000-00-00 00:00:00','0000-00-00 00:00:00'),(57,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(58,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(59,'1','0000-00-00 00:00:00','0000-00-00 00:00:00'),(60,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(61,'16','0000-00-00 00:00:00','0000-00-00 00:00:00'),(62,'3','0000-00-00 00:00:00','0000-00-00 00:00:00'),(63,'3','0000-00-00 00:00:00','0000-00-00 00:00:00'),(64,'3','0000-00-00 00:00:00','0000-00-00 00:00:00'),(65,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(66,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(67,'1','0000-00-00 00:00:00','0000-00-00 00:00:00'),(68,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(69,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(70,'17','0000-00-00 00:00:00','0000-00-00 00:00:00'),(71,'7','0000-00-00 00:00:00','0000-00-00 00:00:00'),(72,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(73,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(74,'55','0000-00-00 00:00:00','0000-00-00 00:00:00'),(75,'34','0000-00-00 00:00:00','0000-00-00 00:00:00'),(76,'115','0000-00-00 00:00:00','0000-00-00 00:00:00'),(77,'119','0000-00-00 00:00:00','0000-00-00 00:00:00'),(78,'12','0000-00-00 00:00:00','0000-00-00 00:00:00'),(79,'8','0000-00-00 00:00:00','0000-00-00 00:00:00'),(80,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(81,'34','0000-00-00 00:00:00','0000-00-00 00:00:00'),(82,'33','0000-00-00 00:00:00','0000-00-00 00:00:00'),(83,'8','0000-00-00 00:00:00','0000-00-00 00:00:00'),(84,'60','0000-00-00 00:00:00','0000-00-00 00:00:00'),(85,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(86,'3','0000-00-00 00:00:00','0000-00-00 00:00:00'),(87,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(88,'20','0000-00-00 00:00:00','0000-00-00 00:00:00'),(89,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(90,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(91,'4','0000-00-00 00:00:00','0000-00-00 00:00:00'),(92,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(93,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(94,'3','0000-00-00 00:00:00','0000-00-00 00:00:00'),(95,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(96,'4','0000-00-00 00:00:00','0000-00-00 00:00:00'),(97,'3','0000-00-00 00:00:00','0000-00-00 00:00:00'),(98,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(99,'14','0000-00-00 00:00:00','0000-00-00 00:00:00'),(100,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(101,'0','0000-00-00 00:00:00','0000-00-00 00:00:00'),(102,'0','0000-00-00 00:00:00','0000-00-00 00:00:00'),(103,'6','0000-00-00 00:00:00','0000-00-00 00:00:00'),(104,'1','0000-00-00 00:00:00','0000-00-00 00:00:00'),(105,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(106,'70','0000-00-00 00:00:00','0000-00-00 00:00:00'),(107,'80','0000-00-00 00:00:00','0000-00-00 00:00:00'),(108,'30','0000-00-00 00:00:00','0000-00-00 00:00:00'),(109,'40','0000-00-00 00:00:00','0000-00-00 00:00:00'),(110,'50','0000-00-00 00:00:00','0000-00-00 00:00:00'),(111,'30','0000-00-00 00:00:00','0000-00-00 00:00:00'),(112,'7','0000-00-00 00:00:00','0000-00-00 00:00:00'),(113,'14','0000-00-00 00:00:00','0000-00-00 00:00:00'),(114,'33','0000-00-00 00:00:00','0000-00-00 00:00:00'),(115,'27','0000-00-00 00:00:00','0000-00-00 00:00:00'),(116,'24','0000-00-00 00:00:00','0000-00-00 00:00:00'),(117,'18','0000-00-00 00:00:00','0000-00-00 00:00:00'),(118,'23','0000-00-00 00:00:00','0000-00-00 00:00:00'),(119,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(120,'3','0000-00-00 00:00:00','0000-00-00 00:00:00'),(121,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(122,'29','0000-00-00 00:00:00','0000-00-00 00:00:00'),(123,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(124,'9','0000-00-00 00:00:00','0000-00-00 00:00:00'),(125,'11','0000-00-00 00:00:00','0000-00-00 00:00:00'),(126,'7','0000-00-00 00:00:00','0000-00-00 00:00:00'),(127,'1','0000-00-00 00:00:00','0000-00-00 00:00:00'),(128,'31','0000-00-00 00:00:00','0000-00-00 00:00:00'),(129,'8','0000-00-00 00:00:00','0000-00-00 00:00:00'),(130,'55','0000-00-00 00:00:00','0000-00-00 00:00:00'),(131,'15','0000-00-00 00:00:00','0000-00-00 00:00:00'),(132,'36','0000-00-00 00:00:00','0000-00-00 00:00:00'),(133,'7','0000-00-00 00:00:00','0000-00-00 00:00:00'),(134,'8','0000-00-00 00:00:00','0000-00-00 00:00:00'),(135,'18','0000-00-00 00:00:00','0000-00-00 00:00:00'),(136,'16','0000-00-00 00:00:00','0000-00-00 00:00:00'),(137,'26','0000-00-00 00:00:00','0000-00-00 00:00:00'),(138,'7','0000-00-00 00:00:00','0000-00-00 00:00:00'),(139,'51','0000-00-00 00:00:00','0000-00-00 00:00:00'),(140,'6','0000-00-00 00:00:00','0000-00-00 00:00:00'),(141,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(142,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(143,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(144,'9','0000-00-00 00:00:00','0000-00-00 00:00:00'),(145,'6','0000-00-00 00:00:00','0000-00-00 00:00:00'),(146,'9','0000-00-00 00:00:00','0000-00-00 00:00:00'),(147,'3','0000-00-00 00:00:00','0000-00-00 00:00:00'),(148,'8','0000-00-00 00:00:00','0000-00-00 00:00:00'),(149,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(150,'10','0000-00-00 00:00:00','0000-00-00 00:00:00'),(151,'0','0000-00-00 00:00:00','0000-00-00 00:00:00'),(152,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(153,'30','0000-00-00 00:00:00','0000-00-00 00:00:00'),(154,'4','0000-00-00 00:00:00','0000-00-00 00:00:00'),(155,'20','0000-00-00 00:00:00','0000-00-00 00:00:00'),(156,'20','0000-00-00 00:00:00','0000-00-00 00:00:00'),(157,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(158,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(159,'9','0000-00-00 00:00:00','0000-00-00 00:00:00'),(160,'1','0000-00-00 00:00:00','0000-00-00 00:00:00'),(161,'4','0000-00-00 00:00:00','0000-00-00 00:00:00'),(162,'1','0000-00-00 00:00:00','0000-00-00 00:00:00'),(163,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(164,'21','0000-00-00 00:00:00','0000-00-00 00:00:00'),(165,'28','0000-00-00 00:00:00','0000-00-00 00:00:00'),(166,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(167,'2','0000-00-00 00:00:00','0000-00-00 00:00:00'),(168,'5','0000-00-00 00:00:00','0000-00-00 00:00:00'),(201,'10','2019-09-01 21:30:02','2019-09-01 21:30:02');
/*!40000 ALTER TABLE `inventario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventarioservicio`
--

DROP TABLE IF EXISTS `inventarioservicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventarioservicio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `botes` int(11) DEFAULT NULL,
  `existencia` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventarioservicio`
--

LOCK TABLES `inventarioservicio` WRITE;
/*!40000 ALTER TABLE `inventarioservicio` DISABLE KEYS */;
INSERT INTO `inventarioservicio` VALUES (1,0,100,'2019-08-14 22:09:32','2019-08-14 22:09:32'),(201,0,100,'2019-09-01 21:30:02','2019-09-01 21:30:02');
/*!40000 ALTER TABLE `inventarioservicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membresia`
--

DROP TABLE IF EXISTS `membresia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membresia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo` decimal(8,2) NOT NULL,
  `vigencia` date NOT NULL,
  `idAuth` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membresia`
--

LOCK TABLES `membresia` WRITE;
/*!40000 ALTER TABLE `membresia` DISABLE KEYS */;
/*!40000 ALTER TABLE `membresia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movinventario`
--

DROP TABLE IF EXISTS `movinventario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movinventario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movinventario`
--

LOCK TABLES `movinventario` WRITE;
/*!40000 ALTER TABLE `movinventario` DISABLE KEYS */;
/*!40000 ALTER TABLE `movinventario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagos`
--

DROP TABLE IF EXISTS `pagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `folio` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `pesos` decimal(8,2) NOT NULL,
  `dollar` decimal(8,2) NOT NULL,
  `tarjeta` decimal(8,2) NOT NULL,
  `deposito` decimal(8,2) NOT NULL,
  `transferencia` decimal(8,2) NOT NULL,
  `cambio` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagos`
--

LOCK TABLES `pagos` WRITE;
/*!40000 ALTER TABLE `pagos` DISABLE KEYS */;
INSERT INTO `pagos` VALUES (1,1,1,50.00,0.00,0.00,0.00,0.00,0.00,'2019-08-15 20:38:46','2019-08-15 20:38:46'),(2,2,1,50.00,0.00,0.00,0.00,0.00,0.00,'2019-08-15 20:40:08','2019-08-15 20:40:08'),(3,2,1,0.00,2.63,0.00,0.00,0.00,0.00,'2019-08-15 20:41:34','2019-08-15 20:41:34'),(4,2,1,0.03,0.00,0.00,0.00,0.00,0.00,'2019-08-15 20:42:32','2019-08-15 20:42:32');
/*!40000 ALTER TABLE `pagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paises`
--

DROP TABLE IF EXISTS `paises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paises`
--

LOCK TABLES `paises` WRITE;
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` VALUES (1,'Australia'),(2,'Austria'),(3,'Azerbaiyán'),(4,'Anguilla'),(5,'Argentina'),(6,'Armenia'),(7,'Bielorrusia'),(8,'Belice'),(9,'Bélgica'),(10,'Bermudas'),(11,'Bulgaria'),(12,'Brasil'),(13,'Reino Unido'),(14,'Hungría'),(15,'Vietnam'),(16,'Haiti'),(17,'Guadalupe'),(18,'Alemania'),(19,'Países Bajos => Holanda'),(20,'Grecia'),(21,'Georgia'),(22,'Dinamarca'),(23,'Egipto'),(24,'Israel'),(25,'India'),(26,'Irán'),(27,'Irlanda'),(28,'España'),(29,'Italia'),(30,'Kazajstán'),(31,'Camerún'),(32,'Canadá'),(33,'Chipre'),(34,'Kirguistán'),(35,'China'),(36,'Costa Rica'),(37,'Kuwait'),(38,'Letonia'),(39,'Libia'),(40,'Lituania'),(41,'Luxemburgo'),(42,'México'),(43,'Moldavia'),(44,'Mónaco'),(45,'Nueva Zelanda'),(46,'Noruega'),(47,'Polonia'),(48,'Portugal'),(49,'Reunión'),(50,'Rusia'),(51,'El Salvador'),(52,'Eslovaquia'),(53,'Eslovenia'),(54,'Surinam'),(55,'Estados Unidos'),(56,'Tadjikistan'),(57,'Turkmenistan'),(58,'Islas Turcas y Caicos'),(59,'Turquía'),(60,'Uganda'),(61,'Uzbekistán'),(62,'Ucrania'),(63,'Finlandia');
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `costo` decimal(8,2) NOT NULL,
  `gramos` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'PRU123','PRUEBA',50.00,20.00,100.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'N002','MICROPORE COLOR PIEL 1/2 PULGADA',0.00,30.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'N003','MICROPURE COLOR PIEL 1 PULGADA',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'N004','DURAPURE BLANCO 2 PULGADAS',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'N005','TRANSPORE 1 PULGADA',0.00,9.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'N006','PLACAS PARA CAUTERIO',0.00,4.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'N007','GUANTES AMBIDERM LATEX CH',0.00,100.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,'N008','GUANTES AMBIDERM LATEX M',0.00,100.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,'N009','GUANTES AMBIDERM LATEX G',0.00,300.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,'N010','GUANTES AMBIDERM NITRILO CH',0.00,100.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,'N011','GUANTES AMBIDERM NITRILO M',0.00,200.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,'N012','GUANTES AMBIDERM NITRILO G',0.00,200.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,'N013','PAQUETE DE COMPRESAS ESTERILES',0.00,6.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(14,'N014','PROTECTORES CLINICOS NO ESTERILES',0.00,70.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(15,'N015','GUANTES P/CX TRIFLEX #6',0.00,16.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(16,'N016','GUANTES P/CX TRIFLEX #6 1/2',0.00,63.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(17,'N017','GUANTES P/CX TRIFLEX #7',0.00,60.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,'N018','GUANTES P/CX TRIFLEX #7 1/2',0.00,51.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(19,'N019','GUANTES P/CX TRIFLEX #8',0.00,28.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(20,'N020','GUANTES P/CX TRIFLEX #8 1/2',0.00,17.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(21,'N021','GUANTES P/CX NITRILO #7',0.00,15.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(22,'N022','GUANTES P/CX NITRILO #8',0.00,3.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(23,'N023','BATAS P/CX ESTERILES',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(24,'N024','JERINGAS DE ASEPTO',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(25,'N025','LAPIZ DE CAUTERIO C/PUNTA',0.00,15.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(26,'N026','JERINGAS TERUMO 60 CC',0.00,16.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(27,'N027','JERINGAS TERUMO 20 CC',0.00,32.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(28,'N028','JERINGAS TERUMO 10 CC',0.00,28.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(29,'N029','JERINGAS TERUMO 5 CC',0.00,124.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(30,'N030','JERINGAS TERUMO 3 CC',0.00,113.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(31,'N031','JERINGAS INSULINA 1 CC',0.00,66.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(32,'N032','JERINGAS INSULINA ULTRA FINE 0.5 CC',0.00,31.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(33,'N033','AGUJAS TERUMO #18',0.00,20.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(34,'N034','AGUJAS TERUMO #20',0.00,11.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(35,'N035','AGUJAS TERUMO #25 1 (1/2)',0.00,110.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(36,'N036','AGUJA WHITACRE #27 CORTA',0.00,143.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(37,'N037','AGUJA WHITECRE #27 LARGA',0.00,3.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(38,'N038','EQUIPOS PERISAFE #17',0.00,4.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(39,'N039','TUBOS ASPIRACI',0.00,3.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(40,'N040','TUBOS CON YANKAWERS 1 METRO',0.00,7.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(41,'N041','50L. FISIOLOGICA 1000 ML',0.00,9.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(42,'N042','50L. HARMATH 1000 ML',0.00,26.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(43,'N043','50L. FISIOLOGICA 500 ML',0.00,8.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(44,'N044','50L. FISIOLOGICA 250 ML',0.00,11.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(45,'N045','50L. MIXTA 1000 ML',0.00,26.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(46,'N046','50L. HEMACEL 500 ML',0.00,9.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(47,'N047','50L. GLUCOSADA 5% 1000 ML',0.00,1.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(48,'N048','50L. GLUCOSADA 5% 500 ML',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(49,'N049','50L. GLUCOSADA 5% 250 ML',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(50,'N050','EQUIPOS VENOCLISIS 2 VIAS',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(51,'N051','EQUIPOS VENOCLISIS 1 VIA',0.00,11.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(52,'N052','EQUIPOS VENOCLISIS MICROGOTEROS',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(53,'N053','EQUIPOS VENOCLISIS P/TRANSFUNDIR',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(54,'N054','REPUESTOS DE AVAGARD',0.00,10.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(55,'N055','CEPILLOS QUIRURGICOS C/JABON',0.00,40.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(56,'N056','CEPILLOS QUIRURGICOS C/ISODINE',0.00,30.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(57,'N057','JALON ISODINE ESPUMA',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(58,'N058','JALON JABON QUIRURGICO',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(59,'N059','JALON DE BENZAL',0.00,1.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(60,'N060','DERMO QRIT 500 ML',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(61,'N061','50L. IRRIGACION 1000 ML',0.00,16.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(62,'N062','BOLSAS RECOLECTORAS DE ORINA P/CAMA',0.00,3.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(63,'N063','SONDAS FOLEYN',0.00,3.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(64,'N064','SONDAS DE NELATON',0.00,3.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(65,'N065','AGUA OXIGENADA 960 ML',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(66,'N066','ALCOHOL 960 ML',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(67,'N067','JALON MICRODACYN 5 LITROS',0.00,1.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(68,'N068','EQUIPOS DE ANESTECIA P/ADULTO',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(69,'N069','BOLSAS DE ELECTRODOS P/ADULTO',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(70,'N070','VENDA ELASTICA 30 CM IDEAL',0.00,17.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(71,'N071','VENDA ELASTICA 15 CM IDEAL',0.00,7.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(72,'N072','VENDA ELASTICA 10 CM IDEAL',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(73,'N073','VENDA ELASTICA 5 CM IDEAL',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(74,'N074','HOJAS BISTURI ACERO INOXIDABLE #20',0.00,55.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(75,'N075','HOJAS BISTURI ACERO INOXIDABLE #10',0.00,34.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(76,'N076','HOJAS BISTURI ACERO INOXIDABLE #15',0.00,115.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(77,'N077','HOJAS BISTURI ACERO INOXIDABLE #11',0.00,119.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(78,'N078','XILOCAINAS C/EPINEFRINA PISA',0.00,12.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(79,'N079','XILOCAINAS SIMPLES PISA',0.00,8.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(80,'N080','FRASCO AMPULA BICARNMAT',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(81,'N081','PUNZOCAT #18',0.00,34.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(82,'N082','PUNZOCAT #20',0.00,33.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(83,'N083','PUNZOCAT #22',0.00,8.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(84,'N084','TEGADERMS CH',0.00,60.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(85,'N085','CANULAS DE GUEDEL AMARILLA',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(86,'N086','CANULAS DE GUEDEL ROJA',0.00,3.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(87,'N087','CANULAS DE GUEDEL VERDE',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(88,'N088','CANULAS YANKAWERS',0.00,20.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(89,'N089','TUBO ENDOTRAQUEAL #6.5',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(90,'N090','TUBO ENDOTRAQUEAL #7.0',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(91,'N091','TUBO ENDOTRAQUEAL #7.5',0.00,4.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(92,'N092','TUBO ENDOTRAQUEAL #8.0',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(93,'N093','TUBO ENDOTRAQUEAL #8.5',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(94,'N094','TUBO ENDOTRAQUEAL C/ALMA DE ACERO #6.5',0.00,3.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(95,'N095','TUBO ENDOTRAQUEAL C/ALMA DE ACERO #7.0',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(96,'N096','TUBO ENDOTRAQUEAL C/ALMA DE ACERO #7.5',0.00,4.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(97,'N097','TUBO ENDOTRAQUEAL C/ALMA DE ACERO #8.0',0.00,3.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(98,'N098','PUNTAS NASALES P/ADULTO',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(99,'N099','MASCARILLAS CON RESERVORIO',0.00,14.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(100,'N100','PROTECTORES PARA LAMPARAS',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(101,'N101','JACK SON PRATT 7 MM',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(102,'N102','JACK SON PRATT 10 MM',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(103,'N103','SONDAS DE ALIMENTACI',0.00,6.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(104,'N104','CAL SODADA',0.00,1.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(105,'N105','AGUA BIDESTRILADA',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(106,'N106','SABANA BLANCA PARA CAMILLA',0.00,70.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(107,'N107','BATA BLANCA COMPLETA P/PACIENTE',0.00,80.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(108,'N108','GORRO PARA CIRUJANO',0.00,30.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(109,'N109','GORRO PARA ENFERMERA',0.00,40.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(110,'N110','CUBRE BOCAS SENCILLOS',0.00,50.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(111,'N111','CUBRE ZAPATO AZUL CON ANTIDERRAPANTE',0.00,30.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(112,'N112','ETHICON 6-0',0.00,7.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(113,'N113','ETHICON 5-0',0.00,14.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(114,'N114','ETHICON 3-0',0.00,33.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(115,'N115','ETHICON 2-0',0.00,27.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(116,'N116','MAXON DEL 0',0.00,24.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(117,'N117','MAXON DEL 1-0',0.00,18.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(118,'N118','MAXON DEL 2-0',0.00,23.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(119,'N119','MAXON DEL 3-0',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(120,'N120','MAXON DEL 4-0',0.00,3.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(121,'N121','MAXON DEL 5-0',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(122,'N122','PROLENE DEL 0',0.00,29.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(123,'N123','PROLENE DEL 1-0',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(124,'N124','CROMADO DEL 2-0',0.00,9.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(125,'N125','CROMADO DEL 0',0.00,11.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(126,'N126','CROMADO DEL 1-0',0.00,7.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(127,'N127','CROMADO DEL 5-0',0.00,1.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(128,'N128','MAXON DEL 6-0',0.00,31.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(129,'N129','MONOCRYL 2-0',0.00,8.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(130,'N130','MONOCRYL 1-0',0.00,55.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(131,'N131','MONOCRYL 3-0',0.00,15.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(132,'N132','MAYLON 5-0 TRANSPARENTE',0.00,36.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(133,'N133','VICRYL 1-0',0.00,7.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(134,'N134','VICRYL 2-0',0.00,8.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(135,'N135','VICRYL 4-0',0.00,18.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(136,'N136','VICRYL 5-0',0.00,16.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(137,'N137','BROMURO DE VERCURONIO 4 MG',0.00,26.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(138,'N138','PROPOFOL 200 MG',0.00,7.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(139,'N139','EPINEFRINA (ADRENALINA) 1 MG',0.00,51.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(140,'N140','BUPIVACAINA PESADA 15 MG',0.00,6.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(141,'N141','HIDROCORTISONA 500 MG',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(142,'N142','HIDROCORTISONA 100 MG',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(143,'N143','RANITIDINA 50 MG',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(144,'N144','EMIESTOP O ZOFRAN 8 MG',0.00,9.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(145,'N145','DEXAMETASONA 8 MG',0.00,6.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(146,'N146','KETOROLACO 30 MG',0.00,9.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(147,'N147','METAMIZOL S',0.00,3.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(148,'N148','CEFTRIAXONA 1 GR',0.00,8.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(149,'N149','AVAPENA (ELOROPIRAMIDA) 20 MG',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(150,'N150','EPICLODINA 150 MG',0.00,10.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(151,'N151','ENOXOPARINA 40 MG',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(152,'N152','AMPULAS DEL AMPROLENE',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(153,'N153','AMPULAS DE AGUA INFECTABLE',0.00,30.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(154,'N154','DICYNONE 250 MG',0.00,4.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(155,'N155','ATROPISA (ATROPINA) 1 MG',0.00,20.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(156,'N156','AMP. BICAR-NAT 7.5 MG / 10 ML',0.00,20.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(157,'N157','DICLOFENACO 75 MG',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(158,'N158','METILPREDNISOLONA 500 MG',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(159,'N159','HIERRO DEXTRAN 100 MG',0.00,9.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(160,'N160','FRASCO LIDOCAINA EN SPRAY',0.00,1.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(161,'N161','OSMOROL (MANITOL) 20 G / 100 ML',0.00,4.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(162,'N162','EVOCS (LEVOFLOXACINO) 500 MG',0.00,1.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(163,'N163','FRASCO CREMA PLEINCELL',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(164,'N164','SOLUCI',0.00,21.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(165,'N165','TAFITRAM TABLETAS 325 MG / 37.5 G',0.00,28.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(166,'N166','ACCUA ASEPTIL SOLUCI',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(167,'N167','ACCUA ASEPTIL GEL',0.00,2.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(168,'N168','KENALOG 10 MG - 5 PIEZAS',0.00,5.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(170,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(171,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(172,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(173,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(174,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(175,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(176,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(177,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(178,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(179,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(180,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(181,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(182,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(183,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(184,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(185,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(186,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(187,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(188,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(189,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(190,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(191,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(192,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(193,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(194,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(195,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(196,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(197,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(198,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(199,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(200,'','',0.00,0.00,0.00,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(201,'codigo2','PRUEBA',34.00,34.00,100.00,'2019-09-01 21:30:02','2019-09-01 21:30:02');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puestos`
--

DROP TABLE IF EXISTS `puestos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puestos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puestos`
--

LOCK TABLES `puestos` WRITE;
/*!40000 ALTER TABLE `puestos` DISABLE KEYS */;
/*!40000 ALTER TABLE `puestos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicio`
--

DROP TABLE IF EXISTS `servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idAuth` int(11) NOT NULL,
  `presioSesion` int(11) NOT NULL,
  `presioCompleto` int(11) NOT NULL,
  `cantidadSesion` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio`
--

LOCK TABLES `servicio` WRITE;
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
INSERT INTO `servicio` VALUES (1,'PRUEBA',5,50,100,7,'2019-08-14 22:09:55','2019-08-14 22:09:55'),(2,'CONSULTA',5,60,0,1,'2019-08-15 20:12:47','2019-08-15 20:12:47'),(3,'BOTOX',5,260,260,1,'2019-08-15 20:14:37','2019-08-15 20:14:37'),(4,'RELLENO FACIAL: CON ÁCIDO HIALURÓNICO',5,600,600,1,'2019-08-15 20:15:07','2019-08-15 20:15:07'),(5,'RELLENO FACIAL: CON RELLENO CON GRASA',5,800,1500,1,'2019-08-15 20:15:37','2019-08-15 20:15:37'),(6,'BLEFAROPLASTIA',5,2500,2500,1,'2019-08-15 20:15:55','2019-08-15 20:15:55'),(7,'ELEVACIÓN DE LABIO SUPERIOR',5,800,800,1,'2019-08-15 20:16:23','2019-08-15 20:16:23'),(8,'LEVANTAMIENTO DIRECTO DE CEJA',5,800,800,1,'2019-08-15 20:16:57','2019-08-15 20:16:57'),(9,'LEVANTAMIENTO INDIRECTO DE CEJA',5,1500,1500,1,'2019-08-15 20:17:18','2019-08-15 20:17:18'),(10,'ESTIRAMIENTO FACIAL ALTO',5,3500,3500,1,'2019-08-15 20:17:36','2019-08-15 20:17:36'),(11,'ESTIRAMIENTO FACIAL BAJO',5,5500,5500,1,'2019-08-15 20:18:03','2019-08-15 20:18:03'),(12,'LIPOSUCCIÓN DE PAPADA CON ANESTESIA LOCAL',5,800,800,1,'2019-08-15 20:18:31','2019-08-15 20:18:31'),(13,'LIPOSUCCIÓN DE PAPADA CON ANESTESIA GENERAL',5,1200,1200,1,'2019-08-15 20:18:54','2019-08-15 20:18:54'),(14,'REDUCCIÓN DE LÓBULO DE LA OREJA',5,600,600,1,'2019-08-15 20:19:24','2019-08-15 20:19:24'),(15,'OTOPLASTIA PARA OREJA EN ASA',5,2000,2000,1,'2019-08-15 20:19:46','2019-08-15 20:19:46'),(16,'BLEFAROPLASTIA CON LEVANTAMIENTO VERTICAL DE LA MEJILLA',5,2900,2900,1,'2019-08-15 20:20:11','2019-08-15 20:20:11'),(17,'RINOPLASTIA CERRADA',5,2500,2500,1,'2019-08-15 20:20:34','2019-08-15 20:20:34'),(18,'RINOPLASTIA ABIERTA',5,3000,3000,1,'2019-08-15 20:20:50','2019-08-15 20:20:50'),(19,'RINOSEPTUMPLASTIA',5,3800,3800,1,'2019-08-15 20:21:13','2019-08-15 20:21:13'),(20,'LIPOSUCCIÓN GENERAL',5,6500,6500,1,'2019-08-15 20:21:53','2019-08-15 20:21:53'),(21,'BRAZILIAN BUTT LIFT',5,4500,4500,1,'2019-08-15 20:22:31','2019-08-15 20:22:31'),(22,'LIPOSUCCIÓN DE UNA SOLA ÁREA',5,1200,1200,1,'2019-08-15 20:22:51','2019-08-15 20:22:51'),(23,'IMPLANTES MAMARIOS',5,3500,3500,1,'2019-08-15 20:23:10','2019-08-15 20:23:10'),(24,'LEVANTAMIENTO MAMARIO',5,5500,5500,1,'2019-08-15 20:23:28','2019-08-15 20:23:28'),(25,'LEVANTAMIENTO MAMARIO CON IMPLANTES',5,8000,8000,1,'2019-08-15 20:23:49','2019-08-15 20:23:49'),(26,'CINTURO PÉLVICO DERMO LIPO PLASTIA (CPDLP)',5,5500,5500,1,'2019-08-15 20:24:13','2019-08-15 20:24:13'),(27,'ABDOMINOPLASTIA CIRCULAR',5,7000,7000,1,'2019-08-15 20:24:27','2019-08-15 20:24:27'),(28,'IMPLANTE DE GLUTEO',5,5000,5000,1,'2019-08-15 20:24:43','2019-08-15 20:24:43'),(29,'MASTECTOMÍA SUBCUTÁNEA',5,4000,4000,1,'2019-08-15 20:25:02','2019-08-15 20:25:02'),(30,'MASTECTOMÍA SUBCUTÁNEA + IMPLANTES',5,7500,7500,1,'2019-08-15 20:25:27','2019-08-15 20:25:27'),(31,'CORRECCIÓN DE GINECOMASTIA POR LIPOSUCCIÓN',5,1500,1500,1,'2019-08-15 20:25:48','2019-08-15 20:25:48');
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idVenta` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` VALUES (1,1,'2019-08-15 20:38:49','2019-08-15 20:38:49'),(2,2,'2019-08-15 20:40:10','2019-08-15 20:40:10'),(3,2,'2019-08-15 20:41:38','2019-08-15 20:41:38'),(4,2,'2019-08-16 20:07:37','2019-08-16 20:07:37'),(5,1,'2019-08-16 20:08:17','2019-08-16 20:08:17');
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipocambio`
--

DROP TABLE IF EXISTS `tipocambio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipocambio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cambio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipocambio`
--

LOCK TABLES `tipocambio` WRITE;
/*!40000 ALTER TABLE `tipocambio` DISABLE KEYS */;
INSERT INTO `tipocambio` VALUES (1,'19',5,'2019-08-03 18:17:10','2019-08-03 18:17:10');
/*!40000 ALTER TABLE `tipocambio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipopagos`
--

DROP TABLE IF EXISTS `tipopagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipopagos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipopagos`
--

LOCK TABLES `tipopagos` WRITE;
/*!40000 ALTER TABLE `tipopagos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipopagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiposervicio`
--

DROP TABLE IF EXISTS `tiposervicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tiposervicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAuth` int(11) NOT NULL,
  `consultorio` varchar(191) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiposervicio`
--

LOCK TABLES `tiposervicio` WRITE;
/*!40000 ALTER TABLE `tiposervicio` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiposervicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apePat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apeMat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idPuesto` int(11) DEFAULT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TelCasa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idCiudad` int(11) DEFAULT NULL,
  `inputFile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuarioPermiso` int(11) NOT NULL,
  `membresias` int(11) NOT NULL,
  `tipoCambio` int(11) NOT NULL,
  `altaCliente` int(11) NOT NULL,
  `venderServ` int(11) NOT NULL,
  `abonosServ` int(11) NOT NULL,
  `altaServ` int(11) NOT NULL,
  `usoMembresia` int(11) NOT NULL,
  `venderProd` int(11) NOT NULL,
  `abonoProd` int(11) NOT NULL,
  `altaProd` int(11) NOT NULL,
  `agregarStock` int(11) NOT NULL,
  `productoPublico` int(11) NOT NULL,
  `productoServ` int(11) NOT NULL,
  `rendimientoRepor` int(11) NOT NULL,
  `ventaCajero` int(11) NOT NULL,
  `ventaGeneral` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `borrarPermiso` int(11) NOT NULL,
  `agendaAdmin` int(11) NOT NULL,
  `colorUser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'JONATHAN ENRIQUE','CAMARILLO','GARCIA','jonathan@camarillodesign.com','$2y$10$Dh8bT06huEIedXhqGygV9.JRf.i1fTCBEH7vFttlhnBzotrG3MCTG',NULL,'6641635164',NULL,2,NULL,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'I46wF2E8qmXVNLQkjtFblzb77o8hQz6MS50jYG16QSKl7v66YnENSr3SFAZz','2018-10-23 01:00:03','2018-12-28 21:26:08',1,1,'#000000'),(14,'PRUEBA','PRUEBA',NULL,'prueba@camarillodesign.com','$2y$10$Hd9lcFp3FIHz03obI437yOoYeNcgeNWhkT3e4keDUcSy42g898Sgu',NULL,'6641234567','6640001122',2,NULL,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'K9YndW9zub7lLyyDioVVaz6gfv6oYXhwiXx6QEb9bCxZNJeNp4z8uPyC8H7z','2019-07-23 03:48:52','2019-07-23 03:48:52',1,1,'#000000');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) NOT NULL,
  `idVendedor` int(11) NOT NULL,
  `Total` decimal(8,2) NOT NULL,
  `abono` decimal(8,2) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idTipoPago` int(11) NOT NULL,
  `idFormaPago` int(11) NOT NULL,
  `idTipoVenta` int(11) NOT NULL,
  `idTerapeuta` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` VALUES (1,1,5,50.00,50.00,'Pagado',0,1,1,NULL,'2019-08-15 20:38:46','2019-08-15 20:38:46'),(2,1,5,100.00,0.03,'Pagado',1,1,1,NULL,'2019-08-15 20:40:08','2019-08-15 20:42:32');
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-02  8:46:36
