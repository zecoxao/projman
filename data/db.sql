/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.20 : Database - root
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`root` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `root`;

/*Table structure for table `alteracao` */

DROP TABLE IF EXISTS `alteracao`;

CREATE TABLE `alteracao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stakeholder` int(11) NOT NULL,
  `data_alteracao` date NOT NULL,
  `descricao` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `stakeholder` (`stakeholder`),
  CONSTRAINT `alteracao_ibfk_1` FOREIGN KEY (`stakeholder`) REFERENCES `stakeholder` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `alteracao` */

/*Table structure for table `alteracoes_requisito` */

DROP TABLE IF EXISTS `alteracoes_requisito`;

CREATE TABLE `alteracoes_requisito` (
  `alteracao` int(11) NOT NULL,
  `requisito` int(11) NOT NULL,
  PRIMARY KEY (`alteracao`,`requisito`),
  KEY `requisito` (`requisito`),
  CONSTRAINT `alteracoes_requisito_ibfk_1` FOREIGN KEY (`alteracao`) REFERENCES `alteracao` (`id`),
  CONSTRAINT `alteracoes_requisito_ibfk_2` FOREIGN KEY (`requisito`) REFERENCES `requisito` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `alteracoes_requisito` */

/*Table structure for table `authassignment` */

DROP TABLE IF EXISTS `authassignment`;

CREATE TABLE `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `authassignment` */

insert  into `authassignment`(`itemname`,`userid`,`bizrule`,`data`) values ('Admin','1',NULL,'N;'),('Gestor','5',NULL,'N;'),('Guest','2',NULL,'N;'),('Membro','4',NULL,'N;'),('Stakeholder','3',NULL,'N;');

/*Table structure for table `authitem` */

DROP TABLE IF EXISTS `authitem`;

CREATE TABLE `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `authitem` */

insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Admin',2,NULL,NULL,'N;'),('Alteracao.*',1,NULL,NULL,'N;'),('AlteracoesRequisito.*',1,NULL,NULL,'N;'),('Authenticated',2,NULL,NULL,'N;'),('CasoUso.*',1,NULL,NULL,'N;'),('Cliente.*',1,NULL,NULL,'N;'),('Ecra.*',1,NULL,NULL,'N;'),('EcraCaso.*',1,NULL,NULL,'N;'),('Entidade.*',1,NULL,NULL,'N;'),('EntidadeCaso.*',1,NULL,NULL,'N;'),('Estado.*',1,NULL,NULL,'N;'),('Gestor',2,'Gestor',NULL,'N;'),('Grupo.*',1,NULL,NULL,'N;'),('GrupoAnalise.*',1,NULL,NULL,'N;'),('Guest',2,NULL,NULL,'N;'),('Membro',2,'Membro',NULL,'N;'),('Membro.*',1,NULL,NULL,'N;'),('MembrosCasoUso.*',1,NULL,NULL,'N;'),('MembrosProjecto.*',1,NULL,NULL,'N;'),('Pessoa.*',1,NULL,NULL,'N;'),('Projecto.*',1,NULL,NULL,'N;'),('Requisito.*',1,NULL,NULL,'N;'),('Requisitos.*',1,NULL,NULL,'N;'),('RequisitosStakeholders.*',1,NULL,NULL,'N;'),('Site.*',1,NULL,NULL,'N;'),('Stakeholder',2,'Stakeholder',NULL,'N;'),('Stakeholder.*',1,NULL,NULL,'N;'),('StakeholderMembro.*',1,NULL,NULL,'N;'),('User.Activation.*',1,NULL,NULL,'N;'),('User.Admin.*',1,NULL,NULL,'N;'),('User.Default.*',1,NULL,NULL,'N;'),('User.Login.*',1,NULL,NULL,'N;'),('User.Logout.*',1,NULL,NULL,'N;'),('User.Profile.*',1,NULL,NULL,'N;'),('User.ProfileField.*',1,NULL,NULL,'N;'),('User.Recovery.*',1,NULL,NULL,'N;'),('User.Registration.*',1,NULL,NULL,'N;'),('User.User.*',1,NULL,NULL,'N;');

/*Table structure for table `authitemchild` */

DROP TABLE IF EXISTS `authitemchild`;

CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `authitemchild` */

insert  into `authitemchild`(`parent`,`child`) values ('Gestor','Alteracao.*'),('Membro','Alteracao.*'),('Gestor','CasoUso.*'),('Membro','CasoUso.*'),('Gestor','Cliente.*'),('Membro','Cliente.*'),('Gestor','Ecra.*'),('Membro','Ecra.*'),('Gestor','Entidade.*'),('Membro','Entidade.*'),('Gestor','Estado.*'),('Membro','Estado.*'),('Gestor','Grupo.*'),('Membro','Grupo.*'),('Gestor','Membro.*'),('Membro','Membro.*'),('Gestor','Pessoa.*'),('Membro','Pessoa.*'),('Gestor','Projecto.*'),('Membro','Projecto.*'),('Gestor','Requisito.*'),('Membro','Requisito.*'),('Stakeholder','Requisito.*'),('Gestor','Site.*'),('Membro','Site.*'),('Gestor','Stakeholder.*'),('Membro','Stakeholder.*');

/*Table structure for table `caso_uso` */

DROP TABLE IF EXISTS `caso_uso`;

CREATE TABLE `caso_uso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `dominio` varchar(100) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `actor_primario` varchar(100) NOT NULL,
  `pre_condicao` varchar(100) NOT NULL,
  `iniciador` varchar(100) NOT NULL,
  `cenario_sucesso` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `caso_uso` */

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pessoa` (`pessoa`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`pessoa`) REFERENCES `pessoa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `cliente` */

insert  into `cliente`(`id`,`descricao`,`pessoa`) values (8,'cliente_teste',2);

/*Table structure for table `ecra` */

DROP TABLE IF EXISTS `ecra`;

CREATE TABLE `ecra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `modelo_ecra` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ecra` */

/*Table structure for table `ecra_caso` */

DROP TABLE IF EXISTS `ecra_caso`;

CREATE TABLE `ecra_caso` (
  `ecra` int(11) NOT NULL,
  `caso_uso` int(11) NOT NULL,
  PRIMARY KEY (`ecra`,`caso_uso`),
  KEY `caso_uso` (`caso_uso`),
  CONSTRAINT `ecra_caso_ibfk_1` FOREIGN KEY (`ecra`) REFERENCES `ecra` (`id`),
  CONSTRAINT `ecra_caso_ibfk_2` FOREIGN KEY (`caso_uso`) REFERENCES `caso_uso` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ecra_caso` */

/*Table structure for table `entidade` */

DROP TABLE IF EXISTS `entidade`;

CREATE TABLE `entidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `entidade` */

/*Table structure for table `entidade_caso` */

DROP TABLE IF EXISTS `entidade_caso`;

CREATE TABLE `entidade_caso` (
  `entidade` int(11) NOT NULL,
  `caso_uso` int(11) NOT NULL,
  PRIMARY KEY (`entidade`,`caso_uso`),
  KEY `caso_uso` (`caso_uso`),
  CONSTRAINT `entidade_caso_ibfk_1` FOREIGN KEY (`entidade`) REFERENCES `entidade` (`id`),
  CONSTRAINT `entidade_caso_ibfk_2` FOREIGN KEY (`caso_uso`) REFERENCES `caso_uso` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `entidade_caso` */

/*Table structure for table `estado` */

DROP TABLE IF EXISTS `estado`;

CREATE TABLE `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `estado` */

insert  into `estado`(`id`,`descricao`) values (1,'CRIADO'),(2,'ANULADO'),(3,'EM_DESENVOLVIMENTO'),(4,'EM_TESTES'),(5,'ALTERADO');

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `grupo` */

insert  into `grupo`(`id`,`descricao`) values (2,'Grupo 1');

/*Table structure for table `membro` */

DROP TABLE IF EXISTS `membro`;

CREATE TABLE `membro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pessoa` (`pessoa`),
  CONSTRAINT `membro_ibfk_1` FOREIGN KEY (`pessoa`) REFERENCES `pessoa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `membro` */

/*Table structure for table `membros_caso_uso` */

DROP TABLE IF EXISTS `membros_caso_uso`;

CREATE TABLE `membros_caso_uso` (
  `membro` int(11) NOT NULL,
  `caso_uso` int(11) NOT NULL,
  PRIMARY KEY (`membro`,`caso_uso`),
  KEY `caso_uso` (`caso_uso`),
  CONSTRAINT `membros_caso_uso_ibfk_1` FOREIGN KEY (`membro`) REFERENCES `membro` (`id`),
  CONSTRAINT `membros_caso_uso_ibfk_2` FOREIGN KEY (`caso_uso`) REFERENCES `caso_uso` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `membros_caso_uso` */

/*Table structure for table `membros_projecto` */

DROP TABLE IF EXISTS `membros_projecto`;

CREATE TABLE `membros_projecto` (
  `projecto` int(11) NOT NULL,
  `membro` int(11) NOT NULL,
  PRIMARY KEY (`projecto`,`membro`),
  KEY `membro` (`membro`),
  CONSTRAINT `membros_projecto_ibfk_1` FOREIGN KEY (`projecto`) REFERENCES `projecto` (`id`),
  CONSTRAINT `membros_projecto_ibfk_2` FOREIGN KEY (`membro`) REFERENCES `membro` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `membros_projecto` */

/*Table structure for table `pessoa` */

DROP TABLE IF EXISTS `pessoa`;

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `morada` varchar(150) NOT NULL,
  `tlm` int(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `pessoa` */

insert  into `pessoa`(`id`,`nome`,`morada`,`tlm`,`data_nascimento`) values (2,'José Coixão','Rua Sr dos Passos 22',965350967,'0000-00-00');

/*Table structure for table `profiles` */

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`),
  CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `profiles` */

