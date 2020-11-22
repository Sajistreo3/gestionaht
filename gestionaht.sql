-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2020 at 06:45 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE SCHEMA genstion_AHT;
use genstion_AHT;



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestionaht`
--


select tbl_inspection.id,tbl_inspection.type,tbl_inspection.question_number,tbl_inspection.score, tbl_inspection.comment, tbl_inspection.tbl_evaluation_id,tbl_inspection.tbl_sites_id ,tbl_users.firstname,tbl_users.lastname , tbl_sites.site_number, tbl_sites.address from tbl_inspection
INNER join tbl_users ON tbl_inspection.tbl_users_id = tbl_users.id 
INNER join tbl_sites ON tbl_inspection.tbl_sites_id = tbl_sites.id
WHERE tbl_evaluation_id = '1593134043' AND type = '1';

select tbl_inspection.id,tbl_inspection.type,tbl_inspection.question_number,tbl_inspection.score, tbl_inspection.comment, tbl_inspection.tbl_evaluation_id,
tbl_inspection.tbl_sites_id,tbl_users.firstname,tbl_users.lastname, tbl_sites.site_number, tbl_sites.address from tbl_inspection
INNER join tbl_users ON tbl_inspection.tbl_users_id = tbl_users.id
INNER join tbl_sites ON tbl_inspection.tbl_sites_id = tbl_sites.id;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_carwash`
--

