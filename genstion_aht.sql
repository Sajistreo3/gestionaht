-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2020 at 11:40 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genstion_aht`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inspection`
--

DROP TABLE IF EXISTS `tbl_inspection`;
CREATE TABLE IF NOT EXISTS `tbl_inspection` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` tinyint(2) NOT NULL,
  `question_number` int(11) NOT NULL,
  `score` decimal(7,1) NOT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `tbl_users_id` int(10) NOT NULL,
  `tbl_evaluation_id` int(11) NOT NULL,
  `tbl_sites_id` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tbl_users_id` (`tbl_users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inspection`
--

INSERT INTO `tbl_inspection` (`id`, `type`, `question_number`, `score`, `comment`, `image`, `tbl_users_id`, `tbl_evaluation_id`, `tbl_sites_id`, `status`) VALUES
(22, 2, 1, '1.0', 'a', 'icon.png,logo.png,login.png', 1, 1593134043, 1, 1),
(23, 2, 2, '0.5', 'b', 'icon.png,logo.png,login.png', 1, 1593134043, 1, 1),
(24, 2, 3, '1.5', 'c', 'icon.png,logo.png,login.png', 1, 1593134043, 1, 1),
(25, 2, 4, '2.0', 'd', 'icon.png,logo.png,login.png', 1, 1593134043, 1, 1),
(26, 2, 5, '0.0', 'e', 'icon.png,logo.png,login.png', 1, 1593134043, 1, 1),
(27, 2, 1, '1.5', '1', 'icon.png,logo.png,login.png', 1, 1593165876, 6, 1),
(28, 2, 2, '1.0', 'ok', 'icon.png,logo.png,login.png', 1, 1593165876, 6, 1),
(29, 2, 3, '1.0', 'ok', 'icon.png,logo.png,login.png', 1, 1593165876, 6, 1),
(30, 2, 4, '1.0', '1', 'icon.png,logo.png,login.png', 1, 1593165876, 6, 1),
(31, 2, 5, '1.5', 'ok', 'icon.png,logo.png,login.png', 1, 1593165876, 6, 1),
(32, 1, 1, '2.0', 'clean', 'icon.png,logo.png,login.png', 1, 1593166710, 6, 1),
(33, 1, 2, '1.5', '', 'icon.png,logo.png,login.png', 1, 1593166710, 6, 1),
(34, 1, 3, '2.5', '', 'icon.png,logo.png,login.png', 1, 1593166710, 6, 1),
(35, 1, 4, '0.5', '', 'icon.png,logo.png,login.png', 1, 1593166710, 6, 1),
(36, 1, 5, '1.5', '', 'icon.png,logo.png,login.png', 1, 1593166710, 6, 1),
(37, 1, 1, '2.0', 'tryjtdyhj', 'icon.png,logo.png,login.png', 1, 1593197131, 2, 1),
(38, 1, 2, '0.5', 'tyjtuykjyt7kjrtbretghrtgergrtyergrth', 'icon.png,logo.png,login.png', 1, 1593197131, 2, 1),
(39, 1, 3, '1.0', 'dtyjhdtyhdtyh', 'icon.png,logo.png,login.png', 1, 1593197131, 2, 1),
(40, 1, 4, '1.0', 'ergerf wfw', 'icon.png,logo.png,login.png', 1, 1593197131, 2, 1),
(41, 1, 5, '1.5', 'bwerbweftehg', 'icon.png,logo.png,login.png', 1, 1593197131, 2, 1),
(42, 2, 1, '0.0', 'clean', 'icon.png,logo.png,login.png', 1, 1593464739, 6, 1),
(43, 2, 2, '0.0', 'wesr4gergdtyujyut7y', 'icon.png,logo.png,login.png', 1, 1593464739, 6, 1),
(44, 2, 3, '0.0', 'tryjtdyhj', 'icon.png,logo.png,login.png', 1, 1593464739, 6, 1),
(45, 2, 4, '0.0', 'clean', 'icon.png,logo.png,login.png', 1, 1593464739, 6, 1),
(46, 2, 5, '0.0', 'clean', 'icon.png,logo.png,login.png', 1, 1593464739, 6, 1),
(47, 2, 1, '0.0', '', 'maxresdefault.jpg,sparky-clash-royale.jpg', 1, 1593555686, 2, 1),
(48, 2, 2, '0.0', '', '3NHm98U.jpg,8c89c28b7-1.jpg', 1, 1593555686, 2, 1),
(49, 2, 3, '0.0', '', '', 1, 1593555686, 2, 1),
(50, 2, 4, '0.0', '', 'Skyrim-logo-dragon.jpg', 1, 1593555686, 2, 1),
(51, 2, 5, '0.0', '', 'steam.png', 1, 1593555686, 2, 1),
(72, 2, 1, '0.0', '', 'abstract_outer_space_planets_desktop_1920x1200_hd-wallpaper-1098356.jpg', 1, 1593559614, 12973, 1),
(73, 2, 2, '0.0', '', '3NHm98U.jpg,8c89c28b7-1.jpg,2000px-Maple_Leaf.svg.png', 1, 1593559614, 12973, 1),
(74, 2, 3, '0.0', '', '10887400_10152675809434773_1827438364768717505_o.jpg,abstract_outer_space_planets_desktop_1920x1200_hd-wallpaper-1098356.jpg,aoe de playtest rules.PNG,become an engineer.jpg', 1, 1593559614, 12973, 1),
(75, 2, 4, '0.0', '', '', 1, 1593559614, 12973, 1),
(76, 2, 5, '0.0', '', '', 1, 1593559614, 12973, 1);

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
-- Table structure for table `tbl_questions`
--

DROP TABLE IF EXISTS `tbl_questions`;
CREATE TABLE IF NOT EXISTS `tbl_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `total_score` int(11) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`id`, `question_number`, `question`, `total_score`, `type`, `status`) VALUES
(1, 1, 'Les panneaux de stainless des pompes sont-ils propres ?', 2, 1, 1),
(2, 2, 'Le dessus des pompes est-il propre ?', 2, 1, 1),
(3, 3, 'Les pistolets, gaines, étriers et boyaux sont-ils propres et en bon état ?', 3, 1, 1),
(4, 4, 'Est-ce que le tablier de béton est propre et/ou bien déneigé incluant les pompes\ndiesel ?', 2, 1, 1),
(5, 5, 'Les poubelles, incluant celle à l\'entrée, sont-elles propre et moins que le 3/4 pleines ?', 2, 1, 1),
(6, 1, 'Le marchandisage de la facade du magasin respecte-t-il les directives de Petro-Canada ?    ', 2, 2, 1),
(7, 2, 'Est-ce que le rack à huile est ouvert, bien remplis et étiquetté ?', 1, 2, 1),
(8, 3, 'Les gros lots de Loto-Québec représentent la réalité du moment ?', 2, 2, 1),
(9, 4, 'Le lave-glace est bien marchandisé aux pompes ?', 2, 2, 1),
(10, 5, 'L\'affichage sur les pompes (facade et pump tupper) respecte-t-il le guide de marchandisage ?', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sites`
--

DROP TABLE IF EXISTS `tbl_sites`;
CREATE TABLE IF NOT EXISTS `tbl_sites` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `site_number` varchar(50) NOT NULL,
  `address` varchar(220) NOT NULL,
  `postalcode` varchar(8) NOT NULL,
  `site_contact` bigint(20) NOT NULL,
  `site_email` varchar(50) NOT NULL,
  `manager` varchar(30) NOT NULL,
  `manager_contact` bigint(20) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `owner_number` bigint(20) NOT NULL,
  `laveauto` tinyint(4) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sites`
--

INSERT INTO `tbl_sites` (`id`, `site_number`, `address`, `postalcode`, `site_contact`, `site_email`, `manager`, `manager_contact`, `owner_name`, `owner_number`, `laveauto`, `status`) VALUES
(1, '12177', '7667, Boulevard Maurice-Duplessis, Montréal, QC, CA', 'H1E 5M9', 5146431811, 'bo12177@petro-canada.ca', 'IB', 4388772507, 'Charanjit Singh', 5146543443, 1, 1),
(2, '13388', '8050, Boulevard Langelier, Montréal, QC, CA', 'H1P 3A4', 5143278720, 'bo13388@petro-canada.ca', 'Djenny', 4388772507, 'Charanjit Singh', 5146543443, 1, 1),
(3, '14141', '5200, Boulevard Métropolitain Est., Montréal, QC, CA', 'H1S 1A4', 5147257639, 'bo14141@petro-canada.ca', 'France Dore', 4388772507, 'Charanjit Singh', 5146543443, 0, 1),
(4, '12988', '6901, Boulevard des Galeries d\'Anjou, Anjou, QC, CA', 'H1M 2W1', 5143520079, 'bo12988@petro-canada.ca', 'Julie', 4388772507, 'Charanjit Singh', 5146543443, 0, 1),
(5, '12959', '7455, Boulevard Lacordaire, Montréal, QC, CA', 'H1S 3B2', 5142519898, 'bo12959@petro-canada.ca', 'Patrick Patel', 4388772507, 'Charanjit Singh', 5146543443, 1, 1),
(6, '12973', '7979, Boulevard Lacordaire, Montréal, QC, CA', 'H1R 2A1', 5143236122, 'bo12973@petro-canada.ca', 'Tigui', 4388772507, 'Charanjit Singh', 5146543443, 0, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `firstname`, `lastname`, `username`, `password`, `level`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '4a7d1ed414474e4033ac29ccb8653d9b', 1, 1),
(2, 'Charanjit', 'Singh', 'singh', 'd41d8cd98f00b204e9800998ecf8427e', 2, 1),
(3, 'Shajeed', 'Islam', 'Sajistreo3', 'd41d8cd98f00b204e9800998ecf8427e', 6, 1),
(4, 'Shardul', 'Bhatt', 'any', '202cb962ac59075b964b07152d234b70', 7, 1),
(5, 'patrick', 'patel', 'patrick', '202cb962ac59075b964b07152d234b70', 4, 1),
(6, 'IB', 'inspector', 'ib', '202cb962ac59075b964b07152d234b70', 3, 1),
(7, 'Krunal', 'Patel', 'ironman', '202cb962ac59075b964b07152d234b70', 5, 1),
(8, 'Jordan', 'Yip', 'ipman', 'caf1a3dfb505ffed0d024130f58c5cfa', 7, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_inspection`
--
ALTER TABLE `tbl_inspection`
  ADD CONSTRAINT `tbl_inspection_ibfk_1` FOREIGN KEY (`tbl_users_id`) REFERENCES `tbl_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
