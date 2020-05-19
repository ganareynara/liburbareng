/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - liburbareng
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`liburbareng` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `liburbareng`;

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `angkatan` varchar(4) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`,`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `customer` */

insert  into `customer`(`id`,`nim`,`nama`,`jenkel`,`tgl_lhr`,`alamat`,`email`,`no_tlp`,`jurusan`,`angkatan`,`username`,`password`,`level`) values 
(3,'A12.2017.05849','Gana Aditya Reynara','Laki','2020-05-01','Boja','gana@gmail.com','1123242454','SI','2017','gana','gana','cust'),
(4,'A12.2017.05910','Cator Ilham Pratama','Laki','2020-05-01','Kudos','cator@kudus.com','087321421231','TI','2017','cator','cator','cust'),
(5,'A12.2017.05840','Anabella Dhara','Perempuan','2020-05-27','Ngaliyan','abel@gmail.com','09832432681','SI','2017','abel','abel','cust');

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `paket` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pilpaket` varchar(1) NOT NULL,
  `tgl_brgkt` date NOT NULL,
  `duduk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `order` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
