-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2012 at 04:18 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pmcore`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertiser`
--

CREATE TABLE IF NOT EXISTS `advertiser` (
  `advertiser_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `billing_address_1` varchar(100) DEFAULT NULL,
  `billing_address_2` varchar(100) DEFAULT NULL,
  `billing_state` varchar(100) DEFAULT NULL,
  `billing_zip` varchar(45) DEFAULT NULL,
  `default_currency` char(3) DEFAULT NULL,
  `timezone` varchar(45) DEFAULT NULL,
  `billing_country` varchar(45) DEFAULT NULL,
  `network_id` int(11) NOT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `lastmodified` datetime DEFAULT NULL,
  PRIMARY KEY (`advertiser_id`),
  KEY `fk_advertiser_network1` (`network_id`),
  KEY `advertiser_id` (`advertiser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `advertiser`
--

INSERT INTO `advertiser` (`advertiser_id`, `name`, `billing_address_1`, `billing_address_2`, `billing_state`, `billing_zip`, `default_currency`, `timezone`, `billing_country`, `network_id`, `status`, `lastmodified`) VALUES
(2, 'AdRunner', '111 RocketScience Place', 'Ste 400', 'STATE_KEY', '10032', 'USD', 'EST', 'COUNTRY_KEY', 2, 'active', '0000-00-00 00:00:00'),
(3, 'AdverTest Inc', '111 Science Place', 'Ste 402', 'STATE_KEY', '10032', 'USD', 'EST', 'COUNTRY_KEY', 3, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `network`
--

CREATE TABLE IF NOT EXISTS `network` (
  `network_id` int(11) NOT NULL,
  PRIMARY KEY (`network_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`network_id`) VALUES
(1),
(2),
(3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertiser`
--
ALTER TABLE `advertiser`
  ADD CONSTRAINT `fk_advertiser_network1` FOREIGN KEY (`network_id`) REFERENCES `network` (`network_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