insert  into `profiles`(`user_id`,`lastname`,`firstname`) values (1,'Admin','Administrator'),(2,'Demo','Demo'),(3,'Coixao','Jose'),(4,'Maria','Ana'),(5,'Lopes','André');

/*Table structure for table `profiles_fields` */

DROP TABLE IF EXISTS `profiles_fields`;

CREATE TABLE `profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `profiles_fields` */

insert  into `profiles_fields`(`id`,`varname`,`title`,`field_type`,`field_size`,`field_size_min`,`required`,`match`,`range`,`error_message`,`other_validator`,`default`,`widget`,`widgetparams`,`position`,`visible`) values (1,'lastname','Last Name','VARCHAR','50','3',1,'','','Incorrect Last Name (length between 3 and 50 characters).','','','','',1,3),(2,'firstname','First Name','VARCHAR','50','3',1,'','','Incorrect First Name (length between 3 and 50 characters).','','','','',0,3);

/*Table structure for table `projecto` */

DROP TABLE IF EXISTS `projecto`;

CREATE TABLE `projecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `duracao` int(11) NOT NULL,
  `ambito` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `projecto` */

insert  into `projecto`(`id`,`descricao`,`data_inicio`,`data_fim`,`duracao`,`ambito`) values (2,'Projecto I','0000-00-00','0000-00-00',5,'Comer uvas');

