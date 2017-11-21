create database lista_compra;

use lista_compra;

create table `produto`(
	`id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(150) NOT NULL,
  `amount` int NOT NULL,
  PRIMARY KEY (`id`)
);