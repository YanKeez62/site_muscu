-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2024 at 01:40 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b2dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `historique`
--

CREATE TABLE `historique` (
  `Date` char(11) DEFAULT NULL,
  `Exercice` char(32) DEFAULT NULL,
  `Poids` int(11) DEFAULT NULL,
  `Repetitions` int(11) DEFAULT NULL,
  `Commentaire` char(240) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `historique`
--

INSERT INTO `historique` (`Date`, `Exercice`, `Poids`, `Repetitions`, `Commentaire`) VALUES
('2006-06-06', 'oui', 5, 5, 'ouioui'),
('2005-08-08', 'non', 5, 5, 'nonon'),
('2222-02-22', 'aaaaaaa', 8, 8, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab'),
('1111-11-11', '11', 111, 1111, '111111'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222'),
('2222-02-22', '222', 2222, 2222, '2222');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `password`, `image`) VALUES
(1, 'Maxime', 'MDP123', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
