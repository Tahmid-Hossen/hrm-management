/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 8.0.26 : Database - nex_inventory_localhost
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `__products` */

CREATE TABLE `__products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Keywords` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `ProductTypeId` int NOT NULL,
  `PackageType_id` int DEFAULT NULL,
  `part_id` int unsigned DEFAULT NULL,
  `store_location_id` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `store_BinNumber` int unsigned DEFAULT NULL,
  `store_BinNumber2` int unsigned DEFAULT NULL,
  `Mounting_type` int unsigned DEFAULT NULL,
  `low_stock_threshold` int NOT NULL,
  `primary_manufacturer_id` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `manufacturer_part_number` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `store_organization_Id` int DEFAULT NULL,
  `UserId` int DEFAULT NULL,
  `DateCreatedUtc` datetime NOT NULL,
  `DateModifiedUtc` datetime NOT NULL,
  `brand_id` int unsigned DEFAULT NULL,
  `category_id` int unsigned DEFAULT NULL,
  `sub_category_id` int unsigned DEFAULT NULL,
  `sku` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode_type` enum('C39','C128','EAN13','EAN8','UPCA','UPCE') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'C128',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

/*Data for the table `__products` */

LOCK TABLES `__products` WRITE;

UNLOCK TABLES;

/*Table structure for table `__products__` */

CREATE TABLE `__products__` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `__products__` */

LOCK TABLES `__products__` WRITE;

UNLOCK TABLES;

/*Table structure for table `__supplier_infos_bck` */

CREATE TABLE `__supplier_infos_bck` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(200) DEFAULT NULL,
  `supp_cat_id` int NOT NULL,
  `supp_type` enum('L','F') DEFAULT 'L' COMMENT 'L=Local, F= Foreign',
  `address` varchar(200) DEFAULT NULL,
  `country` varchar(50) DEFAULT '',
  `city` varchar(50) DEFAULT '',
  `pho_1` varchar(30) DEFAULT NULL,
  `cell_1` varchar(50) DEFAULT NULL,
  `zip_code` varchar(100) DEFAULT NULL,
  `web_mail` varchar(100) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `web_url` varchar(100) DEFAULT NULL,
  `remarks` varchar(250) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb3;

/*Data for the table `__supplier_infos_bck` */

LOCK TABLES `__supplier_infos_bck` WRITE;

insert  into `__supplier_infos_bck`(`id`,`full_name`,`supp_cat_id`,`supp_type`,`address`,`country`,`city`,`pho_1`,`cell_1`,`zip_code`,`web_mail`,`fax`,`web_url`,`remarks`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_at`) values (32,'Crox Developer',2,'F','Savar, Dhaka','India','Barishal','+8801785893609',NULL,'1254','joy.diu.cse@gmail.com',NULL,NULL,NULL,1,1,'2024-01-16 13:56:07',NULL,'2024-01-16 14:02:45',NULL),(31,'Juel Rana',1,'L',NULL,'','','01777366978',NULL,NULL,'juel@gmail.com',NULL,NULL,NULL,1,1,'2024-01-16 13:10:19',NULL,'2024-01-16 13:10:19',NULL),(23,'electronic',1,NULL,NULL,'Bangladesh','Dhaka',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,15,'2024-01-15 06:22:53',NULL,'2024-01-21 08:36:07','2024-01-21 08:36:07'),(24,'Rokon Zaman',1,NULL,NULL,'Bangladesh','Dhaka','01777366927',NULL,'1230',NULL,NULL,NULL,NULL,1,15,'2024-01-15 06:23:13',NULL,'2024-01-16 12:49:20',NULL),(30,'tazul islam',1,NULL,NULL,'Bangladesh','Dhaka','01777366978',NULL,'1230','tazul@gmail.com',NULL,NULL,NULL,1,9,'2024-01-16 06:56:37',NULL,'2024-01-16 12:48:37',NULL),(29,'MD. JOYNAL ABEDIN',1,NULL,'Savar, Dhaka','','','+8801785893609',NULL,NULL,'joy.diu.cse@gmail.com',NULL,NULL,NULL,1,1,'2024-01-15 15:30:50',NULL,'2024-01-15 15:30:50',NULL);

UNLOCK TABLES;

/*Table structure for table `__users_2` */

CREATE TABLE `__users_2` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `__users_2` */

LOCK TABLES `__users_2` WRITE;

UNLOCK TABLES;

/*Table structure for table `__usersold` */

CREATE TABLE `__usersold` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `contact_cell` varchar(50) DEFAULT NULL,
  `contact_email` varchar(200) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `user_type` int NOT NULL DEFAULT '0',
  `user_role` int NOT NULL DEFAULT '0',
  `exp_datetime` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3;

/*Data for the table `__usersold` */

LOCK TABLES `__usersold` WRITE;

insert  into `__usersold`(`id`,`email`,`password`,`name`,`designation`,`address`,`contact_cell`,`contact_email`,`remember_token`,`user_type`,`user_role`,`exp_datetime`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,'masud@nexdecade.com','$2y$12$b85k7zGQCkqSFv79Cs4GG.4ew27/BedhXjlJiFCVyIUuZO2ysXvoe','Masud','0',NULL,'1234567890',NULL,'aSbDD4iXdFuqpKgD3JLg5TxM62dtCcvSmDXOvnc5JdOlYwNzmbDz9z0gNxbs',1,1,NULL,1,0,'2024-01-03 13:49:14',NULL,'2024-01-16 14:45:41'),(3,'shazid@gmail.com','$2y$12$UOklS9RdwXZnySzFDjH/G.qgMyNUQgxDU5xLsStAx6XtfYApX7GTu','Shazid','0',NULL,NULL,NULL,NULL,1,3,NULL,1,0,'2024-01-03 08:35:19',NULL,'2024-01-16 14:44:17'),(5,'joy.diu.cse2@gmail.com','$2y$12$eEkqUaIa84kRIDavtkOAOuP8nbpHvsqAagbf5bumQLdkXRobKls0y','MD. JOYNAL ABEDIN','0',NULL,NULL,NULL,'qfvZD18zrQ4UwaC9r0RWRLaTlTUHgHDoVcIWuS4ZfEO3pXz1th1DvuvKuR5w',1,1,NULL,0,0,'2024-01-04 07:22:12',NULL,'2024-01-11 14:55:10'),(6,'rokon.zaman@nexdecade.com','$2y$12$EtRnIyAqllrrODY7XskW7.rO/4FgPGqxbenNYtTUKHiTUiT.lk9D.','Rokon','0',NULL,NULL,NULL,'B7XUkvABmUl3dPfqUVuLKVyQR2HBbwkgnWRWQUfGyV9AjRUoEUloSGqNn79Q',0,0,NULL,1,0,'2024-01-10 07:41:56',NULL,'2024-01-10 07:41:56'),(7,'rafiqdiu@gmail.com','$2y$12$jtU65Ix8tS7.rPp4JZi48OYKuUF09HsAsTi7vZAmwzUYrMe78D3gW','Rafiqul Islam','0',NULL,NULL,NULL,'RT9qMESm9hWU764gNCeHuHyzevitLgUg39D1OhttxCsl3ktsb13nhgynzW4L',0,0,NULL,1,0,'2024-01-10 07:55:25',NULL,'2024-01-10 07:55:25'),(8,'admin@gmail.com','$2y$12$0jN4y.ouqqZiFUcXuOBzAecg6RHW5YPhZJOhbdC8zdXPQvf6gZuNm','admin','0',NULL,NULL,NULL,NULL,0,0,NULL,1,0,'2024-01-10 13:30:14',NULL,'2024-01-10 13:30:14'),(9,'tahmid.hossen@nexdecade.com','$2y$12$kiHtDr41Ai/jrXXt1PvdCunTefbegPEC5uij42tHLpene/ttmwLL6','tahmid','0',NULL,NULL,NULL,NULL,0,0,NULL,1,0,'2024-01-10 14:53:01',NULL,'2024-01-10 14:53:01'),(10,'joy@g.c','$2y$12$LTtf3p2bqI5Y0cTz5PNB/e2/3lgQTWbY5vQJcuz5Kk0QQL1tcUeNO','joy-2','124','gfdsa','65432345678','@asfasfsd',NULL,2,1,NULL,1,0,'2024-01-11 12:38:06',NULL,'2024-01-11 15:24:39'),(11,'tazul.islam@nexdecade.com','$2y$12$UA31RfrDEeo8frYE6MwkneQrlCU9PZPy.EAy0nb5Dvjmio35g9vSO','Tazul','0',NULL,NULL,NULL,NULL,0,0,NULL,1,0,'2024-01-11 13:31:19',NULL,'2024-01-11 13:31:19'),(13,'testing@example.com','$2y$12$baWB3Y3lMWFXBO5rLRwiyuxu6.CQ7CABxMeekFB/yBlqIThw0K0SC','RDFYjolf','0',NULL,NULL,NULL,NULL,0,0,NULL,1,0,'2024-01-14 19:23:20',NULL,'2024-01-14 19:23:20'),(14,'a@gmail.com','$2y$12$KEY8NUhFJdnJZjybrxGeeuD3WLYtMLpJjmnfe50soYbifqK5XcbvG','How','0',NULL,NULL,NULL,NULL,0,0,NULL,1,0,'2024-01-15 04:21:35',NULL,'2024-01-15 04:21:35'),(15,'tahmid@gmail.com','$2y$12$7A4HflCQ0WHYA/0tv.dHg.Qwmjt/4gOQa7xrhPVEoxgKlYdxsljHG','Tahmid','0',NULL,NULL,NULL,NULL,0,0,NULL,1,0,'2024-01-15 04:38:54',NULL,'2024-01-15 04:38:54'),(16,'mithu@nexdecade.com','$2y$12$HipW9rqMhGrxWDic496tTu332ywCIS8GNyR.iWyrPCUxqYw/1ocni','Mithu','Sr. Software Engineer','Dhaka','+1 (485) 643-3064','mithu@nexdecade.com',NULL,1,1,NULL,1,0,'2024-01-15 13:17:15',NULL,'2024-01-17 07:33:37'),(17,'s@gmail.com','$2y$12$pWnoLgjL9FfUqrWJBWY0me696U3IaXAXHa.DYO5MCeHGiQ5ZkDu52','mr','0',NULL,NULL,NULL,NULL,0,0,NULL,1,0,'2024-01-15 09:28:55',NULL,'2024-01-15 09:28:55'),(18,'developer@nexdecade.com','$2y$12$TTfp0jabbtxqDCLByvu2l.rwOuNPMbC86PBCCg2AaRPvFK3K2aS3C','Developer','qwerty','asfasf','asfas','asfasf','NTnrfgjeik7B5mFWmlIJ4WodiBvCB3GaZoPBSNrTb6R4JP0PJuEcXFR9oLzL',1,1,NULL,1,0,'2024-01-17 05:09:45',NULL,'2024-01-17 06:59:36'),(19,'developer2@nexdecade.com','$2y$12$VFXqLagIjQ/z8Db2ytR3meOZ4cINr4mErygE0bXCvsXJXM8fhQebq','developer2','Irure voluptatem Se','hupuwene@mailinator.com','+1 (485) 643-3064','juhycyva@mailinator.com',NULL,1,1,NULL,1,0,'2024-01-17 06:02:05',NULL,'2024-01-17 06:02:05');

UNLOCK TABLES;

/*Table structure for table `bill_transactions` */

CREATE TABLE `bill_transactions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `client_id` int NOT NULL,
  `invoice_no` varchar(15) DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `vat` float NOT NULL DEFAULT '0',
  `discount` float NOT NULL DEFAULT '0',
  `total_billed` float NOT NULL DEFAULT '0',
  `total_received` float NOT NULL DEFAULT '0',
  `remarks` varchar(250) DEFAULT NULL,
  `mr_no` varchar(10) NOT NULL DEFAULT '0',
  `sales_by` int NOT NULL DEFAULT '0',
  `received_by` int NOT NULL DEFAULT '0',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

/*Data for the table `bill_transactions` */

LOCK TABLES `bill_transactions` WRITE;

UNLOCK TABLES;

/*Table structure for table `currency_info` */

CREATE TABLE `currency_info` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `currency_code` varchar(5) DEFAULT NULL,
  `conversion_rate` double DEFAULT NULL,
  `order_index` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

/*Data for the table `currency_info` */

LOCK TABLES `currency_info` WRITE;

insert  into `currency_info`(`id`,`currency_code`,`conversion_rate`,`order_index`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,'Taka',80,1,1,0,'2024-01-10 18:59:03',NULL,NULL),(2,'USD',1,2,1,0,'2024-01-10 18:59:10',NULL,NULL),(3,'RMB',13,3,1,0,'2024-01-10 18:59:13',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `custom_params` */

CREATE TABLE `custom_params` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `source_id` int NOT NULL,
  `param_type` enum('product','supplier','user','customer','manufacture') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `param_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `param_value` double NOT NULL DEFAULT '0',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

/*Data for the table `custom_params` */

LOCK TABLES `custom_params` WRITE;

UNLOCK TABLES;

/*Table structure for table `customer_infos` */

CREATE TABLE `customer_infos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(200) DEFAULT NULL,
  `contact_person` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pho_1` varchar(30) DEFAULT NULL,
  `cell_1` varchar(50) DEFAULT NULL,
  `web_mail` varchar(100) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `web_url` varchar(100) DEFAULT NULL,
  `remarks` varchar(250) DEFAULT NULL,
  `manufacture_cat` enum('local','foreign') DEFAULT NULL,
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

/*Data for the table `customer_infos` */

LOCK TABLES `customer_infos` WRITE;

