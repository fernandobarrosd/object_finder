CREATE DATABASE  IF NOT EXISTS `fo_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `fo_db`;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `coduser` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`coduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `codcat` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomecat` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`codcat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Table structure for table `objetos`
--

DROP TABLE IF EXISTS `objetos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objetos` (
  `codobj` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuarios_coduser` int(10) unsigned NOT NULL,
  `categorias_codcat` int(10) unsigned NOT NULL,
  `nomeobj` varchar(255) DEFAULT NULL,
  `descobj` varchar(255) DEFAULT NULL,
  `lugar` varchar(200) DEFAULT NULL,
  `data_encontrado` varchar(10) DEFAULT NULL,
  `data_cadastro` varchar(10) DEFAULT NULL,
  `devolvido` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`codobj`),
  KEY `objetos_FKIndex1` (`categorias_codcat`),
  KEY `objetos_FKIndex2` (`usuarios_coduser`),
  CONSTRAINT `objetos_ibfk_1` FOREIGN KEY (`categorias_codcat`) REFERENCES `categorias` (`codcat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `objetos_ibfk_2` FOREIGN KEY (`usuarios_coduser`) REFERENCES `usuarios` (`coduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `objetos` WRITE;
/*!40000 ALTER TABLE `objetos` DISABLE KEYS */;
/*!40000 ALTER TABLE `objetos` ENABLE KEYS */;
UNLOCK TABLES;

INSERT INTO `categorias` VALUES (1,'Pessoal'),(2,'Escolar'),(3,'Documentos'),(4,'Eletrônicos'),(5,'Chaves'),(6,'Outros');
INSERT INTO `usuarios` VALUES (1,'Gabriel','gabriel@gmail.com','123'),(2,'Victor','victor@hotmail.com','1234');