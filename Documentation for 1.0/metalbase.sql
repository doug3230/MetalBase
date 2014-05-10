-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2014 at 10:42 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `metalbasecopy`
--
CREATE DATABASE IF NOT EXISTS `metalbase` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `metalbase`;

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(63) COLLATE utf8_bin NOT NULL,
  `year` int(11) NOT NULL,
  `countryId` int(11) NOT NULL,
  `bandId` int(11) DEFAULT NULL,
  `description` varchar(511) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `band`
--

CREATE TABLE IF NOT EXISTS `band` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(63) COLLATE utf8_bin NOT NULL,
  `year` int(11) NOT NULL,
  `countryId` int(11) NOT NULL,
  `description` varchar(511) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(63) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(63) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sourceid` int(11) NOT NULL,
  `url` varchar(63) COLLATE utf8_bin NOT NULL,
  `description` varchar(63) COLLATE utf8_bin NOT NULL,
  `sourcetype` enum('band','album','song') COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `lookupgenre`
--

CREATE TABLE IF NOT EXISTS `lookupgenre` (
  `sourceId` int(11) NOT NULL,
  `genreId` int(11) NOT NULL,
  `sourcetype` enum('band','album','song') COLLATE utf8_bin NOT NULL,
  UNIQUE KEY `sourceId` (`sourceId`,`genreId`,`sourcetype`),
  UNIQUE KEY `sourceId_2` (`sourceId`,`genreId`,`sourcetype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE IF NOT EXISTS `song` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(63) COLLATE utf8_bin NOT NULL,
  `year` int(11) NOT NULL,
  `countryId` int(11) NOT NULL,
  `bandId` int(11) DEFAULT NULL,
  `albumId` int(11) DEFAULT NULL,
  `description` varchar(511) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;
