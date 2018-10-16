-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: ajax
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Table structure for table `aboutuses`
--

DROP TABLE IF EXISTS `aboutuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aboutuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aboutuses_user_id_foreign` (`user_id`),
  CONSTRAINT `aboutuses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aboutuses`
--

LOCK TABLES `aboutuses` WRITE;
/*!40000 ALTER TABLE `aboutuses` DISABLE KEYS */;
INSERT INTO `aboutuses` VALUES (1,1,'AboutUsLogo.svg','For over 40 years we’ve supplied heaters and controls systems for our customers’ unique applications. Our efforts, combined with the diversity of solutions that we’ve developed, have allowed us to forge trustworthy relationships with all our principals in solving, often complex, process problems with exacting and efficient solutions. While we attempt to solve application issues using standard off-the-shelf products (to minimize costs), some of these processes have required us to design and build bespoke systems with our principals. We have been instrumental in developing new products for our principals that have proven be very successful. In recent years we’ve noticed a marked shift in the types of material being used across industries in efforts to reduce material and manufacturing cost while improving final product capabilities and specifications. Recognizing this trend we have helped numerous companies with their efforts in developing new manufacturing processes with innovative process controllers and sensors.',NULL,NULL);
/*!40000 ALTER TABLE `aboutuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homepage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blogs_user_id_foreign` (`user_id`),
  CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,1,'Kapton Flexible Heating','Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ','HTML,CSS,XML,JavaScript','main_post_one.jpg','Yes','11','2018-02-13 00:00:00',NULL),(2,1,'Kapton Flexible Heating','Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ','HTML,CSS,XML,JavaScript','main_post_one.jpg','Yes','11','2018-02-13 00:00:00',NULL),(3,1,'Kapton Flexible Heating','Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ','HTML,CSS,XML,JavaScript','main_post_one.jpg','Yes','11','2018-02-13 00:00:00',NULL),(4,1,'Kapton Flexible Heating','Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ','HTML,CSS,XML,JavaScript','main_post_one.jpg','Yes','11','2018-02-13 00:00:00',NULL);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Silicone Rubber Heaters','Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with  content. This is required when, for example, the final text is not yet available. Dummy text is also known as. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.','1.jpg',NULL,NULL),(2,'Kaptan Heaters','Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with  content. This is required when, for example, the final text is not yet available. Dummy text is also known as . It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.','1.jpg',NULL,NULL),(3,'Industrial Tapes','Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with  content. This is required when, for example, the final text is not yet available. Dummy text is also known as . It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.','1.jpg',NULL,NULL),(4,'Jackets & Blankets','Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with  content. This is required when, for example, the final text is not yet available. Dummy text is also known as . It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.','1.jpg',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_o` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button1_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button2_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button3_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `locations_user_id_foreign` (`user_id`),
  CONSTRAINT `locations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,1,'Douglas Davis','P.O. Box 6263 ','Cape Elizabeth, ME 04107','info@davisheaters.com ','508 849 3990','Request a Design Consultation','#','Request a Quote','#','Ask Question','#',NULL,NULL);
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (193,'2014_10_12_000000_create_users_table',1),(194,'2014_10_12_100000_create_password_resets_table',1),(195,'2018_02_10_190506_create_sliders_table',1),(196,'2018_02_12_211637_create_aboutuses_table',1),(197,'2018_02_13_003756_create_locations_table',1),(198,'2018_02_13_202508_create_blogs_table',1),(199,'2018_02_17_212152_create_partners_table',1),(200,'2018_02_17_215031_create_partner_images_table',1),(201,'2018_02_18_210823_create_projects_table',1),(202,'2018_02_19_004154_create_visitors_table',1),(203,'2018_03_05_181553_create_categories_table',1),(204,'2018_03_05_225115_create_products_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partner_images`
--

DROP TABLE IF EXISTS `partner_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partner_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `partner_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partner_images`
--

LOCK TABLES `partner_images` WRITE;
/*!40000 ALTER TABLE `partner_images` DISABLE KEYS */;
INSERT INTO `partner_images` VALUES (1,'PartnersLogo_1.svg',NULL,NULL),(2,'PartnersLogo_2.svg',NULL,NULL),(3,'PartnersLogo_3.svg',NULL,NULL),(4,'PartnersLogo_4.svg',NULL,NULL),(5,'PartnersLogo_5.svg',NULL,NULL),(6,'PartnersLogo_6.svg',NULL,NULL);
/*!40000 ALTER TABLE `partner_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `partners_user_id_foreign` (`user_id`),
  CONSTRAINT `partners_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` VALUES (1,1,'For over 40 years we’ve supplied heaters and controls systems for our customers’ unique applications. Our efforts, combined with the diversity of solutions that we’ve developed, have allowed us to forge trustworthy relationships with all our principals in solving, often complex, process problems with exacting and efficient solutions. While we attempt to solve application issues using standard off-the-shelf products (to minimize costs), some of these processes have required us to design and build bespoke systems with our principals. We have been instrumental in developing new products for our principals that have proven be very successful. In recent years we’ve noticed a marked shift in the types of material being used across industries in efforts to reduce material and manufacturing cost while improving final product capabilities and specifications. Recognizing this trend we have helped numerous companies with their efforts in developing new manufacturing processes with innovative process controllers and sensors.',NULL,NULL);
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homepage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_user_id_foreign` (`user_id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,1,'Kapton Flexible Heating','Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ','ProductOne-Left.jpg','ProductOne-Left.jpg','ProductOne-Left.jpg',NULL,NULL,NULL),(2,1,2,'Kapton Flexible Heating','Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ','ProductOne-Left.jpg','ProductOne-Left.jpg','ProductOne-Left.jpg',NULL,NULL,NULL),(3,1,3,'Kapton Flexible Heating','Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ','ProductOne-Left.jpg','ProductOne-Left.jpg','ProductOne-Left.jpg',NULL,NULL,NULL),(4,1,4,'Kapton Flexible Heating','Hi-Heat Industries custom designs etched foil Kapton® or polyimide heaters in various sizes, shapes, and wattages. Kapton heaters have a thin, lightweight design (0.005” thick), which allows close thermal contact for maximum heating efficiency and permits close adaptation to the contours of the part. ','ProductOne-Left.jpg','ProductOne-Left.jpg','ProductOne-Left.jpg',NULL,NULL,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_completion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_user_id_foreign` (`user_id`),
  CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,1,'Kapton Flexible Heating','Rio','2018-02-13 00:00:00','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','main_post_one.jpg','2018-02-13 00:00:00',NULL),(2,1,'Kapton Flexible Heating','Rio','2018-02-13 00:00:00','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','main_post_one.jpg','2018-02-13 00:00:00',NULL),(3,1,'Kapton Flexible Heating','Rio','2018-02-13 00:00:00','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','main_post_one.jpg','2018-02-13 00:00:00',NULL),(4,1,'Kapton Flexible Heating','Rio','2018-02-13 00:00:00','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','main_post_one.jpg','2018-02-13 00:00:00',NULL);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sliders_user_id_foreign` (`user_id`),
  CONSTRAINT `sliders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,1,'Slider_2.jpg','Kapton Flexible Heater','Low thermal mass heater have fast warm ups. Polymide`s properties and the moister resistance','See Details','#',NULL,NULL),(2,1,'Slider_1.jpg','Kapton Flexible Heater','Low thermal mass heater have fast warm ups. Polymide`s properties and the moister resistance','See Details','#',NULL,NULL),(3,1,'Slider_2.jpg','Kapton Flexible Heater','Low thermal mass heater have fast warm ups. Polymide`s properties and the moister resistance','See Details','#',NULL,NULL),(4,1,'Slider_3.jpg','Kapton Flexible Heater','Low thermal mass heater have fast warm ups. Polymide`s properties and the moister resistance','See Details','#',NULL,NULL);
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'/public/front/images/blog/userPhoto.png','Abdul Halim ','Reiaz','ahreiaz','reiazbubt@gmail.com','$2y$10$Qiq9utjXTH0au4i3qqUSrOI8j606I0CwgRN9lVnCHa5oLgeVFgrNe','admin','1',NULL,'2018-02-04 00:00:00',NULL),(2,'/public/admin/users/me.jpg','Khalid','Md','kd','kd@gmail.com','$2y$10$tAvqKBi3MvtteOYfEID2Q.xzDr1c/03BGaVfZAmN2cZIbk3n1V44e','admin','0',NULL,'2018-02-04 00:00:00',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `visitor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitors`
--

LOCK TABLES `visitors` WRITE;
/*!40000 ALTER TABLE `visitors` DISABLE KEYS */;
INSERT INTO `visitors` VALUES (1,'visitor','28',NULL,'2018-03-07 08:48:47');
/*!40000 ALTER TABLE `visitors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-07  9:00:42
