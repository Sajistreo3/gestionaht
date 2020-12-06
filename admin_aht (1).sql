-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2020 at 04:31 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 2, 1, '0.0', 'Hdisnsjjx', '20200623_190505.jpg,20200623_182806.jpg,20200623_182804.jpg', 1, 1593581661, 2, 1),
(2, 2, 2, '0.0', 'Djxnxnsksm', '20200616_083915.jpg,20200620_232003.jpg,20200616_024253.jpg,20200616_000732.jpg', 1, 1593581661, 2, 1),
(3, 2, 3, '0.0', 'Ndidnxj', '1593581730030648680742590113236.jpg', 1, 1593581661, 2, 1),
(4, 2, 4, '0.0', 'Djdsmmsud', '', 1, 1593581661, 2, 1),
(5, 2, 5, '0.0', 'Djxnxnsks', '', 1, 1593581661, 2, 1),
(6, 2, 1, '1.0', '123123', 'cat2.png,cat3.png,cat4.png', 1, 1593583243, 2, 1),
(7, 2, 2, '0.5', '32112312', 'arrow.png,avator.png,bg1.jpg', 1, 1593583243, 2, 1),
(8, 2, 3, '1.0', 'dasdsad', 'arrow.png,avator.png', 1, 1593583243, 2, 1),
(9, 2, 4, '2.0', 'asdasd', 'burger.png', 1, 1593583243, 2, 1),
(10, 2, 5, '2.0', '321312', 'arrow.png,avator.png,bg1.jpg,bg6.jpg', 1, 1593583243, 2, 1),
(11, 2, 1, '0.5', '123123', 'avator.png', 1, 1593583364, 2, 1),
(12, 2, 2, '0.5', '123123', '', 1, 1593583364, 2, 1),
(13, 2, 3, '1.0', '123123', 'cat9.png', 1, 1593583364, 2, 1),
(14, 2, 4, '2.0', '123123', 'cat2.png', 1, 1593583364, 2, 1),
(15, 2, 5, '2.0', '123123', 'arrow.png,avator.png', 1, 1593583364, 2, 1),
(16, 2, 1, '1.0', '123123', 'arrow.png,avator.png,bg1.jpg', 1, 1593584020, 0, 1),
(17, 2, 2, '1.0', '123123', 'btn_hover.png', 1, 1593584020, 0, 1),
(18, 2, 3, '0.5', '123123', 'cat2.png', 1, 1593584020, 0, 1),
(19, 2, 4, '2.0', '123123', 'cat6.png', 1, 1593584020, 0, 1),
(20, 2, 5, '1.0', '123123', 'cat9.png', 1, 1593584020, 0, 1),
(21, 2, 1, '0.5', '123123', 'burger.png', 1, 1593584143, 5, 1),
(22, 2, 2, '0.0', '123123', 'arrow.png,avator.png', 1, 1593584143, 5, 1),
(23, 2, 3, '0.0', '', '', 1, 1593584143, 5, 1),
(24, 2, 4, '0.0', '', '', 1, 1593584143, 5, 1),
(25, 2, 5, '0.0', '', '', 1, 1593584143, 5, 1),
(26, 2, 1, '1.0', '', 'avator.png', 1, 1593584336, 5, 1),
(27, 2, 2, '0.0', '', '', 1, 1593584336, 5, 1),
(28, 2, 3, '0.0', '', '', 1, 1593584336, 5, 1),
(29, 2, 4, '0.0', '', '', 1, 1593584336, 5, 1),
(30, 2, 5, '0.0', '', '', 1, 1593584336, 5, 1),
(31, 2, 1, '0.0', '213123', 'cat2.png', 1, 1593584359, 0, 1),
(32, 2, 2, '0.0', '', '', 1, 1593584359, 0, 1),
(33, 2, 3, '0.0', '', '', 1, 1593584359, 0, 1),
(34, 2, 4, '0.0', '', '', 1, 1593584359, 0, 1),
(35, 2, 5, '0.0', '', '', 1, 1593584359, 0, 1),
(36, 1, 1, '1.0', '213123', 'arrow.png,avator.png,bg1.jpg', 1, 1593585546, 3, 1),
(37, 1, 2, '0.0', '213123', '', 1, 1593585546, 3, 1),
(38, 1, 3, '0.0', '213123', 'avator.png', 1, 1593585546, 3, 1),
(39, 1, 4, '0.0', '', '', 1, 1593585546, 3, 1),
(40, 1, 5, '0.0', '', '', 1, 1593585546, 3, 1),
(41, 2, 1, '2.0', '', '20200630_154416.jpg,20200623_190505.jpg', 1, 1593589652, 6, 1),
(42, 2, 2, '1.0', '', '15935896744127972340343763142928.jpg', 1, 1593589652, 6, 1),
(43, 2, 3, '2.0', '', '', 1, 1593589652, 6, 1),
(44, 2, 4, '1.5', '', '', 1, 1593589652, 6, 1),
(45, 2, 5, '1.0', '', '15935896911137590977308964831830.jpg', 1, 1593589652, 6, 1),
(46, 1, 1, '1.5', 'Jtxktdktd', '20200623_190505.jpg,20200616_083915.jpg', 1, 1593589848, 5, 1),
(47, 1, 2, '0.0', 'Xjrxrx', '15935898685561293585010884948625.jpg', 1, 1593589848, 5, 1),
(48, 1, 3, '3.0', '5ix5dd5d6d', '15935898783044405267792431231301.jpg', 1, 1593589848, 5, 1),
(49, 1, 4, '1.0', '', '15935898887205854617326037079055.jpg', 1, 1593589848, 5, 1),
(50, 1, 5, '2.0', '', '', 1, 1593589848, 5, 1),
(51, 1, 1, '2.0', '', 'image.jpg', 1, 1593590349, 3, 1),
(52, 1, 2, '2.0', '', 'image.jpg', 1, 1593590349, 3, 1),
(53, 1, 3, '0.0', '', '', 1, 1593590349, 3, 1),
(54, 1, 4, '0.0', '', '', 1, 1593590349, 3, 1),
(55, 1, 5, '0.0', '', '', 1, 1593590349, 3, 1),
(56, 2, 1, '0.0', '', 'image.jpg', 1, 1593590407, 6, 1),
(57, 2, 2, '0.0', '', 'image.jpg', 1, 1593590407, 6, 1),
(58, 2, 3, '0.0', '', 'image.jpg', 1, 1593590407, 6, 1),
(59, 2, 4, '0.0', '', '', 1, 1593590407, 6, 1),
(60, 2, 5, '0.0', '', '', 1, 1593590407, 6, 1),
(61, 2, 1, '1.5', '', '15936315138133748875782919253949.jpg', 1, 1593631501, 3, 1),
(62, 2, 2, '0.0', '', '', 1, 1593631501, 3, 1),
(63, 2, 3, '0.0', '', '', 1, 1593631501, 3, 1),
(64, 2, 4, '0.0', '', '', 1, 1593631501, 3, 1),
(65, 2, 5, '0.0', '', '', 1, 1593631501, 3, 1),
(66, 2, 1, '0.0', '', '15940059102483670677643684617679.jpg', 1, 1594005881, 5, 1),
(67, 2, 2, '0.0', '', '', 1, 1594005881, 5, 1),
(68, 2, 3, '0.0', '', '', 1, 1594005881, 5, 1),
(69, 2, 4, '0.0', '', '', 1, 1594005881, 5, 1),
(70, 2, 5, '0.0', '', '', 1, 1594005881, 5, 1),
(71, 1, 1, '2.0', 'wr4fwf4', 'Final Logo V2.png', 1, 1598219766, 5, 1),
(72, 1, 2, '2.0', 'wr4fwf4', 'logotop.png', 1, 1598219766, 5, 1),
(73, 1, 3, '3.0', '1', 'SSIS logo - Copy.png', 1, 1598219766, 5, 1),
(74, 1, 4, '2.0', 'wr4fwf4', '3NHm98U.jpg', 1, 1598219766, 5, 1),
(75, 1, 5, '2.0', 'wr4fwf4', '', 1, 1598219766, 5, 1),
(76, 2, 1, '0.5', 'Note20', '15982205309535276042989226946219.jpg', 1, 1598220481, 4, 1),
(77, 2, 2, '1.0', 'Note20', '1598220560082279143759909183504.jpg', 1, 1598220481, 4, 1),
(78, 2, 3, '2.0', 'Note20 ', '15982205812942412577624062403814.jpg', 1, 1598220481, 4, 1),
(79, 2, 4, '1.5', '', '15982206207498108764801436239263.jpg', 1, 1598220481, 4, 1),
(80, 2, 5, '1.0', '', '15982206441853505292288848848045.jpg', 1, 1598220481, 4, 1),
(81, 1, 1, '1.5', 'srdtcvfytbuhn', 'Capital.png', 1, 1600114040, 5, 1),
(82, 1, 2, '0.0', 'aedae', '', 1, 1600114040, 5, 1),
(83, 1, 3, '3.0', 'wefwe', '', 1, 1600114040, 5, 1),
(84, 1, 4, '2.0', 'rtgergterg', '', 1, 1600114040, 5, 1),
(85, 1, 5, '2.0', 'ergergegr', '', 1, 1600114040, 5, 1),
(86, 1, 1, '1.0', 'dvrtgvrftgbrfbfbs', '171 Vegan avocado mac and cheese ? Mac and cheese à l\'avocat vegan.jpg', 1, 1601320820, 5, 1),
(87, 1, 2, '0.0', '', '', 1, 1601320820, 5, 1),
(88, 1, 3, '0.0', '', '', 1, 1601320820, 5, 1),
(89, 1, 4, '0.0', '', '', 1, 1601320820, 5, 1),
(90, 1, 5, '0.0', '', '', 1, 1601320820, 5, 1),
(91, 1, 1, '1.5', 'ascascasc', '970076.jpg', 1, 1606354205, 3, 1),
(92, 1, 2, '0.0', '', '', 1, 1606354205, 3, 1),
(93, 1, 3, '0.0', '', '', 1, 1606354205, 3, 1),
(94, 1, 4, '0.0', '', '', 1, 1606354205, 3, 1),
(95, 1, 5, '0.0', '', '', 1, 1606354205, 3, 1),
(96, 1, 6, '0.0', '', '', 1, 1606354205, 3, 1),
(97, 1, 7, '0.0', '', '', 1, 1606354205, 3, 1),
(98, 1, 8, '0.0', '', '', 1, 1606354205, 3, 1),
(99, 1, 9, '0.0', '', '', 1, 1606354205, 3, 1),
(100, 1, 10, '0.0', '', '', 1, 1606354205, 3, 1),
(101, 1, 11, '0.0', '', '', 1, 1606354205, 3, 1),
(102, 1, 12, '0.0', '', '', 1, 1606354205, 3, 1),
(103, 1, 13, '0.0', '', '', 1, 1606354205, 3, 1),
(104, 1, 14, '0.0', '', '', 1, 1606354205, 3, 1),
(105, 1, 15, '0.0', '', '', 1, 1606354205, 3, 1),
(106, 1, 16, '0.0', '', '', 1, 1606354205, 3, 1),
(107, 1, 17, '0.0', '', '', 1, 1606354205, 3, 1),
(108, 1, 18, '0.0', '', '', 1, 1606354205, 3, 1),
(109, 1, 19, '0.0', '', '', 1, 1606354205, 3, 1),
(110, 1, 20, '0.0', '', '', 1, 1606354205, 3, 1),
(111, 1, 21, '0.0', '', '', 1, 1606354205, 3, 1),
(112, 1, 22, '0.0', '', '', 1, 1606354205, 3, 1),
(113, 1, 23, '0.0', '', '', 1, 1606354205, 3, 1),
(114, 1, 24, '0.0', '', '', 1, 1606354205, 3, 1),
(115, 1, 25, '0.0', '', '', 1, 1606354205, 3, 1),
(116, 1, 26, '0.0', '', '', 1, 1606354205, 3, 1),
(117, 1, 27, '0.0', '', '', 1, 1606354205, 3, 1),
(118, 1, 28, '0.0', '', '', 1, 1606354205, 3, 1),
(119, 1, 29, '0.0', '', '', 1, 1606354205, 3, 1),
(120, 1, 30, '0.0', '', '', 1, 1606354205, 3, 1),
(121, 1, 31, '0.0', '', '', 1, 1606354205, 3, 1),
(122, 1, 32, '0.0', '', '', 1, 1606354205, 3, 1),
(123, 1, 33, '0.0', '', '', 1, 1606354205, 3, 1),
(124, 1, 34, '0.0', '', '', 1, 1606354205, 3, 1),
(125, 1, 35, '0.0', '', '', 1, 1606354205, 3, 1),
(126, 1, 36, '0.0', '', '', 1, 1606354205, 3, 1),
(127, 1, 37, '0.0', '', '', 1, 1606354205, 3, 1),
(128, 1, 38, '0.0', '', '', 1, 1606354205, 3, 1),
(129, 1, 39, '0.0', '', '', 1, 1606354205, 3, 1),
(130, 1, 40, '0.5', 'asxasx', 'art.png', 1, 1606354205, 3, 1),
(131, 1, 41, '1.0', '', '970076.jpg,art.png', 1, 1606354205, 3, 1),
(132, 3, 1, '4.0', 'wefubwf', '970076.jpg', 1, 1606354335, 2, 1),
(133, 3, 1, '0.0', '', '', 1, 1606354335, 2, 1),
(134, 3, 1, '0.0', '', '', 1, 1606354335, 2, 1),
(135, 3, 1, '0.0', '', '', 1, 1606354335, 2, 1),
(136, 3, 2, '0.0', '', '', 1, 1606354335, 2, 1),
(137, 3, 2, '0.0', '', '', 1, 1606354335, 2, 1),
(138, 3, 2, '0.0', '', '', 1, 1606354335, 2, 1),
(139, 3, 2, '0.0', '', '', 1, 1606354335, 2, 1),
(140, 3, 2, '0.0', '', '', 1, 1606354335, 2, 1),
(141, 3, 2, '0.0', '', '', 1, 1606354335, 2, 1),
(142, 3, 2, '0.0', '', '', 1, 1606354335, 2, 1),
(143, 3, 2, '0.0', '', '', 1, 1606354335, 2, 1),
(144, 3, 2, '0.0', '', '', 1, 1606354335, 2, 1),
(145, 3, 3, '0.0', '', '', 1, 1606354335, 2, 1),
(146, 3, 3, '0.0', '', '', 1, 1606354335, 2, 1),
(147, 3, 3, '0.0', '', '', 1, 1606354335, 2, 1),
(148, 3, 4, '0.0', '', '', 1, 1606354335, 2, 1),
(149, 3, 4, '0.0', '', '', 1, 1606354335, 2, 1),
(150, 3, 4, '0.0', '', '', 1, 1606354335, 2, 1),
(151, 3, 4, '0.0', '', '', 1, 1606354335, 2, 1),
(152, 3, 5, '0.0', '', '', 1, 1606354335, 2, 1),
(153, 3, 5, '0.0', '', '', 1, 1606354335, 2, 1),
(154, 3, 5, '0.0', '', '', 1, 1606354335, 2, 1),
(155, 3, 5, '0.0', '', '', 1, 1606354335, 2, 1),
(156, 3, 5, '0.0', '', '', 1, 1606354335, 2, 1),
(157, 3, 5, '0.0', '', '', 1, 1606354335, 2, 1),
(158, 3, 6, '0.0', '', '', 1, 1606354335, 2, 1),
(159, 3, 6, '0.0', '', '', 1, 1606354335, 2, 1),
(160, 3, 6, '0.0', '', '', 1, 1606354335, 2, 1),
(161, 3, 6, '0.0', '', '', 1, 1606354335, 2, 1),
(162, 3, 6, '0.0', '', '', 1, 1606354335, 2, 1),
(163, 3, 5, '0.0', '', '', 1, 1606354335, 2, 1),
(164, 3, 5, '0.0', '', '', 1, 1606354335, 2, 1),
(165, 3, 5, '0.0', '', '', 1, 1606354335, 2, 1),
(166, 3, 5, '1.5', 'efdergthyntuitrewertfyguygtfdrs', 'art.png', 1, 1606354335, 2, 1),
(167, 3, 5, '1.0', 'khyjvfjyffyjtg', 'art.png', 1, 1606354335, 2, 1),
(168, 3, 6, '2.0', '98765432w', '970076.jpg,art.png,confirmation.PNG', 1, 1606354335, 2, 1),
(169, 3, 1, '0.5', 'dxgfchgvjhbkjnlk', '970076.jpg', 1, 1606355287, 4, 1),
(170, 3, 1, '0.0', '', '', 1, 1606355287, 4, 1),
(171, 3, 1, '0.0', '', '', 1, 1606355287, 4, 1),
(172, 3, 1, '0.0', '', '', 1, 1606355287, 4, 1),
(173, 3, 2, '0.0', '', '', 1, 1606355287, 4, 1),
(174, 3, 2, '0.0', '', '', 1, 1606355287, 4, 1),
(175, 3, 2, '0.0', '', '', 1, 1606355287, 4, 1),
(176, 3, 2, '0.0', '', '', 1, 1606355287, 4, 1),
(177, 3, 2, '0.0', '', '', 1, 1606355287, 4, 1),
(178, 3, 2, '0.0', '', '', 1, 1606355287, 4, 1),
(179, 3, 2, '0.0', '', '', 1, 1606355287, 4, 1),
(180, 3, 2, '0.0', '', '', 1, 1606355287, 4, 1),
(181, 3, 2, '0.0', '', '', 1, 1606355287, 4, 1),
(182, 3, 3, '0.0', '', '', 1, 1606355287, 4, 1),
(183, 3, 3, '0.0', '', '', 1, 1606355287, 4, 1),
(184, 3, 3, '0.0', '', '', 1, 1606355287, 4, 1),
(185, 3, 4, '0.0', '', '', 1, 1606355287, 4, 1),
(186, 3, 4, '0.0', '', '', 1, 1606355287, 4, 1),
(187, 3, 4, '0.0', '', '', 1, 1606355287, 4, 1),
(188, 3, 4, '0.0', '', '', 1, 1606355287, 4, 1),
(189, 3, 5, '0.0', '', '', 1, 1606355287, 4, 1),
(190, 3, 5, '0.0', '', '', 1, 1606355287, 4, 1),
(191, 3, 5, '0.0', '', '', 1, 1606355287, 4, 1),
(192, 3, 5, '0.0', '', '', 1, 1606355287, 4, 1),
(193, 3, 5, '0.0', '', '', 1, 1606355287, 4, 1),
(194, 3, 5, '0.0', '', '', 1, 1606355287, 4, 1),
(195, 3, 6, '0.0', '', '', 1, 1606355287, 4, 1),
(196, 3, 6, '0.0', '', '', 1, 1606355287, 4, 1),
(197, 3, 6, '0.0', '', '', 1, 1606355287, 4, 1),
(198, 3, 6, '0.0', '', '', 1, 1606355287, 4, 1),
(199, 3, 6, '0.0', '', '', 1, 1606355287, 4, 1),
(200, 3, 5, '0.0', '', '', 1, 1606355287, 4, 1),
(201, 3, 5, '0.0', '', '', 1, 1606355287, 4, 1),
(202, 3, 5, '0.0', '', '', 1, 1606355287, 4, 1),
(203, 3, 5, '1.0', 'liukgyjfthdgrhftyjguhkgyjhfcghjilhgv', 'art.png', 1, 1606355287, 4, 1),
(204, 3, 5, '0.0', '', '', 1, 1606355287, 4, 1),
(205, 3, 6, '2.0', 'xfjkhlighcfchgjhlji;lhugjvhcfhghjiko;jhghncghjkoljhghjklik;oihb', '970076.jpg,art.png', 1, 1606355287, 4, 1);

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
  `question_number` float NOT NULL,
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
(6, 6, 'Les récipients de lave-glace sont-ils propres, remplis et les raclettes sont-elle\r\ndisponible et en bon état ?', 2, 1, 1),
(7, 7, 'Les supports à papier aux pompes sont-ils propres et bien garnis ?', 2, 1, 1),
(8, 8, 'Le coin aspirateur et borne de gonflage sont-ils propre et/ou bien déneigé', 1, 1, 1),
(9, 9, 'Le récipient d\'absorbant est-il propre, au 3/4 plein et un inventaire de sûreté de 2 sacs\r\nest-il disponible ?', 2, 1, 1),
(10, 10, 'Le terrain est-il propre et/ou bien déneigé, (papier, mégots, mauvaises herbes, etc.) ?', 2, 1, 1),
(11, 11, 'Les bordures de ciment du terrain sont bien entretenus (papier, mégots, mauvaises\r\nherbes, etc.) ?', 2, 1, 1),
(12, 12, 'Les présentoirs extérieurs sont-ils propres, disponible et/ou bien déneigé ?', 3, 1, 1),
(13, 13, 'Le plancher incluant la chambre froide et l\'entrepôt est-il propre ?', 3, 1, 1),
(14, 14, 'Les vitrines (cadrage et vitres) sont-elles propres ?', 1, 1, 1),
(15, 15, 'Les portes d\'entrée (cadrage et vitres) sont-elles propres ?', 1, 1, 1),
(16, 16, 'La baie vitrée autour du comptoir-caisse est-elle propre et non bariolée ?', 1, 1, 1),
(17, 17, 'Les portes de chambre froide sont-elles propres et exemptes de collants ?', 2, 1, 1),
(18, 18, 'La toilette est-elle propre ?', 3, 1, 1),
(19, 19, 'La toilette est-elle bien garnie de fournitures ?', 2, 1, 1),
(20, 20, 'La poubelle de la toilette est au 3/4 pleine maximum ?', 1, 1, 1),
(21, 21, 'Les trappes d\'aérations et boitiers de lumières sont-ils propres (incluant la salle de\r\nbain) ?', 1, 1, 1),
(22, 22, 'L\'entrepôt est-il bien rangé ?', 1, 1, 1),
(23, 23, 'La chambre électrique est-elle dégagée ?', 1, 1, 1),
(24, 24, 'Les dessus de tablettes, gondoles, présentoirs sont-ils propres ?', 4, 1, 1),
(25, 25, 'Le comptoir caisse est-il propre ?', 2, 1, 1),
(26, 26, 'Y a-t-il des produits périmé en tablette ?', 2, 1, 1),
(27, 27, 'Le frigo a lait est-il propre (incluant la base) ?', 1, 1, 1),
(28, 28, 'Le frigo à sandwichs est-il propre (incluant la base) ?', 1, 1, 1),
(29, 29, 'Les congélateurs intérieurs sont-ils propres (incluant la base) ?', 1, 1, 1),
(30, 30, 'Le congélateur Nestlé est-il propre et pas trop glacé ?', 1, 1, 1),
(31, 31, 'Le frigo de bout d\'ilot ET le frigo Red Bull est propre (incluant les bases) ?', 1, 1, 1),
(32, 32, 'L\'aire de travail des PSI (derriere le comptoir) est-elle propre et bien rangée ?', 1, 1, 1),
(33, 33, 'La section employés (manteau, lunch ou autres) est propre et bien rangée ?', 1, 1, 1),
(34, 34, 'L\'aire de préparation de la boulangerie et du café est-elle propre et bien rangée ?', 3, 1, 1),
(35, 35, 'Les pots à café (base, tige, extérieur) sont-ils propre ?', 2, 1, 1),
(36, 36, 'La cafetière (panier, diffuseur, dessous) est-elle propre ?', 2, 1, 1),
(37, 37, 'La machine à cappuccino est-elle propre à l\'intérieur et à l\'extérieur ?', 2, 1, 1),
(38, 38, 'La section Relais Café est-elle propre (présentoirs, comptoir intérieur/extérieur,\r\nmicro-ondes) ?', 3, 1, 1),
(39, 39, 'Le comptoir de Slush est-il propre à l\'intérieur et à l\'extérieur ?', 1, 1, 1),
(40, 40, 'Les Machines a Slush sont-elles propres ?', 1, 1, 1),
(41, 41, 'La machine a Cappuccino Glacé est-elle propre incluant les filtres a l\'arrière ?', 1, 1, 1),
(42, 1, 'Le marchandisage de la facade du magasin respecte-t-il les directives de Petro-Canada ? ', 2, 2, 1),
(43, 2, 'Est-ce que le rack à huile est ouvert, bien remplis et étiquetté ?', 1, 2, 1),
(44, 3, 'Les gros lots de Loto-Québec représentent la réalité du moment ?', 2, 2, 1),
(45, 4, 'Le lave-glace est bien marchandisé aux pompes ?', 2, 2, 1),
(46, 5, 'L\'affichage sur les pompes (facade et pump tupper) respecte-t-il le guide de marchandisage ?', 2, 2, 1),
(47, 6, 'L\'affichage promotionnel sur les pistolets respecte-t-il le guide de marchandisage ?', 2, 2, 1),
(48, 7, 'L\'affichage des cadres pressions sur les colonnes de marquise respecte-t-il le guide de marchandisage ?', 2, 2, 1),
(49, 8, 'Est-ce que l\'affichage permanent est bien installé et en bon état(ex: affiche ilôt express)', 2, 2, 1),
(50, 9, 'Les chevalets (Aboard) respectent le guide de marchandisage (incluant lave-auto) ?', 2, 2, 1),
(51, 10, 'L\'affichage à la rue respecte-t-il le guide de marchandisage (incluant la bière) ?', 2, 2, 1),
(52, 11, 'L\'affichage sur le batiment respecte-t-il le guide de marchandisage ?', 2, 2, 1),
(53, 12, 'L\'affichage de vitrine respecte-t-il le guide de marchandisage (inlcuant la bière) ?', 2, 2, 1),
(54, 13, 'L\'affichage de porte respecte-t-il le guide de marchandisage (aucune affiche non autorisée) ?', 2, 2, 1),
(55, 14, 'Le comptoir caisse est-il marchandisé selon le guide de marchandisage ?', 1, 2, 1),
(56, 15, 'Le marchandisage et le facing des chocolats et gommes au PP est bien effectué (aucun trou, boite vide)?', 3, 2, 1),
(57, 16, 'Le menu des offres est-il en place sur les deux caisses, du bon coté et dans un acrylic en bon état ? ', 2, 2, 1),
(58, 17, 'Est-ce que l\'ailette au poste de paiement 2 est marchandisé selon le guide et bien remplie ? ', 2, 2, 1),
(59, 18, 'Est-ce que le derrière de comptoir est propre et bien rangé (incluant facing des crochets) ?', 2, 2, 1),
(60, 19, 'Est-ce qu\'un panier bien marchandisé de gommes/chocolats en promo est présenté sur le comptoir ?', 1, 2, 1),
(61, 20, 'Le présentoir a briquets est en bon état, bien rempli et contient l\'affichage promotionnel ?', 1, 2, 1),
(62, 21, 'Est-ce que le frigo Red bull est conforme au guide de marchandisage et a celui de la bière ? ', 1, 2, 1),
(63, 22, 'Est-ce que le frigo de bout d\'ilôt est marchandisé selon le guide et bien rempli ? ', 1, 2, 1),
(64, 23, 'Est-ce que les présentoirs latéraux et le dessus du frigo de bout d\'ilot est conforme au guide et bien rempli? ', 1, 2, 1),
(65, 24, 'Est-ce que le présentoir latéral d\'achats impulsifs est marchandisé selon le guide et bien rempli ? ', 1, 2, 1),
(66, 25, 'Est-ce que les présentoirs de plancher obligatoires sont bien en place et marchandisés selon le guide ? ', 1, 2, 1),
(67, 26, 'Est-ce que toutes les affiches d\'étagères ont été installées et aux bons endroits ?', 1, 2, 1),
(68, 27, 'Est-ce que les affiches permanentes sont toujours en place et en bon état ( ex: Besoin de lait, coke)', 1, 2, 1),
(69, 28, 'Les décalcomanies de frigos sont toutes installées en respectant la séquence et la hauteur des yeux?', 1, 2, 1),
(70, 29, 'Les bandes murales au-dessus des frigos sont installées et respectent la séquence?', 1, 2, 1),
(71, 30, 'Les poignées promotionnelles sont toutes en place et contiennent les bonnes affiches ? ', 1, 2, 1),
(72, 31, 'L\'affichage du mur arrière du comptoir caisse respecte le guide et les affiches sont en bon état ? ', 1, 2, 1),
(73, 32, 'Est-ce que la section Chargeurs/Services Commerciaux est remplie, bien marchandisée et étiquettée ?', 1, 2, 1),
(74, 33, 'Est-ce les affiches expirées ont toutes été retirées ? ', 1, 2, 1),
(75, 34, 'Le presentoir Petro-Points respecte-t-il le planogramme et contient-il suffisament de documents ?', 1, 2, 1),
(76, 35, 'L\'étalage de bière no. 1 est-il conforme (variété de produits, stocks suffisants, hauteur, affichage) ?', 1, 2, 1),
(77, 36, 'L\'étalage de bière no. 2 est-il conforme (variété de produits, stocks suffisants, hauteur, affichage) ?', 1, 2, 1),
(78, 37, 'L\'étalage de bière no. 3 est-il conforme (variété de produits, stocks suffisants, hauteur, affichage) ?', 1, 2, 1),
(79, 38, 'L\'étalage de bière no. 4 est-il conforme (variété de produits, stocks suffisants, hauteur, affichage) ?', 1, 2, 1),
(80, 39, 'Le marchandisage, le remplissage et le \"facing\" des portes de biere est-il bien effectué (aucun trou) ?', 1, 2, 1),
(81, 40, 'L\'affichage des portes de bière est bien effectué incluant les tickets channels (Max 4 affiche par porte) ?', 1, 2, 1),
(82, 41, 'L\'intérieur de la chambre froide est-il bien rangé et respecte-t-il les espaces déterminés par compagnie ?', 3, 2, 1),
(83, 42, 'L\'affichage de prix à l\'intérieur de la chambre froide est-il bien effectué ?', 1, 2, 1),
(84, 43, 'Le marchandisage, le remplissage et le \"facing\" des portes de breuvages est-il bien effectué (aucun trou) ?', 1, 2, 1),
(85, 44, 'Le marchandisage et le \"facing\" des autres frigos (sandwich/lait) est-il bien effectué (aucun trou) ?', 1, 2, 1),
(86, 45, 'Le marchandisage, le remplissage et le \"facing\" des portes de surgelés est-il bien effectué (aucun trou) ?', 1, 2, 1),
(87, 46, 'Est-ce que tous les étalages et présentoirs de plancher ont une étiquette de prix ?', 1, 2, 1),
(88, 47, 'Les étiquettes de prix sont en place pour chaque produit (tablettes, crochets, frigos) ?', 3, 2, 1),
(89, 48, 'Le marchandisage et le \"facing\" des tablettes et crochets est-il bien effectué (aucun trou) ?', 3, 2, 1),
(90, 49, 'Le présentoir à Carte-Cadeaux est-il conforme au guide de marchandisage et est-il bien rempli ?', 1, 2, 1),
(91, 50, 'Il n\'y a aucune affiche écrite à la main (sauf celles autorisées comme le prix de la bière) ?', 1, 2, 1),
(92, 51, 'Le prix affiché des cigarettes représente-t-il la réalité du scan (bulloch) ?', 1, 2, 1),
(93, 52, 'Les produits du tabac inclus sur l\'enseigne de prix sont disponibles au poste de paiement ?', 1, 2, 1),
(94, 53, 'L\'affichage permanent est en place et en bon état ? ', 1, 2, 1),
(95, 54, 'L\'affichage des promotions est bien en place (Café / Patisseries / Slush) ?', 1, 2, 1),
(96, 55, 'La section RelaisCafé est-elle bien garnie (café, sucre, lait, vestes, bâtons, napkins, ustensiles etc…) ?', 1, 2, 1),
(97, 56, 'La section RelaisCafé est bien présentée, propre et attrayante ? ', 2, 2, 1),
(98, 57, 'Tous les thermos sont en place et la variété est logique avec l\'heure de la journée et le volume du site ?', 1, 2, 1),
(99, 58, 'Les minuteries sont en marche sur les thermos et aucune ne \'flash\' ?', 1, 2, 1),
(100, 59, 'La température des cafés offerts est au moins a 165 degrés celcius dans les thermos ?', 2, 2, 1),
(101, 60, 'Le niveau de l\'eau de la cafetière arrive a 64 onces ?', 2, 2, 1),
(102, 61, 'Le registre de production et de perte du café est utilisé ?', 2, 2, 1),
(103, 62, 'La tournée café quotidenne est effectuée au mois une fois par semaine par écrit ?', 2, 2, 1),
(104, 63, 'Le présentoir à boulangerie est-il bien garni et attrayant pour nos invités ?', 2, 2, 1),
(105, 64, 'Le registre de production et de perte de boulangerie est-il utilisé adéquatement ?', 2, 2, 1),
(106, 65, 'Les duopack de Muffins sont disponibles, bien marchandisés et en quantité suffisante selon le volume du site ?', 2, 2, 1),
(107, 66, 'La section Relais fraicheur est-elle bien garnie, bien présentée, propre et attrayante ?', 2, 2, 1),
(108, 67, 'La tournée matinale Priorité Service est effectuée chaque matin ?', 2, 2, 1),
(109, 1.1, 'Est-ce que le cartable est bien rempli et utilisé ?', 5, 3, 1),
(110, 1.2, 'Est-ce que le registre des visiteur est utilisé et organisé ?', 3, 3, 1),
(111, 1.3, 'Est-ce que le registre d\'émission et de suivis de PAM est utilisé et organisé ?', 5, 3, 1),
(112, 1.4, 'Est-ce que les tournées matinales ont été effectuées quotidiennement?', 5, 3, 1),
(113, 1.5, 'Est-ce que la formule de relavage est utilisé et organisé ?', 3, 3, 1),
(114, 1.6, 'Est-ce que la formule d\'essai/maintenance est utilisé et organisé ?', 5, 3, 1),
(115, 1.7, 'Lors de ma présence, est-ce que le PSI a fait l\'offre de lavage \"Tout compris de\r\nluxe\" ?', 5, 3, 1),
(116, 1.8, 'Est-ce qu\'il y a au moins une personne au site qui porte des bottes de sécurité ?', 5, 3, 1),
(117, 1.9, 'Est-ce que la liste de prix est affichée au comptoir-caisse? Est-ce qu\'elle est exacte\r\net visible?', 2, 3, 1),
(118, 2.1, 'Est-ce que le message CRIND mentionne l\'offre du lave-auto?', 3, 3, 1),
(119, 2.2, 'En été, est-ce que les portes sont ouvertes durant les heures ouvrables (8h à 17h) ?', 1, 3, 1),
(120, 2.3, 'Est-ce que la boite à code est propre ?', 3, 3, 1),
(121, 2.4, 'Est-ce que les aboards sont bien positionnés a l\'entrée et a la sortie du lave-auto et\r\ncontiennent une affiche ?', 5, 3, 1),
(122, 2.5, 'Est-ce que les aspirateurs fonctionnent adéquatement ?', 1, 3, 1),
(123, 3.1, 'Est-ce que les lumières du tunnel sont fonctionnelles et allumées?', 2, 3, 1),
(124, 3.2, 'Est-ce que le plancher est exempt de débris, roches, feuilles ?', 5, 3, 1),
(125, 4.1, 'Est-ce que les extincteurs sont aux endroits désignés et en état de charge ?', 2, 3, 1),
(126, 4.2, 'Est-ce que les bouchons d\'oreilles et des gants de cuir sont disponibles dans le\r\nlave-auto?', 2, 3, 1),
(127, 4.3, 'Est-ce que la chambre mécanique est propre, ordonnée et bien éclairée?', 4, 3, 1),
(128, 4.4, 'Est-ce que les outils sont bien rangés et sous clé?', 2, 3, 1),
(129, 4.5, 'Est-ce que le tunnel et la salle des installations électriques est bien rangée?', 3, 3, 1),
(130, 4.6, 'Est-ce que les produits chimiques et les savons sont rangés aux endroits\r\nappropriés ?', 3, 3, 1),
(131, 5.1, 'Est-ce que les lumières à l\'entrée du lave-auto sont fonctionnelles et allumées?', 1, 3, 1),
(132, 5.2, 'Est-ce que le miroir est bien réglé? Voyez-vous bien le côté et les roues de votre\r\nvéhicule?', 1, 3, 1),
(133, 5.3, 'Est-ce que la boite à code a bien fonctionné?', 1, 3, 1),
(134, 5.4, 'Est-ce que les portes lave-auto se sont ouvertes dès que vous avez entré le code ?', 1, 3, 1),
(135, 5.5, 'Est-ce que le savon triple moussant a été appliqués également sur le véhicule ?', 1, 3, 1),
(136, 5.6, 'Est-ce que l\'eau dans la section de prélavage fonctionne correctement et l\'odeur estelle\r\nagréable?', 1, 3, 1),
(137, 5.7, 'Est-ce que les brosses et les lanières ont agis doucement sur votre véhicule?', 1, 3, 1),
(138, 5.8, 'Est-ce que les arches ont fonctionnées correctement ?', 1, 3, 1),
(139, 5.9, 'Est-ce que le signal de confirmation a fonctionné?', 1, 3, 1),
(140, 5.1, 'Est-ce que vous avez obtenu le lavage indiqué sur votre reçu?', 1, 3, 1),
(141, 5.11, 'Est-ce que le séchoir a agi doucement et efficacement sur votre véhicule?', 1, 3, 1),
(142, 5.12, 'En hiver, est-ce que le rideau coupe-froid fonctionne bien et est-il propre?', 2, 3, 1),
(143, 5.13, 'Est-ce que le lave-auto a bien lavé votre véhicule? Y a-t-il eu des manques?', 2, 3, 1),
(144, 5.14, 'Est-ce que votre véhicule a été bien séché sans eau et résidu de savon?', 2, 3, 1),
(145, 6.1, 'Est-ce que les PAM (autre que la liste d\'épicerie) demandés lors de la derniere\r\ninspection ont été faits ?', 2, 3, 1),
(146, 1, 'La première et la deuxième prises de température sont-elles entre 33° et 39 °F (1° et 4 °C) dans tous les réfrigérateurs? ', 3, 4, 1),
(147, 2, 'La première et la deuxième prises de température sont-elles entre 0° et - 18 °F (-18° et - 28 °C) dans tous les congélateurs, y compris les congélateurs à glace et autres congélateurs extérieurs?', 2, 4, 1),
(148, 3, 'La température de l\'eau dans les lavabos (excluant ceux des salles de bain) peut-elle atteindre 140F ou 60 C au Québec', 3, 4, 1),
(149, 4, 'Tous les lavabos (y compris ceux des toilettes) ont-ils du savon et du papier essuie-tout et (ou) un sèche-mains fonctionnel?', 3, 4, 1),
(150, 5, 'Les salles de bain sont-elles propres et fonctionnelles?', 2, 4, 1),
(151, 6, 'S\'il y a un guichet passe-monnaie à l\'établissement, vérifier qu\'il fonctionne bien et qu\'il est utilisé. ', 2, 4, 1),
(152, 7, 'Si le gérant n\'est pas là, la porte du bureau est-elle verouillée OU, s\'il est là, le PSI a-til pu expliquer que la porte devrait être verouillée quand le gérant est absent?', 2, 4, 1),
(153, 8, 'Est-ce que les coffre-forts derriere le comptoir sont fermés et verrouillée (incluant celui de la monnaie)?', 4, 4, 1),
(154, 9, 'Est-ce que les montants MAXIMUMS recommandés pour les dépôts de sécurité sont respectés  - jour - 100 $ et nuit - 50 $. ', 4, 4, 1),
(155, 10, 'Confirmer que le fonds de caisse ne dépasse pas le montant recommandé de 100 $', 4, 4, 1),
(156, 11, 'Demander au PSI ce qu\'il faut faire en cas de vol d\'essence (délit de fuite). Est-ce que le PSI est en mesure d\'expliquer ce qu\'il faire en cas de vol d\'essence?', 5, 4, 1),
(157, 12, 'Le PSI est-il en mesure de trouver le formulaire à remplir en cas de vol d\'essence et peut-il expliquer comment le remplir?', 5, 4, 1),
(158, 13, 'Le document du plan d\'intervention en cas d\'urgence (FRMCDS665) date-t-il de 2016 ou est-il plus récent  ', 2, 4, 1),
(159, 14, 'Le plan de localisation est-il rempli et contient-il toutes les exigences du plan d’intervention en cas d’urgence?  (Page 47 du document du plan d\'intervention en cas d\'urgence)', 3, 4, 1),
(160, 15, 'Les fiches signalétiques requises pour chaque matière dangereuse transportée ou stockée sur place sont-elles disponibles au poste de paiement, remplies et à jour (pas plus de 3 ans). ', 3, 4, 1),
(161, 16, 'Demander au PSI de vous montrer les gants antiperforation (gants en Nitrile jetables ou similaires) pour le nettoyage et l’enlèvement des déchets', 2, 4, 1),
(162, 17, 'Demander au PSI de vous montrer de vous montrer la trousse d\'intervention en cas de déversement. Est-ce que le kit est complet.', 3, 4, 1),
(163, 18, 'Le PSI a-t-il été en mesure d\'expliquer l\'utilité de 3 éléments de la trousse de déversement sélectionné au hasard?', 3, 4, 1),
(164, 19, 'Est-ce que PSI est en mesure d\'énumérer les comportements non-sécuritaires qu\'il faut repérer avant d\'activer un pompe et pendant qu\'un invité fait le plein?', 2, 4, 1),
(165, 20, 'Le local électrique est-il bien rangé et propre? ', 3, 4, 1),
(166, 21, 'Quand il exécute des tâches dehors, le personnel de l’établissement  porte-t-il toujours une veste de sécurité?', 3, 4, 1),
(167, 22, 'Est-ce que le formualire relative au service offert aux invités handicapés FRMCDS966  a été signé par les membres du personnel?', 3, 4, 1),
(168, 23, 'Vérifier de façon ponctuelle au moyen de quelques questions tirées de la liste de vérification - Inspection mensuelle (environnement, santé et prévention) des établissements et confirmer la conformité. Pour des suggestions veuillez faire référence au Guide pour l\'examen de référence sur la sécurité à l\'établissement (L‘article 3.11).', 3, 4, 1),
(169, 24, 'La première et la deuxième prises de température sont-elles entre 33° et 39 °F (1° et 4 °C) dans tous les réfrigérateurs? ', 2, 4, 1),
(170, 25, 'La première et la deuxième prises de température sont-elles entre 0° et - 18 °F (-18° et - 28 °C) dans tous les congélateurs, y compris les congélateurs à glace et autres congélateurs extérieurs?', 2, 4, 1),
(171, 26, 'La température de l\'eau dans les lavabos (excluant ceux des salles de bain) peut-elle atteindre 140F ou 60 C au Québec', 2, 4, 1),
(172, 27, 'Tous les lavabos (y compris ceux des toilettes) ont-ils du savon et du papier essuie-tout et (ou) un sèche-mains fonctionnel?', 2, 4, 1),
(173, 28, 'Les salles de bain sont-elles propres et fonctionnelles?', 2, 4, 1),
(174, 29, 'Choisissez au hasard cinq produits parmi les produits suivants : produits laitiers, œufs, viandes emballées, sandwichs emballés, produits de boulangerie emballés et articles de dépanneur.   (Ces produits portent-ils une date « Meilleur avant » et ne sont pas périmés?)', 4, 4, 1),
(175, 30, 'Tous les produits consommables sont-ils à au moins six pieds du sol?  (à l\'exception des articles promotionnels des fournisseurs', 2, 4, 1),
(176, 31, 'Le formulaire Intervenir en cas de maladie d’origine alimentaire possible est-il disponible dans la Plan d’intervention en cas d\'urgence et signé par les personnel du site?', 3, 4, 1),
(177, 32, 'Demander le PSI d’expliquer le processus en cas d’incident d\'origine alimentaire et de dire quel formulaire il doit remplir. ', 3, 4, 1),
(178, 33, 'Demander le PSI  d’expliquer le processus de rappel des fournisseurs. (Le PSI  a-t-il pu expliquer le processus et dire quel formulaire il doit remplir?)', 3, 4, 1),
(179, 34, 'Les bouteilles vaporisateurs de produits d\'entretien sont bien étiquetées (le nom du produit, la classe di SIMDUT, son utilisation sécuritaire et les premiers soins?', 2, 4, 1),
(180, 35, 'Est-ce que les éléments suivants étaient en place à l\'établissement : deux seaux pour nettoyer les chiffons aux services alimentaires complexes; un flacon pulvérisateur de désinfectant et du papier essuie-tout dans les établissements qui servent seulement du café?', 3, 4, 1);

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
(6, 'IB', 'inspector', 'Hhhhh', '202cb962ac59075b964b07152d234b70', 3, 1),
(7, 'Krunal', 'Patel', 'ironman', '202cb962ac59075b964b07152d234b70', 5, 1),
(8, 'Jordan', 'Yip', 'ipman', 'caf1a3dfb505ffed0d024130f58c5cfa', 7, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_inspection`
--
ALTER TABLE `tbl_inspection`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

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
