-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 02, 2014 at 08:01 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ihm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `nom` varchar(255) NOT NULL,
  `salle` varchar(30) NOT NULL,
  `horaire` varchar(255) NOT NULL,
  `jour` mediumint(5) NOT NULL,
  PRIMARY KEY (`nom`,`salle`,`horaire`,`jour`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`nom`, `salle`, `horaire`, `jour`) VALUES
('Anglais', 'D207', '11h15-12h45', 3),
('IHM', 'D200', '15h30-17h', 1),
('Probabilietes', 'D109', '15h30-17h', 3),
('SEPC', 'D109', '8h15-11h15', 3);
