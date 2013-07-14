-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 04. Jul 2013 um 17:49
-- Server Version: 5.5.27
-- PHP-Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `kaboda_db`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Date_time` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Daten für Tabelle `friends`
--

INSERT INTO `friends` (`ID`, `Name`, `Mobile`, `Email`, `Image`, `Date_time`) VALUES
(6, 'Deogratius', '23131231', 'deuxd91@gmail.com', 'friends/f 005.jpg', '04 07 2013 17:23:12'),
(7, 'Boniventure', '+255652403917', 'deuxd91@gmail.com', 'friends/f 007.jpg', '04 07 2013 17:35:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
