-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2015 at 07:37 PM
-- Server version: 5.5.40
-- PHP Version: 5.5.20-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `valleyds_danjmendoza_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `website` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(9) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `progress` enum('Not Sent','App Sent','Dead End') NOT NULL,
  `link` varchar(200) NOT NULL,
  `coverletter` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `categories` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `title`, `url`, `image`, `categories`) VALUES
(1, 'Skoobin.com', 'http://www.skoobin.com', 'skoobin-thumb-color.png', 'kohana'),
(2, 'VersionUp.co', 'http://www.versionup.co', 'version-up-thumb-color.png', 'kohana'),
(3, 'Engravedbricks.com Campaigns', 'http://www.engravedbricks.com/demo', 'engraved-bricks-thumb-color.gif', 'kohana'),
(4, 'Champion Power Equipment', 'http://www.championpowerequipment.com', 'champion-power-thumb-color.png', 'wordpress'),
(5, 'Exeter Chamber of Commerce', 'http://www.exeterchamber.com', 'exeter-chamber-thumb-color.png', 'drupal'),
(6, 'ABC Bookkeeping and Tax', 'http://www.abcbookkeepingandtax.com', 'abc-bookkeeping-thumb-color.png', 'drupal'),
(7, 'Armona Union Academy', 'http://www.auaweb.com', 'armon-thumb-color.png', 'wordpress'),
(8, 'Cary Seminary', 'http://www.caryseminary.org', 'cary-seminary-thumb-color.png', 'wordpress'),
(9, 'Cemco Steel', 'http://www.cemcosteel.com', 'cemco-thumb-color.png', 'drupal'),
(10, 'Crowd Hydrology', 'http://crowdhydrology.geology.buffalo.edu', 'crowdhydro-thumb-color.png', 'kohana wordpress'),
(11, 'Earthwise Bags', 'http://www.earthwisebags.com', 'earthwise-bags-thumb-color.png', 'wordpress'),
(12, 'Encounter Books', 'http://www.encounterbooks.com', 'encounter-books-thumb-color.png', 'wordpress'),
(13, 'Hapy Bear Dentistry', 'http://www.hapybear.com', 'hapy-bear-thumb-color.png', 'wordpress'),
(14, 'HCC Porterville', 'http://www.hccporterville.org', 'hcc-thumb-color.png', 'drupal'),
(15, 'ICF West', 'http://www.icfwest.com', 'icf-west-thumb-color.png', 'drupal'),
(16, 'Exeter Kiwanis Club', 'http://www.exeterkiwanis.org', 'exeter-kiwanis-thumb-color.png', 'drupal'),
(17, 'Nielsen Insurance Services', 'http://www.nielseninsurance.net', 'nielsen-insurance-thumb-color.png', 'wordpress'),
(18, 'PCPEF', 'http://www.pvpef.org', 'pef-thumb-color.png', 'wordpress'),
(19, 'Go Commercial', 'http://www.gocommercialproducts.com', 'go-commercial-thumb-color.png', 'wordpress'),
(20, 'RPS Environmental', 'http://www.rpsenvironmental.com', 'rps-environmental-thumb-color.png', 'responsive wordpress'),
(21, 'Mass Big Data', 'http://www.massbigdata.org', 'mass-big-data-thumb-color.png', 'responsive'),
(22, 'F&L Construction', 'http://www.flconst.org', 'fl-construction-thumb-color.png', 'responsive wordpress');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
