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
('311520c6e011289a5a2f71a1814ba391','2018-05-30','P1800009','Cash',3060970.28,52.38774089),
('450b388528b3a48fbfeb3aec83041ca7','2018-05-30','P1800010','Accrued Interest',1576.77,0.016796121),
('65f689ab58b0cf925b3e4a5290833dea','2018-05-30','P1800010','Account Receivables',1720051.08,18.32238452),
('70a8249e1d085417503f8a77ffe941e3','2018-05-30','P1800010','Cash',4910454.27,52.30730201),
('7336e6e9875818d7f14a5dcefe67bfd1','2018-05-30','P1800009','Accrued Management Fee',-7839.43,-0.134169884),
('a2d43327695ec1cd5762de5e18462693','2018-05-30','P1800009','Accrued Interest',723.81,0.012387827),
('d6fe28e0f3938900a644375db797f4e7','2018-05-30','P1800009','Account Receivables',1066198.64,18.2477231),
('eed8510598749614640b0f94d18162f5','2018-05-30','P1800010','Accrued Management Fee',-12808.91,-0.136443491);

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
  `avg_cost` float DEFAULT NULL,
  `market_price` double DEFAULT NULL,
  `market_value` float DEFAULT NULL,
  `unrealized_profit_lost` float DEFAULT NULL,
  `unrealized_profit_lost_pct` double DEFAULT NULL,
  `proportion_pct` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `daily_val_inst` */

insert  into `daily_val_inst`(`id`,`date_port`,`port_id`,`sector`,`securities`,`instrument`,`unit`,`avg_cost_price`,`avg_cost`,`market_price`,`market_value`,`unrealized_profit_lost`,`unrealized_profit_lost_pct`,`proportion_pct`) values 
('05e57da6759a0b68c80d0db19799db5e','2018-05-30','P1800001','PETRO','INDORAMA VENTURES PUBLIC COMPANY LIMITED ','IVL',11700,59.93,701123,57.5,672750,-28373,-4.0468,11.5139),
('16671dd255320b997861a2cc0ab88a81','2018-05-30','P1800002','ENERG','PTT PUBLIC COMPANY LIMITED ','PTT',3700,52.81,195384,51.5,190550,-4833.84,-2.474,2.0298),
('3e583b979245d73635cab33481d8a445','2018-05-30','P1800002','COMM','ROBINSON DEPARTMENT STORE PUBLIC COMPANY ','ROBINS',2900,62.57,181444,64,185600,4156.06,2.2905,1.9771),
('3fb5ba8a420dd5226ac1c2328763acaf','2018-05-30','P1800002','COMM','BERLI JUCKER PUBLIC COMPANY LIMITED ','BJC',3200,57.81,184998,57,182400,-2597.74,-1.4042,1.943),
('523ad19a36d6159cf22b0fd60b61a589','2018-05-30','P1800002','ENERG','BANPU PUBLIC COMPANY LIMITED ','BANPU',54800,20.38,1116560,20.6,1128880,12324.9,1.1038,12.0251),
('7042ad734c734836d92ca7b99d9c0183','2018-05-30','P1800001','ENERG','BANPU PUBLIC COMPANY LIMITED ','BANPU',34100,20.73,706847,20.6,702460,-4386.97,-0.6206,12.0224),
('8e8f5426131183dbe77018f9739738df','2018-05-30','P1800002','PETRO','INDORAMA VENTURES PUBLIC COMPANY LIMITED ','IVL',18800,60.33,1134290,57.5,1081000,-53290.2,-4.6981,11.5151),
('bd5c8ba7a431ffb1bfd6ffa7071cacb2','2018-05-30','P1800001','COMM','BERLI JUCKER PUBLIC COMPANY LIMITED ','BJC',2000,57.81,115624,57,114000,-1623.59,-1.4042,1.9511),
('c9c302b57f62f4fb781e6908988fd408','2018-05-30','P1800001','COMM','ROBINSON DEPARTMENT STORE PUBLIC COMPANY ','ROBINS',1800,62.57,112620,64,115200,2579.63,2.2906,1.9716),
('d95805493e440beb8e32a13e2c17a9a1','2018-05-30','P1800001','ENERG','PTT PUBLIC COMPANY LIMITED ','PTT',2300,52.81,121455,51.5,118450,-3004.82,-2.474,2.0272);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
