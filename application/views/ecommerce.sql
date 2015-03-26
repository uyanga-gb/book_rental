-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: ecommerce
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (0,NULL),(1,'shirt'),(2,'hat'),(3,'pant'),(4,'belt');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_header`
--

DROP TABLE IF EXISTS `order_header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_header` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `bill_first_name` varchar(45) DEFAULT NULL,
  `bill_last_name` varchar(45) DEFAULT NULL,
  `bill_address1` varchar(45) DEFAULT NULL,
  `bill_address2` varchar(45) DEFAULT NULL,
  `bill_city` varchar(45) DEFAULT NULL,
  `bill_state` char(2) DEFAULT NULL,
  `bill_zipcode` int(5) DEFAULT NULL,
  `ship_first_name` varchar(45) DEFAULT NULL,
  `ship_last_name` varchar(45) DEFAULT NULL,
  `ship_address1` varchar(45) DEFAULT NULL,
  `ship_address2` varchar(45) DEFAULT NULL,
  `ship_city` varchar(45) DEFAULT NULL,
  `ship_state` char(2) DEFAULT NULL,
  `ship_zipcode` int(5) DEFAULT NULL,
  `card_num` int(16) DEFAULT NULL,
  `card_sec` int(3) DEFAULT NULL,
  `card_exp` int(4) DEFAULT NULL,
  `order_status` varchar(20) DEFAULT NULL,
  `ship_charge` float(5,2) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_header`
--

