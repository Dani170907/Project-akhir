/*
SQLyog Community v13.3.0 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_event
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_event` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_event`;

/*Table structure for table `tb_jns_lomba` */

DROP TABLE IF EXISTS `tb_jns_lomba`;

CREATE TABLE `tb_jns_lomba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaLomba` varchar(100) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_jns_lomba` */

/*Table structure for table `tb_pendaftaran` */

DROP TABLE IF EXISTS `tb_pendaftaran`;

CREATE TABLE `tb_pendaftaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idLomba` int(11) DEFAULT NULL,
  `namaPendaftar` varchar(256) DEFAULT NULL,
  `kelas` varchar(256) DEFAULT NULL,
  `noHp` varchar(13) DEFAULT NULL,
  `tglDaftar` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_pendaftaran` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`nama`,`username`,`password`) values 
(1,'Admin','admin','$2y$10$uzHulhMwHNlTJHGxqTGllOiAJK05M2VXCaiNXPl.tMDRSACOFkzRe');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
