-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2018 at 03:21 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Videogames`
--

-- --------------------------------------------------------

--
-- Table structure for table `videogame`
--

CREATE TABLE IF NOT EXISTS `videogame` (
  `game_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `game` varchar(128) DEFAULT NULL,
  `genre` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `videogame`
--

INSERT INTO `videogame` (`game_id`, `game`, `genre`) VALUES
(14, 'Hollow Knight', 'Platformer'),
(15, 'Dark Souls 3', 'RPG'),
(16, 'osu!', 'Rhythmic'),
(18, 'Call of Duty', 'FPS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
