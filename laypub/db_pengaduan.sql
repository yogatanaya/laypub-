/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.25-MariaDB : Database - db_pengaduan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_pengaduan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_pengaduan`;

/*Table structure for table `aduan` */

DROP TABLE IF EXISTS `aduan`;

CREATE TABLE `aduan` (
  `id_aduan` int(3) NOT NULL AUTO_INCREMENT,
  `nik` int(30) DEFAULT NULL,
  `nama_pengadu` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `id_layanan` int(3) DEFAULT NULL,
  `id_status` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_aduan`),
  KEY `id_status` (`id_status`),
  KEY `id_layanan` (`id_layanan`),
  CONSTRAINT `aduan_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  CONSTRAINT `aduan_ibfk_3` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `aduan` */

insert  into `aduan`(`id_aduan`,`nik`,`nama_pengadu`,`deskripsi`,`id_layanan`,`id_status`) values (52,2147483647,'y','d',NULL,NULL),(53,123,'est','tes',NULL,NULL);

/*Table structure for table `layanan` */

DROP TABLE IF EXISTS `layanan`;

CREATE TABLE `layanan` (
  `id_layanan` int(3) NOT NULL AUTO_INCREMENT,
  `nama_layanan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `layanan` */

insert  into `layanan`(`id_layanan`,`nama_layanan`) values (1,'KTP'),(2,'KK'),(3,'Kartu Pencari Kerja '),(4,'Santunan Kematian'),(5,'Uji KIR'),(6,'Bantuan PMKS'),(7,'Akta Kematian'),(8,'Akta Kelahiran'),(9,'Akta Perceraian'),(10,'Akta Perkawinan');

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `id_status` int(3) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) DEFAULT NULL,
  `id_admin` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_status`),
  KEY `id_admin` (`id_admin`),
  CONSTRAINT `status_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `status` */

insert  into `status`(`id_status`,`status`,`id_admin`) values (1,'Menunggu K',NULL),(2,'Ditolak',NULL),(3,'Responded',NULL),(4,'Sudah Dita',NULL);

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id_admin` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_admin` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