insert  into `customer_infos`(`id`,`customer_name`,`contact_person`,`address`,`pho_1`,`cell_1`,`web_mail`,`fax`,`web_url`,`remarks`,`manufacture_cat`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_at`) values (1,'MD. JOYNAL ABEDIN','MD. JOYNAL ABEDIN','Savar, Dhaka','+8801785893609',NULL,'joy.diu.cse@gmail.com',NULL,NULL,NULL,'local',1,'2024-01-14 09:07:55',NULL,'2024-01-14 18:11:20','2024-01-14 18:11:20');

UNLOCK TABLES;

/*Table structure for table `failed_jobs` */

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

LOCK TABLES `failed_jobs` WRITE;

UNLOCK TABLES;

/*Table structure for table `last_invoice_id` */

CREATE TABLE `last_invoice_id` (
  `id` int NOT NULL,
  `office_id` int NOT NULL,
  `max_invoice_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

/*Data for the table `last_invoice_id` */

LOCK TABLES `last_invoice_id` WRITE;

insert  into `last_invoice_id`(`id`,`office_id`,`max_invoice_id`) values (1,1,'20231205146054');

UNLOCK TABLES;

/*Table structure for table `last_pro_barcode_id` */

CREATE TABLE `last_pro_barcode_id` (
  `id` int NOT NULL,
  `office_id` int NOT NULL,
  `max_barcode_id` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

/*Data for the table `last_pro_barcode_id` */

LOCK TABLES `last_pro_barcode_id` WRITE;

insert  into `last_pro_barcode_id`(`id`,`office_id`,`max_barcode_id`) values (1,1,'20240100039');

UNLOCK TABLES;

/*Table structure for table `last_track_id` */

CREATE TABLE `last_track_id` (
  `id` int NOT NULL,
  `office_id` int NOT NULL,
  `max_track_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

/*Data for the table `last_track_id` */

LOCK TABLES `last_track_id` WRITE;

insert  into `last_track_id`(`id`,`office_id`,`max_track_id`) values (1,1,'202401000001');

UNLOCK TABLES;

/*Table structure for table `manufacture_infos` */

CREATE TABLE `manufacture_infos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '',
  `mobile` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '',
  `web_mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '',
  `fax` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '',
  `web_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '',
  `remarks` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '',
  `manufacture_cat` enum('local','foreign') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_by` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

/*Data for the table `manufacture_infos` */

LOCK TABLES `manufacture_infos` WRITE;

insert  into `manufacture_infos`(`id`,`contact_name`,`address`,`mobile`,`web_mail`,`fax`,`web_url`,`remarks`,`manufacture_cat`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (11,'eMachines',NULL,NULL,'','','','',NULL,0,'2024-01-22 05:34:28',0,'2024-01-22 05:34:28'),(8,'AMD','USA',NULL,'','','','',NULL,0,'2024-01-22 05:32:17',0,'2024-01-22 05:32:17'),(10,'Cisco Systems','USA',NULL,'','','','',NULL,0,'2024-01-22 05:34:02',0,'2024-01-22 05:34:02'),(12,'Sun Microsystems',NULL,NULL,'','','','',NULL,0,'2024-01-22 05:34:40',0,'2024-01-22 05:34:40');

UNLOCK TABLES;

/*Table structure for table `manufacture_pro_price` */

CREATE TABLE `manufacture_pro_price` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pro_id` int DEFAULT NULL,
  `manufacture_id` int DEFAULT NULL,
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

/*Data for the table `manufacture_pro_price` */

LOCK TABLES `manufacture_pro_price` WRITE;

UNLOCK TABLES;

/*Table structure for table `migrations` */

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

LOCK TABLES `migrations` WRITE;

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_01_01_062513_create_categories_table',1),(6,'2024_01_01_063028_create_products_table',1);

UNLOCK TABLES;

/*Table structure for table `password_reset_tokens` */

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

LOCK TABLES `password_reset_tokens` WRITE;

insert  into `password_reset_tokens`(`email`,`token`,`created_at`) values ('testing@example.com','$2y$12$6t7vvaepzRu2F0L.EFAQ3e.geBBN5ijjy4jxaAGMOB4lhoChK7TvC','2024-01-14 23:36:14');

UNLOCK TABLES;

/*Table structure for table `permissions` */

CREATE TABLE `permissions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `remarks` text,
  `order_index` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3;

/*Data for the table `permissions` */

LOCK TABLES `permissions` WRITE;

insert  into `permissions`(`id`,`category`,`parent_id`,`name`,`remarks`,`order_index`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (3,'User-Manage',NULL,'user_edit',NULL,3,1,0,'2024-01-11 19:07:43',NULL,NULL),(2,'User-Manage',NULL,'user_create',NULL,2,1,0,'2024-01-11 19:07:27',NULL,NULL),(1,'User-Manage',NULL,'User-Manage',NULL,1,1,0,'2024-01-11 19:07:18',NULL,NULL),(4,'User-Manage',NULL,'user_delete',NULL,4,1,0,'2024-01-11 19:07:51',NULL,NULL),(5,'Product-Manage',NULL,'product_view',NULL,5,1,0,'2024-01-11 19:08:02',NULL,NULL),(6,'Product-Manage',NULL,'product_create',NULL,0,1,0,'2024-01-17 14:18:18',NULL,NULL),(7,'Product-Manage',NULL,'product_edit',NULL,0,1,0,'2024-01-17 14:18:48',NULL,NULL),(8,'Product-Manage',NULL,'product_delete',NULL,0,1,0,'2024-01-17 14:19:03',NULL,NULL),(9,'Supplier-Manage',NULL,'supplier_view',NULL,0,1,0,'2024-01-17 14:19:15',NULL,NULL),(10,'Supplier-Manage',NULL,'supplier_create',NULL,0,1,0,'2024-01-17 14:19:39',NULL,NULL),(11,'Supplier-Manage',NULL,'supplier_edit',NULL,0,1,0,'2024-01-17 14:19:49',NULL,NULL),(12,'Supplier-Manage',NULL,'supplier_delete',NULL,0,1,0,'2024-01-17 14:23:31',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `personal_access_tokens` */

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

LOCK TABLES `personal_access_tokens` WRITE;

UNLOCK TABLES;

/*Table structure for table `product_categories` */

CREATE TABLE `product_categories` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `slug` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `media_type` enum('png','svg','jpg','svgPath') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `parameter_name` text,
  `order_index` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  `attachment` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11060 DEFAULT CHARSET=utf8mb3;

/*Data for the table `product_categories` */

LOCK TABLES `product_categories` WRITE;

insert  into `product_categories`(`id`,`cat_name`,`slug`,`remarks`,`media_type`,`parameter_name`,`order_index`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`,`attachment`) values (11046,'Cortex®-M4',NULL,NULL,'png','Cortex®-M4_1705825539.png',0,1,0,'2024-01-21 08:25:39',0,'2024-01-21 08:25:39',NULL),(11049,'Diode',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-Diode css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M1 25L8.20006 17.7999M24.8215 1L17.5255 8.58406M8.29947 12.6193L13.4101 17.4752M8.15547 17.8993C8.15547 17.8993 9.69148 20.0113 10.3635 19.9633C11.0355 19.9153 19.8196 11.6593 19.5796 10.9873C19.3395 10.3153 16.1715 6.28324 15.1635 6.52324C14.1555 6.76324 5.65945 14.8273 6.04345 15.5473C6.42745 16.2673 8.15547 17.8993 8.15547 17.8993Z\" stroke=\"black\"></path></svg>',0,1,0,'2024-01-21 11:10:59',0,'2024-01-21 11:10:59',NULL),(11050,'CrystalDiode',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-Diode css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M1 25L8.20006 17.7999M24.8215 1L17.5255 8.58406M8.29947 12.6193L13.4101 17.4752M8.15547 17.8993C8.15547 17.8993 9.69148 20.0113 10.3635 19.9633C11.0355 19.9153 19.8196 11.6593 19.5796 10.9873C19.3395 10.3153 16.1715 6.28324 15.1635 6.52324C14.1555 6.76324 5.65945 14.8273 6.04345 15.5473C6.42745 16.2673 8.15547 17.8993 8.15547 17.8993Z\" stroke=\"black\"></path></svg>',0,1,0,'2024-01-21 11:11:37',0,'2024-01-21 11:11:37',NULL),(11051,'IC',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-IC css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M7.52123 21.5H5.5V21H6V20.5V17V16.5H5.5V16H6V15.5V12V11.5H5.5V11H6V10.5V7V6.5H5.5V6H6V5.5V2V1.5H5.5V0.5H16.5V1.5V2V5.5V6V6.5V7V10.5V11V11.5V12V15.5V16V16.5V17V20.5V21V21.5H14.4788C14.3927 20.4925 14.049 19.5751 13.5213 18.8716C12.9074 18.053 12.0211 17.5 11 17.5C9.97891 17.5 9.09261 18.053 8.47868 18.8716C7.951 19.5751 7.6073 20.4925 7.52123 21.5ZM3.70711 17.5H4.5V20H3.80902L3.44721 19.2764L3.30902 19H3H1.20711L0.707107 18.5L1.20711 18H3H3.20711L3.35355 17.8536L3.70711 17.5ZM3.70711 12.5H4.5V15H3.80902L3.44721 14.2764L3.30902 14H3H1.20711L0.707107 13.5L1.20711 13H3H3.20711L3.35355 12.8536L3.70711 12.5ZM3.70711 7.5H4.5V10H3.80902L3.44721 9.27639L3.30902 9H3H1.20711L0.707107 8.5L1.20711 8H3H3.20711L3.35355 7.85355L3.70711 7.5ZM3.70711 2.5H4.5V5H3.80902L3.44721 4.27639L3.30902 4H3H1.20711L0.707107 3.5L1.20711 3H3H3.20711L3.35355 2.85355L3.70711 2.5ZM17.5 5V2.5H18.7929L19.1464 2.85355L19.2929 3H19.5H21.2929L21.7929 3.5L21.2929 4H19.5H19.191L19.0528 4.27639L18.691 5H17.5ZM17.5 10V7.5H18.7929L19.1464 7.85355L19.2929 8H19.5H21.2929L21.7929 8.5L21.2929 9H19.5H19.191L19.0528 9.27639L18.691 10H17.5ZM17.5 15V12.5H18.7929L19.1464 12.8536L19.2929 13H19.5H21.2929L21.7929 13.5L21.2929 14H19.5H19.191L19.0528 14.2764L18.691 15H17.5ZM17.5 20V17.5H18.7929L19.1464 17.8536L19.2929 18H19.5H21.2929L21.7929 18.5L21.2929 19H19.5H19.191L19.0528 19.2764L18.691 20H17.5ZM12.7213 19.4716C13.1135 19.9945 13.3916 20.699 13.4744 21.5H8.5256C8.6084 20.699 8.88648 19.9945 9.27868 19.4716C9.75054 18.8424 10.3642 18.5 11 18.5C11.6358 18.5 12.2495 18.8424 12.7213 19.4716Z\" stroke=\"black\"></path></svg>',0,1,0,'2024-01-21 11:12:05',0,'2024-01-21 11:12:05',NULL),(11052,'LED',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-LED css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M5.36552 22.8695V18.2324M9.37594 25V18.2324M1.1671 15.2872C1.54308 14.7859 13.6997 14.4101 14.0757 15.2872C14.4516 16.1644 14.0757 18.2325 14.0757 18.2325H1.1671C1.1671 18.2325 0.791124 15.7884 1.1671 15.2872ZM2.67101 14.9112V5.26107C2.67101 5.26107 2.67101 0.999973 7.68404 1C12.6971 1.00003 12.6971 5.26107 12.6971 5.26107V14.9112H2.67101ZM5.67883 14.9113V10.3369H6.55611C6.55611 10.3369 6.49345 11.2768 7.2454 11.4022C7.99736 11.5275 8.31067 10.3369 8.31067 10.3369H9.68926V14.9113H5.67883Z\" stroke=\"black\"></path></svg>',0,1,0,'2024-01-21 11:13:28',0,'2024-01-21 11:13:28',NULL),(11053,'Relay',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-Relay css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M1.5 6.85835L1.69175 6.39658L1 6.10933V6.85835H1.5ZM12.1266 11.2711H12.6266V10.9373L12.3184 10.8093L12.1266 11.2711ZM12.1266 23.4737L11.9366 23.9362L12.6266 24.2198V23.4737H12.1266ZM1.5 19.106H1V19.4411L1.30992 19.5685L1.5 19.106ZM12.8921 23.2936H12.3921V24.028L13.0754 23.7588L12.8921 23.2936ZM12.8921 11.2711L12.6985 10.8101L12.3921 10.9388V11.2711H12.8921ZM23.2936 6.90338H23.7936V6.15113L23.1 6.44237L23.2936 6.90338ZM23.2936 19.1961L23.4769 19.6613L23.7936 19.5365V19.1961H23.2936ZM2.22045 6.36304L2.00564 5.91154L0.990942 6.3943L2.02886 6.82488L2.22045 6.36304ZM12.5319 10.6407L12.3403 11.1025L12.5327 11.1824L12.7249 11.102L12.5319 10.6407ZM22.7533 6.36304L22.9463 6.82428L23.9833 6.39031L22.9666 5.91081L22.7533 6.36304ZM12.4418 1.5L12.6551 1.04777L12.4409 0.946741L12.227 1.0485L12.4418 1.5ZM10.0957 25.5C10.0957 25.7761 10.3195 26 10.5957 26C10.8718 26 11.0957 25.7761 11.0957 25.5H10.0957ZM21.4878 22.1679C21.4878 22.4441 21.7117 22.6679 21.9878 22.6679C22.2639 22.6679 22.4878 22.4441 22.4878 22.1679H21.4878ZM2.30582 22.1679C2.30582 22.4441 2.52967 22.6679 2.80582 22.6679C3.08196 22.6679 3.30582 22.4441 3.30582 22.1679H2.30582ZM1.30825 7.32012L11.9349 11.7329L12.3184 10.8093L1.69175 6.39658L1.30825 7.32012ZM11.6266 11.2711V23.4737H12.6266V11.2711H11.6266ZM12.3167 23.0113L1.69008 18.6435L1.30992 19.5685L11.9366 23.9362L12.3167 23.0113ZM2 19.106V6.85835H1V19.106H2ZM13.3921 23.2936V11.2711H12.3921V23.2936H13.3921ZM13.0857 11.7321L23.4872 7.36438L23.1 6.44237L12.6985 10.8101L13.0857 11.7321ZM22.7936 6.90338V19.1961H23.7936V6.90338H22.7936ZM23.1104 18.7309L12.7089 22.8284L13.0754 23.7588L23.4769 19.6613L23.1104 18.7309ZM2.02886 6.82488L12.3403 11.1025L12.7235 10.1789L2.41204 5.9012L2.02886 6.82488ZM12.7249 11.102L22.9463 6.82428L22.5603 5.9018L12.3389 10.1795L12.7249 11.102ZM22.9666 5.91081L12.6551 1.04777L12.2286 1.95223L22.54 6.81527L22.9666 5.91081ZM12.227 1.0485L2.00564 5.91154L2.43526 6.81454L12.6567 1.9515L12.227 1.0485ZM10.0957 22.9784V25.5H11.0957V22.9784H10.0957ZM21.4878 19.6463V22.1679H22.4878V19.6463H21.4878ZM2.30582 19.6463V22.1679H3.30582V19.6463H2.30582Z\" fill=\"black\"></path></svg>',0,1,0,'2024-01-21 11:14:46',0,'2024-01-21 11:14:46',NULL),(11054,'Microcontrollers',NULL,NULL,'png','Microcontrollers_1705836418.png',0,1,0,'2024-01-21 11:26:58',0,'2024-01-21 11:26:58',NULL),(11047,'Cable',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-Cable css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M22.998 4.67546L22.0002 4.61053L21.998 4.64296V4.67546H22.998ZM18.6177 1.00169L18.5975 2.00149L18.6177 1.00169ZM14.0043 4.67546H13.0043V4.68407L13.0045 4.69267L14.0043 4.67546ZM10.0434 22.9978L10.075 23.9973L10.0434 22.9978ZM1.09629 5.41954V4.41954H0.215122L0.104236 5.2937L1.09629 5.41954ZM8.83178 5.41954L9.77886 5.09854L9.54872 4.41954H8.83178V5.41954ZM7.64163 1.37375C7.64163 0.821468 7.19391 0.373752 6.64163 0.373752C6.08934 0.373752 5.64163 0.821468 5.64163 1.37375H7.64163ZM21.9514 22.8118C21.9514 23.3641 22.3992 23.8118 22.9514 23.8118C23.5037 23.8118 23.9514 23.3641 23.9514 22.8118H21.9514ZM23.998 20.5331V4.67546H21.998V20.5331H23.998ZM22.998 4.67546C23.9959 4.74039 23.996 4.73975 23.996 4.73909C23.996 4.73886 23.9961 4.73819 23.9961 4.73771C23.9962 4.73676 23.9962 4.73575 23.9963 4.73469C23.9964 4.73256 23.9965 4.7302 23.9967 4.72761C23.997 4.72244 23.9973 4.71636 23.9976 4.70941C23.9982 4.6955 23.9988 4.67807 23.9993 4.65732C24.0002 4.61587 24.0005 4.56098 23.9987 4.49452C23.9951 4.36198 23.9833 4.18105 23.9514 3.96712C23.8882 3.54276 23.7425 2.9657 23.406 2.37714C22.6923 1.12863 21.2519 0.054598 18.6378 0.00189758L18.5975 2.00149C20.5968 2.0418 21.3467 2.80464 21.6697 3.36977C21.8517 3.68802 21.936 4.01197 21.9733 4.2619C21.9916 4.38512 21.9977 4.48466 21.9994 4.54831C22.0003 4.57994 22 4.60208 21.9998 4.61312C21.9997 4.61863 21.9995 4.6213 21.9995 4.62096C21.9996 4.62078 21.9996 4.61984 21.9997 4.61811C21.9997 4.61725 21.9998 4.61618 21.9999 4.61492C21.9999 4.61429 22 4.61361 22 4.61288C22 4.61251 22.0001 4.61192 22.0001 4.61174C22.0001 4.61114 22.0002 4.61053 22.998 4.67546ZM18.6378 0.00189758C16.0013 -0.0512553 14.5059 1.02713 13.7311 2.27674C13.3646 2.86782 13.1856 3.45444 13.0968 3.88756C13.052 4.10594 13.029 4.29107 13.0172 4.42648C13.0112 4.49438 13.008 4.55033 13.0063 4.59235C13.0054 4.61338 13.005 4.63098 13.0047 4.6449C13.0045 4.65186 13.0045 4.6579 13.0044 4.66301C13.0044 4.66556 13.0044 4.66787 13.0044 4.66995C13.0043 4.67099 13.0043 4.67197 13.0043 4.67288C13.0043 4.67334 13.0043 4.67399 13.0043 4.67422C13.0043 4.67484 13.0043 4.67546 14.0043 4.67546C15.0043 4.67546 15.0043 4.67604 15.0043 4.67661C15.0043 4.67678 15.0043 4.67734 15.0043 4.67769C15.0043 4.67838 15.0043 4.67901 15.0043 4.67959C15.0043 4.68076 15.0043 4.68171 15.0043 4.68245C15.0043 4.68393 15.0043 4.68458 15.0043 4.68441C15.0043 4.68408 15.0044 4.68054 15.0046 4.674C15.0052 4.66089 15.0065 4.63601 15.0095 4.60109C15.0157 4.53087 15.0287 4.42244 15.0561 4.28915C15.1114 4.0189 15.2207 3.66964 15.4309 3.33066C15.8094 2.72014 16.6207 1.96164 18.5975 2.00149L18.6378 0.00189758ZM14.0043 4.67546C13.0045 4.69267 13.0045 4.69271 13.0045 4.69281C13.0045 4.69291 13.0045 4.69305 13.0045 4.69325C13.0045 4.69365 13.0045 4.69426 13.0045 4.69506C13.0046 4.69668 13.0046 4.69911 13.0047 4.70234C13.0048 4.70879 13.0049 4.71846 13.0051 4.73123C13.0056 4.75677 13.0062 4.79473 13.007 4.84433C13.0087 4.94353 13.0111 5.08927 13.014 5.27526C13.0199 5.64725 13.0281 6.18017 13.0372 6.82365C13.0554 8.11076 13.0772 9.83945 13.0917 11.6069C13.1063 13.3752 13.1135 15.1783 13.1027 16.6156C13.0972 17.3349 13.0873 17.957 13.0718 18.4351C13.064 18.6745 13.055 18.872 13.0449 19.0247C13.0399 19.1009 13.0348 19.1619 13.03 19.2088C13.0277 19.232 13.0255 19.2499 13.0238 19.2631C13.0219 19.2767 13.0209 19.2821 13.0211 19.2811L14.9876 19.646C15.0333 19.3996 15.0555 18.9687 15.0707 18.5001C15.087 17.9978 15.0971 17.3567 15.1026 16.6307C15.1136 15.1776 15.1063 13.3621 15.0917 11.5904C15.0771 9.81774 15.0552 8.08485 15.037 6.79539C15.0279 6.15058 15.0197 5.61648 15.0138 5.2435C15.0108 5.05701 15.0084 4.91079 15.0068 4.81115C15.0059 4.76133 15.0053 4.72315 15.0049 4.6974C15.0046 4.68453 15.0045 4.67476 15.0044 4.6682C15.0043 4.66492 15.0043 4.66245 15.0042 4.66078C15.0042 4.65995 15.0042 4.65932 15.0042 4.6589C15.0042 4.65869 15.0042 4.65852 15.0042 4.65842C15.0042 4.6583 15.0042 4.65824 14.0043 4.67546ZM13.0211 19.2811C12.9195 19.829 12.7075 20.499 12.2683 21.0275C11.8605 21.5183 11.1989 21.9607 10.0117 21.9983L10.075 23.9973C11.8236 23.9419 13.026 23.245 13.8065 22.3058C14.5556 21.4043 14.8562 20.3537 14.9876 19.646L13.0211 19.2811ZM10.0117 21.9983C8.90118 22.0334 8.00969 21.5221 7.32537 20.849C6.62585 20.161 6.22983 19.3846 6.13979 19.1301L4.25425 19.797C4.44383 20.333 5.0031 21.3702 5.92291 22.2749C6.85792 23.1946 8.24979 24.0551 10.075 23.9973L10.0117 21.9983ZM6.13979 19.1301C6.15359 19.1691 6.13314 19.1133 6.11344 18.8716C6.09668 18.6659 6.08522 18.3968 6.07886 18.0782C6.06617 17.443 6.07455 16.6587 6.09191 15.8878C6.10922 15.1192 6.13522 14.3738 6.15693 13.8198C6.16778 13.5431 6.17754 13.3146 6.18458 13.1556C6.1881 13.076 6.19093 13.0139 6.19288 12.9718C6.19386 12.9507 6.19461 12.9346 6.19512 12.9239C6.19537 12.9186 6.19556 12.9145 6.19569 12.9119C6.19575 12.9105 6.1958 12.9096 6.19583 12.9089C6.19584 12.9086 6.19585 12.9084 6.19586 12.9082C6.19586 12.9082 6.19587 12.9081 6.19587 12.9081C6.19587 12.9081 6.19587 12.9081 5.19702 12.86C4.19818 12.812 4.19818 12.812 4.19817 12.8121C4.19817 12.8122 4.19817 12.8123 4.19816 12.8124C4.19815 12.8126 4.19814 12.8129 4.19812 12.8133C4.19808 12.814 4.19803 12.8152 4.19796 12.8166C4.19782 12.8196 4.19761 12.8239 4.19734 12.8296C4.19681 12.8409 4.19603 12.8576 4.19502 12.8793C4.19301 12.9227 4.19011 12.9862 4.18653 13.0672C4.17937 13.2291 4.16947 13.4609 4.15847 13.7415C4.13649 14.3022 4.11006 15.0594 4.09242 15.8428C4.07483 16.624 4.06573 17.4411 4.07926 18.1182C4.086 18.4558 4.09857 18.7704 4.12005 19.034C4.13858 19.2615 4.17055 19.5603 4.25425 19.797L6.13979 19.1301ZM5.19702 12.86C5.37381 11.8758 5.3741 11.8758 5.37437 11.8759C5.37445 11.8759 5.37472 11.876 5.37488 11.876C5.37521 11.876 5.3755 11.8761 5.37575 11.8761C5.37626 11.8762 5.37664 11.8763 5.37688 11.8763C5.37736 11.8764 5.3773 11.8764 5.37671 11.8763C5.37555 11.8761 5.37229 11.8755 5.36704 11.8744C5.35653 11.8723 5.33812 11.8685 5.31264 11.8628C5.26159 11.8514 5.18271 11.8326 5.08261 11.8048C4.88125 11.749 4.60048 11.659 4.2908 11.5244C3.65316 11.2473 2.98837 10.8229 2.58018 10.2119L0.917143 11.3229C1.62734 12.386 2.68674 13.008 3.49367 13.3587C3.90629 13.538 4.27791 13.6572 4.54837 13.7322C4.68418 13.7698 4.79607 13.7967 4.87681 13.8148C4.91722 13.8238 4.94996 13.8306 4.97413 13.8354C4.98622 13.8379 4.99618 13.8398 5.0039 13.8413C5.00776 13.842 5.01106 13.8426 5.01378 13.8431C5.01515 13.8434 5.01637 13.8436 5.01744 13.8438C5.01798 13.8439 5.01848 13.844 5.01895 13.8441C5.01918 13.8441 5.0195 13.8442 5.01962 13.8442C5.01993 13.8442 5.02024 13.8443 5.19702 12.86ZM2.58018 10.2119C2.40371 9.94777 2.25722 9.54869 2.15626 9.03331C2.05736 8.52843 2.01379 7.97367 2.00287 7.44503C1.99201 6.91938 2.01376 6.4394 2.03845 6.09029C2.05076 5.9164 2.06367 5.77665 2.07331 5.68194C2.07812 5.63462 2.08211 5.59865 2.08478 5.57541C2.08612 5.56379 2.08712 5.55537 2.08774 5.5503C2.08804 5.54777 2.08825 5.54608 2.08835 5.54525C2.08841 5.54484 2.08843 5.54464 2.08843 5.54466C2.08843 5.54467 2.08842 5.54474 2.0884 5.54486C2.0884 5.54492 2.08838 5.54505 2.08838 5.54508C2.08836 5.54522 2.08834 5.54538 1.09629 5.41954C0.104236 5.2937 0.104213 5.29389 0.104187 5.29409C0.104176 5.29418 0.104149 5.29439 0.104128 5.29456C0.104084 5.29491 0.104034 5.29531 0.103977 5.29576C0.103862 5.29667 0.10372 5.29781 0.103552 5.29917C0.103215 5.30189 0.102772 5.30549 0.102231 5.30996C0.101149 5.3189 0.0996737 5.33131 0.097869 5.34701C0.0942604 5.3784 0.0893295 5.423 0.0835881 5.4794C0.0721133 5.59213 0.0573532 5.75248 0.0434401 5.94916C0.0157087 6.34119 -0.0091438 6.88429 0.00329316 7.48634C0.0156686 8.08541 0.0652932 8.76299 0.193561 9.41778C0.319774 10.0621 0.534422 10.75 0.917143 11.3229L2.58018 10.2119ZM1.09629 6.41954H8.83178V4.41954H1.09629V6.41954ZM8.83178 5.41954C7.8847 5.74054 7.8846 5.74025 7.88451 5.73996C7.88448 5.73988 7.88439 5.7396 7.88433 5.73944C7.88422 5.73912 7.88413 5.73885 7.88405 5.73862C7.8839 5.73816 7.88381 5.73789 7.88378 5.7378C7.88372 5.73763 7.88391 5.73819 7.88433 5.73946C7.88516 5.74202 7.88692 5.74744 7.88949 5.7556C7.89462 5.77194 7.90298 5.79918 7.91368 5.83634C7.93511 5.91077 7.96571 6.02427 7.99855 6.16902C8.06459 6.46017 8.13759 6.86863 8.16562 7.33399C8.22309 8.28796 8.08486 9.34695 7.47116 10.1694L9.07406 11.3655C10.0913 10.0022 10.2327 8.38729 10.162 7.21373C10.126 6.61533 10.0329 6.09663 9.94899 5.72656C9.90683 5.5407 9.86644 5.39007 9.83562 5.28304C9.8202 5.22946 9.80712 5.18663 9.79736 5.15557C9.79247 5.14004 9.78841 5.12744 9.78529 5.11789C9.78373 5.11312 9.7824 5.10911 9.78133 5.10588C9.78079 5.10427 9.78031 5.10284 9.7799 5.10162C9.77969 5.10101 9.7795 5.10044 9.77933 5.09993C9.77924 5.09967 9.77913 5.09933 9.77908 5.0992C9.77897 5.09886 9.77886 5.09854 8.83178 5.41954ZM7.47116 10.1694C6.74764 11.1389 6.11048 11.5455 5.71865 11.7188C5.51965 11.8069 5.37209 11.8401 5.29214 11.8527C5.25181 11.8591 5.22771 11.8604 5.22191 11.8606C5.21899 11.8607 5.22064 11.8606 5.22711 11.8606C5.23034 11.8607 5.23479 11.8608 5.24047 11.861C5.24332 11.8611 5.24647 11.8613 5.24994 11.8614C5.25167 11.8615 5.25349 11.8616 5.25538 11.8617C5.25632 11.8618 5.25729 11.8619 5.25828 11.8619C5.25877 11.8619 5.25952 11.862 5.25977 11.862C5.26053 11.8621 5.26129 11.8621 5.19702 12.86C5.13275 13.858 5.13353 13.858 5.13431 13.8581C5.13458 13.8581 5.13537 13.8581 5.1359 13.8582C5.13698 13.8582 5.13807 13.8583 5.1392 13.8584C5.14144 13.8585 5.14378 13.8586 5.14622 13.8588C5.15109 13.859 5.15634 13.8592 5.16196 13.8595C5.17321 13.8599 5.18597 13.8603 5.20018 13.8605C5.22861 13.8608 5.26288 13.8606 5.30266 13.859C5.38222 13.8557 5.48373 13.8472 5.60431 13.8282C5.84619 13.7899 6.16172 13.7098 6.52775 13.5479C7.26596 13.2213 8.16659 12.5816 9.07406 11.3655L7.47116 10.1694ZM3.54087 4.8615V1.51326H1.54087V4.8615H3.54087ZM7.64163 5.41954V1.37375H5.64163V5.41954H7.64163ZM21.9514 20.3006V22.8118H23.9514V20.3006H21.9514Z\" fill=\"black\"></path></svg>',0,1,0,'2024-01-21 11:08:44',0,'2024-01-21 11:08:44',NULL),(11048,'Capacitor',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-Capacitor css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M12 11.5L13 9.5V3.5L12.5 2.5L10 1H7.5M12 11.5L12.5 12.5L13 14L12 14.5L10.5 15M12 11.5C12 12.5 12.4142 12.719 13 13.5C13.5858 14.281 10.5 15 10.5 15M12 11.5C12 10.5 13 10 13 10V3M2.5 11.5L1.5 9.5V3L2 2L5 1H7.5M2.5 11.5L1.5 14L2.5 14.5L4 15H10.5M2.5 11.5C2.5 10.5 1.50001 10 1.50001 10V2.5M2.5 11.5C2.5 12.5 2 12.5 1.50001 13.5C1.00003 14.5 3.65852 14.6661 3.72153 14.6108M10.5 15V23M10.5 15H7M7.5 1C11.5 1 13 3 13 3M7.5 1C3.5 1 1.50001 2.5 1.50001 2.5M7 4.5V15M7 4.5H5.5L3.5 4V14.5L5 15H7M7 4.5C10.5 5 13 3 13 3M7 4.5C4.5 4.5 3.72153 4 3.72153 4M7 15H4.5M4.5 23V15M4.5 15L3.72153 14.6108M1.50001 2.5C1.50001 2.5 2.00001 3.5 3.72153 4M3.72153 14.6108V4\" stroke=\"black\"></path></svg>',0,1,0,'2024-01-21 11:09:16',0,'2024-01-21 11:09:16',NULL);

UNLOCK TABLES;

/*Table structure for table `product_category_subs` */

CREATE TABLE `product_category_subs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `cat_sub_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `slug` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `media_type` enum('png','svg','svgPath') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `parameter_name` text,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  `attachment` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23392 DEFAULT CHARSET=utf8mb3;

/*Data for the table `product_category_subs` */

LOCK TABLES `product_category_subs` WRITE;

insert  into `product_category_subs`(`id`,`cat_id`,`cat_sub_name`,`slug`,`remarks`,`media_type`,`parameter_name`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`,`attachment`) values (22006,'11011','Cortex®-M3',NULL,NULL,'png','Cortex®-M3_1705210787.png',1,0,'2024-01-14 05:39:47',0,'2024-01-14 05:39:47',NULL),(22003,'11006','CrystalDiode',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-Diode css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M1 25L8.20006 17.7999M24.8215 1L17.5255 8.58406M8.29947 12.6193L13.4101 17.4752M8.15547 17.8993C8.15547 17.8993 9.69148 20.0113 10.3635 19.9633C11.0355 19.9153 19.8196 11.6593 19.5796 10.9873C19.3395 10.3153 16.1715 6.28324 15.1635 6.52324C14.1555 6.76324 5.65945 14.8273 6.04345 15.5473C6.42745 16.2673 8.15547 17.8993 8.15547 17.8993Z\" stroke=\"black\"></path></svg>',1,0,'2024-01-09 06:47:30',0,'2024-01-09 06:47:30',NULL),(22001,'11002','Connector',NULL,NULL,'png','Connector_1704781795.png',1,0,'2024-01-09 06:29:55',0,'2024-01-09 06:29:55',NULL),(22002,'11002','CapacitorKit',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-Capacitor css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M19.0472 22.9213H4.44882L1 25V1L4.44882 2.88976H19.0472V22.9213Z\" fill=\"#D9D9D9\"></path><path d=\"M6.62205 4.87402H17.0157V20.748H6.62205V4.87402Z\" fill=\"white\"></path><path d=\"M4.44882 22.9213H19.0472V2.88976H4.44882M4.44882 22.9213L1 25V1L4.44882 2.88976M4.44882 22.9213V2.88976M6.62205 18.3858H9.74016M9.74016 18.3858H11.5354M9.74016 18.3858V20.748M11.5354 18.3858H13.7087M11.5354 18.3858V16.0236M13.7087 18.3858H17.0157M13.7087 18.3858V20.748M6.62205 7.33071H16.962M6.62205 10.0709H17.0157M6.62205 13H17.0157M6.62205 15.8346H17.0157M9.64567 4.87402V7.23622M11.5354 7.51969V9.88189M13.4252 4.87402V7.23622M6.62205 4.87402H17.0157V20.748H6.62205V4.87402Z\" stroke=\"black\"></path></svg>',1,0,'2024-01-09 06:45:46',0,'2024-01-09 06:45:46',NULL),(23372,'11006','diod 23',NULL,NULL,'svgPath','<i class=\"fa-solid fa-cookie-bite\"></i>',1,0,'2024-01-16 06:00:02',0,'2024-01-16 06:00:02',NULL),(23373,'11021','sdvbn',NULL,NULL,'png','sdvbn_1705384923.png',1,0,'2024-01-16 06:02:03',0,'2024-01-16 06:02:03',NULL),(23369,'11002','ne 3534',NULL,NULL,'png','ne 3534_1705383355.png',1,0,'2024-01-16 05:35:55',0,'2024-01-16 05:35:55',NULL),(23370,'11002','Cortex®-M31231',NULL,NULL,'png','Cortex®-M31231_1705383516.png',1,0,'2024-01-16 05:38:36',0,'2024-01-16 05:38:36',NULL),(23364,'11011','Microcontrollersub',NULL,NULL,'png','Microcontrollersub_1705316785.png',1,0,'2024-01-15 11:06:25',0,'2024-01-15 11:06:25',NULL),(23365,'11011','Microcontroller2',NULL,NULL,'png','Microcontroller2_1705316808.png',1,0,'2024-01-15 11:06:48',0,'2024-01-15 11:06:48',NULL),(23374,'11003','test cat',NULL,NULL,'png','test cat_1705465572.png',1,0,'2024-01-17 04:26:12',0,'2024-01-17 04:26:12',NULL),(23368,'11011','Microcontroller-thk',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-Cable css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M22.998 4.67546L22.0002 4.61053L21.998 4.64296V4.67546H22.998ZM18.6177 1.00169L18.5975 2.00149L18.6177 1.00169ZM14.0043 4.67546H13.0043V4.68407L13.0045 4.69267L14.0043 4.67546ZM10.0434 22.9978L10.075 23.9973L10.0434 22.9978ZM1.09629 5.41954V4.41954H0.215122L0.104236 5.2937L1.09629 5.41954ZM8.83178 5.41954L9.77886 5.09854L9.54872 4.41954H8.83178V5.41954ZM7.64163 1.37375C7.64163 0.821468 7.19391 0.373752 6.64163 0.373752C6.08934 0.373752 5.64163 0.821468 5.64163 1.37375H7.64163ZM21.9514 22.8118C21.9514 23.3641 22.3992 23.8118 22.9514 23.8118C23.5037 23.8118 23.9514 23.3641 23.9514 22.8118H21.9514ZM23.998 20.5331V4.67546H21.998V20.5331H23.998ZM22.998 4.67546C23.9959 4.74039 23.996 4.73975 23.996 4.73909C23.996 4.73886 23.9961 4.73819 23.9961 4.73771C23.9962 4.73676 23.9962 4.73575 23.9963 4.73469C23.9964 4.73256 23.9965 4.7302 23.9967 4.72761C23.997 4.72244 23.9973 4.71636 23.9976 4.70941C23.9982 4.6955 23.9988 4.67807 23.9993 4.65732C24.0002 4.61587 24.0005 4.56098 23.9987 4.49452C23.9951 4.36198 23.9833 4.18105 23.9514 3.96712C23.8882 3.54276 23.7425 2.9657 23.406 2.37714C22.6923 1.12863 21.2519 0.054598 18.6378 0.00189758L18.5975 2.00149C20.5968 2.0418 21.3467 2.80464 21.6697 3.36977C21.8517 3.68802 21.936 4.01197 21.9733 4.2619C21.9916 4.38512 21.9977 4.48466 21.9994 4.54831C22.0003 4.57994 22 4.60208 21.9998 4.61312C21.9997 4.61863 21.9995 4.6213 21.9995 4.62096C21.9996 4.62078 21.9996 4.61984 21.9997 4.61811C21.9997 4.61725 21.9998 4.61618 21.9999 4.61492C21.9999 4.61429 22 4.61361 22 4.61288C22 4.61251 22.0001 4.61192 22.0001 4.61174C22.0001 4.61114 22.0002 4.61053 22.998 4.67546ZM18.6378 0.00189758C16.0013 -0.0512553 14.5059 1.02713 13.7311 2.27674C13.3646 2.86782 13.1856 3.45444 13.0968 3.88756C13.052 4.10594 13.029 4.29107 13.0172 4.42648C13.0112 4.49438 13.008 4.55033 13.0063 4.59235C13.0054 4.61338 13.005 4.63098 13.0047 4.6449C13.0045 4.65186 13.0045 4.6579 13.0044 4.66301C13.0044 4.66556 13.0044 4.66787 13.0044 4.66995C13.0043 4.67099 13.0043 4.67197 13.0043 4.67288C13.0043 4.67334 13.0043 4.67399 13.0043 4.67422C13.0043 4.67484 13.0043 4.67546 14.0043 4.67546C15.0043 4.67546 15.0043 4.67604 15.0043 4.67661C15.0043 4.67678 15.0043 4.67734 15.0043 4.67769C15.0043 4.67838 15.0043 4.67901 15.0043 4.67959C15.0043 4.68076 15.0043 4.68171 15.0043 4.68245C15.0043 4.68393 15.0043 4.68458 15.0043 4.68441C15.0043 4.68408 15.0044 4.68054 15.0046 4.674C15.0052 4.66089 15.0065 4.63601 15.0095 4.60109C15.0157 4.53087 15.0287 4.42244 15.0561 4.28915C15.1114 4.0189 15.2207 3.66964 15.4309 3.33066C15.8094 2.72014 16.6207 1.96164 18.5975 2.00149L18.6378 0.00189758ZM14.0043 4.67546C13.0045 4.69267 13.0045 4.69271 13.0045 4.69281C13.0045 4.69291 13.0045 4.69305 13.0045 4.69325C13.0045 4.69365 13.0045 4.69426 13.0045 4.69506C13.0046 4.69668 13.0046 4.69911 13.0047 4.70234C13.0048 4.70879 13.0049 4.71846 13.0051 4.73123C13.0056 4.75677 13.0062 4.79473 13.007 4.84433C13.0087 4.94353 13.0111 5.08927 13.014 5.27526C13.0199 5.64725 13.0281 6.18017 13.0372 6.82365C13.0554 8.11076 13.0772 9.83945 13.0917 11.6069C13.1063 13.3752 13.1135 15.1783 13.1027 16.6156C13.0972 17.3349 13.0873 17.957 13.0718 18.4351C13.064 18.6745 13.055 18.872 13.0449 19.0247C13.0399 19.1009 13.0348 19.1619 13.03 19.2088C13.0277 19.232 13.0255 19.2499 13.0238 19.2631C13.0219 19.2767 13.0209 19.2821 13.0211 19.2811L14.9876 19.646C15.0333 19.3996 15.0555 18.9687 15.0707 18.5001C15.087 17.9978 15.0971 17.3567 15.1026 16.6307C15.1136 15.1776 15.1063 13.3621 15.0917 11.5904C15.0771 9.81774 15.0552 8.08485 15.037 6.79539C15.0279 6.15058 15.0197 5.61648 15.0138 5.2435C15.0108 5.05701 15.0084 4.91079 15.0068 4.81115C15.0059 4.76133 15.0053 4.72315 15.0049 4.6974C15.0046 4.68453 15.0045 4.67476 15.0044 4.6682C15.0043 4.66492 15.0043 4.66245 15.0042 4.66078C15.0042 4.65995 15.0042 4.65932 15.0042 4.6589C15.0042 4.65869 15.0042 4.65852 15.0042 4.65842C15.0042 4.6583 15.0042 4.65824 14.0043 4.67546ZM13.0211 19.2811C12.9195 19.829 12.7075 20.499 12.2683 21.0275C11.8605 21.5183 11.1989 21.9607 10.0117 21.9983L10.075 23.9973C11.8236 23.9419 13.026 23.245 13.8065 22.3058C14.5556 21.4043 14.8562 20.3537 14.9876 19.646L13.0211 19.2811ZM10.0117 21.9983C8.90118 22.0334 8.00969 21.5221 7.32537 20.849C6.62585 20.161 6.22983 19.3846 6.13979 19.1301L4.25425 19.797C4.44383 20.333 5.0031 21.3702 5.92291 22.2749C6.85792 23.1946 8.24979 24.0551 10.075 23.9973L10.0117 21.9983ZM6.13979 19.1301C6.15359 19.1691 6.13314 19.1133 6.11344 18.8716C6.09668 18.6659 6.08522 18.3968 6.07886 18.0782C6.06617 17.443 6.07455 16.6587 6.09191 15.8878C6.10922 15.1192 6.13522 14.3738 6.15693 13.8198C6.16778 13.5431 6.17754 13.3146 6.18458 13.1556C6.1881 13.076 6.19093 13.0139 6.19288 12.9718C6.19386 12.9507 6.19461 12.9346 6.19512 12.9239C6.19537 12.9186 6.19556 12.9145 6.19569 12.9119C6.19575 12.9105 6.1958 12.9096 6.19583 12.9089C6.19584 12.9086 6.19585 12.9084 6.19586 12.9082C6.19586 12.9082 6.19587 12.9081 6.19587 12.9081C6.19587 12.9081 6.19587 12.9081 5.19702 12.86C4.19818 12.812 4.19818 12.812 4.19817 12.8121C4.19817 12.8122 4.19817 12.8123 4.19816 12.8124C4.19815 12.8126 4.19814 12.8129 4.19812 12.8133C4.19808 12.814 4.19803 12.8152 4.19796 12.8166C4.19782 12.8196 4.19761 12.8239 4.19734 12.8296C4.19681 12.8409 4.19603 12.8576 4.19502 12.8793C4.19301 12.9227 4.19011 12.9862 4.18653 13.0672C4.17937 13.2291 4.16947 13.4609 4.15847 13.7415C4.13649 14.3022 4.11006 15.0594 4.09242 15.8428C4.07483 16.624 4.06573 17.4411 4.07926 18.1182C4.086 18.4558 4.09857 18.7704 4.12005 19.034C4.13858 19.2615 4.17055 19.5603 4.25425 19.797L6.13979 19.1301ZM5.19702 12.86C5.37381 11.8758 5.3741 11.8758 5.37437 11.8759C5.37445 11.8759 5.37472 11.876 5.37488 11.876C5.37521 11.876 5.3755 11.8761 5.37575 11.8761C5.37626 11.8762 5.37664 11.8763 5.37688 11.8763C5.37736 11.8764 5.3773 11.8764 5.37671 11.8763C5.37555 11.8761 5.37229 11.8755 5.36704 11.8744C5.35653 11.8723 5.33812 11.8685 5.31264 11.8628C5.26159 11.8514 5.18271 11.8326 5.08261 11.8048C4.88125 11.749 4.60048 11.659 4.2908 11.5244C3.65316 11.2473 2.98837 10.8229 2.58018 10.2119L0.917143 11.3229C1.62734 12.386 2.68674 13.008 3.49367 13.3587C3.90629 13.538 4.27791 13.6572 4.54837 13.7322C4.68418 13.7698 4.79607 13.7967 4.87681 13.8148C4.91722 13.8238 4.94996 13.8306 4.97413 13.8354C4.98622 13.8379 4.99618 13.8398 5.0039 13.8413C5.00776 13.842 5.01106 13.8426 5.01378 13.8431C5.01515 13.8434 5.01637 13.8436 5.01744 13.8438C5.01798 13.8439 5.01848 13.844 5.01895 13.8441C5.01918 13.8441 5.0195 13.8442 5.01962 13.8442C5.01993 13.8442 5.02024 13.8443 5.19702 12.86ZM2.58018 10.2119C2.40371 9.94777 2.25722 9.54869 2.15626 9.03331C2.05736 8.52843 2.01379 7.97367 2.00287 7.44503C1.99201 6.91938 2.01376 6.4394 2.03845 6.09029C2.05076 5.9164 2.06367 5.77665 2.07331 5.68194C2.07812 5.63462 2.08211 5.59865 2.08478 5.57541C2.08612 5.56379 2.08712 5.55537 2.08774 5.5503C2.08804 5.54777 2.08825 5.54608 2.08835 5.54525C2.08841 5.54484 2.08843 5.54464 2.08843 5.54466C2.08843 5.54467 2.08842 5.54474 2.0884 5.54486C2.0884 5.54492 2.08838 5.54505 2.08838 5.54508C2.08836 5.54522 2.08834 5.54538 1.09629 5.41954C0.104236 5.2937 0.104213 5.29389 0.104187 5.29409C0.104176 5.29418 0.104149 5.29439 0.104128 5.29456C0.104084 5.29491 0.104034 5.29531 0.103977 5.29576C0.103862 5.29667 0.10372 5.29781 0.103552 5.29917C0.103215 5.30189 0.102772 5.30549 0.102231 5.30996C0.101149 5.3189 0.0996737 5.33131 0.097869 5.34701C0.0942604 5.3784 0.0893295 5.423 0.0835881 5.4794C0.0721133 5.59213 0.0573532 5.75248 0.0434401 5.94916C0.0157087 6.34119 -0.0091438 6.88429 0.00329316 7.48634C0.0156686 8.08541 0.0652932 8.76299 0.193561 9.41778C0.319774 10.0621 0.534422 10.75 0.917143 11.3229L2.58018 10.2119ZM1.09629 6.41954H8.83178V4.41954H1.09629V6.41954ZM8.83178 5.41954C7.8847 5.74054 7.8846 5.74025 7.88451 5.73996C7.88448 5.73988 7.88439 5.7396 7.88433 5.73944C7.88422 5.73912 7.88413 5.73885 7.88405 5.73862C7.8839 5.73816 7.88381 5.73789 7.88378 5.7378C7.88372 5.73763 7.88391 5.73819 7.88433 5.73946C7.88516 5.74202 7.88692 5.74744 7.88949 5.7556C7.89462 5.77194 7.90298 5.79918 7.91368 5.83634C7.93511 5.91077 7.96571 6.02427 7.99855 6.16902C8.06459 6.46017 8.13759 6.86863 8.16562 7.33399C8.22309 8.28796 8.08486 9.34695 7.47116 10.1694L9.07406 11.3655C10.0913 10.0022 10.2327 8.38729 10.162 7.21373C10.126 6.61533 10.0329 6.09663 9.94899 5.72656C9.90683 5.5407 9.86644 5.39007 9.83562 5.28304C9.8202 5.22946 9.80712 5.18663 9.79736 5.15557C9.79247 5.14004 9.78841 5.12744 9.78529 5.11789C9.78373 5.11312 9.7824 5.10911 9.78133 5.10588C9.78079 5.10427 9.78031 5.10284 9.7799 5.10162C9.77969 5.10101 9.7795 5.10044 9.77933 5.09993C9.77924 5.09967 9.77913 5.09933 9.77908 5.0992C9.77897 5.09886 9.77886 5.09854 8.83178 5.41954ZM7.47116 10.1694C6.74764 11.1389 6.11048 11.5455 5.71865 11.7188C5.51965 11.8069 5.37209 11.8401 5.29214 11.8527C5.25181 11.8591 5.22771 11.8604 5.22191 11.8606C5.21899 11.8607 5.22064 11.8606 5.22711 11.8606C5.23034 11.8607 5.23479 11.8608 5.24047 11.861C5.24332 11.8611 5.24647 11.8613 5.24994 11.8614C5.25167 11.8615 5.25349 11.8616 5.25538 11.8617C5.25632 11.8618 5.25729 11.8619 5.25828 11.8619C5.25877 11.8619 5.25952 11.862 5.25977 11.862C5.26053 11.8621 5.26129 11.8621 5.19702 12.86C5.13275 13.858 5.13353 13.858 5.13431 13.8581C5.13458 13.8581 5.13537 13.8581 5.1359 13.8582C5.13698 13.8582 5.13807 13.8583 5.1392 13.8584C5.14144 13.8585 5.14378 13.8586 5.14622 13.8588C5.15109 13.859 5.15634 13.8592 5.16196 13.8595C5.17321 13.8599 5.18597 13.8603 5.20018 13.8605C5.22861 13.8608 5.26288 13.8606 5.30266 13.859C5.38222 13.8557 5.48373 13.8472 5.60431 13.8282C5.84619 13.7899 6.16172 13.7098 6.52775 13.5479C7.26596 13.2213 8.16659 12.5816 9.07406 11.3655L7.47116 10.1694ZM3.54087 4.8615V1.51326H1.54087V4.8615H3.54087ZM7.64163 5.41954V1.37375H5.64163V5.41954H7.64163ZM21.9514 20.3006V22.8118H23.9514V20.3006H21.9514Z\" fill=\"black\"></path></svg>',1,0,'2024-01-15 13:28:25',0,'2024-01-15 13:28:25',NULL),(23375,'11003','tt',NULL,NULL,'png','tt_1705466643.png',1,0,'2024-01-17 04:44:03',0,'2024-01-17 04:44:03',NULL),(23376,'11002','tt66',NULL,NULL,'png','tt66_1705466754.png',1,0,'2024-01-17 04:45:54',0,'2024-01-17 04:45:54',NULL),(23377,'11002','efddfer',NULL,NULL,'png','efddfer_1705466840.png',1,0,'2024-01-17 04:47:20',0,'2024-01-17 04:47:20',NULL),(23378,'11042','rdferd',NULL,NULL,'png','rdferd_1705466863.png',1,0,'2024-01-17 04:47:43',0,'2024-01-17 04:47:43',NULL),(23387,'11048','Ceramiccapacitor',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-Capacitor css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M12 6.33236C12 9.27734 9.53757 11.6647 6.5 11.6647C3.46243 11.6647 1 9.27734 1 6.33236C1 3.38738 3.46243 1 6.5 1C9.53757 1 12 3.38738 12 6.33236Z\" fill=\"#D9D9D9\"></path><path d=\"M1.70513 11.2437L2.55128 9.98082L3.39744 10.6824L4.52564 11.2437L2.83333 12.5067L1.98718 12.226L1.70513 11.2437Z\" fill=\"#D9D9D9\"></path><path d=\"M9.88462 12.3663L8.75641 11.2437L9.67009 10.6904L10.5897 9.98082L11.4359 11.3841L11.1538 12.3663H9.88462Z\" fill=\"#D9D9D9\"></path><path d=\"M2.69231 12.4599L1.84528 23.1935M10.8718 12.3663L11.4356 24M12 6.33236C12 9.27734 9.53757 11.6647 6.5 11.6647C3.46243 11.6647 1 9.27734 1 6.33236C1 3.38738 3.46243 1 6.5 1C9.53757 1 12 3.38738 12 6.33236ZM2.55128 9.98082L1.70513 11.2437L1.98718 12.226L2.83333 12.5067L4.52564 11.2437L3.39744 10.6824L2.55128 9.98082ZM8.75641 11.2437L9.88462 12.3663H11.1538L11.4359 11.3841L10.5897 9.98082L9.67009 10.6904L8.75641 11.2437Z\" stroke=\"black\"></path></svg>',1,0,'2024-01-21 11:09:50',0,'2024-01-21 11:09:50',NULL),(23388,'11048','Electrolyticcapacitor',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-Capacitor css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M12 11.5L13 9.5V3.5L12.5 2.5L10 1H7.5M12 11.5L12.5 12.5L13 14L12 14.5L10.5 15M12 11.5C12 12.5 12.4142 12.719 13 13.5C13.5858 14.281 10.5 15 10.5 15M12 11.5C12 10.5 13 10 13 10V3M2.5 11.5L1.5 9.5V3L2 2L5 1H7.5M2.5 11.5L1.5 14L2.5 14.5L4 15H10.5M2.5 11.5C2.5 10.5 1.50001 10 1.50001 10V2.5M2.5 11.5C2.5 12.5 2 12.5 1.50001 13.5C1.00003 14.5 3.65852 14.6661 3.72153 14.6108M10.5 15V23M10.5 15H7M7.5 1C11.5 1 13 3 13 3M7.5 1C3.5 1 1.50001 2.5 1.50001 2.5M7 4.5V15M7 4.5H5.5L3.5 4V14.5L5 15H7M7 4.5C10.5 5 13 3 13 3M7 4.5C4.5 4.5 3.72153 4 3.72153 4M7 15H4.5M4.5 23V15M4.5 15L3.72153 14.6108M1.50001 2.5C1.50001 2.5 2.00001 3.5 3.72153 4M3.72153 14.6108V4\" stroke=\"black\"></path></svg>',1,0,'2024-01-21 11:10:31',0,'2024-01-21 11:10:31',NULL),(23389,'11051','ADC',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-IC css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M7.52123 21.5H5.5V21H6V20.5V17V16.5H5.5V16H6V15.5V12V11.5H5.5V11H6V10.5V7V6.5H5.5V6H6V5.5V2V1.5H5.5V0.5H16.5V1.5V2V5.5V6V6.5V7V10.5V11V11.5V12V15.5V16V16.5V17V20.5V21V21.5H14.4788C14.3927 20.4925 14.049 19.5751 13.5213 18.8716C12.9074 18.053 12.0211 17.5 11 17.5C9.97891 17.5 9.09261 18.053 8.47868 18.8716C7.951 19.5751 7.6073 20.4925 7.52123 21.5ZM3.70711 17.5H4.5V20H3.80902L3.44721 19.2764L3.30902 19H3H1.20711L0.707107 18.5L1.20711 18H3H3.20711L3.35355 17.8536L3.70711 17.5ZM3.70711 12.5H4.5V15H3.80902L3.44721 14.2764L3.30902 14H3H1.20711L0.707107 13.5L1.20711 13H3H3.20711L3.35355 12.8536L3.70711 12.5ZM3.70711 7.5H4.5V10H3.80902L3.44721 9.27639L3.30902 9H3H1.20711L0.707107 8.5L1.20711 8H3H3.20711L3.35355 7.85355L3.70711 7.5ZM3.70711 2.5H4.5V5H3.80902L3.44721 4.27639L3.30902 4H3H1.20711L0.707107 3.5L1.20711 3H3H3.20711L3.35355 2.85355L3.70711 2.5ZM17.5 5V2.5H18.7929L19.1464 2.85355L19.2929 3H19.5H21.2929L21.7929 3.5L21.2929 4H19.5H19.191L19.0528 4.27639L18.691 5H17.5ZM17.5 10V7.5H18.7929L19.1464 7.85355L19.2929 8H19.5H21.2929L21.7929 8.5L21.2929 9H19.5H19.191L19.0528 9.27639L18.691 10H17.5ZM17.5 15V12.5H18.7929L19.1464 12.8536L19.2929 13H19.5H21.2929L21.7929 13.5L21.2929 14H19.5H19.191L19.0528 14.2764L18.691 15H17.5ZM17.5 20V17.5H18.7929L19.1464 17.8536L19.2929 18H19.5H21.2929L21.7929 18.5L21.2929 19H19.5H19.191L19.0528 19.2764L18.691 20H17.5ZM12.7213 19.4716C13.1135 19.9945 13.3916 20.699 13.4744 21.5H8.5256C8.6084 20.699 8.88648 19.9945 9.27868 19.4716C9.75054 18.8424 10.3642 18.5 11 18.5C11.6358 18.5 12.2495 18.8424 12.7213 19.4716Z\" stroke=\"black\"></path></svg>',1,0,'2024-01-21 11:12:24',0,'2024-01-21 11:12:24',NULL),(23390,'11051','Amplifier',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-IC css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M7.52123 21.5H5.5V21H6V20.5V17V16.5H5.5V16H6V15.5V12V11.5H5.5V11H6V10.5V7V6.5H5.5V6H6V5.5V2V1.5H5.5V0.5H16.5V1.5V2V5.5V6V6.5V7V10.5V11V11.5V12V15.5V16V16.5V17V20.5V21V21.5H14.4788C14.3927 20.4925 14.049 19.5751 13.5213 18.8716C12.9074 18.053 12.0211 17.5 11 17.5C9.97891 17.5 9.09261 18.053 8.47868 18.8716C7.951 19.5751 7.6073 20.4925 7.52123 21.5ZM3.70711 17.5H4.5V20H3.80902L3.44721 19.2764L3.30902 19H3H1.20711L0.707107 18.5L1.20711 18H3H3.20711L3.35355 17.8536L3.70711 17.5ZM3.70711 12.5H4.5V15H3.80902L3.44721 14.2764L3.30902 14H3H1.20711L0.707107 13.5L1.20711 13H3H3.20711L3.35355 12.8536L3.70711 12.5ZM3.70711 7.5H4.5V10H3.80902L3.44721 9.27639L3.30902 9H3H1.20711L0.707107 8.5L1.20711 8H3H3.20711L3.35355 7.85355L3.70711 7.5ZM3.70711 2.5H4.5V5H3.80902L3.44721 4.27639L3.30902 4H3H1.20711L0.707107 3.5L1.20711 3H3H3.20711L3.35355 2.85355L3.70711 2.5ZM17.5 5V2.5H18.7929L19.1464 2.85355L19.2929 3H19.5H21.2929L21.7929 3.5L21.2929 4H19.5H19.191L19.0528 4.27639L18.691 5H17.5ZM17.5 10V7.5H18.7929L19.1464 7.85355L19.2929 8H19.5H21.2929L21.7929 8.5L21.2929 9H19.5H19.191L19.0528 9.27639L18.691 10H17.5ZM17.5 15V12.5H18.7929L19.1464 12.8536L19.2929 13H19.5H21.2929L21.7929 13.5L21.2929 14H19.5H19.191L19.0528 14.2764L18.691 15H17.5ZM17.5 20V17.5H18.7929L19.1464 17.8536L19.2929 18H19.5H21.2929L21.7929 18.5L21.2929 19H19.5H19.191L19.0528 19.2764L18.691 20H17.5ZM12.7213 19.4716C13.1135 19.9945 13.3916 20.699 13.4744 21.5H8.5256C8.6084 20.699 8.88648 19.9945 9.27868 19.4716C9.75054 18.8424 10.3642 18.5 11 18.5C11.6358 18.5 12.2495 18.8424 12.7213 19.4716Z\" stroke=\"black\"></path></svg>',1,0,'2024-01-21 11:12:43',0,'2024-01-21 11:12:43',NULL),(23391,'11051','CounterIc',NULL,NULL,'svgPath','<svg class=\"MuiSvgIcon-root MuiSvgIcon-fontSizeMedium parttype parttype-IC css-vubbuv\" focusable=\"false\" aria-hidden=\"true\" viewBox=\"0 0 24 24\"><path d=\"M7.52123 21.5H5.5V21H6V20.5V17V16.5H5.5V16H6V15.5V12V11.5H5.5V11H6V10.5V7V6.5H5.5V6H6V5.5V2V1.5H5.5V0.5H16.5V1.5V2V5.5V6V6.5V7V10.5V11V11.5V12V15.5V16V16.5V17V20.5V21V21.5H14.4788C14.3927 20.4925 14.049 19.5751 13.5213 18.8716C12.9074 18.053 12.0211 17.5 11 17.5C9.97891 17.5 9.09261 18.053 8.47868 18.8716C7.951 19.5751 7.6073 20.4925 7.52123 21.5ZM3.70711 17.5H4.5V20H3.80902L3.44721 19.2764L3.30902 19H3H1.20711L0.707107 18.5L1.20711 18H3H3.20711L3.35355 17.8536L3.70711 17.5ZM3.70711 12.5H4.5V15H3.80902L3.44721 14.2764L3.30902 14H3H1.20711L0.707107 13.5L1.20711 13H3H3.20711L3.35355 12.8536L3.70711 12.5ZM3.70711 7.5H4.5V10H3.80902L3.44721 9.27639L3.30902 9H3H1.20711L0.707107 8.5L1.20711 8H3H3.20711L3.35355 7.85355L3.70711 7.5ZM3.70711 2.5H4.5V5H3.80902L3.44721 4.27639L3.30902 4H3H1.20711L0.707107 3.5L1.20711 3H3H3.20711L3.35355 2.85355L3.70711 2.5ZM17.5 5V2.5H18.7929L19.1464 2.85355L19.2929 3H19.5H21.2929L21.7929 3.5L21.2929 4H19.5H19.191L19.0528 4.27639L18.691 5H17.5ZM17.5 10V7.5H18.7929L19.1464 7.85355L19.2929 8H19.5H21.2929L21.7929 8.5L21.2929 9H19.5H19.191L19.0528 9.27639L18.691 10H17.5ZM17.5 15V12.5H18.7929L19.1464 12.8536L19.2929 13H19.5H21.2929L21.7929 13.5L21.2929 14H19.5H19.191L19.0528 14.2764L18.691 15H17.5ZM17.5 20V17.5H18.7929L19.1464 17.8536L19.2929 18H19.5H21.2929L21.7929 18.5L21.2929 19H19.5H19.191L19.0528 19.2764L18.691 20H17.5ZM12.7213 19.4716C13.1135 19.9945 13.3916 20.699 13.4744 21.5H8.5256C8.6084 20.699 8.88648 19.9945 9.27868 19.4716C9.75054 18.8424 10.3642 18.5 11 18.5C11.6358 18.5 12.2495 18.8424 12.7213 19.4716Z\" stroke=\"black\"></path></svg>',1,0,'2024-01-21 11:13:07',0,'2024-01-21 11:13:07',NULL);

UNLOCK TABLES;

/*Table structure for table `product_infos` */

CREATE TABLE `product_infos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `pro_keywords` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `pro_lot_year` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pro_type_id` int DEFAULT NULL,
  `pro_package_type_id` int DEFAULT NULL,
  `part_id` int unsigned DEFAULT NULL,
  `store_location_id` int DEFAULT NULL,
  `store_bin_number` int unsigned DEFAULT NULL,
  `store_bin_number2` int unsigned DEFAULT NULL,
  `store_organization_id` int DEFAULT NULL,
  `mounting_type_id` int unsigned DEFAULT NULL,
  `available_stock` int DEFAULT '0',
  `low_stock_threshold` int NOT NULL,
  `primary_manufacturer_id` int DEFAULT NULL,
  `manufacturer_part_no` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_id` int unsigned DEFAULT NULL,
  `category_id` int unsigned DEFAULT NULL,
  `sub_category_id` int unsigned DEFAULT NULL,
  `sku` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_endoflife` tinyint(1) NOT NULL DEFAULT '0',
  `barcode_type` enum('C39','C128','EAN13','EAN8','UPCA','UPCE') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'C128',
  `barcode_code` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_private` int DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

/*Data for the table `product_infos` */

LOCK TABLES `product_infos` WRITE;

insert  into `product_infos`(`id`,`product_name`,`pro_description`,`pro_keywords`,`pro_lot_year`,`pro_type_id`,`pro_package_type_id`,`part_id`,`store_location_id`,`store_bin_number`,`store_bin_number2`,`store_organization_id`,`mounting_type_id`,`available_stock`,`low_stock_threshold`,`primary_manufacturer_id`,`manufacturer_part_no`,`brand_id`,`category_id`,`sub_category_id`,`sku`,`is_endoflife`,`barcode_type`,`barcode_code`,`created_by`,`created_at`,`updated_by`,`updated_at`,`is_private`,`deleted_at`) values (85,'S32K314NHT1VPBST','<h3 style=\"-webkit-text-stroke-width:0px;box-sizing:border-box;color:rgb(0, 0, 0);font-family:Poppins, sans-serif;font-size:20px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;letter-spacing:normal;line-height:1.1;margin-bottom:11px;margin-top:0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong>Features</strong></h3><div class=\"features-list toggle-opacity in\" style=\"-webkit-text-stroke-width:0px;box-sizing:border-box;color:rgb(0, 0, 0);font-family:Poppins, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;height:767px;letter-spacing:normal;orphans:2;overflow:hidden;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" id=\"featuresXsp\"><div class=\"features-xsp\" style=\"box-sizing:border-box;\"><div class=\"collapse-mobile ste-list\" style=\"border-style:none;box-sizing:border-box;display:flex;width:1140px;\"><h3 style=\"box-sizing:border-box;color:rgb(0, 0, 0);font-family:Poppins, sans-serif;font-size:16px;line-height:24px;margin-bottom:11px;margin-top:22px;padding-right:1em;width:342px;\"><strong>Scalable single platform</strong></h3><p>&nbsp;</p><ul><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">Single, multiple or lockstep Cortex-M7 cores, 120-240 MHz + FPU</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">512 KB-8 MB Flash with ECC</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">FOTA – A/B firmware swap with zero downtime and roll-back support. Automatic address translation</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">12-bit 1 Msps ADC, 16-bit eMIOS timer with logic control unit for motor control</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">Low-power run and standby modes, fast wake-up, clock and power gating</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">HDQFP and BGA packages</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">AEC-Q100 qualified Grade 1: -40 to 125 ° C</li></ul></div><div class=\"collapse-mobile ste-list\" style=\"border-bottom-style:none;border-image:initial;border-left-style:none;border-right-style:none;border-top:1px solid rgb(212, 207, 197);box-sizing:border-box;display:flex;width:1140px;\"><h3 style=\"box-sizing:border-box;color:rgb(0, 0, 0);font-family:Poppins, sans-serif;font-size:16px;line-height:24px;margin-bottom:11px;margin-top:22px;padding-right:1em;width:342px;\"><strong>Safety, security and connectivity</strong></h3><ul><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">ISO 26262 up to ASIL B/D</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">Fault Collection and Control Unit</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">Hardware and software watchdogs, clock/power/temperature monitors</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">Safety documentation and SafeAssure community support</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">HSE security engine - AES-128/192/256, RSA, ECC, secure boot and key storage; side channel protection; ISO 21434 intended</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">Ethernet TSN/AVB (100 Mbps/1 Gbps), CAN FD, FlexIO (SPI/IIC/IIS/SENT protocol), serial audio interface, QSPI</li></ul></div><div class=\"collapse-mobile ste-list\" style=\"border-bottom-style:none;border-image:initial;border-left-style:none;border-right-style:none;border-top:1px solid rgb(212, 207, 197);box-sizing:border-box;display:flex;width:1140px;\"><h3 style=\"box-sizing:border-box;color:rgb(0, 0, 0);font-family:Poppins, sans-serif;font-size:16px;line-height:24px;margin-bottom:11px;margin-top:22px;padding-right:1em;width:342px;\"><strong>Production-grade software</strong></h3><ul><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">S32 Design Studio IDE – Eclipse, GCC and debugger, 3rd party support</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">Real-Time Drivers – free of charge (AUTOSAR and non-AUTOSAR), ASIL-D compliant</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">Security firmware – NXP provided, field upgradeable</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">S32 Safety Software Framework (SAF) and Structural Core Self-Test (SCST) library</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">Safety Peripheral Drivers</li><li style=\"box-sizing:border-box;margin-bottom:0.5em;\">Model-Based Design Toolbox (MBDT) for MATLAB<sup style=\"box-sizing:border-box;font-size:12.8px;font-weight:300;line-height:0;position:relative;top:-0.4em;vertical-align:baseline;\">®</sup></li><li style=\"box-sizing:border-box;margin-bottom:0px;\">Inter-Platform Communication Framework (IPCF)</li></ul></div></div></div>','Connector,Diode,Fuse','2021',NULL,18,NULL,NULL,NULL,NULL,NULL,2,14,10,NULL,NULL,NULL,11054,NULL,NULL,0,'C128','20240100035',18,'2024-01-21 07:49:12',NULL,'2024-01-22 07:05:03',1,'2024-01-22 07:05:03'),(65,'STM32F103RCT6','<div class=\"tss-1m3o4go-title\" style=\"--tw-shadow:0 0 #0000;-webkit-text-stroke-width:0px;background-color:rgb(245, 245, 245);box-sizing:inherit;color:rgb(34, 34, 34);font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;letter-spacing:normal;line-height:18px;orphans:2;padding:0px 0px 12px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong>Environmental &amp; Export Classifications</strong></div><div class=\"MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1vekb4f\" style=\"--tw-shadow:0 0 #0000;-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);background-image:none;border-radius:4px;border:1px solid rgb(234, 234, 234);box-shadow:rgba(0, 0, 0, 0.1) 0px 4px 16px 0px;box-sizing:inherit;color:rgb(34, 34, 34);font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:10.2857px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;padding:16px 24px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;transition:box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;white-space:normal;widows:2;word-spacing:0px;\"><figure class=\"table\" style=\"width:806.656px;\"><table class=\"tss-1fxx7qx-table-compressed\" style=\"--tw-shadow:0 0 #0000;border-collapse:collapse;box-sizing:inherit;\"><thead class=\"MuiTableHead-root css-1wbz3t9\" style=\"--tw-shadow:0 0 #0000;box-sizing:inherit;display:table-header-group;\"><tr class=\"MuiTableRow-root MuiTableRow-head tss-1yszed6-trHead css-c9pui3\" style=\"--tw-shadow:0 0 #0000;border-left-style:none;border-right-style:none;box-sizing:inherit;color:inherit;display:table-row;outline:0px;padding:4px;vertical-align:middle;\"><th class=\"MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium tss-obbx8q-th css-162sqo8\" style=\"--tw-shadow:0 0 #0000;border-bottom-style:solid;border-bottom-width:1px;border-color:rgb(204, 204, 204);box-sizing:inherit;color:rgb(34, 34, 34);display:table-cell;font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:12px;line-height:18px;padding:5px 51px 5px 5px;text-align:right;text-transform:uppercase;vertical-align:inherit;white-space:nowrap;\" scope=\"col\"><strong>ATTRIBUTE</strong></th><th class=\"MuiTableCell-root MuiTableCell-head MuiTableCell-sizeMedium tss-obbx8q-th css-162sqo8\" style=\"--tw-shadow:0 0 #0000;border-bottom-style:solid;border-bottom-width:1px;border-color:rgb(204, 204, 204);box-sizing:inherit;color:rgb(34, 34, 34);display:table-cell;font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:12px;line-height:18px;padding:5px 51px 5px 5px;text-align:left;text-transform:uppercase;vertical-align:inherit;white-space:nowrap;width:575.625px;\" scope=\"col\"><strong>DESCRIPTION</strong></th></tr></thead><tbody class=\"MuiTableBody-root css-1xnox0e\" style=\"--tw-shadow:0 0 #0000;box-sizing:inherit;display:table-row-group;\"><tr class=\"MuiTableRow-root css-c9pui3\" style=\"--tw-shadow:0 0 #0000;box-sizing:inherit;color:inherit;display:table-row;outline:0px;vertical-align:middle;\"><td class=\"MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium tss-1pxr9n4-td css-4ro0k3\" style=\"--tw-shadow:0 0 #0000;border-bottom-style:solid;border-bottom-width:1px;border-color:rgb(204, 204, 204);box-sizing:inherit;color:rgb(34, 34, 34);display:table-cell;font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:12px;line-height:16px;padding:5px 51px 5px 5px;text-align:right;vertical-align:inherit;white-space:nowrap;\" title=\"\"><strong>RoHS Status</strong></td><td class=\"MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium tss-1pxr9n4-td css-4ro0k3\" style=\"--tw-shadow:0 0 #0000;border-bottom-style:solid;border-bottom-width:1px;border-color:rgb(204, 204, 204);box-sizing:inherit;color:rgb(34, 34, 34);display:table-cell;font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:12px;font-weight:400;line-height:16px;padding:5px 51px 5px 5px;text-align:left;vertical-align:inherit;width:575.625px;\" title=\"\">ROHS3 Compliant</td></tr><tr class=\"MuiTableRow-root css-c9pui3\" style=\"--tw-shadow:0 0 #0000;box-sizing:inherit;color:inherit;display:table-row;outline:0px;vertical-align:middle;\"><td class=\"MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium tss-1pxr9n4-td css-4ro0k3\" style=\"--tw-shadow:0 0 #0000;border-bottom-style:solid;border-bottom-width:1px;border-color:rgb(204, 204, 204);box-sizing:inherit;color:rgb(34, 34, 34);display:table-cell;font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:12px;line-height:16px;padding:5px 51px 5px 5px;text-align:right;vertical-align:inherit;white-space:nowrap;\" title=\"\"><strong>Moisture Sensitivity Level (MSL)</strong></td><td class=\"MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium tss-1pxr9n4-td css-4ro0k3\" style=\"--tw-shadow:0 0 #0000;border-bottom-style:solid;border-bottom-width:1px;border-color:rgb(204, 204, 204);box-sizing:inherit;color:rgb(34, 34, 34);display:table-cell;font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:12px;font-weight:400;line-height:16px;padding:5px 51px 5px 5px;text-align:left;vertical-align:inherit;width:575.625px;\" title=\"\">3 (168 Hours)</td></tr><tr class=\"MuiTableRow-root css-c9pui3\" style=\"--tw-shadow:0 0 #0000;box-sizing:inherit;color:inherit;display:table-row;outline:0px;vertical-align:middle;\"><td class=\"MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium tss-1pxr9n4-td css-4ro0k3\" style=\"--tw-shadow:0 0 #0000;border-bottom-style:solid;border-bottom-width:1px;border-color:rgb(204, 204, 204);box-sizing:inherit;color:rgb(34, 34, 34);display:table-cell;font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:12px;line-height:16px;padding:5px 51px 5px 5px;text-align:right;vertical-align:inherit;white-space:nowrap;\" title=\"\"><strong>REACH Status</strong></td><td class=\"MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium tss-1pxr9n4-td css-4ro0k3\" style=\"--tw-shadow:0 0 #0000;border-bottom-style:solid;border-bottom-width:1px;border-color:rgb(204, 204, 204);box-sizing:inherit;color:rgb(34, 34, 34);display:table-cell;font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:12px;font-weight:400;line-height:16px;padding:5px 51px 5px 5px;text-align:left;vertical-align:inherit;width:575.625px;\" title=\"\">REACH Unaffected</td></tr><tr class=\"MuiTableRow-root css-c9pui3\" style=\"--tw-shadow:0 0 #0000;box-sizing:inherit;color:inherit;display:table-row;outline:0px;vertical-align:middle;\"><td class=\"MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium tss-1pxr9n4-td css-4ro0k3\" style=\"--tw-shadow:0 0 #0000;border-bottom-style:solid;border-bottom-width:1px;border-color:rgb(204, 204, 204);box-sizing:inherit;color:rgb(34, 34, 34);display:table-cell;font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:12px;line-height:16px;padding:5px 51px 5px 5px;text-align:right;vertical-align:inherit;white-space:nowrap;\" title=\"\"><strong>ECCN</strong></td><td class=\"MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium tss-1pxr9n4-td css-4ro0k3\" style=\"--tw-shadow:0 0 #0000;border-bottom-style:solid;border-bottom-width:1px;border-color:rgb(204, 204, 204);box-sizing:inherit;color:rgb(34, 34, 34);display:table-cell;font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:12px;font-weight:400;line-height:16px;padding:5px 51px 5px 5px;text-align:left;vertical-align:inherit;width:575.625px;\" title=\"\">3A991A2</td></tr><tr class=\"MuiTableRow-root css-c9pui3\" style=\"--tw-shadow:0 0 #0000;box-sizing:inherit;color:inherit;display:table-row;outline:0px;vertical-align:middle;\"><td class=\"MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium tss-1pxr9n4-td css-4ro0k3\" style=\"--tw-shadow:0 0 #0000;border-bottom-style:solid;border-bottom-width:1px;border-color:rgb(204, 204, 204);box-sizing:inherit;color:rgb(34, 34, 34);display:table-cell;font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:12px;line-height:16px;padding:5px 51px 5px 5px;text-align:right;vertical-align:inherit;white-space:nowrap;\" title=\"\"><strong>HTSUS</strong></td><td class=\"MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium tss-1pxr9n4-td css-4ro0k3\" style=\"--tw-shadow:0 0 #0000;border-bottom-style:solid;border-bottom-width:1px;border-color:rgb(204, 204, 204);box-sizing:inherit;color:rgb(34, 34, 34);display:table-cell;font-family:Roboto, &quot;Noto Sans&quot;, Arial, Helvetica, sans-serif, dk;font-size:12px;font-weight:400;line-height:16px;padding:5px 51px 5px 5px;text-align:left;vertical-align:inherit;width:575.625px;\" title=\"\">8542.31.0001</td></tr></tbody></table></figure></div>','Diode,Inductor,Capacitor,Fuse,Potentiometer,Resistor,LED,Transistor,Connector,Relay','2024',NULL,19,NULL,NULL,NULL,NULL,NULL,1,0,10,NULL,NULL,NULL,11046,NULL,NULL,0,'C128','20240100034',18,'2024-01-15 14:13:23',NULL,'2024-01-21 11:42:32',0,NULL),(87,'5V 5-Pin Relay','<h3 style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(17, 17, 17);font-family:-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:500;letter-spacing:normal;line-height:28px;margin-bottom:11.5px;margin-top:11.5px;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong style=\"box-sizing:border-box;\">Features of 5-Pin 5V Relay</strong></h3><ul><li style=\"box-sizing:border-box;font-size:16px;font-weight:400;list-style:disc;\">Trigger Voltage (Voltage across coil) : 5V DC</li><li style=\"box-sizing:border-box;font-size:16px;font-weight:400;list-style:disc;\">Trigger Current (Nominal current) : 70mA</li><li style=\"box-sizing:border-box;font-size:16px;font-weight:400;list-style:disc;\">Maximum AC load current: 10A @ 250/125V AC</li><li style=\"box-sizing:border-box;font-size:16px;font-weight:400;list-style:disc;\">Maximum DC load current: 10A @ 30/28V DC</li><li style=\"box-sizing:border-box;font-size:16px;font-weight:400;list-style:disc;\">Compact 5-pin configuration with plastic moulding</li><li style=\"box-sizing:border-box;font-size:16px;font-weight:400;list-style:disc;\">Operating time: 10msec Release time: 5msec</li><li style=\"box-sizing:border-box;font-size:16px;font-weight:400;list-style:disc;\">Maximum switching: 300 operating/minute (mechanically)</li></ul><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(48, 48, 48);font-family:-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:30px;margin:6px 0px 10px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">&nbsp;</p><h3 style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(17, 17, 17);font-family:-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:500;letter-spacing:normal;line-height:28px;margin-bottom:11.5px;margin-top:11.5px;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><strong style=\"box-sizing:border-box;\">Equivalent Relays</strong></h3><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(48, 48, 48);font-family:-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:30px;margin:6px 0px 10px;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">3V Relay, <a style=\"background-color:transparent;box-sizing:border-box;color:rgb(198, 32, 32);text-decoration:none;\" href=\"https://components101.com/switches/12v-relay\">12V Relay</a>, 1-channel Relay module, <a style=\"background-color:transparent;box-sizing:border-box;color:rgb(198, 32, 32);text-decoration:none;\" href=\"https://components101.com/switches/5v-four-channel-relay-module-pinout-features-applications-working-datasheet\">4-channel Relay Module</a>.</p>','Relay','2024',NULL,16,NULL,NULL,NULL,NULL,NULL,1,42,10,NULL,NULL,NULL,11053,NULL,NULL,0,'C128','20240100036',18,'2024-01-21 08:14:55',NULL,'2024-01-21 11:20:33',0,NULL),(88,'S32K314NHT1VPBST','<p>S32K3 VALUE PROPOSITION FOR MOTOR CONTROL SCALABLE MCU PLATFORM • Hardware- and Software- compatible MCU family • 120 – 240 MHz Arm Cortex-M7 core • Flash memory: from 512 KB up to 8 MB • MAPBGA, MaxQFP packages, from 48 to 289 pin count • CAN FD, FlexIO, QSPI, Ethernet and serial audio interfaces • AEC-Q100 qualified: Grade 1 (-40° C to +125° C) Grade 2 (-40° C to +105° C) • Functional Safety compliant: ISO 26262 up to ASIL D • Hardware Security Engine (HSE): AES-128/192/256, RSA and ECC encryption, ISO 21434 intended MOTOR CONTROL COVERAGE • Engineered tools for 3-phase PMSM and 3-phase BLDC motor control targeting body and chassis • Dedicated peripherals set for rapid motor control loop implementation: enhanced Modular IO Subsystem (eMIOS), Logic Control Unit (LCU), TRGMUX, Body Cross-triggering Unit (BCTU), Analog to Digital Converter (ADC), and Analog Comparator (CMP) COMPREHENSIVE MOTOR CONTROL ECOSYSTEM • Diverse hardware solutions supporting motor control applications • S32K3 software ecosystem with production-ready algorithm library: – Automotive Math and Motor Control Library (AMMCLib) set – FreeMASTER and Motor Control Application Tuning (MCAT) tool – Model-Based Design Toolbox (MBDT) • Dedicated technical support and online community</p>','Connector,Diode,Inductor','2019',NULL,16,NULL,NULL,NULL,NULL,NULL,3,10,10,NULL,NULL,NULL,11046,NULL,NULL,0,'C128','20240100037',18,'2024-01-21 08:32:51',NULL,'2024-01-21 10:33:44',1,NULL),(89,'S9S08SG32E1CTGR','<p>Rev. 9 of the MC9S08SG32 data sheet (covering MC9S08SG32 and MC9S08SG16) has three parts: • The revision 2 addendum to revision 8.1 of the data sheet, immediately following this cover page. • The revision 1 addendum to revision 8 of the data sheet. • Revision 8 of the data sheet, following the addendums. The changes described in the addendums have not been implemented in the specified pages.</p>','Capacitor,Connector','2019',NULL,17,NULL,NULL,NULL,NULL,NULL,3,14,10,NULL,NULL,NULL,11046,NULL,NULL,0,'C128','20240100038',18,'2024-01-21 09:21:33',NULL,'2024-01-21 11:15:10',0,NULL),(90,'New test',NULL,NULL,'2024',NULL,17,NULL,NULL,NULL,NULL,NULL,2,NULL,10,NULL,NULL,NULL,11047,NULL,NULL,0,'C128','20240100039',18,'2024-01-22 05:46:23',NULL,'2024-01-22 10:22:07',0,'2024-01-22 10:22:07');

UNLOCK TABLES;

/*Table structure for table `product_media_infos` */

CREATE TABLE `product_media_infos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL DEFAULT '0',
  `media_type` enum('pdf','image','zip','rar','step','pdif') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `parameter_name` text,
  `media_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '',
  `media_url` varchar(200) NOT NULL DEFAULT '',
  `order_index` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=205 DEFAULT CHARSET=utf8mb3;

/*Data for the table `product_media_infos` */

LOCK TABLES `product_media_infos` WRITE;

insert  into `product_media_infos`(`id`,`product_id`,`media_type`,`parameter_name`,`media_title`,`media_url`,`order_index`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (202,89,'image','89_1705906425_Relay-dimensions.png','datasheet','uploads/products/image',7,1,18,'2024-01-22 12:53:51',NULL,NULL),(203,89,'image','89_1705906425_Relay-2D-model.png','pdf3','uploads/products/image',8,1,18,'2024-01-22 12:53:51',NULL,NULL),(204,89,'image','89_1705906425_png-clipart-transistor-microcontroller-electronic-component-integrated-circuits-chips-shift-register-others-electronics-microcontroller-thumbnail.png','img4','uploads/products/image',9,1,18,'2024-01-22 12:53:51',NULL,NULL),(201,89,'image','89_1705906425_Microcontrollers_1705836418.png','data','uploads/products/image',6,1,18,'2024-01-22 12:53:51',NULL,NULL),(198,89,'zip','89_1705906033_51_1705569043_test.zip','datasheet','uploads/products/zip',3,1,18,'2024-01-22 12:47:19',NULL,NULL),(199,89,'pdf','89_1705906033_5V_Relay_Datasheet.pdf','pdf','uploads/products/pdf',4,1,18,'2024-01-22 12:47:19',NULL,NULL),(200,89,'image','89_1705906272_Relay-Pinout.png','new image','uploads/products/image',5,1,18,'2024-01-22 12:51:18',NULL,NULL),(188,88,'image','88_1705826533_S32K324NHT1MPBST.png','First Image','uploads/products/image',1,1,8,'2024-01-21 14:42:13',NULL,NULL),(189,88,'image','88_1705826533_images.jpg','Second Image','uploads/products/image',2,1,8,'2024-01-21 14:42:13',NULL,NULL),(190,88,'image','88_1705826533_download.jpg','Third Image','uploads/products/image',3,1,8,'2024-01-21 14:42:13',NULL,NULL),(191,89,'image','89_1705829430_images.jpg','MC9S08SG32','uploads/products/image',1,1,8,'2024-01-21 15:30:30',NULL,'2024-01-21 09:31:22'),(193,87,'image','87_1705835894_Relay-dimensions.png','2D model of the Relay','uploads/products/image',1,1,18,'2024-01-21 17:18:14',NULL,NULL),(192,89,'pdf','89_1705829430_S32K314NHT1VPBST_NXP_Semiconductors.pdf','S9S08SG32E1CTGR','uploads/products/pdf',2,1,8,'2024-01-21 15:30:30',NULL,NULL),(194,87,'image','87_1705835894_Relay-2D-model.png','2D model of the Relay-2','uploads/products/image',2,1,18,'2024-01-21 17:18:14',NULL,NULL),(197,87,'pdf','87_1705837653_5V_Relay_Datasheet.pdf','Datasheet','uploads/products/pdf',3,1,18,'2024-01-21 17:47:33',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `product_metadata_infos` */

CREATE TABLE `product_metadata_infos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL DEFAULT '0',
  `currency_id` int DEFAULT NULL,
  `cost` float DEFAULT NULL,
  `manufacture_id` int DEFAULT '0',
  `manufacture_part_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '',
  `primary_url` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `model_3d_url` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `metadata_keywords` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `remarks` text,
  `additionalLinks` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `order_index` int DEFAULT '0',
  `is_active` tinyint(1) DEFAULT '1',
  `created_by` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb3;

/*Data for the table `product_metadata_infos` */

LOCK TABLES `product_metadata_infos` WRITE;

insert  into `product_metadata_infos`(`id`,`product_id`,`currency_id`,`cost`,`manufacture_id`,`manufacture_part_name`,`primary_url`,`model_3d_url`,`metadata_keywords`,`remarks`,`additionalLinks`,`order_index`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (36,56,2,200,2,'LM54','https://laravel.com/docs/10.x/eloquent','https://3d.laravel.com/docs/10.x/eloquent','Fuse,Potentiometer,Inductor','<p><strong>Features</strong><o:p></o:p></p><p>• Core: Arm® 32-bit Cortex®-M3 CPU<o:p></o:p></p><p>– 72 MHz maximum frequency, 1.25 DMIPS/MHz&nbsp;<o:p></o:p></p><p>(Dhrystone 2.1) performance at 0 wait state&nbsp;<o:p></o:p></p><p>memory access<o:p></o:p></p><p>– Single-cycle multiplication and hardware&nbsp;<o:p></o:p></p><p>division<o:p></o:p></p><p>•&nbsp;<o:p></o:p></p>','[\n    {\n        \"title\": \"iPhone 13\",\n        \"link\": \"https:\\/\\/www.cloudways.com\\/blog\\/affiliate-products-to-sell\\/#virtual-reality\"\n    },\n    {\n        \"title\": \"Dell XPS 13\",\n        \"link\": \"https:\\/\\/affilimate.com\\/\"\n    },\n    {\n        \"title\": \"Samsung QLED Q60A\",\n        \"link\": \"https:\\/\\/www.quora.com\\/What-is-the-best-site-to-promote-your-affiliate-link-for-free\"\n    },\n    {\n        \"title\": \"Sony Alpha a7 III\",\n        \"link\": \"https:\\/\\/affilimate.com\\/blog\\/promote-affiliate-links\\/#how-affiliate-links-work\"\n    }\n]',0,1,0,'2024-01-14 13:24:24',NULL,'2024-01-16 10:25:22'),(25,47,2,23.25,2,'2352345','dggdgdf','ertgwewert',NULL,'<p>dfgfsfbggfds</p><p>dsfd</p><p>dg</p><p>fd</p><p>ff</p><p>f</p><p>gf</p><p>fs</p><p>g</p><p>fg</p><p>g</p><p>&nbsp;</p><p>gr</p><p>&nbsp;</p>','',0,1,0,'2024-01-11 11:29:50',NULL,'2024-01-15 09:54:34'),(26,55,2,1231,1,'part','wrwr','pp',NULL,NULL,NULL,0,1,0,'2024-01-11 11:31:26',NULL,'2024-01-11 11:31:26'),(29,52,1,3,1,NULL,NULL,NULL,NULL,NULL,NULL,0,1,0,'2024-01-11 11:38:50',NULL,'2024-01-11 11:38:50'),(34,54,2,202,1,NULL,NULL,NULL,NULL,NULL,NULL,0,1,0,'2024-01-14 11:42:54',NULL,'2024-01-14 11:48:36'),(35,46,2,12345,2,NULL,'wer',NULL,'Connector,Fuse,Inductor,Relay','qwef','[\n    {\n        \"title\": \"12312\",\n        \"link\": \"esfsad\"\n    },\n    {\n        \"title\": \"fes\",\n        \"link\": \"asdfsd\"\n    },\n    {\n        \"title\": \"sfasdf\",\n        \"link\": \"asfasf\"\n    },\n    {\n        \"title\": \"111111\",\n        \"link\": \"22222\"\n    }\n]',0,1,0,'2024-01-14 12:02:07',NULL,'2024-01-14 13:22:40'),(33,53,1,123,2,'gdgdfg12312','123adasdasd','asfasdasdasd',NULL,'asdadsadasdad',NULL,0,1,0,'2024-01-11 12:14:54',NULL,'2024-01-11 12:14:54'),(40,62,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',0,1,0,'2024-01-15 14:08:15',NULL,'2024-01-15 14:08:15'),(41,65,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',0,1,0,'2024-01-15 17:48:44',NULL,'2024-01-15 17:48:44'),(42,73,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',0,1,0,'2024-01-16 05:54:50',NULL,'2024-01-16 05:54:50'),(43,74,1,33,2,NULL,NULL,NULL,'Resistor','<p>6565</p><p>&nbsp;</p><p><strong>jlkjnlnl</strong></p>','',0,1,0,'2024-01-16 06:05:19',NULL,'2024-01-16 06:07:56'),(37,48,1,1452,1,'asdasd','jhghgf','gfgj','Connector,Fuse,Inductor,LED','<p style=\"text-align:right;\">asdasdasdasd<strong>adsasd</strong></p>','[\n    {\n        \"title\": \"asdfghj\",\n        \"link\": \"sdfghj\"\n    },\n    {\n        \"title\": \"kjhgf\",\n        \"link\": \"sdfghj\"\n    }\n]',0,1,0,'2024-01-14 15:13:51',NULL,'2024-01-16 07:39:29'),(38,41,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',0,1,0,'2024-01-15 06:11:00',NULL,'2024-01-15 06:11:00'),(39,51,1,NULL,NULL,NULL,NULL,NULL,'LED,Relay',NULL,'',0,1,0,'2024-01-15 12:19:43',NULL,'2024-01-16 11:42:44'),(44,78,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',0,1,0,'2024-01-16 12:26:31',NULL,'2024-01-16 12:26:31'),(45,77,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',0,1,0,'2024-01-16 12:26:36',NULL,'2024-01-16 12:26:36'),(46,76,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',0,1,0,'2024-01-16 12:26:41',NULL,'2024-01-16 12:26:41'),(47,68,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',0,1,0,'2024-01-16 12:29:10',NULL,'2024-01-16 12:29:10'),(48,61,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',0,1,0,'2024-01-16 12:29:46',NULL,'2024-01-16 12:29:46'),(49,67,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',0,1,0,'2024-01-16 12:30:02',NULL,'2024-01-16 12:30:02'),(50,60,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',0,1,0,'2024-01-16 12:30:20',NULL,'2024-01-16 12:30:20'),(51,79,1,NULL,2,'LM5445','Mainstream Performance','https://www.st.com/en/microcontrollers-microprocessors/stm32f103rc.html',NULL,NULL,'[\n    {\n        \"title\": \"Performance\",\n        \"link\": \"https:\\/\\/www.mouser.com\\/ProductDetail\\/STMicroelectronics\\/STM32F103RCT6?qs=%252BB84zevwoRA6TYzZIgOIoA%3D%3D\"\n    },\n    {\n        \"title\": \"p\",\n        \"link\": null\n    }\n]',0,1,0,'2024-01-16 14:41:56',NULL,'2024-01-18 04:59:41'),(52,80,1,1231,1,'asdasd','asasd','asd','Capacitor,Diode,LED,Potentiometer','<p>asdasdadasdads</p>','[\n    {\n        \"title\": \"asdasd\",\n        \"link\": \"asdasd\"\n    }\n]',0,1,0,'2024-01-18 05:02:55',NULL,'2024-01-18 07:46:05'),(53,66,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',0,1,0,'2024-01-18 06:09:59',NULL,'2024-01-18 06:09:59'),(54,89,1,567,12,'khu','https://components101.com/switches/5v-relay-pinout-working-datasheet','www.google.com','Connector','<p><em style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(95, 99, 104);font-family:arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><i><strong>S9S08SG32E1CTGR</strong></i></em><span style=\"background-color:rgb(255,255,255);color:rgb(77,81,86);font-family:arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">. (935313991534). No. 3. 260. 40. Shipping. Part/12NC, Harmonized ... </span></span><em style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);color:rgb(95, 99, 104);font-family:arial, sans-serif;font-size:14px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><i><strong>S9S08SG32E1CTGR</strong></i></em><span style=\"background-color:rgb(255,255,255);color:rgb(77,81,86);font-family:arial, sans-serif;font-size:14px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">. (935313991534). 2020-12-15, 2020-12-16, 202011011I, NXP Will&nbsp;...</span></span></p>','[\n    {\n        \"title\": \"Datasheets\",\n        \"link\": \"https:\\/\\/www.snapeda.com\\/parts\\/S32K324NHT1MPBST\\/NXP%20Semiconductors\\/view-part\\/?ref=nxp_in&t=STM32&con_ref=None\"\n    },\n    {\n        \"title\": \"Buying Link\",\n        \"link\": \"https:\\/\\/analytics.oemsecrets.com\\/main.php?p=5V&m=Mallory&q=0&n=Onlinecomponents.com&table=api&media=buynow&source=components101&event_link=https%3A%2F%2Fwww.onlinecomponents.com%2Fen%2Fmallory-sonalert%2F5v-57144832.html%3Futm_source%3Doemsecrets%26utm_medium%3Dreferral%26utm_campaign%3Doemsecrets%26utm_content%3Doutofstock\"\n    }\n]',0,1,0,'2024-01-21 13:43:46',NULL,'2024-01-22 06:51:12');

UNLOCK TABLES;

/*Table structure for table `product_packages` */

CREATE TABLE `product_packages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `package_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `slug` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3;

/*Data for the table `product_packages` */

LOCK TABLES `product_packages` WRITE;

insert  into `product_packages`(`id`,`package_name`,`slug`,`remarks`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_at`) values (1,'LQFP64',NULL,NULL,1,0,'2024-01-14 11:41:31',0,NULL,NULL),(2,'LQFGH7',NULL,NULL,1,6,'2024-01-15 13:24:03',0,'2024-01-15 13:35:16',NULL),(3,'PHFG76',NULL,NULL,0,1,'2024-01-16 04:28:06',0,'2024-01-16 04:28:06',NULL),(4,'LDHGH87',NULL,NULL,1,1,'2024-01-16 04:28:41',0,'2024-01-16 04:28:41',NULL),(5,'DHJH90',NULL,NULL,1,1,'2024-01-16 04:32:51',0,'2024-01-21 07:20:47','2024-01-21 07:20:47'),(6,'LKDGYT',NULL,NULL,1,1,'2024-01-16 04:33:30',0,'2024-01-16 04:33:30',NULL),(7,'NHDGYT',NULL,NULL,1,1,'2024-01-16 04:34:38',0,'2024-01-16 04:34:38',NULL),(8,'DJDGSH56','new-5',NULL,1,1,'2024-01-16 04:46:26',0,'2024-01-16 04:46:26',NULL),(9,'DJDGDJ7','new-7',NULL,1,1,'2024-01-16 04:50:17',0,'2024-01-16 04:50:17',NULL),(10,'DJDHGDH9','te-1',NULL,1,1,'2024-01-16 05:55:22',0,'2024-01-16 05:55:22',NULL),(11,'DJDJ','mifb',NULL,1,1,'2024-01-16 05:56:37',0,'2024-01-16 05:56:37',NULL),(12,'DJDHGD','31',NULL,1,1,'2024-01-16 06:02:50',0,'2024-01-16 06:02:50',NULL),(13,'LDHFB76','ldhfb76',NULL,1,1,'2024-01-16 14:07:36',0,'2024-01-16 14:07:36',NULL),(14,'LDJFVVD','ldjfvvd',NULL,1,1,'2024-01-16 14:37:21',0,'2024-01-16 14:37:21',NULL),(15,'DFSADWS','dfsadws',NULL,1,18,'2024-01-21 07:48:53',0,'2024-01-21 07:48:53',NULL),(16,'172-QFP','172-qfp',NULL,1,8,'2024-01-21 08:26:12',0,'2024-01-21 08:26:12',NULL),(17,'IC 8-Bit','ic-8-bit',NULL,1,8,'2024-01-21 09:20:40',0,'2024-01-21 09:20:40',NULL),(18,'S32K344','s32k344',NULL,1,18,'2024-01-21 11:24:15',0,'2024-01-21 11:24:15',NULL),(19,'STM32F1','stm32f1',NULL,1,18,'2024-01-21 11:41:59',0,'2024-01-21 11:41:59',NULL);

UNLOCK TABLES;

/*Table structure for table `product_store` */

CREATE TABLE `product_store` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `procurement_id` int NOT NULL DEFAULT '0',
  `product_id` int NOT NULL DEFAULT '0',
  `store_id` int NOT NULL DEFAULT '0',
  `rack_id` int NOT NULL DEFAULT '0',
  `rack_qty` int NOT NULL DEFAULT '0',
  `track_id` varchar(15) DEFAULT NULL,
  `remarks` varchar(250) DEFAULT NULL,
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

/*Data for the table `product_store` */

LOCK TABLES `product_store` WRITE;

UNLOCK TABLES;

/*Table structure for table `product_store_infos` */

CREATE TABLE `product_store_infos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `procurement_id` bigint DEFAULT '0',
  `product_id` bigint DEFAULT NULL,
  `store_id` bigint DEFAULT NULL,
  `rack_id` bigint DEFAULT NULL,
  `rack_binno_id` bigint DEFAULT NULL,
  `rack_binno_qty` bigint DEFAULT '0',
  `remarks` varchar(250) DEFAULT NULL,
  `created_by` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3;

/*Data for the table `product_store_infos` */

LOCK TABLES `product_store_infos` WRITE;

insert  into `product_store_infos`(`id`,`procurement_id`,`product_id`,`store_id`,`rack_id`,`rack_binno_id`,`rack_binno_qty`,`remarks`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (21,0,79,2,4,4,0,NULL,0,'2024-01-18 18:01:27',NULL,NULL),(20,0,79,1,2,6,0,NULL,0,'2024-01-18 18:01:27',NULL,NULL),(29,0,89,2,3,3,0,NULL,0,'2024-01-22 12:53:51',NULL,NULL),(28,0,89,1,1,1,0,NULL,0,'2024-01-22 12:53:51',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `product_transactions` */

CREATE TABLE `product_transactions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `stock_in_qty` int DEFAULT NULL,
  `stock_out_qty` int DEFAULT NULL,
  `supplier_id` int DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `stock_in_price` double DEFAULT NULL,
  `stock_in_currency_id` int DEFAULT NULL,
  `stock_out_price` double DEFAULT NULL,
  `stock_out_currency_id` int DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `vat` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `remakes` varchar(200) DEFAULT NULL,
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

/*Data for the table `product_transactions` */

LOCK TABLES `product_transactions` WRITE;

UNLOCK TABLES;

/*Table structure for table `product_types` */

CREATE TABLE `product_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `slug` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

/*Data for the table `product_types` */

LOCK TABLES `product_types` WRITE;

UNLOCK TABLES;

/*Table structure for table `roles` */

CREATE TABLE `roles` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` enum('admin','readonly','productentry','stockin','stockout','stockindraft','stockoutdraft') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `module_id` int DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

/*Data for the table `roles` */

LOCK TABLES `roles` WRITE;

insert  into `roles`(`id`,`name`,`module_id`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,'admin',NULL,1,0,'2024-01-03 16:32:12',NULL,NULL),(2,'readonly',NULL,1,0,'2024-01-10 09:58:28',NULL,'2024-01-10 09:58:28'),(3,'stockin',NULL,1,6,'2024-01-10 10:01:24',NULL,'2024-01-10 10:01:24'),(6,'productentry',NULL,1,11,'2024-01-11 14:30:50',NULL,'2024-01-11 14:30:50');

UNLOCK TABLES;

/*Table structure for table `roles_permissions` */

CREATE TABLE `roles_permissions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `role_id` int NOT NULL,
  `permission_id` int NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `roles_permissions` */

LOCK TABLES `roles_permissions` WRITE;

insert  into `roles_permissions`(`id`,`role_id`,`permission_id`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,1,1,NULL,NULL,NULL,NULL),(2,1,2,NULL,NULL,NULL,NULL),(3,1,3,NULL,NULL,NULL,NULL),(4,1,4,NULL,NULL,NULL,NULL),(5,1,5,NULL,NULL,NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `stock_defination` */

CREATE TABLE `stock_defination` (
  `id` int NOT NULL AUTO_INCREMENT,
  `defination_desc` varchar(100) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

/*Data for the table `stock_defination` */

LOCK TABLES `stock_defination` WRITE;

insert  into `stock_defination`(`id`,`defination_desc`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,'Purchase',1,0,'2024-01-03 13:39:57',0,NULL),(2,'Damage',1,0,'2024-01-03 13:40:03',0,NULL),(3,'Return',1,0,'2024-01-03 13:40:08',0,NULL),(4,'Production',1,0,'2024-01-03 13:40:13',0,NULL),(5,'RND',1,0,'2024-01-03 13:40:19',0,NULL),(6,'Rack Shift',1,0,'2024-01-03 13:40:25',0,NULL),(7,'Sales',1,0,'2024-01-03 13:40:27',0,NULL);

UNLOCK TABLES;

/*Table structure for table `stock_details` */

CREATE TABLE `stock_details` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `pro_id` int NOT NULL DEFAULT '0',
  `procurment_id` int NOT NULL DEFAULT '0',
  `client_id` int NOT NULL DEFAULT '0',
  `manufacture_id` int NOT NULL DEFAULT '0',
  `manufacture_pro_id` int NOT NULL DEFAULT '0',
  `worker_id` int NOT NULL DEFAULT '0',
  `track_id` varchar(15) DEFAULT NULL,
  `stock_in` int NOT NULL DEFAULT '0',
  `stock_out` int NOT NULL DEFAULT '0',
  `date_time` datetime DEFAULT NULL,
  `stock_in_price` double DEFAULT NULL,
  `stock_in_currency_id` int NOT NULL DEFAULT '0',
  `stock_out_price` double DEFAULT NULL,
  `stock_out_currency_id` int NOT NULL DEFAULT '0',
  `is_stock` tinyint(1) NOT NULL DEFAULT '0',
  `stock_defination_id` int NOT NULL DEFAULT '0',
  `supplier_id` int NOT NULL DEFAULT '0',
  `remarks` varchar(250) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

/*Data for the table `stock_details` */

LOCK TABLES `stock_details` WRITE;

UNLOCK TABLES;

/*Table structure for table `store_infos` */

CREATE TABLE `store_infos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `store_code` varchar(30) NOT NULL,
  `store_type` int NOT NULL,
  `store_location` varchar(100) NOT NULL,
  `store_details` varchar(150) NOT NULL,
  `store_incharge` int DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

/*Data for the table `store_infos` */

LOCK TABLES `store_infos` WRITE;

insert  into `store_infos`(`id`,`store_code`,`store_type`,`store_location`,`store_details`,`store_incharge`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,'Nexdecade',1,'Panthapath',' ',1,1,0,'2024-01-18 12:25:02',0,NULL),(2,'M2M',1,'Panthapath',' ',1,1,0,'2024-01-18 13:45:29',0,NULL);

UNLOCK TABLES;

/*Table structure for table `store_rack_binno_infos` */

CREATE TABLE `store_rack_binno_infos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `store_id` bigint NOT NULL,
  `rack_id` bigint NOT NULL,
  `bin_number` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

/*Data for the table `store_rack_binno_infos` */

LOCK TABLES `store_rack_binno_infos` WRITE;

insert  into `store_rack_binno_infos`(`id`,`store_id`,`rack_id`,`bin_number`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,1,1,'Bnin-1',1,0,'2024-01-18 13:51:52',NULL,NULL),(2,1,1,'Bin-2',1,0,'2024-01-18 13:52:07',NULL,NULL),(3,2,3,'Bin C',1,0,'2024-01-18 13:52:17',NULL,NULL),(4,2,4,'Bin-21',1,0,'2024-01-18 13:51:52',NULL,NULL),(5,2,2,'Bin-2JH',1,0,'2024-01-18 13:51:52',NULL,NULL),(6,2,2,'Bin-2H',1,0,'2024-01-18 13:51:52',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `store_rack_info` */

CREATE TABLE `store_rack_info` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `store_id` int DEFAULT NULL,
  `rack_code` varchar(30) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

/*Data for the table `store_rack_info` */

LOCK TABLES `store_rack_info` WRITE;

insert  into `store_rack_info`(`id`,`store_id`,`rack_code`,`remarks`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,1,'Rack A',NULL,1,0,'2024-01-18 12:55:11',NULL,NULL),(2,1,'Rack B',NULL,1,0,'2024-01-18 13:40:31',NULL,NULL),(3,2,'Rack 2C',NULL,1,0,'2024-01-18 13:40:50',NULL,NULL),(4,2,'Rack 2D',NULL,1,0,'2024-01-18 13:40:50',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `store_types` */

CREATE TABLE `store_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type_desc` varchar(30) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

/*Data for the table `store_types` */

LOCK TABLES `store_types` WRITE;

insert  into `store_types`(`id`,`type_desc`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,'RACK',1,0,'2024-01-03 13:48:14',0,NULL),(2,'Almira',1,0,'2024-01-03 13:48:19',0,NULL),(3,'RND Wall Rack',1,0,'2024-01-03 13:48:21',0,NULL);

UNLOCK TABLES;

/*Table structure for table `supplier_categories` */

CREATE TABLE `supplier_categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type_desc` varchar(100) NOT NULL DEFAULT 'n/a',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

/*Data for the table `supplier_categories` */

LOCK TABLES `supplier_categories` WRITE;

insert  into `supplier_categories`(`id`,`type_desc`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,'China',1,0,'2024-01-03 13:21:28',NULL,NULL),(2,'Japan',1,0,'2024-01-03 13:21:33',NULL,NULL),(3,'Bangladesh',1,0,'2024-01-03 13:21:36',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `supplier_infos` */

CREATE TABLE `supplier_infos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(200) DEFAULT NULL,
  `supp_cat_id` varchar(100) DEFAULT NULL,
  `supp_type` enum('L','F') DEFAULT 'L' COMMENT 'L=Local, F= Foreign',
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip_code` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `remarks` varchar(250) DEFAULT NULL,
  `pho_1` varchar(30) DEFAULT NULL,
  `cell_1` varchar(50) DEFAULT NULL,
  `whatsapp_num` varchar(50) DEFAULT NULL,
  `web_mail` varchar(100) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `web_url` varchar(100) DEFAULT NULL,
  `wechaturl` varchar(300) DEFAULT NULL,
  `qqurl` varchar(300) DEFAULT NULL,
  `facebookurl` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `instagramurl` varchar(300) DEFAULT NULL,
  `twitterurl` varchar(300) DEFAULT NULL,
  `linkedinurl` varchar(300) DEFAULT NULL,
  `telegramurl` varchar(300) DEFAULT NULL,
  `snapchaturl` varchar(300) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb3;

/*Data for the table `supplier_infos` */

LOCK TABLES `supplier_infos` WRITE;

insert  into `supplier_infos`(`id`,`full_name`,`supp_cat_id`,`supp_type`,`country`,`city`,`zip_code`,`address`,`remarks`,`pho_1`,`cell_1`,`whatsapp_num`,`web_mail`,`fax`,`web_url`,`wechaturl`,`qqurl`,`facebookurl`,`instagramurl`,`twitterurl`,`linkedinurl`,`telegramurl`,`snapchaturl`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`,`deleted_at`) values (35,'Anna Nex',NULL,'L','China','Florida','5428','Florida, usa, 7741','This is Anna','01777366958','01777366959','01777366958','anna@gmail.com','anna2024','https://www.efax.com/features/local-fax-number','https://www.efax.com/features/local-fax-number','https://www.efax.com/features/local-fax-number','https://www.efax.com/features/local-fax-number','https://www.efax.com/features/local-fax-number','https://www.efax.com/features/local-fax-number','https://www.efax.com/features/local-fax-number','https://www.efax.com/features/local-fax-number','https://www.efax.com/features/local-fax-number',1,18,'2024-01-20 07:01:48',NULL,'2024-01-20 19:04:38',NULL),(32,'Crox Developer',NULL,'F','India','Barishal','1254','Savar, Dhaka',NULL,'+8801785893609',NULL,NULL,'joy.diu.cse@gmail.com',NULL,NULL,NULL,'sfsdf',NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2024-01-16 13:56:07',NULL,'2024-01-21 07:04:06',NULL),(31,'Juel Rana',NULL,'L','','',NULL,NULL,NULL,'01777366978',NULL,NULL,'juel@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2024-01-16 13:10:19',NULL,'2024-01-16 13:10:19',NULL),(23,'electronic',NULL,NULL,'Bangladesh','Dhaka',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,15,'2024-01-15 06:22:53',NULL,'2024-01-20 17:46:05','2024-01-20 17:46:05'),(24,'Rokon Zaman',NULL,NULL,'Bangladesh','Dhaka','1230',NULL,NULL,'01777366927',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,15,'2024-01-15 06:23:13',NULL,'2024-01-20 18:07:36','2024-01-20 18:07:36'),(30,'tazul islam',NULL,NULL,'Bangladesh','Dhaka','1230',NULL,NULL,'01777366978',NULL,NULL,'tazul@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,9,'2024-01-16 06:56:37',NULL,'2024-01-16 12:48:37',NULL),(29,'MD. JOYNAL ABEDIN',NULL,NULL,'','',NULL,'Savar, Dhaka',NULL,'+8801785893609',NULL,NULL,'joy.diu.cse@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2024-01-15 15:30:50',NULL,'2024-01-19 18:56:55',NULL),(37,'Rofik',NULL,'F',NULL,'Beizing','1478','wuhan, china','This is me rofik','01475858896','01475858897','01475858898','rofik@gmail.com','rofik1234','nexdecade.com/rofik','https://tailwindcomponents.com/cheatsheet/','https://tailwindcomponents.com/cheatsheet/','https://tailwindcomponents.com/cheatsheet/','https://tailwindcomponents.com/cheatsheet/','https://tailwindcomponents.com/cheatsheet/','https://tailwindcomponents.com/cheatsheet/','https://tailwindcomponents.com/cheatsheet/','https://tailwindcomponents.com/cheatsheet/',1,18,'2024-01-20 14:38:09',NULL,'2024-01-20 14:39:29',NULL),(38,'Tahmid Web Supplier',NULL,'L','China','Beizing','uganda','Savar, Dhaka',NULL,'+88017835342','2423453532','23523453425','joy.diu.cse3523@gmail.com','34524','e34532','qwertyuio','wertyui','wertyuk','sdfghj','dfghj','sdf','sdfgh','sdfgh',1,18,'2024-01-20 18:46:36',NULL,'2024-01-20 18:46:36',NULL);

UNLOCK TABLES;

/*Table structure for table `supplier_pro_price` */

CREATE TABLE `supplier_pro_price` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL DEFAULT '0',
  `supplier_id` int NOT NULL DEFAULT '0',
  `supplier_part_number` int DEFAULT '0',
  `min_order_qty` int NOT NULL DEFAULT '0',
  `available_qty` int DEFAULT '0',
  `currency_id` int NOT NULL DEFAULT '0',
  `pro_cost_price` double DEFAULT NULL,
  `pro_media_title` varchar(100) DEFAULT NULL,
  `pro_media_type` enum('pdf','image','zip','rar') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pro_url` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pro_img_url` varchar(200) DEFAULT NULL,
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;

/*Data for the table `supplier_pro_price` */

LOCK TABLES `supplier_pro_price` WRITE;

insert  into `supplier_pro_price`(`id`,`product_id`,`supplier_id`,`supplier_part_number`,`min_order_qty`,`available_qty`,`currency_id`,`pro_cost_price`,`pro_media_title`,`pro_media_type`,`pro_url`,`pro_img_url`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,66,23,0,23,0,1,43.6,NULL,NULL,'333',NULL,0,'2024-01-15 16:03:46',NULL,'2024-01-15 16:03:46'),(2,66,29,0,23,0,1,23,NULL,NULL,NULL,NULL,0,'2024-01-15 16:13:31',NULL,'2024-01-15 16:13:31'),(3,66,29,0,8,0,1,456782934,NULL,NULL,'sdfghj',NULL,0,'2024-01-15 16:36:43',NULL,'2024-01-15 16:36:43'),(4,66,23,0,54,0,1,23423,NULL,NULL,'sadfvad',NULL,0,'2024-01-15 16:38:06',NULL,'2024-01-15 16:38:06'),(5,66,23,0,3345,0,1,34535,NULL,NULL,'dfgg',NULL,0,'2024-01-15 16:39:25',NULL,'2024-01-15 16:39:25'),(6,56,29,0,354,0,2,200,NULL,NULL,'weafsd',NULL,0,'2024-01-16 07:27:19',NULL,'2024-01-16 07:27:19'),(7,48,24,0,10,0,1,1452,NULL,NULL,'http://127.0.0.1:8000/products/edit/48',NULL,0,'2024-01-16 07:40:29',NULL,'2024-01-16 07:40:29'),(8,48,30,101,101,101,1,101,NULL,NULL,'Product URL','Image URL',0,'2024-01-16 10:07:58',NULL,'2024-01-16 10:07:58'),(9,48,29,55,55,555,1,55,NULL,NULL,'ul','dgdg',0,'2024-01-16 12:01:14',NULL,'2024-01-16 12:01:14'),(10,77,32,2345,12,34,1,2345,NULL,NULL,'url','url',0,'2024-01-16 14:05:23',NULL,'2024-01-16 14:05:23'),(11,79,32,23,5,13,1,56.7,NULL,NULL,NULL,NULL,0,'2024-01-16 14:41:30',NULL,'2024-01-16 14:41:30'),(12,80,31,1234,3,34,1,123,NULL,NULL,NULL,NULL,0,'2024-01-18 07:20:08',NULL,'2024-01-18 07:20:08'),(13,80,31,123,5,32,1,12,NULL,NULL,NULL,NULL,0,'2024-01-18 07:20:33',NULL,'2024-01-18 07:20:33'),(14,51,31,6458,56,23,3,123,NULL,NULL,NULL,NULL,0,'2024-01-18 08:56:30',NULL,'2024-01-18 08:56:30'),(15,89,32,456,50,100,2,6.8,NULL,NULL,NULL,NULL,0,'2024-01-21 13:43:43',NULL,'2024-01-21 13:43:43'),(16,89,35,45,10,50,3,200,NULL,NULL,NULL,NULL,0,'2024-01-22 06:47:01',NULL,'2024-01-22 06:47:01'),(17,65,31,NULL,23,50,1,23,NULL,NULL,NULL,NULL,0,'2024-01-22 11:20:39',NULL,'2024-01-22 11:20:39');

UNLOCK TABLES;

/*Table structure for table `transanal_logs` */

CREATE TABLE `transanal_logs` (
  `id` bigint DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `log_details` varchar(200) DEFAULT NULL,
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `transanal_logs` */

LOCK TABLES `transanal_logs` WRITE;

UNLOCK TABLES;

/*Table structure for table `user_designation` */

CREATE TABLE `user_designation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `desig_title` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `user_designation` */

LOCK TABLES `user_designation` WRITE;

insert  into `user_designation`(`id`,`desig_title`,`created_at`,`updated_at`) values (1,'Sr. Product Manager','2024-01-20 23:19:41',NULL),(2,'Accounts','2024-01-20 23:19:52',NULL),(3,'Jr. Package Manager','2024-01-20 23:20:12',NULL),(4,'Management Director','2024-01-22 12:12:16',NULL);

UNLOCK TABLES;

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `designation` int DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `contact_cell` varchar(50) DEFAULT NULL,
  `contact_email` varchar(200) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `user_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `user_type` int NOT NULL DEFAULT '0',
  `user_role` int NOT NULL DEFAULT '0',
  `exp_datetime` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_by` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` varchar(100) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `whatsappNumber` varchar(100) DEFAULT NULL,
  `access_start_time` datetime DEFAULT NULL,
  `access_end_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`id`,`email`,`password`,`name`,`designation`,`address`,`contact_cell`,`contact_email`,`remember_token`,`user_image`,`user_type`,`user_role`,`exp_datetime`,`is_active`,`created_by`,`created_at`,`updated_by`,`updated_at`,`employee_id`,`company`,`gender`,`joining_date`,`whatsappNumber`,`access_start_time`,`access_end_time`) values (1,'masud@nexdecade.com','$2y$12$b85k7zGQCkqSFv79Cs4GG.4ew27/BedhXjlJiFCVyIUuZO2ysXvoe','Masud',4,NULL,'1234567890',NULL,'ytZl4TsRinIBDbzaN7gg0oMdmrXxsccGbuqy0RxqgUReKkpbSTMeYxwP3syG',NULL,1,1,NULL,1,0,'2024-01-03 13:49:14',NULL,'2024-01-22 06:12:35',NULL,NULL,'Male',NULL,NULL,NULL,NULL),(3,'shazid@gmail.com','$2y$12$UOklS9RdwXZnySzFDjH/G.qgMyNUQgxDU5xLsStAx6XtfYApX7GTu','Shazid',1,NULL,NULL,NULL,NULL,NULL,1,3,NULL,0,0,'2024-01-03 08:35:19',NULL,'2024-01-21 11:04:08',NULL,NULL,'Male',NULL,NULL,NULL,NULL),(6,'rokon.zaman@nexdecade.com','$2y$12$EtRnIyAqllrrODY7XskW7.rO/4FgPGqxbenNYtTUKHiTUiT.lk9D.','Rokon',0,NULL,NULL,NULL,'B7XUkvABmUl3dPfqUVuLKVyQR2HBbwkgnWRWQUfGyV9AjRUoEUloSGqNn79Q',NULL,0,0,NULL,1,0,'2024-01-10 07:41:56',NULL,'2024-01-10 07:41:56','',NULL,NULL,NULL,'',NULL,NULL),(7,'rafiqdiu@gmail.com','$2y$12$7lY4x2DUU4FpZHASR59GbO75Bt6mVjptBHjxHzENala1U3MVdkCwq','Rafiqul Islam',0,NULL,NULL,NULL,'an9ywJsbprAd2ewmhmSyFhZXQUND3rFUfN4l171JrCqPb8gJsc0rnzJP6FYa',NULL,0,0,NULL,1,0,'2024-01-10 07:55:25',NULL,'2024-01-21 08:39:43','',NULL,NULL,NULL,'',NULL,NULL),(8,'admin@gmail.com','$2y$12$0jN4y.ouqqZiFUcXuOBzAecg6RHW5YPhZJOhbdC8zdXPQvf6gZuNm','admin',0,NULL,NULL,NULL,'dCoNLNywJmiHKSGfE7Mcwf581goJO4KlpnVVmbA2k2QgicqjNTCnZsHzuuWj',NULL,0,0,NULL,1,0,'2024-01-10 13:30:14',NULL,'2024-01-10 13:30:14','',NULL,NULL,NULL,'',NULL,NULL),(9,'tahmid.hossen@nexdecade.com','$2y$12$kiHtDr41Ai/jrXXt1PvdCunTefbegPEC5uij42tHLpene/ttmwLL6','tahmid',0,NULL,NULL,NULL,NULL,NULL,0,0,NULL,1,0,'2024-01-10 14:53:01',NULL,'2024-01-10 14:53:01','',NULL,NULL,NULL,'',NULL,NULL),(11,'tazul.islam@nexdecade.com','$2y$12$UA31RfrDEeo8frYE6MwkneQrlCU9PZPy.EAy0nb5Dvjmio35g9vSO','Tazul',0,NULL,NULL,NULL,NULL,NULL,0,0,NULL,1,0,'2024-01-11 13:31:19',NULL,'2024-01-11 13:31:19','',NULL,NULL,NULL,'',NULL,NULL),(13,'testing@example.com','$2y$12$baWB3Y3lMWFXBO5rLRwiyuxu6.CQ7CABxMeekFB/yBlqIThw0K0SC','RDFYjolf',0,NULL,NULL,NULL,NULL,NULL,0,0,NULL,1,0,'2024-01-14 19:23:20',NULL,'2024-01-14 19:23:20','',NULL,NULL,NULL,'',NULL,NULL),(14,'a@gmail.com','$2y$12$KEY8NUhFJdnJZjybrxGeeuD3WLYtMLpJjmnfe50soYbifqK5XcbvG','How',0,NULL,NULL,NULL,NULL,NULL,0,0,NULL,1,0,'2024-01-15 04:21:35',NULL,'2024-01-15 04:21:35','',NULL,NULL,NULL,'',NULL,NULL),(15,'tahmid@gmail.com','$2y$12$7A4HflCQ0WHYA/0tv.dHg.Qwmjt/4gOQa7xrhPVEoxgKlYdxsljHG','Tahmid',0,NULL,NULL,NULL,NULL,NULL,0,0,NULL,1,0,'2024-01-15 04:38:54',NULL,'2024-01-15 04:38:54','',NULL,NULL,NULL,'',NULL,NULL),(16,'mithu@nexdecade.com','$2y$12$HipW9rqMhGrxWDic496tTu332ywCIS8GNyR.iWyrPCUxqYw/1ocni','Mithu',0,'Dhaka','+1 (485) 643-3064','mithu@nexdecade.com',NULL,NULL,1,1,NULL,1,0,'2024-01-15 13:17:15',NULL,'2024-01-17 07:33:37','',NULL,NULL,NULL,'',NULL,NULL),(17,'s@gmail.com','$2y$12$pWnoLgjL9FfUqrWJBWY0me696U3IaXAXHa.DYO5MCeHGiQ5ZkDu52','mr',0,NULL,NULL,NULL,NULL,NULL,0,0,NULL,1,0,'2024-01-15 09:28:55',NULL,'2024-01-15 09:28:55','',NULL,NULL,NULL,'',NULL,NULL),(18,'developer@nexdecade.com','$2y$12$TTfp0jabbtxqDCLByvu2l.rwOuNPMbC86PBCCg2AaRPvFK3K2aS3C','Developer',0,'asfasf','asfas','asfasf','gHREQ9hHvtr3P16xhRZIbVPSgsOKEdKkwKqS3zoxAAoFK711MTOFykRbLkMM',NULL,1,1,NULL,1,0,'2024-01-17 05:09:45',NULL,'2024-01-17 06:59:36','',NULL,NULL,NULL,'',NULL,NULL),(19,'developer2@nexdecade.com','$2y$12$VFXqLagIjQ/z8Db2ytR3meOZ4cINr4mErygE0bXCvsXJXM8fhQebq','John Doe',1,'hupuwene@mailinator.com','+1 (485) 643-3064',NULL,NULL,NULL,1,1,NULL,1,0,'2024-01-17 06:02:05',NULL,'2024-01-22 04:19:49','2','3','Male','2024-01-03','15',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `users_permissions` */

CREATE TABLE `users_permissions` (
  `user_id` int DEFAULT NULL,
  `permission_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `users_permissions` */

LOCK TABLES `users_permissions` WRITE;

UNLOCK TABLES;

/*Table structure for table `users_roles` */

CREATE TABLE `users_roles` (
  `user_id` int DEFAULT NULL,
  `role_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `users_roles` */

LOCK TABLES `users_roles` WRITE;

insert  into `users_roles`(`user_id`,`role_id`) values (11,1),(14,1),(15,1),(1,1),(NULL,1),(3,3),(NULL,1),(18,1),(16,1),(19,1);

UNLOCK TABLES;

/* Trigger structure for table `product_infos` */

DELIMITER $$

/*!50003 CREATE */ /*!50017 DEFINER = 'rokon'@'%' */ /*!50003 TRIGGER `product_barcode_ins_tr` BEFORE INSERT ON `product_infos` FOR EACH ROW BEGIN 
	DECLARE x_BarCodeNo VARCHAR(30);
	
		/*SAMPLE: 1805003*/
		SET x_BarCodeNo = (
				  SELECT (SUBSTRING(max_barcode_id,7,8)+1) AS C2 
				  FROM `last_pro_barcode_id` 
				  WHERE SUBSTRING(max_barcode_id,1,6) = CONCAT('',DATE_FORMAT(SYSDATE(),'%Y%m'))
				  );
				  
		IF (ISNULL(x_BarCodeNo)) THEN 
		    SET new.barcode_code = CONCAT('',DATE_FORMAT(SYSDATE(),'%Y%m'),'000001');
		ELSE
		    SET new.barcode_code = CONCAT('',DATE_FORMAT(SYSDATE(),'%Y%m'),LPAD(x_BarCodeNo,5,'00000'));
		END IF;
		
		-- SET new.ADDED_DATETIME = NOW();
		BEGIN 
			UPDATE `last_pro_barcode_id` SET 
				max_barcode_id = new.barcode_code
			WHERE (`id` = 1);
		END;
		
END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