LOCK TABLES `order_header` WRITE;
/*!40000 ALTER TABLE `order_header` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_image`
--

DROP TABLE IF EXISTS `product_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_image` (
  `prod_id` int(11) NOT NULL,
  `line` int(11) DEFAULT NULL,
  `imageid` varchar(255) DEFAULT NULL,
  `main` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_image`
--

LOCK TABLES `product_image` WRITE;
/*!40000 ALTER TABLE `product_image` DISABLE KEYS */;
INSERT INTO `product_image` VALUES (1,1,'https://s3-us-west-2.amazonaws.com/uyanga/Abstract+T+shirt.jpg','y'),(1,2,'https://s3-us-west-2.amazonaws.com/uyanga/Abstract+T+shirt.jpg','n'),(1,3,'https://s3-us-west-2.amazonaws.com/uyanga/Abstract+T+shirt.jpg','n'),(1,4,'https://s3-us-west-2.amazonaws.com/uyanga/Abstract+T+shirt.jpg','n'),(1,5,'https://s3-us-west-2.amazonaws.com/uyanga/Abstract+T+shirt.jpg','n'),(2,1,'https://s3-us-west-2.amazonaws.com/uyanga/Animals+T+shirt.jpg','y'),(2,2,'https://s3-us-west-2.amazonaws.com/uyanga/Animals+T+shirt.jpg','n'),(2,3,'https://s3-us-west-2.amazonaws.com/uyanga/Animals+T+shirt.jpg','n'),(2,4,'https://s3-us-west-2.amazonaws.com/uyanga/Animals+T+shirt.jpg','n'),(2,5,'https://s3-us-west-2.amazonaws.com/uyanga/Animals+T+shirt.jpg','n'),(3,1,'https://s3-us-west-2.amazonaws.com/uyanga/Characters+T+shirt.jpg','y'),(3,2,'https://s3-us-west-2.amazonaws.com/uyanga/Characters+T+shirt.jpg','n'),(3,3,'https://s3-us-west-2.amazonaws.com/uyanga/Characters+T+shirt.jpg','n'),(3,4,'https://s3-us-west-2.amazonaws.com/uyanga/Characters+T+shirt.jpg','n'),(3,5,'https://s3-us-west-2.amazonaws.com/uyanga/Characters+T+shirt.jpg','n'),(4,1,'https://s3-us-west-2.amazonaws.com/uyanga/Comic+T+shirt.jpg','y'),(4,2,'https://s3-us-west-2.amazonaws.com/uyanga/Comic+T+shirt.jpg','n'),(4,3,'https://s3-us-west-2.amazonaws.com/uyanga/Comic+T+shirt.jpg','n'),(4,4,'https://s3-us-west-2.amazonaws.com/uyanga/Comic+T+shirt.jpg','n'),(4,5,'https://s3-us-west-2.amazonaws.com/uyanga/Comic+T+shirt.jpg','n'),(5,1,'https://s3-us-west-2.amazonaws.com/uyanga/Cool+T+shirt.jpg','y'),(5,2,'https://s3-us-west-2.amazonaws.com/uyanga/Cool+T+shirt.jpg','n'),(5,3,'https://s3-us-west-2.amazonaws.com/uyanga/Cool+T+shirt.jpg','n'),(5,4,'https://s3-us-west-2.amazonaws.com/uyanga/Cool+T+shirt.jpg','n'),(5,5,'https://s3-us-west-2.amazonaws.com/uyanga/Cool+T+shirt.jpg','n'),(6,1,'https://s3-us-west-2.amazonaws.com/uyanga/Cute+T+shirt.jpg','y'),(6,2,'https://s3-us-west-2.amazonaws.com/uyanga/Cute+T+shirt.jpg','n'),(6,3,'https://s3-us-west-2.amazonaws.com/uyanga/Cute+T+shirt.jpg','n'),(6,4,'https://s3-us-west-2.amazonaws.com/uyanga/Cute+T+shirt.jpg','n'),(6,5,'https://s3-us-west-2.amazonaws.com/uyanga/Cute+T+shirt.jpg','n'),(7,1,'https://s3-us-west-2.amazonaws.com/uyanga/Logo+Hat.jpg','y'),(7,2,'https://s3-us-west-2.amazonaws.com/uyanga/Logo+Hat.jpg','n'),(7,3,'https://s3-us-west-2.amazonaws.com/uyanga/Logo+Hat.jpg','n'),(7,4,'https://s3-us-west-2.amazonaws.com/uyanga/Logo+Hat.jpg','n'),(7,5,'https://s3-us-west-2.amazonaws.com/uyanga/Logo+Hat.jpg','n'),(8,1,'https://s3-us-west-2.amazonaws.com/uyanga/Girl%27s+Cap.jpg','y'),(8,2,'https://s3-us-west-2.amazonaws.com/uyanga/Girl%27s+Cap.jpg','n'),(8,3,'https://s3-us-west-2.amazonaws.com/uyanga/Girl%27s+Cap.jpg','n'),(8,4,'https://s3-us-west-2.amazonaws.com/uyanga/Girl%27s+Cap.jpg','n'),(8,5,'https://s3-us-west-2.amazonaws.com/uyanga/Girl%27s+Cap.jpg','n'),(9,1,'https://s3-us-west-2.amazonaws.com/uyanga/Khakis+Pant.jpg','y'),(9,2,'https://s3-us-west-2.amazonaws.com/uyanga/Khakis+Pant.jpg','n'),(9,3,'https://s3-us-west-2.amazonaws.com/uyanga/Khakis+Pant.jpg','n'),(9,4,'https://s3-us-west-2.amazonaws.com/uyanga/Khakis+Pant.jpg','n'),(9,5,'https://s3-us-west-2.amazonaws.com/uyanga/Khakis+Pant.jpg','n'),(10,1,'https://s3-us-west-2.amazonaws.com/uyanga/Flat+Front+Pant.jpg','y'),(10,2,'https://s3-us-west-2.amazonaws.com/uyanga/Flat+Front+Pant.jpg','n'),(10,3,'https://s3-us-west-2.amazonaws.com/uyanga/Flat+Front+Pant.jpg','n'),(10,4,'https://s3-us-west-2.amazonaws.com/uyanga/Flat+Front+Pant.jpg','n'),(10,5,'https://s3-us-west-2.amazonaws.com/uyanga/Flat+Front+Pant.jpg','n'),(11,1,'https://s3-us-west-2.amazonaws.com/uyanga/Cargo+Pant.jpg','y'),(11,2,'https://s3-us-west-2.amazonaws.com/uyanga/Cargo+Pant.jpg','n'),(11,3,'https://s3-us-west-2.amazonaws.com/uyanga/Cargo+Pant.jpg','n'),(11,4,'https://s3-us-west-2.amazonaws.com/uyanga/Cargo+Pant.jpg','n'),(11,5,'https://s3-us-west-2.amazonaws.com/uyanga/Cargo+Pant.jpg','n'),(12,1,'https://s3-us-west-2.amazonaws.com/uyanga/Chino+Pant.jpg','y'),(12,2,'https://s3-us-west-2.amazonaws.com/uyanga/Chino+Pant.jpg','n'),(12,3,'https://s3-us-west-2.amazonaws.com/uyanga/Chino+Pant.jpg','n'),(12,4,'https://s3-us-west-2.amazonaws.com/uyanga/Chino+Pant.jpg','n'),(12,5,'https://s3-us-west-2.amazonaws.com/uyanga/Chino+Pant.jpg','n'),(13,1,'https://s3-us-west-2.amazonaws.com/uyanga/Black+Belt.jpg','y'),(13,2,'https://s3-us-west-2.amazonaws.com/uyanga/Black+Belt.jpg','n'),(13,3,'https://s3-us-west-2.amazonaws.com/uyanga/Black+Belt.jpg','n'),(13,4,'https://s3-us-west-2.amazonaws.com/uyanga/Black+Belt.jpg','n'),(13,5,'https://s3-us-west-2.amazonaws.com/uyanga/Black+Belt.jpg','n'),(14,1,'https://s3-us-west-2.amazonaws.com/uyanga/Yellow+Belt.jpg','y'),(14,2,'https://s3-us-west-2.amazonaws.com/uyanga/Yellow+Belt.jpg','n'),(14,3,'https://s3-us-west-2.amazonaws.com/uyanga/Yellow+Belt.jpg','n'),(15,1,'https://s3-us-west-2.amazonaws.com/uyanga/Red+Belt.jpg','y'),(15,2,'https://s3-us-west-2.amazonaws.com/uyanga/Red+Belt.jpg','n'),(15,3,'https://s3-us-west-2.amazonaws.com/uyanga/Red+Belt.jpg','n'),(15,4,'https://s3-us-west-2.amazonaws.com/uyanga/Red+Belt.jpg','n'),(16,1,'https://s3-us-west-2.amazonaws.com/uyanga/Green+Belt.png','y'),(16,2,'https://s3-us-west-2.amazonaws.com/uyanga/Green+Belt.png','n');
/*!40000 ALTER TABLE `product_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_list`
--

DROP TABLE IF EXISTS `product_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `inventory_count` int(11) DEFAULT NULL,
  `qrt_sold` int(11) DEFAULT NULL,
  `price` float(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_list`
--

LOCK TABLES `product_list` WRITE;
/*!40000 ALTER TABLE `product_list` DISABLE KEYS */;
INSERT INTO `product_list` VALUES (1,'Abstract T shirt','Art prints are a blend of shapes colors and l',1,20,1,19.99),(2,'Animals T shirt','Many types of birds, cats, sharks',1,15,2,24.99),(3,'Characters T shirt','A monkey in outer space, a penguin with headp',1,20,3,19.99),(4,'Comic T shirt','Custom character and great story lines in the',1,15,1,19.99),(5,'Cool T shirts','Cool designs are a collection of the best sel',1,20,0,24.99),(6,'Cute T shirts','Silly and funny cartoons, furry animals',1,15,1,19.99),(7,'Logo Hat','Coding dojo logo hat',2,10,2,9.99),(8,'Girl\'s Cap','Pink logo hat',2,5,1,9.99),(9,'Khakis Pant','Made of 100% cotton. Black and navy colors av',3,30,2,49.50),(10,'Flat Front Pant','Modern style, go well with slim people or tho',3,25,3,37.50),(11,'Cargo Pant','This pant is best suited for men who are inte',3,25,4,55.99),(12,' Chino Pant','This is mostly crafted from a combination of ',3,30,4,49.99),(13,'Black Belt','Coding dojo black belt',4,20,1,14.99),(14,'Yellow Belt','Coding dojo yellow belt',4,20,1,14.99),(15,'Red Belt','Coding dojo red belt',4,15,2,11.99),(16,'Green Belt','Coding dojo green belt',4,15,2,11.99);
/*!40000 ALTER TABLE `product_list` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-25 14:45:37
