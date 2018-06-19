/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 10.1.31-MariaDB : Database - mass_privatefund
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mass_privatefund` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mass_privatefund`;

/*Table structure for table `daily_val_cash` */

DROP TABLE IF EXISTS `daily_val_cash`;

CREATE TABLE `daily_val_cash` (
  `id` varchar(32) NOT NULL,
  `date_port` date DEFAULT NULL,
  `port_id` varchar(100) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `market_value` double DEFAULT NULL,
  `proportion_pct` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `daily_val_cash` */

insert  into `daily_val_cash`(`id`,`date_port`,`port_id`,`title`,`market_value`,`proportion_pct`) values 
('084c57a168b1d68c18ffaf7f10282ffa','2018-05-30','P1800010','Accrued Interest',1576.77,0.016796121),
('27d3358dce177ecc77c8126061491675','2018-05-30','P1800009','Account Receivables',1066198.64,18.2477231),
('2af3c0f916144506c7ba82630c9248c8','2018-05-30','P1800010','Accrued Management Fee',-12808.91,-0.136443491),
('4eac56c5040a59281fcc1627088b506f','2018-05-30','P1800010','Account Receivables',1720051.08,18.32238452),
('611f4438670c3312c267d17ecd60f7d6','2018-05-30','P1800009','Accrued Interest',723.81,0.012387827),
('abac52b9f674feace4bc8fb7d18ab136','2018-05-30','P1800009','Cash',3060970.28,52.38774089),
('c4662ec67cc46c9477e97c62879efea3','2018-05-30','P1800010','Cash',4910454.27,52.30730201),
('d825c12e201bd53fc837c7108fee0dc0','2018-05-30','P1800009','Accrued Management Fee',-7839.43,-0.134169884);

/*Table structure for table `daily_val_inst` */

DROP TABLE IF EXISTS `daily_val_inst`;

CREATE TABLE `daily_val_inst` (
  `id` varchar(32) NOT NULL,
  `date_port` date DEFAULT NULL,
  `port_id` varchar(100) DEFAULT NULL,
  `sector` varchar(20) DEFAULT NULL,
  `securities` varchar(300) DEFAULT NULL,
  `instrument` varchar(20) DEFAULT NULL,
  `unit` int(11) DEFAULT NULL,
  `avg_cost_price` double DEFAULT NULL,
  `avg_cost` double DEFAULT NULL,
  `market_price` double DEFAULT NULL,
  `market_value` float DEFAULT NULL,
  `unrealized_profit_lost` float DEFAULT NULL,
  `unrealized_profit_lost_pct` double DEFAULT NULL,
  `proportion_pct` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `daily_val_inst` */

insert  into `daily_val_inst`(`id`,`date_port`,`port_id`,`sector`,`securities`,`instrument`,`unit`,`avg_cost_price`,`avg_cost`,`market_price`,`market_value`,`unrealized_profit_lost`,`unrealized_profit_lost_pct`,`proportion_pct`) values 
('0a8b5e8575ac17fc11d092b26ff94ee5','2018-05-30','P1800002','PETRO','INDORAMA VENTURES PUBLIC COMPANY LIMITED ','IVL',18800,60.33,1134290.21,57.5,1081000,-53290.2,-4.6981,11.5151),
('10f3ed7429c951fc0bebf72b54939c1c','2018-05-30','P1800001','ENERG','PTT PUBLIC COMPANY LIMITED ','PTT',2300,52.81,121454.82,51.5,118450,-3004.82,-2.474,2.0272),
('229bb331c22c524d82e0b5cf902b7bca','2018-05-30','P1800001','COMM','ROBINSON DEPARTMENT STORE PUBLIC COMPANY ','ROBINS',1800,62.57,112620.37,64,115200,2579.63,2.2906,1.9716),
('3272760641f48f1d1416e053d36033c8','2018-05-30','P1800002','COMM','BERLI JUCKER PUBLIC COMPANY LIMITED ','BJC',3200,57.81,184997.74,57,182400,-2597.74,-1.4042,1.943),
('3e38b6d757fca653ebefbc71e78c62ca','2018-05-30','P1800001','COMM','BERLI JUCKER PUBLIC COMPANY LIMITED ','BJC',2000,57.81,115623.59,57,114000,-1623.59,-1.4042,1.9511),
('608539d68d548a0749e22d26dd7228f3','2018-05-30','P1800002','COMM','ROBINSON DEPARTMENT STORE PUBLIC COMPANY ','ROBINS',2900,62.57,181443.94,64,185600,4156.06,2.2905,1.9771),
('b768f25deea13e17740fd0c63f5d21d2','2018-05-30','P1800002','ENERG','PTT PUBLIC COMPANY LIMITED ','PTT',3700,52.81,195383.84,51.5,190550,-4833.84,-2.474,2.0298),
('c16d03f52ac42a261e0bb175da4a9ca3','2018-05-30','P1800002','ENERG','BANPU PUBLIC COMPANY LIMITED ','BANPU',54800,20.38,1116555.11,20.6,1128880,12324.9,1.1038,12.0251),
('c297de345ac6a6cf961954ea3a8626ee','2018-05-30','P1800001','ENERG','BANPU PUBLIC COMPANY LIMITED ','BANPU',34100,20.73,706846.97,20.6,702460,-4386.97,-0.6206,12.0224),
('f294ee0665d89d471fb4dc98477f38f0','2018-05-30','P1800001','PETRO','INDORAMA VENTURES PUBLIC COMPANY LIMITED ','IVL',11700,59.93,701123.01,57.5,672750,-28373,-4.0468,11.5139);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
