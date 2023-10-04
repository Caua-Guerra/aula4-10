# Host: localhost:3399  (Version 5.5.5-10.4.22-MariaDB)
# Date: 2023-10-04 08:52:51
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `usu_id` int(3) NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(255) NOT NULL DEFAULT '',
  `usu_email` varchar(255) NOT NULL DEFAULT '',
  `usu_foto_perfil` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "usuarios"
#