DROP TABLE IF EXISTS `tbl_carwash`;
CREATE TABLE IF NOT EXISTS `tbl_carwash` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tbl_users_id` int(10) NOT NULL,
  `question` varchar(200) NOT NULL,
  `score` varchar(20) NOT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `image` blob,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tbl_users_id` (`tbl_users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clean`
--

DROP TABLE IF EXISTS `tbl_clean`;
CREATE TABLE IF NOT EXISTS `tbl_clean` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL DEFAULT 'cleaning',
  `question` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_evaluation`
--

DROP TABLE IF EXISTS `tbl_evaluation`;
CREATE TABLE IF NOT EXISTS `tbl_evaluation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `total_result` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `tbl_users_id` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inspection`
--

DROP TABLE IF EXISTS `tbl_inspection`;
CREATE TABLE IF NOT EXISTS `tbl_inspection` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `score` varchar(10) NOT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `image` blob,
  `tbl_users_id` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tbl_users_id` (`tbl_users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

DROP TABLE IF EXISTS `tbl_job`;
CREATE TABLE IF NOT EXISTS `tbl_job` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `availability` varchar(50) NOT NULL,
  `document` blob NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_merchandise`
--

DROP TABLE IF EXISTS `tbl_merchandise`;
CREATE TABLE IF NOT EXISTS `tbl_merchandise` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tbl_users_id` int(10) NOT NULL,
  `question` varchar(200) NOT NULL,
  `score` varchar(10) NOT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `image` blob,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tbl_users_id` (`tbl_users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_security`
--

DROP TABLE IF EXISTS `tbl_security`;
CREATE TABLE IF NOT EXISTS `tbl_security` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tbl_users_id` int(10) NOT NULL,
  `question` varchar(200) NOT NULL,
  `score` varchar(20) NOT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `image` blob,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tbl_users_id` (`tbl_users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sites`
--

DROP TABLE IF EXISTS `tbl_sites`;
CREATE TABLE IF NOT EXISTS `tbl_sites` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `site_number` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postalcode` varchar(8) NOT NULL,
  `site_contact` BIGINT(20) NOT NULL,
  `site_email` varchar(50) NOT NULL,
  `manager` varchar(30) NOT NULL,
  `manager_contact` BIGINT(20) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `owner_number` BIGINT(20) NOT NULL,
  `laveauto` TINYINT NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tbl_sites` (`id`, `site_number`, `address`, `postalcode`,`site_contact`,`site_email`, `manager`, `manager_contact`, `owner_name`, `owner_number`, `laveauto`, `status`)
VALUES (DEFAULT, '12177', '7667, Boulevard Maurice-Duplessis, Montréal, QC, CA', 'H1E 5M9','5146431811','bo12177@petro-canada.ca','IB', '4388772507', 'Charanjit Singh', '5146543443', '1', '1'),
(DEFAULT, '13388', '8050, Boulevard Langelier, Montréal, QC, CA', 'H1P 3A4','5143278720','bo13388@petro-canada.ca' ,'Djenny', '4388772507', 'Charanjit Singh', '5146543443', '1', '1'),
(DEFAULT, '14141', '5200, Boulevard Métropolitain Est., Montréal, QC, CA', 'H1S 1A4','5147257639','bo14141@petro-canada.ca' ,'France Dore', '4388772507', 'Charanjit Singh', '5146543443', '0', '1'),
(DEFAULT, '12988', "6901, Boulevard des Galeries d'Anjou, Anjou, QC, CA", 'H1M 2W1','5143520079', 'bo12988@petro-canada.ca','Julie', '4388772507', 'Charanjit Singh', '5146543443', '0', '1'),
(DEFAULT, '12959', "7455, Boulevard Lacordaire, Montréal, QC, CA", 'H1S 3B2','5142519898','bo12959@petro-canada.ca' ,'Patrick Patel', '4388772507', 'Charanjit Singh', '5146543443', '1', '1'),
(DEFAULT, '12973', '7979, Boulevard Lacordaire, Montréal, QC, CA', 'H1R 2A1','5143236122','bo12973@petro-canada.ca' ,'Tigui', '4388772507', 'Charanjit Singh', '5146543443', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(3) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_users` (`id`, `firstname`, `lastname`, `username`, `password`, `level`, `status`) VALUES (DEFAULT, 'admin', 'admin', 'admin', '4a7d1ed414474e4033ac29ccb8653d9b', '1', '1'),
(DEFAULT, 'Charanjit', 'Singh', 'singh', '81dc9bdb52d04dc20036dbd8313ed055', '2', '1');


DROP TABLE IF EXISTS `tbl_questions`;
CREATE TABLE `genstion_aht`.`tbl_questions` (
`id` INT NOT NULL AUTO_INCREMENT ,
 `question_number` INT NOT NULL ,
 `question` VARCHAR(500) NOT NULL ,
 `total_score` INT NOT NULL ,
 `type` TINYINT(2) NOT NULL ,
 `status` TINYINT NULL DEFAULT '1' ,
 PRIMARY KEY (`id`)) ENGINE = MyISAM;
 
 
 INSERT INTO `tbl_questions` (`id`, `question_number`, `question`, `total_score`, `type`, `status`)
 VALUES (DEFAULT, '1', 'Les panneaux de stainless des pompes sont-ils propres ?', '2', '1', DEFAULT),
		(DEFAULT, '2', 'Le dessus des pompes est-il propre ?', '2', '1', DEFAULT),
        (DEFAULT, '3', 'Les pistolets, gaines, étriers et boyaux sont-ils propres et en bon état ?', '3', '1', DEFAULT),
        (DEFAULT, '4', 'Est-ce que le tablier de béton est propre et/ou bien déneigé incluant les pompes
diesel ?', '2', '1', DEFAULT),
        (DEFAULT, '5', "Les poubelles, incluant celle à l'entrée, sont-elles propre et moins que le 3/4 pleines ?", '2', '1', DEFAULT),
        (DEFAULT, '1', "Le marchandisage de la facade du magasin respecte-t-il les directives de Petro-Canada ?    ", '2', '2', DEFAULT),
		(DEFAULT, '2', 'Est-ce que le rack à huile est ouvert, bien remplis et étiquetté ?', '1', '2', DEFAULT),
        (DEFAULT, '3', 'Les gros lots de Loto-Québec représentent la réalité du moment ?', '2', '2', DEFAULT),
        (DEFAULT, '4', 'Le lave-glace est bien marchandisé aux pompes ?', '2', '2', DEFAULT),
        (DEFAULT, '5', "L'affichage sur les pompes (facade et pump tupper) respecte-t-il le guide de marchandisage ?", '2', '2', DEFAULT);



--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_carwash`
--
ALTER TABLE `tbl_carwash`
  ADD CONSTRAINT `tbl_carwash_ibfk_1` FOREIGN KEY (`tbl_users_id`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_inspection`
--
ALTER TABLE `tbl_inspection`
  ADD CONSTRAINT `tbl_inspection_ibfk_1` FOREIGN KEY (`tbl_users_id`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_merchandise`
--
ALTER TABLE `tbl_merchandise`
  ADD CONSTRAINT `tbl_merchandise_ibfk_1` FOREIGN KEY (`tbl_users_id`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_security`
--
ALTER TABLE `tbl_security`
  ADD CONSTRAINT `tbl_security_ibfk_1` FOREIGN KEY (`tbl_users_id`) REFERENCES `tbl_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
