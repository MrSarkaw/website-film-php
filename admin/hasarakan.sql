-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2019 at 06:37 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hasarakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `permission_level` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `first_name` (`first_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `first_name`, `password`, `permission_level`) VALUES
(1, 'sarkaw', 'sarkaw', '123456789', 'manger');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `name_film` varchar(200) NOT NULL,
  `image_film` varchar(200) NOT NULL,
  `time` time NOT NULL,
  `actors` varchar(200) NOT NULL,
  `year` date NOT NULL,
  `description` varchar(2000) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`name_film`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `flim_de`
--

DROP TABLE IF EXISTS `flim_de`;
CREATE TABLE IF NOT EXISTS `flim_de` (
  `name_film` varchar(200) NOT NULL,
  `online_v` varchar(200) NOT NULL,
  `download` varchar(300) NOT NULL,
  `trailer` varchar(200) NOT NULL,
  UNIQUE KEY `name_film` (`name_film`),
  KEY `id_film` (`name_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `s`
--

DROP TABLE IF EXISTS `s`;
CREATE TABLE IF NOT EXISTS `s` (
  `id_user` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `s`
--

INSERT INTO `s` (`id_user`, `name`) VALUES
(1, 'insidious');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `admin` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `flim_de`
--
ALTER TABLE `flim_de`
  ADD CONSTRAINT `flim_de_ibfk_1` FOREIGN KEY (`name_film`) REFERENCES `film` (`name_film`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
