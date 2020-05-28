-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: gpts-shop
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_title` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (7,'Vijaybhoomi University'),(8,'Chitkara University'),(9,'Jagran Lakecity University'),(10,'Dalham Foundation');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (156,87,'::1',-1,1),(157,89,'::1',-1,1);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (8,'Cyber Security'),(9,'Data Analytics'),(12,'Gaming'),(16,'Psychology'),(18,'Journalism'),(20,'Advertising'),(24,'Architecture'),(26,'Design Thinking'),(28,'Robotics/AI'),(30,'Entrepreneurship'),(32,'Liberal Arts');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (82,8,8,'Cyber Security',4484,'Cyber Security was, is and will always be a trending topic. Cyber Security has never been simple. The attackers are becoming more inventive thus attacks evolve every day. This is the reason why it is critical to properly define cyber security. Every year the world wide spends on cyber security grows and will continue growing. As an individual, you must know what cyber security is and how are we implementing it in our digital world.','1590664730_product2.jpg','Basics of cyber crimes, Intrusion detection, Digital security measures, Analyse and Manage cyber threats'),(83,9,7,'Data Analytics',4602,'Data Analytics (extended to Data Science) is the most sought after specialisation given that almost 1.5 lakh jobs were created in India in the year 2020 as per Business World. However, it requires a strong foundation in Statistics and Business Analytics which this course intends to provide high school aspirants looking to explore whether they enjoy the subject to be able to explore a career in Data Science. Based on the orientation, students could look at a Bachelors in Data Science or even a specialised Engineering Degree in AI & DS.','1590667006_product3.jpg','Descriptive statistics, Sampling and application, Non-parametric tests, Statistical Modelling'),(85,12,8,'Gaming (for Science)',4543,'Do you love playing games? Excited to learn to make them? Then this course is perfect for you. In most popular computer activities, gaming is one of them that is undergoing a massive evolution. The popularity of gaming is increasing day by day. Making games requires both creative and technical skillset, And it is not as easy as playing one. But new tools are constantly arriving to make the game development process simple and smooth. In this course, students will learn game development with simple methods, they will familiarize themselves with game development tools. This course will prepare students to start making their own games. After completing this course students will have two hands-on completed games.','1590673698_product4.jpg','Creativity, Problem-solving aptitude, Strategic thinking, Decision-making, Basic scripting or programming, Basic computer graphics'),(86,12,9,'Gaming (for Non - Science)',4543,'The video game industry is growing so fast that it will reach over $300 billion by 2025. For instance, out of Fortnite $2.4 billion of revenue, over one billion was generated through the sale of in-game items.\r\nThis Course covers the fundamentals of play psychology, The role Design Thinking for making good games that aligns with common modern game development methodologies proposed by industry, game design theory and apply it in a practical way to developing engaging board games, Create / prototype your own board games as practice challenges throughout the course, Be able to create a compelling experience for your players, Quickly iterate and improve your game, Come up with new board game design ideas and execute thoroughly on those ideas','1590674246_product6.jpg','Iteration, Driven by Research, Solving Problems, Creating Ideas through Diversification of Thought, Design Thinking, User-Centric Prototyping'),(87,18,9,'Journalism',4266,'This one week course will help learners develop their foundational & analytical thinking skills to enable them to better interpret the world and processes of journalism, news gathering processes and compiling a news report through hands-on projects, peer-to-peer feedback, and issue exploration and report news in a multimedia world and generally become better writers and better informed about the world in which we live. The course will discuss the key elements of journalism from the viewpoint of the news audience. The language of instruction is English. The course will challenge and nudge you to address various cases. With the exponential growth of digital media, journalism careers are on upswing and employability and media entrepreneurial opportunities are growing.','1590674772_product8.jpg','Origins of Journalism, News understanding, Story research and editing & reporting, News production processes, Photo-journalism, Digital and multimedia world'),(88,16,10,'Psychology',4266,'In todayâ€™s complex environment, it is apparently important to know about people and what makes the people tick. This understanding will help the person to address the complex issues of the society.This is possible only if the person having an in linking knowledge of psychology. Psychology in a way is the scientific study of the mind and how it dictates and influences oneâ€™s behaviour from communication and also through thoughts, feelings and emotions. As psychology is a science, its functions both for a thriving academic discipline and to a vital professional practice.','1590675094_product5.jpg','Understanding behavioural patterns, Psychological awareness, Theoretical insights, Interactive personality mapping'),(89,20,9,'Advertising',4543,'he spending on advertising worldwide has been increasing steadily and is expected to surpass 656 billion U.S. dollars in 2020. This weeklong course covers a wide range of topics, including the origins of advertising, development of creative campaigns, the processes of advertising, brands, consumers and creativity. The lectures will discuss basic elements of advertising as a career as well as use various case studies to explain the frameworks of magical and creative world of advertising. In this course you will go through a process, which you can easily put into practice and earn additional credentials. We hope this course serves you a launch pad to go out and build higher studies or build a creative career. And most of all, we hope you have fun and learnings.','1590675570_product7.jpg','Ideas and Insights, Creativity, Advertising Processes, Advertising History, Campaign Development');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-28 20:45:17
