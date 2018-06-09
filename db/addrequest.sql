-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2017 at 01:11 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `insertion`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtable`
--

CREATE TABLE IF NOT EXISTS `addrequest` (
  `user_id` int(11) NOT NULL,
  `itemname` varchar(250) NOT NULL,
  `itemphoto` longblob NOT NULL,
  `category` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `soaddress` varchar(250) NOT NULL,
  `deaddress` varchar(250) NOT NULL,
  `depdate` DATE NOT NULL,
  `deldate` DATE NOT NULL,
  `start_bid` int(5) NOT NULL,
  `status` varchar(25) NOT NULL 
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `addtable`
--

/*INSERT INTO `addrequest` (`itemname`, `itemphoto`, `category`, `description`, `soaddress`, `deaddress`, `depdate`,`deldate`,`start_bid`,`status`) VALUES
('item','NULL','electronics','refridgerator','surat','mumbai','4/3/2018','10/3/2018','150','NULL');
*/
-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
