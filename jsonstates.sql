-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2014 at 06:51 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jsonstates`
--

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `created`, `updated`) VALUES
(1, 'Johor', NULL, NULL),
(2, 'Kedah', NULL, NULL),
(3, 'Kelantan', NULL, NULL),
(4, 'Melaka', NULL, NULL),
(5, 'Negeri Sembilan', NULL, NULL),
(6, 'Pahang', NULL, NULL),
(7, 'Pulau Pinang', NULL, NULL),
(8, 'Perak', NULL, NULL),
(9, 'Perlis', NULL, NULL),
(10, 'Selangor', NULL, NULL),
(11, 'Terengganu', NULL, NULL),
(12, 'Sabah', NULL, NULL),
(13, 'Sarawak', NULL, NULL),
(14, 'Wilayah Persekutuan Kuala Lumpur', NULL, NULL),
(15, 'Wilayah Persekutuan Labuan', NULL, NULL),
(16, 'Wilayah Persekutuan Putrajaya', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
