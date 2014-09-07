-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: playground
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `name` char(50) DEFAULT NULL,
  `expansion` char(50) DEFAULT 'CORE',
  KEY `expansion` (`expansion`),
  CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`expansion`) REFERENCES `expansions` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` VALUES ('Barbarian','CORE'),('Bard','CORE'),('Cleric','CORE'),('Druid','CORE'),('Fighter','CORE'),('Monk','CORE'),('Paladin','CORE'),('Ranger','CORE'),('Rogue','CORE'),('Sorcerer','CORE'),('Warlock','CORE'),('Wizard','CORE');
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `core_stats`
--

DROP TABLE IF EXISTS `core_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `core_stats` (
  `name` char(20) DEFAULT NULL,
  `code` char(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `core_stats`
--

LOCK TABLES `core_stats` WRITE;
/*!40000 ALTER TABLE `core_stats` DISABLE KEYS */;
INSERT INTO `core_stats` VALUES ('Charisma','CHA'),('Constitution','CON'),('Dexterity','DEX'),('Intelligence','INT'),('Strength','STR'),('Wisdom','WIS');
/*!40000 ALTER TABLE `core_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `damage_types`
--

DROP TABLE IF EXISTS `damage_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `damage_types` (
  `name` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `damage_types`
--

LOCK TABLES `damage_types` WRITE;
/*!40000 ALTER TABLE `damage_types` DISABLE KEYS */;
INSERT INTO `damage_types` VALUES ('Slashing'),('Piercing'),('Bludgeoning'),('Fire'),('Acid'),('Cold'),('Force'),('Lightning'),('Necrotic'),('Poison'),('Psychic'),('Radiant'),('Thunder');
/*!40000 ALTER TABLE `damage_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expansions`
--

DROP TABLE IF EXISTS `expansions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expansions` (
  `code` char(50) NOT NULL DEFAULT '',
  `name` char(100) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expansions`
--

LOCK TABLES `expansions` WRITE;
/*!40000 ALTER TABLE `expansions` DISABLE KEYS */;
INSERT INTO `expansions` VALUES ('CORE','Core Rules');
/*!40000 ALTER TABLE `expansions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `races`
--

DROP TABLE IF EXISTS `races`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `races` (
  `name` char(50) DEFAULT NULL,
  `expansion` char(50) DEFAULT 'CORE',
  KEY `expansion` (`expansion`),
  CONSTRAINT `races_ibfk_1` FOREIGN KEY (`expansion`) REFERENCES `expansions` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `races`
--

LOCK TABLES `races` WRITE;
/*!40000 ALTER TABLE `races` DISABLE KEYS */;
INSERT INTO `races` VALUES ('Dwarf','CORE'),('Elf','CORE'),('Halfling','CORE'),('Human','CORE'),('Dragonborn','CORE'),('Gnome','CORE'),('Half-Elf','CORE'),('Half-Orc','CORE'),('Tiefling','CORE');
/*!40000 ALTER TABLE `races` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skills` (
  `name` char(40) DEFAULT NULL,
  `stat` char(3) DEFAULT NULL,
  KEY `stat` (`stat`),
  CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`stat`) REFERENCES `core_stats` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES ('Acrobatics','DEX'),('Animal Handling','WIS'),('Arcana','INT'),('Athletics','STR'),('Deception','CHA'),('History','INT'),('Insight','WIS'),('Intimidation','CHA'),('Investigation','INT'),('Medicine','WIS'),('Nature','INT'),('Perception','WIS'),('Performance','CHA'),('Persuasion','CHA'),('Religion','INT'),('Sleight of Hand','DEX'),('Stealth','DEX'),('Survival','WIS');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widgets`
--

DROP TABLE IF EXISTS `widgets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `order` int(11) NOT NULL,
  `value` decimal(7,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgets`
--

LOCK TABLES `widgets` WRITE;
/*!40000 ALTER TABLE `widgets` DISABLE KEYS */;
INSERT INTO `widgets` VALUES (1,'Cheap Widget','This widget is not very expensive.',1,25.00),(2,'Expensive Widget','This widget is very expensive.',2,4500.95);
/*!40000 ALTER TABLE `widgets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-07 12:03:36
