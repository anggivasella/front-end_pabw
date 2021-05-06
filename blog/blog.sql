/*
SQLyog Ultimate v8.82 
MySQL - 5.7.24 : Database - blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `blog`;

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(35) DEFAULT NULL,
  `kategori` varchar(35) DEFAULT NULL,
  `isi` text,
  `tgl_blog` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `blog` */

insert  into `blog`(`id`,`judul`,`kategori`,`isi`,`tgl_blog`) values (1,'kjlkj','kljlkj','ljkjlkjklklj','0000-00-00'),(2,'sdfsd','kesehatan','sdfsdf','2021-05-06'),(3,'sdfsd','kesehatan','sdfsdf','2021-05-06'),(4,'a','kesehatan','c','2021-05-06'),(5,'a','kesehatan','c','2021-05-06'),(6,'a','kesehatan','c','2021-05-06'),(7,'a','kesehatan','c','2021-05-06'),(8,'a','kesehatan','c','2021-05-06'),(9,'a','kesehatan','c','2021-05-06'),(10,'a','kesehatan','c','2021-05-06'),(11,'a','kesehatan','c','2021-05-06'),(12,'a','kesehatan','c','2021-05-06'),(13,'a','kesehatan','c','2021-05-06'),(14,'a','kesehatan','c','2021-05-06'),(15,'a','kesehatan','c','2021-05-06'),(16,'a','kesehatan','c','2021-05-06');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(35) NOT NULL,
  `password` text,
  `nama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
