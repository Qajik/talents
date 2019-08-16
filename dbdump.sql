/*
SQLyog Ultimate v12.14 (64 bit)
MySQL - 5.7.26-0ubuntu0.19.04.1 : Database - talents
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`talents` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `talents`;

/*Table structure for table `Company` */

DROP TABLE IF EXISTS `Company`;

CREATE TABLE `Company` (
  `IdCompany` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Website` text COLLATE utf8_unicode_ci,
  `ImageLogo` text COLLATE utf8_unicode_ci,
  `idUsers` int(11) NOT NULL COMMENT 'Contact Person',
  `Address` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`IdCompany`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `Company` */

/*Table structure for table `Languages` */

DROP TABLE IF EXISTS `Languages`;

CREATE TABLE `Languages` (
  `IdLanguages` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OriginName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdLanguages`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `Languages` */

/*Table structure for table `Options` */

DROP TABLE IF EXISTS `Options`;

CREATE TABLE `Options` (
  `IdOptions` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `OptionType` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`IdOptions`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `Options` */

/*Table structure for table `OptionsIntustry` */

DROP TABLE IF EXISTS `OptionsIntustry`;

CREATE TABLE `OptionsIntustry` (
  `IdOptionsIntustry` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`IdOptionsIntustry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `OptionsIntustry` */

/*Table structure for table `OptionsSegment` */

DROP TABLE IF EXISTS `OptionsSegment`;

CREATE TABLE `OptionsSegment` (
  `IdOptionSegment` int(11) NOT NULL AUTO_INCREMENT,
  `idOptionsIndustry` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`IdOptionSegment`),
  KEY `idOptionsIndustry` (`idOptionsIndustry`),
  CONSTRAINT `OptionsSegment_ibfk_1` FOREIGN KEY (`idOptionsIndustry`) REFERENCES `OptionsIntustry` (`IdOptionsIntustry`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `OptionsSegment` */

/*Table structure for table `OptionsUniversities` */

DROP TABLE IF EXISTS `OptionsUniversities`;

CREATE TABLE `OptionsUniversities` (
  `IdOptionsUniversities` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` text COLLATE utf8mb4_unicode_ci,
  `Status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`IdOptionsUniversities`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `OptionsUniversities` */

/*Table structure for table `ResumeExperiences` */

DROP TABLE IF EXISTS `ResumeExperiences`;

CREATE TABLE `ResumeExperiences` (
  `IdResumeExperiences` int(11) NOT NULL AUTO_INCREMENT,
  `JobTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idOptionsEmploymentsList` int(11) NOT NULL,
  `idDiscipline` int(11) NOT NULL,
  `idCareerLevel` int(11) NOT NULL,
  `Description` text COLLATE utf8_unicode_ci,
  `CompanyName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idCompany` int(11) DEFAULT '0',
  `idIndustries` int(11) NOT NULL,
  `idSegments` int(11) NOT NULL,
  `idLegalForm` int(11) NOT NULL,
  `idEmployees` int(11) NOT NULL,
  `CompanyWebsite` text COLLATE utf8_unicode_ci,
  `StartDate` date NOT NULL,
  `EndDate` date DEFAULT NULL,
  `IsCurrentJob` tinyint(4) DEFAULT '0',
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idUsers` int(11) NOT NULL,
  `idResume` int(11) NOT NULL,
  PRIMARY KEY (`IdResumeExperiences`),
  KEY `idUsers` (`idUsers`),
  KEY `idResume` (`idResume`),
  KEY `idIndustries` (`idIndustries`),
  KEY `idSegments` (`idSegments`),
  KEY `idLegalForm` (`idLegalForm`),
  KEY `idEmployees` (`idEmployees`),
  KEY `idCompany` (`idCompany`),
  KEY `idDiscipline` (`idDiscipline`),
  KEY `idCareerLevel` (`idCareerLevel`),
  KEY `idOptionsEmploymentsList` (`idOptionsEmploymentsList`),
  CONSTRAINT `ResumeExperiences_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `Users` (`IdUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeExperiences_ibfk_10` FOREIGN KEY (`idOptionsEmploymentsList`) REFERENCES `Options` (`IdOptions`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeExperiences_ibfk_2` FOREIGN KEY (`idResume`) REFERENCES `Resume` (`IdResume`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeExperiences_ibfk_3` FOREIGN KEY (`idIndustries`) REFERENCES `OptionsIntustry` (`IdOptionsIntustry`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeExperiences_ibfk_4` FOREIGN KEY (`idSegments`) REFERENCES `OptionsSegment` (`IdOptionSegment`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeExperiences_ibfk_5` FOREIGN KEY (`idLegalForm`) REFERENCES `Options` (`IdOptions`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeExperiences_ibfk_6` FOREIGN KEY (`idEmployees`) REFERENCES `Options` (`IdOptions`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeExperiences_ibfk_7` FOREIGN KEY (`idCompany`) REFERENCES `Company` (`IdCompany`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeExperiences_ibfk_8` FOREIGN KEY (`idDiscipline`) REFERENCES `Options` (`IdOptions`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeExperiences_ibfk_9` FOREIGN KEY (`idCareerLevel`) REFERENCES `Options` (`IdOptions`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ResumeExperiences` */

/*Table structure for table `Resume` */

DROP TABLE IF EXISTS `Resume`;

CREATE TABLE `Resume` (
  `IdResume` int(11) NOT NULL AUTO_INCREMENT,
  `idUsers` int(11) NOT NULL,
  `ResumeEmail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`IdResume`),
  KEY `idUsers` (`idUsers`),
  CONSTRAINT `Resume_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `Users` (`IdUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `Resume` */

insert  into `Resume`(`IdResume`,`idUsers`,`ResumeEmail`,`CreatedAt`) values 
(1,1,'sasa','2019-05-30 02:11:37');

/*Table structure for table `ResumeAwards` */

DROP TABLE IF EXISTS `ResumeAwards`;

CREATE TABLE `ResumeAwards` (
  `IdResumeAwards` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Field` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Year` date NOT NULL,
  `Description` text COLLATE utf8_unicode_ci,
  `idUsers` int(11) NOT NULL,
  `idResume` int(11) NOT NULL,
  PRIMARY KEY (`IdResumeAwards`),
  KEY `idUsers` (`idUsers`),
  KEY `idResume` (`idResume`),
  CONSTRAINT `ResumeAwards_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `Users` (`IdUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeAwards_ibfk_2` FOREIGN KEY (`idResume`) REFERENCES `Resume` (`IdResume`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ResumeAwards` */

/*Table structure for table `ResumeEducations` */

DROP TABLE IF EXISTS `ResumeEducations`;

CREATE TABLE `ResumeEducations` (
  `IdResumeEducations` int(11) NOT NULL AUTO_INCREMENT,
  `idUniversities` int(11) NOT NULL,
  `Field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDegree` int(11) NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci,
  `StartDate` date NOT NULL,
  `EndDate` date DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idUsers` int(11) NOT NULL,
  `idResume` int(11) NOT NULL,
  PRIMARY KEY (`IdResumeEducations`),
  KEY `idUsers` (`idUsers`),
  KEY `idResume` (`idResume`),
  KEY `idUniversities` (`idUniversities`),
  KEY `idDegree` (`idDegree`),
  CONSTRAINT `ResumeEducations_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `Users` (`IdUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeEducations_ibfk_2` FOREIGN KEY (`idResume`) REFERENCES `Resume` (`IdResume`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeEducations_ibfk_3` FOREIGN KEY (`idUniversities`) REFERENCES `OptionsUniversities` (`IdOptionsUniversities`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ResumeEducations` */

/*Table structure for table `ResumeInterests` */

DROP TABLE IF EXISTS `ResumeInterests`;

CREATE TABLE `ResumeInterests` (
  `IdResumeInterests` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `State` tinyint(4) DEFAULT '0',
  `idUsers` int(11) NOT NULL DEFAULT '0',
  `idResume` int(11) NOT NULL,
  PRIMARY KEY (`IdResumeInterests`),
  KEY `idUsers` (`idUsers`),
  KEY `idResume` (`idResume`),
  CONSTRAINT `ResumeInterests_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `Users` (`IdUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeInterests_ibfk_2` FOREIGN KEY (`idResume`) REFERENCES `Resume` (`IdResume`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ResumeInterests` */

/*Table structure for table `ResumeLanguage` */

DROP TABLE IF EXISTS `ResumeLanguage`;

CREATE TABLE `ResumeLanguage` (
  `IdResumeLanguage` int(11) NOT NULL AUTO_INCREMENT,
  `idLanguage` int(11) NOT NULL,
  `Level` int(11) NOT NULL,
  `idUsers` int(11) NOT NULL,
  `idResume` int(11) NOT NULL,
  PRIMARY KEY (`IdResumeLanguage`),
  KEY `idUsers` (`idUsers`),
  KEY `idResume` (`idResume`),
  KEY `idLanguage` (`idLanguage`),
  CONSTRAINT `ResumeLanguage_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `Users` (`IdUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeLanguage_ibfk_2` FOREIGN KEY (`idResume`) REFERENCES `Resume` (`IdResume`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeLanguage_ibfk_3` FOREIGN KEY (`idLanguage`) REFERENCES `Languages` (`IdLanguages`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ResumeLanguage` */

/*Table structure for table `ResumeQualification` */

DROP TABLE IF EXISTS `ResumeQualification`;

CREATE TABLE `ResumeQualification` (
  `IdResumeQualification` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `State` tinyint(4) DEFAULT '0',
  `idUsers` int(11) NOT NULL DEFAULT '0',
  `idResume` int(11) NOT NULL,
  PRIMARY KEY (`IdResumeQualification`),
  KEY `idUsers` (`idUsers`),
  KEY `idResume` (`idResume`),
  CONSTRAINT `ResumeQualification_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `Users` (`IdUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeQualification_ibfk_2` FOREIGN KEY (`idResume`) REFERENCES `Resume` (`IdResume`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ResumeQualification` */

/*Table structure for table `ResumeSkills` */

DROP TABLE IF EXISTS `ResumeSkills`;

CREATE TABLE `ResumeSkills` (
  `IdResumeSkills` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `State` tinyint(1) DEFAULT '0',
  `idUsers` int(11) NOT NULL DEFAULT '0',
  `idResume` int(11) NOT NULL,
  PRIMARY KEY (`IdResumeSkills`),
  KEY `idUsers` (`idUsers`),
  KEY `idResume` (`idResume`),
  CONSTRAINT `ResumeSkills_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `Users` (`IdUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeSkills_ibfk_2` FOREIGN KEY (`idResume`) REFERENCES `Resume` (`IdResume`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ResumeSkills` */

insert  into `ResumeSkills`(`IdResumeSkills`,`Name`,`State`,`idUsers`,`idResume`) values 
(10,'php',1,1,1),
(11,'C++',1,1,1),
(12,'c#',1,1,1),
(13,'mysql',1,1,1),
(15,'python',1,1,1);

/*Table structure for table `ResumeVolunteer` */

DROP TABLE IF EXISTS `ResumeVolunteer`;

CREATE TABLE `ResumeVolunteer` (
  `IdResumeVolunteer` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Field` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Website` text COLLATE utf8_unicode_ci,
  `Year` date DEFAULT NULL,
  `Description` text COLLATE utf8_unicode_ci,
  `idUsers` int(11) NOT NULL,
  `idResume` int(11) NOT NULL,
  PRIMARY KEY (`IdResumeVolunteer`),
  KEY `idUser` (`idUsers`),
  KEY `idResume` (`idResume`),
  CONSTRAINT `ResumeVolunteer_ibfk_1` FOREIGN KEY (`idUsers`) REFERENCES `Users` (`IdUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ResumeVolunteer_ibfk_2` FOREIGN KEY (`idResume`) REFERENCES `Resume` (`IdResume`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ResumeVolunteer` */

/*Table structure for table `Users` */

DROP TABLE IF EXISTS `Users`;

CREATE TABLE `Users` (
  `IdUsers` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AccessToken` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AuthKey` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Role` tinyint(1) NOT NULL,
  `Status` tinyint(4) DEFAULT '9',
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VerificationToken` text COLLATE utf8_unicode_ci,
  `PasswordResetToken` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`IdUsers`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `Users` */

insert  into `Users`(`IdUsers`,`FirstName`,`LastName`,`Email`,`Password`,`AccessToken`,`AuthKey`,`Role`,`Status`,`CreatedAt`,`UpdatedAt`,`VerificationToken`,`PasswordResetToken`) values 
(1,'Armen','Grigoryan','armengrigoryan84@gmail.com','$2y$13$UCsWC/6fo.d7lNKSIGt8PuRUK7U/scLi.Gogr1rhADQCRMlGEo1wG',NULL,'VZRB_VO_E5v-BLz7tvQE3KgmrP8EbkX6',4,10,'2019-05-30 23:39:44','2019-05-30 23:39:44','qgoyaytuhttLDCfpNI0HXxoUukLkvqty_1559245184',NULL),
(2,'Armen','Grigoryan','agrigory84@gmail.com','$2y$13$tWTDjTkepPy.UhbfUM06eeNCOuv2RYtu/CF874C.EN3wdnx8/edLu',NULL,'3yVVaMb9JO0_bEUFBkaK9FHifMySJ7nB',4,9,'2019-05-30 23:48:45','2019-05-30 23:48:45','t0nf8QkhUnbZv9VYFJOGKb9c8mV_ys8__1559245725',NULL),
(3,'Armen','Grigoryan','testMaile@gmail.com','$2y$13$aIDFYNOJWPZJkpcKM8WnyueRLTDTCqoyGo3jn82VSz677u.BBHg1q',NULL,'1wnqq89pBcSBqyBs9SKM_vYttKpkT8fb',4,9,'2019-05-30 23:49:54','2019-05-30 23:49:54','zcAR1nw8L6xT1YykCTYHl8RVkRPY3wpU_1559245794',NULL),
(4,'Armen','Grigoryan','testMaileaaa@gmail.com','$2y$13$t0rzfXsqPecEC7bDWqBkbuXBKIgJWc1BoMloGhNwa.yHS1vRB5THW',NULL,'AZXVsD0BxyjQzOcqiLNOYDm-vBefWbKn',4,9,'2019-05-30 23:50:33','2019-05-30 23:50:33','yzjvA8GQ1XjQ-57skXIU848laa3PQMqQ_1559245833',NULL),
(5,'Armen','Grigoryan','testMaileaaaaa@gmail.com','$2y$13$w9/nTr87GLWz8A1eHjHjIOqHVD/vKdO0U8Lr3G.osVkRxizGGyNC6',NULL,'aZ_NA50qi5ZaExZulR3OX8YZ5olw1NT6',4,9,'2019-05-30 23:51:07','2019-05-30 23:51:07','eigFs-Cs-vgXYcpzBaEasqlLj3CecR9y_1559245867',NULL),
(6,'Armen','Grigoryan','testMaaaileaaaaa@gmail.com','$2y$13$spM11BOupbuHvdYNbLmpz.GP2WnW7PQpS1AUDztVgn2GkQYamLkzG',NULL,'iWV31MtdEtLrI3c9eWSAenIzmpAYhd2R',4,9,'2019-05-30 23:51:42','2019-05-30 23:51:42','m4OZwSJiOuYLuNqCZMyBug0kznvE3-u-_1559245902',NULL),
(7,'Armen','Grigoryan','testMaaaiaaleaaaaa@gmail.com','$2y$13$K8gh6bWnrbb4S9DUcpPwfeHrAR7xbdyl7TnW1/uqDWEBpp9pk5P9i',NULL,'ZKP0pZJwE_JuKBB3SeU79TfdSXIqwKf2',4,9,'2019-05-30 23:51:48','2019-05-30 23:51:48','JQMifrQPEQGQYlPE1kKEseQVvGTxDLPh_1559245908',NULL),
(8,'Armen','Grigoryan','testtest@gmail.com','$2y$13$Re4NOWBaceCt0X7lYU5SiuWlV1gRbfl8XUkPcibXo2CqXxC.c0QGS',NULL,'JvbEhAGvpM36PADJsgE2JmaxldITBui9',4,9,'2019-05-30 23:52:11','2019-05-30 23:52:11','DHyVkI0mtEPVfOG9bSikANLUl7miNbMO_1559245931',NULL),
(9,'Armen','Grigoryan','aaaa@gmail.com','$2y$13$dnNZa5s.ev1BKAjH1gLIwOQTxeZkLDfh6glvpalt/XZ.tDLftH2US',NULL,'EnITE8Ozb0XLphYGiocRxQwZ0p23jhuc',4,9,'2019-05-30 23:54:17','2019-05-30 23:54:17','SMklTRnOssjBcI8HL5XZd2LCQZon9Sff_1559246057',NULL);

/*Table structure for table `UsersDetails` */

DROP TABLE IF EXISTS `UsersDetails`;

CREATE TABLE `UsersDetails` (
  `idUsers` int(11) NOT NULL,
  `AddressStreet` text COLLATE utf8_unicode_ci,
  `AddressCoutry` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AddressCity` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `UsersDetails` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