/*Table structure for table `requisito` */

DROP TABLE IF EXISTS `requisito`;

CREATE TABLE `requisito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projecto` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `projecto` (`projecto`),
  KEY `estado` (`estado`),
  CONSTRAINT `requisito_ibfk_1` FOREIGN KEY (`projecto`) REFERENCES `projecto` (`id`),
  CONSTRAINT `requisito_ibfk_2` FOREIGN KEY (`estado`) REFERENCES `estado` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `requisito` */

/*Table structure for table `requisitos_stakeholders` */

DROP TABLE IF EXISTS `requisitos_stakeholders`;

CREATE TABLE `requisitos_stakeholders` (
  `requisito` int(11) NOT NULL,
  `stakeholder` int(11) NOT NULL,
  PRIMARY KEY (`requisito`,`stakeholder`),
  KEY `stakeholder` (`stakeholder`),
  CONSTRAINT `requisitos_stakeholders_ibfk_1` FOREIGN KEY (`requisito`) REFERENCES `requisito` (`id`),
  CONSTRAINT `requisitos_stakeholders_ibfk_2` FOREIGN KEY (`stakeholder`) REFERENCES `stakeholder` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `requisitos_stakeholders` */

/*Table structure for table `rights` */

DROP TABLE IF EXISTS `rights`;

CREATE TABLE `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`),
  CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rights` */

/*Table structure for table `stakeholder` */

DROP TABLE IF EXISTS `stakeholder`;

CREATE TABLE `stakeholder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `grupo` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `pessoa` int(11) NOT NULL,
  `projecto` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `grupo` (`grupo`),
  KEY `cliente` (`cliente`),
  KEY `pessoa` (`pessoa`),
  KEY `projecto` (`projecto`),
  CONSTRAINT `stakeholder_ibfk_2` FOREIGN KEY (`grupo`) REFERENCES `grupo` (`id`),
  CONSTRAINT `stakeholder_ibfk_3` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id`),
  CONSTRAINT `stakeholder_ibfk_4` FOREIGN KEY (`pessoa`) REFERENCES `pessoa` (`id`),
  CONSTRAINT `stakeholder_ibfk_5` FOREIGN KEY (`projecto`) REFERENCES `projecto` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

/*Data for the table `stakeholder` */

insert  into `stakeholder`(`id`,`descricao`,`grupo`,`cliente`,`pessoa`,`projecto`) values (75,'stakeholder_teste',2,8,2,2);

/*Table structure for table `stakeholder_membro` */

DROP TABLE IF EXISTS `stakeholder_membro`;

CREATE TABLE `stakeholder_membro` (
  `stakeholder` int(11) NOT NULL,
  `membro` int(11) NOT NULL,
  PRIMARY KEY (`stakeholder`,`membro`),
  KEY `membro` (`membro`),
  CONSTRAINT `stakeholder_membro_ibfk_1` FOREIGN KEY (`stakeholder`) REFERENCES `stakeholder` (`id`),
  CONSTRAINT `stakeholder_membro_ibfk_2` FOREIGN KEY (`membro`) REFERENCES `membro` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `stakeholder_membro` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`,`activkey`,`create_at`,`lastvisit_at`,`superuser`,`status`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3','webmaster@example.com','9a24eff8c15a6a141ece27eb6947da0f','2014-10-31 22:52:59','2014-12-12 17:43:15',1,1),(2,'demo','fe01ce2a7fbac8fafaed7c982a04e229','demo@example.com','618497a9b5963eb8d1366e39b768720a','2014-10-31 22:52:59','2014-11-01 19:16:13',0,1),(3,'zecoxao','4c4999ac17adcef1a5a75fab71e5c857','zecoxao1@gmail.com','e0f7428dad7167a80a4d8f183083b605','2014-10-31 23:58:41','2014-12-12 11:30:16',1,1),(4,'maria','4c4999ac17adcef1a5a75fab71e5c857','ana_maria@hotmail.com','24330fd5a4c0d49b864424f790039af2','2014-11-21 09:52:10','2014-12-12 11:31:15',0,1),(5,'andre','4c4999ac17adcef1a5a75fab71e5c857','andre_lopes@hotmail.com','eca4b8e445be252a64fcc7ac202b3298','2014-11-21 09:54:11','0000-00-00 00:00:00',0,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
