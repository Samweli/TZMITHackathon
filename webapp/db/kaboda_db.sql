-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Jul 2013 um 21:53
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
  `Location` varchar(50) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Date_time` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Daten für Tabelle `friends`
--

INSERT INTO `friends` (`ID`, `Name`, `Mobile`, `Email`, `Image`, `Location`, `Subject`, `Description`, `Date_time`, `Status`) VALUES
(43, 'Deogratius', '+255652403917', 'deuxd91@gmail.com', '../bongoGlass/images/kibaka kachomwa moto.jpg', 'Mabibo Hostel', 'Sakata la Nyama', 'All Images Contents are suppose to be combined with Descriptions to allow Users to be to read Contents. Nude Contents are strictly forbidden unless it has to be shown to the Society to help some Group of People. Fill up the Form to below to upload those ContentsAll Images Contents are suppose to be combined with Descriptions to allow Users to be to read Contents. Nude Contents are strictly forbidden unless it has to be shown to the Society to help some Group of People. Fill up the Form to below to upload those ContentsAll Images Contents are suppose to be combined with Descriptions to allow Users to be to read Contents. Nude Contents are strictly forbidden unless it has to be shown to the Society to help some Group of People. Fill up the Form to below ', '14 07 2013 18:58:07', 'Not Active'),
(44, 'Deogratius', '+255652403917', 'deuxd91@gmail.com', '../bongoGlass/images/kulala bungeni.jpg', 'Mabibo Hostel', 'Wabunge Kulala Bunge', 'All Images Contents are suppose to be combined with Descriptions to allow Users to be to read Contents. Nude Contents are strictly forbidden unless it has to be shown to the Society to help some Group of People. Fill up the Form to below to upload those Contents', '14 07 2013 19:59:33', 'Not Active'),
(45, 'Boniventure', '+255652403917', 'deuxd91@gmail.com', '../bongoGlass/images/polisi akichukua rushwa.jpg', 'Mabibo Hostel', 'Mafuta Chumbani', 'All Images Contents are suppose to be combined with Descriptions to allow Users to be to read Contents. Nude Contents are strictly forbidden unless it has to be shown to the Society to help some Group of People. Fill up the Form to below to upload those Contents', '14 07 2013 20:00:39', 'Not Active'),
(46, 'Deogratius', '+255652403917', 'deuxd91@gmail.com', '../bongoGlass/images/cartoon about bribe.jpg', 'Bungeni Dodoma', 'Mafuta Chumbani', 'All Images Contents are suppose to be combined with Descriptions to allow Users to be to read Contents. Nude Contents are strictly forbidden unless it has to be shown to the Society to help some Group of People. Fill up the Form to below to upload those Contents', '14 07 2013 21:06:45', 'Not Active'),
(47, 'Deogratius', '+255652403917', 'deuxd91@gmail.com', '../bongoGlass/images/kukojoa team.jpg', 'Bungeni Dodoma', 'Tabia Mbaya', 'All Images Contents are suppose to be combined with Descriptions to allow Users to be to read Contents. Nude Contents are strictly forbidden unless it has to be shown to the Society to help some Group of People. Fill up the Form to below to upload those Contents', '14 07 2013 21:07:49', 'Not Active'),
(48, 'Deogratius', '+255652403917', 'deuxd91@gmail.com', '../bongoGlass/images/1010519_583205335062905_82860', 'Mabibo Hostel', 'Mafuta Chumbani', 'All Images Contents are suppose to be combined with Descriptions to allow Users to be to read Contents. Nude Contents are strictly forbidden unless it has to be shown to the Society to help some Group of People. Fill up the Form to below to upload those ContentsAll Images Contents are suppose to be combined with Descriptions to allow Users to be to read Contents. Nude Contents are strictly forbidden unless it has to be shown to the Society to help some Group of People. Fill up the Form to below to upload those Contents', '14 07 2013 21:39:24', 'Not Active');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users_tbl`
--

CREATE TABLE IF NOT EXISTS `users_tbl` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Daten für Tabelle `users_tbl`
--

INSERT INTO `users_tbl` (`user_id`, `username`, `password`, `Email`, `level`, `status`) VALUES
(25, 'honest', '1234', 'deuxd91@gmail.com', 'Admin', 'Enabled'),
(26, 'honest', '1234', 'deuxd91@gmail.com', 'Admin', 'Enabled'),
(27, 'dilip', '1234', 'deuxd91@gmail.com', 'Admin', 'Enabled'),
(28, 'dcube2d', '1234', 'deuxd91@gmail.com', 'Admin', 'Enabled'),
(29, 'nicky', '1234', 'deuxd91@gmail.com', 'Admin', 'Enabled'),
(30, 'deo', '1234', 'deuxd91@gmail.com', 'Admin', 'Enabled');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
