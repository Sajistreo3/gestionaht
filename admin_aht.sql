-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2020 at 01:54 AM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_aht`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inspection`
--

CREATE TABLE `tbl_inspection` (
  `id` int(10) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `question_number` int(11) NOT NULL,
  `score` decimal(7,1) NOT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `tbl_users_id` int(10) NOT NULL,
  `tbl_evaluation_id` int(11) NOT NULL,
  `tbl_sites_id` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inspection`
--

INSERT INTO `tbl_inspection` (`id`, `type`, `question_number`, `score`, `comment`, `image`, `tbl_users_id`, `tbl_evaluation_id`, `tbl_sites_id`, `status`) VALUES
(1, 2, 1, '0.0', 'Hdisnsjjx', '20200623_190505.jpg,20200623_182806.jpg,20200623_182804.jpg', 1, 1593581661, 0, 1),
(2, 2, 2, '0.0', 'Djxnxnsksm', '20200616_083915.jpg,20200620_232003.jpg,20200616_024253.jpg,20200616_000732.jpg', 1, 1593581661, 0, 1),
(3, 2, 3, '0.0', 'Ndidnxj', '1593581730030648680742590113236.jpg', 1, 1593581661, 0, 1),
(4, 2, 4, '0.0', 'Djdsmmsud', '', 1, 1593581661, 0, 1),
(5, 2, 5, '0.0', 'Djxnxnsks', '', 1, 1593581661, 0, 1),
(82, 2, 1, '2.0', 'Hiii', '20200612_234512.jpg,20200612_234524.jpg', 1, 1593582094, 0, 1),
(83, 2, 2, '1.0', 'Byyyeee', '20200612_234444.jpg,20200612_234512.jpg,20200612_234524.jpg', 1, 1593582094, 0, 1),
(84, 2, 3, '1.0', '', '20200605_201848.jpg,20200606_171340.jpg', 1, 1593582094, 0, 1),
(85, 2, 4, '1.5', '', '20200521_025159.jpg', 1, 1593582094, 0, 1),
(86, 2, 5, '2.0', '', '15935821793145702900714029509655.jpg', 1, 1593582094, 0, 1),
(87, 2, 1, '1.0', 'oui', 'logo.png,people1.jpg,people2.jpg,people3.jpg,product1.jpg,product2.jpg,product3.jpg,product4.jpg,product5.jpg,product6.jpg', 1, 1593582463, 0, 1),
(88, 2, 2, '1.0', 'non', 'product5.jpg,product12.jpg,slider1.jpg,slider2.jpg', 1, 1593582463, 0, 1),
(89, 2, 3, '0.5', 'oui', 'product3.jpg', 1, 1593582463, 0, 1),
(90, 2, 4, '2.0', 'non', 'product9.jpg', 1, 1593582463, 0, 1),
(91, 2, 5, '1.0', 'non', 'logo.png,product6.jpg,product10.jpg,slider3.jpg', 1, 1593582463, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE `tbl_job` (
  `id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `availability` varchar(50) NOT NULL,
  `document` blob NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `total_score` int(11) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `tbl_sites` (
  `id` int(10) NOT NULL,
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
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(3) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_inspection`
--
ALTER TABLE `tbl_inspection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_users_id` (`tbl_users_id`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sites`
--
ALTER TABLE `tbl_sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_inspection`
--
ALTER TABLE `tbl_inspection`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sites`
--
ALTER TABLE `tbl_sites`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
