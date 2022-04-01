-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2022 at 10:33 AM
-- Server version: 8.0.26
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo_toets_herkansing`
--

-- --------------------------------------------------------

--
-- Table structure for table `burrito`
--

DROP TABLE IF EXISTS `burrito`;
CREATE TABLE IF NOT EXISTS `burrito` (
  `id` int NOT NULL AUTO_INCREMENT,
  `size` enum('20','25','30') NOT NULL,
  `sauce` enum('salsacrudo','salsaverde','salsaroja','creme-friache') NOT NULL,
  `bean` enum('Kidney Bonen','Zwarte Bonen','Bruine Bonen','Geen') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rice` enum('Bruine Rijst','Zwarte Rijst','Witte Rijst','Geen') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `burrito`
--

INSERT INTO `burrito` (`id`, `size`, `sauce`, `bean`, `rice`) VALUES
(1, '20', 'salsacrudo', 'Bruine Bonen', 'Bruine Rijst');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
