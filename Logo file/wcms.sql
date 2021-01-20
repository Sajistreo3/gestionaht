-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2020 at 06:54 AM
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
-- Database: `wcms`
--
use `wcms`;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

DROP TABLE IF EXISTS `tbl_portfolio`;
CREATE TABLE IF NOT EXISTS `tbl_portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_section`
--

DROP TABLE IF EXISTS `tbl_section`;
CREATE TABLE IF NOT EXISTS `tbl_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_section`
--

INSERT INTO `tbl_section` (`id`, `name`, `title`, `body`) VALUES
(1, 'SERVICES', 'CHECK OUR SERVICES', '<section id=\"services\" class=\"services\">\r\n <div class=\"container\" data-aos=\"fade-up\">\r\n\r\n <div class=\"section-title\">\r\n <h2>Services</h2>\r\n <p>Check our Services</p>\r\n </div>\r\n\r\n <div class=\"row\">\r\n <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"zoom-in\" data-aos-delay=\"100\">\r\n <div class=\"icon-box\">\r\n <div class=\"icon\"><i class=\"bx bxl-dribbble\"></i></div>\r\n <h4><a href=\"\">Lorem Ipsum</a></h4>\r\n <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>\r\n </div>\r\n </div>\r\n\r\n <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0\" data-aos=\"zoom-in\" data-aos-delay=\"200\">\r\n <div class=\"icon-box\">\r\n <div class=\"icon\"><i class=\"bx bx-file\"></i></div>\r\n <h4><a href=\"\">Sed ut perspiciatis</a></h4>\r\n <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>\r\n </div>\r\n </div>\r\n\r\n <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0\" data-aos=\"zoom-in\" data-aos-delay=\"300\">\r\n <div class=\"icon-box\">\r\n <div class=\"icon\"><i class=\"bx bx-tachometer\"></i></div>\r\n <h4><a href=\"\">Magni Dolores</a></h4>\r\n <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>\r\n </div>\r\n </div>\r\n\r\n <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">\r\n <div class=\"icon-box\">\r\n <div class=\"icon\"><i class=\"bx bx-world\"></i></div>\r\n <h4><a href=\"\">Nemo Enim</a></h4>\r\n <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>\r\n </div>\r\n </div>\r\n\r\n <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"200\">\r\n <div class=\"icon-box\">\r\n <div class=\"icon\"><i class=\"bx bx-slideshow\"></i></div>\r\n <h4><a href=\"\">Dele cardo</a></h4>\r\n <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>\r\n </div>\r\n </div>\r\n\r\n <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\" data-aos=\"zoom-in\" data-aos-delay=\"300\">\r\n <div class=\"icon-box\">\r\n <div class=\"icon\"><i class=\"bx bx-arch\"></i></div>\r\n <h4><a href=\"\">Divera don</a></h4>\r\n <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>\r\n </div>\r\n </div>\r\n\r\n </div>\r\n\r\n </div>\r\n </section>'),
(2, 'ABOUT', 'WHO WE ARE', '<div class=\"row content\" data-aos=\"fade-up\">\r\n<div class=\"col-lg-6\">\r\n<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n<ul>\r\n<li>Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>\r\n<li>Duis aute irure dolor in reprehenderit in voluptate velit</li>\r\n<li>Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-lg-6 pt-4 pt-lg-0\">\r\n<p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<a class=\"btn-learn-more\" href=\"#\">Learn More</a></div>\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

DROP TABLE IF EXISTS `tbl_team`;
CREATE TABLE IF NOT EXISTS `tbl_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `bio` text NOT NULL,
  `picture` varchar(200) NOT NULL,
  `social` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `name`, `title`, `bio`, `picture`, `social`, `status`) VALUES
(DEFAULT, 'Walter White', 'Chief Executive Officer', 'Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel.', 'team-1.jpg', 'https://twitter.com/|https://www.facebook.com/|https://www.instagram.com/|https://www.linkedin.com/', DEFAULT);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` tinyint(3) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
