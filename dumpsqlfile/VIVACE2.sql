-- MySQL dump 10.13  Distrib 8.0.41, for Win64 (x86_64)
--
-- Host: localhost    Database: vivace_db
-- ------------------------------------------------------
-- Server version	8.0.41

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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (10,'AKG K240 Studio Headphones',1,4499);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Yamaha Acoustic Guitar F310',8999,10,'A high-quality acoustic guitar with rich tones.','yamahaf310.png'),(2,'Fender Stratocaster Electric Guitar',45999,5,'Iconic electric guitar known for its versatility.','fenderstrat.png'),(3,'Casio CT-X700 Keyboard',12499,8,'61-key portable keyboard with realistic sounds.','casioctx700.png'),(4,'Violin (Classical) Yamaha Model V5',29999,4,'Full-size violin with rich tone, ideal for orchestra and solo.','violinv5.png'),(5,'Cello (4/4 Concert) Stentor',84999,2,'Full-size cello with warm resonance and strong projection.','stentorcello.png'),(6,'Flute (Silver Boehm) Yamaha YFL-222',21999,6,'Student silver flute with excellent tone quality.','yamahayfl222.png'),(7,'Clarinet (B-flat) Buffet Crampon',32999,5,'Professional clarinet with rich, full sound.','buffetclarinet.png'),(8,'Viola 16-inch Cecilio',34999,3,'Mid-size viola suitable for students and chamber music.','violacecilio.png'),(9,'Harp (22-string lever) Camac',159999,1,'Compact lever harp with beautiful resonance.','camacharp.png'),(10,'Oboe (Student Model) Fox 310',59999,2,'Entry-level oboe for beginning woodwind players.','fox310.png'),(11,'Gibson Les Paul Studio',79999,3,'Premium electric guitar with a thick, powerful sound.','lespaul.png'),(12,'Taylor GS Mini Acoustic',39999,4,'Compact acoustic guitar with great projection.','taylorgs.png'),(13,'Shure SM58 Vocal Microphone',5999,20,'Legendary dynamic mic for vocals, durable and reliable.','shuresm58.png'),(14,'Boss DS-1 Distortion Pedal',3499,15,'Classic distortion pedal for electric guitars.','distpedal.png'),(15,'AKG K240 Studio Headphones',4499,12,'Professional semi-open headphones for mixing.','akgheadphone.png'),(16,'Yamaha PSR-E373 Keyboard',14999,7,'Portable keyboard with touch-sensitive keys.','psre373.png'),(17,'Mapex Mars Drum Kit',34999,2,'Maple drum kit delivering warmth and power.','mapexdrumset.png'),(18,'Pearl Roadshow Drum Set',28999,4,'Complete 5-piece drum kit ideal for beginners.','pearldrumset.png'),(19,'Boss RC-1 Loop Station',4999,8,'Simple loop pedal for creative layering.','loopstation.png'),(20,'Yamaha MG10XU Mixer',15999,4,'10-channel mixer with effects and USB interface.','yamahamixer.png');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_name` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-10-15 22:25:06
